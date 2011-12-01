<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1 class="content-title"><?php the_title(); ?></h1>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                <div class="clear"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<p><?php _e( 'Posted in', 'light_green' ); ?> <?php the_category(', ') ?></p>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
		<?php get_sidebar(); ?>
<?php get_footer(); ?>
