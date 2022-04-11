<?php  

class Home_model{



private $db;

public function __construct(){
	$this->db = new Database;
}


	public function getHome(){
		$query = "SELECT * FROM home";
	$this->db->query($query);
	return $this->db->single();
	// return $this->db;
	}
}

?>