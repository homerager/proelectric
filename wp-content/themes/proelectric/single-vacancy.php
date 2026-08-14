<?php
/**
 * The template for displaying a single vacancy.
 *
 * Works with the `vacancy` custom post type (registered via Custom Post Type UI).
 * Pulls the ACF fields defined in inc/acf-vacancy-fields.php and falls back
 * gracefully when they are not set.
 *
 * @package Proelectric
 */

get_header();

$proelectric_phone = proelectric_get_primary_phone();

// Find the page using template-career.php to link back to the vacancies list.
$career_page = get_posts(
	array(
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'meta_key'       => '_wp_page_template',
		'meta_value'     => 'template-career.php',
		'fields'         => 'ids',
	)
);
$career_url = ! empty( $career_page ) ? get_permalink( $career_page[0] ) : home_url( '/' );

while ( have_posts() ) :
	the_post();

	$location         = get_field( 'vacancy_location' );
	$employment_type  = get_field( 'vacancy_employment_type' );
	$salary           = get_field( 'vacancy_salary' );
	$responsibilities = get_field( 'vacancy_responsibilities' );
	$requirements     = get_field( 'vacancy_requirements' );
	$conditions       = get_field( 'vacancy_conditions' );

	$hero_meta      = array_filter( array( $employment_type, $location, $salary ) );
	$vacancy_title  = get_the_title();
?>

<section class="hero post-hero career-single-hero">
	<div class="blog-hero-bg"></div>
	<div class="hero-tint"></div>
	<div class="container">
		<div class="hero-content hero-content-center">
			<div class="breadcrumb">
				<a href="<?= esc_url( home_url( '/' ) ) ?>">Головна</a><span>›</span>
				<a href="<?= esc_url( $career_url ) ?>">Кар'єра</a><span>›</span>
				<span><?= get_the_title() ?></span>
			</div>
			<?php
			proelectric_breadcrumb_schema( array(
				array( 'name' => 'Головна', 'url' => home_url( '/' ) ),
				array( 'name' => "Кар'єра", 'url' => $career_url ),
				array( 'name' => get_the_title(), 'url' => get_permalink() ),
			) );
			?>
			<h1 class="hero-title post-hero-title"><?= get_the_title() ?></h1>
			<?php if ( ! empty( $hero_meta ) ) : ?>
				<div class="post-hero-meta">
					<?php foreach ( $hero_meta as $i => $meta ) : ?>
						<?php if ( $i > 0 ) : ?><span class="post-meta-sep">·</span><?php endif; ?>
						<span><?= esc_html( $meta ) ?></span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="page-section career-single-content">
	<div class="container">
		<div class="vacancy-content entry-content post-content">
			<?php
			if ( get_the_content() ) {
				the_content();
			} else {
				echo '<p>' . esc_html( get_the_excerpt() ) . '</p>';
			}
			?>
		</div>

		<?php if ( $responsibilities ) : ?>
			<div class="vacancy-block wf-animate">
				<div class="vacancy-block-title">Обов'язки</div>
				<div class="vacancy-block-content entry-content">
					<?= wp_kses_post( wpautop( $responsibilities ) ) ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $requirements ) : ?>
			<div class="vacancy-block wf-animate">
				<div class="vacancy-block-title">Вимоги</div>
				<div class="vacancy-block-content entry-content">
					<?= wp_kses_post( wpautop( $requirements ) ) ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $conditions ) : ?>
			<div class="vacancy-block wf-animate">
				<div class="vacancy-block-title">Умови</div>
				<div class="vacancy-block-content entry-content">
					<?= wp_kses_post( wpautop( $conditions ) ) ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="vacancy-apply-cta wf-animate">
			<div class="vacancy-apply-cta-title">Зацікавила вакансія «<?= get_the_title() ?>»?</div>
			<p>Залиште резюме через форму нижче або зателефонуйте — вкажіть, будь ласка, назву вакансії.</p>
			<a href="#contact" class="btn btn-primary scroll-to-btn">Надіслати резюме</a>
			<a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="vacancy-apply-phone"><?= esc_html( $proelectric_phone['display'] ) ?></a>
		</div>
	</div>
</section>

<?php
$current_id = get_the_ID();
$related    = new WP_Query(
	array(
		'post_type'      => 'vacancy',
		'posts_per_page' => 3,
		'post__not_in'   => array( $current_id ),
		'post_status'    => 'publish',
		'orderby'        => 'rand',
	)
);

if ( $related->have_posts() ) :
	?>
<section class="page-section page-section-bg2 other-vacancies-section">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Кар'єра</h3>
			<h2 class="section-title">ІНШІ ВАКАНСІЇ</h2>
		</div>
		<div class="d-grid md-grid-3-columns wf-animate-grid">
			<?php
			while ( $related->have_posts() ) :
				$related->the_post();
				get_template_part(
					'template-parts/career/vacancy-card',
					null,
					array( 'id' => get_the_ID() )
				);
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php
get_template_part(
	'template-parts/career/vacancy-apply',
	null,
	array(
		'vacancy_title' => $vacancy_title,
		'form_id'       => proelectric_get_vacancy_form_id(),
	)
);
?>
<?php get_footer(); ?>
