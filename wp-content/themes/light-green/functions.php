<?php
if ( ! isset( $content_width ) )
$content_width = 707;

				
				

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area' ),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area' ),
	'before_widget' => '<div class="sidebar-box rightnav">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="box-title">',
	'after_title' => '</h3>',        
));

register_sidebar( array(
	'name' => __( 'Footer Widget Area' ),
	'id' => 'footer-widget-area',
	'description' => __( 'The footer widget area' ),
	'before_widget' => '<div class="widget-footer">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',  
));


register_nav_menus(
	array(
	  'primary' => 'Header Menu'
	)
);



function light_green_init_method() {
   if ( ! is_admin() ) {
      wp_enqueue_script( 'jquery' );
      wp_register_script( 'custom_script_1', get_template_directory_uri() . '/js/general.js', array( 'jquery' ), null );
      wp_enqueue_script( 'custom_script_1' );
   }
}



add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

add_action('init', 'light_green_init_method');

set_post_thumbnail_size( 110, 110, true ); // Default size


// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('light_green', get_template_directory() . '/languages'); 

?>