<?php 

	// Enables Support for Post Thumbnails
	add_theme_support('post-thumbnails');
	
	// Registers menus in the header and footer of the pages
	function register_my_menu() {
	  register_nav_menu('header-menu', 'Header Menu');
	  register_nav_menu('footer-menu', 'Footer Menu');
	}
	
	// Executes the function 'register_my_menu' when the page is initialised
	add_action( 'init', 'register_my_menu' );
	
	// Sets the excerpt length to a specified length - the value returned by the function
	function custom_excerpt_length($length) {
		return 30;
	}
	// Adds the filter 'excerpt_length' to the 'custom_excerpt_length' function
	add_filter('excerpt_length', 'custom_excerpt_length');
	
	// Enqueues the main.css and scrips.js files
	// 'get_template_directory_uri()' gets the directory up to the 'luke' folder, then the rest is added to the end with '.'
	function theme_name_scripts() {
		wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '0.0.1', true);
	}
	add_action('wp_enqueue_scripts', 'theme_name_scripts');