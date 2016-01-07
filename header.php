<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />        
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	    <div class="page-container">
	    	<header class="mt-15">
	    		<!-- Displays the site title and description in the header using 'bloginfo()' -->
	    		<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	    		<h2><?php bloginfo('description'); ?></h2>
	    	</header>
	    	<nav>
	    		<!-- Inclides the header menu -->
	    		<?php echo wp_nav_menu(array('theme_location' => 'header-menu')); ?>
	    	</nav>
	    	<div class="page-wrapper">
	    		<?php if(is_archive()) : ?>
					<h2 class="header-title"><?php the_archive_title(); ?></h2>
				<?php endif;