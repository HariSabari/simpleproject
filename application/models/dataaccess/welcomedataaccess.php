<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomedataaccess extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/Crudoperations','crud',TRUE);
	}
	
	public function data()
	{
		$sql = "select * from School";
		$response = $this->crud->read($sql);
		return $response;
	}
}
?>