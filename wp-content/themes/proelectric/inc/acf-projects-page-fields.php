<?php
/**
 * ACF flexible-content page builder for the "Projects" page template.
 *
 * Registers a `page_blocks` flexible content field shown on pages that use
 * template-projects.php. Each layout is rendered in the template by a matching
 * template-part. Registered in PHP so it stays version-controlled with the
 * theme and needs no manual admin setup.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'proelectric_register_projects_page_fields' );

function proelectric_register_projects_page_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_projects_page',
			'title'    => 'Конструктор сторінки «Проєкти»',
			'fields'   => array(
				array(
					'key'          => 'field_projects_page_blocks',
					'label'        => 'Блоки сторінки',
					'name'         => 'page_blocks',
					'type'         => 'flexible_content',
					'button_label' => 'Додати блок',
					'layouts'      => array(
						'layout_projects_grid' => array(
							'key'        => 'layout_projects_grid',
							'name'       => 'projects_grid',
							'label'      => 'Сітка проєктів (з акцентом)',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_projects_grid_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_projects_grid_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'           => 'field_projects_grid_projects',
									'label'         => 'Проєкти',
									'name'          => 'projects',
									'type'          => 'relationship',
									'instructions'  => 'Перший проєкт у списку показується великою карткою. Оптимально 4–5 проєктів.',
									'post_type'     => array( 'projects' ),
									'filters'       => array( 'search', 'taxonomy' ),
									'return_format' => 'id',
									'min'           => 1,
								),
							),
						),
						'layout_projects_list' => array(
							'key'        => 'layout_projects_list',
							'name'       => 'projects_list',
							'label'      => 'Список проєктів (рівномірна сітка)',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_projects_list_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_projects_list_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'           => 'field_projects_list_projects',
									'label'         => 'Проєкти',
									'name'          => 'projects',
									'type'          => 'relationship',
									'instructions'  => 'Залиште порожнім, щоб показати всі опубліковані проєкти (новіші — першими).',
									'post_type'     => array( 'projects' ),
									'filters'       => array( 'search', 'taxonomy' ),
									'return_format' => 'id',
								),
							),
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'template-projects.php',
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
