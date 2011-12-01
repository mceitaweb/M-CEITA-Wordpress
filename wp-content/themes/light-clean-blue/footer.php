</div>
	<!-- End: Body Content -->
</div>
<!-- End: Main Container -->
</div>
<!-- Start: Footer -->
<div class="footer">
	<div class="inner">
		<p class="logo"><?php bloginfo('name'); ?></p>
		<div class="right">
			 <?php wp_nav_menu( array( 'menu' => 'Footer Navigation', 'container' => 'div','container_id' => 'footer-navi', 'depth' => '1', 'theme_location' => 'footer-menu') ); ?>
			<?php dynamic_sidebar('footer-widget-area'); ?>
			<div class="credits">Powered by <a href="http://wordpress.org/">Wordpress</a>. Design by <a href="http://handla-online.org/">Handla Online</a>.</div>
		</div>
	</div>
</div>
<!-- End: Footer -->

		<?php wp_footer(); ?>
</body>
</html>
