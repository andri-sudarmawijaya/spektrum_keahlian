<?php

/**
 * @file
 * Contains program_keahlian.page.inc.
 *
 * Page callback for Program keahlian entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Program keahlian templates.
 *
 * Default template: program_keahlian.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_program_keahlian(array &$variables) {
  // Fetch ProgramKeahlian Entity Object.
  $program_keahlian = $variables['elements']['#program_keahlian'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
