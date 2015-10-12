<?php 

class Core {

    public $pages = array();
    public $output = ''; 
    public static $language = 'en';
    public $languages = array();
    
    public $nav = array();
    
    public static $site = array();
    
    public static $langnames = array(
        'aa' => 'Afar',
        'ab' => 'Abkhaz',
        'ae' => 'Avestan',
        'af' => 'Afrikaans',
        'ak' => 'Akan',
        'am' => 'Amharic',
        'an' => 'Aragonese',
        'ar' => 'Arabic',
        'as' => 'Assamese',
        'av' => 'Avaric',
        'ay' => 'Aymara',
        'az' => 'Azerbaijani',
        'ba' => 'Bashkir',
        'be' => 'Belarusian',
        'bg' => 'Bulgarian',
        'bh' => 'Bihari',
        'bi' => 'Bislama',
        'bm' => 'Bambara',
        'bn' => 'Bengali',
        'bo' => 'Tibetan Standard, Tibetan, Central',
        'br' => 'Breton',
        'bs' => 'Bosnian',
        'ca' => 'Catalan; Valencian',
        'ce' => 'Chechen',
        'ch' => 'Chamorro',
        'co' => 'Corsican',
        'cr' => 'Cree',
        'cs' => 'Czech',
        'cu' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic',
        'cv' => 'Chuvash',
        'cy' => 'Welsh',
        'da' => 'Danish',
        'de' => 'German',
        'dv' => 'Divehi; Dhivehi; Maldivian;',
        'dz' => 'Dzongkha',
        'ee' => 'Ewe',
        'el' => 'Greek, Modern',
        'en' => 'English',
        'eo' => 'Esperanto',
        'es' => 'Spanish; Castilian',
        'et' => 'Estonian',
        'eu' => 'Basque',
        'fa' => 'Persian',
        'ff' => 'Fula; Fulah; Pulaar; Pular',
        'fi' => 'Finnish',
        'fj' => 'Fijian',
        'fo' => 'Faroese',
        'fr' => 'French',
        'fy' => 'Western Frisian',
        'ga' => 'Irish',
        'gd' => 'Scottish Gaelic; Gaelic',
        'gl' => 'Galician',
        'gn' => 'GuaranÃ­',
        'gu' => 'Gujarati',
        'gv' => 'Manx',
        'ha' => 'Hausa',
        'he' => 'Hebrew (modern)',
        'hi' => 'Hindi',
        'ho' => 'Hiri Motu',
        'hr' => 'Croatian',
        'ht' => 'Haitian; Haitian Creole',
        'hu' => 'Hungarian',
        'hy' => 'Armenian',
        'hz' => 'Herero',
        'ia' => 'Interlingua',
        'id' => 'Indonesian',
        'ie' => 'Interlingue',
        'ig' => 'Igbo',
        'ii' => 'Nuosu',
        'ik' => 'Inupiaq',
        'io' => 'Ido',
        'is' => 'Icelandic',
        'it' => 'Italian',
        'iu' => 'Inuktitut',
        'ja' => 'Japanese (ja)',
        'jv' => 'Javanese (jv)',
        'ka' => 'Georgian',
        'kg' => 'Kongo',
        'ki' => 'Kikuyu, Gikuyu',
        'kj' => 'Kwanyama, Kuanyama',
        'kk' => 'Kazakh',
        'kl' => 'Kalaallisut, Greenlandic',
        'km' => 'Khmer',
        'kn' => 'Kannada',
        'ko' => 'Korean',
        'kr' => 'Kanuri',
        'ks' => 'Kashmiri',
        'ku' => 'Kurdish',
        'kv' => 'Komi',
        'kw' => 'Cornish',
        'ky' => 'Kirghiz, Kyrgyz',
        'la' => 'Latin',
        'lb' => 'Luxembourgish, Letzeburgesch',
        'lg' => 'Luganda',
        'li' => 'Limburgish, Limburgan, Limburger',
        'ln' => 'Lingala',
        'lo' => 'Lao',
        'lt' => 'Lithuanian',
        'lu' => 'Luba-Katanga',
        'lv' => 'Latvian',
        'mg' => 'Malagasy',
        'mh' => 'Marshallese',
        'mi' => 'Maori',
        'mk' => 'Macedonian',
        'ml' => 'Malayalam',
        'mn' => 'Mongolian',
        'mr' => 'Marathi (Mara?hi)',
        'ms' => 'Malay',
        'mt' => 'Maltese',
        'my' => 'Burmese',
        'na' => 'Nauru',
        'nb' => 'Norwegian BokmÃ¥l',
        'nd' => 'North Ndebele',
        'ne' => 'Nepali',
        'ng' => 'Ndonga',
        'nl' => 'Dutch',
        'nn' => 'Norwegian Nynorsk',
        'no' => 'Norwegian',
        'nr' => 'South Ndebele',
        'nv' => 'Navajo, Navaho',
        'ny' => 'Chichewa; Chewa; Nyanja',
        'oc' => 'Occitan',
        'oj' => 'Ojibwe, Ojibwa',
        'om' => 'Oromo',
        'or' => 'Oriya',
        'os' => 'Ossetian, Ossetic',
        'pa' => 'Panjabi, Punjabi',
        'pi' => 'Pali',
        'pl' => 'Polish',
        'ps' => 'Pashto, Pushto',
        'pt' => 'Portuguese',
        'qu' => 'Quechua',
        'rm' => 'Romansh',
        'rn' => 'Kirundi',
        'ro' => 'Romanian, Moldavian, Moldovan',
        'ru' => 'Russian',
        'rw' => 'Kinyarwanda',
        'sa' => 'Sanskrit (Sa?sk?ta)',
        'sc' => 'Sardinian',
        'sd' => 'Sindhi',
        'se' => 'Northern Sami',
        'sg' => 'Sango',
        'si' => 'Sinhala, Sinhalese',
        'sk' => 'Slovak',
        'sl' => 'Slovene',
        'sm' => 'Samoan',
        'sn' => 'Shona',
        'so' => 'Somali',
        'sq' => 'Albanian',
        'sr' => 'Serbian',
        'ss' => 'Swati',
        'st' => 'Southern Sotho',
        'su' => 'Sundanese',
        'sv' => 'Swedish',
        'sw' => 'Swahili',
        'ta' => 'Tamil',
        'te' => 'Telugu',
        'tg' => 'Tajik',
        'th' => 'Thai',
        'ti' => 'Tigrinya',
        'tk' => 'Turkmen',
        'tl' => 'Tagalog',
        'tn' => 'Tswana',
        'to' => 'Tonga (Tonga Islands)',
        'tr' => 'Turkish',
        'ts' => 'Tsonga',
        'tt' => 'Tatar',
        'tw' => 'Twi',
        'ty' => 'Tahitian',
        'ug' => 'Uighur, Uyghur',
        'uk' => 'Ukrainian',
        'ur' => 'Urdu',
        'uz' => 'Uzbek',
        've' => 'Venda',
        'vi' => 'Vietnamese',
        'vo' => 'VolapÃ¼k',
        'wa' => 'Walloon',
        'wo' => 'Wolof',
        'xh' => 'Xhosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'za' => 'Zhuang, Chuang',
        'zh' => 'Chinese',
        'zu' => 'Zulu',
    );
    
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
                foreach($subpages['submenu'] as $key2=>$page){
                    if ($newuri == $page['url']){
                        $match = $page;
                        $this->nav[$key]['submenu'][$key2]['active'] = true;
                        $this->nav[$key]['active']= true;
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
                    if (preg_match('/(\d{2,})(-)(\w+)/',$value, $matches)){
                        $result[$value] = self::dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                    } 
                } 
                    else 
                { 
                    if (pathinfo($value, PATHINFO_EXTENSION) == 'md' ){
                        // only add files in the format 
                        // xx-alpha.md to the pages array to build the menu
                        if (preg_match('/(\d{2,})(-)(\w+(.md))/',$value)){
                            $result[] = $value; 
                        }
                    }
                } 
            } 
        } 
        return $result; 
    } 
       
    public  function showLanguageBar(){
        $output = '';
        $languages = $this->languages;
        foreach($languages as $language){
            $output .= '<a href="#" class="btn btn-primary btn-xs">'.$language.'</a>';
        }
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