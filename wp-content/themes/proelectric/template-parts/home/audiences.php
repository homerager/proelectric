<?php
/**
 * Audiences block (ACF flexible-content layout: `audiences`).
 *
 * Renders the "Для кого" section — quick self-identification scenarios
 * (Приватний будинок / Бізнес / ОСББ) with a CTA button to the matching
 * service page. The icon is selected from a fixed set; its SVG markup lives
 * in the icon helper below.
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - items     (array)  repeater rows: icon, title, description, link
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$items     = ! empty( $args['items'] ) ? (array) $args['items'] : array();

if ( empty( $items ) ) {
	return;
}

if ( ! function_exists( 'proelectric_audience_icon' ) ) {
	/**
	 * Returns the inline SVG markup for an audience icon key. Each call uses a
	 * unique gradient id so repeated icons do not collide in the same document.
	 */
	function proelectric_audience_icon( $key ) {
		static $counter = 0;
		$counter++;
		$id   = 'au_grad_' . $counter;
		$grad = '<defs><linearGradient id="' . $id . '" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>';

		$paths = array(
			'house'    => '<path d="M8 25 L27 9 L46 25" stroke="url(#' . $id . ')" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 22 V45 H41 V22" stroke="url(#' . $id . ')" stroke-width="1.5" stroke-linejoin="round"/><path d="M29 24 L23 34 H27 L25 42 L33 31 H29 Z" fill="url(#' . $id . ')"/>',
			'business' => '<rect x="7" y="19" width="21" height="26" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M28 26 H47 V45 H28" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M12 25 h5 M12 31 h5 M12 37 h5 M34 32 h7 M34 38 h7" stroke="url(#' . $id . ')" stroke-width="1.4" stroke-linecap="round"/><path d="M14 19 V12 H21 V19" stroke="url(#' . $id . ')" stroke-width="1.5"/><circle cx="42" cy="21" r="4" fill="#2db551"/><path d="M42.8 18.5 L40.8 21.3 H42.2 L41.2 23.5 L44 20.5 H42.4 Z" fill="#fff"/>',
			'osbb'     => '<rect x="15" y="7" width="24" height="38" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M20 13 h4 M30 13 h4 M20 20 h4 M30 20 h4 M20 27 h4 M30 27 h4 M20 34 h4 M30 34 h4" stroke="url(#' . $id . ')" stroke-width="1.4" stroke-linecap="round"/><path d="M25 45 V39 H29 V45" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M9 45 H45" stroke="url(#' . $id . ')" stroke-width="1.5" stroke-linecap="round"/>',
		);

		$body = $paths[ $key ] ?? reset( $paths );

		return '<svg class="audience-icon" viewBox="0 0 54 54" fill="none">' . $grad . $body . '</svg>';
	}
}
?>

<section class="page-section page-section-bg2 page-section-audiences" id="audiences">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="wf-animate-grid d-grid md-grid-3-columns audiences-grid">
            <?php foreach ( $items as $item ) :
                $link   = ! empty( $item['link'] ) ? (array) $item['link'] : array();
                $url    = $link['url'] ?? '';
                $label  = ! empty( $link['title'] ) ? $link['title'] : 'Детальніше';
                $target = $link['target'] ?? '';
                ?>
                <div class="audience-card white-card white-card-bottom-border-hover wf-animate">
                    <?= proelectric_audience_icon( $item['icon'] ?? '' ) ?>
                    <h3 class="audience-title item-title"><?= esc_html( $item['title'] ?? '' ) ?></h3>
                    <p class="audience-desc item-description"><?= esc_html( $item['description'] ?? '' ) ?></p>
                    <?php if ( $url ) : ?>
                        <a href="<?= esc_url( $url ) ?>"<?php if ( $target ) : ?> target="<?= esc_attr( $target ) ?>"<?php endif; ?> class="btn btn-primary audience-btn"><?= esc_html( $label ) ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
