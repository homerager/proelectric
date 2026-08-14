<?php
/**
 * The template for displaying all single posts
 *
 * @package Proelectric
 */

get_header();

$proelectric_phone = proelectric_get_primary_phone();

while ( have_posts() ) :
    the_post();

    $categories   = get_the_category();
    $tags         = get_the_tags();
    $words        = count( preg_split( '/\s+/u', trim( strip_tags( get_the_content() ) ), -1, PREG_SPLIT_NO_EMPTY ) );
    $reading_time = max( 1, ceil( $words / 200 ) );
    $views        = proelectric_get_post_views( get_the_ID() );
    $prev_post    = get_previous_post();
    $next_post    = get_next_post();
    $share_url    = urlencode( get_permalink() );
    $share_title  = urlencode( get_the_title() );
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
                <span class="post-meta-sep">·</span>
                <span><?= esc_html( number_format_i18n( $views ) ) ?> <?= esc_html( proelectric_ukr_plural( $views, 'перегляд', 'перегляди', 'переглядів' ) ) ?></span>
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

                <div class="post-share">
                    <span class="post-share-label">Поділитися:</span>
                    <div class="post-share-list">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $share_url ?>" class="post-share-btn" target="_blank" rel="noopener noreferrer nofollow" title="Поділитися у Facebook" aria-label="Поділитися у Facebook">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://t.me/share/url?url=<?= $share_url ?>&text=<?= $share_title ?>" class="post-share-btn" target="_blank" rel="noopener noreferrer nofollow" title="Поділитися в Telegram" aria-label="Поділитися в Telegram">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        </a>
                        <a href="https://api.whatsapp.com/send?text=<?= $share_title ?>%20<?= $share_url ?>" class="post-share-btn" target="_blank" rel="noopener noreferrer nofollow" title="Поділитися у WhatsApp" aria-label="Поділитися у WhatsApp">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                        </a>
                        <a href="viber://forward?text=<?= $share_title ?>%20<?= $share_url ?>" class="post-share-btn" rel="nofollow" title="Поділитися у Viber" aria-label="Поділитися у Viber">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </a>
                        <button type="button" class="post-share-btn post-share-copy" data-copy-link="<?= esc_url( get_permalink() ) ?>" title="Скопіювати посилання" aria-label="Скопіювати посилання">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                            <span class="post-share-copied-tip">Скопійовано!</span>
                        </button>
                    </div>
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
                    <a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-primary">Зателефонувати</a>
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
            <?php
            while ( $related->have_posts() ) :
                $related->the_post();
                get_template_part( 'template-parts/general/blog-card' );
            endwhile;
            ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
