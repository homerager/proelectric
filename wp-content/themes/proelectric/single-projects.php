<?php
/**
 * The template for displaying a single project
 *
 * Works with the `projects` custom post type. Pulls optional ACF fields
 * (project_category, project_power, project_year, project_location,
 * project_client, project_type, project_duration, project_scope,
 * project_gallery, project_results) and falls back gracefully when they
 * are not set, so the page renders with only the WP core fields too.
 *
 * @package Proelectric
 */

$proelectric_phone = proelectric_get_primary_phone();

get_header();


while ( have_posts() ) :
	the_post();

	// Category comes from the standard WordPress category taxonomy.
	$cats     = get_the_category();
	$category = ! empty( $cats ) ? $cats[0]->name : '';

	$power    = get_field( 'project_power' );
	$year     = get_field( 'project_year' );
	$location = get_field( 'project_location' );
	$client   = get_field( 'project_client' );
	$type     = get_field( 'project_type' );
	$duration = get_field( 'project_duration' );
	$scope    = get_field( 'project_scope' );
	$gallery  = get_field( 'project_gallery' );
	$results  = get_field( 'project_results' );

	// Hero meta pills (only the ones that are filled in).
	$hero_meta = array();
	if ( $year ) {
		$hero_meta[] = $year;
	}
	if ( $power ) {
		$hero_meta[] = $power;
	}
	if ( $location ) {
		$hero_meta[] = $location;
	}

	// Spec rows for the sidebar card.
	$specs = array();
	if ( $category ) {
		$specs[] = array( 'Напрямок', $category );
	}
	if ( $power ) {
		$specs[] = array( 'Потужність', $power );
	}
	if ( $year ) {
		$specs[] = array( 'Рік реалізації', $year );
	}
	if ( $location ) {
		$specs[] = array( 'Локація', $location );
	}
	if ( $client ) {
		$specs[] = array( 'Замовник', $client );
	}
	if ( $type ) {
		$specs[] = array( 'Тип об\'єкта', $type );
	}
	if ( $duration ) {
		$specs[] = array( 'Термін', $duration );
	}
?>

<section class="hero post-hero project-single-hero">
	<div class="blog-hero-bg"></div>
	<div class="hero-tint"></div>
	<div class="container">
		<div class="hero-content hero-content-center">
			<div class="breadcrumb">
				<a href="<?= esc_url( home_url( '/' ) ) ?>">Головна</a><span>›</span>
				<a href="<?= esc_url( home_url( '/projects/' ) ) ?>">Проєкти</a><span>›</span>
				<span><?= get_the_title() ?></span>
			</div>
			<?php
			proelectric_breadcrumb_schema( array(
				array( 'name' => 'Головна', 'url' => home_url( '/' ) ),
				array( 'name' => 'Проєкти', 'url' => home_url( '/projects/' ) ),
				array( 'name' => get_the_title(), 'url' => get_permalink() ),
			) );
			?>
			<?php if ( $category ) : ?>
				<div class="hero-label"><?= esc_html( $category ) ?></div>
			<?php endif; ?>
			<h1 class="hero-title post-hero-title"><?= get_the_title() ?></h1>
			<?php if ( ! empty( $hero_meta ) ) : ?>
				<div class="post-hero-meta project-hero-meta">
					<?php foreach ( $hero_meta as $i => $meta ) : ?>
						<?php if ( $i > 0 ) : ?><span class="post-meta-sep">·</span><?php endif; ?>
						<span><?= esc_html( $meta ) ?></span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="page-section project-overview">
	<div class="container">
		<div class="project-overview-grid">
			<main class="project-main">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="project-featured-img wf-animate">
						<?= get_the_post_thumbnail( get_the_ID(), 'large' ) ?>
					</div>
				<?php endif; ?>

				<div class="project-content entry-content post-content">
					<?php
					if ( get_the_content() ) {
						the_content();
					} else {
						echo '<p>' . esc_html( get_the_excerpt() ) . '</p>';
					}
					?>
				</div>

				<?php if ( $scope ) : ?>
					<div class="project-scope-block wf-animate">
						<div class="project-block-title">Обсяг виконаних робіт</div>
						<div class="project-scope-content entry-content">
							<?= wp_kses_post( wpautop( $scope ) ) ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $gallery ) && is_array( $gallery ) ) : ?>
					<div class="project-gallery wf-animate-grid">
						<?php foreach ( $gallery as $img ) :
							$src = is_array( $img ) ? ( $img['sizes']['large'] ?? $img['url'] ) : '';
							$alt = is_array( $img ) ? ( $img['alt'] ?: get_the_title() ) : '';
							if ( ! $src ) {
								continue;
							}
							?>
							<a href="<?= esc_url( is_array( $img ) ? $img['url'] : $src ) ?>" class="project-gallery-item wf-animate" target="_blank" rel="noopener">
								<img src="<?= esc_url( $src ) ?>" alt="<?= esc_attr( $alt ) ?>" loading="lazy">
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</main>

			<aside class="project-sidebar">
				<?php if ( ! empty( $specs ) ) : ?>
					<div class="project-specs wf-animate">
						<div class="project-specs-title">Характеристики проєкту</div>
						<?php foreach ( $specs as $spec ) : ?>
							<div class="spec-row">
								<span class="spec-label"><?= esc_html( $spec[0] ) ?></span>
								<span class="spec-value"><?= esc_html( $spec[1] ) ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<div class="project-side-cta wf-animate">
					<div class="project-side-cta-title">Потрібен схожий проєкт?</div>
					<p>Залиште заявку — підготуємо рішення та орієнтовну вартість під ваш об'єкт.</p>
					<a href="#contact" class="btn btn-primary scroll-to-btn">Отримати консультацію</a>
					<a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="project-side-phone"><?= esc_html( $proelectric_phone['display'] ) ?></a>
				</div>
			</aside>
		</div>
	</div>
</section>

<?php if ( ! empty( $results ) && is_array( $results ) ) : ?>
    <section class="page-section page-section-bg2 project-results">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <h3 class="section-label">Підсумки</h3>
                <h2 class="section-title">РЕЗУЛЬТАТИ ПРОЄКТУ</h2>
            </div>
            <div class="project-results-grid wf-animate-grid">
                <?php foreach ( $results as $res ) : ?>
                    <div class="project-result-item wf-animate">
                        <div class="result-num"><?= esc_html( $res['stat_num'] ?? '' ) ?><span class="unit"><?= esc_html( $res['unit'] ?? '' ) ?></span></div>
                        <div class="result-label"><?= esc_html( $res['stat_label'] ?? '' ) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$current_id = get_the_ID();
$related    = new WP_Query( array(
	'post_type'      => 'projects',
	'posts_per_page' => 3,
	'post__not_in'   => array( $current_id ),
	'post_status'    => 'publish',
	'orderby'        => 'rand',
) );

if ( $related->have_posts() ) :
?>
<section class="page-section other-projects-section">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Портфоліо робіт</h3>
			<h2 class="section-title">ІНШІ ПРОЄКТИ</h2>
		</div>
		<div class="d-grid md-grid-3-columns wf-animate-grid">
			<?php while ( $related->have_posts() ) : $related->the_post();
				$r_cats  = get_the_category();
				$r_cat   = ! empty( $r_cats ) ? $r_cats[0]->name : '';
				$r_power = get_field( 'project_power' );
				$r_year  = get_field( 'project_year' );
				$r_type  = get_field( 'project_type' );
				$r_meta  = array_filter( array( $r_year, $r_type ) );
			?>
			<a href="<?= esc_url( get_permalink() ) ?>" class="project-card project-card-link wf-animate">
				<?php if ( $r_cat ) : ?>
					<div class="project-tag"><?= esc_html( $r_cat ) ?></div>
				<?php endif; ?>
				<div class="project-title"><?= get_the_title() ?></div>
				<p class="project-desc"><?= esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ) ?></p>
				<?php if ( $r_power ) : ?>
					<div class="project-power"><?= esc_html( $r_power ) ?></div>
				<?php elseif ( ! empty( $r_meta ) ) : ?>
					<div class="project-meta" style="margin-top:20px"><?= esc_html( implode( ' / ', $r_meta ) ) ?></div>
				<?php endif; ?>
			</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif; ?>

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

<?php endwhile; ?>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>
<?php get_footer(); ?>
