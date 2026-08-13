<?php
/**
 * Proelectric functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Proelectric
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function proelectric_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Proelectric, use a find and replace
		* to change 'proelectric' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'proelectric', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header menu', 'proelectric' ),
			'footer_service_menu' => esc_html__( 'Footer service menu', 'proelectric' ),
			'footer_company_menu' => esc_html__( 'Footer company menu', 'proelectric' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'proelectric_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'proelectric_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function proelectric_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'proelectric_content_width', 640 );
}
add_action( 'after_setup_theme', 'proelectric_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function proelectric_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'proelectric' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'proelectric' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'proelectric_widgets_init' );

/**
 * Determine whether minified assets should be served.
 *
 * Uses the minified build when the site is running in production and
 * SCRIPT_DEBUG isn't forcing unminified sources, falling back to the
 * source file whenever a minified counterpart doesn't exist on disk.
 *
 * @return bool
 */
function proelectric_use_minified_assets() {
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		return false;
	}

	return 'production' === wp_get_environment_type();
}

/**
 * Resolve the theme-relative path to an asset, preferring its minified
 * build when available and appropriate for the current environment.
 *
 * @param string $rel_path Asset path relative to the theme directory, e.g. '/css/style.css'.
 * @return string Resolved theme-relative path.
 */
function proelectric_asset_path( $rel_path ) {
	if ( ! proelectric_use_minified_assets() ) {
		return $rel_path;
	}

	$path_info = pathinfo( $rel_path );
	$min_rel_path = trailingslashit( $path_info['dirname'] ) . $path_info['filename'] . '.min.' . $path_info['extension'];

	if ( file_exists( get_template_directory() . $min_rel_path ) ) {
		return $min_rel_path;
	}

	return $rel_path;
}

/**
 * Enqueue scripts and styles.
 */
function proelectric_scripts() {
	$theme_dir = get_template_directory();

	$script_rel = proelectric_asset_path( '/js/scripts.js' );
	$style_rel  = proelectric_asset_path( '/css/style.css' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . $script_rel, array(), filemtime( $theme_dir . $script_rel ), true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . $style_rel, array(), filemtime( $theme_dir . $style_rel ) );

	//wp_enqueue_script('main-js',  get_template_directory_uri() . '/js/scripts.js', array(), filemtime( $theme_dir . '/js/scripts.js' ), true);
	//wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION );
	//wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), filemtime( $theme_dir . '/css/style.css' ) );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'proelectric_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Schema.org JSON-LD structured data.
 */
require get_template_directory() . '/inc/schema.php';

/**
 * Front-end performance tweaks.
 */
require get_template_directory() . '/inc/performance.php';

/**
 * Shared FAQ content (question/answer groups).
 */
require get_template_directory() . '/inc/faq-data.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * ACF field group for the projects custom post type.
 */
require get_template_directory() . '/inc/acf-project-fields.php';

/**
 * ACF flexible-content page builder for the Projects page template.
 */
require get_template_directory() . '/inc/acf-projects-page-fields.php';

/**
 * ACF flexible-content page builder for the Home page template.
 */
require get_template_directory() . '/inc/acf-home-page-fields.php';

/**
 * ACF field group for the vacancy custom post type.
 */
require get_template_directory() . '/inc/acf-vacancy-fields.php';

/**
 * Contact Form 7 form for vacancy applications (resume upload).
 */
require get_template_directory() . '/inc/cf7-vacancy-application-form.php';

/**
 * ACF theme settings options page (messenger links etc.).
 */
require get_template_directory() . '/inc/acf-theme-settings-fields.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Fall back to the parent post's title when an attachment has no
 * "Alternative Text" set in the Media Library, so post thumbnails never
 * render with an empty alt attribute.
 */
function proelectric_fallback_image_alt( $attr, $attachment, $size ) {
    if ( ! empty( $attr['alt'] ) ) {
        return $attr;
    }

    $title = $attachment->post_parent ? get_the_title( $attachment->post_parent ) : get_the_title( $attachment );

    if ( $title ) {
        $attr['alt'] = $title;
    }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'proelectric_fallback_image_alt', 10, 3 );

remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

function proelectric_remove_cf7_styles() {
    wp_dequeue_style('contact-form-7');
    wp_deregister_style('contact-form-7');
}
add_action('wp_print_styles', 'proelectric_remove_cf7_styles', 100);

function proelectric_add_ga4() {
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V1MG150GJB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-V1MG150GJB');
    </script>
    <?php
}
add_action('wp_head', 'proelectric_add_ga4', 1);

function proelectric_add_hreflang() {
    global $wp;

    $locale  = str_replace( '_', '-', get_locale() );
    $current = is_front_page() ? home_url( '/' ) : home_url( add_query_arg( array(), $wp->request ) . '/' );

    echo '<link rel="alternate" hreflang="' . esc_attr( $locale ) . '" href="' . esc_url( $current ) . '">' . "\n";
    echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( $current ) . '">' . "\n";
}
add_action('wp_head', 'proelectric_add_hreflang', 1);