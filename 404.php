<?php
/**
 * 404 template.
 *
 * @package framework
 */

get_header(); ?>

			<main id="content" role="main">
				<section class="error-404">
					<header class="page-header">
						<h1 class="page-title">404</h1>
					</header>

					<p><?php esc_html_e( 'Sorry we cannot find what you are looking for. Maybe try a search?', 'framework' ); ?></p>

					<?php get_search_form(); ?>
				</section><!-- .error-404 -->
			</main><!-- #content -->

<?php
get_sidebar();
get_footer();
?>
