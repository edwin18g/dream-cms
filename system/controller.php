<?php

class Controller {
	
	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}
	public function database(){
		
		
	require(APP_DIR .'database/mysqli.php');
		$database = new DB();
		$db = new DB();
		return $db;	
	}
	public function loadView($name,$val="",$path="home")
	{global $config;
		$path=$path.'/'.$config['home_theme'];
		$view = new View($name,$val,$path);
		return $view;
	}
	public function admin_View($name,$val="",$path="admin")
	{
		global $config;
		$path=$path.'/'.$config['admin_theme'];
		$view = new View($name,$val,$path);
		return $view;
	}
	
	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper($name)
	{
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}
	
	public function redirect($loc,$to)
	{
		global $config;
		if($to==="admin"){
			$base_r=$config['admin_url'];
		}elseif($to==="home"){
			$base_r=$config['home_url'];
		}
		
		header('Location: '. $base_r . $loc);
	}
    
}

?>