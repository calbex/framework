<?php
/**
 * Custom template tags used throughout this theme.
 *
 * @package framework
 */

 if ( ! function_exists( 'framework_posted_on' ) ) :
 /**
  * Prints HTML with meta information for the current post-date/time and author.
  */
 function framework_posted_on() {
 	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
 	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
 		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
 	}

 	$time_string = sprintf( $time_string,
 		esc_attr( get_the_date( 'c' ) ),
 		esc_html( get_the_date() ),
 		esc_attr( get_the_modified_date( 'c' ) ),
 		esc_html( get_the_modified_date() )
 	);

 	$posted_on = sprintf(
 		esc_html_x( 'Posted on %s', 'post date', 'framework' ),
 		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
 	);

 	$byline = sprintf(
 		esc_html_x( 'by %s', 'post author', 'framework' ),
 		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
 	);

 	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

 }
 endif;

 if ( ! function_exists( 'framework_post_footer' ) ) :
 /**
  * Prints HTML with meta information for the categories, tags and comments.
  */
 function framework_post_footer() {
 	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
 		echo '<span class="comments-link">';
 		comments_popup_link( esc_html__( 'Leave a comment', 'framework' ), esc_html__( '1 Comment', 'framework' ), esc_html__( '% Comments', 'framework' ) );
 		echo '</span>';
 	}

 	edit_post_link(
 		sprintf(
 			/* translators: %s: Name of current post */
 			esc_html__( 'Edit %s', 'framework' ),
 			the_title( '<span class="screen-reader-text">"', '"</span>', false )
 		),
 		'<span class="edit-link">',
 		'</span>'
 	);
 }
 endif;
