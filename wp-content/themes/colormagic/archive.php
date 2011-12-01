<?php get_header(); ?>

<section id="primary">
  <div id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <header class="page-header">
      <h1 class="page-title">
        <?php if ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: %s', 'colormagic' ), '<span>' . get_the_date() . '</span>' ); ?>
        <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: %s', 'colormagic' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?>
        <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: %s', 'colormagic' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
        <?php else : ?>
        <?php _e( 'Blog Archives', 'colormagic' ); ?>
        <?php endif; ?>
      </h1>
    </header>
    <?php /* Start the Loop */ ?>
    <?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
    <?php colormagic_content_nav( 'nav-below' ); ?>
    <?php else : ?>
    <article id="post-0" class="post no-results not-found">
      <header class="entry-header">
        <h1 class="entry-title">
          <?php _e( 'Nothing Found', 'colormagic' ); ?>
        </h1>
      </header>
      <!-- .entry-header -->
      
      <div class="entry-content">
        <p>
          <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'colormagic' ); ?>
        </p>
        <?php get_search_form(); ?>
      </div>
      <!-- .entry-content --> 
    </article>
    <!-- #post-0 -->
    
    <?php endif; ?>
  </div>
  <!-- #content --> 
</section>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
