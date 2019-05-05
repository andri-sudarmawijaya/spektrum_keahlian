<?php

namespace Drupal\bidang_keahlian;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Bidang keahlian entities.
 *
 * @ingroup bidang_keahlian
 */
class BidangKeahlianListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Bidang keahlian');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\bidang_keahlian\Entity\BidangKeahlian */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.bidang_keahlian.canonical',
      ['bidang_keahlian' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
