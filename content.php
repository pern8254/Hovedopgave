<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta "><?php the_date(); ?></p>

 <?php if ( has_post_thumbnail() ) {?>
	<div class="row thumbnail">
		<div class="col-md-4 text-center">
		    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			
		</div>
		<div class="col-md-8">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read more...</a>
		</div>
	</div>
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">Read more...</a>
	<?php } ?>

</div><!-- /.blog-post -->