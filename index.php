<?php
/**
 * Main template.
 *
 * This template is used to display content when no other conditions are met.
 * A page will fallback to this template if no other template exists.
 *
 * @package framework
 */

get_header(); ?>

			<main id="content" role="main">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php single_post_title(); ?></h1>
						</header><!-- .page-header -->
					<?php
					endif;

					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the template partial associated with the post format.
						get_template_part( 'templates/content', get_post_format() );

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
