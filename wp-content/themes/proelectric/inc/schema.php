<?php
/**
 * Schema.org JSON-LD structured data (Organization + WebSite/SearchAction).
 *
 * @package Proelectric
 */

if ( ! function_exists( 'proelectric_schema_organization' ) ) {
	function proelectric_schema_organization() {
		$phone = function_exists( 'proelectric_get_primary_phone' ) ? proelectric_get_primary_phone() : array( 'tel' => '+380630607600' );

		return array(
			'@type'      => 'Organization',
			'@id'        => home_url( '/#organization' ),
			'name'       => 'Прогрес Електрик',
			'legalName'  => 'ТОВ Прогрес Електрик',
			'url'        => home_url( '/' ),
			'logo'       => get_template_directory_uri() . '/images/logo.webp',
			'image'      => get_template_directory_uri() . '/images/logo.webp',
			'telephone'  => $phone['tel'],
			'email'      => 'progreselectric@gmail.com',
			'address'    => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'вул. Навроцького, 33',
				'addressLocality' => 'Львів',
				'postalCode'      => '79034',
				'addressCountry'  => 'UA',
			),
			'contactPoint' => array(
				'@type'             => 'ContactPoint',
				'telephone'         => $phone['tel'],
				'contactType'       => 'customer service',
				'areaServed'        => 'UA',
				'availableLanguage' => array( 'Ukrainian' ),
			),
			'sameAs'     => array(
				'https://www.facebook.com/progreselectric',
				'https://www.instagram.com/progres_electric/',
			),
		);
	}
}

function proelectric_add_schema() {
	$graph = array(
		proelectric_schema_organization(),
		array(
			'@type'          => 'WebSite',
			'@id'            => home_url( '/#website' ),
			'name'           => get_bloginfo( 'name' ),
			'url'            => home_url( '/' ),
			'publisher'      => array( '@id' => home_url( '/#organization' ) ),
			'inLanguage'     => str_replace( '_', '-', get_locale() ),
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => array(
					'@type'       => 'EntryPoint',
					'urlTemplate' => home_url( '/?s={search_term_string}' ),
				),
				'query-input' => 'required name=search_term_string',
			),
		),
	);

	$schema = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'proelectric_add_schema', 2 );

/**
 * Outputs a BreadcrumbList JSON-LD block matching the visible breadcrumb
 * trail. Call it right after printing the breadcrumb markup, passing the
 * same items (in order) as ['name' => ..., 'url' => ...]; the url of the
 * last (current) item is optional.
 */
function proelectric_breadcrumb_schema( array $items ) {
	if ( empty( $items ) ) {
		return;
	}

	$list = array();
	foreach ( $items as $i => $item ) {
		if ( empty( $item['name'] ) ) {
			continue;
		}

		$entry = array(
			'@type'    => 'ListItem',
			'position' => $i + 1,
			'name'     => $item['name'],
		);

		if ( ! empty( $item['url'] ) ) {
			$entry['item'] = $item['url'];
		}

		$list[] = $entry;
	}

	if ( empty( $list ) ) {
		return;
	}

	$schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $list,
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
