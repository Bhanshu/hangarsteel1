<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Hangar Steel</title>-->
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav.png">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	 <link href="<?php echo esc_url( get_template_directory_uri() );?>/css/owl.carousel.css" rel="stylesheet">
</head>

<body>
    <!-- Main Header Starts-->
    <header class="main-header">
        <div class="container">
            <div class="top-header">
                <a href="mailto:<?php the_field('email_info',5);?>"><?php the_field('email_info',5);?></a>
                <ul>
                    <li><a href="tel:<?php the_field('menu_phn',5);?>"> <i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('menu_phn',5);?></a></li>
                    <!--<li><i class="fa fa-fax" aria-hidden="true"></i> <?php the_field('menu_fax',5);?></li>-->
                </ul>
            </div>


            <!--SIMPLE NAV-->
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url( get_permalink(5) ); ?>" class="navbar-brand"><img src="<?php echo the_field('hs_logo',5) ?>" alt="logo" /></a>
                    </div>
        <div class="navbar-collapse collapse" id="navbar">

             <ul class="nav navbar-nav navbar-right">
                <?php
				 $defaults = array( 
						 'menu' => 'dynamic_menu',
						 'container' => '',
						 'container_class' => '',
						 'container_id' => '',
						 'menu_class' => 'menu',
						 'menu_id' => '',
						 'echo' => true,
	                     'fallback_cb' => 'wp_page_menu', 
						 'before' => '', 
						 'after' => '',
						 'link_before' => '', 
						 'link_after' => '',
						 'items_wrap' => '%3$s',
                         'depth' => 0, 
						 'walker' => '', 
						 'theme_location' => '' );
						
                      wp_nav_menu($defaults);
	                 ?>
	         </ul>
         </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <!--SIMPLE NAV-->
        </div>
    </header>
    <!-- Main Header Ends-->