<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
   <link rel="stylesheet" href="/assets/style.css">
  <title>About – Teceze</title>
  <style>
    /* GLOBAL RESETS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

@font-face {
  font-family: 'Gilroy';
  src: url('/font/Gilroy-Medium.woff2') format('woff2-variations'),
       url('/fonts/Gilroy-Medium.woff') format('woff');
  font-weight: 400 700;
  font-style: normal;
  font-display: swap;
}

h1 {
    
    font-size: 47px !important;}
    
    body {
      font-family: 'Gilroy', sans-serif;
      line-height: 1.6;
      color: #333;
      background: #fff;
    }

    /* ═══════════════════ SECTION 1: HERO ═══════════════════ */
        *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Gilroy', sans-serif;
    }

    /* ── Hero Banner ── */
    .hero-banner {
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 480px;
      display: flex;
      align-items: center;
      color: #fff;
      overflow: hidden;
    }

    .banner-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .banner-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to right,
        rgba(5, 15, 40, 0.78) 0%,
        rgba(5, 15, 40, 0.35) 100%
      );
      z-index: 0;
    }

    .banner-content {
      position: relative;
      z-index: 1;
      padding: 0 10%;
      max-width: 900px;
      width: 100%;
      padding-top: 104px;
    }

    .banner-breadcrumb {
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 2.5px;
      margin-bottom: 12px;
      color: #b4d2ff;
      font-weight: 500;
    }

    .banner-rule {
      width: min(700px, 80vw);
      height: 1px;
      background: linear-gradient(to right, rgba(255, 255, 255, 0.28), transparent);
      margin-bottom: 1.5rem;
    }

    .banner-content h1 {
      font-size: 50px;
      line-height: 1.1;
      margin-bottom: 20px;
      font-weight: 400;
    }

    .banner-subtitle {
      font-size: 16px;
      color: #dce9ff;
      margin-bottom: 32px;
      max-width: 600px;
      line-height: 1.7;
    }

    .banner-cta {
      display: inline-flex;
      align-items: center;
      padding: 12px 28px;
      border: 1.5px solid rgba(255, 255, 255, 0.85);
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      border-radius: 50px;
      letter-spacing: 0.3px;
      transition: background 0.25s ease, border-color 0.25s ease;
    }

    .banner-cta:hover {
      background: #3a72d0;
      border-color: #3a72d0;
    }

    /* ── Tablet ── */
    @media (max-width: 768px) {
      .hero-banner {
        height: auto;
        min-height: 100svh;
        padding: 100px 0 70px;
        align-items: flex-end;
      }

      .banner-content {
        padding: 0 6%;
      }

      .banner-content h1 {
        font-size: 50px;
      }

      .banner-subtitle {
        font-size: 15px;
        max-width: 100%;
      }

      .banner-cta {
      padding: 11px 24px;
      font-size: 13px;  
      display: inline-flex;
      align-items: center;
      padding: 12px 28px;
      border: 1px solid #fff;
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      border-radius: 4px;
      transition: 0.3s;
      border-radius: 50px;
    
      }
    }

    /* ── Mobile ── */
    @media (max-width: 480px) {
      .hero-banner {
        padding: 80px 0 56px;
      }

      .banner-content {
        padding: 0 5%;
      }

      .banner-breadcrumb {
        font-size: 11px;
        letter-spacing: 2px;
      }

      .banner-content h1 {
        font-size: 50px;;
      }

      .banner-subtitle {
        font-size: 14px;
      }

      .banner-cta {
        width: 100%;
        justify-content: center;
        text-align: center;
      }
    }
    

    .btn-cta:hover { background: #4a86e0; }

    /* ═══════════════════ SECTION 2: ABOUT PARA ═══════════════════ */
 .about {
  background: #ffffff;
  padding: 100px 24px; /* Increased padding for that airy feel */
  text-align: center;
}

.about-para {
  /* Using a clean Sans-Serif font similar to the image */
  font-family: 'Gilroy', sans-serif;
  font-size: 24px;       /* Adjusted size */
  line-height: 1.5;      /* Tightened line height to match image */
  max-width: 900px;      /* Slightly wider container */
  margin: 0 auto;
  color: #94a3b8;        /* Lighter grey for the bottom text */
  font-weight: 400;      /* Regular weight for bottom text */
}

.about-para strong {
  font-weight: 600;      /* Semi-bold weight */
  color: #030712;        /* Deep navy/black for the top text */
  /* Remove display: block so the text flows in the same paragraph */
}
    /* ═══════════════════ SECTION 3: INTERACTIVE SLIDER ═══════════════════ */
    .interactive-section {
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 600px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .bg-fallback {
      position: absolute;
      inset: 0;
      background: url('images/aboutus1.png') center/cover no-repeat;
      
      z-index: 0;
    }

    .overlay {
      position: absolute;
      inset: 0;
      
      z-index: 1;
    }

    .content-wrapper {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    /* NAV */
    nav {
      display: flex;
      border-bottom: 1px solid rgba(255,255,255,0.12);
      height: 80px;
    }

    .nav-slot {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .nav-slot + .nav-slot::before {
      content: '';
      position: absolute;
      left: 0;
      height: 40%;
      width: 1px;
      background: rgba(255,255,255,0.15);
    }

    .nav-label {
      font-size: 16px;
      cursor: pointer;
      color: rgba(180, 210, 255, 0.5);
      transition: 0.3s;
      white-space: nowrap;
    }

    .nav-slot.center .nav-label {
      color: #ffffff;
      font-weight: 700;
      font-size: 20px;
      cursor: default;
    }

    /* MAIN PANEL */
    .main-grid {
      flex: 1;
      display: grid;
      grid-template-columns: 1fr 1px 1fr;
      padding: 0 10%;
      align-items: center;
    }

    .left-panel { padding-right: 60px; }
    .right-panel { padding-left: 60px; }

    .slide-counter {
      display: flex;
      align-items: baseline;
      gap: 8px;
      margin-bottom: 20px;
    }

    .counter-big {
      font-size: 80px;
      font-weight: 700;
      color: rgba(100, 160, 255, 0.8);

      line-height: 1;
    }

    .counter-total {
      font-size: 24px;
      color: rgba(255,255,255,0.3);
    }

    .slide-title {
      font-size: 32px;
      font-weight: 700;
      color: #ffffff; 
      line-height: 1.3;
    }

    .divider-line {
      width: 1px;
      height: 250px;
      background: rgba(255,255,255,0.15);
    }

    .slide-desc {
      font-size: 17px;
      color: rgba(220, 235, 255, 0.8);
      line-height: 1.8;
      margin-bottom: 30px;
      max-width: 450px;
    }

    .nav-arrows { display: flex; gap: 15px; }

    .arrow-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.3);
      background: transparent;
      color: #fff;
      cursor: pointer;
      transition: 0.3s;
      font-size: 20px;
    }

    .arrow-btn:hover {
      background: #64a0ff;
      border-color: #64a0ff;
    }

    /* ANIMATION */
    .fade-zone {
      transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .fade-zone.out {
      opacity: 0;
      transform: translateY(20px);
    }

    /* MOBILE ADJUSTMENTS */
    @media (max-width: 850px) {
      .main-grid {
        grid-template-columns: 1fr;
        padding: 40px 20px;
        text-align: center;
      }
      .divider-line { display: none; }
      .left-panel, .right-panel { padding: 0; }
      .slide-counter { justify-content: center; }
      .slide-desc { margin: 20px auto; }
      .nav-arrows { justify-content: center; }
      .nav-label { font-size: 12px; }
      .nav-slot.center .nav-label { font-size: 14px; }
    }
    /* Shorten the right column width */
.tcz3-main-grid {
  grid-template-columns: 1fr 1fr; /* or try: 480px 1fr */
  max-width: 1100px; /* constrain overall width */
  margin: 0 auto;
  gap: 38px; /* reduce horizontal gap between image and text */
}

/* Reduce gap between headline and description */
.tcz3-headline {
  margin-bottom: 12px;
}

.tcz3-description {
  margin-top: 0;
}

/* If tcz3-right uses flex/grid, tighten its gap */
.tcz3-right {
  display: flex;
  flex-direction: column;
  gap: 12px; /* controls space between vision label, headline, description */
}

/* Optionally constrain the text block width */
.tcz3-top-content,
.tcz3-bottom-content {
  max-width: 520px;
}
    .tcz3-section {
  background: #051c3a;
  padding: 86px 48px;
  box-sizing: border-box;
  font-family: 'Gilroy', sans-serif;
  overflow: hidden;
}
.tcz3-top-label {
  font-size: clamp(20px, 3vw, 28px);
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 40px 0;
}
.tcz3-main-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: stretch;
}
.tcz3-img-wrap {
  height: 639px;
width: 100%;
position: relative;
border-radius: 20px;
object-fit: cover;
}
.tcz3-img-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
}
.tcz3-right {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 380px;
}
/* Big 01 — top right */
.tcz3-bg-num {
  position: absolute;
  top: -130px;
  right: 40px;
  font-size: clamp(160px, 22vw, 260px);
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(180deg, #1a7fa0 0%, #0d4e6a 50%, #062a3c 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  pointer-events: none;
  user-select: none;
  letter-spacing: -10px;
  z-index: 0;
}
.tcz3-top-content {
  position: relative;
  z-index: 1;
  padding-top: 8px;
}
.tcz3-vision-label {
  font-size: 13px;
  color: #7ab8d4;
  font-weight: 400;
  letter-spacing: 0.06em;
  margin: 0 0 10px 0;
}
.tcz3-headline {
  font-size: clamp(17px, 2.2vw, 23px);
  font-weight: 700;
  color: #ffffff;
  line-height: 1.4;
  margin: 0;
}
.tcz3-bottom-content {
  position: relative;
  z-index: 1;
}
.tcz3-description {
  font-size: 20px;
  color: #7a9cb8;
  line-height: 1.8;
  margin: 0;
}
@media (max-width: 620px) {
  .tcz3-section { padding: 36px 20px; }
  .tcz3-main-grid { grid-template-columns: 1fr; gap: 24px; }
  .tcz3-img-wrap { height: 240px; }
  .tcz3-right { min-height: 320px; }
  .tcz3-bg-num { font-size: 140px; top: -10px; right: -10px; }
}

  .vc-section *,
  .vc-section *::before,
  .vc-section *::after {
    box-sizing: border-box;
  }

  .vc-section {
    width: 100%;
    padding: 80px 32px;
    background: #0a1128;
    position: relative;
    overflow: hidden;
  }

  /* Background logo — faint watermark, always visible */
  .vc-bg-logo {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 440px;
    height: 440px;
    object-fit: contain;
    opacity: 0.07;
    pointer-events: none;
    user-select: none;
    display: block;
  }

  /* Grid layout */
  .vc-layout {
    display: grid;
    grid-template-columns: 1fr 220px 1fr;
    grid-template-rows: auto auto;
    gap: 24px;
    align-items: center;
    width: 100%;
    max-width: 960px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  /* Cards */
  .vc-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.10);
    border-radius: 14px;
    padding: 24px 22px;
    cursor: pointer;
    transition: border-color 0.35s ease, background 0.35s ease, transform 0.2s ease;
    position: relative;
    user-select: none;
    margin: 0;
  }

  @supports (backdrop-filter: blur(1px)) {
    .vc-card {
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }
  }

  .vc-card:hover {
    transform: translateY(-3px);
    border-color: rgba(255, 255, 255, 0.22);
  }

  .vc-card.vc-active {
    border-color: rgba(255, 255, 255, 0.42);
    background: rgba(255, 255, 255, 0.09);
  }

  /* Left accent bar */
  .vc-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 20%;
    bottom: 20%;
    width: 3px;
    border-radius: 0 2px 2px 0;
    background: transparent;
    transition: background 0.35s ease;
  }

  .vc-card.vc-active::before {
    background: rgba(120, 180, 255, 0.75);
  }

  /* Grid positions */
  .vc-card-1 { grid-column: 1; grid-row: 1; }
  .vc-card-2 { grid-column: 3; grid-row: 1; align-self: center; }
  .vc-card-3 { grid-column: 1; grid-row: 2; }

  .vc-card-icon {
    width: 34px;
    height: 34px;
    margin-bottom: 14px;
    display: block;
    opacity: 0.8;
  }

  .vc-card h3 {
    color: #dde5f7;
    font-size: 15px;
    font-weight: 600;
    margin: 0 0 10px 0;
    padding: 0;
    line-height: 1.3;
    letter-spacing: 0.01em;
    border: none;
    background: none;
    text-transform: none;
    text-decoration: none;
  }

  .vc-card p {
    color: rgba(190, 210, 240, 0.65);
    font-size: 13px;
    line-height: 1.7;
    margin: 0;
    padding: 0;
  }

  /* Logo center column */
  .vc-logo-center {
    grid-column: 2;
    grid-row: 1 / 3;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .vc-logo-wrap {
    width: 200px;
    height: 200px;
    position: relative;
    flex-shrink: 0;
  }

  /* All logo images stacked in the same space */
  .vc-logo-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
    display: block;
  }

  /* Default logo visible when no card selected */
  .vc-logo-img.vc-default {
    opacity: 1;
  }

  /* Active highlight image */
  .vc-logo-img.vc-visible {
    opacity: 1;
  }

  /* Tablet — 768px */
  @media (max-width: 768px) {
    .vc-layout {
      grid-template-columns: 1fr 170px 1fr;
      gap: 16px;
    }

    .vc-logo-wrap {
      width: 155px;
      height: 155px;
    }

    .vc-card {
      padding: 18px 16px;
    }

    .vc-card h3 { font-size: 13.5px; }
    .vc-card p  { font-size: 12px; }

    .vc-bg-logo {
      width: 300px;
      height: 300px;
    }
  }

  /* Mobile — 560px, single column */
  @media (max-width: 560px) {
    .vc-section {
      padding: 48px 20px;
    }

    .vc-layout {
      grid-template-columns: 1fr;
      grid-template-rows: auto;
      gap: 16px;
    }

    .vc-card-1      { grid-column: 1; grid-row: 1; }
    .vc-logo-center { grid-column: 1; grid-row: 2; justify-self: center; }
    .vc-card-2      { grid-column: 1; grid-row: 3; }
    .vc-card-3      { grid-column: 1; grid-row: 4; }

    .vc-logo-wrap {
      width: 130px;
      height: 130px;
    }

    .vc-bg-logo {
      width: 200px;
      height: 200px;
    }
  }
    :root {
  --primary-font: 'Gilroy-SemiBold', sans-serif;
  --text-white: #ffffff;
  --text-gray: #a0a0a0;
  --accent-blue: #00d1ff;
}

.hero-section {
  position: relative;
  width: 100%;
  height: 100vh;
  background: #050a10; /* Fallback color */
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  color: var(--text-white);
  font-family: 'Gilroy', sans-serif;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('/images/Frame 1566662921.png') center/cover no-repeat;
  z-index: 1;
}

.content-wrapper {
  position: relative;
  z-index: 2;
  width: 90%;
  max-width: 1400px;
  margin: 0 auto;
  padding-bottom: 60px;
}

/* Positioning the Pre-rendered Card Images */
.services-overlay {
  position: absolute;
  top: -450px; /* Adjust based on background visual */
  width: 100%;
  height: 400px;
}

.floating-card {
  position: absolute;
  width: 280px; /* Adjust size to match design */
  height: auto;
}

.pos-digital { left: 5%; top: 40%; }
.pos-app     { left: 25%; top: 10%; }
.pos-managed { right: 20%; top: 5%; }
.pos-cyber   { left: 45%; top: 45%; }
.pos-cloud   { right: 5%; top: 50%; }

/* Footer Layout */
.hero-footer {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  gap: 40px;
      margin-top: 319px;
}

.footer-left h2 {
  font-size: 2rem;
  line-height: 1.2;
  margin-bottom: 30px;
  font-weight: 600;
}

/* CTA Button Styling */
.cta-button {
  display: inline-flex;
  align-items: center;
  padding: 8px 24px 8px 8px;
  border: 1px solid rgba(255, 255, 255, 0.8);
  border-radius: 50px;
  color: white;
  text-decoration: none;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.icon-circle {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #0072ff, #00d1ff);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 15px;
}

.icon-circle svg {
  width: 20px;
  height: 20px;
}

.cta-button:hover {
  background: rgba(255, 255, 255, 0.1);
  transform: translateY(-2px);
}

/* Right Content */
.footer-right {
  max-width: 600px;
}

.footer-right p {
  font-size: 1.8rem;
  line-height: 1.4;
  color: var(--text-gray);
}

.footer-right strong {
  color: var(--text-white);
  font-weight: 600;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
  .hero-footer {
    flex-direction: column;
    align-items: flex-start;
  }
  .services-overlay {
    display: none; /* Hide or switch to grid on mobile */
  }
}



    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* ================================================
       CORE VALUES — cv2-* prefix
    ================================================ */

    .cv2-section {
      position: relative;
      width: 100%;
      min-height: 100vh;
      background-color: #07102b;
      font-family: 'Gilroy', sans-serif;
      color: #ffffff;
      overflow: hidden;
      padding: 60px 60px 80px;
    }

    /* ===== HEADING ===== */
    .cv2-heading {
      font-size: 30px;
      font-weight: 300;
      color: #ffffff;
      letter-spacing: -0.2px;
      position: relative;
      z-index: 3;
      margin-bottom: 0;
    }

    /* ================================================
       SPIRAL WRAP — absolutely centered
    ================================================ */
    .cv2-spiral-wrap {
      position: absolute;
      top: 40%;
      left: 35%;
      transform: translate(-28%, -46%);
      width: 68vw;
      max-width: 720px;
      aspect-ratio: 1;
      z-index: 1;
      pointer-events: none;
    }

    /* Each spiral image layer sits on top of each other */
    .cv2-spiral-wrap img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: contain;
      transition: opacity 0.5s ease;
    }

    /* Default — grey spiral always visible */
    .cv2-spiral-default { opacity: 1; }

    /* Coloured spirals — hidden by default */
    .cv2-spiral-card1 { opacity: 0; }
    .cv2-spiral-card2 { opacity: 0; }
    .cv2-spiral-card3 { opacity: 0; }

    /* Show correct spiral on card hover */
    .cv2-section:has(.cv2-card[data-card="1"]:hover) .cv2-spiral-default { opacity: 0; }
    .cv2-section:has(.cv2-card[data-card="1"]:hover) .cv2-spiral-card1  { opacity: 1; }

    .cv2-section:has(.cv2-card[data-card="2"]:hover) .cv2-spiral-default { opacity: 0; }
    .cv2-section:has(.cv2-card[data-card="2"]:hover) .cv2-spiral-card2  { opacity: 1; }

    .cv2-section:has(.cv2-card[data-card="3"]:hover) .cv2-spiral-default { opacity: 0; }
    .cv2-section:has(.cv2-card[data-card="3"]:hover) .cv2-spiral-card3  { opacity: 1; }

    /* ================================================
       CARDS CONTAINER
    ================================================ */
    .cv2-cards {
      position: relative;
      z-index: 3;
      width: 100%;
      min-height: 560px;
      margin-top: 50px;
    }

    /* ===== CARD BASE ===== */
    .cv2-card {
      position: absolute;
      width: 420px;
      border-radius: 14px;
      padding: 28px 28px 32px;
      cursor: default;
      overflow: hidden;
      transition:
        border-color 0.4s ease,
        transform 0.35s ease,
        box-shadow 0.4s ease;

      background: rgba(13, 22, 55, 0.60);
      border: 1px solid rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      box-shadow: 0 4px 24px rgba(0,0,0,0.25);
    }

    /* Glow blob — hidden by default */
    .cv2-card::before {
      content: '';
      position: absolute;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      top: -40px;
      right: -40px;
      opacity: 0;
      transition: opacity 0.45s ease;
      z-index: 0;
      pointer-events: none;
    }
.tcz-cs2__img-link{
        display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    font-weight: 600;
    color: white;
    border: 1.5px solid #d1d5db;
    border-radius: 50px;
    padding: 8px 18px;
    text-decoration: none;
    transition: 0.2s;
}
    /* Top sheen line */
    .cv2-card::after {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.15) 50%, transparent 100%);
      z-index: 1;
    }

    .cv2-card:hover {
      border-color: rgba(77, 160, 240, 0.40);
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(0,0,0,0.38), 0 0 0 1px rgba(77,160,240,0.15);
    }

    .cv2-card:hover::before {
      opacity: 1;
    }

    .cv2-card > * {
      position: relative;
      z-index: 2;
    }

    /* ===== CARD POSITIONS ===== */
    .cv2-card[data-card="1"] {
      top: 0;
      left: 0;
    }

    .cv2-card[data-card="2"] {
      top: 120px;
      right: 0;
      left: auto;
    }

    .cv2-card[data-card="3"] {
      top: 300px;
      left: 80px;
    }

    /* ===== ICON ===== */
    .cv2-card-icon {
      margin-bottom: 16px;
    }

    .cv2-card-icon svg {
      width: 28px;
      height: 28px;
      stroke: #ffffff;
      fill: none;
      stroke-width: 1.6;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke 0.3s ease;
    }

    .cv2-card:hover .cv2-card-icon svg {
      stroke: #4dd8e0;
    }

    /* ===== TITLE ===== */
    .cv2-card-title {
      font-size: 17px;
      font-weight: 500;
      color: #ffffff;
      line-height: 1.3;
      margin-bottom: 20px;
      letter-spacing: -0.1px;
    }

    /* ===== DESC ===== */
    .cv2-card-desc {
      font-size: 14px;
      font-weight: 400;
      line-height: 1.75;
      color: rgba(255, 255, 255, 0.58);
      transition: color 0.3s ease;
    }

    .cv2-card:hover .cv2-card-desc {
      color: rgba(255, 255, 255, 0.80);
    }

    /* ================================================
       RESPONSIVE — TABLET (max-width: 1024px)
    ================================================ */
    @media (max-width: 1024px) {
      .cv2-section {
        padding: 52px 36px 72px;
      }

      .cv2-card {
        width: 280px;
      }

      .cv2-card[data-card="2"] {
        right: 0;
        top: 100px;
      }

      .cv2-card[data-card="3"] {
        top: 280px;
        left: 40px;
      }

      .cv2-spiral-wrap {
        width: 80vw;
        transform: translate(-30%, -46%);
      }

      .cv2-cards {
        min-height: 520px;
      }
    }

    /* ================================================
       RESPONSIVE — MOBILE (max-width: 768px)
    ================================================ */
    @media (max-width: 768px) {
      .cv2-section {
        padding: 44px 24px 56px;
        min-height: auto;
      }

      .cv2-heading {
        font-size: 24px;
      }

      .cv2-spiral-wrap {
        width: 120vw;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.5;
      }

      .cv2-cards {
        position: relative;
        min-height: auto;
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-top: 32px;
      }

      .cv2-card {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        right: auto !important;
        width: 100% !important;
      }
    }

    /* ================================================
       RESPONSIVE — SMALL MOBILE (max-width: 480px)
    ================================================ */
    @media (max-width: 480px) {
      .cv2-section {
        padding: 36px 16px 48px;
      }

      .cv2-heading {
        font-size: 20px;
      }

      .cv2-card {
        padding: 22px 20px 26px;
      }

      .cv2-card-title {
        font-size: 18px;
      }

      .cv2-card-desc {
        font-size: 12.5px;
      }
    }
  </style>
</head>
<body>
    <?php include 'header.php'; ?>
  <div class="hero-banner">
    <img class="banner-bg" src="images/about.png" alt="About Teceze" />
    <div class="banner-overlay"></div>
    <div class="banner-content">
      <p class="banner-breadcrumb">Who we are</p>
      <div class="banner-rule"></div>
      <h1>Enabling Resilient, High-<br>Performance IT Environments<br> for Modern Enterprises</h1>
      <p class="banner-subtitle">
        Designed to help organizations simplify operations, strengthen security, and <br>accelerate growth through reliable managed IT services, cybersecurity, digital<br>workplace solutions, and expert technology support.
      </p>
      
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="banner-cta"><span class="ct-hero-btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>Connect With Us</a>
    </div>
  </div>

<section class="about">
  <p class="about-para">
    <strong>
      Teceze is a global IT solutions provider focused on modernizing technology
      environments with confidence. From infrastructure and managed services to
      cybersecurity and digital transformation, solutions are engineered to deliver
      scalability, efficiency,
    </strong>
    and cost-effective outcomes aligned to evolving business needs. Organizations 
    benefit from improved operational performance, stronger resilience, and technology 
    environments built for real-world execution and long-term growth.
  </p>
</section>

  <div class="interactive-section">
    <div class="bg-fallback"></div>
    <div class="overlay"></div>

    <div class="content-wrapper">
      <nav id="navBar"></nav>

      <div class="main-grid">
        <div class="left-panel fade-zone" id="leftPanel">
          <div class="slide-counter">
            <span class="counter-big" id="counterBig">01</span>
            <span class="counter-total" id="counterTotal">/03</span>
          </div>
          <h2 class="slide-title" id="slideTitle">Innovative Technology Solutions</h2>
        </div>

        <div class="divider-line"></div>

        <div class="right-panel fade-zone" id="rightPanel">
          <p class="slide-desc" id="slideDesc">Loading description...</p>
          <div class="nav-arrows">
            <button class="arrow-btn" id="prevBtn">←</button>
            <button class="arrow-btn" id="nextBtn">→</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="tcz3-section">
  <p class="tcz3-top-label">What Teceze?</p>

  <div class="tcz3-main-grid">

    <!-- LEFT: tall rectangular image -->
    <div class="tcz3-img-wrap">
      <img src="images/Frame 113-1.png" alt="About Us Image">
    </div>

    <!-- RIGHT: SVG 01 watermark + content layered above -->
    <div class="tcz3-right">

      <!-- Big gradient 01 SVG watermark at top right -->
      <div class="tcz3-bg-num" aria-hidden="true">
        <svg viewBox="0 0 320 280" width="320" height="280" xmlns="/images/">
          <defs>
            <linearGradient id="numGrad" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%"   stop-color="#1a7fa0"/>
              <stop offset="50%"  stop-color="#0d4e6a"/>
              <stop offset="100%" stop-color="#062a3c"/>
            </linearGradient>
          </defs>
          <text
            x="0"
            y="240"
            font-family="sans-serif"
            font-weight="900"
            font-size="260"
            fill="url(#numGrad)"
            letter-spacing="-16">01</text>
        </svg>
      </div>

      <!-- Top: Vision label + headline -->
      <div class="tcz3-top-content">
        <p class="tcz3-vision-label">Our Vision</p>
        <h3 class="tcz3-headline">To be a trusted global partner enabling secure, scalable, and high performance technology environments.</h3>
      </div>

      <!-- Bottom: description text -->
      <div class="tcz3-bottom-content">
        <p class="tcz3-description">At Teceze, our vision is to help organizations build stronger, more agile technology foundations that support sustainable growth. Aim to be a trusted partner for businesses seeking efficient, secure, and forward-looking IT solutions in a fast changing digital world.</p>
      </div>

    </div>
  </div>
</section>

<section class="tcz3-section">
  

  <div class="tcz3-main-grid">

    <!-- LEFT: tall rectangular image -->
    

    <!-- RIGHT: SVG 01 watermark + content layered above -->
    <div class="tcz3-right">

      <!-- Big gradient 01 SVG watermark at top right -->
      <div class="tcz3-bg-num" aria-hidden="true">
        <svg viewBox="0 0 320 280" width="320" height="280" xmlns="/images/">
          <defs>
            <linearGradient id="numGrad" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%"   stop-color="#1a7fa0"/>
              <stop offset="50%"  stop-color="#0d4e6a"/>
              <stop offset="100%" stop-color="#062a3c"/>
            </linearGradient>
          </defs>
          <text
            x="0"
            y="240"
            font-family="sans-serif"
            font-weight="900"
            font-size="260"
            fill="url(#numGrad)"
            letter-spacing="-16">02</text>
        </svg>
      </div>

      <!-- Top: Vision label + headline -->
      <div class="tcz3-top-content">
        <p class="tcz3-vision-label">Our Mission</p>
        <h3 class="tcz3-headline">To deliver resilient, secure, and outcome driven technology solutions that support sustained business growth.</h3>
      </div>

      <!-- Bottom: description text -->
      <div class="tcz3-bottom-content">
        <p class="tcz3-description">Our mission is to deliver high-quality IT services that help businesses operate with confidence, adapt with speed, and grow with purpose. Teceze is committed to providing tailored, dependable, and innovative solutions while building long-term partnerships grounded in trust and measurable value.</p>
      </div>

    </div>
    <div class="tcz3-img-wrap">
      <img src="images/arrow.png" alt="About Us Image">
    </div>
  </div>
</section>

<section class="tcz3-section">
 

  <div class="tcz3-main-grid">

    <!-- LEFT: tall rectangular image -->
    <div class="tcz3-img-wrap">
      <img src="images/Frame 113-2.png" alt="About Us Image">
    </div>

    <!-- RIGHT: SVG 01 watermark + content layered above -->
    <div class="tcz3-right">

      <!-- Big gradient 01 SVG watermark at top right -->
      <div class="tcz3-bg-num" aria-hidden="true">
        <svg viewBox="0 0 320 280" width="320" height="280" xmlns="/images/">
          <defs>
            <linearGradient id="numGrad" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%"   stop-color="#1a7fa0"/>
              <stop offset="50%"  stop-color="#0d4e6a"/>
              <stop offset="100%" stop-color="#062a3c"/>
            </linearGradient>
          </defs>
          <text
            x="0"
            y="240"
            font-family="sans-serif"
            font-weight="900"
            font-size="260"
            fill="url(#numGrad)"
            letter-spacing="-16">03</text>
        </svg>
      </div>

      <!-- Top: Vision label + headline -->
      <div class="tcz3-top-content">
        <p class="tcz3-vision-label">Our Values</p>
        <h3 class="tcz3-headline">Building Long-Term Success Through Integrity, Innovation, and a Strong Commitment to Customer Excellence</h3>
      </div>

      <!-- Bottom: description text -->
      <div class="tcz3-bottom-content">
        <p class="tcz3-description">Our values shape every engagement delivered. Believe in transparency, accountability, collaboration, and continuous innovation. By keeping customer needs at the center of every solution, Teceze creates lasting relationships and outcomes that support long term success.</p>
      </div>

    </div>
  </div>
</section>

<section class="cv2-section">

  <!-- Heading -->
  <h2 class="cv2-heading" id="cv2-headin001">Our Core Values</h2>

  <!-- ===== SPIRAL LAYERS ===== -->
  <div class="cv2-spiral-wrap">

    <!-- DEFAULT — grey spiral (no hover) -->
    <img
      class="cv2-spiral-default"
      src="images/teceze.png"
      alt=""
      aria-hidden="true"
    />

    <!-- CARD 1 HOVER spiral -->
    <img
      class="cv2-spiral-card1"
      src="images/Groupone.png"
      alt=""
      aria-hidden="true"
    />

    <!-- CARD 2 HOVER spiral -->
    <img
      class="cv2-spiral-card2"
      src="images/Group-2 1.png"
      alt=""
      aria-hidden="true"
    />

    <!-- CARD 3 HOVER spiral -->
    <img
      class="cv2-spiral-card3"
      src="images/Group-3 1.png"
      alt=""
      aria-hidden="true"
    />

  </div>

  <!-- ===== CARDS ===== -->
  <div class="cv2-cards">

    <!-- Card 1 — Customer-Centric Approach (top left) -->
    <div class="cv2-card" data-card="1">
      <div class="cv2-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
      </div>
      <h3 class="cv2-card-title">Customer-Centric Approach</h3>
      <p class="cv2-card-desc">Focused on aligning technology solutions with client goals, challenges, and long-term business outcomes.</p>
    </div>

    <!-- Card 2 — Innovation & Excellence (middle right) -->
    <div class="cv2-card" data-card="2">
      <div class="cv2-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <line x1="12" y1="2" x2="12" y2="3"/>
          <path d="M12 6a6 6 0 0 1 6 6c0 2.4-1.4 4.5-3.5 5.5V19a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1v-1.5C7.4 16.5 6 14.4 6 12a6 6 0 0 1 6-6z"/>
          <line x1="9" y1="21" x2="15" y2="21"/>
        </svg>
      </div>
      <h3 class="cv2-card-title">Innovation &amp; Excellence</h3>
      <p class="cv2-card-desc">Continuous adoption of evolving technologies and best practices to deliver consistent, high-quality solutions.</p>
    </div>

    <!-- Card 3 — Trust & Accountability (bottom left) -->
    <div class="cv2-card" data-card="3">
      <div class="cv2-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          <polyline points="9 12 11 14 15 10"/>
        </svg>
      </div>
      <h3 class="cv2-card-title">Trust &amp; Accountability</h3>
      <p class="cv2-card-desc">Built on transparency, reliability, and a commitment to delivering measurable results.</p>
    </div>

  </div>

</section>

<!-- ═══════════════════════════════════════════════
     CASE STUDIES SECTION — Standalone & Conflict-Safe
     All classes prefixed with .cs- (case-studies)
     CMS-ready: data-cs-* attributes for headless CMS
     ═══════════════════════════════════════════════ -->

<section class="tcz-cs2__section">

  <div class="tcz-cs2__wm-top" aria-hidden="true">
    <span>case studies</span>
  </div>

  <div class="tcz-cs2__wm-behind" aria-hidden="true">
    <span>case studies</span>
    <span>case studies</span>
    <span>case studies</span>
  </div>

  <div class="tcz-cs2__container">
    <div class="tcz-cs2__left">
      <div class="tcz-cs2__text-card" id="tczCs2Left"></div>
    </div>

    <div class="tcz-cs2__right">
      <div class="tcz-cs2__image-card" id="tczCs2Right" style="position:relative;overflow:hidden;">
        <div class="tcz-cs2__slide-wrapper" id="tczSlideWrapper"></div>
      </div>
    </div>
  </div>

  <div class="tcz-cs2__bottom">
    <div class="tcz-cs2__bottom-spacer"></div>
    <div class="tcz-cs2__counter">
      <span class="tcz-cs2__counter-current" id="tczCs2Current">01</span>
      <span class="tcz-cs2__counter-sep">/</span>
      <span class="tcz-cs2__counter-total" id="tczCs2Total">05</span>
    </div>
    <div class="tcz-cs2__nav">
        
      <button class="tcz-cs2__btn" id="tczCs2Prev" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="tcz-cs2__btn" id="tczCs2Next" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>
  </div>
</section>


<section class="hero-section">
  <div class="hero-bg"></div>

  <div class="content-wrapper">
  

    <div class="hero-footer">
      <div class="footer-left">
        <h2>Real-Time Security.<br>Zero Compromise.</h2>
        <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="cta-button">
          <span class="icon-circle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </span>
         Know More
        </a>
      </div>
      
      <div class="footer-right">
        <p>
          Continuous monitoring, detection, and response capabilities ensure systems remain protected while maintaining uninterrupted business operations.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="pt-section">

  <!-- ── TOP ROW ── -->
  <div class="pt-top-row">
    <p class="pt-label">Powered By Global<br>Technology Leaders</p>
    <h2 class="pt-heading">
      Collaborate with trusted technology leaders to deliver 
      <strong>secure,</strong>
      <span class="pt-muted">secure, innovative, and future ready solutions for our clients.</span>
    </h2>
  </div>

  <!-- ── DIVIDER ── -->
  <div class="pt-divider"></div>

  <!-- ── LOGOS ── -->
  <!-- ✅ Replace each src="YOUR_LOGO_URL" with your actual logo image URL -->
  <div class="pt-logos">

    <!-- Logo 1 -->
    <div class="pt-logo-item">
      <img src="/images/Mask group-1.png" alt="logo" />
    </div>

    <!-- Logo 2 -->
    <div class="pt-logo-item">
      <img src="/images/Mask group-2.png" alt="Partner Logo 2" />
    </div>

    <!-- Logo 3 -->
    <div class="pt-logo-item">
      <img src="/images/Mask group-3.png" alt="Partner Logo 3" />
    </div>

    <!-- Logo 4 -->
    <div class="pt-logo-item">
      <img src="/images/Mask group-4.png" alt="Partner Logo 4" />
    </div>

    <!-- Logo 5 -->
    <div class="pt-logo-item">
      <img src="/images/Mask group-6.png" alt="Partner Logo 5" />
    </div>

  </div>

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->
  <div class="pt-cta">

    <!-- ✅ Replace src="YOUR_CTA_BG_URL" with your actual CTA background image URL -->
    <img
      class="pt-cta-bg-img"
      src="/images/cta.png"
      alt=""
      aria-hidden="true"
    />

    <!-- Dark gradient overlay so text stays readable over the image -->
    <div class="pt-cta-bg-overlay"></div>

    <!-- Text content -->
    <div class="pt-cta-content">
      
      <h3 class="pt-cta-heading">Discuss your technology priorities with experts ready <br>to support your next phase of growth</h3>
      <p class="pt-cta-sub">Whether you’re looking to modernize your IT environment, strengthen cybersecurity, improve collaboration, or scale with confidence. The right expertise is ready to deliver solutions aligned to your business priorities.</p>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="pt-cta-btn">
        <span class="pt-cta-btn-dot"></span>
        Let’s Talk
      </a>
    </div>

  </div>

</section>





  <script>
    const slides = [
      {
        nav: "Our Solutions",
        counter: "01",
        title: "Innovative Technology Solutions Built for Modern Businesses",
        desc: "We design and implement scalable technology solutions tailored to your business goals. From cloud infrastructure to software integrations, our team ensures your systems work seamlessly."
      },
      {
        nav: "Service Delivery",
        counter: "02",
        title: "Managed IT Services That Keep Your Business Running",
        desc: "Our managed IT services help businesses maintain performance, reduce downtime, and scale with ease. We act as a proactive technology partner, supporting your day-to-day operations."
      },
      {
        nav: "Scalability",
        counter: "03",
        title: "Flexible Infrastructure That Grows As Your Business Expands",
        desc: "Our scalable solutions adapt to your evolving needs — whether you're onboarding new teams or entering new markets. We build systems designed to scale without disruption."
      }
    ];

    let current = 0; // Start at index 0
    const total = slides.length;

    const navBar       = document.getElementById('navBar');
    const counterBig   = document.getElementById('counterBig');
    const counterTotal = document.getElementById('counterTotal');
    const slideTitle   = document.getElementById('slideTitle');
    const slideDesc    = document.getElementById('slideDesc');
    const leftPanel    = document.getElementById('leftPanel');
    const rightPanel   = document.getElementById('rightPanel');

    function buildNav() {
      const order = [
        (current - 1 + total) % total,
        current,
        (current + 1) % total
      ];

      navBar.innerHTML = '';
      order.forEach((slideIdx, slotPos) => {
        const slot = document.createElement('div');
        slot.className = 'nav-slot' + (slotPos === 1 ? ' center' : '');

        const label = document.createElement('span');
        label.className = 'nav-label';
        label.textContent = slides[slideIdx].nav;

        if (slotPos !== 1) {
          label.addEventListener('click', () => goTo(slideIdx));
        }

        slot.appendChild(label);
        navBar.appendChild(slot);
      });
    }

    function updateContent() {
      const s = slides[current];
      counterBig.textContent   = s.counter;
      counterTotal.textContent = '/' + String(total).padStart(2, '0');
      slideTitle.textContent   = s.title;
      slideDesc.textContent    = s.desc;
      buildNav();
    }

    function goTo(idx) {
      if (idx === current) return;
      leftPanel.classList.add('out');
      rightPanel.classList.add('out');
      
      setTimeout(() => {
        current = idx;
        updateContent();
        leftPanel.classList.remove('out');
        rightPanel.classList.remove('out');
      }, 400);
    }

    document.getElementById('prevBtn').addEventListener('click', () => goTo((current - 1 + total) % total));
    document.getElementById('nextBtn').addEventListener('click', () => goTo((current + 1) % total));

    // Initialize
    updateContent();
  </script>
 <?php include 'footer.php'; ?>
</body>
 <script src="/assets/script.js"></script>
</html>