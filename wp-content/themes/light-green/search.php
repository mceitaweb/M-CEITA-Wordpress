<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1 class="content-title"><?php _e( 'Search results', 'light_green' ); ?></h1>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post-entry">
			<div <?php post_class(); ?>>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmeta"><?php the_time('l, F jS, Y') ?></p>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> <?php _e( 'Posted in', 'light_green' ); ?> <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
		</div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1><?php _e( 'No posts found. Try a different search?', 'light_green' ); ?></h1>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>