<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Global IT Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
   <link rel="stylesheet" href="/assets/style.css">
  <style>
    /* ══════════════════════════════════════════
       GLOBAL RESET — minimal, scoped via body
    ══════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ══════════════════════════════════════════
       CSS VARIABLES
       — gits-* for hero/cards section (dark)
       — al-*   for alliance section (light)
       — pc-*   for partner/alliance-models section (dark)
    ══════════════════════════════════════════ */

    /* Alliance section (light) tokens */
    :root {
      --al-navy:       #0d1f3c;
      --al-navy-soft:  #1a3560;
      --al-teal:       #33c4d4;
      --al-teal-dark:  #1a9baa;
      --al-text-body:  #3d5a7a;
      --al-card-bg:    rgba(255,255,255,0.72);
      --al-card-border:rgba(51,196,212,0.18);
      --al-shadow:     0 4px 24px rgba(13,31,60,0.08);
      --al-shadow-lg:  0 12px 40px rgba(13,31,60,0.14);
    }

    /* Partner/Alliance-Models section (dark) tokens */
    :root {
      --pc-bg-deep:    #040d1f;
      --pc-bg-card:    #071428;
      --pc-bg-card2:   #0a1a35;
      --pc-border:     rgba(255,255,255,0.07);
      --pc-accent:     #2563eb;
      --pc-accent2:    #38bdf8;
      --pc-text-white: #f0f6ff;
      --pc-text-muted: #7ea3cc;
      --pc-tag-bg:     rgba(37,99,235,0.18);
      --pc-tag-border: rgba(37,99,235,0.4);
    }

    /* ══════════════════════════════════════════
       1. HERO SECTION  (prefix: gits-)
    ══════════════════════════════════════════ */
    .gits-wrap {
      font-family: 'DM Sans', sans-serif;
      overflow: hidden;
      width: 100%;
    }

    .gits-hero {
      position: relative;
      min-height: 88vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .gits-hero-rule {
      width: 1000px;
      height: 1px;
      background: linear-gradient(to right, rgba(255,255,255,0.25), transparent);
      margin-bottom: 1.5rem;
    }

    .gits-hero-bg {
      position: absolute; inset: 0; z-index: 0;
      background-image: url('/images/global1.jpg');
      background-size: cover;
      background-position: center right;
      background-repeat: no-repeat;
    }
    .gits-hero-bg::after {
      content: '';
      position: absolute; inset: 0;
      background: linear-gradient(108deg,rgba(2,10,28,0.88) 0%,rgba(4,20,60,0.68) 42%,rgba(6,24,70,0.28) 100%);
    }

    .gits-nav {
      position: relative; z-index: 10;
      padding: 28px 64px;
    }
    .gits-nav-breadcrumb {
      font-family: 'Sora', sans-serif;
      font-size: 11px; font-weight: 500;
      letter-spacing: 0.16em; color: rgba(255,255,255,0.7);
      text-transform: uppercase;
    }
    .gits-nav-breadcrumb span { color: rgba(255,255,255,0.4); margin: 0 7px; }

    .gits-hero-content {
      position: relative; z-index: 10;
      flex: 1; display: flex; align-items: center;
      padding: 10px 64px 60px;
    }
    .gits-hero-inner { max-width: 580px; }

    .gits-hero-title {
      font-family: 'Sora', sans-serif;
      font-size: clamp(2rem, 4.2vw, 3.25rem);
      font-weight: 700; line-height: 1.13;
      color: #ffffff; margin-bottom: 18px; letter-spacing: -0.015em;
    }
    .gits-hero-desc {
      font-size: clamp(0.84rem, 1.3vw, 0.96rem);
      font-weight: 300; color: rgba(255,255,255,0.7);
      line-height: 1.78; margin-bottom: 36px; max-width: 400px;
    }

    .gits-btn {
      display: inline-flex; align-items: center; gap: 12px;
      padding: 11px 26px 11px 11px;
      background: transparent;
      border: 1.5px solid rgba(255,255,255,0.4);
      border-radius: 50px; color: #ffffff;
      font-family: 'Sora', sans-serif;
      font-size: 0.86rem; font-weight: 500; letter-spacing: 0.03em;
      cursor: pointer; text-decoration: none;
      transition: border-color 0.3s, box-shadow 0.3s;
      position: relative; overflow: hidden;
    }
    .gits-btn::before {
      content: ''; position: absolute; inset: 0;
      background: rgba(255,255,255,0.06); opacity: 0;
      transition: opacity 0.3s; border-radius: inherit;
    }
    .gits-btn:hover { border-color: #ffffff; box-shadow: 0 0 0 1px rgba(255,255,255,0.28); }
    .gits-btn:hover::before { opacity: 1; }

    .gits-btn-icon {
      width: 32px; height: 32px;
      border: 1.5px solid rgba(255,255,255,0.4);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      transition: border-color 0.3s, background 0.3s;
    }
    .gits-btn:hover .gits-btn-icon { border-color: #ffffff; background: rgba(255,255,255,0.12); }
    .gits-btn-icon svg { width: 13px; height: 13px; fill: none; stroke: currentColor; stroke-width: 2; }

    .gits-trust-bar {
      position: relative; z-index: 10;
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
      border-top: 1px solid rgba(255,255,255,0.15);
      padding: 16px 64px;
      display: flex; align-items: center; justify-content: center;
      gap: 36px; flex-wrap: wrap;
    }
    .gits-trust-item {
      display: flex; align-items: center; gap: 8px;
      font-size: 0.8rem; color: rgba(255,255,255,0.7); white-space: nowrap;
    }
    .gits-trust-item svg { width: 15px; height: 15px; stroke: rgba(255,255,255,0.7); flex-shrink: 0; }
    .gits-trust-divider { width: 1px; height: 16px; background: rgba(255,255,255,0.15); }

    /* ══════════════════════════════════════════
       2. SPLIT + SERVICE CARDS  (prefix: gits-split-, gits-card-)
    ══════════════════════════════════════════ */
    .gits-split {
      position: relative; overflow: hidden;
    }
    .gits-split-img {
      position: absolute; top: 0; left: 0; right: 0; height: 50%;
      background-image: url('/images/global.png');
      background-size: cover; background-position: center right;
      background-repeat: no-repeat; z-index: 0;
    }
    .gits-split-img::after {
      content: ''; position: absolute; inset: 0;
      background: linear-gradient(to bottom,rgba(2,10,28,0.80) 0%,rgba(3,14,40,0.75) 100%);
    }
    .gits-split-white {
      position: absolute; bottom: 0; left: 0; right: 0;
      height: 50%; background: #ffffff; z-index: 0;
    }

    .gits-cards-grid {
      position: relative; z-index: 2;
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 22px; max-width: 1100px;
      margin: 0 auto; padding: 56px 64px 88px;
    }

    .gits-card {
      position: relative; border-radius: 18px; overflow: hidden;
      padding: 0; box-shadow: 0 8px 40px rgba(0,0,0,0.22);
      transition: box-shadow 0.32s, transform 0.32s;
      cursor: default; min-height: 260px;
      display: flex; flex-direction: column; justify-content: flex-end;
    }
    .gits-card:hover { transform: translateY(-6px); box-shadow: 0 20px 56px rgba(0,0,0,0.28); }

    .gits-card-bg {
      position: absolute; inset: 0;
      background-size: cover; background-position: center;
      background-repeat: no-repeat; z-index: 0;
      transition: transform 0.5s ease;
    }
    .gits-card:hover .gits-card-bg { transform: scale(1.04); }

    .gits-card-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to bottom,rgba(5,20,55,0.15) 0%,rgba(5,20,55,0.52) 50%,rgba(3,12,40,0.82) 100%);
      z-index: 1;
    }

    .gits-card-body {
      position: relative; z-index: 2;
      padding: 28px 24px;
      display: flex; flex-direction: column;
    }

    .gits-card-icon {
      width: 40px; height: 40px;
      background: rgba(255,255,255,0.15);
      border: 1px solid rgba(255,255,255,0.35);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 52px;
      backdrop-filter: blur(6px);
      transition: background 0.32s, border-color 0.32s;
    }
    .gits-card:hover .gits-card-icon { background: rgba(255,255,255,0.25); border-color: rgba(255,255,255,0.6); }
    .gits-card-icon svg { width: 18px; height: 18px; stroke: #ffffff; stroke-width: 1.8; fill: none; }

    .gits-card-title {
      font-family: 'Sora', sans-serif;
      font-size: 1rem; font-weight: 600; color: #ffffff; margin-bottom: 8px;
    }
    .gits-card-desc {
      font-size: 0.82rem; line-height: 1.65;
      color: rgba(255,255,255,0.78); font-weight: 300;
    }

    /* ══════════════════════════════════════════
       3. ALLIANCE SECTION  (prefix: al-)
       Light theme — white background
    ══════════════════════════════════════════ */
    .al-section {
      position: relative; overflow: hidden;
      background: #ffffff;
    }

    .al-hero-band { position: relative; width: 100%; }

    .al-watermark {
      display: block; width: 100%;
      font-family: 'Sora', sans-serif;
      font-size: 390px; font-weight: 800;
      letter-spacing: -0.03em; white-space: nowrap;
      text-align: center; line-height: 1;
      user-select: none; pointer-events: none;
      color: rgba(180,215,225,0.55);
      padding: clamp(30px,4vw,56px) 0 0;
      overflow: hidden;
    }

    .al-top-row {
      position: absolute; top: 0; left: 0; right: 0; bottom: 0;
      display: flex; align-items: center;
      justify-content: space-between;
      gap: clamp(20px,4vw,60px);
      padding: clamp(80px,14vw,180px) clamp(24px,6vw,80px) 0;
      z-index: 2;
    }

    .al-eyebrow-wrap {
      flex: 0 0 auto; display: flex; flex-direction: column;
      gap: 8px; max-width: 220px;
    }

    .al-eyebrow-tag {
      font-size: 10px; font-weight: 500;
      letter-spacing: 0.1em; text-transform: uppercase;
      color: var(--al-teal-dark);
      display: flex; align-items: center; gap: 7px;
    }
    .al-eyebrow-tag::before {
      content: ''; width: 18px; height: 2px;
      background: var(--al-teal); border-radius: 2px; flex-shrink: 0;
    }

    .al-eyebrow-title {
      font-family: 'Sora', sans-serif;
      font-size: clamp(11px,1.1vw,13px); font-weight: 600;
      color: var(--al-navy); line-height: 1.5;
    }

    .al-hero-text {
      flex: 1 1 auto;
      font-family: 'Sora', sans-serif;
      font-size: clamp(17px,2.4vw,32px); font-weight: 600;
      line-height: 1.4; color: var(--al-navy);
      letter-spacing: -0.02em; text-align: left; max-width: 680px;
    }
    .al-hero-text em { font-style: normal; color: var(--al-teal-dark); }

    /* Alliance cards outer + grid */
    .al-cards-outer {
      position: relative; z-index: 1;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='900' height='400' viewBox='0 0 900 400'%3E%3Cdefs%3E%3CradialGradient id='rg' cx='50%25' cy='50%25' r='60%25'%3E%3Cstop offset='0%25' stop-color='%2333c4d4' stop-opacity='0.09'/%3E%3Cstop offset='100%25' stop-color='%2333c4d4' stop-opacity='0'/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect width='900' height='400' fill='url(%23rg)'/%3E%3Cg stroke='%2333c4d4' stroke-opacity='0.06' stroke-width='1'%3E%3Cline x1='0' y1='50' x2='900' y2='50'/%3E%3Cline x1='0' y1='100' x2='900' y2='100'/%3E%3Cline x1='0' y1='150' x2='900' y2='150'/%3E%3Cline x1='0' y1='200' x2='900' y2='200'/%3E%3Cline x1='0' y1='250' x2='900' y2='250'/%3E%3Cline x1='0' y1='300' x2='900' y2='300'/%3E%3Cline x1='0' y1='350' x2='900' y2='350'/%3E%3C/g%3E%3Cg stroke='%2333c4d4' stroke-opacity='0.06' stroke-width='1'%3E%3Cline x1='75' y1='0' x2='75' y2='400'/%3E%3Cline x1='150' y1='0' x2='150' y2='400'/%3E%3Cline x1='225' y1='0' x2='225' y2='400'/%3E%3Cline x1='300' y1='0' x2='300' y2='400'/%3E%3Cline x1='375' y1='0' x2='375' y2='400'/%3E%3Cline x1='450' y1='0' x2='450' y2='400'/%3E%3Cline x1='525' y1='0' x2='525' y2='400'/%3E%3Cline x1='600' y1='0' x2='600' y2='400'/%3E%3Cline x1='675' y1='0' x2='675' y2='400'/%3E%3Cline x1='750' y1='0' x2='750' y2='400'/%3E%3Cline x1='825' y1='0' x2='825' y2='400'/%3E%3C/g%3E%3Cg stroke='%231a9baa' stroke-opacity='0.05' stroke-width='1'%3E%3Cline x1='-100' y1='400' x2='500' y2='-100'/%3E%3Cline x1='200' y1='500' x2='900' y2='-100'/%3E%3C/g%3E%3Cellipse cx='0' cy='400' rx='260' ry='200' fill='%2333c4d4' fill-opacity='0.06'/%3E%3Cellipse cx='900' cy='0' rx='260' ry='200' fill='%2333c4d4' fill-opacity='0.06'/%3E%3C/svg%3E");
      background-size: cover; background-position: center; background-repeat: no-repeat;
    }

    .al-cards-wrap {
      margin: 0 auto;
      padding: clamp(20px,3vw,40px) clamp(24px,6vw,80px) clamp(52px,7vw,100px);
    }

    .al-cards-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: auto auto;
      gap: clamp(12px,1.6vw,18px);
    }

    /* Alliance card base */
    .al-card {
      background: var(--al-card-bg);
      border: 1px solid var(--al-card-border);
      border-radius: 20px;
      padding: clamp(20px,2.2vw,30px);
      backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
      box-shadow: var(--al-shadow);
      transition: transform 0.3s cubic-bezier(.22,.68,0,1.2), box-shadow 0.3s ease;
      position: relative; overflow: hidden;
    }
    .al-card::before {
      content: ''; position: absolute; inset: 0; border-radius: inherit;
      background: linear-gradient(135deg,rgba(255,255,255,0.6) 0%,transparent 55%);
      pointer-events: none;
    }
    .al-card:hover { transform: translateY(-5px); box-shadow: var(--al-shadow-lg); }

    /* Revenue card — col 1, spans 2 rows */
    .al-card-revenue { grid-column: 1; grid-row: 1 / 3; display: flex; flex-direction: column; }

    .al-icon-box {
      width: 44px; height: 44px; border-radius: 11px;
      background: linear-gradient(135deg,#d8f5f9,#aeebf4);
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 14px; flex-shrink: 0;
    }

    .al-chart-ghost { margin-top: auto; padding-top: 20px; width: 100%; height: 90px; }
    .al-chart-ghost svg { width: 100%; height: 100%; }

    /* Featured card — col 2 row 1 */
    .al-card-featured { grid-column: 2; grid-row: 1; }

    .al-pulse-dot {
      width: 11px; height: 11px;
      background: var(--al-teal); border-radius: 50%;
      margin-bottom: 13px;
      box-shadow: 0 0 0 5px rgba(51,196,212,0.2);
      animation: al-pulse 2.4s ease-in-out infinite;
    }
    @keyframes al-pulse {
      0%,100% { box-shadow: 0 0 0 5px rgba(51,196,212,0.2); }
      50%      { box-shadow: 0 0 0 9px rgba(51,196,212,0.05); }
    }

    /* Global card — col 2 row 2 */
    .al-card-global { grid-column: 2; grid-row: 2; }
    .al-globe-icon { width: 40px; height: 40px; color: var(--al-teal-dark); margin-bottom: 13px; }

    /* PaaS card — col 3, spans 2 rows */
    .al-card-paas { grid-column: 3; grid-row: 1 / 3; display: flex; flex-direction: column; }

    .al-check-ring {
      margin-top: auto; align-self: flex-end;
      width: 72px; height: 72px; border-radius: 50%;
      border: 2px solid rgba(51,196,212,0.2);
      display: flex; align-items: center; justify-content: center;
      color: rgba(51,196,212,0.32);
    }

    /* Alliance card text */
    .al-card-title {
      font-family: 'Sora', sans-serif;
      font-size: clamp(13px,1.15vw,15.5px); font-weight: 600;
      color: var(--al-navy); margin-bottom: 8px; letter-spacing: -0.01em;
    }
    .al-card-desc { font-size: clamp(11.5px,0.95vw,13px); color: var(--al-text-body); line-height: 1.7; }
    .al-card-desc strong { color: var(--al-navy-soft); font-weight: 500; }

    /* ══════════════════════════════════════════
       4. PARTNER / ALLIANCE-MODELS  (prefix: pc-)
       Dark theme — dark navy background
    ══════════════════════════════════════════ */
    .pc-wrap {
      background: var(--pc-bg-deep);
      padding: 48px 24px;
      font-family: 'DM Sans', sans-serif;
    }

    /* Section layout */
    .pc-section { display: flex; flex-direction: column; gap: 28px; }
    .pc-section-top { display: flex; gap: 40px; align-items: flex-start; }

    .pc-section-label {
      width: 130px; flex-shrink: 0;
      font-size: 11px; font-weight: 500;
      color: var(--pc-text-muted);
      letter-spacing: 0.08em; text-transform: uppercase;
      padding-top: 6px; line-height: 1.5;
    }

    .pc-section-body { flex: 1; display: flex; flex-direction: column; gap: 0; }

    .pc-section-headline {
      font-size: 28px; font-weight: 600;
      line-height: 1.35; color: var(--pc-text-white);
    }
    .pc-section-headline span { color: var(--pc-text-muted); font-weight: 400; }

    .pc-divider {
      height: 1px;
      background: linear-gradient(90deg,transparent,rgba(37,99,235,0.35),transparent);
    }

    /* Shared primitives */
    .pc-icon {
      width: 34px; height: 34px; border-radius: 8px;
      background: rgba(37,99,235,0.2); border: 1px solid rgba(37,99,235,0.3);
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .pc-icon svg { width: 16px; height: 16px; color: var(--pc-accent2); }
    .pc-icon img { width: 18px; height: 18px; object-fit: contain; }

    .pc-title { font-size: 14px; font-weight: 600; color: var(--pc-text-white); line-height: 1.3; }
    .pc-desc  { font-size: 12px; color: var(--pc-text-muted); line-height: 1.6; }

    .pc-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 4px; }
    .pc-tag {
      font-size: 10.5px; font-weight: 500;
      padding: 3px 10px; border-radius: 20px;
      background: var(--pc-tag-bg); border: 1px solid var(--pc-tag-border);
      color: var(--pc-accent2); letter-spacing: 0.01em;
    }

    /* ── Who We Partner With grid (pwp-) ── */
    .pwp-grid {
      display: grid; grid-template-columns: 1fr 1fr; gap: 16px;
    }

    .pwp-featured {
      grid-row: span 2; border-radius: 16px; overflow: hidden;
      background: var(--pc-bg-card); border: 1px solid var(--pc-border);
      display: flex; flex-direction: column;
      transition: border-color 0.2s, background 0.2s;
    }
    .pwp-featured:hover { border-color: rgba(37,99,235,0.4); background: var(--pc-bg-card2); }

    .pwp-featured__img {
      flex: 1; min-height: 180px;
      /*background: linear-gradient(135deg,#0a2060 0%,#0d3080 40%,#1a4faa 70%,#2563eb 100%);*/
      background-image: url('images/pwp.png'); /* ← replace */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative; overflow: hidden;
    }
    .pwp-featured__img img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .pwp-featured__img::after {
      content: ''; position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 60% 80% at 40% 50%,rgba(56,189,248,0.25) 0%,transparent 70%),
        radial-gradient(ellipse 40% 60% at 70% 30%,rgba(37,99,235,0.35) 0%,transparent 60%);
    }
    .pwp-featured__img .pwp-shape {
      position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;
    }
    .pwp-featured__img .pwp-shape svg { width: 120px; height: 120px; opacity: 0.7; }

    .pwp-featured__body { padding: 18px 20px 20px; display: flex; flex-direction: column; gap: 10px; }
    .pwp-featured__header { display: flex; align-items: center; gap: 10px; }

    .pwp-card {
      border-radius: 16px; background: var(--pc-bg-card);
      border: 1px solid var(--pc-border);
      padding: 20px; display: flex; flex-direction: column; gap: 10px;
      transition: border-color 0.2s, background 0.2s;
    }
    .pwp-card:hover { border-color: rgba(37,99,235,0.4); background: var(--pc-bg-card2); }
    .pwp-card__header { display: flex; align-items: center; gap: 10px; }

    /* ── Alliance Models grid (am-) ── */
    .am-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 16px;
    }

    .am-card-base {
      border-radius: 16px; background: var(--pc-bg-card);
      border: 1px solid var(--pc-border);
      transition: border-color 0.2s;
    }
    .am-card-base:hover { border-color: rgba(37,99,235,0.4); }

    .am-resell {
      grid-column: 1; grid-row: 1 / span 2;
      display: flex; flex-direction: column; overflow: hidden;
    }
    .am-resell__top { padding: 20px 20px 16px; display: flex; flex-direction: column; gap: 8px; }
    .am-resell__img {
      flex: 1; min-height: 140px;
       background-image: url('images/pwp2.png'); /* ← replace */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative; overflow: hidden;
      margin: 0 12px 12px; border-radius: 10px;
    }
    .am-resell__img img { width: 100%; height: 100%; object-fit: cover; border-radius: 10px; }
    .am-resell__img::after {
      content: ''; position: absolute; inset: 0; border-radius: 10px;
      background: radial-gradient(ellipse 70% 70% at 30% 60%,rgba(56,189,248,0.3) 0%,transparent 60%);
    }
    .am-resell__shape {
      position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;
    }
    .am-resell__shape svg { width: 80px; height: 80px; opacity: 0.65; }

    .am-cosell  { grid-column: 2; grid-row: 1; padding: 20px; display: flex; flex-direction: column; gap: 10px; }
    .am-managed { grid-column: 2; grid-row: 2; padding: 20px; display: flex; flex-direction: column; gap: 10px; }

    .am-procurement {
      grid-column: 3; grid-row: 1 / span 2;
      display: flex; flex-direction: column; overflow: hidden;
    }
    .am-procurement__top { padding: 20px 20px 16px; }
    .am-procurement__img {
      flex: 1; min-height: 140px;
      margin: 0 12px 0; border-radius: 10px 10px 0 0;
      position: relative; overflow: hidden;
    }
    .am-procurement__img img { width: 100%; height: 100%; object-fit: cover; }
    .am-procurement__img::after {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(ellipse 60% 80% at 70% 40%,rgba(37,99,235,0.3) 0%,transparent 60%);
    }
    .am-procurement__shape {
      position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;
    }
    .am-procurement__shape svg { width: 90px; height: 90px; opacity: 0.6; }
    .am-procurement__bottom { padding: 16px 20px 20px; }

    /* ══════════════════════════════════════════
       5. SCROLL-REVEAL  (prefix: reveal-)
    ══════════════════════════════════════════ */
    .reveal {
      opacity: 0; transform: translateY(28px);
      transition: opacity 0.65s ease, transform 0.65s cubic-bezier(0.22,0.68,0,1);
    }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal[data-delay="1"] { transition-delay: 0.06s; }
    .reveal[data-delay="2"] { transition-delay: 0.15s; }
    .reveal[data-delay="3"] { transition-delay: 0.24s; }
    .reveal[data-delay="4"] { transition-delay: 0.33s; }

    /* ══════════════════════════════════════════
       6. RESPONSIVE
    ══════════════════════════════════════════ */
    @media (max-width: 960px) {
      .gits-nav, .gits-hero-content, .gits-trust-bar { padding-left: 36px; padding-right: 36px; }
      .gits-cards-grid { grid-template-columns: 1fr 1fr; padding-left: 36px; padding-right: 36px; }
      .gits-trust-divider { display: none; }
      .gits-trust-bar { gap: 16px; }

      .al-cards-grid { grid-template-columns: 1fr 1fr; }
      .al-card-revenue  { grid-column: 1; grid-row: 1; }
      .al-card-featured { grid-column: 2; grid-row: 1; }
      .al-card-global   { grid-column: 1; grid-row: 2; }
      .al-card-paas     { grid-column: 2; grid-row: 2; }
      .al-top-row { flex-direction: column; align-items: flex-start; justify-content: center; padding: clamp(16px,4vw,32px) clamp(20px,5vw,48px); gap: 14px; }
      .al-eyebrow-wrap { max-width: 100%; }
      .al-hero-text { max-width: 100%; font-size: clamp(16px,3vw,26px); }
    }

    @media (max-width: 640px) {
      .gits-nav { padding: 18px 20px; }
      .gits-hero-content { padding: 16px 20px 36px; }
      .gits-hero-title { font-size: 1.85rem; }
      .gits-trust-bar { padding: 14px 20px; gap: 12px; }
      .gits-trust-item { font-size: 0.74rem; }
      .gits-cards-grid { grid-template-columns: 1fr; padding: 36px 20px 56px; }

      .al-watermark { font-size: clamp(48px,17vw,76px); }
      .al-cards-grid { grid-template-columns: 1fr; }
      .al-card-revenue, .al-card-featured,
      .al-card-global, .al-card-paas { grid-column: 1; grid-row: auto; }
      .al-chart-ghost, .al-check-ring { display: none; }
    }
    
/* ═══════════════════════════════════════
   OUTER WRAPPER — controls left/right margin
   matches the image: ~32px side padding,
   content max-width centered
═══════════════════════════════════════ */
.ps-outer {
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
  padding: 0 32px;
}

/* ═══════════════════════════════════════
   BOTH SECTIONS share this dark bg
═══════════════════════════════════════ */
.ps-page {
  background: #04102a;
  /* subtle grid lines like the reference */
  background-image:
    linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
  background-size: 48px 48px;
  padding: 48px 0 56px;
  display: flex;
  flex-direction: column;
  gap: 0;
}

/* ═══════════════════════════════════════
   SECTION HEADER ROW
   label (left) + headline (right)
═══════════════════════════════════════ */
.ps-header {
  display: flex;
  align-items: flex-start;
  gap: 0;
  margin-bottom: 24px;
}

.ps-label {
  width: 160px;
  flex-shrink: 0;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.45);
  line-height: 1.6;
  padding-top: 4px;
}

.ps-headline {
  flex: 1;
  font-family: 'Sora', sans-serif;
  font-size: 22px;
  font-weight: 600;
  line-height: 1.4;
  color: #ffffff;
  letter-spacing: -0.01em;
}
.ps-headline span {
  font-weight: 400;
  color: rgba(255,255,255,0.55);
}

/* ═══════════════════════════════════════
   DIVIDER between sections
═══════════════════════════════════════ */
.ps-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
  margin: 40px 0 44px;
}

/* ═══════════════════════════════════════
   SECTION 1 — WHO WE PARTNER WITH
   Grid: [tall featured] [right col: 2 cards stacked]
═══════════════════════════════════════ */
.pwp-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 12px;
  /* cards are equal height, featured spans both rows */
}

/* Featured tall card — spans both rows */
.pwp-featured {
  grid-column: 1;
  grid-row: 1 / span 2;
  border-radius: 14px;
  background: #071428;
  border: 1px solid rgba(255,255,255,0.07);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  transition: border-color 0.2s;
}
.pwp-featured:hover { border-color: rgba(37,99,235,0.4); }

/*.pwp-featured__img {*/
/*  height: 220px;*/
/*  background: linear-gradient(140deg, #0a1e50 0%, #0d2a70 40%, #1440a0 70%, #1a52c0 100%);*/
/*  position: relative;*/
/*  overflow: hidden;*/
/*  flex-shrink: 0;*/
/*}*/
.pwp-featured__img img {
  width: 100%; height: 100%; object-fit: cover; display: block;
}
/* Glowing orb placeholder */
.pwp-featured__img::after {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 75% at 38% 52%, rgba(56,189,248,0.3) 0%, transparent 65%),
    radial-gradient(ellipse 40% 55% at 68% 28%, rgba(37,99,235,0.4) 0%, transparent 60%);
}
.pwp-orb {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center;
  z-index: 2;
}
.pwp-orb svg { width: 110px; height: 110px; }

.pwp-featured__body {
  padding: 16px 18px 20px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  flex: 1;
}
.pwp-featured__row {
  display: flex; align-items: center; gap: 10px;
}

/* Right-column cards */
.pwp-card {
  border-radius: 14px;
  background: #071428;
  border: 1px solid rgba(255,255,255,0.07);
  padding: 18px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  transition: border-color 0.2s;
}
.pwp-card:hover { border-color: rgba(37,99,235,0.4); }

.pwp-card__row {
  display: flex; align-items: center; gap: 10px;
}

/* Shared icon box */
.ps-icon {
  width: 32px; height: 32px;
  border-radius: 7px;
  background: rgba(37,99,235,0.18);
  border: 1px solid rgba(37,99,235,0.3);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.ps-icon svg { width: 15px; height: 15px; stroke: #38bdf8; fill: none; stroke-width: 1.8; }
.ps-icon img { width: 16px; height: 16px; object-fit: contain; }

/* Shared text */
.ps-title {
  font-family: 'Sora', sans-serif;
  font-size: 13px; font-weight: 600;
  color: #f0f6ff; line-height: 1.3;
}
.ps-desc {
  font-size: 11.5px;
  color: rgba(180,210,240,0.7);
  line-height: 1.65;
}

/* Tag pills */
.ps-tags { display: flex; flex-wrap: wrap; gap: 5px; margin-top: 2px; }
.ps-tag {
  font-size: 10px; font-weight: 500;
  padding: 3px 9px; border-radius: 20px;
  background: rgba(37,99,235,0.15);
  border: 1px solid rgba(37,99,235,0.35);
  color: #38bdf8;
  letter-spacing: 0.01em;
}

/* ═══════════════════════════════════════
   SECTION 2 — ALLIANCE MODELS
   3-column grid: tall | 2-stacked | tall
═══════════════════════════════════════ */
.am-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: auto auto;
  gap: 12px;
  /* min height so tall cards have visual weight */
  min-height: 360px;
}

/* Base for all alliance cards */
.am-base {
  border-radius: 14px;
  background: #071428;
  border: 1px solid rgba(255,255,255,0.07);
  transition: border-color 0.2s;
}
.am-base:hover { border-color: rgba(37,99,235,0.4); }

/* Col 1: Resell — spans 2 rows */
.am-resell {
  grid-column: 1; grid-row: 1 / span 2;
  display: flex; flex-direction: column;
  overflow: hidden;
}
.am-resell__top {
  padding: 18px 18px 14px;
  display: flex; flex-direction: column; gap: 7px;
}
/*.am-resell__img {*/
/*  flex: 1;*/
/*  min-height: 130px;*/
/*  background: linear-gradient(155deg, #0c1e48 0%, #0e2860 50%, #1848a0 100%);*/
/*  position: relative; overflow: hidden;*/
/*  margin: 0 10px 10px;*/
/*  border-radius: 8px;*/
/*}*/
/*.am-resell__img img { width: 100%; height: 100%; object-fit: cover; border-radius: 8px; }*/
/*.am-resell__img::after {*/
/*  content: ''; position: absolute; inset: 0; border-radius: 8px;*/
/*  background: radial-gradient(ellipse 65% 65% at 32% 62%, rgba(56,189,248,0.28) 0%, transparent 60%);*/
/*}*/
.am-resell__orb {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center; z-index: 2;
}
.am-resell__orb svg { width: 72px; height: 72px; }

/* Col 2: Co-Sell (row 1) */
.am-cosell {
  grid-column: 2; grid-row: 1;
  padding: 18px;
  display: flex; flex-direction: column; gap: 8px;
}

/* Col 2: Managed Services (row 2) */
.am-managed {
  grid-column: 2; grid-row: 2;
  padding: 18px;
  display: flex; flex-direction: column; gap: 8px;
}

/* Col 3: Procurement — spans 2 rows */
.am-procurement {
  grid-column: 3; grid-row: 1 / span 2;
  display: flex; flex-direction: column;
  overflow: hidden;
  background-image: url('images/pwp1.png'); /* ← replace */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
}
.am-procurement__top {
  padding: 18px 18px 0;
}
/*.am-procurement__img {*/
/*  flex: 1;*/
/*  min-height: 130px;*/
/*  background: linear-gradient(155deg, #091830 0%, #0a2252 55%, #103580 100%);*/
/*  margin: 12px 10px 0;*/
/*  border-radius: 8px 8px 0 0;*/
/*  position: relative; overflow: hidden;*/
/*}*/
/*.am-procurement__img img { width: 100%; height: 100%; object-fit: cover; }*/
/*.am-procurement__img::after {*/
/*  content: ''; position: absolute; inset: 0;*/
/*  background: radial-gradient(ellipse 55% 75% at 68% 38%, rgba(37,99,235,0.32) 0%, transparent 60%);*/
/*}*/
.am-procurement__orb {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center; z-index: 2;
}
.am-procurement__orb svg { width: 80px; height: 80px; }
.am-procurement__bottom {
  padding: 14px 18px 18px;
}

.gdf-banner{
  width:100%;
  min-height:140px;

  /* Full background image */
  background: url('/images/Container.png') no-repeat center center;
  background-size: cover;

  border-radius:16px;
  overflow:hidden;
  position:relative;
  display:flex;
  align-items:stretch;
  padding:28px 32px;
  box-sizing:border-box;
  gap:24px;
  flex-wrap:wrap;
}

/* Optional overlay for better text visibility */
.gdf-banner::before{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,0.4); /* adjust opacity if needed */
  z-index:0;
}

.gdf-label-box{
  background:rgba(255,255,255,0.13);
  border:1px solid rgba(255,255,255,0.2);
  border-radius:10px;
  padding:14px 18px;
  min-width:160px;
  max-width:210px;
  flex-shrink:0;
  position:relative;
  z-index:1;
}

.gdf-label-box h2{
  color:#fff;
  font-size:15px;
  font-weight:600;
  margin:0 0 20px;
  line-height:1.3;
  font-family:sans-serif;
}

.gdf-label-box p{
  color:rgba(255,255,255,0.72);
  font-size:12px;
  margin:0;
  line-height:1.5;
  font-family:sans-serif;
}

.gdf-stats{
  display:flex;
  align-items:center;
  flex:1;
  gap:0;
  flex-wrap:wrap;
  position:relative;
  z-index:1;
}

.gdf-stat{
  flex:1;
  min-width:100px;
  padding:0 20px;
  border-right:1px solid rgba(255,255,255,0.15);
  display:flex;
  flex-direction:column;
  gap:4px;
}

.gdf-stat:last-child{
  border-right:none;
}

.gdf-stat-num{
  color:#fff;
  font-size:32px;
  font-weight:700;
  font-family:sans-serif;
  line-height:1;
}

.gdf-stat-lbl{
  color:rgba(255,255,255,0.65);
  font-size:11.5px;
  font-family:sans-serif;
  margin-top:4px;
}

@media(max-width:600px){
  .gdf-banner{
    flex-direction:column;
    padding:20px;
  }

  .gdf-label-box{
    max-width:100%;
    min-width:unset;
  }

  .gdf-stats{
    flex-wrap:wrap;
    gap:16px;
  }

  .gdf-stat{
    flex:0 0 calc(50% - 8px);
    border-right:none;
    padding:0;
  }
}

.section-wrapper{
  padding: 0 40px; /* left-right gap */
}
 *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ─── CSS Variables ─────────────────────────────────── */
    :root {
      --teal:       #0af0d8;
      --teal-dim:   rgba(10, 240, 216, 0.18);
      --teal-glow:  rgba(10, 240, 216, 0.35);
      --card-bg:    rgba(5, 20, 45, 0.72);
      --card-border:rgba(10, 240, 216, 0.18);
      --text-main:  #e8f4f8;
      --text-muted: rgba(200, 230, 240, 0.65);
      --num-color:  rgba(10, 240, 216, 0.22);
    }

    /* ─── Section Wrapper ───────────────────────────────── */
    .engagement-section {
      position: relative;
      width: 100%;
      overflow: hidden;
      font-family: 'DM Sans', sans-serif;
      background-color: #020d1f; /* fallback */
    }

    /* background image – swap src to your own */
    .engagement-section__bg {
      position: absolute;
      inset: 0;
      background-image: url('YOUR_BACKGROUND_IMAGE.jpg'); /* ← replace */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      z-index: 0;
    }

    /* Dark overlay to ensure text legibility */
    .engagement-section__bg::after {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 80% 60% at 50% 0%,   rgba(0,40,80,0.55) 0%, transparent 70%),
        radial-gradient(ellipse 60% 80% at 80% 100%,  rgba(0,20,50,0.6)  0%, transparent 70%),
        linear-gradient(180deg, rgba(2,13,31,0.55) 0%, rgba(2,13,31,0.75) 100%);
    }

    /* subtle grid overlay */
    .engagement-section__grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(10,240,216,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(10,240,216,0.04) 1px, transparent 1px);
      background-size: 48px 48px;
      z-index: 1;
      pointer-events: none;
    }

    /* ─── Inner Content ─────────────────────────────────── */
    .engagement-section__inner {
      position: relative;
      z-index: 2;
      max-width: 1160px;
      margin: 0 auto;
      padding: 96px 40px 104px;
    }

    /* ─── Header ────────────────────────────────────────── */
    .engagement-header {
      text-align: center;
      margin-bottom: 64px;
    }

    .engagement-header__eyebrow {
      display: block;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--teal);
      margin-bottom: 16px;
      opacity: 0.85;
    }

    .engagement-header__title {
      font-family: 'Syne', sans-serif;
      font-size: clamp(1.55rem, 3.5vw, 2.5rem);
      font-weight: 700;
      color: var(--text-main);
      line-height: 1.25;
      max-width: 640px;
      margin: 0 auto 32px;
    }

    /* ─── Pills ─────────────────────────────────────────── */
    .engagement-pills {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 7px 18px;
      border: 1px solid var(--card-border);
      border-radius: 999px;
      background: rgba(10,240,216,0.07);
      backdrop-filter: blur(6px);
      color: var(--text-main);
      font-size: 0.8rem;
      font-weight: 400;
      letter-spacing: 0.01em;
      white-space: nowrap;
    }

    .pill svg {
      width: 14px; height: 14px;
      stroke: var(--teal);
      flex-shrink: 0;
    }

    /* ─── Steps Grid ────────────────────────────────────── */
    .engagement-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 32px 36px;
    }

    /* ─── Step Item ─────────────────────────────────────── */
    .step {
      position: relative;
    }

    /* Big background number */
    .step__number {
      font-family: 'Syne', sans-serif;
      font-size: clamp(6rem, 12vw, 9.5rem);
      font-weight: 800;
      line-height: 1;
      color: var(--num-color);
      user-select: none;
      pointer-events: none;
      position: absolute;
      top: -10px;
      left: 0px;
      z-index: 0;
      /* stroke effect */
      -webkit-text-stroke: 1.5px rgba(10,240,216,0.25);
    }

    /* The actual card */
    .step__card {
      position: relative;
      z-index: 1;
      margin-top: 60px;   /* pushes card below number */
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: 16px;
      padding: 28px 28px 30px;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .step__card:hover {
      border-color: rgba(10,240,216,0.42);
      box-shadow: 0 8px 48px rgba(10,240,216,0.12);
      transform: translateY(-3px);
    }

    /* Icon circle */
    .step__icon {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--card-border);
      background: rgba(10,240,216,0.09);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 18px;
    }

    .step__icon svg {
      width: 20px;
      height: 20px;
      stroke: var(--teal);
      fill: none;
      stroke-width: 1.6;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .step__title {
      font-family: 'Syne', sans-serif;
      font-size: 1.05rem;
      font-weight: 600;
      color: var(--text-main);
      margin-bottom: 10px;
    }

    .step__desc {
      font-size: 0.85rem;
      line-height: 1.65;
      color: var(--text-muted);
      max-width: 340px;
    }

    /* ─── Responsive ────────────────────────────────────── */
    @media (max-width: 768px) {
      .engagement-section__inner { padding: 72px 24px 80px; }
      .engagement-grid { grid-template-columns: 1fr; gap: 28px; }
      .step__number { font-size: clamp(5rem, 18vw, 7rem); }
    }

    @media (max-width: 480px) {
      .engagement-section__inner { padding: 56px 18px 64px; }
      .engagement-header__title { font-size: 1.4rem; }
      .step__card { padding: 22px 20px 24px; }
    }
  </style>
</head>
<body>

<!-- ════════════════════════════════════════
     SECTION 1: HERO
════════════════════════════════════════ -->
<div class="gits-wrap">
  <section class="gits-hero">
    <div class="gits-hero-bg"></div>

    <div class="gits-nav">
      <div class="gits-nav-breadcrumb">
        What We Do <span>/</span> Global Procurement
      </div>
      <div class="gits-hero-rule"></div>
    </div>

    <div class="gits-hero-content">
      <div class="gits-hero-inner">
        <h1 class="gits-hero-title">
          Streamlined IT Procurement Across Global Supply Networks
        </h1>
        <p class="gits-hero-desc">
          End to end sourcing and delivery of IT hardware, software, and technology solutions through trusted global vendor networks, ensuring speed, cost efficiency, and reliability.
        </p>
        <a href="#" class="gits-btn">
          <span class="gits-btn-icon">
            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 8h10M9 4l4 4-4 4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          Simplify Your IT Procurement
        </a>
      </div>
    </div>

    <div class="gits-trust-bar">
      <div class="gits-trust-item">
        <svg viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Trusted by global enterprises
      </div>
      <div class="gits-trust-divider"></div>
      <div class="gits-trust-item">
        <svg viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Powered by leading technology alliances
      </div>
      <div class="gits-trust-divider"></div>
      <div class="gits-trust-item">
        <svg viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Delivered across regions with consistency
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════
       SECTION 2: SPLIT + SERVICE CARDS
  ════════════════════════════════════════ -->
  <section class="gits-split">
    <div class="gits-split-img"></div>
    <div class="gits-split-white"></div>

    <div class="gits-cards-grid">
      <div class="gits-card">
        <div class="gits-card-bg" style="background-image: url('/images/cardframe.png');"></div>
        <div class="gits-card-overlay"></div>
        <div class="gits-card-body">
          <div class="gits-card-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="9"/>
              <path d="M3 12h18M12 3c-2.5 3-4 5.5-4 9s1.5 6 4 9c2.5-3 4-5.5 4-9s-1.5-6-4-9z" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="gits-card-title">For OEMs Technology Partners</h3>
          <p class="gits-card-desc">Expand your reach with a trusted global delivery and execution partner</p>
        </div>
      </div>

      <div class="gits-card">
        <div class="gits-card-bg" style="background-image: url('/images/cardframe.png');"></div>
        <div class="gits-card-overlay"></div>
        <div class="gits-card-body">
          <div class="gits-card-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 3l7 4v5c0 4.5-3 8.5-7 10C8 20.5 5 16.5 5 12V7l7-4z" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="gits-card-title">For Enterprise Buyers</h3>
          <p class="gits-card-desc">Simplify IT sourcing and deployment with secure, outcome-driven solutions</p>
        </div>
      </div>

      <div class="gits-card">
        <div class="gits-card-bg" style="background-image: url('/images/cardframe.png');"></div>
        <div class="gits-card-overlay"></div>
        <div class="gits-card-body">
          <div class="gits-card-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 3L5 13h7l-1 8 8-10h-7l1-8z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="gits-card-title">For Channel / Alliances</h3>
          <p class="gits-card-desc">Strengthen your offerings through a reliable and scalable partner ecosystem</p>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- ════════════════════════════════════════
     SECTION 3: ALLIANCE (light bg)
════════════════════════════════════════ -->
<section class="al-section" aria-label="Teceze Strategic Alliance">

  <div class="al-hero-band">
    <span class="al-watermark reveal" data-group="wm" aria-hidden="true">alliance</span>
    <div class="al-top-row">
      <div class="al-eyebrow-wrap reveal" data-group="toprow" data-delay="1">
        <!--<span class="al-eyebrow-tag">Strategic Alliances</span>-->
        <p class="al-eyebrow-title">Build Stronger Outcomes Through Strategic Alliances</p>
      </div>
      <h2 class="al-hero-text reveal" data-group="toprow" data-delay="2">
        Partner with <em>Teceze</em> to accelerate revenue,
        expand into new markets, and deliver
        secure, scalable solutions through a
        proven global ecosystem.
      </h2>
    </div>
  </div>

  <div class="al-cards-outer">
    <div class="al-cards-wrap">
      <div class="al-cards-grid">

        <article class="al-card al-card-revenue reveal" data-group="cards" data-delay="1">
          <div>
            <div class="al-icon-box" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                   stroke="#1a9baa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                <polyline points="17 6 23 6 23 12"/>
              </svg>
            </div>
            <h3 class="al-card-title">Drive Revenue Growth</h3>
            <p class="al-card-desc">Unlock new revenue streams through joint go-to-market strategies and co-sell opportunities.</p>
          </div>
          <div class="al-chart-ghost" aria-hidden="true">
            <svg viewBox="0 0 220 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="al-cg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#33c4d4" stop-opacity="0.2"/>
                  <stop offset="100%" stop-color="#33c4d4" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <polygon points="0,82 40,66 80,55 120,41 160,27 200,14 220,8 220,90 0,90" fill="url(#al-cg)"/>
              <polyline points="0,82 40,66 80,55 120,41 160,27 200,14 220,8"
                        fill="none" stroke="#33c4d4" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-featured reveal" data-group="cards" data-delay="2">
          <div class="al-pulse-dot" aria-hidden="true"></div>
          <p class="al-card-desc">
            Teceze alliances are designed to create measurable business impact.
            Whether you are an <strong>OEM, distributor, or service provider</strong>,
            we help you unlock new opportunities and deliver consistent value across regions.
          </p>
        </article>

        <article class="al-card al-card-paas reveal" data-group="cards" data-delay="3">
          <div>
            <h3 class="al-card-title">Secure Sourcing with PaaS</h3>
            <p class="al-card-desc">Deliver compliant, auditable procurement outcomes with Procurement as a Service integration.</p>
          </div>
          <div class="al-check-ring" aria-hidden="true">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-global reveal" data-group="cards" data-delay="4">
          <svg class="al-globe-icon" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
          </svg>
          <h3 class="al-card-title">Expand Across Global Markets</h3>
          <p class="al-card-desc">Leverage our regional footprint to enter new geographies with confidence and speed.</p>
        </article>

      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     SECTION 4: PARTNER / ALLIANCE-MODELS (dark)
════════════════════════════════════════ -->

<div class="ps-page">
<div class="ps-outer">

  <!-- ══════════════════════════════════════
       SECTION 1 — WHO WE PARTNER WITH
  ══════════════════════════════════════ -->
  <div class="ps-header">
    <div class="ps-label">Who We<br>Partner With</div>
    <div class="ps-headline">
      Establishing a new gold standard in digital
      <strong>identity security</strong>
      <span> through shared expertise and technological leadership.</span>
    </div>
  </div>

  <div class="pwp-grid">

    <!-- Featured tall card (left, spans 2 rows) -->
    <div class="pwp-featured">
      <div class="pwp-featured__img">
        <!-- Replace with: <img src="your-image.png" alt=""> -->
        <!--<div class="pwp-orb">-->
        <!--  <svg viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--    <ellipse cx="55" cy="55" rx="50" ry="27" fill="none" stroke="rgba(56,189,248,0.55)" stroke-width="1.4"/>-->
        <!--    <ellipse cx="55" cy="55" rx="27" ry="50" fill="none" stroke="rgba(37,99,235,0.65)" stroke-width="1.4"/>-->
        <!--    <circle  cx="55" cy="55" r="18"  fill="rgba(56,189,248,0.12)" stroke="rgba(56,189,248,0.45)" stroke-width="1.1"/>-->
        <!--    <circle  cx="55" cy="55" r="6"   fill="rgba(56,189,248,0.75)"/>-->
        <!--    <circle  cx="55" cy="55" r="2.5" fill="#38bdf8"/>-->
        <!--  </svg>-->
        <!--</div>-->
      </div>
      <div class="pwp-featured__body">
        <div class="pwp-featured__row">
          <div class="ps-icon">
            <!-- Replace with: <img src="your-icon.png" alt=""> -->
            <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4" stroke-linecap="round"/></svg>
          </div>
          <div class="ps-title">OEMs &amp; Technology Providers</div>
        </div>
        <p class="ps-desc">Strategic alliances with leading hardware and software vendors to ensure best-in-class solutions.</p>
        <div class="ps-tags">
          <span class="ps-tag">Juniper Networks</span>
          <span class="ps-tag">BlueCat Networks</span>
          <span class="ps-tag">NetBrain Technologies</span>
          <span class="ps-tag">FSCS</span>
          <span class="ps-tag">Netskope</span>
        </div>
      </div>
    </div>

    <!-- Global System Integrators & MSPs -->
    <div class="pwp-card">
      <div class="pwp-card__row">
        <div class="ps-icon">
          <!-- Replace with: <img src="your-icon.png" alt=""> -->
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M2 12h20M12 3a15 15 0 0 1 4 9 15 15 0 0 1-4 9 15 15 0 0 1-4-9 15 15 0 0 1 4-9z" stroke-linecap="round"/></svg>
        </div>
        <div class="ps-title">Global System Integrators &amp; MSPs</div>
      </div>
      <p class="ps-desc">Collaborating with GSIs and managed service providers for seamless end-to-end delivery.</p>
      <div class="ps-tags">
        <span class="ps-tag">MSP Alliance B</span>
        <span class="ps-tag">Systems Partner C</span>
        <span class="ps-tag">Global SI Partner A</span>
      </div>
    </div>

    <!-- Distributors -->
    <div class="pwp-card">
      <div class="pwp-card__row">
        <div class="ps-icon">
          <!-- Replace with: <img src="your-icon.png" alt=""> -->
          <svg viewBox="0 0 24 24"><path d="M5 8h14M5 12h14M5 16h14" stroke-linecap="round"/><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
        </div>
        <div class="ps-title">Distributors</div>
      </div>
      <p class="ps-desc">Working with trusted distributors to ensure efficient supply chain and product availability.</p>
      <div class="ps-tags">
        <span class="ps-tag">Distribution Partner B</span>
        <span class="ps-tag">Distribution Partner A</span>
        <span class="ps-tag">Distribution Partner C</span>
      </div>
    </div>

  </div><!-- /pwp-grid -->

  <div class="ps-divider"></div>

  <!-- ══════════════════════════════════════
       SECTION 2 — ALLIANCE MODELS
  ══════════════════════════════════════ -->
  <div class="ps-header">
    <div class="ps-label">Alliance Models</div>
    <div class="ps-headline">
      Establishing a new gold standard in digital
      <strong>identity security</strong>
      <span> through shared expertise and technological leadership.</span>
    </div>
  </div>

  <div class="am-grid">

    <!-- Col 1: Resell / Distribution — tall -->
    <div class="am-base am-resell">
      <div class="am-resell__top">
        <div class="ps-title">Resell / Distribution</div>
        <p class="ps-desc">Authorized resell and distribution agreements for efficient market access and supply chain management.</p>
      </div>
      <div class="am-resell__img">
        <!-- Replace with: <img src="your-image.png" alt=""> -->
        <!--<div class="am-resell__orb">-->
        <!--  <svg viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--    <ellipse cx="36" cy="36" rx="32" ry="17" fill="none" stroke="rgba(56,189,248,0.5)" stroke-width="1.2"/>-->
        <!--    <ellipse cx="36" cy="36" rx="17" ry="32" fill="none" stroke="rgba(37,99,235,0.55)" stroke-width="1.2"/>-->
        <!--    <circle  cx="36" cy="36" r="9"   fill="rgba(56,189,248,0.18)" stroke="rgba(56,189,248,0.45)" stroke-width="1"/>-->
        <!--    <circle  cx="36" cy="36" r="3"   fill="rgba(56,189,248,0.8)"/>-->
        <!--  </svg>-->
        <!--</div>-->
      </div>
    </div>

    <!-- Col 2 Row 1: Co-Sell / GTM -->
    <div class="am-base am-cosell">
      <div class="ps-title">Co-Sell / GTM</div>
      <p class="ps-desc">Joint go-to-market motions that accelerate sales cycles and expand customer reach.</p>
    </div>

    <!-- Col 2 Row 2: Managed Services Integration -->
    <div class="am-base am-managed">
      <div class="ps-title">Managed Services<br>Integration</div>
      <p class="ps-desc">Deep integration of services portfolios for comprehensive managed outcomes.</p>
    </div>

    <!-- Col 3: Procurement as a Service — tall -->
    <div class="am-base am-procurement">
      <div class="am-procurement__top">
        <div class="ps-title">Procurement as a Service</div>
      </div>
      <div class="am-procurement__img">
        <!-- Replace with: <img src="your-image.png" alt=""> -->
        <!--<div class="am-procurement__orb">-->
        <!--  <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--    <ellipse cx="40" cy="40" rx="36" ry="19" fill="none" stroke="rgba(37,99,235,0.5)" stroke-width="1.2"/>-->
        <!--    <ellipse cx="40" cy="40" rx="19" ry="36" fill="none" stroke="rgba(56,189,248,0.45)" stroke-width="1.2"/>-->
        <!--    <circle  cx="40" cy="40" r="11"  fill="rgba(37,99,235,0.18)" stroke="rgba(37,99,235,0.5)" stroke-width="1"/>-->
        <!--    <circle  cx="40" cy="40" r="4"   fill="rgba(56,189,248,0.85)"/>-->
        <!--    <circle  cx="40" cy="40" r="1.8" fill="#38bdf8"/>-->
        <!--  </svg>-->
        <!--</div>-->
      </div>
      <div class="am-procurement__bottom">
        <p class="ps-desc">End-to-end procurement capability embedded into your service delivery model.</p>
      </div>
    </div>

  </div><!-- /am-grid -->

</div><!-- /ps-outer -->
</div><!-- /ps-page -->



<section class="pt-section">

  <!-- ── TOP ROW ── -->
  <!--<div class="pt-top-row">-->
  <!--  <p class="pt-label">Powered By Global<br>Technology Leaders</p>-->
  <!--  <h2 class="pt-heading">-->
  <!--    We collaborate with trusted technology leaders to deliver-->
  <!--    <strong>secure,</strong>-->
  <!--    <span class="pt-muted">innovative, and future-ready solutions for our clients.</span>-->
  <!--  </h2>-->
  <!--</div>-->

  <!-- ── DIVIDER ── -->
  <!--<div class="pt-divider"></div>-->

  <!-- ── LOGOS ── -->
  <!-- ✅ Replace each src="YOUR_LOGO_URL" with your actual logo image URL -->
  <!--<div class="pt-logos">-->

    <!-- Logo 1 -->
  <!--  <div class="pt-logo-item">-->
  <!--    <img src="YOUR_LOGO_1_URL" alt="Partner Logo 1" />-->
  <!--  </div>-->

    <!-- Logo 2 -->
  <!--  <div class="pt-logo-item">-->
  <!--    <img src="YOUR_LOGO_2_URL" alt="Partner Logo 2" />-->
  <!--  </div>-->

    <!-- Logo 3 -->
  <!--  <div class="pt-logo-item">-->
  <!--    <img src="YOUR_LOGO_3_URL" alt="Partner Logo 3" />-->
  <!--  </div>-->

    <!-- Logo 4 -->
  <!--  <div class="pt-logo-item">-->
  <!--    <img src="YOUR_LOGO_4_URL" alt="Partner Logo 4" />-->
  <!--  </div>-->

    <!-- Logo 5 -->
  <!--  <div class="pt-logo-item">-->
  <!--    <img src="YOUR_LOGO_5_URL" alt="Partner Logo 5" />-->
  <!--  </div>-->

  <!--</div>-->

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->
  <div class="pt-cta">

    <!-- ✅ Replace src="YOUR_CTA_BG_URL" with your actual CTA background image URL -->
    <img
      class="pt-cta-bg-img"
      src="/images/CTA-bg-img.jpg"
      alt=""
      aria-hidden="true"
    />

    <!-- Dark gradient overlay so text stays readable over the image -->
    <div class="pt-cta-bg-overlay"></div>

    <!-- Text content -->
    <div class="pt-cta-content">
      <!--<p class="pt-cta-label">Get In Touch</p>-->
      <h3 class="pt-cta-heading">Teceze provides the flexibility, reach, and execution support needed to turn partnerships into measurable growth.</h3>
      <!--<p class="pt-cta-sub">Let's discuss how Teceze can deliver for your organization.</p>-->
      <a href="#" class="pt-cta-btn">
        <span class="pt-cta-btn-dot"></span>
        Talk to Our Alliances Team
      </a>
    </div>

  </div>

</section>
<section class="s3-section">

  <!-- Watermark background text (3 repeated lines for depth) -->
  <div class="s3-watermark" aria-hidden="true">
    <span>what we offer</span>
    <span>what we offer</span>
    <span>what we offer</span>
  </div>

  <!-- Cards area -->
  <div class="s3-cards-area">
    <div class="s3-viewport">
      <div class="s3-track" id="s3Track">

        <!-- ══ CARD 1 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 1 background image -->
          <img class="s3-card-img" src="/images/AI & Automation.png" alt="AI & Automation"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 1 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">AI-Powered</span>
            <h3 class="s3-card-title">AI &amp; Automation</h3>
          </div>
        </div>

        <!-- ══ CARD 2 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 2 background image -->
          <img class="s3-card-img" src="/images/Staffing Services .png" alt="Staffing Services"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 2 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit01.svg" alt=""/>
            <span class="s3-card-tag">People</span>
            <h3 class="s3-card-title">Staffing Services</h3>
          </div>
        </div>

        <!-- ══ CARD 3 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 3 background image -->
          <img class="s3-card-img" src="/images/Engineering Services .png" alt="Engineering Services"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 3 icon -->
            <img class="s3-card-icon" src="/icons/Vector.svg" alt=""/>
            <span class="s3-card-tag">Engineering</span>
            <h3 class="s3-card-title">Engineering Services</h3>
          </div>
        </div>

        <!-- ══ CARD 4 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 4 background image -->
          <img class="s3-card-img" src="/images/AI & Automation.png" alt="Cloud Solutions"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 4 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">Cloud</span>
            <h3 class="s3-card-title">Cloud Solutions</h3>
          </div>
        </div>

        <!-- ══ CARD 5 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 5 background image -->
          <img class="s3-card-img" src="/images/Engineering Services .png" alt="Cybersecurity"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 5 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">Security</span>
            <h3 class="s3-card-title">Cybersecurity</h3>
          </div>
        </div>

      </div><!-- /s3-track -->
    </div><!-- /s3-viewport -->
  </div><!-- /s3-cards-area -->

  <!-- Bottom bar: counter + arrows -->
  <div class="s3-bottom-bar">

    <div class="s3-counter">
      <span class="s3-counter-main" id="s3CounterMain">01</span>
      <span class="s3-counter-total">/05</span>
    </div>

    <div class="s3-nav">
      <button class="s3-nav-btn" id="s3PrevBtn" aria-label="Previous">&#8592;</button>
      <button class="s3-nav-btn" id="s3NextBtn" aria-label="Next">&#8594;</button>
    </div>

  </div>

</section>
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

<section class="al-section" aria-label="Teceze Strategic Alliance">

  <div class="al-hero-band">
    <span class="al-watermark reveal" data-group="wm" aria-hidden="true">solutions</span>
    <div class="al-top-row">
      <div class="al-eyebrow-wrap reveal" data-group="toprow" data-delay="1">
        <p class="al-eyebrow-title">Solutions Designed Around
Your Business Needs</p>
      </div>
      <h2 class="al-hero-text reveal" data-group="toprow" data-delay="2">
        Quickly find the right solution based on your goals, industry, or technology requirements.
      </h2>
    </div>
  </div>

  <div class="al-cards-outer">
    <div class="al-cards-wrap">
      <div class="al-cards-grid">

        <article class="al-card al-card-revenue reveal" data-group="cards" data-delay="1">
          <div>
            <!--<div class="al-icon-box" aria-hidden="true">-->
            <!--  <svg width="20" height="20" viewBox="0 0 24 24" fill="none"-->
            <!--       stroke="#1a9baa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">-->
            <!--    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>-->
            <!--    <polyline points="17 6 23 6 23 12"/>-->
            <!--  </svg>-->
            <!--</div>-->
            <h3 class="al-card-title">Reduce IT Costs</h3>
            <p class="al-card-desc">Consolidate procurement and optimize your IT spend through our PaaS model and vendor alliances.</p>
          </div>
          <div class="al-chart-ghost" aria-hidden="true">
            <svg viewBox="0 0 220 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="al-cg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#33c4d4" stop-opacity="0.2"/>
                  <stop offset="100%" stop-color="#33c4d4" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <polygon points="0,82 40,66 80,55 120,41 160,27 200,14 220,8 220,90 0,90" fill="url(#al-cg)"/>
              <polyline points="0,82 40,66 80,55 120,41 160,27 200,14 220,8"
                        fill="none" stroke="#33c4d4" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-featured reveal" data-group="cards" data-delay="2">
          <div class="al-pulse-dot" aria-hidden="true"></div>
          <h3 class="al-card-title">Improve Security</h3>
          <p class="al-card-desc">
            Implement zero-trust frameworks, SASE architectures, and continuous compliance monitoring.
          </p>
        </article>

        <article class="al-card al-card-paas reveal" data-group="cards" data-delay="3">
          <div>
            <h3 class="al-card-title">Enable Global Expansion</h3>
            <p class="al-card-desc">Leverage our regional delivery footprint to deploy technology consistently across geographies.</p>
          </div>
          <div class="al-check-ring" aria-hidden="true">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-global reveal" data-group="cards" data-delay="4">
          <svg class="al-globe-icon" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
          </svg>
          <h3 class="al-card-title">Accelerate Procurement</h3>
          <p class="al-card-desc">Streamline IT sourcing with pre-validated vendor relationships and automated procurement workflows.</p>
        </article>

      </div>
    </div>
  </div>
</section>
<div class="section-wrapper">
<div class="gdf-banner">

  <div class="gdf-label-box">
    <h2>Global Delivery Footprint</h2>
    <p>Consistent delivery across APAC, EMEA, and the Americas.</p>
  </div>

  <div class="gdf-stats">
    <div class="gdf-stat">
      <span class="gdf-stat-num">2,900+</span>
      <span class="gdf-stat-lbl">Deployments Globally</span>
    </div>
    <div class="gdf-stat">
      <span class="gdf-stat-num">50+</span>
      <span class="gdf-stat-lbl">Countries Served</span>
    </div>
    <div class="gdf-stat">
      <span class="gdf-stat-num">03</span>
      <span class="gdf-stat-lbl">Major Regions</span>
    </div>
    <div class="gdf-stat">
      <span class="gdf-stat-num">98%</span>
      <span class="gdf-stat-lbl">Client Satisfaction</span>
    </div>
  </div>

</div>
</div>
<section class="al-section" aria-label="Teceze Strategic Alliance">

  <div class="al-hero-band">
    <span class="al-watermark reveal" data-group="wm" aria-hidden="true">alliance</span>
    <div class="al-top-row">
      <div class="al-eyebrow-wrap reveal" data-group="toprow" data-delay="1">
        <span class="al-eyebrow-tag">Strategic Alliances</span>
        <p class="al-eyebrow-title">Build Stronger Outcomes Through Strategic Alliances</p>
      </div>
      <h2 class="al-hero-text reveal" data-group="toprow" data-delay="2">
        Partner with <em>Teceze</em> to accelerate revenue,
        expand into new markets, and deliver
        secure, scalable solutions through a
        proven global ecosystem.
      </h2>
    </div>
  </div>

  <div class="al-cards-outer">
    <div class="al-cards-wrap">
      <div class="al-cards-grid">

        <article class="al-card al-card-revenue reveal" data-group="cards" data-delay="1">
          <div>
            <div class="al-icon-box" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                   stroke="#1a9baa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                <polyline points="17 6 23 6 23 12"/>
              </svg>
            </div>
            <h3 class="al-card-title">Drive Revenue Growth</h3>
            <p class="al-card-desc">Unlock new revenue streams through joint go-to-market strategies and co-sell opportunities.</p>
          </div>
          <div class="al-chart-ghost" aria-hidden="true">
            <svg viewBox="0 0 220 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="al-cg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#33c4d4" stop-opacity="0.2"/>
                  <stop offset="100%" stop-color="#33c4d4" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <polygon points="0,82 40,66 80,55 120,41 160,27 200,14 220,8 220,90 0,90" fill="url(#al-cg)"/>
              <polyline points="0,82 40,66 80,55 120,41 160,27 200,14 220,8"
                        fill="none" stroke="#33c4d4" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-featured reveal" data-group="cards" data-delay="2">
          <div class="al-pulse-dot" aria-hidden="true"></div>
          <p class="al-card-desc">
            Teceze alliances are designed to create measurable business impact.
            Whether you are an <strong>OEM, distributor, or service provider</strong>,
            we help you unlock new opportunities and deliver consistent value across regions.
          </p>
        </article>

        <article class="al-card al-card-paas reveal" data-group="cards" data-delay="3">
          <div>
            <h3 class="al-card-title">Secure Sourcing with PaaS</h3>
            <p class="al-card-desc">Deliver compliant, auditable procurement outcomes with Procurement as a Service integration.</p>
          </div>
          <div class="al-check-ring" aria-hidden="true">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
        </article>

        <article class="al-card al-card-global reveal" data-group="cards" data-delay="4">
          <svg class="al-globe-icon" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
          </svg>
          <h3 class="al-card-title">Expand Across Global Markets</h3>
          <p class="al-card-desc">Leverage our regional footprint to enter new geographies with confidence and speed.</p>
        </article>

      </div>
    </div>
  </div>
</section>


<section class="engagement-section" aria-label="Engagement process">

  <!-- Background image layer -->
  <div class="engagement-section__bg" aria-hidden="true"></div>

  <!-- Grid overlay -->
  <div class="engagement-section__grid" aria-hidden="true"></div>

  <div class="engagement-section__inner">

    <!-- ── Header ── -->
    <header class="engagement-header">
      <span class="engagement-header__eyebrow">A Clear Path From Conversation To Execution</span>
      <h2 class="engagement-header__title">
        From the first call to full deployment, Teceze provides one point of accountability and a structured engagement designed for enterprise timelines.
      </h2>

      <!-- Pills -->
      <div class="engagement-pills" role="list">
        <span class="pill" role="listitem">
          <!-- checkmark -->
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke-width="1.5"/><path d="M8 12l3 3 5-5" stroke-width="1.8"/></svg>
          No long onboarding
        </span>
        <span class="pill" role="listitem">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke-width="1.5"/><path d="M8 12l3 3 5-5" stroke-width="1.8"/></svg>
          Clear deliverables
        </span>
        <span class="pill" role="listitem">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke-width="1.5"/><path d="M8 12l3 3 5-5" stroke-width="1.8"/></svg>
          Flexible engagement
        </span>
      </div>
    </header>

    <!-- ── Steps ── -->
    <div class="engagement-grid">

      <!-- Step 01 -->
      <article class="step">
        <div class="step__number" aria-hidden="true">01</div>
        <div class="step__card">
          <div class="step__icon" aria-hidden="true">
            <!-- phone icon -->
            <svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
          </div>
          <h3 class="step__title">Discovery Call</h3>
          <p class="step__desc">A focused conversation to understand your business context, goals, and immediate challenges.</p>
        </div>
      </article>

      <!-- Step 02 -->
      <article class="step">
        <div class="step__number" aria-hidden="true">02</div>
        <div class="step__card">
          <div class="step__icon" aria-hidden="true">
            <!-- document icon -->
            <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>
          </div>
          <h3 class="step__title">Assessment &amp; Proposal</h3>
          <p class="step__desc">A tailored solution design, commercial proposal, and project roadmap aligned to your objectives.</p>
        </div>
      </article>

      <!-- Step 03 -->
      <article class="step">
        <div class="step__number" aria-hidden="true">03</div>
        <div class="step__card">
          <div class="step__icon" aria-hidden="true">
            <!-- rocket icon -->
            <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2z" stroke-opacity="0"/><path d="M4.5 16.5c-1.5 1.5-2 5-2 5s3.5-.5 5-2l6-6-3-3-6 6z"/><path d="M19.5 4.5s-2 0-4 1.5L12 9l3 3 3-3.5c1.5-2 1.5-4 1.5-4z"/><circle cx="14.5" cy="9.5" r="1"/></svg>
          </div>
          <h3 class="step__title">Pilot / Rollout</h3>
          <p class="step__desc">Controlled deployment with defined milestones, regular reviews, and stakeholder alignment.</p>
        </div>
      </article>

      <!-- Step 04 -->
      <article class="step">
        <div class="step__number" aria-hidden="true">04</div>
        <div class="step__card">
          <div class="step__icon" aria-hidden="true">
            <!-- settings/gear icon -->
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
          </div>
          <h3 class="step__title">Full Deployment &amp; Support</h3>
          <p class="step__desc">End-to-end execution with continuous support, optimization, and lifecycle management.</p>
        </div>
      </article>

    </div><!-- /engagement-grid -->
  </div><!-- /inner -->
</section>



<section class="s3-section">

  <!-- Watermark background text (3 repeated lines for depth) -->
  <div class="s3-watermark" aria-hidden="true">
    <span>what we offer</span>
    <span>what we offer</span>
    <span>what we offer</span>
  </div>

  <!-- Cards area -->
  <div class="s3-cards-area">
    <div class="s3-viewport">
      <div class="s3-track" id="s3Track">

        <!-- ══ CARD 1 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 1 background image -->
          <img class="s3-card-img" src="/images/AI & Automation.png" alt="AI & Automation"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 1 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">AI-Powered</span>
            <h3 class="s3-card-title">AI &amp; Automation</h3>
          </div>
        </div>

        <!-- ══ CARD 2 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 2 background image -->
          <img class="s3-card-img" src="/images/Staffing Services .png" alt="Staffing Services"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 2 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit01.svg" alt=""/>
            <span class="s3-card-tag">People</span>
            <h3 class="s3-card-title">Staffing Services</h3>
          </div>
        </div>

        <!-- ══ CARD 3 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 3 background image -->
          <img class="s3-card-img" src="/images/Engineering Services .png" alt="Engineering Services"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 3 icon -->
            <img class="s3-card-icon" src="/icons/Vector.svg" alt=""/>
            <span class="s3-card-tag">Engineering</span>
            <h3 class="s3-card-title">Engineering Services</h3>
          </div>
        </div>

        <!-- ══ CARD 4 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 4 background image -->
          <img class="s3-card-img" src="/images/AI & Automation.png" alt="Cloud Solutions"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 4 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">Cloud</span>
            <h3 class="s3-card-title">Cloud Solutions</h3>
          </div>
        </div>

        <!-- ══ CARD 5 ══ -->
        <div class="s3-card">
          <!-- ✅ Replace src — card 5 background image -->
          <img class="s3-card-img" src="/images/Engineering Services .png" alt="Cybersecurity"/>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <!-- ✅ Replace src — card 5 icon -->
            <img class="s3-card-icon" src="/icons/HeadCircuit.svg" alt=""/>
            <span class="s3-card-tag">Security</span>
            <h3 class="s3-card-title">Cybersecurity</h3>
          </div>
        </div>

      </div><!-- /s3-track -->
    </div><!-- /s3-viewport -->
  </div><!-- /s3-cards-area -->

  <!-- Bottom bar: counter + arrows -->
  <div class="s3-bottom-bar">

    <div class="s3-counter">
      <span class="s3-counter-main" id="s3CounterMain">01</span>
      <span class="s3-counter-total">/05</span>
    </div>

    <div class="s3-nav">
      <button class="s3-nav-btn" id="s3PrevBtn" aria-label="Previous">&#8592;</button>
      <button class="s3-nav-btn" id="s3NextBtn" aria-label="Next">&#8594;</button>
    </div>

  </div>

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
    <div class="cu-form-wrap">
      <h2>Contact us now</h2>
      <p>Fill in the data for profile. It will take a couple of minutes.</p>

      <!-- Name row -->
      <div class="cu-row">
        <div class="cu-field">
          <label>First Name</label>
          <input type="text" placeholder="John" />
        </div>
        <div class="cu-field">
          <label>Last Name</label>
          <input type="text" placeholder="David" />
        </div>
      </div>

      <!-- Phone -->
      <div class="cu-field" style="margin-bottom:16px;">
        <label>Phone number</label>
        <div class="cu-phone-row">
          <div class="cu-phone-prefix">
            <span>🇺🇸</span>
            <select>
              <option>+1</option>
              <option>+44</option>
              <option>+91</option>
              <option>+61</option>
            </select>
          </div>
          <input class="cu-phone-input" type="tel" placeholder="Phone number" />
        </div>
      </div>

      <!-- Service -->
      <div class="cu-field" style="margin-bottom:16px;">
        <label>Service Interested</label>
        <select>
          <option value="" disabled selected>Select</option>
          <option>Security Audit</option>
          <option>Penetration Testing</option>
          <option>Compliance Consulting</option>
          <option>Incident Response</option>
        </select>
      </div>

      <!-- Message -->
      <div class="cu-field" style="margin-bottom:8px;">
        <label>Describe your case</label>
        <textarea placeholder="Tell us about your use case..."></textarea>
      </div>

      <!-- Submit -->
      <button class="cu-btn">
        <span class="cu-btn-dot"></span>
        Get In Touch
      </button>
    </div>

  </div>
</section>
<section class="pt-section">

  <!-- ── TOP ROW ── -->

  <!-- ── DIVIDER ── -->
  

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->
  <div class="pt-cta">

    <!-- ✅ Replace src="YOUR_CTA_BG_URL" with your actual CTA background image URL -->
    <img
      class="pt-cta-bg-img"
      src="/images/CTA-bg-img.jpg"
      alt=""
      aria-hidden="true"
    />

    <!-- Dark gradient overlay so text stays readable over the image -->
    <div class="pt-cta-bg-overlay"></div>

    <!-- Text content -->
    <div class="pt-cta-content">
      <p class="pt-cta-label">Get In Touch</p>
      <h3 class="pt-cta-heading">Start with a Clear Security<br>Assessment</h3>
      <p class="pt-cta-sub">Let's discuss how Teceze can deliver for your organization.</p>
      <a href="#" class="pt-cta-btn">
        <span class="pt-cta-btn-dot"></span>
        Talk to Our Alliances Team
      </a>
    </div>

  </div>

</section>

<script>
  // Scroll-reveal (no class conflicts — uses data-group only)
  const groups = {};
  document.querySelectorAll('.reveal').forEach(el => {
    const g = el.dataset.group || 'x';
    (groups[g] = groups[g] || []).push(el);
  });
  Object.values(groups).forEach(els => {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.15 });
    els.forEach(el => obs.observe(el));
  });


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
</body>
<script src="/assets/script.js"></script>
</html>