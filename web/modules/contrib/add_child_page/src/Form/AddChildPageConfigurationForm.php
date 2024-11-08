<?php

namespace Drupal\add_child_page\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityDisplayRepositoryInterface;
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a settings page for Add Child Page module.
 */
class AddChildPageConfigurationForm extends ConfigFormBase {

  /**
   * The entity type Bundle Information.
   *
   * @var \Drupal\Core\Entity\EntityTypeBundleInfoInterface
   */
  protected $entityTypeBundleInfo;

  /**
   * The entity display Repository.
   *
   * @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface
   */
  protected $entityDisplayRepository;

  /**
   * Constructs a ConfigurationForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Entity\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity type bundle information.
   * @param \Drupal\Core\Entity\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display Repository.
   */
  public function __construct(ConfigFactoryInterface $config_factory, EntityTypeBundleInfoInterface $entity_type_bundle_info, EntityDisplayRepositoryInterface $entity_display_repository) {
    parent::__construct($config_factory);
    $this->entityTypeBundleInfo = $entity_type_bundle_info;
    $this->entityDisplayRepository = $entity_display_repository;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('entity_type.bundle.info'),
      $container->get('entity_display.repository')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return ['add_child_page.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'add_child_page_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('add_child_page.settings');

    $entity_bundles = $this->entityTypeBundleInfo->getBundleInfo('node');
    $enabled_content_types = [];

    if (!$config->isNew()) {
      $enabled_content_types = $config->getRawData()['node_types'];
    }

    $content_types = [];
    foreach ($entity_bundles as $bundle => $bundle_info) {
      $content_types[$bundle] = $bundle_info['label'];
    }

    $form = [];
    $form['options'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Configure Content Type'),
    ];

    $form['options']['checkboxes'] = [
      '#required' => TRUE,
      '#title' => $this->t('Select the content type that will have the Add Child Page functionality:'),
      '#type' => 'checkboxes',
      '#options' => $content_types,
      '#default_value' => (!empty($enabled_content_types) ? $enabled_content_types : ['']),
    ];

    $form['default'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Select default content type for child page.'),
      '#default_value' => $config->get('default'),
      '#description' => $this->t("If there's no default selected,
        the child page will be the same content type as the parent."),
    ];

    $states = [
      'visible' => [':input[name=default]' => ['checked' => TRUE]],
    ];

    $form['default_set'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Select default content type:'),
      '#states' => $states,
    ];

    $form['default_set']['default_content'] = [
      '#type' => 'radios',
      '#options' => $content_types,
      '#default_value' => $config->get('default_content'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $value = $form_state->getValue('checkboxes');
    $default = $form_state->getValue('default');
    $default_content = $form_state->getValue('default_content');

    // Save configuration.
    if (isset($value) && !is_null($value)) {
      $node_types = array_filter($value);
      $this->config('add_child_page.settings')
        ->set('node_types', $node_types)
        ->save();
    }
    if ($default && isset($default_content) && !is_null($default_content)) {
      $this->config('add_child_page.settings')
        ->set('default', $default)
        ->set('default_content', $default_content)
        ->save();
    }

    if (!$default) {
      $this->config('add_child_page.settings')
        ->set('default', $default)
        ->save();
    }

    return parent::submitForm($form, $form_state);
  }

}
