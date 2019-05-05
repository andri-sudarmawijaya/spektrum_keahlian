<?php

namespace Drupal\bidang_keahlian;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Bidang keahlian entity.
 *
 * @see \Drupal\bidang_keahlian\Entity\BidangKeahlian.
 */
class BidangKeahlianAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\bidang_keahlian\Entity\BidangKeahlianInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished bidang keahlian entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published bidang keahlian entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit bidang keahlian entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete bidang keahlian entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add bidang keahlian entities');
  }

}
