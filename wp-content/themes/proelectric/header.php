<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proelectric
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<meta hid="google-site-verification" name="google-site-verification" content="r8g3Wy30VM5toMXwaYU-dpJhmpN8NUTkyeNx0yFYp-E">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="header">
	<div class="container">
		<div class="header-row">
			<div class="site-logo">
				<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo">
					<img src="<?= get_template_directory_uri(); ?>/images/logo.webp" class="logo-mark" alt="logo">
					<div class="logo-text">
						<span class="brand">ПРОГРЕС ЕЛЕКТРИК</span>
						<span class="sub">Енергетичні рішення</span>
					</div>
				</a>
			</div>
			<div class="header-menu-navbar page-menu navbar-collapse">
				<nav class="main-nav">
					<?php
						wp_nav_menu(
							array(
								'container'      => false,
								'theme_location' => 'header_menu',
								'menu_id'        => 'header-menu',
								'menu_class'     => 'menu'
							)
						);
					?>
				</nav>
			</div>
			<div class="nav-cta d-lg-flex d-none">
				<a href="tel:+380630607600" class="nav-phone">+38 063 060 76 00</a>
				<a href="#contact" class="btn btn-primary scroll-to-btn">Консультація</a>
			</div>
			<button type="button" class="navbar-toggles" aria-label="toggle">
				<span class="nav-icons"></span>
			</button>
		</div>	
	</div>
</header>
