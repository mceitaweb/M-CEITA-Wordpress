<?php get_header(); ?>

	<!-- Start: Left Panel -->
	<div class="leftPanel">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entryContent">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                <div class="clear"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

	</div>
	<!-- End: Left Panel -->
	<!-- Start: Right Panel -->
	<div class="rightPan">
		<?php get_sidebar(); ?>
	</div>
	<!-- End: Right Panel -->
	
<?php get_footer(); ?>
