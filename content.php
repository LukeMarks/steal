<article class="clearfix" <?php post_class(); ?>>
	
	<!-- Displays the post thumbnail with 150px on the width and height -->
	<?php the_post_thumbnail( array(150, 150)); ?>
	
	<!-- Displays the title with the permalink to the post -->
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	
	<!-- Displays an excerpt of the content of the current post -->
	<?php the_excerpt(); ?>
</article>