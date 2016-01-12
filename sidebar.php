<?php
/**
 * Sidebar template partial.
 *
 * This include contains our main widget area.
 *
 * @package framework
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ) ?>
</aside><!-- #widget-area -->
