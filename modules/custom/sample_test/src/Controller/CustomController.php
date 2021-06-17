<?php

namespace Drupal\sample_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomController extends ControllerBase {
  
  public function welcome() {
    return array(
      '#markup' => 'Welcome to our website.'
    );
  }
}

