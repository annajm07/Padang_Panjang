<?php  
class About extends Controller{

	public function index(){
		$dt['home'] = $this->model('Home_model')->getHome();
		$dt['about'] = $this->model('Admin_model')->getAbout();
		$this->view('about/index',$dt);
	}

}

?>