<?php

// Define version
define( 'V3', 3.0 );

// Add Rss feed support
add_theme_support( 'automatic-feed-links' );

// Add post thumbnail/featured image support
add_theme_support( 'post-thumbnails' );

// Enqueue Styles and Scripts
function v3_scripts()  {

	// Add stylesheet
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css', array(), V3);

	// Add fitvid
	wp_enqueue_script( 'fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), V3, true );
	
	// Add theme scripts
	wp_enqueue_script( 'v3', get_template_directory_uri() . '/js/theme.min.js', array(), V3, true );

    // Add popper
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/popper/popper.min.js', array(), false, true );

    // Add bootstrap
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), false, true );
  
}
add_action( 'wp_enqueue_scripts', 'v3_scripts' );

// Add class to the_content first paragraph as styling hook
function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="post-meta">', $content, 1);
}
add_filter('the_content', 'first_paragraph');