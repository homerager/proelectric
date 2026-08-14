<?php
/**
 * Tag filter bar for the blog listing (home.php) and blog archives (archive.php).
 *
 * Renders "Усі" plus every tag currently used on a post, linking to the
 * respective tag archive. Shared so the same markup/behaviour is used on
 * both the main blog index and category/tag archive pages.
 *
 * @package Proelectric
 */

$blog_tags = get_tags( array( 'hide_empty' => true ) );

if ( empty( $blog_tags ) ) {
    return;
}

$active_tag_id  = is_tag() ? get_queried_object_id() : 0;
$posts_page_id  = get_option( 'page_for_posts' );
$blog_index_url = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/' );
?>
<div class="blog-tag-filter wf-animate">
    <a href="<?= esc_url( $blog_index_url ) ?>" class="blog-tag-filter-item<?= $active_tag_id ? '' : ' active' ?>">Усі</a>
    <?php foreach ( $blog_tags as $blog_tag ) : ?>
    <a href="<?= esc_url( get_tag_link( $blog_tag->term_id ) ) ?>" class="blog-tag-filter-item<?= $active_tag_id === $blog_tag->term_id ? ' active' : '' ?>"><?= esc_html( $blog_tag->name ) ?></a>
    <?php endforeach; ?>
</div>
