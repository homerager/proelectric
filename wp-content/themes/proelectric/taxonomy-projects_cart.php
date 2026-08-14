<?php
/**
 * The template for displaying `projects_cart` taxonomy term archives.
 *
 * Lists the `projects` custom post type filtered by the current
 * `projects_cart` term. The main query already returns the projects that
 * belong to the queried term, so we simply loop over it and reuse the shared
 * project card partial. A term switcher lets visitors jump between categories.
 *
 * @package Proelectric
 */

get_header();

$proelectric_phone = proelectric_get_primary_phone();

$term = get_queried_object();

// All published terms of this taxonomy for the category switcher.
$terms = get_terms(
	array(
		'taxonomy'   => 'projects_cart',
		'hide_empty' => true,
	)
);
?>

<section class="hero projects-hero position-relative">
	<div class="container">
		<div class="hero-content hero-content-center">
			<div class="breadcrumb">
				<a href="<?= esc_url( home_url( '/' ) ) ?>">Головна</a><span>›</span>
				<a href="<?= esc_url( home_url( '/projects/' ) ) ?>">Проєкти</a><span>›</span>
				<span><?= esc_html( $term->name ) ?></span>
			</div>
			<?php
			proelectric_breadcrumb_schema( array(
				array( 'name' => 'Головна', 'url' => home_url( '/' ) ),
				array( 'name' => 'Проєкти', 'url' => home_url( '/projects/' ) ),
				array( 'name' => $term->name ),
			) );
			?>
			<div class="hero-label">Реалізовані об'єкти</div>
			<h1 class="hero-title"><?= esc_html( $term->name ) ?></h1>
			<?php if ( ! empty( $term->description ) ) : ?>
				<p class="hero-desc"><?= esc_html( $term->description ) ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
	<section class="page-section projects-cats-nav-section">
		<div class="container">
			<div class="projects-cats-nav wf-animate">
				<a href="<?= esc_url( home_url( '/projects/' ) ) ?>" class="projects-cat-link">Усі проєкти</a>
				<?php foreach ( $terms as $t ) : ?>
					<a href="<?= esc_url( get_term_link( $t ) ) ?>"
					   class="projects-cat-link<?= ( $t->term_id === $term->term_id ) ? ' is-active' : '' ?>">
						<?= esc_html( $t->name ) ?>
						<span class="projects-cat-count"><?= esc_html( $t->count ) ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="page-section page-section-services">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="d-grid md-grid-3-columns wf-animate-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part(
						'template-parts/projects/project-card',
						null,
						array(
							'id'       => get_the_ID(),
							'featured' => false,
						)
					);
				endwhile;
				?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => '←',
					'next_text' => '→',
				)
			);
			?>
		<?php else : ?>
			<div class="page-section-header wf-animate">
				<h2 class="section-title">У цій категорії поки немає проєктів</h2>
				<p class="hero-desc">Перегляньте <a href="<?= esc_url( home_url( '/projects/' ) ) ?>">усі наші проєкти</a>.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="cta-band wf-animate">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 col-12">
				<div class="cta-band-title">ГОТОВІ РОЗПОЧАТИ ПРОЄКТ?</div>
				<p class="cta-band-sub">Залиште заявку — ми зв'яжемося протягом 2 годин і підготуємо комерційну пропозицію.</p>
			</div>
			<div class="col-md-5 col-12">
				<div class="cta-actions d-flex justify-content-md-end">
					<a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-white">Зателефонувати</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>
<?php get_footer(); ?>
