<?php
/*
  Template Name: Automation and Protection
*/
get_header();

$proelectric_phone = proelectric_get_primary_phone();
?>

<!-- HERO -->
<section class="hero automation-hero">

    <!-- decorative SVG — signal buses / relay logic deco -->
    <div class="automation-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="ag1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="35%"  stop-color="#1a5fa8" stop-opacity=".4"/>
                    <stop offset="65%"  stop-color="#2db551" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="ag2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="50%"  stop-color="#1a5fa8" stop-opacity=".28"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity=".15"/>
                </linearGradient>
            </defs>

            <!-- horizontal signal buses -->
            <line x1="0" y1="170" x2="1400" y2="170" stroke="url(#ag1)" stroke-width="2"/>
            <line x1="0" y1="350" x2="1400" y2="350" stroke="url(#ag1)" stroke-width="3"/>
            <line x1="0" y1="540" x2="1400" y2="540" stroke="url(#ag1)" stroke-width="1.5"/>
            <line x1="0" y1="720" x2="1400" y2="720" stroke="url(#ag1)" stroke-width="2.5"/>

            <!-- vertical feeders -->
            <line x1="240"  y1="0" x2="240"  y2="900" stroke="url(#ag2)" stroke-width="1.5"/>
            <line x1="520"  y1="0" x2="520"  y2="900" stroke="url(#ag2)" stroke-width="2.5"/>
            <line x1="820"  y1="0" x2="820"  y2="900" stroke="url(#ag2)" stroke-width="1.5"/>
            <line x1="1080" y1="0" x2="1080" y2="900" stroke="url(#ag2)" stroke-width="2"/>
            <line x1="1300" y1="0" x2="1300" y2="900" stroke="url(#ag2)" stroke-width="1.5"/>

            <!-- relay contact symbols at intersections -->
            <circle cx="240" cy="350" r="9" fill="none" stroke="#2db551" stroke-width="2" opacity=".55"/>
            <line x1="232" y1="358" x2="252" y2="338" stroke="#2db551" stroke-width="2" opacity=".6"/>
            <circle cx="520" cy="170" r="7" fill="#1a5fa8" opacity=".5"/>
            <line x1="512" y1="178" x2="530" y2="160" stroke="#1a5fa8" stroke-width="2" opacity=".55"/>
            <circle cx="820" cy="540" r="8" fill="none" stroke="#2db551" stroke-width="2" opacity=".5"/>
            <line x1="812" y1="548" x2="831" y2="529" stroke="#2db551" stroke-width="2" opacity=".55"/>
            <circle cx="1080" cy="720" r="7" fill="#1a5fa8" opacity=".45"/>
            <line x1="1072" y1="728" x2="1090" y2="710" stroke="#1a5fa8" stroke-width="2" opacity=".5"/>

            <!-- protection terminal symbol -->
            <rect x="470" y="300" width="120" height="100" rx="4" fill="rgba(45,181,81,.05)" stroke="rgba(45,181,81,.22)" stroke-width="1.5"/>
            <rect x="486" y="318" width="88" height="34" rx="2" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.15)" stroke-width="1"/>
            <path d="M494 340 l10-14 8 10 8-18 8 16 8-8" stroke="rgba(45,181,81,.4)" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="496" cy="370" r="4" fill="rgba(45,181,81,.4)"/>
            <circle cx="514" cy="370" r="4" fill="rgba(26,95,168,.35)"/>
            <text x="540" y="392" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.32)" letter-spacing="2">РЗА</text>

            <!-- gear symbol — automation -->
            <circle cx="1080" cy="350" r="30" fill="rgba(26,95,168,.05)" stroke="rgba(26,95,168,.22)" stroke-width="1.5"/>
            <circle cx="1080" cy="350" r="14" fill="none" stroke="rgba(26,95,168,.18)" stroke-width="1"/>
            <path d="M1080 314 v10 M1080 376 v10 M1044 350 h10 M1106 350 h10 M1055 325 l7 7 M1105 325 l-7 7 M1055 375 l7-7 M1105 375 l-7-7" stroke="rgba(26,95,168,.3)" stroke-width="2" stroke-linecap="round"/>

            <!-- label box -->
            <rect x="400" y="800" width="600" height="60" rx="2" fill="rgba(26,95,168,.04)" stroke="rgba(26,95,168,.12)" stroke-width="1.5"/>
            <line x1="420" y1="830" x2="980" y2="830" stroke="rgba(26,95,168,.12)" stroke-width="1" stroke-dasharray="8 6"/>
            <text x="700" y="836" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(26,95,168,.32)" letter-spacing="3">РЗА · АВТОМАТИКА · ДИСПЕТЧЕРИЗАЦІЯ</text>
        </svg>
    </div>

    <div class="automation-hero-tint"></div>

    <div class="container relative-container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>">Електромонтаж</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Автоматика та захист</a>
            </nav>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Електромонтаж', 'url' => home_url('/elektromontazhni-roboty/') ),
                array( 'name' => 'Автоматика та захист', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Релейний захист · Промислова автоматика</div>
            <h1 class="hero-title">
                <span class="accent-blue">АВТО</span><span class="accent-green">МАТИКА</span><br>
                ТА <span class="accent-blue">ЗА</span><span class="accent-green">ХИСТ</span>
            </h1>
            <p class="hero-desc">Проєктуємо, монтуємо та налагоджуємо системи релейного захисту, автоматики й диспетчеризації — від щитів РЗА на підстанціях до АСУ ТП промислових об'єктів. Захист, який спрацьовує вчасно і селективно.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити розрахунок</a>
                <a href="#systems" class="btn btn-outline-white scroll-to-btn">Напрямки робіт</a>
            </div>
        </div>
    </div>

    <?php
        $stats = array(
            array(
                'stat_num' => '300',
                'unit' => '+',
                'stat_label' => 'Систем автоматики'
            ), array(
                'stat_num' => '20',
                'unit' => ' мс',
                'stat_label' => 'Час спрацювання захисту'
            ), array(
                'stat_num' => '0',
                'unit' => ' НВ',
                'stat_label' => 'Нещасних випадків'
            ), array(
                'stat_num' => '3',
                'unit' => ' р.',
                'stat_label' => 'Гарантія на монтаж'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
    ?>

</section>


<!-- SYSTEMS -->
<section class="page-section" id="systems">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що ми виконуємо</h3>
            <h2 class="section-title">НАПРЯМКИ АВТОМАТИКИ ТА ЗАХИСТУ</h2>
            <p class="section-sub">Повний комплекс робіт із релейного захисту, автоматизації та диспетчеризації для об'єктів будь-якого рівня складності.</p>
        </div>

        <div class="cables-methods-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm1">
                    <div class="cables-method-badge">Захист мереж</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="26" y="20" width="48" height="60" rx="3" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <rect x="32" y="27" width="36" height="18" rx="2" fill="rgba(45,181,81,.12)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <path d="M35 39 l5-8 4 6 4-11 4 9 4-5 5 0" stroke="rgba(45,181,81,.7)" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="37" cy="54" r="2.5" fill="rgba(45,181,81,.7)"/>
                        <circle cx="46" cy="54" r="2.5" fill="rgba(26,95,168,.5)"/>
                        <circle cx="55" cy="54" r="2.5" fill="rgba(255,255,255,.2)"/>
                        <rect x="33" y="62" width="34" height="3" rx="1" fill="rgba(255,255,255,.12)"/>
                        <rect x="33" y="69" width="22" height="3" rx="1" fill="rgba(255,255,255,.1)"/>
                        <text x="50" y="92" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">РЗА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Релейний захист (РЗА)</div>
                    <p class="cables-method-desc">Монтаж та налаштування пристроїв релейного захисту й автоматики для розподільних мереж та підстанцій.</p>
                    <ul class="cables-method-list">
                        <li>МСЗ, струмова відсічка, диференційний захист</li>
                        <li>Мікропроцесорні термінали захисту</li>
                        <li>Захист трансформаторів та електродвигунів</li>
                        <li>Розрахунок уставок і селективності</li>
                        <li>Мережі 0,4–110 кВ</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm2">
                    <div class="cables-method-badge">Керування процесами</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="30" y="28" width="40" height="44" rx="3" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                        <rect x="38" y="36" width="24" height="14" rx="1" fill="rgba(26,95,168,.18)"/>
                        <circle cx="42" cy="60" r="2.5" fill="rgba(45,181,81,.6)"/>
                        <circle cx="50" cy="60" r="2.5" fill="rgba(45,181,81,.45)"/>
                        <circle cx="58" cy="60" r="2.5" fill="rgba(26,95,168,.5)"/>
                        <line x1="22" y1="36" x2="30" y2="36" stroke="rgba(26,95,168,.5)" stroke-width="2"/>
                        <line x1="22" y1="44" x2="30" y2="44" stroke="rgba(26,95,168,.4)" stroke-width="2"/>
                        <line x1="22" y1="52" x2="30" y2="52" stroke="rgba(26,95,168,.35)" stroke-width="2"/>
                        <line x1="70" y1="36" x2="78" y2="36" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                        <line x1="70" y1="44" x2="78" y2="44" stroke="rgba(45,181,81,.4)" stroke-width="2"/>
                        <line x1="70" y1="52" x2="78" y2="52" stroke="rgba(45,181,81,.35)" stroke-width="2"/>
                        <text x="50" y="88" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">ПЛК</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Промислова автоматика та АСУ ТП</div>
                    <p class="cables-method-desc">Розробка та впровадження систем автоматизованого керування технологічними процесами на базі ПЛК.</p>
                    <ul class="cables-method-list">
                        <li>ПЛК Siemens, ABB, Schneider, ОВЕН</li>
                        <li>Шафи керування та операторські панелі (HMI)</li>
                        <li>Алгоритми керування та програмування</li>
                        <li>Частотні перетворювачі та плавні пуски</li>
                        <li>Аварійні блокування та сигналізація</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm3">
                    <div class="cables-method-badge">Моніторинг</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="22" y="26" width="56" height="38" rx="3" fill="rgba(45,181,81,.07)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                        <polyline points="28,52 38,42 46,48 56,34 64,40 72,30" fill="none" stroke="rgba(45,181,81,.65)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        <line x1="28" y1="58" x2="72" y2="58" stroke="rgba(255,255,255,.12)" stroke-width="1"/>
                        <line x1="50" y1="64" x2="50" y2="72" stroke="rgba(45,181,81,.3)" stroke-width="2"/>
                        <line x1="40" y1="72" x2="60" y2="72" stroke="rgba(45,181,81,.4)" stroke-width="2" stroke-linecap="round"/>
                        <text x="50" y="86" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">SCADA</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Диспетчеризація та SCADA</div>
                    <p class="cables-method-desc">Системи диспетчерського контролю та збору даних для віддаленого нагляду за об'єктами в реальному часі.</p>
                    <ul class="cables-method-list">
                        <li>SCADA-системи та АРМ диспетчера</li>
                        <li>Облік електроенергії (АСКОЕ)</li>
                        <li>Протоколи Modbus, Profinet, IEC 61850</li>
                        <li>Архівування подій та аварій</li>
                        <li>Веб-доступ та push-сповіщення</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm4">
                    <div class="cables-method-badge">Електробезпека</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="28" y="30" width="44" height="40" rx="2" fill="rgba(26,95,168,.09)" stroke="rgba(26,95,168,.38)" stroke-width="1.5"/>
                        <rect x="34" y="36" width="9" height="28" rx="1" fill="rgba(45,181,81,.16)" stroke="rgba(45,181,81,.35)" stroke-width="1"/>
                        <rect x="46" y="36" width="9" height="28" rx="1" fill="rgba(26,95,168,.16)" stroke="rgba(26,95,168,.32)" stroke-width="1"/>
                        <rect x="58" y="36" width="9" height="28" rx="1" fill="rgba(45,181,81,.12)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <rect x="36.5" y="40" width="4" height="6" rx="1" fill="rgba(45,181,81,.6)"/>
                        <rect x="48.5" y="44" width="4" height="6" rx="1" fill="rgba(26,95,168,.55)"/>
                        <rect x="60.5" y="40" width="4" height="6" rx="1" fill="rgba(45,181,81,.5)"/>
                        <circle cx="38.5" cy="56" r="2.2" fill="rgba(255,255,255,.25)"/>
                        <text x="50" y="86" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">ПЗВ / ПЗІП</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Пристрої захисту в щитах</div>
                    <p class="cables-method-desc">Підбір та монтаж захисної апаратури в розподільних щитах — для захисту людей і обладнання.</p>
                    <ul class="cables-method-list">
                        <li>ПЗВ та диференційні автомати</li>
                        <li>Захист від імпульсних перенапруг (ПЗІП)</li>
                        <li>Автоматичні вимикачі та запобіжники</li>
                        <li>Реле напруги та контролю фаз</li>
                        <li>Селективність ступенів захисту</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm5">
                    <div class="cables-method-badge">Розумний об'єкт</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <path d="M30 50 L50 32 L70 50 V74 H30 Z" fill="rgba(45,181,81,.07)" stroke="rgba(45,181,81,.38)" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="50" cy="58" r="8" fill="none" stroke="rgba(45,181,81,.5)" stroke-width="1.3"/>
                        <path d="M50 47 v4 M50 65 v4 M39 58 h4 M57 58 h4 M42.2 50.2 l2.8 2.8 M57.8 50.2 l-2.8 2.8 M42.2 65.8 l2.8-2.8 M57.8 65.8 l-2.8-2.8" stroke="rgba(45,181,81,.45)" stroke-width="1.3" stroke-linecap="round"/>
                        <circle cx="50" cy="58" r="3" fill="rgba(45,181,81,.55)"/>
                        <text x="50" y="88" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">АВТОМАТИКА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Автоматика інженерних систем</div>
                    <p class="cables-method-desc">Автоматизація освітлення, вентиляції, опалення та інших інженерних систем будівель.</p>
                    <ul class="cables-method-list">
                        <li>Керування освітленням та сценарії</li>
                        <li>Автоматика вентиляції та клімату (HVAC)</li>
                        <li>Датчики руху, освітленості, присутності</li>
                        <li>Системи KNX та «розумний будинок»</li>
                        <li>Інтеграція з диспетчеризацією</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb apm6">
                    <div class="cables-method-badge">Контроль параметрів</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <path d="M26 64 A24 24 0 0 1 74 64" fill="none" stroke="rgba(26,95,168,.4)" stroke-width="1.6"/>
                        <path d="M26 64 A24 24 0 0 1 40 42" fill="none" stroke="rgba(45,181,81,.65)" stroke-width="3"/>
                        <line x1="50" y1="64" x2="62" y2="46" stroke="rgba(45,181,81,.7)" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="50" cy="64" r="4" fill="rgba(45,181,81,.6)"/>
                        <circle cx="30" cy="62" r="1.6" fill="rgba(255,255,255,.3)"/>
                        <circle cx="50" cy="40" r="1.6" fill="rgba(255,255,255,.3)"/>
                        <circle cx="70" cy="62" r="1.6" fill="rgba(255,255,255,.3)"/>
                        <text x="50" y="84" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">КВПіА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">КВПіА та вимірювання</div>
                    <p class="cables-method-desc">Монтаж контрольно-вимірювальних приладів та автоматики для нагляду за технологічними параметрами.</p>
                    <ul class="cables-method-list">
                        <li>Датчики температури, тиску, рівня, витрати</li>
                        <li>Вимірювальні перетворювачі та лічильники</li>
                        <li>Вторинні кола та кабелі КВПіА</li>
                        <li>Калібрування та повірка приладів</li>
                        <li>Інтеграція даних в АСУ ТП</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- DEPTH BAND -->
<div class="cables-depth-band wf-animate">
    <div class="container">
        <div class="cables-depth-row wf-animate-grid lg-grid-4-columns md-grid-2-columns">
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">110<span> кВ</span></div>
                    <div class="cables-depth-lbl">Класи напруги мереж<br>з релейним захистом</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">20<span> мс</span></div>
                    <div class="cables-depth-lbl">Мінімальний час<br>спрацювання захисту</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">300<span>+</span></div>
                    <div class="cables-depth-lbl">Систем автоматики<br>впроваджено</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">500<span>+</span></div>
                    <div class="cables-depth-lbl">Об'єктів обладнано<br>захистом та автоматикою</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- EQUIPMENT -->
<section class="page-section page-section-bg-dark" id="equipment">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Обладнання та виробники</h3>
            <h2 class="section-title">ОБЛАДНАННЯ ЯКЕ МИ ВИКОРИСТОВУЄМО</h2>
            <p class="section-sub">Працюємо виключно з офіційними постачальниками перевіреного обладнання, що має гарантію та сервісну підтримку в Україні.</p>
        </div>

        <div class="cables-types-grid lg-grid-4-columns md-grid-2-columns gap-16 wf-animate-grid">

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="5" y="2" width="14" height="20" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <rect x="8" y="5" width="8" height="5" rx="1" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                            <path d="M8 8 l2-3 2 2 2-4 2 3" stroke="rgba(45,181,81,.6)" stroke-width="1.1" fill="none" stroke-linecap="round"/>
                            <circle cx="9" cy="14" r="1.3" fill="rgba(45,181,81,.6)"/>
                            <circle cx="13" cy="14" r="1.3" fill="rgba(26,95,168,.5)"/>
                            <line x1="8" y1="18" x2="16" y2="18" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Термінали РЗА</div>
                    <div class="cable-type-badge">Мікропроцесорний захист</div>
                    <div class="cable-type-desc">Цифрові термінали релейного захисту для ліній, трансформаторів та двигунів з реєстрацією аварій.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">SIPROTEC</span>
                        <span class="cable-spec">ABB Relion</span>
                        <span class="cable-spec">Schneider</span>
                        <span class="cable-spec">ДЗТ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="6" y="6" width="12" height="12" rx="1.5" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <rect x="9" y="9" width="6" height="6" rx="1" fill="rgba(26,95,168,.25)"/>
                            <path d="M9 6V3M12 6V3M15 6V3M9 21v-3M12 21v-3M15 21v-3M6 9H3M6 12H3M6 15H3M21 9h-3M21 12h-3M21 15h-3" stroke="rgba(26,95,168,.45)" stroke-width="1.3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Програмовані контролери</div>
                    <div class="cable-type-badge">ПЛК · промислова автоматика</div>
                    <div class="cable-type-desc">Контролери для керування технологічними процесами з модулями вводу/виводу та комунікацій.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">SIMATIC S7</span>
                        <span class="cable-spec">ABB AC500</span>
                        <span class="cable-spec">Modicon</span>
                        <span class="cable-spec">ОВЕН ПЛК</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="4" width="20" height="13" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <polyline points="5 13 8 9 11 11 15 6 19 9" stroke="rgba(45,181,81,.55)" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="9" y1="21" x2="15" y2="21" stroke="rgba(45,181,81,.5)" stroke-width="1.5" stroke-linecap="round"/>
                            <line x1="12" y1="17" x2="12" y2="21" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Панелі оператора (HMI)</div>
                    <div class="cable-type-badge">Інтерфейс керування</div>
                    <div class="cable-type-desc">Сенсорні панелі для візуалізації процесів, керування обладнанням та відображення аварій.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Siemens HMI</span>
                        <span class="cable-spec">Weintek</span>
                        <span class="cable-spec">Delta</span>
                        <span class="cable-spec">4–15"</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="3" width="16" height="18" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <path d="M7 9 q2.5-4 5 0 t5 0" stroke="rgba(45,181,81,.55)" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                            <path d="M7 14h2v3h2v-3h2v3h2v-3h2" stroke="rgba(26,95,168,.5)" stroke-width="1.2" fill="none" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Частотні перетворювачі</div>
                    <div class="cable-type-badge">Керування двигунами</div>
                    <div class="cable-type-desc">Перетворювачі частоти та пристрої плавного пуску для регулювання швидкості електродвигунів.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Danfoss</span>
                        <span class="cable-spec">ABB</span>
                        <span class="cable-spec">Schneider</span>
                        <span class="cable-spec">Hitachi</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="4" width="6" height="16" rx="1" stroke="rgba(45,181,81,.5)" stroke-width="1.4"/>
                            <rect x="9" y="4" width="6" height="16" rx="1" stroke="rgba(26,95,168,.45)" stroke-width="1.4"/>
                            <rect x="15" y="4" width="6" height="16" rx="1" stroke="rgba(45,181,81,.4)" stroke-width="1.4"/>
                            <rect x="5" y="7" width="2" height="4" rx=".5" fill="rgba(45,181,81,.6)"/>
                            <rect x="11" y="9" width="2" height="4" rx=".5" fill="rgba(26,95,168,.55)"/>
                            <rect x="17" y="7" width="2" height="4" rx=".5" fill="rgba(45,181,81,.5)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Пристрої захисту</div>
                    <div class="cable-type-badge">ПЗВ / ПЗІП / реле</div>
                    <div class="cable-type-desc">Диференційні автомати, ПЗВ, ПЗІП та реле напруги для захисту мереж 0,4 кВ і споживачів.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Schneider</span>
                        <span class="cable-spec">ABB</span>
                        <span class="cable-spec">Hager</span>
                        <span class="cable-spec">ETI</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="7" width="10" height="10" rx="1.5" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <circle cx="8" cy="12" r="2.5" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                            <line x1="13" y1="10" x2="21" y2="10" stroke="rgba(45,181,81,.5)" stroke-width="1.4"/>
                            <line x1="13" y1="14" x2="18" y2="14" stroke="rgba(45,181,81,.4)" stroke-width="1.4"/>
                            <circle cx="20" cy="14" r="1.6" fill="rgba(45,181,81,.55)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Реле та автоматика</div>
                    <div class="cable-type-badge">Комутація та контроль</div>
                    <div class="cable-type-desc">Проміжні реле, реле часу, контактори та реле контролю параметрів для вторинних кіл.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Finder</span>
                        <span class="cable-spec">Lovato</span>
                        <span class="cable-spec">Relpol</span>
                        <span class="cable-spec">ETI</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M4 17 a8 8 0 0 1 16 0" stroke="rgba(45,181,81,.5)" stroke-width="1.5" fill="none"/>
                            <line x1="12" y1="17" x2="16" y2="11" stroke="rgba(45,181,81,.6)" stroke-width="1.6" stroke-linecap="round"/>
                            <circle cx="12" cy="17" r="2" fill="rgba(45,181,81,.6)"/>
                            <line x1="12" y1="17" x2="12" y2="21" stroke="rgba(26,95,168,.45)" stroke-width="1.4"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Датчики та КВПіА</div>
                    <div class="cable-type-badge">Вимірювання параметрів</div>
                    <div class="cable-type-desc">Датчики температури, тиску, рівня та витрати з вимірювальними перетворювачами для АСУ ТП.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Siemens</span>
                        <span class="cable-spec">Danfoss</span>
                        <span class="cable-spec">ОВЕН</span>
                        <span class="cable-spec">Carel</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="4" width="20" height="13" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <polyline points="5 13 9 9 12 11 16 6 19 9" stroke="rgba(45,181,81,.55)" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="8" y1="21" x2="16" y2="21" stroke="rgba(26,95,168,.45)" stroke-width="1.5" stroke-linecap="round"/>
                            <line x1="12" y1="17" x2="12" y2="21" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">ПЗ диспетчеризації</div>
                    <div class="cable-type-badge">SCADA / моніторинг</div>
                    <div class="cable-type-desc">Програмне забезпечення для збору даних, візуалізації процесів та аварійних сповіщень.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">zenon</span>
                        <span class="cable-spec">Ignition</span>
                        <span class="cable-spec">OPC UA</span>
                        <span class="cable-spec">WEB-доступ</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- SPLIT FEATURES -->
<section class="page-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Наш підхід</h3>
            <h2 class="section-title">ЗАХИСТ ЯКИЙ СПРАЦЮЄ ВЧАСНО</h2>
            <p class="section-sub">Релейний захист і автоматика — це не просто обладнання, а точно розрахована логіка, що має спрацювати безпомилково в критичний момент.</p>
        </div>

        <div class="cables-split-inner wf-animate">
            <div class="cables-split-visual">
                <div class="cables-split-accent" style="background:radial-gradient(circle at 60% 40%, rgba(45,181,81,.18) 0%, transparent 70%)"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <radialGradient id="apg1" cx="50%" cy="50%" r="50%">
                            <stop offset="0%"   stop-color="#2db551" stop-opacity=".5"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".05"/>
                        </radialGradient>
                    </defs>

                    <!-- incoming line -->
                    <rect x="60" y="24" width="120" height="38" rx="3" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <text x="120" y="41" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.5)" font-family="Montserrat,sans-serif" letter-spacing="1">ЛІНІЯ</text>
                    <text x="120" y="54" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(26,95,168,.7)" letter-spacing="2">10 кВ</text>

                    <line x1="120" y1="62" x2="120" y2="96" stroke="rgba(255,255,255,.25)" stroke-width="2"/>

                    <!-- current transformer -->
                    <circle cx="120" cy="112" r="16" fill="none" stroke="rgba(45,181,81,.5)" stroke-width="1.8"/>
                    <circle cx="120" cy="112" r="9" fill="none" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                    <text x="146" y="109" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">Трансформатор</text>
                    <text x="146" y="120" font-size="8" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif">струму</text>

                    <line x1="120" y1="128" x2="120" y2="150" stroke="rgba(255,255,255,.2)" stroke-width="2"/>

                    <!-- measuring signal to terminal -->
                    <line x1="136" y1="112" x2="230" y2="112" stroke="rgba(45,181,81,.4)" stroke-width="1.4" stroke-dasharray="4 3"/>
                    <line x1="230" y1="112" x2="230" y2="170" stroke="rgba(45,181,81,.4)" stroke-width="1.4" stroke-dasharray="4 3"/>

                    <!-- RZA terminal -->
                    <rect x="200" y="170" width="110" height="74" rx="4" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                    <rect x="210" y="180" width="90" height="26" rx="2" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                    <path d="M216 196 l8-11 6 8 7-15 6 13 7-7" stroke="rgba(45,181,81,.75)" stroke-width="1.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <text x="255" y="225" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="13" fill="rgba(45,181,81,.8)" letter-spacing="2">ТЕРМІНАЛ РЗА</text>
                    <text x="255" y="238" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">Захист · автоматика</text>

                    <!-- breaker -->
                    <rect x="104" y="150" width="32" height="44" rx="3" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <circle cx="120" cy="160" r="3.5" fill="rgba(26,95,168,.5)"/>
                    <line x1="120" y1="160" x2="131" y2="184" stroke="rgba(26,95,168,.55)" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="120" cy="184" r="3.5" fill="rgba(26,95,168,.5)"/>
                    <text x="120" y="210" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">Вимикач</text>

                    <!-- trip signal -->
                    <line x1="200" y1="207" x2="150" y2="207" stroke="rgba(232,90,70,.45)" stroke-width="1.4" stroke-dasharray="3 3"/>
                    <line x1="150" y1="207" x2="150" y2="174" stroke="rgba(232,90,70,.45)" stroke-width="1.4" stroke-dasharray="3 3"/>
                    <path d="M147 178 l3-7 3 7 z" fill="rgba(232,90,70,.5)"/>
                    <text x="175" y="200" text-anchor="middle" font-size="7" fill="rgba(232,90,70,.55)" font-family="Montserrat,sans-serif">Відключення</text>

                    <line x1="120" y1="194" x2="120" y2="242" stroke="rgba(255,255,255,.2)" stroke-width="2"/>

                    <!-- SCADA -->
                    <rect x="200" y="262" width="110" height="52" rx="3" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
                    <text x="255" y="283" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="12" fill="rgba(26,95,168,.7)" letter-spacing="2">SCADA</text>
                    <polyline points="216,302 228,294 238,299 250,288 262,293 274,285 294,285" fill="none" stroke="rgba(45,181,81,.5)" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="255" y1="244" x2="255" y2="262" stroke="rgba(26,95,168,.35)" stroke-width="1.4" stroke-dasharray="4 3"/>

                    <!-- load -->
                    <rect x="60" y="262" width="120" height="44" rx="3" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="120" y="282" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">Споживач</text>
                    <text x="120" y="296" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif">Лінія · обладнання</text>
                    <line x1="120" y1="242" x2="120" y2="262" stroke="rgba(45,181,81,.3)" stroke-width="2"/>
                </svg>
            </div>

            <div class="cables-split-content">
                <h3 class="section-label">Інженерний підхід</h3>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">ТОЧНІСТЬ<br>І СЕЛЕКТИВНІСТЬ</h2>
                <p class="section-sub">Кожна система розробляється з урахуванням схеми мережі, струмів короткого замикання та вимог до безперервності технологічного процесу.</p>

                <div class="cables-feat-list">
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Розрахунок уставок і селективності</div>
                            <div class="cables-feat-desc">Розраховуємо струми КЗ та обираємо уставки захистів так, щоб спрацьовував лише найближчий до пошкодження апарат — без знеструмлення справних ділянок.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Перевірка та налагодження</div>
                            <div class="cables-feat-desc">Первинна та вторинна перевірка пристроїв РЗА, імітація аварійних режимів, перевірка часу спрацювання. Протокол налагодження — обов'язково.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Резервування та надійність</div>
                            <div class="cables-feat-desc">Дублювання критичних кіл захисту, резервні джерела оперативного струму та постійний контроль справності кіл.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Документація та супровід</div>
                            <div class="cables-feat-desc">Передаємо принципові й монтажні схеми, карти уставок та інструкції з експлуатації. Пропонуємо сервісне обслуговування автоматики.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PROCESS -->
<section class="page-section page-section-bg-dark" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми працюємо</h3>
            <h2 class="section-title">ЕТАПИ ВПРОВАДЖЕННЯ АВТОМАТИКИ ТА ЗАХИСТУ</h2>
            <p class="section-sub">Від обстеження об'єкта до налагодження та навчання персоналу — повний цикл «під ключ».</p>
        </div>

        <div class="cables-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">01</div>
                    <div class="cables-proc-title">Обстеження та збір даних</div>
                    <p class="cables-proc-desc">Аналіз існуючої схеми, переліку обладнання та технологічного процесу. Визначення вимог до захисту й автоматизації</p>
                    <span class="cables-proc-tag">Виїзд безкоштовно</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">02</div>
                    <div class="cables-proc-title">Проєктування та розрахунки</div>
                    <p class="cables-proc-desc">Розробка принципових і монтажних схем, розрахунок струмів КЗ та уставок захистів, специфікація обладнання та кошторис</p>
                    <span class="cables-proc-tag">Розрахунок уставок</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">03</div>
                    <div class="cables-proc-title">Збирання шаф автоматики</div>
                    <p class="cables-proc-desc">Виготовлення шаф РЗА та керування у власній майстерні, монтаж обладнання, маркування та внутрішня комутація</p>
                    <span class="cables-proc-tag">Власне виробництво</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">04</div>
                    <div class="cables-proc-title">Монтаж та комутація</div>
                    <p class="cables-proc-desc">Встановлення шаф на об'єкті, прокладання вторинних кіл та кабелів КВПіА, підключення датчиків і виконавчих механізмів</p>
                    <span class="cables-proc-tag">Фото-звітність</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">05</div>
                    <div class="cables-proc-title">Програмування та налагодження</div>
                    <p class="cables-proc-desc">Програмування ПЛК, налаштування уставок РЗА, перевірка алгоритмів і часу спрацювання, імітація аварійних режимів</p>
                    <span class="cables-proc-tag">Протокол випробувань</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">06</div>
                    <div class="cables-proc-title">Здача та навчання персоналу</div>
                    <p class="cables-proc-desc">Передача виконавчої документації, карт уставок та інструкцій. Навчання відповідального персоналу з обслуговування системи</p>
                    <span class="cables-proc-tag">3 р. гарантія</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PROJECTS -->
<section class="page-section" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Реалізовані об'єкти</h3>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
            <p class="section-sub">Від шафи РЗА на підстанції до повної АСУ ТП виробничої лінії — впроваджуємо автоматику для критичних об'єктів.</p>
        </div>

        <div class="cables-proj-strip projects-grid wf-animate-grid">
            <div class="project-card cables-proj-card featured wf-animate">
                <div class="project-tag cables-proj-tag">Енергетика</div>
                <div class="project-title cables-proj-title">Шафи РЗА для розподільної підстанції 35/10 кВ</div>
                <p class="project-desc cables-proj-desc" style="max-width:360px">Комплект шаф релейного захисту на базі мікропроцесорних терміналів SIPROTEC: захист силових трансформаторів, ввідних та відхідних ліній 10 кВ. Розрахунок уставок та карти селективності, налаштування АПВ і АВР. Інтеграція в SCADA по протоколу IEC 61850. Первинна та вторинна перевірка з оформленням протоколів.</p>
                <div class="project-meta cables-proj-meta">
                    <span class="cables-proj-mi">2023 / Дніпро</span>
                    <span class="cables-proj-mi">35/10 кВ</span>
                    <span class="cables-proj-mi">Термін 7 тижнів</span>
                </div>
                <div class="cables-proj-big">35 кВ</div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Виробництво</div>
                <div class="project-title cables-proj-title">АСУ ТП лінії розливу на базі ПЛК Siemens</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Шафа керування на SIMATIC S7-1200, панель оператора, частотні перетворювачі для конвеєрів. Візуалізація процесу та облік продуктивності.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Київ</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Агросектор</div>
                <div class="project-title cables-proj-title">Автоматизація зернового елеватора</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Керування транспортним обладнанням, аспірацією та сушаркою. Блокування за рівнем і температурою, диспетчеризація з АРМ оператора.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2023 / Полтава</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Комерційний об'єкт</div>
                <div class="project-title cables-proj-title">Автоматика інженерних систем бізнес-центру</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Керування освітленням, вентиляцією та опаленням з єдиного диспетчерського пункту. Сценарії та облік енергоспоживання.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Львів</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- STANDARDS -->
<div class="cables-standards wf-animate">
    <div class="container">
        <div class="cables-standards-label">Нормативна база та стандарти</div>
        <div class="cables-std-grid wf-animate-grid">
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="m9 15 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ПУЕ 7-е видання</div>
                <div class="cables-std-desc">Правила улаштування електроустановок. Розділи про релейний захист, автоматику та вторинні кола</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ДСТУ IEC 61850</div>
                <div class="cables-std-desc">Мережі та системи зв'язку для автоматизації енергооб'єктів. Цифрові підстанції та обмін даними РЗА</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">IEC 61131-3</div>
                <div class="cables-std-desc">Міжнародний стандарт мов програмування програмованих логічних контролерів (ПЛК)</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="cables-std-name">НПАОП 40.1-1.21</div>
                <div class="cables-std-desc">Правила безпечної експлуатації електроустановок. Вимоги до робіт у колах захисту та автоматики</div>
            </div>
        </div>
    </div>
</div>


<!-- FAQ -->
<section class="page-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>

        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Що таке релейний захист і навіщо він потрібен?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Релейний захист (РЗА) — це комплекс пристроїв, який автоматично виявляє аварійні режими (коротке замикання, перевантаження, перекіс фаз) та за лічені мілісекунди відключає пошкоджену ділянку. Без нього аварія може призвести до пожежі, руйнування обладнання та тривалого знеструмлення. Захист потрібен на будь-якому об'єкті — від квартирного щитка до підстанції 110 кВ.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чим мікропроцесорний захист кращий за електромеханічні реле?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Мікропроцесорні термінали об'єднують кілька функцій захисту в одному пристрої, точніше тримають уставки, реєструють аварії з осцилограмами та передають дані в SCADA. Вони мають самодіагностику та не потребують частої перевірки, як електромеханічні реле. Старі реле ми обслуговуємо, але при модернізації рекомендуємо перехід на цифрові термінали.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можете ви модернізувати стару автоматику без зупинки об'єкта?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Для діючих об'єктів ми складаємо ППР із поетапною заміною — переводимо живлення на резерв або виконуємо роботи посекційно, щоб мінімізувати простій. У більшості випадків модернізацію можна провести під час планового технологічного вікна. Графік погоджуємо із службою експлуатації заздалегідь.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Що входить у налагодження пристроїв РЗА?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Налагодження включає перевірку вторинних кіл, введення та перевірку уставок, випробування захистів спеціальним обладнанням (імітація струмів КЗ), перевірку часу спрацювання та селективності, тестування дії на вимикач. За результатами оформлюємо протокол налагоджувальних робіт — обов'язковий документ для введення в експлуатацію.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи розробляєте ви програму для ПЛК під конкретний процес?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Ми пишемо програмне забезпечення для ПЛК під технологічне завдання замовника, розробляємо інтерфейс панелі оператора (HMI) та екрани SCADA. Алгоритми керування, блокування та сигналізації узгоджуємо з технологами. Передаємо вихідний код програми та документацію, тож надалі систему можна обслуговувати й розвивати.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає впровадження системи автоматики?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Шафа РЗА для невеликого об'єкта — 2–3 тижні від замовлення до здачі. Система АСУ ТП середньої складності (ПЛК, HMI, диспетчеризація) — 4–8 тижнів залежно від обсягу програмування та строків постачання обладнання. Точні терміни фіксуємо у календарному плані до підписання договору.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО СИСТЕМУ<br>АВТОМАТИКИ ТА ЗАХИСТУ</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера. Технічне рішення з фіксованою ціною — протягом 2 робочих днів.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions d-flex justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-primary">Замовити монтаж</a>
                    <a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-outline-white"><?= esc_html( $proelectric_phone['display'] ) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
