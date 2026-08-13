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
