<?php

namespace Drupal\kompetensi_keahlian;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Kompetensi keahlian entities.
 *
 * @ingroup kompetensi_keahlian
 */
class KompetensiKeahlianListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Kompetensi keahlian');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlian */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.kompetensi_keahlian.canonical',
      ['kompetensi_keahlian' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
