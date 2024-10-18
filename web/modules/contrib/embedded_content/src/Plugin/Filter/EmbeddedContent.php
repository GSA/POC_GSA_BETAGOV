<?php

namespace Drupal\embedded_content\Plugin\Filter;

use Drupal\Component\Serialization\Json;
use Drupal\Component\Utility\Html;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Render\BubbleableMetadata;
use Drupal\Core\Render\RenderContext;
use Drupal\Core\Render\Renderer;
use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\embedded_content\EmbeddedContentPluginManager;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a text filter that turns < embedded-content > tags into markup.
 *
 * @Filter(
 *   id = "embedded_content",
 *   title = @Translation("Embedded content"),
 *   description = @Translation("Embeds themed HTML generated by plugins."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 *   weight = 100,
 * )
 *
 * @internal
 */
class EmbeddedContent extends FilterBase implements ContainerFactoryPluginInterface, TrustedCallbackInterface {

  /**
   * The plugin manager for embedded content.
   *
   * @var \Drupal\embedded_content\EmbeddedContentPluginManager
   */
  protected $embeddedContentPluginManager;

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\Renderer
   */
  protected $renderer;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, Renderer $renderer, EmbeddedContentPluginManager $embedded_content_plugin_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->embeddedContentPluginManager = $embedded_content_plugin_manager;
    $this->renderer = $renderer;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
          $configuration,
          $plugin_id,
          $plugin_definition,
          $container->get('renderer'),
          $container->get('plugin.manager.embedded_content')
      );
  }

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $document = Html::load($text);
    $xpath = new \DOMXPath($document);
    $bubbleable = new BubbleableMetadata();
    foreach ($xpath->query('.//embedded-content|.//embedded-content-inline') as $delta => $node) {
      $plugin_config = Json::decode($node->getAttribute('data-plugin-config'));
      $plugin_id = $node->getAttribute('data-plugin-id');
      if (!$plugin_id) {
        return;
      }
      try {
        /**
         * @var \Drupal\embedded_content\EmbeddedContentInterface $instance
         */
        $instance = $this->embeddedContentPluginManager->createInstance($plugin_id, $plugin_config ?? []);
        $bubbleable->addAttachments($instance->getAttachments());
        $replacement = $instance->build();
        $context = new RenderContext();
        $render = $this->renderer->executeInRenderContext($context, fn() => $this->renderer->render($replacement));
        if (!$context->isEmpty()) {
          $bubbleable = $bubbleable->merge($context->pop());
        }
      }
      catch (\Exception $e) {
        $render = (new TranslatableMarkup(
              'There is an issue with the embedded content plugin %plugin_id. Error: %error', [
                '%plugin_id' => $plugin_id,
                '%error' => $e->getMessage(),
              ]
          ))->render();
      }
      $fragment = $document->createDocumentFragment();
      $fragment->appendXML($render);
      $node->parentNode->replaceChild($fragment, $node);
    }
    $result = new FilterProcessResult(Html::serialize($document));
    $result->addCacheableDependency($bubbleable);
    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks() {
    return [];
  }

}
