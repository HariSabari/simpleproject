<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomedataaccess extends CI_Model {
	function __construct(){
		$this->load->model('dataaccess/Crudoperations','crud',TRUE);
	}
	public function welcome()
	{
		$sql = "select * from sms_activity";
		$response = $this->crud->read($sql);
		return $response;
	}
}
?>