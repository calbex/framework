<?php
/**
 * Post template partial.
 *
 * @package framework
 */
?>

<article <?php post_class(); ?>>
	<header class="post-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="post-title">', '</h1>' );
		} else {
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		if ( 'post' === get_post_type() ) :
		?>
		<div class="post-meta">
			<?php framework_posted_on(); ?>
		</div><!-- .post-meta -->
		<?php endif; ?>
	</header><!-- .post-header -->

	<?php
	the_content( sprintf(
		wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'framework' ), array( 'span' => array( 'class' => array() ) ) ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	) );

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'framework' ),
		'after'  => '</div>',
	) );
	?>

	<footer class="post-footer">
		<?php framework_post_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- .post -->
