<?php
namespace Drupal\child_page_link\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ChildPageLinkSettingsForm extends ConfigFormBase {

  public function getFormId() {
    return 'child_page_link_settings_form';
  }

  protected function getEditableConfigNames() {
    return ['child_page_link.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('child_page_link.settings');
    $node_types = \Drupal\node\Entity\NodeType::loadMultiple();

    $form['types'] = [
      '#tree' => true,
    ];

    foreach ($node_types as $type_id => $type) {
      $type_config = $config->get('types.' . $type_id);

      $form['types'][$type_id] = [
        '#type' => 'details',
        '#title' => $type->label(),
        '#open' => true,
      ];

      $form['types'][$type_id]['enabled'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Enable'),
        '#default_value' => $type_config['enabled'] ?? false,
      ];

      $form['types'][$type_id]['siblings'] = [
        '#type' => 'checkboxes',
        '#title' => $this->t('Allowed child content types'),
        '#options' => array_map(function ($node_type) { return $node_type->label(); }, $node_types),
        '#default_value' => $type_config['siblings'] ?? [],
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $config = $this->config('child_page_link.settings');

    foreach ($values['types'] as $type_id => $type_values) {
      $config->set('types.' . $type_id, [
        'enabled' => !empty($type_values['enabled']),
        'siblings' => array_filter($type_values['siblings']),
      ]);
    }

    $config->save();
    parent::submitForm($form, $form_state);
    $this->messenger()->addMessage($this->t('The configuration options have been saved.'));
  }
}
