<?php
/**
 * Search result template partial.
 *
 * @package framework
 */
?>

<article <?php post_class(); ?>>
	<header class="post-header">
		<?php
		the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>
		<div class="post-meta">
			<?php framework_posted_on(); ?>
		</div><!-- .post-meta -->
		<?php endif; ?>
	</header><!-- .post-header -->

	<?php the_excerpt(); ?>

	<footer class="post-footer">
		<?php framework_post_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- .post -->
