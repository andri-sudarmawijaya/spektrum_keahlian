<?php

namespace Drupal\program_keahlian;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Program keahlian entities.
 *
 * @ingroup program_keahlian
 */
class ProgramKeahlianListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Program keahlian');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\program_keahlian\Entity\ProgramKeahlian */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.program_keahlian.canonical',
      ['program_keahlian' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
