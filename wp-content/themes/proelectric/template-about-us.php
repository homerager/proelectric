<?php 
/*
  Template Name: About us
 */
get_header();
?>
<section class="hero about-us-hero position-relative">
    <div class="container">
        <div class="hero-year">2014</div>
        <div class="hero-content hero-content-left">
            <div class="hero-label">Наша історія</div>
            <h1 class="hero-title">
                <span class="accent-blue">ПРО</span><br>
                <span class="accent-green">КОМ</span>ПАНІЮ
            </h1>
            <p class="hero-lead hero-desc">Понад 10 років ми будуємо енергетичну інфраструктуру України — від промислових електростанцій до сонячних панелей на дахах приватних будинків.</p>
        </div> 
        <?php 
            $stats = array(
                array(
                    'stat_num' => '2014',
                    'unit' => ' р.',
                    'stat_label' => 'Рік заснування'
                ), array(
                    'stat_num' => '500',
                    'unit' => '+',
                    'stat_label' => 'Реалізованих проєктів'
                ),
                array(
                    'stat_num' => '40',
                    'unit' => ' МВт',
                    'stat_label' => 'Найбільша СЕС'
                ), array(
                    'stat_num' => '35',
                    'unit' => '+',
                    'stat_label' => 'Фахівців у команді'
                )
            );
            get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
        ?>  
    </div>
</section>
<section class="page-section page-section-story" id="story">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Хто ми</h3>
            <h2 class="section-title">НАША ІСТОРІЯ</h2>
        </div>
        <div class="md-grid-2-columns md-gap-64">
            <div class="story-text wf-animate">
                <p>
                    <strong>ТОВ «Прогрес Електрик»</strong> засновано у 2014 році командою інженерів з багаторічним досвідом в енергетиці. Починали з електромонтажних робіт на цивільних об'єктах Львова, поступово нарощуючи компетенції і масштаб проєктів.
                </p>
                <p>
                    Переломний момент настав у 2019 році — ми виграли тендер на будівництво промислової сонячної електростанції потужністю <strong>40 МВт</strong>. Цей проєкт дав нам унікальний досвід роботи з об'єктами великої потужності та відкрив двері до нових замовників по всій Україні.
                </p>
                <p>
                    Сьогодні ми — команда з <strong>35+ сертифікованих фахівців</strong>, яка виконує повний цикл робіт: від проектування до здачі об'єкта з документами. Наші клієнти — ОСББ, агрокомплекси, промислові підприємства, забудовники та власники приватних будинків.
                </p>
                <p>
                    Ми віримо, що <strong>якісна електрика і чиста енергія</strong> — це не розкіш, а базова потреба кожного об'єкта. Саме тому підходимо до кожного замовлення з однаковою відповідальністю — чи то 3 кВт для дачного будинку, чи 10 МВт для заводу.
                </p>
            </div>
            <div class="story-visual reveal">
                <div class="story-img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/images/static/about-us.webp" class="relative z-index-1 w-full h-full object-fit-cover" alt="Прогрес електрик">
                </div>
                <div class="story-badge">
                    <div class="story-badge-num">10+</div>
                    <div class="story-badge-lbl">Років на ринку</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg-dark page-section-timeline" id="timeline">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми зростали</h3>
            <h2 class="section-title">КЛЮЧОВІ МОМЕНТИ</h2>
            <p class="section-sub">Від невеликої бригади електриків до повноцінної інжинірингової компанії.</p>
        </div>
        <div class="timeline-grid wf-animate-grid">
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2014</div>
                <div class="tl-card-title">Заснування компанії</div>
                <div class="tl-card-desc">Четверо інженерів-електриків об'єднались і зареєстрували ТОВ «Прогрес Електрик». Перші замовлення — квартири та невеликі офіси у Львові.</div>
            </div>
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2016</div>
                <div class="tl-card-title">Перші промислові об'єкти</div>
                <div class="tl-card-desc">Вихід на ринок промислових та комерційних об'єктів. Перший великий контракт — електрика для торгового центру на 8 000 м².</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Зростання
                </div>
            </div>
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2019</div>
                <div class="tl-card-title">Промислова СЕС 40 МВт</div>
                <div class="tl-card-desc">Переломний проєкт — будівництво та запуск найбільшої на той момент промислової сонячної електростанції в регіоні. Монтаж трансформаторної підстанції 35 кВ.</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Великий прорив
                </div>
            </div>
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2020-21</div>
                <div class="tl-card-title">Вітрова електростанція 160 МВт</div>
                <div class="tl-card-desc">Участь у монтажі та запуску найбільшого вітроенергетичного проєкту компанії. Прокладання кабельних трас, монтаж підстанцій, пусконалагоджувальні роботи.</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Рекорд
                </div>
            </div>
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2022-23</div>
                <div class="tl-card-title">Запуск напрямку СЕС для бізнесу</div>
                <div class="tl-card-desc">Відкриття повноцінного підрозділу з проектування та монтажу сонячних електростанцій. Перші 50+ приватних та комерційних систем, підключення до зеленого тарифу.</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Новий напрямок
                </div>
            </div>
            <div class="tl-card wf-animate">
                <div class="tl-card-year">2024-25</div>
                <div class="tl-card-title">500+ завершених об'єктів</div>
                <div class="tl-card-desc">Досягнення ключового показника — 500 реалізованих проєктів. Команда виросла до 35+ спеціалістів. Розширення географії: Львів, Київ, Дніпро, Вінниця, Одеса.</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Сьогодні
                </div>
            </div>
            <!--<div class="tl-card wf-animate">
                <div class="tl-card-year">2026</div>
                <div class="tl-card-title">1000+ завершених об'єктів</div>
                <div class="tl-card-desc">Досягнення ключового показника — 1000 реалізованих проєктів. Команда виросла до 50+ спеціалістів. Розширення географії: Львів, Київ, Дніпро, Вінниця, Одеса.</div>
                <div class="tl-card-badge">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Сьогодні
                </div>
            </div>-->
        </div>
    </div>
</section>
<section class="page-section page-section-values" id="values">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що нами рухає</h3>
            <h2 class="section-title">НАШІ ЦІННОСТІ</h2>
            <p class="section-sub">Принципи, що визначають кожне наше рішення — від підбору матеріалів до спілкування з клієнтом.</p>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns services-grid values-grid gap-0">
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">01</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi1" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <path d="M24 4 L4 14 v14 c0 10 8 16 20 18 12-2 20-8 20-18 V14 Z" stroke="url(#vi1)" stroke-width="1.5" fill="none"/>
                        <path d="M16 24 l6 6 10-10" stroke="url(#vi1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="srv-title">Безпека понад усе</div>
                <div class="srv-desc">Кожен об'єкт здається з нульовим рівнем травматизму. Суворе дотримання ПУЕ, НПАОП і норм охорони праці — не формальність, а культура компанії.</div>
            </div>
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">02</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi2" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <rect x="6" y="6" width="36" height="36" rx="3" stroke="url(#vi2)" stroke-width="1.5" fill="none"/>
                        <line x1="6" y1="18" x2="42" y2="18" stroke="url(#vi2)" stroke-width="1" opacity=".5"/>
                        <path d="M14 28 l6 6 14-14" stroke="url(#vi2)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="srv-title">Якість без компромісів</div>
                <div class="srv-desc">Використовуємо лише сертифіковані матеріали від перевірених постачальників. Внутрішній контроль якості на кожному етапі, незалежно від розміру замовлення.</div>
            </div>
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">03</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi3" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <circle cx="24" cy="24" r="18" stroke="url(#vi3)" stroke-width="1.5" fill="none"/>
                        <path d="M18 24 l6 6 10-10" stroke="url(#vi3)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="srv-title">Інновації та ефективність</div>
                <div class="srv-desc">Використовуємо новітні технології та методики, щоб максимально знизити вартість та час виконання робіт. Кожен проєкт — це можливість продемонструвати свої досягнення.</div>
            </div>
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">04</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi4" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <path d="M8 36 L8 20 L24 8 L40 20 L40 36 Z" stroke="url(#vi4)" stroke-width="1.5" fill="none"/>
                        <rect x="18" y="26" width="12" height="10" stroke="url(#vi4)" stroke-width="1.2" fill="none"/>
                        <path d="M18 26 v-5 a6 6 0 0 1 12 0 v5" stroke="url(#vi4)" stroke-width="1.2" fill="none"/>
                    </svg>
                </div>
                <div class="srv-title">Чесність і прозорість</div>
                <div class="srv-desc">Фіксована ціна в договорі. Детальний кошторис без прихованих рядків. Повний пакет виконавчої документації. Ми не приховуємо нічого від замовника.</div>
            </div>
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">05</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi5" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <circle cx="16" cy="16" r="8" stroke="url(#vi5)" stroke-width="1.5" fill="none"/>
                        <circle cx="32" cy="32" r="8" stroke="url(#vi5)" stroke-width="1.5" fill="none"/>
                        <line x1="22" y1="22" x2="26" y2="26" stroke="url(#vi5)" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="srv-title">Довгострокове партнерство</div>
                <div class="srv-desc">Більше 60% нових замовлень — від клієнтів, що вже працювали з нами або прийшли за рекомендацією. Для нас це найважливіший показник якості.</div>
            </div>
            <div class="srv-card val-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">06</div>
                <div class="srv-icon">
                    <svg  viewBox="0 0 48 48" fill="none">
                        <defs><linearGradient id="vi6" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1a5fa8"/><stop offset="100%" stop-color="#2db551"/></linearGradient></defs>
                        <circle cx="24" cy="24" r="18" stroke="url(#vi6)" stroke-width="1.5" fill="none"/>
                        <path d="M24 14 v12 l7 5" stroke="url(#vi6)" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="srv-title">Дотримання термінів</div>
                <div class="srv-desc">Календарний план — це зобов'язання, а не орієнтир. Якщо щось іде не так, клієнт дізнається першим. Затримки в нашій роботі — рідкість, а не норма.</div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-licences page-section-bg-dark" id="licences">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Документи та сертифікати</h3>
            <h2 class="section-title">ЛІЦЕНЗІЇ ТА СТАНДАРТИ</h2>
            <div class="section-sub">Всі роботи виконуються відповідно до чинного законодавства та міжнародних стандартів якості.</div>
        </div>
        <div class="licences-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><path d="m9 15 2 2 4-4"/></svg>
                </div>
                <div class="lic-title">Ліцензія на будівельні роботи</div>
                <div class="lic-desc">Ліцензія Держархбудінспекції на виконання будівельних робіт підвищеної складності, включаючи електромонтажні роботи та монтаж інженерних мереж.</div>
                <div class="lic-num">Серія АБ № 645321</div>
            </div>
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="lic-title">ISO 9001:2015</div>
                <div class="lic-desc">Сертифікат системи управління якістю. Підтверджує відповідність процесів компанії міжнародному стандарту та щорічно підтверджується незалежним аудитом.</div>
                <div class="lic-num">Cert. № UA-ISO-9001-2024</div>
            </div>
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2L3 7v10l9 5 9-5V7l-9-5z"/>
                        <polyline points="3 7 12 12 21 7"/>
                        <line x1="12" y1="12" x2="12" y2="22"/>
                    </svg>
                </div>
                <div class="lic-title">Допуск до мереж 35–110 кВ</div>
                <div class="lic-desc">Персонал компанії має групи допуску з електробезпеки IV та V для роботи в мережах до 110 кВ включно. Щорічна атестація та навчання.</div>
                <div class="lic-num">Протоколи атестації 2025 р.</div>
            </div>
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="lic-title">Реєстрація в ЄДРПОУ</div>
                <div class="lic-desc">ТОВ «Прогрес Електрик» зареєстроване в Єдиному державному реєстрі юридичних осіб. Платник ПДВ. Офіційна звітність та прозора фінансова діяльність.</div>
                <div class="lic-num">ЄДРПОУ 38547219</div>
            </div>
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <div class="lic-title">Партнерство з виробниками</div>
                <div class="lic-desc">Офіційний партнер та дистриб'ютор провідних виробників обладнання: LONGi, SMA, Fronius, Huawei, BYD, Pylontech. Гарантійне обслуговування від виробника.</div>
                <div class="lic-num">7 офіційних партнерств</div>
            </div>
            <div class="lic-card wf-animate">
                <div class="lic-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <div class="lic-title">Страхування відповідальності</div>
                <div class="lic-desc">Договір страхування цивільної відповідальності підрядника на суму 5 000 000 грн. Клієнти захищені від фінансових ризиків, пов'язаних з виконанням робіт.</div>
                <div class="lic-num">Поліс № ЦВ-2025-00847</div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ГОТОВІ ПРАЦЮВАТИ РАЗОМ?</div>
                <p class="cta-band-sub">Розкажіть про ваш проєкт — ми підготуємо рішення та комерційну пропозицію протягом 48 годин.</p>
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