<?php /* Template Name: about */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container push_down">
   
   <!-- Video and text about Smooth Robotics -->
    <section class="row">
        <section class="col-sm-6">
            <video src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_web.mp4" alt="" class="video" controls> </video>
           
            <img class="video_img" src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="">
            
        </section>
        <section class="col-sm-6 about">
        <?php    
                //Der skabes et loop som viser posts
                    if ( have_posts() ){
                        while (have_posts() ){
                        the_post();
                                
                            //Overskrift
                            echo '<h2>';
                            the_title();
                            echo '</h2>';
                            
                            //Indholdet af post 
                            the_content();
       
                        } //Slutter while
                    } //Slutter if
            ?>
            <br>
            <a class="cta_btn" href="http://smoothrobotics.pernillesondergaard.dk/contact/"><span>Contact</span></a>
            
        </section>
    </section>
    
    <br>
    <br>
    
    <!-- Vision, mission and values -->
    <section class="row">
        <section class="col-sm-6 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/vision_icon.png" alt="" class="about_img">
        </section>
        <section class="col-sm-6 vmv">
           <h3>Vision</h3>
            <p>
                All welding robots sold in the world must be sold with the Smooth Robotics operating system 
            </p>
        </section>
    </section>
    
    <br>
    
    <section class="row">
        <section class="col-sm-6 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/mission_icon.png" alt="" class="about_img">
        </section>
        <section class="col-sm-6 vmv">
           <h3>Mission</h3>
            <p>
                Get on the market <br>
                Sell four operating systems by the end of 2018
            </p>
        </section>
    </section>
    
    <br>
    
    <section class="row about_last">
        <section class="col-sm-6 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/values_icon.png" alt="" class="about_img">
        </section>
        <section class="col-sm-6 vmv">
           <h3>Values</h3>
            <p>
                Optimization of time <br>
                Automation <br>
                User friendly <br>
                Fleksibel <br>
                No programming <br>
            </p>
        </section>
    </section>
</main>



<?php
    //Henter footer.php
    get_footer();
?>