<?php
/*
  Template Name: Calculator
 */
get_header();

$proelectric_phone = proelectric_get_primary_phone();
?>

<section class="hero contact-us-hero page-hero position-relative">
    <div class="container">
        <!-- decorative large bolt -->
        <div class="hero-bolt">
            <svg width="360" height="440" viewBox="0 0 360 440" fill="none">
                <path d="M220 0 L80 220 H170 L60 440 L300 160 H200 Z" fill="url(#boltGrad)" opacity=".9"/>
                <defs>
                    <linearGradient id="boltGrad" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#1a5fa8"/>
                    <stop offset="100%" stop-color="#2db551" stop-opacity=".3"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="hero-content hero-content-left wf-animate">
            <div class="hero-label">Онлайн-розрахунок за 30 секунд</div>
            <h1 class="hero-title">
                КАЛЬКУ<span class="accent-blue">ЛЯ</span><span class="accent-green">ТОР</span> СЕС
            </h1>
            <p class="hero-desc">Введіть споживання вашого об'єкта — отримаєте орієнтовну потужність станції, вартість, річну економію та термін окупності. Безкоштовно і без реєстрації.</p>
            <div class="hero-actions hero-actions-left btn-group">
                <a href="#calc" class="btn btn-primary scroll-to-btn">Розрахувати</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section-bg2 calc-section" id="calc">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Оціните вигоду</h3>
            <h2 class="section-title">РОЗРАХУЙТЕ СВОЮ СИСТЕМУ</h2>
            <p class="section-sub">Розрахунок працює для приватних будинків, бізнесу та ОСББ. Дані нікуди не передаються — все рахується у вашому браузері.</p>
        </div>
        <div class="calc-inner d-grid md-grid-2-columns md-gap-64 wf-animate-grid">
            <div class="calc-form wf-animate">
                <div class="calc-form-title">Параметри об'єкта</div>
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

<section class="page-section" id="next-steps">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <h3 class="section-label">Що далі</h3>
            <h2 class="section-title">ВІД РОЗРАХУНКУ ДО ЗАПУСКУ</h2>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns audiences-grid">
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">01</div>
                <h3 class="item-title">Залиште заявку</h3>
                <p class="item-description">Надішліть результати розрахунку через форму нижче або напишіть у месенджер — менеджер зв'яжеться протягом 2 годин у робочий час.</p>
            </div>
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">02</div>
                <h3 class="item-title">Безкоштовний виїзд інженера</h3>
                <p class="item-description">Інженер огляне дах чи територію, проаналізує споживання та стан електромережі. Виїзд і аудит — безкоштовні.</p>
            </div>
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">03</div>
                <h3 class="item-title">Точний кошторис за 48 годин</h3>
                <p class="item-description">Отримаєте детальну комерційну пропозицію з фіксованою ціною, специфікацією обладнання та термінами монтажу.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ХОЧЕТЕ ТОЧНИЙ РОЗРАХУНОК?</div>
                <p class="cta-band-sub">Калькулятор дає орієнтир. Точну вартість і окупність саме для вашого об'єкта підготує інженер — безкоштовно.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:<?= esc_attr( $proelectric_phone['tel'] ) ?>" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>

<?php
get_footer();
