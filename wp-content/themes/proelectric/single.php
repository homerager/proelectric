<?php
/**
 * The template for displaying all single posts
 *
 * @package Proelectric
 */

get_header();

while ( have_posts() ) :
    the_post();

    $categories   = get_the_category();
    $tags         = get_the_tags();
    $words        = count( preg_split( '/\s+/u', trim( strip_tags( get_the_content() ) ), -1, PREG_SPLIT_NO_EMPTY ) );
    $reading_time = max( 1, ceil( $words / 200 ) );
    $prev_post    = get_previous_post();
    $next_post    = get_next_post();
?>

<section class="hero post-hero">
    <div class="blog-hero-bg"></div>
    <div class="hero-tint"></div>
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ) ?>">Головна</a><span>›</span>
                <a href="<?= esc_url( home_url('/blog/') ) ?>">Блог</a><span>›</span>
                <span><?= get_the_title() ?></span>
            </div>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Блог', 'url' => home_url('/blog/') ),
                array( 'name' => get_the_title(), 'url' => get_permalink() ),
            ) );
            ?>
            <?php if ( ! empty( $categories ) ) : ?>
                <div class="hero-label"><?= esc_html( $categories[0]->name ) ?></div>
            <?php endif; ?>
            <h1 class="hero-title post-hero-title"><?= get_the_title() ?></h1>
            <div class="post-hero-meta">
                <span><?= esc_html( get_the_date('d.m.Y') ) ?></span>
                <span class="post-meta-sep">·</span>
                <span><?= $reading_time ?> хв читання</span>
                <!--<?php if ( get_the_author() ) : ?>
                    <span class="post-meta-sep">·</span>
                    <span><?= esc_html( get_the_author() ) ?></span>
                <?php endif; ?>-->
            </div>
        </div>
    </div>
</section>

<section class="page-section post-section">
    <div class="container">
        <div class="post-layout">

            <main class="post-main">
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-img">
                    <?= get_the_post_thumbnail( get_the_ID(), 'large' ) ?>
                </div>
                <?php endif; ?>

                <div class="post-content entry-content">
                    <?php the_content(); ?>
                </div>

                <?php if ( $tags ) : ?>
                <div class="post-tags">
                    <span class="post-tags-label">Теги:</span>
                    <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?= esc_url( get_tag_link( $tag->term_id ) ) ?>" class="post-tag"><?= esc_html( $tag->name ) ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if ( $prev_post || $next_post ) : ?>
                <div class="post-nav-wrap">
                    <?php if ( $prev_post ) : ?>
                    <a href="<?= esc_url( get_permalink( $prev_post->ID ) ) ?>" class="post-nav-item post-nav-prev">
                        <span class="post-nav-dir">← Попередня</span>
                        <span class="post-nav-title"><?= get_the_title( $prev_post->ID ) ?></span>
                    </a>
                    <?php else : ?>
                    <div></div>
                    <?php endif; ?>

                    <?php if ( $next_post ) : ?>
                    <a href="<?= esc_url( get_permalink( $next_post->ID ) ) ?>" class="post-nav-item post-nav-next">
                        <span class="post-nav-dir">Наступна →</span>
                        <span class="post-nav-title"><?= get_the_title( $next_post->ID ) ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <div class="post-cta-band">
                    <div class="post-cta-band-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <div class="post-cta-band-text">
                        <div class="post-cta-band-title">Є запитання?</div>
                        <p>Зателефонуйте або напишіть — наші фахівці нададуть безкоштовну консультацію.</p>
                    </div>
                    <a href="tel:+380630607600" class="btn btn-primary">Зателефонувати</a>
                </div>
            </main>

            <aside class="post-sidebar">
                <?php
                    $sidebar_recent = new WP_Query( array(
                        'post_type'      => 'post',
                        'posts_per_page' => 4,
                        'post__not_in'   => array( get_the_ID() ),
                        'post_status'    => 'publish',
                    ) );
                 ?>   
                <?php if ( $sidebar_recent->have_posts() ) : ?>
                    <div class="post-sidebar-widget">
                        <div class="sidebar-widget-title">Останні статті</div>
                        <div class="sidebar-recent">
                            <?php while ( $sidebar_recent->have_posts() ) : $sidebar_recent->the_post(); ?>
                            <a href="<?= esc_url( get_permalink() ) ?>" class="sidebar-recent-item">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="sidebar-recent-thumb">
                                    <?= get_the_post_thumbnail( get_the_ID(), 'thumbnail' ) ?>
                                </div>
                                <?php endif; ?>
                                <div class="sidebar-recent-info">
                                    <div class="sidebar-recent-title"><?= get_the_title() ?></div>
                                    <div class="sidebar-recent-date"><?= esc_html( get_the_date('d.m.Y') ) ?></div>
                                </div>
                            </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>

<?php
$related = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post__not_in'   => array( get_the_ID() ),
    'category__in'   => wp_get_post_categories( get_the_ID() ),
    'post_status'    => 'publish',
    'orderby'        => 'rand',
) );

if ( $related->have_posts() ) :
?>
<section class="page-section page-section-bg2 related-posts-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Читайте також</h3>
            <h2 class="section-title">ПОВ'ЯЗАНІ СТАТТІ</h2>
        </div>
        <div class="blog-grid d-grid lg-grid-3-columns md-grid-2-columns blog-gap wf-animate-grid">
            <?php while ( $related->have_posts() ) : $related->the_post();
                $rcats        = get_the_category();
                $rwords       = str_word_count( strip_tags( get_the_content() ) );
                $rread_time   = max( 1, ceil( $rwords / 200 ) );
            ?>
            <article class="blog-card wf-animate">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-thumb" aria-label="<?= esc_attr( get_the_title() ) ?>">
                    <?= get_the_post_thumbnail( get_the_ID(), 'medium_large' ) ?>
                    <?php if ( ! empty( $rcats ) ) : ?>
                    <span class="blog-card-cat"><?= esc_html( $rcats[0]->name ) ?></span>
                    <?php endif; ?>
                </a>
                <?php else : ?>
                <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-thumb blog-card-thumb-placeholder" aria-label="<?= esc_attr( get_the_title() ) ?>">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity=".35"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>
                    <?php if ( ! empty( $rcats ) ) : ?>
                    <span class="blog-card-cat"><?= esc_html( $rcats[0]->name ) ?></span>
                    <?php endif; ?>
                </a>
                <?php endif; ?>
                <div class="blog-card-body">
                    <div class="blog-card-meta">
                        <span><?= esc_html( get_the_date('d.m.Y') ) ?></span>
                        <span class="blog-card-sep">·</span>
                        <span><?= $rread_time ?> хв читання</span>
                    </div>
                    <h3 class="blog-card-title">
                        <a href="<?= esc_url( get_permalink() ) ?>"><?= get_the_title() ?></a>
                    </h3>
                    <p class="blog-card-excerpt"><?= esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ) ?></p>
                    <a href="<?= esc_url( get_permalink() ) ?>" class="blog-card-link">
                        Читати далі
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
