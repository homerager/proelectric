<?php
/**
 * Projects list block (ACF flexible-content layout: `projects_list`).
 *
 * Uniform 3-column grid of `projects`. Renders the curated `ids` when provided;
 * otherwise falls back to all published projects (newest first).
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - ids       (int[])  optional curated list of `projects` post IDs
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$ids       = ! empty( $args['ids'] ) ? (array) $args['ids'] : array();

if ( empty( $ids ) ) {
	$ids = get_posts(
		array(
			'post_type'      => 'projects',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
}

if ( empty( $ids ) ) {
	return;
}
?>

<section class="page-section page-section-services">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><h3 class="section-label"><?= esc_html( $sub_title ) ?></h3><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="d-grid md-grid-3-columns wf-animate-grid">
            <?php foreach ( $ids as $project_id ) {
                get_template_part(
                    'template-parts/projects/project-card',
                    null,
                    array(
                        'id'       => $project_id,
                        'featured' => false,
                    )
                );
            } ?>
        </div>
    </div>
</section>
