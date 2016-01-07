<article <?php post_class(); ?>>
	<header class="mt-15">
		<!-- Displays the title of the post without a link -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content">	
		<!-- Displays the content of the current post -->
		<?php the_content(); ?>
		<!-- Displays the post thumbnail in the 'medium' format -->
		<?php the_post_thumbnail('large'); ?>
	</div>
	<aside class="entry-navigation clearfix">
		<!-- Buttons to navigate to the previous and next posts -->
		<?php 
			previous_post_link('<span class="button button-border prev-post">%link</span>', '<strong>Previous Post</strong><br/>');
			next_post_link('<span class="button button-border next-post">%link</span>', '<strong>Next Post</strong>');
		?>
	</aside>
</article>