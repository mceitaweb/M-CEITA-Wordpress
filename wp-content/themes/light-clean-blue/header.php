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
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapperBg">
<!-- Start: Main Container -->
<div class="mainCont">
	<!-- Start: Header -->
	<div class="header">
		<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<?php get_template_part('searchform'); ?>
	</div>
	<!-- End: Header -->
	<!-- Start: Header menu -->
	<div class="headerMenu">
		<span></span>
		<span class="rightBg"></span>
		<ul>
			<li class="home"><a href="<?php echo home_url(); ?>/"><strong><?php bloginfo('name'); ?></strong></a></li>
			<?php wp_list_pages('depth=3&sort_column=menu_order&title_li='); ?> 
		</ul>
	</div>
	<div class="clear"></div>
	<!-- End: Header menu -->
	<!-- Start: Body Content -->
	<div class="bodyContent">
