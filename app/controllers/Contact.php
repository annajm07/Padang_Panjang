<?php  

class Contact extends Controller{

	public function index(){
		$dt['home'] = $this->model('Home_model')->getHome();
		$dt['kontak'] = $this->model('Admin_model')->getContact();
		$this->view('contact/index',$dt);
	}
}
?>