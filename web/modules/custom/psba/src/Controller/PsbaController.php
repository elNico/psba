<?php
/**
 * Created by PhpStorm.
 * User: nic
 * Date: 1/09/2018
 * Time: 7:04 PM
 */

namespace Drupal\psba\Controller;

use Drupal\Core\Controller\ControllerBase;


class PsbaController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}