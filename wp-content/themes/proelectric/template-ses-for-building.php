<?php 
/*
  Template Name: Ses for building
 */
get_header();
?>
<section class="hero hero-bg-svg hero-ses-for-building">
    <div class="hero-photo"></div>
    <!-- animated building + sun deco -->
    <div class="hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <radialGradient id="sunG" cx="50%" cy="50%" r="50%">
                    <stop offset="0%" stop-color="#f5c518" stop-opacity=".55"/>
                    <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                </radialGradient>
                <linearGradient id="hillG" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#2db551" stop-opacity=".12"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity="0"/>
                </linearGradient>
            </defs>
            <!-- warm sun -->
            <circle cx="700" cy="110" r="130" fill="url(#sunG)" opacity=".5"/>
            <!-- sun rays -->
            <line x1="700" y1="0" x2="700" y2="-20" stroke="rgba(245,197,24,.2)" stroke-width="2"/>
            <line x1="810" y1="50" x2="840" y2="28" stroke="rgba(245,197,24,.18)" stroke-width="1.5"/>
            <line x1="590" y1="50" x2="560" y2="28" stroke="rgba(245,197,24,.18)" stroke-width="1.5"/>
            <line x1="830" y1="140" x2="862" y2="140" stroke="rgba(245,197,24,.15)" stroke-width="1.5"/>
            <line x1="570" y1="140" x2="538" y2="140" stroke="rgba(245,197,24,.15)" stroke-width="1.5"/>
            <!-- gentle hill / ground -->
            <ellipse cx="700" cy="870" rx="900" ry="200" fill="url(#hillG)" opacity=".6"/>
            <!-- house silhouette -->
            <path d="M500 600 L700 440 L900 600 Z" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
            <rect x="520" y="600" width="360" height="250" fill="rgba(255,255,255,.03)" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
            <!-- chimney -->
            <rect x="680" y="475" width="24" height="70" fill="rgba(255,255,255,.04)"/>
            <!-- windows -->
            <rect x="560" y="640" width="60" height="50" fill="rgba(255,200,50,.07)" stroke="rgba(255,255,255,.08)" stroke-width="1" rx="1"/>
            <rect x="680" y="640" width="60" height="50" fill="rgba(26,95,168,.12)" stroke="rgba(255,255,255,.08)" stroke-width="1" rx="1"/>
            <rect x="800" y="640" width="60" height="50" fill="rgba(255,200,50,.07)" stroke="rgba(255,255,255,.08)" stroke-width="1" rx="1"/>
            <!-- door -->
            <rect x="675" y="720" width="50" height="80" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.08)" stroke-width="1" rx="1"/>
            <!-- solar panels on roof -->
            <path d="M530 583 L700 445 L870 583" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
            <!-- panel lines on roof -->
            <line x1="595" y1="555" x2="645" y2="513" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="645" y1="570" x2="700" y2="526" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="700" y1="566" x2="757" y2="519" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="757" y1="556" x2="808" y2="510" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <!-- energy flow from panels -->
            <path d="M700 490 Q700 560 650 620" stroke="rgba(45,181,81,.2)" stroke-width="1.5" fill="none" stroke-dasharray="5 5"/>
            <path d="M700 490 Q700 560 750 620" stroke="rgba(45,181,81,.15)" stroke-width="1.5" fill="none" stroke-dasharray="5 5"/>
            <!-- trees -->
            <ellipse cx="360" cy="710" rx="45" ry="60" fill="rgba(45,181,81,.08)"/>
            <rect x="357" y="760" width="6" height="40" fill="rgba(45,181,81,.06)"/>
            <ellipse cx="1040" cy="720" rx="40" ry="55" fill="rgba(45,181,81,.07)"/>
            <rect x="1037" y="768" width="6" height="35" fill="rgba(45,181,81,.05)"/>
        </svg>
    </div>
    <div class="hero-tint"></div>
    <div class="container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/sonyachni-elektrostancziyi/') ); ?>">Сонячна енергетика</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">СЕС для дому</a>
            </nav>
            <div class="hero-label">Сонячна енергетика для дому</div>
            <h1 class="hero-title">
                <span class="accent-blue">СЕС</span> ДЛЯ<br><span class="accent-green">БУДИНКУ</span>
            </h1>
            <p class="hero-desc">Власна сонячна електростанція для приватного будинку — знизьте рахунки на 70–100%, забудьте про відключення і продавайте надлишки державі.</p>
            <div class="hero-actions">
                <a href="#calc" class="btn btn-primary scroll-to-btn">Розрахувати мій будинок</a>
                <a href="#solutions" class="btn btn-white scroll-to-btn">Типи систем</a>
            </div>
        </div>
        <?php 
            $stats = array(
                array(
                    'stat_num' => '70-100',
                    'unit' => '%',
                    'stat_label' => 'Зниження рахунків<br>за електроенергію'
                ), array(
                    'stat_num' => '5-7',
                    'unit' => ' р.',
                    'stat_label' => 'Термін<br>окупності'
                ), array(
                    'stat_num' => '1-2',
                    'unit' => ' дні',
                    'stat_label' => 'Монтаж<br>системи'
                ), array(
                    'stat_num' => '25',
                    'unit' => ' р.',
                    'stat_label' => 'Гарантія<br>на панелі'
                )
            );
            get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
        ?> 
    </div>
</section>
<section class="page-section" id="solutions">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Типи систем</div>
            <h2 class="section-title">ЯКА СЕС ПІДХОДИТЬ ВАШОМУ БУДИНКУ</h2>
            <p class="section-sub">Три рішення для різних потреб — від базової мережевої станції до повністю автономної системи.</p>
        </div>
        <div class="sol-grid wf-animate-grid d-grid md-grid-3-columns">
            <div class="sol-card white-card-bottom-border-hover wf-animate">
                <div class="sol-thumb t1">
                    <div class="sol-badge">Мережева</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <circle cx="50" cy="35" r="22" stroke="rgba(255,255,255,.4)" stroke-width="1.5" fill="none"/>
                        <path d="M50 18 L45 30 H51 L45 52 L60 28 H53 Z" fill="rgba(245,197,24,.85)"/>
                        <line x1="50" y1="57" x2="50" y2="72" stroke="rgba(255,255,255,.3)" stroke-width="2"/>
                        <rect x="32" y="72" width="36" height="16" rx="2" fill="rgba(255,255,255,.1)" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                        <path d="M20 80 L32 80" stroke="rgba(255,255,255,.25)" stroke-width="1.5"/>
                        <path d="M68 80 L80 80" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="sol-body">
                    <div class="sol-title">Мережева СЕС</div>
                    <p class="sol-desc">Підключена до загальної мережі. Вдень живиться від панелей, вночі — від мережі. Надлишки продаєте за «зеленим тарифом».</p>
                    <ul class="sol-list">
                        <li>Найнижча вартість системи</li>
                        <li>Зелений тариф — дохід від надлишків</li>
                        <li>Зниження рахунків на 50–70%</li>
                        <li>Не захищає від відключень мережі</li>
                    </ul>
                </div>
            </div>
            <div class="sol-card white-card-bottom-border-hover wf-animate">
                <div class="sol-thumb t2">
                    <div class="sol-badge">Гібридна</div>
                    <div class="sol-rec">Рекомендовано</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <circle cx="50" cy="28" r="18" stroke="rgba(255,255,255,.4)" stroke-width="1.5" fill="none"/>
                        <path d="M50 14 L46 24 H51 L47 42 L59 22 H53 Z" fill="rgba(245,197,24,.85)"/>
                        <line x1="50" y1="46" x2="50" y2="56" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
                        <rect x="34" y="56" width="32" height="22" rx="2" fill="rgba(255,255,255,.08)" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                        <text x="50" y="71" text-anchor="middle" font-family="monospace" font-size="8" fill="rgba(45,181,81,.9)">INV</text>
                        <line x1="50" y1="78" x2="50" y2="84" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
                        <rect x="36" y="84" width="28" height="12" rx="1" fill="rgba(26,95,168,.35)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                        <text x="50" y="93" text-anchor="middle" font-family="monospace" font-size="7" fill="rgba(255,255,255,.6)">AKB</text>
                    </svg>
                </div>
                <div class="sol-body">
                    <div class="sol-title">Гібридна СЕС + АКБ</div>
                    <p class="sol-desc">Панелі + акумулятори + підключення до мережі. Вдень — від сонця, вночі — з акумулятора, при відключенні — теж із акумулятора.</p>
                    <ul class="sol-list">
                        <li>Захист від відключень світла 24/7</li>
                        <li>Нульові рахунки влітку</li>
                        <li>Акумулятор LiFePO4 — 6000+ циклів</li>
                        <li>Зелений тариф для надлишків</li>
                    </ul>
                </div>
            </div>
            <div class="sol-card white-card-bottom-border-hover wf-animate">
                <div class="sol-thumb t3">
                    <div class="sol-badge">Автономна</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <circle cx="50" cy="26" r="16" stroke="rgba(255,255,255,.35)" stroke-width="1.5" fill="none"/>
                        <path d="M50 13 L46 23 H51 L47 38 L58 20 H52.5 Z" fill="rgba(245,197,24,.8)"/>
                        <line x1="50" y1="42" x2="50" y2="50" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
                        <rect x="28" y="50" width="44" height="14" rx="1" fill="rgba(45,181,81,.2)" stroke="rgba(45,181,81,.5)" stroke-width="1"/>
                        <text x="50" y="60" text-anchor="middle" font-family="monospace" font-size="7" fill="rgba(45,181,81,.8)">BATTERY</text>
                        <line x1="50" y1="64" x2="50" y2="72" stroke="rgba(255,255,255,.25)" stroke-width="1.5"/>
                        <rect x="35" y="72" width="30" height="14" rx="2" fill="rgba(255,255,255,.08)" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                        <text x="50" y="82" text-anchor="middle" font-family="monospace" font-size="7" fill="rgba(255,255,255,.6)">HOUSE</text>
                        <path d="M16 84 A4 4 0 0 0 24 84" stroke="rgba(45,181,81,.4)" stroke-width="1.5" fill="none"/>
                        <line x1="20" y1="80" x2="20" y2="75" stroke="rgba(255,100,50,.5)" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="sol-body">
                    <div class="sol-title">Автономна СЕС</div>
                    <p class="sol-desc">Повністю незалежна від мережі. Підходить для будинків без підключення до електромережі або для максимальної незалежності.</p>
                    <ul class="sol-list">
                        <li>Повна незалежність від обленерго</li>
                        <li>Великий акумуляторний банк</li>
                        <li>Резервний дизель-генератор опціонально</li>
                        <li>Висока вартість, вища автономність</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg-dark how-dark" id="how">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Принцип роботи</div>
            <h2 class="section-title">ЯК ПРАЦЮЄ СЕС ДЛЯ ДОМУ</h2>
            <p class="section-sub">Проста схема: сонячне світло → електроенергія для дому → залишки в акумулятор або в мережу.</p>
        </div>
        <div class="how-inner">
            <!-- animated SVG diagram -->
            <div class="how-diagram wf-animate">
                <svg width="440" height="360" viewBox="0 0 440 360" fill="none">
                    <defs>
                        <linearGradient id="hd1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#1a5fa8" stop-opacity=".7"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".5"/>
                        </linearGradient>
                        <linearGradient id="hd2" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#f5c518" stop-opacity=".6"/>
                            <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                    <!-- Sun -->
                    <circle cx="220" cy="44" r="32" fill="rgba(245,197,24,.15)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                    <circle cx="220" cy="44" r="20" fill="rgba(245,197,24,.25)"/>
                    <text x="220" y="50" text-anchor="middle" font-size="14" fill="rgba(245,197,24,.9)" font-family="Bebas Neue, sans-serif">СОНЦЕ</text>
                    <!-- sun rays -->
                    <line x1="220" y1="8" x2="220" y2="2" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                    <line x1="248" y1="16" x2="254" y2="10" stroke="rgba(245,197,24,.3)" stroke-width="1.5"/>
                    <line x1="192" y1="16" x2="186" y2="10" stroke="rgba(245,197,24,.3)" stroke-width="1.5"/>
                    <line x1="256" y1="44" x2="262" y2="44" stroke="rgba(245,197,24,.3)" stroke-width="1.5"/>
                    <line x1="184" y1="44" x2="178" y2="44" stroke="rgba(245,197,24,.3)" stroke-width="1.5"/>
                    <!-- Arrow down to panels -->
                    <path d="M220 76 L220 100" stroke="rgba(245,197,24,.4)" stroke-width="2" stroke-dasharray="4 3" marker-end="url(#arr-y)"/>
                    <defs>
                        <marker id="arr-y" markerWidth="8" markerHeight="6" refX="6" refY="3" orient="auto">
                            <path d="M0 0 L8 3 L0 6Z" fill="rgba(245,197,24,.5)"/>
                        </marker>
                        <marker id="arr-g" markerWidth="8" markerHeight="6" refX="6" refY="3" orient="auto">
                            <path d="M0 0 L8 3 L0 6Z" fill="rgba(45,181,81,.6)"/>
                        </marker>
                        <marker id="arr-b" markerWidth="8" markerHeight="6" refX="6" refY="3" orient="auto">
                            <path d="M0 0 L8 3 L0 6Z" fill="rgba(26,95,168,.6)"/>
                        </marker>
                    </defs>
                    <!-- Solar panels -->
                    <rect x="140" y="100" width="160" height="56" rx="3" fill="rgba(26,95,168,.2)" stroke="url(#hd1)" stroke-width="1.5"/>
                    <line x1="194" y1="100" x2="194" y2="156" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                    <line x1="246" y1="100" x2="246" y2="156" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                    <line x1="140" y1="128" x2="300" y2="128" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                    <text x="220" y="134" text-anchor="middle" font-size="12" fill="rgba(255,255,255,.7)" font-family="Bebas Neue, sans-serif" letter-spacing="2">ПАНЕЛІ</text>
                    <!-- Arrow down to inverter -->
                    <path d="M220 156 L220 190" stroke="rgba(45,181,81,.5)" stroke-width="2" marker-end="url(#arr-g)"/>
                    <!-- Inverter -->
                    <rect x="170" y="190" width="100" height="44" rx="3" fill="rgba(255,255,255,.05)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                    <text x="220" y="216" text-anchor="middle" font-size="11" fill="rgba(45,181,81,.85)" font-family="Bebas Neue, sans-serif" letter-spacing="2">ІНВЕРТОР</text>
                    <!-- Three arrows from inverter -->
                    <!-- left: battery -->
                    <path d="M170 212 L90 212 L90 264" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none" marker-end="url(#arr-b)"/>
                    <!-- center: house -->
                    <path d="M220 234 L220 264" stroke="rgba(45,181,81,.55)" stroke-width="2" marker-end="url(#arr-g)"/>
                    <!-- right: grid -->
                    <path d="M270 212 L350 212 L350 264" stroke="rgba(26,95,168,.4)" stroke-width="1.5" fill="none" marker-end="url(#arr-b)"/>
                    <!-- Battery box -->
                    <rect x="48" y="264" width="84" height="50" rx="3" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <text x="90" y="286" text-anchor="middle" font-size="10" fill="rgba(26,95,168,.9)" font-family="Bebas Neue, sans-serif" letter-spacing="1">АКБ</text>
                    <text x="90" y="302" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.4)" font-family="Montserrat, sans-serif">LiFePO4</text>
                    <!-- House -->
                    <path d="M192 278 L220 256 L248 278 Z" fill="rgba(45,181,81,.15)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                    <rect x="198" y="278" width="44" height="36" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                    <rect x="210" y="290" width="10" height="14" fill="rgba(255,255,255,.1)"/>
                    <rect x="224" y="286" width="10" height="10" fill="rgba(255,200,50,.15)"/>
                    <text x="220" y="327" text-anchor="middle" font-size="9" fill="rgba(45,181,81,.8)" font-family="Bebas Neue, sans-serif" letter-spacing="1">БУДИНОК</text>
                    <!-- Grid -->
                    <rect x="308" y="264" width="84" height="50" rx="3" fill="rgba(107,127,153,.1)" stroke="rgba(107,127,153,.35)" stroke-width="1.5"/>
                    <text x="350" y="286" text-anchor="middle" font-size="10" fill="rgba(255,255,255,.5)" font-family="Bebas Neue, sans-serif" letter-spacing="1">МЕРЕЖА</text>
                    <text x="350" y="302" text-anchor="middle" font-size="8" fill="rgba(45,181,81,.5)" font-family="Montserrat, sans-serif">зелений тариф</text>
                    <!-- labels for arrows -->
                    <text x="118" y="208" font-size="9" fill="rgba(26,95,168,.7)" font-family="Montserrat,sans-serif">заряд</text>
                    <text x="226" y="252" font-size="9" fill="rgba(45,181,81,.7)" font-family="Montserrat,sans-serif">живлення</text>
                    <text x="290" y="208" font-size="9" fill="rgba(26,95,168,.6)" font-family="Montserrat,sans-serif">продаж</text>
                </svg>
            </div>
            <div class="hw-steps wf-animate-grid">
                <div class="hw-step wf-animate">
                    <div class="hw-num">01</div>
                    <div>
                        <div class="hw-title">Панелі перетворюють сонце на струм</div>
                        <div class="hw-desc">Монокристалічні панелі PERC або TOPCon поглинають сонячне світло і генерують постійний струм (DC). Працюють навіть у хмарну погоду, просто з меншою ефективністю.</div>
                    </div>
                </div>
                <div class="hw-step wf-animate">
                    <div class="hw-num">02</div>
                    <div>
                        <div class="hw-title">Інвертор перетворює DC у змінний струм</div>
                        <div class="hw-desc">Гібридний інвертор конвертує постійний струм у змінний 220/380 В — саме такий, що споживають всі домашні прилади. Одночасно керує зарядкою акумуляторів.</div>
                    </div>
                </div>
                <div class="hw-step wf-animate">
                    <div class="hw-num">03</div>
                    <div>
                        <div class="hw-title">Акумулятор зберігає надлишки на ніч</div>
                        <div class="hw-desc">Вдень панелі часто генерують більше, ніж споживає будинок. Надлишок заряджає акумулятор LiFePO4, який забезпечує будинок увечері і вночі — або під час відключень.</div>
                    </div>
                </div>
                <div class="hw-step wf-animate">
                    <div class="hw-num">04</div>
                    <div>
                        <div class="hw-title">Решта продається або береться з мережі</div>
                        <div class="hw-desc">Якщо акумулятор заряджений і є надлишок — він направляється в мережу за «зеленим тарифом». Якщо все розряджено — добирається з мережі. Ви платите лише за реальний дефіцит.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="packages">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Готові рішення</div>
            <h2 class="section-title">ПАКЕТИ «ПІД КЛЮЧ»</h2>
            <p class="section-sub">Три перевірені комплектації для типових потреб — або збираємо індивідуально під ваш будинок.</p>
        </div>
        <div class="pkg-grid wf-animate-grid d-grid md-grid-3-columns">
            <!-- Starter -->
            <div class="pkg wf-animate">
                <div class="pkg-head">
                    <div class="pkg-name">Старт</div>
                    <div class="pkg-power">Система 5 кВт · Без АКБ</div>
                    <div class="pkg-price">175 000</div>
                    <div class="pkg-price-note">грн · монтаж включено</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            12 панелей LONGi 420 Вт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Інвертор Huawei 5 кВт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Кріплення на скатний дах
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Захисне обладнання ABB
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            WiFi моніторинг
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Монтаж та документи
                        </li>
                        <li class="dim">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            Акумулятор
                        </li>
                        <li class="dim">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            Резерв при відключенні
                        </li>
                    </ul>
                    <a href="/kontakty/" class="btn btn-primary w-full-btn pkg-btn">Замовити</a>
                </div>
            </div>
            <!-- Popular -->
            <div class="pkg popular wf-animate">
                <div class="pkg-tag-popular">Найпопулярніший</div>
                <div class="pkg-head">
                    <div class="pkg-name">Оптимум</div>
                    <div class="pkg-power">Система 8 кВт + АКБ 10 кВт·год</div>
                    <div class="pkg-price">310 000</div>
                    <div class="pkg-price-note">грн · монтаж включено</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            20 панелей LONGi Hi-MO6 400 Вт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Гібридний інвертор Fronius 8 кВт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            АКБ Pylontech 10 кВт·год
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Захисне обладнання ABB
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            WiFi + хмарний моніторинг
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Монтаж, документи, підключення
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Резерв при відключенні
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Допомога з зеленим тарифом
                        </li>
                    </ul>
                    <a href="/kontakty/" class="btn btn-primary w-full-btn pkg-btn">Замовити</a>
                </div>
            </div>
            <!-- Premium -->
            <div class="pkg wf-animate">
                <div class="pkg-head">
                    <div class="pkg-name">Преміум</div>
                    <div class="pkg-power">Система 12 кВт + АКБ 20 кВт·год</div>
                    <div class="pkg-price">490 000</div>
                    <div class="pkg-price-note">грн · монтаж включено</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            30 панелей LONGi Hi-MO6 TOPCon
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Гібридний інвертор SMA 12 кВт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            АКБ BYD 20 кВт·год LiFePO4
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Захисне обладнання ABB / Legrand
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Преміум моніторинг + API
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Повна автономність на ніч
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Зарядка електромобіля (опція)
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            5-річний сервісний договір
                        </li>
                    </ul>
                    <a href="/kontakty/" class="btn btn-primary w-full-btn pkg-btn outline">Замовити</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calc-section" id="calc">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Персональний розрахунок</div>
            <h2 class="section-title">СКІЛЬКИ ЗАОЩАДИТЬ ВАША СЕС</h2>
            <p class="section-sub">Введіть параметри свого будинку — отримайте рекомендовану потужність, вартість та термін окупності.</p>
        </div>
        <div class="calc-inner d-grid md-grid-2-columns md-gap-64 wf-animate-grid">
            <div class="calc-form wf-animate">
                <div class="calc-form-title">Калькулятор для будинку</div>
                <div class="form-group">
                    <label>Середньомісячне споживання (кВт·год)</label>
                    <input type="number" id="h-kwh" value="350" min="50" placeholder="Наприклад: 350"/>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Тариф (грн/кВт·год)</label>
                        <input type="number" id="h-tariff" value="4.32" step="0.01" min="1"/>
                    </div>
                    <div class="form-group">
                        <label>Регіон</label>
                        <select id="h-region">
                            <option value="4.8">Південь</option>
                            <option value="4.5" selected>Центр</option>
                            <option value="4.2">Захід</option>
                            <option value="4.0">Північ</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Тип системи</label>
                        <select id="h-type">
                            <option value="0">Мережева (без АКБ)</option>
                            <option value="1" selected>Гібридна (з АКБ)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Тип даху</label>
                        <select id="h-roof">
                            <option value="1.0" selected>Скатний, без затінення</option>
                            <option value="0.9">Скатний, часткове затінення</option>
                            <option value="0.95">Плоский дах</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Зелений тариф (продаж надлишків)?</label>
                    <select id="h-green">
                        <option value="1" selected>Так, підключитись</option>
                        <option value="0">Ні, тільки власне споживання</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="calcHome()">Розрахувати →</button>
                <div class="calc-result" id="home-result">
                    <div class="result-row"><span class="result-key">Рекомендована потужність</span><span class="result-val blue" id="h-pow">—</span></div>
                    <div class="result-row"><span class="result-key">Кількість панелей</span><span class="result-val" id="h-pnl">—</span></div>
                    <div class="result-row"><span class="result-key">Площа на даху</span><span class="result-val" id="h-area">—</span></div>
                    <div class="result-row"><span class="result-key">Місткість АКБ (рекомендована)</span><span class="result-val" id="h-akb">—</span></div>
                    <div class="result-row"><span class="result-key">Орієнтовна вартість</span><span class="result-val" id="h-cost">—</span></div>
                    <div class="result-row"><span class="result-key">Річна економія/дохід</span><span class="result-val green" id="h-save">—</span></div>
                    <div class="result-row"><span class="result-key">Зниження рахунків</span><span class="result-val green" id="h-pct">—</span></div>
                    <div class="result-total">
                        <span class="lb">Термін окупності</span>
                        <span class="cr-tv" id="h-back">—</span>
                    </div>
                    <p style="font-size:11px;color:var(--muted);margin-top:12px;line-height:1.65">* Орієнтовний розрахунок. Для точного проекту — безкоштовний виїзд інженера.</p>
                </div>
            </div>
            <div class="eco-cards wf-animate-grid">
                <div class="eco-card wf-animate">
                    <div class="eco-num">7–9</div>
                    <div>
                        <div class="eco-title">Років — середня окупність без АКБ</div>
                        <div class="eco-desc">При поточних тарифах і сонячному ресурсі центральної України. При підключенні до зеленого тарифу — 5–6 років.</div>
                    </div>
                </div>
                <div class="eco-card wf-animate">
                    <div class="eco-num">25+</div>
                    <div>
                        <div class="eco-title">Років служби якісних панелей</div>
                        <div class="eco-desc">Гарантія продуктивності 90% через 25 років. Реальний термін служби — 30–35 років. Після окупності — 15–20 років чистого доходу.</div>
                    </div>
                </div>
                <div class="eco-card wf-animate">
                    <div class="eco-num">80%</div>
                    <div>
                        <div class="eco-title">Зниження рахунків за електроенергію</div>
                        <div class="eco-desc">Для типового будинку система 5–8 кВт покриває 70–90% річного споживання залежно від регіону.</div>
                    </div>
                </div>
                <div class="eco-card wf-animate">
                    <div class="eco-num">0 грн</div>
                    <div>
                        <div class="eco-title">Зниження рахунків влітку з гібридною СЕС</div>
                        <div class="eco-desc">У червні–серпні правильно підібрана система повністю покриває споживання середнього будинку і заряджає акумулятор.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Як ми працюємо</div>
            <h2 class="section-title">ПРОЦЕС МОНТАЖУ</h2>
            <p class="section-sub">Від дзвінка до запуску — зазвичай 2–3 тижні. Сам монтаж займає лише 1–2 дні.</p>
        </div>
        <div class="process-grid wf-animate-grid d-grid lg-grid-2-columns gap-2">
            <div class="process-item wf-animate">
                <div class="process-num">01</div>
                <div>
                    <div class="process-title">Безкоштовна консультація та виїзд</div>
                    <p class="process-desc">Інженер приїздить, оцінює дах, аналізує споживання за рахунками, пропонує оптимальне рішення з конкретним розрахунком.</p>
                    <div class="process-tags">
                    <span class="ptag">Виїзд безкоштовно</span>
                    <span class="ptag">1–2 дні</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">02</div>
                <div>
                    <div class="process-title">Комерційна пропозиція та договір</div>
                    <p class="process-desc">Фіксована ціна в договорі з розбивкою по обладнанню та роботах. Без прихованих доплат і сюрпризів.</p>
                    <div class="process-tags">
                    <span class="ptag">Фіксована ціна</span>
                    <span class="ptag">3–5 днів</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">03</div>
                <div>
                    <div class="process-title">Монтаж панелей та обладнання</div>
                    <p class="process-desc">Бригада з 2–4 монтажників встановлює систему за 1–2 дні. Кріплення не пошкоджують покрівлю.</p>
                    <div class="process-tags">
                    <span class="ptag">1–2 дні</span>
                    <span class="ptag">Дах не пошкоджується</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">04</div>
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
                <div class="process-num">05</div>
                <div>
                    <div class="process-title">Здача об'єкта та гарантія</div>
                    <p class="process-desc">Передача повного пакету виконавчої документації. Гарантія 3 роки на монтажні роботи, сервісне обслуговування.</p>
                    <div class="process-tags">
                    <span class="ptag">3 р. гарантія</span>
                    <span class="ptag">Сервіс та ТО</span>
                    </div>
                </div>
            </div>
            <div class="process-item wf-animate">
                <div class="process-num">06</div>
                <div>
                    <div class="process-title">Запуск і навчання</div>
                    <p class="process-desc">Пуск системи, налаштування інвертора, встановлення мобільного додатку для моніторингу. Пояснюємо як це все працює.</p>
                    <div class="process-tags">
                    <span class="ptag">Мобільний додаток</span>
                    <span class="ptag">Навчання</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section-bg-dark" class="monitor-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Повний контроль</div>
            <h2 class="section-title">МОНІТОРИНГ У РЕАЛЬНОМУ ЧАСІ</h2>
            <p class="section-sub">Ваш смартфон завжди знає скільки генерує, споживає і продає ваша система.</p>
        </div>
        <div class="monitor-inner wf-animate-grid d-grid lg-grid-2-columns gap-48">
            <!-- Mock dashboard -->
            <div class="monitor-screen wf-animate">
                <div class="ms-title">Дашборд · Сьогодні · 14:32</div>
                <div class="ms-grid">
                    <div class="ms-val">
                        <div class="ms-val-num gn">18.4</div>
                        <div class="ms-val-lbl">Генерація кВт·год</div>
                    </div>
                    <div class="ms-val">
                        <div class="ms-val-num bl">9.2</div>
                        <div class="ms-val-lbl">Споживання кВт·год</div>
                    </div>
                    <div class="ms-val">
                        <div class="ms-val-num yw">6.1</div>
                        <div class="ms-val-lbl">АКБ заряд кВт·год</div>
                    </div>
                    <div class="ms-val">
                        <div class="ms-val-num wh">3.1</div>
                        <div class="ms-val-lbl">Продано в мережу</div>
                    </div>
                </div>
                <div style="height:14px"></div>
                <div class="ms-bar-wrap">
                    <div class="ms-bar-label"><span>Генерація</span><span>78%</span></div>
                    <div class="ms-bar-track">
                        <div class="ms-bar-fill solar"></div>
                    </div>
                </div>
                <div class="ms-bar-wrap" style="margin-top:10px">
                    <div class="ms-bar-label"><span>Власне споживання</span><span>62%</span></div>
                    <div class="ms-bar-track">
                        <div class="ms-bar-fill consumed"></div>
                    </div>
                </div>
                <div class="ms-bar-wrap" style="margin-top:10px">
                    <div class="ms-bar-label"><span>Продано</span><span>16%</span></div>
                    <div class="ms-bar-track">
                        <div class="ms-bar-fill sold"></div>
                    </div>
                </div>
            </div>
            <div class="monitor-features wf-animate-grid">
                <div class="mf-item wf-animate">
                    <div class="mf-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div>
                        <div class="mf-title">Live-дані кожні 5 секунд</div>
                        <div class="mf-desc">Графіки генерації, споживання та заряду акумулятора оновлюються в реальному часі в додатку та веб-порталі.</div>
                    </div>
                </div>
                <div class="mf-item wf-animate">
                    <div class="mf-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div>
                        <div class="mf-title">iOS та Android додаток</div>
                        <div class="mf-desc">Офіційні додатки від виробника інвертора. Перегляд щоденної, щомісячної та річної статистики, прогнозу генерації.</div>
                    </div>
                </div>
                <div class="mf-item wf-animate">
                    <div class="mf-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                        </svg>
                    </div>
                    <div>
                        <div class="mf-title">Сповіщення при аномаліях</div>
                        <div class="mf-desc">Push-сповіщення якщо система не генерує, акумулятор розрядився нижче мінімуму або зафіксовано несправність.</div>
                    </div>
                </div>
                <div class="mf-item wf-animate">
                    <div class="mf-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M12 2L2 7v10l10 5 10-5V7l-10-5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="mf-title">Дистанційний доступ для сервісу</div>
                        <div class="mf-desc">Наші інженери можуть діагностувати систему дистанційно і вирішити більшість проблем без виїзду.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section testimonials-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Відгуки власників</div>
            <h2 class="section-title">ЩО КАЖУТЬ ВЛАСНИКИ</h2>
        </div>
        <div class="testimonials-grid wf-animate-grid d-grid md-grid-3-columns">
            <div class="testimonials-card wf-animate">
                <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                <div class="testimonials-quote">"</div>
                <p class="testimonials-text">Після встановлення СЕС я знизив свій рахунок на 70% і навіть продаю надлишки електроенергії державі. Тепер я можу насолоджуватися світлом і опаленням без проблем, навіть під час відключень.</p>
                <div class="testimonials-sep"></div>
                <div class="testimonials-name">Іван Петров</div>
                <div class="testimonials-role">Власник будинку 150 м², Київ</div>
            </div>
            <div class="testimonials-card wf-animate">
                <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                <div class="testimonials-quote">"</div>
                <p class="testimonials-text">Якщо ви хочете зекономити на електроенергії, встановіть СЕС. Це простіше, ніж здається, і результат вражає. Я вже продаю надлишки енергії державі і отримую хороший дохід.</p>
                <div class="testimonials-sep"></div>
                <div class="testimonials-name">Олександр Сидоренко</div>
                <div class="testimonials-role">Власник будинку 150 м², Львів</div>
            </div>
            <div class="testimonials-card wf-animate">
                <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                <div class="testimonials-quote">"</div>
                <p class="testimonials-text">Ставили гібридну систему 8 кВт з акумулятором у травні. Головна причина була — відключення, у нашому районі вимикали по 4–6 годин. Зараз навіть не завжди помічаємо, що світла немає: котел, холодильник, інтернет — все працює. Рахунки за літо взагалі смішні, менше сотні гривень. Монтаж зайняв два дні, після бригади жодного сліду на подвір'ї.</p>
                <div class="testimonials-sep"></div>
                <div class="testimonials-name">Олександра Кузьменко</div>
                <div class="testimonials-role">Власник будинку 150 м², Дніпро</div>
            </div>
        </div>
    </div>
</section>
<section class="page-section faq-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Відповіді на питання</div>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки панелей потрібно для будинку 150 м²?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для будинку 150 м² з середнім споживанням 300–400 кВт·год/міс рекомендуємо систему 5–8 кВт: це 12–20 панелей по 400 Вт. Потрібна площа даху — 25–45 м². Точний розрахунок залежить від кількості мешканців, наявності бойлера та регіону.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи буде світло в будинку при відключенні мережі?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Тільки гібридна або автономна система з акумулятором. Мережева СЕС при відключенні мережі автоматично відключається (вимоги безпеки для лінійних працівників). З АКБ 10 кВт·год будинок може пропрацювати 6–10 годин без сонця.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка потрібна площа та орієнтація даху?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Ідеальна орієнтація — на південь, кут нахилу 30–45°. Допускаємо схід і захід з коефіцієнтом -10–15%. Для системи 5 кВт потрібно 30–35 м² без затінення. На плоскому даху монтуємо під потрібним кутом на власних конструкціях.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи потрібен дозвіл на встановлення СЕС?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для систем до 30 кВт на приватних будинках потрібне лише технічне приєднання до обленерго (договір). Будівельний дозвіл не потрібен. Ми беремо на себе всю документацію, включаючи подачу заявки та підписання договору.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як панелі переживають зиму та граад?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Панелі тестуються на міцність до граду діаметром 25 мм при швидкості 80 км/год. Витримують сніговий покров до 300 кг/м². Взимку ефективність знижується через менший кут сонця, але сніг зазвичай самостійно сповзає з нахиленої поверхні.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи зберігається зелений тариф для домогосподарства?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Зелений тариф для домогосподарств діє. Тариф встановлюється на момент підключення і фіксується на термін дії договору з обленерго. Ми допомагаємо оформити всі необхідні документи для отримання тарифу.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate cta-band-bg-green">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО СЕС<br>САМЕ ДЛЯ ВАШОГО БУДИНКУ</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера. Оцінимо дах, порахуємо потужність, підберемо пакет і назвемо точну ціну — протягом 24 годин.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="/kontakty/" class="btn btn-white">Замовити виїзд інженера</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white scroll-to-btn">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();