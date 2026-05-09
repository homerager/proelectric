<?php 
/*
  Template Name: Electrical panel equipment
 */
get_header();
?>
<section class="hero" style="--hero-bg: url(<?= get_template_directory_uri() . '/images/electrical-panel-equipment-hero.webp'; ?>)">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">Проєктування · Постачання · Монтаж</div>
            <h1 class="hero-title"><span class="accent-blue">ЕЛЕКТРО</span><span class="accent-green">ЩИТОВЕ</span><br>ОБЛАДНАННЯ</h1>
            <p class="hero-desc">Повний цикл від розробки схеми до встановлення — розподільні щити, шафи управління, АВР та системи автоматики для будь-яких об'єктів.</p>
            <div class="hero-actions btn-group">
                <a href="#contact" class="btn btn-primary">Замовити розрахунок</a>
                <a href="#products" class="btn btn-white scroll-to-btn">Типи щитів</a>
            </div>
        </div>
    </div>
    <?php
        $stats = array(
            array(
                'stat_num' => '500',
                'unit' => '+',
                'stat_label' => "Щитів<br>виготовлено"
            ), array(
                'stat_num' => '6',
                'unit' => 'кВ',
                'stat_label' => 'Максимальна<br>напруга'
            ), array(
                'stat_num' => '5',
                'unit' => ' р.',
                'stat_label' => 'Гарантія на<br>обладнання'
            ), array(
                'stat_num' => '14',
                'unit' => 'дн',
                'stat_label' => 'Виготовлення<br>щита під замовлення'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
    ?>
</section>
<section class="page-section products-section" id="products">
<div class="container">
    <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Що ми виготовляємо</div>
            <h2 class="section-title">ТИПИ ЩИТОВОГО ОБЛАДНАННЯ</h2>
            <p class="section-sub">Виготовляємо та постачаємо щитове обладнання власного виробництва і від провідних виробників.</p>
        </div>
        <div class="products-grid lg-grid-3-columns md-grid-2-columns wf-animate-grid">
            <div class="prod-card wf-animate">
                <div class="prod-thumb t1">
                    <div class="prod-label-top">Розподіл</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="12" y="8" width="48" height="56" rx="3" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"/>
                        <line x1="12" y1="22" x2="60" y2="22" stroke="rgba(255,255,255,0.2)" stroke-width="1"/>
                        <rect x="18" y="28" width="12" height="8" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="32" y="28" width="12" height="8" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="46" y="28" width="8" height="8" rx="1" fill="rgba(45,181,81,0.4)"/>
                        <rect x="18" y="40" width="12" height="8" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="32" y="40" width="12" height="8" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="18" y="52" width="36" height="5" rx="1" fill="rgba(26,95,168,0.4)"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Головний Розподільний Щит (ГРЩ)</div>
                    <p class="prod-desc">Основний розподільний щит будівлі. Прийом електроенергії від трансформаторної підстанції та розподіл по секціях.</p>
                    <ul class="prod-specs">
                        <li>Напруга 0,4 кВ, струм до 6300 А</li>
                        <li>Виконання IP31 – IP65</li>
                        <li>Корпуси ABB, Schneider, Rittal</li>
                        <li>Комплектація АВ Legrand, ABB, Siemens</li>
                    </ul>
                </div>
            </div>
            <div class="prod-card wf-animate">
                <div class="prod-thumb t2">
                    <div class="prod-label-top">Введення</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="10" y="10" width="52" height="52" rx="3" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
                        <rect x="18" y="22" width="14" height="22" rx="2" fill="rgba(255,255,255,0.15)" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                        <rect x="40" y="22" width="14" height="22" rx="2" fill="rgba(45,181,81,0.25)" stroke="rgba(45,181,81,0.5)" stroke-width="1"/>
                        <line x1="25" y1="44" x2="25" y2="52" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"/>
                        <line x1="47" y1="44" x2="47" y2="52" stroke="rgba(45,181,81,0.5)" stroke-width="1.5"/>
                        <path d="M33 33 H39" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Шафа АВР (Автоматичне Введення Резерву)</div>
                    <p class="prod-desc">Автоматичне перемикання між основним і резервним живленням при пропаданні напруги в основній мережі.</p>
                    <ul class="prod-specs">
                        <li>Час перемикання від 0.1 с</li>
                        <li>Потужність від 25 до 6300 А</li>
                        <li>ДГУ-ready, UPS-ready</li>
                        <li>Логер подій та дистанційний моніторинг</li>
                    </ul>
                </div>
            </div>
            <div class="prod-card wf-animate">
                <div class="prod-thumb t3">
                    <div class="prod-label-top">Поверховий</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="14" y="10" width="44" height="52" rx="3" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
                        <line x1="14" y1="20" x2="58" y2="20" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
                        <rect x="20" y="25" width="32" height="4" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="20" y="32" width="32" height="4" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="20" y="39" width="32" height="4" rx="1" fill="rgba(255,255,255,0.15)"/>
                        <rect x="20" y="46" width="32" height="4" rx="1" fill="rgba(45,181,81,0.35)"/>
                        <circle cx="36" cy="16" r="2" fill="rgba(255,255,255,0.4)"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Поверхові та Квартирні Щитки</div>
                    <p class="prod-desc">Щити для житлових будинків, ОСББ, офісів. Розводка по квартирах та загальним споживачам поверху.</p>
                    <ul class="prod-specs">
                        <li>На 12–96 модулів DIN</li>
                        <li>Автомати Legrand, ABB, Schneider</li>
                        <li>УЗО, реле напруги, лічильники</li>
                        <li>Накладне та вбудоване виконання</li>
                    </ul>
                </div>
            </div>
            <div class="prod-card wf-animate">
                <div class="prod-thumb t4">
                    <div class="prod-label-top">Управління</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="10" y="10" width="52" height="52" rx="3" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
                        <circle cx="28" cy="30" r="8" stroke="rgba(26,95,168,0.6)" stroke-width="1.5" fill="none"/>
                        <circle cx="28" cy="30" r="3" fill="rgba(26,95,168,0.5)"/>
                        <circle cx="44" cy="30" r="8" stroke="rgba(45,181,81,0.6)" stroke-width="1.5" fill="none"/>
                        <circle cx="44" cy="30" r="3" fill="rgba(45,181,81,0.5)"/>
                        <rect x="18" y="44" width="36" height="10" rx="2" stroke="rgba(255,255,255,0.25)" stroke-width="1" fill="rgba(255,255,255,0.05)"/>
                        <rect x="22" y="47" width="8" height="4" rx="1" fill="rgba(26,95,168,0.4)"/>
                        <rect x="32" y="47" width="8" height="4" rx="1" fill="rgba(45,181,81,0.4)"/>
                        <rect x="42" y="47" width="8" height="4" rx="1" fill="rgba(255,255,255,0.15)"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Шафи Управління Двигунами (ШУД)</div>
                    <p class="prod-desc">Управління електродвигунами насосів, вентиляторів, конвеєрів. Прямий пуск, реверс, частотне регулювання.</p>
                    <ul class="prod-specs">
                        <li>Струм до 630 А, потужність до 315 кВт</li>
                        <li>Частотні перетворювачі Danfoss, ABB</li>
                        <li>ПЛК Siemens, OMRON, Delta</li>
                        <li>Захист від перевантаження, обриву фаз</li>
                    </ul>
                </div>
            </div>
            <div class="prod-card wf-animate">
                <div class="prod-thumb t5">
                    <div class="prod-label-top">Зовнішній</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="8" y="16" width="56" height="44" rx="3" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
                        <rect x="8" y="8" width="56" height="12" rx="2" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.2)" stroke-width="1"/>
                        <line x1="16" y1="30" x2="56" y2="30" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                        <rect x="16" y="34" width="10" height="14" rx="1" fill="rgba(255,255,255,0.1)"/>
                        <rect x="30" y="34" width="10" height="14" rx="1" fill="rgba(255,255,255,0.1)"/>
                        <rect x="44" y="34" width="10" height="14" rx="1" fill="rgba(26,95,168,0.35)"/>
                        <circle cx="20" cy="24" r="3" fill="rgba(45,181,81,0.5)"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Вуличні КТП та РП</div>
                    <p class="prod-desc">Комплектні трансформаторні підстанції та розподільні пункти зовнішнього встановлення для промислових майданчиків.</p>
                    <ul class="prod-specs">
                        <li>Напруга 6–10 кВ / 0,4 кВ</li>
                        <li>Ступінь захисту IP44–IP65</li>
                        <li>Секційування, обхідна схема</li>
                        <li>Облік та АСКОЕ</li>
                    </ul>
                </div>
            </div>
            <div class="prod-card reveal">
                <div class="prod-thumb t6">
                    <div class="prod-label-top">Автоматика</div>
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" style="z-index:1;position:relative">
                        <rect x="10" y="10" width="52" height="52" rx="3" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
                        <rect x="18" y="18" width="36" height="20" rx="2" fill="rgba(45,181,81,0.12)" stroke="rgba(45,181,81,0.4)" stroke-width="1"/>
                        <text x="36" y="32" text-anchor="middle" font-family="monospace" font-size="9" fill="rgba(45,181,81,0.8)">PLC</text>
                        <line x1="18" y1="44" x2="54" y2="44" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                        <circle cx="24" cy="52" r="3" fill="rgba(26,95,168,0.5)"/>
                        <circle cx="34" cy="52" r="3" fill="rgba(45,181,81,0.5)"/>
                        <circle cx="44" cy="52" r="3" fill="rgba(255,255,255,0.2)"/>
                        <circle cx="54" cy="52" r="3" fill="rgba(255,100,50,0.5)"/>
                    </svg>
                </div>
                <div class="prod-body">
                    <div class="prod-title">Шафи Автоматики та SCADA</div>
                    <p class="prod-desc">Шафи з ПЛК для автоматизації технологічних процесів. Інтеграція в системи диспетчеризації та дистанційного управління.</p>
                    <ul class="prod-specs">
                        <li>ПЛК Siemens S7, Schneider M340</li>
                        <li>Панелі оператора HMI</li>
                        <li>Протоколи Modbus, Profibus, Ethernet</li>
                        <li>Інтеграція в SCADA Wonderware, WinCC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg-dark config-section" id="configurator">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Швидкий підбір</div>
            <h2 class="section-title">КОНФІГУРАТОР ЩИТА</h2>
            <p class="section-sub">Виберіть параметри — отримайте орієнтовну вартість і технічне рішення від наших інженерів.</p>
        </div>
        <div class="config-inner">
            <div class="config-steps reveal">
                <!-- Step 1 -->
                <div class="config-step active" onclick="activateStep(this, 1)">
                    <div class="step-head">
                        <div class="step-num-badge">1</div>
                        <div class="step-title">Тип об'єкта</div>
                    </div>
                    <div class="step-content">
                        <div class="step-options">
                            <div class="step-option">
                                <input type="radio" name="s1" id="s1a" value="Приватний будинок" onchange="updateSummary()" checked>
                                <label for="s1a">Приватний будинок / котедж</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s1" id="s1b" value="Квартира / офіс" onchange="updateSummary()">
                                <label for="s1b">Квартира / офісне приміщення</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s1" id="s1c" value="Комерційний об'єкт" onchange="updateSummary()">
                                <label for="s1c">Комерційний об'єкт (ТЦ, готель, БЦ)</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s1" id="s1d" value="Промислове підприємство" onchange="updateSummary()">
                                <label for="s1d">Промислове підприємство / завод</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="config-step" onclick="activateStep(this, 2)">
                    <div class="step-head">
                        <div class="step-num-badge">2</div>
                        <div class="step-title">Тип щита</div>
                    </div>
                    <div class="step-content">
                        <div class="step-options">
                            <div class="step-option">
                                <input type="radio" name="s2" id="s2a" value="Квартирний / поверховий щиток" onchange="updateSummary()" checked>
                                <label for="s2a">Квартирний / поверховий щиток</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s2" id="s2b" value="Головний розподільний щит (ГРЩ)" onchange="updateSummary()">
                                <label for="s2b">Головний розподільний щит (ГРЩ)</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s2" id="s2c" value="Шафа АВР" onchange="updateSummary()">
                                <label for="s2c">Шафа АВР (автоматичне введення резерву)</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s2" id="s2d" value="Шафа управління двигунами" onchange="updateSummary()">
                                <label for="s2d">Шафа управління двигунами (ШУД)</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s2" id="s2e" value="Шафа автоматики / ПЛК" onchange="updateSummary()">
                                <label for="s2e">Шафа автоматики / ПЛК</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="config-step" onclick="activateStep(this, 3)">
                    <div class="step-head">
                        <div class="step-num-badge">3</div>
                        <div class="step-title">Струм / потужність</div>
                    </div>
                    <div class="step-content">
                        <div class="step-options">
                            <div class="step-option">
                                <input type="radio" name="s3" id="s3a" value="до 63 А (до 40 кВт)" onchange="updateSummary()" checked>
                                <label for="s3a">до 63 А — побутові, невеликі офіси</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s3" id="s3b" value="до 250 А (до 160 кВт)" onchange="updateSummary()">
                                <label for="s3b">63–250 А — комерційні приміщення</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s3" id="s3c" value="до 630 А (до 400 кВт)" onchange="updateSummary()">
                                <label for="s3c">250–630 А — середні підприємства</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s3" id="s3d" value="від 630 А (від 400 кВт)" onchange="updateSummary()">
                                <label for="s3d">від 630 А — великі промислові об'єкти</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="config-step" onclick="activateStep(this, 4)">
                    <div class="step-head">
                        <div class="step-num-badge">4</div>
                        <div class="step-title">Клас обладнання</div>
                    </div>
                    <div class="step-content">
                        <div class="step-options">
                            <div class="step-option">
                                <input type="radio" name="s4" id="s4a" value="Стандарт (IEK, DEKraft)" onchange="updateSummary()" checked>
                                <label for="s4a">Стандарт — IEK, DEKraft, EKF</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s4" id="s4b" value="Преміум (Legrand, Schneider)" onchange="updateSummary()">
                                <label for="s4b">Преміум — Legrand, Schneider Electric</label>
                            </div>
                            <div class="step-option">
                                <input type="radio" name="s4" id="s4c" value="Топ (ABB, Siemens)" onchange="updateSummary()">
                                <label for="s4c">Топ клас — ABB, Siemens</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Summary -->
            <div class="config-summary reveal">
                <div class="summary-title">Ваша конфігурація</div>
                <div class="summary-rows">
                    <div class="summary-row">
                        <span class="sum-key">Об'єкт</span>
                        <span class="sum-val" id="sv-obj">Приватний будинок</span>
                    </div>
                    <div class="summary-row">
                        <span class="sum-key">Тип щита</span>
                        <span class="sum-val" id="sv-type">Квартирний / поверховий</span>
                    </div>
                    <div class="summary-row">
                        <span class="sum-key">Струм</span>
                        <span class="sum-val" id="sv-curr">до 63 А</span>
                    </div>
                    <div class="summary-row">
                        <span class="sum-key">Обладнання</span>
                        <span class="sum-val" id="sv-class">Стандарт</span>
                    </div>
                    <div class="summary-row">
                        <span class="sum-key">Термін виготовлення</span>
                        <span class="sum-val green" id="sv-time">7–10 днів</span>
                    </div>
                </div>
                <div class="sum-total">
                    <span class="sum-total-label">Орієнтовна вартість</span>
                    <span class="sum-total-val" id="sv-price">12 000 грн</span>
                </div>
                <p class="config-note">* Розрахунок орієнтовний. Точна ціна — після погодження технічного завдання з інженером.</p>
                <button class="btn-config btn btn-primary" onclick="sendConfig()">Отримати точний розрахунок →</button>
            </div>
        </div>
    </div>
</section>
<section class="page-section features-split">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Наші переваги</div>
            <h2 class="section-title">ЧОМУ ОБИРАЮТЬ НАС</h2>
        </div>
        <div class="lg-grid-2-columns lg-gap-64 features-inner">
            <div class="features-visual wf-animate">
                <div class="vis-accent"></div>
                <!-- panel diagram SVG -->
                <svg width="320" height="340" viewBox="0 0 320 340" fill="none" style="position:relative;z-index:1">
                    <defs>
                    <linearGradient id="pg1" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#1a5fa8" stop-opacity=".6"/>
                        <stop offset="100%" stop-color="#2db551" stop-opacity=".4"/>
                    </linearGradient>
                    </defs>
                    <!-- cabinet outline -->
                    <rect x="60" y="20" width="200" height="300" rx="4" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                    <!-- top section header -->
                    <rect x="60" y="20" width="200" height="40" rx="4" fill="rgba(26,95,168,0.2)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <text x="160" y="45" text-anchor="middle" font-family="'Bebas Neue',sans-serif" font-size="13" fill="rgba(255,255,255,0.7)" letter-spacing="2">ГРЩ-01</text>
                    <!-- bus bar -->
                    <rect x="76" y="72" width="168" height="6" rx="1" fill="url(#pg1)" opacity=".8"/>
                    <!-- breaker rows -->
                    <rect x="76" y="86" width="28" height="36" rx="2" fill="rgba(26,95,168,0.3)" stroke="rgba(26,95,168,0.5)" stroke-width="1"/>
                    <rect x="108" y="86" width="28" height="36" rx="2" fill="rgba(26,95,168,0.3)" stroke="rgba(26,95,168,0.5)" stroke-width="1"/>
                    <rect x="140" y="86" width="28" height="36" rx="2" fill="rgba(26,95,168,0.3)" stroke="rgba(26,95,168,0.5)" stroke-width="1"/>
                    <rect x="172" y="86" width="28" height="36" rx="2" fill="rgba(45,181,81,0.25)" stroke="rgba(45,181,81,0.5)" stroke-width="1"/>
                    <rect x="204" y="86" width="28" height="36" rx="2" fill="rgba(26,95,168,0.3)" stroke="rgba(26,95,168,0.5)" stroke-width="1"/>
                    <!-- handles -->
                    <rect x="86" y="96" width="8" height="16" rx="1" fill="rgba(255,255,255,0.35)"/>
                    <rect x="118" y="96" width="8" height="16" rx="1" fill="rgba(255,255,255,0.35)"/>
                    <rect x="150" y="96" width="8" height="16" rx="1" fill="rgba(255,255,255,0.35)"/>
                    <rect x="182" y="96" width="8" height="16" rx="1" fill="rgba(45,181,81,0.8)"/>
                    <rect x="214" y="96" width="8" height="16" rx="1" fill="rgba(255,255,255,0.35)"/>
                    <!-- second row -->
                    <rect x="76" y="132" width="168" height="6" rx="1" fill="rgba(255,255,255,0.08)"/>
                    <rect x="76" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <rect x="98" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <rect x="120" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <rect x="142" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <rect x="164" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <rect x="186" y="146" width="18" height="28" rx="2" fill="rgba(45,181,81,0.2)" stroke="rgba(45,181,81,0.4)" stroke-width="1"/>
                    <rect x="208" y="146" width="18" height="28" rx="2" fill="rgba(26,95,168,0.25)" stroke="rgba(26,95,168,0.4)" stroke-width="1"/>
                    <!-- meter display -->
                    <rect x="76" y="190" width="80" height="48" rx="2" fill="rgba(0,0,0,0.3)" stroke="rgba(45,181,81,0.3)" stroke-width="1"/>
                    <text x="116" y="213" text-anchor="middle" font-family="monospace" font-size="11" fill="rgba(45,181,81,0.8)">380.4 V</text>
                    <text x="116" y="229" text-anchor="middle" font-family="monospace" font-size="10" fill="rgba(45,181,81,0.5)">148.3 A</text>
                    <!-- status leds -->
                    <circle cx="180" cy="202" r="4" fill="#2db551" opacity=".8"/>
                    <circle cx="195" cy="202" r="4" fill="#2db551" opacity=".8"/>
                    <circle cx="210" cy="202" r="4" fill="rgba(255,165,0,0.7)"/>
                    <circle cx="225" cy="202" r="4" fill="rgba(255,255,255,0.2)"/>
                    <!-- cable entry -->
                    <rect x="76" y="250" width="168" height="50" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                    <line x1="100" y1="260" x2="100" y2="295" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                    <line x1="120" y1="260" x2="120" y2="295" stroke="rgba(26,95,168,0.4)" stroke-width="2"/>
                    <line x1="140" y1="260" x2="140" y2="295" stroke="rgba(45,181,81,0.4)" stroke-width="2"/>
                    <line x1="160" y1="260" x2="160" y2="295" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                    <line x1="180" y1="260" x2="180" y2="295" stroke="rgba(26,95,168,0.4)" stroke-width="2"/>
                    <line x1="200" y1="260" x2="200" y2="295" stroke="rgba(45,181,81,0.4)" stroke-width="2"/>
                    <line x1="220" y1="260" x2="220" y2="295" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                </svg>
            </div>
            <div class="features-list wf-animate">
                <div class="feat-item">
                    <div class="feat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.7">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <path d="m9 15 2 2 4-4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feat-title">Власне виробництво — щити під замовлення</div>
                        <div class="feat-desc">Збираємо щити в власній майстерні за індивідуальними схемами. Від простого квартирного до складного ГРЩ з секціонуванням.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.7">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feat-title">Виготовлення за 14 робочих днів</div>
                        <div class="feat-desc">Стандартний термін для щита будь-якої складності. Терміновий монтаж — за 5–7 днів за погодженням. Фото-звіт по кожному етапу.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.7">
                            <path d="M12 2L3 7v10l9 5 9-5V7l-9-5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feat-title">Офіційні бренди з гарантією</div>
                        <div class="feat-desc">Офіційний дистриб'ютор ABB, Legrand, Schneider Electric, Siemens. Гарантія від виробника, не від посередника.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.7">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M9 9h6M9 13h4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feat-title">Повний пакет документації</div>
                        <div class="feat-desc">Принципова схема, монтажна схема розташування, специфікація, паспорт щита, протоколи випробувань — все включено.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2db551" stroke-width="1.7">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feat-title">Монтаж і введення в експлуатацію</div>
                        <div class="feat-desc">Поставка, монтаж, підключення, перевірка — все виконує одна команда. Гарантія 5 років на обладнання, 3 роки на монтаж.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Реалізовані об'єкти</div>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
            <div class="section-sub">Від квартирного щитка до ГРЩ промислового підприємства — досвід на будь-якому масштабі.</div>
        </div>
        <div class="projects-grid wf-animate-grid">
            <div class="project-card featured wf-animate">
            <div class="project-tag">Промисловий об'єкт</div>
            <div class="project-title">ГРЩ для Виробничого Підприємства 3200 А</div>
            <p class="project-desc" style="max-width:360px;line-height:1.85;margin-top:4px">Проектування та виготовлення головного розподільного щита на струм 3200 А з секціонуванням, шафою АВР та системою АСКОЕ. Монтаж і введення в дію.</p>
            <div class="proj-meta">
                <span class="proj-meta-item">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    2023 рік
                </span> 
                <span class="proj-meta-item">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    Дніпро
                </span>
            </div>
            <div class="project-power">3200 А</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Сонячна енергетика</div>
            <div class="project-title">Промислова СЕС 40 МВт</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Будівництво та запуск. Монтаж трансформаторної підстанції. 2019 р.</p>
            <div class="project-meta" style="margin-top:20px">2019 / Промисловий</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Кабельні лінії</div>
            <div class="project-title">Повітряні Лінії 0,4 кВ</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Модернізація та прокладка нових ліній зв'язку та освітлення від розподільчих підстанцій.</p>
            <div class="project-meta" style="margin-top:20px">2021 / Інфраструктура</div>
        </div>
        <div class="project-card wf-animate">
            <div class="project-tag">Автоматика</div>
            <div class="project-title">Шафа ПЛК для Насосної Станції</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Siemens S7-1200, HMI панель, дистанційне управління 8 насосами, інтеграція в SCADA.</p>
            <div class="project-meta" style="margin-top:20px">Ongoing / Комерційні</div>
        </div>
    </div>
</section>
<section class="page-section faq-section page-section-bg2" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Відповіді на питання</div>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи виготовляєте ви щити за нестандартними схемами?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, це наша основна спеціалізація. Ми працюємо за схемою замовника або розробляємо схему самостійно на основі технічного завдання. Будь-яка конфігурація — від простого щитка до складного ГРЩ з секціонуванням, АВР та системою обліку.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна замовити щит із постачанням без монтажу?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Звісно. Ми постачаємо готові щити з повним пакетом документації. Якщо у вас є власна монтажна організація — ми надамо всю необхідну технічну документацію для встановлення.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка мінімальна і максимальна потужність щита?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Від мінімального квартирного щитка на 16 А до головного розподільного щита промислового підприємства на 6300 А і вище. При потужності понад 6300 А розглядаємо індивідуально та залучаємо партнерів-виробників комплектних розподільних пристроїв.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка гарантія на щитове обладнання?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Стандартний щиток на 24–48 модулів — 5–7 днів. ГРЩ або шафа АВР середньої складності — 10–14 днів. Промислова шафа з ПЛК та складною автоматикою — 20–30 днів. Термінове виготовлення можливе за доплату та попереднім погодженням.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка гарантія на щитове обладнання?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Гарантія виробника на компоненти (автомати, УЗО, корпуси) — 5 років. Наша гарантія на складальні роботи та монтаж — 3 роки. При виникненні гарантійного випадку — безкоштовний виїзд інженера та усунення протягом 48 годин.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи є у вас щити в наявності на складі?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">На складі постійно є типові квартирні та поверхові щитки на 24, 36 та 48 модулів у комплектації Legrand і ABB. Також тримаємо запас корпусів і компонентів для швидкого збирання нестандартних конфігурацій.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ЗАМОВТЕ ЩИТОВЕ ОБЛАДНАННЯ<br>ПІД ВАШІ ЗАДАЧІ</div>
                <p class="cta-band-sub">Надішліть схему або опишіть об'єкт — наші інженери підберуть оптимальне рішення і нададуть комерційну пропозицію протягом 24 годин.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions  justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>  
    
<?php get_template_part('template-parts/general/contact-us'); ?>
<?php
get_footer();