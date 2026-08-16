<?php
/**
 * Front-end performance tweaks.
 *
 * @package Proelectric
 */

/**
 * Contact Form 7's reCAPTCHA v3 integration enqueues two footer scripts
 * (google-recaptcha + wpcf7-recaptcha) on every single page, even pages
 * without a form, and executes a background token request on load. Marking
 * them with WordPress's native "defer" loading strategy lets the browser
 * fetch them in parallel with the rest of the page instead of blocking on
 * them, while still preserving execution order (google-recaptcha must run
 * before wpcf7-recaptcha) and CF7's own `DOMContentLoaded` init logic.
 *
 * wp_script_add_data() only takes effect if WordPress' own dependency check
 * finds the whole chain defer-eligible; otherwise it's a silent no-op and
 * behaviour is unchanged, so this cannot regress the form.
 */
function proelectric_defer_recaptcha_scripts() {
    if ( ! wp_script_is( 'google-recaptcha', 'registered' ) ) {
        return;
    }

    wp_script_add_data( 'google-recaptcha', 'strategy', 'defer' );
    wp_script_add_data( 'wpcf7-recaptcha', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'proelectric_defer_recaptcha_scripts', 21 );

/**
 * Contact Form 7's own frontend script (used site-wide by the "Замовити
 * дзвінок" footer form) depends on wp-i18n, which in turn depends on
 * wp-hooks — pulling in hooks.min.js and i18n.min.js on every page even
 * though this theme doesn't use the block editor. Deferring them (rather
 * than removing) keeps the form working while letting the browser fetch
 * them in parallel instead of blocking render.
 */
function proelectric_defer_wp_script_modules() {
    if ( ! wp_script_is( 'wp-i18n', 'registered' ) ) {
        return;
    }

    wp_script_add_data( 'wp-hooks', 'strategy', 'defer' );
    wp_script_add_data( 'wp-i18n', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'proelectric_defer_wp_script_modules', 21 );

/**
 * The theme's own bundle (main-js / scripts.min.js) has no dependencies and
 * only ever runs via a single DOMContentLoaded listener, so deferring it is
 * safe and lets the browser fetch it in parallel with the rest of the page.
 */
function proelectric_defer_main_script() {
    if ( ! wp_script_is( 'main-js', 'registered' ) ) {
        return;
    }

    wp_script_add_data( 'main-js', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'proelectric_defer_main_script', 21 );
