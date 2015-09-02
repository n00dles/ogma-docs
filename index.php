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

$nav = $system->nav;

$uri = Core::getMyUrl();

$pagedetails = $system->getPage($uri);

$option = new FrontMatter($pagedetails['file']);

$markdownContent = new ParsedownExtra();
$content = $markdownContent->text($option->fetch('content') );
$title = $option->fetch('title');
$template = $option->fetch('template');
$author = $option->fetch('author');

require_once('theme/'.$template);