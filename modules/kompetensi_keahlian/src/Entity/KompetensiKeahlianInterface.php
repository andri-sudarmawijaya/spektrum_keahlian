<?php

namespace Drupal\kompetensi_keahlian\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Kompetensi keahlian entities.
 *
 * @ingroup kompetensi_keahlian
 */
interface KompetensiKeahlianInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Kompetensi keahlian name.
   *
   * @return string
   *   Name of the Kompetensi keahlian.
   */
  public function getName();

  /**
   * Sets the Kompetensi keahlian name.
   *
   * @param string $name
   *   The Kompetensi keahlian name.
   *
   * @return \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlianInterface
   *   The called Kompetensi keahlian entity.
   */
  public function setName($name);

  /**
   * Gets the Kompetensi keahlian creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Kompetensi keahlian.
   */
  public function getCreatedTime();

  /**
   * Sets the Kompetensi keahlian creation timestamp.
   *
   * @param int $timestamp
   *   The Kompetensi keahlian creation timestamp.
   *
   * @return \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlianInterface
   *   The called Kompetensi keahlian entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Kompetensi keahlian published status indicator.
   *
   * Unpublished Kompetensi keahlian are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Kompetensi keahlian is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Kompetensi keahlian.
   *
   * @param bool $published
   *   TRUE to set this Kompetensi keahlian to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\kompetensi_keahlian\Entity\KompetensiKeahlianInterface
   *   The called Kompetensi keahlian entity.
   */
  public function setPublished($published);

}
