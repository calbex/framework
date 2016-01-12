<?php
/**
 * Search results template.
 *
 * @package framework
 */

get_header(); ?>

			<main id="content" role="main">
				<?php
				if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'framework' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'templates/content', 'search' );

					endwhile;
					// End the loop.

					the_posts_navigation();

				else :

					get_template_part( 'templates/content', 'none' );

				endif;
				?>
			</main><!-- #content -->

<?php
get_sidebar();
get_footer();
?>
