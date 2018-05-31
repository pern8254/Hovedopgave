<!doctype html>
<html lang="da">
 
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta description=" <?php echo get_bloginfo( 'description' ); ?> ">
    
    <!-- Henter stylesheet fra bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css">
    
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
   
   
    <?php wp_head();?>
  </head>
  
  <body>

   <header id="nav_2">
       <nav class="secondary_menu">
       <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'extra_menu' ) ); ?> </nav>
       
       <nav class="main_menu"> 
            <a href="<?php echo get_bloginfo( 'wpurl' );?>">
               <img id="logo" src="<?php echo get_template_directory_uri()?>/images/SR_logo.png">
            </a>
       
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
       
   </header>