<div id="comments" class="div2">
  <?php if ( post_password_required() ) : ?>
  <p class="nopassword">
    <?php _e( 'This post is password protected. Enter the password to view any comments.', 'colormagic' ); ?>
  </p>
</div>
<!-- #comments -->
<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>
<?php // You can start editing here -- including this comment! ?>
<?php if ( have_comments() ) : ?>
<h2 id="comments-title">
  <?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'colormagic' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
</h2>
<ol class="commentlist">
  <?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use colormagic_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define colormagic_comment() and that will be used instead.
				 * See colormagic_comment() in colormagic/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'colormagic_comment' ) );
			?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<nav id="comment-nav-below">
  <h1 class="assistive-text">
    <?php _e( 'Comment navigation', 'colormagic' ); ?>
  </h1>
  <div class="nav-previous">
    <?php previous_comments_link( __( '&larr; Older Comments', 'colormagic' ) ); ?>
  </div>
  <div class="nav-next">
    <?php next_comments_link( __( 'Newer Comments &rarr;', 'colormagic' ) ); ?>
  </div>
</nav>
<?php endif; // check for comment navigation ?>
<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
<p class="nocomments">
  <?php _e( 'Comments are closed.', 'colormagic' ); ?>
</p>
<?php endif; ?>
</div>
<!-- #comments --> 
<?php comment_form(); ?>

