<?php get_header();
    
	// Loops through posts, displays them on the page and applies the template from content.php
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			get_template_part('content');
			
		};
	}

get_footer();