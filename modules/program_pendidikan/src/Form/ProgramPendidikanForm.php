<?php

namespace Drupal\program_pendidikan\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Program pendidikan edit forms.
 *
 * @ingroup program_pendidikan
 */
class ProgramPendidikanForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\program_pendidikan\Entity\ProgramPendidikan */
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
        drupal_set_message($this->t('Created the %label Program pendidikan.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Program pendidikan.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.program_pendidikan.canonical', ['program_pendidikan' => $entity->id()]);
  }

}
