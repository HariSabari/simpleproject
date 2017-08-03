<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomedataaccess extends CI_Model {
	function __construct(){
		//$this->load->model('dataaccess/welcomedataaccess','wus',TRUE);
	}
	public function welcome()
	{
		return 1;
	}
}
?>