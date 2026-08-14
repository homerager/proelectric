<?php
/**
 * Single blog post card.
 *
 * Must be called inside the loop with the current post already set (the_post()).
 * Shared by the blog index (home.php) and the home page "Останні новини" block
 * (template-parts/home/latest-posts.php).
 *
 * @package Proelectric
 */

$cats         = get_the_category();
$tags         = get_the_tags();
$words        = count( preg_split( '/\s+/u', trim( strip_tags( get_the_content() ) ), -1, PREG_SPLIT_NO_EMPTY ) );
$reading_time = max( 1, ceil( $words / 200 ) );
$views        = proelectric_get_post_views( get_the_ID() );
// Показуємо теги якщо є, інакше — категорію.
$card_labels  = ! empty( $tags ) ? array_slice( $tags, 0, 2 ) : ( ! empty( $cats ) ? array_slice( $cats, 0, 1 ) : array() );
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
            <span class="blog-card-sep">·</span>
            <span><?= esc_html( number_format_i18n( $views ) ) ?> <?= esc_html( proelectric_ukr_plural( $views, 'перегляд', 'перегляди', 'переглядів' ) ) ?></span>
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
