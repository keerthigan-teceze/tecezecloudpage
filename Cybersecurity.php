<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cybersecurity — Teceze</title>
  <?php include 'header.php'; ?>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --tw-hero-bg: #041120;
      --tw-accent: #4f8ef7;
      --tw-glass-bg: rgba(10, 25, 50, 0.62);
      --tw-glass-border: rgba(79, 142, 247, 0.35);
      --tw-text-main: #e8f0ff;
      --tw-text-muted: #8aabcf;
      --tw-input-bg: rgba(255,255,255,0.07);
      --tw-input-border: rgba(79, 142, 247, 0.25);
      --tw-font-head: 'Sora', sans-serif;
      --tw-font-body: 'DM Sans', sans-serif;
      --wo-dark: #0f1623;
      --wo-blue: #1565c0;
      --wo-muted: #5a6a85;
    }

    body {
      font-family: var(--tw-font-body);
      background: var(--tw-hero-bg);
      color: var(--tw-text-main);
      min-height: 100vh;
    }
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

    /* ============================================================
       SECTION 1: HERO
    ============================================================ */
    .tw-hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }
    .tw-hero__bg {
      position: absolute;
      inset: 0;
      background: url('images/cyber.png') center/cover no-repeat;
      z-index: 0;
    }
    .tw-hero__blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(90px);
      opacity: 0.18;
      animation: tw-blob-drift 9s ease-in-out infinite alternate;
      z-index: 0;
    }
    .tw-hero__blob--1 { width: 480px; height: 480px; background: radial-gradient(circle, #4f8ef7, transparent 70%); top: -80px; left: -80px; animation-delay: 0s; }
    .tw-hero__blob--2 { width: 360px; height: 360px; background: radial-gradient(circle, #6c4dff, transparent 70%); bottom: -60px; right: 340px; animation-delay: 3s; }
    @keyframes tw-blob-drift { from { transform: translate(0,0) scale(1); } to { transform: translate(30px,20px) scale(1.08); } }
    .tw-hero__grid {
      position: absolute; inset: 0;
      background-image: linear-gradient(rgba(79,142,247,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(79,142,247,0.04) 1px, transparent 1px);
      background-size: 48px 48px; z-index: 0;
    }
    .tw-hero__header-row { position: relative; z-index: 2; width: 100%; }
    .tw-hero__breadcrumb-wrap { max-width: 1200px; margin: 0 auto; padding: 120px 40px 16px; }
    .tw-hero__breadcrumb {
      font-family: var(--tw-font-head);
      font-size: 10px; font-weight: 600;
      letter-spacing: 1.8px; text-transform: uppercase;
      color: rgba(255,255,255,0.75); margin-bottom: 14px; display: block;
    }
    .tw-hero__divider { width: 100%; height: 1px; background: rgba(255,255,255,0.25); }
    .tw-hero__inner {
      position: relative; z-index: 2;
      width: 100%; max-width: 1200px;
      margin: 0 auto; padding: 48px 40px 80px;
      display: flex; align-items: center; gap: 48px;
    }
    .tw-hero__content { flex: 1 1 0; min-width: 0; animation: tw-fade-up 0.8s cubic-bezier(.22,1,.36,1) both; }
    @keyframes tw-fade-up { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
    .tw-hero__title {
      font-family: var(--tw-font-head);
      font-size: clamp(2.2rem, 5vw, 3.8rem);
      font-weight: 300; line-height: 1.18;
      max-width: 700px; margin-bottom: 24px;
      letter-spacing: -0.02em; color: #fff;
    }
    .tw-hero__desc {
      font-size: 13px; line-height: 1.75;
      color: rgba(255,255,255,0.68);
      max-width: 400px; margin-bottom: 28px; font-weight: 300;
    }
    .tw-hero__cta {
      display: inline-flex; align-items: center; gap: 10px;
      padding: 7px 18px 7px 7px;
      border: 1.5px solid rgba(255,255,255,0.45);
      border-radius: 50px; background: transparent;
      color: #fff; font-family: var(--tw-font-head);
      font-size: 13px; font-weight: 500;
      cursor: pointer; text-decoration: none;
      backdrop-filter: blur(8px);
      transition: border-color 0.25s, transform 0.2s;
      margin-bottom: 56px;
    }
    .tw-hero__cta:hover { border-color: rgba(79,142,247,0.85); transform: translateY(-2px); }
    .tw-hero__cta-arrow {
      width: 36px; height: 36px; border-radius: 50%;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; transition: transform 0.2s;
    }
    .tw-hero__cta:hover .tw-hero__cta-arrow { transform: translateX(4px); }
    .tw-hero__cta-arrow svg { width: 15px; height: 15px; }

    /* ── Form card ── */
    .tw-hero__form-wrap {
      flex: 0 0 360px; width: 360px;
      animation: tw-fade-up 0.8s 0.18s cubic-bezier(.22,1,.36,1) both;
    }
    .tw-enquire-card {
      background: var(--tw-glass-bg);
      border: 1.5px solid var(--tw-glass-border);
      border-radius: 20px; padding: 32px 28px 28px;
      backdrop-filter: blur(20px);
      box-shadow: 0 8px 40px rgba(0,0,0,0.35), inset 0 1px 0 rgba(255,255,255,0.07);
      position: relative; overflow: hidden;
    }
    .tw-enquire-card::before {
      content: ''; position: absolute;
      top: -40px; left: 50%; transform: translateX(-50%);
      width: 220px; height: 80px;
      background: radial-gradient(ellipse, rgba(79,142,247,0.35), transparent 70%);
      pointer-events: none;
    }
    .tw-enquire-card__title {
      font-family: var(--tw-font-head);
      font-size: 1.25rem; font-weight: 700;
      margin-bottom: 24px; color: #fff; letter-spacing: -0.01em;
    }
    .tw-form-group { margin-bottom: 16px; }
    .tw-form-group label {
      display: block; font-size: 0.8rem; font-weight: 500;
      color: var(--tw-text-muted); margin-bottom: 7px; letter-spacing: 0.02em;
    }
    .tw-form-group input,
    .tw-form-group textarea {
      width: 100%;
      background: var(--tw-input-bg);
      border: 1px solid var(--tw-input-border);
      border-radius: 10px; padding: 11px 14px;
      font-family: var(--tw-font-body);
      font-size: 0.9rem; color: var(--tw-text-main);
      outline: none;
      transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
    }
    .tw-form-group input::placeholder,
    .tw-form-group textarea::placeholder { color: rgba(138,171,207,0.45); }
    .tw-form-group input:focus,
    .tw-form-group textarea:focus {
      border-color: var(--tw-accent);
      background: rgba(79,142,247,0.06);
      box-shadow: 0 0 0 3px rgba(79,142,247,0.12);
    }
    .tw-form-group textarea { resize: vertical; min-height: 90px; }

    /* ── Phone row with country dropdown ── */
    .tw-phone-row {
      display: flex; gap: 0;
      border: 1px solid var(--tw-input-border);
      border-radius: 10px; overflow: hidden;
      background: var(--tw-input-bg);
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .tw-phone-row:focus-within {
      border-color: var(--tw-accent);
      box-shadow: 0 0 0 3px rgba(79,142,247,0.12);
    }
    .tw-phone-select-wrap {
      position: relative;
      display: flex; align-items: center;
      border-right: 1px solid var(--tw-input-border);
      flex-shrink: 0;
    }
    .tw-phone-flag-preview {
      position: absolute; left: 10px;
      font-size: 16px; pointer-events: none; z-index: 1; line-height: 1;
    }
    .tw-phone-select {
      appearance: none; -webkit-appearance: none;
      background: transparent; border: none; outline: none;
      padding: 0 26px 0 36px;
      min-height: 42px;
      font-size: 12px; color: var(--tw-text-main);
      cursor: pointer; font-family: var(--tw-font-body);
      min-width: 80px;
    }
    .tw-phone-select option { background: #0d1f3c; color: #e8f0ff; }
    .tw-phone-chevron {
      position: absolute; right: 7px;
      pointer-events: none; opacity: 0.5;
    }
    .tw-phone-chevron svg {
      width: 10px; height: 10px;
      stroke: #e8f0ff; fill: none;
      stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
    }
    .tw-phone-input {
      flex: 1;
      border: none !important; border-radius: 0 !important;
      background: transparent !important; box-shadow: none !important;
      outline: none; padding: 11px 14px;
      font-size: 0.9rem; color: var(--tw-text-main);
      font-family: var(--tw-font-body);
    }
    .tw-phone-input::placeholder { color: rgba(138,171,207,0.45); }

    .tw-enquire-btn {
      width: 100%; margin-top: 8px;
      padding: 10px 10px 10px 20px;
      border: 1.5px solid rgba(79,142,247,0.4);
      border-radius: 50px; background: transparent;
      color: #fff; font-family: var(--tw-font-head);
      font-size: 0.95rem; font-weight: 600;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center; gap: 10px;
      transition: border-color 0.2s, transform 0.2s;
    }
    .tw-enquire-btn:hover { border-color: rgba(79,142,247,0.8); transform: translateY(-2px); }
    .tw-enquire-btn__icon {
      width: 32px; height: 32px; border-radius: 50%;
      background: linear-gradient(135deg, #2a44b0 0%, #13c5b8 100%);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; transition: transform 0.2s;
    }
    .tw-enquire-btn:hover .tw-enquire-btn__icon { transform: translateX(3px); }
    .tw-enquire-btn__icon svg { width: 13px; height: 13px; }

    /* ============================================================
       SECTION 2: DW OVERVIEW
    ============================================================ */
    .dw-section {
      background: #fff; width: 100%;
      max-width: 1200px; margin: 0 auto; padding: 64px 40px;
    }
    .dw-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 56px; align-items: start; }
    .dw-image-col { grid-row: 1 / 3; grid-column: 1 / 2; }
    .dw-image-wrapper { width: 100%; border-radius: 20px; overflow: hidden; aspect-ratio: 3 / 3.8; }
    .dw-image-wrapper img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }
    .dw-content-top { grid-row: 1 / 2; grid-column: 2 / 3; padding-top: 8px; }
    .dw-label { font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 500; color: #6b7280; letter-spacing: 0.02em; margin-bottom: 14px; }
    .dw-heading { font-family: 'Sora', sans-serif; font-size: clamp(20px, 2.2vw, 40px); font-weight: 700; color: #0d1b2e; line-height: 1.18; letter-spacing: -0.02em; margin-bottom: 16px; }
    .dw-body { font-family: 'Inter', sans-serif; font-size: 18px; line-height: 1.7; color: #4a5568; max-width: 520px; }
    .dw-content-bottom { grid-row: 2 / 3; grid-column: 2 / 3; display: flex; align-items: flex-end; padding-top: 80px; padding-bottom: 4px; }
    .dw-highlight-text { font-family: 'Sora', sans-serif; font-size: clamp(16px, 1.7vw, 22px); font-weight: 500; line-height: 1.5; color: #aab4be; max-width: 460px; }
    .dw-highlight-text strong { color: #0d1b2e; font-weight: 700; }

    /* ============================================================
       SECTION 3: WHAT WE OFFER SLIDER
    ============================================================ */
    .wo-section {
      position: relative; width: 100%; max-width: 1200px;
      margin: 0 auto; padding: 60px 40px 48px; overflow: hidden;
      background: #f5f7fa;
    }
    .wo-watermark {
      position: absolute; top: -10px; left: -20px; right: -20px;
      font-family: 'Sora', sans-serif; font-size: clamp(72px,11vw,140px);
      font-weight: 800; color: rgba(15,22,35,0.07);
      line-height: 1.1; pointer-events: none; user-select: none;
      white-space: nowrap; letter-spacing: -0.03em;
    }
    .wo-watermark span { display: block; }
    .wo-cards-viewport { overflow: hidden; margin-bottom: 32px; position: relative; }
    .wo-cards-track { display: flex; gap: 20px; }
    .wo-card { flex-shrink: 0; border-radius: 18px; overflow: hidden; position: relative; cursor: pointer; aspect-ratio: 3 / 3.5; }
    .wo-card__photo { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center top; transition: transform 0.5s ease; }
    .wo-card:hover .wo-card__photo { transform: scale(1.04); }
    .wo-card__overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.05) 30%, rgba(0,0,0,0.72) 100%); transition: opacity 0.4s ease; }
    .wo-card__info { position: absolute; bottom: 0; left: 0; right: 0; padding: 24px 22px; color: #fff; transition: opacity 0.35s ease; }
    .wo-card__icon { margin-bottom: 8px; opacity: 0.9; }
    .wo-card__icon img { width: 28px; height: 28px; object-fit: contain; filter: brightness(0) invert(1); }
    .wo-card__label { font-size: 10.5px; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.75); margin-bottom: 6px; }
    .wo-card__title { font-family: 'Sora', sans-serif; font-size: clamp(16px,1.6vw,22px); font-weight: 700; color: #fff; line-height: 1.2; }
    .wo-card__hover {
      position: absolute; inset: 0;
      background: linear-gradient(145deg, #d6eaf8 0%, #c8e6fa 40%, #b2d8f5 100%);
      border-radius: 18px; padding: 28px 24px;
      display: flex; flex-direction: column; justify-content: space-between;
      opacity: 0; transform: translateY(12px);
      transition: opacity 0.38s ease, transform 0.38s ease;
      pointer-events: none;
    }
    .wo-card:hover .wo-card__hover { opacity: 1; transform: translateY(0); pointer-events: auto; }
    .wo-card:hover .wo-card__info, .wo-card:hover .wo-card__overlay { opacity: 0; }
    .wo-card__hover-icon img { width: 32px; height: 32px; object-fit: contain; }
    .wo-card__hover-label { font-size: 10px; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; color: var(--wo-muted); margin-top: 20px; margin-bottom: 8px; }
    .wo-card__hover-title { font-family: 'Sora', sans-serif; font-size: clamp(16px,1.6vw,20px); font-weight: 700; color: var(--wo-dark); line-height: 1.25; }
    .wo-card__hover-desc { font-size: 13px; line-height: 1.7; color: var(--wo-muted); margin-top: auto; padding-top: 20px; }
    .wo-bottom { display: flex; align-items: center; justify-content: space-between; margin-top: 8px; }
    .wo-counter { display: flex; align-items: baseline; gap: 4px; }
    .wo-counter__current { font-family: 'Sora', sans-serif; font-size: clamp(36px,5vw,56px); font-weight: 800; color: var(--wo-blue); line-height: 1; }
    .wo-counter__total { font-family: 'Sora', sans-serif; font-size: clamp(14px,1.6vw,18px); font-weight: 600; color: var(--wo-muted); }
    .wo-arrows { display: flex; gap: 12px; }
    .wo-arrow-btn { width: 48px; height: 48px; border-radius: 50%; border: 1.5px solid #c5cfd9; background: transparent; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background 0.2s, border-color 0.2s; }
    .wo-arrow-btn:hover { background: var(--wo-dark); border-color: var(--wo-dark); }
    .wo-arrow-btn:hover svg { stroke: #fff; }
    .wo-arrow-btn svg { width: 18px; height: 18px; stroke: var(--wo-dark); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; transition: stroke 0.2s; }

    /* ============================================================
       SECTION 4: AI TOOLS
    ============================================================ */
    .tat-section { position: relative; width: 100%; background-image: url('images/Ai-tools-bg-img.jpg'); background-size: cover; background-position: center; background-color: #0a1628; }
    .tat-inner { width: 100%; max-width: 1200px; margin: 0 auto; padding: 72px 48px; }
    .tat-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: stretch; }
    .tat-left { display: flex; flex-direction: column; justify-content: center; }
    .tat-eyebrow { font-size: 12px; font-weight: 500; letter-spacing: 0.06em; color: #7eb3e8; margin-bottom: 16px; }
    .tat-heading { font-family: 'Sora', sans-serif; font-size: clamp(24px,2.8vw,38px); font-weight: 700; color: #fff; line-height: 1.2; letter-spacing: -0.02em; margin-bottom: 20px; }
    .tat-body { font-size: 14px; line-height: 1.75; color: #a0b8d8; max-width: 440px; margin-bottom: 40px; }
    .tat-icons { display: grid; grid-template-columns: repeat(5, 80px); gap: 12px; }
    .tat-icon-btn { width: 80px; height: 80px; border-radius: 14px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.2s, background 0.2s; }
    .tat-icon-btn:hover { transform: translateY(-3px); background: rgba(255,255,255,0.14); }
    .tat-icon-btn img { width: 38px; height: 38px; object-fit: contain; }
    .tat-right { position: relative; }
    .tat-image-wrapper { width: 100%; height: 100%; min-height: 480px; border-radius: 20px; overflow: hidden; box-shadow: 0 24px 64px rgba(0,0,0,0.45); }
    .tat-image-wrapper img { width: 100%; height: 100%; object-fit: cover; display: block; }

    /* ============================================================
       SECTION 5: CASE STUDIES
    ============================================================ */
    .cs-section { position: relative; background: #fff; overflow: hidden; width: 100%; padding-bottom: 48px; }
    .cs-wm { position: absolute; top: 0; left: 0; right: 0; pointer-events: none; user-select: none; z-index: 0; overflow: hidden; }
    .cs-wm span { display: block; font-weight: 900; white-space: nowrap; line-height: 0.88; letter-spacing: -1px; font-size: clamp(72px,14.5vw,168px); }
    .cs-wm span:nth-child(1) { color: #e3e5e9; }
    .cs-wm span:nth-child(2) { color: #ecedf0; }
    .cs-wm span:nth-child(3) { color: #f4f5f6; }
    .cs-grid { position: relative; z-index: 1; display: grid; grid-template-columns: 42% 1fr; min-height: 500px; padding-top: clamp(130px,21vw,240px); }
    .cs-left { display: flex; align-items: flex-end; padding: 0 36px 16px 56px; }
    .cs-left-inner { display: flex; flex-direction: column; gap: 14px; }
    .cs-meta { font-size: 11.5px; font-weight: 500; color: #9ca3af; letter-spacing: 0.01em; }
    .cs-title { font-size: clamp(17px,2vw,24px); font-weight: 700; color: #111827; line-height: 1.38; }
    .cs-title .light { font-weight: 400; color: #9ca3af; }
    .btn-all { display: inline-flex; align-items: center; gap: 10px; border: 1.5px solid #d1d5db; border-radius: 50px; padding: 9px 20px 9px 10px; font-size: 12.5px; font-weight: 600; color: #374151; text-decoration: none; width: fit-content; transition: border-color .2s, color .2s; cursor: pointer; background: transparent; }
    .btn-all:hover { border-color: #1a1a1a; color: #1a1a1a; }
    .btn-all:hover .arr-dark { background: #1a1a1a; }
    .arr-dark { width: 28px; height: 28px; border-radius: 50%; background: #1f2937; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: background .2s; }
    .arr-dark svg { stroke: #fff; }
    .cs-right { position: relative; border-radius: 18px 0 0 18px; overflow: hidden; min-height: 480px; }
    .cs-slide-track { display: flex; width: 100%; height: 100%; transition: transform .45s cubic-bezier(.4,0,.2,1); }
    .cs-slide { flex: 0 0 100%; width: 100%; height: 100%; position: relative; }
    .cs-slide img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .cs-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(5,15,50,.02) 30%, rgba(5,15,50,.72) 100%); }
    .cs-card-body { position: absolute; bottom: 0; left: 0; right: 0; padding: clamp(18px,3vw,28px); z-index: 2; }
    .cs-card-tag { font-size: 11px; font-weight: 600; color: rgba(255,255,255,.7); margin-bottom: 8px; }
    .cs-card-title { font-size: clamp(14px,1.7vw,20px); font-weight: 700; color: #fff; line-height: 1.42; margin-bottom: 18px; }
    .btn-case { display: inline-flex; align-items: center; gap: 10px; border: 1.5px solid rgba(255,255,255,.45); border-radius: 50px; padding: 8px 20px 8px 10px; font-size: 12px; font-weight: 600; color: #fff; text-decoration: none; transition: background .2s, border-color .2s; cursor: pointer; background: transparent; }
    .btn-case:hover { background: rgba(255,255,255,.12); border-color: rgba(255,255,255,.7); }
    .arr-white { width: 26px; height: 26px; border-radius: 50%; background: rgba(255,255,255,.22); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .arr-white svg { stroke: #fff; }
    .cs-bottom { position: relative; z-index: 1; display: flex; align-items: center; justify-content: space-between; padding: 28px 0 0; margin: 0 56px; }
    .cs-bottom-spacer { flex: 0 0 42%; }
    .cs-counter { display: flex; align-items: baseline; gap: 3px; }
    .cs-cur { font-size: clamp(32px,5vw,52px); font-weight: 800; background: linear-gradient(135deg,#1a56db,#06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; }
    .cs-sep, .cs-tot { font-size: clamp(14px,1.8vw,20px); color: #b0b7c3; font-weight: 400; }
    .cs-nav { display: flex; gap: 10px; }
    .nav-btn { width: 42px; height: 42px; border-radius: 50%; border: 1.5px solid #d1d5db; background: transparent; color: #374151; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: border-color .2s, color .2s; }
    .nav-btn:hover { border-color: #374151; color: #111; }

    /* ============================================================
       SECTION 6: DRV STATS
    ============================================================ */
    .drv-section { position: relative; width: 100%; background-image: url('images/new-sec-bg.png'); background-size: cover; background-position: center; color: #fff; overflow: hidden; }
    .drv-section::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(2,20,60,0.55) 0%, rgba(5,30,80,0.35) 50%, rgba(2,20,60,0.50) 100%); z-index: 0; }
    .drv-inner { position: relative; z-index: 1; max-width: 1300px; margin: 0 auto; padding: 52px 40px; }
    .drv-top { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 28px; align-items: start; }
    .drv-headline { font-size: clamp(24px,2.8vw,38px); font-weight: 300; line-height: 1.2; letter-spacing: -0.01em; color: #e8f0ff; }
    .drv-desc { font-size: clamp(12px,1.05vw,14px); font-weight: 400; line-height: 1.7; color: rgba(210,225,255,0.82); }
    .drv-cards-wrap { display: flex; flex-direction: column; gap: 10px; }
    .drv-row { display: grid; gap: 10px; }
    .drv-row--70-30 { grid-template-columns: 70fr 30fr; }
    .drv-row--30-70 { grid-template-columns: 40fr 60fr; }
    .drv-box { background: rgba(255,255,255,0.09); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.13); border-radius: 10px; padding: 28px 20px; display: flex; flex-direction: row; align-items: center; gap: 20px; min-height: 145px; transition: background 0.25s, border-color 0.25s; }
    .drv-box:hover { background: rgba(255,255,255,0.14); border-color: rgba(255,255,255,0.22); }
    .drv-box__text { font-size: clamp(11.5px,1.05vw,14px); font-weight: 400; color: rgba(220,235,255,0.88); line-height: 1.6; flex: 1; }
    .drv-box__stat-wrap { display: flex; flex-direction: column; gap: 4px; flex-shrink: 0; }
    .drv-box__label { font-size: clamp(9px,0.78vw,11.5px); font-weight: 500; color: rgba(160,200,255,0.78); letter-spacing: 0.04em; line-height: 1.3; white-space: nowrap; }
    .drv-box__stat { font-size: clamp(42px,5.2vw,72px); font-weight: 300; line-height: 1; letter-spacing: -0.02em; background: linear-gradient(134deg, #2559CA 0%, #3AB8F1 52.43%, #2EDEDB 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

    /* ============================================================
       SECTION 7: OUR PROCESS
    ============================================================ */
    .opr-section { position: relative; width: 100%; overflow: hidden; padding-bottom: 48px; background: #fff; }
    .opr-section__blob { position: absolute; top: 20%; left: 50%; transform: translateX(-50%); width: 80%; height: 60%; background: radial-gradient(ellipse at center, rgba(255,255,255,0.35) 0%, transparent 70%); pointer-events: none; z-index: 0; }
    .opr-watermark { position: absolute; top: 0; left: 0; width: 100%; pointer-events: none; user-select: none; z-index: 0; overflow: hidden; line-height: 1; }
    .opr-watermark__text { display: block; width: 100%; text-align: right; font-size: 18vw; font-weight: 800; letter-spacing: -0.04em; white-space: nowrap; color: rgba(10,60,110,0.07); line-height: 0.88; }
    .opr-inner { position: relative; z-index: 1; max-width: 1240px; margin: 0 auto; padding: 0 5%; }
    .opr-meta { display: grid; grid-template-columns: 180px 1fr; column-gap: 36px; align-items: start; padding-top: 52px; margin-bottom: 36px; }
    .opr-meta__badge p { font-size: 11px; font-weight: 600; line-height: 1.7; color: #4a6e8a; letter-spacing: 0.01em; }
    .opr-meta__headline { font-size: clamp(1.2rem,1.9vw,1.75rem); font-weight: 600; color: #0d2540; line-height: 1.4; letter-spacing: -0.02em; max-width: 600px; }
    .opr-grid { display: grid; background-image: url('images/bg-image.png'); background-position: center; background-repeat: no-repeat; grid-template-columns: 1fr 1.08fr 1fr; grid-template-rows: 1fr 1fr; gap: 14px; margin-bottom: 36px; }
    .opr-card { border-radius: 16px; border: 1px solid rgba(180,210,235,0.7); background-color: rgba(255,255,255,0.68); backdrop-filter: blur(10px); padding: 28px 26px 26px; box-shadow: 0 2px 14px rgba(20,70,130,0.08); transition: transform 0.26s, box-shadow 0.26s; position: relative; overflow: hidden; }
    .opr-card::before { content: ''; position: absolute; inset: 0; border-radius: 16px; background: linear-gradient(135deg, rgba(255,255,255,0.52) 0%, rgba(220,238,252,0.22) 55%, rgba(200,228,248,0.06) 100%); pointer-events: none; }
    .opr-card:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(20,70,130,0.14); }
    .opr-card--1 { grid-column: 1; grid-row: 1 / 3; display: flex; flex-direction: column; background-image: url('images/phone-bg.png'); background-size: cover; background-position: center; }
    .opr-card--2 { grid-column: 2; grid-row: 1; }
    .opr-card--3 { grid-column: 2; grid-row: 2; }
    .opr-card--4 { grid-column: 3; grid-row: 1 / 3; display: flex; flex-direction: column; background-image: url('images/rocket-bg.png'); background-size: cover; background-position: center; }
    .opr-card__icon { margin-bottom: 12px; }
    .opr-card__icon img { width: 30px; height: 30px; object-fit: contain; display: block; }
    .opr-card__title { font-size: 14.5px; font-weight: 700; color: #0c2340; line-height: 1.3; margin-bottom: 9px; letter-spacing: -0.01em; position: relative; }
    .opr-card__body { font-family: 'Inter', sans-serif; font-size: 12.5px; font-weight: 400; color: #3d6080; line-height: 1.7; position: relative; }
    .opr-footer { display: flex; align-items: flex-start; justify-content: space-between; gap: 24px; flex-wrap: wrap; margin-bottom: 28px; }
    .opr-footer__left { font-size: 10px; font-weight: 600; color: #6888a4; letter-spacing: 0.03em; line-height: 1.7; text-transform: uppercase; }
    .opr-footer__tagline { font-size: clamp(13px,1.4vw,15px); font-weight: 700; color: #0d2540; line-height: 1.55; max-width: 460px; text-align: right; }
    .opr-footer__tagline span { color: #1a6fd4; }
    .opr-logos { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px 24px; padding-top: 22px; border-top: 1px solid rgba(26,111,180,0.18); }
    .opr-logo img { height: 28px; width: auto; object-fit: contain; display: block; }

    /* ============================================================
       SECTION 8: GET IN TOUCH CTA
    ============================================================ */
    .git-banner { position: relative; width: 100%; max-width: 1120px; margin: 60px auto; border-radius: 20px; overflow: hidden; padding: 52px 56px; background-image: url('images/CTA-bg-img.jpg'); background-size: cover; background-position: center; background-color: #0a1628; }
    .git-content { position: relative; z-index: 1; max-width: 420px; }
    .git-eyebrow { font-size: 12px; font-weight: 500; color: rgba(255,255,255,0.65); letter-spacing: 0.04em; margin-bottom: 14px; }
    .git-heading { font-family: 'Sora', sans-serif; font-size: clamp(22px,2.8vw,34px); font-weight: 700; color: #fff; line-height: 1.2; letter-spacing: -0.02em; margin-bottom: 14px; }
    .git-desc { font-size: 13px; line-height: 1.7; color: rgba(255,255,255,0.6); margin-bottom: 32px; max-width: 340px; }
    .git-btn { display: inline-flex; align-items: center; gap: 10px; padding: 13px 24px; border-radius: 50px; border: 1.5px solid rgba(255,255,255,0.4); background: transparent; color: #fff; font-size: 13.5px; font-weight: 500; cursor: pointer; text-decoration: none; transition: background 0.25s, border-color 0.25s; white-space: nowrap; }
    .git-btn:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.7); }
    .git-btn-icon { width: 28px; height: 28px; border-radius: 50%; background: rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .git-btn-icon svg { width: 14px; height: 14px; stroke: #fff; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

    /* ============================================================
       SECTION 9: FAQ
    ============================================================ */
    .faq-section { width: 100%; background: #fff; padding: clamp(2.5rem,5vw,5rem) 0; overflow: hidden; }
    .faq-inner { display: flex; align-items: stretch; min-height: 420px; }
    .faq-left { flex: 0 0 38%; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: center; padding-left: clamp(1.5rem,5vw,5rem); }
    .faq-watermark { display: flex; flex-direction: column; gap: 0; pointer-events: none; user-select: none; line-height: 0.88; }
    .faq-watermark span { font-size: clamp(4.5rem,10vw,10rem); font-weight: 700; line-height: 0.9; color: transparent; -webkit-text-stroke: 2px rgba(0,0,0,0.10); letter-spacing: -0.01em; display: block; }
    .faq-right { flex: 1; padding: 0 clamp(1.5rem,5vw,5rem) 0 clamp(1rem,3vw,3rem); display: flex; flex-direction: column; justify-content: center; }
    .faq-item { border-bottom: 1px solid #dde2e8; }
    .faq-item:first-child { border-top: 1px solid #dde2e8; }
    .faq-question { width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 1.5rem; padding: clamp(0.95rem,1.8vw,1.25rem) 0; background: none; border: none; cursor: pointer; text-align: left; }
    .faq-question-text { font-size: clamp(0.88rem,1.4vw,1rem); font-weight: 600; color: #0d1b2e; line-height: 1.4; }
    .faq-icon { flex-shrink: 0; width: 20px; height: 20px; position: relative; display: flex; align-items: center; justify-content: center; }
    .faq-icon::before, .faq-icon::after { content: ''; position: absolute; background: #0d1b2e; border-radius: 2px; transition: transform 0.3s, opacity 0.3s; }
    .faq-icon::before { width: 14px; height: 1.5px; }
    .faq-icon::after { width: 1.5px; height: 14px; }
    .faq-item.open .faq-icon::after { transform: rotate(90deg); opacity: 0; }
    .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.38s ease; }
    .faq-item.open .faq-answer { max-height: 250px; }
    .faq-answer-inner { padding-bottom: clamp(0.9rem,1.8vw,1.2rem); font-size: clamp(0.78rem,1.1vw,0.88rem); font-weight: 500; color: #5c6b7a; line-height: 1.75; }

    /* ============================================================
       SECTION 10: CONTACT FORM
    ============================================================ */
    .cu-section { font-family: 'Inter', sans-serif; padding: 3rem 2rem; display: flex; justify-content: center; background: #fff; }
    .cu-inner { display: flex; gap: 2.5rem; max-width: 900px; width: 100%; align-items: center; }
    .cu-card { flex: 0 0 300px; min-height: 380px; border-radius: 20px; background: url('images/contact-bg.png') no-repeat center center/cover; padding: 2rem; display: flex; flex-direction: column; justify-content: flex-end; position: relative; overflow: hidden; }
    .cu-card-label { position: relative; z-index: 1; font-size: 12px; color: rgba(255,255,255,0.65); letter-spacing: 0.04em; margin-bottom: 8px; }
    .cu-card-title { position: relative; z-index: 1; font-size: 22px; font-weight: 500; color: #fff; line-height: 1.3; margin-bottom: 10px; }
    .cu-card-desc { position: relative; z-index: 1; font-size: 13px; color: rgba(255,255,255,0.6); line-height: 1.6; }
    .cu-form-wrap { flex: 1; }
    .cu-form-wrap h2 { font-size: 26px; font-weight: 600; color: #111; margin-bottom: 6px; }
    .cu-form-wrap p { font-size: 14px; color: #666; margin-bottom: 24px; }
    .cu-row { display: flex; gap: 14px; margin-bottom: 16px; }
    .cu-field { display: flex; flex-direction: column; flex: 1; }
    .cu-field label { font-size: 13px; color: #555; margin-bottom: 6px; }
    .cu-field input, .cu-field select, .cu-field textarea { width: 100%; padding: 10px 14px; border: 1px solid #d1d5db; border-radius: 10px; font-size: 14px; color: #111; background: #fff; outline: none; transition: border-color 0.2s; font-family: inherit; }
    .cu-field input:focus, .cu-field select:focus, .cu-field textarea:focus { border-color: #3a7cff; }
    .cu-field textarea { resize: none; height: 90px; }
    .cu-phone-row { display: flex; }
    .cu-phone-prefix { display: flex; align-items: center; gap: 6px; padding: 10px 12px; border: 1px solid #d1d5db; border-right: none; border-radius: 10px 0 0 10px; background: #fff; font-size: 13px; color: #111; white-space: nowrap; }
    .cu-phone-prefix select { border: none; outline: none; background: transparent; font-size: 13px; color: #111; cursor: pointer; padding: 0; }
    .cu-phone-input { flex: 1; padding: 10px 14px; border: 1px solid #d1d5db; border-radius: 0 10px 10px 0; font-size: 14px; color: #111; background: #fff; outline: none; transition: border-color 0.2s; font-family: inherit; }
    .cu-phone-input:focus { border-color: #3a7cff; }
    .cu-btn { display: inline-flex; align-items: center; gap: 10px; padding: 12px 28px; border: 1.5px solid #222; border-radius: 50px; background: transparent; font-size: 14px; font-weight: 500; color: #111; cursor: pointer; transition: background 0.18s, color 0.18s; margin-top: 8px; }
    .cu-btn:hover { background: #1a1a1a; color: #fff; }
    .cu-btn-dot { width: 8px; height: 8px; border-radius: 50%; background: #3a7cff; flex-shrink: 0; }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1024px) {
      .tw-hero__breadcrumb-wrap { padding: 110px 28px 16px; }
      .tw-hero__inner { flex-direction: column; padding: 40px 28px 60px; gap: 40px; align-items: flex-start; }
      .tw-hero__form-wrap { flex: none; width: 100%; max-width: 480px; }
      .tat-inner { padding: 56px 32px; }
      .tat-layout { grid-template-columns: 1fr; gap: 40px; }
      .tat-image-wrapper { min-height: 320px; height: 320px; }
    }
    @media (max-width: 900px) {
      .dw-section { padding: 48px 28px; }
      .dw-grid { gap: 0 36px; }
      .wo-section { padding: 48px 28px 40px; }
      .drv-top { grid-template-columns: 1fr; }
      .drv-row--70-30, .drv-row--30-70 { grid-template-columns: 1fr 1fr; }
      .opr-meta { grid-template-columns: 1fr; }
      .opr-meta__badge { display: none; }
      .opr-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto auto auto; }
      .opr-card--1 { grid-column: 1; grid-row: auto; }
      .opr-card--2 { grid-column: 2; grid-row: auto; }
      .opr-card--3 { grid-column: 1; grid-row: auto; }
      .opr-card--4 { grid-column: 2; grid-row: auto; }
      .faq-left { flex: 0 0 34%; }
      .cs-grid { grid-template-columns: 1fr; }
      .cs-left { padding: 0 20px 20px; align-items: flex-start; }
    }
    @media (max-width: 640px) {
      .tw-hero__breadcrumb-wrap { padding: 100px 18px 14px; }
      .tw-hero__inner { padding: 32px 18px 48px; }
      .tw-hero__form-wrap { max-width: 100%; }
      .dw-section { padding: 40px 20px; }
      .dw-grid { grid-template-columns: 1fr; grid-template-rows: auto auto auto; gap: 32px 0; }
      .dw-image-col { grid-row: 1/2; grid-column: 1/2; }
      .dw-image-wrapper { aspect-ratio: 4/3; border-radius: 14px; }
      .dw-content-top { grid-row: 2/3; grid-column: 1/2; padding-top: 0; }
      .dw-content-bottom { grid-row: 3/4; grid-column: 1/2; align-items: flex-start; padding-bottom: 0; padding-top: 24px; }
      .dw-body { max-width: 100%; }
      .wo-section { padding: 36px 18px 32px; }
      .wo-watermark { font-size: 56px; top: -6px; }
      .tat-inner { padding: 40px 20px; }
      .tat-icons { grid-template-columns: repeat(5, 60px); gap: 10px; }
      .tat-icon-btn { width: 60px; height: 60px; border-radius: 12px; }
      .tat-icon-btn img { width: 28px; height: 28px; }
      .drv-inner { padding: 28px 16px; }
      .drv-row--70-30, .drv-row--30-70 { grid-template-columns: 1fr; }
      .git-banner { padding: 36px 24px; border-radius: 16px; margin: 40px 20px; }
      .opr-grid { grid-template-columns: 1fr; }
      .opr-card--1, .opr-card--2, .opr-card--3, .opr-card--4 { grid-column: 1; grid-row: auto; }
      .opr-footer { flex-direction: column; }
      .opr-footer__tagline { text-align: left; max-width: 100%; }
      .faq-inner { flex-direction: column; }
      .faq-left { flex: none; padding: 0 clamp(1.5rem,5vw,3rem); }
      .faq-watermark span:not(:first-child) { display: none; }
      .faq-right { padding: 0 clamp(1.5rem,5vw,3rem); }
      .cu-inner { flex-direction: column; }
      .cu-card { flex: none; width: 100%; min-height: 220px; }
      .cu-row { flex-direction: column; gap: 0; margin-bottom: 0; }
      .cu-row .cu-field { margin-bottom: 16px; }
      .cs-bottom { margin: 0 20px; flex-wrap: wrap; gap: 12px; }
      .cs-bottom-spacer { display: none; }
    }
  </style>
</head>
<body>

<!-- ═══════════════ SECTION 1: HERO ═══════════════ -->
<section class="tw-hero" aria-label="Cybersecurity Hero">
  <div class="tw-hero__bg" aria-hidden="true"></div>
  <div class="tw-hero__blob tw-hero__blob--1" aria-hidden="true"></div>
  <div class="tw-hero__blob tw-hero__blob--2" aria-hidden="true"></div>
  <div class="tw-hero__grid" aria-hidden="true"></div>

  <div class="tw-hero__header-row">
    <div class="tw-hero__breadcrumb-wrap">
      <span class="tw-hero__breadcrumb">What We Do / Cyber Security</span>
    </div>
    <div class="tw-hero__divider"></div>
  </div>

  <div class="tw-hero__inner">
    <div class="tw-hero__content">
      <h1 class="tw-hero__title">
        Secure, Detect, and <br>Respond Across <br>Every Layer of Your <br>Business
      </h1>
      <p class="tw-hero__desc">
        Advanced cybersecurity solutions designed to protect applications, networks, and data through continuous monitoring, threat detection, and rapid response ensuring resilience in an evolving threat landscape.
      </p>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="tw-hero__cta">
        <span class="tw-hero__cta-arrow">
          <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </span>
        Strengthen Your Security Posture
      </a>
    </div>

    <!-- RIGHT: Enquire Form Card with Country Phone Dropdown -->
    <div class="tw-hero__form-wrap">
      <div class="tw-enquire-card">
        <h2 class="tw-enquire-card__title">Enquire Now</h2>
        <form novalidate onsubmit="return false;">

          <div class="tw-form-group">
            <label for="tw-full-name">Full Name</label>
            <input id="tw-full-name" type="text" placeholder="Enter Full Name" autocomplete="name"/>
          </div>

          <!-- ── Phone with Country Dropdown ── -->
          <div class="tw-form-group">
            <label for="tw-phone">Phone number</label>
            <div class="tw-phone-row">
              <div class="tw-phone-select-wrap">
                <span class="tw-phone-flag-preview" id="twFlagPreview">🇺🇸</span>
                <select class="tw-phone-select" id="twCountrySelect" aria-label="Country code">
                  <option value="+1"    data-flag="🇺🇸">+1</option>
                  <option value="+7"    data-flag="🇷🇺">+7</option>
                  <option value="+20"   data-flag="🇪🇬">+20</option>
                  <option value="+27"   data-flag="🇿🇦">+27</option>
                  <option value="+30"   data-flag="🇬🇷">+30</option>
                  <option value="+31"   data-flag="🇳🇱">+31</option>
                  <option value="+32"   data-flag="🇧🇪">+32</option>
                  <option value="+33"   data-flag="🇫🇷">+33</option>
                  <option value="+34"   data-flag="🇪🇸">+34</option>
                  <option value="+36"   data-flag="🇭🇺">+36</option>
                  <option value="+39"   data-flag="🇮🇹">+39</option>
                  <option value="+40"   data-flag="🇷🇴">+40</option>
                  <option value="+41"   data-flag="🇨🇭">+41</option>
                  <option value="+43"   data-flag="🇦🇹">+43</option>
                  <option value="+44"   data-flag="🇬🇧">+44</option>
                  <option value="+45"   data-flag="🇩🇰">+45</option>
                  <option value="+46"   data-flag="🇸🇪">+46</option>
                  <option value="+47"   data-flag="🇳🇴">+47</option>
                  <option value="+48"   data-flag="🇵🇱">+48</option>
                  <option value="+49"   data-flag="🇩🇪">+49</option>
                  <option value="+51"   data-flag="🇵🇪">+51</option>
                  <option value="+52"   data-flag="🇲🇽">+52</option>
                  <option value="+54"   data-flag="🇦🇷">+54</option>
                  <option value="+55"   data-flag="🇧🇷">+55</option>
                  <option value="+56"   data-flag="🇨🇱">+56</option>
                  <option value="+57"   data-flag="🇨🇴">+57</option>
                  <option value="+60"   data-flag="🇲🇾">+60</option>
                  <option value="+61"   data-flag="🇦🇺">+61</option>
                  <option value="+62"   data-flag="🇮🇩">+62</option>
                  <option value="+63"   data-flag="🇵🇭">+63</option>
                  <option value="+64"   data-flag="🇳🇿">+64</option>
                  <option value="+65"   data-flag="🇸🇬">+65</option>
                  <option value="+66"   data-flag="🇹🇭">+66</option>
                  <option value="+81"   data-flag="🇯🇵">+81</option>
                  <option value="+82"   data-flag="🇰🇷">+82</option>
                  <option value="+84"   data-flag="🇻🇳">+84</option>
                  <option value="+86"   data-flag="🇨🇳">+86</option>
                  <option value="+90"   data-flag="🇹🇷">+90</option>
                  <option value="+91"   data-flag="🇮🇳">+91</option>
                  <option value="+92"   data-flag="🇵🇰">+92</option>
                  <option value="+93"   data-flag="🇦🇫">+93</option>
                  <option value="+94"   data-flag="🇱🇰">+94</option>
                  <option value="+95"   data-flag="🇲🇲">+95</option>
                  <option value="+98"   data-flag="🇮🇷">+98</option>
                  <option value="+212"  data-flag="🇲🇦">+212</option>
                  <option value="+213"  data-flag="🇩🇿">+213</option>
                  <option value="+216"  data-flag="🇹🇳">+216</option>
                  <option value="+220"  data-flag="🇬🇲">+220</option>
                  <option value="+221"  data-flag="🇸🇳">+221</option>
                  <option value="+233"  data-flag="🇬🇭">+233</option>
                  <option value="+234"  data-flag="🇳🇬">+234</option>
                  <option value="+254"  data-flag="🇰🇪">+254</option>
                  <option value="+255"  data-flag="🇹🇿">+255</option>
                  <option value="+256"  data-flag="🇺🇬">+256</option>
                  <option value="+260"  data-flag="🇿🇲">+260</option>
                  <option value="+263"  data-flag="🇿🇼">+263</option>
                  <option value="+351"  data-flag="🇵🇹">+351</option>
                  <option value="+353"  data-flag="🇮🇪">+353</option>
                  <option value="+358"  data-flag="🇫🇮">+358</option>
                  <option value="+380"  data-flag="🇺🇦">+380</option>
                  <option value="+420"  data-flag="🇨🇿">+420</option>
                  <option value="+966"  data-flag="🇸🇦">+966</option>
                  <option value="+971"  data-flag="🇦🇪">+971</option>
                  <option value="+972"  data-flag="🇮🇱">+972</option>
                  <option value="+973"  data-flag="🇧🇭">+973</option>
                  <option value="+974"  data-flag="🇶🇦">+974</option>
                  <option value="+977"  data-flag="🇳🇵">+977</option>
                  <option value="+994"  data-flag="🇦🇿">+994</option>
                  <option value="+995"  data-flag="🇬🇪">+995</option>
                  <option value="+998"  data-flag="🇺🇿">+998</option>
                </select>
                <span class="tw-phone-chevron">
                  <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                </span>
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
              <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </span>
            Enquire now
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 2: OVERVIEW ═══════════════ -->
<section class="dw-section">
  <div class="dw-grid">
    <div class="dw-image-col">
      <div class="dw-image-wrapper">
        <img src="images/cyberview.png" alt="Cybersecurity overview"/>
      </div>
    </div>
    <div class="dw-content-top">
      <p class="dw-label">Overview</p>
      <h2 class="dw-heading">Cybersecurity Built for Continuous Protection and Resilience</h2>
      <p class="dw-body">Cybersecurity services are designed to protect critical systems, data, and operations through proactive threat detection, risk management, and continuous monitoring across enterprise environments.</p>
    </div>
    <div class="dw-content-bottom">
      <p class="dw-highlight-text">
        <strong>Modern cybersecurity operates as a continuous cycle of</strong> detection, response, and recovery — designed to reduce risks and keep your business secure.
      </p>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 3: WHAT WE OFFER ═══════════════ -->
<section class="wo-section" id="woSection">
  <div class="wo-watermark" aria-hidden="true">
    <span>what we offer</span>
    <span>what we offer</span>
  </div>
  <div class="wo-cards-viewport" id="woViewport">
    <div class="wo-cards-track" id="woTrack">

      <div class="wo-card">
        <img class="wo-card__photo" src="images/threat-management-bg-mg.png" alt="Threat Detection"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/HeadCircuit01.svg" alt="Threat icon"/></div>
          <div class="wo-card__label">Threat Management</div>
          <div class="wo-card__title">Threat Detection & Response (MDR)</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/HeadCircuit01.svg" alt=""/></div>
            <div class="wo-card__hover-label">Threat Management</div>
            <div class="wo-card__hover-title">Threat Detection & Response (MDR)</div>
          </div>
          <div class="wo-card__hover-desc">Continuous monitoring, threat intelligence, and rapid response capabilities to detect, investigate, and mitigate security incidents in real time.</div>
        </div>
      </div>

      <div class="wo-card">
        <img class="wo-card__photo" src="images/protection-bg-mg.png" alt="Network Security"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/secure.png" alt="Security icon"/></div>
          <div class="wo-card__label">Protection</div>
          <div class="wo-card__title">Network, Endpoint & Cloud Security</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/secure.png" alt=""/></div>
            <div class="wo-card__hover-label">Protection</div>
            <div class="wo-card__hover-title">Network, Endpoint & Cloud Security</div>
          </div>
          <div class="wo-card__hover-desc">Comprehensive protection across endpoints, networks, and cloud environments to prevent breaches and secure distributed systems.</div>
        </div>
      </div>

      <div class="wo-card">
        <img class="wo-card__photo" src="images/risk & compliance-bg-img.png" alt="GRC"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/Vector.svg" alt="GRC icon"/></div>
          <div class="wo-card__label">Risk & Compliance</div>
          <div class="wo-card__title">Governance, Risk & Compliance (GRC)</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/Vector.svg" alt=""/></div>
            <div class="wo-card__hover-label">Risk & Compliance</div>
            <div class="wo-card__hover-title">Governance, Risk & Compliance (GRC)</div>
          </div>
          <div class="wo-card__hover-desc">Structured frameworks to manage risk, meet regulatory requirements, and maintain audit readiness across security operations.</div>
        </div>
      </div>

      <div class="wo-card">
        <img class="wo-card__photo" src="images/vulnerability-management-bg-img.png" alt="Penetration Testing"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/vulnerability-management-icon.svg" alt="Testing icon"/></div>
          <div class="wo-card__label">Testing</div>
          <div class="wo-card__title">Vulnerability Assessment & Penetration Testing</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/vulnerability-management-icon.svg" alt=""/></div>
            <div class="wo-card__hover-label">Testing</div>
            <div class="wo-card__hover-title">Vulnerability Assessment & Penetration Testing</div>
          </div>
          <div class="wo-card__hover-desc">Proactive identification of weaknesses through testing, simulation, and continuous vulnerability management.</div>
        </div>
      </div>

      <div class="wo-card">
        <img class="wo-card__photo" src="images/Identity & Access Management-bg-img.png" alt="SOC Services"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/Identity & Access Management-icon.svg" alt="SOC icon"/></div>
          <div class="wo-card__label">Operations</div>
          <div class="wo-card__title">Security Operations Center (SOC) Services</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/Identity & Access Management-icon.svg" alt=""/></div>
            <div class="wo-card__hover-label">Operations</div>
            <div class="wo-card__hover-title">Security Operations Center (SOC) Services</div>
          </div>
          <div class="wo-card__hover-desc">Centralized monitoring, analysis, and response providing full visibility into security events across systems and applications.</div>
        </div>
      </div>

      <div class="wo-card">
        <img class="wo-card__photo" src="images/Incident Response & Recovery-bg-img.png" alt="Incident Response"/>
        <div class="wo-card__overlay"></div>
        <div class="wo-card__info">
          <div class="wo-card__icon"><img src="images/Incident Response-icon.svg" alt="IR icon"/></div>
          <div class="wo-card__label">Incident Response</div>
          <div class="wo-card__title">Incident Response & Recovery</div>
        </div>
        <div class="wo-card__hover">
          <div>
            <div class="wo-card__hover-icon"><img src="images/Incident Response-icon.svg" alt=""/></div>
            <div class="wo-card__hover-label">Incident Response</div>
            <div class="wo-card__hover-title">Incident Response & Recovery</div>
          </div>
          <div class="wo-card__hover-desc">Rapid containment, investigation, and recovery strategies to minimize impact and restore operations after security incidents.</div>
        </div>
      </div>

    </div>
  </div>
  <div class="wo-bottom">
    <div class="wo-counter">
      <span class="wo-counter__current" id="woCurrentSlide">01</span>
      <span class="wo-counter__total" id="woTotalSlide">/06</span>
    </div>
    <div class="wo-arrows">
      <button class="wo-arrow-btn" id="woPrev" aria-label="Previous"><svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg></button>
      <button class="wo-arrow-btn" id="woNext" aria-label="Next"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></button>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 4: AI TOOLS ═══════════════ -->
<section class="tat-section">
  <div class="tat-inner">
    <div class="tat-layout">
      <div class="tat-left">
        <p class="tat-eyebrow">Teceze AI Tools</p>
        <h2 class="tat-heading">Enhance productivity with Teceze AI tools</h2>
        <p class="tat-body">AI-powered workplace tools automate routine tasks, improve efficiency, and provide real-time insights to support connected, high-performing environments.</p>
        <div class="tat-icons">
          <div class="tat-icon-btn" title="Microsoft"><img src="images/icon (1).svg" alt="Microsoft"/></div>
          <div class="tat-icon-btn" title="Slack"><img src="images/icon (2).svg" alt="Slack"/></div>
          <div class="tat-icon-btn" title="Google Drive"><img src="images/icon (3).svg" alt="Google Drive"/></div>
          <div class="tat-icon-btn" title="Outlook"><img src="images/icon (4).svg" alt="Outlook"/></div>
          <div class="tat-icon-btn" title="Teams"><img src="images/icon (5).svg" alt="Teams"/></div>
          <div class="tat-icon-btn" title="Notion"><img src="images/icon (6).svg" alt="Notion"/></div>
          <div class="tat-icon-btn" title="ChatGPT"><img src="images/icon (7).svg" alt="ChatGPT"/></div>
          <div class="tat-icon-btn" title="Zapier"><img src="images/icon (8).svg" alt="Zapier"/></div>
          <div class="tat-icon-btn" title="Copilot"><img src="images/icon (9).svg" alt="Copilot"/></div>
          <div class="tat-icon-btn" title="Skype"><img src="images/icon.svg" alt="Skype"/></div>
        </div>
      </div>
      <div class="tat-right">
        <div class="tat-image-wrapper">
          <img src="images/cybr.jpg" alt="Cybersecurity tools"/>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 5: CASE STUDIES ═══════════════ -->
<section class="cs-section">
  <div class="cs-wm" aria-hidden="true">
    <span>case studies</span>
    <span>case studies</span>
    <span>case studies</span>
  </div>
  <div class="cs-grid">
    <div class="cs-left"><div class="cs-left-inner" id="csLeft"></div></div>
    <div class="cs-right"><div class="cs-slide-track" id="csTrack"></div></div>
  </div>
  <div class="cs-bottom">
    <div class="cs-bottom-spacer"></div>
    <div class="cs-counter">
      <span class="cs-cur" id="csCur">01</span>
      <span class="cs-sep">&thinsp;/</span>
      <span class="cs-tot" id="csTot">03</span>
    </div>
    <div class="cs-nav">
      <button class="nav-btn" id="csPrev"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg></button>
      <button class="nav-btn" id="csNext"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></button>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 6: STATS ═══════════════ -->
<section class="drv-section">
  <div class="drv-inner">
    <div class="drv-top">
      <h2 class="drv-headline">Measurable Security Performance</h2>
      <p class="drv-desc">Security operations are optimized to improve visibility, accelerate response, and reduce risk across enterprise environments.</p>
    </div>
    <div class="drv-cards-wrap">
      <div class="drv-row drv-row--70-30">
        <div class="drv-box">
          <p class="drv-box__text">Delivering continuous protection with measurable impact on threat detection and response.</p>
          <div class="drv-box__stat-wrap"><span class="drv-box__label">Faster Threat Detection</span><span class="drv-box__stat">50%</span></div>
        </div>
        <div class="drv-box">
          <div class="drv-box__stat-wrap"><span class="drv-box__label">Incident Response Time</span><span class="drv-box__stat">2X</span></div>
          <p class="drv-box__text">Experienced security teams delivering protection across complex global environments.</p>
        </div>
      </div>
      <div class="drv-row drv-row--30-70">
        <div class="drv-box">
          <p class="drv-box__text">Proactive monitoring and mitigation reduce exposure to critical vulnerabilities.</p>
          <div class="drv-box__stat-wrap"><span class="drv-box__label">Risk Reduction</span><span class="drv-box__stat">60%</span></div>
        </div>
        <div class="drv-box">
          <p class="drv-box__text">Security frameworks aligned to industry standards and regulatory requirements.</p>
          <div class="drv-box__stat-wrap"><span class="drv-box__label">Compliance Readiness</span><span class="drv-box__stat">100%</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 7: OUR PROCESS ═══════════════ -->
<section class="opr-section" aria-label="Our Process">
  <div class="opr-section__blob" aria-hidden="true"></div>
  <div class="opr-watermark" aria-hidden="true"><span class="opr-watermark__text">our process</span></div>
  <div class="opr-inner">
    <div class="opr-meta">
      <div class="opr-meta__badge"><p>Performance Backed by<br>Security Metrics</p></div>
      <h2 class="opr-meta__headline">We provide data-driven outcomes that strengthen your security posture, improve response times, and ensure business continuity.</h2>
    </div>
    <div class="opr-grid">
      <div class="opr-card opr-card--1">
        <h3 class="opr-card__title">1.&nbsp; Discovery Call</h3>
        <p class="opr-card__body">Defining scope, business goals, and current security landscape.</p>
      </div>
      <div class="opr-card opr-card--2">
        <div class="opr-card__icon"><img src="images/Vector (4).png" alt="Assessment icon"/></div>
        <h3 class="opr-card__title">2.&nbsp; Assessment &amp; Proposal</h3>
        <p class="opr-card__body">Technical audit followed by a strategic roadmap and resource plan.</p>
      </div>
      <div class="opr-card opr-card--3">
        <div class="opr-card__icon"><img src="images/Vector (5).png" alt="Pilot icon"/></div>
        <h3 class="opr-card__title">3.&nbsp; Pilot Deployment</h3>
        <p class="opr-card__body">Testing core controls in a controlled environment for validation.</p>
      </div>
      <div class="opr-card opr-card--4">
        <h3 class="opr-card__title">4.&nbsp; Full Scale Rollout</h3>
        <p class="opr-card__body">Enterprise-wide implementation with ongoing SOC management.</p>
      </div>
    </div>
    <div class="opr-footer">
      <div class="opr-footer__left">Powered by Global<br>Technology Leaders</div>
      <p class="opr-footer__tagline">We collaborate with trusted technology leaders to deliver secure, <span>innovative</span>, and future-ready solutions for our clients.</p>
    </div>
    <div class="opr-logos">
      <div class="opr-logo"><img src="images/Infosys.png" alt="Infosys"/></div>
      <div class="opr-logo"><img src="images/Accenture.png" alt="Accenture"/></div>
      <div class="opr-logo"><img src="images/Hexaware.png" alt="Hexaware"/></div>
      <div class="opr-logo"><img src="images/HCL.png" alt="HCL"/></div>
      <div class="opr-logo"><img src="images/GP Strategies.png" alt="GP Strategies"/></div>
    </div>
  </div>
</section>

<!-- ═══════════════ SECTION 8: GET IN TOUCH CTA ═══════════════ -->
<section class="git-banner">
  <div class="git-content">
    <p class="git-eyebrow">Get In Touch</p>
    <h2 class="git-heading">Start with a Clear Security<br>Assessment</h2>
    <p class="git-desc">Let's discuss how Teceze can deliver for your organization.</p>
    <a href="#" class="git-btn">
      <span class="git-btn-icon"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
      Talk to Our Alliances Team
    </a>
  </div>
</section>

<!-- ═══════════════ SECTION 9: FAQ ═══════════════ -->
<section class="faq-section">
  <div class="faq-inner">
    <div class="faq-left">
      <div class="faq-watermark" aria-hidden="true">
        <span>FAQ</span><span>FAQ</span><span>FAQ</span><span>FAQ</span>
      </div>
    </div>
    <div class="faq-right">
      <div class="faq-item open">
        <button class="faq-question" aria-expanded="true">
          <span class="faq-question-text">What services does Teceze provide?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer"><p class="faq-answer-inner">Teceze offers comprehensive IT solutions including cybersecurity, managed IT services, digital transformation, and AI-driven automation tailored to enterprise needs.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Does Teceze support global enterprises?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer"><p class="faq-answer-inner">Yes, Teceze supports enterprises across multiple continents with dedicated regional teams and 24/7 support infrastructure to ensure seamless global operations.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">How can I get started with Teceze?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer"><p class="faq-answer-inner">Getting started is simple — reach out through our contact page, and a solutions consultant will schedule a discovery call to understand your business needs.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Can solutions be customized?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer"><p class="faq-answer-inner">Absolutely. All Teceze solutions are tailored to your specific industry, scale, and operational requirements — no one-size-fits-all approach.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Do you provide real-time security monitoring?</span>
          <span class="faq-icon"></span>
        </button>
        <div class="faq-answer"><p class="faq-answer-inner">Yes, our Security Operations Center (SOC) provides 24/7 real-time threat detection, monitoring, and incident response across all your endpoints and cloud environments.</p></div>
      </div>
    </div>
  </div>
</section>
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

<!-- ═══════════════ SECTION 10: CONTACT FORM ═══════════════ -->
<!--<section class="cu-section">-->
<!--  <div class="cu-inner">-->
<!--    <div class="cu-card">-->
<!--      <p class="cu-card-label">Get In Touch</p>-->
<!--      <h3 class="cu-card-title">Let's Strengthen Your Security Strategy</h3>-->
<!--      <p class="cu-card-desc">Schedule a personalized consultation with our alliance experts.</p>-->
<!--    </div>-->
<!--    <div class="cu-form-wrap">-->
<!--      <h2>Contact us now</h2>-->
<!--      <p>Fill in the data for profile. It will take a couple of minutes.</p>-->
<!--      <div class="cu-row">-->
<!--        <div class="cu-field"><label>First Name</label><input type="text" placeholder="John"/></div>-->
<!--        <div class="cu-field"><label>Last Name</label><input type="text" placeholder="David"/></div>-->
<!--      </div>-->
<!--      <div class="cu-field" style="margin-bottom:16px;">-->
<!--        <label>Phone number</label>-->
<!--        <div class="cu-phone-row">-->
<!--          <div class="cu-phone-prefix">-->
<!--            <span>🇺🇸</span>-->
<!--            <select><option>+1</option><option>+44</option><option>+91</option><option>+61</option><option>+971</option><option>+65</option><option>+49</option><option>+33</option></select>-->
<!--          </div>-->
<!--          <input class="cu-phone-input" type="tel" placeholder="Phone number"/>-->
<!--        </div>-->
<!--      </div>-->
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
<!--      <div class="cu-field" style="margin-bottom:8px;">-->
<!--        <label>Describe your case</label>-->
<!--        <textarea placeholder="Tell us about your use case..."></textarea>-->
<!--      </div>-->
<!--      <button class="cu-btn"><span class="cu-btn-dot"></span>Get In Touch</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!-- ═══════════════ JAVASCRIPT ═══════════════ -->
<script>
(function () {

  /* ── Country Phone Dropdown — Enquire Card ── */
  var sel     = document.getElementById('twCountrySelect');
  var preview = document.getElementById('twFlagPreview');
  function updateFlag() {
    var opt = sel.options[sel.selectedIndex];
    preview.textContent = opt.getAttribute('data-flag') || '';
  }
  sel.addEventListener('change', updateFlag);
  updateFlag();

  /* ── What We Offer Slider ── */
  var GAP       = 20;
  var viewport  = document.getElementById('woViewport');
  var track     = document.getElementById('woTrack');
  var prevBtn   = document.getElementById('woPrev');
  var nextBtn   = document.getElementById('woNext');
  var currentEl = document.getElementById('woCurrentSlide');
  var totalEl   = document.getElementById('woTotalSlide');

  var origCards = Array.from(track.querySelectorAll('.wo-card'));
  var TOTAL     = origCards.length; // 6

  origCards.forEach(function (c) { track.appendChild(c.cloneNode(true)); });

  function allCards() { return Array.from(track.querySelectorAll('.wo-card')); }

  var idx = 0;

  function visCount() {
    var w = window.innerWidth;
    if (w <= 580) return 1;
    if (w <= 900) return 2;
    return 3;
  }

  function cardWidth() {
    var vpW = viewport.clientWidth;
    var vis = visCount();
    return (vpW - GAP * (vis - 1)) / vis;
  }

  function setLayout() {
    var cw = cardWidth();
    allCards().forEach(function (c) { c.style.width = cw + 'px'; });
  }

  function realCard() { return ((idx % TOTAL) + TOTAL) % TOTAL; }

  function applyTransform(animate) {
    var step   = cardWidth() + GAP;
    var offset = idx * step;
    track.style.transition = animate ? 'transform 0.45s cubic-bezier(0.4,0,0.2,1)' : 'none';
    track.style.transform  = 'translateX(-' + offset + 'px)';
    currentEl.textContent  = String(realCard() + 1).padStart(2, '0');
    totalEl.textContent    = '/' + String(TOTAL).padStart(2, '0');
  }

  function goNext() {
    idx++;
    applyTransform(true);
    if (idx >= TOTAL) {
      setTimeout(function () { idx = idx - TOTAL; applyTransform(false); }, 460);
    }
  }

  function goPrev() {
    if (idx <= 0) {
      idx = TOTAL;
      applyTransform(false);
      requestAnimationFrame(function () { requestAnimationFrame(function () { idx--; applyTransform(true); }); });
    } else {
      idx--;
      applyTransform(true);
    }
  }

  function initSlider() { setLayout(); applyTransform(false); }

  nextBtn.addEventListener('click', goNext);
  prevBtn.addEventListener('click', goPrev);

  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () { idx = 0; initSlider(); }, 120);
  });

  requestAnimationFrame(function () { requestAnimationFrame(initSlider); });

  /* ── Case Study Slider ── */
  var SLIDES = [
    { meta: 'Strengthening Enterprise Cybersecurity', leftTitle: 'Implemented AI-driven security to reduce threats', leftLight: ' and improve real-time response.', cardTag: 'Driving Data-Driven Decisions', cardTitle: 'Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.', image: 'images/Casestudy-img-right.png' },
    { meta: 'Cloud Infrastructure', leftTitle: 'Built scalable cloud architecture', leftLight: ' enabling 99.9% uptime and global reach.', cardTag: 'Cloud & Reliability', cardTitle: 'Designed and deployed multi-region cloud infrastructure to support enterprise-grade performance and business continuity.', image: 'images/card-img-1.png' },
    { meta: 'Managed IT Services', leftTitle: 'Streamlined IT operations end-to-end', leftLight: ' and reduced downtime by 60%.', cardTag: 'Operational Efficiency', cardTitle: 'Delivered end-to-end managed services covering monitoring, support, and proactive maintenance across 12 global offices.', image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=900&h=640&fit=crop' }
  ];

  var cur = 0, total = SLIDES.length, busy = false;
  var csTrack = document.getElementById('csTrack');
  var leftEl  = document.getElementById('csLeft');
  var curEl   = document.getElementById('csCur');
  var totEl   = document.getElementById('csTot');

  totEl.textContent = String(total).padStart(2,'0');

  function arrowSVG(dir) {
    var d = dir === 'right' ? 'M9 18 15 12 9 6' : 'M15 18 9 12 15 6';
    return '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="' + d + '"/></svg>';
  }

  function slideHTML(s) {
    return '<div class="cs-slide"><img src="' + s.image + '" alt="' + s.cardTag + '"/><div class="cs-overlay"></div><div class="cs-card-body"><p class="cs-card-tag">' + s.cardTag + '</p><p class="cs-card-title">' + s.cardTitle + '</p><a href="#" class="btn-case"><span class="arr-white">' + arrowSVG('right') + '</span>View Case Study</a></div></div>';
  }

  function leftHTML(s) {
    return '<p class="cs-meta">' + s.meta + '</p><h3 class="cs-title">' + s.leftTitle + '<span class="light">' + s.leftLight + '</span></h3><a href="#" class="btn-all"><span class="arr-dark">' + arrowSVG('right') + '</span>View All Cases</a>';
  }

  function goTo(next, dir) {
    if (busy) return; busy = true;
    next = (next + total) % total;
    csTrack.style.transition = 'transform .45s cubic-bezier(.4,0,.2,1)';
    csTrack.style.transform  = 'translateX(' + (dir === 1 ? '-100%' : '100%') + ')';
    setTimeout(function () {
      cur = next;
      csTrack.style.transition = 'none';
      csTrack.style.transform  = 'translateX(0)';
      csTrack.innerHTML = slideHTML(SLIDES[cur]);
      leftEl.innerHTML  = leftHTML(SLIDES[cur]);
      curEl.textContent = String(cur + 1).padStart(2, '0');
      busy = false;
    }, 460);
  }

  function scaleWM() {
    var probe = document.createElement('span');
    probe.style.cssText = 'position:absolute;visibility:hidden;white-space:nowrap;font-weight:900;font-size:100px;letter-spacing:-1px;font-family:Sora,sans-serif;';
    probe.textContent = 'case studies';
    document.body.appendChild(probe);
    var tw = probe.getBoundingClientRect().width;
    document.body.removeChild(probe);
    var fs = Math.floor((window.innerWidth / tw) * 100);
    document.querySelectorAll('.cs-wm span').forEach(function (s) { s.style.fontSize = fs + 'px'; });
  }

  document.getElementById('csPrev').onclick = function () { goTo(cur - 1, -1); };
  document.getElementById('csNext').onclick = function () { goTo(cur + 1, 1); };

  csTrack.innerHTML = slideHTML(SLIDES[0]);
  leftEl.innerHTML  = leftHTML(SLIDES[0]);
  scaleWM();
  window.addEventListener('resize', scaleWM);

  /* ── FAQ Accordion ── */
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item   = btn.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(function (el) {
        el.classList.remove('open');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

})();
</script>

</body>
</html>
<?php include 'footer.php'; ?>
