<?php /* Template Name: distributor */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container-fluid push_down">
    <section class="row">
        <section class="col-sm-6">
            <img src="<?php echo get_template_directory_uri()?>/images/Kort.png" alt="" class="distributor_map">
        </section>
        <section class="col-sm-6 distributor_text">
        <?php    
            //Der skabes et loop som viser posts
          if ( have_posts() ){
              while (have_posts() ){
                  the_post();
                
                //Overskrift
                echo '<h1>';
                the_title();
                echo '</h1>';
            
                ?>
                
                <br><br>
                  
                <?php  
                //Indholdet af post 
                the_content();
       
              } //Slutter while
          } //Slutter if
        ?>
        
        <div class="distributor">
            <h2>Join us!</h2>
            <h5>
                Become the smoothest distributor in your district.
            </h5>
            <form action="mailto:info@smooth-robotics.dk" method="GET">
                <input type="text" placeholder="Email">
                <input type="submit" value="Send">
            </form>
        </div>
        
        </section>
    </section>
</main>


<?php
    //Henter footer.php
    get_footer();
?>