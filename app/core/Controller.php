<?php  
class Controller{
	public function view($data,$pars = [])
	{
		require_once '../app/views/'. $data . '.php';
	}

	public function model($model){

		require_once '../app/models/'. $model . '.php';

		return new $model;
	}


}

?>