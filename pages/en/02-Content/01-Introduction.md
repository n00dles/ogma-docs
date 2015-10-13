# Introduction

[code mode="php"]
private static function autoloadClasses(){
    if (!defined('ROOT')) define('ROOT',self::getRootPath());
		$files = Core::getFiles(self::getRootPath().'/lib/helpers/','php');
		foreach ($files as $file){
		require_once('helpers/'.$file);
	}
}
[/code]

