<?php 

// Main engine defines    
define('DS', DIRECTORY_SEPARATOR);

// enable error temporarily in case there are startup errors 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once( 'lib' . DS . 'core.php');

$system = new Core();

