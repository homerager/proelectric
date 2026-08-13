<?php 
/*
  Template Name: Electrical installation work
 */
get_header();
?>
<section class="hero" style="--hero-bg: url(<?= get_template_directory_uri() . '/images/banners/electrical-installation-hero.webp'; ?>)">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">промислові та цивільні об'єкти</div>
            <h1 class="hero-title">ЕЛЕКТРО<br><span class="accent-blue">МОН</span><span class="accent-green">ТАЖ</span></span></h1>
            <p class="hero-desc">Повний цикл електромонтажних робіт: від проектування схем до здачі об'єкта. Досвід на об'єктах від 40 МВт до приватного будинку.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити розрахунок</a>
                <a href="#services" class="btn btn-white scroll-to-btn">Наші послуги</a>
            </div>
        </div>
    </div>
    <?php
        $stats = array(
            array(
                'stat_num' => '500',
                'unit' => '+',
                'stat_label' => "Об'єктів здано"
            ), array(
                'stat_num' => '10',
                'unit' => '+',
                'stat_label' => 'Років досвіду'
            ), array(
                'stat_num' => '0',
                'unit' => ' НВ+',
                'stat_label' => 'Нещасних випадків'
            ), array(
                'stat_num' => '100',
                'unit' => '%',
                'stat_label' => 'Гарантія якості'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
    ?>
</section>

<section class="page-section" id="services">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що ми виконуємо</h3>
            <h2 class="section-title">ВИДИ РОБІТ</h2>
            <p class="section-sub">Виконуємо повний комплекс електромонтажних робіт на об'єктах будь-якого рівня складності.</p>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns services-grid gap-0">
            <a href="<?= home_url('/montazh-elektroshhytiv/'); ?>" class="srv-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">01</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <rect x="4" y="10" width="44" height="32" rx="2" stroke="url(#g1)" stroke-width="1.5"/>
                    <path d="M14 22 h24 M14 30 h18" stroke="url(#g1)" stroke-width="1.2" stroke-linecap="round"/>
                    <circle cx="38" cy="30" r="5" fill="#2db551"/>
                    <path d="M35.5 30 l2 2 3-3" stroke="white" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                    <line x1="26" y1="6" x2="26" y2="10" stroke="url(#g1)" stroke-width="1.5"/>
                    <line x1="18" y1="6" x2="18" y2="10" stroke="url(#g1)" stroke-width="1.5"/>
                    <line x1="34" y1="6" x2="34" y2="10" stroke="url(#g1)" stroke-width="1.5"/>
                </svg>
                <h3 class="srv-title">Монтаж Електрощитів</h3>
                <p class="srv-desc">Збирання та встановлення розподільних щитів, шафів управління та автоматики для промислових і цивільних об'єктів.</p>
                <ul class="srv-list">
                    <li>Головні розподільні щити (ГРЩ)</li>
                    <li>Поверхові та квартирні щитки</li>
                    <li>Щити автоматики та АВР</li>
                    <li>Шафи управління двигунами</li>
                </ul>
            </a>
            <a href="<?= home_url('/montazh-kabelnyh-linij/'); ?>" class="srv-card white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">02</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g2" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <path d="M8 44 C8 28 18 16 26 8" stroke="url(#g2)" stroke-width="2" stroke-linecap="round"/>
                    <path d="M18 44 C18 34 26 24 34 14" stroke="url(#g2)" stroke-width="2" stroke-linecap="round" opacity=".6"/>
                    <path d="M30 44 C30 38 36 30 44 20" stroke="url(#g2)" stroke-width="2" stroke-linecap="round" opacity=".35"/>
                    <circle cx="26" cy="8" r="3" fill="#1a5fa8"/>
                    <circle cx="34" cy="14" r="3" fill="#2db551"/>
                    <circle cx="44" cy="20" r="3" fill="#2db551" opacity=".5"/>
                </svg>
                <h3 class="srv-title">Прокладання Кабелів</h3>
                <p class="srv-desc">Монтаж силових та контрольних кабелів у кабельних лотках, трубах, каналах та траншеях.</p>
                <ul class="srv-list">
                    <li>Кабельні лотки та короби</li>
                    <li>Підземне прокладання в траншеях</li>
                    <li>Кабельні мости та естакади</li>
                    <li>Кабелі до 110 кВ</li>
                </ul>
            </a>
            <a href="<?= home_url('/systemy-osvitlennya/'); ?>" class="srv-card reveal white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">03</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g3" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <circle cx="26" cy="18" r="10" stroke="url(#g3)" stroke-width="1.5"/>
                    <path d="M22 18 a4 4 0 0 1 8 0" stroke="url(#g3)" stroke-width="1.5" fill="none"/>
                    <line x1="26" y1="8" x2="26" y2="4" stroke="url(#g3)" stroke-width="1.5" stroke-linecap="round"/>
                    <line x1="14" y1="14" x2="10" y2="12" stroke="url(#g3)" stroke-width="1.5" stroke-linecap="round"/>
                    <line x1="38" y1="14" x2="42" y2="12" stroke="url(#g3)" stroke-width="1.5" stroke-linecap="round"/>
                    <line x1="26" y1="28" x2="26" y2="44" stroke="url(#g3)" stroke-width="1.5" stroke-linecap="round"/>
                    <line x1="18" y1="44" x2="34" y2="44" stroke="url(#g3)" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <h3 class="srv-title">Системи Освітлення</h3>
                <p class="srv-desc">Проектування та монтаж внутрішнього та зовнішнього освітлення: LED, промислові світильники, вулична інфраструктура.</p>
                <ul class="srv-list">
                    <li>Промислове та офісне освітлення</li>
                    <li>Вуличне та охоронне освітлення</li>
                    <li>Декоративне та архітектурне</li>
                    <li>Системи управління освітленням</li>
                </ul>
            </a>
            <a href="<?= home_url('/povitryani-liniyi-lep/'); ?>" class="srv-card reveal white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">04</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g4" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <rect x="8" y="6" width="36" height="40" rx="2" stroke="url(#g4)" stroke-width="1.5"/>
                    <line x1="16" y1="18" x2="36" y2="18" stroke="url(#g4)" stroke-width="1.2"/>
                    <line x1="16" y1="26" x2="36" y2="26" stroke="url(#g4)" stroke-width="1.2"/>
                    <line x1="16" y1="34" x2="28" y2="34" stroke="url(#g4)" stroke-width="1.2"/>
                    <path d="M32 30 L38 30 M35 27 L35 33" stroke="#2db551" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <h3 class="srv-title">Повітряні Лінії ЛЕП</h3>
                <p class="srv-desc">Монтаж та реконструкція повітряних ліній електропередачі 0,4–110 кВ, встановлення опор та підвіска проводів.</p>
                <ul class="srv-list">
                    <li>ПЛ та КЛ 0,4–10 кВ</li>
                    <li>Монтаж залізобетонних та металевих опор</li>
                    <li>Вводи в будівлі (АВВГ, СІП)</li>
                    <li>Реконструкція застарілих мереж</li>
                </ul>
            </a>
            <a href="<?= home_url('/avtomatyka-ta-zahyst/'); ?>" class="srv-card reveal white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">05</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g5" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <path d="M26 5 L8 13 v13 c0 11 8 19 18 23 10-4 18-12 18-23 V13 Z" stroke="url(#g5)" stroke-width="1.5" fill="none"/>
                    <circle cx="26" cy="24" r="6.5" stroke="url(#g5)" stroke-width="1.3"/>
                    <path d="M26 13.5 v3.5 M26 31 v3.5 M14.5 24 h3.5 M34 24 h3.5 M18 16 l2.5 2.5 M34 16 l-2.5 2.5 M18 32 l2.5-2.5 M34 32 l-2.5-2.5" stroke="url(#g5)" stroke-width="1.4" stroke-linecap="round"/>
                    <path d="M22.5 24 l2.5 2.5 4.5-4.5" stroke="#2db551" stroke-width="1.6" fill="none" stroke-linecap="round"/>
                </svg>
                <h3 class="srv-title">Автоматика та Захист</h3>
                <p class="srv-desc">Монтаж систем автоматичного керування та релейного захисту для надійної і безпечної роботи електрообладнання промислових і цивільних об'єктів.</p>
                <ul class="srv-list">
                    <li>Релейний захист та автоматика (РЗА)</li>
                    <li>Системи диспетчеризації та АСУ</li>
                    <li>Пристрої захисного відключення (ПЗВ)</li>
                    <li>Захист від перенапруг (ПЗІП)</li>
                </ul>
            </a>
            <a href="<?= home_url('/rezervne-zhyvlennya-ta-avr/'); ?>" class="srv-card reveal white-card white-card-bottom-border-hover wf-animate">
                <div class="srv-num">06</div>
                <svg class="srv-icon" viewBox="0 0 52 52" fill="none">
                    <defs>
                        <linearGradient id="g6" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8"/>
                            <stop offset="100%" stop-color="#2db551"/>
                        </linearGradient>
                    </defs>
                    <rect x="10" y="8" width="32" height="36" rx="2" stroke="url(#g6)" stroke-width="1.5"/>
                    <circle cx="26" cy="24" r="8" stroke="url(#g6)" stroke-width="1.2"/>
                    <path d="M22 24 l3 3 6-6" stroke="#2db551" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                    <line x1="16" y1="38" x2="36" y2="38" stroke="url(#g6)" stroke-width="1.2"/>
                </svg>
                <h3 class="srv-title">Резервне Живлення та АВР</h3>
                <p class="srv-desc">Підключення генераторів, інверторів та систем автоматичного резервного живлення.</p>
                <ul class="srv-list">
                    <li>АВР</li>
                    <li>Генератори</li>
                    <li>Інвертори</li>
                    <li>Акумуляторні системи</li>
                </ul>
            </a>
        </div>
    </div>
</section>

<section class="split">
    <div class="split-inner">
        <div class="split-photo"></div>
        <div class="split-content reveal">
            <h3 class="section-label">Наш підхід</h3>
            <h2 class="section-title">ЧОМУ ОБИРАЮТЬ НАС</h2>
            <p class="section-sub">Ми будуємо довгострокові відносини з клієнтами — через якість, чесність і відповідальність за результат.</p>
            <div class="feature-list">
                <div class="feature-item">
                <div class="feature-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.6">
                        <path d="M12 2L3 7v10l9 5 9-5V7l-9-5z"/>
                        <polyline points="3 7 12 12 21 7"/>
                        <line x1="12" y1="12" x2="12" y2="22"/>
                    </svg>
                </div>
                <div>
                    <div class="feature-title">Повний цикл «під ключ»</div>
                    <div class="feature-desc">Від технічного завдання та проектування до монтажу, пуску й передачі документації — один підрядник без посередників.</div>
                </div>
                </div>
                <div class="feature-item">
                <div class="feature-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <div class="feature-title">Дотримання термінів</div>
                    <div class="feature-desc">Чіткий календарний план, щотижнева звітність замовнику. Якщо переносимо — повідомляємо заздалегідь і компенсуємо.</div>
                </div>
                </div>
                <div class="feature-item">
                <div class="feature-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.6">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <div>
                    <div class="feature-title">Сертифіковані фахівці</div>
                    <div class="feature-desc">Всі електрики мають групи допуску, регулярно проходять навчання та атестацію. Робота відповідно до ПУЕ і НПАОП.</div>
                </div>
                </div>
                <div class="feature-item">
                <div class="feature-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div>
                    <div class="feature-title">Виконавча документація</div>
                    <div class="feature-desc">Передаємо повний комплект — схеми, акти прихованих робіт, протоколи вимірювань, паспорти обладнання.</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми працюємо</h3>
            <h2 class="section-title">ЕТАПИ ВИКОНАННЯ РОБІТ</h2>
            <p class="section-sub">Чіткий і прозорий процес — від першого контакту до підписання акту виконаних робіт.</p>
        </div>
        <div class="process-grid wf-animate-grid d-grid lg-grid-2-columns gap-2">
            <div class="process-item wf-animate">
                <div class="process-num">01</div>
                <div>
                    <div class="process-title">Технічне обстеження</div>
                    <p class="process-desc">Виїзд на об'єкт, вивчення проєктної документації, оцінка обсягів і складності робіт. Аналіз існуючої електромережі.</p>
                    <div class="process-tags">
                    <span class="ptag">Виїзд безкоштовно</span>
                    <span class="ptag">До 3 днів</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">02</div>
                <div>
                    <div class="process-title">Комерційна пропозиція</div>
                    <p class="process-desc">Детальна кошторисна документація з розбивкою за видами робіт та матеріалами. Фіксована ціна без прихованих доплат.</p>
                    <div class="process-tags">
                    <span class="ptag">Фіксована ціна</span>
                    <span class="ptag">Прозорий кошторис</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">03</div>
                <div>
                    <div class="process-title">Підготовка та матеріали</div>
                    <p class="process-desc">Складання ППР, підбір матеріалів і обладнання від перевірених постачальників. Контроль якості до початку монтажу.</p>
                    <div class="process-tags">
                    <span class="ptag">Власний склад</span>
                    <span class="ptag">Сертифіковані матеріали</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">04</div>
                <div>
                    <div class="process-title">Монтаж та контроль якості</div>
                    <p class="process-desc">Поетапне виконання робіт з фото-звітністю. Внутрішній контроль якості на кожному кроці. Дотримання техніки безпеки.</p>
                    <div class="process-tags">
                    <span class="ptag">Фото-звітність</span>
                    <span class="ptag">ТБ та охорона праці</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">05</div>
                <div>
                    <div class="process-title">Пусконалагодження та випробування</div>
                    <p class="process-desc">Комплексні випробування електроустановки, вимірювання ізоляції, перевірка захистів. Усунення зауважень до підписання акту.</p>
                    <div class="process-tags">
                    <span class="ptag">Протоколи вимірювань</span>
                    <span class="ptag">ПУЕ</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">06</div>
                <div>
                    <div class="process-title">Здача об'єкта та гарантія</div>
                    <p class="process-desc">Передача повного пакету виконавчої документації. Гарантія 3 роки на монтажні роботи, сервісне обслуговування.</p>
                    <div class="process-tags">
                    <span class="ptag">3 р. гарантія</span>
                    <span class="ptag">Сервіс та ТО</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section page-section-bg2 objects" id="objects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Де ми працюємо</h3>
            <h2 class="section-title">ТИПИ ОБ'ЄКТІВ</h2>
            <p class="section-sub">Досвід роботи на об'єктах різного призначення і масштабу — від котеджу до промислового підприємства.</p>
        </div>
        <div class="objects-grid wf-animate-grid d-grid md-grid-4-columns">
            <div class="obj-card wf-animate">
                <div class="obj-thumb industrial">🏭</div>
                <div class="obj-body">
                    <div class="obj-cat">Промисловість</div>
                    <div class="obj-title">Промислові підприємства</div>
                    <p class="obj-desc">Заводи, фабрики, склади, виробничі цехи. Живлення потужних споживачів, автоматика.</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb civil">🏢</div>
                <div class="obj-body">
                    <div class="obj-cat">Цивільне будівництво</div>
                    <div class="obj-title">Житлові та комерційні</div>
                    <p class="obj-desc">ЖК, бізнес-центри, торгові комплекси, готелі, лікарні, школи, ОСББ.</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb outdoor">🌾</div>
                <div class="obj-body">
                    <div class="obj-cat">Агросектор</div>
                    <div class="obj-title">Сільськогосподарські об'єкти</div>
                    <p class="obj-desc">Зернові елеватори, тваринницькі ферми, зрошувальні системи, агрокомплекси.</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb shield">⚡</div>
                <div class="obj-body">
                    <div class="obj-cat">Енергетика</div>
                    <div class="obj-title">Енергетичні об'єкти</div>
                    <p class="obj-desc">Підстанції, трансформаторні пункти, вітрові та сонячні електростанції, ЛЕП.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section safety-band">
    <div class="container">
        <div class="d-grid md-grid-2-columns md-gap-64 align-items-center">
            <div class="d-grid-col">
                <div class="page-section-header wf-animate mb-5">
                    <h3 class="section-label mb-3">
                        <span>Безпека та відповідність</span>
                    </h3>
                    <h2 class="section-title" style="color:#fff">СТАНДАРТИ ЯКОСТІ ТА БЕЗПЕКИ</h2>
                    <p class="section-sub" style="color:rgba(255,255,255,.45)">Всі роботи виконуються відповідно до чинних норм і правил. Безпека персоналу та замовника — наш пріоритет.</p>
                </div>
                <div class="safety-items wf-animate-grid">
                    <div class="safety-item wf-animate">
                        <div class="safety-dot"></div>
                        <div class="safety-text">ПУЕ — Правила улаштування електроустановок (7-е видання)</div>
                    </div>
                    <div class="safety-item wf-animate">
                        <div class="safety-dot"></div>
                        <div class="safety-text">НПАОП 40.1-1.21-98 — Правила безпечної експлуатації електроустановок</div>
                    </div>
                    <div class="safety-item wf-animate">
                        <div class="safety-dot"></div>
                        <div class="safety-text">ДБН В.2.5-23:2010 — Проектування електрообладнання об'єктів</div>
                    </div>
                    <div class="safety-item wf-animate">
                        <div class="safety-dot"></div>
                        <div class="safety-text">ISO 9001:2015 — Система управління якістю</div>
                    </div>
                    <div class="safety-item wf-animate">
                        <div class="safety-dot"></div>
                        <div class="safety-text">Ліцензія на виконання будівельних робіт від Держархбудінспекції</div>
                    </div>
                </div>
            </div>
            <div class="d-grid-col">
                <div class="safety-stats wf-animate-grid">
                    <div class="s-stat wf-animate">
                        <div class="s-num blue">0</div>
                        <div class="s-lbl">Нещасних випадків<br>за весь час роботи</div>
                    </div>
                    <div class="s-stat wf-animate">
                        <div class="s-num green">100%</div>
                        <div class="s-lbl">Об'єктів зданих<br>з першого разу</div>
                    </div>
                    <div class="s-stat wf-animate">
                        <div class="s-num blue">3</div>
                        <div class="s-lbl">Роки гарантії<br>на всі роботи</div>
                    </div>
                    <div class="s-stat wf-animate">
                        <div class="s-num green">24/7</div>
                        <div class="s-lbl">Аварійний виїзд<br>для наших об'єктів</div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</section>
<section class="page-section faq-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи надаєте ви послуги проектування електрики?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Ми розробляємо робочу документацію для електрики: принципові та монтажні схеми, специфікації обладнання, проекти заземлення та блискавкозахисту. Також адаптуємо типові проекти під конкретний об'єкт.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    З якими напругами ви працюєте?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Ми виконуємо роботи в мережах до 110 кВ включно. Це охоплює побутові мережі 220/380 В, розподільні мережі 6–10 кВ, а також первинне обладнання підстанцій 35 і 110 кВ при будівництві великих об'єктів.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає монтаж у приватному будинку?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для будинку 150–200 м² повна електрика «під ключ» займає 5–10 робочих днів залежно від кількості точок і складності схеми. Якщо роботи виконуються паралельно з іншими будівельниками — узгоджуємо графік.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна замовити лише частину робіт (наприклад, тільки щит)?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, ми беремося як за повний комплекс, так і за окремі види робіт — монтаж щита, прокладання кабелів, встановлення освітлення, замін проводки у квартирі тощо. Мінімальне замовлення не обмежуємо.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які документи ви передаєте після завершення?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Передаємо повний пакет: виконавчі схеми з нанесеними відхиленнями від проекту, акти прихованих робіт, протоколи вимірювань опору ізоляції та заземлення, паспорти та сертифікати на обладнання, акт приймання в експлуатацію.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи є у вас аварійна служба?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, для об'єктів, які ми здали і обслуговуємо, діє цілодобовий аварійний виїзд. Час реагування — до 2 годин по місту. Для нових замовників — за попередньою домовленістю.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО ВАРТІСТЬ<br>ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера. Детальний кошторис з фіксованою ціною — протягом 2 робочих днів.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions  justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">+38 063 060 76 00</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();