<article id="post-<?php the_ID(); ?>" <?php post_class('div1'); ?>>
  <header class="entry-header">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header>
  <!-- .entry-header -->
  
  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'colormagic' ) . '</span>', 'after' => '</div>' ) ); ?>
  </div>
  <!-- .entry-content -->
  
  <footer class="entry-meta">
    <?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'colormagic' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'colormagic' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'Posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'colormagic' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'Posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'colormagic' );
			} else {
				$utility_text = __( 'Posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'colormagic' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
    <?php edit_post_link( __( 'Edit', 'colormagic' ), '<span class="edit-link">', '</span>' ); ?>
  </footer>
  <!-- .entry-meta --> 
</article>
<div id="postnavi">
  <div class="left">
    <?php previous_post_link('&laquo; %link') ?>
  </div>
  <div class="right textright">
    <?php next_post_link('%link &raquo;') ?>
  </div>
</div>
