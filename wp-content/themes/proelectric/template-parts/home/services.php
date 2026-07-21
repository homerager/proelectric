<?php
/**
 * Services block (ACF flexible-content layout: `services`).
 *
 * Renders the "НАШІ ПОСЛУГИ" section from a repeater of service items. The card
 * number (01, 02, …) is generated automatically from the item order. The icon
 * is selected from a fixed set; its SVG markup lives in the icon helper below.
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

if ( ! function_exists( 'proelectric_service_icon' ) ) {
	/**
	 * Returns the inline SVG markup for a service icon key. Each call uses a
	 * unique gradient id so repeated icons do not collide in the same document.
	 */
	function proelectric_service_icon( $key ) {
		static $counter = 0;
		$counter++;
		$id   = 'si_grad_' . $counter;
		$grad = '<defs><linearGradient id="' . $id . '" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>';

		$paths = array(
			'solar'    => '<circle cx="27" cy="27" r="24" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M27 10 L20 26 H27 L20 44 L36 22 H28Z" fill="url(#' . $id . ')"/>',
			'electric' => '<rect x="8" y="8" width="38" height="38" rx="2" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M20 27 h14 M27 20 v14" stroke="url(#' . $id . ')" stroke-width="1.5"/><circle cx="20" cy="20" r="2.5" fill="#1a5fa8"/><circle cx="34" cy="34" r="2.5" fill="#2db551"/>',
			'panel'    => '<rect x="10" y="6" width="34" height="42" rx="2" stroke="url(#' . $id . ')" stroke-width="1.5"/><path d="M18 17 h18 M18 25 h18 M18 33 h10" stroke="url(#' . $id . ')" stroke-width="1.2"/><circle cx="36" cy="40" r="5.5" fill="#2db551"/><path d="M33.5 40 l2 2 3-3" stroke="white" stroke-width="1.4" fill="none" stroke-linecap="round"/>',
		);

		$body = $paths[ $key ] ?? reset( $paths );

		return '<svg class="service-icon" viewBox="0 0 54 54" fill="none">' . $grad . $body . '</svg>';
	}
}
?>

<section class="page-section page-section-services" id="services">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="wf-animate-grid d-grid md-grid-3-columns services-grid">
            <?php foreach ( $items as $index => $item ) :
                $num    = str_pad( $index + 1, 2, '0', STR_PAD_LEFT );
                $link   = $item['link'] ?? array();
                $url    = is_array( $link ) ? ( $link['url'] ?? '' ) : (string) $link;
                $target = is_array( $link ) ? ( $link['target'] ?? '' ) : '';
                $tag    = $url ? 'a' : 'div';
                ?>
                <<?= $tag ?> <?php if ( $url ) : ?>href="<?= esc_url( $url ) ?>"<?php if ( $target ) : ?> target="<?= esc_attr( $target ) ?>"<?php endif; ?> <?php endif; ?>class="service-card white-card white-card-bottom-border-hover wf-animate">
                    <div class="service-num"><?= esc_html( $num ) ?></div>
                    <?= proelectric_service_icon( $item['icon'] ?? '' ) ?>
                    <h3 class="service-title item-title"><?= esc_html( $item['title'] ?? '' ) ?></h3>
                    <p class="service-desc item-description"><?= esc_html( $item['description'] ?? '' ) ?></p>
                </<?= $tag ?>>
            <?php endforeach; ?>
        </div>
    </div>
</section>
