<?php 

class Core {

    public $pages = array();
    public $output = ''; 
    
    public $nav = array();
    
    public function __construct() {
        // fix this later to get ROOT Path
        $this->pages = self::dirToArray(self::getRootPath().'pages');
        //$this->getMenu();
        $this->processPages();
        
        echo "<pre>";
        print_r($this->nav);
        echo "</pre>";
        
        echo $this->output;
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
            if (file_exists('/home/ubuntu/workspace/pages/'.$key.'/index.md')){
                $this->nav[strtolower($parts[1])]['file'] = self::getRootPath().'pages'.DS.$key.DS.'index.md';
            }
            if (is_array($subpages)){
                //$this->nav[strtolower($parts[1])]['submenu']=array();  
                $topmenu = strtolower($parts[1]);
                foreach($subpages as $page){
                    if ($page != "index.md"){
                        $parts = explode('-', $page);
                        $this->nav[$topmenu]['submenu'][] = array(
                            'title'     => pathinfo($parts[1], PATHINFO_FILENAME),
                            'url'       => '/'.$topmenu.'/'.strtolower(pathinfo($parts[1], PATHINFO_FILENAME)),
                            'order'     => $parts[0],
                            'file'      => self::getRootPath().$topmenu.DS.$page
                        );
                        
                    }
                }
            }
        }
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
        return self::tsl(substr(__FILE__, 0, $pos));
	}	


	public static function tsl($path) {
		if( substr($path, strlen($path) - 1) != '/' ) {
			$path .= DS;
		}
		return $path;
	}
  
}