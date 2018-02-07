<?php
/**
 * @file
 * Contains \Drupal\contactformcustom\Controller\ContactFormCustomController.
 */
namespace Drupal\contactformcustom\Controller;

class ContactFormCustomController {

	public static function cool(){
		$response = ['#markup' => 'Test'];

		return $response;
    }
    
	public function coolid($id){
		$response = ['#markup' => $id];

		return $response;
	}

}


