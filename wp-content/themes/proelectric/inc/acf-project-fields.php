<?php
/**
 * ACF field group for the `projects` custom post type.
 *
 * Registered in PHP via acf_add_local_field_group() so the fields appear in
 * the admin editor automatically (no manual setup) and stay version-controlled
 * with the theme. The field keys match those read in single-projects.php.
 *
 * Note: `project_category` is intentionally NOT here — the category is taken
 * from the standard WordPress category taxonomy.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'proelectric_register_project_fields' );

function proelectric_register_project_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_project_details',
			'title'                 => 'Деталі проєкту',
			'fields'                => array(
				array(
					'key'          => 'field_project_power',
					'label'        => 'Потужність',
					'name'         => 'project_power',
					'type'         => 'text',
					'instructions' => 'Напр.: 160 МВт, 30 кВт',
					'wrapper'      => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_project_year',
					'label'        => 'Рік реалізації',
					'name'         => 'project_year',
					'type'         => 'text',
					'instructions' => 'Напр.: 2021 або 2020–2021',
					'wrapper'      => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_project_location',
					'label'        => 'Локація',
					'name'         => 'project_location',
					'type'         => 'text',
					'instructions' => 'Напр.: Запорізька область',
					'wrapper'      => array( 'width' => '50' ),
				),
				array(
					'key'     => 'field_project_client',
					'label'   => 'Замовник',
					'name'    => 'project_client',
					'type'    => 'text',
					'wrapper' => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_project_type',
					'label'        => 'Тип об\'єкта',
					'name'         => 'project_type',
					'type'         => 'text',
					'instructions' => 'Напр.: Промисловий, Комерційний, Приватний',
					'wrapper'      => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_project_duration',
					'label'        => 'Термін',
					'name'         => 'project_duration',
					'type'         => 'text',
					'instructions' => 'Тривалість реалізації, напр.: 8 місяців',
					'wrapper'      => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_project_scope',
					'label'        => 'Обсяг виконаних робіт',
					'name'         => 'project_scope',
					'type'         => 'wysiwyg',
					'instructions' => 'Опис робіт. Можна списком — він стилізується автоматично.',
					'tabs'         => 'all',
					'toolbar'      => 'full',
					'media_upload' => 0,
				),
				array(
					'key'           => 'field_project_gallery',
					'label'         => 'Галерея',
					'name'          => 'project_gallery',
					'type'          => 'gallery',
					'instructions'  => 'Фотографії об\'єкта.',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),
				array(
					'key'          => 'field_project_results',
					'label'        => 'Результати проєкту',
					'name'         => 'project_results',
					'type'         => 'repeater',
					'instructions' => 'Ключові цифри-підсумки (показуються окремою секцією).',
					'layout'       => 'table',
					'button_label' => 'Додати результат',
					'sub_fields'   => array(
						array(
							'key'          => 'field_result_stat_num',
							'label'        => 'Число',
							'name'         => 'stat_num',
							'type'         => 'text',
							'instructions' => 'Напр.: 160',
						),
						array(
							'key'          => 'field_result_unit',
							'label'        => 'Одиниця',
							'name'         => 'unit',
							'type'         => 'text',
							'instructions' => 'Напр.: МВт, +, %',
						),
						array(
							'key'   => 'field_result_stat_label',
							'label' => 'Підпис',
							'name'  => 'stat_label',
							'type'  => 'text',
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'projects',
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
