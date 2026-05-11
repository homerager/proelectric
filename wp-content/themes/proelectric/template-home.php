<?php 
/*
  Template Name: Home
 */
get_header();
?>

<section class="hero" style="--hero-bg: url(<?= get_template_directory_uri() . '/images/hero-bg.webp'; ?>)">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">Електромонтажні роботи &amp; СЕС</div>
            <h1 class="hero-title">ВАША<br> <span class="accent-blue">ЕНЕРГЕ</span><span class="accent-green">ТИЧНА</span><br>СВОБОДА</h1>
            <p class="hero-desc">Повний цикл електромонтажних робіт — від проектування до запуску. Сонячні електростанції, промислові об'єкти, приватні будинки.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Отримати пропозицію</a>
                <a href="#projects" class="btn btn-white scroll-to-btn">Наші проєкти</a>
            </div>
        </div>
    </div>
    <?php 
        $stats = array(
            array(
                'stat_num' => '10',
                'unit' => '+',
                'stat_label' => 'Років досвіду'
            ), array(
                'stat_num' => '100',
                'unit' => '%',
                'stat_label' => 'Гарантія якості'
            ), array(
                'stat_num' => '200',
                'unit' => '+',
                'stat_label' => "Завершених об'єктів"
            ), array(
                'stat_num' => '160',
                'unit' => ' МВт',
                'stat_label' => 'Найбільший проєкт'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
    ?>
</section>
<section class="page-section page-section-services" id="services">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Що ми робимо</div>
            <h2 class="section-title">НАШІ ПОСЛУГИ</h2>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns services-grid">
            <a href="<?= home_url('/sonyachni-elektrostancziyi/'); ?>" class="service-card white-card white-card-bottom-border-hover wf-animate">
                <div class="service-num">01</div>
                <svg class="service-icon" viewBox="0 0 54 54" fill="none">
                    <defs>
                        <linearGradient id="si1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <circle cx="27" cy="27" r="24" stroke="url(#si1)" stroke-width="1.5"/>
                    <path d="M27 10 L20 26 H27 L20 44 L36 22 H28Z" fill="url(#si1)"/>
                </svg>
                <div class="service-title item-title">Сонячні Електростанції</div>
                <p class="service-desc item-description">Проектування та монтаж СЕС для ОСББ, бізнесу та приватних потреб. Підключення до мережі, «зелений тариф».</p>
            </a>
            <a href="<?= home_url('/elektromontazhni-roboty/'); ?>" class="service-card white-card white-card-bottom-border-hover wf-animate">
                <div class="service-num">02</div>
                <svg class="service-icon" viewBox="0 0 54 54" fill="none">
                    <defs>
                        <linearGradient id="si2" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <rect x="8" y="8" width="38" height="38" rx="2" stroke="url(#si2)" stroke-width="1.5"/>
                    <path d="M20 27 h14 M27 20 v14" stroke="url(#si2)" stroke-width="1.5"/>
                    <circle cx="20" cy="20" r="2.5" fill="#1a5fa8"/>
                    <circle cx="34" cy="34" r="2.5" fill="#2db551"/>
                </svg>
                <div class="service-title item-title">Електромонтажні Роботи</div>
                <p class="service-desc item-description">Монтаж кабелів, систем освітлення, розподільних щитів. Промислові та цивільні об'єкти будь-якого масштабу.</p>
            </a>
            <a href="<?= home_url('/elektroshhytove-obladnannya/'); ?>" class="service-card white-card white-card-bottom-border-hover wf-animate">
                <div class="service-num">03</div>
                <svg class="service-icon" viewBox="0 0 54 54" fill="none">
                    <defs>
                        <linearGradient id="si3" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <rect x="10" y="6" width="34" height="42" rx="2" stroke="url(#si3)" stroke-width="1.5"/>
                    <path d="M18 17 h18 M18 25 h18 M18 33 h10" stroke="url(#si3)" stroke-width="1.2"/>
                    <circle cx="36" cy="40" r="5.5" fill="#2db551"/>
                    <path d="M33.5 40 l2 2 3-3" stroke="white" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                </svg>
                <div class="service-title item-title">Електрощитове Обладнання</div>
                <p class="service-desc item-description">Постачання та монтаж щитового обладнання, автоматики, систем захисту та управління електромережею.</p>
            </a>
        </div>
    </div>
</section>
<section class="page-section page-section-advantages" id="about">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Чому обирають нас</div>
            <h2 class="section-title">НАШІ ПЕРЕВАГИ</h2>
        </div>
        <div class="wf-animate-grid d-grid lg-grid-4-columns md-grid-2-columns adv-grid">
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6">
                    <path d="M4 15 L11 22 L26 8"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Гарантія якості</div>
                <p class="adv-desc item-description">Всі роботи виконуються сертифікованими спеціалістами з дотриманням стандартів.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6">
                    <circle cx="15" cy="15" r="11"/>
                    <path d="M15 7 v9 l5 4"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Дотримання термінів</div>
                <p class="adv-desc item-description">Проектний менеджмент нового покоління — завжди вчасно та в рамках бюджету.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6">
                    <path d="M5 12 Q15 4 25 12 Q15 28 5 12Z"/>
                    <circle cx="15" cy="12" r="3" fill="#2db551" stroke="none"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Гнучкість рішень</div>
                <p class="adv-desc item-description">Індивідуальний підхід та технічні рішення під кожен конкретний об'єкт.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6">
                    <rect x="4" y="8" width="22" height="14" rx="2"/>
                    <path d="M10 15 h10 M15 11 v8"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Сучасні технології</div>
                <p class="adv-desc item-description">Автоматизація, «розумний будинок», інтеграція з системами моніторингу.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#2db551" stroke-width="1.6">
                    <circle cx="11" cy="11" r="5"/>
                    <circle cx="21" cy="19" r="5"/>
                    <path d="M15 13 l2 2"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Довгострокове партнерство</div>
                <p class="adv-desc item-description">Супровід після здачі об'єкта, технічне обслуговування, швидкий відгук.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6">
                    <path d="M15 3 L3 9 v8 c0 7 5 11 12 13 7-2 12-6 12-13V9Z"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Чесність і відкритість</div>
                <p class="adv-desc item-description">Прозора звітність на кожному етапі, без прихованих доплат та сюрпризів.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30">
                    <path d="M16 3 L10 16 H16 L12 27 L24 12 H17Z" fill="#2db551" opacity=".9"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Енергоефективність</div>
                <p class="adv-desc item-description">Рішення, що знижують споживання та мінімізують вплив на довкілля.</p>
            </div>
            <div class="white-card white-card-left-border-hover adv-item wf-animate">
                <svg class="adv-icon" viewBox="0 0 30 30" fill="none" stroke="#1a5fa8" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 22 L10 8 l6 10 4-6 5 10"/>
                </svg>
                <div class="adv-title item-title-secondary font-semibold">Промисловий масштаб</div>
                <p class="adv-desc item-description">Досвід реалізації об'єктів від 40 МВт до невеликих приватних замовлень.</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Реалізовані об'єкти</div>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
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
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                </div>
            </div>
        </div>
    </div>
</section> 
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();