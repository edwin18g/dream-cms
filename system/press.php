<?php

// Includes
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
function press()
{
	global $config;
	// Set our defaults
    $controller = $config['default_controller'];
    $action = 'index';
    $url = '';
	// Get request url and script url
	$request_url = (isset($_SERVER['REQUEST_URI'])) ? explode('?',$_SERVER['REQUEST_URI']) : '';
	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
	// Get our url path and trim the / of the left and the right
	$segments = explode('/', $request_url[1]);
	if(isset($request_url[1]))$segments = array_filter($segments); 


// Do our default checks
	if(isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
	if(isset($segments[1]) && $segments[1] != '') $action = $segments[1];

	// Get our controller file
    $path = APP_DIR . 'controllers/home/' . $controller . '.php';
	if(file_exists($path)){
	    require_once($path);
	} else {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/home/' . $controller . '.php');
	}
  
    // Check the action exists
	//echo $action;
	$slice=2;
   if(!method_exists($controller, $action)){
	   $r = new ReflectionMethod(ucfirst($controller),'index');
$paramss = $r->getParameters();
if(empty($paramss)){
	 $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/home/' . $controller . '.php');
        $action = 'index';
		
}else{
	$slice=1;
	$action='index';
}
		
       
    }
	
	// Create object and call method
	$obj = new $controller;
	die(call_user_func_array(array($obj, $action), array_slice($segments,$slice)));
}

function press_admin()
{
global $config;
	// Set our defaults
    $controller = $config['default_controller'];
    $action = 'index';
    $url = '';
	// Get request url and script url
	$request_url = (isset($_SERVER['REQUEST_URI'])) ? explode('?',$_SERVER['REQUEST_URI']) : '';
	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
	// Get our url path and trim the / of the left and the right
	$segments = explode('/', $request_url[1]);
	if(isset($request_url[1]))$segments = array_filter($segments); 


// Do our default checks
	if(isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
	if(isset($segments[1]) && $segments[1] != '') $action = $segments[1];

	// Get our controller file
    $path = APP_DIR . 'controllers/admin/' . $controller . '.php';
	if(file_exists($path)){
	    require_once($path);
	} else {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/admin/' . $controller . '.php');
	}
  
    // Check the action exists
	//echo $action;
   if(!method_exists($controller, $action)){
		
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/admin/' . $controller . '.php');
        $action = 'index';
    }
	
	// Create object and call method
	$obj = new $controller;
	die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}

?>
