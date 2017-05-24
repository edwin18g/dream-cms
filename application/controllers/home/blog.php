<?php

class Blog extends Controller {
	
	function index($post_id="")
	{
		//if(!file_exists(APP_DIR.'config/db_config.php'))$this->redirect('install','home');
		//$db=$this->database();
		if($post_id==""){
			$this->loadView('blog_index');
		}else{
		$this->loadView('blog_single_post');	
		}
		
		/*if($vs ==""){}else{
			echo $vs;
		}*/
		
		
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
