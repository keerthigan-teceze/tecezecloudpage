(function () {

  // ═══════════════════════════════════
  // SECTION 1 — Hero Slider
  // ═══════════════════════════════════
  const sliderEl    = document.getElementById('slider');
  const progressFill = document.getElementById('progressFill');
  const counterMain  = document.getElementById('counterMain');
  const prevBtn      = document.getElementById('prevBtn');
  const nextBtn      = document.getElementById('nextBtn');

  if (sliderEl && progressFill && counterMain && prevBtn && nextBtn) {
    const slides     = sliderEl.querySelectorAll('.slide');
    const TOTAL      = slides.length;
    const AUTO_DELAY = 5000;
    let current = 0;
    let timer   = null;

    function goTo(index) {
      slides[current].classList.remove('active');
      current = (index + TOTAL) % TOTAL;
      slides[current].classList.add('active');
      counterMain.textContent = String(current + 1).padStart(2, '0');
      resetProgress();
    }

    function resetProgress() {
      progressFill.style.transition = 'none';
      progressFill.style.width = '0%';
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          progressFill.style.transition = `width ${AUTO_DELAY}ms linear`;
          progressFill.style.width = '100%';
        });
      });
    }

    function startAuto() {
      clearInterval(timer);
      timer = setInterval(() => goTo(current + 1), AUTO_DELAY);
    }

    prevBtn.addEventListener('click', () => { goTo(current - 1); startAuto(); });
    nextBtn.addEventListener('click', () => { goTo(current + 1); startAuto(); });

    sliderEl.addEventListener('mouseenter', () => clearInterval(timer));
    sliderEl.addEventListener('mouseleave', () => startAuto());

    let touchStartX = 0;
    sliderEl.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    sliderEl.addEventListener('touchend', e => {
      const diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) { goTo(diff > 0 ? current + 1 : current - 1); startAuto(); }
    });

    resetProgress();
    startAuto();
  }


  // ═══════════════════════════════════
  // SECTION 3 — Card Slider
  // ═══════════════════════════════════
  const track     = document.getElementById('s3Track');
  const counterEl = document.getElementById('s3CounterMain');
  const s3Prev    = document.getElementById('s3PrevBtn');
  const s3Next    = document.getElementById('s3NextBtn');

  if (track && counterEl && s3Prev && s3Next) {
    const cards    = track.querySelectorAll('.s3-card');
    const S3_TOTAL = cards.length;
    let s3Current  = 0;

    function visibleCount() {
      const w = track.parentElement.offsetWidth;
      if (w <= 540) return 1;
      if (w <= 900) return 2;
      return 3;
    }

    function stepWidth() {
      const gap = parseFloat(getComputedStyle(track).gap) || 16;
      return cards[0].offsetWidth + gap;
    }

    function s3GoTo(index) {
      const maxIndex = S3_TOTAL - visibleCount();
      s3Current = Math.max(0, Math.min(index, maxIndex));
      track.style.transform = `translateX(-${s3Current * stepWidth()}px)`;
      counterEl.textContent = String(s3Current + 1).padStart(2, '0');
      s3Prev.style.opacity = s3Current === 0 ? '0.35' : '1';
      s3Next.style.opacity = s3Current >= maxIndex ? '0.35' : '1';
    }

    s3Prev.addEventListener('click', () => s3GoTo(s3Current - 1));
    s3Next.addEventListener('click', () => s3GoTo(s3Current + 1));

    let s3TouchX = 0;
    track.addEventListener('touchstart', e => { s3TouchX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
      const diff = s3TouchX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) s3GoTo(diff > 0 ? s3Current + 1 : s3Current - 1);
    });

    window.addEventListener('resize', () => s3GoTo(s3Current));

    s3GoTo(0);
  }

})();






(function () {
  var SLIDES = [
    { date: 'Feb 18, 2026', category: 'Driving Data-Driven Decisions', title: 'Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.', link: '#form1', image: '/images/3.png' },
    { date: 'Apr 10, 2026', category: 'Driving Data-Driven Decisions', title: 'Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.', link: '#form1', image: '/images/3.png' },
    { date: 'Mar 5, 2026', category: 'Strengthening Enterprise Cybersecurity', title: 'Implemented AI-driven security to reduce threats and improve real-time response.', link: '#form1', image: '/images/3.png' }
  ];

  var current = 0;
  var total = SLIDES.length;
  var animating = false;

  var leftEl = document.getElementById('tczCs2Left');
  var wrapper = document.getElementById('tczSlideWrapper');
  var currentEl = document.getElementById('tczCs2Current');
  var totalEl = document.getElementById('tczCs2Total');

  totalEl.textContent = String(total).padStart(2, '0');

  function slideHTML(s) {
    return '<div class="tcz-cs2__slide-inner"><img class="tcz-cs2__img" src="'+s.image+'" /><div class="tcz-cs2__img-overlay"></div><div class="tcz-cs2__img-content"><p class="tcz-cs2__img-meta">'+s.date+'</p><h3 class="tcz-cs2__img-title">'+s.title+'</h3><a href="'+s.link+'" class="tcz-cs2__img-link">Read Case Study</a></div></div>';
  }

  function renderLeft(idx) {
    var s = SLIDES[idx];
    if(leftEl) leftEl.innerHTML = '<p class="tcz-cs2__text-meta">'+s.date+'</p><h3 class="tcz-cs2__text-title">'+s.title+'</h3><a href="'+s.link+'" class="tcz-cs2__text-link">Read Case Study</a>';
  }

  function goTo(nextIdx, dir) {
    if (animating) return; animating = true;
    nextIdx = (nextIdx + total) % total;
    wrapper.style.transition = 'transform 0.45s ease';
    wrapper.style.transform = dir === 1 ? 'translateX(-100%)' : 'translateX(0%)';
    setTimeout(function () {
      current = nextIdx;
      wrapper.style.transition = 'none';
      wrapper.innerHTML = slideHTML(SLIDES[current]);
      wrapper.style.transform = 'translateX(0%)';
      renderLeft((current - 1 + total) % total);
      currentEl.textContent = String(current + 1).padStart(2, '0');
      animating = false;
    }, 460);
  }

  document.getElementById('tczCs2Prev').onclick = function() { goTo(current - 1, -1); };
  document.getElementById('tczCs2Next').onclick = function() { goTo(current + 1, 1); };

  function scaleWatermark() {
    var isMobile = window.innerWidth <= 700;
    var probe = document.createElement('span');
    // JS Letter spacing must match CSS exactly for math to work
    probe.style.cssText = 'position:absolute;visibility:hidden;white-space:nowrap;font-weight:900;letter-spacing:2px;font-size:100px;text-transform:uppercase;';
    probe.textContent = 'case studies';
    document.body.appendChild(probe);
    var textW = probe.getBoundingClientRect().width;
    document.body.removeChild(probe);

    var targetW = window.innerWidth;
    // REDUCE FONT SIZE ON MOBILE: Only use 80% of width on mobile, 100% on desktop
    var multiplier = isMobile ? 0.8 : 1.0; 
    var fontSize = Math.floor((targetW / textW) * 100 * multiplier);

    var allSpans = document.querySelectorAll('.tcz-cs2__wm-top span, .tcz-cs2__wm-behind span');
    allSpans.forEach(s => s.style.fontSize = fontSize + 'px');

    var h = document.querySelector('.tcz-cs2__wm-top').getBoundingClientRect().height;
    document.querySelector('.tcz-cs2__container').style.paddingTop = (h + (isMobile ? 10 : 0)) + 'px';
  }

  window.addEventListener('resize', scaleWatermark);
  wrapper.innerHTML = slideHTML(SLIDES[0]);
  renderLeft(total - 1);
  scaleWatermark();
})();

document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');

      // Close all items
      document.querySelectorAll('.faq-item').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });

      // Open clicked item if it was closed
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  (function () {
  const track    = document.getElementById('s3Track');
  const viewport = document.getElementById('s3Viewport');
  const prevBtn  = document.getElementById('s3Prev');
  const nextBtn  = document.getElementById('s3Next');
  const dotsWrap = document.getElementById('s3Dots');
 
  /* ── Clone cards for infinite loop ── */
  const origCards = Array.from(track.querySelectorAll('.s3-card'));
  const total     = origCards.length;
 
  /* prepend clones of last N + append clones of first N */
  const CLONE_COUNT = 3; // enough to cover max visible (3 on desktop)
 
  const headClones = origCards.slice(-CLONE_COUNT).map(c => {
    const cl = c.cloneNode(true); cl.setAttribute('aria-hidden','true'); return cl;
  });
  const tailClones = origCards.slice(0, CLONE_COUNT).map(c => {
    const cl = c.cloneNode(true); cl.setAttribute('aria-hidden','true'); return cl;
  });
 
  headClones.forEach(c => track.prepend(c));
  tailClones.forEach(c => track.append(c));
 
  /* all cards including clones */
  const allCards = () => Array.from(track.querySelectorAll('.s3-card'));
 
  let visibleCount = getVisibleCount();
  /* real currentIndex refers to position among original cards (0-based) */
  let currentIndex = 0;
 
  /* ── helpers ── */
  function getVisibleCount() {
    return window.innerWidth <= 640 ? 1
         : window.innerWidth <= 1024 ? 2
         : 3;
  }
  function getGap() {
    return parseFloat(window.getComputedStyle(track).columnGap) || 0;
  }
  function getCardWidth() {
    const c = allCards()[0];
    return c ? c.getBoundingClientRect().width : 0;
  }
 
  /* trackIndex = position in full array (including clones at head) */
  function realToTrack(real) { return real + CLONE_COUNT; }
 
  function setTrackPos(trackIdx, animate) {
    const offset = trackIdx * (getCardWidth() + getGap());
    if (animate) {
      track.classList.add('animating');
    } else {
      track.classList.remove('animating');
    }
    track.style.transform = `translateX(-${offset}px)`;
  }
 
  function goTo(real, animate = true) {
    currentIndex = ((real % total) + total) % total; // wrap safely
    setTrackPos(realToTrack(currentIndex), animate);
    updateDots();
  }
 
  /* after transition: if we landed on a clone, jump silently to real card */
  track.addEventListener('transitionend', () => {
    track.classList.remove('animating');
  });
 
  function updateDots() {
    dotsWrap.querySelectorAll('.s3-dot').forEach((d, i) =>
      d.classList.toggle('active', i === currentIndex));
  }
 
  function buildDots() {
    dotsWrap.innerHTML = '';
    for (let i = 0; i < total; i++) {
      const btn = document.createElement('button');
      btn.className = 's3-dot' + (i === 0 ? ' active' : '');
      btn.setAttribute('aria-label', `Go to card ${i + 1}`);
      btn.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(btn);
    }
  }
 
  /* ── Infinite loop jump logic ── */
  /* We watch transitionend; if track index is in clone zone, snap silently */
  track.addEventListener('transitionend', () => {
    const cards = allCards();
    const cw    = getCardWidth() + getGap();
    const rawOffset = parseFloat(track.style.transform.replace('translateX(','').replace('px)','').replace('-','')) || 0;
    const trackIdx  = Math.round(rawOffset / cw);
 
    /* landed on head clone zone */
    if (trackIdx < CLONE_COUNT) {
      const jump = total - (CLONE_COUNT - trackIdx);
      setTrackPos(realToTrack(jump), false);
      currentIndex = jump % total;
    }
    /* landed on tail clone zone */
    else if (trackIdx >= CLONE_COUNT + total) {
      const jump = trackIdx - CLONE_COUNT - total;
      setTrackPos(realToTrack(jump), false);
      currentIndex = jump % total;
    }
    updateDots();
  });
 
  /* ── Arrow buttons ── */
  prevBtn && prevBtn.addEventListener('click', () => {
    goTo(currentIndex - 1);
  });
  nextBtn && nextBtn.addEventListener('click', () => {
    goTo(currentIndex + 1);
  });
 
  /* ── Touch / swipe ── */
  let txStart = 0, tyStart = 0, swiping = false;
  viewport.addEventListener('touchstart', e => {
    txStart = e.touches[0].clientX;
    tyStart = e.touches[0].clientY;
    swiping = false;
  }, { passive: true });
  viewport.addEventListener('touchmove', e => {
    const dx = Math.abs(e.touches[0].clientX - txStart);
    const dy = Math.abs(e.touches[0].clientY - tyStart);
    if (dx > dy && dx > 8) swiping = true;
  }, { passive: true });
  viewport.addEventListener('touchend', e => {
    if (!swiping) return;
    const diff = e.changedTouches[0].clientX - txStart;
    if (diff < -50)      goTo(currentIndex + 1);
    else if (diff > 50)  goTo(currentIndex - 1);
  });
 
  /* ── Keyboard ── */
  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft')  goTo(currentIndex - 1);
    if (e.key === 'ArrowRight') goTo(currentIndex + 1);
  });
 
  /* ── Resize ── */
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      visibleCount = getVisibleCount();
      buildDots();
      goTo(currentIndex, false);
    }, 120);
  });
 
  /* ── Init ── */
  buildDots();
  goTo(0, false); // start at first real card, no animation
 
})();