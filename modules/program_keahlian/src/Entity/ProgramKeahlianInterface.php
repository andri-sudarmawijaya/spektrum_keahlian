<?php

namespace Drupal\program_keahlian\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Program keahlian entities.
 *
 * @ingroup program_keahlian
 */
interface ProgramKeahlianInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Program keahlian name.
   *
   * @return string
   *   Name of the Program keahlian.
   */
  public function getName();

  /**
   * Sets the Program keahlian name.
   *
   * @param string $name
   *   The Program keahlian name.
   *
   * @return \Drupal\program_keahlian\Entity\ProgramKeahlianInterface
   *   The called Program keahlian entity.
   */
  public function setName($name);

  /**
   * Gets the Program keahlian creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Program keahlian.
   */
  public function getCreatedTime();

  /**
   * Sets the Program keahlian creation timestamp.
   *
   * @param int $timestamp
   *   The Program keahlian creation timestamp.
   *
   * @return \Drupal\program_keahlian\Entity\ProgramKeahlianInterface
   *   The called Program keahlian entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Program keahlian published status indicator.
   *
   * Unpublished Program keahlian are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Program keahlian is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Program keahlian.
   *
   * @param bool $published
   *   TRUE to set this Program keahlian to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\program_keahlian\Entity\ProgramKeahlianInterface
   *   The called Program keahlian entity.
   */
  public function setPublished($published);

}
