<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Home extends REST_Controller  {
	function Welcome() {
		parent::__construct();
		// $this->load->model('usecase/welcomeusecase','wus',TRUE);
	}
	
	public function index_get()
	{
		$this->load->view('common/header');
		$this->load->view('common/sidemenu');
		$this->load->view('pages/homepage');
		$this->load->view('common/footer');
	}

	public function second_get()
	{
		$this->load->view('common/header');
		$this->load->view('common/sidemenu');
		$this->load->view('pages/homepage');
		$this->load->view('common/footer');
	}
	
}
?>
