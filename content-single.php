<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?></p>
    
       <div class="news_img">
           <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
    } ?>
       </div>
        
    <br><br>
  
 <?php the_content(); ?>

</div><!-- /.blog-post -->