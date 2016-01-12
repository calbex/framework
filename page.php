<?php
/**
 * Page template.
 *
 * This template is the default template used to display content for pages.
 * Keep in mind this template can be overriden with custom page templates.
 *
 * @package framework
 */

get_header(); ?>

 			<main id="content" role="main">
 				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'templates/content', 'page' );

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
