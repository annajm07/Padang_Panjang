<?php  

class Login extends Controller{
	public function __construct(){
		if(isset($_SESSION['aktif'])){
			header('Location:'.BASEURL.'/admin');
		}
	}

	public function index(){
		if(isset($_POST['login'])){
			if($this->model('Login_model')->login() == 1){

				header('Location:'.BASEURL. '/admin');
				exit;
			}else{
				$data['error'] = 'username atau password salah';
				$this->view('login/index',$data);
				exit;
			}
		}

		$this->view('login/index');
	}


	public function registrasi(){
		if(isset($_POST['register'])){

			if($this->model('Login_model')->register() >0 ){
				Flasher::setFlash(' user berhasil','ditambahkan','success');
				header('Location:'.BASEURL. '/login/registrasi');
				exit;
			}
				else{
				Flasher::setFlash('user gagal','ditambahkan','danger');
				header('Location:'.BASEURL. '/login/registrasi');
				exit();
			}
		}
		$this->view('login/registrasi');
	}



}

?>