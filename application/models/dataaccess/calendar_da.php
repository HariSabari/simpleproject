<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calendar_da extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/Crudoperations','crud',TRUE);
	}
	
	public function appointment()
	{
		$sql = "select * from appointment";
		$response = $this->crud->read($sql);
		return $response;
	}
}
?>