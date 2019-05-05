<?php

namespace Drupal\bidang_keahlian\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Bidang keahlian edit forms.
 *
 * @ingroup bidang_keahlian
 */
class BidangKeahlianForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\bidang_keahlian\Entity\BidangKeahlian */
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
        drupal_set_message($this->t('Created the %label Bidang keahlian.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Bidang keahlian.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.bidang_keahlian.canonical', ['bidang_keahlian' => $entity->id()]);
  }

}
