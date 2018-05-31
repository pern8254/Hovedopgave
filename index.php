<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage smoothrobotics
 * @since Smooth Robotics 1.0
 */
?>

<?php get_header(); ?>

<main class="container-fluid" id="home">
    <section class="row">
		  <section class="col-sm-12">
            
               <!-- Background image and hero -->
                <img class="homepage_img" src="<?php echo get_template_directory_uri()?>/images/sr_background.png" alt="">
        
                  <div class="hero-text">
                      <h1> Say no to programming <br>
                            Say yes to craftmanship
                        </h1>
                        <p>
                            Stop wasting precious time. Let your skills be your controls.
                        </p>
                            
                            <a class="cta_btn" href="http://smoothrobotics.pernillesondergaard.dk/product/"><span>Product</span></a>
                            <a class="cta_btn" href="http://smoothrobotics.pernillesondergaard.dk/contact/"><span>Contact</span></a>
                  </div>
                <!-- Background image and hero end --> 
         </section>
    </section>    
</main>
               
<main class="container">
   <section class="row video_frontpage">
       <section class="col-sm-6">
           <!-- Video -->
                <video src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_web.mp4" alt="" class="video" controls> </video>
        </section>
        <section class="col-sm-6 text_frontpage">
            <h2>Activate the full potential of your knowledge in production</h2>
            <p>
                The Smooth Robotics Welding SmoothTool® is the missing link between the quality conscious knowhow of the skilled master and the endless possibilities of the robot mobility. Forget about tedious and costly automation programming.
            </p>
        </section>
    </section>
            <!-- Video end -->
            
            <!-- Icons with links -->    
                <section class="row" id="icons">
                    <section class="col-sm-4">
                        <img class="homepage_icon" src="<?php echo get_template_directory_uri()?>/images/product_icon.png" alt="Product">
                    <p><a href="http://smoothrobotics.pernillesondergaard.dk/product/"> More about the product</a></p>
                    </section>
                
                    <section class="col-sm-4">
                        <img class="homepage_icon" src="<?php echo get_template_directory_uri()?>/images/distributor_icon.png" alt="Product">
                    <p><a href="http://smoothrobotics.pernillesondergaard.dk/distributor/"> Find your distributor</a></p>
                    </section>
                
                    <section class="col-sm-4">
                        <img class="homepage_icon" src="<?php echo get_template_directory_uri()?>/images/about_icon.png" alt="Product">
                    <p><a href="http://smoothrobotics.pernillesondergaard.dk/about/"> More about Smooth Robotics</a></p>
                    </section>
                </section>
            <!-- Icons with links end -->            
</main>
           
<!-- Show content from wordpress -->
<main class="contaner-fluid">
    <section class="row">
        <section class="col-sm-12" id="homepage_info">
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
        </section>
    </section>
</main>
<!-- Show content from wordpress end -->

<!-- Recent blog post -->
<main class="container" id="news">
    <section class="row">
        <section class="col-sm-12">
            <?php dynamic_sidebar( 'home_right_1' ); ?>
    
        </section>
    </section>
</main>

<main class="container-fluid" id="become_dis">
    <section class="row">
        <section class="col-sm-12">
            
            <h2>Join us!</h2>
            <h5>
                Become the smoothest distributor in your district.
                
            </h5>
            <form action="mailto:info@smooth-robotics.dk" method="GET">
                <input type="text" placeholder="Email">
                <input type="submit" value="Send">
            </form>
    
        </section>
    </section>
</main>

<!-- Recent blog post end -->

<?php get_footer(); ?>