<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Accessproperties extends CI_Model {
	function __construct(){

	}

	function getproperties(){
		return parse_ini_file("properties/database.ini");
	}
	
	function getDbPort(){
		$proFile = $this->getproperties();
		return $proFile["port"];
	}

	function getHost(){
		$proFile = $this->getproperties();
		return $proFile["host"];
	}

	function getDbName(){
		$proFile = $this->getproperties();
		return $proFile["dbname"];
	}

	function getUsername(){
		$proFile = $this->getproperties();
		return $proFile["username"];
	}

	function getPassword(){
		$proFile = $this->getproperties();
		return $proFile["password"];
	}

	function gethttpPort(){
		$proFile = $this->getproperties();
		return $proFile["httpport"];
	}
}