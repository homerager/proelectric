<?php
/**
 * Latest news block (ACF flexible-content layout: `latest_posts`).
 *
 * Renders the "Останні новини з блогу" section — the most recent published
 * posts as blog cards. Falls back to nothing when there are no posts.
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - count     (int)    number of posts to show (default 3)
 *   - link      (array)  optional "view all" link (ACF link array)
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$count     = ! empty( $args['count'] ) ? (int) $args['count'] : 3;
$link      = ! empty( $args['link'] ) ? (array) $args['link'] : array();

$query = new WP_Query(
	array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => $count,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	)
);

if ( ! $query->have_posts() ) {
	return;
}
?>

<section class="page-section page-section-services" id="news">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="blog-grid d-grid lg-grid-3-columns md-grid-2-columns blog-gap wf-animate-grid">
            <?php
            while ( $query->have_posts() ) :
                $query->the_post();
                get_template_part( 'template-parts/general/blog-card' );
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php if ( ! empty( $link['url'] ) ) : ?>
            <div class="btn-group justify-content-center mt-5 wf-animate">
                <a href="<?= esc_url( $link['url'] ) ?>"<?php if ( ! empty( $link['target'] ) ) : ?> target="<?= esc_attr( $link['target'] ) ?>"<?php endif; ?> class="btn btn-primary">
                    <?= esc_html( $link['title'] ?: 'Всі новини' ) ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
