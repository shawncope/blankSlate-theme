<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>