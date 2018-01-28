<?php

// Define version
define( 'V3', 3.0 );

// Add RSS feed support
add_theme_support( 'automatic-feed-links' );

// Add post thumbnail/featured image support
add_theme_support( 'post-thumbnails' );

// Enqueue styles and scripts
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

// Change the comment reply link to use 'Reply to &lt;Author First Name>'
function add_comment_author_to_reply_link($link, $args, $comment){

    $comment = get_comment( $comment );

    // If no comment author is blank, use 'Anonymous'
    if ( empty($comment->comment_author) ) {
        if (!empty($comment->user_id)){
            $user=get_userdata($comment->user_id);
            $author=$user->user_login;
        } else {
            $author = __('Anonymous');
        }
    } else {
        $author = $comment->comment_author;
    }

    // If the user provided more than a first name, use only first name
    if(strpos($author, ' ')){
        $author = substr($author, 0, strpos($author, ' '));
    }

    // Replace Reply Link with "Reply to &lt;Author First Name>"
    $reply_link_text = $args['reply_text'];
    $link = str_replace($reply_link_text, 'Reply to ' . $author, $link);

    return $link;
}
add_filter('comment_reply_link', 'add_comment_author_to_reply_link', 10, 3);

// Customize comment form submit button
function custom_comment_form_submit_button( $arg ) {
    $arg['class_submit'] = 'btn btn-secondary my-3';
    $arg['label_submit'] = 'Submit&nbsp;&rarr;';
    return $arg;
}
add_filter( 'comment_form_defaults', 'custom_comment_form_submit_button' );