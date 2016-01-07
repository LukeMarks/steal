<?php get_header();
    
	// Loops through posts, displays them on the page and applies the template from content-single.php - as long as it can be found
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			get_template_part('content', 'single');
			
		};
	}

get_footer();