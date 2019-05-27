<?php

namespace Drupal\program_keahlian\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Program keahlian entities.
 */
class ProgramKeahlianViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

	if (\Drupal::moduleHandler()->moduleExists('kompetensi_keahlian')) {
      $data['program_keahlian']['kompetensi_keahlian'] = array(
	    'title' => t('Program keahlian from kompetensi keahlian'),
	    'relationship' => array(
	      'base' => 'kompetensi_keahlian', // The name of the table to join with.
	      'base field' => 'program_keahlian', // The name of the field on the joined table.
	      'relationship field' => 'id', 
	      'handler' => 'views_handler_relationship',
	      'label' => t('Kompetensi keahlian'),
	      'title' => t('Relation from Kompetensi keahlian'),
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
