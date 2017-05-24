<?php

class Admin extends Controller {
	
	function index()
	{
		$template = $this->loadView('admin_view');
		$template->render();
	}
	function logs($vs="")
	{
	
	}
    
}

?>
