<?php  
class Home extends Controller{


	public function index(){
		$dt['home'] = $this->model('Home_model')->getHome();
		$dt['skill'] = $this->model('Admin_model')->getSkill();
		$this->view('home/index',$dt);
	}
}


?>