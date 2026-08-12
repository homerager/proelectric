<?php 
/*
  Template Name: Home
 */
get_header();
?>

<section class="hero hero-animate-bg">
    <div class="hero-parallax">
        <div class="hero-bg" style="--hero-bg: url(<?= get_template_directory_uri() . '/images/hero-bg.webp'; ?>)"></div>
    </div>
    <div class="hero-overlay"></div>

    <div class="hero-rays"></div>
    <div class="hero-glint"></div>

    <div class="hero-light hero-light-1"></div>
    <div class="hero-light hero-light-2"></div>

    <div class="hero-particles">
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
        <span></span><span></span>
    </div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-label font-light">Електромонтаж &amp; СЕС</h1>
            <h2 class="hero-title">ВАША<br> <span class="accent-blue">ЕНЕРГЕ</span><span class="accent-green">ТИЧНА</span><br>СВОБОДА</h2>
            <p class="hero-desc">Повний цикл електромонтажних робіт — від проектування до запуску. Сонячні електростанції, промислові об'єкти, приватні будинки.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Отримати пропозицію</a>
                <a href="#projects" class="btn btn-white scroll-to-btn">Наші проєкти</a>
            </div>
        </div>
    </div>
    <?php 
        $stats = array(
            array(
                'stat_num' => '10',
                'unit' => '+',
                'stat_label' => 'Років досвіду'
            ), array(
                'stat_num' => '100',
                'unit' => '%',
                'stat_label' => 'Гарантія якості'
            ), array(
                'stat_num' => '200',
                'unit' => '+',
                'stat_label' => "Завершених об'єктів"
            ), array(
                'stat_num' => '160',
                'unit' => ' МВт',
                'stat_label' => 'Найбільший проєкт'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
    ?>
</section>

<?php
    // Page body is built from ACF flexible content (see inc/acf-home-page-fields.php).
    if ( have_rows( 'page_blocks' ) ) :
        while ( have_rows( 'page_blocks' ) ) : the_row();

            switch ( get_row_layout() ) {
                case 'audiences':
                    get_template_part(
                        'template-parts/home/audiences',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'items'     => get_sub_field( 'items' ),
                        )
                    );
                    break;
                case 'services':
                    get_template_part(
                        'template-parts/home/services',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'items'     => get_sub_field( 'items' ),
                        )
                    );
                    break;
                case 'advantages':
                    get_template_part(
                        'template-parts/home/advantages',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'items'     => get_sub_field( 'items' ),
                        )
                    );
                    break;
                case 'projects_grid':
                    get_template_part(
                        'template-parts/projects/projects-grid',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'ids'       => get_sub_field( 'projects' ),
                        )
                    );
                    break;
                case 'partners':
                    get_template_part(
                        'template-parts/home/partners',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'items'     => get_sub_field( 'items' ),
                        )
                    );
                    break;
                case 'latest_posts':
                    get_template_part(
                        'template-parts/home/latest-posts',
                        null,
                        array(
                            'sub_title' => get_sub_field( 'sub_title' ),
                            'title'     => get_sub_field( 'title' ),
                            'count'     => get_sub_field( 'count' ),
                            'link'      => get_sub_field( 'link' ),
                        )
                    );
                    break;
            }
        endwhile;
    endif;
?>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ГОТОВІ РОЗПОЧАТИ ПРОЄКТ?</div>
                <p class="cta-band-sub">Залиште заявку — ми зв'яжемося протягом 2 годин і підготуємо комерційну пропозицію.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                </div>
            </div>
        </div>
    </div>
</section> 
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();