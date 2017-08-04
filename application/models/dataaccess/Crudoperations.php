<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'OrientDB/OrientDB.php';
class Crudoperations extends CI_Model {
	function __construct(){
		$this->load->model('Accessproperties','ap',TRUE);
		
	}
	
	public function create($sql){
		try { 
			$db = $this->conncectDb();
			$records = $db->query($sql);
			$db->DBClose();
		    return $records;
		 } catch (OrientDBException $e) {
		   return false;
		}

	}
	
	public function update($sql){
		try { 
			$db = $this->conncectDb();
			$records = $db->query($sql);
			$db->DBClose();
		    return $records;
		 } catch (OrientDBException $e) {
		   return false;
		}
		
	}
	
	public function read($sql){
			$config = $this->getDbConf();
			$ur = "http://".$config['user'].":".$config['pass']."@".$config['host'].":".$config['httpport']."/query/".$this->ap->getDbName()."/sql/".rawurlencode($sql)."/-1";
			$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL,$ur);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			$query_result = curl_exec($ch);
			curl_close($ch);
	    	return $query_result;
	}
	
	public function delete($sql){
		try { 
			$db = $this->conncectDb();
			$records = $db->query($sql);
			$db->DBClose();
		    return $records;
		 } catch (OrientDBException $e) {
		   return false;
		}
		
	}
	
	public function commit(){
		
	}
	
	public function rollback(){
		
	}
	
	public function getDbConf(){
		$config = array(
			'host' 		=> $this->ap->getHost(),
			'port'		=> $this->ap->getDbPort(),
			'user'		=> $this->ap->getUsername(),
			'pass'		=> $this->ap->getPassword(),
			'dbname'	=> $this->ap->getDbName(),
			'httpport'	=> $this->ap->gethttpPort()
		);
		return $config;
	}
	
	public function conncectDb(){
		$config = $this->getDbConf();
		$db = new OrientDB($config['host'], $config['port']);
		$connect = $db->connect($config['user'], $config['pass']);
	    $clusters = $db->DBOpen($config['dbname'], $config['user'], $config['pass']);
	    return $db;
	}
	
	
}
?>