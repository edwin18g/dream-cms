<?php

class View {
private $pageVars = '';
	private $template;
	private $head;
	private $footer;
public function __construct($template,$val,$path)
	{
		
		$this->pageVars=$val;
				$this->head = APP_DIR .'views/'.$path.'/header.php';
		$this->template = APP_DIR .'views/'.$path.'/'.$template.'.php';
				$this->footer = APP_DIR .'views/'.$path.'/footer.php';
		
$this->render();		
	}
	
	
	
	public function render()
	{
		if(is_array($this->pageVars))extract($this->pageVars);
		global $config;
		ob_start();
		require($this->head);
		require($this->template);
		require($this->footer);
		echo ob_get_clean();
	}
    
}

?>