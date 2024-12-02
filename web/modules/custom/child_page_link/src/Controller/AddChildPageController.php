<?php

namespace Drupal\child_page_link\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;

class AddChildPageController extends ControllerBase {
  public function addChildPageForm(NodeInterface $node) {
    $config = \Drupal::config('child_page_link.settings')->get('types.' . $node->getType());

    // Check for both 'enabled' configuration and whether any 'siblings' are defined
    if (!empty($config['enabled']) && !empty($config['siblings'])) {
      return $this->formBuilder()->getForm('Drupal\child_page_link\Form\AddChildPageForm', $node);
    }

    // Fallback if conditions are not met
    $this->messenger()->addMessage($this->t('The configuration for adding child pages is not set or disabled for this content type.'), 'warning');
    return $this->redirect('<front>');
  }
}
