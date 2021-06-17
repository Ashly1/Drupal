<?php

namespace Drupal\sample_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\core\Form\FormInterface;

/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "purchase_block",
 *   admin_label = @Translation("Sample Test block"),
 *   category = @Translation("Custom purchace block example")
 * )
 */
class SampleTestBlock extends BlockBase {
  /**
 * {@inheritdoc}
 */
  public function build() {
  	$form = \Drupal::formBuilder()->getForm('\Drupal\sample_test\Form\CustomForm');
    return $form;
  }
}