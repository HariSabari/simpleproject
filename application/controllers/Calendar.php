<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Calendar extends REST_Controller {
	function Calendar() {
		parent::__construct();
		$this->load->model('usecase/calendar_uc','cus',TRUE);
	}
	 	
	public function index_get()
	{
		$this->load->view('common/header');
		$this->load->view('common/sidemenu');
		$this->load->view('pages/calendar');
		//$this->load->view('pages/tab');
		$this->load->view('common/footer');
	}
	public function second_get()
	{
		$this->load->view('common/header');
		$this->load->view('common/sidemenu');
		$this->load->view('pages/tab');
		$this->load->view('common/footer');
	}
	public function appointment_post()
	{
		$response = $this->cus->appointment();
		print $response;
	}
}
?>
