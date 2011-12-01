<?php get_header(); ?>

			<?php if (have_posts()) : ?>
		
				<?php while (have_posts()) : the_post(); ?>
					<!-- Start: Post -->
					<div class="post-entry">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<dl class="meta">
						<dt><?php _e( 'Posted on:', 'light_green' ); ?></dt>
						<dd><a href="<?php the_permalink() ?>"><?php the_time( get_option( 'date_format' ) ) ?></a></dd>
						<dt><?php _e( 'Author:', 'light_green' ); ?></dt>
						<dd><?php the_author() ?></dd>
						</dl>	
						<div class="post-content">
						    <?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
						</div>

						<p><?php _e( 'Posted in', 'light_green' ); ?> <?php the_category(', ') ?><?php the_tags( ' | Tags: ', ', ', ''); ?> | <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
					</div>
					<div class="clear"></div>
					</div>
					<!-- End: Post -->
				<?php endwhile; ?>
		
				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
					<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
				</div>
		
			<?php else : ?>
		
				<h2 class="center"><?php _e( 'Not found', 'light_green' ); ?></h2>
				<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'light_green' ); ?></p>
				<?php get_search_form(); ?>
		
			<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
