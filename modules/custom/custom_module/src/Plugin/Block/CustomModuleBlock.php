<?php

namespace Drupal\custom_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\core\Form\FormInterface;

/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom Module block"),
 *   category = @Translation("Custom block example")
 * )
 */
class CustomModuleBlock extends BlockBase {
  /**
 * {@inheritdoc}
 */
  public function build() {
  	$form = \Drupal::formBuilder()->getForm('\Drupal\custom_module\Form\CustomForm');
    return $form;
  }
}