<?php
/**
 * The header template
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
<?php global $options;
foreach ($options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php global $page, $paged;
	wp_title( '', true, 'right' );
	// Add the blog description for the home/front page.
	$site_name = get_bloginfo( 'name', 'display' );
	if ( $site_name && ( is_home() || is_front_page() ) )
		echo " $site_name";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'wplook' ), max( $paged, $page ) );
	?></title>
<?php wplook_meta_description();?>

<meta name="keywords" content="<?php echo $wpl_meta_keywords; ?>" />
<link rel="shortcut icon" href="<?php echo $wpl_favicon_url; ?>" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png" />
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php echo stripslashes($wpl_ga_code); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/showcase.js"></script>
<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/accordion.js"></script>
	</head>
<body <?php body_class('two-column right-sidebar'); ?>>
<div id="page">
<header id="branding">
<a href="/?page_id=569"><img src="/wp-content/uploads/2012/02/MCEITA-logo.jpg" style="width: 960px;"/></a>
</header>

<?php if ($wpl_menu == '' || $wpl_menu == 'Display') { ?>
<nav>
	<?php wp_nav_menu( array('depth' => '3', 'theme_location' => 'primary' )); ?>
	<div class="left-corner"></div>
	<div class="right-corner"></div>
</nav>
<?php } ?>
<div id="header-image">	
<?php
				//Code from 2011 theme by wordpress theme team
				//Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :	?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>
			<?php // Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
<?php endif; ?>

</div>
<div id="main">