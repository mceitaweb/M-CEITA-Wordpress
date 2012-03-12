<?php
/*
Template Name: Home
*/
get_header(); ?>
<div class="entry-content"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wplook' ) ); ?></div>
<?php get_footer(); ?>
<style type='text/css'>
#primary {
	visibility: hidden;
}
#secondary {
	display: none;
}
#main {
	background: white;
}
</style>
