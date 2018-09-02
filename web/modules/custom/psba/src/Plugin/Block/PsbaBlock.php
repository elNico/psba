<?php

namespace Drupal\psba\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a PSBA Block.
 *
 * @Block(
 *   id = "psba_block",
 *   admin_label = @Translation("PSBA block"),
 *   category = @Translation("PSBA"),
 * )
 */
class PsbaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Custom content.'),
    );
  }

}