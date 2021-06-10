<?php

namespace Drupal\custom_module\Controller;

class CustomController {
  
  public function welcome() {
    return array(
      '#markup' => 'Welcome to our website.'
    );
  }
}
?>
