<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomebl extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/welcomedataaccess','wda',TRUE);
	}

	public function data()
	{
		$response = $this->wda->data();
		return $response;
	}
}
?>