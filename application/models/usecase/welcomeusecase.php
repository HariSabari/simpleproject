<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomeusecase extends CI_Model {
	function __construct(){
		$this->load->model('businesslogic/welcomebl','wbl',TRUE);
	}
	
	public function data()
	{
		$response = $this->wbl->data();
		return $response;
	}
}
?>