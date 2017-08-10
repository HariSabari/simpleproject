<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calendar_uc extends CI_Model {
	function __construct(){
		$this->load->model('businesslogic/calendar_bl','cbl',TRUE);
	}
	
	public function appointment()
	{
		$response = $this->cbl->appointment();
		return $response;
	}
	
}
?>