<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calendar_bl extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/calendar_da','cda',TRUE);
	}

	public function appointment()
	{
		$response = $this->cda->appointment();
		return $response;
	}
}
?>