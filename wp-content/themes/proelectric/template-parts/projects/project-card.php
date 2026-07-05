<?php
/**
 * Single `projects` card. Shared by the projects grid/list flexible blocks.
 *
 * Expected $args:
 *   - id       (int)  project post ID (required)
 *   - featured (bool) render as the large featured card (uses project_power)
 *
 * @package Proelectric
 */

$project_id = $args['id'] ?? 0;
if ( ! $project_id ) {
	return;
}

$featured = ! empty( $args['featured'] );
$cats     = get_the_category( $project_id );
$cat      = ! empty( $cats ) ? $cats[0]->name : '';

// Fall back to the `projects_cart` custom taxonomy when no standard category is set.
if ( '' === $cat ) {
	$proj_terms = get_the_terms( $project_id, 'projects_cart' );
	if ( ! empty( $proj_terms ) && ! is_wp_error( $proj_terms ) ) {
		$cat = $proj_terms[0]->name;
	}
}
$power    = get_field( 'project_power', $project_id );
$year     = get_field( 'project_year', $project_id );
$type     = get_field( 'project_type', $project_id );
$meta     = array_filter( array( $year, $type ) );
$excerpt  = wp_trim_words( get_the_excerpt( $project_id ), $featured ? 30 : 16, '…' );
$classes  = 'project-card project-card-link wf-animate' . ( $featured ? ' featured' : '' );
?>
<a href="<?= esc_url( get_permalink( $project_id ) ) ?>" class="<?= esc_attr( $classes ) ?>">
    <?php if ( $cat ) : ?>
        <div class="project-tag"><?= esc_html( $cat ) ?></div>
    <?php endif; ?>
    <div class="project-title"><?= esc_html( get_the_title( $project_id ) ) ?></div>
    <?php if ( $excerpt ) : ?>
        <p class="project-desc"><?= esc_html( $excerpt ) ?></p>
    <?php endif; ?>
    <?php if ( $featured && $power ) : ?>
        <div class="project-power"><?= esc_html( $power ) ?></div>
    <?php elseif ( ! empty( $meta ) ) : ?>
        <div class="project-meta" style="margin-top:20px"><?= esc_html( implode( ' / ', $meta ) ) ?></div>
    <?php elseif ( $power ) : ?>
        <div class="project-meta" style="margin-top:20px"><?= esc_html( $power ) ?></div>
    <?php endif; ?>
</a>
