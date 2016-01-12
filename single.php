<?php
/**
 * Single post template.
 *
 * @package framework
 */

get_header(); ?>

 			<main id="content" role="main">
 				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the template partial associated with the post format.
					get_template_part( 'templates/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have more than 1 comment, include the comments template partial.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;
				// End the loop.
 				?>
 			</main><!-- #content -->

<?php
get_sidebar();
get_footer();
?>
