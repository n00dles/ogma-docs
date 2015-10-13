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

<p data-height="327" data-theme-id="0" data-slug-hash="uvIrn" data-default-tab="result" data-user="visualcookie" class='codepen'>See the Pen <a href='http://codepen.io/visualcookie/pen/uvIrn/'>Yet another CSS3 Loader</a> by Dean Hidri (<a href='http://codepen.io/visualcookie'>@visualcookie</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>