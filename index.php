<?php 
require_once("./common_functions.php");
class Index extends Common_Functions{
	function __construct(){
		parent::__construct();
		$this->tbl_users = TABLE_PREFIX."users";
		$this->init_fun();
	}
	public function init_fun(){
		$result = $this->get_data("*", $this->tbl_users);
		$exist = $this->fetch_exist_data("*", $this->tbl_users, "id = 1");

		$data = [
			"first_name" => addslashes("'".time()),
			"last_name"  => time(),
			"username"   => time(),
			"password"   => time(),
		];
		// $response = $this->insert_data( $this->tbl_users, $data);
		$data = [
			"first_name" => addslashes("'".time()),
			"last_name"  => time(),
			"username"   => time(),
			"password"   => time(),
		];
		// $response = $this->update_data($this->tbl_users, $data, "id = 3");
		// $response = $this->delete_data($this->tbl_users, "id IN(5,6)");


		echo '<pre />';
		print_r($result);
	}
}
new Index();
?>