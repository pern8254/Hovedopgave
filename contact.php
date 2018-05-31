<?php /* Template Name: contact */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>

<main class="container push_down">
    <section class="row">
        <section class="col-sm-6 contact">
            
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
        
        <section class="col-sm-6">
            <iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2284.286359459878!2d10.607997388320264!3d55.07323627390487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464d330a76211d6d%3A0x6265eb27977fa904!2sPorthusvej+71%2C+5700+Svendborg!5e0!3m2!1sda!2sdk!4v1527148798504"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    </section>
    
    <!-- Smooth Robotics team --> 
    <section class="row team">
        <section class="col-sm-4 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/Erik.JPG" alt="" class="team_img">
            <p>
                <b>Erik Mønster</b> <br>
                CEO <br>
                +4541273712 <br>
                em@smooth-robotics.dk
            </p>
        </section>
        <section class="col-sm-4 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/Jens.JPG" alt="" class="team_img">
            <p>
                <b>Jens Cortsen</b> <br>
                Founder &amp; CTO <br>
                +4526257796 <br>
                jc@smooth-robotics.dk
            </p>
        </section>
        <section class="col-sm-4 ml-auto text-center">
            <img src="<?php echo get_template_directory_uri()?>/images/Jonas.JPG" alt="" class="team_img">
            <p>
                <b>Jonas Skov Jensen</b> <br>
                Development, Support <br>
                +4528782325 <br>
                jsj@smooth-robotics.dk
            </p>
        </section>
    </section>
    
    
</main>

<?php
    //Henter footer.php
    get_footer();
?>