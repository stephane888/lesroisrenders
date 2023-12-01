<?php

namespace Drupal\lesroisrenders\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for lesroisrenders routes.
 */
class LesroisdelarenoController extends ControllerBase {
  
  /**
   * Builds the response.
   */
  public function build() {
    $build['content'] = [
      '#theme' => 'lesroisrenders_default_page'
    ];
    
    return $build;
  }
  
}
