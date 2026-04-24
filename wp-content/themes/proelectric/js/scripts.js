document.addEventListener("DOMContentLoaded", onInit);

function onInit() {
    initScrollAnimation();
    initScrollAnchors();
}

function initScrollAnimation() {
    const items = document.querySelectorAll('.wf-animate');

    if (!items?.length) {
      return
    }

    // Scroll reveal — low threshold + rootMargin so elements trigger early
    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0, rootMargin: '0px 0px -60px 0px' });

    items.forEach(el => observer.observe(el));

    // Stagger children inside grids
    document.querySelectorAll('.wf-animate-grid').forEach(grid => {
        [...grid.children].forEach((child, i) => {
            child.style.transitionDelay = `${i * 0.07}s`;
        });
    });
}

function initScrollAnchors() {
    document.querySelectorAll('a.scroll-to-btn').forEach(link => {
        link.addEventListener('click', e => {
            const targetId = link.getAttribute('href').replace('#', '');
            const target = document.getElementById(targetId);
            if (!target) return;
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
}

function toggleFaq(btn) {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

function calculate() {
    const consumption = parseFloat(document.getElementById('consumption').value) || 400;
    const sunHours    = parseFloat(document.getElementById('region').value) || 4.5;
    const tariff      = parseFloat(document.getElementById('tariff').value) || 4.32;
    const hasBattery  = document.getElementById('battery').value === '1';
    const objType     = document.getElementById('obj-type').value;

    // power needed
    const powerKw = +(consumption / sunHours / 30 * 1.2).toFixed(1);
    const panels  = Math.ceil(powerKw * 1000 / 400);
    const area    = +(panels * 2.0).toFixed(0);
    const annualGen = Math.round(powerKw * sunHours * 365 * 0.82);
    const annualSave = Math.round(annualGen * tariff);

    // cost estimate
    const costPerKw = objType === 'biz' ? 28000 : 35000;
    const batteryCost = hasBattery ? Math.round(powerKw * 2 * 4500) : 0;
    const totalCost = Math.round(powerKw * costPerKw + batteryCost);
    const payback = (totalCost / annualSave).toFixed(1);

    document.getElementById('r-power').textContent   = powerKw + ' кВт';
    document.getElementById('r-panels').textContent  = panels + ' шт.';
    document.getElementById('r-area').textContent    = area + ' м²';
    document.getElementById('r-gen').textContent     = annualGen.toLocaleString('uk') + ' кВт·год/рік';
    document.getElementById('r-save').textContent    = annualSave.toLocaleString('uk') + ' грн/рік';
    document.getElementById('r-cost').textContent    = '~' + totalCost.toLocaleString('uk') + ' грн';
    document.getElementById('r-payback').textContent = payback + ' р.';

    const result = document.getElementById('calc-result');
    result.classList.add('show');
    result.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function activateStep(el, num) {
    document.querySelectorAll('.config-step').forEach(s => s.classList.remove('active'));
    el.classList.add('active');
}

// Pricing table
const OBJ = {
    PRIVATE_HOUSE: 'Приватний будинок',
    APARTMENT:     'Квартира / офіс',
    COMMERCIAL:    'Комерційний об\'єкт',
    INDUSTRIAL:    'Промислове підприємство',
};

const TYPE = {
    APARTMENT_PANEL: 'Квартирний / поверховий щиток',
    MAIN_PANEL:      'Головний розподільний щит (ГРЩ)',
    AVR:             'Шафа АВР',
    MOTOR_CTRL:      'Шафа управління двигунами',
    PLC:             'Шафа автоматики / ПЛК',
};

const CURR = {
    UP_TO_63A:   'до 63 А (до 40 кВт)',
    UP_TO_250A:  'до 250 А (до 160 кВт)',
    UP_TO_630A:  'до 630 А (до 400 кВт)',
    FROM_630A:   'від 630 А (від 400 кВт)',
};

const CLS = {
    STANDARD: 'Стандарт (IEK, DEKraft)',
    PREMIUM:  'Преміум (Legrand, Schneider)',
    TOP:      'Топ (ABB, Siemens)',
};

const PANEL_TYPES = {
    [TYPE.APARTMENT_PANEL]: { price: 8000,  time: '5–7 днів'   },
    [TYPE.MAIN_PANEL]:      { price: 35000, time: '10–14 днів' },
    [TYPE.AVR]:             { price: 28000, time: '10–14 днів' },
    [TYPE.MOTOR_CTRL]:      { price: 32000, time: '14–20 днів' },
    [TYPE.PLC]:             { price: 45000, time: '20–30 днів' },
};

const prices = {
    s1: {
        [OBJ.PRIVATE_HOUSE]: 0,
        [OBJ.APARTMENT]:     0,
        [OBJ.COMMERCIAL]:    5000,
        [OBJ.INDUSTRIAL]:    20000,
    },
    s2: {
        [TYPE.APARTMENT_PANEL]: PANEL_TYPES[TYPE.APARTMENT_PANEL].price,
        [TYPE.MAIN_PANEL]:      PANEL_TYPES[TYPE.MAIN_PANEL].price,
        [TYPE.AVR]:             PANEL_TYPES[TYPE.AVR].price,
        [TYPE.MOTOR_CTRL]:      PANEL_TYPES[TYPE.MOTOR_CTRL].price,
        [TYPE.PLC]:             PANEL_TYPES[TYPE.PLC].price,
    },
    s3: {
        [CURR.UP_TO_63A]:  0,
        [CURR.UP_TO_250A]: 8000,
        [CURR.UP_TO_630A]: 20000,
        [CURR.FROM_630A]:  50000,
    },
    s4: {
        [CLS.STANDARD]: 0,
        [CLS.PREMIUM]:  6000,
        [CLS.TOP]:      14000,
    },
};

function getVal(name) {
    const el = document.querySelector(`input[name="${name}"]:checked`);
    return el ? el.value : '';
}

function updateSummary() {
    if (!document.getElementById('configurator')) {
        return;
    }

    const obj  = getVal('s1');
    const type = getVal('s2');
    const curr = getVal('s3');
    const cls  = getVal('s4');

    document.getElementById('sv-obj').textContent  = obj  || '—';
    document.getElementById('sv-type').textContent = type || '—';
    document.getElementById('sv-curr').textContent = curr ? curr.split('(')[0].trim() : '—';
    document.getElementById('sv-class').textContent = cls ? cls.split(' ')[0] : '—';
    document.getElementById('sv-time').textContent = PANEL_TYPES[type]?.time ?? '7–14 днів';

    const base = 12000;
    const total = base
      + (prices.s1[obj] || 0)
      + (prices.s2[type] || 0)
      + (prices.s3[curr] || 0)
      + (prices.s4[cls] || 0);

    document.getElementById('sv-price').textContent = total.toLocaleString('uk') + ' грн';
}

function sendConfig() {
    alert('Дякуємо! Ваш запит прийнято. Менеджер зв\'яжеться з вами протягом 2 годин.');
}

updateSummary();