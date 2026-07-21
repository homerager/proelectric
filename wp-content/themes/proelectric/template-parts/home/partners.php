<?php
/**
 * Partners block (ACF flexible-content layout: `partners`).
 *
 * Renders the "Наші партнери" section — a row of partner logos, each
 * optionally linked to the partner's website (opens in a new tab).
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - items     (array)  repeater rows: logo (image array), name, url
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$items     = ! empty( $args['items'] ) ? (array) $args['items'] : array();

if ( empty( $items ) ) {
	return;
}
?>

<section class="page-section page-section-bg2 page-section-partners" id="partners">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="partners-row wf-animate-grid">
            <?php
            foreach ( $items as $item ) :
                $logo = ! empty( $item['logo'] ) ? (array) $item['logo'] : array();
                if ( empty( $logo['url'] ) ) {
                    continue;
                }
                $name = $item['name'] ?: ( $logo['alt'] ?? '' );
                $url  = $item['url'] ?? '';
                $tag  = $url ? 'a' : 'div';
            ?>
                <<?= $tag ?> class="partner-logo wf-animate"<?php if ( $url ) : ?> href="<?= esc_url( $url ) ?>" target="_blank" rel="noopener"<?php endif; ?><?php if ( $name ) : ?> title="<?= esc_attr( $name ) ?>"<?php endif; ?>>
                    <img src="<?= esc_url( $logo['sizes']['medium'] ?? $logo['url'] ) ?>" alt="<?= esc_attr( $name ) ?>" loading="lazy">
                </<?= $tag ?>>
            <?php endforeach; ?>
        </div>
    </div>
</section>
