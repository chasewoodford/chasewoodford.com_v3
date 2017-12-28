<?php


// Define the version so we can easily replace it throughout the theme
define( 'V3', 3.0 );

// Add Rss feed support to Head section
add_theme_support( 'automatic-feed-links' );

// Add post thumbnail/featured image support
add_theme_support( 'post-thumbnails' );

// Register main menu for Wordpress use
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'v3' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

// Enqueue Styles and Scripts
function v3_scripts()  {

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'v3-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), V3, true );
	
	// add theme scripts
	wp_enqueue_script( 'v3', get_template_directory_uri() . '/js/theme.min.js', array(), V3, true );
  
}
add_action( 'wp_enqueue_scripts', 'v3_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

// Add class to the_content first paragraph as styling hook
function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="post-meta">', $content, 1);
}
add_filter('the_content', 'first_paragraph');