<?php
if ( ! isset( $content_width ) )
	$content_width = 624;

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => __( 'Sidebar Widget Area' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area' ),
		'before_widget' => '<div class="widgetBlock">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',        
    ));
	register_sidebar( array(
		'name' => __( 'Footer Widget Area' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );	

function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }


if ( !is_admin() ) {
   wp_register_script('custom_script',
   get_template_directory_uri() . '/js/custom-jquery-script.js');
   wp_enqueue_script('custom_script');
   }       
}

add_action('init', 'my_init_method');

add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 110, 110, true ); // Default size

?>