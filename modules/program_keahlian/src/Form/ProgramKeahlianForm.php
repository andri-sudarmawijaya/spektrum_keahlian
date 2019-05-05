<?php

namespace Drupal\program_keahlian\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Program keahlian edit forms.
 *
 * @ingroup program_keahlian
 */
class ProgramKeahlianForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\program_keahlian\Entity\ProgramKeahlian */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Program keahlian.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Program keahlian.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.program_keahlian.canonical', ['program_keahlian' => $entity->id()]);
  }

}
