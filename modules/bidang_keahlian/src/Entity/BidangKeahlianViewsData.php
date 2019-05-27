<?php

namespace Drupal\bidang_keahlian\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Bidang keahlian entities.
 */
class BidangKeahlianViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

	if (\Drupal::moduleHandler()->moduleExists('program_keahlian')) {
      $data['bidang_keahlian']['program_keahlian'] = array(
	    'title' => t('Kompetensi keahlian from Prodi sekolah'),
	    'relationship' => array(
	      'base' => 'program_keahlian', // The name of the table to join with.
	      'base field' => 'bidang_keahlian', // The name of the field on the joined table.
	      'relationship field' => 'id', 
	      'handler' => 'views_handler_relationship',
	      'label' => t('Program keahlian'),
	      'title' => t('Relation from Program keahlian'),
	      'field' => [
		  // ID of field handler plugin to use.
		    'id' => 'numeric',
	      ],
	      'sort' => [
		    // ID of sort handler plugin to use.
		    'id' => 'standard',
	      ],
	      'filter' => [
		    // ID of filter handler plugin to use.
		    'id' => 'numeric',
	      ],
	      'id' => 'standard'
        ),
      );		
	}
    return $data;
  }

}
