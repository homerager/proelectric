<?php
/*
  Template Name: Кар'єра
 */

/**
 * FAQ items for the "Кар'єра" page. Defined here (and reused for the FAQPage
 * JSON-LD schema) the same way template-faq.php builds its own FAQ groups.
 */
$career_faq = array(
	array(
		'q' => 'Як подати заявку на вакансію?',
		'a' => 'Залиште відгук через форму на цій сторінці або зателефонуйте нам — вкажіть назву вакансії, яка вас цікавить. Менеджер зв\'яжеться з вами протягом 2 робочих днів.',
	),
	array(
		'q' => 'Чи потрібен досвід роботи?',
		'a' => 'Для більшості вакансій вітається профільний досвід, але для окремих позицій ми готові навчати перспективних кандидатів з нуля — це вказано в описі конкретної вакансії.',
	),
	array(
		'q' => 'Які документи потрібні для працевлаштування?',
		'a' => 'Паспорт, довідка про присвоєння ІПН та документ про освіту чи кваліфікацію (за наявності). Повний перелік документів уточнює менеджер під час співбесіди.',
	),
);

$career_faq_schema = array(
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => array(),
);

foreach ( $career_faq as $item ) {
	$career_faq_schema['mainEntity'][] = array(
		'@type'          => 'Question',
		'name'           => $item['q'],
		'acceptedAnswer' => array(
			'@type' => 'Answer',
			'text'  => $item['a'],
		),
	);
}

get_header();

$proelectric_phone = proelectric_get_primary_phone();

$vacancy_ids = get_posts(
	array(
		'post_type'      => 'vacancy',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'fields'         => 'ids',
		'orderby'        => 'date',
		'order'          => 'DESC',
	)
);
?>

<section class="hero career-hero position-relative">
	<div class="container">
		<div class="hero-content hero-content-center">
			<div class="hero-label">Приєднуйтесь до команди</div>
			<h1 class="hero-title">
				<span class="accent-blue">КАР'</span><span class="accent-green">Є</span>РА
			</h1>
			<p class="hero-desc">Ми будуємо енергетичні рішення для бізнесу та приватних клієнтів і завжди відкриті до фахівців, які хочуть розвиватись у сфері електромонтажу та відновлюваної енергетики.</p>
		</div>
	</div>
</section>

<section class="page-section page-section-bg2 career-about">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Хто ми</h3>
			<h2 class="section-title">ПРО КОМПАНІЮ</h2>
		</div>
		<div class="career-about-card wf-animate">
			<svg class="career-about-icon" viewBox="0 0 30 30"><path d="M16 3 L10 16 H16 L12 27 L24 12 H17Z" fill="#2db551" opacity=".9"/></svg>
			<p>«Прогрес Електрик» — інженерна компанія у Львові, яка понад 10 років виконує електромонтажні роботи та будує сонячні електростанції для приватних клієнтів, бізнесу й промислових об'єктів.</p>
			<p>Наша команда щодня працює над реальними проєктами — від електрощитів і систем резервного живлення до СЕС потужністю в десятки мегават. Приєднуйтесь до фахівців, які створюють енергетичну незалежність для клієнтів по всій Україні.</p>
		</div>
	</div>
</section>

<section class="page-section" id="vacancies">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Актуальні пропозиції</h3>
			<h2 class="section-title">ВІДКРИТІ ВАКАНСІЇ</h2>
		</div>
		<?php if ( ! empty( $vacancy_ids ) ) : ?>
			<div class="d-grid md-grid-3-columns wf-animate-grid">
				<?php foreach ( $vacancy_ids as $vacancy_id ) {
					get_template_part(
						'template-parts/career/vacancy-card',
						null,
						array( 'id' => $vacancy_id )
					);
				} ?>
			</div>
		<?php else : ?>
			<p class="hero-desc" style="text-align:center">Наразі відкритих вакансій немає. Залиште контакти нижче — ми звернемось, щойно з'явиться підходяща позиція.</p>
		<?php endif; ?>
	</div>
</section>

<?php
get_template_part(
	'template-parts/home/advantages',
	null,
	array(
		'sub_title' => 'Робота в команді',
		'title'     => 'ЧОМУ ПРАЦЮВАТИ З НАМИ',
		'items'     => array(
			array(
				'icon'        => 'shield',
				'title'       => 'Офіційне працевлаштування',
				'description' => 'Оформлення згідно КЗпП, соціальні гарантії та стабільна виплата заробітної плати.',
			),
			array(
				'icon'        => 'chart',
				'title'       => 'Навчання та розвиток',
				'description' => 'Стажування під керівництвом досвідчених інженерів, навчання роботі з сучасним обладнанням.',
			),
			array(
				'icon'        => 'bolt',
				'title'       => 'Реальні проєкти',
				'description' => 'Електромонтажні роботи та сонячні електростанції різного масштабу — від приватних будинків до промислових об\'єктів.',
			),
			array(
				'icon'        => 'link',
				'title'       => 'Кар\'єрний ріст',
				'description' => 'Можливість зростати від монтажника до провідного інженера чи керівника проєкту.',
			),
		),
	)
);
?>

<section class="page-section faq-section career-faq" id="career-faq">
	<div class="container">
		<div class="page-section-header wf-animate mb-5">
			<h3 class="section-label">Питання кандидатів</h3>
			<h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
		</div>
		<div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
			<?php foreach ( $career_faq as $item ) : ?>
				<div class="faq-item wf-animate">
					<div class="faq-q" onclick="toggleFaq(this)">
						<?= esc_html( $item['q'] ) ?>
						<span class="faq-ico">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
								<line x1="12" y1="5" x2="12" y2="19"/>
								<line x1="5" y1="12" x2="19" y2="12"/>
							</svg>
						</span>
					</div>
					<div class="faq-a">
						<div class="faq-a-inner"><?= esc_html( $item['a'] ) ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<script type="application/ld+json"><?= wp_json_encode( $career_faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?></script>

<section class="cta-band wf-animate">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 col-12">
				<div class="cta-band-title">НЕ ЗНАЙШЛИ ПІДХОДЯЩУ ВАКАНСІЮ?</div>
				<p class="cta-band-sub">Надішліть резюме — ми зв'яжемося, щойно з'явиться відповідна позиція.</p>
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
<?php
get_footer();
