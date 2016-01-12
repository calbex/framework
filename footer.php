<?php
/**
 * Footer template partial.
 *
 * This include displays our theme footer, everything from the beginning of
 * <footer> to the closing <html>.
 *
 * @package framework
 */
?>

			<footer id="footer" role="contentinfo">
				<?php printf( esc_html__( 'Designed by %1$s', 'framework' ), '<a href="http://www.hoverthemes.com">Hover Themes</a>' ); ?>
			</footer><!-- #footer -->
		</div><!-- #container -->

		<?php wp_footer(); ?>
	</body>
</html>
