<?php 
/*
  Template Name: Ses for OSBB
 */
get_header();
?>
    <section class="hero hero-ses-for-osbb">
        <div class="hero-photo"></div>
        <!-- animated building + sun deco -->
        <div class="hero-deco">
            <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
                <defs>
                    <linearGradient id="sg" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#2db551" stop-opacity=".5"/>
                        <stop offset="100%" stop-color="#1a5fa8" stop-opacity=".2"/>
                    </linearGradient>
                    <radialGradient id="sun" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#f5c518" stop-opacity=".5"/>
                        <stop offset="100%" stop-color="#f5c518" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <!-- sun glow -->
                <circle cx="700" cy="120" r="140" fill="url(#sun)" opacity=".35"/>
                <!-- rays -->
                <line x1="700" y1="0" x2="700" y2="-20" stroke="rgba(245,197,24,.25)" stroke-width="2"/>
                <line x1="800" y1="50" x2="830" y2="30" stroke="rgba(245,197,24,.2)" stroke-width="1.5"/>
                <line x1="600" y1="50" x2="570" y2="30" stroke="rgba(245,197,24,.2)" stroke-width="1.5"/>
                <!-- building silhouette -->
                <rect x="500" y="350" width="400" height="550" fill="rgba(255,255,255,.03)" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                <!-- windows grid -->
                <rect x="520" y="380" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="580" y="380" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="640" y="380" width="50" height="35" fill="rgba(45,181,81,.08)" rx="1"/>
                <rect x="700" y="380" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="760" y="380" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="820" y="380" width="60" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="520" y="430" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="580" y="430" width="50" height="35" fill="rgba(26,95,168,.12)" rx="1"/>
                <rect x="640" y="430" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="700" y="430" width="50" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <rect x="760" y="430" width="50" height="35" fill="rgba(45,181,81,.08)" rx="1"/>
                <rect x="820" y="430" width="60" height="35" fill="rgba(255,255,255,.04)" rx="1"/>
                <!-- solar panels on roof -->
                <rect x="510" y="330" width="380" height="20" fill="rgba(26,95,168,.15)" stroke="rgba(26,95,168,.3)" stroke-width="1"/>
                <line x1="572" y1="330" x2="572" y2="350" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                <line x1="636" y1="330" x2="636" y2="350" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                <line x1="700" y1="330" x2="700" y2="350" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                <line x1="764" y1="330" x2="764" y2="350" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                <line x1="828" y1="330" x2="828" y2="350" stroke="rgba(26,95,168,.2)" stroke-width="1"/>
                <!-- energy flow lines from roof to ground -->
                <path d="M700 350 Q700 420 620 480" stroke="rgba(45,181,81,.2)" stroke-width="1.5" fill="none" stroke-dasharray="6 6"/>
                <path d="M700 350 Q700 440 780 510" stroke="rgba(45,181,81,.15)" stroke-width="1.5" fill="none" stroke-dasharray="6 6"/>
                <!-- left building partial -->
                <rect x="200" y="450" width="250" height="450" fill="rgba(255,255,255,.02)" stroke="rgba(255,255,255,.04)" stroke-width="1"/>
                <!-- right building partial -->
                <rect x="950" y="400" width="250" height="500" fill="rgba(255,255,255,.02)" stroke="rgba(255,255,255,.04)" stroke-width="1"/>
            </svg>
        </div>
        <div class="hero-tint"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-label">Відновлювана енергія для будинків</div>
                <h1 class="hero-title">
                    <span class="accent-blue">СЕС</span> ДЛЯ<br><span class="accent-green">ОСББ</span>
                </h1>
                <p class="hero-desc">Знижуємо витрати на електрику в місцях загального користування на 60–90%. Монтаж «під ключ», допомога з документами та «зеленим тарифом».</p>
                <div class="hero-actions">
                    <a href="#calc" class="btn btn-primary" style="padding:13px 32px;font-size:12px">Розрахувати економію</a>
                    <a href="#why" class="btn btn-white">Як це працює</a>
                </div>
            </div>
            <?php 
                $stats = array(
                    array(
                        'stat_num' => '60',
                        'unit' => '-90%',
                        'stat_label' => 'Зниження витрат<br>на електроенергію'
                    ), array(
                        'stat_num' => '4–6',
                        'unit' => ' р.',
                        'stat_label' => 'Термін<br>окупності'
                    ), array(
                        'stat_num' => '25',
                        'unit' => ' р.',
                        'stat_label' => 'Гарантія<br>на панелі'
                    ), array(
                        'stat_num' => '40',
                        'unit' => '+',
                        'stat_label' => 'ОСББ вже<br>з нашими СЕС'
                    )
                );
                get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
            ?> 
        </div>
    </section>
    <section class="page-section page-section-why" id="why">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label">Переваги для ОСББ</div>
                <h2 class="section-title">ЧОМУ ОСББ ПОТРЕБУЄ СЕС</h2>
                <div class="section-sub">Електроенергія для місць загального користування — ліфти, освітлення, насоси — це одна з найбільших статей витрат кожного ОСББ.</div>
            </div>
            <div class="why-rows">
                <div class="why-row reveal">
                    <div class="why-visual c1">
                        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" style="position:relative;z-index:1">
                            <circle cx="80" cy="60" r="36" stroke="rgba(255,255,255,.35)" stroke-width="2" fill="none"/>
                            <path d="M80 30 L72 55 H80 L72 85 L96 48 H84 Z" fill="rgba(245,197,24,.85)"/>
                            <rect x="20" y="110" width="120" height="8" rx="2" fill="rgba(255,255,255,.15)"/>
                            <rect x="35" y="122" width="6" height="28" fill="rgba(255,255,255,.1)"/>
                            <rect x="77" y="122" width="6" height="28" fill="rgba(255,255,255,.1)"/>
                            <rect x="119" y="122" width="6" height="28" fill="rgba(255,255,255,.1)"/>
                        </svg>
                    </div>
                    <div class="why-text">
                        <div class="why-num">01</div>
                        <div class="why-title">Реальна економія на спільних витратах</div>
                        <p class="why-desc">Електроенергія для освітлення під'їздів, ліфтів, насосів водопостачання та відеоспостереження коштує ОСББ від 15 000 до 80 000 грн на місяць залежно від розміру будинку.</p>
                        <ul class="why-bullets">
                            <li>СЕС 20–80 кВт покриває 60–90% загального споживання</li>
                            <li>Надлишок продається в мережу за зеленим тарифом</li>
                            <li>Мешканці бачать зниження щомісячних внесків</li>
                        </ul>
                    </div>
                </div>
                <div class="why-row reverse reveal">
                    <div class="why-visual c2">
                        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" style="position:relative;z-index:1">
                            <rect x="30" y="50" width="100" height="70" rx="3" stroke="rgba(255,255,255,.35)" stroke-width="1.5" fill="none"/>
                            <line x1="30" y1="72" x2="130" y2="72" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                            <rect x="40" y="80" width="18" height="12" rx="1" fill="rgba(255,255,255,.15)"/>
                            <rect x="62" y="80" width="18" height="12" rx="1" fill="rgba(255,255,255,.15)"/>
                            <rect x="84" y="80" width="18" height="12" rx="1" fill="rgba(45,181,81,.4)"/>
                            <rect x="106" y="80" width="14" height="12" rx="1" fill="rgba(255,255,255,.15)"/>
                            <rect x="40" y="98" width="18" height="12" rx="1" fill="rgba(255,255,255,.15)"/>
                            <rect x="62" y="98" width="18" height="12" rx="1" fill="rgba(26,95,168,.4)"/>
                            <rect x="84" y="98" width="18" height="12" rx="1" fill="rgba(255,255,255,.15)"/>
                            <path d="M80 30 L80 50" stroke="rgba(255,255,255,.3)" stroke-width="2" stroke-dasharray="4 3"/>
                            <circle cx="80" cy="26" r="8" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <div class="why-text">
                        <div class="why-num">02</div>
                        <div class="why-title">Незалежність від тарифів та відключень</div>
                        <p class="why-desc">Власна генерація захищає ОСББ від зростання тарифів на електроенергію та часткових відключень. Опціонально — акумуляторний резерв для критично важливих споживачів.</p>
                        <ul class="why-bullets">
                            <li>Ліфт і підсвічування під'їздів — навіть при відключенні мережі</li>
                            <li>Фіксована вартість електрики на 25+ років</li>
                            <li>Захист від тарифних сюрпризів</li>
                        </ul>
                    </div>
                </div>
                <div class="why-row reveal">
                    <div class="why-visual c3">
                        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" style="position:relative;z-index:1">
                            <path d="M80 20 L30 48 v64 l50 28 50-28V48 Z" stroke="rgba(255,255,255,.3)" stroke-width="1.5" fill="none"/>
                            <path d="M80 40 L50 57 v46 l30 16 30-16V57 Z" fill="rgba(255,255,255,.05)" stroke="rgba(45,181,81,.35)" stroke-width="1"/>
                            <circle cx="80" cy="80" r="16" fill="rgba(45,181,81,.2)" stroke="rgba(45,181,81,.5)" stroke-width="1.5"/>
                            <path d="M74 80 l5 5 8-8" stroke="rgba(45,181,81,.9)" stroke-width="2" stroke-linecap="round" fill="none"/>
                        </svg>
                    </div>
                    <div class="why-text">
                        <div class="why-num">03</div>
                        <div class="why-title">Підвищення цінності квартир і репутації</div>
                        <p class="why-desc">ОСББ з власною сонячною станцією — це сучасний і екологічно свідомий будинок. Квартири в таких будинках вищі за ціною, а мешканці лояльніші до управління.</p>
                        <ul class="why-bullets">
                            <li>Зниження щомісячних внесків мешканців</li>
                            <li>Привабливість для нових жителів і покупців квартир</li>
                            <li>Статус сертифікованого «зеленого будинку»</li>
                        </ul>
                    </div>
                </div>
                <div class="why-row reverse reveal">
                    <div class="why-visual c4">
                        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" style="position:relative;z-index:1">
                            <rect x="25" y="40" width="48" height="80" rx="2" stroke="rgba(255,255,255,.25)" stroke-width="1.5" fill="rgba(255,255,255,.04)"/>
                            <rect x="87" y="55" width="48" height="65" rx="2" stroke="rgba(255,255,255,.25)" stroke-width="1.5" fill="rgba(255,255,255,.04)"/>
                            <!-- panels on both -->
                            <rect x="28" y="33" width="42" height="10" rx="1" fill="rgba(26,95,168,.25)" stroke="rgba(26,95,168,.4)" stroke-width="1"/>
                            <rect x="90" y="48" width="42" height="10" rx="1" fill="rgba(45,181,81,.2)" stroke="rgba(45,181,81,.4)" stroke-width="1"/>
                            <!-- connection -->
                            <path d="M73 38 Q80 38 80 55 Q80 63 87 58" stroke="rgba(45,181,81,.4)" stroke-width="1.5" fill="none" stroke-dasharray="4 3"/>
                            <!-- meter box -->
                            <rect x="60" y="105" width="40" height="28" rx="2" fill="rgba(255,255,255,.06)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
                            <text x="80" y="122" text-anchor="middle" font-family="monospace" font-size="9" fill="rgba(45,181,81,.7)">kWh</text>
                        </svg>
                    </div>
                    <div class="why-text">
                        <div class="why-num">04</div>
                        <div class="why-title">Спільне фінансування та держпідтримка</div>
                        <p class="why-desc">ОСББ може встановити СЕС коштом спільних накопичень, банківського кредиту або програм державного співфінансування. Ми допоможемо оформити всі документи.</p>
                        <ul class="why-bullets">
                            <li>Програми «Теплі кредити» та енергоефективності ОСББ</li>
                            <li>Можливість поєднання з утепленням будинку</li>
                            <li>Пільгові кредити Укргазбанку та Ощадбанку</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section page-section-bg-dark" id="process">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label">Як ми працюємо</div>
                <h2 class="section-title">ПРОЦЕС ВСТАНОВЛЕННЯ</h2>
                <p class="section-sub">Від першого дзвінка до запуску системи — чітко і прозоро, без сюрпризів.</p>
            </div>
            <div class="steps d-grid lg-grid-5-columns wf-animate-grid position-relative">
                <div class="step wf-animate">
                    <div class="step-num">
                        01
                        <div class="step-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13"/>
                            </svg>
                        </div>
                    </div>
                    <div class="step-title">Консультація</div>
                    <div class="step-desc">Безкоштовний виїзд інженера, аналіз споживання та оцінка даху</div>
                </div>
                <div class="step wf-animate">
                    <div class="step-num">
                        02
                        <div class="step-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M9 9h6M9 13h4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="step-title">Проєктування</div>
                    <div class="step-desc">Технічний проєкт, специфікація обладнання, фінансова модель</div>
                </div>
                <div class="step wf-animate">
                    <div class="step-num">
                        03
                        <div class="step-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                <path d="M4 4h16v16H4z M9 9h6M9 13h4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="step-title">Документи</div>
                    <div class="step-desc">Погодження з обленерго, дозволи, договір на зелений тариф</div>
                </div>
                <div class="step wf-animate">
                    <div class="step-num">
                        04
                        <div class="step-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="step-title">Монтаж</div>
                    <div class="step-desc">Встановлення панелей, інвертора, кабельних ліній — 1–3 дні</div>
                </div>
                <div class="step wf-animate">
                    <div class="step-num">
                        05
                        <div class="step-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </div>
                    </div>
                    <div class="step-title">Запуск</div>
                    <div class="step-desc">Пусконалагодження, підключення до мережі, налаштування моніторингу</div>
                </div>
            </div>
            <div class="info-band lg-grid-4-columns md-grid-2-columns gap-0 wf-animate-grid position-relative mt-80">
                <div class="ib-item wf-animate">
                    <div class="ib-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div>
                        <div class="ib-title">Монтаж за 2–5 днів</div>
                        <div class="ib-desc">Без зупинки роботи будинку — ліфт та освітлення працюють увесь час монтажу</div>
                    </div>
                </div>
                <div class="ib-item wf-animate">
                    <div class="ib-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <path d="m9 15 2 2 4-4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="ib-title">Усі документи — наша робота</div>
                        <div class="ib-desc">Погодження з обленерго, договір зеленого тарифу, акти введення в експлуатацію</div>
                    </div>
                </div>
                <div class="ib-item wf-animate">
                    <div class="ib-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M12 2L3 7v10l9 5 9-5V7l-9-5z"/>
                            <polyline points="3 7 12 12 21 7"/>
                        </svg>
                    </div>
                    <div>
                        <div class="ib-title">Гарантія 25 років на панелі</div>
                        <div class="ib-desc">Виробнича гарантія продуктивності 90% панелей через 25 років роботи</div>
                    </div>
                </div>
                <div class="ib-item wf-animate">
                    <div class="ib-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div>
                        <div class="ib-title">Моніторинг у реальному часі</div>
                        <div class="ib-desc">Голова ОСББ бачить виробіток і економію в мобільному додатку 24/7</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="calc">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label">Фінансова вигода</div>
                <h2 class="section-title">ЕКОНОМІКА ПРОЄКТУ</h2>
                <div class="section-sub">Реальні цифри — скільки коштує, скільки заощаджує і коли окупається СЕС для типового ОСББ.</div>
            </div>
            <div class="eco-inner lg-grid-2-columns gap-48">
                <div class="eco-cards reveal">
                    <div class="eco-card">
                        <div class="eco-num">4–6</div>
                        <div>
                            <div class="eco-title">Років — термін окупності</div>
                            <div class="eco-desc">При типовому споживанні ОСББ 3 000–8 000 кВт·год/міс і поточних тарифах. При підключенні до зеленого тарифу — 3–4 роки.</div>
                        </div>
                    </div>
                    <div class="eco-card">
                        <div class="eco-num">90%</div>
                        <div>
                            <div class="eco-title">Покриття потреб у сезон</div>
                            <div class="eco-desc">Влітку система повністю або майже повністю покриває споживання МЗК і генерує надлишки для продажу в мережу.</div>
                        </div>
                    </div>
                    <div class="eco-card">
                        <div class="eco-num">3×</div>
                        <div>
                            <div class="eco-title">Прибуток понад інвестицію</div>
                            <div class="eco-desc">За 25 років роботи система повертає 200–300% початкових інвестицій у вигляді зекономленої та проданої електроенергії.</div>
                        </div>
                    </div>
                    <div class="eco-card">
                        <div class="eco-num">0 грн</div>
                        <div>
                            <div class="eco-title">Вартість технічного обслуговування</div>
                            <div class="eco-desc">Сонячні панелі не мають рухомих частин. Єдине обслуговування — щорічне промивання водою, яке мешканці можуть виконати самостійно.</div>
                        </div>
                    </div>
                </div>
                <!-- Calculator -->
                <div class="eco-calc calc-form calc-form-dark wf-animate" id="eco-calc">
                    <div class="calc-form-title">Калькулятор економії ОСББ</div>
                        <div class="form-group calc-field">
                            <label>Кількість квартир в будинку</label>
                            <input type="number" id="c-flats" value="60" min="10" max="500" placeholder="Наприклад: 60"/>
                        </div>
                        
                    <div class="form-row">
                        <div class="form-group calc-field">
                            <label>Кількість поверхів</label>
                            <input type="number" id="c-floors" value="9" min="3" max="30" placeholder="9"/>
                        </div>
                        <div class="form-group calc-field">
                            <label>Наявність ліфту</label>
                            <select id="c-lift">
                                <option value="1">Так</option>
                                <option value="0">Немає</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group calc-field">
                        <label>Тариф за електроенергію (грн/кВт·год)</label>
                        <input type="number" id="c-tariff" value="4.32" step="0.01" min="1"/>
                    </div>
                    <div class="form-group calc-field">
                        <label>Регіон</label>
                        <select id="c-region">
                            <option value="4.8">Південь (Одеса, Херсон)</option>
                            <option value="4.5" selected>Центр (Київ, Дніпро)</option>
                            <option value="4.2">Захід (Львів, Тернопіль)</option>
                            <option value="4.0">Північ (Чернігів, Суми)</option>
                        </select>
                    </div>
                    <button class="btn btn-primary w-full-btn" onclick="calcOsbb()">Розрахувати →</button>
                    <div class="calc-result calc-results" id="calc-res">
                        <div class="result-row"><span class="result-key">Рекомендована потужність СЕС</span><span class="result-val white" id="r-pow">—</span></div>
                        <div class="result-row"><span class="result-key">Кількість панелей</span><span class="result-val white" id="r-pnl">—</span></div>
                        <div class="result-row"><span class="result-key">Орієнтовна вартість</span><span class="result-val white" id="r-cost">—</span></div>
                        <div class="result-row"><span class="result-key">Річна економія</span><span class="result-val green" id="r-save">—</span></div>
                        <div class="result-row"><span class="result-key">Зниження внесків (на кв.)</span><span class="result-val green" id="r-flat">—</span></div>
                        <div class="result-row"><span class="result-key">Термін окупності</span><span class="result-val green" id="r-back">—</span></div>
                        <div class="result-total">
                            <span class="cr-tl">Економія за 25 років</span>
                            <span class="cr-tv" id="r-25">—</span>
                        </div>
                        <p style="font-size:11px;color:rgba(255,255,255,.25);line-height:1.6;margin-top:12px">* Розрахунок орієнтовний. Точний проект — після аудиту об'єкта.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section page-section-bg2" id="projects">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label">Реалізовані об'єкти</div>
                <h2 class="section-title">ОСББ ЯКІ ВЖЕ ЕКОНОМЛЯТЬ</h2>
                <div class="section-sub">Більше 40 ОСББ по всій Україні вже знизили витрати на електрику завдяки нашим СЕС.</div>
            </div>
            <div class="projects-grid wf-animate-grid">
                <div class="project-card featured wf-animate">
                <div class="project-tag">ОСББ · Київ</div>
                <div class="project-title">«Оболонь-Центр» — 80 кВт, 180 квартир</div>
                <p class="project-desc" style="max-width:340px;line-height:1.85;margin-top:4px">9-поверховий будинок 1970-х років. Встановили СЕС 80 кВт на даху з 180 панелями LONGi Hi-MO. Місячна економія — 28 000 грн. Акумулятор 40 кВт·год для нічного освітлення.</p>
                <div class="project-power">80 кВт</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">ОСББ · Львів</div>
                <div class="project-title">«Сихів-2» — 45 кВт, 96 квартир</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">СЕС на даху 5-поверхового будинку. Покриття 78% потреб МЗК. Річна економія 130 000 грн.</p>
                <div class="project-power">45 кВт</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">ОСББ · Дніпро</div>
                <div class="project-title">«Перемога» — 60 кВт + АКБ</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Гібридна система з накопичувачем 30 кВт·год. Ліфт і підсвічування — навіть під час відключень.</p>
                <div class="project-power">60 кВт</div>
            </div>
            <div class="project-card wf-animate">
                <div class="project-tag">ОСББ · Харків</div>
                <div class="project-title">«Салтівка» — 120 кВт, 2 будинки</div>
                <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Спільна СЕС для двох будинків одного ОСББ. Найбільший наш проект для ОСББ. Зелений тариф.</p>
                <div class="project-power">120 кВт</div>
            </div>
        </div>
    </section>
    <section class="page-section testimonials-section page-section-bg2">
        <div class="container">
            <div class="page-section-header wf-animate mb-5">
                <div class="section-label">Відгуки</div>
                <h2 class="section-title">ЩО КАЖУТЬ ГОЛОВИ ОСББ</h2>
            </div>
            <div class="testimonials-grid wf-animate-grid d-grid md-grid-3-columns">
                <div class="testimonials-card wf-animate">
                    <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <div class="testimonials-quote">"</div>
                    <p class="testimonials-text">Після встановлення СЕС наш ОСББ платить за електроенергію МЗК на 68% менше. Мешканці в захваті — внески знизились на 180 грн/кв на місяць. Процес монтажу зайняв лише 3 дні і жодного разу не зупиняв ліфт.</p>
                    <div class="testimonials-sep"></div>
                    <div class="testimonials-name">Оксана Вишневська</div>
                    <div class="testimonials-role">Голова ОСББ «Оболонь-Центр», Київ</div>
                </div>
                <div class="testimonials-card wf-animate">
                    <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <div class="testimonials-quote">"</div>
                    <p class="testimonials-text">Найбільшим питанням для нас було рішення зборів — всі боялись, що це складно. Прогрес Електрик підготували всі документи і навіть прийшли на збори пояснити мешканцям деталі. Голосували «за» одноголосно.</p>
                    <div class="testimonials-sep"></div>
                    <div class="testimonials-name">Михайло Романенко</div>
                    <div class="testimonials-role">Голова ОСББ «Сихів-2», Львів</div>
                </div>
                <div class="testimonials-card wf-animate">
                    <div class="testimonials-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <div class="testimonials-quote">"</div>
                    <p class="testimonials-text">Встановили гібридну систему з акумулятором. Під час відключень світло в під'їздах і ліфт працюють як ні в чому не бувало. Мешканці більше не скаржаться на темні сходи. Щиро рекомендую Прогрес Електрик.</p>
                    <div class="testimonials-sep"></div>
                    <div class="testimonials-name">Тетяна Гриценко</div>
                    <div class="testimonials-role">Голова ОСББ «Перемога», Дніпро</div>
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
                        Чи потрібне рішення зборів мешканців?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Так, для встановлення СЕС на даху будинку необхідне рішення загальних зборів ОСББ (не менше 75% голосів відповідно до Закону «Про ОСББ»). Ми допоможемо підготувати всі матеріали для зборів: презентацію, фінансову модель і проект рішення.</div>
                    </div>
                </div>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        Яка мінімальна площа даху потрібна для СЕС?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Для системи 20 кВт достатньо 120–140 м² даху. Система 80 кВт потребує близько 480–520 м². Враховуємо технологічні відступи від парапетів та вентиляційних шахт. Наш інженер безкоштовно оцінить дах і запропонує оптимальне рішення.</div>
                    </div>
                </div>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        Чи можна встановити СЕС на старому даху?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Можна, але спочатку оцінюємо стан покрівлі. Якщо дах потребує ремонту — краще зробити його до монтажу СЕС. Ми використовуємо кріплення, які не пошкоджують покрівельне покриття та забезпечують гідроізоляцію місць кріплення.</div>
                    </div>
                </div>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        Як розподіляється електроенергія між квартирами і МЗК?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">СЕС підключається до загальних лічильників ОСББ і живить тільки спільні споживачі — ліфт, освітлення під'їздів, насоси, камери. Квартири не підключаються до СЕС безпосередньо. Надлишкова електроенергія направляється в мережу за зеленим тарифом.</div>
                    </div>
                </div>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        Які програми фінансування доступні для ОСББ?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Доступні кілька варіантів: власні накопичення ОСББ, пільгові кредити Укргазбанку та Ощадбанку для ОСББ (ставки 3–7%), програма «Теплі кредити» (держкомпенсація до 35% вартості), а також грантові програми для ОСББ від ЄС та USAID. Ми допоможемо вибрати та оформити найвигідніший варіант.</div>
                    </div>
                </div>
                <div class="faq-item wf-animate">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        Хто обслуговує систему після встановлення?
                        <span class="faq-ico">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Перший рік технічне обслуговування включено в ціну — один виїзд для профілактичного огляду. Далі — сервісний договір (необов'язковий). Система дистанційно моніторується через хмару, при аномаліях — ми отримуємо сповіщення першими і зв'язуємося з вами.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-band wf-animate cta-band-bg-green">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-12">
                    <div class="cta-band-title">ГОТОВІ ЗЕКОНОМИТИ<br>ДЛЯ ВАШОГО ОСББ?</div>
                    <p class="cta-band-sub">Безкоштовний аудит даху та розрахунок СЕС. Виїзд інженера — протягом 2 робочих днів.</p>
                </div>
                <div class="col-md-5 col-12">
                    <div class="cta-actions justify-content-md-end">
                    <a href="index.html#contact" class="btn btn-white">Замовити аудит</a>
                        <a href="tel:+380630607600" class="btn btn-outline-white">+38 063 060 76 00</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();