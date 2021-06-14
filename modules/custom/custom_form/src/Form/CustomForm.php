<?php

namespace Drupal\custom_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\url;
class CustomForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() 
  {
    return 'custom_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) 
  {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name:'),
      );
    $form['mail'] = array(
      '#type' => 'email',
      '#title' => $this->t('Email ID:'),
      );
    $form['number'] = array (
      '#type' => 'tel',
      '#title' => $this->t('MobileNo:'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }
  public function validateForm(array &$form, FormStateInterface $form_state) {

      if (strlen($form_state->getValue('number')) < 10) {
        $form_state->setErrorByName('number', $this->t('Mobile number is too short.'));
      }

  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
   // drupal_set_message($this->t('@name ,Your application is being submitted!', array('@name' => $form_state->getValue('name'))));
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  }
}