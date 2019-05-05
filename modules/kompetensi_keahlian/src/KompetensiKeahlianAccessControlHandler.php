<?php

namespace Drupal\kompetensi_keahlian;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Kompetensi keahlian entity.
 *
 * @see \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlian.
 */
class KompetensiKeahlianAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlianInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished kompetensi keahlian entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published kompetensi keahlian entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit kompetensi keahlian entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete kompetensi keahlian entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add kompetensi keahlian entities');
  }

}
