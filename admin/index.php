<?php
session_start(); 
define('ROOT_DIR', str_replace('\admin','',realpath(dirname(__FILE__))) .'/');
define('APP_DIR', ROOT_DIR .'application/');
require(ROOT_DIR .'system/press.php');
global $config;
define('BASE_URL', $config['base_url']);

press_admin();

?>
