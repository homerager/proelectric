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
		<div class="header-inner">
			<div class="header-row">
				<?php $header_messengers = function_exists( 'proelectric_get_messengers' ) ? proelectric_get_messengers() : array(); ?>
				<div class="site-logo">
					<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo">
						<img src="<?= get_template_directory_uri(); ?>/images/logo.webp" class="logo-mark" alt="Прогрес електрик">
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
					<div class="mobile-contacts">
						<a href="tel:+380630607600" class="mobile-contacts-phone">+38 063 060 76 00</a>
						<a href="tel:+380684526450" class="mobile-contacts-phone">+38 068 452 64 50</a>
						<?php if ( $header_messengers ) : ?>
							<div class="mobile-contacts-messengers">
								<?php foreach ( $header_messengers as $key => $messenger ) : ?>
									<a href="<?= esc_url( $messenger['url'] ) ?>" class="messenger-btn messenger-<?= esc_attr( $key ) ?>" target="_blank" rel="noopener" aria-label="Написати у <?= esc_attr( $messenger['label'] ) ?>" title="<?= esc_attr( $messenger['label'] ) ?>">
										<?= proelectric_messenger_icon( $key ) ?>
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="nav-cta d-lg-flex d-none">
					<?php if ( $header_messengers ) : ?>
						<div class="header-messengers">
							<?php foreach ( $header_messengers as $key => $messenger ) : ?>
								<a href="<?=  $messenger['url'] ?>" class="messenger-btn messenger-btn-sm messenger-<?= esc_attr( $key ) ?>" target="_blank" rel="noopener" aria-label="Написати у <?= esc_attr( $messenger['label'] ) ?>" title="<?= esc_attr( $messenger['label'] ) ?>">
									<?= proelectric_messenger_icon( $key ) ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<div class="header-contacts">
						<button type="button" class="header-contacts-toggle" aria-expanded="false" aria-controls="header-contacts-dropdown">
							+38 063 060 76 00
							<svg class="caret" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
						</button>
						<div class="header-contacts-dropdown" id="header-contacts-dropdown">
							<a href="tel:+380630607600" class="header-contact-item">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								+38 063 060 76 00
							</a>
							<a href="tel:+380684526450" class="header-contact-item">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								+38 068 452 64 50
							</a>
							<a href="mailto:progreselectric@gmail.com" class="header-contact-item">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
								progreselectric@gmail.com
							</a>
							<span class="header-contact-item">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
								вул. Навроцького, 33,<br>Львів, 79034, Україна
							</span>
						</div>
					</div>
					<a href="#contact" class="btn btn-primary scroll-to-btn consultation-btn">Консультація</a>
				</div>
				<button type="button" class="navbar-toggles" aria-label="toggle">
					<span class="nav-icons"></span>
				</button>
			</div>	
		</div>
	</div>
</header>
