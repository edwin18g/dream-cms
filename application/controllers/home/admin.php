<?php

class Admin extends Controller {
	
	function index()
	{
		$template = $this->loadView('admin/admin_view');
		$template->set('someval', 'test-value-dude');
		$template->render();
	}
	function logs($vs="")
	{
	
	}
    
}

?>
