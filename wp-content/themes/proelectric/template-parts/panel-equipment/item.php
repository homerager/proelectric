<?php
/**
 * Shared renderer for panel-equipment sub-pages (ГРЩ, АВР, щитки, ШУД, КТП, SCADA).
 *
 * Each sub-page template defines its content as an $args array and includes
 * this part, so the section markup lives in one place.
 *
 * Expected $args:
 *   - label          (string) hero small label
 *   - title          (string) hero H1, may contain accent span HTML
 *   - desc           (string) hero description
 *   - about          (array)  paragraphs for the "what is it" column
 *   - specs          (array)  technical bullet list (strings)
 *   - facts          (array)  rows: num, label, desc — right column highlights
 *   - features_title (string) heading of the "what's inside" section
 *   - features       (array)  rows: title, desc — composition cards
 *   - faq            (array)  rows: q, a
 *   - cta_title      (string) CTA band heading
 *
 * @package Proelectric
 */

$label          = $args['label'] ?? 'Електрощитове обладнання';
$title          = $args['title'] ?? '';
$desc           = $args['desc'] ?? '';
$about          = ! empty( $args['about'] ) ? (array) $args['about'] : array();
$specs          = ! empty( $args['specs'] ) ? (array) $args['specs'] : array();
$facts          = ! empty( $args['facts'] ) ? (array) $args['facts'] : array();
$features_title = $args['features_title'] ?? 'ЩО ВХОДИТЬ';
$features       = ! empty( $args['features'] ) ? (array) $args['features'] : array();
$faq            = ! empty( $args['faq'] ) ? (array) $args['faq'] : array();
$cta_title      = $args['cta_title'] ?? 'ПОТРІБЕН РОЗРАХУНОК?';
$proelectric_phone = proelectric_get_primary_phone();
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
            <div class="hero-label"><?= esc_html( $label ) ?></div>
            <h1 class="hero-title"><?= wp_kses_post( $title ) ?></h1>
            <p class="hero-desc"><?= esc_html( $desc ) ?></p>
            <div class="hero-actions hero-actions-left btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Отримати розрахунок</a>
                <?php if ( $features ) : ?>
                    <a href="#features" class="btn btn-white scroll-to-btn">Комплектація</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ( $about || $specs || $facts ) : ?>
<section class="page-section" id="about">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що це і для чого</h3>
            <h2 class="section-title">ПРО РІШЕННЯ</h2>
        </div>
        <div class="d-grid md-grid-2-columns md-gap-64 wf-animate-grid">
            <div class="wf-animate">
                <?php foreach ( $about as $paragraph ) : ?>
                    <p class="item-description mb-4"><?= esc_html( $paragraph ) ?></p>
                <?php endforeach; ?>
                <?php if ( $specs ) : ?>
                    <ul class="prod-specs mt-4">
                        <?php foreach ( $specs as $spec ) : ?>
                            <li><?= esc_html( $spec ) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <?php if ( $facts ) : ?>
                <div class="facts-col wf-animate">
                    <?php foreach ( $facts as $fact ) : ?>
                        <div class="fact-card">
                            <div class="fact-num"><?= esc_html( $fact['num'] ?? '' ) ?></div>
                            <div>
                                <div class="fact-label"><?= esc_html( $fact['label'] ?? '' ) ?></div>
                                <div class="fact-desc"><?= esc_html( $fact['desc'] ?? '' ) ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( $features ) : ?>
<section class="page-section page-section-bg2" id="features">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Комплектація</h3>
            <h2 class="section-title"><?= esc_html( $features_title ) ?></h2>
        </div>
        <div class="wf-animate-grid d-grid lg-grid-3-columns md-grid-2-columns audiences-grid">
            <?php foreach ( $features as $index => $feature ) : ?>
                <div class="white-card white-card-left-border-hover wf-animate">
                    <div class="calc-step-num"><?= esc_html( str_pad( $index + 1, 2, '0', STR_PAD_LEFT ) ) ?></div>
                    <h3 class="item-title-secondary font-semibold mb-2"><?= esc_html( $feature['title'] ?? '' ) ?></h3>
                    <p class="item-description"><?= esc_html( $feature['desc'] ?? '' ) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="page-section page-section-bg-dark how" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми працюємо</h3>
            <h2 class="section-title">ВІД СХЕМИ ДО ЗАПУСКУ</h2>
        </div>
        <div class="steps d-grid lg-grid-4-columns md-grid-2-columns wf-animate-grid position-relative">
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    01
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Технічне завдання</div>
                <div class="step-desc">Уточнюємо навантаження, схему та умови експлуатації. Виїзд на об'єкт за потреби</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    02
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M9 9h6M9 13h4"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Проєкт і специфікація</div>
                <div class="step-desc">Однолінійна схема, компонування, специфікація обладнання та фіксований кошторис</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    03
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Збірка і тестування</div>
                <div class="step-desc">Збірка у власному цеху, перевірка затяжки, прозвонка, випробування під напругою</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    04
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M12 3 L9 10 h3 L10 17 l6-8 h-3 Z"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Монтаж і запуск</div>
                <div class="step-desc">Доставка, встановлення, підключення, пусконалагодження та передача документації</div>
            </div>
        </div>
    </div>
</section>

<?php if ( $faq ) : ?>
<section class="page-section faq-section" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <?php foreach ( $faq as $item ) : ?>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <?= esc_html( $item['q'] ?? '' ) ?>
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner"><?= esc_html( $item['a'] ?? '' ) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title"><?= esc_html( $cta_title ) ?></div>
                <p class="cta-band-sub">Надішліть схему або опишіть задачу — підготуємо специфікацію та фіксований кошторис протягом 48 годин.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions d-flex justify-content-md-end">
                    <a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>
