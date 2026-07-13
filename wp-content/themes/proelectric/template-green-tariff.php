<?php
/*
  Template Name: Green Tariff
 */
get_header();
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
            <div class="hero-label">Ваша СЕС може заробляти</div>
            <h1 class="hero-title">
                <span class="accent-green">ЗЕЛЕНИЙ</span> <span class="accent-blue">ТАРИФ</span>
            </h1>
            <p class="hero-desc">Продавайте надлишки електроенергії, які генерує ваша сонячна станція, і скорочуйте окупність системи на роки. Беремо на себе все оформлення — від технічних умов до договору.</p>
            <div class="hero-actions hero-actions-left btn-group">
                <a href="#contact" class="btn btn-primary scroll-to-btn">Отримати консультацію</a>
                <a href="#how" class="btn btn-white scroll-to-btn">Як це працює</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="about">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Простими словами</div>
            <h2 class="section-title">ЩО ТАКЕ ЗЕЛЕНИЙ ТАРИФ</h2>
        </div>
        <div class="d-grid md-grid-2-columns md-gap-64 wf-animate-grid">
            <div class="wf-animate">
                <p class="item-description mb-4">Зелений тариф — це механізм, за яким електроенергія, згенерована вашою сонячною електростанцією понад власне споживання, викуповується за встановленою державою ставкою. Вдень станція живить ваш будинок чи підприємство, а надлишок автоматично віддається в мережу — і за нього вам нараховують гроші.</p>
                <p class="item-description mb-4">Для обліку встановлюється двонаправлений лічильник: він фіксує окремо спожиту з мережі та віддану в мережу електроенергію. Розрахунок відбувається щомісяця — ви або зменшуєте свій рахунок, або отримуєте виплату.</p>
                <p class="item-description">Приватні домогосподарства можуть підключати станції потужністю до 30 кВт за спрощеною процедурою. Для бізнесу діють окремі механізми продажу електроенергії — підкажемо оптимальний варіант саме для вашого об'єкта. Ставки та умови періодично переглядаються, тому актуальні цифри уточнюйте у нашого інженера.</p>
            </div>
            <div class="facts-col wf-animate">
                <div class="fact-card">
                    <div class="fact-num">30</div>
                    <div>
                        <div class="fact-label">кВт — ліміт для приватних домогосподарств</div>
                        <div class="fact-desc">Станції до 30 кВт підключаються за спрощеною процедурою, без ліцензій та складних погоджень.</div>
                    </div>
                </div>
                <div class="fact-card">
                    <div class="fact-num">5–6</div>
                    <div>
                        <div class="fact-label">Років окупності із зеленим тарифом</div>
                        <div class="fact-desc">Продаж надлишків скорочує окупність СЕС на 2–3 роки порівняно зі станцією «лише для себе».</div>
                    </div>
                </div>
                <div class="fact-card">
                    <div class="fact-num">100%</div>
                    <div>
                        <div class="fact-label">Оформлення беремо на себе</div>
                        <div class="fact-desc">Технічні умови, договори, лічильник, комунікація з обленерго — без вашої участі в бюрократії.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section-bg-dark how" id="how">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Крок за кроком</div>
            <h2 class="section-title">ЯК ПІДКЛЮЧИТИ ЗЕЛЕНИЙ ТАРИФ</h2>
            <p class="section-sub">Від заявки до першої виплати — весь процес супроводжуємо ми.</p>
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
                <div class="step-title">Консультація та аудит</div>
                <div class="step-desc">Аналізуємо споживання, дах і мережу. Рахуємо потужність та вигоду від продажу надлишків</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    02
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M12 3 L9 10 h3 L10 17 l6-8 h-3 Z"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Монтаж СЕС</div>
                <div class="step-desc">Встановлюємо станцію «під ключ»: панелі, інвертор, захист, заземлення</div>
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
                <div class="step-title">Документи та ТУ</div>
                <div class="step-desc">Готуємо заявку, отримуємо технічні умови та погодження в обленерго</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    04
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 7 v5 l3 3"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Лічильник і договір</div>
                <div class="step-desc">Встановлюємо двонаправлений лічильник, підписуємо договір купівлі-продажу</div>
            </div>
            <div class="step wf-animate mb-30">
                <div class="step-num">
                    05
                    <div class="step-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                            <path d="M12 2 v6 M5 12 h-3 M22 12 h-3 M12 22 v-3"/>
                            <circle cx="12" cy="12" r="4"/>
                        </svg>
                    </div>
                </div>
                <div class="step-title">Запуск і виплати</div>
                <div class="step-desc">Станція працює, надлишки продаються, щомісяця отримуєте нарахування</div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section-bg2" id="for-whom">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Кому підходить</div>
            <h2 class="section-title">ЗЕЛЕНИЙ ТАРИФ ДЛЯ ВАШОГО ОБ'ЄКТА</h2>
        </div>
        <div class="wf-animate-grid d-grid md-grid-3-columns audiences-grid">
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">01</div>
                <h3 class="item-title">Приватний будинок</h3>
                <p class="item-description">Станція 5–30 кВт покриває власне споживання, а літні надлишки продаються в мережу. Найпростіша процедура оформлення — саме для домогосподарств.</p>
            </div>
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">02</div>
                <h3 class="item-title">Бізнес та комерція</h3>
                <p class="item-description">Виробництва й офіси споживають найбільше вдень — коли станція генерує максимум. Надлишки вихідних днів продаються, покращуючи фінансову модель проєкту.</p>
            </div>
            <div class="white-card white-card-bottom-border-hover audience-card wf-animate">
                <div class="calc-step-num">03</div>
                <h3 class="item-title">Інвестиційні СЕС</h3>
                <p class="item-description">Наземні та дахові станції, побудовані спеціально під продаж електроенергії. Розрахуємо бізнес-план, збудуємо та оформимо станцію будь-якої потужності.</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section faq-section" id="faq">
    <div class="container">
        <div class="page-section-header wf-animate mb-5">
            <div class="section-label">Відповіді на питання</div>
            <h2 class="section-title">ЧАСТІ ЗАПИТАННЯ</h2>
        </div>
        <div class="faq-grid wf-animate-grid d-grid md-grid-2-columns">
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки можна заробити на зеленому тарифі?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Залежить від потужності станції, вашого споживання та актуальної ставки викупу. Типовий приватний будинок зі станцією 10 кВт влітку продає 40–60% генерації. На консультації розрахуємо очікуваний дохід саме для вашого об'єкта за чинними ставками.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Чи можна підключити зелений тариф без сонячної станції?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Ні, зелений тариф — це механізм викупу згенерованої вами електроенергії, тож потрібна власна генерація: сонячна станція, рідше вітрова установка. Ми проєктуємо та будуємо СЕС «під ключ» разом з оформленням тарифу.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Які документи потрібні для оформлення?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Документ про право власності на об'єкт, чинний договір з постачальником електроенергії та паспортні дані власника. Решту — заявки, технічні умови, договір купівлі-продажу — готуємо і подаємо ми.</div>
                </div>
            </div>
            <div class="faq-item wf-animate">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Скільки триває підключення?
                    <span class="faq-ico">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">Монтаж станції для будинку — 2–5 днів. Оформлення документів та встановлення двонаправленого лічильника — зазвичай 2–6 тижнів залежно від швидкості роботи місцевого обленерго. Весь процес супроводжуємо до першого нарахування.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-band wf-animate">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <div class="cta-band-title">ПОРАХУЄМО ВАШУ ВИГОДУ?</div>
                <p class="cta-band-sub">Безкоштовна консультація інженера: потужність станції, дохід від зеленого тарифу та термін окупності — за чинними ставками.</p>
            </div>
            <div class="col-md-5 col-12">
                <div class="cta-actions justify-content-md-end">
                    <a href="tel:+380630607600" class="btn btn-white">Зателефонувати</a>
                    <a href="#contact" class="btn btn-outline-white scroll-to-btn">Написати нам</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/general/contact-us' ); ?>

<?php
get_footer();
