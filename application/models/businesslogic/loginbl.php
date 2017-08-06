<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginbl extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/logindataaccess','lda',TRUE);
	}

	public function login($params)
	{
		$response = $this->lda->login($params);
		return json_decode($response);
	}
}
?>