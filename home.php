<?php get_header(2); ?>
    
    <main class="container push_down home">
       <section class="row">
           <section class="col-sm-1"></section>
                <secton class="col-sm-10">
                
                <h1>News from Smooth Robotics</h1>
                
               <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile; endif; 
                ?>
                
                <br>
                
                <nav>
	                <ul class="pager">
		                <li> <?php next_posts_link( 'Previous' ); ?></li>
		                <li><?php previous_posts_link( 'Next' ); ?></li>
	                </ul>
                </nav>
                
                </secton>
            <section class="col-sm-1"></section>
        </section>
    </main>

<?php get_footer(); ?>