<?php

session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');
require(ROOT_DIR .'system/press.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);
press();

?>
