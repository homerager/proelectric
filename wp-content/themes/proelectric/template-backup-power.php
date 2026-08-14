<?php
/*
  Template Name: Backup Power AVR
*/
get_header();

$proelectric_phone = proelectric_get_primary_phone();
?>

<!-- HERO -->
<section class="hero backup-hero">

    <!-- decorative SVG — circuit / switch deco -->
    <div class="backup-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="bg1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity="0"/>
                    <stop offset="35%"  stop-color="#2db551" stop-opacity=".45"/>
                    <stop offset="65%"  stop-color="#1a5fa8" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="bg2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity="0"/>
                    <stop offset="50%"  stop-color="#2db551" stop-opacity=".3"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".15"/>
                </linearGradient>
            </defs>

            <!-- horizontal bus lines -->
            <line x1="0" y1="180" x2="1400" y2="180" stroke="url(#bg1)" stroke-width="2.5"/>
            <line x1="0" y1="360" x2="1400" y2="360" stroke="url(#bg1)" stroke-width="1.5"/>
            <line x1="0" y1="540" x2="1400" y2="540" stroke="url(#bg1)" stroke-width="3"/>
            <line x1="0" y1="720" x2="1400" y2="720" stroke="url(#bg1)" stroke-width="1.5"/>

            <!-- vertical feeders -->
            <line x1="220"  y1="0" x2="220"  y2="900" stroke="url(#bg2)" stroke-width="1.5"/>
            <line x1="500"  y1="0" x2="500"  y2="900" stroke="url(#bg2)" stroke-width="2.5"/>
            <line x1="780"  y1="0" x2="780"  y2="900" stroke="url(#bg2)" stroke-width="1.5"/>
            <line x1="1060" y1="0" x2="1060" y2="900" stroke="url(#bg2)" stroke-width="2"/>
            <line x1="1280" y1="0" x2="1280" y2="900" stroke="url(#bg2)" stroke-width="1.5"/>

            <!-- AVR switch symbols at intersections -->
            <!-- switch 1 -->
            <circle cx="220" cy="180" r="8" fill="#2db551" opacity=".55"/>
            <line x1="210" y1="170" x2="230" y2="190" stroke="#2db551" stroke-width="2" opacity=".6"/>
            <!-- switch 2 -->
            <circle cx="500" cy="540" r="10" fill="#2db551" opacity=".65"/>
            <line x1="490" y1="530" x2="510" y2="550" stroke="#2db551" stroke-width="2.5" opacity=".7"/>
            <!-- switch 3 -->
            <circle cx="780" cy="360" r="8" fill="#1a5fa8" opacity=".6"/>
            <line x1="770" y1="350" x2="790" y2="370" stroke="#1a5fa8" stroke-width="2" opacity=".65"/>
            <!-- switch 4 -->
            <circle cx="1060" cy="720" r="7" fill="#1a5fa8" opacity=".5"/>
            <line x1="1050" y1="710" x2="1070" y2="730" stroke="#1a5fa8" stroke-width="2" opacity=".55"/>

            <!-- generator symbol -->
            <circle cx="500" cy="180" r="28" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.25)" stroke-width="1.5"/>
            <circle cx="500" cy="180" r="18" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.18)" stroke-width="1"/>
            <path d="M491 180 l5-8 8 16 5-8" stroke="rgba(45,181,81,.45)" stroke-width="1.5" fill="none" stroke-linecap="round"/>
            <text x="500" y="220" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="10" fill="rgba(45,181,81,.35)" letter-spacing="2">ГЕНЕРАТОР</text>

            <!-- battery symbol -->
            <rect x="740" cy="480" x="740" y="518" width="80" height="44" rx="3" fill="rgba(26,95,168,.07)" stroke="rgba(26,95,168,.25)" stroke-width="1.5"/>
            <line x1="760" y1="518" x2="760" y2="562" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="780" y1="518" x2="780" y2="562" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="800" y1="518" x2="800" y2="562" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <text x="780" y="582" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="10" fill="rgba(26,95,168,.3)" letter-spacing="2">АКБ</text>

            <!-- AVR label box -->
            <rect x="380" y="800" width="640" height="60" rx="2" fill="rgba(45,181,81,.04)" stroke="rgba(45,181,81,.12)" stroke-width="1.5"/>
            <line x1="400" y1="830" x2="1000" y2="830" stroke="rgba(45,181,81,.12)" stroke-width="1" stroke-dasharray="8 6"/>
            <text x="700" y="836" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.3)" letter-spacing="3">АВР · РЕЗЕРВНЕ ЖИВЛЕННЯ</text>
        </svg>
    </div>

    <div class="backup-hero-tint"></div>

    <div class="container relative-container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>">Електромонтаж</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Резервне живлення та АВР</a>
            </nav>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Електромонтаж', 'url' => home_url('/elektromontazhni-roboty/') ),
                array( 'name' => 'Резервне живлення та АВР', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Безперебійне електропостачання</div>
            <h1 class="hero-title">
                <span class="accent-green">РЕЗЕРВНЕ</span><br>
                <span class="accent-blue">ЖИВЛЕН</span><span class="accent-green">НЯ</span><br>ТА АВР
            </h1>
            <p class="hero-desc">Проєктуємо та монтуємо системи гарантованого та безперебійного електропостачання: АВР, генераторні установки, ДБЖ та акумуляторні системи для об'єктів будь-якого масштабу.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити розрахунок</a>
                <a href="#systems" class="btn btn-outline-white scroll-to-btn">Типи систем</a>
            </div>
        </div>
    </div>

    <?php
        $stats = array(
            array(
                'stat_num' => '20',
                'unit' => ' мс',
                'stat_label' => 'Час перемикання АВР'
            ), array(
                'stat_num' => '200',
                'unit' => '+',
                'stat_label' => 'Систем змонтовано'
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
            <h3 class="section-label">Що ми монтуємо</h3>
            <h2 class="section-title">ТИПИ СИСТЕМ РЕЗЕРВНОГО ЖИВЛЕННЯ</h2>
            <p class="section-sub">Підбираємо оптимальне рішення залежно від вимог до часу перемикання, потужності та тривалості автономної роботи.</p>
        </div>

        <div class="cables-methods-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm1">
                    <div class="cables-method-badge">Автоматика</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="20" y="20" width="60" height="60" rx="3" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <!-- main feed -->
                        <line x1="10" y1="50" x2="30" y2="50" stroke="rgba(45,181,81,.6)" stroke-width="2"/>
                        <!-- reserve feed -->
                        <line x1="10" y1="70" x2="30" y2="70" stroke="rgba(26,95,168,.5)" stroke-width="2" stroke-dasharray="4 3"/>
                        <!-- output -->
                        <line x1="70" y1="50" x2="90" y2="50" stroke="rgba(45,181,81,.6)" stroke-width="2"/>
                        <!-- switch contacts -->
                        <circle cx="38" cy="50" r="3.5" fill="rgba(45,181,81,.7)"/>
                        <line x1="38" y1="50" x2="55" y2="40" stroke="rgba(45,181,81,.55)" stroke-width="1.5" stroke-linecap="round"/>
                        <circle cx="55" cy="40" r="3" fill="rgba(45,181,81,.5)"/>
                        <circle cx="55" cy="60" r="3" fill="rgba(26,95,168,.45)"/>
                        <circle cx="62" cy="50" r="3.5" fill="rgba(45,181,81,.7)"/>
                        <!-- label -->
                        <text x="50" y="84" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">АВР</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">АВР — Автоматичне Введення Резерву</div>
                    <p class="cables-method-desc">Щити та секційні вимикачі з автоматикою, що перемикають живлення на резервний ввід при зникненні основного.</p>
                    <ul class="cables-method-list">
                        <li>Час спрацювання від 20 до 300 мс</li>
                        <li>Схеми 1+1, 2+1, секціонування шин</li>
                        <li>ПЛК-автоматика Siemens, ABB, Schneider</li>
                        <li>Моніторинг стану мереж у реальному часі</li>
                        <li>Для об'єктів будь-якої категорії надійності</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm2">
                    <div class="cables-method-badge">Генерація</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <circle cx="50" cy="45" r="28" fill="rgba(26,95,168,.08)" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
                        <circle cx="50" cy="45" r="18" fill="rgba(26,95,168,.06)" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <!-- rotor blades suggestion -->
                        <path d="M50 30 L44 45 L50 42 L56 45 Z" fill="rgba(26,95,168,.5)"/>
                        <circle cx="50" cy="45" r="5" fill="rgba(45,181,81,.7)" stroke="rgba(45,181,81,.9)" stroke-width="1"/>
                        <!-- output line -->
                        <line x1="50" y1="73" x2="50" y2="85" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                        <text x="50" y="96" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">ГЕНЕРАТОР</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Дизельні та газові генератори</div>
                    <p class="cables-method-desc">Монтаж стаціонарних і контейнерних генераторних установок з автоматичним запуском при відключенні мережі.</p>
                    <ul class="cables-method-list">
                        <li>Потужність від 10 кВА до 3 МВА</li>
                        <li>Автоматичний запуск за 10–30 секунд</li>
                        <li>Інтеграція з щитом АВР</li>
                        <li>Паливна система та вентиляція</li>
                        <li>Cummins, Caterpillar, Stamford, FG Wilson</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm3">
                    <div class="cables-method-badge">Безперебійне живлення</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="25" y="28" width="50" height="44" rx="3" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                        <!-- battery cells -->
                        <rect x="30" y="33" width="12" height="34" rx="1" fill="rgba(45,181,81,.15)" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                        <rect x="44" y="33" width="12" height="34" rx="1" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.35)" stroke-width="1"/>
                        <rect x="58" y="33" width="12" height="34" rx="1" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <!-- charge level -->
                        <rect x="31" y="47" width="10" height="19" rx="1" fill="rgba(45,181,81,.45)"/>
                        <rect x="45" y="43" width="10" height="23" rx="1" fill="rgba(26,95,168,.45)"/>
                        <rect x="59" y="51" width="10" height="15" rx="1" fill="rgba(45,181,81,.35)"/>
                        <!-- top terminal -->
                        <rect x="34" y="26" width="4" height="4" rx="1" fill="rgba(45,181,81,.5)"/>
                        <rect x="48" y="26" width="4" height="4" rx="1" fill="rgba(26,95,168,.5)"/>
                        <rect x="62" y="26" width="4" height="4" rx="1" fill="rgba(45,181,81,.5)"/>
                        <text x="50" y="84" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif" letter-spacing="1">ДБЖ / UPS</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">ДБЖ та інверторні системи</div>
                    <p class="cables-method-desc">Встановлення джерел безперебійного живлення для серверних кімнат, медичного обладнання та критичних споживачів.</p>
                    <ul class="cables-method-list">
                        <li>On-line, Line-interactive та Off-line топології</li>
                        <li>Потужність від 1 кВА до 800 кВА</li>
                        <li>Паралельна робота кількох ДБЖ</li>
                        <li>Моніторинг через SNMP / Modbus</li>
                        <li>APC, Eaton, Schneider, Huawei UPS</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm4">
                    <div class="cables-method-badge">Накопичення енергії</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- battery pack outline -->
                        <rect x="18" y="30" width="64" height="40" rx="3" fill="rgba(26,95,168,.08)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                        <rect x="82" y="40" width="6" height="20" rx="1" fill="rgba(26,95,168,.3)"/>
                        <!-- cell separators -->
                        <line x1="34" y1="30" x2="34" y2="70" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="50" y1="30" x2="50" y2="70" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="66" y1="30" x2="66" y2="70" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <!-- charge fill -->
                        <rect x="19" y="31" width="46" height="38" rx="2" fill="rgba(26,95,168,.2)"/>
                        <!-- LiFePO4 symbol -->
                        <text x="50" y="54" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif" font-weight="600">LiFePO₄</text>
                        <text x="50" y="84" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif" letter-spacing="1">АКБ СИСТЕМА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Акумуляторні системи накопичення</div>
                    <p class="cables-method-desc">Монтаж літій-залізо-фосфатних (LiFePO4) та свинцево-кислотних АКБ-систем для тривалої автономної роботи.</p>
                    <ul class="cables-method-list">
                        <li>LiFePO4 — 6000+ циклів заряду</li>
                        <li>Ємність від 5 до 1000 кВт·год</li>
                        <li>BMS та система моніторингу</li>
                        <li>Інтеграція з СЕС та АВР</li>
                        <li>BYD, Pylontech, CATL, EnerSys</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm5">
                    <div class="cables-method-badge">Розподіл живлення</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- PDU/STS enclosure -->
                        <rect x="22" y="22" width="56" height="56" rx="3" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
                        <!-- main input A -->
                        <line x1="5" y1="38" x2="22" y2="38" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                        <circle cx="10" cy="38" r="3" fill="rgba(45,181,81,.5)"/>
                        <!-- main input B -->
                        <line x1="5" y1="62" x2="22" y2="62" stroke="rgba(26,95,168,.45)" stroke-width="2" stroke-dasharray="4 3"/>
                        <circle cx="10" cy="62" r="3" fill="rgba(26,95,168,.5)"/>
                        <!-- output breakers -->
                        <rect x="30" y="30" width="8" height="12" rx="1" fill="rgba(45,181,81,.3)" stroke="rgba(45,181,81,.5)" stroke-width="1"/>
                        <rect x="42" y="30" width="8" height="12" rx="1" fill="rgba(45,181,81,.25)" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                        <rect x="54" y="30" width="8" height="12" rx="1" fill="rgba(45,181,81,.2)" stroke="rgba(45,181,81,.35)" stroke-width="1"/>
                        <rect x="66" y="30" width="8" height="12" rx="1" fill="rgba(45,181,81,.15)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <!-- output lines -->
                        <line x1="34" y1="42" x2="34" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <line x1="46" y1="42" x2="46" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <line x1="58" y1="42" x2="58" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <line x1="70" y1="42" x2="70" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <text x="50" y="90" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif" letter-spacing="1">STS / PDU</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">STS та розподільні щити ГЖ</div>
                    <p class="cables-method-desc">Статичні перемикачі введення (STS) та щити гарантованого живлення для дата-центрів і серверних кімнат.</p>
                    <ul class="cables-method-list">
                        <li>Перемикання за 4–8 мс (STS)</li>
                        <li>Два незалежні джерела живлення</li>
                        <li>Моніторинг якості напруги по кожному вводу</li>
                        <li>ДБЖ-ланцюжки N+1 для відказостійкості</li>
                        <li>Сертифікація Tier II–Tier IV</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm6">
                    <div class="cables-method-badge">Відновлювана енергія</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- solar panel -->
                        <rect x="18" y="18" width="40" height="28" rx="2" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                        <line x1="18" y1="28" x2="58" y2="28" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="18" y1="37" x2="58" y2="37" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="30" y1="18" x2="30" y2="46" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="44" y1="18" x2="44" y2="46" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <!-- inverter box -->
                        <rect x="62" y="22" width="22" height="20" rx="2" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.35)" stroke-width="1.2"/>
                        <path d="M65 36 l5-8 5 8" stroke="rgba(26,95,168,.5)" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        <!-- battery box -->
                        <rect x="62" y="50" width="22" height="18" rx="2" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.3)" stroke-width="1.2"/>
                        <rect x="65" y="53" width="16" height="10" rx="1" fill="rgba(26,95,168,.25)"/>
                        <!-- connection lines -->
                        <line x1="58" y1="32" x2="62" y2="32" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <line x1="73" y1="42" x2="73" y2="50" stroke="rgba(26,95,168,.35)" stroke-width="1.2"/>
                        <!-- output -->
                        <line x1="38" y1="46" x2="38" y2="80" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
                        <text x="50" y="90" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif" letter-spacing="1">СЕС + АКБ</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Гібридні системи СЕС + АКБ</div>
                    <p class="cables-method-desc">Комплексні рішення: сонячні панелі з акумуляторами та АВР — незалежне живлення навіть при відключенні мережі.</p>
                    <ul class="cables-method-list">
                        <li>Повна автономія при тривалих відключеннях</li>
                        <li>Зниження витрат на електроенергію</li>
                        <li>Пріоритет власної генерації</li>
                        <li>Розумне керування навантаженням</li>
                        <li>Інтеграція з дизельним генератором</li>
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
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">20<span> мс</span></div>
                    <div class="cables-depth-lbl">Мінімальний час<br>перемикання АВР</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">3<span> МВА</span></div>
                    <div class="cables-depth-lbl">Максимальна потужність<br>генераторних установок</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="6" y="2" width="12" height="20" rx="2"/>
                        <line x1="10" y1="7" x2="14" y2="7"/>
                        <line x1="10" y1="11" x2="14" y2="11"/>
                        <line x1="10" y1="15" x2="12" y2="15"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">1000<span> кВт·год</span></div>
                    <div class="cables-depth-lbl">Максимальна ємність<br>АКБ-систем</div>
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
                    <div class="cables-depth-num">200<span>+</span></div>
                    <div class="cables-depth-lbl">Систем резервного<br>живлення здано</div>
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
                            <rect x="2" y="6" width="20" height="12" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <line x1="6" y1="10" x2="18" y2="10" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                            <path d="M8 14 l2-4 2 4 2-4 2 4" stroke="rgba(45,181,81,.6)" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Щити АВР</div>
                    <div class="cable-type-badge">Автоматика перемикання</div>
                    <div class="cable-type-desc">Шафи АВР на базі контакторів, ВА та моторних приводів з програмованими контролерами.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Siemens</span>
                        <span class="cable-spec">ABB</span>
                        <span class="cable-spec">Schneider</span>
                        <span class="cable-spec">Lovato</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <circle cx="12" cy="12" r="5" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                            <path d="M12 7 L10 12 L12 11 L14 12 Z" fill="rgba(26,95,168,.6)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Генераторні установки</div>
                    <div class="cable-type-badge">10 кВА – 3 МВА</div>
                    <div class="cable-type-desc">Дизельні та газові генератори з автоматичним запуском, тихохідні та швидкохідні моделі.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Cummins</span>
                        <span class="cable-spec">Caterpillar</span>
                        <span class="cable-spec">FG Wilson</span>
                        <span class="cable-spec">Stamford</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="8" width="16" height="10" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <rect x="20" y="10" width="2" height="6" rx="1" fill="rgba(45,181,81,.5)"/>
                            <line x1="8" y1="11" x2="8" y2="15" stroke="rgba(45,181,81,.4)" stroke-width="1.2"/>
                            <line x1="12" y1="11" x2="12" y2="15" stroke="rgba(45,181,81,.35)" stroke-width="1.2"/>
                            <line x1="16" y1="11" x2="16" y2="13" stroke="rgba(45,181,81,.3)" stroke-width="1.2"/>
                            <rect x="8" y="14" width="8" height="4" rx="1" fill="rgba(45,181,81,.35)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Акумуляторні батареї</div>
                    <div class="cable-type-badge">LiFePO4 / AGM / GEL</div>
                    <div class="cable-type-desc">Промислові АКБ для ДБЖ та систем накопичення енергії з BMS та моніторингом.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">BYD</span>
                        <span class="cable-spec">Pylontech</span>
                        <span class="cable-spec">EnerSys</span>
                        <span class="cable-spec">FIAMM</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <path d="M12 7 v3 M12 14 v3" stroke="rgba(26,95,168,.5)" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M7 12 h3 M14 12 h3" stroke="rgba(26,95,168,.5)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">ДБЖ та інвертори</div>
                    <div class="cable-type-badge">1 кВА – 800 кВА</div>
                    <div class="cable-type-desc">On-line ДБЖ для серверних кімнат, офісів, медичних установ та промислових процесів.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">APC</span>
                        <span class="cable-spec">Eaton</span>
                        <span class="cable-spec">Schneider</span>
                        <span class="cable-spec">Huawei UPS</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="rgba(245,197,24,.5)" stroke-width="1.5" fill="none" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Статичні перемикачі STS</div>
                    <div class="cable-type-badge">Перемикання за 4–8 мс</div>
                    <div class="cable-type-desc">Електронні статичні перемикачі для миттєвого переключення між двома незалежними джерелами.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ABB</span>
                        <span class="cable-spec">Eaton STS</span>
                        <span class="cable-spec">Liebert</span>
                        <span class="cable-spec">GE STS</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="2" width="16" height="20" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <line x1="8" y1="7" x2="16" y2="7" stroke="rgba(45,181,81,.4)" stroke-width="1.2"/>
                            <line x1="8" y1="11" x2="16" y2="11" stroke="rgba(45,181,81,.35)" stroke-width="1.2"/>
                            <line x1="8" y1="15" x2="13" y2="15" stroke="rgba(45,181,81,.3)" stroke-width="1.2"/>
                            <circle cx="16" cy="18" r="3" fill="#2db551" stroke="none"/>
                            <path d="M15 18 l1 1 2-2" stroke="white" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Системи моніторингу</div>
                    <div class="cable-type-badge">SCADA / BMS</div>
                    <div class="cable-type-desc">Програмне забезпечення для онлайн-моніторингу стану обладнання, заряду АКБ та аварійних сповіщень.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">SNMP</span>
                        <span class="cable-spec">Modbus</span>
                        <span class="cable-spec">EcoStruxure</span>
                        <span class="cable-spec">WEB-доступ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <path d="M9 12l2 2 4-4" stroke="rgba(45,181,81,.6)" stroke-width="1.4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Гібридні інвертори</div>
                    <div class="cable-type-badge">СЕС + АКБ + Мережа</div>
                    <div class="cable-type-desc">Багатофункціональні інвертори для одночасної роботи з сонячними панелями, АКБ та мережею.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Victron</span>
                        <span class="cable-spec">Growatt</span>
                        <span class="cable-spec">SMA Sunny</span>
                        <span class="cable-spec">GoodWe</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="3" width="20" height="14" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <line x1="8" y1="21" x2="16" y2="21" stroke="rgba(45,181,81,.5)" stroke-width="1.5" stroke-linecap="round"/>
                            <line x1="12" y1="17" x2="12" y2="21" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                            <path d="M8 10 l2 2 4-4" stroke="rgba(45,181,81,.6)" stroke-width="1.4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Контролери заряду</div>
                    <div class="cable-type-badge">MPPT / PWM</div>
                    <div class="cable-type-desc">Сонячні контролери для ефективного заряду АКБ від панелей, захист від перезаряду та розряду.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Victron MPPT</span>
                        <span class="cable-spec">EPEver</span>
                        <span class="cable-spec">до 150 А</span>
                        <span class="cable-spec">Bluetooth</span>
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
            <h2 class="section-title">НАДІЙНІСТЬ НА КОЖНОМУ РІВНІ</h2>
            <p class="section-sub">Система резервного живлення — не просто обладнання, а комплексне рішення, яке не підведе у критичний момент.</p>
        </div>

        <div class="cables-split-inner wf-animate">
            <div class="cables-split-visual">
                <div class="cables-split-accent" style="background:radial-gradient(circle at 60% 40%, rgba(45,181,81,.18) 0%, transparent 70%)"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <radialGradient id="bpg1" cx="50%" cy="50%" r="50%">
                            <stop offset="0%"   stop-color="#2db551" stop-opacity=".6"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".05"/>
                        </radialGradient>
                    </defs>

                    <!-- Mains source -->
                    <rect x="30" y="30" width="80" height="40" rx="3" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <text x="70" y="48" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.5)" font-family="Montserrat,sans-serif" letter-spacing="1">МЕРЕЖА</text>
                    <text x="70" y="60" text-anchor="middle" font-size="8" fill="rgba(26,95,168,.7)" font-family="Bebas Neue,sans-serif" letter-spacing="2">0,4 кВ</text>

                    <!-- Generator source -->
                    <rect x="230" y="30" width="80" height="40" rx="3" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                    <text x="270" y="48" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.5)" font-family="Montserrat,sans-serif" letter-spacing="1">ГЕНЕРАТОР</text>
                    <text x="270" y="60" text-anchor="middle" font-size="8" fill="rgba(45,181,81,.7)" font-family="Bebas Neue,sans-serif" letter-spacing="2">РЕЗЕРВ</text>

                    <!-- AVR cabinet -->
                    <rect x="105" y="110" width="130" height="80" rx="4" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                    <text x="170" y="145" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="15" fill="rgba(45,181,81,.8)" letter-spacing="3">АВР</text>
                    <text x="170" y="163" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">Автоматика</text>
                    <text x="170" y="177" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif">перемикання</text>

                    <!-- Lines to AVR -->
                    <line x1="70"  y1="70" x2="70"  y2="110" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <line x1="70"  y1="90" x2="105" y2="120" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <line x1="270" y1="70" x2="270" y2="110" stroke="rgba(45,181,81,.4)" stroke-width="1.5" stroke-dasharray="5 4"/>
                    <line x1="270" y1="90" x2="235" y2="120" stroke="rgba(45,181,81,.4)" stroke-width="1.5" stroke-dasharray="5 4"/>

                    <!-- Switch indicator -->
                    <circle cx="140" cy="150" r="6" fill="rgba(45,181,81,.3)" stroke="rgba(45,181,81,.7)" stroke-width="1.5"/>
                    <circle cx="200" cy="150" r="6" fill="rgba(26,95,168,.2)" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                    <line x1="148" y1="150" x2="192" y2="150" stroke="rgba(45,181,81,.3)" stroke-width="1" stroke-dasharray="3 3"/>

                    <!-- UPS -->
                    <rect x="105" y="230" width="60" height="50" rx="3" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
                    <text x="135" y="252" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(26,95,168,.7)" letter-spacing="2">ДБЖ</text>
                    <rect x="112" y="258" width="46" height="14" rx="1" fill="rgba(26,95,168,.2)"/>
                    <rect x="113" y="259" width="30" height="12" rx="1" fill="rgba(45,181,81,.4)"/>

                    <!-- Battery -->
                    <rect x="175" y="230" width="60" height="50" rx="3" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
                    <text x="205" y="252" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.7)" letter-spacing="2">АКБ</text>
                    <text x="205" y="268" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">LiFePO₄</text>

                    <!-- Loads -->
                    <line x1="135" y1="190" x2="135" y2="230" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                    <line x1="170" y1="190" x2="205" y2="230" stroke="rgba(255,255,255,.15)" stroke-width="1.2"/>

                    <!-- Critical load -->
                    <rect x="90" y="315" width="160" height="40" rx="3" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="170" y="333" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">Критичне навантаження</text>
                    <text x="170" y="347" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif">Сервери · Медицина · Виробництво</text>

                    <!-- Line to load -->
                    <line x1="135" y1="280" x2="135" y2="315" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
                    <line x1="205" y1="280" x2="205" y2="315" stroke="rgba(45,181,81,.25)" stroke-width="1.2"/>
                </svg>
            </div>

            <div class="cables-split-content">
                <h3 class="section-label">Технічні стандарти</h3>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">БЕЗПЕРЕБІЙНІСТЬ<br>ЯКА ГАРАНТОВАНА</h2>
                <p class="section-sub">Кожна система розробляється з урахуванням категорії надійності об'єкта та вимог до безперервності технологічного процесу.</p>

                <div class="cables-feat-list">
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Розрахунок категорії надійності</div>
                            <div class="cables-feat-desc">Визначаємо категорію електроприймачів (I, II, III) та проєктуємо систему резервування відповідно до ПУЕ та вимог об'єкта.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Тестування при введенні в роботу</div>
                            <div class="cables-feat-desc">Імітуємо відключення основного живлення, перевіряємо час запуску генератора та спрацювання АВР. Протокол пусконалагодження — обов'язково.</div>
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
                            <div class="cables-feat-title">Захист від неправильного підключення</div>
                            <div class="cables-feat-desc">Конструктивне та електричне блокування одночасного підключення двох джерел. Захист від зворотного живлення в мережу.</div>
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
                            <div class="cables-feat-title">Технічне обслуговування</div>
                            <div class="cables-feat-desc">Щоквартальне ТО генератора, перевірка ємності АКБ, пробний запуск резерву. Договори сервісного обслуговування 24/7.</div>
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
            <h2 class="section-title">ЕТАПИ МОНТАЖУ СИСТЕМИ РЕЗЕРВНОГО ЖИВЛЕННЯ</h2>
            <p class="section-sub">Від аналізу потреб об'єкта до введення в роботу та навчання персоналу — повний цикл «під ключ».</p>
        </div>

        <div class="cables-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">01</div>
                    <div class="cables-proc-title">Обстеження та технічне завдання</div>
                    <p class="cables-proc-desc">Аналіз існуючої електросхеми, перелік критичних споживачів, вимоги до часу перемикання та тривалості автономної роботи</p>
                    <span class="cables-proc-tag">Виїзд безкоштовно</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">02</div>
                    <div class="cables-proc-title">Проєктування системи</div>
                    <p class="cables-proc-desc">Розробка принципової схеми АВР, вибір потужності генератора або ємності АКБ, специфікація обладнання та кошторис</p>
                    <span class="cables-proc-tag">ПУЕ / ДБН</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">03</div>
                    <div class="cables-proc-title">Комплектація обладнання</div>
                    <p class="cables-proc-desc">Закупівля генераторів, ДБЖ, АКБ, щитового обладнання від офіційних дистриб'юторів з гарантійними документами</p>
                    <span class="cables-proc-tag">Сертифіковане обладнання</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">04</div>
                    <div class="cables-proc-title">Монтаж та кабельні роботи</div>
                    <p class="cables-proc-desc">Встановлення генераторної установки або ДБЖ, монтаж щита АВР, прокладання силових кабелів та кабелів автоматики</p>
                    <span class="cables-proc-tag">Фото-звітність</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">05</div>
                    <div class="cables-proc-title">Пусконалагоджувальні роботи</div>
                    <p class="cables-proc-desc">Налаштування контролера АВР, уставок захистів, часових затримок. Тестування автоматичного перемикання при відключенні мережі</p>
                    <span class="cables-proc-tag">Протокол випробувань</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">06</div>
                    <div class="cables-proc-title">Здача та навчання персоналу</div>
                    <p class="cables-proc-desc">Передача виконавчої документації, інструкцій, паспортів. Навчання відповідального персоналу з обслуговування системи</p>
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
            <p class="section-sub">Від серверної кімнати до промислового підприємства — забезпечуємо безперебійне живлення для критичних об'єктів.</p>
        </div>

        <div class="cables-proj-strip projects-grid wf-animate-grid">
            <div class="project-card cables-proj-card featured wf-animate">
                <div class="project-tag cables-proj-tag">Промисловість</div>
                <div class="project-title cables-proj-title">Система АВР + ДГУ 1000 кВА для металургійного заводу</div>
                <p class="project-desc cables-proj-desc" style="max-width:360px">Монтаж дизельного генератора Cummins 1000 кВА з автоматичним запуском. Щит АВР 1600 А на базі АВ Siemens з ПЛК Siemens LOGO!. Резервування I категорії для технологічних ліній. Час переключення на резерв — 28 секунд. Налагодження та 72-годинне тестування під навантаженням.</p>
                <div class="project-meta cables-proj-meta">
                    <span class="cables-proj-mi">2023 / Дніпро</span>
                    <span class="cables-proj-mi">1000 кВА</span>
                    <span class="cables-proj-mi">Термін 6 тижнів</span>
                </div>
                <div class="cables-proj-big">1 МВА</div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Дата-центр</div>
                <div class="project-title cables-proj-title">ДБЖ 3×200 кВА + АКБ для ЦОД</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Три ДБЖ Eaton 9PX 200 кВА в паралельній схемі N+1. АКБ EnerSys 480 В / 200 А·год. STS Eaton між двома вводами живлення. Час автономної роботи — 30 хвилин.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2022 / Київ</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Лікарня</div>
                <div class="project-title cables-proj-title">Резервне живлення медичного центру 400 кВА</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Генератор FG Wilson 400 кВА + АВР з пріоритетним живленням операційних блоків та реанімації. Час запуску — 12 секунд.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Запоріжжя</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Житловий сектор</div>
                <div class="project-title cables-proj-title">Гібридна СЕС 50 кВт + АКБ 200 кВт·год для ЖК</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Сонячні панелі на даху + АКБ LiFePO4 BYD + АВР. Покриває ліфти та МЗК при відключенні. Автономія — 8 годин.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Київ</span>
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
                <div class="cables-std-desc">Правила улаштування електроустановок. Розділи про категорії надійності, схеми АВР та резервне живлення</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ДСТУ EN 50171</div>
                <div class="cables-std-desc">Центральні системи електроживлення. Вимоги до систем аварійного освітлення та безперебійного живлення</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">IEC 62040</div>
                <div class="cables-std-desc">Міжнародний стандарт для джерел безперебійного живлення (UPS). Класифікація та вимоги до характеристик</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="cables-std-name">НПАОП 40.1-1.21</div>
                <div class="cables-std-desc">Правила безпечної експлуатації електроустановок. Вимоги до персоналу та організації робіт на обладнанні АВР</div>
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
                    Яка різниця між АВР і ДБЖ?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">АВР (автоматичне введення резерву) — це апаратний комплекс, що перемикає живлення між двома джерелами (мережа + генератор або два незалежні вводи) за 20–300 мс. ДБЖ (джерело безперебійного живлення) — пристрій з акумуляторами, що забезпечує миттєве (<4 мс) живлення при провалах напруги. Для серверів та медтехніки потрібен ДБЖ; для великих об'єктів — АВР+генератор. Найкраще рішення — комбінація обох систем.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яку потужність генератора обрати для будинку?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Потужність генератора підбирається за сумарним навантаженням + 20–30% запас. Для приватного будинку з холодильником, освітленням, котлом та кількома розетками зазвичай достатньо 5–10 кВА. Якщо є електроплита або кондиціонер — 15–20 кВА. Для точного розрахунку виїдемо на об'єкт та складемо перелік споживачів. Послуга безкоштовна.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає монтаж системи АВР з генератором?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для приватного будинку або невеликого офісу (генератор до 30 кВА + щит АВР) — 1–2 робочі дні. Для промислового об'єкта (100–500 кВА, контейнерна ДГУ, прокладання кабелів) — 2–4 тижні залежно від обсягу. Терміни узгоджуємо до підписання договору й фіксуємо у календарному плані.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи потрібне обслуговування генератора і як часто?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, генератори потребують регулярного ТО. Кожні 250 годин роботи або раз на рік (що настане раніше) — заміна масла, фільтрів, перевірка ременів та охолоджуючої рідини. Щоквартально — пробний запуск під навантаженням на 30 хвилин для перевірки готовності до роботи. Ми пропонуємо договори сервісного обслуговування з фіксованою ціною.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує система резервного живлення для офісу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість залежить від вибраного рішення. ДБЖ 3 кВА з АКБ на 1 годину — від 25 000 грн. Генератор 20 кВА + щит АВР «під ключ» — від 180 000 грн. Гібридна система 10 кВт СЕС + АКБ 30 кВт·год — від 350 000 грн. Для точного розрахунку — безкоштовна консультація та виїзд інженера.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна підключити генератор до квартирного щитка самостійно?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Ні. Підключення генератора без правильного АВР або рубильника ручного переключення небезпечне: при відновленні мережі може виникнути коротке замикання або пошкодження обладнання. Крім того, без блокування від зворотної подачі в мережу існує ризик ураження електриків на лінії. Підключення обов'язково повинен виконувати кваліфікований електрик.</div>
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
                <div class="cta-band-title">РОЗРАХУЄМО СИСТЕМУ<br>РЕЗЕРВНОГО ЖИВЛЕННЯ</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера. Вибір оптимального рішення з фіксованою ціною — протягом 2 робочих днів.</p>
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
