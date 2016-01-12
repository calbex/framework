<?php
/**
 * Header template partial.
 *
 * This include displays our theme header, everything from the opening <html>
 * to the end of <nav>.
 *
 * @package framework
 */
?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="content">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'framework' ); ?></a>

		<div id="container">
			<header id="header" role="banner">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php if ( get_bloginfo( 'description' ) ) : ?>
					<p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>
			</header><!-- #header -->

			<nav id="primary-nav">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' => ''
					) );
				?>
			</nav><!-- #primary-nav -->
