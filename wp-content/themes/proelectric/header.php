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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="header">
	<div class="container">
		<div class="header-row">
			<div class="site-logo">
				<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo">
					<svg class="logo-mark" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="lg1" x1="0" y1="0" x2="1" y2="1">
							<stop offset="0%"   stop-color="#1a5fa8"/>
							<stop offset="100%" stop-color="#2db551"/>
							</linearGradient>
							<clipPath id="cc"><circle cx="23" cy="23" r="21"/></clipPath>
						</defs>
						<!-- glow ring -->
						<circle cx="23" cy="23" r="22.5" fill="none" stroke="url(#lg1)" stroke-width="1" opacity=".4"/>
						<!-- filled circle -->
						<circle cx="23" cy="23" r="21" fill="url(#lg1)"/>
						<!-- subtle house silhouette -->
						<path d="M14 24 L23 14 L32 24 L30 24 L30 33 L25 33 L25 27 L21 27 L21 33 L16 33 L16 24Z"
								fill="rgba(255,255,255,0.15)" clip-path="url(#cc)"/>
						<!-- lightning bolt -->
						<path d="M25.5 10 L17.5 24.5 H23.5 L20 36 L32 20 H25.5Z" fill="white"/>
						<!-- inner ring -->
						<circle cx="23" cy="23" r="21" fill="none" stroke="rgba(255,255,255,0.18)" stroke-width=".7"/>
					</svg>
					<div class="logo-text">
						<span class="brand">ПРОГРЕС ЕЛЕКТРИК</span>
						<span class="sub">Енергетичні рішення</span>
					</div>
				</a>
			</div>
			<div class="page-menu navbar-collapse flex-1">
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
			</div>
			<div class="nav-cta">
				<a href="tel:+380630607600" class="nav-phone">+38 063 060 76 00</a>
				<a href="#contact" class="btn btn-primary">Консультація</a>
			</div>
		</div>	
	</div>
</header>
