<?php get_header(2); ?>
    
    <main class="container push_down" id="blog_entry">
        <section class="row">
           <section class="col-sm-1">
               
           </section>
            <secton class="col-sm-10">
                
           <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>

            </secton>
            <section class="col-sm-1">
                
            </section>
        </section>
    </main>

<?php get_footer(); ?>