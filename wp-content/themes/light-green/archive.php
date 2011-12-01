<?php get_header(); ?>

	  <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pageTitle"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pageTitle"><?php single_tag_title(); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pageTitle"><?php echo get_the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pageTitle"><?php echo get_the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pageTitle"><?php echo get_the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pageTitle"><?php _e( 'Author Archive', 'light_green' ); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pageTitle"><?php _e( 'Blog Archives', 'light_green' ); ?></h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post-entry">
			<div <?php post_class(); ?>>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<dl class="meta">
						<dt><?php _e( 'Posted on:', 'light_green' ); ?></dt>
						<dd><?php the_time('l, F jS, Y') ?></dd>
						<dt><?php _e( 'Author:', 'light_green' ); ?></dt>
						<dd><?php the_author() ?></dd>
						</dl>
				<div class="post-content">
					<?php the_excerpt() ?>
				</div>
				<p><?php the_tags('Tags: ', ', ', '</p><p>'); ?> <?php _e( 'Posted in', 'light_green' ); ?> <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
		</div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1><?php _e( 'Not found', 'light_green' ); ?></h1>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
