<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class login extends REST_Controller  {
	function login() {
		parent::__construct();
		$this->load->model('usecase/loginusecase','lus',TRUE);
	}
	
	public function index_get()
	{
		$this->load->view('pages/login');
	}
	
	public function login_post()
	{
		$params = $this->post();
		$response = $this->lus->login($params);
		print_r($response);	
	}
	
	public function logout_get()
	{
		$response = $this->lus->logout();
		print_r($response);
	}
	
}
?>
