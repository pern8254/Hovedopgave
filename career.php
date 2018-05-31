<?php /* Template Name: career */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container-fluid career">
    <section class="row">
        <section class="col-sm-6 push_down" id="col_1">
            
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
            <img src="<?php echo get_template_directory_uri()?>/images/smoothRobotics_4.jpg" alt="" class="half_page">
        </section>
    </section>
</main>

<?php
    //Henter footer.php
    get_footer();
?>