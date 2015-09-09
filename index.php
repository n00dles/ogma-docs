<?php 

// Main engine defines    
define('DS', DIRECTORY_SEPARATOR);

require_once( 'config.php');

// enable error temporarily in case there are startup errors 
if (DEBUG===true){
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
}

require_once( 'config.php');
require_once( 'lib' . DS . 'core.php');
require_once( 'lib' . DS . 'yaml.php');
require_once( 'lib' . DS . 'parsedownextra.php');

$system = new Core();

$nav = $system->nav;

$uri = Core::getMyUrl();

$pagedetails = $system->getPage($uri);

$nav = $system->nav;

//Core::debugArray($system->nav);
$option = new FrontMatter(Core::getRootPath().DS.'pages'.DS.Core::$language.$pagedetails['file']);

$markdownContent = new ParsedownExtra();
$content = $markdownContent->text($option->fetch('content') );
$title = $option->fetch('title');
$template = $option->fetch('template');
$author = $option->fetch('author');
$keywords = $option->fetch('keywords');
$description = $option->fetch('description');
$filepath = DS.'pages'.DS.Core::$language.$pagedetails['file'];
$themeurl = '/theme/'.THEME;


require_once('theme/'.THEME.'/'.$template);