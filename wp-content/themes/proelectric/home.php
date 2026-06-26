<?php
/**
 * The template for displaying the blog posts index page (home / posts page)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proelectric
 */

get_header();
?>

<section class="hero blog-hero">
    <div class="blog-hero-bg"></div>
    <div class="hero-tint"></div>
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ) ?>">Головна</a><span>›</span>
                <span>Блог</span>
            </div>
            <div class="hero-label">Корисна інформація</div>
            <h1 class="hero-title">
                <?php
                $posts_page_id = get_option('page_for_posts');
                echo $posts_page_id ? esc_html( get_the_title( $posts_page_id ) ) : 'БЛОГ';
                ?>
            </h1>
            <p class="hero-desc">Статті та новини про електромонтаж, сонячну енергетику та інжиніринг</p>
        </div>
    </div>
</section>

<section class="page-section blog-listing-section">
    <div class="container">

        <?php if ( have_posts() ) : ?>

        <div class="blog-grid d-grid lg-grid-3-columns md-grid-2-columns blog-gap wf-animate-grid">
            <?php while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/general/blog-card' );
            endwhile; ?>
        </div>

        <?php
        $pagination = paginate_links( array(
            'type'      => 'array',
            'prev_text' => '←',
            'next_text' => '→',
        ) );

        if ( $pagination ) : ?>
        <div class="blog-pagination wf-animate">
            <?php foreach ( $pagination as $page_link ) : ?>
                <?= $page_link ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php else : ?>
        <div class="blog-empty wf-animate">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity=".3"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <p>Поки що статей немає. Слідкуйте за оновленнями!</p>
        </div>
        <?php endif; ?>

    </div>
</section>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
