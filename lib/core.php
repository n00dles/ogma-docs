<?php 

class Core {

    public $pages = array();
    public $output = ''; 
    public static $language = 'en';
    
    public $nav = array();
    
    public static $site = array();
    
    public function __construct() {
        
        Core::$site['siteurl'] = "https://ogma-docs-n00dles.c9.io";
        // fix this later to get ROOT Path
        $this->pages = self::dirToArray(self::getRootPath().'pages'.DS.self::$language.DS);
        //$this->getMenu();
        $this->processPages();
        
        //echo "<pre>";
        //print_r($this->nav);
        //echo "</pre>";
        
        //echo $this->output;
    }
    
    public static function getMyUrl(){
        $serverUri = $url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $uri = str_replace(Core::$site['siteurl'], '', $serverUri);
        $uri = str_replace('index.php', '', $uri);
        return $uri;
    }
    
    
    
    public function getPage($uri){
        $match = '';
        $parts = explode("/",$uri);
        $pages = $this->nav;
        
        foreach($pages as $key=>$subpages ){
            if ($uri == $pages[$key]['url']){
                $match = $pages[$key];
                return $pages[$key];
            }
            if ($match=='' && is_array($subpages)){
                foreach($subpages['submenu'] as $page){
                    if ($uri == $page['url']){
                        $match = $page;
                        return $page;
                    }
                }
                
            }
        } 
        if ($parts[0]=="" && $parts[1]==''){
            reset($pages);
            $first_key = key($pages);
            $match = $pages[$first_key];
        }
        return $match;
        
    }
    
    public function processPages(){
        $pages = $this->pages;
        foreach($pages as $key=>$subpages){
            $parts = explode('-', $key);
            $this->nav[strtolower($parts[1])] = array(
                'title'     => pathinfo($parts[1], PATHINFO_FILENAME),
                'url'       => '/'.strtolower($parts[1]),
                'order'     => $parts[0]
                );
            if (file_exists(self::getRootPath().'pages'.DS.self::$language.DS.$key.'/index.md')){
                $this->nav[strtolower($parts[1])]['file'] = self::getRootPath().'pages'.DS.self::$language.DS.$key.DS.'index.md';
            }
            if (is_array($subpages)){
                //$this->nav[strtolower($parts[1])]['submenu']=array();  
                $topmenu = strtolower($parts[1]);
                $topmenu2 = $key;
                
                foreach($subpages as $page){
                    if ($page != "index.md"){
                        $parts = explode('-', $page);
                        $this->nav[$topmenu]['submenu'][] = array(
                            'title'     => pathinfo($parts[1], PATHINFO_FILENAME),
                            'url'       => '/'.$topmenu.'/'.strtolower(pathinfo($parts[1], PATHINFO_FILENAME)),
                            'order'     => $parts[0],
                            'file'      => self::getRootPath().'pages'.DS.self::$language.DS.$topmenu2.DS.$page
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
            if (!in_array($value,array(".","..",'index.md'))) 
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