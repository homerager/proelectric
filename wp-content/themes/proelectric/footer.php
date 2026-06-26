<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proelectric
 */

?>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="footer-row">
				<div class="footer-col">
					<div class="footer-brand">
						<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo">
							<img src="<?= get_template_directory_uri(); ?>/images/logo.webp" class="logo-mark" alt="logo">
							<div class="logo-text">
								<span class="brand">ПРОГРЕС ЕЛЕКТРИК</span>
								<span class="sub">Енергетичні рішення</span>
							</div>
						</a>
						<p>Ваша енергетична свобода та безпека. Електромонтажні роботи та сонячні електростанції будь-якого масштабу.</p>
					</div>
				</div>
				<div class="footer-col">
					<div class="footer-col-title">Послуги</div>
					
					<?php
						wp_nav_menu(
							array(
								'container'      => false,
								'menu_class'     => 'footer-links',
								'theme_location' => 'footer_service_menu',
							)
						);
					?>
				</div>
				<div class="footer-col">
					<div class="footer-col-title">Компанія</div>
					<?php
						wp_nav_menu(
							array(
								'container'      => false,
								'menu_class'     => 'footer-links',
								'theme_location' => 'footer_company_menu',
							)
						);
					?>
				</div>
				<div class="footer-col">
					<div class="footer-col-title">Контакти</div>
					<ul class="footer-links footer-contacts">
						<li>
							<div class="info-icon">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
									<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
								</svg>
							</div>	
							<a href="tel:+380630607600">+38 063 060 76 00</a>
						</li>
						<li>
							<div class="info-icon">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
									<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
								</svg>
							</div>
							<a href="tel:+380684526450">+38 068 452 64 50</a>
						</li>
						<li>
							<div class="info-icon">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
									<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
									<polyline points="22,6 12,13 2,6"/>
								</svg>
							</div>
							<a href="mailto:progreselectric@gmail.com">progreselectric@gmail.com</a>
						</li>
						<li>
							<div class="info-icon">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
									<circle cx="12" cy="10" r="3"/>
								</svg>
							</div>
							<span>вул. Навроцького, 33<br>Львів, 79034, Україна</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<span>© <?php echo date('Y'); ?> ТОВ Прогрес Електрик. Всі права захищені.</span>
		</div>
	</div>
</footer>

<button type="button" id="scroll-top" class="scroll-top" aria-label="Догори">
	<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
		<path d="M12 19V5M5 12l7-7 7 7"/>
	</svg>
</button>

<?php wp_footer(); ?>

</body>
</html>
