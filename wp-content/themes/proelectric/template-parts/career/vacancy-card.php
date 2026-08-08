<?php
/**
 * Single `vacancy` card. Used on the "Кар'єра" page listing.
 *
 * Expected $args:
 *   - id (int) vacancy post ID (required)
 *
 * @package Proelectric
 */

$vacancy_id = $args['id'] ?? 0;
if ( ! $vacancy_id ) {
	return;
}

$employment_type = get_field( 'vacancy_employment_type', $vacancy_id );
$location        = get_field( 'vacancy_location', $vacancy_id );
$salary          = get_field( 'vacancy_salary', $vacancy_id );
$excerpt         = wp_trim_words( get_the_excerpt( $vacancy_id ), 20, '…' );
?>
<a href="<?= esc_url( get_permalink( $vacancy_id ) ) ?>" class="vacancy-card wf-animate">
	<?php if ( $employment_type ) : ?>
		<div class="vacancy-tag"><?= esc_html( $employment_type ) ?></div>
	<?php endif; ?>
	<div class="vacancy-title"><?= esc_html( get_the_title( $vacancy_id ) ) ?></div>
	<?php if ( $excerpt ) : ?>
		<p class="vacancy-desc"><?= esc_html( $excerpt ) ?></p>
	<?php endif; ?>
	<?php if ( $location || $salary ) : ?>
		<div class="vacancy-meta">
			<?php if ( $location ) : ?>
				<span class="vacancy-meta-item"><?= esc_html( $location ) ?></span>
			<?php endif; ?>
			<?php if ( $salary ) : ?>
				<span class="vacancy-meta-item vacancy-meta-salary"><?= esc_html( $salary ) ?></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</a>
