<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="generator" content="OGMA CMS" />
<meta name="description" content="OGMA documentation" />
<link href="/theme/css/style.css" type="text/css" rel="stylesheet" />
    
    </head>
<body class="searchbox-hidden " data-url="/">
    <nav id="sidebar">
    <div id="header">
        <a id="logo" href="http://getgrav.org">OGMA CMS</a>
    </div>
        <div class="padding highlightable">
            
    
        <ul>
        <?php foreach($nav as $navItem){ ?>
            <li><a href="<?php echo $navItem['url']; ?>" ><?php echo $navItem['title']; ?></a>
            
            <?php if (array_key_exists('submenu', $navItem) && is_array($navItem['submenu'])){  ?>
            <ul>
            <?php foreach ($navItem['submenu'] as $subItem){ ?>
              <li class="">
                  <a href="<?php echo $subItem['url']; ?>" ><?php echo $subItem['title']; ?></a>
              </li>
            <?php } ?>
            </ul>
            <?php } ?>
            </li>
        
        <?php } ?>
        </ul>
    
        <hr />
        
        <a class="padding" href="#" data-clear-history-toggle><i class="fa fa-fw fa-history"></i> Clear History</a><br />
        
        <section id="footer">
            <p>Built with <a href="http://ogmacms.com">OGMA</a> - XML Flat File CMS</p>
        </section>
        </div>
    </nav>
    
    <section id="body">
        <div id="overlay"></div>

        <div class="padding highlightable">
            <a href="#" id="sidebar-toggle" data-sidebar-toggle=""><i class="fa fa-2x fa-bars"></i></a>

                        <div id="top-bar">
                                <div id="top-github-link">
                <a class="github-link" href="https://github.com/getgrav/grav-learn/blob/develop/pages/01.basics/01.what-is-grav/docs.md"><i class="fa fa-github-square"></i> edit this page</a>
                </div>
                
                                
<div id="breadcrumbs" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="/" itemprop="url"><span itemprop="title">Basics</span></a>
            <i class="fa fa-angle-right"></i>
                                                <span itemprop="title">What is Grav?</span>
                        </div>
                            </div>
            <div id="chapter">
                <div id="body-inner">
 <?php 
        
        echo $content;
        ?>
</div>
</div>

                                        
        </div>
        
	<div id="navigation">
		    <a class="nav nav-prev" href="/"> <i class="fa fa-chevron-left"></i></a>
	
		    <a class="nav nav-next" href="/basics/requirements" style="margin-right: 0px;"><i class="fa fa-chevron-right"></i></a>
		</div>
    </section>
    
    
    


 </body>
</html>
