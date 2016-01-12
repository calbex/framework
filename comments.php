<?php
/**
 * Comments template partial.
 *
 * This include displays the comment trail and the comment form.
 *
 * @package framework
 */

if ( post_password_required() ) {
	return;
}
?>

<section id="comments">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php printf( '%s Comments', get_comments_number(), 'framework' ); ?>
		</h2>

		<?php
		// Start comment nav.
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>

			<nav class="comments-nav">
				<?php previous_comments_link( esc_html__( 'Older Comments', 'framework' ) ); ?>
				<?php next_comments_link( esc_html__( 'Newer Comments', 'framework' ) ); ?>
			</nav><!-- .comments-nav -->

		<?php
		endif;
		// End comment nav.
		?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
		// Start comment nav.
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>

			<nav class="comments-nav">
				<?php previous_comments_link( esc_html__( 'Older Comments', 'framework' ) ); ?>
				<?php next_comments_link( esc_html__( 'Newer Comments', 'framework' ) ); ?>
			</nav><!-- .comments-nav -->

		<?php
		endif;
		// End comment nav.

	endif;

	// If we have no comments display a message.
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'framework' ); ?></p>
	<?php
	endif;

	comment_form();
	?>
</section><!-- #comments -->
