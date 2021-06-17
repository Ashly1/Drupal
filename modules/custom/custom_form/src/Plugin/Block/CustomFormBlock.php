<?php

namespace Drupal\custom_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\core\Form\FormInterface;

/**
 * Provides a 'custom' block.
 *
 * @Block(
 *   id = "CustomFormBlock",
 *   admin_label = @Translation("Custom Form example"),
 * )
 */  
class CustomFormBlock extends BlockBase {
  /**
 * {@inheritdoc}
 */
  public function build() {

  	$form = \Drupal::formBuilder()->getForm('Drupal\custom_form\Form\CustomForm');

  return $form;
  }
}