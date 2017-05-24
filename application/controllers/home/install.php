<?php

class Install extends Controller {
	
	function index()
	{
		if(file_exists(APP_DIR.'config/db_config.php'))$this->redirect('','home');
		$db=$this->database();
		$this->error404();
	}
	
	function error404()
	{
		echo '<h1>i am installer</h1>';
		echo '<p>Looks like this page doesn\'t exist</p>';
	}
    
}

?>
