<?php
/*
  Template Name: Projects
 */
get_header();
?>

<section class="hero projects-hero position-relative">
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="hero-label">Реалізовані об'єкти</div>
            <h1 class="hero-title">
                <span class="accent-blue">НАШІ</span> <span class="accent-green">ПРО</span>ЄКТИ
            </h1>
            <p class="hero-desc">Понад 10 років ми реалізуємо енергетичні проєкти будь-якого масштабу — від промислових електростанцій на десятки мегават до сонячних панелей на дахах приватних будинків та ОСББ.</p>
        </div>
        <?php
            $stats = array(
                array(
                    'stat_num' => '100',
                    'unit' => '+',
                    'stat_label' => "Завершених об'єктів"
                ), array(
                    'stat_num' => '160',
                    'unit' => ' МВт',
                    'stat_label' => 'Найбільший проєкт'
                ), array(
                    'stat_num' => '40',
                    'unit' => ' МВт',
                    'stat_label' => 'Найбільша СЕС'
                ), array(
                    'stat_num' => '10',
                    'unit' => '+',
                    'stat_label' => 'Років досвіду'
                )
            );
            get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
        ?>
    </div>
</section>

<?php
    // Page body is built from ACF flexible content (see inc/acf-projects-page-fields.php).
    if ( have_rows( 'page_blocks' ) ) :
        while ( have_rows( 'page_blocks' ) ) : the_row();
            $block_args = array(
                'sub_title' => get_sub_field( 'sub_title' ),
                'title'     => get_sub_field( 'title' ),
                'ids'       => get_sub_field( 'projects' ),
            );

            switch ( get_row_layout() ) {
                case 'projects_grid':
                    get_template_part( 'template-parts/projects/projects-grid', null, $block_args );
                    break;
                case 'projects_list':
                    get_template_part( 'template-parts/projects/projects-list', null, $block_args );
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
