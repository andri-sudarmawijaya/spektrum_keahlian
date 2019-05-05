<?php

/**
 * @file
 * Contains kompetensi_keahlian.page.inc.
 *
 * Page callback for Kompetensi keahlian entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Kompetensi keahlian templates.
 *
 * Default template: kompetensi_keahlian.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_kompetensi_keahlian(array &$variables) {
  // Fetch KompetensiKeahlian Entity Object.
  $kompetensi_keahlian = $variables['elements']['#kompetensi_keahlian'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
