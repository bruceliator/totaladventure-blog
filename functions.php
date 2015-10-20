<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$content_width = 450;

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 644, 208, true ); // Normal post thumbnails 

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
	register_taxonomy( 'countries', 'post', array( 'hierarchical' => false, 'label' => 'Countries', 'query_var' => true, 'rewrite' => true ) );
	
}
function custom_tax_title() {
	echo end(explode('|', wp_title('|',false,'')));
}

?>
