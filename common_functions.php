<?php 
require_once("./db.php");
class Common_Functions extends DB{
	function __construct(){
		$this->init();
		parent::__construct();
	}
	public function init(){
		$this->define_constant();
	}
	public function define_constant(){
		define("TABLE_PREFIX", "tbl_");
		define("BASE_URL", "http://localhost/projects/corephp/");		
	}
}

?>