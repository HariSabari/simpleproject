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
	}

	public function saveCanvas($params)
	{
		$curdir = getcwd();
		$dirname = date("d-m-Y");

		$filename = $curdir."/upload/".$dirname."/";

		if (!file_exists($filename)) {
		    $status = mkdir($curdir."/upload/" . $dirname, 0777);
		    if($status == 0){
		    	$directory = "exists";
		    }else{
		    	$directory = "notexists";
		    }
		}else{
			$directory = "exists";
		}
		if($directory == "exists"){
			$response = $this->upload_image($filename,$params['img']);
			return "Success";
		}else{
			return "Failed";
		}
	}

	public function upload_image($path,$img){
		define('UPLOAD_DIR', $path);
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = UPLOAD_DIR . uniqid() . '.png';
		$success = file_put_contents($file, $data);
		return $success ? $file : 'Unable to save the file.';
	}
}
?>