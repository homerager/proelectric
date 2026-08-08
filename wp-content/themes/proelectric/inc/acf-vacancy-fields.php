<?php
/**
 * ACF field group for the `vacancy` custom post type (registered via Custom Post Type UI).
 *
 * Registered in PHP via acf_add_local_field_group() so the fields appear in
 * the admin editor automatically and stay version-controlled with the theme,
 * mirroring the approach used for the `projects` CPT.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'proelectric_register_vacancy_fields' );

function proelectric_register_vacancy_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_vacancy_details',
			'title'                 => 'Деталі вакансії',
			'fields'                => array(
				array(
					'key'          => 'field_vacancy_location',
					'label'        => 'Локація',
					'name'         => 'vacancy_location',
					'type'         => 'text',
					'instructions' => 'Напр.: Львів, або Львівська область / віддалено',
					'wrapper'      => array( 'width' => '34' ),
				),
				array(
					'key'          => 'field_vacancy_employment_type',
					'label'        => 'Зайнятість',
					'name'         => 'vacancy_employment_type',
					'type'         => 'select',
					'choices'      => array(
						'Повна зайнятість'    => 'Повна зайнятість',
						'Часткова зайнятість' => 'Часткова зайнятість',
						'Віддалено'           => 'Віддалено',
					),
					'allow_null'   => 1,
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_vacancy_salary',
					'label'        => 'Зарплата',
					'name'         => 'vacancy_salary',
					'type'         => 'text',
					'instructions' => 'Напр.: 20 000–30 000 грн або за домовленістю',
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_vacancy_responsibilities',
					'label'        => 'Обов\'язки',
					'name'         => 'vacancy_responsibilities',
					'type'         => 'wysiwyg',
					'instructions' => 'Список обов\'язків. Можна списком — стилізується автоматично.',
					'tabs'         => 'all',
					'toolbar'      => 'full',
					'media_upload' => 0,
				),
				array(
					'key'          => 'field_vacancy_requirements',
					'label'        => 'Вимоги',
					'name'         => 'vacancy_requirements',
					'type'         => 'wysiwyg',
					'instructions' => 'Вимоги до кандидата.',
					'tabs'         => 'all',
					'toolbar'      => 'full',
					'media_upload' => 0,
				),
				array(
					'key'          => 'field_vacancy_conditions',
					'label'        => 'Умови',
					'name'         => 'vacancy_conditions',
					'type'         => 'wysiwyg',
					'instructions' => 'Умови роботи (графік, соцпакет тощо).',
					'tabs'         => 'all',
					'toolbar'      => 'full',
					'media_upload' => 0,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'vacancy',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'active'                => true,
		)
	);
}
