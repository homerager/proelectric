<?php
/*
  Template Name: Panel installation
*/
get_header();
?>

<!-- HERO -->
<section class="hero panel-hero">

    <!-- panel circuit deco -->
    <div class="panel-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="pnl1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="30%"  stop-color="#1a5fa8" stop-opacity=".5"/>
                    <stop offset="70%"  stop-color="#2db551" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="pnl2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="40%"  stop-color="#1a5fa8" stop-opacity=".35"/>
                    <stop offset="100%" stop-color="#e85c1a" stop-opacity=".15"/>
                </linearGradient>
            </defs>
            <!-- bus bars horizontal -->
            <line x1="0" y1="180" x2="1400" y2="180" stroke="url(#pnl1)" stroke-width="4"/>
            <line x1="0" y1="360" x2="1400" y2="360" stroke="url(#pnl1)" stroke-width="2"/>
            <line x1="0" y1="540" x2="1400" y2="540" stroke="url(#pnl1)" stroke-width="3"/>
            <line x1="0" y1="720" x2="1400" y2="720" stroke="url(#pnl1)" stroke-width="2"/>
            <!-- vertical drops -->
            <line x1="260"  y1="0" x2="260"  y2="900" stroke="url(#pnl2)" stroke-width="2"/>
            <line x1="520"  y1="0" x2="520"  y2="900" stroke="url(#pnl2)" stroke-width="3"/>
            <line x1="780"  y1="0" x2="780"  y2="900" stroke="url(#pnl2)" stroke-width="2"/>
            <line x1="1040" y1="0" x2="1040" y2="900" stroke="url(#pnl2)" stroke-width="2"/>
            <line x1="1140" y1="0" x2="1140" y2="900" stroke="url(#pnl2)" stroke-width="1"/>
            <!-- breaker symbols at nodes -->
            <rect x="244" y="166" width="32" height="28" rx="2" fill="none" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
            <rect x="248" y="170" width="24" height="20" rx="1" fill="rgba(26,95,168,.12)"/>
            <rect x="504" y="346" width="32" height="28" rx="2" fill="none" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
            <rect x="508" y="350" width="24" height="20" rx="1" fill="rgba(45,181,81,.12)"/>
            <rect x="764" y="526" width="32" height="28" rx="2" fill="none" stroke="rgba(26,95,168,.3)" stroke-width="1.5"/>
            <rect x="768" y="530" width="24" height="20" rx="1" fill="rgba(26,95,168,.1)"/>
            <rect x="1024" y="166" width="32" height="28" rx="2" fill="none" stroke="rgba(232,92,26,.25)" stroke-width="1.5"/>
            <!-- node circles -->
            <circle cx="260"  cy="180" r="5" fill="#1a5fa8" opacity=".65"/>
            <circle cx="520"  cy="360" r="7" fill="#2db551" opacity=".7"/>
            <circle cx="780"  cy="540" r="5" fill="#1a5fa8" opacity=".6"/>
            <circle cx="1040" cy="180" r="5" fill="#e85c1a" opacity=".5"/>
            <circle cx="260"  cy="720" r="5" fill="#2db551" opacity=".45"/>
            <circle cx="780"  cy="360" r="6" fill="#e85c1a" opacity=".55"/>
            <!-- panel cabinet silhouette, bottom right -->
            <rect x="1100" y="450" width="200" height="280" rx="3" fill="none" stroke="rgba(26,95,168,.12)" stroke-width="1.5"/>
            <rect x="1100" y="450" width="200" height="40"  rx="3" fill="rgba(26,95,168,.06)"/>
            <line x1="1100" y1="490" x2="1300" y2="490" stroke="rgba(26,95,168,.1)" stroke-width="1"/>
            <rect x="1114" y="502" width="22" height="30" rx="1" fill="rgba(26,95,168,.15)"/>
            <rect x="1140" y="502" width="22" height="30" rx="1" fill="rgba(26,95,168,.15)"/>
            <rect x="1166" y="502" width="22" height="30" rx="1" fill="rgba(45,181,81,.15)"/>
            <rect x="1192" y="502" width="22" height="30" rx="1" fill="rgba(26,95,168,.15)"/>
            <rect x="1218" y="502" width="22" height="30" rx="1" fill="rgba(26,95,168,.15)"/>
            <rect x="1244" y="502" width="40" height="30" rx="1" fill="rgba(232,92,26,.1)"/>
            <rect x="1114" y="546" width="170" height="4"  rx="1" fill="rgba(255,255,255,.06)"/>
            <rect x="1114" y="556" width="170" height="14" rx="1" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
            <text x="1199" y="566" text-anchor="middle" font-family="monospace" font-size="8" fill="rgba(45,181,81,.5)">380.4 V</text>
        </svg>
    </div>

    <div class="panel-hero-tint"></div>

    <div class="container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>">Електромонтаж</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Монтаж електрощитів</a>
            </nav>
            <div class="hero-label">Збирання · Монтаж · Введення в дію</div>
            <h1 class="hero-title">
                <span class="accent-blue">МОНТАЖ</span><br>
                <span class="accent-green">ЕЛЕКТРО</span><span class="accent-orange">ЩИТІВ</span>
            </h1>
            <p class="hero-desc">Встановлення та підключення розподільних щитів, ГРЩ, щитів АВР, шаф управління для квартир, будинків, комерційних та промислових об'єктів.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити монтаж</a>
                <a href="#panel-types" class="btn btn-outline-white scroll-to-btn">Типи щитів</a>
            </div>
        </div>
    </div>

    <div class="hero-stats">
        <div class="container">
            <div class="hero-stats-row d-flex justify-content-between">
                <div class="hero-stat-item">
                    <div class="stat-num">500<span class="unit">+</span></div>
                    <div class="stat-label">Щитів<br>встановлено</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">6300<span class="unit"> А</span></div>
                    <div class="stat-label">Максимальний<br>струм щита</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">1<span class="unit"> день</span></div>
                    <div class="stat-label">Монтаж<br>квартирного щита</div>
                </div>
                <div class="hero-stat-item">
                    <div class="stat-num">5<span class="unit"> р.</span></div>
                    <div class="stat-label">Гарантія<br>на обладнання</div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- PANEL TYPES -->
<section class="page-section" id="panel-types">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label orange">Що ми монтуємо</div>
            <h2 class="section-title">ТИПИ ЕЛЕКТРОЩИТІВ</h2>
            <p class="section-sub">Монтуємо будь-які типи щитового обладнання — від побутового квартирного щитка до промислового ГРЩ та АВР.</p>
        </div>

        <div class="panel-types-grid d-grid lg-grid-3-columns wf-animate-grid">
            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt1">
                    <div class="panel-type-badge">Житловий</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="24" y="12" width="48" height="70" rx="3" stroke="rgba(255,255,255,.35)" stroke-width="1.5" fill="rgba(255,255,255,.04)"/>
                        <rect x="24" y="12" width="48" height="16" rx="3" fill="rgba(45,181,81,.15)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <line x1="24" y1="28" x2="72" y2="28" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        <rect x="30" y="33" width="36" height="6" rx="1" fill="rgba(255,255,255,.12)"/>
                        <rect x="30" y="42" width="36" height="6" rx="1" fill="rgba(255,255,255,.12)"/>
                        <rect x="30" y="51" width="36" height="6" rx="1" fill="rgba(45,181,81,.25)"/>
                        <rect x="30" y="60" width="36" height="6" rx="1" fill="rgba(255,255,255,.12)"/>
                        <circle cx="48" cy="20" r="3" fill="rgba(45,181,81,.6)"/>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">Квартирні та будинкові щитки</div>
                    <p class="panel-type-desc">Встановлення квартирних та поверхових щитків для житлових будинків, ОСББ, котеджів. Монтаж автоматів, УЗО, реле напруги.</p>
                    <ul class="panel-type-list">
                        <li>На 12–96 модулів DIN-рейки</li>
                        <li>Legrand, ABB, Schneider Electric</li>
                        <li>УЗО, диференційні автомати</li>
                        <li>Реле напруги та контролю фаз</li>
                        <li>Лічильники та системи обліку</li>
                    </ul>
                </div>
            </div>

            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt2">
                    <div class="panel-type-badge">Комерційний</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="14" y="10" width="68" height="76" rx="3" stroke="rgba(255,255,255,.35)" stroke-width="1.5" fill="rgba(255,255,255,.04)"/>
                        <rect x="14" y="10" width="68" height="18" rx="3" fill="rgba(26,95,168,.2)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                        <text x="48" y="23" text-anchor="middle" font-family="monospace" font-size="8" fill="rgba(255,255,255,.6)">ГРЩ</text>
                        <rect x="20" y="32" width="56" height="6" rx="1" fill="rgba(26,95,168,.4)" opacity=".8"/>
                        <rect x="20" y="42" width="14" height="20" rx="1" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                        <rect x="38" y="42" width="14" height="20" rx="1" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                        <rect x="56" y="42" width="14" height="20" rx="1" fill="rgba(45,181,81,.2)"  stroke="rgba(45,181,81,.4)"  stroke-width="1"/>
                        <rect x="20" y="68" width="26" height="10" rx="1" fill="rgba(0,0,0,.3)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <text x="33" y="76" text-anchor="middle" font-family="monospace" font-size="7" fill="rgba(45,181,81,.7)">380V</text>
                        <circle cx="58" cy="73" r="3" fill="rgba(45,181,81,.7)"/>
                        <circle cx="66" cy="73" r="3" fill="rgba(255,165,0,.6)"/>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">ГРЩ та ВРЩ для комерції</div>
                    <p class="panel-type-desc">Монтаж головних та вводно-розподільних щитів для торгових центрів, офісних будівель, готелів та ресторанів.</p>
                    <ul class="panel-type-list">
                        <li>Струм від 63 до 3200 А</li>
                        <li>Секціонування, шина нульова та PE</li>
                        <li>Вимірювальні прилади та лічильники</li>
                        <li>Система АСКОЕ та облік</li>
                        <li>Вимикачі ABB Emax, Schneider Masterpact</li>
                    </ul>
                </div>
            </div>

            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt3">
                    <div class="panel-type-badge">Резервне живлення</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="10" y="10" width="76" height="76" rx="3" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="rgba(255,255,255,.03)"/>
                        <rect x="18" y="22" width="22" height="30" rx="2" fill="rgba(255,255,255,.1)" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                        <rect x="56" y="22" width="22" height="30" rx="2" fill="rgba(45,181,81,.2)" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                        <line x1="40" y1="37" x2="56" y2="37" stroke="rgba(255,255,255,.3)" stroke-width="1.5" stroke-dasharray="3 2"/>
                        <path d="M46 34 L50 37 L46 40" stroke="rgba(45,181,81,.7)" stroke-width="1.5" fill="none"/>
                        <rect x="28" y="60" width="40" height="16" rx="2" stroke="rgba(232,92,26,.35)" stroke-width="1" fill="rgba(232,92,26,.08)"/>
                        <text x="48" y="71" text-anchor="middle" font-family="monospace" font-size="7" fill="rgba(232,92,26,.7)">АВР</text>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">Шафи АВР (автоматичний ввід резерву)</div>
                    <p class="panel-type-desc">Встановлення та налаштування шаф автоматичного введення резерву — безперебійне живлення при відключенні основного джерела.</p>
                    <ul class="panel-type-list">
                        <li>Час перемикання від 0,1 с</li>
                        <li>Мережа + ДГУ, мережа + UPS</li>
                        <li>Моторизовані та електромагнітні АВ</li>
                        <li>Контролери Lovato, Deif, ComAp</li>
                        <li>Дистанційний моніторинг і логування</li>
                    </ul>
                </div>
            </div>

            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt4">
                    <div class="panel-type-badge">Промисловий</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="10" y="10" width="76" height="76" rx="3" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="rgba(255,255,255,.03)"/>
                        <circle cx="30" cy="36" r="10" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="rgba(26,95,168,.1)"/>
                        <circle cx="30" cy="36" r="4" fill="rgba(26,95,168,.5)"/>
                        <circle cx="66" cy="36" r="10" stroke="rgba(45,181,81,.5)" stroke-width="1.5" fill="rgba(45,181,81,.1)"/>
                        <circle cx="66" cy="36" r="4" fill="rgba(45,181,81,.5)"/>
                        <rect x="16" y="56" width="64" height="18" rx="2" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        <rect x="20" y="60" width="10" height="10" rx="1" fill="rgba(26,95,168,.4)"/>
                        <rect x="34" y="60" width="10" height="10" rx="1" fill="rgba(45,181,81,.4)"/>
                        <rect x="48" y="60" width="10" height="10" rx="1" fill="rgba(255,255,255,.15)"/>
                        <rect x="62" y="60" width="10" height="10" rx="1" fill="rgba(232,92,26,.4)"/>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">Шафи управління двигунами (ШУД)</div>
                    <p class="panel-type-desc">Монтаж шаф управління насосами, вентиляторами, конвеєрами. Прямий пуск, реверс, плавний пуск, частотне регулювання.</p>
                    <ul class="panel-type-list">
                        <li>Струм до 630 А, потужність до 315 кВт</li>
                        <li>Частотні перетворювачі Danfoss, ABB</li>
                        <li>Захист від перевантаження та обриву фаз</li>
                        <li>Інтеграція в системи автоматики</li>
                        <li>ПЛК Siemens, OMRON, Delta</li>
                    </ul>
                </div>
            </div>

            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt5">
                    <div class="panel-type-badge">Автоматика</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="10" y="10" width="76" height="76" rx="3" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="rgba(255,255,255,.03)"/>
                        <rect x="18" y="18" width="60" height="28" rx="2" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.35)" stroke-width="1"/>
                        <text x="48" y="36" text-anchor="middle" font-family="monospace" font-size="10" fill="rgba(45,181,81,.8)">PLC</text>
                        <line x1="18" y1="52" x2="78" y2="52" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        <circle cx="26" cy="62" r="4" fill="rgba(26,95,168,.5)"/>
                        <circle cx="40" cy="62" r="4" fill="rgba(45,181,81,.5)"/>
                        <circle cx="54" cy="62" r="4" fill="rgba(255,255,255,.2)"/>
                        <circle cx="68" cy="62" r="4" fill="rgba(232,92,26,.5)"/>
                        <line x1="26" y1="66" x2="26" y2="78" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
                        <line x1="40" y1="66" x2="40" y2="78" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                        <line x1="54" y1="66" x2="54" y2="78" stroke="rgba(255,255,255,.15)" stroke-width="1.5"/>
                        <line x1="68" y1="66" x2="68" y2="78" stroke="rgba(232,92,26,.3)" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">Шафи автоматики та ПЛК</div>
                    <p class="panel-type-desc">Монтаж шаф з програмованими логічними контролерами для автоматизації технологічних процесів та диспетчеризації.</p>
                    <ul class="panel-type-list">
                        <li>ПЛК Siemens S7, Schneider M340</li>
                        <li>Панелі оператора HMI Siemens, Weintek</li>
                        <li>Протоколи Modbus, Profibus, EtherNet/IP</li>
                        <li>Інтеграція в SCADA Wonderware, WinCC</li>
                        <li>Налагодження та програмування</li>
                    </ul>
                </div>
            </div>

            <div class="panel-type-card wf-animate">
                <div class="panel-type-thumb pt6">
                    <div class="panel-type-badge">Зовнішній</div>
                    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" style="position:relative;z-index:1">
                        <rect x="10" y="22" width="76" height="62" rx="3" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="rgba(255,255,255,.03)"/>
                        <rect x="10" y="10" width="76" height="16" rx="2" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        <line x1="18" y1="36" x2="78" y2="36" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        <rect x="18" y="42" width="14" height="18" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="36" y="42" width="14" height="18" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="54" y="42" width="14" height="18" rx="1" fill="rgba(26,95,168,.35)"/>
                        <circle cx="24" cy="28" r="4" fill="rgba(45,181,81,.5)"/>
                        <rect x="18" y="66" width="60" height="10" rx="1" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                    </svg>
                </div>
                <div class="panel-type-body">
                    <div class="panel-type-title">Вуличні та вологозахищені щити</div>
                    <p class="panel-type-desc">Монтаж щитів зовнішнього встановлення для КТП, будівельних майданчиків, вуличного освітлення та зовнішніх споруд.</p>
                    <ul class="panel-type-list">
                        <li>Ступінь захисту IP44–IP65</li>
                        <li>Корпуси з нержавіючої сталі та склопластику</li>
                        <li>Обігрів та вентиляція шафи</li>
                        <li>Захист від перенапруг (УЗІП)</li>
                        <li>Заземлення, блискавкозахист</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- STATS BAND -->
<div class="panel-stats-band wf-animate">
    <div class="container">
        <div class="panel-stats-row wf-animate-grid lg-grid-4-columns md-grid-2-columns">
            <div class="panel-stat-item">
                <div class="panel-stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-stat-num">500<span>+</span></div>
                    <div class="panel-stat-lbl">Щитів встановлено<br>нашими бригадами</div>
                </div>
            </div>
            <div class="panel-stat-item">
                <div class="panel-stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-stat-num">1<span> день</span></div>
                    <div class="panel-stat-lbl">Монтаж<br>квартирного щита</div>
                </div>
            </div>
            <div class="panel-stat-item">
                <div class="panel-stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-stat-num">100<span>%</span></div>
                    <div class="panel-stat-lbl">Протоколів<br>після монтажу</div>
                </div>
            </div>
            <div class="panel-stat-item">
                <div class="panel-stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-stat-num">6300<span> А</span></div>
                    <div class="panel-stat-lbl">Максимальний<br>струм щита</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- SPLIT FEATURES -->
<section class="page-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Наш підхід</div>
            <h2 class="section-title">ТОЧНІСТЬ ДО КОЖНОГО БОЛТА</h2>
            <p class="section-sub">Монтуємо електрощити так, щоб вони надійно працювали десятиліттями — без аварій та перегріву.</p>
        </div>

        <div class="panel-split-inner wf-animate">
            <div class="panel-split-visual">
                <div class="panel-split-accent"></div>
                <svg width="320" height="360" viewBox="0 0 320 360" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <linearGradient id="spg1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%"   stop-color="#1a5fa8" stop-opacity=".6"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".4"/>
                        </linearGradient>
                    </defs>
                    <!-- щит корпус -->
                    <rect x="50" y="20" width="220" height="310" rx="4" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.18)" stroke-width="1.5"/>
                    <!-- шапка щита -->
                    <rect x="50" y="20" width="220" height="44" rx="4" fill="rgba(26,95,168,.2)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <text x="160" y="47" text-anchor="middle" font-family="'Bebas Neue',sans-serif" font-size="14" fill="rgba(255,255,255,.7)" letter-spacing="3">ГРЩ-01</text>
                    <!-- шина -->
                    <rect x="66" y="76" width="188" height="7" rx="1" fill="url(#spg1)" opacity=".85"/>
                    <!-- автомати ряд 1 -->
                    <rect x="66"  y="91" width="30" height="38" rx="2" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                    <rect x="100" y="91" width="30" height="38" rx="2" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                    <rect x="134" y="91" width="30" height="38" rx="2" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                    <rect x="168" y="91" width="30" height="38" rx="2" fill="rgba(45,181,81,.25)" stroke="rgba(45,181,81,.5)" stroke-width="1"/>
                    <rect x="202" y="91" width="30" height="38" rx="2" fill="rgba(26,95,168,.3)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                    <!-- ручки автоматів -->
                    <rect x="77"  y="103" width="8" height="14" rx="1" fill="rgba(255,255,255,.35)"/>
                    <rect x="111" y="103" width="8" height="14" rx="1" fill="rgba(255,255,255,.35)"/>
                    <rect x="145" y="103" width="8" height="14" rx="1" fill="rgba(255,255,255,.35)"/>
                    <rect x="179" y="103" width="8" height="14" rx="1" fill="rgba(45,181,81,.8)"/>
                    <rect x="213" y="103" width="8" height="14" rx="1" fill="rgba(255,255,255,.35)"/>
                    <!-- шина 2 -->
                    <rect x="66" y="138" width="188" height="5" rx="1" fill="rgba(255,255,255,.07)"/>
                    <!-- автомати ряд 2 (менші) -->
                    <rect x="66"  y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <rect x="90"  y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <rect x="114" y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <rect x="138" y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <rect x="162" y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <rect x="186" y="149" width="20" height="30" rx="2" fill="rgba(45,181,81,.2)"  stroke="rgba(45,181,81,.4)"  stroke-width="1"/>
                    <rect x="210" y="149" width="20" height="30" rx="2" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                    <!-- дисплей вимірювань -->
                    <rect x="66" y="190" width="90" height="52" rx="2" fill="rgba(0,0,0,.35)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                    <text x="111" y="213" text-anchor="middle" font-family="monospace" font-size="11" fill="rgba(45,181,81,.85)">380.4 V</text>
                    <text x="111" y="231" text-anchor="middle" font-family="monospace" font-size="10" fill="rgba(45,181,81,.55)">148.3 A</text>
                    <!-- LED індикатори -->
                    <circle cx="172" cy="202" r="4" fill="#2db551" opacity=".85"/>
                    <circle cx="186" cy="202" r="4" fill="#2db551" opacity=".85"/>
                    <circle cx="200" cy="202" r="4" fill="rgba(255,165,0,.7)"/>
                    <circle cx="214" cy="202" r="4" fill="rgba(255,255,255,.2)"/>
                    <circle cx="228" cy="202" r="4" fill="rgba(255,255,255,.2)"/>
                    <!-- кабельний відсік -->
                    <rect x="66" y="256" width="188" height="62" rx="2" fill="rgba(255,255,255,.03)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    <text x="160" y="272" text-anchor="middle" font-family="Montserrat,sans-serif" font-size="8" fill="rgba(255,255,255,.2)" letter-spacing="1">КАБЕЛЬНИЙ ВІДСІК</text>
                    <line x1="90"  y1="280" x2="90"  y2="314" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
                    <line x1="110" y1="280" x2="110" y2="314" stroke="rgba(26,95,168,.4)"   stroke-width="2"/>
                    <line x1="130" y1="280" x2="130" y2="314" stroke="rgba(45,181,81,.4)"   stroke-width="2"/>
                    <line x1="150" y1="280" x2="150" y2="314" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
                    <line x1="170" y1="280" x2="170" y2="314" stroke="rgba(26,95,168,.4)"   stroke-width="2"/>
                    <line x1="190" y1="280" x2="190" y2="314" stroke="rgba(45,181,81,.4)"   stroke-width="2"/>
                    <line x1="210" y1="280" x2="210" y2="314" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
                    <line x1="230" y1="280" x2="230" y2="314" stroke="rgba(232,92,26,.3)"   stroke-width="2"/>
                </svg>
            </div>

            <div class="panel-split-content">
                <div class="section-label blue">Технічний підхід</div>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">МОНТАЖ ЗА ВСІМА<br>НОРМАМИ ПУЕ</h2>
                <p class="section-sub">Кожен щит монтується відповідно до проекту, норм ПУЕ та вимог виробників обладнання.</p>

                <div class="panel-feat-list">
                    <div class="panel-feat-item">
                        <div class="panel-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="panel-feat-title">Маркування та схеми</div>
                            <div class="panel-feat-desc">Кожен автомат, УЗО та кабель маркуються. Замовник отримує виконавчу принципову схему та монтажну схему розташування.</div>
                        </div>
                    </div>
                    <div class="panel-feat-item">
                        <div class="panel-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="panel-feat-title">Вимірювання після монтажу</div>
                            <div class="panel-feat-desc">Після монтажу вимірюємо опір ізоляції та петлі фаза-нуль. Протоколи вимірювань — обов'язковий документ здачі об'єкта.</div>
                        </div>
                    </div>
                    <div class="panel-feat-item">
                        <div class="panel-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="panel-feat-title">Правильний підбір перерізів</div>
                            <div class="panel-feat-desc">Перетин шин, кабелів та з'єднань підбирається за розрахунковим струмом, термічною стійкістю та допустимим падінням напруги.</div>
                        </div>
                    </div>
                    <div class="panel-feat-item">
                        <div class="panel-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <polyline points="9 12 11 14 15 10"/>
                            </svg>
                        </div>
                        <div>
                            <div class="panel-feat-title">Захист від перенапруг та ЕМЗ</div>
                            <div class="panel-feat-desc">Встановлення УЗІП (пристроїв захисту від імпульсних перенапруг) класу I, II, III відповідно до категорії об'єкта та зони блискавкозахисту.</div>
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
            <div class="section-label orange">Як ми працюємо</div>
            <h2 class="section-title">ЕТАПИ МОНТАЖУ ЕЛЕКТРОЩИТА</h2>
            <p class="section-sub">Від вивчення проекту до здачі з протоколами — чітка технологічна послідовність без відступів.</p>
        </div>

        <div class="panel-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">01</div>
                    <div class="panel-proc-title">Вивчення проекту та ТЗ</div>
                    <p class="panel-proc-desc">Аналіз робочої документації, уточнення схем підключення, переліку споживачів, вимог до захисту та селективності автоматів</p>
                    <span class="panel-proc-tag">ПУЕ / ДБН</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">02</div>
                    <div class="panel-proc-title">Підготовка місця встановлення</div>
                    <p class="panel-proc-desc">Перевірка ніші або місця кріплення, монтаж закладних конструкцій, виконання кабельних вводів та відповідних вирізів у корпусі</p>
                    <span class="panel-proc-tag">Точність кріплення</span>
                </div>  
            </div>
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">03</div>
                    <div class="panel-proc-title">Встановлення корпусу та DIN-рейок</div>
                    <p class="panel-proc-desc">Монтаж корпусу щита, встановлення DIN-рейок, кабельних каналів та нульових шин. Перевірка горизонтальності та доступності обслуговування</p>
                    <span class="panel-proc-tag">IP захист</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">04</div>
                    <div class="panel-proc-title">Монтаж обладнання та шин</div>
                    <p class="panel-proc-desc">Встановлення автоматичних вимикачів, УЗО, реле, вимірювальних приладів, лічильників та шинних з'єднань відповідно до монтажної схеми</p>
                    <span class="panel-proc-tag">Сертифіковане обладнання</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">05</div>
                    <div class="panel-proc-title">Підключення кабелів та маркування</div>
                    <p class="panel-proc-desc">Введення та підключення всіх живильних і відхідних кабелів з дотриманням моменту затяжки клем, обов'язкове маркування кожного провідника</p>
                    <span class="panel-proc-tag">Моменти затяжки</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="panel-proc-card">
                    <div class="panel-proc-num">06</div>
                    <div class="panel-proc-title">Вимірювання та введення в дію</div>
                    <p class="panel-proc-desc">Вимірювання ізоляції, перевірка УЗО тестером, перевірка селективності, налаштування реле та пробне ввімкнення. Передача протоколів та схем</p>
                    <span class="panel-proc-tag">Протоколи вимірювань</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PROJECTS -->
<section class="page-section" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Реалізовані об'єкти</div>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
            <p class="section-sub">Від квартирного щитка до головного розподільного щита промислового підприємства.</p>
        </div>

        <div class="panel-proj-strip projects-grid wf-animate-grid">
            <div class="panel-proj-card featured wf-animate">
                <div class="panel-proj-tag">Промисловий об'єкт</div>
                <div class="panel-proj-title">ГРЩ для виробничого підприємства на 3200 А</div>
                <p class="panel-proj-desc" style="max-width:360px">Проектування та монтаж головного розподільного щита на струм 3200 А з двома секціями, шафою АВР та системою АСКОЕ. Корпус ABB, вимикачі Emax 2. Монтаж, підключення кабелів 10 кВ, налаштування та введення в дію з протоколами.</p>
                <div class="panel-proj-meta">
                    <span class="panel-proj-mi">2023 / Дніпро</span>
                    <span class="panel-proj-mi">3200 А · 0,4 кВ</span>
                    <span class="panel-proj-mi">Термін 3 тижні</span>
                </div>
                <div class="panel-proj-big">3200 А</div>
            </div>
            <div class="panel-proj-card wf-animate">
                <div class="panel-proj-tag">Багатоквартирний будинок</div>
                <div class="panel-proj-title">Поверхові щитки ЖК на 800 квартир</div>
                <p class="panel-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Монтаж 80 поверхових щитків Legrand по 48 модулів. Автомати, УЗО, реле напруги, лічильники на кожну квартиру.</p>
                <div class="panel-proj-meta" style="margin-top:16px">
                    <span class="panel-proj-mi">2023 / Київ</span>
                </div>
            </div>
            <div class="panel-proj-card wf-animate">
                <div class="panel-proj-tag">Резервне живлення</div>
                <div class="panel-proj-title">АВР 630 А для медичного центру</div>
                <p class="panel-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Шафа АВР з перемиканням між мережею та ДГУ за 0,5 с. Контролер ComAp, моніторинг онлайн.</p>
                <div class="panel-proj-meta" style="margin-top:16px">
                    <span class="panel-proj-mi">2022 / Львів</span>
                </div>
            </div>
            <div class="panel-proj-card wf-animate">
                <div class="panel-proj-tag">Автоматика</div>
                <div class="panel-proj-title">Шафа ПЛК для насосної станції</div>
                <p class="panel-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Siemens S7-1200, HMI панель, дистанційне управління 8 насосами, інтеграція в SCADA, частотні перетворювачі ABB.</p>
                <div class="panel-proj-meta" style="margin-top:16px">
                    <span class="panel-proj-mi">2024 / Харків</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- STANDARDS -->
<div class="panel-standards wf-animate">
    <div class="container">
        <div class="panel-standards-label">Нормативна база та стандарти</div>
        <div class="panel-std-grid lg-grid-4-columns md-grid-2-columns gap-16 wf-animate-grid">
            <div class="panel-std-card wf-animate">
                <div class="panel-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="m9 15 2 2 4-4"/>
                    </svg>
                </div>
                <div class="panel-std-name">ПУЕ 7-е видання</div>
                <div class="panel-std-desc">Правила улаштування електроустановок — основний норматив для монтажу щитового обладнання всіх типів і напруг</div>
            </div>
            <div class="panel-std-card wf-animate">
                <div class="panel-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="panel-std-name">ДБН В.2.5-82</div>
                <div class="panel-std-desc">Норми проектування електроустановок будівель. Вимоги до розміщення, захисту та комплектації щитів у будівлях</div>
            </div>
            <div class="panel-std-card wf-animate">
                <div class="panel-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="panel-std-name">ДСТУ IEC 61439</div>
                <div class="panel-std-desc">Міжнародний стандарт на комплектні розподільні пристрої низької напруги. Визначає вимоги до конструкції та випробувань щитів</div>
            </div>
            <div class="panel-std-card wf-animate">
                <div class="panel-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="panel-std-name">НПАОП 40.1-1.21</div>
                <div class="panel-std-desc">Правила безпечної експлуатації електроустановок споживачів. Вимоги до персоналу та порядку введення в дію</div>
            </div>
        </div>
    </div>
</div>


<!-- FAQ -->
<section class="page-section page-section-bg2">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Відповіді на питання</div>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>

        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає монтаж квартирного щитка?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Монтаж стандартного квартирного щитка на 24–48 автоматів займає 4–8 годин. ГРЩ або шафа АВР середньої складності — 2–5 робочих днів. Промислова шафа з ПЛК та складною автоматикою — 5–14 днів. Точний термін залежить від кількості кабелів, типу обладнання та умов доступу.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які документи я отримаю після монтажу щита?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Передаємо повний пакет: виконавчу принципову та монтажну схему, протокол вимірювань опору ізоляції, протокол перевірки УЗО, протокол вимірювання петлі фаза-нуль. Для промислових об'єктів — паспорт щита та акт введення в дію.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи монтуєте щити, що вже виготовлені сторонньою організацією?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, монтуємо щити будь-якого виробника за наявності технічної документації. Перед монтажем перевіряємо комплектність та відповідність щита проекту. Гарантія поширюється на монтажні роботи, але не на комплектуючі стороннього виробника.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна замінити старий щит без відключення всього будинку?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">В більшості випадків — так. Ми заздалегідь проводимо обстеження об'єкта, після чого плануємо роботи поетапно або з мінімальним вікном відключення (зазвичай 2–4 години). Для квартир заміна щита зазвичай виконується за один день.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує монтаж ГРЩ або шафи АВР?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість монтажних робіт залежить від типу і розміру щита, кількості кабелів та складності підключень. Орієнтовно: монтаж квартирного щитка — від 3 000 грн; ГРЩ до 250 А — від 15 000 грн; шафа АВР — від 20 000 грн (без вартості обладнання). Точна ціна — після вивчення ТЗ.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка гарантія на монтаж електрощита?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Гарантія на монтажні роботи — 3 роки. Гарантія виробника на компоненти (автомати, УЗО, корпуси) — 5 років. При виникненні гарантійного випадку — безкоштовний виїзд інженера та усунення протягом 48 годин.</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta-band panel-cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО МОНТАЖ<br>ЩИТА ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Надішліть схему або опишіть об'єкт — підберемо оптимальне рішення та нададуть комерційну пропозицію протягом 24 годин.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-orange">Замовити монтаж</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section> 

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
