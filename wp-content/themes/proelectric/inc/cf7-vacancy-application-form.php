<?php
/**
 * Programmatically registers a dedicated Contact Form 7 form used on the
 * single vacancy page ("Заявка на вакансію"), including a resume file
 * upload field. Registered in PHP so it stays version-controlled with the
 * theme and needs no manual admin setup, mirroring how ACF field groups are
 * registered elsewhere in this theme.
 *
 * The vacancy title is passed into the form's hidden `vacancy-title` field
 * at render time via WPCF7_ContactForm::form_html()'s shortcode_attr option
 * (see template-parts/career/vacancy-apply.php), not through the
 * [contact-form-7] shortcode, since custom shortcode attributes are
 * stripped before reaching the form.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'proelectric_register_vacancy_application_form', 20 );

function proelectric_register_vacancy_application_form() {

	// Admin screens never need to auto-provision this form, and looking it up
	// via wpcf7_contact_form()/wpcf7_get_contact_form_by_title() would set
	// WPCF7_ContactForm::$current, hijacking the Contact Form 7 list screen
	// into always opening this form's editor instead. Front-end only.
	if ( is_admin() || ! class_exists( 'WPCF7_ContactForm' ) ) {
		return;
	}

	$form_title = 'Заявка на вакансію';
	$form_id    = (int) get_option( 'proelectric_vacancy_form_id' );

	if (
		$form_id &&
		'wpcf7_contact_form' === get_post_type( $form_id ) &&
		'publish' === get_post_status( $form_id )
	) {
		return;
	}

	$existing = get_posts(
		array(
			'post_type'      => 'wpcf7_contact_form',
			'post_status'    => 'publish',
			'title'          => $form_title,
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);

	if ( ! empty( $existing ) ) {
		update_option( 'proelectric_vacancy_form_id', (int) $existing[0] );
		return;
	}

	$form = WPCF7_ContactForm::get_template( array( 'title' => $form_title ) );

	$form->set_properties(
		array(
			'form' => '[hidden vacancy-title default:shortcode_attr]

<div class="form-row">
	<div class="form-group">
		<label>Ваше ім\'я</label>
		[text* your-name]
	</div>
	<div class="form-group">
		<label>Телефон</label>
		[tel* your-phone]
	</div>
</div>

<div class="form-group">
	<label>Email</label>
	[email your-email]
</div>

<div class="form-group">
	<label>Коротко про себе (необов\'язково)</label>
	[textarea your-message]
</div>

<div class="form-group">
	<label>Резюме — PDF або DOC, до 5 МБ (необов\'язково)</label>
	[file resume filetypes:pdf|doc|docx limit:5mb]
</div>

<div class="btn-group">
	[submit class:btn class:btn-primary "Надіслати заявку"]
</div>',
			'mail' => array(
				'subject'            => 'Заявка на вакансію «[vacancy-title]» — [_site_title]',
				'sender'             => sprintf( '[_site_title] <%s>', WPCF7_ContactFormTemplate::from_email() ),
				'body'               => "Нова заявка на вакансію: [vacancy-title]\n\n"
					. "Ім'я: [your-name]\n"
					. "Телефон: [your-phone]\n"
					. "Email: [your-email]\n\n"
					. "Повідомлення:\n[your-message]\n\n"
					. "Резюме: [resume]",
				'recipient'          => 'progreselectric@gmail.com',
				'additional_headers' => 'Reply-To: [your-email]',
				'attachments'        => '[resume]',
				'use_html'           => 0,
				'exclude_blank'      => 0,
			),
		)
	);

	$form->save();

	update_option( 'proelectric_vacancy_form_id', $form->id() );
}
