<?php  


class Login_model{

	private $db;

public function __construct(){
	$this->db = new Database;
}

	public function register(){

		$username = strtolower(stripslashes($_POST['username']));
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];


		// cek apakah username sudah pernah dibuat
		$this->db->query("SELECT * FROM user WHERE username = :username");
		$this->db->bind('username',$username);
		// echo $this->db->single();
		// var_dump($this->db->single());
		// exit;

		if(!empty($this->db->single())){
			return 0;
			exit();
		}

		if($password1 !== $password2){

		return 0;
		exit;
		}


		$password = password_hash($password1, PASSWORD_DEFAULT);

		$this->db->query("INSERT INTO user VALUES ('','$username','$password')");
		$this->db->execute();

		return $this->db->rowcount();
	}



	public function login(){

		$username = stripslashes($_POST['username']);
		$password = $_POST['pass'];


		$this->db->query("SELECT * FROM user WHERE username = '$username'");

		if(!empty($this->db->single())){
			$result = $this->db->single();

			if(password_verify($password, $result['password'])){
				$_SESSION['aktif'] = true;
				return 1;
			}else{
				return 0;}

		}
		return 0;

	}








}


?>