<?php
/*
Plugin Name: Wordpress Sinhala Comments
Plugin URI: https://webexplorar.com/wordpress-sinhala-comments-plugin/
Description: You can comment very easily in sinhala. No need to use any 3rd party sites or Software. Only you must have own a sinhala blog.
Author: Iroshan
Version: 4.1 
Author URI: https://webexplorar.com/wordpress-sinhala-comments-plugin/
*/	

// load jquery library file
function sinhalen_comment_load_jquery_library() {
	wp_enqueue_script('your-handle', '//code.jquery.com/jquery-3.4.1.min.js',  array( 'jquery' ) );
}     
add_action('wp_enqueue_scripts', 'sinhalen_comment_load_jquery_library');


// load script file
function sinhalen_comment_script() {
 	 wp_enqueue_script( 'sinhala-comment-script', plugins_url('js/script.js', __FILE__), array(), '1.0.0', true ); 
}
add_action( 'wp_enqueue_scripts', 'sinhalen_comment_script' );


// load style sheet
function sinhalen_comment_stylesheet() {
        wp_enqueue_style( 'prefix-style', plugins_url('css/style.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'sinhalen_comment_stylesheet' );


?>