<?php
/**
 * Homepage FAQ teaser.
 *
 * Reuses the same question/answer text as the full FAQ page (single source
 * of truth in inc/faq-data.php) so the copy never drifts between the two,
 * and emits a matching FAQPage schema for just the questions shown here.
 *
 * @package Proelectric
 */

$faq_groups = proelectric_get_faq_groups();
$items      = $faq_groups[0]['items'] ?? array();

if ( empty( $items ) ) {
	return;
}

$faq_page = get_posts(
	array(
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'meta_key'       => '_wp_page_template',
		'meta_value'     => 'template-faq.php',
		'fields'         => 'ids',
	)
);
$faq_url = ! empty( $faq_page ) ? get_permalink( $faq_page[0] ) : '';

$faq_schema = array(
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => array(),
);

foreach ( $items as $item ) {
	$faq_schema['mainEntity'][] = array(
		'@type'          => 'Question',
		'name'           => $item['q'],
		'acceptedAnswer' => array(
			'@type' => 'Answer',
			'text'  => $item['a'],
		),
	);
}
?>

<section class="page-section page-section-bg2 page-section-faq" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на найпопулярніші питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <?php foreach ( $items as $item ) : ?>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <?= esc_html( $item['q'] ) ?>
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner"><?= esc_html( $item['a'] ) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ( $faq_url ) : ?>
            <div class="btn-group justify-content-center mt-5 wf-animate">
                <a href="<?= esc_url( $faq_url ) ?>" class="btn btn-primary">Всі питання</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<script type="application/ld+json"><?= wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?></script>
