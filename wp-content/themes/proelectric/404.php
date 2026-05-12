<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Proelectric
 */

get_header();
?>

<main id="primary" class="site-main">

<section class="page-404">

    <!-- background deco -->
    <div class="page-404-deco" aria-hidden="true">
        <svg viewBox="0 0 1400 900" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" fill="none" style="position:absolute;inset:0">
            <defs>
                <linearGradient id="g404h" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="35%"  stop-color="#1a5fa8" stop-opacity=".4"/>
                    <stop offset="65%"  stop-color="#e85c1a" stop-opacity=".35"/>
                    <stop offset="100%" stop-color="#e85c1a" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="g404v" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%"   stop-color="#1a5fa8" stop-opacity="0"/>
                    <stop offset="50%"  stop-color="#1a5fa8" stop-opacity=".25"/>
                    <stop offset="100%" stop-color="#e85c1a" stop-opacity=".1"/>
                </linearGradient>
            </defs>
            <!-- horizontal grid lines -->
            <line x1="0" y1="150" x2="1400" y2="150" stroke="url(#g404h)" stroke-width="1.5"/>
            <line x1="0" y1="300" x2="1400" y2="300" stroke="url(#g404h)" stroke-width="2.5"/>
            <line x1="0" y1="450" x2="1400" y2="450" stroke="url(#g404h)" stroke-width="1.5"/>
            <line x1="0" y1="600" x2="1400" y2="600" stroke="url(#g404h)" stroke-width="2"/>
            <line x1="0" y1="750" x2="1400" y2="750" stroke="url(#g404h)" stroke-width="1.5"/>
            <!-- vertical grid lines -->
            <line x1="233"  y1="0" x2="233"  y2="900" stroke="url(#g404v)" stroke-width="1.5"/>
            <line x1="466"  y1="0" x2="466"  y2="900" stroke="url(#g404v)" stroke-width="1.5"/>
            <line x1="700"  y1="0" x2="700"  y2="900" stroke="url(#g404v)" stroke-width="2"/>
            <line x1="933"  y1="0" x2="933"  y2="900" stroke="url(#g404v)" stroke-width="1.5"/>
            <line x1="1166" y1="0" x2="1166" y2="900" stroke="url(#g404v)" stroke-width="1.5"/>
            <!-- junction nodes -->
            <circle cx="466"  cy="300" r="5" fill="#1a5fa8" opacity=".5"/>
            <circle cx="700"  cy="450" r="7" fill="#e85c1a" opacity=".6"/>
            <circle cx="933"  cy="300" r="5" fill="#2db551" opacity=".45"/>
            <circle cx="233"  cy="600" r="4" fill="#1a5fa8" opacity=".4"/>
            <circle cx="1166" cy="600" r="4" fill="#e85c1a" opacity=".4"/>
            <!-- broken circuit symbol (open breaker) at center -->
            <rect x="650" y="420" width="100" height="60" rx="3" fill="none" stroke="rgba(232,92,26,.18)" stroke-width="1.5"/>
            <line x1="650"  y1="450" x2="675"  y2="450" stroke="rgba(232,92,26,.35)" stroke-width="2"/>
            <line x1="725"  y1="450" x2="750"  y2="450" stroke="rgba(232,92,26,.35)" stroke-width="2"/>
            <line x1="679"  y1="450" x2="720"  y2="430" stroke="rgba(232,92,26,.4)"  stroke-width="2"/>
            <circle cx="679" cy="450" r="3" fill="none" stroke="rgba(232,92,26,.5)" stroke-width="1.5"/>
            <circle cx="720" cy="450" r="3" fill="none" stroke="rgba(232,92,26,.5)" stroke-width="1.5"/>
            <!-- signal sparks near open contacts -->
            <line x1="710" y1="428" x2="714" y2="434" stroke="rgba(232,92,26,.6)" stroke-width="1.5"/>
            <line x1="716" y1="427" x2="718" y2="434" stroke="rgba(232,92,26,.5)" stroke-width="1"/>
            <line x1="713" y1="425" x2="712" y2="431" stroke="rgba(232,92,26,.4)" stroke-width="1"/>
            <text x="700" y="498" text-anchor="middle" font-family="Bebas Neue,sans-serif" font-size="10" fill="rgba(232,92,26,.3)" letter-spacing="3">ЛАНЦЮГ РОЗІМКНЕНО</text>
        </svg>
    </div>

    <div class="page-404-tint" aria-hidden="true"></div>

    <div class="container">
        <div class="page-404-inner">

            <!-- number -->
            <div class="err-number" aria-hidden="true">
                <span class="err-4 err-4-left">4</span>
                <span class="err-0">
                    <!-- lightning bolt inside the zero -->
                    <svg class="err-bolt" viewBox="0 0 80 80" fill="none" aria-hidden="true">
                        <circle cx="40" cy="40" r="38" stroke="rgba(255,255,255,.12)" stroke-width="1.5"/>
                        <path d="M48 12 L30 44 H44 L32 68 L58 34 H43 Z" fill="rgba(232,92,26,.7)" stroke="rgba(232,92,26,.9)" stroke-width="1" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="err-4 err-4-right">4</span>
            </div>

            <!-- label -->
            <div class="err-label">Сторінку не знайдено</div>

            <!-- heading -->
            <h1 class="err-title">СХОЖЕ, ЦЕЙ ЛАНЦЮГ<br>РОЗІМКНЕНО</h1>

            <!-- description -->
            <p class="err-desc">Сторінка, яку ви шукаєте, була переміщена, видалена або ніколи не існувала. Перевірте адресу або скористайтесь посиланнями нижче.</p>

            <!-- quick nav links -->
            <nav class="err-nav" aria-label="Швидка навігація">
                <a href="<?= esc_url( home_url('/') ); ?>" class="err-nav-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Головна
                </a>
                <a href="<?= esc_url( home_url('/elektromontazhni-roboty/') ); ?>" class="err-nav-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    Електромонтаж
                </a>
                <a href="<?= esc_url( home_url('/sonyachni-elektrostantsiyi/') ); ?>" class="err-nav-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                    Сонячні СЕС
                </a>
                <a href="<?= esc_url( home_url('/pro-nas/') ); ?>" class="err-nav-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Про нас
                </a>
                <a href="<?= esc_url( home_url('/kontakty/') ); ?>" class="err-nav-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.28h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.06 6.06l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    Контакти
                </a>
            </nav>

            <!-- CTA buttons -->
            <div class="err-actions btn-group">
                <a href="<?= esc_url( home_url('/') ); ?>" class="btn btn-primary">
                    Повернутись на головну
                </a>
                <a href="tel:+380630607600" class="btn btn-outline-white">
                    +38 063 060 76 00
                </a>
            </div>

        </div>
    </div>

</section>

</main><!-- #main -->

<?php get_footer(); ?>
