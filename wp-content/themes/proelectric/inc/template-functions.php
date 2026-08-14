<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Proelectric
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function proelectric_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'proelectric_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function proelectric_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'proelectric_pingback_header' );

/**
 * Post view counter.
 */

/**
 * Get the recorded view count for a post.
 *
 * @param int $post_id Post ID.
 * @return int
 */
function proelectric_get_post_views( $post_id ) {
	return (int) get_post_meta( $post_id, '_proelectric_views', true );
}

/**
 * Track a single view of the current post, at most once per visitor per day.
 */
function proelectric_maybe_track_post_view() {
	if ( ! is_singular( 'post' ) || is_admin() || is_preview() ) {
		return;
	}

	$post_id = get_queried_object_id();
	if ( ! $post_id ) {
		return;
	}

	$cookie_name = 'proelectric_viewed_' . $post_id;
	if ( isset( $_COOKIE[ $cookie_name ] ) ) {
		return;
	}

	update_post_meta( $post_id, '_proelectric_views', proelectric_get_post_views( $post_id ) + 1 );

	if ( ! headers_sent() ) {
		setcookie( $cookie_name, '1', time() + DAY_IN_SECONDS, COOKIEPATH ? COOKIEPATH : '/', COOKIE_DOMAIN );
	}
}
add_action( 'wp', 'proelectric_maybe_track_post_view' );

/**
 * Pick the correct Ukrainian plural form for a number.
 *
 * @param int    $number Count.
 * @param string $one    Form for 1, 21, 31 ... (перегляд).
 * @param string $few    Form for 2-4, 22-24 ... (перегляди).
 * @param string $many   Form for 5-20, 25-30 ... (переглядів).
 * @return string
 */
function proelectric_ukr_plural( $number, $one, $few, $many ) {
	$number = abs( (int) $number );
	$mod10  = $number % 10;
	$mod100 = $number % 100;

	if ( 1 === $mod10 && 11 !== $mod100 ) {
		return $one;
	}

	if ( $mod10 >= 2 && $mod10 <= 4 && ( $mod100 < 12 || $mod100 > 14 ) ) {
		return $few;
	}

	return $many;
}
