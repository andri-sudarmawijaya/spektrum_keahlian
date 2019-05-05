<?php

namespace Drupal\kompetensi_keahlian\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Kompetensi keahlian entities.
 */
class KompetensiKeahlianViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
