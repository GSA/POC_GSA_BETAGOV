<?php

namespace Drupal\child_page_link\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\NodeInterface;

class AddChildPageForm extends FormBase {
  public function getFormId() {
    return 'add_child_page_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state, NodeInterface $node = NULL) {
    $config = \Drupal::config('child_page_link.settings')->get('types.' . $node->getType());
    $options = array_combine($config['siblings'], $config['siblings']);  // Assuming siblings are stored as simple array

    $form['child_types'] = [
      '#type' => 'select',
      '#title' => $this->t('Select child content type'),
      '#options' => $options,
      '#empty_option' => $this->t('- Select -'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Go to add page'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $child_type = $form_state->getValue('child_types');
    $form_state->setRedirect('node.add', ['node_type' => $child_type]);
  }
}
