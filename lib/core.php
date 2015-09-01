<?php 

class Core {

    public $pages = array();
    public $output = ''; 
    
    public $nav = array();
    
    public function __construct() {
        
        $this->pages = self::dirToArray(self::getRootPath().'ogma-docs\pages');
        $this->getMenu();
        echo $this->output;
    }
    
    public function parseMenu(){
    
    
    }

    public function getMenu(){
    $pages = $this->pages;
    $this->output .= '<ul class="topics">';
    foreach($pages as $key=>$subpages){
      $parts = explode('-', $key);
      $this->output .= '<li class="dd-item visited" data-nav-id="/">
            <a href="/'.strtolower($parts[1]).'">
                <i class="fa fa-check read-icon"></i>
                <span><b>'.$parts[1].'</span>
            </a>';
        if (is_array($subpages)){
          $this->output .= '<ul>';
          foreach($subpages as $page){
            $parts = explode('-', $page);
            $this->output .= '<li>'.$parts[1].'</li>';
          }
          $this->output .= '</ul>';
        }
        $this->output .= '</li>';
    } 
    $this->output .= '</ul>';
    }

    public static function dirToArray($dir) { 
        $result = array(); 
        $cdir = scandir($dir); 
        foreach ($cdir as $key => $value) 
        { 
            if (!in_array($value,array(".",".."))) 
            { 
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
                { 
                    $result[$value] = self::dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
                } 
                    else 
                { 
                    $result[] = $value; 
                } 
            } 
        } 
        return $result; 
    } 
        
    
	public static function getRootPath() {
        $pos = strrpos(dirname(__FILE__),DIRECTORY_SEPARATOR.'lib');
        $adm = substr(dirname(__FILE__), 0, $pos);
        $pos2 = strrpos($adm,DIRECTORY_SEPARATOR);
        return self::tsl(substr(__FILE__, 0, $pos2));
	}	


	public static function tsl($path) {
		if( substr($path, strlen($path) - 1) != '/' ) {
			$path .= DS;
		}
		return $path;
	}
  
}