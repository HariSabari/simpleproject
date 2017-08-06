<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginusecase extends CI_Model {
	function __construct(){
		$this->load->model('businesslogic/loginbl','lbl',TRUE);
	}
	
	public function login($params)
	{
		$response = $this->lbl->login($params);
		if(sizeof($response->result) == 1){
			$response = json_decode(json_encode($response->result[0]),true);
			$session['role'] = $response['role'];
			$this->session->set_userdata("usersession",$session);
			return $session['role'];
		}else{
			return null;
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('usersession');
		return "logout";
	}
	
}
?>