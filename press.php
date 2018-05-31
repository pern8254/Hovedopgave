<?php /* Template Name: press */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container-fluid press push_down">
    <section class="row">
        <section class="col-sm-6" id="col_1">
            
            <?php    
                //Der skabes et loop som viser posts
                    if ( have_posts() ){
                        while (have_posts() ){
                        the_post();
                                
                            //Overskrift
                            echo '<h1>';
                            the_title();
                            echo '</h1>';
                            
                            //Indholdet af post 
                            the_content();
       
                        } //Slutter while
                    } //Slutter if
            ?>
                
        </section>
    
          
        <section class="col-sm-6">
           
           <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="" class="press_logo_img">
           <br><br>
           <p>Download our logo here</p>
           
           <section class="row">
                 <section class="col_sm_4">
                   <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_4.jpg" alt="" class="press_img">
               </section>
               <section class="col_sm_4">
                   <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_6.JPG" alt="" class="press_img">
               </section>
               <section class="col_sm_4">
                   <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_1.jpg" alt="" class="press_img">
               </section> 
               <p>Get some pictures here</p>      
           </section>
        
        
           
        </section>
    </section>
</main>

<?php
    //Henter footer.php
    get_footer();
?>