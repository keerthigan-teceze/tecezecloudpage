<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Digital Workplace, Reimagined</title>
<script src="/assets/script.js"></script>
   <link rel="stylesheet" href="/assets/style.css">

  <style>
  /* ================================================
   SECTION 3: CONTACT FORM
================================================ */
.ct-form-section {
  background: #ffffff;
  width: 100%;
  padding: 60px 40px 80px;
}

.ct-form-wrapper {
  display: flex;
  gap: 50px;
  max-width: 1100px;
  margin: 0 auto 60px;
  align-items: stretch;
}

/* Left Panel */
.ct-form-left {
  position: relative;
  width: 380px;
  min-width: 320px;
  border-radius: 16px;
  overflow: hidden;
  background-image: url('images/contact-left-img.png');
  background-size: cover;
  background-position: center;
  min-height: 420px;
  flex-shrink: 0;
}

.ct-form-left-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(10, 20, 60, 0.55), rgba(10, 20, 80, 0.85));
  z-index: 1;
}

.ct-form-left-content {
  position: relative;
  z-index: 2;
  padding: 40px 32px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  height: 100%;
}

.ct-form-tag {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  color: rgba(255, 255, 255, 0.75);
  text-transform: uppercase;
  margin-bottom: 14px;
}

.ct-form-left-title {
  font-size: 24px;
  font-weight: 600;
  color: #ffffff;
  line-height: 1.35;
  margin-bottom: 14px;
}

.ct-form-left-sub {
  font-size: 13px;
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.65;
}

/* Right Panel */
.ct-form-right {
  flex: 1;
  min-width: 0;
}

.ct-form-title {
  font-size: 26px;
  font-weight: 700;
  color: #0f1f3d;
  margin-bottom: 6px;
}

.ct-form-subtitle {
  font-size: 13px;
  color: #8a94a6;
  margin-bottom: 28px;
}

.ct-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.ct-form-row {
  display: flex;
  gap: 16px;
}

.ct-form-row .ct-form-group {
  flex: 1;
}

.ct-form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.ct-label {
  font-size: 13px;
  font-weight: 500;
  color: #0f1f3d;
}

.ct-input {
  width: 100%;
  padding: 11px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  outline: none;
  transition: border-color 0.3s ease;
  background: #ffffff;
}

.ct-input:focus {
  border-color: #2A44B0;
}

.ct-input::placeholder {
  color: #b0b7c3;
}

/* Phone Input */
.ct-phone-wrap {
  display: flex;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  overflow: hidden;
}

.ct-phone-flag {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 11px 12px;
  background: #f7f8fb;
  border-right: 1px solid #dde1ea;
  font-size: 13px;
  color: #0f1f3d;
  cursor: pointer;
  white-space: nowrap;
}

.ct-flag-img {
  width: 20px;
  height: auto;
  border-radius: 2px;
}

.ct-phone-input {
  border: none;
  border-radius: 0;
  flex: 1;
}

.ct-phone-input:focus {
  border-color: transparent;
  box-shadow: none;
}

/* Select */
.ct-select-wrap {
  position: relative;
}

.ct-select {
  width: 100%;
  padding: 11px 40px 11px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  background: #ffffff;
  outline: none;
  appearance: none;
  cursor: pointer;
  transition: border-color 0.3s ease;
}

.ct-select:focus {
  border-color: #2A44B0;
}

.ct-select-arrow {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
  color: #8a94a6;
}

/* Textarea */
.ct-textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  resize: vertical;
  min-height: 110px;
  outline: none;
  font-family: 'Segoe UI', Arial, sans-serif;
  transition: border-color 0.3s ease;
}

.ct-textarea:focus {
  border-color: #2A44B0;
}

.ct-textarea::placeholder {
  color: #b0b7c3;
}

/* Submit Button */
.ct-submit-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 10px 24px 10px 10px;
  border: 1.5px solid #2A44B0;
  border-radius: 50px;
  background: transparent;
  color: #0f1f3d;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: background 0.3s ease;
  width: fit-content;
}

.ct-submit-btn:hover {
  background: rgba(42, 68, 176, 0.06);
}

.ct-submit-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: linear-gradient(135deg, #13C5B8, #2A44B0);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  flex-shrink: 0;
}

/* Bottom Text */
.ct-form-bottom {
  display: flex;
  align-items: center;
  gap: 40px;
  max-width: 1100px;
  margin: 0 auto;
  padding-top: 40px;
  border-top: 1px solid #edf0f5;
}

.ct-powered-label {
  font-size: 12px;
  color: #8a94a6;
  line-height: 1.6;
  min-width: 140px;
}

.ct-bottom-text {
  font-size: 18px;
  font-weight: 600;
  color: #0f1f3d;
  line-height: 1.5;
}

.ct-bottom-highlight {
  color: #8a94a6;
  font-weight: 400;
}

      .ci-hero {
    position: relative;
    width: 100%;
    background: linear-gradient(135deg, #040e32 0%, #0a2060 40%, #0d3a6e 70%, #0a4a5e 100%);
   background-image: url('/images/managed it service.png'); /* ← ADD BG IMAGE HERE */
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
    overflow: hidden;
  }

  .ci-hero-content {
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin: 0 auto;
    padding: 101px 48px 48px;
    width: 100%;
  }

  /* Breadcrumb row */
  .ci-top-row {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 48px;
    align-items: center;
    margin-bottom: 10px;
  }

  .ci-hero-breadcrumb {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1.8px;
    color: rgba(255,255,255,0.75);
    text-transform: uppercase;
  }

  /* Full-width divider */
  .ci-full-divider {
    width: 100%;
    height: 1px;
    background: rgba(255,255,255,0.25);
    margin-bottom: 28px;
  }

  /* Two-column body */
  .ci-body-row {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 48px;
    align-items: start;
  }

  /* LEFT */
  .ci-hero-left { display: flex; flex-direction: column; }

  .ci-hero-title {
    font-size: 40px;
    font-weight: 300;
    line-height: 1.18;
    color: #fff;
    margin-bottom: 16px;
    max-width: 520px;
  }

  .ci-hero-sub {
    font-size: 13px;
    line-height: 1.75;
    color: rgba(255,255,255,0.68);
    max-width: 400px;
    margin-bottom: 28px;
  }

  .ci-hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 7px 18px 7px 7px;
    border: 1.5px solid rgba(255,255,255,0.45);
    border-radius: 50px;
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    width: fit-content;
  }

  .ci-hero-btn-icon {
    width: 28px; height: 28px;
    border-radius: 50%;
    background: linear-gradient(135deg, #13C5B8, #2A44B0);
    display: flex; align-items: center; justify-content: center;
  }

  /* FORM */
  .ci-form-wrap {
    background: rgba(255,255,255,0.09);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 14px;
    padding: 20px 18px 18px;
    display: flex;
    flex-direction: column;
    gap: 13px;
  }

  .ci-form-title { font-size: 17px; font-weight: 600; color: #fff; }

  .ci-field { display: flex; flex-direction: column; gap: 5px; }

  .ci-field label {
    font-size: 11px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.78);
    letter-spacing: 0.02em;
  }

  .ci-field input,
  .ci-field textarea {
    width: 100%;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 7px;
    padding: 8px 11px;
    font-size: 12.5px;
    font-family: inherit;
    color: #fff;
    outline: none;
  }

  .ci-field input::placeholder,
  .ci-field textarea::placeholder { color: rgba(200,220,255,0.35); }

  .ci-field input:focus,
  .ci-field textarea:focus {
    border-color: rgba(100,180,255,0.5);
    background: rgba(255,255,255,0.12);
  }

  .ci-field textarea { resize: none; height: 68px; line-height: 1.5; }

  /* PHONE ROW */
  .ci-phone-row { display: flex; gap: 7px; position: relative; }

  .ci-flag-btn {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 0 9px;
    height: 34px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 7px;
    color: #fff;
    font-size: 12.5px;
    font-family: inherit;
    cursor: pointer;
    white-space: nowrap;
    user-select: none;
  }

  .ci-flag-btn .flag-emoji { font-size: 15px; line-height: 1; }
  .ci-flag-btn .dial-code { font-size: 12px; font-weight: 500; }

  .ci-flag-btn .chev {
    width: 0; height: 0;
    border-left: 3.5px solid transparent;
    border-right: 3.5px solid transparent;
    border-top: 4.5px solid rgba(255,255,255,0.55);
    margin-left: 2px;
    margin-top: 1px;
  }

  .ci-phone-input {
    flex: 1;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 7px;
    padding: 8px 11px;
    font-size: 12.5px;
    font-family: inherit;
    color: #fff;
    outline: none;
  }

  .ci-phone-input::placeholder { color: rgba(200,220,255,0.35); }
  .ci-phone-input:focus { border-color: rgba(100,180,255,0.5); background: rgba(255,255,255,0.12); }

  /* DROPDOWN */
  .ci-dropdown {
    display: none;
    position: absolute;
    top: calc(100% + 5px);
    left: 0;
    width: 240px;
    max-height: 210px;
    overflow-y: auto;
    background: #0d1f50;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 9px;
    z-index: 200;
    padding: 4px 0;
  }

  .ci-dropdown.open { display: block; }

  .ci-dropdown-search {
    width: calc(100% - 14px);
    margin: 6px 7px;
    padding: 6px 10px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 6px;
    font-size: 12px;
    font-family: inherit;
    color: #fff;
    outline: none;
  }

  .ci-dropdown-search::placeholder { color: rgba(255,255,255,0.35); }

  .ci-dropdown-list { list-style: none; }

  .ci-dropdown-item {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 7px 12px;
    font-size: 12.5px;
    color: rgba(255,255,255,0.85);
    cursor: pointer;
  }

  .ci-dropdown-item:hover { background: rgba(255,255,255,0.10); }
  .ci-dropdown-item.selected { background: rgba(100,180,255,0.15); }

  .ci-dropdown-item .di-flag { font-size: 15px; line-height: 1; }
  .ci-dropdown-item .di-name { flex: 1; font-size: 12px; color: rgba(255,255,255,0.65); }
  .ci-dropdown-item .di-code { font-size: 12px; font-weight: 500; }

  .ci-dropdown::-webkit-scrollbar { width: 4px; }
  .ci-dropdown::-webkit-scrollbar-track { background: transparent; }
  .ci-dropdown::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 2px; }

  /* SUBMIT */
  .ci-form-btn {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 7px 18px 7px 7px;
    border-radius: 50px;
    background: rgba(255,255,255,0.07);
    border: 1.5px solid rgba(255,255,255,0.25);
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    font-family: inherit;
    cursor: pointer;
    width: fit-content;
    margin-top: 2px;
  }

  .ci-form-btn-icon {
    width: 26px; height: 26px;
    border-radius: 50%;
    background: linear-gradient(135deg, #13C5B8, #2A44B0);
    display: flex; align-items: center; justify-content: center;
  }
  .s3-section {
    position: relative;
    width: 100%;
    padding: clamp(2rem, 5vw, 5rem) 0 clamp(3rem, 5vw, 5rem);
    background: #fff;
    overflow: hidden;
  }

  /* ══ WATERMARK ══ */
  .s3-watermark {
    position: absolute; top: 0; left: 0; right: 0;
    font-size: clamp(72px, 15vw, 207px);
    font-weight: 700; line-height: 0.92;
    color: rgba(0,0,0,0.055);
    white-space: nowrap; pointer-events: none; user-select: none;
    padding-left: clamp(1rem, 3vw, 3rem);
    display: flex; flex-direction: column; gap: 0;
  }
  .s3-watermark span { display: block; line-height: 0.92; }

  /* ══ CARDS AREA ══ */
  .s3-cards-area {
    position: relative; z-index: 2;
    padding: 0 clamp(1rem, 5vw, 5rem);
    margin-top: clamp(2rem, 8vw, 8rem);
  }
  .s3-viewport {
    overflow: hidden;
    width: 100%;
  }
  .s3-track {
    display: flex;
    gap: 16px;
    will-change: transform;
  }
  .s3-track.is-animating {
    transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* ══ CARD ══ */
  .s3-card {
    flex: 0 0 calc((100% - 32px) / 3);
    min-width: 0;
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 3 / 3.6;
    cursor: pointer;
  }

  .s3-card-img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover; object-position: center top;
    transition: opacity 0.42s ease, transform 0.45s ease;
  }

  .s3-card-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to bottom,
      rgba(0,0,0,0.08) 0%,
      rgba(0,0,0,0.18) 40%,
      rgba(0,0,0,0.72) 100%);
    transition: opacity 0.42s ease;
  }

  .s3-card-light {
    position: absolute; inset: 0; z-index: 0; opacity: 0;
    background: linear-gradient(155deg,
      rgba(168,212,234,0.97) 0%,
      rgba(200,232,248,0.97) 50%,
      rgba(222,244,255,0.98) 100%);
    transition: opacity 0.42s ease;
  }

  .s3-card-body {
    position: absolute; inset: 0; z-index: 2;
    display: flex; flex-direction: column;
    justify-content: flex-end;
    padding: clamp(0.75rem, 2vw, 1.4rem);
    overflow: hidden;
  }

  /* ── THIS wrapper moves up on hover ── */
  .s3-card-content {
    display: flex; flex-direction: column;
    transform: translateY(0);
    transition: transform 0.42s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .s3-card:hover .s3-card-content {
    transform: translateY(-0.8rem);
  }

  .s3-card-top {
    display: flex; flex-direction: column; align-items: flex-start;
  }

  .s3-card-icon {
    width: clamp(24px, 3vw, 36px);
    height: clamp(24px, 3vw, 36px);
    margin-bottom: 0.4rem;
    display: block; object-fit: contain;
    filter: brightness(0) invert(1);
    transition: filter 0.35s ease;
  }

  .s3-card-tag {
    font-size: clamp(0.55rem, 0.9vw, 0.68rem);
    font-weight: 600; letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
    margin-bottom: 0.25rem; display: block;
    transition: color 0.35s ease;
  }

  .s3-card-title {
    font-size: clamp(0.9rem, 1.8vw, 1.4rem);
    font-weight: 700; color: #fff; line-height: 1.2;
    margin: 0;
    transition: color 0.35s ease;
  }

  .s3-card-bottom {
    max-height: 0; overflow: hidden; opacity: 0;
    transition:
      max-height 0.45s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 0.38s ease;
  }

  .s3-card-desc {
    font-size: clamp(0.68rem, 1vw, 0.82rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.55;
    margin: 0.55rem 0 0;
    transition: color 0.35s ease;
  }

  /* ══ HOVER ══ */
  .s3-card:hover .s3-card-img     { opacity: 0; transform: scale(1.04); }
  .s3-card:hover .s3-card-overlay { opacity: 0; }
  .s3-card:hover .s3-card-light   { opacity: 1; }
  .s3-card:hover .s3-card-icon    { filter: brightness(0) invert(0); }
  .s3-card:hover .s3-card-tag     { color: rgba(20,60,90,0.68); }
  .s3-card:hover .s3-card-title   { color: #0d2b3e; }
  .s3-card:hover .s3-card-bottom  { max-height: 140px; opacity: 1; }
  .s3-card:hover .s3-card-desc    { color: rgba(13,43,62,0.82); }

  /* ══ BOTTOM BAR ══ */
  .s3-bottom-bar {
    display: flex; align-items: center;
    justify-content: space-between;
    padding: 1.25rem clamp(1rem, 5vw, 5rem) 0;
    position: relative; z-index: 3;
  }

  .s3-counter { display: flex; align-items: baseline; gap: 4px; }
  .s3-counter-main {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 800; color: #1a8fc1; line-height: 1;
    min-width: 2.8rem;
  }
  .s3-counter-total {
    font-size: 0.85rem; font-weight: 500;
    color: rgba(0,0,0,0.38); letter-spacing: 0.03em;
  }

  .s3-nav { display: flex; gap: 8px; }
  .s3-nav-btn {
    width: 40px; height: 40px; border-radius: 50%;
    border: 1.5px solid rgba(0,0,0,0.2);
    background: #fff; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: border-color 0.2s, background 0.2s, opacity 0.2s;
  }
  .s3-nav-btn:hover { border-color: #111; background: #f5f5f5; }
  .s3-nav-btn svg {
    width: 16px; height: 16px; stroke: #111; fill: none;
    stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
  }
  .s3-nav-btn.s3-disabled {
    opacity: 0.28;
    cursor: default;
    pointer-events: none;
  }

  /* ══ TOUCH ══ */
  @media (hover: none) {
    .s3-card-img     { opacity: 0; }
    .s3-card-overlay { opacity: 0; }
    .s3-card-light   { opacity: 1; }
    .s3-card-content { transform: translateY(-0.8rem); }
    .s3-card-icon    { filter: brightness(0) invert(0); }
    .s3-card-tag     { color: rgba(20,60,90,0.68); }
    .s3-card-title   { color: #0d2b3e; }
    .s3-card-bottom  { max-height: 140px; opacity: 1; }
    .s3-card-desc    { color: rgba(13,43,62,0.82); }
  }

  /* ══ TABLET ≤ 1024px ══ */
  @media (max-width: 1024px) {
    .s3-card { flex: 0 0 calc((100% - 16px) / 2); }
  }

  /* ══ MOBILE ≤ 640px ══ */
  @media (max-width: 640px) {
    .s3-cards-area { padding: 0 clamp(0.75rem,4vw,1.25rem); margin-top: clamp(1.5rem,6vw,3rem); }
    .s3-card       { flex: 0 0 100%; aspect-ratio: 4/4.2; border-radius: 12px; }
    .s3-card-body  { padding: 1rem; }
    .s3-card-icon  { width: 26px; height: 26px; }
    .s3-card-title { font-size: 1.1rem; }
    .s3-card-desc  { font-size: 0.78rem; }
    .s3-bottom-bar { padding: 1rem clamp(0.75rem,4vw,1.25rem) 0; }
  }

  @media (max-width: 400px) {
    .s3-card       { aspect-ratio: 3/3.8; }
    .s3-card-title { font-size: 1rem; }
  }
  
  
  
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
        .opr-section {
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #f5f8fc;
    font-family: 'Manrope', sans-serif;
    padding: 0 0 80px;
  }

  .opr-section__blob {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    width: 70%;
    height: 55%;
    background: radial-gradient(ellipse at center, rgba(190,220,245,0.32) 0%, rgba(210,230,250,0.14) 50%, transparent 75%);
    pointer-events: none;
    z-index: 0;
  }

  .opr-watermark {
    position: relative;
    z-index: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0.88;
    margin-bottom: -0.06em;
    pointer-events: none;
    user-select: none;
  }

  .opr-watermark__text {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 22vw;
    font-weight: 800;
    font-family: 'Manrope', sans-serif;
    letter-spacing: -0.04em;
    white-space: nowrap;
    color: rgba(180,205,230,0.28);
    line-height: 1;
  }

  .opr-meta {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 220px 1fr;
    column-gap: 40px;
    align-items: start;
    max-width: 1240px;
    margin: 0 auto 48px;
    padding: 0 5%;
  }

  .opr-meta__badge p {
    font-size: 11.5px;
    font-weight: 600;
    line-height: 1.65;
    color: #5a7a99;
    letter-spacing: 0.005em;
  }

  .opr-meta__headline {
    font-size: clamp(1.4rem, 2.2vw, 2rem);
    font-weight: 700;
    color: #0f2a45;
    line-height: 1.35;
    letter-spacing: -0.022em;
    max-width: 620px;
    margin: 0;
  }

  .opr-grid {
    position: relative;
    z-index: 1;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 5%;
    display: grid;
    grid-template-columns: 1fr 1.1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 14px;
  }

  .opr-card {
    background: #ffffff;
    border: 1px solid #d8e6f3;
    border-radius: 14px;
    padding: 30px 28px 32px;
    box-shadow: 0 2px 10px rgba(30,70,120,0.06);
    transition: box-shadow 0.28s ease, transform 0.28s ease;
    position: relative;
    overflow: hidden;
  }

  .opr-card:hover {
    box-shadow: 0 8px 28px rgba(30,70,120,0.13);
    transform: translateY(-3px);
  }

  .opr-card--1 {
    grid-column: 1;
    grid-row: 1 / 3;
    display: flex;
    flex-direction: column;
  }

  .opr-card--2 {
    grid-column: 2;
    grid-row: 1;
    background: linear-gradient(145deg, #f2f8ff 0%, #e3effc 100%);
  }

  .opr-card--3 {
    grid-column: 2;
    grid-row: 2;
    background: linear-gradient(145deg, #f2f8ff 0%, #e3effc 100%);
  }

  .opr-card--4 {
    grid-column: 3;
    grid-row: 1 / 3;
    display: flex;
    flex-direction: column;
  }

  .opr-card--1::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: -8px;
    width: 220px;
    height: 180px;
    opacity: 0.10;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 220 180'%3E%3Crect x='8' y='60' width='50' height='120' rx='4' fill='%231a6fd4'/%3E%3Crect x='18' y='42' width='20' height='18' rx='2' fill='%231a6fd4'/%3E%3Crect x='12' y='72' width='10' height='12' rx='1' fill='white' opacity='.5'/%3E%3Crect x='26' y='72' width='10' height='12' rx='1' fill='white' opacity='.5'/%3E%3Crect x='12' y='92' width='10' height='12' rx='1' fill='white' opacity='.5'/%3E%3Crect x='26' y='92' width='10' height='12' rx='1' fill='white' opacity='.5'/%3E%3Crect x='68' y='18' width='74' height='162' rx='4' fill='%231a6fd4'/%3E%3Crect x='80' y='30' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='100' y='30' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='80' y='52' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='100' y='52' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='80' y='74' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='100' y='74' width='14' height='14' rx='1' fill='white' opacity='.4'/%3E%3Crect x='152' y='75' width='44' height='105' rx='4' fill='%231a6fd4'/%3E%3C/svg%3E") no-repeat bottom left / contain;
    pointer-events: none;
  }

  .opr-card--4::after {
    content: '';
    position: absolute;
    bottom: -16px;
    right: -14px;
    width: 160px;
    height: 160px;
    opacity: 0.10;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpolyline points='12,52 36,78 88,20' fill='none' stroke='%231a6fd4' stroke-width='11' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E") no-repeat center / contain;
    pointer-events: none;
  }

  .opr-card__icon { margin-bottom: 14px; }

  .opr-card__icon svg {
    width: 34px;
    height: 34px;
    fill: none;
    stroke: #1a6fd4;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .opr-card__title {
    font-size: 15.5px;
    font-weight: 700;
    color: #0f2a45;
    line-height: 1.3;
    margin-bottom: 11px;
    letter-spacing: -0.01em;
  }

  .opr-card__body {
    font-size: 13px;
    font-weight: 400;
    color: #4a6a85;
    line-height: 1.68;
  }

  @media (max-width: 860px) {
    .opr-section { padding-bottom: 60px; }
    .opr-watermark__text { font-size: 26vw; }
    .opr-meta { grid-template-columns: 1fr; gap: 16px; margin-bottom: 36px; }
    .opr-meta__headline { font-size: 1.4rem; max-width: 100%; }
    .opr-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto auto auto; gap: 12px; }
    .opr-card--1 { grid-column: 1; grid-row: auto; }
    .opr-card--2 { grid-column: 2; grid-row: auto; }
    .opr-card--3 { grid-column: 1; grid-row: auto; }
    .opr-card--4 { grid-column: 2; grid-row: auto; }
  }

  @media (max-width: 520px) {
    .opr-section { padding-bottom: 48px; }
    .opr-watermark__text { font-size: 32vw; }
    .opr-meta { padding: 0 4%; margin-bottom: 28px; }
    .opr-grid { grid-template-columns: 1fr; grid-template-rows: auto; padding: 0 4%; }
    .opr-card--1, .opr-card--2, .opr-card--3, .opr-card--4 { grid-column: 1; grid-row: auto; }
    .opr-card { padding: 22px 20px 26px; }
    .opr-card--1::after, .opr-card--4::after { opacity: 0.07; }
  }
  </style>

 
</head>
<body>
<?php include 'header.php'; ?>
<section class="ci-hero">
  <div class="ci-hero-content">

    <!-- Breadcrumb row (above divider) -->
    <div class="ci-top-row">
      <p class="ci-hero-breadcrumb">WHAT WE DO/MANAGED IT </p>
      <div></div>
    </div>

    <!-- Full-width divider -->
    <div class="ci-full-divider"></div>

    <!-- Two-column body (below divider) -->
    <div class="ci-body-row">

      <!-- LEFT -->
      <div class="ci-hero-left">
        <h1 class="ci-hero-title">Reliable IT Operations Managed for Continuity and Performance</h1>
        <p class="ci-hero-sub">End to end management of IT environments to ensure system stability, proactive issue resolution, and consistent performance across infrastructure, users, and applications.</p>
        <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="ci-hero-btn">
          <span class="ci-hero-btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
          </span>
          optimize Your IT Operations
        </a>
      </div>

      <!-- RIGHT: form -->
      <div class="ci-form-wrap">
        <p class="ci-form-title">Enquire Now</p>

        <div class="ci-field">
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" autocomplete="off"/>
        </div>

        <div class="ci-field">
          <label>Phone number</label>
          <div class="ci-phone-row" id="phoneRow">
            <div class="ci-flag-btn" id="flagBtn">
              <span class="flag-emoji" id="selFlag">🇮🇳</span>
              <span class="dial-code" id="selCode">+91</span>
              <span class="chev"></span>
            </div>
            <div class="ci-dropdown" id="countryDropdown">
              <input class="ci-dropdown-search" id="countrySearch" type="text" placeholder="Search country..."/>
              <ul class="ci-dropdown-list" id="countryList"></ul>
            </div>
            <input class="ci-phone-input" type="tel" placeholder="Phone number"/>
          </div>
        </div>

        <div class="ci-field">
          <label>Message</label>
          <textarea placeholder="Enter your message"></textarea>
        </div>

        <button class="ci-form-btn" type="button">
          <span class="ci-form-btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
          </span>
          Enquire now
        </button>
      </div>

    </div>
  </div>
</section>

<script>
const countries = [
  {flag:"🇺🇸",name:"United States",code:"+1"},
  {flag:"🇬🇧",name:"United Kingdom",code:"+44"},
  {flag:"🇮🇳",name:"India",code:"+91"},
  {flag:"🇦🇺",name:"Australia",code:"+61"},
  {flag:"🇦🇪",name:"UAE",code:"+971"},
  {flag:"🇸🇬",name:"Singapore",code:"+65"},
  {flag:"🇩🇪",name:"Germany",code:"+49"},
  {flag:"🇫🇷",name:"France",code:"+33"},
  {flag:"🇯🇵",name:"Japan",code:"+81"},
  {flag:"🇨🇳",name:"China",code:"+86"},
  {flag:"🇨🇦",name:"Canada",code:"+1"},
  {flag:"🇧🇷",name:"Brazil",code:"+55"},
  {flag:"🇲🇽",name:"Mexico",code:"+52"},
  {flag:"🇮🇹",name:"Italy",code:"+39"},
  {flag:"🇪🇸",name:"Spain",code:"+34"},
  {flag:"🇳🇱",name:"Netherlands",code:"+31"},
  {flag:"🇰🇷",name:"South Korea",code:"+82"},
  {flag:"🇿🇦",name:"South Africa",code:"+27"},
  {flag:"🇳🇬",name:"Nigeria",code:"+234"},
  {flag:"🇸🇦",name:"Saudi Arabia",code:"+966"},
  {flag:"🇵🇰",name:"Pakistan",code:"+92"},
  {flag:"🇧🇩",name:"Bangladesh",code:"+880"},
  {flag:"🇮🇩",name:"Indonesia",code:"+62"},
  {flag:"🇵🇭",name:"Philippines",code:"+63"},
  {flag:"🇹🇭",name:"Thailand",code:"+66"},
  {flag:"🇲🇾",name:"Malaysia",code:"+60"},
  {flag:"🇻🇳",name:"Vietnam",code:"+84"},
  {flag:"🇵🇹",name:"Portugal",code:"+351"},
  {flag:"🇸🇪",name:"Sweden",code:"+46"},
  {flag:"🇨🇭",name:"Switzerland",code:"+41"},
  {flag:"🇳🇿",name:"New Zealand",code:"+64"},
  {flag:"🇦🇷",name:"Argentina",code:"+54"},
  {flag:"🇨🇴",name:"Colombia",code:"+57"},
  {flag:"🇪🇬",name:"Egypt",code:"+20"},
  {flag:"🇰🇪",name:"Kenya",code:"+254"},
  {flag:"🇬🇭",name:"Ghana",code:"+233"},
  {flag:"🇹🇷",name:"Turkey",code:"+90"},
  {flag:"🇺🇦",name:"Ukraine",code:"+380"},
  {flag:"🇵🇱",name:"Poland",code:"+48"},
  {flag:"🇷🇺",name:"Russia",code:"+7"},
];

let selected = countries[2];

const flagBtn = document.getElementById("flagBtn");
const dropdown = document.getElementById("countryDropdown");
const list = document.getElementById("countryList");
const search = document.getElementById("countrySearch");
const selFlag = document.getElementById("selFlag");
const selCode = document.getElementById("selCode");

function renderList(arr) {
  list.innerHTML = arr.map(c => `
    <li class="ci-dropdown-item ${c===selected?'selected':''}" data-code="${c.code}" data-flag="${c.flag}" data-name="${c.name}">
      <span class="di-flag">${c.flag}</span>
      <span class="di-name">${c.name}</span>
      <span class="di-code">${c.code}</span>
    </li>`).join("");

  list.querySelectorAll(".ci-dropdown-item").forEach(el => {
    el.addEventListener("click", () => {
      selected = countries.find(c => c.name === el.dataset.name);
      selFlag.textContent = selected.flag;
      selCode.textContent = selected.code;
      dropdown.classList.remove("open");
      search.value = "";
      renderList(countries);
    });
  });
}

renderList(countries);

flagBtn.addEventListener("click", e => {
  e.stopPropagation();
  dropdown.classList.toggle("open");
  if (dropdown.classList.contains("open")) setTimeout(() => search.focus(), 40);
});

search.addEventListener("input", () => {
  const q = search.value.toLowerCase();
  renderList(countries.filter(c => c.name.toLowerCase().includes(q) || c.code.includes(q)));
});

document.addEventListener("click", e => {
  if (!document.getElementById("phoneRow").contains(e.target))
    dropdown.classList.remove("open");
});
</script>


  <!-- ═══════════════════
       PARTNER LOGOS STRIP
  ═══════════════════ -->
 


<body>

<section class="section2">

  <!-- TOP ROW: image + text -->
  <div class="top-row">

    <!-- ✅ LEFT — replace src with your image path -->
    <div class="image-col">
      <img
        src="/images/working man.png"
        alt="Woman working on laptop in modern office"
      />
    </div>

    <!-- RIGHT — text content -->
    <div class="text-col">
      <p class="overline">Overview</p>
      <h2 class="section-title">
       Managed IT Services Built for Stability and Control<br>

      </h2>
      <p class="section-body">
     Managed IT services provide continuous oversight of systems, networks, and user environments, enabling organizations to maintain performance, reduce disruptions, and support daily operations without complexity.
      </p>
      <div class="highlight-row">
    <p class="highlight-text">
      <strong>Proactive monitoring, preventive maintenance, and rapid issue resolution help minimize downtime, </strong><span class="muted">improve system reliability, and ensure uninterrupted business operations.</span>
    </p>
  </div>
    </div>

  </div>

  <!-- BOTTOM HIGHLIGHT TEXT -->
 

</section>
<section class="s3-section">

  <div class="s3-watermark" aria-hidden="true">
    <span>what we offer</span>
    <span>what we offer</span>
    <span>what we offer</span>
  </div>

  <div class="s3-cards-area">
    <div class="s3-viewport">
      <div class="s3-track" id="s3Track">

        <!-- CARD 1 -->
        <div class="s3-card">
          <img class="s3-card-img" src="/images/inframonitor.png" alt="AI & Automation"/>
          <div class="s3-card-light"></div>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <div class="s3-card-content">
              <div class="s3-card-top">
                <img class="s3-card-icon" src="/icons/setting.svg" alt=""/>
                <span class="s3-card-tag">OPERATIONS</span>
                <h3 class="s3-card-title">Infrastructure Monitoring &amp; Management</h3>
              </div>
              <div class="s3-card-bottom">
                <p class="s3-card-desc">Continuous monitoring and management of servers, networks, and systems to ensure performance, availability, and stability.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="s3-card">
          <img class="s3-card-img" src="/images/staff.jpg" alt="Staffing Services"/>
          <div class="s3-card-light"></div>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <div class="s3-card-content">
              <div class="s3-card-top">
                <img class="s3-card-icon" src="/icons/headset.svg" alt=""/>
                <span class="s3-card-tag">Support</span>
                <h3 class="s3-card-title">End-User Support & Service Desk</h3>
              </div>
              <div class="s3-card-bottom">
                <p class="s3-card-desc">Connect with top-tier talent and build teams that drive your business forward with our expert staffing solutions.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="s3-card">
          <img class="s3-card-img" src="/images/maintenance.png" alt="Engineering Services"/>
          <div class="s3-card-light"></div>
          <div class="s3-card-overlay"></div>
          <div class="s3-card-body">
            <div class="s3-card-content">
              <div class="s3-card-top">
                <img class="s3-card-icon" src="/icons/cam.svg" alt=""/>
                <span class="s3-card-tag">MAINTENANCE</span>
                <h3 class="s3-card-title">Patch Management & System Updates</h3>
              </div>
              <div class="s3-card-bottom">
                <p class="s3-card-desc">End-to-end engineering expertise to design, build, and scale robust solutions powering your digital transformation.</p>
              </div>
            </div>
          </div>
        </div>

       

      

      </div><!-- /s3-track -->
    </div><!-- /s3-viewport -->
  </div><!-- /s3-cards-area -->

  <!-- Bottom bar -->
  <div class="s3-bottom-bar">
    <div class="s3-counter">
      <span class="s3-counter-main" id="s3CounterMain">01</span>
      <span class="s3-counter-total">/05</span>
    </div>
    <div class="s3-nav">
      <button class="s3-nav-btn s3-disabled" id="s3PrevBtn" aria-label="Previous">
        <svg viewBox="0 0 16 16"><polyline points="10,3 5,8 10,13"/></svg>
      </button>
      <button class="s3-nav-btn" id="s3NextBtn" aria-label="Next">
        <svg viewBox="0 0 16 16"><polyline points="6,3 11,8 6,13"/></svg>
      </button>
    </div>
  </div>

</section>

<section class="ai-sec4">
  <div class="ai-sec4-container">
    
    <!-- LEFT CONTENT -->
    <div class="ai-sec4-content">
      <p class="ai-sec4-tag">Industries Supported</p>
      
      <h2 class="ai-sec4-title">
        Managed IT for Diverse Business Environments  <br>
        <!--<span class="ai-sec4-gradient">Teceze AI tools</span>-->
      </h2>

      <p class="ai-sec4-desc">
      IT services are tailored to industry-specific operational needs, enabling reliable systems, efficient processes, and scalable technology environments.
      </p>

      <!-- ICON GRID -->
      <div class="ai-sec4-grid">
        <div class="ai-sec4-tool"><img src="/icons/icon.svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (3).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (3).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (1).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (2).svg" /></div>

        <div class="ai-sec4-tool"><img src="/icons/icon (3).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (4).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (5).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (6).svg" /></div>
        <div class="ai-sec4-tool"><img src="/icons/icon (7).svg" /></div>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="ai-sec4-image">
      <img src="/images/sec4.png" alt="AI Dashboard" />
    </div>

  </div>
</section>

<!-- OUR PROCESS -->
<section class="opr-section" aria-label="Our Process">
  <div class="opr-section__blob" aria-hidden="true"></div>

  <div class="opr-watermark" aria-hidden="true">
    <span class="opr-watermark__text">our process</span>
  </div>

  <div class="opr-meta">
    <div class="opr-meta__badge">
      <p>Performance Backed By<br>Security Metrics</p>
    </div>
    <h2 class="opr-meta__headline">
      We provide data-driven outcomes that strengthen your security posture, improve response times, and ensure business continuity.
    </h2>
  </div>

  <div class="opr-grid">
    <div class="opr-card opr-card--1">
      <h3 class="opr-card__title">1.&nbsp; Full IT Ownership</h3>
      <p class="opr-card__body">Decades of collective experience delivering complex systems.</p>
    </div>

    <div class="opr-card opr-card--2">
      <div class="opr-card__icon">
        <svg viewBox="0 0 24 24"><path d="M20 11A8 8 0 1 0 4.93 17"/><polyline points="20 4 20 11 13 11"/><circle cx="12" cy="12" r="2.2"/></svg>
      </div>
      <h3 class="opr-card__title">2.&nbsp; 24/7 Global Operations</h3>
      <p class="opr-card__body">From first assessment to daily 24/7 operations, we are your single point of
accountability.</p>
    </div>

    <div class="opr-card opr-card--3">
      <div class="opr-card__icon">
        <svg viewBox="0 0 24 24"><path d="M18 10h-.3A7 7 0 1 0 5 15.9"/><path d="M18 10a4 4 0 0 1 0 8H7a5 5 0 0 1-.8-9.9"/></svg>
      </div>
      <h3 class="opr-card__title">3.&nbsp; Automation-First Model</h3>
      <p class="opr-card__body">Avoid vendor lock-in with specialized teams across AWS, Azure, and
Google Cloud.</p>
    </div>

    <div class="opr-card opr-card--4">
      <h3 class="opr-card__title">4.&nbsp; Security-Integrated Services</h3>
      <p class="opr-card__body">Security isn't an afterthought; it's baked into every layer of the architecture.</p>
    </div>
  </div>
</section>

<!-- DRIVEN by section -->

<section class="drv-section">
  <div class="drv-inner">

    <!-- Top: Headline + Description -->
    <div class="drv-top">
      <h2 class="drv-headline">Measurable IT Performance</h2>
      <p class="drv-desc">
       IT environments are managed to improve reliability, enhance system performance, and ensure uninterrupted operations across business-critical systems.
      </p>
    </div>

    <div class="drv-cards-wrap">

      <!-- Row 1: Box 70% | Box 30% -->
      <div class="drv-row drv-row--70-30">

        <!-- Box 1 (70%) — text left, stat right -->
        <div class="drv-box">
          <p class="drv-box__text">Delivering consistent IT operations with measurable <br> impact on system performance and uptime.</p>
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">System Uptime</span>
            <span class="drv-box__stat">99.9%</span>
          </div>
        </div>

        <!-- Box 2 (30%) — stat only, centered -->
        <div class="drv-box">
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Issue Resolution Speed</span>
            <span class="drv-box__stat">2x</span>
          </div>
          <p class="drv-box__text">Experienced teams managing complex IT environments across distributed infrastructure landscapes.</p>
        </div>

      </div>

      <!-- Row 2: Box 30% | Box 70% -->
      <div class="drv-row drv-row--30-70">

        <!-- Box 3 (30%) — stat + small text -->
        <div class="drv-box">
          <p class="drv-box__text">Proactive monitoring and maintenance reduce system disruptions.</p>
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Reduced Downtime</span>
            <span class="drv-box__stat">40%</span>
          </div>
        </div>

        <!-- Box 4 (70%) — stat left, text right -->
        <div class="drv-box">
          <p class="drv-box__text">Optimized IT environments improve <br>productivity and system performance.</p>
          <div class="drv-box__stat-wrap">
            <span class="drv-box__label">Operational Efficiency</span>
            <span class="drv-box__stat">30%</span>
          </div>
        </div>

      </div>

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

<!-- ═══════════════════════════════════════════
     section logo 
═══════════════════════════════════════════ -->

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
  <div class="pt-divider"></div>

  <!-- ── LOGOS ── -->
  <!-- ✅ Replace each src="YOUR_LOGO_URL" with your actual logo image URL -->
  <div class="pt-logos">

    <!-- Logo 1 -->
    <div class="pt-logo-item">
      <img src="images/Infosys.png" alt="Partner Logo 1" />
    </div>

    <!-- Logo 2 -->
    <div class="pt-logo-item">
      <img src="images/Accenture.png" alt="Partner Logo 2" />
    </div>

    <!-- Logo 3 -->
    <div class="pt-logo-item">
      <img src="images/Hexaware.png" alt="Partner Logo 3" />
    </div>

    <!-- Logo 4 -->
    <div class="pt-logo-item">
      <img src="images/HCL.png" alt="Partner Logo 4" />
    </div>

    <!-- Logo 5 -->
    <div class="pt-logo-item">
      <img src="images/GP Strategies.png" alt="Partner Logo 5" />
    </div>

  </div>

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->
  <!--<div class="pt-cta">-->

    <!-- ✅ Replace src="YOUR_CTA_BG_URL" with your actual CTA background image URL -->
  <!--  <img-->
  <!--    class="pt-cta-bg-img"-->
  <!--    src="/images/CTA-bg-img.jpg"-->
  <!--    alt=""-->
  <!--    aria-hidden="true"-->
  <!--  />-->

    <!-- Dark gradient overlay so text stays readable over the image -->
  <!--  <div class="pt-cta-bg-overlay"></div>-->

    <!-- Text content -->
  <!--  <div class="pt-cta-content">-->
  <!--    <p class="pt-cta-label">Get In Touch</p>-->
  <!--    <h3 class="pt-cta-heading">Start with Digital Workplace<br>Assessment</h3>-->
  <!--    <p class="pt-cta-sub">Discuss how workplace solutions can support users, operations, and long-term business goals.</p>-->
  <!--    <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="pt-cta-btn">-->
  <!--      <span class="pt-cta-btn-dot"></span>-->
  <!--      Schedule a Consultation-->
  <!--    </a>-->
  <!--  </div>-->

  <!--</div>-->

</section>


<!--<section class="faq-section">-->
<!--  <div class="faq-inner">-->

    <!-- LEFT: stacked FAQ watermark -->
<!--    <div class="faq-left">-->
<!--      <div class="faq-watermark" aria-hidden="true">-->
<!--        <span>FAQ</span>-->
<!--        <span>FAQ</span>-->
<!--        <span>FAQ</span>-->
<!--        <span>FAQ</span>-->
<!--      </div>-->
<!--    </div>-->

    <!-- RIGHT: accordion -->
<!--    <div class="faq-right">-->

      <!-- Item 1 — open by default -->
<!--      <div class="faq-item open">-->
<!--        <button class="faq-question" aria-expanded="true">-->
<!--          <span class="faq-question-text">What services does Teceze provide?</span>-->
<!--          <span class="faq-icon"></span>-->
<!--        </button>-->
<!--        <div class="faq-answer">-->
<!--          <p class="faq-answer-inner">-->
<!--            Teceze Offers Comprehensive IT Solutions Including Cybersecurity, Managed IT Services,-->
<!--            Digital Transformation, And AI-Driven Automation Tailored To Enterprise Needs.-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->

      <!-- Item 2 -->
<!--      <div class="faq-item">-->
<!--        <button class="faq-question" aria-expanded="false">-->
<!--          <span class="faq-question-text">Does Teceze support global enterprises?</span>-->
<!--          <span class="faq-icon"></span>-->
<!--        </button>-->
<!--        <div class="faq-answer">-->
<!--          <p class="faq-answer-inner">-->
<!--            Yes, Teceze supports enterprises across multiple continents with dedicated regional-->
<!--            teams and 24/7 support infrastructure to ensure seamless global operations.-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->

      <!-- Item 3 -->
<!--      <div class="faq-item">-->
<!--        <button class="faq-question" aria-expanded="false">-->
<!--          <span class="faq-question-text">How can I get started with Teceze?</span>-->
<!--          <span class="faq-icon"></span>-->
<!--        </button>-->
<!--        <div class="faq-answer">-->
<!--          <p class="faq-answer-inner">-->
<!--            Getting started is simple — reach out through our contact page, and a solutions-->
<!--            consultant will schedule a discovery call to understand your business needs.-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->

      <!-- Item 4 -->
<!--      <div class="faq-item">-->
<!--        <button class="faq-question" aria-expanded="false">-->
<!--          <span class="faq-question-text">Can solutions be customized?</span>-->
<!--          <span class="faq-icon"></span>-->
<!--        </button>-->
<!--        <div class="faq-answer">-->
<!--          <p class="faq-answer-inner">-->
<!--            Absolutely. All Teceze solutions are tailored to your specific industry, scale,-->
<!--            and operational requirements — no one-size-fits-all approach.-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->

      <!-- Item 5 -->
<!--      <div class="faq-item">-->
<!--        <button class="faq-question" aria-expanded="false">-->
<!--          <span class="faq-question-text">Do you provide real-time security monitoring?</span>-->
<!--          <span class="faq-icon"></span>-->
<!--        </button>-->
<!--        <div class="faq-answer">-->
<!--          <p class="faq-answer-inner">-->
<!--            Yes, our Security Operations Center (SOC) provides 24/7 real-time threat detection,-->
<!--            monitoring, and incident response across all your endpoints and cloud environments.-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->

<!--    </div><!-- /faq-right -->-->
<!--  </div><!-- /faq-inner -->-->
<!--</section>-->


<!--<section class="cu-section">-->
<!--  <div class="cu-inner">-->

    <!-- Left card -->
<!--    <div class="cu-card">-->
<!--      <div class="cu-card-wave"></div>-->
<!--      <div class="cu-card-blob"></div>-->
<!--      <p class="cu-card-label">Get In Touch</p>-->
<!--      <h3 class="cu-card-title">Take Control of Your IT Infrastructure.</h3>-->
<!--      <p class="cu-card-desc">Partner with experts who care as much about your uptime as you do. Schedule your consultation today.</p>-->
<!--    </div>-->

    <!-- Right form -->
<!--    <div class="cu-form-wrap">-->
<!--      <h2>Contact us now</h2>-->
<!--      <p>Fill in the data for profile. It will take a couple of minutes.</p>-->

      <!-- Name row -->
<!--      <div class="cu-row">-->
<!--        <div class="cu-field">-->
<!--          <label>First Name</label>-->
<!--          <input type="text" placeholder="John" />-->
<!--        </div>-->
<!--        <div class="cu-field">-->
<!--          <label>Last Name</label>-->
<!--          <input type="text" placeholder="David" />-->
<!--        </div>-->
<!--      </div>-->

      <!-- Phone -->
<!--      <div class="cu-field" style="margin-bottom:16px;">-->
<!--        <label>Phone number</label>-->
<!--        <div class="cu-phone-row">-->
<!--          <div class="cu-phone-prefix">-->
<!--            <span>🇺🇸</span>-->
<!--            <select>-->
<!--              <option>+1</option>-->
<!--              <option>+44</option>-->
<!--              <option>+91</option>-->
<!--              <option>+61</option>-->
<!--            </select>-->
<!--          </div>-->
<!--          <input class="cu-phone-input" type="tel" placeholder="Phone number" />-->
<!--        </div>-->
<!--      </div>-->

      <!-- Service -->
<!--      <div class="cu-field" style="margin-bottom:16px;">-->
<!--        <label>Service Interested</label>-->
<!--        <select>-->
<!--          <option value="" disabled selected>Select</option>-->
<!--          <option>Security Audit</option>-->
<!--          <option>Penetration Testing</option>-->
<!--          <option>Compliance Consulting</option>-->
<!--          <option>Incident Response</option>-->
<!--        </select>-->
<!--      </div>-->

      <!-- Message -->
<!--      <div class="cu-field" style="margin-bottom:8px;">-->
<!--        <label>Describe your case</label>-->
<!--        <textarea placeholder="Tell us about your use case..."></textarea>-->
<!--      </div>-->

      <!-- Submit -->
<!--      <button class="cu-btn">-->
<!--        <span class="cu-btn-dot"></span>-->
<!--        Get In Touch-->
<!--      </button>-->
<!--    </div>-->

<!--  </div>-->
<!--</section>-->
<!-- ===== SECTION 3: CONTACT FORM ===== -->
<section class="ct-form-section" id="contact-form">
  <div class="ct-form-wrapper">

    <!-- Left Panel -->
    <div class="ct-form-left">
      <div class="ct-form-left-overlay"></div>
      <div class="ct-form-left-content">
        <p class="ct-form-tag">Get In Touch</p>
        <h2 class="ct-form-left-title">Tell Us About Your Requirements and We'll Take It from There</h2>
        <p class="ct-form-left-sub">Share your details and project needs, and our team will connect with you to provide the right solutions and next steps.</p>
      </div>
    </div>

<div class="ct-form-right">


    <iframe 
      aria-label="Contact us now"
      frameborder="0"
      style="height:600px;width:100%;border:none;"
      src="https://forms.zohopublic.com/FormsWorking/form/Contactusnow/formperma/xf8H-0yPN2b0htwf3avvn98bxsgNYtPywaYfdgwYQgU">
    </iframe>
 

</div>
  </div>
</section>
<?php include 'footer.php'; ?>
</body>
<script src="/assets/script.js"></script>



    
 

  


</html>