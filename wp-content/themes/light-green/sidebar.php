				</div>
				<!-- /content -->

				
				<!-- sidebar -->
				<div class="sidebar">
			<?php
			if (!dynamic_sidebar('sidebar-widget-area') ) : ?>
				<div class="sidebar-box rightnav">
				<h3 class="box-title"><?php _e( 'Pages', 'light_green' ); ?></h3>
				<ul>
			        <?php wp_list_pages('show_count=1&title_li='); ?>
				</ul>
				</div>

				<div class="sidebar-box rightnav">
				<h3 class="box-title"><?php _e( 'Categories', 'light_green' ); ?></h3>
				<ul>
			        <?php wp_list_categories('show_count=1&title_li='); ?>
				</ul>				
			
				<h3 class="box-title"><?php _e( 'Archives', 'light_green' ); ?></h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				</div>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			
				<div class="sidebar-box rightnav">
				<h3 class="box-title"><?php _e( 'Meta', 'light_green' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</div>
			<?php } ?>

			<?php endif; ?>					
				</div>
				<!-- /sidebar -->

				<div class="clear"></div>
				
			</div>
			<!-- /CONTENT -->	
