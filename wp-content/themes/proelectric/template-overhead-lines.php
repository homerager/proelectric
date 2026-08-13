<?php
/*
  Template Name: Overhead lines
*/
get_header();
?>

<!-- HERO -->
<section class="hero lep-hero">

    <!-- overhead line deco -->
    <div class="lep-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="lw1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity="0"/>
                    <stop offset="30%"  stop-color="#2db551" stop-opacity=".5"/>
                    <stop offset="70%"  stop-color="#1a5fa8" stop-opacity=".45"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="lw2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity=".3"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".05"/>
                </linearGradient>
            </defs>

            <!-- left tower silhouette -->
            <line x1="130" y1="820" x2="130" y2="180" stroke="rgba(255,255,255,.2)" stroke-width="6"/>
            <line x1="80"  y1="820" x2="130" y2="550" stroke="rgba(255,255,255,.12)" stroke-width="3"/>
            <line x1="180" y1="820" x2="130" y2="550" stroke="rgba(255,255,255,.12)" stroke-width="3"/>
            <line x1="80"  y1="700" x2="180" y2="700" stroke="rgba(255,255,255,.1)"  stroke-width="2"/>
            <line x1="88"  y1="630" x2="172" y2="630" stroke="rgba(255,255,255,.1)"  stroke-width="2"/>
            <!-- left crossarms -->
            <line x1="30"  y1="220" x2="230" y2="220" stroke="rgba(255,255,255,.25)" stroke-width="3.5"/>
            <line x1="50"  y1="260" x2="210" y2="260" stroke="rgba(255,255,255,.2)"  stroke-width="2.5"/>
            <line x1="65"  y1="300" x2="195" y2="300" stroke="rgba(255,255,255,.18)" stroke-width="2"/>
            <!-- left insulators -->
            <circle cx="30"  cy="220" r="5" fill="rgba(255,255,255,.35)"/>
            <circle cx="230" cy="220" r="5" fill="rgba(255,255,255,.35)"/>
            <circle cx="50"  cy="260" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="210" cy="260" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="65"  cy="300" r="4" fill="rgba(255,255,255,.2)"/>
            <circle cx="195" cy="300" r="4" fill="rgba(255,255,255,.2)"/>
            <!-- ground wire attachment left -->
            <circle cx="130" cy="178" r="4" fill="rgba(45,181,81,.5)"/>

            <!-- right tower silhouette -->
            <line x1="1270" y1="820" x2="1270" y2="180" stroke="rgba(255,255,255,.2)" stroke-width="6"/>
            <line x1="1220" y1="820" x2="1270" y2="550" stroke="rgba(255,255,255,.12)" stroke-width="3"/>
            <line x1="1320" y1="820" x2="1270" y2="550" stroke="rgba(255,255,255,.12)" stroke-width="3"/>
            <line x1="1220" y1="700" x2="1320" y2="700" stroke="rgba(255,255,255,.1)"  stroke-width="2"/>
            <line x1="1228" y1="630" x2="1312" y2="630" stroke="rgba(255,255,255,.1)"  stroke-width="2"/>
            <!-- right crossarms -->
            <line x1="1170" y1="220" x2="1370" y2="220" stroke="rgba(255,255,255,.25)" stroke-width="3.5"/>
            <line x1="1190" y1="260" x2="1350" y2="260" stroke="rgba(255,255,255,.2)"  stroke-width="2.5"/>
            <line x1="1205" y1="300" x2="1335" y2="300" stroke="rgba(255,255,255,.18)" stroke-width="2"/>
            <!-- right insulators -->
            <circle cx="1370" cy="220" r="5" fill="rgba(255,255,255,.35)"/>
            <circle cx="1170" cy="220" r="5" fill="rgba(255,255,255,.35)"/>
            <circle cx="1350" cy="260" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="1190" cy="260" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="1335" cy="300" r="4" fill="rgba(255,255,255,.2)"/>
            <circle cx="1205" cy="300" r="4" fill="rgba(255,255,255,.2)"/>
            <!-- ground wire attachment right -->
            <circle cx="1270" cy="178" r="4" fill="rgba(45,181,81,.5)"/>

            <!-- overhead ground wire (ГРОЗОЗАХИСТ) -->
            <path d="M130 178 Q700 130 1270 178" stroke="rgba(45,181,81,.55)" stroke-width="1.5" fill="none"/>

            <!-- phase wires — 3 phases with catenary sag -->
            <path d="M30 220 Q700 310 1370 220"  stroke="url(#lw1)" stroke-width="2.5" fill="none"/>
            <path d="M50 260 Q700 355 1350 260"  stroke="url(#lw1)" stroke-width="2"   fill="none"/>
            <path d="M65 300 Q700 398 1335 300"  stroke="url(#lw1)" stroke-width="2"   fill="none"/>

            <!-- voltage annotation at midspan -->
            <rect x="618" y="290" width="164" height="28" rx="2" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
            <text x="700" y="309" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(26,95,168,.6)" letter-spacing="3">ПЛ · 110 кВ · АС 240/32</text>

            <!-- sag indicator -->
            <line x1="700" y1="308" x2="700" y2="355" stroke="rgba(255,255,255,.1)" stroke-width="1" stroke-dasharray="4 3"/>
            <line x1="693" y1="355" x2="707" y2="355" stroke="rgba(255,255,255,.12)" stroke-width="1"/>
            <text x="712" y="359" font-family="Montserrat,sans-serif" font-size="8" fill="rgba(255,255,255,.2)">стрілка провісу</text>

            <!-- ground line -->
            <line x1="0" y1="822" x2="1400" y2="822" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
        </svg>
    </div>

    <div class="lep-hero-tint"></div>

    <div class="container relative-container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>">Електромонтаж</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Повітряні лінії</a>
            </nav>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Електромонтаж', 'url' => home_url('/elektromontazhni-roboty/') ),
                array( 'name' => 'Повітряні лінії', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Монтаж · Реконструкція · Обслуговування</div>
            <h1 class="hero-title">
                <span class="accent-green">ПОВІТРЯНІ</span><br>
                <span class="accent-blue">ЛІНІЇ</span> <span class="accent-orange">ЛЕП</span>
            </h1>
            <p class="hero-desc">Будівництво та реконструкція повітряних ліній електропередачі від 0,4 до 330 кВ. Встановлення опор, підвіска та натягування проводів, монтаж ізоляторів та захисту від блискавок.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити монтаж</a>
                <a href="#line-types" class="btn btn-outline-white scroll-to-btn">Типи ліній</a>
            </div>
        </div>
    </div>

    <div class="hero-stats">
        <div class="container">
            <div class="hero-stats-row d-flex justify-content-between">
                <div class="hero-stat-item">
                    <div class="stat-num">330<span class="unit"> кВ</span></div>
                    <div class="stat-label">Максимальна<br>напруга ліній</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">300<span class="unit">+ км</span></div>
                    <div class="stat-label">Збудовано<br>ліній</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">1500<span class="unit">+</span></div>
                    <div class="stat-label">Опор<br>встановлено</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">3<span class="unit"> р.</span></div>
                    <div class="stat-label">Гарантія<br>на монтаж</div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- LINE TYPES -->
<section class="page-section" id="line-types">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label orange">Класи напруги</h3>
            <h2 class="section-title">ТИПИ ПОВІТРЯНИХ ЛІНІЙ</h2>
            <p class="section-sub">Виконуємо повний цикл будівництва та реконструкції ліній усіх класів напруги — від вводів у будинок до магістральних ЛЕП.</p>
        </div>

        <div class="lep-types-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">
            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt1">
                    <div class="lep-type-badge">Низька напруга</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <line x1="18" y1="75" x2="18" y2="25" stroke="rgba(255,255,255,.3)" stroke-width="3"/>
                        <line x1="82" y1="75" x2="82" y2="28" stroke="rgba(255,255,255,.3)" stroke-width="3"/>
                        <line x1="5"  y1="32" x2="31" y2="32" stroke="rgba(255,255,255,.25)" stroke-width="2.5"/>
                        <line x1="69" y1="35" x2="95" y2="35" stroke="rgba(255,255,255,.25)" stroke-width="2.5"/>
                        <path d="M5 32 Q50 48 95 35"  stroke="rgba(45,181,81,.7)"  stroke-width="1.5" fill="none"/>
                        <path d="M7 36 Q50 52 93 39"  stroke="rgba(45,181,81,.55)" stroke-width="1.5" fill="none"/>
                        <path d="M9 40 Q50 56 91 43"  stroke="rgba(45,181,81,.4)"  stroke-width="1.5" fill="none"/>
                        <path d="M11 44 Q50 60 89 47" stroke="rgba(45,181,81,.3)"  stroke-width="1"   fill="none"/>
                        <circle cx="5"  cy="32" r="2.5" fill="rgba(255,255,255,.4)"/>
                        <circle cx="95" cy="35" r="2.5" fill="rgba(255,255,255,.4)"/>
                        <text x="50" y="92" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(45,181,81,.6)" letter-spacing="2">0,4 кВ · СІП-4</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">ПЛ 0,4 кВ — розподільчі мережі</div>
                    <p class="lep-type-desc">Будівництво та реконструкція низьковольтних розподільчих мереж у населених пунктах, вводи в будинки, вуличне освітлення.</p>
                    <ul class="lep-type-list">
                        <li>СІП-2, СІП-4 (самонесучий ізольований)</li>
                        <li>Залізобетонні та дерев'яні опори</li>
                        <li>Вводи в будівлі через ввідні гільзи</li>
                        <li>Відгалуження та з'єднувальні муфти</li>
                        <li>Заміна старих ПЛ 0,4 кВ на СІП</li>
                    </ul>
                </div>
            </div>

            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt2">
                    <div class="lep-type-badge">Середня напруга</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <line x1="20" y1="80" x2="20" y2="15" stroke="rgba(255,255,255,.28)" stroke-width="4"/>
                        <line x1="80" y1="80" x2="80" y2="18" stroke="rgba(255,255,255,.28)" stroke-width="4"/>
                        <line x1="8"  y1="18" x2="32" y2="18" stroke="rgba(255,255,255,.3)"  stroke-width="3"/>
                        <line x1="68" y1="21" x2="92" y2="21" stroke="rgba(255,255,255,.3)"  stroke-width="3"/>
                        <line x1="10" y1="26" x2="30" y2="26" stroke="rgba(255,255,255,.22)" stroke-width="2"/>
                        <line x1="70" y1="29" x2="90" y2="29" stroke="rgba(255,255,255,.22)" stroke-width="2"/>
                        <path d="M8 18 Q50 34 92 21"   stroke="rgba(26,95,168,.75)" stroke-width="2" fill="none"/>
                        <path d="M10 26 Q50 42 90 29"  stroke="rgba(26,95,168,.6)"  stroke-width="2" fill="none"/>
                        <path d="M12 34 Q50 50 88 37"  stroke="rgba(26,95,168,.45)" stroke-width="1.5" fill="none"/>
                        <circle cx="8"  cy="18" r="3" fill="none" stroke="rgba(255,255,255,.35)" stroke-width="1"/>
                        <circle cx="92" cy="21" r="3" fill="none" stroke="rgba(255,255,255,.35)" stroke-width="1"/>
                        <text x="50" y="92" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(26,95,168,.7)" letter-spacing="2">6–10 кВ</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">ПЛ 6–10 кВ — розподільчі підстанції</div>
                    <p class="lep-type-desc">Монтаж розподільчих ліній між трансформаторними підстанціями та споживачами. Відхідні фідери від ВРУ.</p>
                    <ul class="lep-type-list">
                        <li>Провід АС, СІП-3 (захищений)</li>
                        <li>Залізобетонні опори ВЛЗ та ПС</li>
                        <li>Гірлянди підвісних та штирових ізоляторів</li>
                        <li>Відгалужувальні та відрізні муфти</li>
                        <li>РЗА: ОПН, розрядники, секціонувальники</li>
                    </ul>
                </div>
            </div>

            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt3">
                    <div class="lep-type-badge">Підвищена напруга</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- lattice tower -->
                        <line x1="50" y1="80" x2="50" y2="5"  stroke="rgba(255,255,255,.3)" stroke-width="3"/>
                        <line x1="35" y1="80" x2="50" y2="45" stroke="rgba(255,255,255,.18)" stroke-width="2"/>
                        <line x1="65" y1="80" x2="50" y2="45" stroke="rgba(255,255,255,.18)" stroke-width="2"/>
                        <line x1="38" y1="65" x2="62" y2="65" stroke="rgba(255,255,255,.15)" stroke-width="1.5"/>
                        <line x1="40" y1="55" x2="60" y2="55" stroke="rgba(255,255,255,.12)" stroke-width="1"/>
                        <!-- crossarms 35kV -->
                        <line x1="22" y1="14" x2="78" y2="14" stroke="rgba(255,255,255,.3)" stroke-width="2.5"/>
                        <line x1="28" y1="22" x2="72" y2="22" stroke="rgba(255,255,255,.22)" stroke-width="2"/>
                        <line x1="33" y1="30" x2="67" y2="30" stroke="rgba(255,255,255,.18)" stroke-width="1.5"/>
                        <!-- wires -->
                        <path d="M2 14 Q50 26 98 14"  stroke="rgba(232,92,26,.7)"  stroke-width="1.5" fill="none"/>
                        <path d="M4 22 Q50 34 96 22"  stroke="rgba(232,92,26,.55)" stroke-width="1.5" fill="none"/>
                        <path d="M6 30 Q50 42 94 30"  stroke="rgba(232,92,26,.4)"  stroke-width="1.5" fill="none"/>
                        <text x="50" y="92" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(232,92,26,.65)" letter-spacing="2">35 кВ</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">ПЛ 35 кВ — живлення підстанцій</div>
                    <p class="lep-type-desc">Будівництво живильних ліній для підстанцій 35/10 кВ. Промислові та регіональні розподільчі мережі.</p>
                    <ul class="lep-type-list">
                        <li>Провід АС-120/19, АС-150/24</li>
                        <li>Металеві та залізобетонні опори</li>
                        <li>Гірлянди підвісних ізоляторів ПС-70Е</li>
                        <li>Анкерні та проміжні опори</li>
                        <li>Грозозахисний трос ТК-50</li>
                    </ul>
                </div>
            </div>

            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt4">
                    <div class="lep-type-badge">Висока напруга</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- tall lattice tower -->
                        <line x1="50" y1="88" x2="50" y2="2"  stroke="rgba(255,255,255,.28)" stroke-width="4"/>
                        <line x1="30" y1="88" x2="50" y2="42" stroke="rgba(255,255,255,.15)" stroke-width="2.5"/>
                        <line x1="70" y1="88" x2="50" y2="42" stroke="rgba(255,255,255,.15)" stroke-width="2.5"/>
                        <line x1="34" y1="72" x2="66" y2="72" stroke="rgba(255,255,255,.12)" stroke-width="1.5"/>
                        <line x1="37" y1="60" x2="63" y2="60" stroke="rgba(255,255,255,.1)"  stroke-width="1"/>
                        <!-- crossarms 110kV — double circuit -->
                        <line x1="14" y1="12" x2="86" y2="12" stroke="rgba(255,255,255,.28)" stroke-width="2.5"/>
                        <line x1="20" y1="22" x2="80" y2="22" stroke="rgba(255,255,255,.2)"  stroke-width="2"/>
                        <line x1="26" y1="32" x2="74" y2="32" stroke="rgba(255,255,255,.16)" stroke-width="1.5"/>
                        <!-- phase wires 110kV -->
                        <path d="M0 12  Q50 24 100 12"  stroke="rgba(26,95,168,.8)"  stroke-width="2"   fill="none"/>
                        <path d="M2 22  Q50 34 98 22"   stroke="rgba(26,95,168,.65)" stroke-width="1.5" fill="none"/>
                        <path d="M4 32  Q50 44 96 32"   stroke="rgba(26,95,168,.5)"  stroke-width="1.5" fill="none"/>
                        <!-- ground wire -->
                        <path d="M50 2 Q25 1 0 5"     stroke="rgba(45,181,81,.4)" stroke-width="1.5" fill="none"/>
                        <path d="M50 2 Q75 1 100 5"   stroke="rgba(45,181,81,.4)" stroke-width="1.5" fill="none"/>
                        <text x="50" y="98" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(26,95,168,.7)" letter-spacing="2">110–330 кВ</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">ПЛ 110–330 кВ — магістральні лінії</div>
                    <p class="lep-type-desc">Будівництво магістральних та системоутворюючих ліній електропередачі для з'єднання підстанцій вищого класу напруги.</p>
                    <ul class="lep-type-list">
                        <li>Провід АС-240/32, АС-400/51, ACSR</li>
                        <li>Металеві ґратчасті опори (одно- та дволанцюгові)</li>
                        <li>Гірлянди з 8–16 ізоляторів ПС-70Е</li>
                        <li>Грозозахисний трос + ОКГТ (оптичний кабель)</li>
                        <li>Проектування фундаментів та монтаж</li>
                    </ul>
                </div>
            </div>

            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt5">
                    <div class="lep-type-badge">СІП лінії</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <line x1="20" y1="80" x2="20" y2="25" stroke="rgba(255,255,255,.25)" stroke-width="3"/>
                        <line x1="80" y1="80" x2="80" y2="28" stroke="rgba(255,255,255,.25)" stroke-width="3"/>
                        <!-- SIP bracket arms -->
                        <line x1="12" y1="32" x2="28" y2="32" stroke="rgba(255,255,255,.3)" stroke-width="2"/>
                        <line x1="72" y1="35" x2="88" y2="35" stroke="rgba(255,255,255,.3)" stroke-width="2"/>
                        <!-- SIP cable bundle — 4 insulated wires -->
                        <path d="M12 30 Q50 43 88 33" stroke="rgba(45,181,81,.75)" stroke-width="3"   fill="none" stroke-linecap="round"/>
                        <path d="M12 33 Q50 46 88 36" stroke="rgba(45,181,81,.55)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                        <path d="M12 36 Q50 49 88 39" stroke="rgba(45,181,81,.4)"  stroke-width="2"   fill="none" stroke-linecap="round"/>
                        <path d="M12 39 Q50 52 88 42" stroke="rgba(45,181,81,.3)"  stroke-width="2"   fill="none" stroke-linecap="round"/>
                        <!-- anchor clamp symbol -->
                        <rect x="9"  y="28" width="6" height="14" rx="1" fill="rgba(255,255,255,.2)"/>
                        <rect x="85" y="31" width="6" height="14" rx="1" fill="rgba(255,255,255,.2)"/>
                        <text x="50" y="92" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(45,181,81,.7)" letter-spacing="2">СІП-2 · СІП-4</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">Монтаж СІП — ізольований провід</div>
                    <p class="lep-type-desc">Монтаж самонесучого ізольованого проводу в населених пунктах. Заміна голих проводів на СІП — безпека та надійність.</p>
                    <ul class="lep-type-list">
                        <li>СІП-2 (3×70+54,6 мм²) — 0,6/1 кВ</li>
                        <li>СІП-4 (4×16, 4×25 мм²)</li>
                        <li>Арматура ENSTO, Sicame, Niled</li>
                        <li>Анкерні та проміжні затискачі</li>
                        <li>Відгалужувальні затискачі без зняття напруги</li>
                    </ul>
                </div>
            </div>

            <div class="lep-type-card wf-animate">
                <div class="lep-type-thumb lt6">
                    <div class="lep-type-badge">Реконструкція</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <!-- old line (dashed = decommissioned) -->
                        <line x1="10" y1="40" x2="90" y2="35" stroke="rgba(255,255,255,.15)" stroke-width="1.5" stroke-dasharray="5 4"/>
                        <line x1="15" y1="50" x2="85" y2="45" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="4 4"/>
                        <!-- new line (solid) -->
                        <path d="M10 60 Q50 72 90 62" stroke="rgba(26,95,168,.8)"  stroke-width="2.5" fill="none"/>
                        <path d="M10 64 Q50 76 90 66" stroke="rgba(26,95,168,.6)"  stroke-width="2"   fill="none"/>
                        <path d="M10 68 Q50 80 90 70" stroke="rgba(26,95,168,.45)" stroke-width="1.5" fill="none"/>
                        <!-- replacement arrow -->
                        <path d="M48 48 L52 58" stroke="rgba(45,181,81,.7)" stroke-width="2" stroke-linecap="round"/>
                        <path d="M52 58 L48 56 M52 58 L55 54" stroke="rgba(45,181,81,.7)" stroke-width="1.5" stroke-linecap="round"/>
                        <text x="50" y="16" text-anchor="middle" font-family="Montserrat,sans-serif" font-size="7" fill="rgba(255,255,255,.2)" letter-spacing="1">ЗНОС</text>
                        <text x="50" y="92" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(26,95,168,.65)" letter-spacing="2">РЕКОНСТРУКЦІЯ</text>
                    </svg>
                </div>
                <div class="lep-type-body">
                    <div class="lep-type-title">Реконструкція та технічне переозброєння</div>
                    <p class="lep-type-desc">Заміна застарілих ліній, зношених опор і проводів. Збільшення пропускної здатності, усунення порушень нормативних відстаней.</p>
                    <ul class="lep-type-list">
                        <li>Заміна дерев'яних опор на залізобетонні</li>
                        <li>Заміна голого проводу на СІП або захищений</li>
                        <li>Підвищення класу напруги існуючої траси</li>
                        <li>Усунення зближень та перетинів</li>
                        <li>Відновлення після аварій та стихій</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- DEPTH BAND -->
<div class="lep-depth-band wf-animate">
    <div class="container">
        <div class="lep-depth-row wf-animate-grid lg-grid-4-columns md-grid-2-columns">
            <div class="lep-depth-item">
                <div class="lep-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    </svg>
                </div>
                <div>
                    <div class="lep-depth-num">0,4–330<span> кВ</span></div>
                    <div class="lep-depth-lbl">Діапазон напруг<br>повітряних ліній</div>
                </div>
            </div>
            <div class="lep-depth-item">
                <div class="lep-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <div class="lep-depth-num">300<span>+ км</span></div>
                    <div class="lep-depth-lbl">Збудовано та<br>реконструйовано ліній</div>
                </div>
            </div>
            <div class="lep-depth-item">
                <div class="lep-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M3 3h18v18H3z M9 3v18 M15 3v18 M3 9h18 M3 15h18"/>
                    </svg>
                </div>
                <div>
                    <div class="lep-depth-num">1500<span>+</span></div>
                    <div class="lep-depth-lbl">Опор встановлено<br>нашими бригадами</div>
                </div>
            </div>
            <div class="lep-depth-item">
                <div class="lep-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <div>
                    <div class="lep-depth-num">100<span>%</span></div>
                    <div class="lep-depth-lbl">Проектів зданих<br>з повним пакетом</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- TOWER & WIRE TYPES -->
<section class="page-section page-section-bg-dark" id="towers">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label orange">Конструкції та матеріали</h3>
            <h2 class="section-title">ОПОРИ ТА ПРОВОДИ ЯКІ МИ МОНТУЄМО</h2>
            <p class="section-sub">Металеві, залізобетонні, дерев'яні опори та весь спектр проводів і арматури — підбираємо під клас напруги, умови траси та вимоги замовника.</p>
        </div>

        <div class="lep-towers-grid lg-grid-4-columns md-grid-2-columns gap-16 wf-animate-grid">
            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <line x1="12" y1="22" x2="12" y2="2" stroke="rgba(26,95,168,.6)" stroke-width="1.5"/>
                            <line x1="7"  y1="22" x2="12" y2="10" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                            <line x1="17" y1="22" x2="12" y2="10" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                            <line x1="4"  y1="6"  x2="20" y2="6"  stroke="rgba(26,95,168,.6)" stroke-width="1.5"/>
                            <line x1="6"  y1="10" x2="18" y2="10" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Металеві опори</div>
                    <div class="tower-type-badge">35–750 кВ</div>
                    <div class="tower-type-desc">Ґратчасті сталеві опори для ПЛ 35 кВ і вище. Анкерно-кутові, проміжні, кінцеві. Одно- та дволанцюгові.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">УС, ПС, АС</span>
                        <span class="tower-spec">до 750 кВ</span>
                        <span class="tower-spec">Гарячий цинк</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <line x1="12" y1="22" x2="12" y2="2"  stroke="rgba(45,181,81,.6)" stroke-width="2"/>
                            <line x1="9"  y1="22" x2="12" y2="12" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                            <line x1="15" y1="22" x2="12" y2="12" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                            <line x1="5"  y1="7"  x2="19" y2="7"  stroke="rgba(45,181,81,.6)" stroke-width="1.5"/>
                            <line x1="7"  y1="11" x2="17" y2="11" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Залізобетонні опори</div>
                    <div class="tower-type-badge">0,4–35 кВ</div>
                    <div class="tower-type-desc">СВ-110, СВ-95, СВ-164 для ПЛ 0,4–35 кВ. Найпоширеніший тип в розподільчих мережах України.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">СВ-110</span>
                        <span class="tower-spec">СВ-164</span>
                        <span class="tower-spec">до 35 кВ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L8 8h8L12 2z" stroke="rgba(232,92,26,.5)" stroke-width="1" fill="none"/>
                            <line x1="12" y1="8"  x2="12" y2="22" stroke="rgba(232,92,26,.6)" stroke-width="1.5"/>
                            <line x1="3"  y1="10" x2="21" y2="10" stroke="rgba(232,92,26,.5)" stroke-width="1.5"/>
                            <line x1="5"  y1="14" x2="19" y2="14" stroke="rgba(232,92,26,.4)" stroke-width="1"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Провід АС (голий)</div>
                    <div class="tower-type-badge">АС-50 до АС-400</div>
                    <div class="tower-type-desc">Алюмінієво-сталевий провід для ПЛ від 6 кВ до 330 кВ. Натягування лебідками та гідравлічними пристроями.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">АС-70/11</span>
                        <span class="tower-spec">АС-240/32</span>
                        <span class="tower-spec">ACSR</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M3 12 Q12 6 21 12" stroke="rgba(45,181,81,.65)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                            <path d="M3 15 Q12 9 21 15"  stroke="rgba(45,181,81,.5)"  stroke-width="2"   fill="none" stroke-linecap="round"/>
                            <path d="M3 18 Q12 12 21 18" stroke="rgba(45,181,81,.35)" stroke-width="2"   fill="none" stroke-linecap="round"/>
                            <path d="M3 21 Q12 15 21 21" stroke="rgba(45,181,81,.25)" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">СІП (ізольований)</div>
                    <div class="tower-type-badge">СІП-2, СІП-3, СІП-4</div>
                    <div class="tower-type-desc">Самонесучий ізольований провід для ПЛ 0,4–10 кВ у населених пунктах. Мінімальні відстані до будівель.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">СІП-2</span>
                        <span class="tower-spec">СІП-3 (10 кВ)</span>
                        <span class="tower-spec">Niled/ENSTO</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="8" stroke="rgba(255,255,255,.3)" stroke-width="1" fill="none"/>
                            <circle cx="12" cy="12" r="5" stroke="rgba(255,255,255,.2)" stroke-width="1" fill="none"/>
                            <line x1="12" y1="4"  x2="12" y2="8"  stroke="rgba(255,255,255,.35)" stroke-width="1.5"/>
                            <line x1="12" y1="16" x2="12" y2="20" stroke="rgba(255,255,255,.35)" stroke-width="1.5"/>
                            <circle cx="12" cy="12" r="2" fill="rgba(232,92,26,.6)"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Ізолятори та арматура</div>
                    <div class="tower-type-badge">ПС-70, ПС-120, ШС</div>
                    <div class="tower-type-desc">Монтаж гірлянд підвісних та штирових ізоляторів, лінійної арматури, грозозахисних тросів та заземлень.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">ПС-70Е</span>
                        <span class="tower-spec">ПС-120В</span>
                        <span class="tower-spec">ОПН, ОНН</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M13 2L4.5 13.5H11L9 22l9.5-12H13z" stroke="rgba(255,255,255,.4)" stroke-width="1.3" fill="rgba(232,92,26,.15)" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Грозозахисний трос</div>
                    <div class="tower-type-badge">ТК-35, ОКГТ</div>
                    <div class="tower-type-desc">Монтаж грозозахисних тросів ТК та оптоволоконного грозозахисного троса ОКГТ для ПЛ 35–330 кВ.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">ТК-50</span>
                        <span class="tower-spec">ОКГТ-24</span>
                        <span class="tower-spec">від 35 кВ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="rgba(45,181,81,.5)" stroke-width="1.5" fill="none"/>
                            <polyline points="9 12 11 14 15 10" stroke="rgba(45,181,81,.7)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">Заземлення опор</div>
                    <div class="tower-type-badge">ПУЕ гл. 2.5</div>
                    <div class="tower-type-desc">Виконання заземлюючих контурів для кожної опори. Вимірювання та протоколювання опору заземлення після монтажу.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">до 30 Ом</span>
                        <span class="tower-spec">Горизонтальні</span>
                        <span class="tower-spec">Вертикальні</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="tower-type-card">
                    <div class="tower-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="8" width="18" height="8" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none"/>
                            <line x1="3"  y1="12" x2="21" y2="12" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
                            <line x1="8"  y1="5"  x2="8"  y2="8"  stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="12" y1="4"  x2="12" y2="8"  stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="16" y1="5"  x2="16" y2="8"  stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="8"  y1="16" x2="8"  y2="19" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="12" y1="16" x2="12" y2="20" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="16" y1="16" x2="16" y2="19" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="tower-type-name">РЗА та автоматика ПЛ</div>
                    <div class="tower-type-badge">ОПН, секціонувальники</div>
                    <div class="tower-type-desc">Монтаж обмежувачів перенапруг, реклоузерів, секціонувальників та автоматичного повторного вмикання (АПВ) на ПЛ.</div>
                    <div class="tower-type-specs">
                        <span class="tower-spec">ОПН 10 кВ</span>
                        <span class="tower-spec">Реклоузер</span>
                        <span class="tower-spec">АПВ</span>
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
            <h2 class="section-title">ЯКІСТЬ НА КОЖНОМУ ПРОГОНІ</h2>
            <p class="section-sub">Будуємо лінії так, щоб вони витримували вітрові та льодові навантаження і служили десятиліттями.</p>
        </div>

        <div class="lep-split-inner wf-animate">
            <div class="lep-split-visual">
                <div class="lep-split-accent"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <linearGradient id="tg1" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%"   stop-color="#2db551" stop-opacity=".7"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".1"/>
                        </linearGradient>
                    </defs>
                    <!-- tower body -->
                    <line x1="170" y1="360" x2="170" y2="20"  stroke="rgba(255,255,255,.35)" stroke-width="6"/>
                    <line x1="120" y1="360" x2="170" y2="180" stroke="rgba(255,255,255,.2)"  stroke-width="3"/>
                    <line x1="220" y1="360" x2="170" y2="180" stroke="rgba(255,255,255,.2)"  stroke-width="3"/>
                    <!-- cross bracing -->
                    <line x1="130" y1="300" x2="210" y2="300" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
                    <line x1="137" y1="260" x2="203" y2="260" stroke="rgba(255,255,255,.12)" stroke-width="1.5"/>
                    <line x1="120" y1="360" x2="170" y2="300" stroke="rgba(255,255,255,.1)"  stroke-width="1.5"/>
                    <line x1="220" y1="360" x2="170" y2="300" stroke="rgba(255,255,255,.1)"  stroke-width="1.5"/>
                    <!-- crossarms 110kV -->
                    <line x1="60"  y1="40"  x2="280" y2="40"  stroke="rgba(255,255,255,.4)"  stroke-width="4"/>
                    <line x1="80"  y1="70"  x2="260" y2="70"  stroke="rgba(255,255,255,.3)"  stroke-width="3"/>
                    <line x1="100" y1="100" x2="240" y2="100" stroke="rgba(255,255,255,.22)" stroke-width="2.5"/>
                    <!-- ground wire -->
                    <line x1="170" y1="18" x2="60"  y2="40"  stroke="rgba(45,181,81,.5)"  stroke-width="1.5"/>
                    <line x1="170" y1="18" x2="280" y2="40"  stroke="rgba(45,181,81,.5)"  stroke-width="1.5"/>
                    <circle cx="170" cy="18" r="4" fill="rgba(45,181,81,.7)"/>
                    <!-- insulator strings left -->
                    <line x1="60"  y1="40"  x2="60"  y2="60"  stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
                    <circle cx="60" cy="46"  r="3.5" fill="none" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                    <circle cx="60" cy="54"  r="3.5" fill="none" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                    <circle cx="60" cy="60"  r="3" fill="rgba(255,255,255,.3)"/>
                    <!-- insulator strings right -->
                    <line x1="280" y1="40"  x2="280" y2="60"  stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
                    <circle cx="280" cy="46" r="3.5" fill="none" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                    <circle cx="280" cy="54" r="3.5" fill="none" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                    <circle cx="280" cy="60" r="3" fill="rgba(255,255,255,.3)"/>
                    <!-- phase wire annotations -->
                    <text x="170" y="34" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="9" fill="rgba(45,181,81,.6)" letter-spacing="1">ГРОЗОЗАХИСНИЙ ТРОС</text>
                    <line x1="80"  y1="76"  x2="80"  y2="86"  stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="80"  y="94"  text-anchor="middle" font-size="8" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">фаза A</text>
                    <line x1="170" y1="76"  x2="170" y2="86"  stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="170" y="94"  text-anchor="middle" font-size="8" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">фаза B</text>
                    <line x1="260" y1="76"  x2="260" y2="86"  stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="260" y="94"  text-anchor="middle" font-size="8" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif">фаза C</text>
                    <!-- dimension arrows -->
                    <line x1="30"  y1="60"  x2="30"  y2="360" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    <line x1="25"  y1="60"  x2="35"  y2="60"  stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    <line x1="25"  y1="360" x2="35"  y2="360" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    <text x="20" y="212" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.25)" font-family="Montserrat,sans-serif" transform="rotate(-90,20,212)">h ≥ 8,0 м</text>
                    <!-- ground line -->
                    <line x1="80" y1="360" x2="260" y2="360" stroke="rgba(255,255,255,.12)" stroke-width="2"/>
                    <!-- voltage label -->
                    <rect x="120" y="150" width="100" height="22" rx="2" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
                    <text x="170" y="165" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(26,95,168,.7)" letter-spacing="2">ПЛ-110 кВ</text>
                </svg>
            </div>

            <div class="lep-split-content">
                <h3 class="section-label orange">Технічні стандарти</h3>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">ВІДПОВІДНО<br>ДО ПУЕ ТА ДБН</h2>
                <p class="section-sub">Кожна лінія будується за затвердженим проектом, з виконанням нормативних прогонів, стрілок провісу та висот підвіски.</p>

                <div class="lep-feat-list">
                    <div class="lep-feat-item">
                        <div class="lep-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="lep-feat-title">Геодезичне трасування та пікетаж</div>
                            <div class="lep-feat-desc">Кожна трасу розбивається геодезично з встановленням пікетів, визначенням кутів повороту та розстановкою опор за проектом.</div>
                        </div>
                    </div>
                    <div class="lep-feat-item">
                        <div class="lep-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="lep-feat-title">Контроль стрілки провісу</div>
                            <div class="lep-feat-desc">Натягування проводів виконується з вимірюванням стрілки провісу теодолітом або динамометром відповідно до монтажних таблиць при поточній температурі.</div>
                        </div>
                    </div>
                    <div class="lep-feat-item">
                        <div class="lep-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <div>
                            <div class="lep-feat-title">Нормативні висоти та відстані</div>
                            <div class="lep-feat-desc">Дотримуємось нормативних висот підвіски над землею, дорогами, будівлями та комунікаціями відповідно до класу напруги ПУЕ гл. 2.5.</div>
                        </div>
                    </div>
                    <div class="lep-feat-item">
                        <div class="lep-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="lep-feat-title">Вимірювання заземлень та ізоляції</div>
                            <div class="lep-feat-desc">Обов'язкове вимірювання опору заземлення кожної опори, опору ізоляції лінії та протоколювання результатів для здачі в експлуатацію.</div>
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
            <h3 class="section-label orange">Як ми працюємо</h3>
            <h2 class="section-title">ЕТАПИ БУДІВНИЦТВА ПОВІТРЯНОЇ ЛІНІЇ</h2>
            <p class="section-sub">Від отримання проекту до підписання акту — чітка послідовність робіт без відступів від технології.</p>
        </div>

        <div class="lep-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">01</div>
                    <div class="lep-proc-title">Вивчення проекту та погодження</div>
                    <p class="lep-proc-desc">Вивчення робочої документації, погодження перетинів з дорогами та комунікаціями, отримання дозволів на будівництво та зупинки руху</p>
                    <span class="lep-proc-tag">ПУЕ / ДБН</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">02</div>
                    <div class="lep-proc-title">Геодезичне трасування та пікетаж</div>
                    <p class="lep-proc-desc">Розбивка траси в натурі, встановлення пікетів та кілочків опор, перевірка відповідності місцевості проектним позначкам</p>
                    <span class="lep-proc-tag">Геодезія</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">03</div>
                    <div class="lep-proc-title">Копання ям та монтаж фундаментів</div>
                    <p class="lep-proc-desc">Механізоване буріння або відкопування ям, встановлення опор буровою машиною або краном, заливка бетоном або засипка із ущільненням</p>
                    <span class="lep-proc-tag">Бетон М200+</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">04</div>
                    <div class="lep-proc-title">Монтаж гарнітури та ізоляторів</div>
                    <p class="lep-proc-desc">Навішування кронштейнів, траверс та гірлянд ізоляторів, установка гаків, скоб, тросових та дротяних в'язок на всіх опорах</p>
                    <span class="lep-proc-tag">Ізолятори ПС</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">05</div>
                    <div class="lep-proc-title">Підвіска та натягування проводів</div>
                    <p class="lep-proc-desc">Розмотка проводу з барабанів, натягування лебідками, вимірювання стрілки провісу при поточній температурі, остаточне закріплення в анкерних затискачах</p>
                    <span class="lep-proc-tag">Монтажні таблиці</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="lep-proc-card">
                    <div class="lep-proc-num">06</div>
                    <div class="lep-proc-title">Заземлення, вимірювання та здача</div>
                    <p class="lep-proc-desc">Монтаж заземлюючих спусків, вимірювання опору заземлення кожної опори, вимірювання ізоляції лінії, складання виконавчої документації</p>
                    <span class="lep-proc-tag">Протоколи вимірювань</span>
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
            <p class="section-sub">Від монтажу вводу 0,4 кВ до будівництва магістральної ПЛ-110 кВ між підстанціями.</p>
        </div>

        <div class="lep-proj-strip projects-grid wf-animate-grid">
            <div class="lep-proj-card project-card featured wf-animate">
                <div class="project-tag lep-proj-tag">Магістральна ПЛ</div>
                <div class="project-title lep-proj-title">ПЛ-110 кВ між підстанціями — 38 км</div>
                <p class="project-desc lep-proj-desc" style="max-width:360px">Будівництво двохланцюгової повітряної лінії 110 кВ на металевих ґратчастих опорах типу УС-110-3. Провід АС-240/32 + ОКГТ. 620 опор, 38 км траси. Монтаж гірлянд ізоляторів, натягування проводів, заземлення, введення в дію з протоколами.</p>
                <div class="lep-proj-meta">
                    <span class="lep-proj-mi">2022 / Запорізька обл.</span>
                    <span class="lep-proj-mi">38 км · 110 кВ</span>
                    <span class="lep-proj-mi">Термін 5 місяців</span>
                </div>
                <div class="lep-proj-big">38 км</div>
            </div>
            <div class="lep-proj-card project-card wf-animate">
                <div class="project-tag lep-proj-tag">СЕС — збірна мережа</div>
                <div class="project-title lep-proj-title">ПЛ-10 кВ для вітрової СЕС 160 МВт</div>
                <p class="project-desc lep-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">80 відхідних фідерів 10 кВ від вітрогенераторів до збірної підстанції. СЗП-3 захищений провід, 860 опор СВ-110.</p>
                <div class="lep-proj-meta" style="margin-top:16px">
                    <span class="lep-proj-mi">2020 / Херсонська обл.</span>
                </div>
            </div>
            <div class="lep-proj-card project-card wf-animate">
                <div class="project-tag lep-proj-tag">Реконструкція</div>
                <div class="project-title lep-proj-title">Заміна ПЛ-0,4 кВ на СІП — 42 км</div>
                <p class="project-desc lep-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Заміна старих голих проводів на СІП-4 в 12 населених пунктах. Нова арматура ENSTO, замінено 1800 опор.</p>
                <div class="lep-proj-meta" style="margin-top:16px">
                    <span class="lep-proj-mi">2023 / Вінницька обл.</span>
                </div>
            </div>
            <div class="lep-proj-card project-card wf-animate">
                <div class="project-tag lep-proj-tag">Промисловий об'єкт</div>
                <div class="project-titlelep-proj-title">ПЛ-35 кВ живлення промзони</div>
                <p class="project-desc lep-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">4,5 км ПЛ-35 кВ до підстанції промислового підприємства. Металеві опори, АС-150/24, грозозахисний трос ТК-50.</p>
                <div class="lep-proj-meta" style="margin-top:16px">
                    <span class="lep-proj-mi">2024 / Дніпро</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- STANDARDS -->
<div class="lep-standards wf-animate">
    <div class="container">
        <div class="lep-standards-label">Нормативна база та стандарти</div>
        <div class="lep-std-grid wf-animate-grid">
            <div class="lep-std-card wf-animate">
                <div class="lep-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="m9 15 2 2 4-4"/>
                    </svg>
                </div>
                <div class="lep-std-name">ПУЕ гл. 2.5</div>
                <div class="lep-std-desc">Правила улаштування повітряних ліній електропередачі до 1 кВ. Нормативні відстані, висоти, прогони та перетини</div>
            </div>
            <div class="lep-std-card wf-animate">
                <div class="lep-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="m9 15 2 2 4-4"/>
                    </svg>
                </div>
                <div class="lep-std-name">ПУЕ гл. 2.4 / 2.5</div>
                <div class="lep-std-desc">Правила улаштування ПЛ вище 1 кВ. Вимоги до опор, ізоляції, захисту від перенапруг, блискавкозахисту та заземлення</div>
            </div>
            <div class="lep-std-card wf-animate">
                <div class="lep-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="lep-std-name">ДСТУ EN 50341</div>
                <div class="lep-std-desc">Європейський стандарт на повітряні лінії вище 1 кВ. Розрахунки навантажень, вимоги до опор і проводів</div>
            </div>
            <div class="lep-std-card wf-animate">
                <div class="lep-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="lep-std-name">НПАОП 40.1-1.21</div>
                <div class="lep-std-desc">Правила безпечної роботи з електроустановками. Вимоги до персоналу, груп допуску та порядку проведення робіт на ПЛ</div>
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
                    Яка мінімальна висота підвіски проводів ПЛ над землею?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Відповідно до ПУЕ гл. 2.5: ПЛ 0,4 кВ в ненаселених пунктах — не менше 5,0 м, у населених — не менше 6,0 м; ПЛ 6–10 кВ — не менше 6,0 м (населені) та 5,0 м (ненаселені); ПЛ 35 кВ — від 6,0 м; ПЛ 110 кВ — від 7,0 м. При перетині доріг — відповідно більше.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи потрібно погоджувати трасу ПЛ з землевласниками?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, траса ПЛ повинна бути погоджена з власниками або орендарями земельних ділянок. Для ПЛ 35 кВ і вище встановлюється охоронна зона 5–20 м від крайнього проводу. Ми беремо на себе оформлення сервітуту та погодження траси з усіма зацікавленими сторонами.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка різниця між ПЛ голим проводом та СІП?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">ПЛ із голим проводом АС дешевша у монтажі, але вимагає більших габаритних відстаней, небезпечна при контакті та більш чутлива до ожеледиці. СІП (самонесучий ізольований провід) дорожчий, але безпечніший, допускає менші відстані до будівель, стійкий до ожеледиці та механічних пошкоджень. В населених пунктах рекомендується СІП.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує будівництво 1 км ПЛ-10 кВ?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість залежить від типу місцевості, класу напруги та типу проводу. Орієнтовно: ПЛ-0,4 кВ СІП на залізобетонних опорах — від 450 000 грн/км; ПЛ-10 кВ АС на ЗБ опорах — від 700 000 грн/км; ПЛ-35 кВ на металевих опорах — від 2 000 000 грн/км (монтажні роботи без матеріалів). Точна ціна — після вивчення проекту.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як виконується натягування проводів на ПЛ?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Провід розмотується з барабана і протягується за допомогою монтажного тросу та лебідки через ролики на опорах. Після протяжки виконується натягування з контролем стрілки провісу теодолітом або динамометром відповідно до монтажних таблиць проекту при фактичній температурі повітря. Провід закріплюється в анкерних затискачах.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які документи передаються після будівництва ПЛ?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Передаємо повний комплект виконавчої документації: виконавчий план траси з координатами опор, відомість встановлених опор та провісів, протоколи вимірювань опору заземлення кожної опори, протокол вимірювання опору ізоляції, акти на приховані роботи (фундаменти), паспорти та сертифікати на матеріали.</div>
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
                <div class="cta-band-title">РОЗРАХУЄМО БУДІВНИЦТВО<br>ПЛ ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Надішліть проект або технічне завдання — виїдемо на трасу та підготуємо детальний кошторис протягом 3 робочих днів.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-gold scroll-to-btn">Замовити монтаж</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
