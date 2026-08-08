<?php
/**
 * Vacancy application section for single-vacancy.php.
 *
 * Renders contact details plus the dedicated "Заявка на вакансію" Contact
 * Form 7 form (registered in inc/cf7-vacancy-application-form.php), which
 * includes a resume file upload field. The vacancy title is passed into the
 * form's hidden `vacancy-title` field via form_html()'s shortcode_attr option.
 *
 * Expected $args:
 *   - vacancy_title (string) title of the vacancy being applied to
 *   - form_id       (int)    optional CF7 form ID override; defaults to
 *                             proelectric_get_vacancy_form_id() (admin-selected
 *                             form, or the auto-registered "Заявка на вакансію")
 *
 * @package Proelectric
 */

$vacancy_title = $args['vacancy_title'] ?? '';
$form_id       = $args['form_id'] ?? proelectric_get_vacancy_form_id();
$form          = $form_id ? wpcf7_contact_form( $form_id ) : null;
?>
<section class="page-section" id="contact">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Приєднуйтесь до команди</h3>
			<h2 class="section-title">НАДІШЛІТЬ РЕЗЮМЕ</h2>
		</div>
		<div class="contact-inner wf-animate-grid d-grid md-grid-2-columns md-gap-64">
			<div class="wf-animate">
				<div class="contact-detail">
					<div class="c-icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
						</svg>
					</div>
					<div>
						<div class="c-label">Телефон</div>
						<a href="tel:+380630607600" class="c-value">+38 063 060 76 00</a>
						<a href="tel:+380684526450" class="c-value">+38 068 452 64 50</a>
					</div>
				</div>
				<div class="contact-detail">
					<div class="c-icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
							<polyline points="22,6 12,13 2,6"/>
						</svg>
					</div>
					<div>
						<div class="c-label">Email</div>
						<a href="mailto:progreselectric@gmail.com" class="c-value">progreselectric@gmail.com</a>
					</div>
				</div>
			</div>
			<div class="contact-form wf-animate">
				<?php if ( $form ) : ?>
					<?= $form->form_html( array( 'vacancy-title' => $vacancy_title ) ) ?>
				<?php else : ?>
					<p>Форма заявки тимчасово недоступна. Зателефонуйте нам напряму або напишіть на пошту вище.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
