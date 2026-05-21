<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Teceze – Precision IT</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
@font-face {
  font-family: 'Gilroy';
  src: url('/font/Gilroy-Medium.woff2') format('woff2-variations'),
       url('/fonts/Gilroy-Medium.woff') format('woff');
  font-weight: 400 700;
  font-style: normal;
  font-display: swap;
}


    :root {
      --cyan: #00d4ff;
      --cyan-dark: #00aacc;
      --white: #ffffff;
      --text-muted: rgba(255,255,255,0.65);
      --overlay-dark: rgba(2, 8, 22, 0.72);
      --glass: rgba(255,255,255,0.07);
      --glass-border: rgba(255,255,255,0.12);
    }
css/* Apply to everything */
* {
  font-family: 'Gilroy', sans-serif;
}



h1, h2, h3, p {
  font-family: 'Gilroy', sans-serif;
}
    html, body {
      height: 100%;
      
    font-family: 'Gilroy', sans-serif;
      overflow-x: hidden;
    }

    /* ── NAV ── */
    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 5%;
      background: rgba(2, 8, 22, 0.55);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--glass-border);
    }

    .nav-logo {
      height: 36px;
      object-fit: contain;
      filter: brightness(1.1);
    }

    .nav-links {
      display: flex;
      gap: 32px;
      list-style: none;
    }

    .nav-links a {
      
      text-decoration: none;
      font-size: 0.88rem;
      font-weight: 500;
      letter-spacing: 0.02em;
      transition: color 0.2s;
    }

    .nav-links a:hover { color: var(--cyan); }

    .nav-cta {
      background: var(--cyan);
      color: #020816;
      border: none;
      border-radius: 50px;
      padding: 9px 22px;
      font-size: 0.85rem;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s;
      white-space: nowrap;
    }
    .nav-cta:hover { background: var(--cyan-dark); transform: scale(1.03); }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 4px;
    }
    .hamburger span {
      display: block;
      width: 24px;
      height: 2px;
      background: var(--white);
      border-radius: 2px;
      transition: all 0.3s;
    }

    /* ── HERO ── */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
      padding: 100px 20px 60px;
      background:#020816    }

    /* Video background */
    .hero-video {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
      opacity: 0.55;
    }

    /* Fallback globe visual (shown if video not provided) */
   
    .globe-core {
      position: absolute;
      inset: 18%;
      border-radius: 50%;
      background: radial-gradient(circle at 38% 38%, #1a6fff55, #0a2a6e88, #020816cc);
      box-shadow:
        0 0 80px 30px rgba(0,180,255,0.18),
        0 0 160px 60px rgba(0,100,200,0.10),
        inset 0 0 40px rgba(0,150,255,0.15);
    }

    .globe-ring {
      position: absolute;
      inset: 0;
      border-radius: 50%;
      border: 1px solid rgba(0,210,255,0.18);
      animation: pulse-ring 3s ease-in-out infinite;
    }
    .globe-ring:nth-child(2) { inset: -8%; animation-delay: 0.8s; opacity: 0.6; }
    .globe-ring:nth-child(3) { inset: -18%; animation-delay: 1.6s; opacity: 0.35; }

    @keyframes pulse-ring {
      0%, 100% { transform: scale(1); opacity: 0.5; }
      50% { transform: scale(1.04); opacity: 1; }
    }

    /* Radial light rays */
    .hero-rays {
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse 70% 55% at 50% 30%, rgba(0,160,255,0.13) 0%, transparent 70%);
      z-index: 1;
      pointer-events: none;
    }

    /* Dark overlay */
    .hero-overlay {
      position: absolute;
      inset: 0;
      z-index: 2;
    }

    /* Content */
    .hero-content {
      position: relative;
      z-index: 10;
      max-width: 760px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 18px;
      animation: fadeUp 0.9s ease both;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .hero-content h1 {
      font-size: clamp(1.9rem, 5vw, 3.1rem);
      font-weight: 800;
      line-height: 1.18;
      color: var(--white);
      letter-spacing: -0.02em;
      text-shadow: 0 2px 30px rgba(0,0,0,0.5);
    }

    .hero-content p {
      font-size: clamp(0.85rem, 1.8vw, 1rem);
      color: var(--text-muted);
      max-width: 520px;
      line-height: 1.7;
      font-weight: 400;
    }

    /* Search bar */
    .search-bar {
      display: flex;
      align-items: center;
      background: rgba(255,255,255,0.08);
      border: 1px solid var(--glass-border);
      border-radius: 50px;
      padding: 6px 6px 6px 18px;
      width: min(580px, 95%);
      backdrop-filter: blur(12px);
      gap: 8px;
      margin-top: 8px;
      transition: border-color 0.25s, box-shadow 0.25s;
    }

    .search-bar:focus-within {
      border-color: rgba(0,212,255,0.45);
      box-shadow: 0 0 0 3px rgba(0,212,255,0.10);
    }

    .search-icon {
      color: rgba(255,255,255,0.45);
      flex-shrink: 0;
      font-size: 1rem;
    }

    .search-input {
      flex: 1;
      background: transparent;
      border: none;
      outline: none;
      color: var(--white);
       font-family: 'Gilroy', sans-serif;
      font-size: 0.9rem;
      placeholder-color: rgba(255,255,255,0.4);
    }

    .search-input::placeholder { color: rgba(255,255,255,0.4); }

    .search-actions {
      display: flex;
      align-items: center;
      gap: 6px;
      flex-shrink: 0;
    }

    .mic-btn {
      background: transparent;
      border: none;
      color: rgba(255,255,255,0.55);
      cursor: pointer;
      font-size: 1rem;
      padding: 6px;
      border-radius: 50%;
      transition: color 0.2s, background 0.2s;
      display: flex; align-items: center; justify-content: center;
    }
    .mic-btn:hover { color: var(--cyan); background: rgba(0,212,255,0.1); }

    .book-btn {
      background: linear-gradient(-84.15deg, #13c5b8, #2a44b0);
      color: #ffffff;
      border: none;
      border-radius: 50px;
      padding: 9px 20px;
      font-size: 0.82rem;
      font-weight: 700;
       font-family: 'Gilroy', sans-serif;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 7px;
      white-space: nowrap;
      transition: background 0.2s, transform 0.15s;
      text-decoration: none;
    }
    .book-btn i {
  color: #fff !important;
}
    .book-btn:hover { background: var(--cyan-dark);  }

    .send-btn {
      background: rgba(255,255,255,0.12);
      border: none;
      color: var(--white);
      width: 34px; height: 34px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      transition: background 0.2s;
    }
    .send-btn:hover { background: rgba(255,255,255,0.22); }
/* ── WATERMARK LOGO ── */
.watermark-logo {
  position: absolute;
  bottom: -4%;
  left: 50%;
  transform: translateX(-50%);
  z-index: 5;
  width: 100%;
  pointer-events: none;
  user-select: none;
  opacity: 20.12;
}

.watermark-logo img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: contain;
  /* Prevents right-click save */
  -webkit-user-drag: none;
}

    /* Floating action buttons bottom-right */
    .fab-cluster {
      position: fixed;
      bottom: 28px;
      right: 24px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      z-index: 50;
    }

    .fab {
      width: 42px; height: 42px;
      border-radius: 50%;
      background: rgba(255,255,255,0.10);
      border: 1px solid var(--glass-border);
      backdrop-filter: blur(10px);
      color: var(--white);
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.2s, transform 0.2s;
    }
    .fab:hover { background: rgba(0,212,255,0.2); transform: scale(1.08); }

    /* ── MOBILE ── */
    @media (max-width: 768px) {
      .nav-links { display: none; }
      .nav-cta { display: none; }
      .hamburger { display: flex; }

      nav { padding: 14px 5%; }

      .hero-content h1 { font-size: clamp(1.7rem, 7vw, 2.4rem); }

      .search-bar { padding: 5px 5px 5px 14px; }
      .book-btn { padding: 8px 14px; font-size: 0.78rem; }

      .watermark-logo { width: 130vw; bottom: -2%; opacity: 0.10; }
    }

    @media (max-width: 480px) {
      .book-btn span.btn-text { display: none; }
    }

    /* Mobile menu */
    .mobile-menu {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(2,8,22,0.97);
      z-index: 200;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 28px;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
      color: var(--white);
      font-size: 1.3rem;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.03em;
    }
    .mobile-menu a:hover { color: var(--cyan); }
    .mobile-close {
      position: absolute;
      top: 22px; right: 24px;
      background: none;
      border: none;
      color: var(--white);
      font-size: 1.6rem;
      cursor: pointer;
    }

    
    /* "Let's Connect" — outline */
    .btn-outline {
      background: transparent;
      color: var(--text);
      border: 2px solid #c5cdd8;
    }
    .btn-outline:hover {
      border-color: var(--teal);
      color: var(--teal);
      transform: translateY(-2px);
    }

    .btn-circle {
      width: 28px; height: 28px;
      border-radius: 50%;
      background: rgba(255,255,255,.22);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .btn-outline .btn-circle {
      background: #eef1f5;
    }
    .btn-circle svg { width: 12px; height: 12px; }

    /* ══════════════════════════
       TAB LIST — hover thumbnail
    ══════════════════════════ */
    .tab-list { border-top: 1px solid var(--border); }

    .tab-item {
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      padding: 22px 0;
      cursor: pointer;
      position: relative;
      transition: padding-left .2s;
    }

    .tab-label {
      font-size: 1.55rem;
      font-weight: 600;
      color: var(--muted);
      transition: color .2s;
      line-height: 1;
    }

    /* hover: label turns dark */
    .tab-item:hover .tab-label { color: var(--text); }

    /* small thumbnail — hidden by default, shown on hover */
    .tab-thumb {
      width: 100px;
      height: 68px;
      border-radius: 8px;
      overflow: hidden;
      flex-shrink: 0;
      opacity: 0;
      transform: scale(.92) translateY(4px);
      transition: opacity .25s ease, transform .25s ease;
      pointer-events: none;
    }

    .tab-thumb img {
      width: 100%; height: 100%;
      object-fit: cover;
      display: block;
    }

    .tab-item:hover .tab-thumb {
      opacity: 1;
      transform: scale(1) translateY(0);
    }

    /* clicking also updates left image */
    .tab-item.active .tab-label { color: var(--text); }

    /* ── RESPONSIVE ── */
    @media (max-width: 820px) {
      .who-section { flex-direction: column; gap: 36px; padding: 52px 20px; }
      .left-col    { flex: none; width: 100%; min-height: 300px; }
      .tab-label   { font-size: 1.2rem; }
    }

    @media (max-width: 480px) {
      .headline  { font-size: 1.1rem; }
      .left-col  { min-height: 240px; }
      .tab-thumb { width: 72px; height: 52px; }
    }


      /* ── reset scoped to this section only ── */
  .tc2-section *, .tc2-section *::before, .tc2-section *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .tc2-section {
     font-family: 'Gilroy', sans-serif;
    background: #ffffff;
    color: #1a2533;
    width: 100%;
  }

  /* ── inner wrapper ── */
  .tc2-wrap {
    max-width: 1140px;
    margin: 0 auto;
    padding: 80px 32px;
    display: flex;
    gap: 64px;
    align-items: flex-start;
  }

  /* ══════════════════════════════
     LEFT — IMAGE CARD
  ══════════════════════════════ */
  .tc2-img-col {
    flex: 0 0 42%;
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    height: 640px;
    box-shadow: 0 20px 56px rgba(0,0,0,.14);
  }

  .tc2-img-col img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: absolute;
    inset: 0;
    transition: opacity .4s ease;
  }

  .tc2-img-col img.tc2-hide { opacity: 0; }

  .tc2-img-col::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(170deg, rgba(8,18,30,.04) 30%, rgba(8,18,30,.68) 100%);
    pointer-events: none;
    z-index: 1;
  }

  .tc2-badge {
    position: absolute;
    bottom: 24px;
    left: 20px;
    right: 20px;
    z-index: 2;
    background: rgba(10,20,32,.68);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 10px;
    padding: 16px 20px;
  }

  .tc2-badge-label {
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .15em;
    
    color: white;
    margin-bottom: 8px;
     font-family: 'Gilroy', sans-serif;
  }

  .tc2-badge-text {
    font-size: 20px;
    line-height: 1.65;
    color: rgba(255,255,255,.84);
    font-weight: 300;
   font-family: 'Gilroy', sans-serif;
  }

  /* ══════════════════════════════
     RIGHT — CONTENT COL
  ══════════════════════════════ */
  .tc2-content-col {
    flex: 1;
    display: flex;
    flex-direction: column;
    padding-top: 4px;
  }

  .tc2-eyebrow {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: .18em;
    
    color: #9aa8b8;
    margin-bottom: 14px;
     font-family: 'Gilroy', sans-serif;
  }

  .tc2-headline {
     font-family: 'Gilroy', sans-serif;
    font-size: clamp(1.15rem, 2vw, 1.5rem);
    line-height: 1.4;
    margin-bottom: 10px;
    margin-top: 0;
  }

  .tc2-headline strong {
    font-weight: 700;
    color: #1a2533;
  }

  .tc2-headline span {
    font-weight: 400;
    color: #9aa8b8;
  }

  /* ── Buttons ── */
  .tc2-btn-group {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 18px;
    margin-bottom: 44px;
  }

  .tc2-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 24px;
    border-radius: 50px;
     font-family: 'Gilroy', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    border: none;
    transition: transform .2s, box-shadow .2s, background .2s, color .2s, border-color .2s;
    line-height: 1;
  }

  /* "About Teceze" — teal-to-navy gradient */
  .tc2-btn-primary {
    background: linear-gradient(90deg, #1eaaa0 0%, #1a3a6e 100%);
    color: #ffffff;
  }
  .tc2-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(30,170,160,.35);
  }

  /* "Let's Connect" — outline */
  .tc2-btn-outline {
    background: transparent;
    color: #1a2533;
    border: 2px solid #c5cdd8;
  }
  .tc2-btn-outline:hover {
    border-color: #1eaaa0;
    color: #1eaaa0;
    transform: translateY(-2px);
  }

  .tc2-btn-circle {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: rgba(255,255,255,.22);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .tc2-btn-outline .tc2-btn-circle {
    background: #eef1f5;
  }
  .tc2-btn-circle svg { width: 12px; height: 12px; }

  /* ══════════════════════════════
     TAB LIST
  ══════════════════════════════ */
  .tc2-tab-list {
    border-top: 1px solid #dde4ec;
  }

  .tc2-tab-item {
    border-bottom: 1px solid #dde4ec;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 22px 0;
    cursor: pointer;
  }

  .tc2-tab-label {
     font-family: 'Gilroy', sans-serif;
    font-size: 1.55rem;
    font-weight: 600;
    color: #9aa8b8;
    transition: color .2s;
    line-height: 1;
  }

  /* hover: label turns dark */
  .tc2-tab-item:hover .tc2-tab-label { color: #1a2533; }

  /* active tab */
  .tc2-tab-item.tc2-active .tc2-tab-label { color: #1a2533; }

  /* thumbnail — hidden, appears on hover */
  .tc2-thumb {
    width: 100px;
    height: 68px;
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
    opacity: 0;
    transform: scale(.92) translateY(4px);
    transition: opacity .25s ease, transform .25s ease;
    pointer-events: none;
  }

  .tc2-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .tc2-tab-item:hover .tc2-thumb {
    opacity: 1;
    transform: scale(1) translateY(0);
  }

  /* ── Responsive ── */
  @media (max-width: 820px) {
    .tc2-wrap      { flex-direction: column; gap: 36px; padding: 52px 20px; }
    .tc2-img-col   { flex: none; width: 100%; min-height: 300px; }
    .tc2-tab-label { font-size: 1.2rem; }
  }

  @media (max-width: 480px) {
    .tc2-headline { font-size: 1.1rem; }
    .tc2-img-col  { min-height: 240px; }
    .tc2-thumb    { width: 72px; height: 52px; }
  }


  /* ── Hard reset scoped only to this section ── */
.tcs3-root,
.tcs3-root *,
.tcs3-root *::before,
.tcs3-root *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

/* ── CSS variables scoped to this section only ── */
.tcs3-root {
  --tcs3-blue:       #4db8f0;
  --tcs3-teal:       #1eaaa0;
  --tcs3-white:      #ffffff;
  --tcs3-w90:        rgba(255,255,255,.90);
  --tcs3-w72:        rgba(255,255,255,.72);
  --tcs3-w48:        rgba(255,255,255,.48);
  --tcs3-w42:        rgba(255,255,255,.42);
  --tcs3-border:     rgba(255,255,255,.09);
  --tcs3-card-bg:    rgba(255,255,255,.055);
  --tcs3-card-hover: rgba(255,255,255,.08);
  --tcs3-radius:     14px;
  --tcs3-gap:        14px;
  --tcs3-font:      'Gilroy', sans-serif;
}

/* ── Section wrapper ── */
.tcs3-root {
  font-family: var(--tcs3-font);
  position: relative;
  width: 100%;
  overflow: hidden;
}

/* ── Background image layer ── */
.tcs3-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
  background-image: url('/images/Ai-tools-bg-img.jpg');
  background-size: cover;
  background-position: center;
}

/* dark navy overlay */
.tcs3-bg::after {
  content: '';
  position: absolute;
  inset: 0;

}

/* subtle grid lines */
.tcs3-bg::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
 
  background-size: 48px 48px;
}

/* ── Inner container ── */
.tcs3-wrap {
  position: relative;
  z-index: 2;
  max-width: 1140px;
  margin: 0 auto;
  padding: 64px 32px;
}

/* ════════════════════════════
   TOP ROW — eyebrow + headline
════════════════════════════ */
.tcs3-top {
  display: flex;
  gap: 48px;
  align-items: flex-start;
  margin-bottom: 36px;
}

.tcs3-eyebrow-col {
  flex: 0 0 220px;
}

.tcs3-eyebrow {
  font-size: 11px;
  font-weight: 500;
  letter-spacing: .16em;
  text-transform: uppercase;
  color: var(--tcs3-w42);
  line-height: 1.72;
}

.tcs3-headline {
  flex: 1;
  font-size: clamp(1.15rem, 2vw, 1.5rem);
  font-weight: 400;
  line-height: 1.55;
  color: var(--tcs3-w90);
}

.tcs3-headline strong {
  font-weight: 700;
  color: var(--tcs3-white);
}

/* ════════════════════════════
   BENTO GRID
════════════════════════════ */
.tcs3-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: var(--tcs3-gap);
  /* min height so rows are visible */
  min-height: 380px;
}

/* ── Card base ── */
.tcs3-card {
  background: var(--tcs3-card-bg);
  border: 1px solid var(--tcs3-border);
  border-radius: var(--tcs3-radius);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  overflow: hidden;
  position: relative;
  transition: border-color .25s ease, background .25s ease;
}

.tcs3-card:hover {
  border-color: rgba(30,170,160,.32);
  background: var(--tcs3-card-hover);
}

/* ── Typography atoms ── */
.tcs3-num {
  display: block;
  font-size: clamp(2.6rem, 4.5vw, 3.8rem);
  font-weight: 700;
   	background: linear-gradient(133.73deg, #2559ca, #3ab8f1 52.43%, #2ededb);
  	-webkit-background-clip: text;
  	-webkit-text-fill-color: transparent;
  line-height: 1;
  letter-spacing: -.02em;
}

.tcs3-num-sub {
  display: block;
  font-size: 13px;
  font-weight: 500;
  color: var(--tcs3-w48);
  margin-top: 5px;
  margin-bottom: 14px;
}

.tcs3-label {
  display: block;
  font-size: 12px;
  font-weight: 500;
  color: var(--tcs3-w48);
  letter-spacing: .02em;
  margin-bottom: 8px;
  line-height: 1.5;
}

.tcs3-desc {
  display: block;
  font-size: 13px;
  line-height: 1.72;
  color: var(--tcs3-w42);
  font-weight: 300;
}

.tcs3-desc strong {
  font-weight: 600;
  color: var(--tcs3-w72);
}

/* ════════════════════════════
   COL 1 — Unified tall card
   (stat text top + photo bottom)
════════════════════════════ */
.tcs3-card-left {
  grid-column: 1;
  grid-row: 1 / 3;
  display: flex;
  flex-direction: column;
}

.tcs3-left-text {
  padding: 28px 26px 22px;
  flex: 0 0 auto;
}

.tcs3-left-photo {
  flex: 1;
  position: relative;
  min-height: 160px;
}

.tcs3-left-photo img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
      padding: 20px;
    border-radius: 25px;
}

/* ════════════════════════════
   COL 2 — Projects (top)
════════════════════════════ */
.tcs3-card-projects {
  grid-column: 2;
  grid-row: 1;
  padding: 28px 26px 24px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* ════════════════════════════
   COL 2 — Partners (bottom)
════════════════════════════ */
.tcs3-card-partners {
  grid-column: 2;
  grid-row: 2;
  padding: 28px 26px 24px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* ════════════════════════════
   COL 3 — Technical (image bg, tall)
════════════════════════════ */
.tcs3-card-technical {
  grid-column: 3;
  grid-row: 1 / 3;
  padding: 0;
}

.tcs3-card-technical img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.tcs3-tech-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(170deg, rgba(5,15,45,.12) 0%, rgba(5,15,45,.78) 55%);
  z-index: 1;
}

.tcs3-tech-caption {
  position: absolute;
  bottom: 24px;
  left: 22px;
  right: 22px;
  z-index: 2;
}

.tcs3-tech-caption .tcs3-label { color: rgba(255,255,255,.65); }
.tcs3-tech-caption .tcs3-desc  { color: rgba(255,255,255,.62); margin-top: 10px; }

/* ════════════════════════════
   RESPONSIVE
════════════════════════════ */
@media (max-width: 860px) {
  .tcs3-grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto auto;
    min-height: unset;
  }
  .tcs3-card-left      { grid-column: 1; grid-row: 1 / 3; }
  .tcs3-card-projects  { grid-column: 2; grid-row: 1; }
  .tcs3-card-partners  { grid-column: 2; grid-row: 2; }
  .tcs3-card-technical { grid-column: 1 / 3; grid-row: 3; min-height: 260px; }

  .tcs3-top            { flex-direction: column; gap: 14px; }
  .tcs3-eyebrow-col    { flex: none; }
}

@media (max-width: 540px) {
  .tcs3-grid {
    grid-template-columns: 1fr;
    grid-template-rows: auto;
  }
  .tcs3-card-left      { grid-column: 1; grid-row: 1; min-height: 340px; }
  .tcs3-card-projects  { grid-column: 1; grid-row: 2; }
  .tcs3-card-partners  { grid-column: 1; grid-row: 3; }
  .tcs3-card-technical { grid-column: 1; grid-row: 4; min-height: 230px; }
  .tcs3-wrap           { padding: 44px 16px; }
}
.x-svc *{box-sizing:border-box;margin:0;padding:0}
.x-svc{ font-family: 'Gilroy', sans-serif;background:#fff!important;width:100%;max-width:1195px;margin:0 auto;position:relative;overflow:hidden;border-radius:12px}
.x-svc__track{display:flex;transition:transform 0.65s cubic-bezier(0.77,0,0.175,1)}
.x-svc__slide{min-width:100%;padding:48px 56px;display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start}
.x-svc__title{font-size:42px;font-weight:800;color:#1a7ec8;line-height:1;margin-bottom:24px}
.x-svc__desc{font-size:15px;color:#666;line-height:1.65;margin-bottom:32px}
.x-svc__desc strong{color:#222;font-weight:700}
.x-svc__svc-title{font-size:17px;font-weight:800;color:#111;margin-bottom:8px}
.x-svc__accent{width:36px;height:3px;background:#1bbf8a;border-radius:2px;margin-bottom:14px}
.x-svc__svc-desc{font-size:14px;color:#555;line-height:1.6;margin-bottom:18px}
.x-svc__learn{font-size:13px;font-weight:600;color:#1a7ec8;text-decoration:none;display:inline-flex;align-items:center;gap:6px;margin-bottom:32px;cursor:pointer;background:none;border:none;padding:0}
.x-svc__learn:hover{text-decoration:underline}
.x-svc__btn{display:inline-flex;align-items:center;gap:10px;border:1.5px solid #222;border-radius:30px;padding:10px 22px;font-size:13px;font-weight:600;color:#111;cursor:pointer;background:transparent;transition:background 0.2s,color 0.2s}
.x-svc__btn:hover{background:#111;color:#fff}
.x-svc__btn-icon{width:26px;height:26px;background:#1a7ec8;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.x-svc__btn-icon svg{fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.x-svc__right{display:flex;flex-direction:column}
.x-svc__counter{display:flex;align-items:baseline;gap:3px;justify-content:flex-end;height:42px;margin-bottom:24px}
.x-svc__cnum{font-size:42px;font-weight:800;color:#1a7ec8;line-height:1}
.x-svc__ctotal{font-size:15px;color:#aaa;font-weight:500}
.x-svc__img-wrap{border-radius:14px;overflow:hidden;width:100%;aspect-ratio:4/3;background:#e4eff8}
.x-svc__img-wrap img{width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.8s ease}
.x-svc__slide:hover .x-svc__img-wrap img{transform:scale(1.04)}
.x-svc__progress{height:3px;background:#e0e0e0;position:relative}
.x-svc__progress-fill{height:100%;background:#1a7ec8;width:0%}
@media(max-width:640px){
  .x-svc__slide{grid-template-columns:1fr;padding:32px 24px}
  .x-svc__right{display:none}
}


.tc4 * { box-sizing: border-box; margin: 0; padding: 0; }
.tc4 {
   font-family: 'Gilroy', sans-serif;
  background: #fff;
  width: 100%;
  padding: 60px 0;
}
.tc4__inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}
.tc4__top {
  display: grid;
  grid-template-columns: 220px 1fr;
  gap: 259px;
  align-items: start;
  margin-bottom: 48px;
}
.tc4__label {
  font-size: 13px;
  color: #888;
  line-height: 1.5;
  padding-top: 4px;
}
.tc4__heading {
  font-size: 22px;
  line-height: 1.5;
  color: #aaa;
  font-weight: 400;
  max-width: 560px;
}
.tc4__heading strong {
  color: #111;
  font-weight: 700;
}

/* ── Marquee ── */
.tc4__marquee-wrap {
  width: 100%;
  overflow: hidden;
  position: relative;
  margin-bottom: 48px;
}
.tc4__marquee-wrap::before,
.tc4__marquee-wrap::after {
  content: '';
  position: absolute;
  top: 0; bottom: 0;
  width: 120px;
  z-index: 2;
  pointer-events: none;
}
.tc4__marquee-wrap::before {
  left: 0;
  background: linear-gradient(to right, #fff 0%, transparent 100%);
}
.tc4__marquee-wrap::after {
  right: 0;
  background: linear-gradient(to left, #fff 0%, transparent 100%);
}
.tc4__marquee-track {
  display: flex;
  width: max-content;
  animation: tc4Scroll 22s linear infinite;
}
.tc4__marquee-track:hover {
  animation-play-state: paused;
}
@keyframes tc4Scroll {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.tc4__marquee-set {
  display: flex;
  align-items: center;
  gap: 64px;
  padding: 0 32px;
}
.tc4__logo-item {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.tc4__logo-item img {
  height: 36px;
  width: auto;
  object-fit: contain;
  filter: grayscale(100%);
  opacity: 0.55;
  transition: filter 0.3s, opacity 0.3s;
}
.tc4__logo-item img:hover {
  filter: grayscale(0%);
  opacity: 1;
}

/* ── Button ── */
.tc4__footer {
  display: flex;
  justify-content: center;
}
.tc4__btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: 1.5px solid #222;
  border-radius: 30px;
  padding: 11px 26px;
  font-size: 14px;
  font-weight: 600;
  color: #111;
  cursor: pointer;
  background: transparent;
  transition: background 0.2s, color 0.2s;
  text-decoration: none;
}
.tc4__btn:hover { background: #111; color: #fff; }
.tc4__btn:hover .tc4__btn-icon { background: #fff; }
.tc4__btn:hover .tc4__btn-icon svg { stroke: #111; }
.tc4__btn-icon {
  width: 28px; height: 28px;
  background: linear-gradient(90deg, #2A44B0 0%, #13C5B8 100%);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  transition: background 0.2s;
}
.tc4__btn-icon svg { fill: none; stroke: #fff; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

@media (max-width: 768px) {
  .tc4 { padding: 40px 0; }
  .tc4__inner { padding: 0 24px; }
  .tc4__top { grid-template-columns: 1fr; gap: 16px; }
  .tc4__heading { font-size: 18px; }
  .tc4__marquee-set { gap: 40px; }
  .tc4__logo-item img { height: 28px; }
}
@media (max-width: 480px) {
  .tc4__marquee-set { gap: 28px; }
  .tc4__logo-item img { height: 24px; }
}

.tc5 * { box-sizing: border-box; margin: 0; padding: 0; }
.tc5 {
  font-family: 'Segoe UI', sans-serif;
 
  width: 100%;

}
.tc5__inner {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 8px 40px rgba(0,0,0,0.10);
  background: #fff;
}

/* ── Left ── */
.tc5__left {
  position: relative;
  min-height: 520px;
  background: #050d1f;
  overflow: hidden;
}
.tc5__left img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 0.85;
}
.tc5__left-text {
  position: absolute;
  bottom: 36px;
  left: 36px;
  right: 36px;
  color: #fff;
}
.tc5__left-tag {
  font-size: 13px;
  font-weight: 500;
  color: rgba(255,255,255,0.7);
  margin-bottom: 10px;
}
.tc5__left-title {
  font-size: 28px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 12px;
  color: #fff;
}
.tc5__left-sub {
  font-size: 14px;
  color: rgba(255,255,255,0.65);
  line-height: 1.6;
}

/* ── Right ── */
.tc5__right {
  padding: 48px 44px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.tc5__form-title {
  font-size: 26px;
  font-weight: 700;
  color: #111;
  margin-bottom: 32px;
}

/* Form rows */
.tc5__row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 18px;
}
.tc5__field {
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 18px;
}
.tc5__field:last-of-type { margin-bottom: 0; }
.tc5__label {
  font-size: 13px;
  font-weight: 600;
  color: #333;
}
.tc5__input,
.tc5__select,
.tc5__textarea {
  width: 100%;
   font-family: 'Gilroy', sans-serif;
  font-size: 14px;
  color: #111;
  background: #fff;
  border: 1.5px solid #dde1e7;
  border-radius: 8px;
  padding: 10px 14px;
  outline: none;
  transition: border-color 0.2s;
  appearance: none;
  -webkit-appearance: none;
}
.tc5__input:focus,
.tc5__select:focus,
.tc5__textarea:focus { border-color: #1a7ec8; }
.tc5__input::placeholder,
.tc5__textarea::placeholder { color: #aaa; }
.tc5__textarea { resize: none; height: 100px; }

/* Phone field */
.tc5__phone-wrap {
  display: flex;
  border: 1.5px solid #dde1e7;
  border-radius: 8px;
  overflow: hidden;
  transition: border-color 0.2s;
}
.tc5__phone-wrap:focus-within { border-color: #1a7ec8; }
.tc5__phone-flag {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 10px 12px;
  background: #f8f9fb;
  border-right: 1.5px solid #dde1e7;
  font-size: 13px;
  color: #444;
  cursor: pointer;
  white-space: nowrap;
  user-select: none;
}
.tc5__phone-flag span { font-size: 18px; line-height: 1; }
.tc5__phone-flag svg { fill: none; stroke: #888; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.tc5__phone-input {
  flex: 1;
  border: none;
  outline: none;
  padding: 10px 14px;
  font-size: 14px;
   font-family: 'Gilroy', sans-serif;
  color: #111;
  background: #fff;
}
.tc5__phone-input::placeholder { color: #aaa; }

/* Select arrow */
.tc5__select-wrap { position: relative; }
.tc5__select-wrap select {
  width: 100%;
   font-family: 'Gilroy', sans-serif;
  font-size: 14px;
  color: #aaa;
  background: #fff;
  border: 1.5px solid #dde1e7;
  border-radius: 8px;
  padding: 10px 40px 10px 14px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  transition: border-color 0.2s;
}
.tc5__select-wrap select:focus { border-color: #1a7ec8; color: #111; }
.tc5__select-wrap::after {
  content: '';
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  width: 0; height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 6px solid #888;
  pointer-events: none;
}

/* Button */
.tc5__footer { margin-top: 28px; }
.tc5__btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: 1.5px solid #222;
  border-radius: 30px;
  padding: 11px 28px;
  font-size: 14px;
  font-weight: 600;
  color: #111;
  cursor: pointer;
  background: transparent;
  transition: background 0.2s, color 0.2s;
   font-family: 'Gilroy', sans-serif;
}
.tc5__btn:hover { background: #111; color: #fff; }
.tc5__btn:hover .tc5__btn-icon { background: #fff; }
.tc5__btn:hover .tc5__btn-icon svg { stroke: #111; }
.tc5__btn-icon {
  width: 28px; height: 28px;
  background: linear-gradient(-84.15deg, #13c5b8, #2a44b0);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  transition: background 0.2s;
}
.tc5__btn-icon svg { fill: none; stroke: #fff; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

/* Responsive */
@media (max-width: 860px) {
  .tc5 { padding: 40px 20px; }
  .tc5__inner { grid-template-columns: 1fr; }
  .tc5__left { min-height: 280px; }
  .tc5__left-title { font-size: 22px; }
  .tc5__right { padding: 36px 28px; }
}
@media (max-width: 480px) {
  .tc5 { padding: 24px 12px; }
  .tc5__row { grid-template-columns: 1fr; gap: 0; }
  .tc5__right { padding: 28px 20px; }
  .tc5__form-title { font-size: 22px; margin-bottom: 24px; }
  .tc5__left-text { left: 24px; right: 24px; bottom: 24px; }
}

.tc6 * { box-sizing: border-box; margin: 0; padding: 0; }
.tc6 {
 font-family: 'Gilroy', sans-serif;
  background: #05112a;
  width: 100%;
  padding: 70px 40px;
}
.tc6__inner {
  max-width: 1100px;
  margin: 0 auto;
}

/* Top label */
.tc6__top-label {
  font-size: 16px;
  color: rgba(255,255,255,0.75);
  line-height: 1.5;
  max-width: 340px;
  margin-bottom: 48px;
}

/* Grid */
.tc6__grid {
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: 56px;
  align-items: center;
}

/* Left */
.tc6__left { position: relative; }

.tc6__quote-icon {
  font-size: 70px;
  line-height: 1;
  color: #0e3a5c;
   font-family: 'Gilroy', sans-serif;
  margin-bottom: -12px;
  display: block;
  user-select: none;
}

.tc6__quote-text {
  font-size: 22px;
  font-weight: 500;
  color: #fff;
  line-height: 1.55;
  margin-bottom: 28px;
}

/* Author */
.tc6__author {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 40px;
}
.tc6__author-avatar {
  width: 48px; height: 48px;
  border-radius: 50%;
  object-fit: cover;
  flex-shrink: 0;
  border: 2px solid #1a7ec8;
}
.tc6__author-name {
  font-size: 15px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 2px;
}
.tc6__author-role {
  font-size: 13px;
  color: rgba(255,255,255,0.55);
}
.tc6__author-company {
  font-size: 12px;
  color: rgba(255,255,255,0.38);
}

/* Read button */
.tc6__btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: 1.5px solid rgba(255,255,255,0.4);
  border-radius: 30px;
  padding: 10px 22px;
  font-size: 13px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  background: transparent;
  transition: background 0.2s, border-color 0.2s;
   font-family: 'Gilroy', sans-serif;
}
.tc6__btn:hover { background: rgba(255,255,255,0.08); border-color: #fff; }
.tc6__btn-icon {
  width: 26px; height: 26px;
  background: linear-gradient(90deg, #2A44B0 0%, #13C5B8 100%);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.tc6__btn-icon svg { fill: none; stroke: #fff; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

/* Right image */
.tc6__right {
  position: relative;
}
.tc6__img-wrap {
  border-radius: 18px;
  overflow: hidden;
  width: 100%;
  aspect-ratio: 3/3.6;
  background: #0e2a45;
}
.tc6__img-wrap img {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.7s ease;
}

/* Bottom bar */
.tc6__bottom {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 24px;
  margin-top: 28px;
}
.tc6__counter {
  display: flex;
  align-items: baseline;
  gap: 4px;
}
.tc6__counter-num {
  font-size: 48px;
  font-weight: 800;
  color: #1bbf8a;
  line-height: 1;
}
.tc6__counter-total {
  font-size: 16px;
  color: rgba(255,255,255,0.45);
  font-weight: 500;
}
.tc6__nav {
  display: flex;
  gap: 10px;
}
.tc6__nav-btn {
  width: 42px; height: 42px;
  border-radius: 50%;
  border: 1.5px solid rgba(255,255,255,0.25);
  background: transparent;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer;
  transition: background 0.2s, border-color 0.2s;
}
.tc6__nav-btn:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.5); }
.tc6__nav-btn svg { fill: none; stroke: #fff; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

/* Slide transition */
.tc6__slide { display: none; }
.tc6__slide.tc6--active { display: contents; }

/* Progress dots */
.tc6__dots {
  display: flex;
  gap: 6px;
  align-items: center;
  margin-top: 20px;
}
.tc6__dot {
  width: 6px; height: 6px;
  border-radius: 50%;
  background: rgba(255,255,255,0.2);
  transition: background 0.3s, transform 0.3s;
  cursor: pointer;
}
.tc6__dot.tc6--dot-active {
  background: #1bbf8a;
  transform: scale(1.4);
}

/* Responsive */
@media (max-width: 860px) {
  .tc6 { padding: 48px 24px; }
  .tc6__grid { grid-template-columns: 1fr; gap: 36px; }
  .tc6__right { order: -1; }
  .tc6__img-wrap { aspect-ratio: 4/3; }
  .tc6__quote-text { font-size: 18px; }
  .tc6__bottom { justify-content: space-between; }
}
@media (max-width: 480px) {
  .tc6 { padding: 36px 16px; }
  .tc6__quote-text { font-size: 16px; }
  .tc6__counter-num { font-size: 36px; }
  .tc6__top-label { font-size: 14px; margin-bottom: 32px; }
}

 :root {
    --teal: #0081a7;
    --dark: #1a1a1a;
  }
  .ins-wrap {
    background: #fff;
    padding: 60px 0;
     font-family: 'Gilroy', sans-serif;
    position: relative;
    overflow: hidden;
  }

  .ins7-bg-watermark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            pointer-events: none; /* Allows clicking slider through the image */
            user-select: none;
        }
        .ins7-bg-watermark img {
            width: 100%;
            height: auto;
            opacity: 0.9;
            transform: translateY(-10%); /* Adjust to match design */
            padding-top: 90px;
        }
  .ins-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
  }

  /* Featured card */
  .ins-featured {
    position: relative;
    width: 100%;
    height: 420px;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 32px;
    margin-top: 100px;
  }
  .ins-featured img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .ins-featured-overlay {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    padding: 36px 40px;
    background: linear-gradient(transparent, rgba(0,0,0,0.88));
    color: #fff;
  }
  .ins-label {
    font-size: 13px;
    color: rgba(255,255,255,0.65);
    margin-bottom: 10px;
    display: block;
  }
  .ins-featured-overlay h2 {
    font-size: 26px;
    font-weight: 700;
    line-height: 1.3;
    margin: 0 0 20px;
    max-width: 600px;
  }
  .ins-view-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 9px 20px;
    border: 1px solid rgba(255,255,255,0.4);
    border-radius: 30px;
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    cursor: pointer;
  }
  .ins-dot {
    width: 22px; height: 22px;
    background: linear-gradient(90deg, #2A44B0 0%, #13C5B8 100%);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    color: #fff;
    flex-shrink: 0;
  }

  /* Custom slider */
  .ins-slider-outer {
    overflow: hidden;
    width: 100%;
    position: relative;
  }
  .ins-slider-track {
    display: flex;
    transition: transform 0.7s cubic-bezier(0.4,0,0.2,1);
    will-change: transform;
  }
  .ins-slide {
    min-width: 100%;
    width: 100%;
    box-sizing: border-box;
    display: flex;
    gap: 28px;
  }
  .ins-blog-card {
    flex: 0 0 calc(50% - 14px);
    display: flex;
    gap: 18px;
    align-items: flex-start;
    box-sizing: border-box;
  }

  /* Thumbnail with real img */
  .ins-blog-thumb {
    width: 150px;
    height: 150px;
    flex-shrink: 0;
    border-radius: 14px;
    overflow: hidden;
    background: #e8f4f8;
  }
  .ins-blog-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .ins-blog-info { flex: 1; }
  .ins-blog-date {
    font-size: 12px;
    color: #999;
    margin-bottom: 8px;
    display: block;
  }
  .ins-blog-info h3 {
    font-size: 16px;
    font-weight: 600;
    color: var(--dark);
    line-height: 1.4;
    margin: 0 0 12px;
  }
  .ins-blog-link {
    color: var(--teal);
    font-weight: 700;
    font-size: 14px;
    text-decoration: none;
    cursor: pointer;
  }

  /* Footer */
  .ins-footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-top: 32px;
  }
  .ins-counter {
    font-size: 52px;
    font-weight: 800;
    color: var(--teal);
    line-height: 1;
  }
  .ins-counter span {
    font-size: 20px;
    color: #ccc;
    font-weight: 400;
  }
  .ins-nav { display: flex; gap: 10px; margin-bottom: 6px; }
  .ins-btn {
    width: 46px; height: 46px;
    border: 1px solid #ddd;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    background: #fff;
    transition: background 0.2s, border-color 0.2s;
    font-size: 16px;
    color: #444;
    user-select: none;
  }
  .ins-btn:hover { background: #f0f0f0; border-color: #bbb; }

  .ins-explore { text-align: center; margin-top: 44px; }
  .ins-explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 13px 30px;
    border: 1.5px solid #111;
    border-radius: 50px;
    background: transparent;
    font-weight: 700;
    font-size: 14px;
    cursor: pointer;
     font-family: 'Gilroy', sans-serif;
     color: black;
    text-decoration: none;
  }

  @media (max-width: 640px) {
    .ins-slide { flex-direction: column; }
    .ins-blog-card { flex: 0 0 100%; }
    .ins-featured { height: 280px; }
  }
.banner {
    display: flex;
    align-items: center;
    gap: clamp(24px, 5vw, 80px);
    max-width: 860px;
    width: 100%;
    padding: clamp(28px, 5vw, 48px) clamp(20px, 4vw, 48px);
  }

  .label {
    flex-shrink: 0;
    min-width: 120px;
    max-width: 160px;
  }

  .label p {
     font-family: 'Gilroy', sans-serif;
    font-size: clamp(10px, 1.2vw, 12px);
    font-weight: 600;
    color: #1a1a1a;
    line-height: 1.5;
    letter-spacing: 0.01em;
  }

  .content {
    flex: 1;
  }

  .content p {
     font-family: 'Gilroy', sans-serif;
    font-size: clamp(14px, 2vw, 18px);
    line-height: 1.55;
    color: #b0b0b0;
    font-weight: 400;
  }

  .content p strong {
    color: #1a1a1a;
    font-weight: 700;
  }

  @media (max-width: 540px) {
    .banner {
      flex-direction: column;
      align-items: flex-start;
      gap: 16px;
    }

    .label {
      max-width: 100%;
    }
  }





  /* //location */

 
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:system-ui,sans-serif;background:#fff}
.gom-wrap{display:flex;border:0.5px solid #dde3ea;border-radius:12px;overflow:hidden;min-height:460px;background:#fff}
.gom-map-panel{flex:1;position:relative;background:#f0f7fc;overflow:hidden;min-height:460px}
.gom-map-img-layer{position:absolute;inset:0;width:100%;height:100%}
.gom-map-img-layer img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 0.4s ease;pointer-events:none;display:block}
.gom-map-img-layer img.gom-active{opacity:1}
canvas#gom-overlay{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:2}
.gom-hotspot-layer{position:absolute;inset:0;z-index:3}
.gom-hs{position:absolute;cursor:pointer}
.gom-flag-layer{position:absolute;inset:0;z-index:4;pointer-events:none}
.gom-pin{
  position:absolute;
  width:34px;height:34px;
  border-radius:50%;
  border:2.5px solid #fff;
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  transform:translate(-50%,-50%);
  cursor:pointer;
  pointer-events:all;
  transition:transform 0.15s,box-shadow 0.15s,opacity 0.25s;
  box-shadow:0 2px 8px rgba(0,0,0,0.22);
}
.gom-pin:hover{transform:translate(-50%,-50%) scale(1.25);box-shadow:0 4px 16px rgba(14,124,191,0.35)}
.gom-pin.gom-dim{opacity:0.12;pointer-events:none}
.gom-pin.gom-hidden{opacity:0;pointer-events:none}
.gom-back-btn{position:absolute;top:12px;left:50%;transform:translateX(-50%);z-index:10;display:none;align-items:center;gap:6px;padding:7px 18px;background:#1a8fcf;color:#fff;border:none;border-radius:20px;font-size:12px;font-weight:500;cursor:pointer;white-space:nowrap;font-family:system-ui,sans-serif;box-shadow:0 2px 10px rgba(14,124,191,0.3)}
.gom-back-btn.gom-show{display:inline-flex}
.gom-back-btn:hover{background:#0d5f8f}
.gom-tooltip{position:absolute;background:#fff;border:0.5px solid #ccc;border-radius:6px;padding:4px 10px;font-size:11px;font-weight:500;color:#333;pointer-events:none;display:none;white-space:nowrap;z-index:20;box-shadow:0 2px 8px rgba(0,0,0,0.1)}

/* SIDEBAR — fixed height to match map panel, no overflow on the sidebar itself */
.gom-sidebar{
  width:290px;
  flex-shrink:0;
  border-left:0.5px solid #dde3ea;
  background:#fff;
  display:flex;
  flex-direction:column;
  height:460px;       /* matches min-height of .gom-wrap */
  max-height:460px;
  overflow:hidden;    /* prevent sidebar from stretching the layout */
}

/* HQ PANEL — scrollable if content overflows */
.gom-sb-hq{
  padding:24px;
  display:flex;
  flex-direction:column;
  gap:0;
  flex:1;
  overflow-y:auto;
}
.gom-sb-hq::-webkit-scrollbar{width:4px}
.gom-sb-hq::-webkit-scrollbar-track{background:transparent}
.gom-sb-hq::-webkit-scrollbar-thumb{background:#d0dbe6;border-radius:2px}
.gom-sb-hq::-webkit-scrollbar-thumb:hover{background:#a0b4c2}

.gom-sb-hq .gom-hq-label{font-size:10px;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#1a8fcf;margin-bottom:14px}
.gom-hq-item{padding:14px 0;border-bottom:0.5px solid #eef0f3;display:flex;flex-direction:column;gap:3px}
.gom-hq-item:last-child{border-bottom:none}
.gom-hq-flag-name{display:flex;align-items:center;gap:8px;margin-bottom:4px}
.gom-hq-flag{font-size:18px}
.gom-hq-country{font-size:13px;font-weight:600;color:#111}
.gom-hq-city{font-size:12px;font-weight:500;color:#333;margin-bottom:1px}
.gom-hq-addr{font-size:11px;color:#777;line-height:1.55;margin-bottom:4px}
.gom-map-link{display:inline-flex;align-items:center;gap:3px;font-size:11px;font-weight:500;color:#1a8fcf;text-decoration:none;border:none;background:none;cursor:pointer;padding:0;font-family:system-ui,sans-serif}
.gom-map-link:hover{opacity:0.7}

/* DETAIL PANEL — flex column: header fixed, list scrolls */
.gom-sb-detail{
  display:none;
  flex-direction:column;
  height:100%;         /* fill the sidebar */
  max-height:460px;
  overflow:hidden;     /* clip; only .gom-office-list scrolls */
}
.gom-sb-detail.gom-active{display:flex}

.gom-sb-detail-header{padding:16px 20px 0 20px;flex-shrink:0}
.gom-sb-header{display:flex;align-items:center;gap:10px;padding:12px 20px 12px 20px;border-bottom:0.5px solid #eee;flex-shrink:0}
.gom-sb-flag-img{width:36px;height:36px;border-radius:50%;border:1.5px solid #eee;object-fit:cover}
.gom-sb-name{font-size:14px;font-weight:600;color:#222}
.gom-sb-office-count{font-size:10px;font-weight:400;color:#aaa;margin-left:4px}

/* Scrollable office list — takes remaining height */
.gom-office-list{
  flex:1;
  overflow-y:auto;
  padding:14px 20px 20px 20px;
  min-height:0;   /* critical: lets flex child shrink below content size */
}
.gom-office-list::-webkit-scrollbar{width:4px}
.gom-office-list::-webkit-scrollbar-track{background:transparent}
.gom-office-list::-webkit-scrollbar-thumb{background:#d0dbe6;border-radius:2px}
.gom-office-list::-webkit-scrollbar-thumb:hover{background:#a0b4c2}

.gom-office-item{margin-bottom:14px;padding-bottom:14px;border-bottom:0.5px solid #eee}
.gom-office-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
.gom-office-city{font-size:13px;font-weight:600;color:#222;margin-bottom:3px}
.gom-office-addr{font-size:11px;color:#666;line-height:1.55;margin-bottom:5px}
.gom-back-to-hq{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:500;color:#999;background:none;border:none;cursor:pointer;padding:0 0 8px 0;font-family:system-ui,sans-serif}
.gom-back-to-hq:hover{color:#1a8fcf}

@media(max-width:640px){
  .gom-wrap{flex-direction:column}
  .gom-sidebar{width:100%;border-left:none;border-top:0.5px solid #eee;height:260px;max-height:260px}
  .gom-sb-detail{max-height:260px}
  .gom-map-panel{min-height:280px}
}
 
 
 .tcz-cs2__section {
  position: relative;
  background: #ffffff;
  padding: 0 0 40px;
  overflow: clip;
  box-sizing: border-box;
  min-height: 520px;
  width: 100vw !important;
  max-width: 100vw !important;
  margin-left: calc(-50vw + 50%) !important;
  margin-right: calc(-50vw + 50%) !important;
}

.tcz-cs2__wm-top,
.tcz-cs2__wm-behind {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  pointer-events: none;
  user-select: none;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.tcz-cs2__wm-top { z-index: 3; }
.tcz-cs2__wm-behind { z-index: 0; }

.tcz-cs2__wm-top span,
.tcz-cs2__wm-behind span {
  display: block;
  font-weight: 900;
  white-space: nowrap;
  line-height: 0.85;
  text-transform: uppercase;
  /* Updated letter spacing */
  letter-spacing: 2px; 
}

.tcz-cs2__wm-top span:nth-child(1) { color: #E5E6EA; }
.tcz-cs2__wm-behind span:nth-child(1), .tcz-cs2__wm-behind span:nth-child(2) { color: #F2F3F4; }
.tcz-cs2__wm-behind span:nth-child(3) { color: #FAFAFB; }

.tcz-cs2__container {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: stretch;
  width: 100%;
  margin: 0 auto;
  min-height: 380px;
}

.tcz-cs2__left {
  flex: 0 0 42%;
  max-width: 42%;
  display: flex;
  align-items: flex-end;
  padding: 0 40px 10px 60px;
}

.tcz-cs2__text-meta { font-size: 12px; color: #6b7280; margin-bottom: 10px; }
.tcz-cs2__text-title { font-size: clamp(18px, 2vw, 26px); font-weight: 700; color: #111827; line-height: 1.35; margin: 0 0 20px; }
.tcz-cs2__text-link {
  display: inline-flex; align-items: center; gap: 7px; font-size: 13px; font-weight: 600;
  color: #374151; border: 1.5px solid #d1d5db; border-radius: 50px; padding: 8px 18px;
  text-decoration: none; transition: 0.2s;
}

.tcz-cs2__right { flex: 1 1 auto; border-radius: 18px 0 0 18px; position: relative; z-index: 1; overflow: hidden; }
.tcz-cs2__image-card { width: 100%; height: 100%; min-height: 500px; border-radius: 18px 0 0 18px; box-shadow: 0 10px 40px rgba(0,0,0,0.18); }
.tcz-cs2__slide-wrapper { display: flex; width: 100%; height: 100%; transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1); }
.tcz-cs2__slide-inner { flex: 0 0 100%; width: 100%; height: 100%; position: relative; }
.tcz-cs2__img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
.tcz-cs2__img-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(5,15,50,0.05), rgba(5,15,50,0.65)); }
.tcz-cs2__img-content { position: absolute; bottom: 0; left: 0; right: 0; padding: 24px; z-index: 2; }
.tcz-cs2__img-title { font-size: clamp(16px, 1.6vw, 20px); font-weight: 700; color: #ffffff; margin: 0 0 18px; }

/* BOTTOM BAR STYLING */
.tcz-cs2__bottom {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1100px;
  margin: 32px auto 0;
  padding: 0 60px;
}

.tcz-cs2__counter { display: flex; align-items: baseline; gap: 4px; }
.tcz-cs2__counter-current { font-size: 42px; font-weight: 800; background: linear-gradient(135deg, #1a56db, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
.tcz-cs2__nav { display: flex; gap: 10px; }
.tcz-cs2__btn { width: 44px; height: 44px; border-radius: 50%; border: none; background: #000; color: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: 0.2s; }
.tcz-cs2__btn:hover { background: #2563eb; transform: scale(1.1); }

/* MOBILE RESPONSIVE UPDATES */
@media (max-width: 700px) {
  .tcz-cs2__left { display: none; }
  .tcz-cs2__right { border-radius: 0; padding: 0 15px; } /* Centering the section on mobile */
  .tcz-cs2__image-card { border-radius: 18px; min-height: 380px; }
  
  .tcz-cs2__bottom { 
    flex-direction: column; /* Stacked for middle alignment */
    gap: 20px; 
    padding: 0;
    text-align: center;
  }
  .tcz-cs2__bottom-spacer { display: none; }
  .tcz-cs2__nav { order: 2; }
  .tcz-cs2__counter { order: 1; justify-content: center; }
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
  background: linear-gradient(90deg, #2A44B0 0%, #13C5B8 100%);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
  transition:background .2s;
}
.arr-dark svg{stroke:#fff!important;}

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

.cta-card{
  position:relative;
  border-radius:20px;
  overflow:hidden;
  padding: 44px 52px;
  background:#0b1d8a;
  width:100%;
}

/* Wave SVG fills full card */
.cta-bg{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  z-index:0;
}
.cta-bg svg{
  width:100%;
  height:100%;
  display:block;
}

/* Left gradient so text is always readable */
.cta-bg::after{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(90deg,
    rgba(11,29,138,1.0)  0%,
    rgba(11,29,138,0.95) 30%,
    rgba(11,29,138,0.6)  55%,
    rgba(11,29,138,0.0)  100%);
}

/* Content sits above bg */
.cta-content{
  position:relative;
  z-index:1;
  max-width:520px;
}

.cta-label{
  font-size:12.5px;
  font-weight:500;
  color:rgba(255,255,255,0.65);
  margin-bottom:10px;
  letter-spacing:0.02em;
}

.cta-heading{
  font-size:clamp(22px,3vw,36px);
  font-weight:700;
  color:#fff;
  line-height:1.22;
  margin-bottom:14px;
}

.cta-sub{
  font-size:clamp(12px,1.15vw,13.5px);
  font-weight:400;
  color:rgba(255,255,255,0.55);
  line-height:1.65;
  max-width:430px;
  margin-bottom:30px;
}

.cta-btns{
  display:flex;
  flex-wrap:wrap;
  gap:14px;
}

/* Shared pill */
.btn-pill{
  display:inline-flex;
  align-items:center;
  gap:10px;
  border-radius:50px;
  padding:10px 22px 10px 10px;
  font-size:13px;
  font-weight:600;
  cursor:pointer;
  text-decoration:none;
  white-space:nowrap;
  transition:opacity .2s, transform .2s;
   font-family: 'Gilroy', sans-serif;
}
.btn-pill:hover{opacity:.88;transform:translateY(-1px);}

/* Ghost outline */
.btn-ghost{
  border:1.5px solid rgba(255,255,255,0.4);
  background:transparent;
  color:#fff;
}

/* Teal filled */
.btn-teal{
  border:none;
  background:linear-gradient(135deg,#00c9b8 0%,#009fd4 100%);
  color:#fff;
}

.arr{
  width:28px;height:28px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.arr-g{background:rgba(255,255,255,0.18);}
.arr-t{background:rgba(255,255,255,0.22);}
.arr svg{stroke:#fff;display:block;}

/* Responsive */
@media(max-width:560px){
  .cta-card{padding:32px 24px;}
  .cta-btns{flex-direction:column;}
  body{padding:24px 16px;}
}


.cta-wrap{width:90%;margin: 60px;
}

.cta-card{
  position:relative;
  border-radius:20px;
  overflow:hidden;
  padding:clamp(32px,5vw,52px) clamp(28px,5vw,60px);
  /* Deep blue base */
  background-image:url('/images/cta-new.png');
  background-repeat: no-repeat;
  background-size: cover;
}

/* ── CSS-only wave layers ── */
.cta-card::before{
  content:'';
  position:absolute;
  inset:0;
 
  z-index:0;
}

/* left fade so text stays readable */
.cta-card::after{
  content:'';
  position:absolute;
  inset:0;
 
  z-index:0;
}

/* ── Content ── */
.cta-content{
  position:relative;
  z-index:1;
  max-width:580px;
}

.cta-label{
  font-size:12px;font-weight:600;
  color:rgba(255,255,255,0.65);
  letter-spacing:0.04em;margin-bottom:10px;
}
.cta-heading{
  font-size:clamp(20px,3vw,34px);font-weight:700;
  color:#fff;line-height:1.25;margin-bottom:12px;
}
.cta-sub{
  font-size:clamp(12px,1.2vw,14px);font-weight:400;
  color:rgba(255,255,255,0.6);line-height:1.6;
  max-width:480px;margin-bottom:28px;
}

/* ── Buttons ── */
.cta-btns{display:flex;flex-wrap:wrap;gap:14px;}

.btn-pill{
  display:inline-flex;align-items:center;gap:10px;
  border-radius:50px;padding:10px 22px 10px 10px;
  font-size:13px;font-weight:600; font-family: 'Gilroy', sans-serif;
  cursor:pointer;text-decoration:none;
  transition:transform .2s,box-shadow .2s;
  white-space:nowrap;
}
.btn-pill:hover{transform:translateY(-1px);box-shadow:0 6px 20px rgba(0,0,0,0.25);}

/* ghost outline */
.btn-ghost{
  border:1.5px solid rgba(255,255,255,0.45);
  background:transparent;color:#fff;
}
.btn-ghost:hover{border-color:rgba(255,255,255,0.85);}

/* teal filled */
.btn-teal{
  border:none;
  background:linear-gradient(135deg,#00c6b8,#0099d4);
  color:#fff;
}

.arr{
  width:28px;height:28px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
  font-size:15px;line-height:1;
}
.arr-ghost{background: linear-gradient(-84.15deg, #13c5b8, #2a44b0);}
.arr-teal{background: white;color: black;}

/* ── Responsive ── */
@media(max-width:600px){
  .cta-btns{flex-direction:column;width:100%;}
  .btn-pill{justify-content:flex-start;}
}

<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:system-ui,sans-serif;background:#fff}
.gom-wrap{display:flex;border:0.5px solid #dde3ea;border-radius:12px;overflow:hidden;min-height:460px;background:#fff}
.gom-map-panel{flex:1;position:relative;background:#f0f7fc;overflow:hidden;min-height:460px}
.gom-map-img-layer{position:absolute;inset:0;width:100%;height:100%}
.gom-map-img-layer img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 0.4s ease;pointer-events:none;display:block}
.gom-map-img-layer img.gom-active{opacity:1}
canvas#gom-overlay{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:2}
.gom-hotspot-layer{position:absolute;inset:0;z-index:3}
.gom-hs{position:absolute;cursor:pointer}
.gom-flag-layer{position:absolute;inset:0;z-index:4;pointer-events:none}
.gom-pin{
  position:absolute;
  width:34px;height:34px;
  border-radius:50%;
  border:2.5px solid #fff;
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  transform:translate(-50%,-50%);
  cursor:pointer;
  pointer-events:all;
  transition:transform 0.15s,box-shadow 0.15s,opacity 0.25s;
  box-shadow:0 2px 8px rgba(0,0,0,0.22);
}
.gom-pin:hover{transform:translate(-50%,-50%) scale(1.25);box-shadow:0 4px 16px rgba(14,124,191,0.35)}
.gom-pin.gom-dim{opacity:0.12;pointer-events:none}
.gom-pin.gom-hidden{opacity:0;pointer-events:none}
.gom-back-btn{position:absolute;top:12px;left:50%;transform:translateX(-50%);z-index:10;display:none;align-items:center;gap:6px;padding:7px 18px;background:#1a8fcf;color:#fff;border:none;border-radius:20px;font-size:12px;font-weight:500;cursor:pointer;white-space:nowrap;font-family:system-ui,sans-serif;box-shadow:0 2px 10px rgba(14,124,191,0.3)}
.gom-back-btn.gom-show{display:inline-flex}
.gom-back-btn:hover{background:#0d5f8f}
.gom-tooltip{position:absolute;background:#fff;border:0.5px solid #ccc;border-radius:6px;padding:4px 10px;font-size:11px;font-weight:500;color:#333;pointer-events:none;display:none;white-space:nowrap;z-index:20;box-shadow:0 2px 8px rgba(0,0,0,0.1)}

/* SIDEBAR */
.gom-sidebar{width:290px;flex-shrink:0;border-left:0.5px solid #dde3ea;background:#fff;overflow-y:auto;display:flex;flex-direction:column}

/* HQ PANEL */
.gom-sb-hq{padding:24px;display:flex;flex-direction:column;gap:0}
.gom-sb-hq .gom-hq-label{font-size:10px;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#1a8fcf;margin-bottom:14px}
.gom-hq-item{padding:14px 0;border-bottom:0.5px solid #eef0f3;display:flex;flex-direction:column;gap:3px}
.gom-hq-item:last-child{border-bottom:none}
.gom-hq-flag-name{display:flex;align-items:center;gap:8px;margin-bottom:4px}
.gom-hq-flag{font-size:18px}
.gom-hq-country{font-size:13px;font-weight:600;color:#111}
.gom-hq-city{font-size:12px;font-weight:500;color:#333;margin-bottom:1px}
.gom-hq-addr{font-size:11px;color:#777;line-height:1.55;margin-bottom:4px}
.gom-map-link{display:inline-flex;align-items:center;gap:3px;font-size:11px;font-weight:500;color:#1a8fcf;text-decoration:none;border:none;background:none;cursor:pointer;padding:0;font-family:system-ui,sans-serif}
.gom-map-link:hover{opacity:0.7}

/* DETAIL PANEL — flex column so header is fixed, list scrolls */
.gom-sb-detail{display:none;flex-direction:column;height:100%}
.gom-sb-detail.gom-active{display:flex}

.gom-sb-detail-header{padding:16px 20px 0 20px;flex-shrink:0}
.gom-sb-header{display:flex;align-items:center;gap:10px;padding:12px 20px 12px 20px;border-bottom:0.5px solid #eee;flex-shrink:0}
.gom-sb-flag-img{width:36px;height:36px;border-radius:50%;border:1.5px solid #eee;object-fit:cover}
.gom-sb-name{font-size:14px;font-weight:600;color:#222}
.gom-sb-office-count{font-size:10px;font-weight:400;color:#aaa;margin-left:4px}

/* Scrollable office list */
.gom-office-list{flex:1;overflow-y:auto;padding:14px 20px 20px 20px;min-height:0}
.gom-office-list::-webkit-scrollbar{width:4px}
.gom-office-list::-webkit-scrollbar-track{background:transparent}
.gom-office-list::-webkit-scrollbar-thumb{background:#d0dbe6;border-radius:2px}
.gom-office-list::-webkit-scrollbar-thumb:hover{background:#a0b4c2}

.gom-office-item{margin-bottom:14px;padding-bottom:14px;border-bottom:0.5px solid #eee}
.gom-office-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
.gom-office-city{font-size:13px;font-weight:600;color:#222;margin-bottom:3px}
.gom-office-addr{font-size:11px;color:#666;line-height:1.55;margin-bottom:5px}
.gom-back-to-hq{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:500;color:#999;background:none;border:none;cursor:pointer;padding:0 0 8px 0;font-family:system-ui,sans-serif}
.gom-back-to-hq:hover{color:#1a8fcf}

@media(max-width:640px){.gom-wrap{flex-direction:column}.gom-sidebar{width:100%;border-left:none;border-top:0.5px solid #eee;min-height:200px}.gom-map-panel{min-height:280px}}
</style>
 </style>
</head>

<body>

  <!-- NAV -->
  
<?php include 'header.php'; ?>

  <!-- HERO -->
  <section class="hero">

    <!-- VIDEO BACKGROUND — replace src with your actual global/earth video -->
    <video class="hero-video" autoplay muted loop playsinline poster="">
      <source src="/images/Digital.mp4" type="video/mp4"/>
      <!-- Fallback: if no video, the globe CSS below renders -->
    </video>

    <!-- CSS Globe (visible as fallback / layered behind video) -->
  

    <!-- Ambient light rays -->
    <div class="hero-rays"></div>

    <!-- Gradient overlay for legibility -->
    <div class="hero-overlay"></div>

    <!-- Main content -->
    <div class="hero-content">
      <h1>Precision IT that keeps<br/>operations resilient, secure, and<br/>always ready to scale</h1>

      <p>Teceze delivers managed IT, cybersecurity, cloud, and procurement capabilities engineered for reliability, security, and operational continuity across global environments.</p>

      <!-- Search / prompt bar -->
      <div class="search-bar">
        <span class="search-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </span>
        <input class="search-input" type="text" placeholder="Tell us your IT challenge…"/>
        <div class="search-actions">
          <button class="mic-btn" title="Voice input">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
          </button>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="book-btn">
  <svg class="phone-icon" width="16" height="16" viewBox="0 0 24 24" fill="white">
    <path d="M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011-.24c1.12.37 2.33.57 3.59.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.07 22 2 13.93 2 3.5a1 1 0 011-1H6.5a1 1 0 011 1c0 1.26.2 2.47.57 3.59a1 1 0 01-.25 1l-2.2 2.2z"/>
  </svg>
  <span class="btn-text">Book A Consultation</span>
</a>
          <button class="send-btn" title="Send">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Watermark TECEZE logo at bottom -->
    
    <!-- Replace with actual large watermark image: <img class="watermark-logo" src="teceze-watermark.png" alt=""> -->
   <div class="watermark-logo">
  <img src="/images/Union.png" alt="" draggable="false"/>

</div>

  </section>
  

  <!-- FAB cluster -->
  <div class="fab-cluster">
    <button class="fab" title="Help">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
    </button>
    <button class="fab" title="Chat">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
    </button>
  </div>



 <section class="tc2-section">
  <div class="tc2-wrap">

    <!-- LEFT: Image -->
    <div class="tc2-img-col">
      <img id="tc2MainImg"
        src="/images/vision.png"
        alt="Our Vision"/>
      <div class="tc2-badge">
        <div class="tc2-badge-label" id="tc2BadgeLabel">Our Vision</div>
        <p class="tc2-badge-text" id="tc2BadgeText">To be a trusted global technology partner for organizations seeking secure, scalable, and future‑ready IT solutions.</p>
      </div>
    </div>

    <!-- RIGHT: Content -->
    <div class="tc2-content-col">
      <p class="tc2-eyebrow">Who We Are</p>
      <h2 class="tc2-headline">
        <strong>A global technology partner focused on operational resilience, security, and scalable growth.</strong>
        <span> Teceze aligns technology with business outcomes through deep expertise, responsive execution, and strategic partnerships.</span>
      </h2>

      <div class="tc2-btn-group">
        <a href="https://teal-mule-553916.hostingersite.com/about.php" class="tc2-btn tc2-btn-primary">
          <span class="tc2-btn-circle">
            <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="#fff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          About Teceze
        </a>
        <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="tc2-btn tc2-btn-outline">
          <span class="tc2-btn-circle">
            <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Let's Connect
        </a>
      </div>

      <!-- Tabs -->
      <div class="tc2-tab-list">

        <div class="tc2-tab-item tc2-active" data-tc2="vision">
          <span class="tc2-tab-label">Our Vision</span>
          <div class="tc2-thumb">
            <img src="/images/vision.png" alt="Vision"/>
          </div>
        </div>

        <div class="tc2-tab-item" data-tc2="mission">
          <span class="tc2-tab-label">Our Mission</span>
          <div class="tc2-thumb">
            <img src="/images/mision-img.png" alt="Mission"/>
          </div>
        </div>

        <div class="tc2-tab-item" data-tc2="values">
          <span class="tc2-tab-label">Our Values</span>
          <div class="tc2-thumb">
            <img src="/images/values-img.png" alt="Values"/>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="tcs3-root">

  <div class="tcs3-bg"></div>

  <div class="tcs3-wrap">

    <!-- Top row -->
    <div class="tcs3-top">
      <div class="tcs3-eyebrow-col">
        <p class="tcs3-eyebrow">Proven outcomes backed by scale,<br>consistency, and execution excellence.</p>
      </div>
      <h2 class="tcs3-headline">
        <strong>From long-term client relationships to large-scale project delivery,</strong>
        Teceze is built on responsiveness, capability, and real business outcomes.
      </h2>
    </div>

    <!-- Bento grid -->
    <div class="tcs3-grid">

      <!-- COL 1: Single unified tall card -->
      <div class="tcs3-card tcs3-card-left">
        <div class="tcs3-left-text">
          <span class="tcs3-num">
            <span id="tcs3-n1">0</span>+
          </span>
          <span class="tcs3-num-sub">Clients Supported</span>
          <span class="tcs3-desc">
            Trusted by over 1000 clients worldwide for
            <strong>delivering reliable and high-quality solutions.</strong>
          </span>
        </div>
        <div class="tcs3-left-photo">
          <img
            src="/images/technical.png"
            alt="Client professional"
          />
        </div>
      </div>

      <!-- COL 2 top: Projects -->
      <div class="tcs3-card tcs3-card-projects">
        <span class="tcs3-desc">
          Delivering <strong>innovative and scalable projects</strong>
          that drive real business impact.
        </span>
        <div>
          <span class="tcs3-label">Projects Delivered</span>
          <span class="tcs3-num">
            <span id="tcs3-n2">0</span>+
          </span>
        </div>
      </div>

      <!-- COL 2 bottom: Partners -->
      <div class="tcs3-card tcs3-card-partners">
        <div>
          <span class="tcs3-label">Technology Partners</span>
          <span class="tcs3-num">
            <span id="tcs3-n3">0</span>+
          </span>
        </div>
        <span class="tcs3-desc">
          Collaborating with <strong>trusted technology partners</strong>
          to build secure and high-performing solutions.
        </span>
      </div>

      <!-- COL 3: Technical resources — image bg -->
      <div class="tcs3-card tcs3-card-technical">
        <img
          src="/images/support.png"
          alt="Technical team"
        />
        <div class="tcs3-tech-overlay"></div>
        <div class="tcs3-tech-caption">
          <span class="tcs3-label">Technical Resources</span>
          <span class="tcs3-num">
            <span id="tcs3-n4">0</span>+
          </span>
          <span class="tcs3-desc">
            Backed by <strong>experienced technical professionals</strong>
            committed to quality and excellence.
          </span>
        </div>
      </div>

    </div><!-- /tcs3-grid -->
  </div><!-- /tcs3-wrap -->
</section>
<div class="x-svc" id="xSvc">
  <div class="x-svc__track" id="xTrack">

    <!-- Slide 1 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>Comprehensive technology services are designed to secure operations, optimize</strong> performance, and support long term scalability across evolving business environments.</p>
        <div class="x-svc__svc-title">Cybersecurity Services</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">Strengthen resilience with risk assessments, monitoring, incident response, compliance support, and security led transformation.</p>
        
        <a href="https://teal-mule-553916.hostingersite.com/Cybersecurity.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">01</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 33.png" alt="Cybersecurity"></div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>Scalable cloud infrastructure engineered to accelerate digital transformation,</strong> reduce overhead, and deliver enterprise-grade reliability across all environments.</p>
        <div class="x-svc__svc-title">Cloud Solutions</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">Migrate, manage, and optimize your cloud ecosystem with hybrid strategies, cost governance, and continuous performance tuning.</p>
        
        <!--<button class="x-svc__btn"><span class="x-svc__btn-icon"><svg width="12" height="12" viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></span>Explore More</button>-->
        <a href="https://teal-mule-553916.hostingersite.com/CloudInfratructure.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">02</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 32.png" alt="Cloud"></div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>Data-driven intelligence platforms that turn raw information into actionable insights,</strong> powering smarter decisions and competitive advantage at scale.</p>
        <div class="x-svc__svc-title">Global & Procurement</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">Build robust data pipelines, real-time dashboards, and predictive models that unify your business intelligence across every touchpoint.</p>
       
        <!--<button class="x-svc__btn"><span class="x-svc__btn-icon"><svg width="12" height="12" viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></span>Explore More</button>-->
        <a href="https://teal-mule-553916.hostingersite.com/global_procurement.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">03</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 34.png" alt="Analytics"></div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>End-to-end managed IT services that keep your operations running 24/7,</strong> minimizing downtime and freeing your team to focus on core business goals.</p>
        <div class="x-svc__svc-title">Managed IT Services</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">Proactive monitoring, helpdesk support, patch management, and infrastructure management delivered by certified specialists round the clock.</p>
       
        <!--<button class="x-svc__btn"><span class="x-svc__btn-icon"><svg width="12" height="12" viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></span>Explore More</button>-->
        <a href="https://teal-mule-553916.hostingersite.com/Managed_it.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">04</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 33.png" alt="Managed IT"></div>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>Intelligent automation and AI solutions that streamline workflows, cut costs,</strong> and unlock new capabilities through machine learning and process orchestration.</p>
        <div class="x-svc__svc-title">Application Development</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">Deploy AI-powered bots, process automation, and smart integrations that reduce manual effort and accelerate operational throughput.</p>
        
        <!--<button class="x-svc__btn"><span class="x-svc__btn-icon"><svg width="12" height="12" viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></span>Explore More</button>-->
          <a href="https://teal-mule-553916.hostingersite.com/application.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">05</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 33.png" alt="AI"></div>
      </div>
    </div>

    <!-- Slide 6 -->
    <div class="x-svc__slide">
      <div class="x-svc__left">
        <div class="x-svc__title">Services</div>
        <p class="x-svc__desc"><strong>Holistic digital transformation programs aligned to your strategy,</strong> culture, and customer experience, delivering measurable outcomes at every stage.</p>
        <div class="x-svc__svc-title">Digital IT Workspace</div>
        <div class="x-svc__accent"></div>
        <p class="x-svc__svc-desc">From roadmap to rollout, our transformation specialists help you modernize legacy systems, adopt new platforms, and drive organization-wide change.</p>
       
        <!--<button class="x-svc__btn"><span class="x-svc__btn-icon"><svg width="12" height="12" viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></span>Explore More</button>-->
        
         <a href="https://teal-mule-553916.hostingersite.com/digital_workspace.php" class="x-svc__btn">
  <span class="x-svc__btn-icon">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M2 6h8M6 2l4 4-4 4"/>
    </svg>
  </span>
  Explore More
</a>
      </div>
      <div class="x-svc__right">
        <div class="x-svc__counter"><span class="x-svc__cnum">06</span><span class="x-svc__ctotal">/06</span></div>
        <div class="x-svc__img-wrap"><img src="/images/Rectangle 33.png" alt="Digital Transformation"></div>
      </div>
    </div>

  </div>
  
</div>
<div class="tc4__inner">
  <div class="tc4__top">
    <p class="tc4__label">Powered By Strong<br>Technology Partnerships</p>
    <p class="tc4__heading">
      <strong>Backed by a strong ecosystem of technology partners,</strong> Teceze enables faster execution through secure, scalable, and future-ready capabilities.
    </p>
  </div>
</div>

<!-- Full-width marquee (outside inner so it bleeds edge to edge) -->
<div class="tc4__marquee-wrap">
  <div class="tc4__marquee-track">

    <!-- Set 1 -->
    <div class="tc4__marquee-set">
      <div class="tc4__logo-item"><img src="/images/Mask group-01.png" alt="Exela Technologies"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-1.png" alt="Focus"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-2.png" alt="HCLTech"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-3.png" alt="Infosys"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-4.png" alt="Photon"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-5.png" alt="Publicis Sapient"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-6.png" alt="Stripe"></div>
    </div>

    <!-- Set 2 (duplicate for seamless loop) -->
    <div class="tc4__marquee-set">
      <div class="tc4__logo-item"><img src="/images/Mask group-7.png" alt="Exela Technologies"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-8.png" alt="Focus"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-9.png" alt="HCLTech"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-10.png" alt="Infosys"></div>
      <div class="tc4__logo-item"><img src="/images/Mask group-11.png" alt="Photon"></div>
      
    </div>

  </div>
</div>


<section class="tc4-section">
<div class="tc4__inner">
  <div class="tc4__footer">
    <a href="https://teal-mule-553916.hostingersite.com/alliances.php" class="tc4__btn">
      <span class="tc4__btn-icon">
        <svg width="13" height="13" viewBox="0 0 13 13"><path d="M2 6.5h9M6.5 2l4.5 4.5-4.5 4.5"/></svg>
      </span>
      Explore Partnerships
    </a>
  </div>
</div>

</section>
<br>
<br>



<div class="tc5">
  <div class="tc5__inner">

    <!-- Left: image + overlay text -->
    <div class="tc5__left">
      <img src="/images/Frame 15666.png" alt="Security Strategy">
      <div class="tc5__left-text">
        <p class="tc5__left-tag">Get In Touch</p>
        <h2 class="tc5__left-title">Let's Strengthen Your Security Strategy</h2>
        <p class="tc5__left-sub">Schedule a personalized consultation with our alliance experts.</p>
      </div>
    </div>

    <!-- Right: form -->
    

      <!-- First & Last Name -->
     <div class="tc5__right">
  

  <div class="contact-form">
    <iframe 
      aria-label="Contact us now"
      frameborder="0"
      style="height:600px;width:100%;border:none;"
      src="https://forms.zohopublic.com/FormsWorking/form/Contactusnow/formperma/xf8H-0yPN2b0htwf3avvn98bxsgNYtPywaYfdgwYQgU">
    </iframe>
  </div>

</div>
</div>
<section class="cs-section">

  <!-- Watermark -->
   <div class="ins7-bg-watermark">
        <img src="/images/Vector (3).png" alt="Latest Insights Decor">
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



<section class="tc6-section">
<div class="tc6">
  <div class="tc6__inner">

    <p class="tc6__top-label">Trusted by organizations that demand reliability, speed, and accountability.</p>

    <!-- Slides wrapper -->
    <div id="tc6Wrap">

      <div class="tc6__grid" id="tc6Grid">
        <div class="tc6__left" id="tc6Left"><!-- content injected by JS --></div>
        <div class="tc6__right">
          <div class="tc6__img-wrap"><img id="tc6Img" src="/images/testimonal.png" alt="Client"></div>
          <div class="tc6__bottom">
            <div class="tc6__dots" id="tc6Dots"></div>
            <div style="display:flex;align-items:center;gap:20px;">
              <div class="tc6__counter">
                <span class="tc6__counter-num" id="tc6Num">01</span>
                <span class="tc6__counter-total" id="tc6Total">/05</span>
              </div>
              <div class="tc6__nav">
                <button class="tc6__nav-btn" id="tc6Prev">
                  <svg width="14" height="14" viewBox="0 0 14 14"><path d="M9 2L4 7l5 5"/></svg>
                </button>
                <button class="tc6__nav-btn" id="tc6Next">
                  <svg width="14" height="14" viewBox="0 0 14 14"><path d="M5 2l5 5-5 5"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>
 <div class="banner">
    <div class="label">
      <p>Global Delivery.<br>Local Responsiveness.</p>
    </div>

    <div class="content">
      <p>
        <strong>With offices, delivery capabilities, and partner networks across key regions, Teceze delivers consistent execution</strong>
        across regions through coordinated global delivery and local responsiveness.
      </p>
    </div>
  </div>

<div id="gom-root"><div class="gom-wrap">
  <div class="gom-map-panel" id="gom-mapPanel">
    <div class="gom-map-img-layer" id="gom-imgLayer">
      <img id="gom-img-world"               class="gom-active" src="images/world-map.png"           alt="World map">
      <img id="gom-img-asia-hover"          src="images/asia-hover.png"           alt="Asia hover">
      <img id="gom-img-asia"                src="images/asia-zoom.png"            alt="Asia zoomed">
      <img id="gom-img-europe-hover"        src="images/europe-hover.png"         alt="Europe hover">
      <img id="gom-img-europe"              src="images/europe-zoom.png"          alt="Europe zoomed">
      <img id="gom-img-north-america-hover" src="images/north-america-hover.png"  alt="North America hover">
      <img id="gom-img-north-america"       src="images/north-america-zoom.png"   alt="North America zoomed">
      <img id="gom-img-south-america-hover" src="images/south-america-hover.png"  alt="South America hover">
      <img id="gom-img-south-america"       src="images/south-america-zoom.png"   alt="South America zoomed">
      <img id="gom-img-africa-hover"        src="images/africa-hover.png"         alt="Africa hover">
      <img id="gom-img-africa"              src="images/africa-zoom.png"          alt="Africa zoomed">
      <img id="gom-img-oceania-hover"       src="images/australia-hover.png"      alt="Australia hover">
      <img id="gom-img-oceania"             src="images/australia-zoom.png"       alt="Australia zoomed">
    </div>

    <canvas id="gom-overlay"></canvas>

    <div class="gom-hotspot-layer" id="gom-hotspotLayer">
      <div class="gom-hs" data-region="north-america" data-label="North America"
           style="left:3%;top:8%;width:25%;height:55%"
           data-poly="3,8 28,8 28,35 22,55 18,63 8,63 3,48"></div>
      <div class="gom-hs" data-region="south-america" data-label="South America"
           style="left:22%;top:62%;width:15%;height:34%"
           data-poly="15,62 30,62 30,82 26,96 18,96 14,80"></div>
      <div class="gom-hs" data-region="europe" data-label="Europe"
           style="left:45%;top:6%;width:16%;height:34%"
           data-poly="38,6 54,6 54,28 50,40 42,40 38,26"></div>
      <div class="gom-hs" data-region="africa" data-label="Africa"
           style="left:43%;top:42%;width:13%;height:43%"
           data-poly="38,34 51,34 51,64 47,80 42,80 38,62"></div>
      <div class="gom-hs" data-region="asia" data-label="Asia"
           style="left:59%;top:5%;width:25%;height:52%"
           data-poly="51,5 85,5 85,42 77,57 62,57 51,40"></div>
      <div class="gom-hs" data-region="oceania" data-label="Australia"
           style="left:78%;top:72%;width:11%;height:20%"
           data-poly="72,66 90,66 90,94 80,94 72,82"></div>
    </div>

    <div class="gom-flag-layer" id="gom-flagLayer">

      <!-- ASIA -->
      <div class="gom-pin" data-key="india"       data-region="asia"
           data-world-left="68"   data-world-top="55"
           data-zoom-left="39"    data-zoom-top="74"
           style="left:68%;top:55%;background-image:url(https://flagcdn.com/w40/in.png);"></div>
      <div class="gom-pin" data-key="uae"         data-region="asia"
           data-world-left="60.5" data-world-top="52.1"
           data-zoom-left="28.8"  data-zoom-top="70.6"
           style="left:60.5%;top:52.1%;background-image:url(https://flagcdn.com/w40/ae.png);"></div>
      <div class="gom-pin" data-key="lk"          data-region="asia"
           data-world-left="69.0" data-world-top="63"
           data-zoom-left="40.6"  data-zoom-top="84"
           style="left:69.0%;top:63%;background-image:url(https://flagcdn.com/w40/lk.png);"></div>
      <div class="gom-pin" data-key="sg"          data-region="asia"
           data-world-left="75.5" data-world-top="62.6"
           data-zoom-left="46.9"  data-zoom-top="80.3"
           style="left:75.5%;top:62.6%;background-image:url(https://flagcdn.com/w40/sg.png);"></div>
      <div class="gom-pin" data-key="cn-shanghai" data-region="asia"
           data-world-left="81.0" data-world-top="40.0"
           data-zoom-left="52.7"  data-zoom-top="55.0"
           style="left:81.0%;top:40.0%;background-image:url(https://flagcdn.com/w40/cn.png);"></div>
      <div class="gom-pin" data-key="cn-shenzhen" data-region="asia"
           data-world-left="77.5" data-world-top="49.5"
           data-zoom-left="50.5"  data-zoom-top="66.0"
           style="left:77.5%;top:49.5%;background-image:url(https://flagcdn.com/w40/cn.png);"></div>
      <div class="gom-pin" data-key="kr"          data-region="asia-east"
           data-world-left="84.5" data-world-top="43.5"
           style="left:84.5%;top:43.5%;background-image:url(https://flagcdn.com/w40/kr.png);"></div>
      <div class="gom-pin" data-key="jp"          data-region="asia-east"
           data-world-left="88.5" data-world-top="38.0"
           style="left:88.5%;top:38.0%;background-image:url(https://flagcdn.com/w40/jp.png);"></div>

      <!-- EUROPE -->
      <div class="gom-pin" data-key="uk"  data-region="europe"
           data-world-left="45.5" data-world-top="26.4"
           data-zoom-left="43.0"  data-zoom-top="49.0"
           style="left:45.5%;top:26.4%;background-image:url(https://flagcdn.com/w40/gb.png);"></div>
      <div class="gom-pin" data-key="dk"  data-region="europe"
           data-world-left="48.5" data-world-top="22.5"
           data-zoom-left="50.0"  data-zoom-top="47.0"
           style="left:48.5%;top:22.5%;background-image:url(https://flagcdn.com/w40/dk.png);"></div>
      <div class="gom-pin" data-key="se"  data-region="europe"
           data-world-left="52.0" data-world-top="19.5"
           data-zoom-left="55.0"  data-zoom-top="37.0"
           style="left:52.0%;top:19.5%;background-image:url(https://flagcdn.com/w40/se.png);"></div>
      <div class="gom-pin" data-key="de"  data-region="europe"
           data-world-left="52.5" data-world-top="28.4"
           data-zoom-left="56.5"  data-zoom-top="60.0"
           style="left:52.5%;top:28.4%;background-image:url(https://flagcdn.com/w40/de.png);"></div>
      <div class="gom-pin" data-key="fr"  data-region="europe"
           data-world-left="45.5" data-world-top="39.6"
           data-zoom-left="43.0"  data-zoom-top="75.0"
           style="left:45.5%;top:39.6%;background-image:url(https://flagcdn.com/w40/fr.png);"></div>
      <div class="gom-pin" data-key="be"  data-region="europe"
           data-world-left="48.5" data-world-top="33.0"
           data-zoom-left="49.5"  data-zoom-top="59.0"
           style="left:48.5%;top:33.0%;background-image:url(https://flagcdn.com/w40/be.png);"></div>
      <div class="gom-pin" data-key="it"  data-region="europe"
           data-world-left="43.0" data-world-top="33.5"
           data-zoom-left="40.5"  data-zoom-top="58.0"
           style="left:43.0%;top:33.5%;background-image:url(https://flagcdn.com/w40/it.png);"></div>
      <div class="gom-pin" data-key="gr"  data-region="europe"
           data-world-left="50.0" data-world-top="40.0"
           data-zoom-left="51.5"  data-zoom-top="73.0"
           style="left:50.0%;top:40%;background-image:url(https://flagcdn.com/w40/gr.png);"></div>
      <div class="gom-pin" data-key="ro"  data-region="europe"
           data-world-left="53.5" data-world-top="35.9"
           data-zoom-left="60.0"  data-zoom-top="72.0"
           style="left:53.5%;top:35.9%;background-image:url(https://flagcdn.com/w40/ro.png);"></div>

      <!-- AFRICA -->
      <div class="gom-pin" data-key="ng"  data-region="africa"
           data-world-left="49.0" data-world-top="60.0"
           data-zoom-left="44.0"  data-zoom-top="45.0"
           style="left:49%;top:60%;background-image:url(https://flagcdn.com/w40/ng.png);"></div>
      <div class="gom-pin" data-key="za"  data-region="africa"
           data-world-left="53.0" data-world-top="80.0"
           data-zoom-left="52.0"  data-zoom-top="84.0"
           style="left:53.0%;top:80.0%;background-image:url(https://flagcdn.com/w40/za.png);"></div>

      <!-- NORTH AMERICA -->
      <div class="gom-pin" data-key="us"  data-region="north-america"
           data-world-left="24.5" data-world-top="41.5"
           data-zoom-left="55.0"  data-zoom-top="67.0"
           style="left:24.5%;top:41.5%;background-image:url(https://flagcdn.com/w40/us.png);"></div>
      <div class="gom-pin" data-key="ca"  data-region="north-america"
           data-world-left="22.0" data-world-top="34.4"
           data-zoom-left="50.0"  data-zoom-top="59.0"
           style="left:22.0%;top:34.4%;background-image:url(https://flagcdn.com/w40/ca.png);"></div>
      <div class="gom-pin" data-key="mx"  data-region="north-america"
           data-world-left="22.5" data-world-top="51.9"
           data-zoom-left="48.5"  data-zoom-top="80.0"
           style="left:22.5%;top:51.9%;background-image:url(https://flagcdn.com/w40/mx.png);"></div>

      <!-- SOUTH AMERICA -->
      <div class="gom-pin" data-key="br"  data-region="south-america"
           data-world-left="33.0" data-world-top="76.9"
           data-zoom-left="55.0"  data-zoom-top="47.0"
           style="left:33.0%;top:76.9%;background-image:url(https://flagcdn.com/w40/br.png);"></div>

      <!-- OCEANIA -->
      <div class="gom-pin" data-key="au"  data-region="oceania"
           data-world-left="84.5" data-world-top="78.5"
           data-zoom-left="49.0"  data-zoom-top="55.0"
           style="left:84.5%;top:78.5%;background-image:url(https://flagcdn.com/w40/au.png);"></div>

    </div>

    <button class="gom-back-btn" id="gom-backBtn" onclick="gomResetMap()">← World map</button>
    <div class="gom-tooltip" id="gom-tooltip"></div>
  </div>

  <!-- SIDEBAR -->
  <div class="gom-sidebar">

    <div class="gom-sb-hq" id="gom-sbHQ">
      <div class="gom-hq-label">🏢 Headquarters</div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇮🇳</span><span class="gom-hq-country">India</span></div>
        <div class="gom-hq-city">Chennai (HQ)</div>
        <div class="gom-hq-addr">SAI Tech Park, 105, Anna Salai, Little Mount, Guindy, Chennai, Tamil Nadu 600032</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=SAI+Tech+Park+105+Anna+Salai+Little+Mount+Guindy+Chennai+Tamil+Nadu+600032" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇬🇧</span><span class="gom-hq-country">United Kingdom</span></div>
        <div class="gom-hq-city">London</div>
        <div class="gom-hq-addr">14 Dock Street, London, E1 8JP, United Kingdom</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=14+Dock+Street+London+E1+8JP+United+Kingdom" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇺🇸</span><span class="gom-hq-country">United States</span></div>
        <div class="gom-hq-city">Charlotte</div>
        <div class="gom-hq-addr">4115 Rose Lake Dr, Suite F, Charlotte, NC 28217, USA</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=4115+Rose+Lake+Dr+Suite+F+Charlotte+NC+28217+USA" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item" style="border-bottom:none;padding-bottom:0">
        <div style="font-size:11px;color:#aaa;margin-top:4px">Click any region or flag on the map to explore all offices.</div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════
         INDIA — 7 offices, scrollable list
    ══════════════════════════════════════════ -->
    <div class="gom-sb-detail" id="gom-d-india">
      <div class="gom-sb-detail-header">
        <button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button>
      </div>
      <div class="gom-sb-header">
        <img class="gom-sb-flag-img" src="https://flagcdn.com/w40/in.png" alt="India">
        <div class="gom-sb-name">India <span class="gom-sb-office-count">7 offices · scroll ↓</span></div>
      </div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Chennai</div>
          <div class="gom-office-addr">SAI Tech Park, 105, Anna Salai, Little Mount, Guindy, Chennai, Tamil Nadu 600032</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=SAI+Tech+Park+105+Anna+Salai+Little+Mount+Guindy+Chennai+Tamil+Nadu+600032" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Bangalore</div>
          <div class="gom-office-addr">9, 1st A Cross Rd, Kaverappa Layout, Kadubeesanahalli, Bengaluru 560103</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=9+1st+A+Cross+Rd+Kaverappa+Layout+Kadubeesanahalli+Bengaluru+560103" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Hyderabad</div>
          <div class="gom-office-addr">Awfis Hitech City N Heights, Level 1, Phase 2, N-Heights, Plot No. 38, Siddiq Nagar, HITEC City, Hyderabad, Telangana – 500081</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Awfis+Hitech+City+N+Heights+Plot+38+Siddiq+Nagar+HITEC+City+Hyderabad+Telangana+500081" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Pune</div>
          <div class="gom-office-addr">2nd Floor, Business Bay, Baner-Sus Road, Near Audi Showroom, Pashan Baner, Pune – 411045</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Business+Bay+Baner-Sus+Road+Near+Audi+Showroom+Pashan+Baner+Pune+411045" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Ahmedabad</div>
          <div class="gom-office-addr">13th Floor, Gala Empire, Opp. T.V. Tower, Drive In Rd, Memnagar, Ahmedabad, Gujarat 380052</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Gala+Empire+Drive+In+Road+Memnagar+Ahmedabad+Gujarat+380052" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Noida</div>
          <div class="gom-office-addr">3rd Floor, Awfis Majestic Omnia, Block A, Sector 4, Noida, Uttar Pradesh – 201301</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Awfis+Majestic+Omnia+Block+A+Sector+4+Noida+Uttar+Pradesh+201301" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Navi Mumbai</div>
          <div class="gom-office-addr">C Wing, 10th Floor, Empire Tower, Reliable Cloud City, Gavate Wadi, MIDC, Airoli, Navi Mumbai, Maharashtra – 400708</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Empire+Tower+Reliable+Cloud+City+Gavate+Wadi+MIDC+Airoli+Navi+Mumbai+Maharashtra+400708" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UAE -->
    <div class="gom-sb-detail" id="gom-d-uae">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ae.png" alt="UAE"><div class="gom-sb-name">United Arab Emirates</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Dubai</div>
          <div class="gom-office-addr">43-44, Dubai Municipality Building - Bur Dubai - Al Fahidi P.O. box - 67,<br> + 971 600 521530</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Dubai+Municipality+Building+Bur+Dubai+Al+Fahidi+Dubai+UAE" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SRI LANKA -->
    <div class="gom-sb-detail" id="gom-d-lk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/lk.png" alt="Sri Lanka"><div class="gom-sb-name">Sri Lanka</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Jaffna</div>
          <div class="gom-office-addr">LIC Towers, 4th Floor, 34-36, Sir Vaithilingam Duraishamy Veethy, Jaffna 40000</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=LIC+Towers+34+Sir+Vaithilingam+Duraishamy+Veethy+Jaffna+40000+Sri+Lanka" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SINGAPORE -->
    <div class="gom-sb-detail" id="gom-d-sg">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/sg.png" alt="Singapore"><div class="gom-sb-name">Singapore</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Singapore</div>
          <div class="gom-office-addr">32 Pekin Street #05-01, Singapore 048762</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=32+Pekin+Street+Singapore+048762" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CHINA SHANGHAI -->
    <div class="gom-sb-detail" id="gom-d-cn-shanghai">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/cn.png" alt="China"><div class="gom-sb-name">China — Shanghai</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Shanghai</div>
          <div class="gom-office-addr">Room JT24907, Building 4, Block B, No. 925 Yecheng Road, Jiading Industrial Zone, Shanghai</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=925+Yecheng+Road+Jiading+Industrial+Zone+Shanghai+China" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CHINA HONG KONG -->
    <div class="gom-sb-detail" id="gom-d-cn-shenzhen">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/cn.png" alt="China"><div class="gom-sb-name">China — Hong Kong</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Hong Kong</div>
          <div class="gom-office-addr">Teceze Consultancy Hong Kong Ltd, Rm 7B, One Capital Place, 18 Luard Road, Wan Chai</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=One+Capital+Place+18+Luard+Road+Wan+Chai+Hong+Kong" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SOUTH KOREA -->
    <div class="gom-sb-detail" id="gom-d-kr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/kr.png" alt="South Korea"><div class="gom-sb-name">South Korea</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Seoul</div>
          <div class="gom-office-addr">H1070, 116, Teheran-ro, Gangnam-gu, Seoul, Republic of Korea</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=116+Teheran-ro+Gangnam-gu+Seoul+Republic+of+Korea" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- JAPAN -->
    <div class="gom-sb-detail" id="gom-d-jp">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/jp.png" alt="Japan"><div class="gom-sb-name">Japan</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Tokyo</div>
          <div class="gom-office-addr">3-3-23-1507 Nishi-Shinjuku, Shinjuku, Tokyo, Japan</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=3-3-23+Nishi-Shinjuku+Shinjuku+Tokyo+Japan" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UNITED KINGDOM -->
    <div class="gom-sb-detail" id="gom-d-uk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/gb.png" alt="UK"><div class="gom-sb-name">United Kingdom</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">London</div>
          <div class="gom-office-addr">14 Dock Street, London, E1 8JP, United Kingdom</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=14+Dock+Street+London+E1+8JP+United+Kingdom" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Manchester</div>
          <div class="gom-office-addr">First Floor, Swan Buildings, 20 Swan Street, Manchester, M4 5JW</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Swan+Buildings+20+Swan+Street+Manchester+M4+5JW+United+Kingdom" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- DENMARK -->
    <div class="gom-sb-detail" id="gom-d-dk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/dk.png" alt="Denmark"><div class="gom-sb-name">Denmark</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Copenhagen</div>
          <div class="gom-office-addr">Amaliegade 6, 2. tv, 1256 København K, Denmark</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Amaliegade+6+1256+Kobenhavn+K+Denmark" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SWEDEN -->
    <div class="gom-sb-detail" id="gom-d-se">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/se.png" alt="Sweden"><div class="gom-sb-name">Sweden</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Stockholm</div>
          <div class="gom-office-addr">Kammakargatan 47, 111 24 Stockholm</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Kammakargatan+47+111+24+Stockholm+Sweden" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- GERMANY -->
    <div class="gom-sb-detail" id="gom-d-de">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/de.png" alt="Germany"><div class="gom-sb-name">Germany</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Berlin</div>
          <div class="gom-office-addr">Eichborndamm 167 G55, Berlin – 13403</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Eichborndamm+167+Berlin+13403+Germany" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- FRANCE -->
    <div class="gom-sb-detail" id="gom-d-fr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/fr.png" alt="France"><div class="gom-sb-name">France</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Paris</div>
          <div class="gom-office-addr">34 Avenue des Champs-Élysées, Paris, France – 75008</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=34+Avenue+des+Champs+Elysees+Paris+75008+France" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- BELGIUM -->
    <div class="gom-sb-detail" id="gom-d-be">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/be.png" alt="Belgium"><div class="gom-sb-name">Belgium</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Erembodegem</div>
          <div class="gom-office-addr">Brusselbaan 37, 9320 Erembodegem, Belgium</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Brusselbaan+37+9320+Erembodegem+Belgium" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- ITALY -->
    <div class="gom-sb-detail" id="gom-d-it">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/it.png" alt="Italy"><div class="gom-sb-name">Italy</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Rome</div>
          <div class="gom-office-addr">Viale Giulio Cesare 71, 00192 Rome, Italy</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Viale+Giulio+Cesare+71+00192+Rome+Italy" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- GREECE -->
    <div class="gom-sb-detail" id="gom-d-gr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/gr.png" alt="Greece"><div class="gom-sb-name">Greece</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Thessaloniki</div>
          <div class="gom-office-addr">Straitsa 2, Thessaloniki, 57001, Greece</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Straitsa+2+Thessaloniki+57001+Greece" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- ROMANIA -->
    <div class="gom-sb-detail" id="gom-d-ro">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ro.png" alt="Romania"><div class="gom-sb-name">Romania</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Bucharest</div>
          <div class="gom-office-addr">Teceze Romania S.R.L, Strada Buzești Nr. 75-77, Camera 7, Etaj 9, Sectorul 1, București</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Strada+Buzesti+75-77+Sectorul+1+Bucuresti+Romania" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- NIGERIA -->
    <div class="gom-sb-detail" id="gom-d-ng">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ng.png" alt="Nigeria"><div class="gom-sb-name">Nigeria</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Abuja</div>
          <div class="gom-office-addr">Suite 7, Last Floor, Rhema Mall, Beside Navy Quarter, Kado, Abuja, FCT, Nigeria</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Rhema+Mall+Kado+Abuja+FCT+Nigeria" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SOUTH AFRICA -->
    <div class="gom-sb-detail" id="gom-d-za">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/za.png" alt="South Africa"><div class="gom-sb-name">South Africa</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Cape Town</div>
          <div class="gom-office-addr">184 Upper Buitenkant Street, Oranjezicht, Cape Town, South Africa</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=184+Upper+Buitenkant+Street+Oranjezicht+Cape+Town+South+Africa" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UNITED STATES -->
    <div class="gom-sb-detail" id="gom-d-us">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/us.png" alt="USA"><div class="gom-sb-name">United States</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Charlotte, NC</div>
          <div class="gom-office-addr">4115 Rose Lake Dr, Suite F, Charlotte, NC 28217, USA</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=4115+Rose+Lake+Dr+Suite+F+Charlotte+NC+28217+USA" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CANADA -->
    <div class="gom-sb-detail" id="gom-d-ca">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ca.png" alt="Canada"><div class="gom-sb-name">Canada</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Oakville, Ontario</div>
          <div class="gom-office-addr">71 Speers Road, Unit 20, Oakville, ON L6K 0J2</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=71+Speers+Road+Unit+20+Oakville+ON+L6K+0J2+Canada" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- MEXICO -->
    <div class="gom-sb-detail" id="gom-d-mx">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/mx.png" alt="Mexico"><div class="gom-sb-name">Mexico</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Playa del Carmen</div>
          <div class="gom-office-addr">Calle 7 Sur Diagonal, Manzana 29, Lote 3, Local 301, Plaza Paseo Coba, Playacar Fase II, Playa del Carmen, Quintana Roo 77710</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Plaza+Paseo+Coba+Playacar+Fase+II+Playa+del+Carmen+Quintana+Roo+77710+Mexico" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- BRAZIL -->
    <div class="gom-sb-detail" id="gom-d-br">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/br.png" alt="Brazil"><div class="gom-sb-name">Brazil</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">São Paulo</div>
          <div class="gom-office-addr">Avenida Paulista, 352, Conjunto 77, Bela Vista, São Paulo / SP, CEP 01310-905</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Avenida+Paulista+352+Bela+Vista+Sao+Paulo+SP+01310-905+Brazil" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- AUSTRALIA -->
    <div class="gom-sb-detail" id="gom-d-au">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/au.png" alt="Australia"><div class="gom-sb-name">Australia</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Sydney</div>
          <div class="gom-office-addr">Level 10, 171 Clarence Street, Sydney, NSW 2000</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=171+Clarence+Street+Sydney+NSW+2000+Australia" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

  </div>
</div></div>


<div class="ins-wrap">
  <div class="ins7-bg-watermark">
        <img src="/images/insight.png" alt="Latest Insights Decor">
    </div>
  <div class="ins-container">

    <!-- Featured Card with <img> -->
    <div class="ins-featured">
      <img src="/images/blog 1.png" alt="Cybersecurity Forecast 2026"
           onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(135deg,#1a3a4a,#0081a7)'">
      <div class="ins-featured-overlay">
        <span class="ins-label">Dec 16, 2025 · IT Service</span>
        <h2>Cybersecurity Forecast 2026: What IT Leaders Should Prioritize</h2>
        <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="ins-view-btn">
          <span class="ins-dot">→</span> View All Blogs
        </a>
      </div>
    </div>

    <!-- Slider -->
    <div class="ins-slider-outer">
      <div class="ins-slider-track" id="insTrack">

        <!-- Slide 1 — 2 blogs with <img> -->
        <div class="ins-slide">
          <div class="ins-blog-card">
            <div class="ins-blog-thumb">
              <img src="/images/blog 2.png" alt="Managed IT Services"
                   onerror="this.style.background='#d0e8f0'; this.style.display='none'">
            </div>
            <div class="ins-blog-info">
              <span class="ins-blog-date">Dec 16, 2025</span>
              <h3>How Managed IT Services Improve Business Continuity</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="ins-blog-link">Explore More →</a>
            </div>
          </div>
          <div class="ins-blog-card">
            <div class="ins-blog-thumb">
              <img src="/images/blog 3.png" alt="Cybersecurity Forecast"
                   onerror="this.style.background='#d0e8f0'; this.style.display='none'">
            </div>
            <div class="ins-blog-info">
              <span class="ins-blog-date">Jan 4, 2026</span>
              <h3>Cybersecurity Forecast 2026: New Threats and More</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="ins-blog-link">Explore More →</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 — 2 blogs with <img> -->
        <div class="ins-slide">
          <div class="ins-blog-card">
            <div class="ins-blog-thumb">
              <img src="/images/blog 3.png" alt="Cloud Integration"
                   onerror="this.style.background='#d0e8f0'; this.style.display='none'">
            </div>
            <div class="ins-blog-info">
              <span class="ins-blog-date">Feb 1, 2026</span>
              <h3>Cloud Integration for Scaling Enterprises</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="ins-blog-link">Explore More →</a>
            </div>
          </div>
          <div class="ins-blog-card">
            <div class="ins-blog-thumb">
              <img src="/images/blog 2.png" alt="Data Protection"
                   onerror="this.style.background='#d0e8f0'; this.style.display='none'">
            </div>
            <div class="ins-blog-info">
              <span class="ins-blog-date">Feb 15, 2026</span>
              <h3>Data Protection Trends in the Modern Era</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="ins-blog-link">Explore More →</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <div class="ins-footer">
      <div class="ins-counter"><span id="insCur">01</span><span>/02</span></div>
      <div class="ins-nav">
        <div class="ins-btn" id="insPrev">←</div>
        <div class="ins-btn" id="insNext">→</div>
      </div>
    </div>

  <div class="ins-explore">
      
  <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="ins-explore-btn">
    <span class="ins-dot">→</span> Explore All Insights
  </a>
</div>

  </div>
</div>


<div class="cta-wrap">
  <div class="cta-card">
    <div class="cta-content">
      <p class="cta-label">Get In Touch</p>
      <h2 class="cta-heading">Start building a more secure,<br>resilient IT environment.</h2>
      <p class="cta-sub">Whether the focus is on strengthening security, improving operations, modernizing infrastructure, or simplifying procurement, the right expertise is ready to engage.</p>
      <div class="cta-btns">
        <a href="https://teal-mule-553916.hostingersite.com/Leadership.php" class="btn-pill btn-ghost">
          <span class="arr arr-ghost">&#8594;</span>
          Contact Our Team
        </a>
        <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="btn-pill btn-teal">
          <span class="arr arr-teal">&#8594;</span>
          Book a Consultation
        </a>
      </div>
    </div>
  </div>
</div>


  <script>
    // If video loads successfully, increase its opacity
    const video = document.querySelector('.hero-video');
    if (video) {
      video.addEventListener('canplay', () => {
        video.style.opacity = '0.65';
      });
      // If video fails, fallback globe is already visible
      video.addEventListener('error', () => {
        video.style.display = 'none';
      });
    }



    (function () {
  var tc2Data = {
    vision: {
      img:   '/images/vision.png',
      label: 'Our Vision',
      text:  'To be a trusted global technology partner for organizations seeking secure, scalable, and future‑ready IT solutions.'
    },
    mission: {
      img:   '/images/mision-img.png',
      label: 'Our Mission',
      text:  'Delivering technology services that simplify complexity, accelerate transformation, and create long‑term business value.'
    },
    values: {
      img:   '/images/values-img.png',
      label: 'Our Values',
      text:  'Integrity, innovation, and partnership — the principles guiding every decision and every client relationship we build.'
    }
  };

  var tabs       = document.querySelectorAll('.tc2-tab-item');
  var mainImg    = document.getElementById('tc2MainImg');
  var badgeLabel = document.getElementById('tc2BadgeLabel');
  var badgeText  = document.getElementById('tc2BadgeText');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) { t.classList.remove('tc2-active'); });
      tab.classList.add('tc2-active');

      var d = tc2Data[tab.dataset.tc2];
      mainImg.classList.add('tc2-hide');
      setTimeout(function () {
        mainImg.src            = d.img;
        mainImg.alt            = d.label;
        badgeLabel.textContent = d.label;
        badgeText.textContent  = d.text;
        mainImg.classList.remove('tc2-hide');
      }, 300);
    });
  });
})();



(function () {
  'use strict';

  var TCS3_COUNTERS = [
    { id: 'tcs3-n1', target: 1000 },
    { id: 'tcs3-n2', target: 5000 },
    { id: 'tcs3-n3', target: 100  },
    { id: 'tcs3-n4', target: 4500 }
  ];

  function tcs3Animate(el, target) {
    var duration = 1800;
    var startTime = null;
    function tick(now) {
      if (!startTime) startTime = now;
      var elapsed  = Math.min((now - startTime) / duration, 1);
      var eased    = 1 - Math.pow(1 - elapsed, 3); /* ease-out cubic */
      el.textContent = Math.floor(eased * target).toLocaleString();
      if (elapsed < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  function tcs3Init() {
    var els = TCS3_COUNTERS.map(function (c) {
      return { el: document.getElementById(c.id), target: c.target };
    }).filter(function (c) { return c.el; });

    if (!els.length) return;

    if ('IntersectionObserver' in window) {
      var seen = new Set();
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          els.forEach(function (c) {
            if (!seen.has(c.el) && entry.target.contains(c.el)) {
              seen.add(c.el);
              tcs3Animate(c.el, c.target);
            }
          });
        });
      }, { threshold: 0.25 });

      /* observe the section root */
      var root = document.querySelector('.tcs3-root');
      if (root) io.observe(root);
    } else {
      /* fallback — run immediately */
      els.forEach(function (c) { tcs3Animate(c.el, c.target); });
    }
  }

  /* run after DOM is ready */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', tcs3Init);
  } else {
    tcs3Init();
  }
})();



(function(){
  const TOTAL=6,DURATION=4500;
  let current=0,elapsed=0,lastTick=null,paused=false;
  const track=document.getElementById('xTrack');
  const fill=document.getElementById('xFill');
  const wrap=document.getElementById('xSvc');
  function goTo(idx){
    current=(idx+TOTAL)%TOTAL;
    track.style.transform='translateX(-'+(current*100)+'%)';
    elapsed=0;lastTick=performance.now();
  }
  wrap.addEventListener('mouseenter',()=>{paused=true;});
  wrap.addEventListener('mouseleave',()=>{paused=false;lastTick=performance.now();});
  function tick(now){
    if(!paused){
      const delta=now-(lastTick||now);
      elapsed+=delta;
      fill.style.width=Math.min((elapsed/DURATION)*100,100)+'%';
      if(elapsed>=DURATION)goTo(current+1);
    }
    lastTick=now;
    requestAnimationFrame(tick);
  }
  lastTick=performance.now();
  requestAnimationFrame(tick);
})();



(function(){
  const slides = [
    {
      quote: '"Teceze helped us strengthen our IT operations with proactive support, better visibility, and a team that understood both speed and accountability."',
      name: 'David Miller',
      role: 'Chief Technology Officer',
      company: 'Nexora Global Solutions',
      avatar: '/images/testimonal.png',
      img: '/images/testimonal.png'
    },
   
    {
      quote: '"Their managed IT services gave us the confidence to scale without worrying about downtime. Truly a world-class partner."',
      name: 'James Okafor',
      role: 'Head of Operations',
      company: 'Pinnacle Ventures',
      avatar: '/images/Rectangle 37.png',
      img: '/images/Rectangle 37.png'
    },
    {
      quote: '"From roadmap to rollout, Teceze delivered a digital transformation that our entire team felt. The impact was immediate and measurable."',
      name: 'Marcus Webb',
      role: 'CEO',
      company: 'Apex Digital Group',
      avatar: '/images/Rectangle 36.png',
      img: '/images/Rectangle 36.png'
    }
  ];

  const TOTAL = slides.length;
  let current = 0;
  let autoTimer = null;

  const leftEl  = document.getElementById('tc6Left');
  const imgEl   = document.getElementById('tc6Img');
  const numEl   = document.getElementById('tc6Num');
  const totalEl = document.getElementById('tc6Total');
  const dotsEl  = document.getElementById('tc6Dots');
  const prevBtn = document.getElementById('tc6Prev');
  const nextBtn = document.getElementById('tc6Next');

  // Build dots
  for(let i=0;i<TOTAL;i++){
    const d = document.createElement('div');
    d.className = 'tc6__dot' + (i===0?' tc6--dot-active':'');
    d.addEventListener('click',()=>goTo(i));
    dotsEl.appendChild(d);
  }

  function render(idx){
    const s = slides[idx];
    leftEl.innerHTML = `
      <span class="tc6__quote-icon">
  <img src="https://teal-mule-553916.hostingersite.com/images/Financial_Union.png" alt="Quote Icon">
</span>
      <p class="tc6__quote-text">${s.quote}</p>
      <div class="tc6__author">
        <img class="tc6__author-avatar" src="${s.avatar}" alt="${s.name}">
        <div>
          <div class="tc6__author-name">${s.name}</div>
          <div class="tc6__author-role">${s.role}</div>
          <div class="tc6__author-company">${s.company}</div>
        </div>
      </div>
      <a href="https://teal-mule-553916.hostingersite.com/blog.php">
      <button class="tc6__btn">
        <span class="tc6__btn-icon"><svg width="13" height="13" viewBox="0 0 13 13"><path d="M2 6.5h9M6.5 2l4.5 4.5-4.5 4.5"/></svg></span>
        Read Client Stories
      </button></a>
    `;
    imgEl.src = s.img;
    imgEl.alt = s.name;
    numEl.textContent = String(idx+1).padStart(2,'0');
    totalEl.textContent = '/'+String(TOTAL).padStart(2,'0');
    dotsEl.querySelectorAll('.tc6__dot').forEach((d,i)=>{
      d.classList.toggle('tc6--dot-active', i===idx);
    });
  }

  function goTo(idx){
    current = (idx + TOTAL) % TOTAL;
    render(current);
    resetAuto();
  }

  function resetAuto(){
    clearInterval(autoTimer);
    autoTimer = setInterval(()=>goTo(current+1), 5000);
  }

  prevBtn.addEventListener('click',()=>goTo(current-1));
  nextBtn.addEventListener('click',()=>goTo(current+1));

  render(0);
  resetAuto();
})();



    (function () {
    const track   = document.getElementById('insTrack');
    const slides  = track.querySelectorAll('.ins-slide');
    const total   = slides.length;
    const curEl   = document.getElementById('insCur');
    let   current = 0;

    function goTo(idx) {
      current = (idx + total) % total;
      track.style.transform = 'translateX(-' + (current * 100) + '%)';
      curEl.textContent = (current + 1) < 10 ? '0' + (current + 1) : '' + (current + 1);
    }

    document.getElementById('insNext').addEventListener('click', function () { goTo(current + 1); });
    document.getElementById('insPrev').addEventListener('click', function () { goTo(current - 1); });
  })();



  // location

  (function() {
  var panel    = document.getElementById('gom-mapPanel');
  var canvas   = document.getElementById('gom-overlay');
  var ctx      = canvas.getContext('2d');
  var tooltip  = document.getElementById('gom-tooltip');
  var backBtn  = document.getElementById('gom-backBtn');
  var sbHQ     = document.getElementById('gom-sbHQ');

  var activeRegion = null;

  function resizeCanvas() {
    canvas.width  = panel.offsetWidth;
    canvas.height = panel.offsetHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', function() {
    resizeCanvas();
    if (activeRegion) clearCanvas();
  });

  function parsePoly(str) {
    return str.trim().split(/\s+/).map(function(p) {
      return p.split(',').map(Number);
    });
  }

  function drawHighlight(polyStr) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var W = canvas.width, H = canvas.height;
    var pts = parsePoly(polyStr);
    ctx.fillStyle = 'rgba(14,100,170,0.18)';
    ctx.fillRect(0, 0, W, H);
    ctx.save();
    ctx.globalCompositeOperation = 'destination-out';
    ctx.beginPath();
    pts.forEach(function(pt, i) {
      var x = (pt[0] / 100) * W, y = (pt[1] / 100) * H;
      i === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
    });
    ctx.closePath();
    ctx.fill();
    ctx.restore();
  }

  function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }

  function showImage(key, isHover) {
    document.querySelectorAll('#gom-root .gom-map-img-layer img').forEach(function(img) {
      img.classList.remove('gom-active');
    });
    var imgId = 'gom-img-' + key;
    if (isHover) {
      var hoverId = 'gom-img-' + key + '-hover';
      if (document.getElementById(hoverId)) imgId = hoverId;
    }
    var target = document.getElementById(imgId);
    if (target) {
      target.classList.add('gom-active');
    } else {
      document.getElementById('gom-img-world').classList.add('gom-active');
    }
  }

  function showPinsFor(region) {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      var pinRegion = p.dataset.region;
      if (pinRegion !== region) {
        p.classList.add('gom-hidden');
      } else {
        p.classList.remove('gom-hidden');
        if (p.dataset.zoomLeft && p.dataset.zoomTop) {
          p.style.left = p.dataset.zoomLeft + '%';
          p.style.top  = p.dataset.zoomTop + '%';
        }
      }
    });
  }

  function restorePins() {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      p.classList.remove('gom-hidden', 'gom-dim');
      if (p.dataset.worldLeft && p.dataset.worldTop) {
        p.style.left = p.dataset.worldLeft + '%';
        p.style.top  = p.dataset.worldTop + '%';
      }
    });
  }

  function dimPinsExcept(region) {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      var pinRegion = p.dataset.region;
      if (pinRegion !== region) { p.classList.add('gom-dim'); } else { p.classList.remove('gom-dim'); }
    });
  }

  function hideAllDetails() {
    document.querySelectorAll('#gom-root .gom-sb-detail').forEach(function(e) {
      e.classList.remove('gom-active');
      var list = e.querySelector('.gom-office-list');
      if (list) list.scrollTop = 0;
    });
  }

  function showDetail(key) {
    hideAllDetails();
    sbHQ.style.display = 'none';
    var el = document.getElementById('gom-d-' + key);
    if (el) el.classList.add('gom-active');
  }

  window.gomResetSidebar = function() {
    hideAllDetails();
    sbHQ.style.display = 'flex';
  };

  document.querySelectorAll('#gom-root .gom-hs').forEach(function(hs) {
    var region = hs.dataset.region;
    var label  = hs.dataset.label;
    var poly   = hs.dataset.poly;

    hs.addEventListener('mouseenter', function() {
      if (activeRegion) return;
      drawHighlight(poly);
      dimPinsExcept(region);
      tooltip.textContent = label;
      tooltip.style.display = 'block';
      showImage(region, true);
    });
    hs.addEventListener('mousemove', function(e) {
      if (activeRegion) return;
      var rect = panel.getBoundingClientRect();
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    hs.addEventListener('mouseleave', function() {
      if (activeRegion) return;
      clearCanvas();
      restorePins();
      tooltip.style.display = 'none';
      showImage('world', false);
    });
    hs.addEventListener('click', function() {
      activeRegion = region;
      clearCanvas();
      tooltip.style.display = 'none';
      showImage(region, false);
      showPinsFor(region);
      backBtn.classList.add('gom-show');
    });
  });

  var countryNames = {
    india:'India', uae:'UAE', lk:'Sri Lanka', sg:'Singapore',
    'cn-shanghai':'China (Shanghai)', 'cn-shenzhen':'China (Hong Kong)',
    kr:'South Korea', jp:'Japan',
    uk:'United Kingdom', dk:'Denmark', se:'Sweden',
    de:'Germany', fr:'France', be:'Belgium', it:'Italy',
    gr:'Greece', ro:'Romania',
    ng:'Nigeria', za:'South Africa',
    us:'United States', ca:'Canada', mx:'Mexico', br:'Brazil',
    au:'Australia'
  };

  document.querySelectorAll('#gom-root .gom-pin').forEach(function(pin) {
    pin.addEventListener('mouseenter', function(e) {
      var rect = panel.getBoundingClientRect();
      tooltip.textContent = countryNames[pin.dataset.key] || pin.dataset.key;
      tooltip.style.display = 'block';
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    pin.addEventListener('mousemove', function(e) {
      var rect = panel.getBoundingClientRect();
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    pin.addEventListener('mouseleave', function() {
      tooltip.style.display = 'none';
    });
    pin.addEventListener('click', function(e) {
      e.stopPropagation();
      showDetail(pin.dataset.key);
    });
  });

  window.gomResetMap = function() {
    activeRegion = null;
    clearCanvas();
    showImage('world', false);
    restorePins();
    backBtn.classList.remove('gom-show');
    tooltip.style.display = 'none';
    window.gomResetSidebar();
  };

})();

(function(){
  var SLIDES = [
    {
      meta: 'Strengthening Enterprise Cybersecurity',
      leftTitle: 'Implemented AI-driven security to reduce threats',
      leftLight: ' and improve real-time response.',
      cardTag: 'Driving Data-Driven Decisions',
      cardTitle: 'Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.',
      image: '/images/3.png'
    },
    {
      meta: 'Cloud Infrastructure',
      leftTitle: 'Built scalable cloud architecture',
      leftLight: ' enabling 99.9% uptime and global reach.',
      cardTag: 'Cloud & Reliability',
      cardTitle: 'Designed and deployed multi-region cloud infrastructure to support enterprise-grade performance and business continuity.',
      image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=900&h=640&fit=crop'
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
  return dir === 'right'
    ? '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.3172 10.442L11.6922 16.067C11.5749 16.1843 11.4159 16.2502 11.25 16.2502C11.0841 16.2502 10.9251 16.1843 10.8078 16.067C10.6905 15.9498 10.6247 15.7907 10.6247 15.6249C10.6247 15.459 10.6905 15.2999 10.8078 15.1827L15.3664 10.6249H3.125C2.95924 10.6249 2.80027 10.559 2.68306 10.4418C2.56585 10.3246 2.5 10.1656 2.5 9.99986C2.5 9.8341 2.56585 9.67513 2.68306 9.55792C2.80027 9.44071 2.95924 9.37486 3.125 9.37486H15.3664L10.8078 4.81705C10.6905 4.69977 10.6247 4.54071 10.6247 4.37486C10.6247 4.20901 10.6905 4.04995 10.8078 3.93267C10.9251 3.8154 11.0841 3.74951 11.25 3.74951C11.4159 3.74951 11.5749 3.8154 11.6922 3.93267L17.3172 9.55767C17.3753 9.61572 17.4214 9.68465 17.4529 9.76052C17.4843 9.8364 17.5005 9.91772 17.5005 9.99986C17.5005 10.082 17.4843 10.1633 17.4529 10.2392C17.4214 10.3151 17.3753 10.384 17.3172 10.442Z" fill="currentColor"/></svg>'
    : '';
}

  function slideHTML(s){
    return '<div class="cs-slide"><img src="'+s.image+'" alt="'+s.cardTag+'"/><div class="cs-overlay"></div><div class="cs-card-body"><p class="cs-card-tag">'+s.cardTag+'</p><p class="cs-card-title">'+s.cardTitle+'</p><a href="https://teal-mule-553916.hostingersite.com/case_study_details_page.php" class="btn-case"><span class="arr-white">'+arrowSVG('right')+'</span>View Case Study</a></div></div>';
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


(function () {
  const track = document.getElementById('xTrack');
  const total = 6;
  let current = 0;
  let timer;

  function goTo(n) {
    current = (n + total) % total;
    track.style.transform = `translateX(-${current * 100}%)`;
    track.style.transition = 'transform 0.5s cubic-bezier(0.4,0,0.2,1)';
  }

  function startTimer() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), 4000);
  }

  // swipe support
  let startX = 0;
  track.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
    clearInterval(timer);
  }, { passive: true });

  track.addEventListener('touchend', e => {
    const diff = startX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 40) goTo(current + (diff > 0 ? 1 : -1));
    startTimer();
  });

  goTo(0);
  startTimer();
})();


  </script>
  
  <?php include 'footer.php'; ?>
</body>
</html>