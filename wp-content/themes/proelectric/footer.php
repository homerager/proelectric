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
