<?php

namespace Drupal\add_child_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Menu\MenuLinkManager;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Adds parameter to add node route.
 */
class AddChildPage extends ControllerBase {

  /**
   * Provides a config service for Fanshawe Imports.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Menu Link Manager service.
   *
   * @var Drupal\Core\Menu\MenuLinkManager
   */
  protected $menuLink;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(MenuLinkManager $menuLink, EntityTypeManagerInterface $entityTypeManager, ConfigFactoryInterface $configFactory) {
    $this->menuLink = $menuLink;
    $this->entityTypeManager = $entityTypeManager;
    $this->configFactory = $configFactory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $menuLink = $container->get('plugin.manager.menu.link');
    $entityTypeManager = $container->get('entity_type.manager');
    $configFactory = $container->get('config.factory');
    return new static($menuLink, $entityTypeManager, $configFactory);
  }

  /**
   * Redirect to 'Node Add Form' with query parameter for menu.
   */
  public function manage(NodeInterface $node) {

    if ($node) {
      $menus = $this->menuLink->loadLinksByRoute('entity.node.canonical', ['node' => $node->id()]);
      $menu_name = '';

      if (!empty($menus)) {
        foreach ($menus as $menu) {
          // If it's on more than one menu it will take the first link it finds,
          // and will add a warning to the top of the page.
          if (empty($menu_name)) {
            $definitions = $menu->getPluginDefinition();
            $menu_name = $definitions['menu_name'];
            $plid = $definitions['metadata']['entity_id'];
          }
          else {
            $this
              ->messenger()
              ->addWarning(
                $this->t('The parent node you are trying to add a child page to is on more than one menu.
                This will add a child to the first instance of the menu link it finds,
                so please confirm it’s in the correct spot in the menu before saving.')
              );
          }
        }

        if (isset($plid) && isset($menu_name)) {
          $default = $this->configFactory->get('add_child_page.settings')->get('default');
          $default_content = $this->configFactory->get('add_child_page.settings')->get('default_content');
          $type = ($default ? $default_content : $node->bundle());
          return $this->redirect(
            'node.add',
            ['node_type' => $type],
            [
              'query' => [
                'plid' => $plid,
                'menu' => $menu_name,
              ],
            ]
          );
        }
        else {
          $this->messenger()->addError($this->t('Cannot add child page.'));
          return [];
        }
      }
      else {
        $this->messenger()->addError($this->t('Cannot add child page. Content is not assigned to any menu.'));
        return [];
      }
    }
    else {
      $this->messenger()->addError($this->t('Cannot add child page for this content type.'));
      return [];
    }
  }

  /**
   * Checks if node is on configuration list.
   */
  public function access($node) {

    $entity = $this->entityTypeManager->getStorage('node')->load($node);
    $type = $entity->bundle();
    $bundle = $this->configFactory->get('add_child_page.settings')->get('node_types');
    if ($bundle) {
      return AccessResult::allowedIf(in_array($type, $bundle));
    }
    else {
      return AccessResult::forbidden();
    }
  }

}
