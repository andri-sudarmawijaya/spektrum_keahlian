<?php

namespace Drupal\program_pendidikan;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Program pendidikan entity.
 *
 * @see \Drupal\program_pendidikan\Entity\ProgramPendidikan.
 */
class ProgramPendidikanAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\program_pendidikan\Entity\ProgramPendidikanInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished program pendidikan entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published program pendidikan entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit program pendidikan entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete program pendidikan entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add program pendidikan entities');
  }

}
