<?php

namespace Drupal\kompetensi_keahlian\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Kompetensi keahlian edit forms.
 *
 * @ingroup kompetensi_keahlian
 */
class KompetensiKeahlianForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlian */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

	if(!$entity->get('id')->value){
	  $form['code2'] = [
        '#title' => 'Code',
        '#type' => 'number',
        '#default_value' => '0',
		'#weight' => '-10',
		'#required' => TRUE,
      ];
	}

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\wilayah_indonesia_province\Entity\Province */		
	parent::validateForm($form, $form_state);

    $entity = $this->entity;
	
	if(is_null($entity->id())){
	  $query = \Drupal::entityQuery('kompetensi_keahlian')
			->range('0', '1');
	  $or = $query->orConditionGroup();
	  $or->condition('id', $form_state->getValue('code2'));
	  $or->condition('name', $form_state->getValue('name')[0]['value']);
	  $query->condition($or);
	  $id = $query->execute();
	  if(!empty($id)){
	    $form_state->setErrorByName('code2',"The code or name field already exist");
	  }
	}else{
	  $id = \Drupal::entityQuery('kompetensi_keahlian')
	        ->condition('name', $form_state->getValue('name')[0]['value'])
			->condition('id', $entity->id(), '!=')
			->range('0', '1')
			->execute();
	  if(!empty($id)){
	    $form_state->setErrorByName('name',t("The kompetensi keahlian with name @name already exist", array('@name' => $form_state->getValue('name')[0]['value'])));
	  }
	}
  }
  
  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

	if(is_null($entity->id())){
		$entity->set('id', $form_state->getValue('code2'));
	}
	
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Kompetensi keahlian.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Kompetensi keahlian.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.kompetensi_keahlian.canonical', ['kompetensi_keahlian' => $entity->id()]);
  }

}
