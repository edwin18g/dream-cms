<?php 
if(file_exists(APP_DIR .'config/db_config.php'))require_once "db_config.php";
$config['base_url'] = ''; // Base URL including trailing slash (e.g. http://localhost/)
$config['home_url']='//'.$_SERVER['HTTP_HOST'].'/?';
$config['admin_url']='//'.$_SERVER['HTTP_HOST'].'/admin/?';
$config['admin_theme']="";
$config['home_theme']='webdesign';
$config['admin_theme']='bootstrap';
$config['admin_theme_url']='//'.$_SERVER['HTTP_HOST'].'/application/views/admin/'.$config['admin_theme'].'/';
$config['home_theme_url']='//'.$_SERVER['HTTP_HOST'].'/application/views/home/'.$config['home_theme'].'/';
$config['default_controller'] = 'page'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)
$config['db_host'] = (isset($servername))?$servername:''; // Database host (e.g. localhost)
$config['db_name'] = (isset($dbname))?$dbname:'';// Database name
$config['db_username'] = (isset($username))?$username:'';// Database username
$config['db_password'] =(isset($password))?$password:'';// Database password 


?>