<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
	<aside id="secondary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
			
				<?php dynamic_sidebar( 'blog-sidebar' ); ?>

			</div>
		</div>
	</aside><!-- #secondary -->
<?php endif; ?>