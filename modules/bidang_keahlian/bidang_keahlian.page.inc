<?php

/**
 * @file
 * Contains bidang_keahlian.page.inc.
 *
 * Page callback for Bidang keahlian entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Bidang keahlian templates.
 *
 * Default template: bidang_keahlian.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_bidang_keahlian(array &$variables) {
  // Fetch BidangKeahlian Entity Object.
  $bidang_keahlian = $variables['elements']['#bidang_keahlian'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
