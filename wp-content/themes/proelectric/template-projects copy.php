<?php
/*
  Template Name: Projects
 */
get_header();

$proelectric_phone = proelectric_get_primary_phone();
?>

<section class="hero projects-hero position-relative">
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="hero-label">Реалізовані об'єкти</div>
            <h1 class="hero-title">
                <span class="accent-blue">НАШІ</span> <span class="accent-green">ПРО</span>ЄКТИ
            </h1>
            <p class="hero-desc">Понад 10 років ми реалізуємо енергетичні проєкти будь-якого масштабу — від промислових електростанцій на десятки мегават до сонячних панелей на дахах приватних будинків та ОСББ.</p>
        </div>
        <?php
            $stats = array(
                array(
                    'stat_num' => '200',
                    'unit' => '+',
                    'stat_label' => "Завершених об'єктів"
                ), array(
                    'stat_num' => '160',
                    'unit' => ' МВт',
                    'stat_label' => 'Найбільший проєкт'
                ), array(
                    'stat_num' => '40',
                    'unit' => ' МВт',
                    'stat_label' => 'Найбільша СЕС'
                ), array(
                    'stat_num' => '10',
                    'unit' => '+',
                    'stat_label' => 'Років досвіду'
                )
            );
            get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
        ?>
    </div>
</section>

<section class="page-section" id="featured-projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Флагманські об'єкти</h3>
            <h2 class="section-title">КЛЮЧОВІ ПРОЄКТИ</h2>
        </div>
        <div class="projects-grid wf-animate-grid">
            <div class="project-card featured wf-animate">
                <div class="project-tag">Вітрова енергетика</div>
                <div class="project-title">Вітрова Електростанція 160 МВт</div>
                <p class="project-desc" style="max-width:340px;line-height:1.85;margin-top:4px">Монтаж та запуск найбільшої вітрової електростанції в регіоні — 2020–2021 рр. Трансформаторні підстанції, кабельні траси, пусконалагоджувальні роботи.</p>
                <div class="project-power">160<br>МВт</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Сонячна енергетика</div>
                <div class="project-title">Промислова СЕС 40 МВт</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Будівництво та запуск. Монтаж трансформаторної підстанції. 2019 р.</p>
                <div class="project-meta" style="margin-top:20px">2019 / Промисловий</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Кабельні лінії</div>
                <div class="project-title">Повітряні Лінії 0,4 кВ</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Модернізація та прокладка нових ліній зв'язку та освітлення від розподільчих підстанцій.</p>
                <div class="project-meta" style="margin-top:20px">2021 / Інфраструктура</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Освітлення</div>
                <div class="project-title">LED Системи Освітлення</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Проектування та монтаж LED-систем для промислових та комерційних об'єктів.</p>
                <div class="project-meta" style="margin-top:20px">Ongoing / Комерційні</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Сонячна енергетика</div>
                <div class="project-title">СЕС для Агрокомплексу 5 МВт</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Проектування та будівництво наземної сонячної електростанції для агропромислового підприємства під «зелений тариф».</p>
                <div class="project-meta" style="margin-top:20px">2020 / Промисловий</div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section-services" id="all-projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Портфоліо робіт</h3>
            <h2 class="section-title">УСІ ОБ'ЄКТИ</h2>
        </div>
        <div class="d-grid md-grid-3-columns wf-animate-grid">
            <div class="project-card wf-animate">
                <div class="project-tag">Сонячна енергетика</div>
                <div class="project-title">Дахова СЕС для ОСББ 30 кВт</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Проектування та монтаж мережевої станції на даху багатоповерхівки. Підключення «зеленого тарифу», система моніторингу.</p>
                <div class="project-meta" style="margin-top:20px">2022 / ОСББ</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Сонячна енергетика</div>
                <div class="project-title">СЕС для приватного будинку 12 кВт</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Гібридна станція з акумуляторним резервом. Повна автономність при відключеннях, інтеграція з «розумним будинком».</p>
                <div class="project-meta" style="margin-top:20px">2023 / Приватний</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Електромонтаж</div>
                <div class="project-title">Електромонтаж виробничого цеху</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Повний цикл електромонтажних робіт цеху площею 2400 м²: силові лінії, освітлення, заземлення, ввідно-розподільні пристрої.</p>
                <div class="project-meta" style="margin-top:20px">2022 / Промисловий</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Щитове обладнання</div>
                <div class="project-title">Розподільчий щит з АВР</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Збірка та монтаж головного розподільчого щита з автоматичним вводом резерву для комерційного об'єкта.</p>
                <div class="project-meta" style="margin-top:20px">2023 / Комерційний</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Резервне живлення</div>
                <div class="project-title">Резервне живлення для бізнесу</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Дизель-генератор 100 кВА з системою автозапуску та акумуляторний резерв для безперебійної роботи виробництва.</p>
                <div class="project-meta" style="margin-top:20px">2023 / Промисловий</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Підстанції</div>
                <div class="project-title">Трансформаторна підстанція 630 кВА</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Монтаж комплектної трансформаторної підстанції та кабельних вводів для нового виробничого майданчика.</p>
                <div class="project-meta" style="margin-top:20px">2021 / Інфраструктура</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Освітлення</div>
                <div class="project-title">LED-освітлення складського комплексу</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Заміна застарілого освітлення на енергоефективне LED — економія до 60% електроенергії, система керування по зонах.</p>
                <div class="project-meta" style="margin-top:20px">2022 / Комерційний</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Кабельні лінії</div>
                <div class="project-title">Прокладка кабельних ліній 10 кВ</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Прокладання та підключення кабельних ліній середньої напруги між підстанціями агропромислового комплексу.</p>
                <div class="project-meta" style="margin-top:20px">2021 / Інфраструктура</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Автоматизація</div>
                <div class="project-title">Автоматика та захист об'єкта</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Впровадження систем релейного захисту, автоматики та диспетчерського моніторингу енергоспоживання підприємства.</p>
                <div class="project-meta" style="margin-top:20px">2023 / Промисловий</div>
            </div>
        </div>
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

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();
