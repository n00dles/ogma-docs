<?php 

// Main engine defines    
define('DS', DIRECTORY_SEPARATOR);

// enable error temporarily in case there are startup errors 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once( 'lib' . DS . 'core.php');
require_once( 'lib' . DS . 'yaml.php');
require_once( 'lib' . DS . 'parsedownextra.php');

$system = new Core();

/**
$page = new FrontMatter('content/example.md');
echo '<h1><a href="'.$page->fetch('uri').'">'.$page->fetch('title').'</a></h1>'.$page->fetch('content');
**/

$nav = $system->nav;

require_once('theme/index.tpl');