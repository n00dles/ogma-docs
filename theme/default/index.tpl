<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $themeurl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $themeurl; ?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $themeurl; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $themeurl; ?>/css/bootstrap_Spacelab.min.css" rel="stylesheet" class="SelectedTheme">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="nav-side-menu">
    <div class="brand">OGMA DOCS</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <?php $i=0;
                foreach($nav as $navItem){ 
                $i++;
                ?>
                <?php if (array_key_exists('submenu', $navItem) && is_array($navItem['submenu'])){  ?>
                <li  data-toggle="collapse" data-target="#<?php echo 'menu'.$i; ?>" class="collapsed active">
                  <a href="#"><i class="fa fa-circle-o fa-lg"></i> <?php echo $navItem['title']; ?> <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse <?php if ($navItem['active']) echo ' in'; ?> " id="<?php echo 'menu'.$i; ?>">
                <?php foreach ($navItem['submenu'] as $subItem){ ?>
                  <li>
                      <a href="/<?php echo Core::$language.$subItem['url']; ?>" ><?php echo $subItem['title']; ?></a>
                  </li>
                <?php } ?>
                </ul>
                <?php } else { ?>
                <li><a href="/<?php echo Core::$language.$navItem['url']; ?>" ><i class="fa fa-dashboard fa-lg"></i> <?php echo $navItem['title']; ?></a>
                <?php } ?>
                
            
            <?php } ?>
           
            </ul>
     </div>
     
</div>
    <div class="contentbrand nav ">
    <div class="pull-right lang-bar">
        <?php $system->showLanguageBar($pagedetails['file'], $pagedetails['url']); ?>
    </div>
    </div>
    <div id="wrapper">
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                        //Core::debugArray($pagedetails);
                        echo $content; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $themeurl; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $themeurl; ?>/js/bootstrap.min.js"></script>
    
    <!-- App JavaScript -->
    <script src="<?php echo $themeurl; ?>/js/script.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>