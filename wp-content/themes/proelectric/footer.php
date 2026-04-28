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
						<a href="#" class="logo">
							<svg class="logo-mark" viewBox="0 0 46 46" fill="none">
								<defs>
									<linearGradient id="flg" x1="0" y1="0" x2="1" y2="1">
									<stop offset="0%" stop-color="#1a5fa8"/>
									<stop offset="100%" stop-color="#2db551"/>
									</linearGradient>
									<clipPath id="fcc"><circle cx="23" cy="23" r="21"/></clipPath>
								</defs>
								<circle cx="23" cy="23" r="22.5" fill="none" stroke="url(#flg)" stroke-width="1" opacity=".3"/>
								<circle cx="23" cy="23" r="21" fill="url(#flg)"/>
								<path d="M14 24 L23 14 L32 24 L30 24 L30 33 L25 33 L25 27 L21 27 L21 33 L16 33 L16 24Z" fill="rgba(255,255,255,0.15)" clip-path="url(#fcc)"/>
								<path d="M25.5 10 L17.5 24.5 H23.5 L20 36 L32 20 H25.5Z" fill="white"/>
							</svg>
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
					<!--<ul class="footer-links">
						<li><a href="#">Сонячні електростанції</a></li>
						<li><a href="#">СЕС для ОСББ</a></li>
						<li><a href="#">СЕС для бізнесу</a></li>
						<li><a href="#">Електромонтажні роботи</a></li>
						<li><a href="#">Електрощитове обладнання</a></li>
					</ul>-->
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
					<!--<ul class="footer-links">
						<li><a href="#">Про нас</a></li>
						<li><a href="#">Проєкти</a></li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Партнери</a></li>
						<li><a href="#">Контакти</a></li>
					</ul>-->
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
					<ul class="footer-links">
						<li><a href="tel:+380630607600">+38 063 060 76 00</a></li>
						<li><a href="tel:+380684526450">+38 068 452 64 50</a></li>
						<li><a href="mailto:progreselectric@gmail.com">progreselectric@gmail.com</a></li>
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

<?php wp_footer(); ?>

</body>
</html>
