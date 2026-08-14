<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proelectric
 */

get_header();

$current_category = get_queried_object();
$archive_desc  = get_the_archive_description();
?>

<section class="hero blog-hero">
    <div class="blog-hero-bg"></div>
    <div class="hero-tint"></div>
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ) ?>">Головна</a><span>›</span>
                <a href="<?= esc_url( home_url('/blog/') ) ?>">Блог</a><span>›</span>
                <span><?= esc_html( $current_category->name ) ?></span>
            </div>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Блог', 'url' => home_url('/blog/') ),
                array( 'name' => $current_category->name ),
            ) );
            ?>
            <div class="hero-label">Корисна інформація</div>
            <h1 class="hero-title"><?php echo $current_category->name; ?></h1>
            <?php if ( $archive_desc ) : ?>
            <p class="hero-desc"><?= wp_strip_all_tags( $archive_desc ) ?></p>
            <?php else : ?>
            <p class="hero-desc">Статті та новини про електромонтаж, сонячну енергетику та інжиніринг</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="page-section blog-listing-section">
    <div class="container">
        <?php get_template_part( 'template-parts/general/blog-tag-filter' ); ?>

        <?php if ( have_posts() ) : ?>
            <div class="blog-grid d-grid lg-grid-3-columns md-grid-2-columns blog-gap wf-animate-grid">
                <?php while ( have_posts() ) : the_post();
                    $cats         = get_the_category();
                    $tags         = get_the_tags();
                    $words        = count( preg_split( '/\s+/u', trim( strip_tags( get_the_content() ) ), -1, PREG_SPLIT_NO_EMPTY ) );
                    $reading_time = max( 1, ceil( $words / 200 ) );
                    // Показуємо теги якщо є, інакше — категорію
                    $card_labels  = ! empty( $tags ) ? array_slice( $tags, 0, 2 ) : ( ! empty( $cats ) ? array_slice( $cats, 0, 1 ) : [] );
                ?>
                    <article class="blog-card wf-animate">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-thumb" aria-label="<?= esc_attr( get_the_title() ) ?>">
                            <?= get_the_post_thumbnail( get_the_ID(), 'medium_large' ) ?>
                            <?php if ( ! empty( $card_labels ) ) : ?>
                            <span class="blog-card-cat"><?= esc_html( $card_labels[0]->name ) ?></span>
                            <?php endif; ?>
                        </a>
                        <?php else : ?>
                        <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-thumb blog-card-thumb-placeholder" aria-label="<?= esc_attr( get_the_title() ) ?>">
                            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity=".4">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/>
                            </svg>
                            <?php if ( ! empty( $card_labels ) ) : ?>
                            <span class="blog-card-cat"><?= esc_html( $card_labels[0]->name ) ?></span>
                            <?php endif; ?>
                        </a>
                        <?php endif; ?>

                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span><?= esc_html( get_the_date('d.m.Y') ) ?></span>
                                <span class="blog-card-sep">·</span>
                                <span><?= $reading_time ?> хв читання</span>
                            </div>
                            <h3 class="blog-card-title">
                                <a href="<?= esc_url( get_permalink() ) ?>"><?= get_the_title() ?></a>
                            </h3>
                            <p class="blog-card-excerpt"><?= esc_html( wp_trim_words( get_the_excerpt(), 20, '…' ) ) ?></p>
                            <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-link">
                                Читати далі
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
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
