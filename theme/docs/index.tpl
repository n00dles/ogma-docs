
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?php echo $title; ?></title>
  
    <link rel="stylesheet" href="<?php echo $themeurl; ?>/css/sphinx.css" type="text/css" />
    <link rel="top" title="Read The Docs 1.0 documentation" href="#"/>
    <link rel="next" title="Getting Started" href="getting_started.html"/>
  
  <script src="<?php echo $themeurl; ?>/js/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">

          <a href="#" class="icon icon-home"> OGMA DOCS</a>
            <div class="version">
              1.0
            </div>       
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="search.html" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>


</li>
        
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
      <p class="caption"><span class="caption-text">User Documentation</span></p>
        <ul >
        <?php foreach($nav as $navItem){ ?>
            <li class="toctree-l1"><a class="reference internal" href=""><span class="toctree-expand"></span><?php echo $navItem['title']; ?></a>

            <?php if (array_key_exists('submenu', $navItem) && is_array($navItem['submenu'])){  ?>
            <ul>
            <?php foreach ($navItem['submenu'] as $subItem){ ?>
              <li class="toctree-l2">
                  <a href="<?php echo $subItem['url']; ?>" ><?php echo $subItem['title']; ?></a>
              </li>
            <?php } ?>
            </ul>
            <?php } ?>
            </li>
        
        <?php } ?>
        </ul>
          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="#">OGMA DOCS</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="#">Docs</a> &raquo;</li>
      
    <li><?php echo $title; ?></li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="<?php echo GHURL.$filepath; ?>" class="fa fa-github"> Edit on GitHub</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" >

  <?php
        echo $content;
        ?>


</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="getting_started.html" class="btn btn-neutral float-right" title="Getting Started" accesskey="n">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
    </div>
  

  <hr/>


  Built with <a href="http://ogma-docs.ogmacms.com/">OGMA-DOCS</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.

</footer>

        </div>
      </div>

    </section>

  </div>
  

  <div class="rst-versions" data-toggle="rst-versions" role="note" aria-label="versions">
    <span class="rst-current-version" data-toggle="rst-current-version">
      <span class="fa fa-book"> Read the Docs</span>
      v: latest
      <span class="fa fa-caret-down"></span>
    </span>
    <div class="rst-other-versions">
      <dl>
        <dt>Versions</dt>
        
          <dd><a href="/en/latest/">latest</a></dd>
        
          <dd><a href="/en/stable/">stable</a></dd>
        
      </dl>
      
      <dl>
        <dt>On Read the Docs</dt>
          <dd>
            <a href="//readthedocs.org/projects/read-the-docs/?fromdocs=read-the-docs">Project Home</a>
          </dd>
          <dd>
            <a href="//readthedocs.org/builds/read-the-docs/?fromdocs=read-the-docs">Builds</a>
          </dd>
      </dl>
      <hr/>
      Free document hosting provided by <a href="http://www.readthedocs.org">Read the Docs</a>.

    </div>
  </div>

<script type="text/javascript" src="<?php echo $themeurl; ?>/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo $themeurl; ?>/js/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>