<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proelectric
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php
			while ( have_posts() ) :
				the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="hero contact-us-hero page-hero position-relative">
						<div class="container">
							<!-- decorative large bolt -->
							<div class="hero-bolt">
								<svg width="360" height="440" viewBox="0 0 360 440" fill="none">
									<path d="M220 0 L80 220 H170 L60 440 L300 160 H200 Z" fill="url(#boltGrad)" opacity=".9"/>
									<defs>
										<linearGradient id="boltGrad" x1="0" y1="0" x2="1" y2="1">
										<stop offset="0%" stop-color="#1a5fa8"/>
										<stop offset="100%" stop-color="#2db551" stop-opacity=".3"/>
										</linearGradient>
									</defs>
								</svg>
							</div>
							<div class="hero-content hero-content-left wf-animate">
								<?php the_title( '<h1 class="hero-title">', '</h1>' ); ?>
							</div>
						</div>
					</section>
					<section class="page-section">
   						 <div class="container">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						 </div>
					</section>		 
				</article>	
			<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
