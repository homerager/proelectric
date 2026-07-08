<?php
/**
 * ACF flexible-content page builder for the "Home" page template.
 *
 * Registers a `page_blocks` flexible content field shown on pages that use
 * template-home.php. Each layout is rendered in the template by a matching
 * template-part. Registered in PHP so it stays version-controlled with the
 * theme and needs no manual admin setup.
 *
 * @package Proelectric
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'proelectric_register_home_page_fields' );

function proelectric_register_home_page_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$service_icons = array(
		'solar'    => 'Блискавка / СЕС',
		'electric' => 'Розетка / електромонтаж',
		'panel'    => 'Щит / обладнання',
	);

	$advantage_icons = array(
		'check'   => 'Галочка (якість)',
		'clock'   => 'Годинник (терміни)',
		'eye'     => 'Око (гнучкість)',
		'monitor' => 'Монітор (технології)',
		'link'    => "Зв'язок (партнерство)",
		'shield'  => 'Щит (чесність)',
		'bolt'    => 'Блискавка (енергоефективність)',
		'chart'   => 'Графік (масштаб)',
	);

	acf_add_local_field_group(
		array(
			'key'      => 'group_home_page',
			'title'    => 'Конструктор головної сторінки',
			'fields'   => array(
				array(
					'key'          => 'field_home_page_blocks',
					'label'        => 'Блоки сторінки',
					'name'         => 'page_blocks',
					'type'         => 'flexible_content',
					'button_label' => 'Додати блок',
					'layouts'      => array(
						'layout_home_audiences'  => array(
							'key'        => 'layout_home_audiences',
							'name'       => 'audiences',
							'label'      => 'Для кого (сценарії)',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_audiences_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_audiences_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'          => 'field_home_audiences_items',
									'label'        => 'Сценарії',
									'name'         => 'items',
									'type'         => 'repeater',
									'instructions' => 'Оптимально 3 картки: Приватний будинок / Бізнес / ОСББ. Текст кнопки береться з назви посилання.',
									'layout'       => 'block',
									'button_label' => 'Додати сценарій',
									'sub_fields'   => array(
										array(
											'key'     => 'field_home_audiences_item_icon',
											'label'   => 'Іконка',
											'name'    => 'icon',
											'type'    => 'select',
											'choices' => array(
												'house'    => 'Приватний будинок',
												'business' => 'Бізнес / підприємство',
												'osbb'     => 'ОСББ / багатоповерхівка',
											),
										),
										array(
											'key'   => 'field_home_audiences_item_title',
											'label' => 'Назва',
											'name'  => 'title',
											'type'  => 'text',
										),
										array(
											'key'   => 'field_home_audiences_item_description',
											'label' => 'Опис',
											'name'  => 'description',
											'type'  => 'textarea',
											'rows'  => 3,
										),
										array(
											'key'           => 'field_home_audiences_item_link',
											'label'         => 'Посилання',
											'name'          => 'link',
											'type'          => 'link',
											'return_format' => 'array',
										),
									),
								),
							),
						),
						'layout_home_services'   => array(
							'key'        => 'layout_home_services',
							'name'       => 'services',
							'label'      => 'Послуги',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_services_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_services_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'          => 'field_home_services_items',
									'label'        => 'Послуги',
									'name'         => 'items',
									'type'         => 'repeater',
									'instructions' => 'Номер картки (01, 02, …) проставляється автоматично.',
									'layout'       => 'block',
									'button_label' => 'Додати послугу',
									'sub_fields'   => array(
										array(
											'key'     => 'field_home_services_item_icon',
											'label'   => 'Іконка',
											'name'    => 'icon',
											'type'    => 'select',
											'choices' => $service_icons,
										),
										array(
											'key'   => 'field_home_services_item_title',
											'label' => 'Назва',
											'name'  => 'title',
											'type'  => 'text',
										),
										array(
											'key'   => 'field_home_services_item_description',
											'label' => 'Опис',
											'name'  => 'description',
											'type'  => 'textarea',
											'rows'  => 3,
										),
										array(
											'key'          => 'field_home_services_item_link',
											'label'        => 'Посилання',
											'name'         => 'link',
											'type'         => 'link',
											'return_format' => 'array',
										),
									),
								),
							),
						),
						'layout_home_advantages' => array(
							'key'        => 'layout_home_advantages',
							'name'       => 'advantages',
							'label'      => 'Переваги',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_advantages_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_advantages_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'          => 'field_home_advantages_items',
									'label'        => 'Переваги',
									'name'         => 'items',
									'type'         => 'repeater',
									'layout'       => 'block',
									'button_label' => 'Додати перевагу',
									'sub_fields'   => array(
										array(
											'key'     => 'field_home_advantages_item_icon',
											'label'   => 'Іконка',
											'name'    => 'icon',
											'type'    => 'select',
											'choices' => $advantage_icons,
										),
										array(
											'key'   => 'field_home_advantages_item_title',
											'label' => 'Назва',
											'name'  => 'title',
											'type'  => 'text',
										),
										array(
											'key'   => 'field_home_advantages_item_description',
											'label' => 'Опис',
											'name'  => 'description',
											'type'  => 'textarea',
											'rows'  => 3,
										),
									),
								),
							),
						),
						'layout_home_projects'   => array(
							'key'        => 'layout_home_projects',
							'name'       => 'projects_grid',
							'label'      => 'Сітка проєктів (з акцентом)',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_projects_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_projects_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'           => 'field_home_projects_projects',
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
						'layout_home_partners'   => array(
							'key'        => 'layout_home_partners',
							'name'       => 'partners',
							'label'      => 'Наші партнери',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_partners_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_partners_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'          => 'field_home_partners_items',
									'label'        => 'Партнери',
									'name'         => 'items',
									'type'         => 'repeater',
									'layout'       => 'table',
									'button_label' => 'Додати партнера',
									'sub_fields'   => array(
										array(
											'key'           => 'field_home_partners_item_logo',
											'label'         => 'Лого',
											'name'          => 'logo',
											'type'          => 'image',
											'return_format' => 'array',
											'preview_size'  => 'medium',
											'required'      => 1,
										),
										array(
											'key'          => 'field_home_partners_item_name',
											'label'        => 'Назва',
											'name'         => 'name',
											'type'         => 'text',
											'instructions' => 'Використовується як alt-текст лого.',
										),
										array(
											'key'          => 'field_home_partners_item_url',
											'label'        => 'Посилання на сайт',
											'name'         => 'url',
											'type'         => 'url',
											'instructions' => 'Необовʼязково. Відкривається в новій вкладці.',
										),
									),
								),
							),
						),
						'layout_home_latest_posts' => array(
							'key'        => 'layout_home_latest_posts',
							'name'       => 'latest_posts',
							'label'      => 'Останні новини з блогу',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'   => 'field_home_latest_posts_sub_title',
									'label' => 'Підзаголовок',
									'name'  => 'sub_title',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_latest_posts_title',
									'label' => 'Заголовок',
									'name'  => 'title',
									'type'  => 'text',
								),
								array(
									'key'           => 'field_home_latest_posts_count',
									'label'         => 'Кількість новин',
									'name'          => 'count',
									'type'          => 'number',
									'instructions'  => 'Скільки останніх записів показати. За замовчуванням — 3.',
									'default_value' => 3,
									'min'           => 1,
									'max'           => 12,
								),
								array(
									'key'           => 'field_home_latest_posts_link',
									'label'         => 'Посилання «Всі новини»',
									'name'          => 'link',
									'type'          => 'link',
									'return_format' => 'array',
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
						'value'    => 'template-home.php',
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
