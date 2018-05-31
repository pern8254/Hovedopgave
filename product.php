<?php /* Template Name: product */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container push_down">
    <section class="row">
        <section class="col-sm-4 col_product">
            <p class="product_text">
                Let your future robot quality welding learn from your best.
            </p>
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_8.JPG" alt="" class="product_img">
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_3.jpg" alt="" class="product_img">
        </section>
        <section class="col-sm-4 col_product">
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_2.jpg" alt="" class="product_img">
            <p class="product_text">
            Made by welders for welders the Smooth Robotics Welding SmoothTool® makes it easy to give control of your production robot back to the craftsman.
            </p>
        </section>
        <section class="col-sm-4 col_product">
            <p class="product_text">
            Nobody needs a robot. Everybody needs a solution.
            </p>
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_6.JPG" alt="" class="product_img">
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_5.jpg" alt="" class="product_img">
        </section>
    </section>
    
    <section class="row">
        <section class="col-sm-4 product">
            <?php
            //Overskrift
            echo '<h1>';
            the_title();
            echo '</h1>';
            ?>
        </section>
        <section class="col-sm-8">
        <?php    
            //Der skabes et loop som viser posts
          if ( have_posts() ){
              while (have_posts() ){
                  the_post();

                //Indholdet af post 
                the_content();
       
              } //Slutter while
          } //Slutter if
        ?>
            <a class="btn" href="http://smoothrobotics.pernillesondergaard.dk/contact/"><span>Contact</span></a>
            
        </section>
    </section>
    
</main>


<?php
    //Henter footer.php
    get_footer();
?>