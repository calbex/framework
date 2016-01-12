<?php
/**
 * Archive template.
 *
 * @package framework
 */

get_header(); ?>

			<main id="content" role="main">
				<?php
				if ( have_posts() ) : ?>

						<header class="page-header">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
							<?php the_archive_description( '<p class="page-description">', '</p>' ); ?>
						</header>

					<?php
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
