<?php
/**
 * Advantages block (ACF flexible-content layout: `advantages`).
 *
 * Renders the "НАШІ ПЕРЕВАГИ" section from a repeater of advantage items. The
 * icon is selected from a fixed set; its SVG markup lives in the icon helper
 * below.
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - items     (array)  repeater rows: icon, title, description
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$items     = ! empty( $args['items'] ) ? (array) $args['items'] : array();

if ( empty( $items ) ) {
	return;
}

if ( ! function_exists( 'proelectric_advantage_icon' ) ) {
	/**
	 * Returns the inline SVG markup for an advantage icon key.
	 */
	function proelectric_advantage_icon( $key ) {
		$icons = array(
			'check'   => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6"><path d="M4 15 L11 22 L26 8"/></svg>',
			'clock'   => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6"><circle cx="15" cy="15" r="11"/><path d="M15 7 v9 l5 4"/></svg>',
			'eye'     => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6"><path d="M5 12 Q15 4 25 12 Q15 28 5 12Z"/><circle cx="15" cy="12" r="3" fill="#2db551" stroke="none"/></svg>',
			'monitor' => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6"><rect x="4" y="8" width="22" height="14" rx="2"/><path d="M10 15 h10 M15 11 v8"/></svg>',
			'link'    => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6"><circle cx="11" cy="11" r="5"/><circle cx="21" cy="19" r="5"/><path d="M15 13 l2 2"/></svg>',
			'shield'  => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6"><path d="M15 3 L3 9 v8 c0 7 5 11 12 13 7-2 12-6 12-13V9Z"/></svg>',
			'bolt'    => '<svg class="adv-icon" viewBox="0 0 30 30"><path d="M16 3 L10 16 H16 L12 27 L24 12 H17Z" fill="#2db551" opacity=".9"/></svg>',
			'chart'   => '<svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 22 L10 8 l6 10 4-6 5 10"/></svg>',
		);

		return $icons[ $key ] ?? reset( $icons );
	}
}
?>

<section class="page-section page-section-bg2 page-section-advantages" id="about">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="wf-animate-grid d-grid lg-grid-4-columns md-grid-2-columns adv-grid">
            <?php foreach ( $items as $item ) : ?>
                <div class="white-card white-card-left-border-hover adv-item wf-animate">
                    <?= proelectric_advantage_icon( $item['icon'] ?? '' ) ?>
                    <div class="adv-title item-title-secondary font-semibold"><?= esc_html( $item['title'] ?? '' ) ?></div>
                    <p class="adv-desc item-description"><?= esc_html( $item['description'] ?? '' ) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
