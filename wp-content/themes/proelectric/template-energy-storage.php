<?php
/*
  Template Name: Energy Storage UZE
*/
get_header();
?>

<!-- HERO -->
<section class="hero backup-hero">

    <!-- decorative SVG — battery / storage deco -->
    <div class="backup-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="uze-bg1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity="0"/>
                    <stop offset="35%"  stop-color="#2db551" stop-opacity=".45"/>
                    <stop offset="65%"  stop-color="#1a5fa8" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="uze-bg2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#2db551" stop-opacity="0"/>
                    <stop offset="50%"  stop-color="#2db551" stop-opacity=".3"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".15"/>
                </linearGradient>
            </defs>

            <!-- horizontal bus lines -->
            <line x1="0" y1="180" x2="1400" y2="180" stroke="url(#uze-bg1)" stroke-width="2.5"/>
            <line x1="0" y1="360" x2="1400" y2="360" stroke="url(#uze-bg1)" stroke-width="1.5"/>
            <line x1="0" y1="540" x2="1400" y2="540" stroke="url(#uze-bg1)" stroke-width="3"/>
            <line x1="0" y1="720" x2="1400" y2="720" stroke="url(#uze-bg1)" stroke-width="1.5"/>

            <!-- vertical feeders -->
            <line x1="220"  y1="0" x2="220"  y2="900" stroke="url(#uze-bg2)" stroke-width="1.5"/>
            <line x1="500"  y1="0" x2="500"  y2="900" stroke="url(#uze-bg2)" stroke-width="2.5"/>
            <line x1="780"  y1="0" x2="780"  y2="900" stroke="url(#uze-bg2)" stroke-width="1.5"/>
            <line x1="1060" y1="0" x2="1060" y2="900" stroke="url(#uze-bg2)" stroke-width="2"/>
            <line x1="1280" y1="0" x2="1280" y2="900" stroke="url(#uze-bg2)" stroke-width="1.5"/>

            <!-- battery rack symbols -->
            <rect x="180" y="140" width="90" height="60" rx="4" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
            <line x1="205" y1="140" x2="205" y2="200" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
            <line x1="225" y1="140" x2="225" y2="200" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
            <line x1="245" y1="140" x2="245" y2="200" stroke="rgba(45,181,81,.2)" stroke-width="1"/>

            <rect x="1020" y="500" width="90" height="60" rx="4" fill="rgba(26,95,168,.06)" stroke="rgba(26,95,168,.3)" stroke-width="1.5"/>
            <line x1="1045" y1="500" x2="1045" y2="560" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="1065" y1="500" x2="1065" y2="560" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="1085" y1="500" x2="1085" y2="560" stroke="rgba(26,95,168,.2)" stroke-width="1"/>

            <!-- charge / discharge nodes -->
            <circle cx="500" cy="360" r="10" fill="#2db551" opacity=".6"/>
            <path d="M497 355 l4-7 6 12 4-7" stroke="#0d1a2a" stroke-width="1.5" fill="none" stroke-linecap="round"/>
            <circle cx="780" cy="540" r="8" fill="#1a5fa8" opacity=".55"/>

            <!-- BESS label box -->
            <rect x="380" y="800" width="640" height="60" rx="2" fill="rgba(45,181,81,.04)" stroke="rgba(45,181,81,.12)" stroke-width="1.5"/>
            <line x1="400" y1="830" x2="1000" y2="830" stroke="rgba(45,181,81,.12)" stroke-width="1" stroke-dasharray="8 6"/>
            <text x="700" y="836" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(45,181,81,.3)" letter-spacing="3">УЗЕ · СИСТЕМИ НАКОПИЧЕННЯ ЕНЕРГІЇ</text>
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
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Установки зберігання електроенергії</a>
            </nav>
            <div class="hero-label">Накопичення та балансування енергії</div>
            <h1 class="hero-title">
                <span class="accent-green">УСТАНОВКИ</span><br>
                <span class="accent-blue">ЗБЕРІГАН</span><span class="accent-green">НЯ</span><br>ЕЛЕКТРОЕНЕРГІЇ
            </h1>
            <p class="hero-desc">Проєктуємо, постачаємо та монтуємо промислові й побутові системи накопичення енергії (BESS) на базі LiFePO4: від домашніх модулів до контейнерних установок мегаватного класу для СЕС, підприємств та мереж.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Розрахувати УЗЕ</a>
                <a href="#packages" class="btn btn-outline-white scroll-to-btn">Готові рішення</a>
            </div>
        </div>
    </div>

    <?php
        $stats = array(
            array(
                'stat_num' => '6000',
                'unit' => '+',
                'stat_label' => 'Циклів заряду LiFePO4'
            ), array(
                'stat_num' => '2',
                'unit' => ' МВт·год',
                'stat_label' => 'Найбільша УЗЕ'
            ), array(
                'stat_num' => '95',
                'unit' => ' %',
                'stat_label' => 'ККД системи'
            ), array(
                'stat_num' => '10',
                'unit' => ' р.',
                'stat_label' => 'Гарантія на батареї'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
    ?>

</section>


<!-- SYSTEMS -->
<section class="page-section" id="systems">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Що ми монтуємо</div>
            <h2 class="section-title">ТИПИ УСТАНОВОК ЗБЕРІГАННЯ ЕНЕРГІЇ</h2>
            <p class="section-sub">Підбираємо рішення під ваше завдання — резервування, зниження рахунків за електроенергію, максимальне самоспоживання СЕС або надання мережевих послуг.</p>
        </div>

        <div class="cables-methods-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm4">
                    <div class="cables-method-badge">Домашні системи</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="24" y="22" width="52" height="60" rx="4" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <rect x="30" y="30" width="40" height="8" rx="2" fill="rgba(45,181,81,.35)"/>
                        <rect x="30" y="42" width="40" height="8" rx="2" fill="rgba(45,181,81,.28)"/>
                        <rect x="30" y="54" width="40" height="8" rx="2" fill="rgba(26,95,168,.3)"/>
                        <rect x="30" y="66" width="24" height="8" rx="2" fill="rgba(45,181,81,.2)"/>
                        <text x="50" y="94" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">HOME BESS</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Побутові накопичувачі</div>
                    <p class="cables-method-desc">Настінні та підлогові LiFePO4-модулі для приватних будинків і квартир — живлення при відключеннях та накопичення надлишку СЕС.</p>
                    <ul class="cables-method-list">
                        <li>Ємність від 5 до 30 кВт·год</li>
                        <li>Настінний монтаж, компактні розміри</li>
                        <li>Інтеграція з гібридним інвертором</li>
                        <li>Робота при відключенні мережі (backup)</li>
                        <li>Deye, Huawei, BYD, Pylontech</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm3">
                    <div class="cables-method-badge">Комерція та промисловість</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="18" y="24" width="20" height="56" rx="3" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.4)" stroke-width="1.4"/>
                        <rect x="40" y="24" width="20" height="56" rx="3" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.4)" stroke-width="1.4"/>
                        <rect x="62" y="24" width="20" height="56" rx="3" fill="rgba(26,95,168,.08)" stroke="rgba(26,95,168,.35)" stroke-width="1.4"/>
                        <line x1="22" y1="34" x2="34" y2="34" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                        <line x1="44" y1="34" x2="56" y2="34" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                        <line x1="66" y1="34" x2="78" y2="34" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
                        <text x="50" y="94" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">C&amp;I BESS</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Промислові стійкові системи</div>
                    <p class="cables-method-desc">Батарейні шафи та стійки для підприємств, ОСББ та бізнес-центрів — зниження пікового навантаження та економія на тарифі.</p>
                    <ul class="cables-method-list">
                        <li>Ємність від 30 до 500 кВт·год</li>
                        <li>Peak shaving — зрізання пікових навантажень</li>
                        <li>Робота за зонним тарифом (арбітраж)</li>
                        <li>PCS-інвертори 30–250 кВт</li>
                        <li>CATL, BYD, Pylontech, Sunwoda</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm1">
                    <div class="cables-method-badge">Контейнерні УЗЕ</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="14" y="36" width="72" height="34" rx="3" fill="rgba(45,181,81,.07)" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <line x1="26" y1="36" x2="26" y2="70" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <line x1="38" y1="36" x2="38" y2="70" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <line x1="50" y1="36" x2="50" y2="70" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <line x1="62" y1="36" x2="62" y2="70" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <line x1="74" y1="36" x2="74" y2="70" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <rect x="30" y="26" width="8" height="6" rx="1" fill="rgba(45,181,81,.4)"/>
                        <rect x="62" y="26" width="8" height="6" rx="1" fill="rgba(26,95,168,.4)"/>
                        <text x="50" y="84" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">CONTAINER</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Контейнерні станції накопичення</div>
                    <p class="cables-method-desc">Готові контейнерні BESS «під ключ» з рідинним охолодженням, пожежогасінням та системою керування — від 500 кВт·год до кількох МВт·год.</p>
                    <ul class="cables-method-list">
                        <li>Модульна ємність — масштабування до МВт·год</li>
                        <li>Рідинне охолодження та термостабілізація</li>
                        <li>Аерозольне/газове пожежогасіння</li>
                        <li>EMS та диспетчеризація SCADA</li>
                        <li>Балансування мережі та частотні послуги</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm6">
                    <div class="cables-method-badge">Гібрид СЕС + УЗЕ</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="16" y="18" width="40" height="26" rx="2" fill="rgba(45,181,81,.08)" stroke="rgba(45,181,81,.35)" stroke-width="1.4"/>
                        <line x1="16" y1="27" x2="56" y2="27" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="16" y1="35" x2="56" y2="35" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="30" y1="18" x2="30" y2="44" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="43" y1="18" x2="43" y2="44" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <rect x="62" y="22" width="22" height="20" rx="2" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.35)" stroke-width="1.2"/>
                        <path d="M65 36 l5-8 5 8" stroke="rgba(26,95,168,.5)" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        <rect x="62" y="50" width="22" height="18" rx="2" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.3)" stroke-width="1.2"/>
                        <rect x="65" y="53" width="16" height="10" rx="1" fill="rgba(45,181,81,.28)"/>
                        <line x1="56" y1="31" x2="62" y2="31" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                        <line x1="73" y1="42" x2="73" y2="50" stroke="rgba(26,95,168,.35)" stroke-width="1.2"/>
                        <text x="50" y="90" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.35)" font-family="Montserrat,sans-serif" letter-spacing="1">СЕС + АКБ</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Гібридні системи з сонячними панелями</div>
                    <p class="cables-method-desc">Об'єднуємо СЕС, накопичувач та мережу — максимальне самоспоживання власної генерації та автономія при відключеннях.</p>
                    <ul class="cables-method-list">
                        <li>Накопичення надлишку СЕС на вечір/ніч</li>
                        <li>Пріоритет власної генерації над мережею</li>
                        <li>Гібридні інвертори з режимом backup</li>
                        <li>Розумне керування навантаженням</li>
                        <li>Моніторинг генерації та заряду онлайн</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm2">
                    <div class="cables-method-badge">Перетворення потужності</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="24" y="24" width="52" height="52" rx="4" fill="rgba(26,95,168,.08)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                        <path d="M34 50 h10 l4-12 4 24 4-12 h10" stroke="rgba(26,95,168,.6)" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        <line x1="10" y1="50" x2="24" y2="50" stroke="rgba(45,181,81,.5)" stroke-width="2"/>
                        <line x1="76" y1="50" x2="90" y2="50" stroke="rgba(26,95,168,.5)" stroke-width="2" stroke-dasharray="4 3"/>
                        <text x="50" y="90" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">PCS / INVERTER</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Системи перетворення (PCS)</div>
                    <p class="cables-method-desc">Двонаправлені інвертори PCS, що керують зарядом і розрядом батарей та синхронізацією з мережею.</p>
                    <ul class="cables-method-list">
                        <li>Потужність від 5 до 250 кВт</li>
                        <li>Двонаправлений заряд/розряд</li>
                        <li>On-grid, off-grid та backup режими</li>
                        <li>Синхронізація з мережею та генератором</li>
                        <li>Sungrow, Huawei, Victron, GoodWe</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb bpm5">
                    <div class="cables-method-badge">Керування та захист</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="22" y="22" width="56" height="56" rx="4" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                        <rect x="32" y="32" width="36" height="18" rx="2" fill="rgba(45,181,81,.12)" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <line x1="32" y1="58" x2="68" y2="58" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                        <line x1="32" y1="64" x2="60" y2="64" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <circle cx="64" cy="64" r="4" fill="#2db551"/>
                        <path d="M62.5 64 l1.2 1.2 2.3-2.3" stroke="white" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        <text x="50" y="90" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">BMS / EMS</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">BMS та системи керування енергією</div>
                    <p class="cables-method-desc">Інтелектуальне керування зарядом батарей, балансування комірок, захист та онлайн-моніторинг усієї установки.</p>
                    <ul class="cables-method-list">
                        <li>BMS: захист від перезаряду та перегріву</li>
                        <li>EMS: сценарії заряду/розряду за тарифом</li>
                        <li>Балансування комірок для довговічності</li>
                        <li>Диспетчеризація SCADA / Modbus / SNMP</li>
                        <li>Аварійні сповіщення та WEB-доступ</li>
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
                        <rect x="6" y="2" width="12" height="20" rx="2"/>
                        <line x1="10" y1="7" x2="14" y2="7"/>
                        <line x1="10" y1="11" x2="14" y2="11"/>
                        <line x1="10" y1="15" x2="12" y2="15"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">2<span> МВт·год</span></div>
                    <div class="cables-depth-lbl">Максимальна ємність<br>контейнерної УЗЕ</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">6000<span>+</span></div>
                    <div class="cables-depth-lbl">Циклів заряду<br>батарей LiFePO4</div>
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
                    <div class="cables-depth-num">&lt;20<span> мс</span></div>
                    <div class="cables-depth-lbl">Час переходу<br>у режим backup</div>
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
                    <div class="cables-depth-num">10<span> р.</span></div>
                    <div class="cables-depth-lbl">Гарантія та ресурс<br>батарейних модулів</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- COMPARISON TABLE -->
<section class="page-section page-section-bg2 compare-section" id="compare">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Порівняння технологій</div>
            <h2 class="section-title">УЗЕ vs ГЕНЕРАТОР vs ДБЖ</h2>
            <p class="section-sub">Об'єктивне порівняння рішень для резервного живлення — щоб ви обрали те, що справді вирішує ваше завдання.</p>
        </div>
        <div class="compare-wrap wf-animate">
            <table>
                <thead>
                    <tr>
                        <th>Параметр</th>
                        <th>🔋 УЗЕ / BESS <span class="cell-tag tag-led">Рекомендовано</span></th>
                        <th>⛽ Дизельний генератор</th>
                        <th>🔌 ДБЖ (UPS)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Час перемикання</td>
                        <td class="cell-good">&lt;20 мс — без розривів</td>
                        <td>10–30 секунд на запуск</td>
                        <td class="cell-good">0–4 мс</td>
                    </tr>
                    <tr>
                        <td>Тривалість автономії</td>
                        <td class="cell-good">Години — масштабується ємністю</td>
                        <td class="cell-good">Необмежено (поки є паливо)</td>
                        <td class="cell-mid">5–30 хвилин</td>
                    </tr>
                    <tr>
                        <td>Економія на тарифі</td>
                        <td class="cell-good">Так — заряд вночі, розряд у пік</td>
                        <td>Ні — дороге паливо</td>
                        <td>Ні</td>
                    </tr>
                    <tr>
                        <td>Вартість кВт·год резерву</td>
                        <td class="cell-good">Тариф мережі / СЕС</td>
                        <td>15–25 грн (дизель)</td>
                        <td class="cell-mid">Тариф мережі</td>
                    </tr>
                    <tr>
                        <td>Шум</td>
                        <td class="cell-good">Безшумна робота</td>
                        <td>70–100 дБ</td>
                        <td class="cell-good">до 45 дБ</td>
                    </tr>
                    <tr>
                        <td>Паливо та викиди</td>
                        <td class="cell-good">Немає</td>
                        <td>Дизель + вихлоп, запас палива</td>
                        <td class="cell-good">Немає</td>
                    </tr>
                    <tr>
                        <td>Інтеграція з СЕС</td>
                        <td class="cell-good">Так — накопичення генерації</td>
                        <td class="cell-mid">Обмежено</td>
                        <td>Ні</td>
                    </tr>
                    <tr>
                        <td>Обслуговування</td>
                        <td class="cell-good">Мінімальне — моніторинг онлайн</td>
                        <td>ТО кожні 250 мотогодин</td>
                        <td class="cell-mid">Заміна АКБ кожні 3–5 років</td>
                    </tr>
                    <tr>
                        <td>Ресурс</td>
                        <td class="cell-good">10–15 років (6000+ циклів)</td>
                        <td class="cell-good">15–20 років</td>
                        <td class="cell-mid">5–10 років</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="section-sub wf-animate" style="text-align:center;margin-top:28px">Оптимальне рішення для критичних об'єктів — комбінація: УЗЕ закриває миттєвий перехід та щоденну економію, генератор — тривалі відключення. Підберемо конфігурацію під ваш об'єкт.</p>
    </div>
</section>


<!-- EQUIPMENT -->
<section class="page-section page-section-bg-dark" id="equipment">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Обладнання та виробники</div>
            <h2 class="section-title">ОБЛАДНАННЯ ДЛЯ СИСТЕМ НАКОПИЧЕННЯ</h2>
            <p class="section-sub">Використовуємо лише сертифіковані батарейні модулі та інвертори від офіційних постачальників з гарантією та сервісом в Україні.</p>
        </div>

        <div class="cables-types-grid lg-grid-4-columns md-grid-2-columns gap-16 wf-animate-grid">

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="6" width="16" height="12" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <rect x="20" y="9" width="2" height="6" rx="1" fill="rgba(45,181,81,.5)"/>
                            <line x1="8" y1="9" x2="8" y2="15" stroke="rgba(45,181,81,.4)" stroke-width="1.2"/>
                            <line x1="12" y1="9" x2="12" y2="15" stroke="rgba(45,181,81,.35)" stroke-width="1.2"/>
                            <rect x="7" y="12" width="9" height="3" rx="1" fill="rgba(45,181,81,.4)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Батарейні модулі</div>
                    <div class="cable-type-badge">LiFePO4 / LFP</div>
                    <div class="cable-type-desc">Літій-залізо-фосфатні модулі з довгим ресурсом і високою безпекою для домашніх та промислових систем.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">CATL</span>
                        <span class="cable-spec">BYD</span>
                        <span class="cable-spec">Pylontech</span>
                        <span class="cable-spec">Deye</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="4" width="18" height="16" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <path d="M6 12 h3 l2-5 2 10 2-5 h3" stroke="rgba(26,95,168,.6)" stroke-width="1.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Гібридні інвертори</div>
                    <div class="cable-type-badge">5 – 50 кВт</div>
                    <div class="cable-type-desc">Однофазні та трифазні гібридні інвертори з режимом безперебійного живлення та інтеграцією СЕС.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Deye</span>
                        <span class="cable-spec">Huawei</span>
                        <span class="cable-spec">GoodWe</span>
                        <span class="cable-spec">Victron</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="6" width="18" height="12" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <line x1="8" y1="6" x2="8" y2="18" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                            <line x1="16" y1="6" x2="16" y2="18" stroke="rgba(45,181,81,.3)" stroke-width="1"/>
                            <path d="M12 9 l-2 3 h4 l-2 3" stroke="rgba(45,181,81,.6)" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Промислові PCS</div>
                    <div class="cable-type-badge">30 – 250 кВт</div>
                    <div class="cable-type-desc">Двонаправлені перетворювачі потужності для C&amp;I та контейнерних УЗЕ з мережевою синхронізацією.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Sungrow</span>
                        <span class="cable-spec">Huawei</span>
                        <span class="cable-spec">SMA</span>
                        <span class="cable-spec">Kehua</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="3" width="16" height="18" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <line x1="8" y1="8" x2="16" y2="8" stroke="rgba(26,95,168,.4)" stroke-width="1.2"/>
                            <line x1="8" y1="12" x2="16" y2="12" stroke="rgba(26,95,168,.35)" stroke-width="1.2"/>
                            <circle cx="16" cy="17" r="3" fill="#2db551"/>
                            <path d="M15 17 l1 1 2-2" stroke="white" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">BMS-контролери</div>
                    <div class="cable-type-badge">Battery Management</div>
                    <div class="cable-type-desc">Системи керування батареями з балансуванням комірок, захистом та телеметрією кожного модуля.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">CAN Bus</span>
                        <span class="cable-spec">RS485</span>
                        <span class="cable-spec">Active Balance</span>
                        <span class="cable-spec">IP54</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="8" width="18" height="10" rx="2" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <path d="M12 4 v4 M8 6 l4 2 4-2" stroke="rgba(45,181,81,.5)" stroke-width="1.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="8" cy="13" r="1.5" fill="rgba(45,181,81,.6)"/>
                            <circle cx="16" cy="13" r="1.5" fill="rgba(45,181,81,.4)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Система охолодження</div>
                    <div class="cable-type-badge">Liquid / Air Cooling</div>
                    <div class="cable-type-desc">Рідинне та повітряне охолодження для стабільної температури комірок і продовження ресурсу.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Liquid Cooling</span>
                        <span class="cable-spec">HVAC</span>
                        <span class="cable-spec">Термоконтроль</span>
                        <span class="cable-spec">−20…+55°C</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2s7 3 7 9c0 4-3 7-7 7s-7-3-7-7c0-6 7-9 7-9z" stroke="rgba(232,92,26,.6)" stroke-width="1.5" fill="none"/>
                            <path d="M12 9s3 1.5 3 4a3 3 0 0 1-6 0c0-2.5 3-4 3-4z" fill="rgba(232,92,26,.35)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Пожежогасіння</div>
                    <div class="cable-type-badge">Aerosol / Gas</div>
                    <div class="cable-type-desc">Автоматичні системи виявлення та гасіння займання для контейнерних і стійкових установок.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">Датчики диму</span>
                        <span class="cable-spec">Аерозоль</span>
                        <span class="cable-spec">Газ FM-200</span>
                        <span class="cable-spec">Сигналізація</span>
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
                            <path d="M6 12 l3-4 3 3 3-5 3 6" stroke="rgba(45,181,81,.6)" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">EMS та моніторинг</div>
                    <div class="cable-type-badge">Energy Management</div>
                    <div class="cable-type-desc">Програмне забезпечення для сценаріїв заряду/розряду, обліку та онлайн-контролю системи.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">SCADA</span>
                        <span class="cable-spec">Modbus TCP</span>
                        <span class="cable-spec">Cloud</span>
                        <span class="cable-spec">WEB / App</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="7" width="18" height="12" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5"/>
                            <path d="M7 7 V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" stroke="rgba(26,95,168,.4)" stroke-width="1.3" fill="none"/>
                            <rect x="7" y="11" width="4" height="4" rx="1" fill="rgba(45,181,81,.4)"/>
                            <rect x="13" y="11" width="4" height="4" rx="1" fill="rgba(26,95,168,.35)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Щити та розподіл</div>
                    <div class="cable-type-badge">DC / AC щити</div>
                    <div class="cable-type-desc">Комутаційне обладнання постійного та змінного струму, захисти та розподіл для УЗЕ.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">DC-запобіжники</span>
                        <span class="cable-spec">SPD</span>
                        <span class="cable-spec">ABB</span>
                        <span class="cable-spec">Schneider</span>
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
            <div class="section-label">Наш підхід</div>
            <h2 class="section-title">ЕНЕРГІЯ, ЯКА ПРАЦЮЄ НА ВАС</h2>
            <p class="section-sub">Установка зберігання — це не просто батареї, а інструмент економії та енергонезалежності, спроєктований під ваш профіль споживання.</p>
        </div>

        <div class="cables-split-inner wf-animate">
            <div class="cables-split-visual">
                <div class="cables-split-accent" style="background:radial-gradient(circle at 60% 40%, rgba(45,181,81,.18) 0%, transparent 70%)"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <!-- Solar source -->
                    <rect x="30" y="30" width="80" height="40" rx="3" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                    <text x="70" y="48" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.5)" font-family="Montserrat,sans-serif" letter-spacing="1">СЕС</text>
                    <text x="70" y="60" text-anchor="middle" font-size="8" fill="rgba(45,181,81,.7)" font-family="Bebas Neue,sans-serif" letter-spacing="2">ГЕНЕРАЦІЯ</text>

                    <!-- Grid source -->
                    <rect x="230" y="30" width="80" height="40" rx="3" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <text x="270" y="48" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.5)" font-family="Montserrat,sans-serif" letter-spacing="1">МЕРЕЖА</text>
                    <text x="270" y="60" text-anchor="middle" font-size="8" fill="rgba(26,95,168,.7)" font-family="Bebas Neue,sans-serif" letter-spacing="2">0,4 кВ</text>

                    <!-- PCS / Hybrid inverter -->
                    <rect x="105" y="110" width="130" height="70" rx="4" fill="rgba(26,95,168,.08)" stroke="rgba(26,95,168,.5)" stroke-width="2"/>
                    <text x="170" y="140" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="14" fill="rgba(26,95,168,.8)" letter-spacing="3">PCS · ІНВЕРТОР</text>
                    <path d="M140 158 h12 l4-10 4 20 4-10 h12" stroke="rgba(45,181,81,.6)" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>

                    <!-- Lines to PCS -->
                    <line x1="70"  y1="70" x2="70"  y2="95"  stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                    <line x1="70"  y1="95" x2="120" y2="110" stroke="rgba(45,181,81,.4)" stroke-width="1.5"/>
                    <line x1="270" y1="70" x2="270" y2="95"  stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                    <line x1="270" y1="95" x2="220" y2="110" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>

                    <!-- Battery rack -->
                    <rect x="95" y="220" width="150" height="70" rx="4" fill="rgba(45,181,81,.06)" stroke="rgba(45,181,81,.4)" stroke-width="1.8"/>
                    <rect x="105" y="230" width="130" height="12" rx="2" fill="rgba(45,181,81,.35)"/>
                    <rect x="105" y="246" width="130" height="12" rx="2" fill="rgba(45,181,81,.28)"/>
                    <rect x="105" y="262" width="130" height="12" rx="2" fill="rgba(26,95,168,.3)"/>
                    <rect x="105" y="278" width="90"  height="8"  rx="2" fill="rgba(45,181,81,.2)"/>
                    <text x="255" y="228" text-anchor="end" font-size="8" fill="rgba(45,181,81,.7)" font-family="Bebas Neue,sans-serif" letter-spacing="2">LiFePO₄</text>

                    <!-- Line PCS <-> battery -->
                    <line x1="170" y1="180" x2="170" y2="220" stroke="rgba(45,181,81,.4)" stroke-width="1.8"/>
                    <circle cx="170" cy="200" r="4" fill="rgba(45,181,81,.5)"/>

                    <!-- Load -->
                    <rect x="90" y="320" width="160" height="40" rx="3" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="170" y="338" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">Навантаження об'єкта</text>
                    <text x="170" y="352" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif">Дім · Бізнес · Виробництво</text>
                    <line x1="170" y1="290" x2="170" y2="320" stroke="rgba(45,181,81,.3)" stroke-width="1.5"/>
                </svg>
            </div>

            <div class="cables-split-content">
                <div class="section-label">Економіка та надійність</div>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">НАКОПИЧУЙТЕ<br>ТА ЕКОНОМТЕ</h2>
                <p class="section-sub">Кожна установка розраховується під ваш добовий профіль споживання, тариф і завдання — щоб окупитись і працювати роками.</p>

                <div class="cables-feat-list">
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <line x1="12" y1="1" x2="12" y2="23"/>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Економія на тарифі</div>
                            <div class="cables-feat-desc">Заряджаємо батареї вночі за дешевим тарифом і розряджаємо у пік — зниження рахунків за електроенергію та зрізання пікових навантажень (peak shaving).</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Безперебійне живлення</div>
                            <div class="cables-feat-desc">Автоматичний перехід у режим backup за &lt;20 мс при відключенні мережі. Критичні споживачі продовжують працювати без розривів.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M12 2v6M12 22v-2"/>
                                <circle cx="12" cy="14" r="6"/>
                                <path d="M9 14l2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Максимум від власної СЕС</div>
                            <div class="cables-feat-desc">Надлишок сонячної генерації зберігається у батареях і використовується ввечері — самоспоживання зростає до 80–90% замість продажу в мережу.</div>
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
                            <div class="cables-feat-title">Безпека та довговічність</div>
                            <div class="cables-feat-desc">Хімія LiFePO4 з високою термостабільністю, BMS-захист від перезаряду й перегріву, система пожежогасіння та термоконтролю в контейнерних УЗЕ.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PACKAGES -->
<section class="page-section" id="packages">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Готові рішення</div>
            <h2 class="section-title">ПАКЕТИ «ПІД КЛЮЧ»</h2>
            <p class="section-sub">Три перевірені комплектації для типових завдань — або збираємо індивідуально під ваш профіль споживання.</p>
        </div>
        <div class="pkg-grid wf-animate-grid d-grid md-grid-3-columns">

            <!-- Home -->
            <div class="pkg wf-animate">
                <div class="pkg-head">
                    <div class="pkg-name">Дім</div>
                    <div class="pkg-power">УЗЕ 10 кВт·год · Інвертор 8 кВт</div>
                    <div class="pkg-price">від 250 000</div>
                    <div class="pkg-price-note">грн · монтаж включено</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            АКБ LiFePO4 10 кВт·год (настінні модулі)
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Гібридний інвертор Deye 8 кВт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Backup-режим &lt;20 мс при відключенні
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Готовність до підключення СЕС
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Захисне обладнання та DC/AC щити
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Моніторинг у мобільному додатку
                        </li>
                    </ul>
                    <a href="#contact" class="btn btn-primary w-full-btn pkg-btn scroll-to-btn">Замовити розрахунок</a>
                </div>
            </div>

            <!-- Business (popular) -->
            <div class="pkg popular wf-animate">
                <div class="pkg-tag-popular">Найпопулярніший</div>
                <div class="pkg-head">
                    <div class="pkg-name">Бізнес</div>
                    <div class="pkg-power">УЗЕ 100 кВт·год · PCS 50 кВт</div>
                    <div class="pkg-price">від 1 900 000</div>
                    <div class="pkg-price-note">грн · монтаж та ПНР включено</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Батарейна шафа LiFePO4 100 кВт·год
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Двонаправлений PCS 50 кВт
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            EMS: заряд вночі — розряд у пік
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Peak shaving — зрізання пікових навантажень
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Резервування критичних споживачів
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            SCADA-моніторинг та розрахунок ROI
                        </li>
                    </ul>
                    <a href="#contact" class="btn btn-primary w-full-btn pkg-btn scroll-to-btn">Замовити розрахунок</a>
                </div>
            </div>

            <!-- Industrial -->
            <div class="pkg wf-animate">
                <div class="pkg-head">
                    <div class="pkg-name">Промислова</div>
                    <div class="pkg-power">Контейнерна УЗЕ від 500 кВт·год</div>
                    <div class="pkg-price">Індивідуально</div>
                    <div class="pkg-price-note">розрахунок під профіль споживання</div>
                </div>
                <div class="pkg-body">
                    <ul class="pkg-includes">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Контейнерна станція 500 кВт·год – 2+ МВт·год
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            PCS 100–250 кВт з мережевою синхронізацією
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Рідинне охолодження та термоконтроль
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Автоматичне пожежогасіння
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Інтеграція з СЕС та генератором
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Проєкт, узгодження, ПНР «під ключ»
                        </li>
                    </ul>
                    <a href="#contact" class="btn btn-primary w-full-btn pkg-btn scroll-to-btn">Отримати пропозицію</a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ROI BAND -->
<div class="cables-depth-band wf-animate" id="roi">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Приклад окупності</div>
            <h2 class="section-title">ЯК УЗЕ 100 кВт·год ЗАРОБЛЯЄ ДЛЯ БІЗНЕСУ</h2>
        </div>
        <div class="cables-depth-row wf-animate-grid lg-grid-4-columns md-grid-2-columns">
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">×0,5<span> тарифу</span></div>
                    <div class="cables-depth-lbl">Заряд батарей уночі<br>за зонним тарифом</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">×1,5<span> тарифу</span></div>
                    <div class="cables-depth-lbl">Розряд у пікові години<br>замість купівлі з мережі</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">до 40<span> %</span></div>
                    <div class="cables-depth-lbl">Зниження рахунків<br>за електроенергію</div>
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
                    <div class="cables-depth-num">3–5<span> р.</span></div>
                    <div class="cables-depth-lbl">Типова окупність<br>промислової УЗЕ</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- PROCESS -->
<section class="page-section page-section-bg-dark" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Як ми працюємо</div>
            <h2 class="section-title">ЕТАПИ ВСТАНОВЛЕННЯ УЗЕ</h2>
            <p class="section-sub">Від аналізу профілю споживання до пусконалагодження та навчання — повний цикл «під ключ».</p>
        </div>

        <div class="cables-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">01</div>
                    <div class="cables-proc-title">Аудит споживання та мети</div>
                    <p class="cables-proc-desc">Аналіз добового графіка навантаження, тарифу, наявної СЕС і завдання: резерв, економія чи максимальне самоспоживання</p>
                    <span class="cables-proc-tag">Виїзд безкоштовно</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">02</div>
                    <div class="cables-proc-title">Розрахунок та проєктування</div>
                    <p class="cables-proc-desc">Підбір ємності батарей та потужності інвертора, принципова схема, специфікація обладнання, кошторис і термін окупності</p>
                    <span class="cables-proc-tag">ROI-розрахунок</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">03</div>
                    <div class="cables-proc-title">Постачання обладнання</div>
                    <p class="cables-proc-desc">Закупівля сертифікованих батарейних модулів, інверторів та BMS від офіційних дистриб'юторів з гарантією</p>
                    <span class="cables-proc-tag">Сертифіковане обладнання</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">04</div>
                    <div class="cables-proc-title">Монтаж та підключення</div>
                    <p class="cables-proc-desc">Встановлення батарейних стійок/шаф, інвертора PCS, DC та AC щитів, прокладання силових кабелів та комунікацій BMS</p>
                    <span class="cables-proc-tag">Фото-звітність</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">05</div>
                    <div class="cables-proc-title">Пусконалагодження та EMS</div>
                    <p class="cables-proc-desc">Налаштування сценаріїв заряду/розряду, режимів backup, синхронізації з мережею та СЕС. Тестування під навантаженням</p>
                    <span class="cables-proc-tag">Протокол випробувань</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">06</div>
                    <div class="cables-proc-title">Здача та моніторинг</div>
                    <p class="cables-proc-desc">Передача документації, навчання персоналу, налаштування онлайн-моніторингу та сервісного супроводу</p>
                    <span class="cables-proc-tag">10 р. гарантія</span>
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
            <p class="section-sub">Від домашнього накопичувача до мегаватної контейнерної станції — реалізуємо УЗЕ будь-якого масштабу.</p>
        </div>

        <div class="cables-proj-strip projects-grid wf-animate-grid">
            <div class="project-card cables-proj-card featured wf-animate">
                <div class="project-tag cables-proj-tag">Промисловість</div>
                <div class="project-title cables-proj-title">Контейнерна УЗЕ 1 МВт·год для промислового підприємства</div>
                <p class="project-desc cables-proj-desc" style="max-width:360px">Контейнерна станція накопичення на базі LiFePO4 CATL з рідинним охолодженням та PCS Sungrow 500 кВт. Зрізання пікових навантажень та робота за зонним тарифом. Інтеграція з наявною СЕС 250 кВт. EMS-диспетчеризація та SCADA-моніторинг. Термін окупності — 4 роки.</p>
                <div class="project-meta cables-proj-meta">
                    <span class="cables-proj-mi">2024 / Дніпро</span>
                    <span class="cables-proj-mi">1 МВт·год</span>
                    <span class="cables-proj-mi">Термін 8 тижнів</span>
                </div>
                <div class="cables-proj-big">1 МВт·год</div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Бізнес-центр</div>
                <div class="project-title cables-proj-title">УЗЕ 200 кВт·год + PCS 100 кВт для БЦ</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Батарейні шафи Pylontech 200 кВт·год з гібридним PCS Huawei. Резервування ліфтів, серверної та освітлення. Автономія критичних споживачів — 4 години.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Київ</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">ОСББ</div>
                <div class="project-title cables-proj-title">Гібридна СЕС 50 кВт + УЗЕ 100 кВт·год</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Сонячні панелі на даху + накопичувач BYD LiFePO4. Живлення МЗК, ліфтів і насосів при відключеннях. Автономія — до 8 годин.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2023 / Львів</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Приватний будинок</div>
                <div class="project-title cables-proj-title">Домашня УЗЕ 20 кВт·год + гібридний інвертор Deye</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Настінні модулі LiFePO4 20 кВт·год + Deye 12 кВт. Повна автономія будинку при відключеннях, накопичення надлишку СЕС на вечір.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2024 / Київська обл.</span>
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
                <div class="cables-std-name">IEC 62619</div>
                <div class="cables-std-desc">Вимоги безпеки до вторинних літієвих елементів та батарей для промислового застосування</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="cables-std-name">IEC 62933</div>
                <div class="cables-std-desc">Стандарт для систем накопичення електроенергії (EES): планування, монтаж та безпека</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">UL 9540 / 9540A</div>
                <div class="cables-std-desc">Вимоги безпеки та випробування на теплове поширення для систем накопичення енергії</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="cables-std-name">ПУЕ / ДБН</div>
                <div class="cables-std-desc">Правила улаштування електроустановок та державні будівельні норми щодо підключення УЗЕ до мережі</div>
            </div>
        </div>
    </div>
</div>


<!-- SEO TEXT -->
<section class="page-section" id="about-uze">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Корисно знати</div>
            <h2 class="section-title">ВСТАНОВЛЕННЯ УСТАНОВОК ЗБЕРІГАННЯ ЕЛЕКТРОЕНЕРГІЇ В УКРАЇНІ</h2>
        </div>
        <div class="entry-content post-content wf-animate">
            <p>Установка зберігання електроенергії (УЗЕ, або BESS — Battery Energy Storage System) — це комплекс із літій-залізо-фосфатних акумуляторів, двонаправленого інвертора та системи керування, який накопичує електроенергію та віддає її тоді, коли це вигідно або необхідно. Встановлення УЗЕ вирішує одразу три завдання: резервне живлення при відключеннях, зниження витрат на електроенергію за рахунок зонного тарифу та максимальне використання власної сонячної генерації.</p>
            <p>Для приватного будинку накопичувач енергії ємністю 10–20 кВт·год із гібридним інвертором забезпечує повну автономію критичних споживачів на кілька годин та безшовний перехід у режим резерву за менш ніж 20 мілісекунд. Для бізнесу та промисловості системи накопичення від 100 кВт·год до кількох МВт·год дозволяють зрізати пікові навантаження (peak shaving), заряджатися вночі за зниженим тарифом і розряджатися у години пік — типова окупність такої системи становить 3–5 років.</p>
            <p>Компанія «Прогрес Електрик» виконує повний цикл робіт зі встановлення установок зберігання електроенергії: аудит профілю споживання, підбір ємності батарей і потужності інвертора, проєктування, постачання сертифікованого обладнання, монтаж, пусконалагодження та сервісний супровід. Працюємо з обладнанням CATL, BYD, Pylontech, Deye, Huawei та Sungrow по всій Україні. На батарейні модулі LiFePO4 надаємо гарантію до 10 років.</p>
        </div>
    </div>
</section>


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
                    Що таке УЗЕ і навіщо вона потрібна?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">УЗЕ (установка зберігання електроенергії, або BESS) — це система з акумуляторів, інвертора PCS та керування, що накопичує електроенергію і віддає її, коли потрібно. Вона забезпечує резервне живлення при відключеннях, економить на різниці тарифів (заряд вночі — розряд у пік) та дозволяє максимально використовувати власну сонячну генерацію замість продажу в мережу.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яку ємність накопичувача обрати?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Ємність підбирається за добовим споживанням і завданням. Для резерву критичних споживачів приватного будинку зазвичай достатньо 10–20 кВт·год. Для максимального самоспоживання СЕС — ємність під вечірнє навантаження. Для бізнесу з пікового зрізання рахуємо профіль потужності. Точний розрахунок робимо після аналізу графіка споживання — виїзд інженера безкоштовний.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки служать батареї LiFePO4?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Літій-залізо-фосфатні (LiFePO4) батареї витримують 6000+ циклів заряду-розряду при збереженні 80% ємності — це 10–15 років експлуатації при щоденному використанні. Вони безпечніші за інші літієві хімії завдяки високій термостабільності. На батарейні модулі надаємо гарантію до 10 років.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна додати УЗЕ до вже існуючої СЕС?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Якщо у вас вже є сонячна станція, накопичувач додається двома способами: заміною інвертора на гібридний або встановленням окремого AC-coupled модуля з батареями поруч із наявним інвертором. Ми проаналізуємо вашу конфігурацію та запропонуємо оптимальний варіант без переробки всієї станції.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує УЗЕ та коли вона окупиться?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість залежить від ємності та типу системи. Домашня УЗЕ 10 кВт·год з гібридним інвертором — від 250 000 грн. Промислова система з peak shaving окупається за 3–5 років за рахунок економії на тарифі та зниження пікової потужності. Точний термін окупності розраховуємо індивідуально під ваш тариф і профіль споживання.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи безпечні акумуляторні системи в приміщенні?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Ми використовуємо хімію LiFePO4 — найбезпечнішу серед літієвих завдяки стійкості до теплового розгону. Кожна система має BMS-захист від перезаряду, глибокого розряду та перегріву. Для промислових і контейнерних УЗЕ додатково встановлюємо термоконтроль, систему виявлення диму та автоматичне пожежогасіння. Монтаж виконується за нормами ПУЕ.</div>
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
                <div class="cta-band-title">РОЗРАХУЄМО УСТАНОВКУ<br>ЗБЕРІГАННЯ ЕНЕРГІЇ</div>
                <p class="cta-band-sub">Безкоштовний виїзд інженера та розрахунок терміну окупності. Оптимальне рішення з фіксованою ціною — протягом 2 робочих днів.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-primary">Замовити УЗЕ</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
