<?php

namespace Drupal\psba\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a PSBA Block.
 *
 * @Block(
 *   id = "psba_block",
 *   admin_label = @Translation("PSBA block"),
 *   category = @Translation("PSBA"),
 * )
 */
class PsbaBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    if (!empty($config['psba_block_custom'])) {
      $custom_value = $config['psba_block_custom'];
    }
    else {
      $custom_value = $this->t('not set');
    }
    return array(
      '#markup' => $this->t('The custom value is @cv.', array(
        '@cv' => $custom_value,
      )),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['psba_block_custom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Custom value'),
      '#description' => $this->t('An example of saving custom configuration values.'),
      '#default_value' => isset($config['psba_block_custom']) ? $config['psba_block_custom'] : '',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['psba_block_custom'] = $values['psba_block_custom'];
  }

}