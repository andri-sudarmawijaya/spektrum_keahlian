<?php

namespace Drupal\bidang_keahlian\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Bidang keahlian entities.
 *
 * @ingroup bidang_keahlian
 */
interface BidangKeahlianInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Bidang keahlian name.
   *
   * @return string
   *   Name of the Bidang keahlian.
   */
  public function getName();

  /**
   * Sets the Bidang keahlian name.
   *
   * @param string $name
   *   The Bidang keahlian name.
   *
   * @return \Drupal\bidang_keahlian\Entity\BidangKeahlianInterface
   *   The called Bidang keahlian entity.
   */
  public function setName($name);

  /**
   * Gets the Bidang keahlian creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Bidang keahlian.
   */
  public function getCreatedTime();

  /**
   * Sets the Bidang keahlian creation timestamp.
   *
   * @param int $timestamp
   *   The Bidang keahlian creation timestamp.
   *
   * @return \Drupal\bidang_keahlian\Entity\BidangKeahlianInterface
   *   The called Bidang keahlian entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Bidang keahlian published status indicator.
   *
   * Unpublished Bidang keahlian are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Bidang keahlian is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Bidang keahlian.
   *
   * @param bool $published
   *   TRUE to set this Bidang keahlian to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\bidang_keahlian\Entity\BidangKeahlianInterface
   *   The called Bidang keahlian entity.
   */
  public function setPublished($published);

}
