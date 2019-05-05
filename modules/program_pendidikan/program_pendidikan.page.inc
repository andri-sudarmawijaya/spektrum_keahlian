<?php

/**
 * @file
 * Contains program_pendidikan.page.inc.
 *
 * Page callback for Program pendidikan entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Program pendidikan templates.
 *
 * Default template: program_pendidikan.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_program_pendidikan(array &$variables) {
  // Fetch ProgramPendidikan Entity Object.
  $program_pendidikan = $variables['elements']['#program_pendidikan'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
