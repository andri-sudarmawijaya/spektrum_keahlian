<?php

namespace Drupal\program_pendidikan\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Program pendidikan entities.
 *
 * @ingroup program_pendidikan
 */
interface ProgramPendidikanInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Program pendidikan name.
   *
   * @return string
   *   Name of the Program pendidikan.
   */
  public function getName();

  /**
   * Sets the Program pendidikan name.
   *
   * @param string $name
   *   The Program pendidikan name.
   *
   * @return \Drupal\program_pendidikan\Entity\ProgramPendidikanInterface
   *   The called Program pendidikan entity.
   */
  public function setName($name);

  /**
   * Gets the Program pendidikan creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Program pendidikan.
   */
  public function getCreatedTime();

  /**
   * Sets the Program pendidikan creation timestamp.
   *
   * @param int $timestamp
   *   The Program pendidikan creation timestamp.
   *
   * @return \Drupal\program_pendidikan\Entity\ProgramPendidikanInterface
   *   The called Program pendidikan entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Program pendidikan published status indicator.
   *
   * Unpublished Program pendidikan are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Program pendidikan is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Program pendidikan.
   *
   * @param bool $published
   *   TRUE to set this Program pendidikan to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\program_pendidikan\Entity\ProgramPendidikanInterface
   *   The called Program pendidikan entity.
   */
  public function setPublished($published);

}
