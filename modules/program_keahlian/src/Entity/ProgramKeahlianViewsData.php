<?php

namespace Drupal\program_keahlian\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Program keahlian entities.
 */
class ProgramKeahlianViewsData extends EntityViewsData {

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
