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
    return array(
      '#markup' => $this->t('Custom content.'),
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

}