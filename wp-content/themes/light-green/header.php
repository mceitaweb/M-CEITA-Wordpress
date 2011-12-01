<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s'), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lte IE 9]><link href="<?php echo get_template_directory_uri(); ?>/css/ie.css" rel="stylesheet" media="screen" type="text/css" /><![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="main-container">
		
		<div class="main-box">
			
			<!-- HEADER -->
			<div class="header">
				<div class="site-name"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></div>
				<div class="tagline"><?php bloginfo('description'); ?></div>
			</div>
			<!-- /HEADER -->
			
			<div class="mainnav">
				<?php wp_nav_menu( array('menu' => 'primary', 'depth' => '2', 'theme_location' => 'primary') ); ?>
			</div>			
			
			<!-- CONTENT -->
			<div class="content-container">
				
				<!-- content -->
				<div class="content">
				