<?php

class Page extends Controller {
	
	function index()
	{
		if(!file_exists(APP_DIR.'config/db_config.php'))$this->redirect('install','home');
		$db=$this->database();
		$this->loadView('index');
		
	}
        
        
        function home($val=""){
            if($val=="edwin"){
             echo "yes  i am edwin";
            }else{
             echo "yes  i am not edwin, me ".$val ;
            }
            
        }
    
}

?>
