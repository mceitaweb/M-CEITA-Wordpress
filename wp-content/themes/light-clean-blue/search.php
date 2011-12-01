<?php get_header(); ?>

	<!-- Start: Left Panel -->
	<div class="leftPanel">

	<?php if (have_posts()) : ?>

		<h2 class="pageTitle">Search Results</h2>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmeta"><?php the_time('l, F jS, Y') ?></small>
				<div class="entryContent">
					<?php the_excerpt(); ?>
				</div>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="pageTitle">No posts found. Try a different search?</h2>
		<?php get_template_part('searchform'); ?>

	<?php endif; ?>

	</div>
	<!-- End: Left Panel -->
	<!-- Start: Right Panel -->
	<div class="rightPan">
		<?php get_sidebar(); ?>
	</div>
	<!-- End: Right Panel -->
	
<?php get_footer(); ?>