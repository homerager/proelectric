<?php
/*
  Template Name: FAQ
 */

/**
 * FAQ groups. Questions/answers are defined once in inc/faq-data.php and
 * used both for the accordion markup and the FAQPage JSON-LD schema (rich
 * snippets in Google), as well as by the homepage FAQ teaser.
 */
$faq_groups = proelectric_get_faq_groups();

$faq_schema = array(
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => array(),
);

foreach ( $faq_groups as $group ) {
	foreach ( $group['items'] as $item ) {
		$faq_schema['mainEntity'][] = array(
			'@type'          => 'Question',
			'name'           => $item['q'],
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $item['a'],
			),
		);
	}
}

get_header();
?>

<section class="hero contact-us-hero page-hero position-relative">
    <div class="container">
        <!-- decorative large bolt -->
        <div class="hero-bolt">
            <svg width="360" height="440" viewBox="0 0 360 440" fill="none">
                <path d="M220 0 L80 220 H170 L60 440 L300 160 H200 Z" fill="url(#boltGrad)" opacity=".9"/>
                <defs>
                    <linearGradient id="boltGrad" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#1a5fa8"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity=".3"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="hero-content hero-content-left wf-animate">
            <div class="hero-label">Відповіді на найпопулярніші питання</div>
            <h1 class="hero-title">
                ЧАСТІ <span class="accent-blue">ЗАПИ</span><span class="accent-green">ТАННЯ</span>
            </h1>
            <p class="hero-desc">Зібрали все, про що клієнти запитують найчастіше: ціни, терміни, гарантії та документи. Не знайшли відповідь — напишіть нам, відповімо протягом 2 годин.</p>
        </div>
    </div>
</section>

<section class="projects-cats-nav-section page-section">
    <div class="container">
        <nav class="projects-cats-nav wf-animate" aria-label="Розділи FAQ">
            <?php foreach ( $faq_groups as $group ) : ?>
                <a href="#faq-<?= esc_attr( $group['id'] ) ?>" class="projects-cat-link scroll-to-btn"><?= esc_html( $group['label'] ) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</section>

<?php foreach ( $faq_groups as $index => $group ) : ?>
    <section class="page-section faq-section<?= $index % 2 ? ' page-section-bg2' : '' ?>" id="faq-<?= esc_attr( $group['id'] ) ?>">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <h3 class="section-label"><?= esc_html( $group['label'] ) ?></h3>
                <h2 class="section-title"><?= esc_html( $group['title'] ) ?></h2>
            </div>
            <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
                <?php foreach ( $group['items'] as $item ) : ?>
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
        </div>
    </section>
<?php endforeach; ?>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">НЕ ЗНАЙШЛИ ВІДПОВІДЬ?</div>
                <p class="cta-band-sub">Поставте питання нашому інженеру — безкоштовна консультація без зобов'язань.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>

<script type="application/ld+json"><?= wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?></script>

<?php
get_footer();
