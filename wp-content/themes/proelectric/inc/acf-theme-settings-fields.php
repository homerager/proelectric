<?php
/**
 * ACF theme settings options page.
 *
 * Registers a "Налаштування теми" admin page with messenger links
 * (Viber / Telegram / WhatsApp) shown next to the callback FAB and inside
 * the callback modal (see footer.php). Registered in PHP so it stays
 * version-controlled with the theme and needs no manual admin setup.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'proelectric_register_theme_settings' );

function proelectric_register_theme_settings() {

	if ( ! function_exists( 'acf_add_options_page' ) || ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_options_page(
		array(
			'page_title' => 'Налаштування теми',
			'menu_title' => 'Налаштування теми',
			'menu_slug'  => 'theme-settings',
			'capability' => 'manage_options',
			'icon_url'   => 'dashicons-admin-generic',
			'redirect'   => false,
		)
	);

	acf_add_local_field_group(
		array(
			'key'    => 'group_theme_messengers',
			'title'  => 'Месенджери',
			'fields' => array(
				array(
					'key'           => 'field_theme_messenger_viber',
					'label'         => 'Viber',
					'name'          => 'messenger_viber',
					'type'          => 'text',
					'instructions'  => 'Формат: viber://chat?number=%2B380XXXXXXXXX. Залиште порожнім, щоб сховати кнопку.',
					'default_value' => 'viber://chat?number=%2B380630607600',
				),
				array(
					'key'           => 'field_theme_messenger_telegram',
					'label'         => 'Telegram',
					'name'          => 'messenger_telegram',
					'type'          => 'text',
					'instructions'  => 'Формат: https://t.me/username або https://t.me/+380XXXXXXXXX. Залиште порожнім, щоб сховати кнопку.',
					'default_value' => 'https://t.me/+380630607600',
				),
				array(
					'key'           => 'field_theme_messenger_whatsapp',
					'label'         => 'WhatsApp',
					'name'          => 'messenger_whatsapp',
					'type'          => 'text',
					'instructions'  => 'Формат: https://wa.me/380XXXXXXXXX (без «+»). Залиште порожнім, щоб сховати кнопку.',
					'default_value' => 'https://wa.me/380630607600',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order'      => 0,
			'position'        => 'normal',
			'style'           => 'default',
			'label_placement' => 'top',
			'active'          => true,
		)
	);
}

/**
 * Returns configured messenger links: array of key => [url, label].
 */
function proelectric_get_messengers() {
	if ( ! function_exists( 'get_field' ) ) {
		return array();
	}

	$messengers = array(
		'viber'    => array( 'url' => get_field( 'messenger_viber', 'option' ), 'label' => 'Viber' ),
		'telegram' => array( 'url' => get_field( 'messenger_telegram', 'option' ), 'label' => 'Telegram' ),
		'whatsapp' => array( 'url' => get_field( 'messenger_whatsapp', 'option' ), 'label' => 'WhatsApp' ),
	);

	return array_filter(
		$messengers,
		function ( $m ) {
			return ! empty( $m['url'] );
		}
	);
}

/**
 * Returns the inline SVG glyph for a messenger key (white, fits a 44px button).
 */
function proelectric_messenger_icon( $key ) {
	$icons = array(
		'viber'    => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.6 2 2.2 5.8 2.2 10.5c0 2.7 1.4 5.1 3.7 6.6L5 22l4.5-2.5c.8.2 1.6.3 2.5.3 5.4 0 9.8-3.8 9.8-8.5S17.4 2 12 2z"/><path d="M9.2 7.5c.2-.2.5-.2.7 0l1 1c.2.2.2.5 0 .7l-.4.5c.4.9 1.1 1.6 2 2l.5-.4c.2-.2.5-.2.7 0l1 1c.2.2.2.5 0 .7l-.6.6c-.3.3-.8.4-1.2.2-2-.9-3.6-2.5-4.5-4.5-.2-.4-.1-.9.2-1.2l.6-.6z" fill="currentColor" stroke="none"/></svg>',
		'telegram' => '<svg width="22" height="22" viewBox="0 0 448 512" fill="currentColor"><path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/></svg>',
		'whatsapp' => '<svg width="22" height="22" viewBox="0 0 448 512" fill="currentColor"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>',
	);

	return $icons[ $key ] ?? '';
}
