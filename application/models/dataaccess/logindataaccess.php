<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logindataaccess extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/Crudoperations','crud',TRUE);
	}
	
	public function login($params)
	{
		$sql = "select * from login_access where name = '".$params['username']."' and password = '".$params['password']."'";
		$response = $this->crud->read($sql);
		return $response;
	}
}
?>