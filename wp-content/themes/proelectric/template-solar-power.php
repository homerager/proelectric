<?php 
/*
  Template Name: Solar Power
 */
get_header();
?>
<section class="hero" style="--hero-bg: url(<?= get_template_directory_uri() . '/images/ses-hero-banner.webp'; ?>)">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">Відновлювана енергетика</div>
            <h1 class="hero-title">СОНЯЧНІ<br><span class="accent-blue">ЕЛЕКТ</span><span class="accent-green">РОСТАНЦІЇ</span></h1>
            <p class="hero-desc">Проєктуємо та монтуємо сонячні електростанції для ОСББ, бізнесу та приватних будинків. Під ключ — від аудиту об'єкта до підключення до мережі.</p>
            <div class="hero-actions btn-group">
                <a href="#calc" class="btn btn-primary scroll-to-btn">Отримати розрахунок</a>
                <a href="#types" class="btn btn-white scroll-to-btn">Типи СЕС</a>
            </div>
        </div>
    </div>
    <?php
        $stats = array(
            array(
                'stat_num' => '40',
                'unit' => ' МВт',
                'stat_label' => 'Найбільша СЕС'
            ), array(
                'stat_num' => '150',
                'unit' => '+',
                'stat_label' => 'Встановлених систем'
            ), array(
                'stat_num' => '25',
                'unit' => ' р.',
                'stat_label' => 'Гарантія на панелі'
            ), array(
                'stat_num' => '5–7',
                'unit' => 'р.',
                'stat_label' => 'Середня окупність'
            )
        );
        get_template_part('template-parts/general/hero-stats', null, array('stats' => $stats)); 
    ?>
</section>
<section class="page-section page-section-types" id="types">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що ми пропонуємо</h3>
            <h2 class="section-title">ТИПИ СОНЯЧНИХ ЕЛЕКТРОСТАНЦІЙ</h2>
            <p class="section-sub">Підбираємо рішення під конкретний об'єкт — від квартири в ОСББ до промислового підприємства.</p>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns types-grid">
            <a href="/ses-dlya-osbb/" class="type-card wf-animate">
                <div class="type-card-thumb osbb">
                    <div class="type-card-badge">Для ОСББ</div>
                    <div class="type-card-thumb-icon">🏢</div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">СЕС для ОСББ</div>
                    <div class="type-card-desc">Знизьте витрати на електроенергію в місцях загального користування: ліфти, освітлення, насоси.</div>
                    <ul class="type-card-list">
                        <li>Потужність 10–100 кВт</li>
                        <li>Окупність 4–6 років</li>
                        <li>Допомога з дозволами та підключенням</li>
                        <li>Спільне фінансування мешканцями</li>
                    </ul>
                    <span class="type-card-link">Детальніше <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
            <a href="/ses-dlya-biznesu/" class="type-card wf-animate">
                <div class="type-card-thumb biz">
                    <div class="type-card-badge">Для бізнесу</div>
                    <div class="type-card-thumb-icon">🏭</div>
                </div>
                
                <div class="type-card-body">
                    <div class="type-card-title">СЕС для Бізнесу</div>
                    <div class="type-card-desc">Промислові та комерційні системи для заводів, складів, офісних центрів та агропідприємств.</div>
                    <ul class="type-card-list">
                        <li>Потужність 50 кВт – 10 МВт</li>
                        <li>Повернення ПДВ та держпідтримка</li>
                        <li>Моніторинг та сервіс 24/7</li>
                        <li>«Зелений тариф» або власне споживання</li>
                    </ul>
                    <span class="type-card-link">Детальніше <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
            <a href="/ses-dlya-budynyku/" class="type-card wf-animate">
                <div class="type-card-thumb priv">
                    <div class="type-card-badge">Для дому</div>
                    <div class="type-card-thumb-icon">🏡</div>
                </div>
                <div class="type-card-body">
                    <div class="type-card-title">СЕС для Приватного Будинку</div>
                    <div class="type-card-desc">Автономна або мережева система для приватного будинку — з акумуляторами або без.</div>
                    <ul class="type-card-list">
                        <li>Потужність 3–30 кВт</li>
                        <li>Акумуляторний резерв на ніч</li>
                        <li>Зниження рахунків до 80–100%</li>
                        <li>Монтаж 1–2 дні</li>
                    </ul>
                    <span class="type-card-link">Детальніше <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="page-section page-section-bg-dark how" id="process">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Як ми працюємо</h3>
            <h2 class="section-title">ПРОЦЕС ВСТАНОВЛЕННЯ</h2>
            <p class="section-sub">Від першого дзвінка до запуску системи — чітко і прозоро, без сюрпризів.</p>
        </div>
        <div class="steps d-grid lg-grid-5-columns md-grid-3-columns wf-animate-grid position-relative">
            <div class="step wf-animate mb-30">
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
            <div class="step wf-animate mb-30">
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
            <div class="step wf-animate mb-30">
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
            <div class="step wf-animate mb-30">
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
            <div class="step wf-animate mb-30">
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
    </div>
</section>
<section class="page-section" id="equipment">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що входить у систему</h3>
            <h2 class="section-title">СКЛАД ОБЛАДНАННЯ</h2>
            <p class="section-sub">Використовуємо перевірених виробників з офіційною гарантією та сервісом в Україні.</p>
        </div>
        <div class="equipment-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="equip-card white-card wf-animate">
                <div class="equip-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                        <defs>
                            <linearGradient id="ei1" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1a5fa8"/>
                                <stop offset="100%" stop-color="#2db551"/>
                            </linearGradient>
                        </defs>
                        <rect x="2" y="5" width="20" height="14" rx="2" stroke="url(#ei1)" stroke-width="1.5"/>
                        <line x1="2" y1="10" x2="22" y2="10" stroke="url(#ei1)" stroke-width="1" opacity=".5"/>
                        <line x1="9" y1="5" x2="9" y2="19" stroke="url(#ei1)" stroke-width="1" opacity=".5"/>
                        <line x1="15" y1="5" x2="15" y2="19" stroke="url(#ei1)" stroke-width="1" opacity=".5"/>
                    </svg>
                </div>
                <div>
                    <div class="equip-title">Сонячні Панелі</div>
                    <div class="equip-desc">Монокристалічні панелі типу PERC / TOPCon з ефективністю 21–23%. Гарантія продуктивності 90% через 25 років.</div>
                    <div class="equip-tags">
                        <span class="equip-tag">Mono PERC</span>
                        <span class="equip-tag">TOPCon</span>
                        <span class="equip-tag">400–700 Вт</span>
                        <span class="equip-tag">25 р. гарантія</span>
                    </div>
                </div>
            </div>
            <div class="equip-card white-card wf-animate">
                <div class="equip-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                        <defs>
                            <linearGradient id="ei2" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1a5fa8"/>
                                <stop offset="100%" stop-color="#2db551"/>
                            </linearGradient>
                        </defs>
                        <rect x="3" y="3" width="18" height="18" rx="2" stroke="url(#ei2)" stroke-width="1.5"/>
                        <path d="M12 8 v3 M12 13 v3" stroke="url(#ei2)" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M8 12 h3 M13 12 h3" stroke="url(#ei2)" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div>
                    <div class="equip-title">Мережеві Інвертори</div>
                    <div class="equip-desc">Перетворювачі SMA, Fronius, Huawei, SolarEdge. Моніторинг у реальному часі через мобільний додаток.</div>
                    <div class="equip-tags">
                        <span class="equip-tag">SMA</span>
                        <span class="equip-tag">Fronius</span>
                        <span class="equip-tag">Huawei</span>
                        <span class="equip-tag">WiFi моніторинг</span>
                    </div>
                </div>
            </div>
            <div class="equip-card white-card wf-animate">
                <div class="equip-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                        <defs>
                            <linearGradient id="ei3" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1a5fa8"/>
                                <stop offset="100%" stop-color="#2db551"/>
                            </linearGradient>
                        </defs>
                        <rect x="6" y="2" width="12" height="20" rx="2" stroke="url(#ei3)" stroke-width="1.5"/>
                        <path d="M10 7 h4 M10 11 h4 M10 15 h2" stroke="url(#ei3)" stroke-width="1.2" stroke-linecap="round"/>
                        <circle cx="16" cy="18" r="3" fill="#2db551" stroke="none"/>
                    </svg>
                </div>
                <div>
                    <div class="equip-title">Акумуляторні Системи</div>
                    <div class="equip-desc">Літій-залізо-фосфатні (LiFePO4) батареї — безпечні, довговічні. Ємність 5–100 кВт·год під будь-які задачі.</div>
                    <div class="equip-tags">
                        <span class="equip-tag">LiFePO4</span>
                        <span class="equip-tag">BYD</span>
                        <span class="equip-tag">Pylontech</span>
                        <span class="equip-tag">6000+ циклів</span>
                    </div>
                </div>
            </div>
            <div class="equip-card white-card wf-animate">
                <div class="equip-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                        <defs>
                            <linearGradient id="ei4" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1a5fa8"/>
                                <stop offset="100%" stop-color="#2db551"/>
                            </linearGradient>
                        </defs>
                        <circle cx="12" cy="12" r="9" stroke="url(#ei4)" stroke-width="1.5"/>
                        <path d="M12 8 v4 l3 2" stroke="url(#ei4)" stroke-width="1.5" stroke-linecap="round"/>
                        <circle cx="12" cy="12" r="2" fill="#2db551"/>
                    </svg>
                </div>
                <div>
                    <div class="equip-title">Система Моніторингу</div>
                    <div class="equip-desc">Онлайн-платформа для відстеження виробітку, споживання та балансу з мережею. Сповіщення при відхиленнях.</div>
                    <div class="equip-tags">
                        <span class="equip-tag">Realtime дані</span>
                        <span class="equip-tag">iOS / Android</span>
                        <span class="equip-tag">Хмарний доступ</span>
                        <span class="equip-tag">API інтеграція</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section-bg2 calc-section" id="calc">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Оціните вигоду</h3>
            <h2 class="section-title">КАЛЬКУЛЯТОР СЕС</h2>
            <p class="section-sub">Введіть дані вашого об'єкта — ми порахуємо орієнтовну потужність та окупність системи.</p>
        </div>
        <div class="calc-inner d-grid md-grid-2-columns md-gap-64 wf-animate-grid">
            <div class="calc-form wf-animate">
                <div class="calc-form-title">Розрахуйте свою систему</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Тип об'єкта</label>
                        <select id="obj-type">
                            <option value="house">Приватний будинок</option>
                            <option value="biz">Бізнес / комерція</option>
                            <option value="osbb">ОСББ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Регіон</label>
                        <select id="region">
                            <option value="4.8">Південь (Одеса, Миколаїв)</option>
                            <option value="4.5" selected>Центр (Київ, Дніпро)</option>
                            <option value="4.2">Захід (Львів, Івано-Франківськ)</option>
                            <option value="4.0">Північ (Чернігів, Суми)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Середньомісячне споживання (кВт·год)</label>
                    <input type="number" id="consumption" placeholder="Наприклад: 400" value="400" min="50" max="50000"/>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Ціна електроенергії (грн/кВт·год)</label>
                        <input type="number" id="tariff" placeholder="4.32" value="4.32" step="0.01"/>
                    </div>
                    <div class="form-group">
                        <label>Акумулятори</label>
                        <select id="battery">
                            <option value="0">Без акумуляторів</option>
                            <option value="1">Так, включити</option>
                        </select>
                    </div>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" onclick="calculate()">Розрахувати →</button>
                </div>
                <div class="calc-result mt-4" id="calc-result">
                    <div class="calc-result-title">Результати розрахунку</div>
                    <div class="result-row"><span class="result-key">Рекомендована потужність СЕС</span><span class="result-val blue" id="r-power">—</span></div>
                    <div class="result-row"><span class="result-key">Кількість панелей (400 Вт)</span><span class="result-val" id="r-panels">—</span></div>
                    <div class="result-row"><span class="result-key">Необхідна площа даху</span><span class="result-val" id="r-area">—</span></div>
                    <div class="result-row"><span class="result-key">Річна генерація</span><span class="result-val" id="r-gen">—</span></div>
                    <div class="result-row"><span class="result-key">Економія на рік</span><span class="result-val green" id="r-save">—</span></div>
                    <div class="result-row"><span class="result-key">Орієнтовна вартість системи</span><span class="result-val" id="r-cost">—</span></div>
                    <div class="result-row"><span class="result-key">Термін окупності</span><span class="result-val green" id="r-payback">—</span></div>
                    <div style="margin-top:20px;font-size:11px;color:var(--muted);line-height:1.7">* Розрахунок орієнтовний. Для точного проєкту — безкоштовна консультація інженера.</div>
                </div>
            </div>
            <div class="calc-info wf-animate">
                <div class="calc-info-item">
                    <div class="calc-info-num blue">7–9</div>
                    <div>
                        <div class="calc-info-label">Років — середня окупність</div>
                        <div class="calc-info-desc">При підключенні до зеленого тарифу термін скорочується до 5–6 років завдяки продажу надлишкової електроенергії.</div>
                    </div>
                </div>
                <div class="calc-info-item">
                    <div class="calc-info-num green">25+</div>
                    <div>
                        <div class="calc-info-label">Років служби якісних панелей</div>
                        <div class="calc-info-desc">Після окупності система працює ще 15–18 років як «безкоштовна» електростанція для вашого об'єкта.</div>
                    </div>
                </div>
                <div class="calc-info-item">
                    <div class="calc-info-num blue">80%</div>
                    <div>
                        <div class="calc-info-label">Зниження рахунків за електроенергію</div>
                        <div class="calc-info-desc">Для типового будинку система 5–8 кВт покриває 70–90% річного споживання залежно від регіону.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="projects">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Реалізовані об'єкти</h3>
            <h2 class="section-title">НАШІ ПРОЄКТИ</h2>
        </div>
        <div class="projects-grid wf-animate-grid">
            <div class="project-card featured wf-animate">
            <div class="project-tag">Вітрова енергетика</div>
            <div class="project-title">Вітрова Електростанція 160 МВт</div>
            <p class="project-desc" style="max-width:340px;line-height:1.85;margin-top:4px">Монтаж та запуск найбільшої вітрової електростанції в регіоні — 2020–2021 рр. Трансформаторні підстанції, кабельні траси, пусконалагоджувальні роботи.</p>
            <div class="project-power">160<br>МВт</div>
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
            <div class="project-tag">Освітлення</div>
            <div class="project-title">LED Системи Освітлення</div>
            <p class="project-desc" style="font-size:12px;line-height:1.75;margin-top:8px">Проектування та монтаж LED-систем для промислових та комерційних об'єктів.</p>
            <div class="project-meta" style="margin-top:20px">Ongoing / Комерційні</div>
        </div>
    </div>
</section>
<section class="page-section faq-section page-section-bg2" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Відповіді на питання</h3>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки коштує встановлення СЕС для приватного будинку?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Вартість залежить від потужності та типу обладнання. Орієнтовно: система 5 кВт — 150 000–200 000 грн «під ключ», 10 кВт — 270 000–350 000 грн. Ціна включає всі матеріали, монтаж, документи та підключення до мережі.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи потрібен дозвіл для встановлення сонячних панелей?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Для мережевих систем потрібне технічне приєднання до обленерго. Для приватних будинків (до 30 кВт) процедура спрощена. Ми беремо на себе всі питання з документами — погодження, подачу заявок та підписання договорів.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи будуть панелі працювати взимку або в хмару?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Так, панелі виробляють електроенергію навіть при розсіяному світлі. Взимку генерація знижується до 20–30% від літнього рівня, але повністю не припиняється. Панелі PERC особливо ефективні при низьких температурах.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Що таке «зелений тариф» і як на нього потрапити?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Зелений тариф — програма держпідтримки, за якою ви продаєте надлишкову електроенергію в мережу за фіксованою підвищеною ціною. Станом на 2025 рік тариф для приватних домогосподарств становить ~1.5 грн/кВт·год. Ми допоможемо оформити всі документи.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки часу займає монтаж?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Сам монтаж системи 3–10 кВт займає 1–2 робочі дні. З урахуванням проєктування та погодження документів з обленерго весь процес займає 2–4 тижні від підписання договору до запуску.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Яка гарантія на встановлену систему?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Виробнича гарантія на панелі — 12 років, гарантія продуктивності 90% — 25 років. На інвертори — 5–10 років залежно від виробника. Наша гарантія на монтажні роботи — 3 роки. Технічне обслуговування за бажанням.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">РОЗРАХУЄМО СЕС ДЛЯ ВАШОГО ОБ'ЄКТА</div>
                <p class="cta-band-sub">Безкоштовна консультація інженера. Виїзд на об'єкт, аналіз даху та споживання, комерційна пропозиція — протягом 48 годин.</p>
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