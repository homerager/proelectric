<?php
/*
  Template Name: FAQ
 */

/**
 * FAQ groups. Questions/answers are defined once here and used both for the
 * accordion markup and the FAQPage JSON-LD schema (rich snippets in Google).
 */
$faq_groups = array(
	array(
		'id'    => 'general',
		'label' => 'Загальні питання',
		'title' => 'ПРО КОМПАНІЮ ТА СПІВПРАЦЮ',
		'items' => array(
			array(
				'q' => 'Які послуги надає «Прогрес Електрик»?',
				'a' => 'Повний цикл енергетичних рішень: проєктування та монтаж сонячних електростанцій, електромонтажні роботи будь-якої складності, збірка електрощитового обладнання, системи резервного живлення та АВР, автоматика і захист, системи освітлення. Працюємо з приватними будинками, бізнесом, ОСББ та промисловими об\'єктами.',
			),
			array(
				'q' => 'У яких регіонах ви працюєте?',
				'a' => 'Базуємось у Львові та працюємо по Львівській області й західній Україні. Для середніх і великих комерційних та промислових проєктів виїжджаємо по всій Україні — умови узгоджуємо індивідуально.',
			),
			array(
				'q' => 'Чи безкоштовний виїзд інженера на об\'єкт?',
				'a' => 'Так. Інженер безкоштовно оглядає об\'єкт, аналізує споживання та стан електромережі, після чого ми готуємо детальну комерційну пропозицію протягом 48 годин.',
			),
			array(
				'q' => 'Як швидко ви відповідаєте на заявку?',
				'a' => 'У робочий час менеджер зв\'язується з вами протягом 2 годин після отримання заявки. Також можете написати нам у Viber, Telegram чи WhatsApp — посилання є в шапці сайту.',
			),
		),
	),
	array(
		'id'    => 'solar',
		'label' => 'Сонячні електростанції',
		'title' => 'СОНЯЧНІ ЕЛЕКТРОСТАНЦІЇ',
		'items' => array(
			array(
				'q' => 'Скільки коштує встановлення СЕС для приватного будинку?',
				'a' => 'Вартість залежить від потужності та типу обладнання. Орієнтовно: система 5 кВт — 150 000–200 000 грн «під ключ», 10 кВт — 270 000–350 000 грн. Ціна включає всі матеріали, монтаж, документи та підключення до мережі.',
			),
			array(
				'q' => 'Чи будуть панелі працювати взимку або в хмарну погоду?',
				'a' => 'Так, панелі виробляють електроенергію навіть при розсіяному світлі. Взимку генерація знижується до 20–30% від літнього рівня, але повністю не припиняється. Сучасні панелі особливо ефективні при низьких температурах.',
			),
			array(
				'q' => 'Що таке «зелений тариф» і як на нього потрапити?',
				'a' => '«Зелений тариф» дозволяє продавати надлишки згенерованої електроенергії в мережу. Для цього потрібен договір з обленерго та двонаправлений лічильник. Ми беремо оформлення всіх документів на себе — від заявки до підписання договору.',
			),
			array(
				'q' => 'Який термін окупності сонячної електростанції?',
				'a' => 'Для бізнесу з високим денним споживанням — зазвичай 3–5 років. Для приватного будинку — 5–8 років залежно від споживання, тарифу та наявності «зеленого тарифу». На консультації розрахуємо окупність саме для вашого об\'єкта.',
			),
		),
	),
	array(
		'id'    => 'pricing',
		'label' => 'Ціни та оплата',
		'title' => 'ЦІНИ ТА ОПЛАТА',
		'items' => array(
			array(
				'q' => 'Що входить у вартість «під ключ»?',
				'a' => 'Проєктування, всі матеріали та обладнання, монтажні й пусконалагоджувальні роботи, оформлення документів та підключення. Після підписання кошторису ціна не змінюється — жодних прихованих доплат.',
			),
			array(
				'q' => 'Скільки коштує збірка електрощита?',
				'a' => 'Залежить від типу: квартирний або поверховий щиток — від 8 000 грн, шафа АВР — від 28 000 грн, головний розподільний щит (ГРЩ) — від 35 000 грн, шафа автоматики з ПЛК — від 45 000 грн. Точну вартість розрахуємо після уточнення специфікації.',
			),
			array(
				'q' => 'Чи можлива поетапна оплата?',
				'a' => 'Так, стандартна схема — аванс на матеріали та обладнання, решта після завершення й перевірки робіт. Для великих проєктів графік платежів прив\'язуємо до етапів виконання.',
			),
			array(
				'q' => 'Чи працюєте ви з юридичними особами та ПДВ?',
				'a' => 'Так, ми ТОВ і працюємо як з приватними клієнтами, так і з юридичними особами: безготівковий розрахунок, договір, повний пакет закривних документів.',
			),
		),
	),
	array(
		'id'    => 'service',
		'label' => 'Монтаж і гарантія',
		'title' => 'МОНТАЖ, ГАРАНТІЯ ТА СЕРВІС',
		'items' => array(
			array(
				'q' => 'Скільки триває монтаж?',
				'a' => 'СЕС для приватного будинку — 2–5 робочих днів після поставки обладнання. Комерційні та промислові об\'єкти — від 2 тижнів залежно від масштабу. Терміни фіксуємо в договорі.',
			),
			array(
				'q' => 'Чи потрібні дозволи для встановлення сонячних панелей?',
				'a' => 'Для мережевих систем потрібне технічне приєднання до обленерго. Для приватних будинків (до 30 кВт) процедура спрощена. Ми беремо на себе всі питання з документами — погодження, подачу заявок та підписання договорів.',
			),
			array(
				'q' => 'Яка гарантія на роботи та обладнання?',
				'a' => 'На монтажні роботи даємо власну гарантію за договором. На обладнання діє гарантія виробника: сонячні панелі — до 25 років лінійної потужності, інвертори — 5–10 років залежно від бренду.',
			),
			array(
				'q' => 'Чи обслуговуєте ви об\'єкти після запуску?',
				'a' => 'Так. Пропонуємо сервісне обслуговування: моніторинг генерації, планові огляди, чистку панелей та оперативний виїзд у разі несправності. Умови сервісу узгоджуємо при здачі об\'єкта.',
			),
		),
	),
);

$faq_schema = array(
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => array(),
);

foreach ( $faq_groups as $group ) {
	foreach ( $group['items'] as $item ) {
		$faq_schema['mainEntity'][] = array(
			'@type'          => 'Question',
			'name'           => $item['q'],
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $item['a'],
			),
		);
	}
}

get_header();
?>

<section class="hero contact-us-hero position-relative">
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
            <div class="hero-label">Відповіді на найпопулярніші питання</div>
            <h1 class="hero-title">
                ЧАСТІ <span class="accent-blue">ЗАПИ</span><span class="accent-green">ТАННЯ</span>
            </h1>
            <p class="hero-desc">Зібрали все, про що клієнти запитують найчастіше: ціни, терміни, гарантії та документи. Не знайшли відповідь — напишіть нам, відповімо протягом 2 годин.</p>
        </div>
    </div>
</section>

<section class="projects-cats-nav-section page-section">
    <div class="container">
        <nav class="projects-cats-nav wf-animate" aria-label="Розділи FAQ">
            <?php foreach ( $faq_groups as $group ) : ?>
                <a href="#faq-<?= esc_attr( $group['id'] ) ?>" class="projects-cat-link scroll-to-btn"><?= esc_html( $group['label'] ) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</section>

<?php foreach ( $faq_groups as $index => $group ) : ?>
    <section class="page-section faq-section<?= $index % 2 ? ' page-section-bg2' : '' ?>" id="faq-<?= esc_attr( $group['id'] ) ?>">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label"><?= esc_html( $group['label'] ) ?></div>
                <h2 class="section-title"><?= esc_html( $group['title'] ) ?></h2>
            </div>
            <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
                <?php foreach ( $group['items'] as $item ) : ?>
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
<?php endforeach; ?>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">НЕ ЗНАЙШЛИ ВІДПОВІДЬ?</div>
                <p class="cta-band-sub">Поставте питання нашому інженеру — безкоштовна консультація без зобов'язань.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>

<script type="application/ld+json"><?= wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?></script>

<?php
get_footer();
