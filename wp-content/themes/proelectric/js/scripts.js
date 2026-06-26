document.addEventListener("DOMContentLoaded", onInit);

function onInit() {
  initScrollAnimation();
  initScrollAnchors();
  initScrollTop();
  onInitMobileMenu();
}

const header = document.getElementById('header');
const upNav = () => header.classList.toggle('scrolled', window.scrollY > 60);
window.addEventListener('scroll', upNav, { passive:true }); upNav();


function onInitMobileMenu () {
  const toggle = document.querySelector('.navbar-toggles');

  if (toggle) {
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('header-menu-is-visible');
    });
  }

  const isMobile = () => window.innerWidth <= 1124;
  const header = document.querySelector(".header");
  const menuItems = document.querySelectorAll(".menu > li.dropdown-menu-item");
  
  if (menuItems) {
    menuItems.forEach( (menuItem) => {
      if (isMobile()) {
          if (menuItem.classList.contains('menu-item-has-children')) {
          const link = menuItem.querySelector(':scope > a')
            
          if (link) {
            const button = document.createElement('button');
            button.type = 'button'
            button.className = 'menu-item-btn'

            const icon = document.createElement('i')
            icon.className = 'icon-caret'

            button.appendChild(icon)
            link.appendChild(button)

            button.addEventListener('click', (event) => {
              event.preventDefault()
              event.stopPropagation()

              menuItem.classList.toggle('show')
            })
          }
        }

        menuItem.addEventListener("click", (event) => {
          if (event.target.closest('.menu-item-btn')) {
            return
          }
        })
      } else {
        menuItem.addEventListener("mouseenter", () => {
          menuItem.classList.add("show");
          if (header) {
            header.classList.add("active")
          }   
        });
        menuItem.addEventListener("mouseleave", () => {
          menuItem.classList.remove("show");
          if (header) {
            header.classList.remove("active")
          }   
        })
      }
    })
  }
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

function initScrollTop() {
  const btn = document.getElementById('scroll-top');
  if (!btn) return;

  const toggle = () => btn.classList.toggle('visible', window.scrollY > 400);
  window.addEventListener('scroll', toggle, { passive: true });
  toggle();

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
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

function switchTab(idx) {
  document.querySelectorAll('.tab').forEach((t,i) => t.classList.toggle('active', i===idx));
  document.querySelectorAll('.tab-panel').forEach((p,i) => p.classList.toggle('active', i===idx));
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

function calcOsbb() {
  const flats   = parseInt(document.getElementById('c-flats').value)  || 60;
  const floors  = parseInt(document.getElementById('c-floors').value)  || 9;
  const hasLift = parseInt(document.getElementById('c-lift').value)    || 1;
  const tariff  = parseFloat(document.getElementById('c-tariff').value)|| 4.32;
  const sun     = parseFloat(document.getElementById('c-region').value)|| 4.5;

  // monthly consumption estimate kWh
  const lighting   = floors * 2 * 0.06 * 12 * 30;        // 2 bulbs per floor, 12h/day
  const lift       = hasLift ? floors * 25 : 0;           // ~25 kWh/floor/month
  const pumps      = flats * 0.8;                          // ~0.8 kWh/flat/month
  const other      = flats * 0.5;
  const monthlyKwh = lighting + lift + pumps + other;

  // system sizing
  const powerKw  = +(monthlyKwh / sun / 30 * 1.15).toFixed(1);
  const panels   = Math.ceil(powerKw * 1000 / 400);
  const annualGen= Math.round(powerKw * sun * 365 * 0.83);
  const annualSave = Math.round(Math.min(annualGen, monthlyKwh*12) * tariff);
  const systemCost = Math.round(powerKw * 30000);
  const payback  = (systemCost / annualSave).toFixed(1);
  const perFlat  = Math.round(annualSave / 12 / flats);
  const y25      = (annualSave * 25).toLocaleString('uk');

  document.getElementById('r-pow').textContent  = powerKw + ' кВт';
  document.getElementById('r-pnl').textContent  = panels + ' шт.';
  document.getElementById('r-cost').textContent = '~' + systemCost.toLocaleString('uk') + ' грн';
  document.getElementById('r-save').textContent = annualSave.toLocaleString('uk') + ' грн/рік';
  document.getElementById('r-flat').textContent = '~' + perFlat + ' грн/кв/міс';
  document.getElementById('r-back').textContent = payback + ' років';
  document.getElementById('r-25').textContent   = '~' + y25 + ' грн';

  const res = document.getElementById('calc-res');
  res.classList.add('show');
  res.scrollIntoView({behavior:'smooth', block:'nearest'});
}

// Business ROI Calculator
function calcSesForBusiness() {
  const kwh    = parseFloat(document.getElementById('b-kwh').value)    || 50000;
  const tariff = parseFloat(document.getElementById('b-tariff').value) || 4.32;
  const sun    = parseFloat(document.getElementById('b-region').value) || 4.5;
  const mode   = parseFloat(document.getElementById('b-mode').value)   || 0.8;
  const hybrid = parseInt(document.getElementById('b-type').value)     || 0;

  // system sizing
  const powerKw  = +(kwh / sun / 30 * 1.15).toFixed(0);
  const panels   = Math.ceil(powerKw * 1000 / 400);
  const areaM2   = Math.round(panels * 2.1);
  const annualGen= Math.round(powerKw * sun * 365 * 0.84);
  const usable   = Math.round(annualGen * mode);
  const sold     = Math.max(0, annualGen - usable);
  const saved    = Math.round(usable * tariff);
  const earned   = Math.round(sold * 1.5); // green tariff ~1.5 grn/kwh
  const total    = saved + earned;
  const baseCost = Math.round(powerKw * 28000);
  const hybAdd   = hybrid ? Math.round(powerKw * 0.5 * 4500) : 0;
  const cost     = baseCost + hybAdd;
  const vat      = Math.round(cost * 0.2);
  const netCost  = cost - vat;
  const payback  = (netCost / total).toFixed(1);

  const f = n => n.toLocaleString('uk');

  document.getElementById('b-pow').textContent  = powerKw + ' кВт';
  document.getElementById('b-pnl').textContent  = f(panels) + ' шт.';
  document.getElementById('b-area').textContent = f(areaM2) + ' м²';
  document.getElementById('b-cost').textContent = '~' + f(cost) + ' грн';
  document.getElementById('b-vat').textContent  = '~' + f(vat)  + ' грн';
  document.getElementById('b-net').textContent  = '~' + f(netCost) + ' грн';
  document.getElementById('b-save').textContent = f(total) + ' грн/рік';
  document.getElementById('b-back').textContent = payback + ' р.';

  const res = document.getElementById('calc-res');
  res.classList.add('show');
  res.scrollIntoView({behavior:'smooth', block:'nearest'});
}

// Home calculator
function calcHome() {
  const kwh    = parseFloat(document.getElementById('h-kwh').value)    || 350;
  const tariff = parseFloat(document.getElementById('h-tariff').value) || 4.32;
  const sun    = parseFloat(document.getElementById('h-region').value) || 4.5;
  const roof   = parseFloat(document.getElementById('h-roof').value)   || 1.0;
  const hybrid = parseInt(document.getElementById('h-type').value)     || 0;
  const green  = parseInt(document.getElementById('h-green').value)    || 1;

  const powerKw  = +(kwh / sun / 30 * 1.18 * (1/roof)).toFixed(1);
  const panels   = Math.ceil(powerKw * 1000 / 400);
  const areaM2   = Math.round(panels * 2.0);
  const akbKwh   = hybrid ? Math.round(powerKw * 1.2) : 0;
  const annualGen= Math.round(powerKw * sun * 365 * 0.83 * roof);
  const annualKwh= kwh * 12;
  const selfUse  = Math.min(annualGen, annualKwh);
  const surplus  = Math.max(0, annualGen - annualKwh);
  const saved    = Math.round(selfUse * tariff);
  const earned   = green ? Math.round(surplus * 1.5) : 0;
  const total    = saved + earned;
  const pct      = Math.round(selfUse / annualKwh * 100);
  const baseCost = Math.round(powerKw * 33000);
  const akbCost  = hybrid ? Math.round(akbKwh * 4200) : 0;
  const cost     = baseCost + akbCost;
  const payback  = (cost / total).toFixed(1);

  const f = n => n.toLocaleString('uk');

  document.getElementById('h-pow').textContent  = powerKw + ' кВт';
  document.getElementById('h-pnl').textContent  = panels + ' шт.';
  document.getElementById('h-area').textContent = areaM2 + ' м²';
  document.getElementById('h-akb').textContent  = hybrid ? akbKwh + ' кВт·год' : 'Не потрібен';
  document.getElementById('h-cost').textContent = '~' + f(cost) + ' грн';
  document.getElementById('h-save').textContent = f(total) + ' грн/рік';
  document.getElementById('h-pct').textContent  = pct + '% від рахунків';
  document.getElementById('h-back').textContent = payback + ' р.';

  const res = document.getElementById('home-result');
  res.classList.add('show');
  res.scrollIntoView({behavior:'smooth', block:'nearest'});
}


function calcIndustrialSolar() {
  var kwh    = parseFloat(document.getElementById('ind-kwh').value)    || 200000;
  var tariff = parseFloat(document.getElementById('ind-tariff').value) || 4.32;
  var sun    = parseFloat(document.getElementById('ind-region').value) || 4.5;
  var mode   = parseFloat(document.getElementById('ind-mode').value)   || 0.8;
  var bess   = parseInt(document.getElementById('ind-type').value)     || 0;

  var annualKwh  = kwh * 12;
  var peakH      = sun * 365;
  var cover      = mode * 0.85;
  var targetGen  = annualKwh * cover;
  var powerKw    = Math.ceil(targetGen / peakH / 0.8 / 100) * 100;
  var panels     = Math.round(powerKw * 1000 / 600);
  var area       = Math.round(powerKw * 5.5);
  var genKwh     = Math.round(powerKw * peakH * 0.8);
  var pricePerKw = bess ? 18000 : 11500;
  var cost       = Math.round(powerKw * pricePerKw);
  var vat        = Math.round(cost * 0.2);
  var netCost    = cost - vat;
  var saving     = Math.round(genKwh * cover * tariff);
  var payback    = (saving > 0) ? (netCost / saving).toFixed(1) : '—';

  var fmt = function(n){ return n.toLocaleString('uk-UA'); };
  document.getElementById('ind-pow').textContent  = fmt(powerKw) + ' кВт';
  document.getElementById('ind-pnl').textContent  = fmt(panels) + ' шт.';
  document.getElementById('ind-area').textContent = fmt(area) + ' м²';
  document.getElementById('ind-gen').textContent  = fmt(genKwh) + ' кВт·год/р.';
  document.getElementById('ind-cost').textContent = fmt(cost) + ' грн';
  document.getElementById('ind-vat').textContent  = '+ ' + fmt(vat) + ' грн';
  document.getElementById('ind-net').textContent  = fmt(netCost) + ' грн';
  document.getElementById('ind-save').textContent = fmt(saving) + ' грн/р.';
  document.getElementById('ind-back').textContent = payback + ' р.';

  document.getElementById('ind-res').style.display   = 'block';
  document.getElementById('ind-strip').style.display = 'flex';
  document.getElementById('ind-note').style.display  = 'block';
}