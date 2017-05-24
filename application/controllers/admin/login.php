<?php

class Login extends Controller {
	
	function index()
	{
		$data['form_action']='/admin/?main/action-submit';
		$this->admin_View('login',$data);
	}
	
	
    
}

?>
