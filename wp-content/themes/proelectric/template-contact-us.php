<?php 
/*
  Template Name: Contact us
 */
get_header();
?>

<section class="hero contact-us-hero position-relative">
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
            <div class="hero-label">Зв'яжіться з нами</div>
            <h1 class="hero-title">
                <span class="accent-blue">КОН</span><span class="accent-green">ТАК</span>ТИ
            </h1>
        </div>
   </div>
</section>
<section class="contact-layout" id="form">
    <!-- FORM -->
    <div class="form-side reveal">
        <div class="form-head">
            <div class="section-label">Надіслати запит</div>
            <h2>Напишіть нам — відповімо протягом 2 годин</h2>
            <p>Розкажіть про ваш об'єкт і задачу. Виїдемо на огляд безкоштовно і підготуємо детальну комерційну пропозицію.</p>
        </div>
        <div class="contact-form contact-form-bg-fields" id="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="75a4959" title="Контактна форма (контакти)"]'); ?>
        </div>
</div>
    </div>
    <div class="info-side reveal">
        <div class="info-block">
            <div class="info-label">Телефони</div>
            <div class="info-row">
                <div class="info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <div>
                    <div class="info-text-label">Основний</div>
                    <a href="tel:+380630607600" class="info-text-val">+38 063 060 76 00</a>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <div>
                    <div class="info-text-label">Додатковий</div>
                    <a href="tel:+380684526450" class="info-text-val">+38 068 452 64 50</a>
                </div>
            </div>
        </div>
        <div class="info-block">
            <div class="info-label">Email та месенджери</div>
            <div class="info-row">
                <div class="info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <div>
                    <div class="info-text-label">Email</div>
                    <a href="mailto:progreselectric@gmail.com" class="info-text-val">progreselectric@gmail.com</a>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <div>
                    <div class="info-text-label">Telegram / Viber</div>
                    <span class="info-text-val small">@proelectric_ua</span>
                </div>
            </div>
        </div>
        <div class="info-block">
            <div class="info-label">Адреса офісу</div>
            <div class="info-row">
                <div class="info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <div>
                    <div class="info-text-label">Офіс</div>
                    <span class="info-text-val small">вул. Городоцька, 359<br>Львів, 79000, Україна</span>
                </div>
            </div>
        </div>
        <div class="info-block">
            <div class="info-label">Години роботи</div>
            <div class="hours-grid">
                <div class="hours-row">
                    <span class="hours-day">Понеділок — П'ятниця</span>
                    <span class="hours-time green">09:00 – 18:00</span>
                </div>
                <div class="hours-row">
                    <span class="hours-day">Субота</span>
                    <span class="hours-time">10:00 – 15:00</span>
                </div>
                <div class="hours-row">
                    <span class="hours-day">Неділя</span>
                    <span class="hours-time" style="color:rgba(255,255,255,0.3)">Вихідний</span>
                </div>
            </div>
        </div>
        <div class="info-block">
            <div class="info-label">Соціальні мережі</div>
            <div class="social-row">
                <a href="#" class="social-btn" title="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>
                <a href="#" class="social-btn" title="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="2" y="2" width="20" height="20" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
                    </svg>
                </a>
                <a href="#" class="social-btn" title="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                        <rect x="2" y="9" width="4" height="12"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                </a>
                <a href="#" class="social-btn" title="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/>
                        <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="emergency-badge">
            <div class="emergency-dot"></div>
            <div>
                <div class="emergency-title">⚡ Аварійний виїзд 24/7</div>
                <div class="emergency-desc">Для обслуговуваних об'єктів — цілодобовий аварійний виїзд. Час реагування до 2 годин по місту.</div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();