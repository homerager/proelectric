<?php
/**
 * Projects grid block (ACF flexible-content layout: `projects_grid`).
 *
 * Renders a "projects-grid" section from a curated list of `projects` post IDs.
 * The first project in the list is rendered as the large featured card; the
 * rest fill the secondary cells. Card markup mirrors the `projects` card used
 * in single-projects.php.
 *
 * Expected $args:
 *   - sub_title (string) small section label
 *   - title     (string) section heading
 *   - ids       (int[])  list of `projects` post IDs
 *
 * @package Proelectric
 */

$sub_title = $args['sub_title'] ?? '';
$title     = $args['title'] ?? '';
$ids       = ! empty( $args['ids'] ) ? (array) $args['ids'] : array();

if ( empty( $ids ) ) {
	return;
}
?>

<section class="page-section">
    <div class="container">
        <?php if ( $sub_title || $title ) : ?>
            <div class="page-section-header wf-animate mb-5">
                <?php if ( $sub_title ) : ?><div class="section-label"><?= esc_html( $sub_title ) ?></div><?php endif; ?>
                <?php if ( $title ) : ?><h2 class="section-title"><?= esc_html( $title ) ?></h2><?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="projects-grid wf-animate-grid">
            <?php foreach ( $ids as $index => $project_id ) {
                get_template_part(
                    'template-parts/projects/project-card',
                    null,
                    array(
                        'id'       => $project_id,
                        'featured' => ( 0 === $index ),
                    )
                );
            } ?>
        </div>
    </div>
</section>
