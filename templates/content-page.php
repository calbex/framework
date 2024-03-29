<?php
/**
 * Page template partial.
 *
 * @package framework
 */
?>

<article <?php post_class(); ?>>
	<header class="page-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'framework' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="page-footer">
		<?php
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'framework' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .page-footer -->
</article><!-- .page -->
