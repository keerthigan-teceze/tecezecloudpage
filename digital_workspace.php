 <?php include 'header.php'; ?>

<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --tw-hero-bg: #041120;
      --tw-accent: #4f8ef7;
      --tw-accent2: #6c4dff;
      --tw-glass-bg: rgba(10, 25, 50, 0.62);
      --tw-glass-border: rgba(79, 142, 247, 0.35);
      --tw-text-main: #e8f0ff;
      --tw-text-muted: #8aabcf;
      --tw-input-bg: rgba(255,255,255,0.07);
      --tw-input-border: rgba(79, 142, 247, 0.25);
      --tw-btn-grad: linear-gradient(135deg, #2a44b0 0%, #13c5b8 100%);
      --tw-font-head: 'Sora', sans-serif;
      --tw-font-body: 'DM Sans', sans-serif;
    }

    body {
      font-family: var(--tw-font-body);
      background: var(--tw-hero-bg);
      color: var(--tw-text-main);
      min-height: 100vh;
      
    }

    /* ─── HERO SECTION ─── */
    .tw-hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    /* Background image + overlays */
    .tw-hero__bg {
      position: absolute;
      inset: 0;
      background:
        /* linear-gradient(120deg, rgba(4,17,32,0.92) 38%, rgba(4,17,32,0.55) 100%), */
        url('images/digitalwork.png') center/cover no-repeat;
      z-index: 0;
    }

    /* Animated glowing blobs */
    .tw-hero__blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(90px);
      opacity: 0.18;
      animation: tw-blob-drift 9s ease-in-out infinite alternate;
      z-index: 0;
    }
    .tw-hero__blob--1 {
      width: 480px; height: 480px;
      background: radial-gradient(circle, #4f8ef7, transparent 70%);
      top: -80px; left: -80px;
      animation-delay: 0s;
    }
    .tw-hero__blob--2 {
      width: 360px; height: 360px;
      background: radial-gradient(circle, #6c4dff, transparent 70%);
      bottom: -60px; right: 340px;
      animation-delay: 3s;
    }
    @keyframes tw-blob-drift {
      from { transform: translate(0,0) scale(1); }
      to   { transform: translate(30px, 20px) scale(1.08); }
    }

    /* Grid overlay */
    .tw-hero__grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(79,142,247,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(79,142,247,0.04) 1px, transparent 1px);
      background-size: 48px 48px;
      z-index: 0;
    }

    /* Full-width breadcrumb row sits above the main inner flex row */
    .tw-hero__header-row {
      position: relative;
      z-index: 2;
      width: 100%;
    }
    .tw-hero__breadcrumb-wrap {
      max-width: 1280px;
      margin: 0 auto;
      padding: 120px 40px 16px;
    }
    .tw-hero__breadcrumb {
      font-family: var(--tw-font-head);
      font-size: 0.72rem;
      font-weight: 500;
      letter-spacing: 0.13em;
      text-transform: uppercase;
      color: rgba(138,171,207,0.7);
      margin-bottom: 14px;
      display: block;
    }
    /* The line spans the FULL section width — no max-width constraint */
    .tw-hero__divider {
      width: 100%;
      height: 1px;
      background: rgba(79, 142, 247, 0.3);
    }

    .tw-hero__inner {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 48px 40px 80px;
      display: flex;
      align-items: center;
      gap: 48px;
    }

    /* ─── LEFT CONTENT ─── */
    .tw-hero__content {
      flex: 1 1 0;
      min-width: 0;
      animation: tw-fade-up 0.8s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes tw-fade-up {
      from { opacity: 0; transform: translateY(32px); }
      to   { opacity: 1; transform: translateY(0); }
    }


    .tw-hero__title {
      font-family: var(--tw-font-head);
      font-size: clamp(2.2rem, 5vw, 3.8rem);
      font-weight: 700;
      line-height: 1.12;
      margin-bottom: 24px;
      letter-spacing: -0.02em;
      color: #fff;
    }
    .tw-hero__title span {
      color: #fff;
    }

    .tw-hero__desc {
      font-size: 1.04rem;
      line-height: 1.75;
      color: var(--tw-text-muted);
      max-width: 520px;
      margin-bottom: 40px;
      font-weight: 300;
    }

    .tw-hero__cta {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 10px 10px 10px 24px;
      border: 1.5px solid rgba(79,142,247,0.45);
      border-radius: 50px;
      background: transparent;
      color: var(--tw-text-main);
      font-family: var(--tw-font-head);
      font-size: 0.95rem;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      backdrop-filter: blur(8px);
      transition: border-color 0.25s, transform 0.2s;
      margin-bottom: 56px;
    }
    .tw-hero__cta:hover {
      border-color: rgba(79,142,247,0.85);
      transform: translateY(-2px);
    }
    .tw-hero__cta-arrow {
      width: 36px; height: 36px;
      border-radius: 50%;
      background: linear-gradient(135deg, #2a44b0 0%, #13c5b8 100%);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      transition: transform 0.2s;
    }
    .tw-hero__cta:hover .tw-hero__cta-arrow {
      transform: translateX(4px);
    }
    .tw-hero__cta-arrow svg { width: 15px; height: 15px; }

    /* Partner logos */
    .tw-hero__partners {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .tw-hero__partner-badge {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8px 16px;
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 10px;
      background: rgba(255,255,255,0.04);
      backdrop-filter: blur(6px);
      transition: border-color 0.2s, background 0.2s;
    }
    .tw-hero__partner-badge:hover {
      border-color: rgba(79,142,247,0.4);
      background: rgba(79,142,247,0.07);
    }
    .tw-hero__partner-badge img {
      height: 22px;
      width: auto;
      display: block;
      object-fit: contain;
      filter: brightness(0) invert(1);
      opacity: 0.75;
    }

    /* ─── RIGHT FORM CARD ─── */
    .tw-hero__form-wrap {
      flex: 0 0 360px;
      width: 360px;
      animation: tw-fade-up 0.8s 0.18s cubic-bezier(.22,1,.36,1) both;
    }

    .tw-enquire-card {
      background: var(--tw-glass-bg);
      border: 1.5px solid var(--tw-glass-border);
      border-radius: 20px;
      padding: 32px 28px 28px;
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      box-shadow:
        0 8px 40px rgba(0,0,0,0.35),
        inset 0 1px 0 rgba(255,255,255,0.07);
      position: relative;
      overflow: hidden;
    }
    /* Subtle top glow on card */
    .tw-enquire-card::before {
      content: '';
      position: absolute;
      top: -40px; left: 50%;
      transform: translateX(-50%);
      width: 220px; height: 80px;
      background: radial-gradient(ellipse, rgba(79,142,247,0.35), transparent 70%);
      pointer-events: none;
    }

    .tw-enquire-card__title {
      font-family: var(--tw-font-head);
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 24px;
      color: #fff;
      letter-spacing: -0.01em;
    }

    .tw-form-group {
      margin-bottom: 16px;
    }
    .tw-form-group label {
      display: block;
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--tw-text-muted);
      margin-bottom: 7px;
      letter-spacing: 0.02em;
    }
    .tw-form-group input,
    .tw-form-group textarea {
      width: 100%;
      background: var(--tw-input-bg);
      border: 1px solid var(--tw-input-border);
      border-radius: 10px;
      padding: 11px 14px;
      font-family: var(--tw-font-body);
      font-size: 0.9rem;
      color: var(--tw-text-main);
      outline: none;
      transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
      -webkit-appearance: none;
    }
    .tw-form-group input::placeholder,
    .tw-form-group textarea::placeholder { color: rgba(138,171,207,0.45); }
    .tw-form-group input:focus,
    .tw-form-group textarea:focus {
      border-color: var(--tw-accent);
      background: rgba(79,142,247,0.06);
      box-shadow: 0 0 0 3px rgba(79,142,247,0.12);
    }
    .tw-form-group textarea {
      resize: vertical;
      min-height: 90px;
    }

    /* Phone row */
    .tw-phone-row {
      display: flex;
      gap: 0;
      border: 1px solid var(--tw-input-border);
      border-radius: 10px;
      overflow: hidden;
      background: var(--tw-input-bg);
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .tw-phone-row:focus-within {
      border-color: var(--tw-accent);
      box-shadow: 0 0 0 3px rgba(79,142,247,0.12);
    }
    .tw-phone-code {
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 11px 12px;
      border-right: 1px solid var(--tw-input-border);
      font-size: 0.88rem;
      color: var(--tw-text-main);
      cursor: pointer;
      white-space: nowrap;
      flex-shrink: 0;
    }
    .tw-phone-code span { font-size: 1rem; }
    .tw-phone-input {
      flex: 1;
      border: none !important;
      border-radius: 0 !important;
      background: transparent !important;
      box-shadow: none !important;
    }

    .tw-enquire-btn {
      width: 100%;
      margin-top: 8px;
      padding: 10px 10px 10px 20px;
      border: 1.5px solid rgba(79,142,247,0.4);
      border-radius: 50px;
      background: transparent;
      color: #fff;
      font-family: var(--tw-font-head);
      font-size: 0.95rem;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: border-color 0.2s, transform 0.2s;
      letter-spacing: 0.01em;
    }
    .tw-enquire-btn:hover {
      border-color: rgba(79,142,247,0.8);
      transform: translateY(-2px);
    }
    .tw-enquire-btn:active { transform: translateY(0); }
    .tw-enquire-btn__icon {
      width: 32px; height: 32px;
      border-radius: 50%;
      background: linear-gradient(135deg, #2a44b0 0%, #13c5b8 100%);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      transition: transform 0.2s;
    }
    .tw-enquire-btn:hover .tw-enquire-btn__icon { transform: translateX(3px); }
    .tw-enquire-btn__icon svg { width: 13px; height: 13px; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1024px) {
      .tw-hero__breadcrumb-wrap { padding: 110px 28px 16px; }
      .tw-hero__inner {
        flex-direction: column;
        padding: 40px 28px 60px;
        gap: 40px;
        align-items: flex-start;
      }
      .tw-hero__form-wrap {
        flex: none;
        width: 100%;
        max-width: 480px;
      }
    }

    @media (max-width: 640px) {
      .tw-hero__breadcrumb-wrap { padding: 100px 18px 14px; }
      .tw-hero__inner { padding: 32px 18px 48px; }
      .tw-hero__title { font-size: clamp(1.9rem, 7vw, 2.8rem); }
      .tw-hero__desc { font-size: 0.95rem; }
      .tw-enquire-card { padding: 24px 18px 22px; }
      .tw-hero__form-wrap { max-width: 100%; }
      .tw-hero__partners { gap: 6px; }
      .tw-hero__partner-badge { padding: 7px 10px; }
    }


      *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --dw-bg: #ffffff;
      --dw-text-dark: #1a1d2e;
      --dw-text-muted: #4a4f6a;
      --dw-text-light: #6b7280;
      --dw-accent: #1a1d2e;
      --dw-label: #6b7280;
      --dw-highlight-bold: #1a1d2e;
      --dw-highlight-muted: #9ca3af;
      --dw-image-radius: 20px;
      --dw-max-width: 1200px;
      --dw-font-display: 'Sora', sans-serif;
      --dw-font-body: 'Inter', sans-serif;
    }

    body {
      background: var(--dw-bg);
      font-family: var(--dw-font-body);
      color: var(--dw-text-dark);
      -webkit-font-smoothing: antialiased;
    }

    /* === SECTION WRAPPER === */
    .dw-section {
      width: 100%;
      max-width: var(--dw-max-width);
      margin: 0 auto;
      padding: 64px 40px;
    }

    /* === GRID LAYOUT === */
    .dw-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0 56px;
      align-items: start;
    }

    /* === LEFT COLUMN: IMAGE (spans full height) === */
    .dw-image-col {
      grid-row: 1 / 3;
      grid-column: 1 / 2;
    }

    .dw-image-wrapper {
      width: 100%;
      border-radius: var(--dw-image-radius);
      overflow: hidden;
      aspect-ratio: 3 / 3.8;
      position: relative;
    }

    .dw-image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center top;
      display: block;
    }

    /* === RIGHT COLUMN TOP: OVERVIEW TEXT === */
    .dw-content-top {
      grid-row: 1 / 2;
      grid-column: 2 / 3;
      padding-top: 8px;
    }

    .dw-label {
      font-family: var(--dw-font-body);
      font-size: 13px;
      font-weight: 500;
      color: var(--dw-label);
      letter-spacing: 0.02em;
      margin-bottom: 14px;
    }

    .dw-heading {
      font-family: var(--dw-font-display);
      font-size: clamp(20px, 2.2vw, 30px);
      font-weight: 700;
      color: var(--dw-text-dark);
      line-height: 1.2;
      letter-spacing: -0.02em;
      margin-bottom: 16px;
    }

    .dw-body {
      font-family: var(--dw-font-body);
      font-size: 13px;
      line-height: 1.7;
      color: var(--dw-text-muted);
      max-width: 440px;
    }

    /* === RIGHT COLUMN BOTTOM: HIGHLIGHT TEXT === */
    .dw-content-bottom {
      grid-row: 2 / 3;
      grid-column: 2 / 3;
      display: flex;
      align-items: flex-end;
      padding-top: 80px;
      padding-bottom: 4px;
    }

    .dw-highlight-text {
      font-family: var(--dw-font-display);
      font-size: clamp(16px, 1.7vw, 22px);
      font-weight: 400;
      line-height: 1.5;
      color: var(--dw-highlight-muted);
      max-width: 460px;
    }

    .dw-highlight-text strong {
      color: var(--dw-highlight-bold);
      font-weight: 700;
    }

    /* ===========================
       RESPONSIVE BREAKPOINTS
    =========================== */

    /* Tablet */
    @media (max-width: 900px) {
      .dw-section {
        padding: 48px 28px;
      }

      .dw-grid {
        gap: 0 36px;
      }

      .dw-heading {
        font-size: clamp(18px, 3vw, 26px);
      }

      .dw-highlight-text {
        font-size: clamp(14px, 2vw, 20px);
      }
    }

    /* Mobile: stack vertically */
    @media (max-width: 640px) {
      .dw-section {
        padding: 40px 20px;
      }

      .dw-grid {
        grid-template-columns: 1fr;
        grid-template-rows: auto auto auto;
        gap: 32px 0;
      }

      .dw-image-col {
        grid-row: 1 / 2;
        grid-column: 1 / 2;
      }

      .dw-image-wrapper {
        aspect-ratio: 4 / 3;
        border-radius: 14px;
      }

      .dw-content-top {
        grid-row: 2 / 3;
        grid-column: 1 / 2;
        padding-top: 0;
      }

      .dw-content-bottom {
        grid-row: 3 / 4;
        grid-column: 1 / 2;
        align-items: flex-start;
        padding-bottom: 0;
      }

      .dw-body {
        max-width: 100%;
      }

      .dw-highlight-text {
        font-size: 16px;
        max-width: 100%;
      }

      .dw-heading {
        font-size: 22px;
      }
    }
/* ─── what we offer section ─── */

 *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --wo-bg: #f5f7fa;
      --wo-dark: #0f1623;
      --wo-blue: #1565c0;
      --wo-muted: #5a6a85;
      --wo-watermark: rgba(15,22,35,0.07);
      --wo-card-radius: 18px;
      --wo-font-display: 'Sora', sans-serif;
      --wo-font-body: 'Inter', sans-serif;
      --wo-max-width: 1200px;
    }

    body {
      background: var(--wo-bg);
      font-family: var(--wo-font-body);
      -webkit-font-smoothing: antialiased;
    }
    .wo-section {
      position: relative;
      width: 100%;
      max-width: var(--wo-max-width);
      margin: 0 auto;
      padding: 60px 40px 48px;
      overflow: hidden;
    }

    /* WATERMARK */
    .wo-watermark {
      position: absolute;
      top: -10px; left: -20px; right: -20px;
      font-family: var(--wo-font-display);
      font-size: clamp(72px, 11vw, 140px);
      font-weight: 800;
      color: var(--wo-watermark);
      line-height: 1.1;
      pointer-events: none;
      user-select: none;
      white-space: nowrap;
      letter-spacing: -0.03em;
    }
    .wo-watermark span { display: block; }

    /* VIEWPORT — clips the track */
    .wo-cards-viewport {
      overflow: hidden;
      margin-bottom: 32px;
      position: relative;
    }

    /* TRACK — flex row, JS sets transform */
    .wo-cards-track {
      display: flex;
      gap: 20px;
      /* no CSS transition here — JS sets it per move */
    }

    /* CARD — JS sets explicit pixel width */
    .wo-card {
      flex-shrink: 0;
      border-radius: var(--wo-card-radius);
      overflow: hidden;
      position: relative;
      cursor: pointer;
      aspect-ratio: 3 / 3.5;
    }

    /* DEFAULT photo state */
    .wo-card__photo {
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      object-fit: cover; object-position: center top;
      transition: transform 0.5s ease;
    }
    .wo-card:hover .wo-card__photo { transform: scale(1.04); }

    .wo-card__overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.05) 30%, rgba(0,0,0,0.72) 100%);
      transition: opacity 0.4s ease;
    }

    .wo-card__info {
      position: absolute; bottom: 0; left: 0; right: 0;
      padding: 24px 22px; color: #fff;
      transition: opacity 0.35s ease;
    }
    .wo-card__icon { margin-bottom: 8px; opacity: 0.9; }
    .wo-card__icon img {
      width: 28px; height: 28px;
      object-fit: contain;
      filter: brightness(0) invert(1); /* makes any icon white */
    }
    .wo-card__label {
      font-size: 10.5px; font-weight: 500;
      letter-spacing: 0.12em; text-transform: uppercase;
      color: rgba(255,255,255,0.75); margin-bottom: 6px;
    }
    .wo-card__title {
      font-family: var(--wo-font-display);
      font-size: clamp(16px, 1.6vw, 22px);
      font-weight: 700; color: #fff; line-height: 1.2;
    }

    /* HOVER light-card state */
    .wo-card__hover {
      position: absolute; inset: 0;
      background: linear-gradient(145deg, #d6eaf8 0%, #c8e6fa 40%, #b2d8f5 100%);
      border-radius: var(--wo-card-radius);
      padding: 28px 24px;
      display: flex; flex-direction: column; justify-content: space-between;
      opacity: 0; transform: translateY(12px);
      transition: opacity 0.38s ease, transform 0.38s ease;
      pointer-events: none;
    }
    .wo-card:hover .wo-card__hover { opacity: 1; transform: translateY(0); pointer-events: auto; }
    .wo-card:hover .wo-card__info,
    .wo-card:hover .wo-card__overlay { opacity: 0; }

    .wo-card__hover-icon img {
      width: 32px; height: 32px;
      object-fit: contain;
      /* no invert — dark icon on light hover card */
    }
    .wo-card__hover-label {
      font-size: 10px; font-weight: 500;
      letter-spacing: 0.12em; text-transform: uppercase;
      color: var(--wo-muted); margin-top: 20px; margin-bottom: 8px;
    }
    .wo-card__hover-title {
      font-family: var(--wo-font-display);
      font-size: clamp(16px, 1.6vw, 20px);
      font-weight: 700; color: var(--wo-dark); line-height: 1.25;
    }
    .wo-card__hover-desc {
      font-size: 13px; line-height: 1.7;
      color: var(--wo-muted); margin-top: auto; padding-top: 20px;
    }

    /* BOTTOM BAR */
    .wo-bottom {
      display: flex; align-items: center;
      justify-content: space-between; margin-top: 8px;
    }
    .wo-counter { display: flex; align-items: baseline; gap: 4px; }
    .wo-counter__current {
      font-family: var(--wo-font-display);
      font-size: clamp(36px, 5vw, 56px);
      font-weight: 800; color: var(--wo-blue); line-height: 1;
    }
    .wo-counter__total {
      font-family: var(--wo-font-display);
      font-size: clamp(14px, 1.6vw, 18px);
      font-weight: 600; color: var(--wo-muted);
    }
    .wo-arrows { display: flex; gap: 12px; }
    .wo-arrow-btn {
      width: 48px; height: 48px; border-radius: 50%;
      border: 1.5px solid #c5cfd9; background: transparent;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: background 0.2s, border-color 0.2s;
    }
    .wo-arrow-btn:hover { background: var(--wo-dark); border-color: var(--wo-dark); }
    .wo-arrow-btn:hover svg { stroke: #fff; }
    .wo-arrow-btn svg {
      width: 18px; height: 18px; stroke: var(--wo-dark); fill: none;
      stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
      transition: stroke 0.2s;
    }

    @media (max-width: 900px) { .wo-section { padding: 48px 28px 40px; } }
    @media (max-width: 580px) {
      .wo-section { padding: 36px 18px 32px; }
      .wo-watermark { font-size: 56px; top: -6px; }
    }
 /* ===== AI powered tools ===== */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --tat-text: #ffffff;
      --tat-text-muted: #a0b8d8;
      --tat-label: #7eb3e8;
      --tat-icon-bg: rgba(255,255,255,0.08);
      --tat-icon-border: rgba(255,255,255,0.12);
      --tat-font-display: 'Sora', sans-serif;
      --tat-font-body: 'Inter', sans-serif;
      --tat-max-width: 1200px;
      --tat-icon-size: 80px;
    }

    body {
      font-family: var(--tat-font-body);
      -webkit-font-smoothing: antialiased;
    }

    /* ===== SECTION — bg image set here, override with your own ===== */
    .tat-section {
      position: relative;
      width: 100%;
      /* Replace the url below with your background image */
      background-image: url('images/Ai-tools-bg-img.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      /* Fallback dark color in case image not loaded */
      background-color: #0a1628;
    }

    .tat-inner {
      width: 100%;
      max-width: var(--tat-max-width);
      margin: 0 auto;
      padding: 72px 48px;
    }

    /* ===== LAYOUT ===== */
    .tat-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 56px;
      align-items: stretch;
    }

    /* ===== LEFT COLUMN ===== */
    .tat-left {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .tat-eyebrow {
      font-family: var(--tat-font-body);
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.06em;
      color: var(--tat-label);
      margin-bottom: 16px;
    }

    .tat-heading {
      font-family: var(--tat-font-display);
      font-size: clamp(24px, 2.8vw, 38px);
      font-weight: 700;
      color: var(--tat-text);
      line-height: 1.2;
      letter-spacing: -0.02em;
      margin-bottom: 20px;
    }

    .tat-body {
      font-size: 14px;
      line-height: 1.75;
      color: var(--tat-text-muted);
      max-width: 440px;
      margin-bottom: 40px;
    }

    /* ===== ICON GRID ===== */
    .tat-icons {
      display: grid;
      grid-template-columns: repeat(5, var(--tat-icon-size));
      gap: 12px;
    }

    .tat-icon-btn {
      width: var(--tat-icon-size);
      height: var(--tat-icon-size);
      border-radius: 14px;
      background: var(--tat-icon-bg);
      border: 1px solid var(--tat-icon-border);
      backdrop-filter: blur(8px);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s ease, background 0.2s ease;
    }

    .tat-icon-btn:hover {
      transform: translateY(-3px);
      background: rgba(255,255,255,0.14);
    }

    .tat-icon-btn img {
      width: 38px;
      height: 38px;
      object-fit: contain;
    }

    /* ===== RIGHT COLUMN: TALL RECTANGULAR IMAGE ===== */
    .tat-right {
      position: relative;
    }

    .tat-image-wrapper {
      width: 100%;
      height: 100%;
      min-height: 480px;
      border-radius: 20px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 24px 64px rgba(0,0,0,0.45);
    }

    .tat-image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 900px) {
      .tat-inner { padding: 56px 32px; }
      .tat-layout {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .tat-image-wrapper { min-height: 320px; height: 320px; }
    }

    @media (max-width: 580px) {
      .tat-inner { padding: 40px 20px; }
      :root { --tat-icon-size: 60px; }
      .tat-icons { gap: 10px; }
      .tat-icon-btn img { width: 28px; height: 28px; }
      .tat-icon-btn { border-radius: 12px; }
      .tat-image-wrapper { min-height: 260px; height: 260px; }
    }

    /* ─── case study section ─── */
    :root {
      --tat-text: #ffffff;
      --tat-text-muted: #a0b8d8;
      --tat-label: #7eb3e8;
      --tat-icon-bg: rgba(255,255,255,0.08);
      --tat-icon-border: rgba(255,255,255,0.12);
      --tat-font-display: 'Sora', sans-serif;
      --tat-font-body: 'Inter', sans-serif;
      --tat-max-width: 1200px;
      --tat-icon-size: 80px;
    }

    body {
      font-family: var(--tat-font-body);
      -webkit-font-smoothing: antialiased;
    }

   
     .cs-section{
  position:relative;
  background:#fff;
  overflow:hidden;
  width:100%;
  padding-bottom:48px;
}
 
/* ── WATERMARK ── */
.cs-wm{
  position:absolute;
  top:0; left:0; right:0;
  pointer-events:none;
  user-select:none;
  z-index:0;
  overflow:hidden;
}
.cs-wm span{
  display:block;
  font-weight:900;
  white-space:nowrap;
  line-height:0.88;
  letter-spacing:-1px;
  font-size:clamp(72px,14.5vw,168px);
}
.cs-wm span:nth-child(1){color:#e3e5e9;}
.cs-wm span:nth-child(2){color:#ecedf0;}
.cs-wm span:nth-child(3){color:#f4f5f6;}
 
/* ── MAIN GRID ── */
.cs-grid{
  position:relative;
  z-index:1;
  display:grid;
  grid-template-columns:42% 1fr;
  min-height:500px;
  padding-top:clamp(130px,21vw,240px);
}
 
/* ── LEFT ── */
.cs-left{
  display:flex;
  align-items:flex-end;
  padding:0 36px 16px 56px;
}
.cs-left-inner{display:flex;flex-direction:column;gap:14px;}
.cs-meta{font-size:11.5px;font-weight:500;color:#9ca3af;letter-spacing:0.01em;}
.cs-title{
  font-size:clamp(17px,2vw,24px);
  font-weight:700;
  color:#111827;
  line-height:1.38;
}
.cs-title .light{font-weight:400;color:#9ca3af;}
 
/* View All Cases button — outline pill, arrow circle inside */
.btn-all{
  display:inline-flex;
  align-items:center;
  gap:10px;
  border:1.5px solid #d1d5db;
  border-radius:50px;
  padding:9px 20px 9px 10px;
  font-size:12.5px;
  font-weight:600;
  color:#374151;
  text-decoration:none;
  width:fit-content;
  transition:border-color .2s,color .2s;
  cursor:pointer;
  background:transparent;
}
.btn-all:hover{border-color:#1a1a1a;color:#1a1a1a;}
.btn-all:hover .arr-dark{background:#1a1a1a;}
.arr-dark{
  width:28px;height:28px;border-radius:50%;
  background:#1f2937;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
  transition:background .2s;
}
.arr-dark svg{stroke:#fff;}
 
/* ── RIGHT CARD ── */
.cs-right{
  position:relative;
  border-radius:18px 0 0 18px;
  overflow:hidden;
  min-height:480px;
}
.cs-slide-track{
  display:flex;
  width:100%;height:100%;
  transition:transform .45s cubic-bezier(.4,0,.2,1);
}
.cs-slide{
  flex:0 0 100%;
  width:100%;height:100%;
  position:relative;
}
.cs-slide img{
  position:absolute;inset:0;
  width:100%;height:100%;
  object-fit:cover;
}
.cs-overlay{
  position:absolute;inset:0;
  background:linear-gradient(to bottom,rgba(5,15,50,.02) 30%,rgba(5,15,50,.72) 100%);
}
.cs-card-body{
  position:absolute;bottom:0;left:0;right:0;
  padding:clamp(18px,3vw,28px);
  z-index:2;
}
.cs-card-tag{font-size:11px;font-weight:600;color:rgba(255,255,255,.7);margin-bottom:8px;}
.cs-card-title{
  font-size:clamp(14px,1.7vw,20px);
  font-weight:700;
  color:#fff;
  line-height:1.42;
  margin-bottom:18px;
}
/* View Case Study button — ghost pill on dark bg */
.btn-case{
  display:inline-flex;
  align-items:center;
  gap:10px;
  border:1.5px solid rgba(255,255,255,.45);
  border-radius:50px;
  padding:8px 20px 8px 10px;
  font-size:12px;
  font-weight:600;
  color:#fff;
  text-decoration:none;
  width:fit-content;
  transition:background .2s,border-color .2s;
  cursor:pointer;
  background:transparent;
}
.btn-case:hover{background:rgba(255,255,255,.12);border-color:rgba(255,255,255,.7);}
.arr-white{
  width:26px;height:26px;border-radius:50%;
  background:rgba(255,255,255,.22);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.arr-white svg{stroke:#fff;}
 
/* ── BOTTOM BAR ── */
.cs-bottom{
  position:relative;z-index:1;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:28px 0 0;
  margin: 0 56px;
}
.cs-bottom-spacer{flex:0 0 42%;}
 
.cs-counter{display:flex;align-items:baseline;gap:3px;}
.cs-cur{
  font-size:clamp(32px,5vw,52px);
  font-weight:800;
  background:linear-gradient(135deg,#1a56db,#06b6d4);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  line-height:1;
}
.cs-sep,.cs-tot{font-size:clamp(14px,1.8vw,20px);color:#b0b7c3;font-weight:400;}
 
.cs-nav{display:flex;gap:10px;}
/* Nav buttons — circle outline with arrow, NO fill */
.nav-btn{
  width:42px;height:42px;
  border-radius:50%;
  border:1.5px solid #d1d5db;
  background:transparent;
  color:#374151;
  cursor:pointer;
  display:flex;align-items:center;justify-content:center;
  transition:border-color .2s,color .2s;
}
.nav-btn:hover{border-color:#374151;color:#111;}
 
/* ── RESPONSIVE ── */
@media(max-width:680px){
  .cs-grid{grid-template-columns:1fr;padding-top:clamp(80px,26vw,180px);}
  .cs-left{padding:0 20px 20px;align-items:flex-start;}
  .cs-right{border-radius:0 0 18px 18px;min-height:360px;margin:0 16px;border-radius:18px;}
  .cs-bottom{margin:0 20px;flex-wrap:wrap;gap:12px;}
  .cs-bottom-spacer{display:none;}
}

/* ─── drv section ─── */
     .drv-section {
      position: relative;
      width: 100%;
      background-image: url('images/new-sec-bg.png');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      font-family: 'gilroy', sans-serif;
      color: #ffffff;
      overflow: hidden;
    }

    .drv-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg,
        rgba(2, 20, 60, 0.55) 0%,
        rgba(5, 30, 80, 0.35) 50%,
        rgba(2, 20, 60, 0.50) 100%);
      z-index: 0;
    }

    .drv-inner {
      position: relative;
      z-index: 1;
      max-width: 1300px;
      margin: 0 auto;
      padding: 52px 40px;
    }

    /* ─── Top Row ─── */
    .drv-top {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-bottom: 28px;
      align-items: start;
    }

    .drv-headline {
      font-size: clamp(24px, 2.8vw, 38px);
      font-weight: 300;
      line-height: 1.2;
      letter-spacing: -0.01em;
      color: #e8f0ff;
    }

    .drv-desc {
      font-size: clamp(12px, 1.05vw, 14px);
      font-weight: 400;
      line-height: 1.7;
      color: rgba(210, 225, 255, 0.82);
    }

    /* ─── Rows ─── */
    .drv-cards-wrap {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    /* Row 1: 70% | 30% */
    .drv-row {
      display: grid;
      gap: 10px;
    }

    .drv-row--70-30 {
      grid-template-columns: 70fr 30fr;
    }

    /* Row 2: 30% | 70% */
    .drv-row--30-70 {
      grid-template-columns: 40fr 60fr;
    }

    /* ─── Each Box ─── */
    .drv-box {
      background: rgba(255, 255, 255, 0.09);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.13);
      border-radius: 10px;
      padding: 28px 20px;
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 20px;
      min-height: 145px;
      transition: background 0.25s ease, border-color 0.25s ease;
    }

    .drv-box:hover {
      background: rgba(255, 255, 255, 0.14);
      border-color: rgba(255, 255, 255, 0.22);
    }

    /* ─── Text content ─── */
    .drv-box__text {
      font-size: clamp(11.5px, 1.05vw, 14px);
      font-weight: 400;
      color: rgba(220, 235, 255, 0.88);
      line-height: 1.6;
      flex: 1;
    }

    /* ─── Stat content ─── */
    .drv-box__stat-wrap {
      display: flex;
      flex-direction: column;
      gap: 4px;
      flex-shrink: 0;
    }

    .drv-box__label {
      font-size: clamp(9px, 0.78vw, 11.5px);
      font-weight: 500;
      color: rgba(160, 200, 255, 0.78);
      letter-spacing: 0.04em;
      line-height: 1.3;
      white-space: nowrap;
    }

    .drv-box__stat {
      font-family: 'gilroy', sans-serif;
      font-size: clamp(42px, 5.2vw, 72px);
      font-weight: 300;
      line-height: 1;
      letter-spacing: -0.02em;
      background: linear-gradient(134deg, #2559CA 0%, #3AB8F1 52.43%, #2EDEDB 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* ─────────────────────────────────────────
       TABLET  (768px – 1023px)
    ───────────────────────────────────────── */
    @media (max-width: 1023px) {
      .drv-inner { padding: 40px 28px; }

      .drv-top {
        grid-template-columns: 1fr;
        gap: 16px;
        margin-bottom: 24px;
      }

      .drv-row--70-30,
      .drv-row--30-70 {
        grid-template-columns: 1fr 1fr;
      }

      .drv-box {
        min-height: 120px;
        padding: 22px 22px;
      }
    }

    /* ─────────────────────────────────────────
       MOBILE  (≤ 767px)
    ───────────────────────────────────────── */
    @media (max-width: 767px) {
      .drv-inner { padding: 28px 16px; }

      .drv-top {
        grid-template-columns: 1fr;
        gap: 14px;
        margin-bottom: 20px;
      }

      .drv-row--70-30,
      .drv-row--30-70 {
        grid-template-columns: 1fr;
      }

      .drv-box {
        min-height: 100px;
        padding: 18px 18px;
      }

      .drv-box__stat {
        font-size: clamp(36px, 11vw, 52px);
      }
    }

    /* ─── our process SECTION ─── */
    .opr-section {
      position: relative;
      width: 100%;
      overflow: hidden;
      font-family: 'Manrope', sans-serif;
      padding-bottom: 48px;
    }

    /* subtle centre glow */
    .opr-section__blob {
      position: absolute;
      top: 20%;
      left: 50%;
      transform: translateX(-50%);
      width: 80%;
      height: 60%;
      background: radial-gradient(ellipse at center, rgba(255,255,255,0.35) 0%, transparent 70%);
      pointer-events: none;
      z-index: 0;
    }

    /* ─── WATERMARK ─── */
    /* Positioned absolutely so it sits ABOVE the section top, behind opr-meta */
    .opr-watermark {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      pointer-events: none;
      user-select: none;
      z-index: 0;           /* behind z-index:1 of opr-inner */
      overflow: hidden;
      line-height: 1;
    }

    .opr-watermark__text {
      display: block;
      width: 100%;
      text-align: right;    /* right-aligned like reference */
      font-size: 18vw;
      font-weight: 800;
      letter-spacing: -0.04em;
      white-space: nowrap;
      color: rgba(10, 60, 110, 0.07);
      line-height: 0.88;
    }

    /* ─── INNER WRAPPER ─── */
    .opr-inner {
      position: relative;
      z-index: 1;           /* sits above watermark */
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 5%;
    }

    /* ─── META ROW ─── */
    /* padding-top pushes meta DOWN so watermark peeks behind/above it */
    .opr-meta {
      display: grid;
      grid-template-columns: 180px 1fr;
      column-gap: 36px;
      align-items: start;
      padding-top: 52px;    /* watermark overflows above this area */
      margin-bottom: 36px;
      position: relative;
      z-index: 1;
    }

    .opr-meta__badge p {
      font-size: 11px;
      font-weight: 600;
      line-height: 1.7;
      color: #4a6e8a;
      letter-spacing: 0.01em;
    }

    .opr-meta__headline {
      font-size: clamp(1.2rem, 1.9vw, 1.75rem);
      font-weight: 600;
      color: #0d2540;
      line-height: 1.4;
      letter-spacing: -0.02em;
      max-width: 600px;
    }

    /* ─── CARDS GRID ─── */
    .opr-grid {
      display: grid;
      background-image: url(images/bg-image.png);
      background-position: center;
      background-repeat: no-repeat;
      grid-template-columns: 1fr 1.08fr 1fr;
      grid-template-rows: 1fr 1fr;
      gap: 14px;
      margin-bottom: 36px;
    }

    /* ─── BASE CARD ─── */
    .opr-card {
      border-radius: 16px;
      border: 1px solid rgba(180, 210, 235, 0.7);
      /* Default bg image for cards 2 & 3 (light-blue flash) */
      background-image: url('card-bg.png');   /* ← replace with your image */
      background-size: cover;
      background-position: center;
      background-color: rgba(255, 255, 255, 0.68);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 28px 26px 26px;
      box-shadow: 0 2px 14px rgba(20, 70, 130, 0.08);
      transition: transform 0.26s ease, box-shadow 0.26s ease;
      position: relative;
      overflow: hidden;
    }

    /* glass sheen overlay on all cards */
    .opr-card::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 16px;
      background: linear-gradient(135deg,
        rgba(255,255,255,0.52) 0%,
        rgba(220,238,252,0.22) 55%,
        rgba(200,228,248,0.06) 100%);
      pointer-events: none;
    }

    .opr-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(20, 70, 130, 0.14);
    }

    /* ── Grid placements ── */
    .opr-card--1 { grid-column: 1; grid-row: 1 / 3; display: flex; flex-direction: column; }
    .opr-card--2 { grid-column: 2; grid-row: 1; }
    .opr-card--3 { grid-column: 2; grid-row: 2; }
    .opr-card--4 { grid-column: 3; grid-row: 1 / 3; display: flex; flex-direction: column; }

    /* ── Separate bg images for card 1 & card 4 ── */
    .opr-card--1 {
      background-image: url('card-bg-left.png');   /* ← replace with your image for card 1 */
    }
    .opr-card--4 {
      background-image: url('card-bg-right.png');  /* ← replace with your image for card 4 */
    }

    /* ─── CARD ICON (img tag) ─── */
    .opr-card__icon {
      margin-bottom: 12px;
    }
    .opr-card__icon img {
      width: 30px;
      height: 30px;
      object-fit: contain;
      display: block;
    }

    /* ─── CARD TEXT ─── */
    .opr-card__title {
      font-size: 14.5px;
      font-weight: 700;
      color: #0c2340;
      line-height: 1.3;
      margin-bottom: 9px;
      letter-spacing: -0.01em;
      position: relative;
    }

    .opr-card__body {
      font-family: 'Inter', sans-serif;
      font-size: 12.5px;
      font-weight: 400;
      color: #3d6080;
      line-height: 1.7;
      position: relative;
    }

    /* ─── FOOTER ROW ─── */
    .opr-footer {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
      margin-bottom: 28px;
    }

    .opr-footer__left {
      font-size: 10px;
      font-weight: 600;
      color: #6888a4;
      letter-spacing: 0.03em;
      line-height: 1.7;
      text-transform: uppercase;
    }

    .opr-footer__tagline {
      font-size: clamp(13px, 1.4vw, 15px);
      font-weight: 700;
      color: #0d2540;
      line-height: 1.55;
      max-width: 460px;
      text-align: right;
    }

    .opr-footer__tagline span {
      color: #1a6fd4;
    }

    /* ─── LOGOS BAR ─── */
    .opr-logos {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 14px 24px;
      padding-top: 22px;
      border-top: 1px solid rgba(26, 111, 180, 0.18);
    }

    .opr-logo {
      display: flex;
      align-items: center;
    }

    /* All logo images */
    .opr-logo img {
      height: 28px;           /* uniform height; width scales automatically */
      width: auto;
      object-fit: contain;
      display: block;
    }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 860px) {
      .opr-meta { grid-template-columns: 1fr; gap: 14px; padding-top: 40px; }
      .opr-meta__badge { display: none; }
      .opr-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto auto auto;
      }
      .opr-card--1 { grid-column: 1; grid-row: auto; }
      .opr-card--2 { grid-column: 2; grid-row: auto; }
      .opr-card--3 { grid-column: 1; grid-row: auto; }
      .opr-card--4 { grid-column: 2; grid-row: auto; }
      .opr-footer__tagline { text-align: left; }
    }

    @media (max-width: 520px) {
      .opr-grid { grid-template-columns: 1fr; }
      .opr-card--1, .opr-card--2,
      .opr-card--3, .opr-card--4 { grid-column: 1; grid-row: auto; }
      .opr-card { padding: 20px 18px 22px; }
      .opr-footer { flex-direction: column; gap: 16px; }
      .opr-footer__tagline { text-align: left; max-width: 100%; }
      .opr-logos { justify-content: flex-start; }
      .opr-watermark__text { font-size: 28vw; }
    }

    /* ===== get in touch BANNER ===== */
    :root {
      --git-font-display: 'Sora', sans-serif;
      --git-font-body: 'Inter', sans-serif;
    }

    body {
      background: #f0f2f5;
      font-family: var(--git-font-body);
      -webkit-font-smoothing: antialiased;
    
    }

    
    .git-banner {
      position: relative;
      width: 100%;
      max-width: 1120px;
      margin: 0 auto;
      border-radius: 20px;
      overflow: hidden;
      padding: 52px 56px;
      /* Replace with your background image path */
      background-image: url('images/CTA-bg-img.jpg');
      background-size: cover;
      background-position: center;
      background-color: #0a1628; /* fallback if image not loaded */
      isolation: isolate;
    }

    /* Content sits above bg */
    .git-content {
      position: relative;
      z-index: 1;
      max-width: 420px;
    }

    .git-eyebrow {
      font-family: var(--git-font-body);
      font-size: 12px;
      font-weight: 500;
      color: rgba(255,255,255,0.65);
      letter-spacing: 0.04em;
      margin-bottom: 14px;
    }

    .git-heading {
      font-family: var(--git-font-display);
      font-size: clamp(22px, 2.8vw, 34px);
      font-weight: 700;
      color: #ffffff;
      line-height: 1.2;
      letter-spacing: -0.02em;
      margin-bottom: 14px;
    }

    .git-desc {
      font-size: 13px;
      line-height: 1.7;
      color: rgba(255,255,255,0.6);
      margin-bottom: 32px;
      max-width: 340px;
    }

    /* CTA Button */
    .git-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 13px 24px;
      border-radius: 50px;
      border: 1.5px solid rgba(255,255,255,0.4);
      background: transparent;
      color: #ffffff;
      font-family: var(--git-font-body);
      font-size: 13.5px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.25s ease, border-color 0.25s ease;
      white-space: nowrap;
    }

    .git-btn:hover {
      background: rgba(255,255,255,0.1);
      border-color: rgba(255,255,255,0.7);
    }

    /* Arrow circle inside button */
    .git-btn-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: rgba(255,255,255,0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: background 0.25s ease;
    }

    .git-btn:hover .git-btn-icon {
      background: rgba(255,255,255,0.25);
    }

    .git-btn-icon svg {
      width: 14px;
      height: 14px;
      stroke: #fff;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .git-banner { padding: 44px 36px; }
    }

    @media (max-width: 520px) {
      .git-banner { padding: 36px 24px; border-radius: 16px; }
      .git-heading { font-size: 22px; }
    }

    /* ─── faq section ─── */
    :root {
      --tat-text: #ffffff;
      --tat-text-muted: #a0b8d8;
      --tat-label: #7eb3e8;
      --tat-icon-bg: rgba(255,255,255,0.08);
      --tat-icon-border: rgba(255,255,255,0.12);
      --tat-font-display: 'Sora', sans-serif;
      --tat-font-body: 'Inter', sans-serif;
      --tat-max-width: 1200px;
      --tat-icon-size: 80px;
    }

    body {
      font-family: var(--tat-font-body);
      -webkit-font-smoothing: antialiased;
    }

    
     .faq-section {
      width: 100%;
      background: #ffffff;
      padding: clamp(2.5rem, 5vw, 5rem) 0;
      overflow: hidden;
    }

    /* ── Two-column layout ── */
    .faq-inner {
      display: flex;
      align-items: stretch;
      min-height: 420px;
    }

    /* ══════════════════════════════
       LEFT — watermark column
    ══════════════════════════════ */
    .faq-left {
      flex: 0 0 38%;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-left: clamp(1.5rem, 5vw, 5rem);
    }

    .faq-watermark {
      display: flex;
      flex-direction: column;
      gap: 0;
      pointer-events: none;
      user-select: none;
      line-height: 0.88;
    }

    .faq-watermark span {
      font-family: 'Gilroy', sans-serif;
      font-size: clamp(4.5rem, 10vw, 10rem);
      font-weight: 700;
      line-height: 0.9;
      color: transparent;
      /* Light grey outline — exact match to design */
      -webkit-text-stroke: 2px rgba(0, 0, 0, 0.10);
      letter-spacing: -0.01em;
      display: block;
    }

    /* ══════════════════════════════
       RIGHT — accordion column
    ══════════════════════════════ */
    .faq-right {
      flex: 1;
      padding: 0 clamp(1.5rem, 5vw, 5rem) 0 clamp(1rem, 3vw, 3rem);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* ── FAQ item ── */
    .faq-item {
      border-bottom: 1px solid #dde2e8;
    }
    .faq-item:first-child {
      border-top: 1px solid #dde2e8;
    }

    /* ── Question button ── */
    .faq-question {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1.5rem;
      padding: clamp(0.95rem, 1.8vw, 1.25rem) 0;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
    }

    .faq-question-text {
      font-family: 'Gilroy', sans-serif;
      font-size: clamp(0.88rem, 1.4vw, 1rem);
      font-weight: 600;
      color: #0d1b2e;
      line-height: 1.4;
    }

    /* ── +/− icon (pure CSS) ── */
    .faq-icon {
      flex-shrink: 0;
      width: 20px;
      height: 20px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .faq-icon::before,
    .faq-icon::after {
      content: '';
      position: absolute;
      background: #0d1b2e;
      border-radius: 2px;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }
    /* Horizontal bar — always visible */
    .faq-icon::before {
      width: 14px;
      height: 1.5px;
    }
    /* Vertical bar — hidden when open */
    .faq-icon::after {
      width: 1.5px;
      height: 14px;
    }

    .faq-item.open .faq-icon::after {
      transform: rotate(90deg);
      opacity: 0;
    }

    /* ── Answer panel ── */
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.38s ease;
    }
    .faq-item.open .faq-answer {
      max-height: 250px;
    }

    .faq-answer-inner {
      padding-bottom: clamp(0.9rem, 1.8vw, 1.2rem);
      font-size: clamp(0.78rem, 1.1vw, 0.88rem);
      font-weight: 500;
      color: #5c6b7a;
      line-height: 1.75;
    }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */

    /* Tablet: shrink watermark font */
    @media (max-width: 900px) {
      .faq-left { flex: 0 0 34%; }
      .faq-watermark span {
        font-size: clamp(3.5rem, 9vw, 7rem);
        -webkit-text-stroke: 1.5px rgba(0,0,0,0.09);
      }
    }

    /* Mobile: stack — watermark above accordion */
    @media (max-width: 640px) {
      .faq-inner { flex-direction: column; }

      .faq-left {
        flex: none;
        padding: 0 clamp(1.5rem, 5vw, 3rem);
        margin-bottom: 0.5rem;
        /* show only 1 FAQ on mobile */
        height: auto;
      }

      /* Show only 1 "FAQ" on mobile */
      .faq-watermark span:not(:first-child) { display: none; }

      .faq-watermark span {
        font-size: clamp(4rem, 20vw, 7rem);
        -webkit-text-stroke: 2px rgba(0,0,0,0.08);
      }

      .faq-right {
        padding: 0 clamp(1.5rem, 5vw, 3rem);
      }
    }

    /* ─── form section ─── */
    :root {
      --tat-text: #ffffff;
      --tat-text-muted: #a0b8d8;
      --tat-label: #7eb3e8;
      --tat-icon-bg: rgba(255,255,255,0.08);
      --tat-icon-border: rgba(255,255,255,0.12);
      --tat-font-display: 'Sora', sans-serif;
      --tat-font-body: 'Inter', sans-serif;
      --tat-max-width: 1200px;
      --tat-icon-size: 80px;
    }

    body {
      font-family: var(--tat-font-body);
      -webkit-font-smoothing: antialiased;
    }

    
    .cu-section * { box-sizing: border-box; margin: 0; padding: 0; }
  .cu-section {
    font-family: sans-serif;
    padding: 3rem 2rem;
    display: flex;
    justify-content: center;
    background: #fff;
  }
  .cu-inner {
    display: flex;
    gap: 2.5rem;
    max-width: 900px;
    width: 100%;
    align-items: center;
  }

  /* ── Left decorative card ── */
  .cu-card {
    flex: 0 0 300px;
    min-height: 380px;
    border-radius: 20px;
     background: url('images/contact-bg.png') no-repeat center center/cover;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    position: relative;
    overflow: hidden;
  }
  .cu-card-blob {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 240px;
    height: 200px;
   
    border-radius: 50%;
    opacity: 0.7;
  }
  .cu-card-wave {
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    height: 220px;
    
    border-radius: 0 0 60% 60% / 0 0 40% 40%;
    opacity: 0.6;
  }
  .cu-card-label {
    position: relative;
    z-index: 1;
    font-size: 12px;
    color: rgba(255,255,255,0.65);
    letter-spacing: 0.04em;
    margin-bottom: 8px;
  }
  .cu-card-title {
    position: relative;
    z-index: 1;
    font-size: 22px;
    font-weight: 500;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 10px;
  }
  .cu-card-desc {
    position: relative;
    z-index: 1;
    font-size: 13px;
    color: rgba(255,255,255,0.6);
    line-height: 1.6;
  }

  /* ── Right form area ── */
  .cu-form-wrap { flex: 1; }
  .cu-form-wrap h2 {
    font-size: 26px;
    font-weight: 600;
    color: #111;
    margin-bottom: 6px;
  }
  .cu-form-wrap p {
    font-size: 14px;
    color: #666;
    margin-bottom: 24px;
  }
  .cu-row {
    display: flex;
    gap: 14px;
    margin-bottom: 16px;
  }
  .cu-field {
    display: flex;
    flex-direction: column;
    flex: 1;
  }
  .cu-field label {
    font-size: 13px;
    color: #555;
    margin-bottom: 6px;
  }
  .cu-field input,
  .cu-field select,
  .cu-field textarea {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    font-size: 14px;
    color: #111;
    background: #fff;
    outline: none;
    transition: border-color 0.2s;
    font-family: inherit;
  }
  .cu-field input:focus,
  .cu-field select:focus,
  .cu-field textarea:focus {
    border-color: #3a7cff;
  }
  .cu-field textarea {
    resize: none;
    height: 90px;
  }

  /* ── Phone row ── */
  .cu-phone-row { display: flex; }
  .cu-phone-prefix {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-right: none;
    border-radius: 10px 0 0 10px;
    background: #fff;
    font-size: 13px;
    color: #111;
    white-space: nowrap;
  }
  .cu-phone-prefix select {
    border: none;
    outline: none;
    background: transparent;
    font-size: 13px;
    color: #111;
    cursor: pointer;
    padding: 0;
  }
  .cu-phone-input {
    flex: 1;
    padding: 10px 14px;
    border: 1px solid #d1d5db;
    border-radius: 0 10px 10px 0;
    font-size: 14px;
    color: #111;
    background: #fff;
    outline: none;
    transition: border-color 0.2s;
    font-family: inherit;
  }
  .cu-phone-input:focus { border-color: #3a7cff; }

  /* ── Button ── */
  .cu-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 28px;
    border: 1.5px solid #222;
    border-radius: 50px;
    background: transparent;
    font-size: 14px;
    font-weight: 500;
    color: #111;
    cursor: pointer;
    transition: background 0.18s, color 0.18s;
    margin-top: 8px;
  }
  .cu-btn:hover { background: #1a1a1a; color: #fff; }
  .cu-btn-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #3a7cff;
    flex-shrink: 0;
  }

  /* ── Responsive ── */
  @media (max-width: 680px) {
    .cu-inner { flex-direction: column; }
    .cu-card { flex: none; width: 100%; min-height: 220px; }
    .cu-row { flex-direction: column; gap: 0; margin-bottom: 0; }
    .cu-row .cu-field { margin-bottom: 16px; }
  }
  </style>

  <body>

<!-- Transparent header placeholder: your existing header sits here -->

<!-- ═══════════════ HERO SECTION ═══════════════ -->
<section class="tw-hero" aria-label="Digital Workspace Hero">
  <div class="tw-hero__bg" aria-hidden="true"></div>
  <div class="tw-hero__blob tw-hero__blob--1" aria-hidden="true"></div>
  <div class="tw-hero__blob tw-hero__blob--2" aria-hidden="true"></div>
  <div class="tw-hero__grid" aria-hidden="true"></div>

  <!-- Breadcrumb row: text inside max-width container, divider spans full section width -->
  <div class="tw-hero__header-row">
    <div class="tw-hero__breadcrumb-wrap">
      <span class="tw-hero__breadcrumb">What We Do / Digital Workspace</span>
    </div>
    <div class="tw-hero__divider"></div>
  </div>

  <div class="tw-hero__inner">

    <!-- LEFT: Content -->
    <div class="tw-hero__content">

      <h1 class="tw-hero__title">
        The Digital Workspace,<br>
        <span>Reimagined</span>
      </h1>

      <p class="tw-hero__desc">
        Secure collaboration, intelligent automation, and seamless user experiences.
        Digital workplace environments are designed, deployed, and managed from endpoint
        to cloud, enabling connected, high-performing teams.
      </p>

      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="tw-hero__cta">
        <span class="tw-hero__cta-arrow">
          <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
          </svg>
        </span>
        Explore Teceze Digital Workplace
      </a>

      <!-- Partner Logos -->
      <div class="tw-hero__partners">
        <div class="tw-hero__partner-badge">
          <img src="images/micro.svg" alt="Microsoft"/>
        </div>
        <div class="tw-hero__partner-badge">
          <img src="images/Servicesnow.png" alt="ServiceNow"/>
        </div>
        <div class="tw-hero__partner-badge">
          <img src="images/vm.png" alt="VMware"/>
        </div>
        <div class="tw-hero__partner-badge">
          <img src="images/Google.png" alt="Google"/>
        </div>
        <div class="tw-hero__partner-badge">
          <img src="images/aws.png" alt="AWS"/>
        </div>
        <div class="tw-hero__partner-badge">
          <img src="images/cisco.png" alt="Cisco"/>
        </div>
      </div>
    </div>

    <!-- RIGHT: Enquire Form Card -->
    <div class="tw-hero__form-wrap">
      <div class="tw-enquire-card">
        <h2 class="tw-enquire-card__title">Enquire Now</h2>

        <form novalidate onsubmit="return false;">
          <div class="tw-form-group">
            <label for="tw-full-name">Full Name</label>
            <input id="tw-full-name" type="text" placeholder="Enter Full Name" autocomplete="name"/>
          </div>

          <div class="tw-form-group">
            <label for="tw-phone">Phone number</label>
            <div class="tw-phone-row">
              <div class="tw-phone-code">
                <span>🇺🇸</span> +1
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="opacity:.5">
                  <polyline points="6 9 12 15 18 9"/>
                </svg>
              </div>
              <input id="tw-phone" class="tw-phone-input" type="tel" placeholder="Phone number" autocomplete="tel"/>
            </div>
          </div>

          <div class="tw-form-group">
            <label for="tw-message">Message</label>
            <textarea id="tw-message" placeholder="Enter your message"></textarea>
          </div>

          <button type="submit" class="tw-enquire-btn">
            <span class="tw-enquire-btn__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
              </svg>
            </span>
            Enquire now
          </button>
        </form>
      </div>
    </div>

  </div>
</section>



 <section class="dw-section">
    <div class="dw-grid">

      <!-- LEFT: Image -->
      <div class="dw-image-col">
        <div class="dw-image-wrapper">
          <img
            src="images/working lady.jpg"
            alt="Professional woman working on a laptop in a modern office environment"
          />
        </div>
      </div>

      <!-- RIGHT TOP: Overview + Heading + Body -->
      <div class="dw-content-top">
        <p class="dw-label">Overview</p>
        <h2 class="dw-heading">Digital Workplace Built for Modern Organizations</h2>
        <p class="dw-body">
          Digital workplace solutions are designed to enhance collaboration,
          improve productivity, and provide secure access to business tools from
          anywhere. These environments support flexible workstyles, streamline
          operations, and strengthen day-to-day performance across teams.
        </p>
      </div>

      <!-- RIGHT BOTTOM: Highlight Statement -->
      <div class="dw-content-bottom">
        <p class="dw-highlight-text">
          <strong>AI-driven monitoring and real-time visibility help</strong>
          detect risks early, reduce exposure, and maintain secure, uninterrupted operations.
        </p>
      </div>

    </div>
  </section>

  <section class="wo-section" id="woSection">

  <div class="wo-watermark" aria-hidden="true">
    <span>what we offer</span>
    <span>what we offer</span>
  </div>

  <div class="wo-cards-viewport" id="woViewport">
    <div class="wo-cards-track" id="woTrack">

      <!-- Card 1 -->
      <div class="wo-card">
        <img class="wo-card__photo" src="images/AI & Automation.png" alt="AI & Automation" />
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/HeadCircuit.svg" alt="AI & Automation icon" /></div>
          <div class="wo-card__label">Teceze-Powered</div>
          <div class="wo-card__title">AI & Automation</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/HeadCircuit.svg" alt="AI & Automation icon" /></div>
            <div class="wo-card__hover-label">Teceze-Powered</div>
            <div class="wo-card__hover-title">AI & Automation</div>
          </div>
          <div class="wo-card__hover-desc">Automation capabilities are designed to simplify workflows, improve efficiency, and reduce manual effort across everyday operations.</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="wo-card">
        <img class="wo-card__photo" src="images/Staffing.png" alt="Staffing" />
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/HeadCircuit01.svg" alt="Staffing icon" /></div>
          <div class="wo-card__label">People</div>
          <div class="wo-card__title">Staffing</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/HeadCircuit01.svg" alt="Staffing icon" /></div>
            <div class="wo-card__hover-label">People</div>
            <div class="wo-card__hover-title">Staffing</div>
          </div>
          <div class="wo-card__hover-desc">We connect organizations with skilled talent — from contract professionals to permanent hires — tailored to fit your team's unique needs.</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="wo-card">
        <img class="wo-card__photo" src="images/engineer.png" alt="Engineering Services" />
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/Vector.svg" alt="Engineering icon" /></div>
          <div class="wo-card__label">Engineering</div>
          <div class="wo-card__title">Engineering Services</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/Vector.svg" alt="Engineering icon" /></div>
            <div class="wo-card__hover-label">Engineering</div>
            <div class="wo-card__hover-title">Engineering Services</div>
          </div>
          <div class="wo-card__hover-desc">End-to-end engineering support — from architecture and design to deployment — ensuring robust, scalable systems built to last.</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="wo-card">
        <img class="wo-card__photo" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=700&q=80" alt="IT Consulting" />
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="your-icon-4.png" alt="IT Consulting icon" /></div>
          <div class="wo-card__label">Technology</div>
          <div class="wo-card__title">IT Consulting</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="your-icon-4.png" alt="IT Consulting icon" /></div>
            <div class="wo-card__hover-label">Technology</div>
            <div class="wo-card__hover-title">IT Consulting</div>
          </div>
          <div class="wo-card__hover-desc">Strategic technology guidance to modernize infrastructure, optimize processes, and align IT initiatives with your business objectives.</div>
        </div>
      </div>

    </div>
  </div>

  <div class="wo-bottom">
    <div class="wo-counter">
      <span class="wo-counter__current" id="woCurrentSlide">01</span>
      <span class="wo-counter__total" id="woTotalSlide">/04</span>
    </div>
    <div class="wo-arrows">
      <button class="wo-arrow-btn" id="woPrev" aria-label="Previous">
        <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="wo-arrow-btn" id="woNext" aria-label="Next">
        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>
  </div>

</section>
<section class="tat-section">
  <div class="tat-inner">
    <div class="tat-layout">

      <!-- LEFT: Text + Icons -->
      <div class="tat-left">
        <p class="tat-eyebrow">Teceze AI Tools</p>
        <h2 class="tat-heading">Enhance productivity with Teceze AI tools</h2>
        <p class="tat-body">
          AI-powered workplace tools automate routine tasks, improve efficiency,
          and provide real-time insights to support connected, high-performing environments.
        </p>

        <div class="tat-icons">
          <!-- Row 1 -->
          <div class="tat-icon-btn" title="Microsoft">
            <img src="images/icon (1).svg" alt="Microsoft" />
          </div>
          <div class="tat-icon-btn" title="Slack">
            <img src="images/icon (2).svg" alt="Slack" />
          </div>
          <div class="tat-icon-btn" title="Google Drive">
            <img src="images/icon (3).svg" alt="Google Drive" />
          </div>
          <div class="tat-icon-btn" title="Outlook">
            <img src="images/icon (4).svg" alt="Outlook" />
          </div>
          <div class="tat-icon-btn" title="Microsoft Teams">
            <img src="images/icon (5).svg" alt="Microsoft Teams" />
          </div>

          <!-- Row 2 -->
          <div class="tat-icon-btn" title="Notion">
            <img src="images/icon (6).svg" alt="Notion" />
          </div>
          <div class="tat-icon-btn" title="ChatGPT">
            <img src="images/icon (7).svg" alt="ChatGPT" />
          </div>
          <div class="tat-icon-btn" title="Zapier">
            <img src="images/icon (8).svg" alt="Zapier" />
          </div>
          <div class="tat-icon-btn" title="Microsoft Copilot">
            <img src="images/icon (9).svg" alt="Microsoft Copilot" />
          </div>
          <div class="tat-icon-btn" title="Skype">
            <img src="images/icon.svg" alt="Skype" />
          </div>
        </div>
      </div>

      <!-- RIGHT: Tall rectangular image -->
      <div class="tat-right">
        <div class="tat-image-wrapper">
          <img
            src="images/Frame 113.jpg"
            alt="AI-powered laptop with holographic data dashboards"
          />
        </div>
      </div>

    </div>
  </div>
</section>
<section class="cs-section">
 
  <!-- Watermark -->
  <div class="cs-wm" aria-hidden="true">
    <span>case studies</span>
    <span>case studies</span>
    <span>case studies</span>
  </div>
 
  <!-- Grid -->
  <div class="cs-grid">
 
    <!-- Left text -->
    <div class="cs-left">
      <div class="cs-left-inner" id="csLeft"></div>
    </div>
 
    <!-- Right image card -->
    <div class="cs-right">
      <div class="cs-slide-track" id="csTrack"></div>
    </div>
 
  </div>
 
  <!-- Bottom bar -->
  <div class="cs-bottom">
    <div class="cs-bottom-spacer"></div>
    <div class="cs-counter">
      <span class="cs-cur" id="csCur">01</span>
      <span class="cs-sep">&thinsp;/</span>
      <span class="cs-tot" id="csTot">03</span>
    </div>
    <div class="cs-nav">
      <button class="nav-btn" id="csPrev" aria-label="Previous">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="nav-btn" id="csNext" aria-label="Next">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>
  </div>
 
</section>
   <section class="drv-section">
  <div class="drv-inner">

    <!-- Top: Headline + Description -->
    <div class="drv-top">
      <h2 class="drv-headline">Enhance productivity with Teceze AI tools</h2>
      <p class="drv-desc">
       Workplace environments are supported by responsive delivery, consistent execution, and measurable outcomes across performance, security, and user experience.
      </p>
    </div>

    <div class="drv-cards-wrap">

      <!-- Row 1: Box 70% | Box 30% -->
      <div class="drv-row drv-row--70-30">

        <!-- Box 1 (70%) — text left, stat right -->
        <div class="drv-box">
          <p class="drv-box__text">Delivered through consistent execution, responsive support, and reliable workplace performance. </p>
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Years Experience</span>
            <span class="drv-box__stat">13+</span>
          </div>
        </div>

        <!-- Box 2 (30%) — stat only, centered -->
        <div class="drv-box">
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Always Available</span>
            <span class="drv-box__stat">24/7</span>
          </div>
          <p class="drv-box__text">Teceze delivers dependable workplace and security outcomes through responsive teams and practical execution.</p>
        </div>

      </div>

      <!-- Row 2: Box 30% | Box 70% -->
      <div class="drv-row drv-row--30-70">

        <!-- Box 3 (30%) — stat + small text -->
        <div class="drv-box">
          <p class="drv-box__text">Teceze delivers dependable workplace and security outcomes through responsive teams and practical execution.</p>
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Service Coverage</span>
            <span class="drv-box__stat">360°</span>
          </div>
        </div>

        <!-- Box 4 (70%) — stat left, text right -->
        <div class="drv-box">
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Global Delivery</span>
            <span class="drv-box__stat"></span>
          </div>
          <p class="drv-box__text">Teceze delivers dependable workplace and security outcomes through responsive teams and practical execution.</p>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="opr-section" aria-label="Our Process">

  <div class="opr-section__blob" aria-hidden="true"></div>

  <!-- ─── WATERMARK: absolute, z-index 0, sits BEHIND opr-meta ─── -->
  <div class="opr-watermark" aria-hidden="true">
    <span class="opr-watermark__text">our process</span>
  </div>

  <!-- ─── ALL CONTENT: z-index 1, watermark shows above/behind this ─── -->
  <div class="opr-inner">

    <!-- META (watermark is visible behind the section heading area) -->
    <div class="opr-meta">
      <div class="opr-meta__badge">
        <p>Digital Workplace<br>Delivery Framework</p>
      </div>
      <h2 class="opr-meta__headline">
        A structured approach ensures secure deployment, optimized performance,
        and continuous improvement across workplace environments.
      </h2>
    </div>

    <!-- CARDS GRID -->
    <div class="opr-grid">

      <!-- Card 1: Discovery Call — tall left, own bg image -->
      <div class="opr-card opr-card--1">
        <h3 class="opr-card__title">1.&nbsp; Discovery Call</h3>
        <p class="opr-card__body">Reviewing goals, scope, users, and current technology challenges.</p>
      </div>

      <!-- Card 2: Assessment & Proposal — icon via <img> -->
      <div class="opr-card opr-card--2">
        <div class="opr-card__icon">
          <!-- Replace src with your actual icon image path -->
          <img src="images/Vector (4).png" alt="Assessment icon" />
        </div>
        <h3 class="opr-card__title">2.&nbsp; Assessment &amp; Proposal</h3>
        <p class="opr-card__body">Requirements are assessed, followed by mapping priorities, timelines, resources, and expected outcomes.</p>
      </div>

      <!-- Card 3: Pilot Deployment — icon via <img> -->
      <div class="opr-card opr-card--3">
        <div class="opr-card__icon">
          <!-- Replace src with your actual icon image path -->
          <img src="images/Vector (5).png" alt="Pilot deployment icon" />
        </div>
        <h3 class="opr-card__title">3.&nbsp; Pilot Deployment</h3>
        <p class="opr-card__body">Testing core controls in a controlled environment for validation.</p>
      </div>

      <!-- Card 4: Full Scale Rollout — tall right, own bg image -->
      <div class="opr-card opr-card--4">
        <h3 class="opr-card__title">4.&nbsp; Full Scale Rollout</h3>
        <p class="opr-card__body">Enterprise deployment includes support, oversight, and optimization.</p>
      </div>

    </div><!-- /opr-grid -->

    <!-- FOOTER -->
    <div class="opr-footer">
      <div class="opr-footer__left">
        Powered By Teceze<br>Technology Leadership
      </div>
      <p class="opr-footer__tagline">
        Delivered through experienced teams and proven
        <span>technology</span> practices to ensure secure, scalable,
        and future-ready workplace solutions.
      </p>
    </div>

    <!-- LOGOS BAR — all logos via <img> tags -->
    <div class="opr-logos">

      <div class="opr-logo">
        <!-- Replace each src with your actual logo image path -->
        <img src="images/Infosys.png" alt="Infosys" />
      </div>

      <div class="opr-logo">
        <img src="images/Accenture.png" alt="Accenture" />
      </div>

      <div class="opr-logo">
        <img src="images/Hexaware.png" alt="Hexaware" />
      </div>

      <div class="opr-logo">
        <img src="images/HCL.png" alt="HCL" />
      </div>

      <div class="opr-logo">
        <img src="images/GP Strategies.png" alt="GP Strategies" />
      </div>

    </div><!-- /opr-logos -->

  </div><!-- /opr-inner -->
</section>

<section class="git-banner">

  <!-- Content -->
  <div class="git-content">
    <p class="git-eyebrow">Get In Touch</p>
    <h2 class="git-heading">Start with a Digital<br>Workplace Assessment</h2>
    <p class="git-desc">
      Discuss how workplace solutions can support users,<br>
      operations, and long-term business goals.
    </p>
    <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="git-btn">
      <span class="git-btn-icon">
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </span>
      Schedule a Consultation
    </a>
  </div>

</section>

<section class="faq-section">
  <div class="faq-inner">

    <!-- LEFT: stacked FAQ watermark -->
    <div class="faq-left">
      <div class="faq-watermark" aria-hidden="true">
        <span>FAQ</span>
        <span>FAQ</span>
        <span>FAQ</span>
        <span>FAQ</span>
      </div>
    </div>

    <!-- RIGHT: accordion -->
    <div class="faq-right">

      <!-- Item 1 — open by default -->
      <div class="faq-item open">
        <button class="faq-question" aria-expanded="true">
          <span class="faq-question-text">What services does Teceze provide?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner">
            Teceze Offers Comprehensive IT Solutions Including Cybersecurity, Managed IT Services,
            Digital Transformation, And AI-Driven Automation Tailored To Enterprise Needs.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Does Teceze support global enterprises?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner">
            Yes, Teceze supports enterprises across multiple continents with dedicated regional
            teams and 24/7 support infrastructure to ensure seamless global operations.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">How can I get started with Teceze?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner">
            Getting started is simple — reach out through our contact page, and a solutions
            consultant will schedule a discovery call to understand your business needs.
          </p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Can solutions be customized?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner">
            Absolutely. All Teceze solutions are tailored to your specific industry, scale,
            and operational requirements — no one-size-fits-all approach.
          </p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Do you provide real-time security monitoring?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner">
            Yes, our Security Operations Center (SOC) provides 24/7 real-time threat detection,
            monitoring, and incident response across all your endpoints and cloud environments.
          </p>
        </div>
      </div>

    </div><!-- /faq-right -->
  </div><!-- /faq-inner -->
</section>
<section class="cu-section">
  <div class="cu-inner">

    <!-- Left card -->
    <div class="cu-card">
      <div class="cu-card-wave"></div>
      <div class="cu-card-blob"></div>
      <p class="cu-card-label">Get In Touch</p>
      <h3 class="cu-card-title">Let's Strengthen Your Security Strategy</h3>
      <p class="cu-card-desc">Schedule a personalized consultation with our alliance experts.</p>
    </div>

    <!-- Right form -->
     <!-- Right Panel - Form -->
    <div class="ct-form-right">
     <iframe 
      aria-label="Contact us now"
      frameborder="0"
      style="height:600px;width:100%;border:none;"
      src="https://forms.zohopublic.com/FormsWorking/form/Contactusnow/formperma/xf8H-0yPN2b0htwf3avvn98bxsgNYtPywaYfdgwYQgU">
    </iframe>
    </div>
  </div>

  </div>
</section>
<script>
  //what we offer section---->
(function () {
  const GAP       = 20;
  const viewport  = document.getElementById('woViewport');
  const track     = document.getElementById('woTrack');
  const prevBtn   = document.getElementById('woPrev');
  const nextBtn   = document.getElementById('woNext');
  const currentEl = document.getElementById('woCurrentSlide');
  const totalEl   = document.getElementById('woTotalSlide');

  // Original cards
  const origCards = Array.from(track.querySelectorAll('.wo-card'));
  const TOTAL     = origCards.length; // 4

  // Clone all originals and append — gives seamless loop buffer
  origCards.forEach(function (c) {
    track.appendChild(c.cloneNode(true));
  });

  // All nodes in track (original 4 + 4 clones = 8)
  function allCards() { return Array.from(track.querySelectorAll('.wo-card')); }

  // idx is the real position index (0-based), starts at 0
  // Track has TOTAL*2 cards; we slide freely and snap silently
  let idx = 0;

  function visCount() {
    const w = window.innerWidth;
    if (w <= 580) return 1;
    if (w <= 900) return 2;
    return 3;
  }

  function cardWidth() {
    const vpW = viewport.clientWidth;
    const vis = visCount();
    return (vpW - GAP * (vis - 1)) / vis;
  }

  function setLayout() {
    const cw = cardWidth();
    allCards().forEach(function (c) { c.style.width = cw + 'px'; });
  }

  // Real card number shown (1-based, wraps within TOTAL)
  function realCard() {
    return ((idx % TOTAL) + TOTAL) % TOTAL; // always 0-3
  }

  function applyTransform(animate) {
    const step   = cardWidth() + GAP;
    const offset = idx * step;
    track.style.transition = animate ? 'transform 0.45s cubic-bezier(0.4,0,0.2,1)' : 'none';
    track.style.transform  = 'translateX(-' + offset + 'px)';
    currentEl.textContent  = String(realCard() + 1).padStart(2, '0');
    totalEl.textContent    = '/' + String(TOTAL).padStart(2, '0');
  }

  function goNext() {
    idx++;
    applyTransform(true);

    // After animation, if we've gone past the original set, silently jump back
    // idx=4 is same visual as idx=0 (clones), snap quietly
    if (idx >= TOTAL) {
      setTimeout(function () {
        idx = idx - TOTAL;
        applyTransform(false);
      }, 460); // just after transition ends
    }
  }

  function goPrev() {
    // If at start, silently jump to clone position first, then animate back
    if (idx <= 0) {
      idx = TOTAL;
      applyTransform(false); // jump to clone at end instantly
      requestAnimationFrame(function () {
        requestAnimationFrame(function () {
          idx--;
          applyTransform(true);
        });
      });
    } else {
      idx--;
      applyTransform(true);
    }
  }

  function init() {
    setLayout();
    applyTransform(false);
  }

  nextBtn.addEventListener('click', goNext);
  prevBtn.addEventListener('click', goPrev);

  let resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () { idx = 0; init(); }, 120);
  });

  requestAnimationFrame(function () { requestAnimationFrame(init); });
})();

 /* ── casestudy ── */
(function(){
  var SLIDES = [
    {
      meta: 'Strengthening Enterprise Cybersecurity',
      leftTitle: 'Implemented AI-driven security to reduce threats',
      leftLight: ' and improve real-time response.',
      cardTag: 'Driving Data-Driven Decisions',
      cardTitle: 'Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.',
      image: 'images/Casestudy-img-right.png'
    },
    {
      meta: 'Cloud Infrastructure',
      leftTitle: 'Built scalable cloud architecture',
      leftLight: ' enabling 99.9% uptime and global reach.',
      cardTag: 'Cloud & Reliability',
      cardTitle: 'Designed and deployed multi-region cloud infrastructure to support enterprise-grade performance and business continuity.',
      image: 'images/card-img-1.png'
    },
    {
      meta: 'Managed IT Services',
      leftTitle: 'Streamlined IT operations end-to-end',
      leftLight: ' and reduced downtime by 60%.',
      cardTag: 'Operational Efficiency',
      cardTitle: 'Delivered end-to-end managed services covering monitoring, support, and proactive maintenance across 12 global offices.',
      image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=900&h=640&fit=crop'
    }
  ];
 
  var cur = 0, total = SLIDES.length, busy = false;
  var track = document.getElementById('csTrack');
  var leftEl = document.getElementById('csLeft');
  var curEl = document.getElementById('csCur');
  var totEl = document.getElementById('csTot');
 
  totEl.textContent = String(total).padStart(2,'0');
 
  function arrowSVG(dir){
    var d = dir==='right' ? 'M9 18 15 12 9 6' : 'M15 18 9 12 15 6';
    return '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="'+d+'"/></svg>';
  }
 
  function slideHTML(s){
    return '<div class="cs-slide"><img src="'+s.image+'" alt="'+s.cardTag+'"/><div class="cs-overlay"></div><div class="cs-card-body"><p class="cs-card-tag">'+s.cardTag+'</p><p class="cs-card-title">'+s.cardTitle+'</p><a href="https://teal-mule-553916.hostingersite.com/casestudy.php" class="btn-case"><span class="arr-white">'+arrowSVG('right')+'</span>View Case Study</a></div></div>';
  }
 
  function leftHTML(s){
    return '<p class="cs-meta">'+s.meta+'</p><h3 class="cs-title">'+s.leftTitle+'<span class="light">'+s.leftLight+'</span></h3><a href="https://teal-mule-553916.hostingersite.com/casestudy.php" class="btn-all"><span class="arr-dark">'+arrowSVG('right')+'</span>View All Cases</a>';
  }
 
  function goTo(next, dir){
    if(busy) return; busy = true;
    next = (next + total) % total;
    var offset = dir === 1 ? '-100%' : '100%';
    track.style.transition = 'transform .45s cubic-bezier(.4,0,.2,1)';
    track.style.transform = 'translateX('+offset+')';
    setTimeout(function(){
      cur = next;
      track.style.transition = 'none';
      track.style.transform = 'translateX(0)';
      track.innerHTML = slideHTML(SLIDES[cur]);
      leftEl.innerHTML = leftHTML(SLIDES[cur]);
      curEl.textContent = String(cur+1).padStart(2,'0');
      busy = false;
    }, 460);
  }
 
  // Scale watermark to full width
  function scaleWM(){
    var probe = document.createElement('span');
    probe.style.cssText = 'position:absolute;visibility:hidden;white-space:nowrap;font-weight:900;font-size:100px;letter-spacing:-1px;font-family:Sora,sans-serif;';
    probe.textContent = 'case studies';
    document.body.appendChild(probe);
    var tw = probe.getBoundingClientRect().width;
    document.body.removeChild(probe);
    var fs = Math.floor((window.innerWidth / tw) * 100);
    document.querySelectorAll('.cs-wm span').forEach(function(s){ s.style.fontSize = fs+'px'; });
  }
 
  document.getElementById('csPrev').onclick = function(){ goTo(cur-1,-1); };
  document.getElementById('csNext').onclick = function(){ goTo(cur+1, 1); };
 
  track.innerHTML = slideHTML(SLIDES[0]);
  leftEl.innerHTML = leftHTML(SLIDES[0]);
  scaleWM();
  window.addEventListener('resize', scaleWM);
})();

 // faq section
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
</script>
 <?php include 'footer.php'; ?>
</body>