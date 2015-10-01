<?php 

class Core {

    public $pages = array();
    public $output = ''; 
    public static $language = 'en';
    public $languages = array();
    
    public $nav = array();
    
    public static $site = array();
    
    public function __construct() {
        
        Core::$site['siteurl'] = SITEURL;
        //set default language
        self::$language = LANGUAGE;
        
        $this->pages = self::dirToArray(self::getRootPath().'pages'.DS.self::$language.DS);
        
        // get installed languages
        $this->languages = self::getInstalledLanguages();
        
       
        
        // scan the pages folder and get a list of pages
        $this->processPages();
        //self::debugArray($this->nav);
        
    }
    
    
    public function getInstalledLanguages(){
        $path = self::getRootPath().'pages';
        $languages = array();
        foreach(glob($path.'/*', GLOB_ONLYDIR) as $dir) {
            $dir = str_replace($path.'/', '', $dir);
            $languages[] = $dir;
        }
        return $languages;
    }
    
    public static function getMyUrl(){
        $serverUri = $url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $uri = str_replace(Core::$site['siteurl'], '', $serverUri);
        $uri = str_replace('index.php', '', $uri);
        return $uri;
    }
    
    
    // print and array
    public static function debugArray($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    
    // scan the pages and find the page we are looking for 
    // todo: check if language is provided
    public function getPage($uri){
        $match = '';
        $parts = explode("/",$uri);
        $pages = $this->nav;
        $counter = 0;
        
        if (in_array($parts[1],$this->languages)){
            self::$language = $parts[1];
            array_shift($parts);
            array_shift($parts);
            $newuri = '/'.implode('/',$parts); 
        } else {
            self::$language = 'en';
            $newuri = $uri;
        }

        
        foreach($pages as $key=>$subpages ){
            if ($newuri == $pages[$key]['url']){
                $match = $pages[$key];
                $this->nav[$key]['active'] = true;
                return $match;
            }
            if ($match=='' && is_array($subpages)){
                $i=0;
                foreach($subpages['submenu'] as $page){
                    if ($newuri == $page['url']){
                        $match = $page;
                        $this->nav[$key]['submenu'][$i]['active'] = true;
                        return $match;
                    }
                    $i++;
                }
                
            }
        } 
        
        reset($pages);
        $first_key = key($pages);
        $match = $pages[$first_key];

        return $match;
        
    }
    
    public function processPages(){
        $pages = $this->pages;
        foreach($pages as $key=>$subpages){
            $parts = explode('-', $key);
            $this->nav[strtolower($parts[1])] = array(
                'title'     => pathinfo($parts[1], PATHINFO_FILENAME),
                'url'       => '/'.strtolower($parts[1]),
                'order'     => $parts[0],
                'active'    => false
                );
            if (file_exists(self::getRootPath().'pages'.DS.self::$language.DS.$key.'/index.md')){
                $this->nav[strtolower($parts[1])]['file'] = DS.$key.DS.'index.md';
            } else {
                $this->nav[strtolower($parts[1])]['file'] = '';
            }
            if (is_array($subpages)){
                //$this->nav[strtolower($parts[1])]['submenu']=array();  
                $topmenu = strtolower($parts[1]);
                $topmenu2 = $key;
                
                foreach($subpages as $page){
                    if ($page != "index.md"){
                        $parts = explode('-', $page);
                        $this->nav[$topmenu]['submenu'][$parts[0]] = array(
                            'title'     => pathinfo($parts[1], PATHINFO_FILENAME),
                            'url'       => '/'.$topmenu.'/'.strtolower(pathinfo($parts[1], PATHINFO_FILENAME)),
                            'order'     => $parts[0],
                            'file'      => DS.$topmenu2.DS.$page,
                            'active'    => false
                        );
                        
                    }
                }
            }
        }
    }


    public static function dirToArray($dir) { 
        $result = array(); 
        $cdir = scandir($dir); 
        foreach ($cdir as $key => $value) 
        { 
            if (!in_array($value,array(".","..",'index.md','404.md'))) 
            { 
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
                { 
                    $result[$value] = self::dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
                } 
                    else 
                { 
                    if (pathinfo($value, PATHINFO_EXTENSION) == 'md'){
                        $result[] = $value; 
                    }
                } 
            } 
        } 
        return $result; 
    } 
        
    
	public static function getRootPath() {
        $pos = strrpos(dirname(__FILE__),DIRECTORY_SEPARATOR.'lib');
        return self::tsl(substr(__FILE__, 0, $pos));
	}	


	public static function tsl($path) {
		if( substr($path, strlen($path) - 1) != '/' ) {
			$path .= DS;
		}
		return $path;
	}
  
}