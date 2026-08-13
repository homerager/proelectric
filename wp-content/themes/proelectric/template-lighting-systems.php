<?php 
/*
  Template Name: Lighting systems
 */
get_header();
?>

<section class="hero lighting-hero">
    <div class="hero-photo"></div>
    <div class="hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <radialGradient id="lamp1" cx="50%" cy="0%" r="100%">
                    <stop offset="0%" stop-color="#f5c518" stop-opacity=".55"/>
                    <stop offset="60%" stop-color="#f5c518" stop-opacity=".08"/>
                    <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                </radialGradient>
                <radialGradient id="lamp2" cx="50%" cy="0%" r="100%">
                    <stop offset="0%" stop-color="#1a5fa8" stop-opacity=".3"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </radialGradient>
                <radialGradient id="lamp3" cx="50%" cy="0%" r="100%">
                    <stop offset="0%" stop-color="#2db551" stop-opacity=".25"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity="0"/>
                </radialGradient>
            </defs>
            <ellipse cx="700" cy="0" rx="380" ry="600" fill="url(#lamp1)" opacity=".7"/>
            <ellipse cx="200" cy="0" rx="220" ry="400" fill="url(#lamp2)" opacity=".5"/>
            <ellipse cx="1200" cy="0" rx="220" ry="380" fill="url(#lamp3)" opacity=".4"/>
            <line x1="700" y1="0" x2="700" y2="68" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
            <ellipse cx="700" cy="72" rx="28" ry="10" fill="rgba(255,255,255,.08)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
            <path d="M672 72 Q672 110 680 120 Q690 130 700 132 Q710 130 720 120 Q728 110 728 72 Z" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
            <circle cx="700" cy="102" r="8" fill="rgba(245,197,24,.5)"/>
            <circle cx="700" cy="102" r="4" fill="rgba(245,197,24,.9)"/>
            <line x1="100" y1="0" x2="100" y2="220" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
            <rect x="82" y="220" width="36" height="24" rx="2" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
            <circle cx="100" cy="232" r="5" fill="rgba(26,95,168,.6)"/>
            <line x1="1300" y1="0" x2="1300" y2="240" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
            <rect x="1282" y="240" width="36" height="24" rx="2" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
            <circle cx="1300" cy="252" r="5" fill="rgba(45,181,81,.6)"/>
            <path d="M600 132 Q550 500 400 700" stroke="rgba(245,197,24,.06)" stroke-width="120" stroke-linecap="round"/>
            <path d="M800 132 Q850 500 1000 700" stroke="rgba(245,197,24,.06)" stroke-width="120" stroke-linecap="round"/>
            <path d="M700 132 Q700 500 700 750" stroke="rgba(245,197,24,.08)" stroke-width="180" stroke-linecap="round"/>
            <circle cx="350" cy="20" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="500" cy="20" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="700" cy="20" r="6" fill="rgba(245,197,24,.7)"/>
            <circle cx="900" cy="20" r="4" fill="rgba(255,255,255,.25)"/>
            <circle cx="1050" cy="20" r="4" fill="rgba(255,255,255,.25)"/>
            <line x1="300" y1="20" x2="1100" y2="20" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
            <ellipse cx="700" cy="850" rx="500" ry="60" fill="rgba(245,197,24,.04)"/>
        </svg>
    </div>
    <div class="hero-tint"></div>
    <div class="container">
        <div class="hero-content hero-content-center">
            <div class="breadcrumb">
                <a href="<?= home_url('/') ?>">Головна</a><span>›</span>
                <a href="<?= home_url('/elektrychni-roboty/') ?>">Електромонтаж</a><span>›</span>
                <span>Системи освітлення</span>
            </div>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Електромонтаж', 'url' => home_url('/elektrychni-roboty/') ),
                array( 'name' => 'Системи освітлення', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Проектування · Монтаж · Автоматизація</div>
            <h1 class="hero-title">
                <span class="accent-gold">СИСТЕМИ</span><br>
                <span class="accent-blue">ОСВ</span><span class="accent-green">ІТЛЕННЯ</span>
            </h1>
            <p class="hero-desc">Проєктуємо і монтуємо LED-системи освітлення для промислових, комерційних та житлових об'єктів. Економія електроенергії до 70% порівняно з традиційними рішеннями.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити проект освітлення</a>
                <a href="#types" class="btn btn-white scroll-to-btn">Типи систем</a>
            </div>
        </div>
    </div>
    <?php
        $stats = array(
            array(
                'stat_num' => '70',
                'unit'      => '%',
                'stat_label' => 'Економія електроенергії'
            ), array(
                'stat_num' => '50 000',
                'unit'      => ' г',
                'stat_label' => 'Ресурс LED світильника'
            ), array(
                'stat_num' => '3–4',
                'unit'      => ' р.',
                'stat_label' => 'Окупність LED-заміни'
            ), array(
                'stat_num' => '200',
                'unit'      => '+',
                'stat_label' => 'Об\'єктів освітлено'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats));
    ?>
</section>

<!-- TYPES -->
<section class="page-section page-section-types" id="types">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що ми монтуємо</h3>
            <h2 class="section-title">ТИПИ СИСТЕМ ОСВІТЛЕННЯ</h2>
            <p class="section-sub">Від базового робочого освітлення до інтелектуальних керованих систем — підбираємо під задачі конкретного об'єкта.</p>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns types-grid">

            <div class="type-card wf-animate">
                <div class="type-card-thumb industrial">
                    <div class="type-card-badge">Промислове</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <rect x="15" y="30" width="60" height="18" rx="3" fill="rgba(245,197,24,.2)" stroke="rgba(245,197,24,.5)" stroke-width="1.5"/>
                            <path d="M25 48 Q25 72 20 75 L70 75 Q65 72 65 48" fill="rgba(245,197,24,.08)" stroke="rgba(245,197,24,.25)" stroke-width="1"/>
                            <circle cx="45" cy="39" r="5" fill="rgba(245,197,24,.8)"/>
                            <line x1="45" y1="10" x2="45" y2="30" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                            <ellipse cx="45" cy="72" rx="24" ry="5" fill="rgba(245,197,24,.12)"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Промислове освітлення</div>
                    <div class="type-card-desc">Потужні LED-світильники для заводів, складів, виробничих цехів та великих критих об'єктів з висотою стелі від 6 м.</div>
                    <ul class="type-card-list">
                        <li>High-bay світильники 100–500 Вт</li>
                        <li>Ступінь захисту IP65–IP67</li>
                        <li>Температура кольору 4000–6500 К</li>
                        <li>Антибліковий захист для робочих зон</li>
                    </ul>
                </div>
            </div>

            <div class="type-card wf-animate">
                <div class="type-card-thumb office">
                    <div class="type-card-badge">Офісне</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <rect x="10" y="28" width="70" height="12" rx="2" fill="rgba(255,255,255,.1)" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                            <rect x="18" y="30" width="14" height="8" rx="1" fill="rgba(245,197,24,.5)"/>
                            <rect x="36" y="30" width="14" height="8" rx="1" fill="rgba(245,197,24,.5)"/>
                            <rect x="54" y="30" width="14" height="8" rx="1" fill="rgba(245,197,24,.5)"/>
                            <rect x="18" y="48" width="54" height="30" rx="2" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
                            <rect x="22" y="52" width="20" height="14" rx="1" fill="rgba(255,255,255,.06)"/>
                            <rect x="46" y="52" width="20" height="14" rx="1" fill="rgba(255,255,255,.06)"/>
                            <ellipse cx="45" cy="72" rx="20" ry="4" fill="rgba(245,197,24,.1)"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Офісне та комерційне</div>
                    <div class="type-card-desc">Комфортне LED-освітлення офісів, торгових залів, готелів та ресторанів з урахуванням ергономіки та дизайну.</div>
                    <ul class="type-card-list">
                        <li>Вбудовані та накладні панелі</li>
                        <li>Регулювання яскравості (dimmer)</li>
                        <li>CCT-регуляція температури кольору</li>
                        <li>Відповідність нормам EN 12464-1</li>
                    </ul>
                </div>
            </div>

            <div class="type-card wf-animate">
                <div class="type-card-thumb street">
                    <div class="type-card-badge">Вуличне</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <line x1="45" y1="12" x2="45" y2="55" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                            <path d="M45 12 Q55 12 60 22" stroke="rgba(255,255,255,.2)" stroke-width="2" fill="none"/>
                            <rect x="52" y="19" width="20" height="8" rx="2" fill="rgba(245,197,24,.35)" stroke="rgba(245,197,24,.6)" stroke-width="1"/>
                            <ellipse cx="62" cy="38" rx="18" ry="5" fill="rgba(245,197,24,.1)"/>
                            <circle cx="45" cy="70" r="8" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                            <line x1="45" y1="55" x2="45" y2="62" stroke="rgba(255,255,255,.15)" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Вуличне та дорожнє</div>
                    <div class="type-card-desc">Опори, ліхтарі, дорожнє освітлення та підсвічування парків, дворів, паркінгів і пішохідних зон.</div>
                    <ul class="type-card-list">
                        <li>Консольні LED-світильники 30–200 Вт</li>
                        <li>IP65–IP67, IK10 антивандальний</li>
                        <li>Датчик руху та фотоелемент</li>
                        <li>Диммування за DALI / 0-10V</li>
                    </ul>
                </div>
            </div>

            <div class="type-card wf-animate">
                <div class="type-card-thumb architectural">
                    <div class="type-card-badge">Архітектурне</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <rect x="20" y="40" width="50" height="35" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.12)" stroke-width="1" rx="2"/>
                            <path d="M15 40 L45 18 L75 40" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                            <path d="M22 75 Q22 55 28 50" stroke="rgba(245,197,24,.4)" stroke-width="2" fill="none"/>
                            <path d="M45 75 Q45 50 45 42" stroke="rgba(45,181,81,.4)" stroke-width="2" fill="none"/>
                            <path d="M68 75 Q68 55 62 50" stroke="rgba(26,95,168,.4)" stroke-width="2" fill="none"/>
                            <circle cx="22" cy="76" r="3" fill="rgba(245,197,24,.7)"/>
                            <circle cx="45" cy="76" r="3" fill="rgba(45,181,81,.7)"/>
                            <circle cx="68" cy="76" r="3" fill="rgba(26,95,168,.7)"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Архітектурне підсвічування</div>
                    <div class="type-card-desc">Декоративне підсвічування фасадів, пам'ятників, парків, фонтанів та громадських просторів у нічний час.</div>
                    <ul class="type-card-list">
                        <li>RGB та RGBW прожектори</li>
                        <li>Динамічні сценарії через DMX/RDM</li>
                        <li>Вбудоване і виносне живлення</li>
                        <li>Управління з мобільного телефону</li>
                    </ul>
                </div>
            </div>

            <div class="type-card wf-animate">
                <div class="type-card-thumb emergency">
                    <div class="type-card-badge">Аварійне</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <path d="M45 20 L25 55 H40 L35 70 L58 35 H44 Z" fill="rgba(245,197,24,.7)"/>
                            <rect x="20" y="72" width="50" height="8" rx="1" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                            <circle cx="30" cy="76" r="2.5" fill="rgba(45,181,81,.8)"/>
                            <circle cx="40" cy="76" r="2.5" fill="rgba(45,181,81,.8)"/>
                            <circle cx="50" cy="76" r="2.5" fill="rgba(255,100,50,.7)"/>
                            <circle cx="60" cy="76" r="2.5" fill="rgba(45,181,81,.8)"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Аварійне та евакуаційне</div>
                    <div class="type-card-desc">Аварійні світильники та знаки евакуації для громадських будівель, торгових центрів та промислових об'єктів.</div>
                    <ul class="type-card-list">
                        <li>Автономна робота 1–3 години</li>
                        <li>Вбудований акумулятор NiMH/Li</li>
                        <li>Автоматичне тестування (САМТ)</li>
                        <li>Відповідність EN 60598-2-22</li>
                    </ul>
                </div>
            </div>

            <div class="type-card wf-animate">
                <div class="type-card-thumb smart">
                    <div class="type-card-badge">Розумне</div>
                    <div class="type-card-thumb-icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                            <circle cx="45" cy="38" r="22" stroke="rgba(255,255,255,.15)" stroke-width="1" fill="none"/>
                            <circle cx="45" cy="38" r="14" fill="rgba(245,197,24,.15)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                            <circle cx="45" cy="38" r="6" fill="rgba(245,197,24,.7)"/>
                            <path d="M30 28 Q37 20 45 18 Q53 20 60 28" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none"/>
                            <path d="M35 33 Q40 26 45 24 Q50 26 55 33" stroke="rgba(26,95,168,.4)" stroke-width="1.5" fill="none"/>
                            <line x1="45" y1="60" x2="45" y2="72" stroke="rgba(255,255,255,.15)" stroke-width="1.5"/>
                            <rect x="30" y="72" width="30" height="8" rx="2" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        </svg>
                    </div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">Розумне освітлення (Smart)</div>
                    <div class="type-card-desc">Інтелектуальне освітлення з датчиками, таймерами та дистанційним управлінням через смартфон або SCADA-систему.</div>
                    <ul class="type-card-list">
                        <li>Протоколи KNX, DALI, Zigbee, Wi-Fi</li>
                        <li>Датчики присутності та освітленості</li>
                        <li>Інтеграція з Alhambra, Loxone, Ajax</li>
                        <li>Економія до 40% додатково до LED</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SAVINGS BAND -->
<div class="savings-band wf-animate">
    <div class="container">
        <div class="savings-band-row">
            <div class="sb-item">
                <div class="sb-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <div>
                    <div class="sb-num">70<span>%</span></div>
                    <div class="sb-label">Економія порівняно<br>з люмінесцентними лампами</div>
                </div>
            </div>
            <div class="sb-item">
                <div class="sb-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <div class="sb-num">50 000<span> г</span></div>
                    <div class="sb-label">Ресурс якісного<br>LED-світильника</div>
                </div>
            </div>
            <div class="sb-item">
                <div class="sb-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <div>
                    <div class="sb-num">3–4<span> р.</span></div>
                    <div class="sb-label">Термін окупності<br>LED-реконструкції</div>
                </div>
            </div>
            <div class="sb-item">
                <div class="sb-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <div class="sb-num">0<span> UV</span></div>
                    <div class="sb-label">Ультрафіолетове<br>та ІЧ-випромінювання</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LED TECH -->
<section class="page-section page-section-bg-dark" id="led">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label section-label-gold">Технологія</h3>
            <h2 class="section-title">ЧОМУ СВІТЛОДІОДНЕ ОСВІТЛЕННЯ</h2>
            <p class="section-sub">LED — це не просто «нова лампочка». Це принципово інша технологія з іншими характеристиками, ресурсом і можливостями управління.</p>
        </div>
        <div class="tech-inner wf-animate-grid d-grid md-grid-2-columns">

            <div class="tech-diagram wf-animate">
                <svg width="400" height="360" viewBox="0 0 400 360" fill="none">
                    <defs>
                        <linearGradient id="tg1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#f5c518" stop-opacity=".7"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".4"/>
                        </linearGradient>
                        <radialGradient id="tg2" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#f5c518" stop-opacity=".8"/>
                            <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                        </radialGradient>
                    </defs>
                    <circle cx="200" cy="150" r="110" fill="none" stroke="rgba(255,255,255,.06)" stroke-width="24"/>
                    <circle cx="200" cy="150" r="110" fill="none" stroke="url(#tg1)" stroke-width="24" stroke-dasharray="654 32" stroke-dashoffset="0" transform="rotate(-90 200 150)"/>
                    <circle cx="200" cy="150" r="110" fill="none" stroke="rgba(255,255,255,.08)" stroke-width="24" stroke-dasharray="32 654" stroke-dashoffset="-654" transform="rotate(-90 200 150)"/>
                    <circle cx="200" cy="150" r="60" fill="url(#tg2)" opacity=".3"/>
                    <circle cx="200" cy="150" r="30" fill="rgba(245,197,24,.2)"/>
                    <text x="200" y="144" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="28" fill="rgba(245,197,24,.9)" letter-spacing="1">95%</text>
                    <text x="200" y="164" text-anchor="middle" font-family="Montserrat,sans-serif" font-size="9" fill="rgba(255,255,255,.5)" letter-spacing="1">КОРИСНЕ СВІТЛО</text>
                    <rect x="80" y="292" width="14" height="14" rx="2" fill="url(#tg1)"/>
                    <text x="100" y="303" font-family="Montserrat,sans-serif" font-size="11" fill="rgba(255,255,255,.6)">LED — 95% у світло</text>
                    <rect x="230" y="292" width="14" height="14" rx="2" fill="rgba(255,255,255,.15)"/>
                    <text x="250" y="303" font-family="Montserrat,sans-serif" font-size="11" fill="rgba(255,255,255,.4)">Тепло — 5%</text>
                    <text x="200" y="340" text-anchor="middle" font-family="Montserrat,sans-serif" font-size="10" fill="rgba(255,255,255,.3)">Традиційна лампа: 5% у світло, 95% у тепло</text>
                </svg>
            </div>

            <div class="tech-list wf-animate">
                <div class="tl-item">
                    <div class="tl-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <div>
                        <div class="tl-title">Ефективність 150–220 лм/Вт</div>
                        <div class="tl-desc">Сучасні LED-джерела виробляють у 8–10 разів більше світла на ват, ніж лампи розжарювання. Навіть порівняно з люмінесцентними — у 2–3 рази ефективніші.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div>
                        <div class="tl-title">Ресурс 50 000–100 000 годин</div>
                        <div class="tl-desc">При роботі 10 годин на добу — це 13–27 років без заміни. Жодних витрат на обслуговування та заміну ламп. Для промислових об'єктів це критично важливо.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                    </div>
                    <div>
                        <div class="tl-title">Миттєвий запуск без мигання</div>
                        <div class="tl-desc">На відміну від ртутних та натрієвих ламп — повна яскравість з першої секунди. Без розігріву, без мигання, без flicker-ефекту, шкідливого для зору.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <div>
                        <div class="tl-title">Сумісність з системами управління</div>
                        <div class="tl-desc">LED-драйвери підтримують DALI, 0-10V, PWM диммування та протоколи розумного будинку. Можна створювати сценарії, розклади та автоматизацію.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2a5 5 0 0 1 5 5c0 5-5 13-5 13S7 12 7 7a5 5 0 0 1 5-5z"/></svg>
                    </div>
                    <div>
                        <div class="tl-title">Без ртуті та небезпечних речовин</div>
                        <div class="tl-desc">Повна відсутність ртуті, свинцю та UV-випромінювання. Безпечна утилізація без спеціальних вимог. Клас екологічної безпеки A++.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="page-section page-section-bg2 compare-section">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Порівняння технологій</h3>
            <h2 class="section-title">LED vs ТРАДИЦІЙНЕ ОСВІТЛЕННЯ</h2>
            <p class="section-sub">Об'єктивне порівняння для прийняття зваженого рішення.</p>
        </div>
        <div class="compare-wrap wf-animate">
            <table>
                <thead>
                    <tr>
                        <th>Параметр</th>
                        <th>💡 LED <span class="cell-tag tag-led">Рекомендовано</span></th>
                        <th>☀️ Люмінесцентні <span class="cell-tag tag-fl">Застарілі</span></th>
                        <th>🔆 Натрієві / Ртутні <span class="cell-tag tag-inc">Заборонені в ЄС</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ефективність</td>
                        <td class="cell-good">150–220 лм/Вт</td>
                        <td>60–100 лм/Вт</td>
                        <td>80–150 лм/Вт</td>
                    </tr>
                    <tr>
                        <td>Ресурс</td>
                        <td class="cell-good">50 000–100 000 год</td>
                        <td>10 000–15 000 год</td>
                        <td>12 000–24 000 год</td>
                    </tr>
                    <tr>
                        <td>Час запуску</td>
                        <td class="cell-good">Миттєво</td>
                        <td class="cell-mid">1–3 с (мигання)</td>
                        <td>3–10 хв</td>
                    </tr>
                    <tr>
                        <td>Диммування</td>
                        <td class="cell-good">0–100%, DALI, 0-10V</td>
                        <td class="cell-mid">Обмежено</td>
                        <td>Неможливо</td>
                    </tr>
                    <tr>
                        <td>Температура кольору</td>
                        <td class="cell-good">2700–6500 К (вибір)</td>
                        <td>3000–6500 К</td>
                        <td>Фіксована (жовта / блакитна)</td>
                    </tr>
                    <tr>
                        <td>Ртуть / небезп. речовини</td>
                        <td class="cell-good">Відсутні</td>
                        <td>Є (ртуть ~5 мг)</td>
                        <td>Є (ртуть до 200 мг)</td>
                    </tr>
                    <tr>
                        <td>Витрати за 10 років</td>
                        <td class="cell-good">Тільки амортизація</td>
                        <td class="cell-mid">Заміна ламп + ел-я</td>
                        <td>Заміна + тривалий розігрів</td>
                    </tr>
                    <tr>
                        <td>Сумісність з Smart</td>
                        <td class="cell-good">Повна (KNX, DALI, Zigbee)</td>
                        <td>Обмежена</td>
                        <td>Не підтримується</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- SMART LIGHTING -->
<section class="page-section" id="smart">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Автоматизація</h3>
            <h2 class="section-title">РОЗУМНЕ УПРАВЛІННЯ ОСВІТЛЕННЯМ</h2>
            <p class="section-sub">Інтелектуальна система управління освітленням дозволяє заощадити ще 30–40% понад LED-ефективність.</p>
        </div>
        <div class="smart-inner wf-animate-grid d-grid md-grid-2-columns">
            <div class="smart-visual wf-animate">
                <div class="smart-accent"></div>
                <svg width="340" height="300" viewBox="0 0 340 300" fill="none">
                    <defs>
                        <linearGradient id="sg1" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#f5c518" stop-opacity=".6"/>
                            <stop offset="100%" stop-color="#2db551" stop-opacity=".4"/>
                        </linearGradient>
                    </defs>
                    <rect x="120" y="110" width="100" height="80" rx="4" fill="rgba(255,255,255,.05)" stroke="rgba(245,197,24,.4)" stroke-width="1.5"/>
                    <text x="170" y="148" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="14" fill="rgba(245,197,24,.8)" letter-spacing="1">SMART</text>
                    <text x="170" y="165" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="12" fill="rgba(255,255,255,.4)" letter-spacing="1">CONTROLLER</text>
                    <line x1="120" y1="150" x2="60" y2="80" stroke="rgba(245,197,24,.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <line x1="120" y1="150" x2="50" y2="180" stroke="rgba(26,95,168,.3)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <line x1="170" y1="110" x2="170" y2="40" stroke="rgba(45,181,81,.3)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <line x1="220" y1="150" x2="280" y2="80" stroke="rgba(245,197,24,.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <line x1="220" y1="150" x2="290" y2="180" stroke="rgba(26,95,168,.3)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <line x1="170" y1="190" x2="170" y2="260" stroke="rgba(45,181,81,.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <circle cx="60" cy="70" r="22" fill="rgba(245,197,24,.1)" stroke="rgba(245,197,24,.35)" stroke-width="1.5"/>
                    <text x="60" y="68" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.7)" font-family="Montserrat,sans-serif" font-weight="600">Датчик</text>
                    <text x="60" y="81" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.5)" font-family="Montserrat,sans-serif">руху</text>
                    <circle cx="170" cy="32" r="22" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.35)" stroke-width="1.5"/>
                    <text x="170" y="30" text-anchor="middle" font-size="9" fill="rgba(45,181,81,.7)" font-family="Montserrat,sans-serif" font-weight="600">Датчик</text>
                    <text x="170" y="43" text-anchor="middle" font-size="9" fill="rgba(45,181,81,.5)" font-family="Montserrat,sans-serif">освітл.</text>
                    <circle cx="280" cy="70" r="22" fill="rgba(26,95,168,.1)" stroke="rgba(26,95,168,.35)" stroke-width="1.5"/>
                    <text x="280" y="68" text-anchor="middle" font-size="9" fill="rgba(26,95,168,.8)" font-family="Montserrat,sans-serif" font-weight="600">Панель</text>
                    <text x="280" y="81" text-anchor="middle" font-size="9" fill="rgba(26,95,168,.5)" font-family="Montserrat,sans-serif">DALI</text>
                    <circle cx="290" cy="190" r="22" fill="rgba(255,255,255,.05)" stroke="rgba(255,255,255,.2)" stroke-width="1.5"/>
                    <text x="290" y="188" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.6)" font-family="Montserrat,sans-serif" font-weight="600">Смарт</text>
                    <text x="290" y="201" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.4)" font-family="Montserrat,sans-serif">фон</text>
                    <circle cx="50" cy="190" r="22" fill="rgba(245,197,24,.08)" stroke="rgba(245,197,24,.25)" stroke-width="1.5"/>
                    <text x="50" y="188" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.6)" font-family="Montserrat,sans-serif" font-weight="600">Таймер</text>
                    <text x="50" y="201" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.4)" font-family="Montserrat,sans-serif">/ розклад</text>
                    <circle cx="170" cy="270" r="22" fill="rgba(245,197,24,.15)" stroke="rgba(245,197,24,.45)" stroke-width="1.5"/>
                    <text x="170" y="268" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.8)" font-family="Montserrat,sans-serif" font-weight="600">LED</text>
                    <text x="170" y="281" text-anchor="middle" font-size="9" fill="rgba(245,197,24,.5)" font-family="Montserrat,sans-serif">зони</text>
                </svg>
            </div>

            <div class="smart-content wf-animate">
                <h3 class="section-label">Інтелектуальне управління</h3>
                <h2 class="section-title">SMART-ОСВІТЛЕННЯ<br>ДЛЯ ВАШОГО ОБ'ЄКТА</h2>
                <p class="section-sub">Система автоматично регулює яскравість і графік роботи залежно від природного освітлення, присутності людей та сценаріїв використання приміщення.</p>
                <div class="smart-features">
                    <div class="sf">
                        <div class="sf-dot"></div>
                        <div>
                            <div class="sf-title">Датчики присутності та руху</div>
                            <div class="sf-desc">Світло вмикається тільки коли в приміщенні є люди. У коридорах та паркінгах — знижується до 10% в режимі очікування.</div>
                        </div>
                    </div>
                    <div class="sf">
                        <div class="sf-dot"></div>
                        <div>
                            <div class="sf-title">Daylight harvesting — облік природного світла</div>
                            <div class="sf-desc">Датчик освітленості коригує яскравість штучного світла залежно від рівня природного. Вдень — мінімум, ввечері — повна яскравість.</div>
                        </div>
                    </div>
                    <div class="sf">
                        <div class="sf-dot"></div>
                        <div>
                            <div class="sf-title">Зонування та сценарії</div>
                            <div class="sf-desc">Різні зони будівлі — різні режими. «Нарада», «Робочий день», «Прибирання», «Ніч» — кожен сценарій зберігається і запускається кнопкою або автоматично.</div>
                        </div>
                    </div>
                    <div class="sf">
                        <div class="sf-dot"></div>
                        <div>
                            <div class="sf-title">Інтеграція з BMS та SCADA</div>
                            <div class="sf-desc">Освітлення є частиною загальної системи управління будівлею. Централізоване управління, моніторинг споживання та звіти.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- OBJECTS -->
<section class="page-section page-section-bg2" id="objects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Де ми монтуємо</h3>
            <h2 class="section-title">ТИПИ ОБ'ЄКТІВ</h2>
            <p class="section-sub">Досвід освітлення об'єктів різного призначення та масштабу.</p>
        </div>
        <div class="objects-grid wf-animate-grid d-grid md-grid-4-columns">
            <div class="obj-card wf-animate">
                <div class="obj-thumb o1"><span>🏭</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Промисловість</div>
                    <div class="obj-title">Заводи та цехи</div>
                    <p class="obj-desc">High-bay LED 100–500 Вт, IP65, робочі зони та прохідні</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o2"><span>📦</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Логістика</div>
                    <div class="obj-title">Склади та термінали</div>
                    <p class="obj-desc">Рівномірне освітлення для відео-нагляду та безпечної роботи</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o3"><span>🛒</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Рітейл</div>
                    <div class="obj-title">Магазини та ТРЦ</div>
                    <p class="obj-desc">Акцентне та загальне освітлення для підвищення продажів</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o4"><span>🏢</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Офіси</div>
                    <div class="obj-title">Бізнес-центри</div>
                    <p class="obj-desc">Ергономічне освітлення з DALI управлінням по зонах</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o5"><span>🌳</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Вулиця</div>
                    <div class="obj-title">Парки та двори</div>
                    <p class="obj-desc">Вуличні опори, ліхтарі, підсвічування доріжок та паркінгів</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o6"><span>🏛️</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Архітектура</div>
                    <div class="obj-title">Фасади та пам'ятники</div>
                    <p class="obj-desc">RGB прожектори, динамічне підсвічування, DMX-сценарії</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o7"><span>🏨</span></div>
                <div class="obj-body">
                    <div class="obj-cat">HoReCa</div>
                    <div class="obj-title">Готелі та ресторани</div>
                    <p class="obj-desc">Атмосферне освітлення з диммерами та сценаріями настрою</p>
                </div>
            </div>
            <div class="obj-card wf-animate">
                <div class="obj-thumb o8"><span>🏠</span></div>
                <div class="obj-body">
                    <div class="obj-cat">Житло</div>
                    <div class="obj-title">Будинки та ОСББ</div>
                    <p class="obj-desc">Освітлення під'їздів, паркінгів, прибудинкової території</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="page-section page-section-bg-dark" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label section-label-gold">Як ми працюємо</h3>
            <h2 class="section-title">ЕТАПИ РЕАЛІЗАЦІЇ</h2>
            <p class="section-sub">Від аудиту існуючого освітлення до здачі системи — чіткий і прозорий процес.</p>
        </div>
        <div class="steps d-grid lg-grid-6-columns md-grid-3-columns wf-animate-grid">
            <div class="step wf-animate">
                <div class="step-num">01</div>
                <div class="step-title">Аудит та вимірювання</div>
                <div class="step-desc">Вимірюємо поточну освітленість (люксметр), споживання та аналізуємо недоліки системи</div>
            </div>
            <div class="step wf-animate">
                <div class="step-num">02</div>
                <div class="step-title">Світлотехнічний розрахунок</div>
                <div class="step-desc">Розраховуємо в DIALux Evo кількість і розміщення світильників для нормативної освітленості</div>
            </div>
            <div class="step wf-animate">
                <div class="step-num">03</div>
                <div class="step-title">Підбір обладнання</div>
                <div class="step-desc">Специфікація світильників, драйверів, датчиків і системи управління з урахуванням бюджету</div>
            </div>
            <div class="step wf-animate">
                <div class="step-num">04</div>
                <div class="step-title">Монтаж</div>
                <div class="step-desc">Встановлення світильників, прокладання кабелів, монтаж датчиків та панелей управління</div>
            </div>
            <div class="step wf-animate">
                <div class="step-num">05</div>
                <div class="step-title">Налаштування</div>
                <div class="step-desc">Програмування DALI-адрес, сценаріїв, датчиків і інтеграція з BMS/SCADA системою</div>
            </div>
            <div class="step wf-animate">
                <div class="step-num">06</div>
                <div class="step-title">Вимірювання та здача</div>
                <div class="step-desc">Контрольне вимірювання освітленості, протокол відповідності нормам, навчання персоналу</div>
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
            <p class="section-sub">Від освітлення складу до архітектурного підсвічування — досвід на різних об'єктах.</p>
        </div>
        <div class="projects-grid wf-animate-grid">
            <div class="project-card featured wf-animate">
                <div class="project-tag">Промислове освітлення</div>
                <div class="project-title">Склад логістичної компанії — 12 000 м², 480 High-bay LED</div>
                <p class="project-desc">Заміна 640 натрієвих ламп ДНаТ-400 на LED 200 Вт. Освітленість зросла з 80 до 300 лк. Споживання знизилося з 256 кВт до 96 кВт. Річна економія — 580 000 грн. Встановили систему диммування з датчиками руху.</p>
                <div class="project-meta">
                    <span class="pj-mi">2023 / Київ</span>
                    <span class="pj-mi">Економія −62%</span>
                    <span class="pj-mi">Окупність 2.8 р.</span>
                </div>
                <div class="project-power">480 LED</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Вуличне освітлення</div>
                <div class="project-title">Реконструкція вуличного освітлення мікрорайону</div>
                <p class="project-desc">320 нових LED-опор замість ртутних ламп. Фотоелементи та диммування нічного режиму. Економія −58%.</p>
                <div class="project-meta"><span class="pj-mi">2022 / Львів</span></div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Офісне</div>
                <div class="project-title">Бізнес-центр 8 000 м², DALI управління</div>
                <p class="project-desc">Зонування, сценарії, датчики присутності. Інтеграція з системою BMS будівлі.</p>
                <div class="project-meta"><span class="pj-mi">2023 / Дніпро</span></div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">Архітектурне</div>
                <div class="project-title">Підсвічування фасаду адмінбудівлі</div>
                <p class="project-desc">RGB прожектори 48 шт., DMX-контролер, 6 динамічних сценаріїв для свят та буднів.</p>
                <div class="project-meta"><span class="pj-mi">2024 / Вінниця</span></div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="page-section faq-section page-section-bg2" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна замінити тільки лампи, без заміни світильників?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Це можливо для деяких типів цоколів — E27, E40, G13. Але для промислового освітлення завжди рекомендуємо заміну корпусу — нові LED high-bay мають іншу оптику та ефективніше тепловідведення. Заміна корпусу окупається за 2–3 роки, а не 5–7.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи виконуєте ви світлотехнічні розрахунки?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, обов'язково. Перед проектуванням виконуємо розрахунок в DIALux Evo — програмі для світлотехнічного моделювання. Результат — 3D-візуалізація розподілу освітленості та протокол відповідності ДБН В.2.5-28. Це гарантує потрібний рівень освітленості, а не «на око».</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка нормативна освітленість для різних приміщень?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Відповідно до ДБН В.2.5-28: офіси — 300–500 лк, виробничі зони — 200–750 лк (залежно від точності роботи), склади — 100–200 лк, коридори — 100 лк, паркінги — 75 лк, вулиця — 10–30 лк. При проектуванні орієнтуємось на ці норми плюс 20% запасу.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна поступово замінювати освітлення, по зонах?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, це стандартна практика для великих об'єктів. Розробляємо черговість по зонах з пріоритетом для найбільших споживачів. Кожна замінена зона одразу починає економити і «фінансує» наступні етапи.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як вибрати температуру кольору (CCT) для приміщення?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">2700–3000 К — теплий білий (ресторани, готелі, спальні); 3500–4000 К — нейтральний білий (офіси, магазини, заклади охорони здоров'я); 5000–6500 К — холодний денний (виробництво, склади, де потрібна максимальна точність кольоропередачі). Ми допомагаємо з підбором під конкретне завдання.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка гарантія на встановлені світильники?
                    <span class="faq-ico"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Гарантія виробника на LED-світильники — 3–5 років залежно від бренду. Наша гарантія на монтажні роботи — 3 роки. Для промислових high-bay Philips/Ledvance — 5 років. При гарантійному випадку — безкоштовна заміна та виїзд протягом 48 годин.</div>
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
                <div class="cta-band-title">ЗАМОВТЕ ПРОЕКТ<br>ОСВІТЛЕННЯ ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Безкоштовний аудит, світлотехнічний розрахунок та комерційна пропозиція — протягом 48 годин після виїзду.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="#contact" class="btn btn-gold scroll-to-btn">Замовити аудит освітлення</a>
                    <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer();
