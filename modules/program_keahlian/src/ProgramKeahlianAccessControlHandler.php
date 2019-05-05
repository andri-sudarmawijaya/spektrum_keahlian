<?php

namespace Drupal\program_keahlian;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Program keahlian entity.
 *
 * @see \Drupal\program_keahlian\Entity\ProgramKeahlian.
 */
class ProgramKeahlianAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\program_keahlian\Entity\ProgramKeahlianInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished program keahlian entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published program keahlian entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit program keahlian entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete program keahlian entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add program keahlian entities');
  }

}
