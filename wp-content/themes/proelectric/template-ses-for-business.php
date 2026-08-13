<?php 
/*
  Template Name: Ses for business
 */
get_header();
?>
<section class="hero hero-bg-svg hero-ses-for-business">
    <div class="hero-photo"></div>
    <!-- animated building + sun deco -->
    <div class="hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="hg1" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#1a5fa8" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity=".2"/>
                </linearGradient>
                <linearGradient id="hg2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#f5c518" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                </linearGradient>
            </defs>
            <!-- sun -->
            <circle cx="700" cy="80" r="100" fill="url(#hg2)" opacity=".4"/>
            <!-- factory / warehouse silhouette -->
            <rect x="100" y="500" width="1200" height="400" fill="rgba(255,255,255,.025)" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
            <rect x="200" y="420" width="300" height="480" fill="rgba(255,255,255,.02)" stroke="rgba(255,255,255,.04)" stroke-width="1"/>
            <rect x="900" y="440" width="250" height="460" fill="rgba(255,255,255,.02)" stroke="rgba(255,255,255,.04)" stroke-width="1"/>
            <!-- chimney / tower -->
            <rect x="480" y="280" width="30" height="220" fill="rgba(255,255,255,.04)"/>
            <rect x="890" y="310" width="30" height="190" fill="rgba(255,255,255,.04)"/>
            <!-- rooftop solar panels array -->
            <rect x="120" y="490" width="1160" height="14" rx="2" fill="rgba(26,95,168,.18)" stroke="rgba(26,95,168,.35)" stroke-width="1"/>
            <line x1="240" y1="490" x2="240" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="360" y1="490" x2="360" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="480" y1="490" x2="480" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="600" y1="490" x2="600" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="720" y1="490" x2="720" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="840" y1="490" x2="840" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="960" y1="490" x2="960" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="1080" y1="490" x2="1080" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <line x1="1200" y1="490" x2="1200" y2="504" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <!-- second panel row -->
            <rect x="120" y="470" width="1160" height="14" rx="2" fill="rgba(26,95,168,.12)" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
            <!-- energy lines -->
            <path d="M700 80 Q700 300 700 490" stroke="rgba(245,197,24,.15)" stroke-width="2" fill="none" stroke-dasharray="8 8"/>
            <path d="M400 80 Q400 300 350 490" stroke="rgba(245,197,24,.1)" stroke-width="1.5" fill="none" stroke-dasharray="6 8"/>
            <path d="M1000 80 Q1000 300 1050 490" stroke="rgba(245,197,24,.1)" stroke-width="1.5" fill="none" stroke-dasharray="6 8"/>
            <!-- ground energy flows -->
            <path d="M700 504 Q700 600 500 650" stroke="rgba(45,181,81,.2)" stroke-width="1.5" fill="none" stroke-dasharray="5 6"/>
            <path d="M700 504 Q700 600 900 650" stroke="rgba(45,181,81,.15)" stroke-width="1.5" fill="none" stroke-dasharray="5 6"/>
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
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">СЕС для бізнесу</a>
            </nav>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Сонячна енергетика', 'url' => home_url('/sonyachni-elektrostancziyi/') ),
                array( 'name' => 'СЕС для бізнесу', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Промислова сонячна енергетика</div>
            <h1 class="hero-title">
                <span class="accent-blue">СЕС</span> ДЛЯ<br><span class="accent-green">БІЗНЕСУ</span>
            </h1>
            <p class="hero-desc">Знижуємо витрати на електроенергію промислових підприємств, агрокомплексів, складів і комерційних об'єктів на 50–80%. Від 50 кВт до 10 МВт «під ключ».</p>
            <div class="hero-actions">
                <a href="#roi" class="btn btn-primary scroll-to-btn">Розрахувати економію</a>
                <a href="#segments" class="btn btn-white scroll-to-btn">Сегменти бізнесу</a>
            </div>
        </div>
        <?php 
            $stats = array(
                array(
                    'stat_num' => '50-80',
                    'unit' => '%',
                    'stat_label' => 'Зниження витрат<br>на електроенергію'
                ), array(
                    'stat_num' => '3-5',
                    'unit' => ' р.',
                    'stat_label' => 'Термін<br>окупності'
                ), array(
                    'stat_num' => '10',
                    'unit' => ' р.',
                    'stat_label' => 'Гарантія<br>на панелі'
                ), array(
                    'stat_num' => '20%',
                    'unit' => '+',
                    'stat_label' => 'Повернення<br>ПДВ'
                )
            );
            get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
        ?> 
    </div>
</section>
<section class="page-section" id="segments">
    <div class="container"> 
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Для якого бізнесу</h3>
            <h2 class="section-title">СЕГМЕНТИ БІЗНЕСУ</h2>
            <div class="section-sub">Підбираємо рішення під специфіку кожного бізнесу — потужність, схему підключення та фінансову модель.</div>
        </div>
        <div class="segments-nav wf-animate">
            <button class="tab seg-tab active" onclick="switchTab(0)">Виробництво</button>
            <button class="tab seg-tab" onclick="switchTab(1)">Агросектор</button>
            <button class="tab seg-tab" onclick="switchTab(2)">Комерційна нерухомість</button>
            <button class="tab seg-tab" onclick="switchTab(3)">Склади та логістика</button>
        </div>
        <div class="seg-panels wf-animate">
            <!-- Panel 0: Manufacturing -->
            <div class="tab-panel seg-panel active lg-grid-2-columns md-grid-1-columns">
                <div class="seg-info">
                    <div class="seg-title">Промислові підприємства</div>
                    <p class="seg-desc">Заводи, фабрики та виробничі підприємства — найбільші споживачі електроенергії. СЕС 200 кВт – 10 МВт суттєво знижує собівартість продукції та підвищує конкурентоспроможність.</p>
                    <div class="seg-kpis">
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">10 МВт</div>
                            <div class="seg-kpi-lbl">Максимальна потужність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">3–4 р.</div>
                            <div class="seg-kpi-lbl">Окупність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">80%</div>
                            <div class="seg-kpi-lbl">Покриття в сезон</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">20%</div>
                            <div class="seg-kpi-lbl">ПДВ повернення</div>
                        </div>
                    </div>
                </div>
                <div class="seg-visual sv1">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" style="position:relative;z-index:1">
                        <rect x="20" y="100" width="160" height="80" fill="rgba(255,255,255,.08)" stroke="rgba(255,255,255,.25)" stroke-width="1.5" rx="2"/>
                        <rect x="40" y="60" width="50" height="120" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        <rect x="110" y="70" width="50" height="110" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        <rect x="20" y="88" width="160" height="14" rx="1" fill="rgba(26,95,168,.35)" stroke="rgba(26,95,168,.5)" stroke-width="1"/>
                        <line x1="57" y1="88" x2="57" y2="102" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <line x1="96" y1="88" x2="96" y2="102" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <line x1="135" y1="88" x2="135" y2="102" stroke="rgba(26,95,168,.25)" stroke-width="1"/>
                        <rect x="40" y="50" width="8" height="50" fill="rgba(255,255,255,.08)"/>
                        <rect x="110" y="55" width="8" height="45" fill="rgba(255,255,255,.08)"/>
                        <circle cx="100" cy="30" r="22" fill="rgba(245,197,24,.2)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                        <path d="M100 14 L96 26 H101 L96 46 L110 24 H104 Z" fill="rgba(245,197,24,.8)"/>
                    </svg>
                </div>
            </div>
            <!-- Panel 1: Agriculture -->
            <div class="tab-panel seg-panel lg-grid-2-columns md-grid-1-columns">
                <div class="seg-info">
                    <div class="seg-title">Агросектор</div>
                    <p class="seg-desc">Фермерські господарства, зернові елеватори, молочно-товарні ферми та теплиці споживають величезну кількість електроенергії на зрошення, вентиляцію та заморожування. СЕС — найкращий захист від зростання тарифів.</p>
                    <div class="seg-kpis">
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">50–5 МВт</div>
                            <div class="seg-kpi-lbl">Діапазон потужностей</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">3–5 р.</div>
                            <div class="seg-kpi-lbl">Окупність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">100%</div>
                            <div class="seg-kpi-lbl">Покриття вдень</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">5× </div>
                            <div class="seg-kpi-lbl">ROI за 25 років</div>
                        </div>
                    </div>
                </div>
                <div class="seg-visual sv2">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" style="position:relative;z-index:1">
                        <ellipse cx="100" cy="150" rx="80" ry="15" fill="rgba(45,181,81,.15)"/>
                        <rect x="60" y="100" width="80" height="50" fill="rgba(255,255,255,.07)" stroke="rgba(255,255,255,.2)" stroke-width="1" rx="2"/>
                        <path d="M50 100 L100 65 L150 100" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                        <rect x="62" y="86" width="76" height="14" rx="1" fill="rgba(45,181,81,.25)" stroke="rgba(45,181,81,.45)" stroke-width="1"/>
                        <line x1="85" y1="86" x2="85" y2="100" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="108" y1="86" x2="108" y2="100" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <line x1="131" y1="86" x2="131" y2="100" stroke="rgba(45,181,81,.2)" stroke-width="1"/>
                        <circle cx="100" cy="30" r="25" fill="rgba(245,197,24,.2)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                        <path d="M100 12 L95 26 H101 L96 48 L112 22 H104.5 Z" fill="rgba(245,197,24,.85)"/>
                        <path d="M100 100 Q100 120 80 135" stroke="rgba(45,181,81,.3)" stroke-width="1.5" fill="none" stroke-dasharray="4 4"/>
                    </svg>
                </div>
            </div>
            <!-- Panel 2: Commercial real estate -->
            <div class="tab-panel seg-panel lg-grid-2-columns md-grid-1-columns">
                <div class="seg-info">
                    <div class="seg-title">Комерційна нерухомість</div>
                    <p class="seg-desc">Торгові центри, офісні будівлі, готелі та ресторани несуть значні витрати на кондиціонування та освітлення вдень — саме коли сонячна система генерує максимум. Ідеальний збіг профілів споживання і генерації.</p>
                    <div class="seg-kpis">
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">50–500 кВт</div>
                            <div class="seg-kpi-lbl">Типова потужність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">4–6 р.</div>
                            <div class="seg-kpi-lbl">Окупність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">70%</div>
                            <div class="seg-kpi-lbl">Зниження витрат</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">ESG</div>
                            <div class="seg-kpi-lbl">Зелений сертифікат</div>
                        </div>
                    </div>
                </div>
                <div class="seg-visual sv3">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" style="position:relative;z-index:1">
                        <rect x="50" y="60" width="100" height="120" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1.5" rx="2"/>
                        <rect x="60" y="72" width="18" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="82" y="72" width="18" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="104" y="72" width="18" height="14" rx="1" fill="rgba(45,181,81,.2)"/>
                        <rect x="126" y="72" width="14" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="60" y="94" width="18" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="82" y="94" width="18" height="14" rx="1" fill="rgba(26,95,168,.2)"/>
                        <rect x="104" y="94" width="18" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="126" y="94" width="14" height="14" rx="1" fill="rgba(255,255,255,.1)"/>
                        <rect x="50" y="48" width="100" height="14" rx="1" fill="rgba(239,195,24,.2)" stroke="rgba(245,197,24,.4)" stroke-width="1"/>
                        <line x1="75" y1="48" x2="75" y2="62" stroke="rgba(245,197,24,.2)" stroke-width="1"/>
                        <line x1="100" y1="48" x2="100" y2="62" stroke="rgba(245,197,24,.2)" stroke-width="1"/>
                        <line x1="125" y1="48" x2="125" y2="62" stroke="rgba(245,197,24,.2)" stroke-width="1"/>
                        <circle cx="100" cy="25" r="16" fill="rgba(245,197,24,.25)" stroke="rgba(245,197,24,.4)" stroke-width="1"/>
                        <path d="M100 13 L97 22 H101 L97.5 32 L107 18 H102 Z" fill="rgba(245,197,24,.9)"/>
                    </svg>
                </div>
            </div>
            <!-- Panel 3: Warehouses -->
            <div class="tab-panel seg-panel lg-grid-2-columns md-grid-1-columns">
                <div class="seg-info">
                    <div class="seg-title">Склади та логістика</div>
                    <p class="seg-desc">Логістичні центри та склади мають великі плоскі дахи з мінімальним затіненням — ідеальні для масштабних СЕС. Низьке споживання відносно площі дозволяє продавати надлишки за зеленим тарифом.</p>
                    <div class="seg-kpis">
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">100 кВт–2 МВт</div>
                            <div class="seg-kpi-lbl">Типова потужність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">3–4 р.</div>
                            <div class="seg-kpi-lbl">Окупність</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">1 м²=100 Вт</div>
                            <div class="seg-kpi-lbl">Встановлена питома</div>
                        </div>
                        <div class="seg-kpi">
                            <div class="seg-kpi-num">+15%</div>
                            <div class="seg-kpi-lbl">Вартість нерухомості</div>
                        </div>
                    </div>
                </div>
                <div class="seg-visual sv4">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" style="position:relative;z-index:1">
                        <rect x="20" y="110" width="160" height="60" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                        <path d="M15 110 L100 70 L185 110" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <!-- large panel array on flat roof -->
                        <rect x="22" y="97" width="156" height="12" rx="1" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.45)" stroke-width="1"/>
                        <line x1="55" y1="97" x2="55" y2="109" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="89" y1="97" x2="89" y2="109" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="123" y1="97" x2="123" y2="109" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <line x1="157" y1="97" x2="157" y2="109" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                        <rect x="22" y="83" width="156" height="12" rx="1" fill="rgba(26,95,168,.18)" stroke="rgba(26,95,168,.35)" stroke-width="1"/>
                        <rect x="75" y="130" width="50" height="40" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                        <circle cx="100" cy="40" r="22" fill="rgba(245,197,24,.2)" stroke="rgba(245,197,24,.35)" stroke-width="1.5"/>
                        <path d="M100 24 L96 36 H101 L97 52 L111 30 H104 Z" fill="rgba(245,197,24,.8)"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg-dark benefits-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Переваги для бізнесу</h3>
            <h2 class="section-title">ЧОМУ СЕС — ЦЕ ВИГІДНО</h2>
            <div class="section-sub">Сонячна електростанція — це не витрата, а інвестиція з прогнозованим і вимірюваним доходом.</div>
        </div>
        <div class="ben-grid wf-animate-grid lg-grid-3-columns md-grid-2-columns sm-grid-1-columns">
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 2L2 7v10l10 5 10-5V7l-10-5z"/>
                        <polyline points="2 7 12 12 22 7"/>
                        <line x1="12" y1="12" x2="12" y2="22"/>
                    </svg>
                </div>
                <div class="ben-title">Зниження собівартості продукції</div>
                <p class="ben-desc">Електроенергія — стаття витрат, яку СЕС перетворює на постійну статтю заощаджень. Для виробничих підприємств це пряме зниження собівартості і зростання маржі.</p>
            </div>
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="2" y="7" width="20" height="14" rx="2"/>
                        <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                        <line x1="12" y1="12" x2="12" y2="16"/>
                        <line x1="10" y1="14" x2="14" y2="14"/>
                    </svg>
                </div>
                <div class="ben-title">Повернення ПДВ 20%</div>
                <p class="ben-desc">Підприємства на загальній системі оподаткування повертають 20% ПДВ з вартості обладнання та монтажних робіт. Це суттєво скорочує фактичні інвестиції.</p>
            </div>
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div class="ben-title">Захист від зростання тарифів</div>
                <p class="ben-desc">Вартість електроенергії зростає щороку. Власна СЕС фіксує «вартість» електрики на рівні амортизаційних відрахувань — а це значно нижче, ніж ринковий тариф.</p>
            </div>
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>
                </div>
                <div class="ben-title">Продаж надлишків — «зелений тариф»</div>
                <p class="ben-desc">Надлишкова електроенергія в непрацюючий час продається в мережу за «зеленим тарифом». Додатковий дохід, який скорочує термін окупності.</p>
            </div>
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <div class="ben-title">ESG та зелена репутація</div>
                <p class="ben-desc">Власна генерація — це сертифікат «зеленого підприємства», що відкриває доступ до міжнародних ринків, партнерств та інвестицій від ESG-орієнтованих фондів.</p>
            </div>
            <div class="ben-card wf-animate">
                <div class="ben-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <div class="ben-title">Резервне живлення при відключеннях</div>
                <p class="ben-desc">Гібридна СЕС з акумуляторами забезпечує безперебійну роботу критичних виробничих ліній навіть під час планових та аварійних відключень мережі.</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section roi-section" id="roi">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Фінансова модель</h3>
            <h2 class="section-title">РОЗРАХУНОК ROI</h2>
            <div class="section-sub">Введіть параметри вашого підприємства — отримайте орієнтовну фінансову модель.</div>
        </div>
        <div class="roi-inner wf-animate lg-grid-2-columns md-grid-1-columns gap-0">
            <!-- Calculator -->
            <div class="calc-form roi-left">
                <div class="calc-form-title roi-title">Калькулятор окупності для бізнесу</div>
                <p class="calc-form-desc roi-desc">Вкажіть поточне споживання та отримайте розрахунок потужності СЕС, терміну окупності і прибутку за 25 років.</p>
                <div class="form-group calc-field">
                    <label>Щомісячне споживання електроенергії (кВт·год)</label>
                    <input type="number" id="b-kwh" value="50000" min="1000" placeholder="50 000"/>
                </div>
                <div class="form-row">
                    <div class="form-group calc-field">
                        <label>Тариф (грн/кВт·год)</label>
                        <input type="number" id="b-tariff" value="4.32" step="0.01" min="1"/>
                    </div>
                    <div class="form-group calc-field">
                        <label>Регіон</label>
                        <select id="b-region">
                            <option value="4.8">Південь</option>
                            <option value="4.5" selected>Центр</option>
                            <option value="4.2">Захід</option>
                            <option value="4.0">Північ</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group calc-field">
                        <label>Режим роботи</label>
                        <select id="b-mode">
                            <option value="1.0">Цілодобово</option>
                            <option value="0.8" selected>Денна зміна</option>
                            <option value="0.5">Неповна зміна</option>
                        </select>
                    </div>
                    <div class="form-group calc-field">
                        <label>Тип системи</label>
                        <select id="b-type">
                            <option value="0">Мережева (без АКБ)</option>
                            <option value="1">Гібридна (з АКБ)</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary w-full-btn roi-calc-btn" onclick="calcSesForBusiness()">Розрахувати ROI →</button>
                <div class="calc-result calc-results roi-rows" id="calc-res">
                    <div class="result-row"><span class="result-key">Рекомендована потужність</span><span class="result-val" id="b-pow">—</span></div>
                    <div class="result-row"><span class="result-key">Кількість панелей</span><span class="result-val" id="b-pnl">—</span></div>
                    <div class="result-row"><span class="result-key">Необхідна площа даху</span><span class="result-val" id="b-area">—</span></div>
                    <div class="result-row"><span class="result-key">Орієнтовна вартість СЕС</span><span class="result-val" id="b-cost">—</span></div>
                    <div class="result-row"><span class="result-key">Повернення ПДВ (20%)</span><span class="result-val green" id="b-vat">—</span></div>
                    <div class="result-row"><span class="result-key">Чисті інвестиції після ПДВ</span><span class="result-val" id="b-net">—</span></div>
                    <div class="result-row"><span class="result-key">Річна економія/дохід</span><span class="result-val green" id="b-save">—</span></div>
                    <div class="calc-result-strip result-total roi-result-strip" id="roi-strip">
                        <span class="cr-tl">Термін окупності</span>
                        <span class="cr-tv" id="b-back">—</span>
                    </div>
                    <p id="roi-note" style="display:none;font-size:11px;color:var(--muted);line-height:1.65;margin-top:12px">* Орієнтовний розрахунок. Для точної фінансової моделі — безкоштовна консультація інженера.</p>
                </div>
            </div>
            <!-- Static metrics -->
            <div class="roi-right">
                <div class="roi-metrics">
                    <div class="rm">
                        <div class="rm-num blue">3–5</div>
                        <div class="rm-label">Років — типова окупність для бізнесу</div>
                        <div class="rm-desc">Для підприємств з денним споживанням понад 50 000 кВт·год/міс окупність скорочується до 3 років завдяки поверненню ПДВ та зеленому тарифу.</div>
                    </div>
                    <div class="rm">
                        <div class="rm-num green">5×</div>
                        <div class="rm-label">Повернення інвестицій за 25 років</div>
                        <div class="rm-desc">Після окупності система генерує чистий прибуток. За 25 років загальна економія в 5 разів перевищує початкові інвестиції при поточних тарифах.</div>
                    </div>
                    <div class="rm">
                        <div class="rm-num blue">20%</div>
                        <div class="rm-label">ПДВ до повернення</div>
                        <div class="rm-desc">Підприємства — платники ПДВ повертають 20% від вартості обладнання та монтажу. Для системи 2 МВт це до 3 млн грн реальної економії.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми реалізуємо</h3>
            <h2 class="section-title">ПРОЦЕС РОБОТИ</h2>
            <div class="section-sub">Від першого контакту до введення в експлуатацію — повний супровід без зайвих кроків.</div>
        </div>
        <div class="process-inner wf-animate-grid lg-grid-6-columns md-grid-3-columns sm-grid-2-columns">
            <div class="pc wf-animate">
                <div class="pc-num">01</div>
                <div class="pc-title">Технічний аудит</div>
                <p class="pc-desc">Виїзд інженера, аналіз споживання, огляд даху та технічної інфраструктури підприємства</p>
            </div>
            <div class="pc wf-animate">
                <div class="pc-num">02</div>
                <div class="pc-title">Фінансова модель</div>
                <p class="pc-desc">Детальний розрахунок ROI, окупності, ПДВ, зеленого тарифу та порівняння варіантів фінансування</p>
            </div>
            <div class="pc wf-animate">
                <div class="pc-num">03</div>
                <div class="pc-title">Проект та ТЗ</div>
                <p class="pc-desc">Розробка технічного проекту, специфікації обладнання, погодження з мережевою компанією</p>
            </div>
            <div class="pc wf-animate">
                <div class="pc-num">04</div>
                <div class="pc-title">Монтаж</div>
                <p class="pc-desc">Встановлення панелей, інверторів, захисного обладнання. Без зупинки виробництва</p>
            </div>
            <div class="pc wf-animate">
                <div class="pc-num">05</div>
                <div class="pc-title">Підключення</div>
                <p class="pc-desc">Підключення до мережі підприємства та зовнішньої мережі, налаштування моніторингу</p>
            </div>
            <div class="pc wf-animate">
                <div class="pc-num">06</div>
                <div class="pc-title">Здача та сервіс</div>
                <p class="pc-desc">Пуск, навчання персоналу, оформлення зеленого тарифу, гарантійний супровід 5 років</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-white sectors-strip">
    <div class="container">
        <div class="sectors-label text-center mb-5 wf-animate">Ми вже реалізували проекти для цих секторів</div>
        <div class="sectors-row flex-lg-nowrap flex-wrap wf-animate-grid">
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🏭</div>
                <div class="sector-name">Промисло&shy;вість</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🌾</div>
                <div class="sector-name">Агро&shy;комплекси</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🏢</div>
                <div class="sector-name">Офісні центри</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🛒</div>
                <div class="sector-name">Торгові центри</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🏨</div>
                <div class="sector-name">Готелі та HoReCa</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">📦</div>
                <div class="sector-name">Склади та логістика</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">⚕️</div>
                <div class="sector-name">Медичні заклади</div>
            </div>
            <div class="sector-cell wf-animate">
                <div class="sector-icon">🎓</div>
                <div class="sector-name">Освіта та держсектор</div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg2" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Реалізовані об'єкти</h3>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
            <div class="section-sub">Від 50 кВт для малого бізнесу до 10 МВт промислового масштабу.</div>
        </div>
        <div class="projects-grid wf-animate-grid">
            <div class="project-card featured wf-animate">
            <div class="project-tag">Промислова СЕС</div>
            <div class="project-title">Агрокомплекс «Зернопром» — 2 МВт</div>
            <p class="project-desc" style="max-width:340px;line-height:1.85;margin-top:4px">Мережева СЕС 2 МВт для зернового елеватора. 4 400 панелей LONGi Hi-MO6, 4 інвертори Huawei SUN2000 500K. Річна генерація 2 480 МВт·год. Економія 10.7 млн грн/рік.</p>
            <div class="project-power">2 МВт</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Виробництво</div>
            <div class="project-title">Завод металоконструкцій — 500 кВт</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Гібридна СЕС 500 кВт + АКБ 200 кВт·год. Безперебійна робота під час відключень.</p>
            <div class="project-power">500 кВт</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Комерція</div>
            <div class="project-title">Торговий центр — 300 кВт</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Покриття 65% денного споживання кондиціонування та освітлення ТЦ. Окупність 4.5 р.</p>
            <div class="project-power">300 кВт</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Логістика</div>
            <div class="project-title">Логістичний центр — 1.2 МВт</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Плоский дах 8 000 м². Зелений тариф — продаж надлишків 40% генерації. Сертифікат LEED.</p>
            <div class="project-power">1.2 МВт</div>
        </div>
    </div>
</section>
<section class="page-section faq-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як повернути ПДВ з вартості СЕС?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Підприємства — платники ПДВ включають ПДВ з вартості обладнання та монтажних робіт до податкового кредиту і повертають його у звичайному порядку через декларацію. Ми надаємо всі необхідні первинні документи та накладні для бухгалтерії.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна встановити СЕС у кредит або лізинг?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так. Ми співпрацюємо з банками (Укргазбанк, ПУМБ, OTP Bank), що надають пільгові кредити на сонячну енергетику. Також доступний фінансовий лізинг — щомісячні лізингові платежі перекриваються щомісячною економією від першого місяця.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка мінімальна потужність для бізнесу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для бізнесу розглядаємо проекти від 30 кВт. Але для вигідної окупності рекомендуємо від 50 кВт. Для підприємств з потужністю понад 500 кВт потрібне погодження технічних умов підключення з обленерго.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Що входить у «зелений тариф» для бізнесу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Зелений тариф для юридичних осіб передбачає продаж всієї або надлишкової генерації за фіксованою ціною, що залежить від потужності установки та дати підключення. Станом на 2025 рік тариф для комерційних СЕС — 0.05–0.15 €/кВт·год залежно від умов договору.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які програми фінансування доступні для бізнесу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Доступні кілька варіантів: власні накопичення бізнесу, пільгові кредити Укргазбанку та Ощадбанку для бізнесу (ставки 3–7%), програма «Теплі кредити» (держкомпенсація до 35% вартості), а також грантові програми для бізнесу від ЄС та USAID. Ми допоможемо вибрати та оформити найвигідніший варіант.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як обслуговується система після встановлення?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Перший рік технічне обслуговування включено в ціну — один виїзд для профілактичного огляду. Далі — сервісний договір (необов'язковий). Система дистанційно моніторується через хмару, при аномаліях — ми отримуємо сповіщення першими і зв'язуємося з вами. Для бізнесу можна запропонувати повний пакет послуг: монтаж, сервіс, продаж надлишкової енергії за зеленим тарифом.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate cta-band-bg-green">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ГОТОВІ ЗНИЗИТИ ВИТРАТИ<br>ВАШОГО БІЗНЕСУ?</div>
                <p class="cta-band-sub">Безкоштовна консультація інженера та фінансова модель з повним розрахунком ROI, ПДВ і зеленого тарифу.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="#contact" class="btn btn-white scroll-to-btn">Замовити консультацію</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white scroll-to-btn">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();