<?php
/*
  Template Name: Cables line installation
*/
get_header();

$proelectric_phone = proelectric_get_primary_phone();
?>

<!-- HERO -->
<section class="hero cables-hero">

    <!-- cable run deco -->
    <div class="cables-hero-deco">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="crun1" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#e85c1a" stop-opacity="0"/>
                    <stop offset="30%"  stop-color="#e85c1a" stop-opacity=".55"/>
                    <stop offset="70%"  stop-color="#1a5fa8" stop-opacity=".45"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="crun2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#e85c1a" stop-opacity="0"/>
                    <stop offset="40%"  stop-color="#e85c1a" stop-opacity=".4"/>
                    <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".2"/>
                </linearGradient>
            </defs>
            <line x1="0" y1="200" x2="1400" y2="200" stroke="url(#crun1)" stroke-width="3"/>
            <line x1="0" y1="320" x2="1400" y2="320" stroke="url(#crun1)" stroke-width="2"/>
            <line x1="0" y1="440" x2="1400" y2="440" stroke="url(#crun1)" stroke-width="4"/>
            <line x1="0" y1="560" x2="1400" y2="560" stroke="url(#crun1)" stroke-width="2"/>
            <line x1="0" y1="680" x2="1400" y2="680" stroke="url(#crun1)" stroke-width="3"/>
            <line x1="280"  y1="0" x2="280"  y2="900" stroke="url(#crun2)" stroke-width="2"/>
            <line x1="560"  y1="0" x2="560"  y2="900" stroke="url(#crun2)" stroke-width="3"/>
            <line x1="840"  y1="0" x2="840"  y2="900" stroke="url(#crun2)" stroke-width="2"/>
            <line x1="1120" y1="0" x2="1120" y2="900" stroke="url(#crun2)" stroke-width="2"/>
            <circle cx="280"  cy="200" r="6" fill="#e85c1a" opacity=".6"/>
            <circle cx="560"  cy="440" r="8" fill="#e85c1a" opacity=".7"/>
            <circle cx="840"  cy="320" r="6" fill="#1a5fa8" opacity=".6"/>
            <circle cx="1120" cy="560" r="6" fill="#2db551" opacity=".55"/>
            <circle cx="280"  cy="680" r="5" fill="#1a5fa8" opacity=".5"/>
            <circle cx="840"  cy="680" r="5" fill="#e85c1a" opacity=".45"/>
            <rect x="240" y="185" width="80" height="32" rx="2" fill="none" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
            <rect x="520" y="425" width="80" height="32" rx="2" fill="none" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
            <rect x="800" y="305" width="80" height="32" rx="2" fill="none" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
            <rect x="400" y="800" width="600" height="60" rx="2" fill="rgba(232,92,26,.05)" stroke="rgba(232,92,26,.12)" stroke-width="1.5"/>
            <line x1="420" y1="830" x2="980" y2="830" stroke="rgba(232,92,26,.15)" stroke-width="1" stroke-dasharray="8 6"/>
            <text x="700" y="836" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="11" fill="rgba(232,92,26,.3)" letter-spacing="3">ТРАНШЕЯ · КЛ 10 кВ</text>
        </svg>
    </div>

    <div class="cables-hero-tint"></div>

    <div class="container relative-container">
        <div class="hero-content hero-content-center">
            <nav class="breadcrumb">
                <a href="<?= esc_url( home_url('/') ); ?>">Головна</a>
                <span>›</span>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>">Електромонтаж</a>
                <span>›</span>
                <a href="<?= esc_url( home_url(get_post_field('post_name', get_the_ID())) ); ?>" class="current-crumb">Кабельні лінії</a>
            </nav>
            <?php
            proelectric_breadcrumb_schema( array(
                array( 'name' => 'Головна', 'url' => home_url('/') ),
                array( 'name' => 'Електромонтаж', 'url' => home_url('/elektromontazhni-roboty/') ),
                array( 'name' => 'Кабельні лінії', 'url' => get_permalink() ),
            ) );
            ?>
            <div class="hero-label">Силові та контрольні кабелі</div>
            <h1 class="hero-title">
                <span class="accent-orange">МОНТАЖ</span><br>
                <span class="accent-blue">КАБЕЛЬ</span><span class="accent-green">НИХ</span><br>ЛІНІЙ
            </h1>
            <p class="hero-desc">Прокладаємо силові та контрольні кабелі від 0,4 кВ до 110 кВ. У лотках, трубах, траншеях, кабельних каналах та на естакадах — будь-яким методом для будь-якого об'єкта.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Замовити монтаж</a>
                <a href="#methods" class="btn btn-white scroll-to-btn">Методи прокладки</a>
            </div>
        </div>
    </div>

    <?php
        $stats = array(
            array(
                'stat_num' => '110',
                'unit' => ' кВ',
                'stat_label' => 'Максимальна напруга кабелів'
            ), array(
                'stat_num' => '500',
                'unit' => '+ км',
                'stat_label' => 'Прокладено кабелю'
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


<!-- METHODS -->
<section class="page-section" id="methods">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label orange">Способи прокладки</h3>
            <h2 class="section-title">МЕТОДИ МОНТАЖУ КАБЕЛІВ</h2>
            <p class="section-sub">Вибираємо оптимальний метод залежно від умов об'єкта, типу кабелю та вимог до захисту.</p>
        </div>

        <div class="cables-methods-grid d-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">
            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m1">
                    <div class="cables-method-badge">Відкрита прокладка</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="15" y="40" width="70" height="12" rx="2" fill="rgba(232,92,26,.2)" stroke="rgba(232,92,26,.5)" stroke-width="1.5"/>
                        <line x1="15" y1="52" x2="85" y2="52" stroke="rgba(232,92,26,.3)" stroke-width="1"/>
                        <line x1="30" y1="40" x2="30" y2="52" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
                        <line x1="50" y1="40" x2="50" y2="52" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
                        <line x1="70" y1="40" x2="70" y2="52" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
                        <circle cx="28" cy="46" r="3.5" fill="rgba(255,165,0,.7)" stroke="rgba(255,255,255,.2)" stroke-width=".5"/>
                        <circle cx="38" cy="46" r="3.5" fill="rgba(26,95,168,.7)" stroke="rgba(255,255,255,.2)" stroke-width=".5"/>
                        <circle cx="48" cy="46" r="3.5" fill="rgba(45,181,81,.7)" stroke="rgba(255,255,255,.2)" stroke-width=".5"/>
                        <circle cx="58" cy="46" r="3.5" fill="rgba(255,50,50,.6)" stroke="rgba(255,255,255,.2)" stroke-width=".5"/>
                        <circle cx="68" cy="46" r="3.5" fill="rgba(255,165,0,.5)" stroke="rgba(255,255,255,.2)" stroke-width=".5"/>
                        <rect x="22" y="52" width="4" height="14" fill="rgba(255,255,255,.1)"/>
                        <rect x="22" y="64" width="56" height="3" rx="1" fill="rgba(255,255,255,.08)"/>
                        <rect x="74" y="52" width="4" height="14" fill="rgba(255,255,255,.1)"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Кабельні лотки та короби</div>
                    <p class="cables-method-desc">Прокладання кабелів у металевих, пластикових або перфорованих лотках по стінах, стелях та спеціальних конструкціях.</p>
                    <ul class="cables-method-list">
                        <li>Металеві лотки DKC, OBO Bettermann</li>
                        <li>Пластикові короби Legrand, ABB</li>
                        <li>Перфоровані лотки для пучків кабелів</li>
                        <li>Легкий доступ для обслуговування</li>
                        <li>Для промислових та цивільних об'єктів</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m2">
                    <div class="cables-method-badge">Підземна прокладка</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="5" y="55" width="90" height="8" rx="1" fill="rgba(139,90,43,.3)" stroke="rgba(139,90,43,.3)" stroke-width="1"/>
                        <rect x="5" y="63" width="90" height="30" rx="1" fill="rgba(101,67,33,.2)"/>
                        <text x="50" y="75" text-anchor="middle" font-size="8" fill="rgba(255,255,255,.25)" font-family="Montserrat,sans-serif" letter-spacing="1">ҐРУНТ</text>
                        <rect x="5" y="50" width="90" height="6" fill="rgba(210,180,140,.2)"/>
                        <circle cx="30" cy="53" r="5" fill="rgba(232,92,26,.5)" stroke="rgba(232,92,26,.7)" stroke-width="1.5"/>
                        <circle cx="50" cy="53" r="5" fill="rgba(26,95,168,.5)" stroke="rgba(26,95,168,.7)" stroke-width="1.5"/>
                        <circle cx="70" cy="53" r="5" fill="rgba(45,181,81,.45)" stroke="rgba(45,181,81,.6)" stroke-width="1.5"/>
                        <line x1="5" y1="50" x2="95" y2="50" stroke="rgba(255,255,255,.15)" stroke-width="1.5"/>
                        <path d="M10 20 Q20 30 30 28 Q40 26 50 30 Q60 34 70 28 Q80 22 90 25" stroke="rgba(232,92,26,.25)" stroke-width="1.5" fill="none"/>
                        <text x="50" y="18" text-anchor="middle" font-size="8" fill="rgba(232,92,26,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">ТРАНШЕЯ</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Підземна прокладка в траншеях</div>
                    <p class="cables-method-desc">Прокладання силових кабелів у землі — найнадійніший спосіб для зовнішніх комунікацій та між будівлями.</p>
                    <ul class="cables-method-list">
                        <li>Кабелі в захисних трубах ПВХ/ПЕ</li>
                        <li>Піщана подушка та цегляна сигналізація</li>
                        <li>Механізована та ручна розробка траншей</li>
                        <li>Протяжка методом горизонтального буріння</li>
                        <li>Від 0,4 до 110 кВ включно</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m3">
                    <div class="cables-method-badge">Повітряна лінія</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <line x1="20" y1="20" x2="20" y2="80" stroke="rgba(255,255,255,.25)" stroke-width="3"/>
                        <line x1="80" y1="25" x2="80" y2="80" stroke="rgba(255,255,255,.25)" stroke-width="3"/>
                        <line x1="10" y1="35" x2="30" y2="35" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                        <line x1="70" y1="38" x2="90" y2="38" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                        <path d="M12 33 Q50 50 88 36" stroke="rgba(232,92,26,.65)" stroke-width="1.5" fill="none"/>
                        <path d="M14 36 Q50 53 86 39" stroke="rgba(26,95,168,.55)" stroke-width="1.5" fill="none"/>
                        <path d="M16 39 Q50 56 84 42" stroke="rgba(45,181,81,.5)" stroke-width="1.5" fill="none"/>
                        <circle cx="12" cy="33" r="2" fill="rgba(255,255,255,.4)"/>
                        <circle cx="88" cy="36" r="2" fill="rgba(255,255,255,.4)"/>
                        <line x1="5" y1="80" x2="95" y2="80" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Повітряні лінії (ПЛ, СІП)</div>
                    <p class="cables-method-desc">Монтаж повітряних ліній на опорах — від введень у будинок до розподільчих мереж 0,4–10 кВ в населених пунктах.</p>
                    <ul class="cables-method-list">
                        <li>СІП-2, СІП-4 (самонесучий ізольований)</li>
                        <li>Голий провід на ізоляторах</li>
                        <li>Залізобетонні та металеві опори</li>
                        <li>Анкерне та проміжне кріплення</li>
                        <li>Вводи в будівлі через ввідні гільзи</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m4">
                    <div class="cables-method-badge">Прокладка в трубах</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <circle cx="75" cy="50" r="22" fill="rgba(255,255,255,.04)" stroke="rgba(232,92,26,.3)" stroke-width="2"/>
                        <circle cx="75" cy="50" r="16" fill="rgba(232,92,26,.06)" stroke="rgba(232,92,26,.2)" stroke-width="1"/>
                        <circle cx="70" cy="46" r="4.5" fill="rgba(255,165,0,.6)"/>
                        <circle cx="80" cy="46" r="4.5" fill="rgba(26,95,168,.6)"/>
                        <circle cx="75" cy="56" r="4.5" fill="rgba(45,181,81,.55)"/>
                        <line x1="5" y1="33" x2="55" y2="33" stroke="rgba(232,92,26,.3)" stroke-width="1.5"/>
                        <line x1="5" y1="67" x2="55" y2="67" stroke="rgba(232,92,26,.3)" stroke-width="1.5"/>
                        <rect x="5" y="33" width="50" height="34" fill="rgba(232,92,26,.04)"/>
                        <line x1="10" y1="44" x2="55" y2="44" stroke="rgba(255,165,0,.5)" stroke-width="2"/>
                        <line x1="10" y1="50" x2="55" y2="50" stroke="rgba(26,95,168,.5)" stroke-width="2"/>
                        <line x1="10" y1="56" x2="55" y2="56" stroke="rgba(45,181,81,.45)" stroke-width="2"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Прокладка в трубах та каналах</div>
                    <p class="cables-method-desc">Прокладання кабелів у захисних трубах ПВХ, гофрованих трубах або кабельних каналах — в підлозі, стінах та під дорогами.</p>
                    <ul class="cables-method-list">
                        <li>Гофрована труба ПВХ та ПЕ</li>
                        <li>Жорстка труба для зовнішніх умов</li>
                        <li>Кабельні канали в підлозі та плінтусах</li>
                        <li>Горизонтальне буріння під дорогами</li>
                        <li>Протяжка тросом та мазилкою</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m5">
                    <div class="cables-method-badge">Естакади та мости</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <line x1="10" y1="55" x2="90" y2="55" stroke="rgba(255,255,255,.2)" stroke-width="3"/>
                        <line x1="25" y1="55" x2="25" y2="80" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                        <line x1="50" y1="55" x2="50" y2="80" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                        <line x1="75" y1="55" x2="75" y2="80" stroke="rgba(255,255,255,.2)" stroke-width="2"/>
                        <line x1="25" y1="55" x2="37" y2="80" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        <line x1="50" y1="55" x2="62" y2="80" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                        <rect x="10" y="46" width="80" height="10" rx="1" fill="rgba(232,92,26,.15)" stroke="rgba(232,92,26,.4)" stroke-width="1.5"/>
                        <circle cx="20" cy="51" r="2.5" fill="rgba(255,165,0,.7)"/>
                        <circle cx="30" cy="51" r="2.5" fill="rgba(26,95,168,.7)"/>
                        <circle cx="40" cy="51" r="2.5" fill="rgba(45,181,81,.7)"/>
                        <circle cx="50" cy="51" r="2.5" fill="rgba(255,50,50,.6)"/>
                        <circle cx="60" cy="51" r="2.5" fill="rgba(255,165,0,.6)"/>
                        <circle cx="70" cy="51" r="2.5" fill="rgba(26,95,168,.6)"/>
                        <circle cx="80" cy="51" r="2.5" fill="rgba(232,92,26,.7)"/>
                        <line x1="5" y1="80" x2="95" y2="80" stroke="rgba(255,255,255,.1)" stroke-width="1"/>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Кабельні естакади та галереї</div>
                    <p class="cables-method-desc">Надземні кабельні траси на металевих конструкціях — для промислових об'єктів, де підземна прокладка неможлива.</p>
                    <ul class="cables-method-list">
                        <li>Металеві несучі конструкції з ґрунтовкою</li>
                        <li>Лотки з негорючим покриттям</li>
                        <li>Закриті кабельні галереї для агресивних умов</li>
                        <li>Перетини над дорогами та залізницею</li>
                        <li>Проектування та виготовлення конструкцій</li>
                    </ul>
                </div>
            </div>

            <div class="cables-method-card wf-animate">
                <div class="cables-method-thumb m6">
                    <div class="cables-method-badge">Вбудована прокладка</div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" style="position:relative;z-index:1">
                        <rect x="10" y="20" width="80" height="60" rx="2" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.12)" stroke-width="1.5"/>
                        <rect x="20" y="30" width="8" height="40" rx="1" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
                        <rect x="38" y="30" width="8" height="40" rx="1" fill="rgba(232,92,26,.12)" stroke="rgba(232,92,26,.3)" stroke-width="1"/>
                        <rect x="56" y="30" width="8" height="40" rx="1" fill="rgba(45,181,81,.1)" stroke="rgba(45,181,81,.25)" stroke-width="1"/>
                        <circle cx="24" cy="50" r="2.5" fill="rgba(26,95,168,.8)"/>
                        <circle cx="42" cy="50" r="2.5" fill="rgba(232,92,26,.8)"/>
                        <circle cx="60" cy="50" r="2.5" fill="rgba(45,181,81,.7)"/>
                        <text x="50" y="84" text-anchor="middle" font-size="7" fill="rgba(255,255,255,.25)" font-family="Montserrat,sans-serif" letter-spacing="1">ШТРОБА</text>
                    </svg>
                </div>
                <div class="cables-method-body">
                    <div class="cables-method-title">Штробування та замурування</div>
                    <p class="cables-method-desc">Прокладання кабелів у штробах у стінах та підлозі — для внутрішніх робіт у цивільних будівлях.</p>
                    <ul class="cables-method-list">
                        <li>Штробування штроборізом та перфоратором</li>
                        <li>Кабель у захисній гофрі в штробі</li>
                        <li>Закладання та вирівнювання поверхні</li>
                        <li>Прокладання в монолітних конструкціях</li>
                        <li>Акти прихованих робіт з фотофіксацією</li>
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
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">0,4–110<span> кВ</span></div>
                    <div class="cables-depth-lbl">Діапазон напруг<br>кабельних ліній</div>
                </div>
            </div>
            <div class="cables-depth-item">
                <div class="cables-depth-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M3 3h18v18H3z M9 3v18 M15 3v18 M3 9h18 M3 15h18"/>
                    </svg>
                </div>
                <div>
                    <div class="cables-depth-num">0,7<span> м</span></div>
                    <div class="cables-depth-lbl">Мінімальна глибина<br>траншеї для КЛ 10 кВ</div>
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
                    <div class="cables-depth-num">500<span>+ км</span></div>
                    <div class="cables-depth-lbl">Прокладено кабелю<br>нашими бригадами</div>
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
                    <div class="cables-depth-num">100<span>%</span></div>
                    <div class="cables-depth-lbl">Актів прихованих<br>робіт з фото</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CABLE TYPES -->
<section class="page-section page-section-bg-dark" id="cables">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label orange">Типи кабелів</h3>
            <h2 class="section-title">КАБЕЛІ ЯКІ МИ МОНТУЄМО</h2>
            <p class="section-sub">Силові, контрольні, оптичні та спеціальні — підбираємо кабель під конкретні умови і вимоги об'єкта.</p>
        </div>

        <div class="cables-types-grid lg-grid-4-columns md-grid-2-columns gap-16 wf-animate-grid">
            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="rgba(232,92,26,.5)" stroke-width="1.5"/>
                            <circle cx="12" cy="12" r="6"  stroke="rgba(232,92,26,.35)" stroke-width="1"/>
                            <circle cx="12" cy="12" r="3"  fill="rgba(232,92,26,.6)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Силові кабелі</div>
                    <div class="cable-type-badge">0,4 – 110 кВ</div>
                    <div class="cable-type-desc">Основний тип для передачі та розподілу електроенергії. ВВГнг, ААШв, ААБ, ПвВ, ПвПу.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ВВГнг</span>
                        <span class="cable-spec">ПвВ</span>
                        <span class="cable-spec">ААШв</span>
                        <span class="cable-spec">до 110 кВ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="8" width="18" height="8" rx="2" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none"/>
                            <circle cx="8"  cy="12" r="2" fill="rgba(26,95,168,.6)"/>
                            <circle cx="12" cy="12" r="2" fill="rgba(26,95,168,.5)"/>
                            <circle cx="16" cy="12" r="2" fill="rgba(26,95,168,.4)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Контрольні кабелі</div>
                    <div class="cable-type-badge">Управління та сигналізація</div>
                    <div class="cable-type-desc">Для кіл управління, сигналізації, вторинної комутації релейного захисту та автоматики.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">КВВГ</span>
                        <span class="cable-spec">КВВГнг</span>
                        <span class="cable-spec">14–37 жил</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L8 6H4v12h4l4 4 4-4h4V6h-4z" stroke="rgba(45,181,81,.5)" stroke-width="1.5" fill="none"/>
                            <circle cx="12" cy="12" r="3" fill="rgba(45,181,81,.55)"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Самонесучі ізольовані</div>
                    <div class="cable-type-badge">СІП-2, СІП-4</div>
                    <div class="cable-type-desc">Для повітряних ліній у населених пунктах замість голого дроту. Вводи в будівлі.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">СІП-2</span>
                        <span class="cable-spec">СІП-4</span>
                        <span class="cable-spec">0,4–10 кВ</span>
                    </div>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="rgba(245,197,24,.5)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Оптоволоконні кабелі</div>
                    <div class="cable-type-badge">Зв'язок та передача даних</div>
                    <div class="cable-type-desc">Прокладання ВОЛЗ для мереж зв'язку, SCADA, відеоспостереження та промислових мереж.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ОКТ</span>
                        <span class="cable-spec">ОКБ</span>
                        <span class="cable-spec">OPGW</span>
                    </div>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L3 7v5c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="rgba(232,92,26,.5)" stroke-width="1.5" fill="none"/>
                            <path d="M9 12l2 2 4-4" stroke="rgba(232,92,26,.7)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Вогнетривкі кабелі</div>
                    <div class="cable-type-badge">FR, HF, LSOH</div>
                    <div class="cable-type-desc">Для систем пожежної сигналізації, оповіщення та критичних об'єктів де вимагається нгLS.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ВВГнг-LS</span>
                        <span class="cable-spec">КВВГнг</span>
                        <span class="cable-spec">FR-LSOH</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M22 2L11 13" stroke="rgba(255,255,255,.4)" stroke-width="1.5"/>
                            <path d="M22 2L15 22l-4-9-9-4 20-7z" stroke="rgba(255,255,255,.4)" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Кабелі зв'язку та КІП</div>
                    <div class="cable-type-badge">Інформаційні мережі</div>
                    <div class="cable-type-desc">Прокладання мережних кабелів UTP/FTP, промислових шин Profibus, Modbus, EtherCAT.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">UTP cat.6</span>
                        <span class="cable-spec">Profibus</span>
                        <span class="cable-spec">Промислові</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="3" fill="rgba(255,165,0,.7)"/>
                            <path d="M12 1v3M12 20v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M1 12h3M20 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12" stroke="rgba(255,165,0,.5)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Гнучкі шлангові</div>
                    <div class="cable-type-badge">ПВС, КГ, КГХЛ</div>
                    <div class="cable-type-desc">Для рухомих установок, зварювального обладнання, гірничих та портових кранів.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ПВС</span>
                        <span class="cable-spec">КГ</span>
                        <span class="cable-spec">КГХЛ</span>
                    </div>
                </div>
            </div>

            <div class="grid-item wf-animate">
                <div class="cable-type-card">
                    <div class="cable-type-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="rgba(26,95,168,.5)" stroke-width="1.5" fill="none"/>
                            <path d="M14 2v6h6" stroke="rgba(26,95,168,.4)" stroke-width="1.5"/>
                            <path d="m9 15 2 2 4-4" stroke="rgba(45,181,81,.6)" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="cable-type-name">Броньовані кабелі</div>
                    <div class="cable-type-badge">ААШв, ПвКШп, ААБ</div>
                    <div class="cable-type-desc">Кабелі з додатковим бронезахистом для підземної прокладки в агресивних умовах.</div>
                    <div class="cable-type-specs">
                        <span class="cable-spec">ААШв</span>
                        <span class="cable-spec">ПвКШп</span>
                        <span class="cable-spec">до 10 кВ</span>
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
            <h2 class="section-title">ЯКІСТЬ НА КОЖНОМУ МЕТРІ</h2>
            <p class="section-sub">Ми прокладаємо кабельні траси так, щоб вони служили десятиліттями без проблем.</p>
        </div>

        <div class="cables-split-inner wf-animate">
            <div class="cables-split-visual">
                <div class="cables-split-accent"></div>
                <svg width="340" height="380" viewBox="0 0 340 380" fill="none" style="position:relative;z-index:1">
                    <defs>
                        <radialGradient id="xg1" cx="50%" cy="50%" r="50%">
                            <stop offset="0%"   stop-color="#e85c1a" stop-opacity=".7"/>
                            <stop offset="100%" stop-color="#e85c1a" stop-opacity=".1"/>
                        </radialGradient>
                    </defs>
                    <rect x="60" y="40" width="220" height="80" rx="4" fill="rgba(255,255,255,.04)" stroke="rgba(232,92,26,.3)" stroke-width="2"/>
                    <text x="170" y="20" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="12" fill="rgba(232,92,26,.5)" letter-spacing="2">КАБЕЛЬНИЙ ЛОТОК</text>
                    <circle cx="88"  cy="80" r="15" fill="rgba(232,92,26,.3)" stroke="rgba(232,92,26,.6)" stroke-width="2"/>
                    <circle cx="88"  cy="80" r="8"  fill="rgba(232,92,26,.5)"/>
                    <circle cx="88"  cy="80" r="3"  fill="#e85c1a"/>
                    <circle cx="130" cy="80" r="12" fill="rgba(26,95,168,.3)"  stroke="rgba(26,95,168,.6)"  stroke-width="1.5"/>
                    <circle cx="130" cy="80" r="6"  fill="rgba(26,95,168,.5)"/>
                    <circle cx="130" cy="80" r="2"  fill="#1a5fa8"/>
                    <circle cx="168" cy="75" r="18" fill="rgba(45,181,81,.25)"  stroke="rgba(45,181,81,.5)"  stroke-width="2"/>
                    <circle cx="168" cy="75" r="10" fill="rgba(45,181,81,.45)"/>
                    <circle cx="168" cy="75" r="4"  fill="#2db551"/>
                    <circle cx="210" cy="82" r="10" fill="rgba(255,165,0,.3)"   stroke="rgba(255,165,0,.6)"   stroke-width="1.5"/>
                    <circle cx="210" cy="82" r="5"  fill="rgba(255,165,0,.55)"/>
                    <circle cx="243" cy="78" r="13" fill="rgba(232,92,26,.25)"  stroke="rgba(232,92,26,.5)"  stroke-width="1.5"/>
                    <circle cx="243" cy="78" r="7"  fill="rgba(232,92,26,.45)"/>
                    <line x1="88"  y1="95"  x2="88"  y2="115" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="88"  y="125" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">ВВГ 3×50</text>
                    <line x1="168" y1="93"  x2="168" y2="115" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="168" y="125" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">ВВГ 3×120</text>
                    <line x1="243" y1="91"  x2="243" y2="115" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="243" y="125" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.45)" font-family="Montserrat,sans-serif">КВВГ 10×2,5</text>
                    <rect x="60" y="170" width="220" height="100" rx="2" fill="rgba(100,70,40,.15)" stroke="rgba(100,70,40,.3)" stroke-width="1.5"/>
                    <text x="170" y="155" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="12" fill="rgba(232,92,26,.4)" letter-spacing="2">ТРАНШЕЯ</text>
                    <rect x="65" y="235" width="210" height="30" rx="1" fill="rgba(210,180,140,.08)" stroke="rgba(210,180,140,.2)" stroke-width="1"/>
                    <text x="170" y="252" text-anchor="middle" font-size="8" fill="rgba(210,180,140,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">ПІСОК</text>
                    <circle cx="120" cy="215" r="16" fill="rgba(232,92,26,.2)" stroke="rgba(232,92,26,.5)" stroke-width="2"/>
                    <circle cx="120" cy="215" r="9"  fill="rgba(232,92,26,.45)"/>
                    <circle cx="120" cy="215" r="4"  fill="#e85c1a"/>
                    <circle cx="170" cy="215" r="16" fill="rgba(26,95,168,.2)"  stroke="rgba(26,95,168,.5)"  stroke-width="2"/>
                    <circle cx="170" cy="215" r="9"  fill="rgba(26,95,168,.45)"/>
                    <circle cx="170" cy="215" r="4"  fill="#1a5fa8"/>
                    <circle cx="220" cy="215" r="14" fill="rgba(45,181,81,.18)" stroke="rgba(45,181,81,.45)" stroke-width="1.5"/>
                    <circle cx="220" cy="215" r="8"  fill="rgba(45,181,81,.4)"/>
                    <circle cx="220" cy="215" r="3"  fill="#2db551"/>
                    <rect x="65" y="175" width="210" height="10" rx="1" fill="rgba(255,165,0,.1)" stroke="rgba(255,165,0,.25)" stroke-width="1"/>
                    <text x="170" y="183" text-anchor="middle" font-size="7" fill="rgba(255,165,0,.4)" font-family="Montserrat,sans-serif" letter-spacing="1">СИГНАЛЬНА СТРІЧКА</text>
                    <line x1="40" y1="170" x2="40" y2="270" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <line x1="35" y1="170" x2="45" y2="170" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <line x1="35" y1="270" x2="45" y2="270" stroke="rgba(255,255,255,.15)" stroke-width="1"/>
                    <text x="30" y="222" text-anchor="middle" font-size="9" fill="rgba(255,255,255,.3)" font-family="Montserrat,sans-serif" transform="rotate(-90,30,222)">≥ 700 мм</text>
                </svg>
            </div>

            <div class="cables-split-content">
                <h3 class="section-label orange">Технічні стандарти</h3>
                <h2 class="section-title" style="font-size:clamp(26px,3.5vw,44px)">ВІДПОВІДНО<br>ДО НОРМ І ПРАВИЛ</h2>
                <p class="section-sub">Кожна кабельна лінія виконується за затвердженим проектом, у суворій відповідності до ПУЕ та ДБН.</p>

                <div class="cables-feat-list">
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Акти прихованих робіт</div>
                            <div class="cables-feat-desc">Кожен метр прихованої прокладки фіксується актом із фото. Замовник отримує повний комплект виконавчої документації.</div>
                        </div>
                    </div>
                    <div class="cables-feat-item">
                        <div class="cables-feat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <div class="cables-feat-title">Вимірювання ізоляції кабелів</div>
                            <div class="cables-feat-desc">Після прокладки вимірюємо опір ізоляції кожного кабелю мегаомметром. Протокол вимірювань — обов'язковий документ здачі.</div>
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
                            <div class="cables-feat-title">Правильні радіуси вигину</div>
                            <div class="cables-feat-desc">Дотримуємось мінімальних радіусів вигину для кожного типу кабелю відповідно до вимог виробника та ПУЕ.</div>
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
                            <div class="cables-feat-title">Кінцеві та сполучні муфти</div>
                            <div class="cables-feat-desc">Монтаж концевих та з'єднувальних муфт на кабелях 6–110 кВ з дотриманням технології виробника. Термоусаджувальні та холодна усадка.</div>
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
            <h2 class="section-title">ЕТАПИ МОНТАЖУ КАБЕЛЬНИХ ЛІНІЙ</h2>
            <p class="section-sub">Від отримання проекту до підписання акту — чітка послідовність робіт без відступів від технології.</p>
        </div>

        <div class="cables-proc-grid lg-grid-3-columns gap-2 wf-animate-grid bg-light-white-grid">
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">01</div>
                    <div class="cables-proc-title">Отримання та вивчення проекту</div>
                    <p class="cables-proc-desc">Вивчення робочої документації, погодження місць введень та перетинів з іншими комунікаціями, отримання ордера на земляні роботи</p>
                    <span class="cables-proc-tag">ПУЕ / ДБН</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">02</div>
                    <div class="cables-proc-title">Підготовка трас та основ</div>
                    <p class="cables-proc-desc">Розмітка траси, розробка траншей або монтаж кабельних конструкцій, встановлення опор та кронштейнів лотків</p>
                    <span class="cables-proc-tag">Геодезія</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">03</div>
                    <div class="cables-proc-title">Розмотка та прокладка кабелю</div>
                    <p class="cables-proc-desc">Розмотка з барабанів із контролем мінімального радіусу вигину. Прокладання зі збереженням маркування жил та кінців</p>
                    <span class="cables-proc-tag">Контроль якості</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">04</div>
                    <div class="cables-proc-title">Виконання з'єднань та муфт</div>
                    <p class="cables-proc-desc">Монтаж кінцевих та сполучних муфт кваліфікованими кабельщиками. Підключення кабелів до щитів та вимикачів</p>
                    <span class="cables-proc-tag">Сертифіковані муфти</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">05</div>
                    <div class="cables-proc-title">Засипання та відновлення</div>
                    <p class="cables-proc-desc">Засипання траншеї з піщаною подушкою та сигнальною стрічкою, ущільнення, відновлення дорожнього покриття або благоустрою</p>
                    <span class="cables-proc-tag">Акти прихованих робіт</span>
                </div>
            </div>
            <div class="grid-item wf-animate">
                <div class="cables-proc-card">
                    <div class="cables-proc-num">06</div>
                    <div class="cables-proc-title">Вимірювання та здача</div>
                    <p class="cables-proc-desc">Вимірювання ізоляції мегаомметром, прозвонка, складання виконавчих схем та протоколів, підписання акту здачі-приймання</p>
                    <span class="cables-proc-tag">Протоколи вимірювань</span>
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
            <p class="section-sub">Від кабельної мережі промислового підприємства до підземної КЛ-10 кВ між підстанціями.</p>
        </div>

        <div class="cables-proj-strip projects-grid wf-animate-grid">
            <div class="project-card cables-proj-card featured wf-animate">
                <div class="project-tag cables-proj-tag">Промислова КЛ</div>
                <div class="project-title cables-proj-title">Внутрішньозаводська кабельна мережа 10 кВ — 28 км</div>
                <p class="project-desc cables-proj-desc" style="max-width:360px">Прокладання 28 км силових кабелів ПвП 10 кВ між трансформаторними підстанціями великого металургійного заводу. Прокладання в траншеях, кабельних каналах та на естакадах. Монтаж кінцевих і сполучних муфт. Вимірювання та випробування кабельних ліній підвищеною напругою.</p>
                <div class="project-meta cables-proj-meta">
                    <span class="cables-proj-mi">2022 / Дніпро</span>
                    <span class="cables-proj-mi">28 км · 10 кВ</span>
                    <span class="cables-proj-mi">Термін 4 місяці</span>
                </div>
                <div class="cables-proj-big">28 км</div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Вітрова СЕС</div>
                <div class="project-title cables-proj-title">КЛ між вітрогенераторами та підстанцією 160 МВт</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">80 км підземних кабельних ліній 10 кВ для 80 вітрогенераторів. Кабелі ПвП 10 кВ 3×240 мм².</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2020 / Запорізька обл.</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Сонячна СЕС</div>
                <div class="project-title cables-proj-title">КЛ для СЕС 40 МВт, постійний та змінний струм</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">DC-кабелі від панелей до інверторів + AC 10 кВ до підстанції. 65 км у траншеях.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2019 / Запорізька обл.</span>
                </div>
            </div>
            <div class="project-card cables-proj-card wf-animate">
                <div class="project-tag cables-proj-tag">Ж/к будівництво</div>
                <div class="project-title cables-proj-title">Кабельна мережа ЖК на 800 квартир</div>
                <p class="project-desc cables-proj-desc" style="font-size:12px;line-height:1.8;margin-top:8px">Повна кабельна мережа 0,4 кВ від КТП до щитів. 120 км кабелю, прокладання в штробах та лотках.</p>
                <div class="project-meta cables-proj-meta" style="margin-top:16px">
                    <span class="cables-proj-mi">2023 / Київ</span>
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
                <div class="cables-std-desc">Правила улаштування електроустановок — основний нормативний документ для монтажу кабельних ліній усіх напруг</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 9h6M9 13h4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ДБН В.2.5-82</div>
                <div class="cables-std-desc">Норми проектування електроустановок будівель. Визначає вимоги до прокладки кабелів у будівлях</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div class="cables-std-name">ДСТУ IEC 60228</div>
                <div class="cables-std-desc">Стандарт на жили силових кабелів. Визначає мінімальні перерізи та допустимі відхилення</div>
            </div>
            <div class="cables-std-card wf-animate">
                <div class="cables-std-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="cables-std-name">НПАОП 40.1-1.21</div>
                <div class="cables-std-desc">Правила безпечної експлуатації електроустановок споживачів. Вимоги до кваліфікації персоналу</div>
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
                    Яка мінімальна глибина прокладки кабелю в землі?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Відповідно до ПУЕ: кабелі 0,4 кВ — не менше 0,7 м від поверхні (0,5 м у непрохідних зонах); кабелі 6–10 кВ — не менше 0,7 м; кабелі 35 кВ і вище — не менше 1,0 м. При перетині з дорогами та залізницею — не менше 1,0 м у захисній трубі.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи потрібен ордер на земляні роботи?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, для земляних робіт у населених пунктах обов'язково потрібен ордер від місцевих органів влади. Перед початком необхідно також перевірити підземні комунікації через підприємства-власники та нанести їх на схему. Ми беремо на себе отримання ордеру та погодження.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Як обирається переріз кабелю?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Переріз обирається за трьома критеріями: за допустимим нагрівом (струмовим навантаженням), за допустимою втратою напруги та за термічною стійкістю до струмів короткого замикання. З трьох розрахованих значень береться максимальний, з округленням у більший бік до стандартного ряду перерізів.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи виконуєте ви випробування кабелів підвищеною напругою?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, для кабелів 6 кВ і вище виконуємо профілактичні випробування підвищеною напругою постійного або змінного струму відповідно до ПУЕ та заводських інструкцій. Результат — протокол випробувань, що є обов'язковим для введення в експлуатацію.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує прокладка кабелю в траншеї?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість залежить від типу ґрунту, напруги кабелю та умов прокладання. Орієнтовно: траншейна прокладка кабелю 0,4 кВ в ґрунті — від 350 грн/пог.м; кабелю 10 кВ — від 650 грн/пог.м (без вартості кабелю). Точний кошторис — після вивчення проекту та виїзду на об'єкт.</div>
                </div>
            </div>

            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які документи передаються після завершення робіт?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Передаємо повний пакет: виконавчі схеми з нанесеними відхиленнями від проекту, акти прихованих робіт з фотофіксацією, протоколи вимірювань опору ізоляції, протоколи випробувань підвищеною напругою (для 6–110 кВ), паспорти та сертифікати на кабелі та муфти.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta-band cables-cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО КАБЕЛЬНІ<br>ЛІНІЇ ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Надішліть проект або технічне завдання — виїдемо на об'єкт та підготуємо детальний кошторис протягом 3 робочих днів</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions d-flex justify-content-md-end">
                    <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="btn btn-orange">Замовити монтаж</a>
                    <a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-outline-white"><?= esc_html( $proelectric_phone['display'] ) ?></a>
                </div>
            </div>
        </div>
    </div>
</section> 

<?php get_template_part('template-parts/general/contact-us'); ?>
<?php get_footer(); ?>
