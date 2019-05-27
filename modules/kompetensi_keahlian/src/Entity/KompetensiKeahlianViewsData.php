<?php

namespace Drupal\kompetensi_keahlian\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Kompetensi keahlian entities.
 */
class KompetensiKeahlianViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

	if (\Drupal::moduleHandler()->moduleExists('prodi_sekolah')) {
      $data['kompetensi_keahlian']['prodi_sekolah'] = array(
	    'title' => t('Kompetensi keahlian from Prodi sekolah'),
	    'relationship' => array(
	      'base' => 'prodi_sekolah', // The name of the table to join with.
	      'base field' => 'kompetensi_keahlian_id', // The name of the field on the joined table.
	      'relationship field' => 'id', 
	      'handler' => 'views_handler_relationship',
	      'label' => t('Prodi Sekolah'),
	      'title' => t('Relation from Prodi Sekolah'),
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
