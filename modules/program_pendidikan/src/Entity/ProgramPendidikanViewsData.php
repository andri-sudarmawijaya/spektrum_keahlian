<?php

namespace Drupal\program_pendidikan\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Program pendidikan entities.
 */
class ProgramPendidikanViewsData extends EntityViewsData {

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
