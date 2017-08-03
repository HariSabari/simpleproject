<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Welcome extends REST_Controller  {
	function Welcome() {
		parent::__construct();
		$this->load->model('usecase/welcomeusecase','wus',TRUE);
	}
	
	public function index_get()
	{
		$this->load->view('welcome_message');
	}
	
	public function welcome_get()
	{
		$response = $this->wus->welcome();
		print_r(json_encode($response));
	}
	
}
?>
