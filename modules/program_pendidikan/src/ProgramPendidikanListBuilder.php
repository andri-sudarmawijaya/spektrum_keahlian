<?php

namespace Drupal\program_pendidikan;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Program pendidikan entities.
 *
 * @ingroup program_pendidikan
 */
class ProgramPendidikanListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Program pendidikan');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\program_pendidikan\Entity\ProgramPendidikan */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.program_pendidikan.canonical',
      ['program_pendidikan' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
