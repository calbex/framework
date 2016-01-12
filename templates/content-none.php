<?php
/**
 * No content template partial.
 *
 * @package framework
 */
?>

<section <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'framework' ); ?></h1>
	</header><!-- .page-header -->

	<?php
	if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'framework' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'framework' ); ?></p>
		<?php
		get_search_form();

	else : ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'framework' ); ?></p>
		<?php
		get_search_form();

	endif; ?>
</section><!-- .page -->
