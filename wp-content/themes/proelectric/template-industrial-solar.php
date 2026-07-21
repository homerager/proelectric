<?php
/*
  Template Name: Industrial Solar Power Plants
*/
get_header();
?>

<!-- HERO -->
<section class="hero ind-solar-hero">

    <div class="ind-solar-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <radialGradient id="isg1" cx="50%" cy="20%" r="55%">
                    <stop offset="0%"   stop-color="#f5c518" stop-opacity=".35"/>
                    <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                </radialGradient>
                <linearGradient id="isg2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity=".0"/>
                    <stop offset="60%"  stop-color="#1a5fa8" stop-opacity=".18"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".08"/>
                </linearGradient>
                <linearGradient id="isg3" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#f5c518" stop-opacity="0"/>
                    <stop offset="30%"  stop-color="#f5c518" stop-opacity=".2"/>
                    <stop offset="70%"  stop-color="#1a5fa8" stop-opacity=".2"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </linearGradient>
            </defs>

            <!-- sun glow -->
            <circle cx="700" cy="90" r="160" fill="url(#isg1)"/>
            <circle cx="700" cy="90" r="80"  fill="rgba(245,197,24,.12)"/>

            <!-- subtle horizon fill -->
            <rect x="0" y="550" width="1400" height="350" fill="url(#isg2)"/>

            <!-- factory silhouette -->
            <rect x="0"    y="560" width="1400" height="340" fill="rgba(255,255,255,.018)"/>
            <rect x="50"   y="460" width="260"  height="440" fill="rgba(255,255,255,.015)" stroke="rgba(255,255,255,.03)" stroke-width="1"/>
            <rect x="370"  y="500" width="180"  height="400" fill="rgba(255,255,255,.012)" stroke="rgba(255,255,255,.025)" stroke-width="1"/>
            <rect x="850"  y="480" width="240"  height="420" fill="rgba(255,255,255,.015)" stroke="rgba(255,255,255,.03)" stroke-width="1"/>
            <rect x="1150" y="510" width="200"  height="390" fill="rgba(255,255,255,.012)" stroke="rgba(255,255,255,.025)" stroke-width="1"/>
            <!-- chimneys -->
            <rect x="110"  y="330" width="22" height="130" fill="rgba(255,255,255,.03)"/>
            <rect x="155"  y="350" width="22" height="110" fill="rgba(255,255,255,.025)"/>
            <rect x="910"  y="340" width="22" height="140" fill="rgba(255,255,255,.03)"/>
            <rect x="1050" y="360" width="18" height="120" fill="rgba(255,255,255,.02)"/>

            <!-- GROUND SOLAR ARRAY — rows of panels -->
            <!-- row 1 -->
            <rect x="30"   y="544" width="1340" height="16" rx="1" fill="rgba(26,95,168,.28)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
            <!-- row 2 -->
            <rect x="30"   y="524" width="1340" height="16" rx="1" fill="rgba(26,95,168,.22)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
            <!-- row 3 -->
            <rect x="30"   y="504" width="1340" height="16" rx="1" fill="rgba(26,95,168,.16)" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
            <!-- row 4 -->
            <rect x="30"   y="484" width="1340" height="16" rx="1" fill="rgba(26,95,168,.10)" stroke="rgba(26,95,168,.22)" stroke-width="1"/>
            <!-- column dividers on row 1 -->
            <?php for ($x = 100; $x < 1370; $x += 70): ?>
            <line x1="<?= $x ?>" y1="544" x2="<?= $x ?>" y2="560" stroke="rgba(26,95,168,.18)" stroke-width="1"/>
            <line x1="<?= $x ?>" y1="524" x2="<?= $x ?>" y2="540" stroke="rgba(26,95,168,.14)" stroke-width="1"/>
            <?php endfor; ?>

            <!-- energy flow lines from panels to inverter station -->
            <path d="M350 544 Q350 620 500 680" stroke="rgba(245,197,24,.18)" stroke-width="2" fill="none" stroke-dasharray="8 7"/>
            <path d="M700 544 Q700 610 700 680" stroke="rgba(245,197,24,.22)" stroke-width="2.5" fill="none" stroke-dasharray="8 7"/>
            <path d="M1050 544 Q1050 620 900 680" stroke="rgba(245,197,24,.18)" stroke-width="2" fill="none" stroke-dasharray="8 7"/>

            <!-- inverter/transformer station -->
            <rect x="580" y="680" width="240" height="60" rx="3" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
            <text x="700" y="716" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="13" fill="rgba(26,95,168,.55)" letter-spacing="3">ТРАНСФОРМАТОРНА ПС</text>

            <!-- grid connection line -->
            <line x1="700" y1="740" x2="700" y2="800" stroke="rgba(45,181,81,.3)" stroke-width="2.5" stroke-dasharray="6 5"/>
            <rect x="620" y="800" width="160" height="50" rx="2" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.25)" stroke-width="1.5"/>
            <text x="700" y="831" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.45)" letter-spacing="2">МЕРЕЖА 35/110 кВ</text>

            <!-- horizontal energy bar label at bottom -->
            <line x1="0" y1="860" x2="1400" y2="860" stroke="url(#isg3)" stroke-width="1.5" stroke-dasharray="10 8"/>
        </svg>
    </div>

    <div class="ind-solar-hero-tint"></div>

    <div class="container relative-container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/sonyachni-elektrostancziyi/') ); ?>">Сонячна енергетика</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Промислові СЕС</a>
            </nav>
            <div class="hero-label ind-solar-label">Масштабна сонячна генерація</div>
            <h1 class="hero-title">
                ПРОМИСЛОВІ<br>
                <span class="accent-yellow">СО</span><span class="accent-blue">НЯЧ</span><span class="accent-green">НІ</span><br>
                ЕЛЕКТРОСТАНЦІЇ
            </h1>
            <p class="hero-desc">Проєктуємо та будуємо наземні, дахові та плавучі СЕС від 500 кВт до 50 МВт. Повний цикл: від технічного аудиту і проекту до підключення до мережі, оформлення тарифу та сервісу.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Отримати КП</a>
                <a href="#solutions" class="btn btn-outline-white scroll-to-btn">Типи СЕС</a>
            </div>
        </div>
    </div>

    <?php
        $stats = array(
            array(
                'stat_num' => '50',
                'unit' => ' МВт',
                'stat_label' => 'Найбільший реалізований проєкт'
            ), array(
                'stat_num' => '3–5',
                'unit' => ' р.',
                'stat_label' => 'Типова окупність'
            ), array(
                'stat_num' => '25',
                'unit' => ' р.',
                'stat_label' => 'Гарантія продуктивності панелей'
            ), array(
                'stat_num' => '20',
                'unit' => '%',
                'stat_label' => 'Повернення ПДВ для бізнесу'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
    ?>

</section>


<!-- SOLUTIONS -->
<section class="page-section" id="solutions">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Типи промислових СЕС</h3>
            <h2 class="section-title">РІШЕННЯ ДЛЯ ПРОМИСЛОВИХ ОБ'ЄКТІВ</h2>
            <p class="section-sub">Підбираємо тип станції залежно від наявних площ, потужності мережевого підключення та фінансової моделі.</p>
        </div>

        <div class="cables-methods-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp1">
                    <div class="cables-method-badge">Наземна СЕС</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- ground -->
                        <line x1="5" y1="78" x2="95" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <!-- panel rows tilted -->
                        <rect x="8"  y="52" width="26" height="22" rx="1" transform="rotate(-15,21,63)" fill="rgba(26,95,168,.35)" stroke="rgba(26,95,168,.6)" stroke-width="1.2"/>
                        <rect x="38" y="52" width="26" height="22" rx="1" transform="rotate(-15,51,63)" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.55)" stroke-width="1.2"/>
                        <rect x="68" y="52" width="26" height="22" rx="1" transform="rotate(-15,81,63)" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.45)" stroke-width="1.2"/>
                        <!-- supports -->
                        <line x1="15" y1="68" x2="15" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="29" y1="62" x2="29" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="45" y1="68" x2="45" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="59" y1="62" x2="59" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="75" y1="68" x2="75" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="89" y1="62" x2="89" y2="78" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <!-- sun -->
                        <circle cx="50" cy="18" r="10" fill="rgba(245,197,24,.3)" stroke="rgba(245,197,24,.6)" stroke-width="1.2"/>
                        <path d="M50 8 L47 14 H51 L48 26 L57 12 H52 Z" fill="rgba(245,197,24,.85)"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Наземні СЕС (Open Space)</div>
                    <p class="cables-method-desc">Масштабні станції на відкритих ділянках — поля, промислові зони, буферні зони підприємств. Найнижча питома вартість на МВт.</p>
                    <ul class="cables-method-list">
                        <li>Потужність від 1 МВт до 50 МВт+</li>
                        <li>Фіксовані, однісні та двісні трекери</li>
                        <li>Підключення 35/110 кВ через ТП</li>
                        <li>Зелений тариф або корпоративний PPA</li>
                        <li>Оренда або купівля землі, погодження</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp2">
                    <div class="cables-method-badge">Дахова СЕС</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- factory flat roof -->
                        <rect x="10" y="55" width="80" height="35" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.15)" stroke-width="1.2" rx="1"/>
                        <!-- flat roof panels -->
                        <rect x="14" y="38" width="72" height="16" rx="1" fill="rgba(26,95,168,.35)" stroke="rgba(26,95,168,.6)" stroke-width="1.2"/>
                        <line x1="32" y1="38" x2="32" y2="54" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="50" y1="38" x2="50" y2="54" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="68" y1="38" x2="68" y2="54" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <rect x="14" y="22" width="72" height="14" rx="1" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.45)" stroke-width="1.2"/>
                        <line x1="32" y1="22" x2="32" y2="36" stroke="rgba(26,95,168,.15)" stroke-width="1"/>
                        <line x1="50" y1="22" x2="50" y2="36" stroke="rgba(26,95,168,.15)" stroke-width="1"/>
                        <line x1="68" y1="22" x2="68" y2="36" stroke="rgba(26,95,168,.15)" stroke-width="1"/>
                        <!-- support legs -->
                        <line x1="25" y1="54" x2="25" y2="60" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <line x1="50" y1="54" x2="50" y2="60" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <line x1="75" y1="54" x2="75" y2="60" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <!-- energy flow down -->
                        <path d="M50 54 Q50 70 50 80" stroke="rgba(245,197,24,.3)" stroke-width="1.5" fill="none" stroke-dasharray="4 3"/>
                        <!-- windows -->
                        <rect x="22" y="65" width="14" height="12" rx="1" fill="rgba(255,255,255,.08)"/>
                        <rect x="44" y="65" width="14" height="12" rx="1" fill="rgba(255,255,255,.08)"/>
                        <rect x="66" y="65" width="14" height="12" rx="1" fill="rgba(255,255,255,.08)"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Дахові СЕС (Rooftop Industrial)</div>
                    <p class="cables-method-desc">Промислові дахові станції на плоских дахах заводів, складів та торгових центрів без залучення додаткових земельних ділянок.</p>
                    <ul class="cables-method-list">
                        <li>Потужність 100 кВт – 10 МВт</li>
                        <li>Кріплення без пробивання покрівлі</li>
                        <li>Баластне та механічне кріплення</li>
                        <li>Захист від вітрового навантаження</li>
                        <li>Окупність 3–5 років для бізнесу</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp3">
                    <div class="cables-method-badge">Трекерна СЕС</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- ground -->
                        <line x1="5" y1="78" x2="95" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <!-- tracker 1 – morning angle -->
                        <line x1="25" y1="78" x2="25" y2="50" stroke="rgba(255,255,255,.25)" stroke-width="2"/>
                        <rect x="8"  y="40" width="34" height="14" rx="1" transform="rotate(-25,25,47)" fill="rgba(245,197,24,.25)" stroke="rgba(245,197,24,.55)" stroke-width="1.2"/>
                        <!-- tracker 2 – noon angle -->
                        <line x1="50" y1="78" x2="50" y2="46" stroke="rgba(255,255,255,.25)" stroke-width="2"/>
                        <rect x="33" y="36" width="34" height="14" rx="1" fill="rgba(245,197,24,.35)" stroke="rgba(245,197,24,.7)" stroke-width="1.5"/>
                        <!-- tracker 3 – afternoon angle -->
                        <line x1="75" y1="78" x2="75" y2="50" stroke="rgba(255,255,255,.25)" stroke-width="2"/>
                        <rect x="58" y="40" width="34" height="14" rx="1" transform="rotate(25,75,47)" fill="rgba(245,197,24,.2)" stroke="rgba(245,197,24,.5)" stroke-width="1.2"/>
                        <!-- sun arc -->
                        <path d="M10 30 Q50 8 90 30" stroke="rgba(245,197,24,.3)" stroke-width="1" fill="none" stroke-dasharray="4 3"/>
                        <circle cx="50" cy="14" r="7" fill="rgba(245,197,24,.35)" stroke="rgba(245,197,24,.6)" stroke-width="1"/>
                        <path d="M50 8 L48 13 H51 L49 20 L55 12 H51.5 Z" fill="rgba(245,197,24,.9)"/>
                        <!-- rotation arc on tracker 2 -->
                        <path d="M40 47 A12 12 0 0 1 60 47" stroke="rgba(255,255,255,.2)" stroke-width="1" fill="none"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">СЕС на трекерах (Solar Trackers)</div>
                    <p class="cables-method-desc">Одновісні та двовісні трекери автоматично стежать за сонцем, збільшуючи генерацію на 25–40% порівняно з фіксованими конструкціями.</p>
                    <ul class="cables-method-list">
                        <li>Збільшення генерації на 25–40%</li>
                        <li>Одновісні горизонтальні трекери (HAT)</li>
                        <li>Оптимально для великих наземних СЕС</li>
                        <li>Інтеграція з метеостанцією та SCADA</li>
                        <li>Nextracker, Arctech, GameChange</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp4">
                    <div class="cables-method-badge">Плавуча СЕС</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- water surface -->
                        <path d="M5 70 Q20 65 35 70 Q50 75 65 70 Q80 65 95 70" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none"/>
                        <path d="M5 76 Q20 71 35 76 Q50 81 65 76 Q80 71 95 76" stroke="rgba(26,95,168,.3)" stroke-width="1" fill="none"/>
                        <!-- water fill -->
                        <rect x="5" y="72" width="90" height="23" fill="rgba(26,95,168,.12)"/>
                        <!-- floating platform -->
                        <rect x="15" y="55" width="70" height="18" rx="3" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.4)" stroke-width="1.2"/>
                        <!-- solar panels on float -->
                        <rect x="18" y="36" width="64" height="18" rx="1" fill="rgba(26,95,168,.35)" stroke="rgba(26,95,168,.65)" stroke-width="1.2"/>
                        <line x1="34" y1="36" x2="34" y2="54" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <line x1="50" y1="36" x2="50" y2="54" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <line x1="66" y1="36" x2="66" y2="54" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <!-- anchor lines -->
                        <line x1="20" y1="73" x2="10" y2="85" stroke="rgba(255,255,255,.2)" stroke-width="1" stroke-dasharray="3 2"/>
                        <line x1="80" y1="73" x2="90" y2="85" stroke="rgba(255,255,255,.2)" stroke-width="1" stroke-dasharray="3 2"/>
                        <!-- sun -->
                        <circle cx="50" cy="16" r="8" fill="rgba(245,197,24,.3)" stroke="rgba(245,197,24,.55)" stroke-width="1"/>
                        <path d="M50 8 L47.5 14 H51 L48.5 24 L56 12 H51.5 Z" fill="rgba(245,197,24,.85)"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Плавучі СЕС (Floating Solar)</div>
                    <p class="cables-method-desc">Встановлення сонячних панелей на водній поверхні ставків, водосховищ та зрошувальних каналів промислових підприємств.</p>
                    <ul class="cables-method-list">
                        <li>Ефективне використання водних поверхонь</li>
                        <li>Охолодження панелей водою +5–10% генерації</li>
                        <li>Зменшення випаровування води</li>
                        <li>Поплавкові системи Ciel & Terre, FS</li>
                        <li>Кабельні введення з водонепроникністю IP68</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp5">
                    <div class="cables-method-badge">Агровольтаїка</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- ground / crop rows -->
                        <line x1="5" y1="82" x2="95" y2="82" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <ellipse cx="20" cy="80" rx="8" ry="6" fill="rgba(45,181,81,.2)"/>
                        <ellipse cx="38" cy="80" rx="8" ry="6" fill="rgba(45,181,81,.18)"/>
                        <ellipse cx="56" cy="80" rx="8" ry="6" fill="rgba(45,181,81,.2)"/>
                        <ellipse cx="74" cy="80" rx="8" ry="6" fill="rgba(45,181,81,.18)"/>
                        <!-- elevated panels above crops -->
                        <line x1="20" y1="82" x2="20" y2="55" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <line x1="80" y1="82" x2="80" y2="55" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <rect x="10" y="42" width="80" height="14" rx="1" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.6)" stroke-width="1.2"/>
                        <line x1="30" y1="42" x2="30" y2="56" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="50" y1="42" x2="50" y2="56" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="70" y1="42" x2="70" y2="56" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <!-- diffuse light below panels -->
                        <path d="M20 56 Q50 72 80 56" stroke="rgba(245,197,24,.2)" stroke-width="1" fill="none" stroke-dasharray="4 3"/>
                        <!-- sun -->
                        <circle cx="50" cy="18" r="9" fill="rgba(245,197,24,.28)" stroke="rgba(245,197,24,.55)" stroke-width="1"/>
                        <path d="M50 9 L47.5 15 H51 L48.5 27 L57 13 H52 Z" fill="rgba(245,197,24,.85)"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Агровольтаїка (Agrivoltaics)</div>
                    <p class="cables-method-desc">Поєднання сонячної генерації з сільськогосподарським виробництвом — панелі розміщуються на підвищених конструкціях над угіддями.</p>
                    <ul class="cables-method-list">
                        <li>Подвійне використання земельних ресурсів</li>
                        <li>Захист посівів від надмірного тепла</li>
                        <li>Висота конструкцій від 4 до 7 метрів</li>
                        <li>Актуально для агропідприємств</li>
                        <li>Економія на оренді / покупці землі</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb isp6">
                    <div class="cables-method-badge">Гібридна СЕС</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- solar panel block -->
                        <rect x="8"  y="18" width="36" height="24" rx="1" fill="rgba(26,95,168,.28)" stroke="rgba(26,95,168,.55)" stroke-width="1.2"/>
                        <line x1="20" y1="18" x2="20" y2="42" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="32" y1="18" x2="32" y2="42" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="8"  y1="30" x2="44" y2="30" stroke="rgba(26,95,168,.15)" stroke-width="1"/>
                        <!-- battery block -->
                        <rect x="8"  y="56" width="36" height="26" rx="2" fill="rgba(45,181,81,.15)" stroke="rgba(45,181,81,.4)" stroke-width="1.2"/>
                        <text x="26" y="73" text-anchor="middle" font-size="7" fill="rgba(45,181,81,.75)" font-family="Montserrat,sans-serif" font-weight="600">LiFePO₄</text>
                        <rect x="26" y="82" width="10" height="4" rx="1" fill="rgba(45,181,81,.4)"/>
                        <!-- inverter box -->
                        <rect x="58" y="32" width="34" height="36" rx="2" fill="rgba(255,255,255,.06)" stroke="rgba(245,197,24,.45)" stroke-width="1.5"/>
                        <text x="75" y="52" text-anchor="middle" font-size="8" fill="rgba(245,197,24,.8)" font-family="Bebas Neue,sans-serif" letter-spacing="1">INV</text>
                        <!-- connections -->
                        <line x1="44" y1="30" x2="58" y2="40" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                        <line x1="44" y1="69" x2="58" y2="60" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <!-- output to grid -->
                        <line x1="92" y1="50" x2="100" y2="50" stroke="rgba(245,197,24,.4)" stroke-width="2"/>
                        <text x="50" y="96" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif" letter-spacing="1">СЕС+АКБ+МЕРЕЖА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Гібридні СЕС з накопиченням (BESS)</div>
                    <p class="cables-method-desc">Промислові системи зберігання енергії (BESS) разом із СЕС — для балансування навантаження та резерву при відключеннях.</p>
                    <ul class="cables-method-list">
                        <li>АКБ від 100 кВт·год до 100 МВт·год</li>
                        <li>Peak shaving — зниження пікового попиту</li>
                        <li>Заробіток на ринку балансування</li>
                        <li>Резервне живлення критичних процесів</li>
                        <li>Tesla Megapack, CATL EnerC, Huawei</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- DEPTH BAND -->
<div class="cables-depth-band ind-solar-band wf-animate">
    <div class="container">
        <div class="cables-depth-row wf-animate-grid lg-grid-4-columns md-grid-2-columns">
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">50<span> МВт</span></div>
                    <div class="cables-depth-lbl">Найбільша реалізована<br>промислова СЕС</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="2" y="7" width="20" height="14" rx="2"/>
                        <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                        <line x1="12" y1="12" x2="12" y2="16"/>
                        <line x1="10" y1="14" x2="14" y2="14"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">3–4<span> р.</span></div>
                    <div class="cables-depth-lbl">Окупність для промислових<br>об'єктів з денним графіком</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">1480<span> год/р.</span></div>
                    <div class="cables-depth-lbl">Середнє річне виробництво<br>на 1 кВт в Центральній Україні</div>
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
                    <div class="cables-depth-num">25<span> р.</span></div>
                    <div class="cables-depth-lbl">Гарантія лінійної<br>деградації панелей</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BENEFITS -->
<section class="page-section page-section-bg-dark" id="benefits">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Переваги для підприємства</h3>
            <h2 class="section-title">ЧОМУ ПРОМИСЛОВА СЕС — ЦЕ ВИГІДНО</h2>
            <p class="section-sub">Власна генерація — не витрата, а інвестиція з вимірюваним ROI, що захищає від тарифних ризиків на 25+ років.</p>
        </div>
        <div class="cables-types-grid lg-grid-3-columns md-grid-2-columns gap-16 wf-animate-grid">

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L2 7v10l10 5 10-5V7l-10-5z" stroke="rgba(245,197,24,.5)" stroke-width="1.5"/>
                            <polyline points="2 7 12 12 22 7" stroke="rgba(245,197,24,.4)" stroke-width="1.2"/>
                            <line x1="12" y1="12" x2="12" y2="22" stroke="rgba(245,197,24,.4)" stroke-width="1.2"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Зниження собівартості продукції</div>
                    <div class="cable-type-desc">Електроенергія перетворюється з змінних витрат на фіксовані амортизаційні відрахування, зменшуючи собівартість і підвищуючи маржинальність.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">50–80%</span>
                        <span class="cable-spec">Зниження витрат</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="7" width="20" height="14" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                            <line x1="12" y1="12" x2="12" y2="16" stroke="rgba(45,181,81,.6)" stroke-width="1.5"/>
                            <line x1="10" y1="14" x2="14" y2="14" stroke="rgba(45,181,81,.6)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Повернення ПДВ 20%</div>
                    <div class="cable-type-desc">Платники ПДВ повертають 20% від вартості обладнання та монтажу. Для системи 5 МВт — це реальна економія понад 15 млн грн.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">20% ПДВ</span>
                        <span class="cable-spec">Юридичні особи</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <polyline points="12 6 12 12 16 14" stroke="rgba(26,95,168,.55)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Захист від зростання тарифів</div>
                    <div class="cable-type-desc">Тариф на електроенергію зростає щороку. Власна генерація фіксує вартість на 25 років і захищає бізнес від волатильності енергоринку.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">25 р. захист</span>
                        <span class="cable-spec">Фіксована ціна</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <line x1="3" y1="6" x2="21" y2="6" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                            <path d="M16 10a4 4 0 0 1-8 0" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Зелений тариф і PPA-договори</div>
                    <div class="cable-type-desc">Надлишки генерації продаються за зеленим тарифом або через корпоративні PPA-договори з промисловими покупцями, генеруючи додатковий дохід.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Зелений тариф</span>
                        <span class="cable-spec">PPA</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="rgba(245,197,24,.5)" stroke-width="1.5"/>
                            <polyline points="22 4 12 14.01 9 11.01" stroke="rgba(245,197,24,.6)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">ESG та вуглецева нейтральність</div>
                    <div class="cable-type-desc">Власна СЕС — підтверджена зелена генерація, CO₂-кредити та I-REC сертифікати для міжнародних аудитів, ESG-звітності та тендерів ЄС.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">I-REC</span>
                        <span class="cable-spec">ESG звітність</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card ind-ben-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">5× ROI за 25 років</div>
                    <div class="cable-type-desc">При поточних тарифах і темпах їх зростання загальна економія за 25 років у 4–6 разів перевищує початкові інвестиції. Найнадійніший інструмент збереження капіталу.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ROI 400–600%</span>
                        <span class="cable-spec">25 р.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- SPLIT / TECHNICAL -->
<section class="page-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Технічний підхід</h3>
            <h2 class="section-title">ЯКІСТЬ НА КОЖНОМУ МЕГАВАТИ</h2>
            <p class="section-sub">Промислова СЕС — це складний інженерний об'єкт. Ми підходимо до нього з тією ж точністю, що і до електричних підстанцій.</p>
        </div>

        <div class="cables-split-inner wf-animate">
            <div class="cables-split-visual">
                <div class="cables-split-accent" style="background:radial-gradient(circle at 55% 45%, rgba(245,197,24,.12) 0%, transparent 70%)"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <linearGradient id="spg1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%"   stop-color="#f5c518" stop-opacity=".6"/>
                            <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".5"/>
                        </linearGradient>
                    </defs>

                    <!-- ground array – 3 rows of panels -->
                    <?php
                    $rows_y = [30, 60, 90];
                    $opacities = ['.45', '.35', '.25'];
                    foreach ($rows_y as $i => $ry): ?>
                    <rect x="20" y="<?= $ry ?>" width="300" height="22" rx="2"
                          fill="rgba(26,95,168,<?= $opacities[$i] ?>)"
                          stroke="rgba(26,95,168,.6)" stroke-width="1.2"/>
                    <?php for ($cx = 60; $cx < 320; $cx += 40): ?>
                    <line x1="<?= $cx ?>" y1="<?= $ry ?>" x2="<?= $cx ?>" y2="<?= $ry + 22 ?>"
                          stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                    <?php endfor; ?>
                    <?php endforeach; ?>

                    <!-- support legs -->
                    <?php foreach ([40, 100, 160, 220, 280] as $lx): ?>
                    <line x1="<?= $lx ?>" y1="112" x2="<?= $lx ?>" y2="135"
                          stroke="rgba(255,255,255,.18)" stroke-width="1.5"/>
                    <?php endforeach; ?>

                    <!-- combiner box -->
                    <rect x="100" y="140" width="140" height="36" rx="3" fill="rgba(255,255,255,.05)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                    <text x="170" y="163" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(245,197,24,.7)" letter-spacing="2">COMBINER BOX</text>

                    <!-- DC cable to inverter -->
                    <line x1="170" y1="176" x2="170" y2="200" stroke="rgba(245,197,24,.4)" stroke-width="2" stroke-dasharray="5 4"/>

                    <!-- central inverter -->
                    <rect x="80" y="200" width="180" height="50" rx="4" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.5)" stroke-width="2"/>
                    <text x="170" y="223" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="12" fill="rgba(26,95,168,.85)" letter-spacing="3">ІНВЕРТОР</text>
                    <text x="170" y="238" text-anchor="middle" font-size="9"  fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">Central / String 500 кВт+</text>

                    <!-- AC cable to transformer -->
                    <line x1="170" y1="250" x2="170" y2="276" stroke="rgba(45,181,81,.4)" stroke-width="2"/>

                    <!-- step-up transformer -->
                    <rect x="90" y="276" width="160" height="44" rx="3" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.45)" stroke-width="1.5"/>
                    <text x="170" y="296" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.8)" letter-spacing="2">ТРАНСФОРМАТОР</text>
                    <text x="170" y="311" text-anchor="middle" font-size="9"  fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">0,4 / 10 / 35 кВ</text>

                    <!-- grid connection -->
                    <line x1="170" y1="320" x2="170" y2="344" stroke="rgba(45,181,81,.35)" stroke-width="2"/>
                    <rect x="80"  y="344" width="180" height="30" rx="2" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="170" y="363" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">Мережа 10 / 35 / 110 кВ</text>

                    <!-- monitoring icons -->
                    <circle cx="310" cy="220" r="14" fill="rgba(245,197,24,.08)" stroke="rgba(245,197,24,.3)" stroke-width="1.2"/>
                    <text x="310" y="225" text-anchor="middle" font-size="8" fill="rgba(245,197,24,.6)" font-family="Bebas Neue,sans-serif">SCADA</text>
                    <line x1="260" y1="225" x2="296" y2="225" stroke="rgba(245,197,24,.2)" stroke-width="1" stroke-dasharray="3 2"/>
                </svg>
            </div>

            <div class="cables-split-content">
                <h3 class="section-label">Технічні стандарти</h3>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">ТОЧНІСТЬ<br>ПРОМИСЛОВОГО РІВНЯ</h2>
                <p class="section-sub">Кожен МВт будується за затвердженим технічним проектом з дотриманням IEC, ДСТУ та вимог операторів мережі.</p>

                <div class="cables-feat-list">
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Повний технічний проект</div>
                            <div class="cables-feat-desc">Розробляємо повний комплект проектної документації: одно-, трилінійні схеми, розрахунки кабельних трас, заземлення, блискавкозахисту та захисних апаратів.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Моніторинг SCADA в реальному часі</div>
                            <div class="cables-feat-desc">Хмарна SCADA-система із відображенням генерації, споживання та стану обладнання кожні 5 секунд. Аварійні сповіщення та дистанційне управління.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Погодження з оператором мережі</div>
                            <div class="cables-feat-desc">Ведемо всю комунікацію з обленерго та Укренерго: технічні умови, договір підключення, присвоєння тарифу та паспортизація об'єкта.</div>
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
                            <div class="cables-feat-title">Сервіс та O&amp;M контракти</div>
                            <div class="cables-feat-desc">Повне технічне обслуговування та операційний менеджмент (O&amp;M): чищення панелей, інспекції, звітність та гарантія виробітку за SLA.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ROI CALCULATOR -->
<section class="page-section" id="roi">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Фінансова модель</h3>
            <h2 class="section-title">РОЗРАХУНОК ОКУПНОСТІ ПРОМИСЛОВОЇ СЕС</h2>
            <p class="section-sub">Введіть параметри вашого підприємства — отримайте орієнтовний розрахунок потужності, вартості та ROI.</p>
        </div>
        <div class="roi-inner lg-grid-2-columns md-grid-1-columns gap-0 wf-animate">
            <div class="calc-form roi-left">
                <div class="calc-form-title roi-title">Калькулятор промислової СЕС</div>
                <p class="calc-form-desc roi-desc">Вкажіть споживання та отримайте орієнтовну потужність СЕС, економію та термін окупності.</p>
                <div class="form-group calc-field">
                    <label>Щомісячне споживання електроенергії (кВт·год)</label>
                    <input type="number" id="ind-kwh" value="200000" min="5000" placeholder="200 000"/>
                </div>
                <div class="form-row">
                    <div class="form-group calc-field">
                        <label>Тариф (грн/кВт·год)</label>
                        <input type="number" id="ind-tariff" value="4.32" step="0.01" min="1"/>
                    </div>
                    <div class="form-group calc-field">
                        <label>Регіон</label>
                        <select id="ind-region">
                            <option value="4.8">Південь (Одеса, Миколаїв)</option>
                            <option value="4.5" selected>Центр (Київ, Дніпро)</option>
                            <option value="4.2">Захід (Львів, Івано-Франківськ)</option>
                            <option value="4.0">Північ (Чернігів, Суми)</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group calc-field">
                        <label>Тип системи</label>
                        <select id="ind-type">
                            <option value="0" selected>Мережева (без BESS)</option>
                            <option value="1">Гібридна (з BESS)</option>
                        </select>
                    </div>
                    <div class="form-group calc-field">
                        <label>Режим роботи</label>
                        <select id="ind-mode">
                            <option value="1.0">Цілодобово / 3 зміни</option>
                            <option value="0.8" selected>Денна зміна (8–18 год)</option>
                            <option value="0.5">Неповне завантаження</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary w-full-btn roi-calc-btn" onclick="calcIndustrialSolar()">Розрахувати ROI →</button>
                <div class="calc-result calc-results roi-rows mt-4" id="ind-res">
                    <div class="result-row"><span class="result-key">Рекомендована потужність СЕС</span><span class="result-val blue" id="ind-pow">—</span></div>
                    <div class="result-row"><span class="result-key">Кількість панелей (600 Вт)</span><span class="result-val" id="ind-pnl">—</span></div>
                    <div class="result-row"><span class="result-key">Необхідна площа</span><span class="result-val" id="ind-area">—</span></div>
                    <div class="result-row"><span class="result-key">Річна генерація</span><span class="result-val" id="ind-gen">—</span></div>
                    <div class="result-row"><span class="result-key">Орієнтовна вартість</span><span class="result-val" id="ind-cost">—</span></div>
                    <div class="result-row"><span class="result-key">Повернення ПДВ (20%)</span><span class="result-val green" id="ind-vat">—</span></div>
                    <div class="result-row"><span class="result-key">Чисті інвестиції після ПДВ</span><span class="result-val" id="ind-net">—</span></div>
                    <div class="result-row"><span class="result-key">Річна економія</span><span class="result-val green" id="ind-save">—</span></div>
                    <div class="calc-result-strip result-total roi-result-strip" id="ind-strip">
                        <span class="cr-tl">Термін окупності</span>
                        <span class="cr-tv" id="ind-back">—</span>
                    </div>
                    <p id="ind-note" style="display:none;font-size:11px;color:var(--muted);line-height:1.65;margin-top:12px">* Орієнтовний розрахунок. Для точної фінансової моделі — безкоштовна консультація інженера.</p>
                </div>
            </div>
            <div class="roi-right">
                <div class="roi-metrics">
                    <div class="rm">
                        <div class="rm-num" style="color:var(--gold)">3–4</div>
                        <div class="rm-label">Років — окупність для денних виробництв</div>
                        <div class="rm-desc">Для підприємств із денним графіком роботи і споживанням 200+ МВт·год/міс, з урахуванням повернення ПДВ 20%.</div>
                    </div>
                    <div class="rm">
                        <div class="rm-num green">5×</div>
                        <div class="rm-label">Повернення інвестицій за 25 років</div>
                        <div class="rm-desc">Після окупності система генерує чистий прибуток ще 15–18 років. Загальний ROI за строк служби — 400–600%.</div>
                    </div>
                    <div class="rm">
                        <div class="rm-num blue">20%</div>
                        <div class="rm-label">ПДВ до повернення з першого місяця</div>
                        <div class="rm-desc">Для системи 10 МВт при вартості ~250 млн грн — це 50 млн грн реальної економії ще до першого кіловата.</div>
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
            <h3 class="section-label">Як ми будуємо</h3>
            <h2 class="section-title">ЕТАПИ БУДІВНИЦТВА ПРОМИСЛОВОЇ СЕС</h2>
            <p class="section-sub">Від першого дзвінка до введення в експлуатацію та оформлення зеленого тарифу — повний супровід без посередників.</p>
        </div>

        <div class="cables-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">01</div>
                    <div class="cables-proc-title">Технічний та енергетичний аудит</div>
                    <p class="cables-proc-desc">Виїзд інженера, аналіз графіків споживання, огляд майданчику або даху. Оцінка можливості підключення до мережі та потужності трансформаторів</p>
                    <span class="cables-proc-tag">Виїзд безкоштовно</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">02</div>
                    <div class="cables-proc-title">Фінансова модель та КП</div>
                    <p class="cables-proc-desc">Детальний розрахунок потужності, генерації, окупності, ПДВ, зеленого тарифу. Кілька варіантів конфігурації з різними фінансовими моделями</p>
                    <span class="cables-proc-tag">ROI розрахунок</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">03</div>
                    <div class="cables-proc-title">Технічний проект та ТУ</div>
                    <p class="cables-proc-desc">Розробка повного проекту, погодження з обленерго, отримання технічних умов підключення. Проходження державної експертизи при необхідності</p>
                    <span class="cables-proc-tag">ТУ підключення</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">04</div>
                    <div class="cables-proc-title">Постачання обладнання</div>
                    <p class="cables-proc-desc">Закупівля панелей, інверторів, трансформатора, захисного обладнання та монтажних конструкцій від офіційних дистрибуторів із сертифікатами</p>
                    <span class="cables-proc-tag">Офіційні постачальники</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">05</div>
                    <div class="cables-proc-title">Монтаж та кабельні роботи</div>
                    <p class="cables-proc-desc">Установка несучих конструкцій, панелей, DC-кабелів, combiner-боксів, інверторів, трансформатора та щита обліку. Виконавча документація та акти</p>
                    <span class="cables-proc-tag">Фото-звітність</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">06</div>
                    <div class="cables-proc-title">Пуск, підключення та тариф</div>
                    <p class="cables-proc-desc">Пусконалагодження, комплексні випробування, підписання акту підключення з обленерго, налаштування SCADA та оформлення зеленого тарифу або PPA</p>
                    <span class="cables-proc-tag">Зелений тариф</span>
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
            <h2 class="section-title">НАШІ ПРОМИСЛОВІ ПРОЄКТИ</h2>
            <p class="section-sub">Від сонячної ферми у 50 МВт до дахової СЕС для агрокомплексу — досвід у кожному сегменті.</p>
        </div>

        <div class="cables-proj-strip projects-grid wf-animate-grid">
            <div class="project-card cables-proj-card featured wf-animate">
                <div class="project-tag cables-proj-tag">Наземна сонячна ферма</div>
                <div class="project-title cables-proj-title">Сонячна електростанція 50 МВт — підключення 110 кВ</div>
                <p class="project-desc cables-proj-desc" style="max-width:360px">Будівництво наземної СЕС на площі 80 га. 83 000 панелей LONGi Hi-MO6 TOPCon 600 Вт на одновісних трекерах Arctech. 10 центральних інверторів Huawei SUN2000 5 МВт. Трансформаторна підстанція 35/110 кВ. Річна генерація 68 ГВт·год. Підключення до ОРЕ за зеленим тарифом.</p>
                <div class="project-meta cables-proj-meta">
                    <span class="cables-proj-mi">2021 / Запорізька обл.</span>
                    <span class="cables-proj-mi">50 МВт · 110 кВ</span>
                    <span class="cables-proj-mi">Термін 8 місяців</span>
                </div>
                <div class="cables-proj-big">50 МВт</div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Промислова дахова</div>
                <div class="project-title cables-proj-title">Дахова СЕС 2 МВт — зерновий елеватор</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Плоскі дахи 4 корпусів, загальна площа 18 000 м². 4 400 панелей на баластних конструкціях. Мережева СЕС з підключенням до ВРП 10 кВ елеватора. Річна економія 10.7 млн грн.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2023 / Дніпропетровська обл.</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Плавуча СЕС</div>
                <div class="project-title cables-proj-title">Плавуча СЕС 5 МВт на ставку-відстійнику</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Перша плавуча СЕС в регіоні. Поплавки Ciel & Terre, 8 800 панелей. Кабельне з'єднання з берегом у захисних трубах. Підключення 10 кВ.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2022 / Полтавська обл.</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Гібридна BESS</div>
                <div class="project-title cables-proj-title">СЕС 10 МВт + BESS 20 МВт·год для металургії</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Поєднання наземної СЕС із системою зберігання CATL EnerC. Peak shaving — зниження пікового попиту на 40%. Участь у ринку балансування.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Дніпро</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- STANDARDS -->
<div class="cables-standards wf-animate">
    <div class="container">
        <div class="cables-standards-label">Нормативна база та міжнародні стандарти</div>
        <div class="cables-std-grid wf-animate-grid">
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">IEC 62548 / IEC 62109</div>
                <div class="cables-std-desc">Стандарти на проектування фотовольтаїчних масивів та безпеку інверторів. Вимоги до DC-ланцюгів, захисту від замикань та дугових розрядів</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="m9 15 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">IEC 61724</div>
                <div class="cables-std-desc">Моніторинг та аналіз продуктивності фотовольтаїчних систем. Методологія вимірювань, KPI та вимоги до звітності</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ДБН В.2.5-23:2010</div>
                <div class="cables-std-desc">Проектування електрообладнання об'єктів цивільного призначення. Вимоги до підключення генерувальних установок до мереж</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="cables-std-name">Кодекс ОСР / Укренерго</div>
                <div class="cables-std-desc">Правила підключення генерувальних установок до розподільних та передавальних мереж. Вимоги до реактивної потужності, захисту та телеметрії</div>
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
                    Яка мінімальна потужність для промислової СЕС?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">У сегменті промислових СЕС ми розглядаємо проекти від 500 кВт. Оптимальна початкова потужність для досягнення найкращого питомого показника €/Вт — від 1 МВт. Для об'єктів 100–500 кВт більш доцільний формат «СЕС для бізнесу» з string-інверторами, без трансформаторної підстанції.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки гектарів потрібно для наземної СЕС 1 МВт?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для наземної СЕС 1 МВт на фіксованих конструкціях потрібно близько 1.2–1.5 га з урахуванням міжрядних відстаней, проїздів та допоміжної інфраструктури. На трекерах — 1.6–2.0 га, але з вищою питомою генерацією. Оренда сільськогосподарської землі в Україні становить від 5 000 грн/га/рік.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Що таке PPA і чим він відрізняється від зеленого тарифу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">PPA (Power Purchase Agreement) — двосторонній договір на купівлю-продаж електроенергії між генератором та споживачем за фіксованою ціною. На відміну від зеленого тарифу, PPA не залежить від державної підтримки та укладається напряму з промисловим споживачем. Для великих генераторів PPA стає основним механізмом монетизації з 2025 року.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи може підприємство будувати СЕС поза своєю ділянкою?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Підприємство може побудувати СЕС на орендованій земельній ділянці поза своїми межами та постачати електроенергію до своєї точки обліку через мережу оператора. При цьому використовується модель «власний виробник» або корпоративний PPA. Ми допомагаємо з вибором оптимальної правової структури для конкретного проекту.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка потужність підключення потрібна для СЕС 5 МВт?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для СЕС 5 МВт потрібне підключення до мережі 10 кВ або 35 кВ. Ми встановлюємо підвищувальний трансформатор 0.4/10 кВ або 0.4/35 кВ і підключаємось до найближчого ПС або РП. Вартість підключення залежить від відстані до точки підключення та необхідності будівництва КЛ або ПЛ. Технічні умови підключення надає оператор розподільної мережі.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає будівництво СЕС 5 МВт?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Загальний строк від підписання договору до видачі першого кіловата — 4–6 місяців. З них: проектування та ТУ підключення — 6–8 тижнів; постачання обладнання — 8–12 тижнів; монтажні роботи — 6–10 тижнів; пусконалагодження та підключення — 2–3 тижні. Для великих наземних СЕС (20+ МВт) строк може сягати 10–14 місяців.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta-band ind-solar-cta wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ПОБУДУЄМО ПРОМИСЛОВУ СЕС<br>ДЛЯ ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера, фінансова модель з ROI, ПДВ і зеленим тарифом — протягом 3 робочих днів.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-primary">Замовити КП</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
