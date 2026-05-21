<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include 'header.php'; ?>
    <style>
      /* @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"); */

      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      :root {
        --cyan: #1aabe3;
        --text-muted: #8a8fa8;
        --teal-light: #e0f7fa;
        --card-bg: #0a1545;
        --teal: #0ca79c;
        --dark: #1a1a2e;
        --text-dark: #1c1c1c;
        --text-mid: #3d3d3d;
        --text-light: #6b7280;
        --Content-Light-Primary: #000a2d;
        --watermark-color: rgba(0, 0, 0, 0.082);
        --white: #ffffff;
        --card-bg: #f4fffe;
        --card-border: #d6f5f3;
        --alliance-card-bg: rgba(255, 255, 255, 0.85);
        --alliance-card-border: rgba(255, 255, 255, 0.9);
        --gp-white: #ffffff;
        --gp-white-70: rgba(255, 255, 255, 0.7);
        --gp-white-50: rgba(255, 255, 255, 0.5);
        --gp-white-18: rgba(255, 255, 255, 0.18);
        --gp-white-10: rgba(255, 255, 255, 0.1);
        --gp-white-08: rgba(255, 255, 255, 0.08);
        --gp-accent: #4da8ff;
        --gp-card-bg: rgba(255, 255, 255, 0.82);
        --gp-card-border: rgba(200, 220, 240, 0.7);
        --gp-text-card-head: #0d1f3c;
        --gp-text-card-body: #4a5a72;
        --gp-icon-bg: rgba(200, 220, 245, 0.55);
        --gp-icon-stroke: #2a6ab0;
        --gp-btn-bg: rgba(255, 255, 255, 0.15);
        --gp-btn-border: rgba(255, 255, 255, 0.45);
        --gp-divider: rgba(255, 255, 255, 0.18);
        --gp-badge-border: rgba(255, 255, 255, 0.22);
      }

      html {
        overflow-x: hidden;
      }

      html,
      body {
        width: 100%;
        font-family: "Gilroy", sans-serif;
        background: var(--bg);
        color: var(--text-dark);
        min-height: 100vh;
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      /* =========================
   SECTION
========================= */

      .gpu_global-section_b0f5c4 {
        width: 100%;
        padding: 100px 80px;
        display: flex;
        justify-content: center;
      }
      /* =========================
   MAIN CONTAINER
========================= */

      .gpu_global-delivery-card_8b690b {
        position: relative;
        display: flex;
        align-items: flex-end;
        gap: 48px;
        width: 100%;
        max-width: 1240px;
        min-height: 331px;
        padding: 40px;
        border-radius: 20px;
        overflow: hidden;
        background:
          linear-gradient(0deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%),
          url("images/global_delivery.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        backdrop-filter: blur(7px);
      }
      /* =========================
   LEFT CARD
========================= */

      .gpu_global-info-card_c53052 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 310px;
        min-height: 251px;
        padding: 24px;
        flex-shrink: 0;
        border-radius: 20px;
        background: rgba(248, 250, 252, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(10px);
      }
      /* =========================
   LEFT CARD TITLE
========================= */

      .gpu_global-info-title_526af7 {
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        line-height: 1.2;
      }
      /* =========================
   LEFT CARD DESCRIPTION
========================= */

      .gpu_global-info-desc_330dbe {
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        line-height: 1.5;
        opacity: 0.95;
      }
      /* =========================
   STATS WRAPPER
========================= */

      .gpu_global-stats-wrapper_2a40ad {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        align-items: center;
      }
      /* =========================
   STAT ITEM
========================= */

      .gpu_global-stat-item_413005 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 14px;
        text-align: center;
      }
      /* =========================
   NUMBER
========================= */

      .gpu_global-stat-number_fbac1e {
        color: #fff;
        text-align: center;
        font-size: clamp(40px, 4vw, 52px);
        font-weight: 600;
        line-height: 1;
      }
      /* =========================
   LABEL
========================= */

      .gpu_global-stat-label_36c596 {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        line-height: 1.4;
        text-transform: capitalize;
        opacity: 0.95;
      }
      /* =========================
   LARGE TABLET
========================= */

      @media (max-width: 1100px) {
        .gpu_global-section_b0f5c4 {
          padding: 80px 32px;
        }
        .gpu_global-delivery-card_8b690b {
          flex-direction: column;
          align-items: flex-start;
          gap: 40px;
        }
        .gpu_global-info-card_c53052 {
          width: 100%;
          min-height: 220px;
        }
        .gpu_global-stats-wrapper_2a40ad {
          width: 100%;
          grid-template-columns: repeat(2, 1fr);
        }
      }
      /* =========================
   TABLET
========================= */

      @media (max-width: 768px) {
        .gpu_global-section_b0f5c4 {
          padding: 70px 20px;
        }
        .gpu_global-delivery-card_8b690b {
          padding: 28px;
          gap: 32px;
        }
        .gpu_global-info-card_c53052 {
          padding: 22px;
          border-radius: 18px;
        }
        .gpu_global-info-title_526af7 {
          font-size: 22px;
        }
        .gpu_global-info-desc_330dbe {
          font-size: 16px;
        }
        .gpu_global-stat-number_fbac1e {
          font-size: 42px;
        }
        .gpu_global-stat-label_36c596 {
          font-size: 15px;
        }
      }
      /* =========================
   MOBILE
========================= */

      @media (max-width: 576px) {
        .gpu_global-section_b0f5c4 {
          padding: 60px 16px;
        }
        .gpu_global-delivery-card_8b690b {
          padding: 24px 20px;
          border-radius: 18px;
        }
        .gpu_global-info-card_c53052 {
          width: 100%;
          min-height: auto;
          gap: 40px;
          padding: 20px;
        }
        .gpu_global-stats-wrapper_2a40ad {
          grid-template-columns: 1fr;
          gap: 28px;
        }
        .gpu_global-stat-item_413005 {
          align-items: flex-start;
          text-align: left;
        }
        .gpu_global-stat-number_fbac1e {
          font-size: 38px;
        }
        .gpu_global-stat-label_36c596 {
          font-size: 14px;
        }
      }

      .gpu_cu-section_3c5ef3 {
        padding: 3rem 2rem;
        display: flex;
        justify-content: center;
        background: #fff;
      }

      .gpu_cu-inner_54c0a4 {
        display: flex;
        gap: 4.5rem;
        max-width: 1100px;
        width: 100%;
        align-items: center;
      }
      /* ── Left decorative card ── */

      .gpu_cu-card_b030fe {
        /* flex: 0 0 300px;
            min-height: 480px;
            min-width: 381px; */
        flex: 0 0 300px;
        width: 100%;
        /* max-width: 551px; */
        min-height: 639px;
        min-width: 50%;
        border-radius: 20px;
        background: url("images/get-in-touch-card-image.png") no-repeat center
          center/cover;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        position: relative;
        overflow: hidden;
      }

      .gpu_cu-card-blob_83ebe7 {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 240px;
        height: 200px;
        border-radius: 50%;
        opacity: 0.7;
      }

      .gpu_cu-card-wave_ee1159 {
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        height: 220px;
        border-radius: 0 0 60% 60% / 0 0 40% 40%;
        opacity: 0.6;
      }

      .gpu_cu-card-label_88acec {
        position: relative;
        z-index: 1;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.65);
        letter-spacing: 0.04em;
        margin-bottom: 8px;
      }

      .gpu_cu-card-title_e45b6f {
        position: relative;
        z-index: 1;
        font-size: 22px;
        font-weight: 500;
        color: #fff;
        line-height: 1.3;
        margin-bottom: 10px;
      }

      .gpu_cu-card-desc_c9c950 {
        position: relative;
        z-index: 1;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.6;
      }
      /* ── Right form area ── */

      .gpu_cu-form-wrap_a2f415 {
        flex: 1;
      }

      .gpu_cu-form-wrap_a2f415 h2 {
        font-size: 26px;
        font-weight: 600;
        color: #111;
        margin-bottom: 6px;
      }

      .gpu_cu-form-wrap_a2f415 p {
        font-size: 14px;
        color: #666;
        margin-bottom: 24px;
      }

      .gpu_cu-row_b7fc9c {
        display: flex;
        gap: 14px;
        margin-bottom: 16px;
      }

      .gpu_cu-field_ee8c53 {
        display: flex;
        flex-direction: column;
        flex: 1;
      }

      .gpu_cu-field_ee8c53 label {
        font-size: 13px;
        color: #555;
        margin-bottom: 6px;
      }

      .gpu_cu-field_ee8c53 input,
      .gpu_cu-field_ee8c53 select,
      .gpu_cu-field_ee8c53 textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        font-size: 14px;
        color: #111;
        background: #fff;
        outline: none;
        transition: border-color 0.2s;
      }

      .gpu_cu-field_ee8c53 input:focus,
      .gpu_cu-field_ee8c53 select:focus,
      .gpu_cu-field_ee8c53 textarea:focus {
        border-color: #3a7cff;
      }

      .gpu_cu-field_ee8c53 textarea {
        resize: none;
        height: 90px;
      }
      /* ── Phone row ── */

      .gpu_cu-phone-row_36ca53 {
        display: flex;
      }

      .gpu_cu-flag_4f2b94 {
        width: 20px;
        height: 14px;
        object-fit: cover;
        border-radius: 2px;
      }

      .gpu_cu-phone-prefix_c93a27 {
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

      .gpu_cu-phone-prefix_c93a27 select {
        border: none;
        outline: none;
        background: transparent;
        font-size: 13px;
        color: #111;
        cursor: pointer;
        padding: 0;
      }

      .gpu_cu-phone-input_a5360b {
        flex: 1;
        padding: 10px 14px;
        border: 1px solid #d1d5db;
        border-radius: 0 10px 10px 0;
        font-size: 14px;
        color: #111;
        background: #fff;
        outline: none;
        transition: border-color 0.2s;
      }

      .gpu_cu-phone-input_a5360b:focus {
        border-color: #3a7cff;
      }
      /* ── Button ── */

      .gpu_cu-btn_196f6d {
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
        transition:
          background 0.18s,
          color 0.18s;
        margin-top: 8px;
      }

      .gpu_cu-btn_196f6d:hover {
        background: #1a1a1a;
        color: #fff;
      }

      .gpu_cu-btn-dot_3b5bc2 {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #3a7cff;
        flex-shrink: 0;
      }
      /* ── Responsive ── */

      @media (max-width: 680px) {
        .gpu_cu-inner_54c0a4 {
          flex-direction: column;
        }
        .gpu_cu-card_b030fe {
          flex: none;
          width: 100%;
          min-height: 220px;
        }
        .gpu_cu-row_b7fc9c {
          flex-direction: column;
          gap: 0;
          margin-bottom: 0;
        }
        .gpu_cu-row_b7fc9c .gpu_cu-field_ee8c53 {
          margin-bottom: 16px;
        }
      }
      /* ── Section shell ── */

      .gpu_wtc-section_39ccd8 {
        position: relative;
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 64px 24px 72px;
        box-sizing: border-box;
        /* margin-top: 50px; */
      }
      /* ── Watermark text layer (the repeating "why teceze") ── */

      .gpu_wtc-watermark_5f861e {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        height: auto;
        overflow: hidden;
        display: block;
      }

      .gpu_wtc-watermark_5f861e svg {
        position: absolute;
        top: 55%;
        left: 50%;
        width: 100%;
        height: auto;
        min-width: 100%;
        transform: translate(-50%, -50%);
        display: block;
      }
      /* ── Foreground content ── */

      .gpu_wtc-content_6b446e {
        position: relative;
        z-index: 1;
        /* max-width: 600px; */
        width: 100%;
        text-align: center;
      }
      /* ── Eyebrow ── */

      .gpu_wtc-eyebrow_b2cfc1 {
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 0.08em;
        color: #6b7280;
        margin-bottom: 18px;
        text-transform: none;
      }
      /* ── Headline ── */

      .gpu_wtc-headline_d4b451 {
        /* font-size: clamp(22px, 3.8vw, 36px); */
        /* font-weight: 700; */
        /* line-height: 1.35; */
        /* letter-spacing: -0.02em; */
        color: #0a0f1e;
        margin-bottom: 36px;
        text-align: center;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }
      /* ── Badges row ── */

      .gpu_wtc-badges_1b3ccd {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
      }

      .gpu_wtc-badge_55ca1b {
        display: inline-flex;
        align-items: center;
        background: rgba(0, 0, 0, 0.08);
        gap: 7px;
        padding: 7px 16px;
        border-radius: 999px;
        border: 1px solid #d1d5db;
        /* background: rgba(255, 255, 255, 0.7); */
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        font-size: 12.5px;
        font-weight: 500;
        color: #374151;
        white-space: nowrap;
        transition:
          border-color 0.2s,
          background 0.2s;
      }

      .gpu_wtc-badge_55ca1b:hover {
        border-color: #9ca3af;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.9);
      }

      .gpu_wtc-badge_55ca1b svg {
        flex-shrink: 0;
        width: 16px;
        height: 16px;
      }
      /* ── Badge icon: dark fill to match Figma ── */

      .gpu_wtc-badge-icon_f37eb7 path {
        fill: #1e293b;
      }
      /* ── Responsive ── */

      @media (max-width: 600px) {
        .gpu_wtc-section_39ccd8 {
          padding: 48px 20px 0;
          min-height: auto;
          margin-top: 25px;
        }
        .gpu_wtc-headline_d4b451 {
          font-size: 22px;
        }
        .gpu_wtc-badges_1b3ccd {
          gap: 8px;
        }
        .gpu_wtc-badge_55ca1b {
          font-size: 11.5px;
          padding: 6px 13px;
        }
      }

      .gpu_tcp-section_aabc7a {
        /* position: relative;
        overflow: hidden;
        color: #fff;
        background-color: #050e20;
        background-image:
          linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px); */
        width: 100%;
        /* min-height: 100vh; */
        position: relative;
        overflow: clip;
        /* clips ALL overflow without creating a scroll context */
        background-color: #000a2d;
        background-image:
          linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
        background-size: 80px 80px;
      }
      /* ── GRID ─────────── */

      .gpu_ex-grid-bg_653f98 {
        /* position: fixed; */
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background-image:
          linear-gradient(rgba(6, 182, 212, 0.055) 1px, transparent 1px),
          linear-gradient(90deg, rgba(6, 182, 212, 0.055) 1px, transparent 1px);
        background-size: 52px 52px;
      }
      /* ── GLOW BLOBS ── */

      .gpu_ex-glow-left_3205ee {
        position: fixed;
        top: -180px;
        left: -200px;
        width: 620px;
        height: 700px;
        pointer-events: none;
        z-index: 1;
        filter: blur(90px);
        opacity: 0.55;
        border-radius: 50%;
        background: radial-gradient(
          ellipse at 40% 40%,
          #00cabd 0%,
          #0037a6 55%,
          transparent 80%
        );
      }

      .gpu_ex-glow-right_3ad7be {
        position: fixed;
        top: 50%;
        right: -280px;
        transform: translateY(-42%);
        width: 580px;
        height: 700px;
        pointer-events: none;
        z-index: 1;
        filter: blur(90px);
        opacity: 0.5;
        border-radius: 50%;
        background: radial-gradient(
          ellipse at 60% 50%,
          #00cabd 0%,
          #0037a6 55%,
          transparent 80%
        );
      }
      /* ── PAGE CONTENT ─────────────────────────── */

      .gpu_ex-page-wrapper_90cb2e {
        position: relative;
        z-index: 2;
        /* max-width: 740px; */
        margin: 0 auto;
        padding: 52px 32px 72px;
      }
      /* ── EYEBROW ──────────────────────────────── */

      .gpu_eyebrow_72e04b {
        text-align: center;
        font-size: 10.5px;
        font-weight: 400;
        letter-spacing: 0.09em;
        color: rgba(255, 255, 255, 0.45);
        margin-bottom: 20px;
      }
      /* ── HEADLINE ─────────────────────────────── */

      .gpu_headline_ef9830 {
        text-align: center;
        font-size: clamp(20px, 3.6vw, 28px);
        font-weight: 700;
        line-height: 1.38;
        letter-spacing: -0.01em;
        color: #fff;
        margin-bottom: 28px;
      }
      /* ── BADGES ───────────────────────────────── */

      .gpu_badges_96fb30 {
        display: flex;
        justify-content: center;
        gap: 8px;
        flex-wrap: wrap;
        margin-bottom: 50px;
      }

      .gpu_badge_dcdd12 {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 13px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.11);
        font-size: 11.5px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.88);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
      }
      /* ── STEPS GRID ───────────────────────────── */

      .gpu_steps-grid_4fee84 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
      }

      .gpu_step-cell_2015c1 {
        position: relative;
        padding-top: 58px;
      }

      .gpu_step-number_8741d5 {
        position: absolute;
        top: 0;
        left: 14px;
        z-index: 0;
        pointer-events: none;
      }
      /* ── GLASS CARD — fully transparent ────────── */

      .gpu_step-card_88c1d8 {
        position: relative;
        z-index: 1;
        background-color: rgba(248, 250, 252, 0.1);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 14px;
        padding: 20px 18px 22px;
        /* min-width: 596px; */
        width: 100%;
        min-width: 0;
        max-width: 100%;
        -webkit-backdrop-filter: blur(0px);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.07);
      }
      /* icon circle */

      .gpu_icon-wrap_d3ab58 {
        min-width: 47.997px;
        min-height: 47.997px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        /* background: rgba(6, 182, 212, 0.12); */
        border: 1px solid rgba(6, 182, 212, 0.22);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 13px;
      }

      .gpu_step-title_40f63c {
        font-size: 14.5px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 7px;
        letter-spacing: -0.01em;
      }

      .gpu_step-desc_12a5a1 {
        color: #fff;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        /* font-size: 12px; */
        /* font-weight: 400; */
        /* line-height: 1.62; */
        /* color: rgba(255, 255, 255, 0.52); */
      }

      @media (max-width: 540px) {
        .gpu_steps-grid_4fee84 {
          grid-template-columns: 1fr;
        }
        .gpu_ex-page-wrapper_90cb2e {
          padding: 36px 18px 56px;
        }
        .gpu_step-card_88c1d8 {
          min-width: 56px;
        }
      }
      /* Solutions wrapper */

      .gpu_solution-page_8b4fc5 {
        position: relative;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        overflow: hidden;
      }
      /* Solutions wrapper */
      /* ── PAGE WRAPPER ── */

      .gpu_alliance-page_ed7e23 {
        position: relative;
        width: 100%;
        background: #dfeff9;
        max-width: 1440px;
        margin: 0 auto;
        overflow: hidden;
      }
      /* ── BACKGROUND WATERMARK TEXT ── */

      .gpu_watermark_1806b2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
      }

      .gpu_watermark_1806b2 svg {
        width: 100%;
        height: auto;
        display: block;
        /* Preserve aspect ratio but cover the full area */
        object-fit: cover;
      }
      /* ── HERO SECTION ── */

      .gpu_alliance-hero_1a4679 {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        min-height: 320px;
        padding: 80px 64px 60px 64px;
        align-items: center;
      }

      .gpu_alliance-hero-left_a3159e {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding-top: 20px;
      }

      .gpu_alliance-hero-label_b5c79c {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-light);
        line-height: 1.5;
        letter-spacing: 0.01em;
        max-width: 180px;
      }

      .gpu_alliance-hero-right_0d9b89 {
        display: flex;
        align-items: center;
      }

      .gpu_alliance-hero-headline_397e4e {
        font-size: 32px;
        font-weight: 400;
        color: var(--navy);
        line-height: normal;
        font-style: normal;
        letter-spacing: -0.01em;
        max-width: 540px;
      }

      .gpu_alliance-hero-headline_397e4e span {
        color: var(--navy);
      }
      /* ── CARDS SECTION ── */

      .gpu_alliance-cards-section_d47bb9 {
        position: relative;
        z-index: 1;
        padding: 0 64px 80px 64px;
        display: grid;
        grid-template-columns: 1fr 1.15fr 1fr;
        gap: 24px;
        align-items: stretch;
      }
      /* ── LEFT COLUMN ── */

      .gpu_col-left_b7d8f2 {
        display: flex;
        flex-direction: column;
        gap: 0;
        position: relative;
      }

      .gpu_alliance-card-plain_25fb65 {
        background: transparent;
        padding: 0;
      }

      .gpu_alliance-card-plain_25fb65 .gpu_alliance-card-title_ccb543 {
        font-size: 15px;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 10px;
        line-height: 1.3;
      }

      .gpu_alliance-card-plain_25fb65 .gpu_alliance-card-body_7acde8 {
        font-size: 12.5px;
        font-weight: 400;
        color: var(--text-light);
        line-height: 1.65;
        max-width: 220px;
      }
      /* chart bg watermark in left column */

      .gpu_col-left-inner_180d21 {
        display: flex;
        flex-direction: column;
        gap: 0;
        height: 100%;
      }

      .gpu_alliance-card-plain-wrapper_e70122 {
        padding-top: 8px;
      }

      .gpu_chart-bg_15bf39 {
        position: absolute;
        bottom: -5px;
        right: -1px;
        opacity: 1;
        pointer-events: none;
      }
      /* ── MIDDLE COLUMN ── */

      .gpu_col-middle_03ab38 {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      .gpu_alliance-card-white_e025d3 {
        background: var(--alliance-card-bg);
        border: 1px solid var(--alliance-card-border);
        border-radius: 16px;
        padding: 28px 28px;
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 10, 45, 0.06);
      }

      .gpu_alliance-card-featured_686e2a {
        position: relative;
      }

      .gpu_dot-teal_50f8a2 {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--teal);
        margin-bottom: 14px;
      }

      .gpu_alliance-card-featured_686e2a .gpu_alliance-card-body_7acde8 {
        font-size: 13px;
        font-weight: 400;
        color: var(--text-light);
        line-height: 1.7;
      }

      .gpu_alliance-card-featured_686e2a .gpu_alliance-card-body_7acde8 strong {
        font-weight: 700;
        color: var(--navy);
      }

      .gpu_alliance-card-global_12c44c .gpu_icon-wrap_d3ab58 {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
      }

      .gpu_alliance-card-global_12c44c .gpu_alliance-card-title_ccb543 {
        font-size: 16px;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 8px;
        line-height: 1.3;
      }

      .gpu_alliance-card-global_12c44c .gpu_alliance-card-body_7acde8 {
        font-size: 12.5px;
        font-weight: 400;
        color: var(--text-light);
        line-height: 1.65;
      }
      /* ── RIGHT COLUMN ── */

      .gpu_col-right_841b59 {
        display: flex;
        flex-direction: column;
        gap: 0;
        position: relative;
      }

      .gpu_alliance-card-plain-right_6a69a7 {
        background: transparent;
        padding-top: 8px;
      }

      .gpu_alliance-card-plain-right_6a69a7 .gpu_alliance-card-title_ccb543 {
        font-size: 15px;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 10px;
        line-height: 1.3;
      }

      .gpu_alliance-card-plain-right_6a69a7 .gpu_alliance-card-body_7acde8 {
        font-size: 12.5px;
        font-weight: 400;
        color: var(--text-light);
        line-height: 1.65;
        max-width: 220px;
      }

      .gpu_shield-bg_4ec780 {
        position: absolute;
        bottom: -5px;
        right: -1px;
        opacity: 1;
        pointer-events: none;
      }
      /* ── RESPONSIVE ── */

      @media (max-width: 1100px) {
        .gpu_alliance-hero_1a4679 {
          padding: 60px 40px 40px 40px;
        }
        .gpu_alliance-cards-section_d47bb9 {
          padding: 0 40px 60px 40px;
          gap: 20px;
        }
        .gpu_alliance-hero-headline_397e4e {
          font-size: 30px;
        }
        .gpu_step-card_88c1d8 {
          min-width: 296px;
        }
      }

      @media (max-width: 860px) {
        .gpu_step-card_88c1d8 {
          min-width: 196px;
        }
        .gpu_alliance-hero_1a4679 {
          grid-template-columns: 1fr;
          padding: 48px 32px 32px 32px;
          gap: 24px;
        }
        .gpu_alliance-hero-headline_397e4e {
          font-size: 26px;
          max-width: 100%;
        }
        .gpu_alliance-hero-label_b5c79c {
          max-width: 100%;
        }
        .gpu_alliance-cards-section_d47bb9 {
          grid-template-columns: 1fr;
          padding: 0 32px 48px 32px;
          gap: 32px;
        }
        .gpu_col-left_b7d8f2,
        .gpu_col-right_841b59 {
          min-height: auto;
        }
        .gpu_chart-bg_15bf39,
        .gpu_shield-bg_4ec780 {
          display: none;
        }
      }

      @media (max-width: 560px) {
        .gpu_alliance-hero_1a4679 {
          padding: 36px 20px 24px 20px;
        }
        .gpu_alliance-hero-headline_397e4e {
          font-size: 22px;
        }
        .gpu_alliance-cards-section_d47bb9 {
          padding: 0 20px 36px 20px;
        }
      }
      /* ══════════════════════════════════════════
     OUTER WRAPPER
  ══════════════════════════════════════════ */

      .gpu_gp-wrap_995883 {
        width: 100%;
        background: #dfeff9;
      }
      /* ══════════════════════════════════════════
     HERO  — bg image section
  ══════════════════════════════════════════ */

      .gpu_gp-hero_796d86 {
        position: relative;
        width: 100%;
        /* min-height: 420px; */
        overflow: hidden;
        /* background image placeholder — replace src as needed */
        background-image: url("/images/Service-Hero-Background.png");
        background-size: cover;
        /* background-position: center center; */
        background-repeat: no-repeat;
        padding: 13% 6% 0;
        display: flex;
        flex-direction: column;
        /* extra bottom space so cards can overlap up into the hero */
        padding-bottom: 110px;
        overflow: visible;
      }
      /* Dark overlay so text stays legible over the 3-D city image */

      .gpu_gp-hero_796d86::before {
        content: "";
        position: absolute;
        inset: 0;
        /* background: linear-gradient( 100deg, rgba(5, 20, 65, 0.68) 0%, rgba(5, 20, 65, 0.45) 50%, rgba(5, 20, 65, 0.15) 100%); */
        pointer-events: none;
        z-index: 0;
        /* clip overlay to hero bounds only, not the card overlap zone */
        border-radius: 0;
      }
      /* clip the bg image itself but allow children to overflow */

      .gpu_gp-wrap_995883 {
        overflow-x: hidden;
      }
      /* ── Breadcrumb ── */

      .gpu_gp-hero__crumb_f77e06 {
        position: relative;
        z-index: 1;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--gp-white-70);
        margin-bottom: 22px;
      }
      /* ── Divider under breadcrumb ── */

      .gpu_gp-hero__crumb-line_cfca73 {
        position: relative;
        z-index: 1;
        height: 1px;
        background: var(--gp-divider);
        margin-bottom: 28px;
      }
      /* ── Hero content ── */

      .gpu_gp-hero__content_cab1da {
        position: relative;
        z-index: 1;
        /* max-width: 100; */
        flex: 1;
        padding-bottom: 36px;
      }

      .gpu_gp-hero__title_8cb750 {
        /* font-size: clamp(2rem, 4vw, 3.2rem); */
        /* font-weight: 800; */
        color: var(--gp-white);
        /* line-height: 1.12; */
        /* letter-spacing: -0.03em; */
        margin-bottom: 20px;

        font-size: 64px;
        font-style: normal;
        font-weight: 400;
        line-height: 70px;
      }

      .gpu_gp-hero__body_7b9957 {
        font-size: 14px;
        font-weight: 400;
        color: var(--gp-white-70);
        line-height: 1.7;
        max-width: 460px;
        margin-bottom: 30px;
      }
      /* ── CTA Button ── */

      .gpu_gp-hero__btn_a42a63 {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 22px;
        background: var(--gp-btn-bg);
        border: 1px solid var(--gp-btn-border);
        border-radius: 50px;
        color: var(--gp-white);
        font-size: 13.5px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        backdrop-filter: blur(8px);
        transition:
          background 0.25s,
          border-color 0.25s,
          transform 0.22s;
      }

      .gpu_gp-hero__btn_a42a63:hover {
        background: rgba(255, 255, 255, 0.22);
        border-color: rgba(255, 255, 255, 0.65);
        transform: translateY(-2px);
      }

      .gpu_gp-hero__btn-icon_ed7e46 {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.45);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .gpu_gp-hero__btn-icon_ed7e46 svg {
        width: 13px;
        height: 13px;
        stroke: var(--gp-white);
        fill: none;
        stroke-width: 2.2;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      /* ══════════════════════════════════════════
     TRUST STRIP
  ══════════════════════════════════════════ */

      .gpu_gp-trust_72e26d {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0;
        background: rgba(5, 20, 65, 0.55);
        backdrop-filter: blur(3px);
        border-top: 1px solid var(--gp-divider);
        padding: 16px 6%;
        flex-wrap: wrap;
        margin-left: -7%;
        margin-right: -7%;
      }

      .gpu_gp-trust__item_a3c6c9 {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 32px;
        color: var(--white);
        white-space: nowrap;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: -0.15px;
      }

      .gpu_gp-trust__item_a3c6c9:not(:last-child) {
        border-right: 1px solid var(--gp-white-18);
      }

      .gpu_gp-trust__item_a3c6c9 svg {
        width: 16px;
        height: 16px;
        stroke: var(--gp-accent);
        fill: none;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        flex-shrink: 0;
      }
      /* ══════════════════════════════════════════
     CARDS ROW — overlaps the hero
  ══════════════════════════════════════════ */

      .gpu_gp-cards_de959b {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        background: transparent;
        position: relative;
        z-index: 10;
        /* pull up over the hero's bottom padding */
        margin-top: -90px;
        padding: 0 6% 60px;
      }
      /* ── Individual card ── */

      .gpu_gp-card_71bd11 {
        background: rgba(255, 255, 255, 0.88);
        border: 1px solid rgba(210, 228, 248, 0.8);
        border-radius: 16px;
        padding: 32px 28px 36px;
        display: flex;
        flex-direction: column;
        gap: 0;
        backdrop-filter: blur(16px);
        box-shadow:
          0 8px 32px rgba(10, 40, 100, 0.14),
          0 1px 4px rgba(10, 40, 100, 0.06);
        transition:
          transform 0.25s ease,
          box-shadow 0.25s ease,
          background 0.25s;
      }

      .gpu_gp-card_71bd11:hover {
        background: rgba(255, 255, 255, 0.97);
        transform: translateY(-4px);
        box-shadow:
          0 16px 48px rgba(10, 40, 100, 0.18),
          0 2px 8px rgba(10, 40, 100, 0.08);
      }
      /* ── Card icon circle ── */

      .gpu_gp-card__icon_f911e0 {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: var(--gp-icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        flex-shrink: 0;
        transition: background 0.25s;
      }

      .gpu_gp-card_71bd11:hover .gpu_gp-card__icon_f911e0 {
        background: rgba(180, 210, 245, 0.75);
      }

      .gpu_gp-card__icon_f911e0 svg {
        width: 22px;
        height: 22px;
        stroke: var(--gp-icon-stroke);
        fill: none;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      /* ── Card title ── */

      .gpu_gp-card__title_ba26c1 {
        font-size: 15.5px;
        font-weight: 700;
        color: var(--gp-text-card-head);
        line-height: 1.3;
        letter-spacing: -0.01em;
        margin-bottom: 10px;
      }
      /* ── Card body ── */

      .gpu_gp-card__body_9d94e7 {
        font-size: 13px;
        font-weight: 400;
        color: var(--gp-text-card-body);
        line-height: 1.65;
      }
      /* ══════════════════════════════════════════
     TABLET  ≤ 860px
  ══════════════════════════════════════════ */

      @media (max-width: 860px) {
        .gpu_gp-hero_796d86 {
          padding: 44px 5% 130px;
          min-height: 360px;
        }
        .gpu_gp-hero__title_8cb750 {
          font-size: clamp(1.8rem, 5vw, 2.6rem);
        }
        .gpu_gp-trust_72e26d {
          gap: 0;
          padding: 14px 5%;
          margin-left: -5%;
          margin-right: -5%;
        }
        .gpu_gp-trust__item_a3c6c9 {
          padding: 6px 18px;
          font-size: 12px;
        }
        .gpu_gp-cards_de959b {
          grid-template-columns: 1fr 1fr;
          margin-top: -110px;
          padding: 0 5% 50px;
          gap: 14px;
        }
        .gpu_gp-card_71bd11:nth-child(3) {
          grid-column: 1 / -1;
        }
      }
      /* ══════════════════════════════════════════
     MOBILE  ≤ 540px
  ══════════════════════════════════════════ */

      @media (max-width: 540px) {
        .gpu_gp-hero_796d86 {
          padding: 36px 4% 160px;
          min-height: 300px;
        }
        .gpu_gp-hero__title_8cb750 {
          font-size: 1.7rem;
        }
        .gpu_gp-hero__body_7b9957 {
          font-size: 13px;
        }
        .gpu_gp-trust_72e26d {
          flex-direction: column;
          align-items: flex-start;
          padding: 12px 4%;
          gap: 2px;
          margin-left: -4%;
          margin-right: -4%;
        }
        .gpu_gp-trust__item_a3c6c9 {
          padding: 8px 0;
          border-right: none !important;
          border-bottom: 1px solid var(--gp-white-10);
          width: 100%;
        }
        .gpu_gp-trust__item_a3c6c9:last-child {
          border-bottom: none;
        }
        .gpu_gp-cards_de959b {
          grid-template-columns: 1fr;
          margin-top: -130px;
          padding: 0 4% 44px;
          gap: 12px;
        }
        .gpu_gp-card_71bd11:nth-child(3) {
          grid-column: 1;
        }
      }
      /* ════ PAGE WRAPPER ════ */

      .gpu_page-wrapper_c71d92 {
        width: 100%;
        min-height: 100vh;
        position: relative;
        overflow: clip;
        /* clips ALL overflow without creating a scroll context */
        background-color: #000a2d;
        background-image:
          linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
        background-size: 80px 80px;
      }
      /* ════ BACKGROUND GLOWS ════ */

      .gpu_bg-glow_e7d3b8 {
        position: absolute;
        pointer-events: none;
        z-index: 0;
        border-radius: 50%;
        filter: blur(120px);
        opacity: 0.55;
      }
      /* Glow 1 – top-left */

      .gpu_bg-glow-topleft_7e5e8b {
        width: 700px;
        height: 700px;
        top: -250px;
        left: -250px;
        background: radial-gradient(
          ellipse at center,
          #00cabd 0%,
          #0037a6 50%,
          transparent 75%
        );
      }
      /* Glow 2 – right-center */

      .gpu_bg-glow-right_cc2f95 {
        width: 750px;
        height: 900px;
        top: 80px;
        right: -350px;
        background: radial-gradient(
          ellipse at center,
          #00cabd 0%,
          #0037a6 45%,
          transparent 72%
        );
      }
      /* Glow 3 – bottom-left */

      .gpu_bg-glow-bottomleft_ebbece {
        width: 700px;
        height: 700px;
        bottom: -250px;
        left: -250px;
        background: radial-gradient(
          ellipse at center,
          #00cabd 0%,
          #0037a6 50%,
          transparent 75%
        );
      }
      /* ════ FLUID CONTENT CONTAINER ════ */

      .gpu_content_9a0364 {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 clamp(24px, 6.94%, 100px);
      }
      /* ════ SECTION HEADER ════ */

      .gpu_section-header_c535eb {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 20px;
        padding-top: clamp(48px, 6.94vw, 100px);
        padding-bottom: clamp(32px, 4vw, 60px);
      }

      .gpu_section-label_322f96 {
        color: var(--white);
        font-size: clamp(14px, 1.25vw, 18px);
        font-weight: 600;
        text-transform: capitalize;
        line-height: 1.4;
        flex-shrink: 0;
        min-width: 100px;
        max-width: 137px;
      }

      .gpu_section-tagline_8dcb10 {
        color: var(--white);
        font-size: clamp(18px, 2.22vw, 32px);
        font-weight: 400;
        line-height: 1.35;
        max-width: 670px;
      }

      .gpu_section-tagline_8dcb10 .gpu_muted_0a4e1e {
        color: #999dab;
      }
      /* ════ PARTNER CARDS ROW ════ */

      .gpu_partner-card-row_343d58 {
        display: flex;
        align-items: stretch;
        gap: clamp(12px, 1.67vw, 24px);
        width: 100%;
      }

      .gpu_card-oem_29748a {
        flex: 0 0 40%;
        min-width: 0;
        border-radius: clamp(16px, 2vw, 30px);
        background-color: rgba(248, 250, 252, 0.1);
        display: flex;
        flex-direction: column;
        padding: clamp(16px, 1.67vw, 24px);
        gap: clamp(16px, 1.67vw, 24px);
      }

      .gpu_card-oem-image_1093d2 {
        width: 100%;
        aspect-ratio: 2 / 1;
        border-radius: clamp(12px, 1.4vw, 20px);
        overflow: hidden;
        flex-shrink: 0;
        background: linear-gradient(
          135deg,
          #0a1a5c 0%,
          #1e90ff 40%,
          #00d4ff 100%
        );
      }

      .gpu_card-oem-image_1093d2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      .gpu_cards-col-right_7fac1a {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: clamp(12px, 1.67vw, 24px);
      }

      .gpu_card-panel_d12e42 {
        flex: 1;
        border-radius: clamp(16px, 2vw, 30px);
        background-color: rgba(248, 250, 252, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: clamp(16px, 1.67vw, 24px);
        gap: 12px;
      }
      /* ════ CARD INTERNALS ════ */

      .gpu_card-header_d9d7e2 {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
      }

      .gpu_icon-box_2926ba {
        width: clamp(40px, 4vw, 58px);
        height: clamp(40px, 4vw, 58px);
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .gpu_card-title_aad27e {
        font-size: clamp(15px, 1.67vw, 24px);
        font-weight: 600;
        line-height: 1.3;
      }

      .gpu_badges_96fb30 {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: auto;
        padding-top: 8px;
      }

      .gpu_badge_dcdd12 {
        height: 34px;
        padding: 0 14px;
        border-radius: 50px;
        background-color: rgba(255, 255, 255, 0.12);
        border: 0.9px solid rgba(255, 255, 255, 0.18);
        display: flex;
        align-items: center;
        font-size: clamp(10px, 0.83vw, 12px);
        font-weight: 500;
        white-space: nowrap;
      }
      /* ════ ALLIANCE MODELS ════ */

      .gpu_section-header-alliance_d2e8a2 {
        margin-top: clamp(48px, 5.5vw, 80px);
      }

      .gpu_alliance-row_e8533c {
        display: flex;
        align-items: stretch;
        gap: clamp(12px, 1.39vw, 20px);
        width: 100%;
        padding-bottom: clamp(48px, 6.94vw, 100px);
      }

      .gpu_alliance-card-tall_e59294 {
        flex: 0 0 31.5%;
        min-width: 0;
        border-radius: clamp(12px, 1.4vw, 20px);
        background-color: rgba(248, 250, 252, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: clamp(16px, 1.67vw, 24px);
        gap: 16px;
      }

      .gpu_alliance-card-image_025c5c {
        width: 100%;
        aspect-ratio: 2 / 1;
        border-radius: clamp(12px, 1.4vw, 20px);
        overflow: hidden;
        background: linear-gradient(
          135deg,
          #0a1a5c 0%,
          #1e90ff 40%,
          #00d4ff 100%
        );
        margin-top: auto;
      }

      .gpu_alliance-card-image_025c5c img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      .gpu_alliance-col-mid_623899 {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: clamp(12px, 1.39vw, 20px);
      }

      .gpu_alliance-card-sm_6c9137 {
        flex: 1;
        border-radius: clamp(12px, 1.4vw, 20px);
        background-color: rgba(248, 250, 252, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: clamp(16px, 1.67vw, 24px);
        gap: 16px;
      }

      .gpu_alliance-card-gradient_4016f3 {
        flex: 0 0 31.5%;
        min-width: 0;
        border-radius: clamp(10px, 0.83vw, 12px);
        background:
          linear-gradient(
            180deg,
            rgba(0, 35, 126, 0.5) 0%,
            rgba(0, 35, 126, 0) 51.38%,
            rgba(0, 35, 126, 0.5) 100%
          ),
          linear-gradient(
            134deg,
            rgba(37, 89, 202, 0.6) 0%,
            rgba(58, 184, 241, 0.6) 52.43%,
            rgba(46, 222, 219, 0.6) 100%
          ),
          url(images/Container11.png) lightgray 50% / cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: clamp(16px, 1.67vw, 24px);
        position: relative;
        overflow: hidden;
      }

      .gpu_alliance-card-gradient_4016f3::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(
          ellipse 120% 60% at 50% 50%,
          rgba(255, 255, 255, 0.05) 0%,
          transparent 70%
        );
        pointer-events: none;
      }

      .gpu_alliance-title_52e981 {
        font-size: clamp(16px, 1.67vw, 24px);
        font-weight: 600;
        line-height: 1.3;
        color: var(--white);
      }

      .gpu_alliance-desc_1ac811 {
        font-size: clamp(13px, 1.25vw, 18px);
        font-weight: 400;
        color: rgba(255, 255, 255, 0.75);
        line-height: 1.55;
      }
      /* ════ RESPONSIVE BREAKPOINTS ════ */

      @media (max-width: 900px) {
        .gpu_section-header_c535eb {
          flex-direction: column;
          gap: 12px;
        }
        .gpu_section-label_322f96 {
          max-width: 100%;
        }
        .gpu_section-tagline_8dcb10 {
          max-width: 100%;
        }
        .gpu_partner-card-row_343d58 {
          flex-direction: column;
        }
        .gpu_card-oem_29748a {
          flex: none;
          width: 100%;
        }
        .gpu_cards-col-right_7fac1a {
          flex-direction: row;
          flex-wrap: wrap;
        }
        .gpu_card-panel_d12e42 {
          flex: 1 1 calc(50% - 12px);
          min-width: 220px;
        }
        .gpu_alliance-row_e8533c {
          flex-wrap: wrap;
        }
        .gpu_alliance-card-tall_e59294,
        .gpu_alliance-card-gradient_4016f3 {
          flex: 1 1 calc(50% - 10px);
        }
        .gpu_alliance-col-mid_623899 {
          flex: 1 1 100%;
          flex-direction: row;
        }
        .gpu_alliance-card-sm_6c9137 {
          flex: 1 1 calc(50% - 10px);
        }
      }

      @media (max-width: 560px) {
        .gpu_cards-col-right_7fac1a {
          flex-direction: column;
        }
        .gpu_card-panel_d12e42 {
          flex: none;
          width: 100%;
        }
        .gpu_alliance-row_e8533c {
          flex-direction: column;
        }
        .gpu_alliance-card-tall_e59294,
        .gpu_alliance-card-gradient_4016f3 {
          flex: none;
          width: 100%;
        }
        .gpu_alliance-col-mid_623899 {
          flex-direction: column;
          width: 100%;
        }
        .gpu_alliance-card-sm_6c9137 {
          flex: none;
          width: 100%;
        }
      }
      /* ====================================================================== */
      /* =============================
   RESET & BASE
============================= */

      img {
        display: block;
        max-width: 100%;
      }
      /* =============================
   HERO
============================= */

      .gpu_hero_f04af6 {
        position: relative;
        width: 100%;
        border-radius: 16px;
        overflow: hidden;
        margin: 20px auto;
        max-width: 1200px;
        /* min-height: 160px; */
      }

      .gpu_hero-bg_be6bb7 {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 16px;
      }

      .gpu_hero-content_355579 {
        position: relative;
        z-index: 2;
        padding: 36px 40px 40px;
        max-width: 520px;
      }

      .gpu_hero-text_bbcef5 {
        font-size: 16px;
        font-weight: 500;
        line-height: 1.65;
        color: var(--white);
        margin-bottom: 28px;
        letter-spacing: -0.01em;
      }

      .gpu_hero-btn_7bd1ba {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.35);
        border-radius: 24px;
        padding: 10px 18px;
        color: var(--white);
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        backdrop-filter: blur(6px);
        transition:
          background 0.25s ease,
          border-color 0.25s ease;
        letter-spacing: 0.01em;
      }

      .gpu_hero-btn_7bd1ba:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.6);
      }

      .gpu_hero-btn-dot_e7fa40 {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: linear-gradient(135deg, #18a8b6, #255cb1 60%, #087f79);
        /* box-shadow:
          inset 0 1px 2px rgba(255, 255, 255, 0.3),
          0 4px 12px rgba(12, 167, 156, 0.35); */
        flex-shrink: 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .gpu_hero-btn-arrow_9738d4 {
        width: 16px;
        height: 16px;
      }
      /* =============================
   SHARED CREDIBILITY SECTION
============================= */

      .gpu_credibility-section_978473 {
        position: relative;
        overflow: hidden;
        max-width: 1440px;
        margin: 0 auto;
        padding: 64px 40px;
        /* min-height: 600px; */
      }

      .gpu_credibility-section_978473,
      .gpu_solutions-section_87ec87 {
        position: relative;
        overflow: hidden;
        max-width: 1440px;
        margin: 0 auto;
        padding: 64px 40px;
      }

      .gpu_credibility-watermark_430f36 {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 0;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
      }

      .gpu_watermark_1806b2 svg {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      .gpu_credibility-watermark_430f36 span {
        display: block;
        font-size: clamp(80px, 28vw, 180px);
        font-weight: 900;
        line-height: 1;
        color: var(--watermark-color);
        letter-spacing: 0.07em;
        white-space: nowrap;
        user-select: none;
        text-align: center;
      }

      .gpu_credibility-inner_e36caf {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 0;
        margin-top: 15%;
      }

      .gpu_cred-label_dd0988 {
        min-width: 160px;
        flex-shrink: 0;
      }

      .gpu_cred-label-title_7fa438 {
        color: var(--Content-Light-Primary, #000a2d);
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-transform: capitalize;
        width: 200px;
        flex-shrink: 0;
      }

      .gpu_cred-label-sub_1961a6 {
        font-size: 11px;
        font-weight: 400;
        color: var(--text-light);
        line-height: 1.4;
      }

      .gpu_cred-copy_ec8c2c p {
        color: var(--Content-Light-Primary, #000a2d);
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        max-width: 680px;
        flex-shrink: 0;
      }
      /* =============================
   LOGOS ROW
============================= */

      .gpu_logos-row_81f852 {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 156px;
        flex-wrap: wrap;
        padding: 8px 0;
        margin-top: 7%;
      }

      .gpu_partner-logo_58ecc3 {
        height: 36px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%) brightness(0.55);
        transition:
          filter 0.3s ease,
          transform 0.3s ease;
        flex-shrink: 0;
      }
      .gpu_hexaware-logo_4c2be8 {
        height: 56px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%) brightness(0.55);
        transition:
          filter 0.3s ease,
          transform 0.3s ease;
        flex-shrink: 0;
      }
      .gpu_gp-logo_46f2f8 {
        height: 56px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%) brightness(0.55);
        transition:
          filter 0.3s ease,
          transform 0.3s ease;
        flex-shrink: 0;
      }

      .gpu_partner-logo_58ecc3:hover {
        filter: grayscale(0%) brightness(1);
        transform: scale(1.05);
      }
      /* =============================
   SOLUTIONS SECTION
============================= */

      .gpu_solutions-section_87ec87 {
        padding-top: 20px;
      }

      .gpu_watermark-bottom_18f738 {
        top: 40%;
      }
      /* =============================
   SOLUTION CARDS
============================= */

      .gpu_cards-slider-wrapper_a71f51 {
        width: 100%;
        overflow: hidden;
        position: relative;
      }
      /* convert existing grid into animated track */

      .gpu_cr-cards-row_342750 {
        display: flex !important;
        gap: 20px;
        transition: transform 0.7s cubic-bezier(0.65, 0, 0.35, 1);
        will-change: transform;
      }
      /* each card width */

      .gpu_cr-cards-row_342750 .gpu_solution-card_6be91e {
        min-width: calc((100% - 40px) / 3);
        flex: 0 0 calc((100% - 40px) / 3);
      }
      /* smooth rendering */

      .gpu_cr-cards-row_342750.animating {
        pointer-events: none;
      }
      /* responsive */

      @media (max-width: 991px) {
        .gpu_cr-cards-row_342750 .gpu_solution-card_6be91e {
          min-width: calc((100% - 20px) / 2);
          flex: 0 0 calc((100% - 20px) / 2);
        }
      }

      @media (max-width: 640px) {
        .gpu_cr-cards-row_342750 .gpu_solution-card_6be91e {
          min-width: 100%;
          flex: 0 0 100%;
        }
      }

      .gpu_cards-row_658f96 {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 8px;
      }

      .gpu_card-inner_093757 {
        position: relative;
        width: 100%;
        height: 479px;
        transform-style: preserve-3d;
        transition: transform 0.65s cubic-bezier(0.4, 0.2, 0.2, 1);
        border-radius: 16px;
      }

      .gpu_solution-card_6be91e {
        border-radius: 16px;
        overflow: hidden;
        min-height: 479px;
        transition:
          transform 0.3s ease,
          box-shadow 0.3s ease;
        perspective: 1000px;
        border: none !important;
        position: relative;
      }

      .gpu_solution-card_6be91e:hover .gpu_card-back_f23723 {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
      }
      /* ── SHARED FACE RULES ── */

      .gpu_card-front_a1f09c,
      .gpu_card-back_f23723 {
        position: absolute;
        inset: 0;
        border-radius: 16px;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        overflow: hidden;
      }
      /* ── FRONT (your existing image card) ── */

      .gpu_card-front_a1f09c {
        border: 1px solid rgba(255, 255, 255, 0.3);
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        transition:
          opacity 0.35s ease,
          transform 0.35s ease;
      }

      .gpu_solution-card_6be91e:hover .gpu_card-front_a1f09c {
        opacity: 0;
        transform: translateY(-8px);
      }
      /* ── BACK (light gradient card) ── */

      .gpu_card-back_f23723 {
        opacity: 0;
        visibility: hidden;
        transform: translateY(24px) scale(1.02);
        transition:
          opacity 0.45s ease,
          transform 0.5s cubic-bezier(0.22, 1, 0.36, 1),
          visibility 0.45s;
        /* keeps it hidden until flip */
        border: 1.5px solid #0ca79c;
        background: linear-gradient(
          145deg,
          #ffffff 0%,
          #ffffff 42%,
          #c8e8f2 65%,
          #8ec8dc 100%
        );
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 32px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
      }
      /* ── BACK CONTENT ── */

      .gpu_card-back-top_3fb120 {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .gpu_card-back-icon_7d4a0a svg {
        width: 36px;
        height: 36px;
        stroke: #0ca79c;
        fill: none;
      }

      .gpu_card-back-category_e938be {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #555;
      }

      .gpu_card-back-title_3e2415 {
        font-size: 22px;
        font-weight: 700;
        color: #0a1428;
        line-height: 1.25;
        letter-spacing: -0.02em;
      }

      .gpu_card-back-desc_251954 {
        font-size: 13px;
        color: #334;
        line-height: 1.65;
        padding-top: 12px;
        border-top: 1px solid rgba(12, 167, 156, 0.18);
      }
      /* Light card */

      .gpu_card-light_a37719 {
        display: flex;
        height: 479px;
        padding: 32px;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        border-radius: 20px;
        /* Gradient matching your design */
        background: linear-gradient(
          145deg,
          #ffff 0%,
          #ffff 45%,
          #b7d7e3 65%,
          #8ec8dc 100%
        );
        /* Optional soft effect */
        box-shadow:
          0 10px 30px rgba(0, 0, 0, 0.12),
          inset 0 1px 1px rgba(255, 255, 255, 0.4);
      }

      .gpu_card-light-wtc_374443 {
        /* background: var(--card-bg);
        border: 1px solid var(--card-border);
        padding: 28px 24px;
        display: flex;
        flex-direction: column;
        gap: 12px; */
        border-radius: 20px;
        border: 1px solid #2559ca;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        display: flex;
        min-height: 479px;
        padding: 32px;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        flex-shrink: 0;
      }

      .gpu_card-icon-wrap_699c53 {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-bottom: 4px;
      }

      .gpu_card-icon-teal_b6e62e {
        background: transparent;
      }

      .gpu_card-icon-teal_b6e62e img {
        width: 52px;
        height: 52px;
      }

      .gpu_card-icon-white_03d0a0 {
        background: transparent;
      }

      .gpu_card-icon-white_03d0a0 img {
        width: 36px;
        height: 36px;
      }

      .gpu_card-category_03f56e {
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--white);
        line-height: 1;
      }

      .gpu_card-cat-white_087502 {
        color: rgba(255, 255, 255, 0.75);
      }

      .gpu_card-title_aad27e {
        font-size: 18px;
        font-weight: 700;
        color: var(--white);
        line-height: 1.3;
        letter-spacing: -0.01em;
      }

      .gpu_card-title-white_a01826 {
        color: var(--white);
      }

      .gpu_card-title-dark_c88c74 {
        color: var(--dark);
      }

      .gpu_card-desc_842b60 {
        font-size: 12.5px;
        font-weight: 400;
        color: var(--white);
        line-height: 1.65;
        margin-top: auto;
      }
      /* Image cards */

      .gpu_card-image_547884 {
        position: relative;
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }

      .gpu_card-overlay_baf912 {
        position: absolute;
        inset: 0;
        background: linear-gradient(
          to top,
          rgba(10, 20, 40, 0.82) 0%,
          rgba(10, 20, 40, 0.3) 60%,
          transparent 100%
        );
        border-radius: 16px;
      }

      .gpu_card-image-content_4aca8c {
        position: relative;
        z-index: 2;
        padding: 24px 22px;
        display: flex;
        flex-direction: column;
        gap: 8px;
      }
      /* ── TOP BAR: counter + nav ── */

      .gpu_cs-topbar_091282 {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 28px 120px;
      }

      .gpu_cs-counter_3f3d69 {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        gap: 6px;
      }

      .gpu_cs-counter_3f3d69 .gpu_num_0fc3cf {
        font-size: 64px;
        font-weight: 800;
        line-height: 1;
        background: linear-gradient(180deg, #2a44b0 0%, #13c5b8 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
      }

      .gpu_cs-counter_3f3d69 .gpu_total_fbb44b {
        font-size: 18px;
        font-weight: 500;
        color: #bbc0ce;
      }

      .gpu_cs-nav_a2bb5c {
        display: flex;
        gap: 10px;
      }

      .gpu_cs-nav_a2bb5c button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1.5px solid #d0d4e0;
        background: transparent;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition:
          border-color 0.2s,
          background 0.2s;
      }

      .gpu_cs-nav_a2bb5c button:hover {
        border-color: var(--cyan);
        background: rgba(26, 171, 227, 0.07);
      }

      .gpu_cs-nav_a2bb5c button svg path {
        stroke: #444;
      }

      .gpu_cs-nav_a2bb5c button:hover svg path {
        stroke: var(--cyan);
      }
      /* ── MAIN CONTENT AREA ── */

      .gpu_cs-body_a130e6 {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        padding-top: 40px;
        padding-left: 60px;
        padding-bottom: 20px;
        min-height: 440px;
      }
      /* LEFT PANEL */

      .gpu_cs-left_ae96c4 {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 40px 48px 0 0;
        max-width: 584px;
      }

      .gpu_cs-left_ae96c4 .gpu_tag_e4d23e {
        font-size: 12px;
        font-weight: 500;
        color: var(--text-muted);
        letter-spacing: 0.04em;
        text-transform: uppercase;
        margin-bottom: 14px;
      }

      .gpu_cs-left_ae96c4 h2 {
        font-size: 28px;
        font-weight: 700;
        color: var(--dark);
        line-height: 1.35;
        margin-bottom: 28px;
        max-width: 360px;
      }

      .gpu_btn-all_a3ae09 {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        color: var(--dark);
        border: 1px solid var(--dark);
        border-radius: 50px;
        padding: 11px 22px 11px 16px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        width: fit-content;
        transition:
          background 0.2s,
          transform 0.15s;
      }

      .gpu_btn-all_a3ae09:hover {
        background: #e8eaf1;
        transform: translateY(-1px);
      }

      .gpu_btn-all_a3ae09 .gpu_icon-wrap_d3ab58 {
        width: 28px;
        height: 28px;
        background: var(--cyan);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .gpu_btn-all_a3ae09 .gpu_icon-wrap_d3ab58 svg {
        display: block;
      }
      /* RIGHT PANEL – card */

      .gpu_cs-right_08e5cb {
        position: relative;
      }

      .gpu_cs-card_8ac733 {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 320px;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
      }

      .gpu_cs-card_8ac733 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
      }

      .gpu_cs-card_8ac733:hover img {
        transform: scale(1.03);
      }

      .gpu_cs-card-overlay_3877b1 {
        position: absolute;
        inset: 0;
        background: linear-gradient(
          180deg,
          rgba(0, 10, 45, 0) 30%,
          rgba(0, 10, 45, 0.88) 100%
        );
      }

      .gpu_cs-card-content_db6659 {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 28px;
      }

      .gpu_cs-card-content_db6659 .gpu_tag_e4d23e {
        font-size: 11px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.65);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 10px;
      }

      .gpu_cs-card-content_db6659 h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--white);
        line-height: 1.4;
        margin-bottom: 20px;
        max-width: 320px;
      }
      /* ── BOTTOM BAR: second slide counter + nav ── */

      .gpu_cs-bottombar_d866f4 {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 400px;
        padding: 0 60px 40px;
      }

      .gpu_cs-bottombar_d866f4 .gpu_cs-counter_3f3d69 .gpu_num_0fc3cf {
        font-size: 56px;
      }

      .gpu_cs-bottombar_d866f4 .gpu_cs-counter_3f3d69 .gpu_total_fbb44b {
        font-size: 16px;
        color: #bbc0ce;
      }
      /* ── TRANSITIONS ── */

      .gpu_cs-slide_9847fc {
        transition:
          opacity 0.4s ease,
          transform 0.4s ease;
      }

      .gpu_cs-slide_9847fc.fade-out {
        opacity: 0;
        transform: translateX(-20px);
      }
      /* =========================
   WATERMARK SVG RESPONSIVE
   ========================= */
      /* =========================
   RESPONSIVE WATERMARK
   ========================= */

      .gpu_cs-section_d62cbe {
        position: relative;
        overflow: hidden;
      }

      .gpu_watermark-wrap_d5de26 {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        z-index: 0;
      }
      /* MAIN FIX */

      .gpu_watermark-wrap_d5de26 svg {
        position: absolute;
        top: 33%;
        left: 50%;
        width: 100%;
        height: auto;
        min-width: 100%;
        /* min-height: 100%; */
        transform: translate(-50%, -50%);
        display: block;
      }
      /* Tablet */

      @media (max-width: 900px) {
        .gpu_watermark-wrap_d5de26 svg {
          top: 15%;
        }
      }
      /* Mobile */

      @media (max-width: 420px) {
        .gpu_wtc-watermark_5f861e svg {
          top: 26%;
        }
      }

      @media (max-width: 768px) {
        .gpu_watermark-wrap_d5de26 svg {
          /* width: 100%; */
          top: 14%;
          /* max-width: none; */
        }
        .gpu_wtc-watermark_5f861e svg {
          top: 20%;
        }
        .gpu_wtc-section_39ccd8 {
          margin-top: 0;
          padding-top: 30px;
        }
      }

      @media (max-width: 1024px) {
        .gpu_wtc-section_39ccd8 {
          min-height: 40vh;
        }
      }
      /* =========================
   PARENT SECTION
========================= */

      .gpu_git-section_5b6843 {
        width: 100%;
        padding: 50px 80px;
        display: flex;
        justify-content: center;
      }
      /* =========================
   MAIN BANNER
========================= */

      .gpu_git-banner_9a15f1 {
        position: relative;
        width: 100%;
        max-width: 1120px;
        /* min-height: 520px; */
        margin: 0 auto;
        border-radius: 20px;
        overflow: hidden;
        padding: 40px;
        display: flex;
        align-items: flex-end;
        background-image:
          linear-gradient(
            180deg,
            rgba(0, 0, 0, 0) 38%,
            rgba(0, 0, 0, 0.82) 82%
          ),
          url("images/get-in-touch-image.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #0a1628;
        isolation: isolate;
      }
      /* =========================
   CONTENT
========================= */

      .gpu_git-content_305f8b {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 420px;
      }
      /* =========================
   EYEBROW
========================= */

      .gpu_git-eyebrow_2ba754 {
        font-size: 14px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.72);
        letter-spacing: 0.04em;
        margin-bottom: 14px;
      }
      /* =========================
   HEADING
========================= */

      .gpu_git-heading_39a8ae {
        font-size: clamp(28px, 3vw, 48px);
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: -0.02em;
        color: #ffffff;
        margin-bottom: 16px;
      }
      /* =========================
   DESCRIPTION
========================= */

      .gpu_git-desc_f13d22 {
        max-width: 340px;
        font-size: 16px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.72);
        margin-bottom: 32px;
      }
      /* =========================
   TABLET
========================= */

      @media (max-width: 991px) {
        .gpu_git-section_5b6843 {
          padding: 90px 32px;
        }
        .gpu_git-banner_9a15f1 {
          min-height: 460px;
          padding: 42px 36px;
        }
        .gpu_git-heading_39a8ae {
          font-size: 40px;
        }
      }
      /* =========================
   MOBILE
========================= */

      @media (max-width: 767px) {
        .gpu_git-section_5b6843 {
          padding: 70px 20px;
        }
        .gpu_git-banner_9a15f1 {
          min-height: 420px;
          padding: 32px 24px;
          border-radius: 18px;
          background-position: center;
        }
        .gpu_git-content_305f8b {
          max-width: 100%;
        }
        .gpu_git-eyebrow_2ba754 {
          font-size: 13px;
          margin-bottom: 12px;
        }
        .gpu_git-heading_39a8ae {
          font-size: 30px;
          line-height: 1.2;
          margin-bottom: 14px;
        }
        .gpu_git-desc_f13d22 {
          font-size: 15px;
          line-height: 1.6;
          margin-bottom: 26px;
          max-width: 100%;
        }
      }
      /* =========================
   SMALL MOBILE
========================= */

      @media (max-width: 480px) {
        .gpu_git-section_5b6843 {
          padding: 60px 16px;
        }
        .gpu_git-banner_9a15f1 {
          min-height: 390px;
          padding: 28px 20px;
        }
        .gpu_git-heading_39a8ae {
          font-size: 26px;
        }
        .gpu_git-desc_f13d22 {
          font-size: 14px;
        }
      }
      /* =============================
   RESPONSIVE
============================= */
      /* Tablet */

      @media (max-width: 1200px) {
        .gpu_hero_f04af6 {
          max-width: calc(100% - 32px);
        }
        .gpu_hero-content_355579 {
          padding: 34px 36px 38px;
          max-width: 500px;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 15px;
          line-height: 1.7;
        }
      }

      @media (max-width: 1024px) {
        .gpu_hero_f04af6 {
          margin: 16px;
          /* min-height: 150px; */
        }
        .gpu_hero-content_355579 {
          padding: 30px 28px 34px;
          max-width: 460px;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 15px;
          line-height: 1.7;
          margin-bottom: 24px;
        }
        .gpu_hero-btn_7bd1ba {
          padding: 10px 16px;
          font-size: 13px;
          gap: 10px;
        }
        .gpu_hero-btn-dot_e7fa40 {
          width: 28px;
          height: 28px;
        }
        .gpu_hero-btn-arrow_9738d4 {
          width: 14px;
          height: 14px;
        }
        .gpu_credibility-section_978473,
        .gpu_solutions-section_87ec87 {
          padding: 48px 24px;
        }
        .gpu_logos-row_81f852 {
          gap: 36px;
        }
        .gpu_partner-logo_58ecc3 {
          height: 28px;
        }
        .gpu_cards-row_658f96 {
          grid-template-columns: repeat(3, 1fr);
          gap: 16px;
        }
        .gpu_solution-card_6be91e {
          min-height: 240px;
        }
      }
      /* Large mobile / small tablet */

      @media (max-width: 768px) {
        .gpu_hero_f04af6 {
          margin: 12px;
          border-radius: 12px;
          /* min-height: 220px; */
        }
        .gpu_hero-bg_be6bb7 {
          border-radius: 12px;
        }
        .gpu_hero-content_355579 {
          padding: 28px 24px 30px;
          max-width: 100%;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 14px;
          line-height: 1.75;
          margin-bottom: 22px;
        }
        .gpu_hero-btn_7bd1ba {
          width: fit-content;
          max-width: 100%;
          font-size: 12px;
          line-height: 1.4;
          padding: 10px 16px;
          border-radius: 999px;
          white-space: normal;
        }
        .gpu_credibility-section_978473,
        .gpu_solutions-section_87ec87 {
          padding: 40px 16px;
        }
        .gpu_credibility-inner_e36caf {
          flex-direction: column;
          gap: 12px;
        }
        .gpu_cred-copy_ec8c2c p {
          font-size: 14px;
        }
        .gpu_logos-row_81f852 {
          gap: 24px;
          justify-content: center;
        }
        .gpu_partner-logo_58ecc3 {
          height: 24px;
        }
        .gpu_cards-row_658f96 {
          grid-template-columns: 1fr;
          gap: 16px;
        }
        .gpu_card-image_547884 {
          min-height: 220px;
        }
        .gpu_card-light_a37719 {
          min-height: auto;
        }
        .gpu_credibility-watermark_430f36 span {
          font-size: 72px;
        }
      }
      /* Mobile */

      @media (max-width: 576px) {
        .gpu_hero_f04af6 {
          /* min-height: 240px; */
        }
        .gpu_hero-content_355579 {
          padding: 24px 20px 28px;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 13px;
          line-height: 1.8;
          margin-bottom: 20px;
        }
        .gpu_hero-btn_7bd1ba {
          font-size: 12px;
          padding: 9px 14px;
          gap: 8px;
        }
        .gpu_hero-btn-dot_e7fa40 {
          width: 26px;
          height: 26px;
          min-width: 26px;
        }
        .gpu_hero-btn-arrow_9738d4 {
          width: 13px;
          height: 13px;
        }
      }
      /* Extra Small Devices */

      @media (max-width: 360px) {
        .gpu_hero_f04af6 {
          /* min-height: 180px; */
        }
        .gpu_hero-content_355579 {
          padding: 20px 16px 22px;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 12px;
          line-height: 1.7;
        }
        .gpu_hero-btn_7bd1ba {
          font-size: 11px;
          padding: 9px 12px;
        }
        .gpu_hero-btn-dot_e7fa40 {
          width: 24px;
          height: 24px;
          min-width: 24px;
        }
        .gpu_hero-btn-arrow_9738d4 {
          width: 12px;
          height: 12px;
        }
        .gpu_credibility-section_978473 {
          min-height: 200px;
          padding-top: 40px;
          padding-bottom: 0;
        }
        .gpu_credibility-inner_e36caf {
          margin-bottom: 50px;
        }
      }
      /* Mobile */

      @media (max-width: 480px) {
        .gpu_hero_f04af6 {
          margin: 10px;
          border-radius: 10px;
        }
        .gpu_hero-bg_be6bb7 {
          object-position: center;
          border-radius: 10px;
        }
        .gpu_hero-content_355579 {
          padding: 22px 18px 24px;
        }
        .gpu_hero-text_bbcef5 {
          font-size: 13px;
          line-height: 1.75;
          letter-spacing: 0;
          margin-bottom: 18px;
        }
        .gpu_hero-btn_7bd1ba {
          width: 100%;
          justify-content: center;
          text-align: center;
          font-size: 11.5px;
          padding: 10px 14px;
        }
        .gpu_card-title_aad27e {
          font-size: 16px;
        }
        .gpu_card-icon-teal_b6e62e img {
          width: 40px;
          height: 40px;
        }
        .gpu_credibility-watermark_430f36 span {
          font-size: 52px;
          letter-spacing: -0.03em;
        }
        .gpu_logos-row_81f852 {
          gap: 18px;
        }
        .gpu_partner-logo_58ecc3 {
          height: 20px;
        }
      }
      /* ── RESPONSIVE ── */

      @media (max-width: 1200px) {
        .gpu_cs-bottombar_d866f4 {
          justify-content: space-between;
          gap: 0;
        }
      }

      @media (max-width: 900px) {
        .gpu_cs-topbar_091282,
        .gpu_cs-bottombar_d866f4 {
          padding-left: 32px;
          padding-right: 32px;
        }
        .gpu_cs-body_a130e6 {
          grid-template-columns: 1fr;
          padding: 0 32px 48px;
          gap: 32px;
        }
        .gpu_cs-left_ae96c4 {
          padding: 0;
        }
        .gpu_cs-left_ae96c4 h2 {
          max-width: 100%;
        }
        .gpu_cs-card_8ac733 {
          min-height: 280px;
        }
        .gpu_cs-counter_3f3d69 .gpu_num_0fc3cf {
          font-size: 48px;
        }
      }

      @media (max-width: 560px) {
        .gpu_cs-topbar_091282,
        .gpu_cs-bottombar_d866f4 {
          padding-left: 20px;
          padding-right: 20px;
        }
        .gpu_cs-body_a130e6 {
          padding: 0 20px 36px;
        }
        .gpu_cs-counter_3f3d69 .gpu_num_0fc3cf {
          font-size: 40px;
        }
        .gpu_cs-left_ae96c4 h2 {
          font-size: 22px;
        }
        .gpu_cs-card-content_db6659 h3 {
          font-size: 17px;
        }
      }
    </style>
  </head>

  <body>
    <!-- /gp-wrap -->

    <div class="gpu_gp-wrap_995883">
      <!-- ══ HERO ══ -->
      <div class="gpu_gp-hero_796d86">
        <!-- Breadcrumb -->
        <p class="gpu_gp-hero__crumb_f77e06">What We Do / Global Procurement</p>
        <div class="gpu_gp-hero__crumb-line_cfca73"></div>
        <!-- Content -->
        <div class="gpu_gp-hero__content_cab1da">
          <h1 class="gpu_gp-hero__title_8cb750">
            Streamlined IT Procurement<br />Across Global Supply Networks
          </h1>
          <p class="gpu_gp-hero__body_7b9957">
            End to end sourcing and delivery of IT hardware, software, and
            technology solutions through trusted global vendor networks,
            ensuring speed, cost efficiency, and reliability.
          </p>

          <a
            class="gpu_hero-btn_7bd1ba"
            href="https://teal-mule-553916.hostingersite.com/Contactus.php"
          >
            <span class="gpu_hero-btn-dot_e7fa40">
              <img
                src="/images/ArrowRight.svg"
                alt=""
                class="gpu_hero-btn-arrow_9738d4"
              />
            </span>
            Simplify Your IT Procurement
          </a>
        </div>
        <!-- Trust strip sits at the bottom of the hero -->
        <div class="gpu_gp-trust_72e26d">
          <div class="gpu_gp-trust__item_a3c6c9">
            <img src="/images/SealCheck.svg" /> Trusted by global enterprises
          </div>
          <div class="gpu_gp-trust__item_a3c6c9">
            <img src="/images/SealCheck.svg" /> Powered by leading technology
            alliances
          </div>
          <div class="gpu_gp-trust__item_a3c6c9">
            <img src="/images/SealCheck.svg" /> Delivered across regions with
            consistency
          </div>
        </div>
      </div>
      <!-- /gp-hero -->
      <!-- ══ CARDS ══ -->
      <div class="gpu_gp-cards_de959b">
        <!-- Card 1 -->
        <div class="gpu_gp-card_71bd11">
          <div class="gpu_gp-card__icon_f911e0">
            <!-- globe / network icon -->
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path
                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
              />
            </svg>
          </div>
          <h3 class="gpu_gp-card__title_ba26c1">
            For OEMs Technology Partners
          </h3>
          <p class="gpu_gp-card__body_9d94e7">
            Expand market reach through a globally aligned delivery and
            execution partner with strong enterprise access.
          </p>
        </div>
        <!-- Card 2 -->
        <div class="gpu_gp-card_71bd11">
          <div class="gpu_gp-card__icon_f911e0">
            <!-- shield check icon -->
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <h3 class="gpu_gp-card__title_ba26c1">For Enterprise Buyers</h3>
          <p class="gpu_gp-card__body_9d94e7">
            Simplify sourcing, reduce complexity, and accelerate deployment with
            outcome-driven procurement models.
          </p>
        </div>
        <!-- Card 3 -->
        <div class="gpu_gp-card_71bd11">
          <div class="gpu_gp-card__icon_f911e0">
            <!-- lightning / bolt icon -->
            <svg viewBox="0 0 24 24">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
            </svg>
          </div>
          <h3 class="gpu_gp-card__title_ba26c1">For Channel / Alliances</h3>
          <p class="gpu_gp-card__body_9d94e7">
            Strengthen your offerings with a scalable, reliable ecosystem
            designed for joint growth and execution.
          </p>
        </div>
      </div>
      <!-- /gp-cards -->
    </div>

    <!-- /gp-wrap -->

    <!-- Alliance -->

    <div class="gpu_alliance-page_ed7e23">
      <!-- WATERMARK BACKGROUND TEXT -->
      <div class="gpu_watermark_1806b2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1440"
          height="893"
          viewBox="0 0 1440 893"
          fill="none"
        >
          <path
            d="M153.284 91.0218H212.543V288.895H153.284V270.295C139.325 286.389 119.704 294.436 94.4198 294.436C68.3457 294.436 46.0905 284.41 27.6543 264.359C9.21811 244.044 0 219.244 0 189.959C0 160.673 9.21811 136.005 27.6543 115.954C46.0905 95.6388 68.3457 85.4813 94.4198 85.4813C119.704 85.4813 139.325 93.5282 153.284 109.622V91.0218ZM72.2963 225.18C80.9877 233.886 92.3128 238.24 106.272 238.24C120.23 238.24 131.556 233.886 140.247 225.18C148.938 216.474 153.284 204.733 153.284 189.959C153.284 175.184 148.938 163.443 140.247 154.737C131.556 146.031 120.23 141.677 106.272 141.677C92.3128 141.677 80.9877 146.031 72.2963 154.737C63.6049 163.443 59.2593 175.184 59.2593 189.959C59.2593 204.733 63.6049 216.474 72.2963 225.18Z"
            fill="url(#paint0_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M256.019 288.895V0H315.278V288.895H256.019Z"
            fill="url(#paint1_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M358.642 288.895V0H417.901V288.895H358.642Z"
            fill="url(#paint2_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M515.784 63.3195C508.936 70.1791 500.64 73.6089 490.895 73.6089C481.15 73.6089 472.722 70.1791 465.611 63.3195C458.763 56.1961 455.339 47.7535 455.339 37.9917C455.339 28.23 458.763 19.9193 465.611 13.0596C472.722 5.9362 481.15 2.37447 490.895 2.37447C500.64 2.37447 508.936 5.9362 515.784 13.0596C522.895 19.9193 526.451 28.23 526.451 37.9917C526.451 47.7535 522.895 56.1961 515.784 63.3195ZM461.265 288.895V91.0218H520.525V288.895H461.265Z"
            fill="url(#paint3_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M707.296 91.0218H766.556V288.895H707.296V270.295C693.337 286.389 673.716 294.436 648.432 294.436C622.358 294.436 600.103 284.41 581.667 264.359C563.23 244.044 554.012 219.244 554.012 189.959C554.012 160.673 563.23 136.005 581.667 115.954C600.103 95.6388 622.358 85.4813 648.432 85.4813C673.716 85.4813 693.337 93.5282 707.296 109.622V91.0218ZM626.309 225.18C635 233.886 646.325 238.24 660.284 238.24C674.243 238.24 685.568 233.886 694.259 225.18C702.951 216.474 707.296 204.733 707.296 189.959C707.296 175.184 702.951 163.443 694.259 154.737C685.568 146.031 674.243 141.677 660.284 141.677C646.325 141.677 635 146.031 626.309 154.737C617.617 163.443 613.272 175.184 613.272 189.959C613.272 204.733 617.617 216.474 626.309 225.18Z"
            fill="url(#paint4_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M925.784 85.4813C946.854 85.4813 964.368 92.7367 978.327 107.247C992.549 121.758 999.66 141.809 999.66 167.401V288.895H940.401V176.107C940.401 164.499 937.109 155.66 930.525 149.592C924.204 143.26 916.039 140.094 906.031 140.094C894.706 140.094 885.751 143.524 879.167 150.384C872.582 157.243 869.29 167.401 869.29 180.856V288.895H810.031V91.0218H869.29V109.622C881.142 93.5282 899.973 85.4813 925.784 85.4813Z"
            fill="url(#paint5_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1135.17 294.436C1105.15 294.436 1080.12 284.41 1060.11 264.359C1040.35 244.308 1030.48 219.508 1030.48 189.959C1030.48 160.409 1040.35 135.609 1060.11 115.558C1080.12 95.5069 1105.15 85.4813 1135.17 85.4813C1154.13 85.4813 1171.52 90.0984 1187.32 99.3325C1203.38 108.567 1215.76 120.835 1224.45 136.137L1172.7 166.214C1165.59 151.439 1152.82 144.052 1134.38 144.052C1121.47 144.052 1110.81 148.405 1102.38 157.112C1093.95 165.554 1089.74 176.503 1089.74 189.959C1089.74 203.414 1093.95 214.495 1102.38 223.201C1110.81 231.644 1121.47 235.865 1134.38 235.865C1153.08 235.865 1165.85 228.478 1172.7 213.703L1224.45 243.384C1215.76 258.95 1203.52 271.35 1187.71 280.585C1171.91 289.819 1154.4 294.436 1135.17 294.436Z"
            fill="url(#paint6_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1297.38 213.703C1304.23 232.172 1320.03 241.406 1344.79 241.406C1360.86 241.406 1373.5 236.393 1382.72 226.367L1430.12 253.674C1410.63 280.848 1381.93 294.436 1344 294.436C1310.81 294.436 1284.21 284.542 1264.2 264.755C1244.44 244.967 1234.57 220.035 1234.57 189.959C1234.57 160.146 1244.31 135.345 1263.8 115.558C1283.56 95.5069 1308.84 85.4813 1339.65 85.4813C1368.36 85.4813 1392.2 95.5069 1411.16 115.558C1430.39 135.345 1440 160.146 1440 189.959C1440 198.401 1439.21 206.316 1437.63 213.703H1297.38ZM1296.2 169.38H1381.14C1375.34 148.537 1361.38 138.116 1339.26 138.116C1316.35 138.116 1301.99 148.537 1296.2 169.38Z"
            fill="url(#paint7_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M153.284 390.304H212.543V588.177H153.284V569.577C139.325 585.671 119.704 593.718 94.4198 593.718C68.3457 593.718 46.0905 583.692 27.6543 563.641C9.21811 543.326 0 518.526 0 489.241C0 459.955 9.21811 435.287 27.6543 415.236C46.0905 394.921 68.3457 384.763 94.4198 384.763C119.704 384.763 139.325 392.81 153.284 408.904V390.304ZM72.2963 524.462C80.9877 533.169 92.3128 537.522 106.272 537.522C120.23 537.522 131.556 533.169 140.247 524.462C148.938 515.756 153.284 504.015 153.284 489.241C153.284 474.466 148.938 462.726 140.247 454.019C131.556 445.313 120.23 440.96 106.272 440.96C92.3128 440.96 80.9877 445.313 72.2963 454.019C63.6049 462.726 59.2593 474.466 59.2593 489.241C59.2593 504.015 63.6049 515.756 72.2963 524.462Z"
            fill="url(#paint8_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M256.019 588.177V299.282H315.278V588.177H256.019Z"
            fill="url(#paint9_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M358.642 588.177V299.282H417.901V588.177H358.642Z"
            fill="url(#paint10_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M515.784 362.602C508.936 369.461 500.64 372.891 490.895 372.891C481.15 372.891 472.722 369.461 465.611 362.602C458.763 355.478 455.339 347.036 455.339 337.274C455.339 327.512 458.763 319.201 465.611 312.342C472.722 305.218 481.15 301.657 490.895 301.657C500.64 301.657 508.936 305.218 515.784 312.342C522.895 319.201 526.451 327.512 526.451 337.274C526.451 347.036 522.895 355.478 515.784 362.602ZM461.265 588.177V390.304H520.525V588.177H461.265Z"
            fill="url(#paint11_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M707.296 390.304H766.556V588.177H707.296V569.577C693.337 585.671 673.716 593.718 648.432 593.718C622.358 593.718 600.103 583.692 581.667 563.641C563.23 543.326 554.012 518.526 554.012 489.241C554.012 459.955 563.23 435.287 581.667 415.236C600.103 394.921 622.358 384.763 648.432 384.763C673.716 384.763 693.337 392.81 707.296 408.904V390.304ZM626.309 524.462C635 533.169 646.325 537.522 660.284 537.522C674.243 537.522 685.568 533.169 694.259 524.462C702.951 515.756 707.296 504.015 707.296 489.241C707.296 474.466 702.951 462.726 694.259 454.019C685.568 445.313 674.243 440.96 660.284 440.96C646.325 440.96 635 445.313 626.309 454.019C617.617 462.726 613.272 474.466 613.272 489.241C613.272 504.015 617.617 515.756 626.309 524.462Z"
            fill="url(#paint12_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M925.784 384.763C946.854 384.763 964.368 392.019 978.327 406.53C992.549 421.04 999.66 441.091 999.66 466.683V588.177H940.401V475.389C940.401 463.781 937.109 454.943 930.525 448.874C924.204 442.543 916.039 439.377 906.031 439.377C894.706 439.377 885.751 442.806 879.167 449.666C872.582 456.526 869.29 466.683 869.29 480.138V588.177H810.031V390.304H869.29V408.904C881.142 392.81 899.973 384.763 925.784 384.763Z"
            fill="url(#paint13_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1135.17 593.718C1105.15 593.718 1080.12 583.692 1060.11 563.641C1040.35 543.59 1030.48 518.79 1030.48 489.241C1030.48 459.692 1040.35 434.891 1060.11 414.84C1080.12 394.789 1105.15 384.763 1135.17 384.763C1154.13 384.763 1171.52 389.38 1187.32 398.615C1203.38 407.849 1215.76 420.117 1224.45 435.419L1172.7 465.496C1165.59 450.721 1152.82 443.334 1134.38 443.334C1121.47 443.334 1110.81 447.687 1102.38 456.394C1093.95 464.836 1089.74 475.785 1089.74 489.241C1089.74 502.696 1093.95 513.777 1102.38 522.483C1110.81 530.926 1121.47 535.147 1134.38 535.147C1153.08 535.147 1165.85 527.76 1172.7 512.985L1224.45 542.667C1215.76 558.233 1203.52 570.633 1187.71 579.867C1171.91 589.101 1154.4 593.718 1135.17 593.718Z"
            fill="url(#paint14_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1297.38 512.985C1304.23 531.454 1320.03 540.688 1344.79 540.688C1360.86 540.688 1373.5 535.675 1382.72 525.649L1430.12 552.956C1410.63 580.131 1381.93 593.718 1344 593.718C1310.81 593.718 1284.21 583.824 1264.2 564.037C1244.44 544.25 1234.57 519.317 1234.57 489.241C1234.57 459.428 1244.31 434.628 1263.8 414.84C1283.56 394.789 1308.84 384.763 1339.65 384.763C1368.36 384.763 1392.2 394.789 1411.16 414.84C1430.39 434.628 1440 459.428 1440 489.241C1440 497.683 1439.21 505.598 1437.63 512.985H1297.38ZM1296.2 468.662H1381.14C1375.34 447.819 1361.38 437.398 1339.26 437.398C1316.35 437.398 1301.99 447.819 1296.2 468.662Z"
            fill="url(#paint15_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M153.284 689.586H212.543V887.46H153.284V868.859C139.325 884.953 119.704 893 94.4198 893C68.3457 893 46.0905 882.974 27.6543 862.923C9.21811 842.608 0 817.808 0 788.523C0 759.238 9.21811 734.569 27.6543 714.518C46.0905 694.203 68.3457 684.046 94.4198 684.046C119.704 684.046 139.325 692.093 153.284 708.186V689.586ZM72.2963 823.744C80.9877 832.451 92.3128 836.804 106.272 836.804C120.23 836.804 131.556 832.451 140.247 823.744C148.938 815.038 153.284 803.297 153.284 788.523C153.284 773.748 148.938 762.008 140.247 753.301C131.556 744.595 120.23 740.242 106.272 740.242C92.3128 740.242 80.9877 744.595 72.2963 753.301C63.6049 762.008 59.2593 773.748 59.2593 788.523C59.2593 803.297 63.6049 815.038 72.2963 823.744Z"
            fill="url(#paint16_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M256.019 887.46V598.564H315.278V887.46H256.019Z"
            fill="url(#paint17_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M358.642 887.46V598.564H417.901V887.46H358.642Z"
            fill="url(#paint18_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M515.784 661.884C508.936 668.743 500.64 672.173 490.895 672.173C481.15 672.173 472.722 668.743 465.611 661.884C458.763 654.76 455.339 646.318 455.339 636.556C455.339 626.794 458.763 618.484 465.611 611.624C472.722 604.5 481.15 600.939 490.895 600.939C500.64 600.939 508.936 604.5 515.784 611.624C522.895 618.484 526.451 626.794 526.451 636.556C526.451 646.318 522.895 654.76 515.784 661.884ZM461.265 887.46V689.586H520.525V887.46H461.265Z"
            fill="url(#paint19_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M707.296 689.586H766.556V887.46H707.296V868.859C693.337 884.953 673.716 893 648.432 893C622.358 893 600.103 882.974 581.667 862.923C563.23 842.608 554.012 817.808 554.012 788.523C554.012 759.238 563.23 734.569 581.667 714.518C600.103 694.203 622.358 684.046 648.432 684.046C673.716 684.046 693.337 692.093 707.296 708.186V689.586ZM626.309 823.744C635 832.451 646.325 836.804 660.284 836.804C674.243 836.804 685.568 832.451 694.259 823.744C702.951 815.038 707.296 803.297 707.296 788.523C707.296 773.748 702.951 762.008 694.259 753.301C685.568 744.595 674.243 740.242 660.284 740.242C646.325 740.242 635 744.595 626.309 753.301C617.617 762.008 613.272 773.748 613.272 788.523C613.272 803.297 617.617 815.038 626.309 823.744Z"
            fill="url(#paint20_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M925.784 684.046C946.854 684.046 964.368 691.301 978.327 705.812C992.549 720.322 999.66 740.374 999.66 765.965V887.46H940.401V774.672C940.401 763.063 937.109 754.225 930.525 748.157C924.204 741.825 916.039 738.659 906.031 738.659C894.706 738.659 885.751 742.089 879.167 748.948C872.582 755.808 869.29 765.965 869.29 779.421V887.46H810.031V689.586H869.29V708.186C881.142 692.093 899.973 684.046 925.784 684.046Z"
            fill="url(#paint21_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1135.17 893C1105.15 893 1080.12 882.974 1060.11 862.923C1040.35 842.872 1030.48 818.072 1030.48 788.523C1030.48 758.974 1040.35 734.174 1060.11 714.122C1080.12 694.071 1105.15 684.046 1135.17 684.046C1154.13 684.046 1171.52 688.663 1187.32 697.897C1203.38 707.131 1215.76 719.399 1224.45 734.701L1172.7 764.778C1165.59 750.003 1152.82 742.616 1134.38 742.616C1121.47 742.616 1110.81 746.969 1102.38 755.676C1093.95 764.118 1089.74 775.067 1089.74 788.523C1089.74 801.978 1093.95 813.059 1102.38 821.766C1110.81 830.208 1121.47 834.429 1134.38 834.429C1153.08 834.429 1165.85 827.042 1172.7 812.268L1224.45 841.949C1215.76 857.515 1203.52 869.915 1187.71 879.149C1171.91 888.383 1154.4 893 1135.17 893Z"
            fill="url(#paint22_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <path
            d="M1297.38 812.268C1304.23 830.736 1320.03 839.97 1344.79 839.97C1360.86 839.97 1373.5 834.957 1382.72 824.932L1430.12 852.238C1410.63 879.413 1381.93 893 1344 893C1310.81 893 1284.21 883.106 1264.2 863.319C1244.44 843.532 1234.57 818.6 1234.57 788.523C1234.57 758.71 1244.31 733.91 1263.8 714.122C1283.56 694.071 1308.84 684.046 1339.65 684.046C1368.36 684.046 1392.2 694.071 1411.16 714.122C1430.39 733.91 1440 758.71 1440 788.523C1440 796.965 1439.21 804.88 1437.63 812.268H1297.38ZM1296.2 767.944H1381.14C1375.34 747.101 1361.38 736.68 1339.26 736.68C1316.35 736.68 1301.99 747.101 1296.2 767.944Z"
            fill="url(#paint23_linear_1650_9987)"
            fill-opacity="0.12"
          />
          <defs>
            <linearGradient
              id="paint0_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint2_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint3_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint4_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint5_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint6_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint7_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint8_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint9_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint10_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint11_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint12_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint13_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint14_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint15_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint16_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint17_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint18_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint19_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint20_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint21_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint22_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint23_linear_1650_9987"
              x1="720"
              y1="0"
              x2="720"
              y2="1048.91"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.452776" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- HERO SECTION -->
      <section class="gpu_alliance-hero_1a4679">
        <div class="gpu_alliance-hero-left_a3159e">
          <p class="gpu_alliance-hero-label_b5c79c">
            Build Stronger Outcomes<br />Through Strategic Alliances
          </p>
        </div>
        <div class="gpu_alliance-hero-right_0d9b89">
          <h1 class="gpu_alliance-hero-headline_397e4e">
            Partner with Teceze to accelerate revenue, expand into new markets,
            and deliver secure, scalable solutions through a proven global
            ecosystem.
          </h1>
        </div>
      </section>

      <!-- CARDS SECTION -->
      <section class="gpu_alliance-cards-section_d47bb9">
        <!-- LEFT COLUMN -->
        <div class="gpu_col-left_b7d8f2 gpu_alliance-card-white_e025d3">
          <div class="gpu_col-left-inner_180d21">
            <div
              class="gpu_alliance-card-plain_25fb65 gpu_alliance-card-plain-wrapper_e70122"
            >
              <h3 class="gpu_alliance-card-title_ccb543">
                Drive Revenue Growth
              </h3>
              <p class="gpu_alliance-card-body_7acde8">
                Unlock new revenue streams through structured co-sell models and
                go-to-market alignment.
              </p>
            </div>
          </div>
          <!-- Chart BG Watermark -->
          <div class="gpu_chart-bg_15bf39">
            <svg
              width="150"
              height="150"
              viewBox="0 0 225 205"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M240 0H20C14.6957 0 9.60859 2.10714 5.85786 5.85786C2.10714 9.60859 0 14.6957 0 20V200C0 205.304 2.10714 210.391 5.85786 214.142C9.60859 217.893 14.6957 220 20 220H240C245.304 220 250.391 217.893 254.142 214.142C257.893 210.391 260 205.304 260 200V20C260 14.6957 257.893 9.60859 254.142 5.85786C250.391 2.10714 245.304 0 240 0ZM220 170C222.652 170 225.196 171.054 227.071 172.929C228.946 174.804 230 177.348 230 180C230 182.652 228.946 185.196 227.071 187.071C225.196 188.946 222.652 190 220 190H40C37.3478 190 34.8043 188.946 32.9289 187.071C31.0536 185.196 30 182.652 30 180V40C30 37.3478 31.0536 34.8043 32.9289 32.9289C34.8043 31.0536 37.3478 30 40 30C42.6522 30 45.1957 31.0536 47.0711 32.9289C48.9464 34.8043 50 37.3478 50 40V118.65L93.6 82.3125C95.2568 80.9318 97.3155 80.1238 99.4691 80.0089C101.623 79.894 103.756 80.4784 105.55 81.675L159.3 117.537L213.562 72.3125C215.601 70.6151 218.231 69.7972 220.873 70.0386C223.515 70.2801 225.953 71.5611 227.65 73.6C229.347 75.6388 230.165 78.2685 229.924 80.9104C229.682 83.5523 228.401 85.9901 226.362 87.6875L166.362 137.688C164.706 139.068 162.647 139.876 160.493 139.991C158.34 140.106 156.207 139.522 154.413 138.325L100.662 102.463L50 144.688V170H220Z"
                fill="#000A2D"
                fill-opacity="0.08"
              />
            </svg>
          </div>
        </div>

        <!-- MIDDLE COLUMN -->
        <div class="gpu_col-middle_03ab38">
          <!-- Featured alliance-card with teal dot -->
          <div
            class="gpu_alliance-card-white_e025d3 gpu_alliance-card-featured_686e2a"
          >
            <!-- <div class="gpu_dot-teal_50f8a2"></div> -->
            <h4 class="gpu_alliance-card-title_ccb543">
              Alliance-Driven Execution
            </h4>
            <p class="gpu_alliance-card-body_7acde8">
              <!-- <strong>Teceze alliances are designed to create measurable business
                impact. Whether you are an OEM, distributor, or service
                provider,</strong
              >
              we help you unlock new opportunities and deliver consistent value
              across regions. -->
              Strategic partnerships designed to create measurable outcomes
              across OEMs, distributors, and service providers.
            </p>
          </div>

          <!-- Expand Across Global Markets alliance-card -->
          <div
            class="gpu_alliance-card-white_e025d3 gpu_alliance-card-global_12c44c"
          >
            <div class="gpu_icon-wrap_d3ab58">
              <svg
                width="36"
                height="36"
                viewBox="0 0 52 52"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M26 4.875C21.8219 4.875 17.7376 6.11396 14.2636 8.4352C10.7896 10.7564 8.08196 14.0557 6.48305 17.9158C4.88415 21.7759 4.46581 26.0234 5.28092 30.1213C6.09603 34.2191 8.10799 37.9832 11.0624 40.9376C14.0168 43.892 17.7809 45.904 21.8787 46.7191C25.9766 47.5342 30.2241 47.1159 34.0842 45.517C37.9443 43.918 41.2436 41.2104 43.5648 37.7364C45.886 34.2624 47.125 30.1781 47.125 26C47.1191 20.3991 44.8915 15.0293 40.9311 11.0689C36.9707 7.10848 31.6009 4.88091 26 4.875ZM43.875 26C43.8768 28.2932 43.4354 30.5652 42.575 32.6909L33.4953 27.107C33.1093 26.8688 32.6774 26.7145 32.2278 26.6541L27.5925 26.0284C26.9538 25.9452 26.3047 26.0522 25.7266 26.3362C25.1484 26.6202 24.667 27.0686 24.3425 27.625H22.5713L21.7994 26.0284C21.586 25.5839 21.2737 25.194 20.8864 24.8888C20.4991 24.5835 20.0471 24.371 19.565 24.2673L17.94 23.9159L19.5284 21.125H22.9227C23.4719 21.1239 24.012 20.9842 24.4928 20.7187L26.9811 19.3456C27.1997 19.2238 27.4041 19.078 27.5905 18.9109L33.0566 13.9669C33.6046 13.4757 33.9689 12.8125 34.0892 12.0865C34.2096 11.3605 34.0789 10.6152 33.7188 9.97344L33.6456 9.84141C36.7043 11.2917 39.2889 13.5797 41.0995 16.4398C42.9102 19.3 43.8726 22.6149 43.875 26ZM29.1098 8.39719L30.875 11.5578L25.4089 16.5019L22.9227 17.875H19.5284C18.9571 17.8742 18.3957 18.0239 17.9007 18.3092C17.4058 18.5945 16.9947 19.0052 16.7091 19.5L14.9358 22.5936L12.8741 17.1011L15.0963 11.8462C17.0632 10.3265 19.3259 9.23426 21.7394 8.63962C24.1529 8.04499 26.664 7.96103 29.1119 8.39312L29.1098 8.39719ZM8.12501 26C8.12229 23.3432 8.71505 20.7195 9.8597 18.3219L12.1631 24.4705C12.3551 24.9795 12.6718 25.4323 13.0842 25.7872C13.4966 26.1421 13.9914 26.3878 14.5234 26.5017L18.8764 27.4381L19.6503 29.0469C19.9189 29.594 20.3351 30.0552 20.852 30.3782C21.3689 30.7013 21.9658 30.8733 22.5753 30.875H22.8759L21.4074 34.1717C21.1486 34.7522 21.0657 35.3958 21.169 36.0229C21.2722 36.65 21.5571 37.2331 21.9883 37.7L22.0167 37.7284L26 41.8316L25.6059 43.8628C20.9378 43.7542 16.4969 41.8254 13.231 38.4882C9.96509 35.1509 8.13275 30.6694 8.12501 26ZM28.9616 43.6272L29.1911 42.447C29.2854 41.9456 29.2611 41.4291 29.12 40.9389C28.9789 40.4486 28.725 39.9981 28.3786 39.6236C28.3686 39.6146 28.3591 39.6051 28.3502 39.5952L24.375 35.4941L27.1578 29.25L31.7931 29.8756L41.08 35.5875C39.7346 37.7005 37.9608 39.5078 35.8734 40.8926C33.7861 42.2774 31.4314 43.209 28.9616 43.6272Z"
                  fill="#52576C"
                />
              </svg>
            </div>
            <h3 class="gpu_alliance-card-title_ccb543">
              Expand Across Global Markets
            </h3>
            <p class="gpu_alliance-card-body_7acde8">
              Leverage regional presence to enter new geographies with speed,
              control, and confidence.
            </p>
          </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="gpu_col-right_841b59 gpu_alliance-card-white_e025d3">
          <!-- <div class="gpu_alliance-card-white_e025d3"> -->
          <div class="gpu_alliance-card-plain-right_6a69a7">
            <h3 class="gpu_alliance-card-title_ccb543">
              Secure Sourcing with PaaS
            </h3>
            <p class="gpu_alliance-card-body_7acde8">
              Deliver compliant, auditable procurement through
              Procurement-as-a-Service integration models.
            </p>
          </div>
          <!-- Shield BG Watermark -->
          <div class="gpu_shield-bg_4ec780">
            <svg
              width="150"
              height="150"
              viewBox="0 0 215 205"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M220 0H20C14.6957 0 9.60859 2.10714 5.85786 5.85786C2.10714 9.60859 0 14.6957 0 20V90C0 155.9 31.9 195.838 58.6625 217.738C87.4875 241.312 116.162 249.312 117.412 249.65C119.131 250.118 120.944 250.118 122.663 249.65C123.913 249.312 152.55 241.312 181.413 217.738C208.1 195.838 240 155.9 240 90V20C240 14.6957 237.893 9.60859 234.142 5.85786C230.391 2.10714 225.304 0 220 0ZM177.1 87.075L107.1 157.075C106.171 158.005 105.068 158.742 103.854 159.246C102.64 159.749 101.339 160.008 100.025 160.008C98.7108 160.008 97.4096 159.749 96.1956 159.246C94.9816 158.742 93.8787 158.005 92.95 157.075L62.95 127.075C61.0736 125.199 60.0194 122.654 60.0194 120C60.0194 117.346 61.0736 114.801 62.95 112.925C64.8264 111.049 67.3714 109.994 70.025 109.994C72.6786 109.994 75.2236 111.049 77.1 112.925L100 135.863L162.925 72.925C163.854 71.9959 164.957 71.2589 166.171 70.7561C167.385 70.2532 168.686 69.9944 170 69.9944C171.314 69.9944 172.615 70.2532 173.829 70.7561C175.043 71.2589 176.146 71.9959 177.075 72.925C178.004 73.8541 178.741 74.9571 179.244 76.171C179.747 77.385 180.006 78.6861 180.006 80C180.006 81.3139 179.747 82.615 179.244 83.829C178.741 85.0429 178.004 86.1459 177.075 87.075H177.1Z"
                fill="#000A2D"
                fill-opacity="0.08"
              />
            </svg>
          </div>
          <!-- </div> -->
        </div>
      </section>
    </div>

    <!-- Alliance -->

    <!-- /page-wrapper -->

    <div class="gpu_page-wrapper_c71d92">
      <!-- ════ BG BLOBS ════ -->
      <!-- Glow 1: top-left -->
      <div class="gpu_bg-glow_e7d3b8 gpu_bg-glow-topleft_7e5e8b"></div>
      <!-- Glow 2: right-center -->
      <div class="gpu_bg-glow_e7d3b8 gpu_bg-glow-right_cc2f95"></div>
      <!-- Glow 3: bottom-left -->
      <div class="gpu_bg-glow_e7d3b8 gpu_bg-glow-bottomleft_ebbece"></div>

      <!-- ════ CONTENT ════ -->
      <div class="gpu_content_9a0364">
        <!-- Section 1 header -->
        <div class="gpu_section-header_c535eb">
          <div class="gpu_section-label_322f96">Who We<br />Partner With</div>
          <div class="gpu_section-tagline_8dcb10">
            Collaborating across the technology value chain to deliver
            seamless&nbsp;
            <span class="gpu_muted_0a4e1e"
              >procurement, deployment, and lifecycle support.</span
            >
          </div>
        </div>

        <!-- Partner Cards -->
        <div class="gpu_partner-card-row_343d58">
          <!-- OEMs -->
          <div class="gpu_card-oem_29748a">
            <div class="gpu_card-oem-image_1093d2">
              <img
                src="images/image-1.png"
                alt="OEM visual"
                onerror="this.style.display = 'none'"
              />
            </div>
            <div
              style="
                display: flex;
                flex-direction: column;
                flex: 1;
                justify-content: space-between;
                gap: 16px;
              "
            >
              <div>
                <div class="gpu_card-header_d9d7e2">
                  <div class="gpu_icon-box_2926ba">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M6 22V4C6 3.47 6.21 2.96 6.59 2.59C6.96 2.21 7.47 2 8 2H16C16.53 2 17.04 2.21 17.41 2.59C17.79 2.96 18 3.47 18 4V22H6Z"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M6 12H4C3.47 12 2.96 12.21 2.59 12.59C2.21 12.96 2 13.47 2 14V20C2 20.53 2.21 21.04 2.59 21.41C2.96 21.79 3.47 22 4 22H6"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M18 9H20C20.53 9 21.04 9.21 21.41 9.59C21.79 9.96 22 10.47 22 11V20C22 20.53 21.79 21.04 21.41 21.41C21.04 21.79 20.53 22 20 22H18"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M10 6H14M10 10H14M10 14H14M10 18H14"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="gpu_card-title_aad27e">
                    OEMs & Technology Providers
                  </div>
                </div>
                <div class="gpu_card-desc_842b60">
                  Strategic partnerships with leading hardware and software
                  vendors to deliver enterprise-grade solutions.
                </div>
              </div>
              <div class="gpu_badges_96fb30">
                <div class="gpu_badge_dcdd12">Juniper Networks</div>
                <div class="gpu_badge_dcdd12">BlueCat Networks</div>
                <div class="gpu_badge_dcdd12">NetBrain Technologies</div>
                <div class="gpu_badge_dcdd12">PECB</div>
                <div class="gpu_badge_dcdd12">Netskope</div>
              </div>
            </div>
          </div>

          <!-- Right column -->
          <div class="gpu_cards-col-right_7fac1a">
            <div class="gpu_card-panel_d12e42">
              <div>
                <div class="gpu_card-header_d9d7e2">
                  <div class="gpu_icon-box_2926ba">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M16 21V19C16 17.94 15.58 16.92 14.83 16.17C14.08 15.42 13.06 15 12 15H6C4.94 15 3.92 15.42 3.17 16.17C2.42 16.92 2 17.94 2 19V21"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M9 11C11.21 11 13 9.21 13 7C13 4.79 11.21 3 9 3C6.79 3 5 4.79 5 7C5 9.21 6.79 11 9 11Z"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M22 21V19C22 18.11 21.7 17.25 21.16 16.55C20.62 15.85 19.86 15.35 19 15.13"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M16 3.13C16.86 3.35 17.62 3.85 18.17 4.55C18.71 5.25 19.01 6.12 19.01 7C19.01 7.88 18.71 8.76 18.17 9.46C17.62 10.16 16.86 10.66 16 10.88"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="gpu_card-title_aad27e">
                    Global System Integrators & MSPs
                  </div>
                </div>
                <div class="gpu_card-desc_842b60">
                  Aligned delivery with GSIs and service providers for
                  end-to-end execution across complex environments.
                </div>
              </div>
              <div class="gpu_badges_96fb30">
                <div class="gpu_badge_dcdd12">MSP Alliance B</div>
                <div class="gpu_badge_dcdd12">Systems Partner C</div>
                <div class="gpu_badge_dcdd12">Global SI Partner A</div>
              </div>
            </div>

            <div class="gpu_card-panel_d12e42">
              <div>
                <div class="gpu_card-header_d9d7e2">
                  <div class="gpu_icon-box_2926ba">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M14 18V6C14 5.47 13.79 4.96 13.41 4.59C13.04 4.21 12.53 4 12 4H4C3.47 4 2.96 4.21 2.59 4.59C2.21 4.96 2 5.47 2 6V17C2 17.27 2.11 17.52 2.29 17.71C2.48 17.89 2.73 18 3 18H5"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M15 18H9"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M19 18H21C21.27 18 21.52 17.89 21.71 17.71C21.89 17.52 22 17.27 22 17V13.35C22 13.12 21.92 12.9 21.78 12.73L18.3 8.38C18.21 8.26 18.09 8.16 17.95 8.1C17.82 8.03 17.67 8 17.52 8H14"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M17 20C18.1 20 19 19.1 19 18C19 16.9 18.1 16 17 16C15.9 16 15 16.9 15 18C15 19.1 15.9 20 17 20Z"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M7 20C8.1 20 9 19.1 9 18C9 16.9 8.1 16 7 16C5.9 16 5 16.9 5 18C5 19.1 5.9 20 7 20Z"
                        stroke="#06B6D4"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="gpu_card-title_aad27e">Distributors</div>
                </div>
                <div class="gpu_card-desc_842b60">
                  Strong distributor network ensuring product availability,
                  supply chain efficiency, and regional scalability.
                </div>
              </div>
              <div class="gpu_badges_96fb30">
                <div class="gpu_badge_dcdd12">Distribution Partner B</div>
                <div class="gpu_badge_dcdd12">Distribution Partner A</div>
                <div class="gpu_badge_dcdd12">Distribution Partner C</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Section 2 header -->
        <div
          class="gpu_section-header_c535eb gpu_section-header-alliance_d2e8a2"
        >
          <div class="gpu_section-label_322f96">Alliance Models</div>
          <div class="gpu_section-tagline_8dcb10">
            Flexible Engagement Models&nbsp;
            <span class="gpu_muted_0a4e1e">Built for Scale.</span>
          </div>
        </div>

        <!-- Alliance Cards -->
        <div class="gpu_alliance-row_e8533c">
          <div class="gpu_alliance-card-tall_e59294">
            <div>
              <div class="gpu_alliance-title_52e981">Resell / Distribution</div>
              <div class="gpu_alliance-desc_1ac811" style="margin-top: 12px">
                Structured agreements enabling efficient market access and
                streamlined supply chain operations.
              </div>
            </div>
            <div class="gpu_alliance-card-image_025c5c">
              <img
                src="images/Reseller.png"
                alt="Reseller"
                onerror="this.style.display = 'none'"
              />
            </div>
          </div>

          <div class="gpu_alliance-col-mid_623899">
            <div class="gpu_alliance-card-sm_6c9137">
              <div class="gpu_alliance-title_52e981">Co-Sell / GTM</div>
              <div class="gpu_alliance-desc_1ac811">
                Joint go-to-market strategies designed to accelerate deal cycles
                and expand customer reach.
              </div>
            </div>
            <div class="gpu_alliance-card-sm_6c9137">
              <div class="gpu_alliance-title_52e981">
                Managed Services<br />Integration
              </div>
              <div class="gpu_alliance-desc_1ac811">
                Deep integration of procurement into managed service portfolios
                for outcome-driven delivery.
              </div>
            </div>
          </div>

          <div class="gpu_alliance-card-gradient_4016f3">
            <div class="gpu_alliance-title_52e981">
              Procurement as a Service
            </div>
            <div class="gpu_alliance-desc_1ac811">
              End-to-end procurement capability embedded into your service
              delivery model.
            </div>
          </div>
        </div>
      </div>
      <!-- /content -->
    </div>

    <!-- /page-wrapper -->

    <!-- ===== HERO BANNER ===== -->
    <section class="gpu_hero_f04af6">
      <img
        src="/images/Alliance team Container.png"
        alt="Background"
        class="gpu_hero-bg_be6bb7"
      />
      <div class="gpu_hero-content_355579">
        <p class="gpu_hero-text_bbcef5">
          Teceze provides the flexibility, reach,<br />
          and execution support needed to turn<br />
          partnerships into measurable growth.
        </p>
        <a
          class="gpu_hero-btn_7bd1ba"
          href="https://teal-mule-553916.hostingersite.com/Contactus.php"
        >
          <span class="gpu_hero-btn-dot_e7fa40">
            <img
              src="/images/ArrowRight.svg"
              alt=""
              class="gpu_hero-btn-arrow_9738d4"
            />
          </span>
          Talk to Our Alliances Team
        </a>
      </div>
    </section>

    <!-- ===== CREDIBILITY SECTION 1 – PARTNERS ===== -->
    <section class="gpu_credibility-section_978473">
      <div class="gpu_watermark_1806b2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1440"
          height="1200"
          viewBox="0 0 1440 1200"
          fill="none"
        >
          <path
            d="M82.3343 231.075C58.7214 231.075 39.0441 223.207 23.3022 207.471C7.76739 191.735 0 172.271 0 149.081C0 125.89 7.76739 106.427 23.3022 90.6908C39.0441 74.9545 58.7214 67.0864 82.3343 67.0864C97.2476 67.0864 110.918 70.7099 123.346 77.9569C135.981 85.2038 145.716 94.832 152.551 106.841L111.85 130.446C106.258 118.851 96.212 113.053 81.7129 113.053C71.5635 113.053 63.1747 116.469 56.5466 123.302C49.9184 129.928 46.6043 138.521 46.6043 149.081C46.6043 159.641 49.9184 168.337 56.5466 175.17C63.1747 181.796 71.5635 185.109 81.7129 185.109C96.4191 185.109 106.465 179.311 111.85 167.716L152.551 191.01C145.716 203.226 136.085 212.958 123.657 220.205C111.229 227.452 97.4548 231.075 82.3343 231.075Z"
            fill="url(#paint0_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M219.429 99.0767C222.328 89.1379 228.128 81.5804 236.828 76.4039C245.734 71.0205 255.469 68.3287 266.033 68.3287V121.128C254.641 119.265 243.974 121.232 234.031 127.029C224.296 132.62 219.429 142.455 219.429 156.535V226.727H172.824V71.4346H219.429V99.0767Z"
            fill="url(#paint1_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M324.9 167.716C330.285 182.21 342.713 189.457 362.183 189.457C374.818 189.457 384.761 185.523 392.01 177.655L429.294 199.085C413.966 220.412 391.389 231.075 361.562 231.075C335.464 231.075 314.543 223.311 298.802 207.781C283.267 192.252 275.499 172.685 275.499 149.081C275.499 125.683 283.163 106.22 298.491 90.6908C314.026 74.9545 333.91 67.0864 358.144 67.0864C380.722 67.0864 399.467 74.9545 414.38 90.6908C429.501 106.22 437.061 125.683 437.061 149.081C437.061 155.707 436.44 161.918 435.197 167.716H324.9ZM323.968 132.93H390.767C386.211 116.573 375.233 108.394 357.834 108.394C339.813 108.394 328.525 116.573 323.968 132.93Z"
            fill="url(#paint2_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M574.76 9.31754H621.364V226.727H574.76V212.13C563.782 224.76 548.351 231.075 528.466 231.075C507.96 231.075 490.458 223.207 475.959 207.471C461.459 191.527 454.21 172.064 454.21 149.081C454.21 126.098 461.459 106.738 475.959 91.0014C490.458 75.0581 507.96 67.0864 528.466 67.0864C548.351 67.0864 563.782 73.4016 574.76 86.0321V9.31754ZM511.067 176.723C517.902 183.556 526.809 186.972 537.787 186.972C548.765 186.972 557.671 183.556 564.507 176.723C571.342 169.89 574.76 160.676 574.76 149.081C574.76 137.486 571.342 128.272 564.507 121.439C557.671 114.606 548.765 111.189 537.787 111.189C526.809 111.189 517.902 114.606 511.067 121.439C504.232 128.272 500.814 137.486 500.814 149.081C500.814 160.676 504.232 169.89 511.067 176.723Z"
            fill="url(#paint3_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M698.431 49.6936C693.046 55.0771 686.521 57.7688 678.857 57.7688C671.193 57.7688 664.565 55.0771 658.973 49.6936C653.587 44.1031 650.895 37.4773 650.895 29.8162C650.895 22.1551 653.587 15.6328 658.973 10.2493C664.565 4.65877 671.193 1.86351 678.857 1.86351C686.521 1.86351 693.046 4.65877 698.431 10.2493C704.023 15.6328 706.82 22.1551 706.82 29.8162C706.82 37.4773 704.023 44.1031 698.431 49.6936ZM655.555 226.727V71.4346H702.159V226.727H655.555Z"
            fill="url(#paint4_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M829.161 67.0864C849.667 67.0864 867.169 75.0581 881.668 91.0014C896.168 106.738 903.417 126.098 903.417 149.081C903.417 172.064 896.168 191.527 881.668 207.471C867.169 223.207 849.667 231.075 829.161 231.075C809.276 231.075 793.845 224.76 782.867 212.13V226.727H736.263V9.31754H782.867V86.0321C793.845 73.4016 809.276 67.0864 829.161 67.0864ZM793.12 176.723C800.163 183.556 809.069 186.972 819.84 186.972C830.611 186.972 839.414 183.556 846.249 176.723C853.292 169.89 856.813 160.676 856.813 149.081C856.813 137.486 853.292 128.272 846.249 121.439C839.414 114.606 830.611 111.189 819.84 111.189C809.069 111.189 800.163 114.606 793.12 121.439C786.285 128.272 782.867 137.486 782.867 149.081C782.867 160.676 786.285 169.89 793.12 176.723Z"
            fill="url(#paint5_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M972.717 49.6936C967.331 55.0771 960.807 57.7688 953.143 57.7688C945.479 57.7688 938.851 55.0771 933.259 49.6936C927.873 44.1031 925.181 37.4773 925.181 29.8162C925.181 22.1551 927.873 15.6328 933.259 10.2493C938.851 4.65877 945.479 1.86351 953.143 1.86351C960.807 1.86351 967.331 4.65877 972.717 10.2493C978.309 15.6328 981.106 22.1551 981.106 29.8162C981.106 37.4773 978.309 44.1031 972.717 49.6936ZM929.841 226.727V71.4346H976.445V226.727H929.841Z"
            fill="url(#paint6_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1010.55 226.727V0H1057.15V226.727H1010.55Z"
            fill="url(#paint7_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1134.13 49.6936C1128.75 55.0771 1122.22 57.7688 1114.56 57.7688C1106.89 57.7688 1100.27 55.0771 1094.67 49.6936C1089.29 44.1031 1086.6 37.4773 1086.6 29.8162C1086.6 22.1551 1089.29 15.6328 1094.67 10.2493C1100.27 4.65877 1106.89 1.86351 1114.56 1.86351C1122.22 1.86351 1128.75 4.65877 1134.13 10.2493C1139.73 15.6328 1142.52 22.1551 1142.52 29.8162C1142.52 37.4773 1139.73 44.1031 1134.13 49.6936ZM1091.26 226.727V71.4346H1137.86V226.727H1091.26Z"
            fill="url(#paint8_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1263 116.159H1231V171.132C1231 177.344 1233.48 181.278 1238.45 182.935C1243.42 184.591 1251.61 185.109 1263 184.488V226.727C1233.38 229.833 1212.87 227.038 1201.48 218.341C1190.09 209.438 1184.39 193.702 1184.39 171.132V116.159H1159.54V71.4346H1184.39V41.929L1231 27.9527V71.4346H1263V116.159Z"
            fill="url(#paint9_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1390.29 71.4346H1440L1386.87 222.068C1378.17 246.501 1366.68 263.997 1352.38 274.557C1338.3 285.117 1320.28 289.879 1298.32 288.844V245.362C1309.09 245.362 1317.38 243.395 1323.18 239.461C1328.98 235.734 1333.64 229.108 1337.16 219.584L1275.33 71.4346H1326.6L1361.08 166.474L1390.29 71.4346Z"
            fill="url(#paint10_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M82.3343 465.084C58.7214 465.084 39.0441 457.216 23.3022 441.479C7.76739 425.743 0 406.28 0 383.089C0 359.899 7.76739 340.436 23.3022 324.699C39.0441 308.963 58.7214 301.095 82.3343 301.095C97.2476 301.095 110.918 304.718 123.346 311.965C135.981 319.212 145.716 328.841 152.551 340.85L111.85 364.454C106.258 352.859 96.212 347.062 81.7129 347.062C71.5635 347.062 63.1747 350.478 56.5466 357.311C49.9184 363.937 46.6043 372.53 46.6043 383.089C46.6043 393.649 49.9184 402.346 56.5466 409.179C63.1747 415.804 71.5635 419.117 81.7129 419.117C96.4191 419.117 106.465 413.32 111.85 401.725L152.551 425.018C145.716 437.235 136.085 446.966 123.657 454.213C111.229 461.46 97.4548 465.084 82.3343 465.084Z"
            fill="url(#paint11_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M219.429 333.085C222.328 323.147 228.128 315.589 236.828 310.413C245.734 305.029 255.469 302.337 266.033 302.337V355.137C254.641 353.273 243.974 355.24 234.031 361.038C224.296 366.628 219.429 376.464 219.429 390.543V460.736H172.824V305.443H219.429V333.085Z"
            fill="url(#paint12_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M324.9 401.725C330.285 416.219 342.713 423.465 362.183 423.465C374.818 423.465 384.761 419.531 392.01 411.663L429.294 433.094C413.966 454.421 391.389 465.084 361.562 465.084C335.464 465.084 314.543 457.319 298.802 441.79C283.267 426.261 275.499 406.694 275.499 383.089C275.499 359.692 283.163 340.229 298.491 324.699C314.026 308.963 333.91 301.095 358.144 301.095C380.722 301.095 399.467 308.963 414.38 324.699C429.501 340.229 437.061 359.692 437.061 383.089C437.061 389.715 436.44 395.927 435.197 401.725H324.9ZM323.968 366.939H390.767C386.211 350.582 375.233 342.403 357.834 342.403C339.813 342.403 328.525 350.582 323.968 366.939Z"
            fill="url(#paint13_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M574.76 243.326H621.364V460.736H574.76V446.138C563.782 458.769 548.351 465.084 528.466 465.084C507.96 465.084 490.458 457.216 475.959 441.479C461.459 425.536 454.21 406.073 454.21 383.089C454.21 360.106 461.459 340.746 475.959 325.01C490.458 309.067 507.96 301.095 528.466 301.095C548.351 301.095 563.782 307.41 574.76 320.041V243.326ZM511.067 410.732C517.902 417.564 526.809 420.981 537.787 420.981C548.765 420.981 557.671 417.564 564.507 410.732C571.342 403.899 574.76 394.685 574.76 383.089C574.76 371.494 571.342 362.28 564.507 355.447C557.671 348.615 548.765 345.198 537.787 345.198C526.809 345.198 517.902 348.615 511.067 355.447C504.232 362.28 500.814 371.494 500.814 383.089C500.814 394.685 504.232 403.899 511.067 410.732Z"
            fill="url(#paint14_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M698.431 283.702C693.046 289.086 686.521 291.777 678.857 291.777C671.193 291.777 664.565 289.086 658.973 283.702C653.587 278.112 650.895 271.486 650.895 263.825C650.895 256.164 653.587 249.641 658.973 244.258C664.565 238.667 671.193 235.872 678.857 235.872C686.521 235.872 693.046 238.667 698.431 244.258C704.023 249.641 706.82 256.164 706.82 263.825C706.82 271.486 704.023 278.112 698.431 283.702ZM655.555 460.736V305.443H702.159V460.736H655.555Z"
            fill="url(#paint15_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M829.161 301.095C849.667 301.095 867.169 309.067 881.668 325.01C896.168 340.746 903.417 360.106 903.417 383.089C903.417 406.073 896.168 425.536 881.668 441.479C867.169 457.216 849.667 465.084 829.161 465.084C809.276 465.084 793.845 458.769 782.867 446.138V460.736H736.263V243.326H782.867V320.041C793.845 307.41 809.276 301.095 829.161 301.095ZM793.12 410.732C800.163 417.564 809.069 420.981 819.84 420.981C830.611 420.981 839.414 417.564 846.249 410.732C853.292 403.899 856.813 394.685 856.813 383.089C856.813 371.494 853.292 362.28 846.249 355.447C839.414 348.615 830.611 345.198 819.84 345.198C809.069 345.198 800.163 348.615 793.12 355.447C786.285 362.28 782.867 371.494 782.867 383.089C782.867 394.685 786.285 403.899 793.12 410.732Z"
            fill="url(#paint16_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M972.717 283.702C967.331 289.086 960.807 291.777 953.143 291.777C945.479 291.777 938.851 289.086 933.259 283.702C927.873 278.112 925.181 271.486 925.181 263.825C925.181 256.164 927.873 249.641 933.259 244.258C938.851 238.667 945.479 235.872 953.143 235.872C960.807 235.872 967.331 238.667 972.717 244.258C978.309 249.641 981.106 256.164 981.106 263.825C981.106 271.486 978.309 278.112 972.717 283.702ZM929.841 460.736V305.443H976.445V460.736H929.841Z"
            fill="url(#paint17_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1010.55 460.736V234.009H1057.15V460.736H1010.55Z"
            fill="url(#paint18_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1134.13 283.702C1128.75 289.086 1122.22 291.777 1114.56 291.777C1106.89 291.777 1100.27 289.086 1094.67 283.702C1089.29 278.112 1086.6 271.486 1086.6 263.825C1086.6 256.164 1089.29 249.641 1094.67 244.258C1100.27 238.667 1106.89 235.872 1114.56 235.872C1122.22 235.872 1128.75 238.667 1134.13 244.258C1139.73 249.641 1142.52 256.164 1142.52 263.825C1142.52 271.486 1139.73 278.112 1134.13 283.702ZM1091.26 460.736V305.443H1137.86V460.736H1091.26Z"
            fill="url(#paint19_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1263 350.167H1231V405.141C1231 411.353 1233.48 415.287 1238.45 416.943C1243.42 418.6 1251.61 419.117 1263 418.496V460.736C1233.38 463.842 1212.87 461.046 1201.48 452.35C1190.09 443.446 1184.39 427.71 1184.39 405.141V350.167H1159.54V305.443H1184.39V275.938L1231 261.961V305.443H1263V350.167Z"
            fill="url(#paint20_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1390.29 305.443H1440L1386.87 456.077C1378.17 480.51 1366.68 498.006 1352.38 508.566C1338.3 519.126 1320.28 523.888 1298.32 522.853V479.371C1309.09 479.371 1317.38 477.404 1323.18 473.47C1328.98 469.743 1333.64 463.117 1337.16 453.592L1275.33 305.443H1326.6L1361.08 400.482L1390.29 305.443Z"
            fill="url(#paint21_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M82.3343 699.092C58.7214 699.092 39.0441 691.224 23.3022 675.488C7.76739 659.752 0 640.288 0 617.098C0 593.908 7.76739 574.444 23.3022 558.708C39.0441 542.972 58.7214 535.104 82.3343 535.104C97.2476 535.104 110.918 538.727 123.346 545.974C135.981 553.221 145.716 562.849 152.551 574.858L111.85 598.463C106.258 586.868 96.212 581.07 81.7129 581.07C71.5635 581.07 63.1747 584.487 56.5466 591.319C49.9184 597.945 46.6043 606.538 46.6043 617.098C46.6043 627.658 49.9184 636.354 56.5466 643.187C63.1747 649.813 71.5635 653.126 81.7129 653.126C96.4191 653.126 106.465 647.328 111.85 635.733L152.551 659.027C145.716 671.243 136.085 680.975 123.657 688.222C111.229 695.469 97.4548 699.092 82.3343 699.092Z"
            fill="url(#paint22_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M219.429 567.094C222.328 557.155 228.128 549.598 236.828 544.421C245.734 539.038 255.469 536.346 266.033 536.346V589.145C254.641 587.282 243.974 589.249 234.031 595.047C224.296 600.637 219.429 610.472 219.429 624.552V694.744H172.824V539.452H219.429V567.094Z"
            fill="url(#paint23_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M324.9 635.733C330.285 650.227 342.713 657.474 362.183 657.474C374.818 657.474 384.761 653.54 392.01 645.672L429.294 667.102C413.966 688.429 391.389 699.092 361.562 699.092C335.464 699.092 314.543 691.328 298.802 675.799C283.267 660.269 275.499 640.703 275.499 617.098C275.499 593.701 283.163 574.237 298.491 558.708C314.026 542.972 333.91 535.104 358.144 535.104C380.722 535.104 399.467 542.972 414.38 558.708C429.501 574.237 437.061 593.701 437.061 617.098C437.061 623.724 436.44 629.936 435.197 635.733H324.9ZM323.968 600.948H390.767C386.211 584.59 375.233 576.411 357.834 576.411C339.813 576.411 328.525 584.59 323.968 600.948Z"
            fill="url(#paint24_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M574.76 477.335H621.364V694.744H574.76V680.147C563.782 692.777 548.351 699.092 528.466 699.092C507.96 699.092 490.458 691.224 475.959 675.488C461.459 659.545 454.21 640.081 454.21 617.098C454.21 594.115 461.459 574.755 475.959 559.019C490.458 543.075 507.96 535.104 528.466 535.104C548.351 535.104 563.782 541.419 574.76 554.049V477.335ZM511.067 644.74C517.902 651.573 526.809 654.989 537.787 654.989C548.765 654.989 557.671 651.573 564.507 644.74C571.342 637.907 574.76 628.693 574.76 617.098C574.76 605.503 571.342 596.289 564.507 589.456C557.671 582.623 548.765 579.207 537.787 579.207C526.809 579.207 517.902 582.623 511.067 589.456C504.232 596.289 500.814 605.503 500.814 617.098C500.814 628.693 504.232 637.907 511.067 644.74Z"
            fill="url(#paint25_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M698.431 517.711C693.046 523.094 686.521 525.786 678.857 525.786C671.193 525.786 664.565 523.094 658.973 517.711C653.587 512.12 650.895 505.494 650.895 497.833C650.895 490.172 653.587 483.65 658.973 478.266C664.565 472.676 671.193 469.881 678.857 469.881C686.521 469.881 693.046 472.676 698.431 478.266C704.023 483.65 706.82 490.172 706.82 497.833C706.82 505.494 704.023 512.12 698.431 517.711ZM655.555 694.744V539.452H702.159V694.744H655.555Z"
            fill="url(#paint26_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M829.161 535.104C849.667 535.104 867.169 543.075 881.668 559.019C896.168 574.755 903.417 594.115 903.417 617.098C903.417 640.081 896.168 659.545 881.668 675.488C867.169 691.224 849.667 699.092 829.161 699.092C809.276 699.092 793.845 692.777 782.867 680.147V694.744H736.263V477.335H782.867V554.049C793.845 541.419 809.276 535.104 829.161 535.104ZM793.12 644.74C800.163 651.573 809.069 654.989 819.84 654.989C830.611 654.989 839.414 651.573 846.249 644.74C853.292 637.907 856.813 628.693 856.813 617.098C856.813 605.503 853.292 596.289 846.249 589.456C839.414 582.623 830.611 579.207 819.84 579.207C809.069 579.207 800.163 582.623 793.12 589.456C786.285 596.289 782.867 605.503 782.867 617.098C782.867 628.693 786.285 637.907 793.12 644.74Z"
            fill="url(#paint27_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M972.717 517.711C967.331 523.094 960.807 525.786 953.143 525.786C945.479 525.786 938.851 523.094 933.259 517.711C927.873 512.12 925.181 505.494 925.181 497.833C925.181 490.172 927.873 483.65 933.259 478.266C938.851 472.676 945.479 469.881 953.143 469.881C960.807 469.881 967.331 472.676 972.717 478.266C978.309 483.65 981.106 490.172 981.106 497.833C981.106 505.494 978.309 512.12 972.717 517.711ZM929.841 694.744V539.452H976.445V694.744H929.841Z"
            fill="url(#paint28_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1010.55 694.744V468.017H1057.15V694.744H1010.55Z"
            fill="url(#paint29_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1134.13 517.711C1128.75 523.094 1122.22 525.786 1114.56 525.786C1106.89 525.786 1100.27 523.094 1094.67 517.711C1089.29 512.12 1086.6 505.494 1086.6 497.833C1086.6 490.172 1089.29 483.65 1094.67 478.266C1100.27 472.676 1106.89 469.881 1114.56 469.881C1122.22 469.881 1128.75 472.676 1134.13 478.266C1139.73 483.65 1142.52 490.172 1142.52 497.833C1142.52 505.494 1139.73 512.12 1134.13 517.711ZM1091.26 694.744V539.452H1137.86V694.744H1091.26Z"
            fill="url(#paint30_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1263 584.176H1231V639.15C1231 645.361 1233.48 649.295 1238.45 650.952C1243.42 652.608 1251.61 653.126 1263 652.505V694.744C1233.38 697.85 1212.87 695.055 1201.48 686.359C1190.09 677.455 1184.39 661.719 1184.39 639.15V584.176H1159.54V539.452H1184.39V509.946L1231 495.97V539.452H1263V584.176Z"
            fill="url(#paint31_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <path
            d="M1390.29 539.452H1440L1386.87 690.086C1378.17 714.518 1366.68 732.015 1352.38 742.574C1338.3 753.134 1320.28 757.897 1298.32 756.861V713.379C1309.09 713.379 1317.38 711.412 1323.18 707.478C1328.98 703.751 1333.64 697.125 1337.16 687.601L1275.33 539.452H1326.6L1361.08 634.491L1390.29 539.452Z"
            fill="url(#paint32_linear_1659_8671)"
            fill-opacity="0.12"
          />
          <defs>
            <linearGradient
              id="paint0_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint2_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint3_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint4_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint5_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint6_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint7_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint8_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint9_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint10_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint11_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint12_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint13_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint14_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint15_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint16_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint17_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint18_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint19_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint20_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint21_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint22_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint23_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint24_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint25_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint26_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint27_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint28_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint29_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint30_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint31_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint32_linear_1659_8671"
              x1="720"
              y1="0"
              x2="720"
              y2="889.167"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>

      <div class="gpu_credibility-inner_e36caf">
        <div class="gpu_cred-label_dd0988">
          <p class="gpu_cred-label-title_7fa438">Proven Partnerships.</p>
          <p class="gpu_cred-label-title_7fa438">Real World Execution.</p>
        </div>
        <div class="gpu_cred-copy_ec8c2c">
          <p>
            Teceze delivers at scale through trusted alliances, validated
            solutions, and consistent global execution.
          </p>
        </div>
      </div>

      <div class="gpu_logos-row_81f852">
        <img
          src="/images/infosys.png"
          alt="Infosys"
          class="gpu_partner-logo_58ecc3"
        />
        <img
          src="/images/accenture.png"
          alt="Accenture"
          class="gpu_partner-logo_58ecc3"
        />
        <img
          src="/images/hexaware.png"
          alt="Hexaware"
          class="gpu_partner-logo_58ecc3 gpu_hexaware-logo_4c2be8"
        />
        <img src="/images/hcl.png" alt="HCL" class="gpu_partner-logo_58ecc3" />
        <img
          src="/images/gp_strategies.png"
          alt="GP Strategies"
          class="gpu_partner-logo_58ecc3 gpu_gp-logo_46f2f8"
        />
      </div>

      <div class="gpu_credibility-inner_e36caf">
        <div class="gpu_cred-label_dd0988">
          <p class="gpu_cred-label-title_7fa438">Proven Partnerships.</p>
          <p class="gpu_cred-label-title_7fa438">Joint Solutions</p>
        </div>
        <div class="gpu_cred-copy_ec8c2c">
          <p>
            Teceze delivers at scale through trusted alliances, validated
            solutions, and consistent global execution.
          </p>
        </div>
      </div>
    </section>

    <!-- ===== CREDIBILITY SECTION 2 – JOINT SOLUTIONS ===== -->
    <section class="gpu_solutions-section_87ec87">
      <!-- Cards -->
      <div class="gpu_cards-slider-wrapper_a71f51">
        <div class="gpu_cr-cards-row_342750" id="cardsRow">
          <!-- Card 1 – Network Automation -->
          <div class="gpu_solution-card_6be91e gpu_card-image_547884">
            <div class="gpu_card-inner_093757">
              <!-- FRONT: your existing image card markup -->
              <div
                class="gpu_card-front_a1f09c"
                style="background-image: url(/images/network-automation.png)"
              >
                <div class="gpu_card-overlay_baf912"></div>
                <div class="gpu_card-image-content_4aca8c">
                  <div
                    class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                  >
                    <img src="/images/Network-white.svg" alt="Network" />
                  </div>
                  <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                    NETWORK
                  </p>
                  <h3 class="gpu_card-title_aad27e">Network Automation</h3>
                </div>
              </div>

              <!-- BACK: light gradient card -->
              <div class="gpu_card-back_f23723">
                <div class="gpu_card-back-top_3fb120">
                  <div class="gpu_card-back-icon_7d4a0a">
                    <img src="/images/Network.svg" />
                  </div>
                  <p class="gpu_card-back-category_e938be">NETWORK</p>
                  <h3 class="gpu_card-back-title_3e2415">Network Automation</h3>
                </div>
                <p class="gpu_card-back-desc_251954">
                  Intelligent automation of network operations to reduce manual
                  effort and accelerate change management.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 2 – Cybersecurity -->
          <div class="gpu_solution-card_6be91e gpu_card-image_547884">
            <div class="gpu_card-inner_093757">
              <!-- FRONT: your existing image card markup -->
              <div
                class="gpu_card-front_a1f09c"
                style="background-image: url(/images/Cyber\ Security.png)"
              >
                <div class="gpu_card-overlay_baf912"></div>
                <div class="gpu_card-image-content_4aca8c">
                  <div
                    class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                  >
                    <img
                      style="stroke: #fff"
                      src="/images/ShieldCheck.svg"
                      alt="Shield"
                    />
                  </div>
                  <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                    CYBERSECURITY
                  </p>
                  <h3 class="gpu_card-title_aad27e">
                    End to end security posture
                  </h3>
                </div>
              </div>

              <!-- BACK: light gradient card -->
              <div class="gpu_card-back_f23723">
                <div class="gpu_card-back-top_3fb120">
                  <div class="gpu_card-back-icon_7d4a0a">
                    <img src="/images/ShieldCheck-blue.svg" />
                  </div>
                  <p class="gpu_card-back-category_e938be">CYBERSECURITY</p>
                  <h3 class="gpu_card-back-title_3e2415">
                    End To End Security Posture
                  </h3>
                </div>
                <p class="gpu_card-back-desc_251954">
                  Integrated security solutions embedded across procurement and
                  deployment lifecycles.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 3 – Digital Workplace -->
          <div class="gpu_solution-card_6be91e gpu_card-image_547884">
            <div class="gpu_card-inner_093757">
              <!-- FRONT: your existing image card markup -->
              <div
                class="gpu_card-front_a1f09c"
                style="background-image: url(/images/Digital\ Workspace.png)"
              >
                <div class="gpu_card-overlay_baf912"></div>
                <div class="gpu_card-image-content_4aca8c">
                  <div
                    class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                  >
                    <img src="/images/Monitor.svg" alt="Monitor" />
                  </div>
                  <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                    DIGITAL WORKPLACE
                  </p>
                  <h3 class="gpu_card-title_aad27e">
                    Modern Collaboration Solutions
                  </h3>
                </div>
              </div>

              <!-- BACK: light gradient card -->
              <div class="gpu_card-back_f23723">
                <div class="gpu_card-back-top_3fb120">
                  <div class="gpu_card-back-icon_7d4a0a">
                    <img src="/images/Monitor-blue.svg" />
                  </div>
                  <p class="gpu_card-back-category_e938be">DIGITAL WORKPLACE</p>
                  <h3 class="gpu_card-back-title_3e2415">
                    Modern Collaboration Solutions
                  </h3>
                </div>
                <p class="gpu_card-back-desc_251954">
                  Enable secure, scalable digital workplaces with advanced
                  collaboration technologies.
                </p>
              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="gpu_solution-card_6be91e gpu_card-image_547884">
            <div class="gpu_card-inner_093757">
              <div
                class="gpu_card-front_a1f09c"
                style="background-image: url(/images/cloud-infra-bg-img.png)"
              >
                <div class="gpu_card-overlay_baf912"></div>

                <div class="gpu_card-image-content_4aca8c">
                  <div
                    class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                  >
                    <img src="/images/cloud-infra-bg-icon.svg" alt="Network" />
                  </div>

                  <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                    CLOUD
                  </p>

                  <h3 class="gpu_card-title_aad27e">
                    Cloud Infrastructure Enablement
                  </h3>
                </div>
              </div>

              <!-- BACK: light gradient card -->
              <div class="gpu_card-back_f23723">
                <div class="gpu_card-back-top_3fb120">
                  <div class="gpu_card-back-icon_7d4a0a">
                    <img src="/images/cloud-infra-bg-icon-blue.svg" />
                  </div>
                  <p class="gpu_card-back-category_e938be">CLOUD</p>
                  <h3 class="gpu_card-back-title_3e2415">
                    Cloud Infrastructure Enablement
                  </h3>
                </div>
                <p class="gpu_card-back-desc_251954">
                  Accelerate hybrid and multi-cloud adoption with scalable
                  infrastructure solutions designed for performance,
                  flexibility, and operational continuity.
                </p>
              </div>
            </div>
          </div>

          <!-- CARD 5 -->
          <!-- <div class="gpu_solution-card_6be91e gpu_card-image_547884">
                    <div class="gpu_card-inner_093757">
                        <div class="gpu_card-front_a1f09c" style="background-image: url(/images/Cyber\ Security.png)">
                            <div class="gpu_card-overlay_baf912"></div>

                            <div class="gpu_card-image-content_4aca8c">
                                <div class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e">
                                    <img src="/images/ShieldCheck.svg" alt="Shield" />
                                </div>

                                <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">SECURITY</p>

                                <h3 class="gpu_card-title_aad27e">Cloud Security Solutions</h3>
                            </div>
                        </div>

                        <div class="gpu_card-back_f23723">
                            <div class="gpu_card-back-top_3fb120">
                                <div class="gpu_card-back-icon_7d4a0a">
                                    <img src="/images/Monitor-blue.svg" />
                                </div>
                                <p class="gpu_card-back-category_e938be">DIGITAL WORKPLACE</p>
                                <h3 class="gpu_card-back-title_3e2415">Modern Collaboration Solutions</h3>
                            </div>
                            <p class="gpu_card-back-desc_251954">Modern Collaboration Solutions</p>
                        </div>
                    </div>
                </div> -->
        </div>
      </div>
    </section>

    <div class="gpu_cs-topbar_091282">
      <div class="gpu_cs-counter_3f3d69" id="topCounter">
        <span class="gpu_num_0fc3cf">01</span>
        <span class="gpu_total_fbb44b">/ 04</span>
      </div>
      <nav class="gpu_cs-nav_a2bb5c" aria-label="Case study navigation (top)">
        <button id="topPrev" aria-label="Previous">
          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15 18L9 12L15 6"
              stroke="#555"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
        <button id="topNext" aria-label="Next">
          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 18L15 12L9 6"
              stroke="#555"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
      </nav>
    </div>

    <!-- Case Studies -->
    <section class="gpu_cs-section_d62cbe">
      <!-- WATERMARK SVG BACKGROUND -->
      <div class="gpu_watermark-wrap_d5de26">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1440"
          height="555"
          viewBox="0 0 1440 555"
          fill="none"
          preserveAspectRatio="xMidYMid slice"
        >
          <path
            d="M66.969 186.502C47.7628 186.502 31.7576 180.1 18.9535 167.296C6.31783 154.492 0 138.655 0 119.786C0 100.917 6.31783 85.0802 18.9535 72.276C31.7576 59.4719 47.7628 53.0698 66.969 53.0698C79.0993 53.0698 90.2187 56.0181 100.327 61.9148C110.604 67.8114 118.523 75.6455 124.082 85.4171L90.9768 104.623C86.428 95.1887 78.2569 90.4714 66.4636 90.4714C58.2083 90.4714 51.385 93.2512 45.9938 98.8109C40.6026 104.202 37.907 111.194 37.907 119.786C37.907 128.378 40.6026 135.454 45.9938 141.014C51.385 146.405 58.2083 149.101 66.4636 149.101C78.4254 149.101 86.5964 144.384 90.9768 134.949L124.082 153.902C118.523 163.842 110.688 171.761 100.58 177.657C90.4714 183.554 79.2678 186.502 66.969 186.502Z"
            fill="url(#paint0_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M228.605 56.6078H266.512V182.964H228.605V171.087C219.676 181.364 207.124 186.502 190.951 186.502C174.272 186.502 160.035 180.1 148.242 167.296C136.449 154.324 130.552 138.487 130.552 119.786C130.552 101.085 136.449 85.3329 148.242 72.5287C160.035 59.5561 174.272 53.0698 190.951 53.0698C207.124 53.0698 219.676 58.2083 228.605 68.4853V56.6078ZM176.799 142.278C182.358 147.837 189.603 150.617 198.532 150.617C207.461 150.617 214.706 147.837 220.265 142.278C225.825 136.718 228.605 129.221 228.605 119.786C228.605 110.351 225.825 102.854 220.265 97.2946C214.706 91.7349 207.461 88.9551 198.532 88.9551C189.603 88.9551 182.358 91.7349 176.799 97.2946C171.239 102.854 168.459 110.351 168.459 119.786C168.459 129.221 171.239 136.718 176.799 142.278Z"
            fill="url(#paint1_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M328.974 93.5039C328.974 96.0311 331.079 98.137 335.291 99.8218C339.672 101.338 344.894 102.939 350.96 104.623C357.025 106.14 363.09 108.161 369.155 110.688C375.22 113.216 380.359 117.427 384.57 123.324C388.951 129.052 391.141 136.297 391.141 145.057C391.141 158.704 386.087 169.065 375.978 176.141C365.87 183.049 353.402 186.502 338.577 186.502C311.957 186.502 293.846 176.478 284.243 156.43L317.096 137.729C320.466 147.669 327.626 152.639 338.577 152.639C347.674 152.639 352.223 150.027 352.223 144.805C352.223 142.278 350.033 140.172 345.653 138.487C341.441 136.802 336.302 135.202 330.237 133.685C324.172 132.001 318.107 129.895 312.042 127.368C305.977 124.672 300.754 120.544 296.374 114.985C292.162 109.425 290.056 102.602 290.056 94.5148C290.056 81.3737 294.773 71.1809 304.208 63.9365C313.811 56.692 325.604 53.0698 339.587 53.0698C350.033 53.0698 359.552 55.4285 368.144 60.1458C376.736 64.6946 383.644 71.3494 388.867 80.1101L356.519 97.5473C352.476 90.1344 346.832 86.428 339.587 86.428C332.512 86.428 328.974 88.7866 328.974 93.5039Z"
            fill="url(#paint2_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M442.697 134.949C447.077 146.742 457.185 152.639 473.022 152.639C483.299 152.639 491.386 149.438 497.283 143.036L527.608 160.473C515.141 177.826 496.777 186.502 472.517 186.502C451.289 186.502 434.273 180.185 421.469 167.549C408.833 154.913 402.515 138.992 402.515 119.786C402.515 100.748 408.749 84.9117 421.216 72.276C433.852 59.4719 450.025 53.0698 469.737 53.0698C488.101 53.0698 503.348 59.4719 515.478 72.276C527.777 84.9117 533.926 100.748 533.926 119.786C533.926 125.177 533.421 130.232 532.41 134.949H442.697ZM441.938 106.645H496.272C492.565 93.3354 483.636 86.6807 469.484 86.6807C454.827 86.6807 445.645 93.3354 441.938 106.645Z"
            fill="url(#paint3_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M654.49 93.5039C654.49 96.0311 656.596 98.137 660.808 99.8218C665.188 101.338 670.411 102.939 676.476 104.623C682.541 106.14 688.606 108.161 694.671 110.688C700.737 113.216 705.875 117.427 710.087 123.324C714.467 129.052 716.658 136.297 716.658 145.057C716.658 158.704 711.603 169.065 701.495 176.141C691.386 183.049 678.919 186.502 664.093 186.502C637.474 186.502 619.363 176.478 609.76 156.43L642.613 137.729C645.982 147.669 653.142 152.639 664.093 152.639C673.191 152.639 677.74 150.027 677.74 144.805C677.74 142.278 675.549 140.172 671.169 138.487C666.957 136.802 661.819 135.202 655.754 133.685C649.689 132.001 643.623 129.895 637.558 127.368C631.493 124.672 626.27 120.544 621.89 114.985C617.678 109.425 615.572 102.602 615.572 94.5148C615.572 81.3737 620.29 71.1809 629.724 63.9365C639.327 56.692 651.121 53.0698 665.104 53.0698C675.55 53.0698 685.068 55.4285 693.661 60.1458C702.253 64.6946 709.16 71.3494 714.383 80.1101L682.036 97.5473C677.992 90.1344 672.349 86.428 665.104 86.428C658.028 86.428 654.49 88.7866 654.49 93.5039Z"
            fill="url(#paint4_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M805.927 92.9985H779.897V137.729C779.897 142.783 781.919 145.984 785.962 147.332C790.006 148.68 796.66 149.101 805.927 148.595V182.964C781.835 185.492 765.155 183.217 755.889 176.141C746.623 168.897 741.99 156.093 741.99 137.729V92.9985H721.773V56.6078H741.99V32.6L779.897 21.2279V56.6078H805.927V92.9985Z"
            fill="url(#paint5_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M911.484 56.6078H949.391V182.964H911.484V171.087C903.902 181.364 891.856 186.502 875.346 186.502C861.868 186.502 850.58 181.869 841.482 172.603C832.553 163.337 828.088 150.533 828.088 134.191V56.6078H865.995V128.631C865.995 136.044 868.017 141.772 872.06 145.816C876.272 149.691 881.579 151.628 887.981 151.628C895.226 151.628 900.954 149.438 905.166 145.057C909.378 140.677 911.484 134.191 911.484 125.599V56.6078Z"
            fill="url(#paint6_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1068.93 6.06512H1106.83V182.964H1068.93V171.087C1060 181.364 1047.45 186.502 1031.27 186.502C1014.59 186.502 1000.36 180.1 988.563 167.296C976.77 154.324 970.873 138.487 970.873 119.786C970.873 101.085 976.77 85.3329 988.563 72.5287C1000.36 59.5561 1014.59 53.0698 1031.27 53.0698C1047.45 53.0698 1060 58.2083 1068.93 68.4853V6.06512ZM1017.12 142.278C1022.68 147.837 1029.92 150.617 1038.85 150.617C1047.78 150.617 1055.03 147.837 1060.59 142.278C1066.15 136.718 1068.93 129.221 1068.93 119.786C1068.93 110.351 1066.15 102.854 1060.59 97.2946C1055.03 91.7349 1047.78 88.9551 1038.85 88.9551C1029.92 88.9551 1022.68 91.7349 1017.12 97.2946C1011.56 102.854 1008.78 110.351 1008.78 119.786C1008.78 129.221 1011.56 136.718 1017.12 142.278Z"
            fill="url(#paint7_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1169.52 38.9178C1165.14 43.2982 1159.83 45.4884 1153.6 45.4884C1147.36 45.4884 1141.97 43.2982 1137.42 38.9178C1133.04 34.369 1130.85 28.9778 1130.85 22.7442C1130.85 16.5106 1133.04 11.2036 1137.42 6.82326C1141.97 2.27442 1147.36 0 1153.6 0C1159.83 0 1165.14 2.27442 1169.52 6.82326C1174.07 11.2036 1176.34 16.5106 1176.34 22.7442C1176.34 28.9778 1174.07 34.369 1169.52 38.9178ZM1134.64 182.964V56.6078H1172.55V182.964H1134.64Z"
            fill="url(#paint8_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1234.15 134.949C1238.53 146.742 1248.64 152.639 1264.48 152.639C1274.76 152.639 1282.84 149.438 1288.74 143.036L1319.06 160.473C1306.6 177.826 1288.23 186.502 1263.97 186.502C1242.75 186.502 1225.73 180.185 1212.93 167.549C1200.29 154.913 1193.97 138.992 1193.97 119.786C1193.97 100.748 1200.21 84.9117 1212.67 72.276C1225.31 59.4719 1241.48 53.0698 1261.19 53.0698C1279.56 53.0698 1294.8 59.4719 1306.93 72.276C1319.23 84.9117 1325.38 100.748 1325.38 119.786C1325.38 125.177 1324.88 130.232 1323.87 134.949H1234.15ZM1233.4 106.645H1287.73C1284.02 93.3354 1275.09 86.6807 1260.94 86.6807C1246.28 86.6807 1237.1 93.3354 1233.4 106.645Z"
            fill="url(#paint9_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1377.83 93.5039C1377.83 96.0311 1379.94 98.137 1384.15 99.8218C1388.53 101.338 1393.75 102.939 1399.82 104.623C1405.88 106.14 1411.95 108.161 1418.01 110.688C1424.08 113.216 1429.22 117.427 1433.43 123.324C1437.81 129.052 1440 136.297 1440 145.057C1440 158.704 1434.95 169.065 1424.84 176.141C1414.73 183.049 1402.26 186.502 1387.44 186.502C1360.82 186.502 1342.71 176.478 1333.1 156.43L1365.96 137.729C1369.32 147.669 1376.48 152.639 1387.44 152.639C1396.53 152.639 1401.08 150.027 1401.08 144.805C1401.08 142.278 1398.89 140.172 1394.51 138.487C1390.3 136.802 1385.16 135.202 1379.1 133.685C1373.03 132.001 1366.97 129.895 1360.9 127.368C1354.84 124.672 1349.61 120.544 1345.23 114.985C1341.02 109.425 1338.91 102.602 1338.91 94.5148C1338.91 81.3737 1343.63 71.1809 1353.07 63.9365C1362.67 56.692 1374.46 53.0698 1388.45 53.0698C1398.89 53.0698 1408.41 55.4285 1417 60.1458C1425.6 64.6946 1432.5 71.3494 1437.73 80.1101L1405.38 97.5473C1401.33 90.1344 1395.69 86.428 1388.45 86.428C1381.37 86.428 1377.83 88.7866 1377.83 93.5039Z"
            fill="url(#paint10_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M66.969 370.368C47.7628 370.368 31.7576 363.966 18.9535 351.162C6.31783 338.358 0 322.521 0 303.652C0 284.783 6.31783 268.946 18.9535 256.142C31.7576 243.338 47.7628 236.936 66.969 236.936C79.0993 236.936 90.2187 239.884 100.327 245.781C110.604 251.677 118.523 259.512 124.082 269.283L90.9768 288.489C86.428 279.055 78.2569 274.337 66.4636 274.337C58.2083 274.337 51.385 277.117 45.9938 282.677C40.6026 288.068 37.907 295.06 37.907 303.652C37.907 312.244 40.6026 319.32 45.9938 324.88C51.385 330.271 58.2083 332.967 66.4636 332.967C78.4254 332.967 86.5964 328.25 90.9768 318.815L124.082 337.768C118.523 347.709 110.688 355.627 100.58 361.523C90.4714 367.42 79.2678 370.368 66.969 370.368Z"
            fill="url(#paint11_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M228.605 240.474H266.512V366.831H228.605V354.953C219.676 365.23 207.124 370.368 190.951 370.368C174.272 370.368 160.035 363.966 148.242 351.162C136.449 338.19 130.552 322.353 130.552 303.652C130.552 284.951 136.449 269.199 148.242 256.395C160.035 243.422 174.272 236.936 190.951 236.936C207.124 236.936 219.676 242.074 228.605 252.351V240.474ZM176.799 326.144C182.358 331.703 189.603 334.483 198.532 334.483C207.461 334.483 214.706 331.703 220.265 326.144C225.825 320.584 228.605 313.087 228.605 303.652C228.605 294.218 225.825 286.72 220.265 281.161C214.706 275.601 207.461 272.821 198.532 272.821C189.603 272.821 182.358 275.601 176.799 281.161C171.239 286.72 168.459 294.218 168.459 303.652C168.459 313.087 171.239 320.584 176.799 326.144Z"
            fill="url(#paint12_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M328.974 277.37C328.974 279.897 331.079 282.003 335.291 283.688C339.672 285.204 344.894 286.805 350.96 288.489C357.025 290.006 363.09 292.027 369.155 294.555C375.22 297.082 380.359 301.294 384.57 307.19C388.951 312.918 391.141 320.163 391.141 328.924C391.141 342.57 386.087 352.931 375.978 360.007C365.87 366.915 353.402 370.368 338.577 370.368C311.957 370.368 293.846 360.344 284.243 340.296L317.096 321.595C320.466 331.535 327.626 336.505 338.577 336.505C347.674 336.505 352.223 333.894 352.223 328.671C352.223 326.144 350.033 324.038 345.653 322.353C341.441 320.668 336.302 319.068 330.237 317.551C324.172 315.867 318.107 313.761 312.042 311.234C305.977 308.538 300.754 304.41 296.374 298.851C292.162 293.291 290.056 286.468 290.056 278.381C290.056 265.24 294.773 255.047 304.208 247.803C313.811 240.558 325.604 236.936 339.587 236.936C350.033 236.936 359.552 239.295 368.144 244.012C376.736 248.561 383.644 255.215 388.867 263.976L356.519 281.413C352.476 274 346.832 270.294 339.587 270.294C332.512 270.294 328.974 272.653 328.974 277.37Z"
            fill="url(#paint13_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M442.697 318.815C447.077 330.608 457.185 336.505 473.022 336.505C483.299 336.505 491.386 333.304 497.283 326.902L527.608 344.339C515.141 361.692 496.777 370.368 472.517 370.368C451.289 370.368 434.273 364.051 421.469 351.415C408.833 338.779 402.515 322.858 402.515 303.652C402.515 284.614 408.749 268.778 421.216 256.142C433.852 243.338 450.025 236.936 469.737 236.936C488.101 236.936 503.348 243.338 515.478 256.142C527.777 268.778 533.926 284.614 533.926 303.652C533.926 309.043 533.421 314.098 532.41 318.815H442.697ZM441.938 290.511H496.272C492.565 277.202 483.636 270.547 469.484 270.547C454.827 270.547 445.645 277.202 441.938 290.511Z"
            fill="url(#paint14_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M654.49 277.37C654.49 279.897 656.596 282.003 660.808 283.688C665.188 285.204 670.411 286.805 676.476 288.489C682.541 290.006 688.606 292.027 694.671 294.555C700.737 297.082 705.875 301.294 710.087 307.19C714.467 312.918 716.658 320.163 716.658 328.924C716.658 342.57 711.603 352.931 701.495 360.007C691.386 366.915 678.919 370.368 664.093 370.368C637.474 370.368 619.363 360.344 609.76 340.296L642.613 321.595C645.982 331.535 653.142 336.505 664.093 336.505C673.191 336.505 677.74 333.894 677.74 328.671C677.74 326.144 675.549 324.038 671.169 322.353C666.957 320.668 661.819 319.068 655.754 317.551C649.689 315.867 643.623 313.761 637.558 311.234C631.493 308.538 626.27 304.41 621.89 298.851C617.678 293.291 615.572 286.468 615.572 278.381C615.572 265.24 620.29 255.047 629.724 247.803C639.327 240.558 651.121 236.936 665.104 236.936C675.55 236.936 685.068 239.295 693.661 244.012C702.253 248.561 709.16 255.215 714.383 263.976L682.036 281.413C677.992 274 672.349 270.294 665.104 270.294C658.028 270.294 654.49 272.653 654.49 277.37Z"
            fill="url(#paint15_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M805.927 276.865H779.897V321.595C779.897 326.649 781.919 329.85 785.962 331.198C790.006 332.546 796.66 332.967 805.927 332.461V366.831C781.835 369.358 765.155 367.083 755.889 360.007C746.623 352.763 741.99 339.959 741.99 321.595V276.865H721.773V240.474H741.99V216.466L779.897 205.094V240.474H805.927V276.865Z"
            fill="url(#paint16_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M911.484 240.474H949.391V366.831H911.484V354.953C903.902 365.23 891.856 370.368 875.346 370.368C861.868 370.368 850.58 365.735 841.482 356.469C832.553 347.203 828.088 334.399 828.088 318.057V240.474H865.995V312.497C865.995 319.91 868.017 325.638 872.06 329.682C876.272 333.557 881.579 335.494 887.981 335.494C895.226 335.494 900.954 333.304 905.166 328.924C909.378 324.543 911.484 318.057 911.484 309.465V240.474Z"
            fill="url(#paint17_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1068.93 189.931H1106.83V366.831H1068.93V354.953C1060 365.23 1047.45 370.368 1031.27 370.368C1014.59 370.368 1000.36 363.966 988.563 351.162C976.77 338.19 970.873 322.353 970.873 303.652C970.873 284.951 976.77 269.199 988.563 256.395C1000.36 243.422 1014.59 236.936 1031.27 236.936C1047.45 236.936 1060 242.074 1068.93 252.351V189.931ZM1017.12 326.144C1022.68 331.703 1029.92 334.483 1038.85 334.483C1047.78 334.483 1055.03 331.703 1060.59 326.144C1066.15 320.584 1068.93 313.087 1068.93 303.652C1068.93 294.218 1066.15 286.72 1060.59 281.161C1055.03 275.601 1047.78 272.821 1038.85 272.821C1029.92 272.821 1022.68 275.601 1017.12 281.161C1011.56 286.72 1008.78 294.218 1008.78 303.652C1008.78 313.087 1011.56 320.584 1017.12 326.144Z"
            fill="url(#paint18_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1169.52 222.784C1165.14 227.164 1159.83 229.354 1153.6 229.354C1147.36 229.354 1141.97 227.164 1137.42 222.784C1133.04 218.235 1130.85 212.844 1130.85 206.61C1130.85 200.377 1133.04 195.07 1137.42 190.689C1141.97 186.14 1147.36 183.866 1153.6 183.866C1159.83 183.866 1165.14 186.14 1169.52 190.689C1174.07 195.07 1176.34 200.377 1176.34 206.61C1176.34 212.844 1174.07 218.235 1169.52 222.784ZM1134.64 366.831V240.474H1172.55V366.831H1134.64Z"
            fill="url(#paint19_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1234.15 318.815C1238.53 330.608 1248.64 336.505 1264.48 336.505C1274.76 336.505 1282.84 333.304 1288.74 326.902L1319.06 344.339C1306.6 361.692 1288.23 370.368 1263.97 370.368C1242.75 370.368 1225.73 364.051 1212.93 351.415C1200.29 338.779 1193.97 322.858 1193.97 303.652C1193.97 284.614 1200.21 268.778 1212.67 256.142C1225.31 243.338 1241.48 236.936 1261.19 236.936C1279.56 236.936 1294.8 243.338 1306.93 256.142C1319.23 268.778 1325.38 284.614 1325.38 303.652C1325.38 309.043 1324.88 314.098 1323.87 318.815H1234.15ZM1233.4 290.511H1287.73C1284.02 277.202 1275.09 270.547 1260.94 270.547C1246.28 270.547 1237.1 277.202 1233.4 290.511Z"
            fill="url(#paint20_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1377.83 277.37C1377.83 279.897 1379.94 282.003 1384.15 283.688C1388.53 285.204 1393.75 286.805 1399.82 288.489C1405.88 290.006 1411.95 292.027 1418.01 294.555C1424.08 297.082 1429.22 301.294 1433.43 307.19C1437.81 312.918 1440 320.163 1440 328.924C1440 342.57 1434.95 352.931 1424.84 360.007C1414.73 366.915 1402.26 370.368 1387.44 370.368C1360.82 370.368 1342.71 360.344 1333.1 340.296L1365.96 321.595C1369.32 331.535 1376.48 336.505 1387.44 336.505C1396.53 336.505 1401.08 333.894 1401.08 328.671C1401.08 326.144 1398.89 324.038 1394.51 322.353C1390.3 320.668 1385.16 319.068 1379.1 317.551C1373.03 315.867 1366.97 313.761 1360.9 311.234C1354.84 308.538 1349.61 304.41 1345.23 298.851C1341.02 293.291 1338.91 286.468 1338.91 278.381C1338.91 265.24 1343.63 255.047 1353.07 247.803C1362.67 240.558 1374.46 236.936 1388.45 236.936C1398.89 236.936 1408.41 239.295 1417 244.012C1425.6 248.561 1432.5 255.215 1437.73 263.976L1405.38 281.413C1401.33 274 1395.69 270.294 1388.45 270.294C1381.37 270.294 1377.83 272.653 1377.83 277.37Z"
            fill="url(#paint21_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M66.969 554.235C47.7628 554.235 31.7576 547.832 18.9535 535.028C6.31783 522.224 0 506.387 0 487.518C0 468.649 6.31783 452.812 18.9535 440.008C31.7576 427.204 47.7628 420.802 66.969 420.802C79.0993 420.802 90.2187 423.75 100.327 429.647C110.604 435.544 118.523 443.378 124.082 453.149L90.9768 472.355C86.428 462.921 78.2569 458.203 66.4636 458.203C58.2083 458.203 51.385 460.983 45.9938 466.543C40.6026 471.934 37.907 478.926 37.907 487.518C37.907 496.11 40.6026 503.186 45.9938 508.746C51.385 514.137 58.2083 516.833 66.4636 516.833C78.4254 516.833 86.5964 512.116 90.9768 502.681L124.082 521.635C118.523 531.575 110.688 539.493 100.58 545.39C90.4714 551.286 79.2678 554.235 66.969 554.235Z"
            fill="url(#paint22_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M228.605 424.34H266.512V550.697H228.605V538.819C219.676 549.096 207.124 554.235 190.951 554.235C174.272 554.235 160.035 547.832 148.242 535.028C136.449 522.056 130.552 506.219 130.552 487.518C130.552 468.817 136.449 453.065 148.242 440.261C160.035 427.288 174.272 420.802 190.951 420.802C207.124 420.802 219.676 425.94 228.605 436.217V424.34ZM176.799 510.01C182.358 515.569 189.603 518.349 198.532 518.349C207.461 518.349 214.706 515.569 220.265 510.01C225.825 504.45 228.605 496.953 228.605 487.518C228.605 478.084 225.825 470.586 220.265 465.027C214.706 459.467 207.461 456.687 198.532 456.687C189.603 456.687 182.358 459.467 176.799 465.027C171.239 470.586 168.459 478.084 168.459 487.518C168.459 496.953 171.239 504.45 176.799 510.01Z"
            fill="url(#paint23_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M328.974 461.236C328.974 463.763 331.079 465.869 335.291 467.554C339.672 469.07 344.894 470.671 350.96 472.355C357.025 473.872 363.09 475.893 369.155 478.421C375.22 480.948 380.359 485.16 384.57 491.056C388.951 496.784 391.141 504.029 391.141 512.79C391.141 526.436 386.087 536.797 375.978 543.873C365.87 550.781 353.402 554.235 338.577 554.235C311.957 554.235 293.846 544.21 284.243 524.162L317.096 505.461C320.466 515.401 327.626 520.371 338.577 520.371C347.674 520.371 352.223 517.76 352.223 512.537C352.223 510.01 350.033 507.904 345.653 506.219C341.441 504.534 336.302 502.934 330.237 501.417C324.172 499.733 318.107 497.627 312.042 495.1C305.977 492.404 300.754 488.276 296.374 482.717C292.162 477.157 290.056 470.334 290.056 462.247C290.056 449.106 294.773 438.913 304.208 431.669C313.811 424.424 325.604 420.802 339.587 420.802C350.033 420.802 359.552 423.161 368.144 427.878C376.736 432.427 383.644 439.082 388.867 447.842L356.519 465.279C352.476 457.867 346.832 454.16 339.587 454.16C332.512 454.16 328.974 456.519 328.974 461.236Z"
            fill="url(#paint24_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M442.697 502.681C447.077 514.474 457.185 520.371 473.022 520.371C483.299 520.371 491.386 517.17 497.283 510.768L527.608 528.205C515.141 545.558 496.777 554.235 472.517 554.235C451.289 554.235 434.273 547.917 421.469 535.281C408.833 522.645 402.515 506.724 402.515 487.518C402.515 468.48 408.749 452.644 421.216 440.008C433.852 427.204 450.025 420.802 469.737 420.802C488.101 420.802 503.348 427.204 515.478 440.008C527.777 452.644 533.926 468.48 533.926 487.518C533.926 492.909 533.421 497.964 532.41 502.681H442.697ZM441.938 474.377H496.272C492.565 461.068 483.636 454.413 469.484 454.413C454.827 454.413 445.645 461.068 441.938 474.377Z"
            fill="url(#paint25_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M654.49 461.236C654.49 463.763 656.596 465.869 660.808 467.554C665.188 469.07 670.411 470.671 676.476 472.355C682.541 473.872 688.606 475.893 694.671 478.421C700.737 480.948 705.875 485.16 710.087 491.056C714.467 496.784 716.658 504.029 716.658 512.79C716.658 526.436 711.603 536.797 701.495 543.873C691.386 550.781 678.919 554.235 664.093 554.235C637.474 554.235 619.363 544.21 609.76 524.162L642.613 505.461C645.982 515.401 653.142 520.371 664.093 520.371C673.191 520.371 677.74 517.76 677.74 512.537C677.74 510.01 675.549 507.904 671.169 506.219C666.957 504.534 661.819 502.934 655.754 501.417C649.689 499.733 643.623 497.627 637.558 495.1C631.493 492.404 626.27 488.276 621.89 482.717C617.678 477.157 615.572 470.334 615.572 462.247C615.572 449.106 620.29 438.913 629.724 431.669C639.327 424.424 651.121 420.802 665.104 420.802C675.55 420.802 685.068 423.161 693.661 427.878C702.253 432.427 709.16 439.082 714.383 447.842L682.036 465.279C677.992 457.867 672.349 454.16 665.104 454.16C658.028 454.16 654.49 456.519 654.49 461.236Z"
            fill="url(#paint26_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M805.927 460.731H779.897V505.461C779.897 510.515 781.919 513.716 785.962 515.064C790.006 516.412 796.66 516.833 805.927 516.328V550.697C781.835 553.224 765.155 550.949 755.889 543.873C746.623 536.629 741.99 523.825 741.99 505.461V460.731H721.773V424.34H741.99V400.332L779.897 388.96V424.34H805.927V460.731Z"
            fill="url(#paint27_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M911.484 424.34H949.391V550.697H911.484V538.819C903.902 549.096 891.856 554.235 875.346 554.235C861.868 554.235 850.58 549.602 841.482 540.335C832.553 531.069 828.088 518.265 828.088 501.923V424.34H865.995V496.363C865.995 503.776 868.017 509.504 872.06 513.548C876.272 517.423 881.579 519.36 887.981 519.36C895.226 519.36 900.954 517.17 905.166 512.79C909.378 508.409 911.484 501.923 911.484 493.331V424.34Z"
            fill="url(#paint28_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1068.93 373.797H1106.83V550.697H1068.93V538.819C1060 549.096 1047.45 554.235 1031.27 554.235C1014.59 554.235 1000.36 547.832 988.563 535.028C976.77 522.056 970.873 506.219 970.873 487.518C970.873 468.817 976.77 453.065 988.563 440.261C1000.36 427.288 1014.59 420.802 1031.27 420.802C1047.45 420.802 1060 425.94 1068.93 436.217V373.797ZM1017.12 510.01C1022.68 515.569 1029.92 518.349 1038.85 518.349C1047.78 518.349 1055.03 515.569 1060.59 510.01C1066.15 504.45 1068.93 496.953 1068.93 487.518C1068.93 478.084 1066.15 470.586 1060.59 465.027C1055.03 459.467 1047.78 456.687 1038.85 456.687C1029.92 456.687 1022.68 459.467 1017.12 465.027C1011.56 470.586 1008.78 478.084 1008.78 487.518C1008.78 496.953 1011.56 504.45 1017.12 510.01Z"
            fill="url(#paint29_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1169.52 406.65C1165.14 411.03 1159.83 413.221 1153.6 413.221C1147.36 413.221 1141.97 411.03 1137.42 406.65C1133.04 402.101 1130.85 396.71 1130.85 390.476C1130.85 384.243 1133.04 378.936 1137.42 374.555C1141.97 370.007 1147.36 367.732 1153.6 367.732C1159.83 367.732 1165.14 370.007 1169.52 374.555C1174.07 378.936 1176.34 384.243 1176.34 390.476C1176.34 396.71 1174.07 402.101 1169.52 406.65ZM1134.64 550.697V424.34H1172.55V550.697H1134.64Z"
            fill="url(#paint30_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1234.15 502.681C1238.53 514.474 1248.64 520.371 1264.48 520.371C1274.76 520.371 1282.84 517.17 1288.74 510.768L1319.06 528.205C1306.6 545.558 1288.23 554.235 1263.97 554.235C1242.75 554.235 1225.73 547.917 1212.93 535.281C1200.29 522.645 1193.97 506.724 1193.97 487.518C1193.97 468.48 1200.21 452.644 1212.67 440.008C1225.31 427.204 1241.48 420.802 1261.19 420.802C1279.56 420.802 1294.8 427.204 1306.93 440.008C1319.23 452.644 1325.38 468.48 1325.38 487.518C1325.38 492.909 1324.88 497.964 1323.87 502.681H1234.15ZM1233.4 474.377H1287.73C1284.02 461.068 1275.09 454.413 1260.94 454.413C1246.28 454.413 1237.1 461.068 1233.4 474.377Z"
            fill="url(#paint31_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <path
            d="M1377.83 461.236C1377.83 463.763 1379.94 465.869 1384.15 467.554C1388.53 469.07 1393.75 470.671 1399.82 472.355C1405.88 473.872 1411.95 475.893 1418.01 478.421C1424.08 480.948 1429.22 485.16 1433.43 491.056C1437.81 496.784 1440 504.029 1440 512.79C1440 526.436 1434.95 536.797 1424.84 543.873C1414.73 550.781 1402.26 554.235 1387.44 554.235C1360.82 554.235 1342.71 544.21 1333.1 524.162L1365.96 505.461C1369.32 515.401 1376.48 520.371 1387.44 520.371C1396.53 520.371 1401.08 517.76 1401.08 512.537C1401.08 510.01 1398.89 507.904 1394.51 506.219C1390.3 504.534 1385.16 502.934 1379.1 501.417C1373.03 499.733 1366.97 497.627 1360.9 495.1C1354.84 492.404 1349.61 488.276 1345.23 482.717C1341.02 477.157 1338.91 470.334 1338.91 462.247C1338.91 449.106 1343.63 455.047 1353.07 431.669C1362.67 424.424 1374.46 420.802 1388.45 420.802C1398.89 420.802 1408.41 423.161 1417 427.878C1425.6 432.427 1432.5 439.082 1437.73 447.842L1405.38 465.279C1401.33 457.867 1395.69 454.16 1388.45 454.16C1381.37 454.16 1377.83 456.519 1377.83 461.236Z"
            fill="url(#paint32_linear_1666_8962)"
            fill-opacity="0.12"
          />
          <defs>
            <linearGradient
              id="paint0_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint2_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint3_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint4_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint5_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint6_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint7_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint8_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint9_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint10_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint11_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint12_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint13_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint14_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint15_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint16_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint17_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint18_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint19_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint20_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint21_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint22_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint23_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint24_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint25_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint26_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint27_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint28_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint29_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint30_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint31_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint32_linear_1666_8962"
              x1="720"
              y1="0"
              x2="720"
              y2="651"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="1" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- MAIN BODY -->
      <div class="gpu_cs-body_a130e6 gpu_cs-slide_9847fc" id="slideContent">
        <!-- LEFT -->
        <div class="gpu_cs-left_ae96c4">
          <p class="gpu_tag_e4d23e" id="leftTag">
            Global Enterprise Network Transformation
          </p>
          <h2 id="leftTitle">
            Deployed a fully automated SD-WAN and network monitoring solution
            for a Fortune 500 enterprise across 40+ countries.
          </h2>
          <button class="gpu_btn-all_a3ae09">
            <span class="gpu_hero-btn-dot_e7fa40">
              <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 6H10M10 6L6.5 2.5M10 6L6.5 9.5"
                  stroke="#fff"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
            View All Cases
          </button>
        </div>

        <!-- RIGHT CARD -->
        <div class="gpu_cs-right_08e5cb">
          <article class="gpu_cs-card_8ac733">
            <img
              id="cardImg"
              src="/images/secure-cloud.png"
              alt="Secure Cloud Deployment For BFSI"
            />
            <div class="gpu_cs-card-overlay_3877b1"></div>
            <div class="gpu_cs-card-content_db6659">
              <p class="gpu_tag_e4d23e" id="cardTag">
                Secure Cloud Deployment For BFSI
              </p>
              <h3 id="cardTitle">
                Designed and executed a zero-trust security framework for a
                leading financial institution's cloud migration programme.
              </h3>
              <button class="gpu_hero-btn_7bd1ba">
                <span class="gpu_hero-btn-dot_e7fa40">
                  <svg
                    width="11"
                    height="11"
                    viewBox="0 0 12 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2 6H10M10 6L6.5 2.5M10 6L6.5 9.5"
                      stroke="#fff"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </span>
                View Case Study
              </button>
            </div>
          </article>
        </div>
      </div>

      <!-- BOTTOM BAR -->
      <div class="gpu_cs-bottombar_d866f4">
        <div class="gpu_cs-counter_3f3d69" id="bottomCounter">
          <span class="gpu_num_0fc3cf">01</span>
          <span class="gpu_total_fbb44b">/ 03</span>
        </div>
        <nav
          class="gpu_cs-nav_a2bb5c"
          aria-label="Case study navigation (bottom)"
        >
          <button id="botPrev" aria-label="Previous">
            <svg
              width="14"
              height="14"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 18L9 12L15 6"
                stroke="#555"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <button id="botNext" aria-label="Next">
            <svg
              width="14"
              height="14"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 18L15 12L9 6"
                stroke="#555"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </nav>
      </div>
    </section>

    <section class="gpu_global-section_b0f5c4">
      <div class="gpu_global-delivery-card_8b690b">
        <!-- LEFT INFO CARD -->
        <div class="gpu_global-info-card_c53052">
          <h3 class="gpu_global-info-title_526af7">
            Global Delivery
            <br />
            Footprint
          </h3>

          <p class="gpu_global-info-desc_330dbe">
            Consistent delivery across APAC, EMEA, and the Americas.
          </p>
        </div>

        <!-- STATS -->
        <div class="gpu_global-stats-wrapper_2a40ad">
          <div class="gpu_global-stat-item_413005">
            <h2 class="gpu_global-stat-number_fbac1e">2,900+</h2>
            <p class="gpu_global-stat-label_36c596">Deployments Globally</p>
          </div>

          <div class="gpu_global-stat-item_413005">
            <h2 class="gpu_global-stat-number_fbac1e">50+</h2>
            <p class="gpu_global-stat-label_36c596">Countries Served</p>
          </div>

          <div class="gpu_global-stat-item_413005">
            <h2 class="gpu_global-stat-number_fbac1e">03</h2>
            <p class="gpu_global-stat-label_36c596">Major Regions</p>
          </div>

          <div class="gpu_global-stat-item_413005">
            <h2 class="gpu_global-stat-number_fbac1e">98%</h2>
            <p class="gpu_global-stat-label_36c596">Client Satisfaction</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solutions -->

    <div class="gpu_solution-page_8b4fc5">
      <!-- WATERMARK BACKGROUND TEXT -->
      <div class="gpu_watermark_1806b2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1435"
          height="783"
          viewBox="0 0 1435 783"
          fill="none"
          preserveAspectRatio="xMidYMid slice"
        >
          <path
            d="M61.5869 130.796C61.5869 134.275 64.4865 137.174 70.2856 139.493C76.3167 141.58 83.5077 143.783 91.8584 146.102C100.209 148.189 108.56 150.972 116.911 154.451C125.262 157.93 132.336 163.727 138.136 171.844C144.167 179.729 147.182 189.701 147.182 201.76C147.182 220.545 140.223 234.807 126.305 244.547C112.387 254.056 95.2219 258.81 74.809 258.81C38.1584 258.81 13.222 245.011 0 217.414L45.2333 191.672C49.8726 205.355 59.7312 212.196 74.809 212.196C87.3351 212.196 93.5982 208.602 93.5982 201.412C93.5982 197.934 90.5826 195.035 84.5515 192.716C78.7524 190.397 71.6774 188.194 63.3266 186.107C54.9759 183.787 46.6251 180.889 38.2743 177.41C29.9236 173.699 22.7326 168.018 16.7015 160.365C10.9024 152.712 8.00282 143.319 8.00282 132.188C8.00282 114.099 14.4979 100.068 27.4879 90.0964C40.71 80.1244 56.9476 75.1383 76.2007 75.1383C90.5826 75.1383 103.689 78.385 115.519 84.8785C127.349 91.14 136.86 100.3 144.051 112.36L99.5133 136.362C93.9461 126.158 86.1753 121.056 76.2007 121.056C66.4582 121.056 61.5869 124.303 61.5869 130.796Z"
            fill="url(#paint0_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M320.463 232.372C302.602 249.997 280.797 258.81 255.049 258.81C229.301 258.81 207.496 249.997 189.635 232.372C171.773 214.515 162.843 192.716 162.843 166.974C162.843 141.232 171.773 119.549 189.635 101.924C207.496 84.0668 229.301 75.1383 255.049 75.1383C280.797 75.1383 302.602 84.0668 320.463 101.924C338.325 119.549 347.255 141.232 347.255 166.974C347.255 192.716 338.325 214.515 320.463 232.372ZM226.517 196.542C234.172 204.195 243.683 208.022 255.049 208.022C266.415 208.022 275.926 204.195 283.581 196.542C291.236 188.889 295.063 179.033 295.063 166.974C295.063 154.915 291.236 145.059 283.581 137.406C275.926 129.753 266.415 125.926 255.049 125.926C243.683 125.926 234.172 129.753 226.517 137.406C218.862 145.059 215.035 154.915 215.035 166.974C215.035 179.033 218.862 188.889 226.517 196.542Z"
            fill="url(#paint1_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M376.777 253.94V0H428.969V253.94H376.777Z"
            fill="url(#paint2_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M579.549 80.0084H631.742V253.94H579.549V237.59C569.111 251.737 552.525 258.81 529.793 258.81C511.235 258.81 495.694 252.432 483.167 239.677C470.873 226.922 464.726 209.297 464.726 186.802V80.0084H516.919V179.149C516.919 189.353 519.702 197.238 525.269 202.804C531.068 208.138 538.375 210.805 547.19 210.805C557.165 210.805 565.051 207.79 570.851 201.76C576.65 195.731 579.549 186.802 579.549 174.975V80.0084Z"
            fill="url(#paint3_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M771.968 130.101H736.129V191.672C736.129 198.63 738.912 203.036 744.48 204.891C750.047 206.746 759.209 207.326 771.968 206.63V253.94C738.796 257.418 715.832 254.288 703.074 244.547C690.316 234.575 683.937 216.95 683.937 191.672V130.101H656.101V80.0084H683.937V46.9614L736.129 31.3076V80.0084H771.968V130.101Z"
            fill="url(#paint4_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M849.536 55.658C843.504 61.6876 836.198 64.7024 827.615 64.7024C819.032 64.7024 811.609 61.6876 805.346 55.658C799.315 49.3965 796.299 41.9754 796.299 33.3948C796.299 24.8142 799.315 17.5091 805.346 11.4795C811.609 5.21793 819.032 2.08717 827.615 2.08717C836.198 2.08717 843.504 5.21793 849.536 11.4795C855.799 17.5091 858.93 24.8142 858.93 33.3948C858.93 41.9754 855.799 49.3965 849.536 55.658ZM801.519 253.94V80.0084H853.711V253.94H801.519Z"
            fill="url(#paint5_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1040.83 232.372C1022.96 249.997 1001.16 258.81 975.411 258.81C949.663 258.81 927.858 249.997 909.997 232.372C892.136 214.515 883.205 192.716 883.205 166.974C883.205 141.232 892.136 119.549 909.997 101.924C927.858 84.0668 949.663 75.1383 975.411 75.1383C1001.16 75.1383 1022.96 84.0668 1040.83 101.924C1058.69 119.549 1067.62 141.232 1067.62 166.974C1067.62 192.716 1058.69 214.515 1040.83 232.372ZM946.88 196.542C954.534 204.195 964.045 208.022 975.411 208.022C986.778 208.022 996.288 204.195 1003.94 196.542C1011.6 188.889 1015.43 179.033 1015.43 166.974C1015.43 154.915 1011.6 145.059 1003.94 137.406C996.288 129.753 986.778 125.926 975.411 125.926C964.045 125.926 954.534 129.753 946.88 137.406C939.225 145.059 935.397 154.915 935.397 166.974C935.397 179.033 939.225 188.889 946.88 196.542Z"
            fill="url(#paint6_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1199.09 75.1383C1217.65 75.1383 1233.07 81.5158 1245.37 94.2708C1257.89 107.026 1264.15 124.651 1264.15 147.146V253.94H1211.96V154.799C1211.96 144.595 1209.06 136.826 1203.26 131.492C1197.7 125.926 1190.51 123.143 1181.69 123.143C1171.72 123.143 1163.83 126.158 1158.03 132.188C1152.23 138.217 1149.33 147.146 1149.33 158.973V253.94H1097.14V80.0084H1149.33V96.3579C1159.77 82.2115 1176.36 75.1383 1199.09 75.1383Z"
            fill="url(#paint7_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1349.4 130.796C1349.4 134.275 1352.3 137.174 1358.1 139.493C1364.13 141.58 1371.33 143.783 1379.68 146.102C1388.03 148.189 1396.38 150.972 1404.73 154.451C1413.08 157.93 1420.15 163.727 1425.95 171.844C1431.98 179.729 1435 189.701 1435 201.76C1435 220.545 1428.04 234.807 1414.12 244.547C1400.21 254.056 1383.04 258.81 1362.63 258.81C1325.98 258.81 1301.04 245.011 1287.82 217.414L1333.05 191.672C1337.69 205.355 1347.55 212.196 1362.63 212.196C1375.15 212.196 1381.42 208.602 1381.42 201.412C1381.42 197.934 1378.4 195.035 1372.37 192.716C1366.57 190.397 1359.5 188.194 1351.14 186.107C1342.79 183.787 1334.44 180.889 1326.09 177.41C1317.74 173.699 1310.55 168.018 1304.52 160.365C1298.72 152.712 1295.82 143.319 1295.82 132.188C1295.82 114.099 1302.32 100.068 1315.31 90.0964C1328.53 80.1244 1344.77 75.1383 1364.02 75.1383C1378.4 75.1383 1391.51 78.385 1403.34 84.8785C1415.17 91.14 1424.68 100.3 1431.87 112.36L1387.33 136.362C1381.76 126.158 1373.99 121.056 1364.02 121.056C1354.28 121.056 1349.4 124.303 1349.4 130.796Z"
            fill="url(#paint8_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M61.5869 392.891C61.5869 396.37 64.4865 399.269 70.2856 401.588C76.3167 403.675 83.5077 405.878 91.8584 408.197C100.209 410.285 108.56 413.068 116.911 416.546C125.262 420.025 132.336 425.822 138.136 433.939C144.167 441.824 147.182 451.796 147.182 463.855C147.182 482.64 140.223 496.902 126.305 506.643C112.387 516.151 95.2219 520.905 74.809 520.905C38.1584 520.905 13.222 507.106 0 479.509L45.2333 453.767C49.8726 467.45 59.7312 474.291 74.809 474.291C87.3351 474.291 93.5982 470.697 93.5982 463.508C93.5982 460.029 90.5826 457.13 84.5515 454.811C78.7524 452.492 71.6774 450.289 63.3266 448.202C54.9759 445.883 46.6251 442.984 38.2743 439.505C29.9236 435.795 22.7326 430.113 16.7015 422.46C10.9024 414.807 8.00282 405.414 8.00282 394.283C8.00282 376.194 14.4979 362.164 27.4879 352.192C40.71 342.219 56.9476 337.233 76.2007 337.233C90.5826 337.233 103.689 340.48 115.519 346.974C127.349 353.235 136.86 362.395 144.051 374.455L99.5133 398.457C93.9461 388.253 86.1753 383.151 76.2007 383.151C66.4582 383.151 61.5869 386.398 61.5869 392.891Z"
            fill="url(#paint9_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M320.463 494.467C302.602 512.092 280.797 520.905 255.049 520.905C229.301 520.905 207.496 512.092 189.635 494.467C171.773 476.61 162.843 454.811 162.843 429.069C162.843 403.327 171.773 381.644 189.635 364.019C207.496 346.162 229.301 337.233 255.049 337.233C280.797 337.233 302.602 346.162 320.463 364.019C338.325 381.644 347.255 403.327 347.255 429.069C347.255 454.811 338.325 476.61 320.463 494.467ZM226.517 458.638C234.172 466.29 243.683 470.117 255.049 470.117C266.415 470.117 275.926 466.29 283.581 458.638C291.236 450.985 295.063 441.128 295.063 429.069C295.063 417.01 291.236 407.154 283.581 399.501C275.926 391.848 266.415 388.021 255.049 388.021C243.683 388.021 234.172 391.848 226.517 399.501C218.862 407.154 215.035 417.01 215.035 429.069C215.035 441.128 218.862 450.985 226.517 458.638Z"
            fill="url(#paint10_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M376.777 516.035V262.095H428.969V516.035H376.777Z"
            fill="url(#paint11_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M579.549 342.104H631.742V516.035H579.549V499.685C569.111 513.832 552.525 520.905 529.793 520.905C511.235 520.905 495.694 514.527 483.167 501.772C470.873 489.017 464.726 471.392 464.726 448.897V342.104H516.919V441.244C516.919 451.448 519.702 459.333 525.269 464.899C531.068 470.233 538.375 472.9 547.19 472.9C557.165 472.9 565.051 469.885 570.851 463.855C576.65 457.826 579.549 448.897 579.549 437.07V342.104Z"
            fill="url(#paint12_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M771.968 392.196H736.129V453.767C736.129 460.725 738.912 465.131 744.48 466.986C750.047 468.841 759.209 469.421 771.968 468.725V516.035C738.796 519.513 715.832 516.383 703.074 506.643C690.316 496.67 683.937 479.045 683.937 453.767V392.196H656.101V342.104H683.937V309.057L736.129 293.403V342.104H771.968V392.196Z"
            fill="url(#paint13_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M849.536 317.753C843.504 323.783 836.198 326.798 827.615 326.798C819.032 326.798 811.609 323.783 805.346 317.753C799.315 311.492 796.299 304.071 796.299 295.49C796.299 286.909 799.315 279.604 805.346 273.575C811.609 267.313 819.032 264.182 827.615 264.182C836.198 264.182 843.504 267.313 849.536 273.575C855.799 279.604 858.93 286.909 858.93 295.49C858.93 304.071 855.799 311.492 849.536 317.753ZM801.519 516.035V342.104H853.711V516.035H801.519Z"
            fill="url(#paint14_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1040.83 494.467C1022.96 512.092 1001.16 520.905 975.411 520.905C949.663 520.905 927.858 512.092 909.997 494.467C892.136 476.61 883.205 454.811 883.205 429.069C883.205 403.327 892.136 381.644 909.997 364.019C927.858 346.162 949.663 337.233 975.411 337.233C1001.16 337.233 1022.96 346.162 1040.83 364.019C1058.69 381.644 1067.62 403.327 1067.62 429.069C1067.62 454.811 1058.69 476.61 1040.83 494.467ZM946.88 458.638C954.534 466.29 964.045 470.117 975.411 470.117C986.778 470.117 996.288 466.29 1003.94 458.638C1011.6 450.985 1015.43 441.128 1015.43 429.069C1015.43 417.01 1011.6 407.154 1003.94 399.501C996.288 391.848 986.778 388.021 975.411 388.021C964.045 388.021 954.534 391.848 946.88 399.501C939.225 407.154 935.397 417.01 935.397 429.069C935.397 441.128 939.225 450.985 946.88 458.638Z"
            fill="url(#paint15_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1199.09 337.233C1217.65 337.233 1233.07 343.611 1245.37 356.366C1257.89 369.121 1264.15 386.746 1264.15 409.241V516.035H1211.96V416.894C1211.96 406.69 1209.06 398.921 1203.26 393.587C1197.7 388.021 1190.51 385.238 1181.69 385.238C1171.72 385.238 1163.83 388.253 1158.03 394.283C1152.23 400.312 1149.33 409.241 1149.33 421.068V516.035H1097.14V342.104H1149.33V358.453C1159.77 344.307 1176.36 337.233 1199.09 337.233Z"
            fill="url(#paint16_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1349.4 392.891C1349.4 396.37 1352.3 399.269 1358.1 401.588C1364.13 403.675 1371.33 405.878 1379.68 408.197C1388.03 410.285 1396.38 413.068 1404.73 416.546C1413.08 420.025 1420.15 425.822 1425.95 433.939C1431.98 441.824 1435 451.796 1435 463.855C1435 482.64 1428.04 496.902 1414.12 506.643C1400.21 516.151 1383.04 520.905 1362.63 520.905C1325.98 520.905 1301.04 507.106 1287.82 479.509L1333.05 453.767C1337.69 467.45 1347.55 474.291 1362.63 474.291C1375.15 474.291 1381.42 470.697 1381.42 463.508C1381.42 460.029 1378.4 457.13 1372.37 454.811C1366.57 452.492 1359.5 450.289 1351.14 448.202C1342.79 445.883 1334.44 442.984 1326.09 439.505C1317.74 435.795 1310.55 430.113 1304.52 422.46C1298.72 414.807 1295.82 405.414 1295.82 394.283C1295.82 376.194 1302.32 362.164 1315.31 352.192C1328.53 342.219 1344.77 337.233 1364.02 337.233C1378.4 337.233 1391.51 340.48 1403.34 346.974C1415.17 353.235 1424.68 362.395 1431.87 374.455L1387.33 398.457C1381.76 388.253 1373.99 383.151 1364.02 383.151C1354.28 383.151 1349.4 386.398 1349.4 392.891Z"
            fill="url(#paint17_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M61.5869 654.987C61.5869 658.465 64.4865 661.364 70.2856 663.683C76.3167 665.77 83.5077 667.973 91.8584 670.293C100.209 672.38 108.56 675.163 116.911 678.641C125.262 682.12 132.336 687.918 138.136 696.034C144.167 703.919 147.182 713.891 147.182 725.951C147.182 744.735 140.223 758.997 126.305 768.738C112.387 778.246 95.2219 783 74.809 783C38.1584 783 13.222 769.201 0 741.604L45.2333 715.863C49.8726 729.545 59.7312 736.386 74.809 736.386C87.3351 736.386 93.5982 732.792 93.5982 725.603C93.5982 722.124 90.5826 719.225 84.5515 716.906C78.7524 714.587 71.6774 712.384 63.3266 710.297C54.9759 707.978 46.6251 705.079 38.2743 701.6C29.9236 697.89 22.7326 692.208 16.7015 684.555C10.9024 676.902 8.00282 667.51 8.00282 656.378C8.00282 638.289 14.4979 624.259 27.4879 614.287C40.71 604.315 56.9476 599.329 76.2007 599.329C90.5826 599.329 103.689 602.575 115.519 609.069C127.349 615.33 136.86 624.491 144.051 636.55L99.5133 660.552C93.9461 650.348 86.1753 645.246 76.2007 645.246C66.4582 645.246 61.5869 648.493 61.5869 654.987Z"
            fill="url(#paint18_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M320.463 756.562C302.602 774.187 280.797 783 255.049 783C229.301 783 207.496 774.187 189.635 756.562C171.773 738.706 162.843 716.906 162.843 691.164C162.843 665.422 171.773 643.739 189.635 626.114C207.496 608.257 229.301 599.329 255.049 599.329C280.797 599.329 302.602 608.257 320.463 626.114C338.325 643.739 347.255 665.422 347.255 691.164C347.255 716.906 338.325 738.706 320.463 756.562ZM226.517 720.733C234.172 728.386 243.683 732.212 255.049 732.212C266.415 732.212 275.926 728.386 283.581 720.733C291.236 713.08 295.063 703.224 295.063 691.164C295.063 679.105 291.236 669.249 283.581 661.596C275.926 653.943 266.415 650.116 255.049 650.116C243.683 650.116 234.172 653.943 226.517 661.596C218.862 669.249 215.035 679.105 215.035 691.164C215.035 703.224 218.862 713.08 226.517 720.733Z"
            fill="url(#paint19_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M376.777 778.13V524.19H428.969V778.13H376.777Z"
            fill="url(#paint20_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M579.549 604.199H631.742V778.13H579.549V761.78C569.111 775.927 552.525 783 529.793 783C511.235 783 495.694 776.622 483.167 763.868C470.873 751.113 464.726 733.488 464.726 710.992V604.199H516.919V703.339C516.919 713.543 519.702 721.428 525.269 726.994C531.068 732.328 538.375 734.995 547.19 734.995C557.165 734.995 565.051 731.98 570.851 725.951C576.65 719.921 579.549 710.992 579.549 699.165V604.199Z"
            fill="url(#paint21_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M771.968 654.291H736.129V715.863C736.129 722.82 738.912 727.226 744.48 729.081C750.047 730.937 759.209 731.516 771.968 730.821V778.13C738.796 781.609 715.832 778.478 703.074 768.738C690.316 758.766 683.937 741.141 683.937 715.863V654.291H656.101V604.199H683.937V571.152L736.129 555.498V604.199H771.968V654.291Z"
            fill="url(#paint22_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M849.536 579.848C843.504 585.878 836.198 588.893 827.615 588.893C819.032 588.893 811.609 585.878 805.346 579.848C799.315 573.587 796.299 566.166 796.299 557.585C796.299 549.004 799.315 541.699 805.346 535.67C811.609 529.408 819.032 526.277 827.615 526.277C836.198 526.277 843.504 529.408 849.536 535.67C855.799 541.699 858.93 549.004 858.93 557.585C858.93 566.166 855.799 573.587 849.536 579.848ZM801.519 778.13V604.199H853.711V778.13H801.519Z"
            fill="url(#paint23_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1040.83 756.562C1022.96 774.187 1001.16 783 975.411 783C949.663 783 927.858 774.187 909.997 756.562C892.136 738.706 883.205 716.906 883.205 691.164C883.205 665.422 892.136 643.739 909.997 626.114C927.858 608.257 949.663 599.329 975.411 599.329C1001.16 599.329 1022.96 608.257 1040.83 626.114C1058.69 643.739 1067.62 665.422 1067.62 691.164C1067.62 716.906 1058.69 738.706 1040.83 756.562ZM946.88 720.733C954.534 728.386 964.045 732.212 975.411 732.212C986.778 732.212 996.288 728.386 1003.94 720.733C1011.6 713.08 1015.43 703.224 1015.43 691.164C1015.43 679.105 1011.6 669.249 1003.94 661.596C996.288 653.943 986.778 650.116 975.411 650.116C964.045 650.116 954.534 653.943 946.88 661.596C939.225 669.249 935.397 679.105 935.397 691.164C935.397 703.224 939.225 713.08 946.88 720.733Z"
            fill="url(#paint24_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1199.09 599.329C1217.65 599.329 1233.07 605.706 1245.37 618.461C1257.89 631.216 1264.15 648.841 1264.15 671.336V778.13H1211.96V678.989C1211.96 668.785 1209.06 661.016 1203.26 655.682C1197.7 650.116 1190.51 647.334 1181.69 647.334C1171.72 647.334 1163.83 650.348 1158.03 656.378C1152.23 662.408 1149.33 671.336 1149.33 683.163V778.13H1097.14V604.199H1149.33V620.548C1159.77 606.402 1176.36 599.329 1199.09 599.329Z"
            fill="url(#paint25_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <path
            d="M1349.4 654.987C1349.4 658.465 1352.3 661.364 1358.1 663.683C1364.13 665.77 1371.33 667.973 1379.68 670.293C1388.03 672.38 1396.38 675.163 1404.73 678.641C1413.08 682.12 1420.15 687.918 1425.95 696.034C1431.98 703.919 1435 713.891 1435 725.951C1435 744.735 1428.04 758.997 1414.12 768.738C1400.21 778.246 1383.04 783 1362.63 783C1325.98 783 1301.04 769.201 1287.82 741.604L1333.05 715.863C1337.69 729.545 1347.55 736.386 1362.63 736.386C1375.15 736.386 1381.42 732.792 1381.42 725.603C1381.42 722.124 1378.4 719.225 1372.37 716.906C1366.57 714.587 1359.5 712.384 1351.14 710.297C1342.79 707.978 1334.44 705.079 1326.09 701.6C1317.74 697.89 1310.55 692.208 1304.52 684.555C1298.72 676.902 1295.82 667.51 1295.82 656.378C1295.82 638.289 1302.32 624.259 1315.31 614.287C1328.53 604.315 1344.77 599.329 1364.02 599.329C1378.4 599.329 1391.51 602.575 1403.34 609.069C1415.17 615.33 1424.68 624.491 1431.87 636.55L1387.33 660.552C1381.76 650.348 1373.99 645.246 1364.02 645.246C1354.28 645.246 1349.4 648.493 1349.4 654.987Z"
            fill="url(#paint26_linear_1666_9187)"
            fill-opacity="0.12"
          />
          <defs>
            <linearGradient
              id="paint0_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint2_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint3_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint4_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint5_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint6_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint7_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint8_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint9_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint10_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint11_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint12_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint13_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint14_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint15_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint16_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint17_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint18_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint19_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint20_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint21_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint22_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint23_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint24_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint25_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint26_linear_1666_9187"
              x1="717.5"
              y1="0"
              x2="717.5"
              y2="919.706"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.479824" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- HERO SECTION -->
      <section class="gpu_alliance-hero_1a4679">
        <div class="gpu_alliance-hero-left_a3159e">
          <p class="gpu_alliance-hero-label_b5c79c">
            Solutions Designed Around<br />Your Business Needs
          </p>
        </div>
        <div class="gpu_alliance-hero-right_0d9b89">
          <h1 class="gpu_alliance-hero-headline_397e4e">
            Quickly find the right solution based on your goals, industry, or
            technology requirements.
          </h1>
        </div>
      </section>

      <!-- CARDS SECTION -->
      <section class="gpu_alliance-cards-section_d47bb9">
        <!-- LEFT COLUMN -->
        <div class="gpu_col-left_b7d8f2 gpu_alliance-card-white_e025d3">
          <div class="gpu_col-left-inner_180d21">
            <div
              class="gpu_alliance-card-plain_25fb65 gpu_alliance-card-plain-wrapper_e70122"
            >
              <h3 class="gpu_alliance-card-title_ccb543">Reduce IT Costs</h3>
              <p class="gpu_alliance-card-body_7acde8">
                Optimize spend through consolidated procurement and
                vendor-aligned pricing models.
              </p>
            </div>
          </div>
          <!-- Chart BG Watermark -->
          <div class="gpu_chart-bg_15bf39">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="225"
              height="225"
              viewBox="0 0 225 225"
              fill="none"
            >
              <path
                d="M130 0C104.288 0 79.1543 7.62437 57.7759 21.909C36.3975 36.1935 19.7351 56.4968 9.89572 80.2512C0.056327 104.006 -2.51811 130.144 2.49797 155.362C7.51405 180.579 19.8953 203.743 38.0762 221.924C56.257 240.105 79.4208 252.486 104.638 257.502C129.856 262.518 155.995 259.944 179.749 250.104C203.503 240.265 223.807 223.603 238.091 202.224C252.376 180.846 260 155.712 260 130C259.964 95.533 246.256 62.4882 221.884 38.1163C197.512 13.7445 164.467 0.0363977 130 0ZM145 190H140V200C140 202.652 138.947 205.196 137.071 207.071C135.196 208.946 132.652 210 130 210C127.348 210 124.804 208.946 122.929 207.071C121.054 205.196 120 202.652 120 200V190H100C97.3479 190 94.8044 188.946 92.929 187.071C91.0536 185.196 90.0001 182.652 90.0001 180C90.0001 177.348 91.0536 174.804 92.929 172.929C94.8044 171.054 97.3479 170 100 170H145C148.978 170 152.794 168.42 155.607 165.607C158.42 162.794 160 158.978 160 155C160 151.022 158.42 147.206 155.607 144.393C152.794 141.58 148.978 140 145 140H115C105.717 140 96.8151 136.313 90.2513 129.749C83.6875 123.185 80.0001 114.283 80.0001 105C80.0001 95.7174 83.6875 86.815 90.2513 80.2513C96.8151 73.6875 105.717 70 115 70H120V60C120 57.3478 121.054 54.8043 122.929 52.9289C124.804 51.0536 127.348 50 130 50C132.652 50 135.196 51.0536 137.071 52.9289C138.947 54.8043 140 57.3478 140 60V70H160C162.652 70 165.196 71.0536 167.071 72.9289C168.947 74.8043 170 77.3478 170 80C170 82.6522 168.947 85.1957 167.071 87.0711C165.196 88.9464 162.652 90 160 90H115C111.022 90 107.206 91.5804 104.393 94.3934C101.58 97.2064 100 101.022 100 105C100 108.978 101.58 112.794 104.393 115.607C107.206 118.42 111.022 120 115 120H145C154.283 120 163.185 123.687 169.749 130.251C176.313 136.815 180 145.717 180 155C180 164.283 176.313 173.185 169.749 179.749C163.185 186.313 154.283 190 145 190Z"
                fill="#000A2D"
                fill-opacity="0.08"
              />
            </svg>
          </div>
        </div>

        <!-- MIDDLE COLUMN -->
        <div class="gpu_col-middle_03ab38">
          <!-- Featured alliance-card with teal dot -->
          <div
            class="gpu_alliance-card-white_e025d3 gpu_alliance-card-global_12c44c"
          >
            <div class="gpu_icon-wrap_d3ab58">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="36"
                height="36"
                viewBox="0 0 52 52"
                fill="none"
              >
                <path
                  d="M42.25 8.125H9.75C8.88805 8.125 8.0614 8.46741 7.4519 9.0769C6.84241 9.6864 6.5 10.513 6.5 11.375V22.75C6.5 33.4587 11.6838 39.9486 16.0327 43.5073C20.7167 47.3383 25.3764 48.6383 25.5795 48.6931C25.8588 48.7691 26.1534 48.7691 26.4327 48.6931C26.6358 48.6383 31.2894 47.3383 35.9795 43.5073C40.3162 39.9486 45.5 33.4587 45.5 22.75V11.375C45.5 10.513 45.1576 9.6864 44.5481 9.0769C43.9386 8.46741 43.112 8.125 42.25 8.125ZM42.25 22.75C42.25 30.2798 39.4753 36.3919 34.0031 40.9134C31.621 42.875 28.9119 44.4015 26 45.4228C23.1262 44.4193 20.4505 42.9199 18.0944 40.9927C12.5572 36.463 9.75 30.3266 9.75 22.75V11.375H42.25V22.75ZM16.7253 28.7747C16.4204 28.4698 16.2491 28.0562 16.2491 27.625C16.2491 27.1938 16.4204 26.7802 16.7253 26.4753C17.0302 26.1704 17.4438 25.9991 17.875 25.9991C18.3062 25.9991 18.7198 26.1704 19.0247 26.4753L22.75 30.2027L32.9753 19.9753C33.1263 19.8243 33.3055 19.7046 33.5028 19.6229C33.7001 19.5412 33.9115 19.4991 34.125 19.4991C34.3385 19.4991 34.5499 19.5412 34.7472 19.6229C34.9445 19.7046 35.1237 19.8243 35.2747 19.9753C35.4257 20.1263 35.5454 20.3055 35.6271 20.5028C35.7088 20.7001 35.7509 20.9115 35.7509 21.125C35.7509 21.3385 35.7088 21.5499 35.6271 21.7472C35.5454 21.9445 35.4257 22.1237 35.2747 22.2747L23.8997 33.6497C23.7488 33.8008 23.5695 33.9206 23.3723 34.0024C23.175 34.0842 22.9636 34.1263 22.75 34.1263C22.5364 34.1263 22.325 34.0842 22.1277 34.0024C21.9305 33.9206 21.7512 33.8008 21.6003 33.6497L16.7253 28.7747Z"
                  fill="#52576C"
                />
              </svg>
            </div>
            <h3 class="gpu_alliance-card-title_ccb543">Improve Security</h3>
            <p class="gpu_alliance-card-body_7acde8">
              Embed security-first architectures and compliance-driven
              procurement strategies.
            </p>
          </div>

          <!-- Expand Across Global Markets alliance-card -->
          <div
            class="gpu_alliance-card-white_e025d3 gpu_alliance-card-global_12c44c"
          >
            <div class="gpu_icon-wrap_d3ab58">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="36"
                height="36"
                viewBox="0 0 52 52"
                fill="none"
              >
                <path
                  d="M43.8341 24.0034C43.7726 23.743 43.6477 23.5018 43.4705 23.3012C43.2933 23.1006 43.0694 22.9469 42.8185 22.8538L31.1165 18.4642L34.0943 3.56907C34.1617 3.22298 34.1147 2.86436 33.9605 2.54731C33.8062 2.23026 33.553 1.97199 33.2391 1.81147C32.9251 1.65095 32.5675 1.59689 32.2202 1.65745C31.8728 1.71801 31.5546 1.8899 31.3135 2.14719L8.5635 26.5222C8.37872 26.7169 8.24505 26.9543 8.17444 27.2133C8.10382 27.4722 8.09845 27.7447 8.1588 28.0062C8.21916 28.2678 8.34336 28.5103 8.52032 28.7121C8.69727 28.9139 8.92147 29.0688 9.17287 29.1628L20.879 33.5523L17.9093 48.4313C17.8418 48.7773 17.8888 49.136 18.0431 49.453C18.1973 49.7701 18.4506 50.0283 18.7645 50.1889C19.0784 50.3494 19.436 50.4034 19.7834 50.3429C20.1307 50.2823 20.449 50.1104 20.6901 49.8531L43.4401 25.4781C43.6215 25.2834 43.7523 25.0471 43.821 24.7899C43.8897 24.5328 43.8942 24.2627 43.8341 24.0034ZM22.2176 43.4689L24.3443 32.8292C24.4204 32.4519 24.3601 32.0598 24.1741 31.7227C23.9881 31.3857 23.6885 31.1257 23.3286 30.9889L12.5955 26.9569L29.784 8.54157L27.6593 19.1813C27.5832 19.5586 27.6435 19.9507 27.8295 20.2877C28.0155 20.6248 28.3151 20.8848 28.6749 21.0216L39.3999 25.0434L22.2176 43.4689Z"
                  fill="#52576C"
                />
              </svg>
            </div>
            <h3 class="gpu_alliance-card-title_ccb543">
              Accelerate Procurement
            </h3>
            <p class="gpu_alliance-card-body_7acde8">
              Streamline sourcing through validated vendor networks and
              automated workflows.
            </p>
          </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="gpu_col-right_841b59 gpu_alliance-card-white_e025d3">
          <!-- <div class="gpu_alliance-card-white_e025d3"> -->
          <div class="gpu_alliance-card-plain-right_6a69a7">
            <h3 class="gpu_alliance-card-title_ccb543">
              Enable Global Expansion
            </h3>
            <p class="gpu_alliance-card-body_7acde8">
              Deliver consistent technology deployment across regions with a
              unified supply chain.
            </p>
          </div>
          <!-- Shield BG Watermark -->
          <div class="gpu_shield-bg_4ec780">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="225"
              height="225"
              viewBox="0 0 225 225"
              fill="none"
            >
              <path
                d="M130 0C104.288 0 79.1543 7.62437 57.7759 21.909C36.3975 36.1935 19.7351 56.4968 9.89572 80.2512C0.056327 104.006 -2.51811 130.144 2.49797 155.362C7.51405 180.579 19.8953 203.743 38.0762 221.924C56.257 240.105 79.4208 252.486 104.638 257.502C129.856 262.518 155.995 259.944 179.749 250.104C203.503 240.265 223.807 223.603 238.091 202.224C252.376 180.846 260 155.712 260 130C259.964 95.533 246.256 62.4882 221.884 38.1163C197.512 13.7445 164.467 0.0363977 130 0ZM240 130C240.011 144.112 237.295 158.094 232 171.175L176.125 136.812C173.749 135.347 171.092 134.397 168.325 134.025L139.8 130.175C135.869 129.662 131.875 130.321 128.317 132.069C124.76 133.817 121.797 136.576 119.8 140H108.9L104.15 130.175C102.837 127.439 100.915 125.04 98.5318 123.162C96.1485 121.283 93.3669 119.975 90.4001 119.338L80.4001 117.175L90.1751 100H111.063C114.442 99.9934 117.766 99.1335 120.725 97.5L136.038 89.05C137.383 88.3001 138.641 87.4029 139.788 86.375L173.425 55.95C176.798 52.9277 179.039 48.846 179.78 44.3784C180.521 39.9108 179.717 35.3241 177.5 31.375L177.05 30.5625C195.873 39.4875 211.778 53.5674 222.92 71.1682C234.063 88.769 239.985 109.169 240 130ZM20.0001 130C19.9834 113.65 23.6311 97.5046 30.6751 82.75L44.8501 120.588C46.0313 123.72 47.9802 126.506 50.518 128.69C53.0558 130.874 56.1012 132.386 59.3751 133.087L86.1626 138.85L90.9251 148.75C92.5779 152.117 95.1393 154.955 98.3201 156.943C101.501 158.931 105.174 159.99 108.925 160H110.775L101.738 180.287C100.145 183.86 99.6352 187.82 100.271 191.68C100.906 195.539 102.659 199.127 105.313 202L105.488 202.175L130 227.425L127.575 239.925C98.8479 239.256 71.5195 227.387 51.4216 206.85C31.3236 186.313 20.0477 158.735 20.0001 130Z"
                fill="#000A2D"
                fill-opacity="0.08"
              />
            </svg>
          </div>
          <!-- </div> -->
        </div>
      </section>
    </div>

    <!-- Solutions -->

    <!-- tcp section -->

    <section class="gpu_tcp-section_aabc7a">
      <!-- ── MAIN CONTENT ──────────────────────── -->
      <div class="gpu_ex-page-wrapper_90cb2e">
        <p class="gpu_eyebrow_72e04b">
          A Clear Path from Sourcing to Execution
        </p>

        <h2 class="gpu_headline_ef9830">
          From initial engagement to full-scale deployment, <br />a structured
          approach ensures accountability, speed,<br />
          and measurable outcomes.
        </h2>

        <div class="gpu_badges_96fb30">
          <span class="gpu_badge_dcdd12">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="white"
              />
            </svg>
            No long onboarding
          </span>
          <span class="gpu_badge_dcdd12">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="white"
              />
            </svg>
            Clear deliverables
          </span>
          <span class="gpu_badge_dcdd12">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="white"
              />
            </svg>
            Flexible engagement
          </span>
        </div>

        <!-- ── 2×2 STEP CARDS ─────────────────── -->
        <div class="gpu_steps-grid_4fee84">
          <!-- 01 -->
          <div class="gpu_step-cell_2015c1">
            <div class="gpu_step-number_8741d5">
              <svg
                width="128"
                height="102"
                viewBox="0 0 211 168"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M113.62 144.67C102.12 159.85 86.0967 167.44 65.55 167.44C45.0033 167.44 28.9033 159.85 17.25 144.67C5.75 129.337 0 109.02 0 83.72C0 58.42 5.75 38.18 17.25 23C28.9033 7.66667 45.0033 0 65.55 0C86.0967 0 102.12 7.66667 113.62 23C125.273 38.18 131.1 58.42 131.1 83.72C131.1 109.02 125.273 129.337 113.62 144.67ZM36.8 83.72C36.8 115.613 46.3833 131.56 65.55 131.56C84.7167 131.56 94.3 115.613 94.3 83.72C94.3 51.8267 84.7167 35.88 65.55 35.88C46.3833 35.88 36.8 51.8267 36.8 83.72Z"
                  fill="url(#n01a)"
                  fill-opacity="0.6"
                />
                <path
                  d="M177.871 3.22H210.071V164.22H173.271V42.09L144.751 49.91L135.781 18.4L177.871 3.22Z"
                  fill="url(#n01b)"
                  fill-opacity="0.6"
                />
                <defs>
                  <linearGradient
                    id="n01a"
                    x1="105"
                    y1="0"
                    x2="105"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                  <linearGradient
                    id="n01b"
                    x1="105"
                    y1="0"
                    x2="105"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="gpu_step-card_88c1d8">
              <div class="gpu_icon-wrap_d3ab58">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#ci1)">
                    <path
                      d="M18.3332 14.1004V16.6004C18.3341 16.8325 18.2866 17.0622 18.1936 17.2749C18.1006 17.4875 17.9643 17.6784 17.7933 17.8353C17.6222 17.9922 17.4203 18.1116 17.2005 18.186C16.9806 18.2603 16.7477 18.288 16.5165 18.2671C13.9522 17.9884 11.489 17.1122 9.32486 15.7087C7.31139 14.4293 5.60431 12.7222 4.32486 10.7087C2.91651 8.53474 2.04007 6.05957 1.76653 3.48374C1.7457 3.2533 1.77309 3.02104 1.84695 2.80176C1.9208 2.58248 2.03951 2.38098 2.1955 2.21009C2.3515 2.0392 2.54137 1.90266 2.75302 1.81917C2.96468 1.72569 3.19348 1.66729 3.42486 1.66707H5.92486C6.32928 1.66309 6.72136 1.80631 7.028 2.07002C7.33464 2.33373 7.53493 2.69995 7.59153 3.10041C7.69705 3.90046 7.89274 4.68601 8.17486 5.44207C8.28698 5.74034 8.31125 6.0645 8.24478 6.37614C8.17832 6.68778 8.02392 6.97383 7.79986 7.20041L6.74153 8.25874C7.92783 10.345 9.65524 12.0724 11.7415 13.2587L12.7999 12.2004C13.0264 11.9764 13.3125 11.8219 13.6241 11.7555C13.9358 11.689 14.2599 11.7133 14.5582 11.8254C15.3143 12.1075 16.0998 12.3032 16.8999 12.4087C17.3047 12.4658 17.6744 12.6697 17.9386 12.9817C18.2029 13.2936 18.3433 13.6917 18.3332 14.1004Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </g>
                  <defs>
                    <clipPath id="ci1">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="gpu_step-title_40f63c">Discovery Call</p>
              <p class="gpu_step-desc_12a5a1">
                Understand business context, procurement challenges, and
                operational goals.
              </p>
            </div>
          </div>

          <!-- 02 -->
          <div class="gpu_step-cell_2015c1">
            <div class="gpu_step-number_8741d5">
              <svg
                width="152"
                height="102"
                viewBox="0 0 249 168"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M113.62 144.67C102.12 159.85 86.0967 167.44 65.55 167.44C45.0033 167.44 28.9033 159.85 17.25 144.67C5.75 129.337 0 109.02 0 83.72C0 58.42 5.75 38.18 17.25 23C28.9033 7.66667 45.0033 0 65.55 0C86.0967 0 102.12 7.66667 113.62 23C125.273 38.18 131.1 58.42 131.1 83.72C131.1 109.02 125.273 129.337 113.62 144.67ZM36.8 83.72C36.8 115.613 46.3833 131.56 65.55 131.56C84.7167 131.56 94.3 115.613 94.3 83.72C94.3 51.8267 84.7167 35.88 65.55 35.88C46.3833 35.88 36.8 51.8267 36.8 83.72Z"
                  fill="url(#n02a)"
                  fill-opacity="0.6"
                />
                <path
                  d="M138.541 164.22V137.54L192.591 81.42C203.478 70.2267 208.921 60.72 208.921 52.9C208.921 47.84 207.388 43.7767 204.321 40.71C201.254 37.49 197.038 35.88 191.671 35.88C180.938 35.88 173.041 41.7067 167.981 53.36L136.931 35.19C141.838 23.69 149.198 14.95 159.011 8.97001C168.824 2.99 179.558 0 191.211 0C206.238 0 219.041 4.67667 229.621 14.03C240.354 23.23 245.721 35.65 245.721 51.29C245.721 68.31 237.364 85.1767 220.651 101.89L193.971 128.8H248.021V164.22H138.541Z"
                  fill="url(#n02b)"
                  fill-opacity="0.6"
                />
                <defs>
                  <linearGradient
                    id="n02a"
                    x1="124"
                    y1="0"
                    x2="124"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                  <linearGradient
                    id="n02b"
                    x1="124"
                    y1="0"
                    x2="124"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="gpu_step-card_88c1d8">
              <div class="gpu_icon-wrap_d3ab58">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#ci2)">
                    <path
                      d="M12.5026 1.66699H5.0026C4.56058 1.66699 4.13665 1.84259 3.82409 2.15515C3.51153 2.46771 3.33594 2.89163 3.33594 3.33366V16.667C3.33594 17.109 3.51153 17.5329 3.82409 17.8455C4.13665 18.1581 4.56058 18.3337 5.0026 18.3337H15.0026C15.4446 18.3337 15.8686 18.1581 16.1811 17.8455C16.4937 17.5329 16.6693 17.109 16.6693 16.667V5.83366L12.5026 1.66699Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M11.6641 1.66699V5.00033C11.6641 5.44235 11.8397 5.86628 12.1522 6.17884C12.4648 6.4914 12.8887 6.66699 13.3307 6.66699H16.6641"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M8.33073 7.5H6.66406"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M13.3307 10.833H6.66406"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M13.3307 14.167H6.66406"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </g>
                  <defs>
                    <clipPath id="ci2">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="gpu_step-title_40f63c">Assessment &amp; Proposal</p>
              <p class="gpu_step-desc_12a5a1">
                Define solution architecture, commercial models,<br />
                and execution roadmap.
              </p>
            </div>
          </div>

          <!-- 03 -->
          <div class="gpu_step-cell_2015c1">
            <div class="gpu_step-number_8741d5">
              <svg
                width="153"
                height="102"
                viewBox="0 0 251 168"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M113.62 144.67C102.12 159.85 86.0967 167.44 65.55 167.44C45.0033 167.44 28.9033 159.85 17.25 144.67C5.75 129.337 0 109.02 0 83.72C0 58.42 5.75 38.18 17.25 23C28.9033 7.66667 45.0033 0 65.55 0C86.0967 0 102.12 7.66667 113.62 23C125.273 38.18 131.1 58.42 131.1 83.72C131.1 109.02 125.273 129.337 113.62 144.67ZM36.8 83.72C36.8 115.613 46.3833 131.56 65.55 131.56C84.7167 131.56 94.3 115.613 94.3 83.72C94.3 51.8267 84.7167 35.88 65.55 35.88C46.3833 35.88 36.8 51.8267 36.8 83.72Z"
                  fill="url(#n03a)"
                  fill-opacity="0.6"
                />
                <path
                  d="M216.34 68.54C226.613 72.0667 234.893 77.8167 241.18 85.79C247.467 93.61 250.61 102.887 250.61 113.62C250.61 130.487 244.937 143.673 233.59 153.18C222.243 162.687 208.367 167.44 191.96 167.44C179.233 167.44 167.81 164.527 157.69 158.7C147.723 152.873 140.363 144.287 135.61 132.94L167.35 114.54C171.337 125.887 179.54 131.56 191.96 131.56C199.167 131.56 204.61 129.873 208.29 126.5C211.97 123.127 213.81 118.833 213.81 113.62C213.81 108.407 211.97 104.113 208.29 100.74C204.61 97.3667 199.167 95.68 191.96 95.68H184.37L170.34 74.75L199.55 37.72H140.67V3.22H244.17V33.12L216.34 68.54Z"
                  fill="url(#n03b)"
                  fill-opacity="0.6"
                />
                <defs>
                  <linearGradient
                    id="n03a"
                    x1="125"
                    y1="0"
                    x2="125"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                  <linearGradient
                    id="n03b"
                    x1="125"
                    y1="0"
                    x2="125"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="gpu_step-card_88c1d8">
              <div class="gpu_icon-wrap_d3ab58">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#ci3)">
                    <path
                      d="M3.75065 13.7498C2.50065 14.7998 2.08398 17.9164 2.08398 17.9164C2.08398 17.9164 5.20065 17.4998 6.25065 16.2498C6.84232 15.5498 6.83398 14.4748 6.17565 13.8248C5.85174 13.5156 5.42506 13.337 4.97751 13.3231C4.52995 13.3093 4.09305 13.4612 3.75065 13.7498Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M10 12.4996L7.5 9.99956C7.94345 8.84908 8.50184 7.74627 9.16667 6.70789C10.1377 5.15538 11.4897 3.8771 13.0942 2.99463C14.6986 2.11217 16.5022 1.65486 18.3333 1.66622C18.3333 3.93289 17.6833 7.91622 13.3333 10.8329C12.2807 11.4985 11.164 12.0568 10 12.4996Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M7.50065 9.99993H3.33398C3.33398 9.99993 3.79232 7.47493 5.00065 6.6666C6.35065 5.7666 9.16732 6.6666 9.16732 6.6666"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M10 12.4997V16.6663C10 16.6663 12.525 16.208 13.3333 14.9997C14.2333 13.6497 13.3333 10.833 13.3333 10.833"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </g>
                  <defs>
                    <clipPath id="ci3">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="gpu_step-title_40f63c">Pilot / Rollout</p>
              <p class="gpu_step-desc_12a5a1">
                Controlled deployment with defined milestones and stakeholder
                <br />
                alignment.
              </p>
            </div>
          </div>

          <!-- 04 -->
          <div class="gpu_step-cell_2015c1">
            <div class="gpu_step-number_8741d5">
              <svg
                width="163"
                height="102"
                viewBox="0 0 268 168"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M113.62 144.67C102.12 159.85 86.0967 167.44 65.55 167.44C45.0033 167.44 28.9033 159.85 17.25 144.67C5.75 129.337 0 109.02 0 83.72C0 58.42 5.75 38.18 17.25 23C28.9033 7.66667 45.0033 0 65.55 0C86.0967 0 102.12 7.66667 113.62 23C125.273 38.18 131.1 58.42 131.1 83.72C131.1 109.02 125.273 129.337 113.62 144.67ZM36.8 83.72C36.8 115.613 46.3833 131.56 65.55 131.56C84.7167 131.56 94.3 115.613 94.3 83.72C94.3 51.8267 84.7167 35.88 65.55 35.88C46.3833 35.88 36.8 51.8267 36.8 83.72Z"
                  fill="url(#n04a)"
                  fill-opacity="0.6"
                />
                <path
                  d="M198 0H234V107H268V138H234V164H198V138H142V107L198 0ZM198 107V52L168 107H198Z"
                  fill="url(#n04b)"
                  fill-opacity="0.6"
                />
                <defs>
                  <linearGradient
                    id="n04a"
                    x1="134"
                    y1="0"
                    x2="134"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                  <linearGradient
                    id="n04b"
                    x1="134"
                    y1="0"
                    x2="134"
                    y2="168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#06B6D4" />
                    <stop offset="1" stop-color="#06B6D4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="gpu_step-card_88c1d8">
              <div class="gpu_icon-wrap_d3ab58">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#ci4)">
                    <path
                      d="M10.1824 1.66699H9.81569C9.37366 1.66699 8.94974 1.84259 8.63718 2.15515C8.32462 2.46771 8.14902 2.89163 8.14902 3.33366V3.48366C8.14872 3.77593 8.07157 4.06298 7.92531 4.31602C7.77904 4.56906 7.56881 4.77919 7.31569 4.92533L6.95736 5.13366C6.70399 5.27994 6.41659 5.35695 6.12402 5.35695C5.83146 5.35695 5.54406 5.27994 5.29069 5.13366L5.16569 5.06699C4.78325 4.84638 4.32889 4.78653 3.90236 4.90058C3.47583 5.01464 3.11198 5.29327 2.89069 5.67533L2.70736 5.99199C2.48674 6.37444 2.42689 6.82879 2.54095 7.25532C2.655 7.68185 2.93364 8.0457 3.31569 8.26699L3.44069 8.35033C3.69259 8.49575 3.90204 8.70457 4.04823 8.95602C4.19443 9.20747 4.27227 9.4928 4.27403 9.78366V10.2087C4.27519 10.5023 4.19873 10.7911 4.05239 11.0457C3.90606 11.3004 3.69503 11.5118 3.44069 11.6587L3.31569 11.7337C2.93364 11.955 2.655 12.3188 2.54095 12.7453C2.42689 13.1719 2.48674 13.6262 2.70736 14.0087L2.89069 14.3253C3.11198 14.7074 3.47583 14.986 3.90236 15.1001C4.32889 15.2141 4.78325 15.1543 5.16569 14.9337L5.29069 14.867C5.54406 14.7207 5.83146 14.6437 6.12402 14.6437C6.41659 14.6437 6.70399 14.7207 6.95736 14.867L7.31569 15.0753C7.56881 15.2215 7.77904 15.4316 7.92531 15.6846C8.07157 15.9377 8.14872 16.2247 8.14902 16.517V16.667C8.14902 17.109 8.32462 17.5329 8.63718 17.8455C8.94974 18.1581 9.37366 18.3337 9.81569 18.3337H10.1824C10.6244 18.3337 11.0483 18.1581 11.3609 17.8455C11.6734 17.5329 11.849 17.109 11.849 16.667V16.517C11.8493 16.2247 11.9265 15.9377 12.0727 15.6846C12.219 15.4316 12.4292 15.2215 12.6824 15.0753L13.0407 14.867C13.2941 14.7207 13.5815 14.6437 13.874 14.6437C14.1666 14.6437 14.454 14.7207 14.7074 14.867L14.8324 14.9337C15.2148 15.1543 15.6692 15.2141 16.0957 15.1001C16.5222 14.986 16.8861 14.7074 17.1074 14.3253L17.2907 14.0003C17.5113 13.6179 17.5712 13.1635 17.4571 12.737C17.343 12.3105 17.0644 11.9466 16.6824 11.7253L16.5574 11.6587C16.303 11.5118 16.092 11.3004 15.9457 11.0457C15.7993 10.7911 15.7229 10.5023 15.724 10.2087V9.79199C15.7229 9.49831 15.7993 9.20953 15.9457 8.9549C16.092 8.70027 16.303 8.48883 16.5574 8.34199L16.6824 8.26699C17.0644 8.0457 17.343 7.68185 17.4571 7.25532C17.5712 6.82879 17.5113 6.37444 17.2907 5.99199L17.1074 5.67533C16.8861 5.29327 16.5222 5.01464 16.0957 4.90058C15.6692 4.78653 15.2148 4.84638 14.8324 5.06699L14.7074 5.13366C14.454 5.27994 14.1666 5.35695 13.874 5.35695C13.5815 5.35695 13.2941 5.27994 13.0407 5.13366L12.6824 4.92533C12.4292 4.77919 12.219 4.56906 12.0727 4.31602C11.9265 4.06298 11.8493 3.77593 11.849 3.48366V3.33366C11.849 2.89163 11.6734 2.46771 11.3609 2.15515C11.0483 1.84259 10.6244 1.66699 10.1824 1.66699Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z"
                      stroke="white"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </g>
                  <defs>
                    <clipPath id="ci4">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="gpu_step-title_40f63c">Full Deployment &amp; Support</p>
              <p class="gpu_step-desc_12a5a1">
                End-to-end execution with continuous optimization and lifecycle
                management.
              </p>
            </div>
          </div>
        </div>
        <!-- /steps-grid -->
      </div>
    </section>

    <!-- tcp section -->

    <!-- Why Teceze -->

    <!-- SECTION -->
    <section class="gpu_wtc-section_39ccd8">
      <!-- Repeating watermark SVG (provided from Figma) -->
      <div class="gpu_wtc-watermark_5f861e">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1440"
          height="658"
          viewBox="0 0 1440 658"
          fill="none"
          preserveAspectRatio="xMidYMid slice"
        >
          <path
            d="M168.268 56.1216H213.139L168.268 196.426H129.005L106.57 121.503L84.134 196.426H44.8715L0 56.1216H44.8715L65.0636 131.325L86.9384 56.1216H126.201L148.076 131.325L168.268 56.1216Z"
            fill="url(#paint0_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M312.006 52.1931C326.963 52.1931 339.396 57.3376 349.305 67.6266C359.401 77.9155 364.449 92.133 364.449 110.279V196.426H322.382V116.452C322.382 108.221 320.045 101.954 315.371 97.6516C310.884 93.1619 305.088 90.9171 297.983 90.9171C289.944 90.9171 283.587 93.349 278.913 98.2129C274.239 103.077 271.902 110.279 271.902 119.82V196.426H229.835V0H271.902V69.3102C280.315 57.8988 293.683 52.1931 312.006 52.1931Z"
            fill="url(#paint1_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M478.939 56.1216H523.811L475.854 192.217C468.002 214.291 457.625 230.099 444.725 239.639C432.011 249.18 415.745 253.483 395.927 252.547V213.262C405.649 213.262 413.128 211.485 418.363 207.931C423.598 204.563 427.804 198.577 430.983 189.972L375.174 56.1216H421.448L452.577 141.988L478.939 56.1216Z"
            fill="url(#paint2_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M691.594 96.5292H662.708V146.197C662.708 151.809 664.952 155.363 669.439 156.86C673.926 158.357 681.311 158.824 691.594 158.263V196.426C664.859 199.232 646.349 196.706 636.066 188.849C625.783 180.805 620.641 166.588 620.641 146.197V96.5292H598.206V56.1216H620.641V29.4639L662.708 16.8365V56.1216H691.594V96.5292Z"
            fill="url(#paint3_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M750.254 143.11C755.115 156.205 766.333 162.753 783.907 162.753C795.312 162.753 804.286 159.198 810.83 152.09L844.484 171.452C830.648 190.72 810.269 200.354 783.346 200.354C759.789 200.354 740.906 193.339 726.696 179.309C712.674 165.278 705.663 147.6 705.663 126.274C705.663 105.135 712.58 87.5498 726.416 73.5193C740.438 59.3019 758.387 52.1931 780.262 52.1931C800.641 52.1931 817.561 59.3019 831.022 73.5193C844.671 87.5498 851.495 105.135 851.495 126.274C851.495 132.26 850.934 137.872 849.812 143.11H750.254ZM749.412 111.682H809.708C805.595 96.9034 795.686 89.514 779.981 89.514C763.715 89.514 753.526 96.9034 749.412 111.682Z"
            fill="url(#paint4_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M941.293 200.354C919.979 200.354 902.217 193.245 888.008 179.028C873.985 164.811 866.974 147.226 866.974 126.274C866.974 105.322 873.985 87.7368 888.008 73.5193C902.217 59.3019 919.979 52.1931 941.293 52.1931C954.754 52.1931 967.094 55.4669 978.312 62.0144C989.716 68.5619 998.504 77.2608 1004.67 88.111L967.935 109.437C962.887 98.9612 953.819 93.7231 940.732 93.7231C931.571 93.7231 923.998 96.8098 918.016 102.983C912.033 108.97 909.041 116.733 909.041 126.274C909.041 135.814 912.033 143.671 918.016 149.845C923.998 155.831 931.571 158.824 940.732 158.824C954.006 158.824 963.074 153.586 967.935 143.11L1004.67 164.156C998.504 175.193 989.81 183.985 978.592 190.533C967.374 197.08 954.941 200.354 941.293 200.354Z"
            fill="url(#paint5_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1056.44 143.11C1061.31 156.205 1072.52 162.753 1090.1 162.753C1101.5 162.753 1110.48 159.198 1117.02 152.09L1150.67 171.452C1136.84 190.72 1116.46 200.354 1089.54 200.354C1065.98 200.354 1047.1 193.339 1032.89 179.309C1018.86 165.278 1011.85 147.6 1011.85 126.274C1011.85 105.135 1018.77 87.5498 1032.61 73.5193C1046.63 59.3019 1064.58 52.1931 1086.45 52.1931C1106.83 52.1931 1123.75 59.3019 1137.21 73.5193C1150.86 87.5498 1157.69 105.135 1157.69 126.274C1157.69 132.26 1157.12 137.872 1156 143.11H1056.44ZM1055.6 111.682H1115.9C1111.79 96.9034 1101.88 89.514 1086.17 89.514C1069.91 89.514 1059.72 96.9034 1055.6 111.682Z"
            fill="url(#paint6_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1228.23 157.141H1284.04V196.426H1171.86V168.365L1224.87 95.4068H1174.67V56.1216H1281.24V84.1825L1228.23 157.141Z"
            fill="url(#paint7_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1338.26 143.11C1343.12 156.205 1354.34 162.753 1371.91 162.753C1383.32 162.753 1392.29 159.198 1398.84 152.09L1432.49 171.452C1418.66 190.72 1398.28 200.354 1371.35 200.354C1347.8 200.354 1328.91 193.339 1314.7 179.309C1300.68 165.278 1293.67 147.6 1293.67 126.274C1293.67 105.135 1300.59 87.5498 1314.42 73.5193C1328.44 59.3019 1346.39 52.1931 1368.27 52.1931C1388.65 52.1931 1405.57 59.3019 1419.03 73.5193C1432.68 87.5498 1439.5 105.135 1439.5 126.274C1439.5 132.26 1438.94 137.872 1437.82 143.11H1338.26ZM1337.42 111.682H1397.72C1393.6 96.9034 1383.69 89.514 1367.99 89.514C1351.72 89.514 1341.53 96.9034 1337.42 111.682Z"
            fill="url(#paint8_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <!-- Row 2 -->
          <path
            d="M168.766 258.957H213.638L168.766 399.261H129.504L107.068 324.339L84.6322 399.261H45.3697L0.498272 258.957H45.3697L65.5619 334.16L87.4367 258.957H126.699L148.574 334.16L168.766 258.957Z"
            fill="url(#paint9_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M312.504 255.029C327.461 255.029 339.894 260.173 349.803 270.462C359.899 280.751 364.947 294.969 364.947 313.115V399.261H322.88V319.288C322.88 311.057 320.543 304.79 315.869 300.487C311.382 295.998 305.586 293.753 298.482 293.753C290.442 293.753 284.085 296.185 279.411 301.049C274.737 305.912 272.4 313.115 272.4 322.655V399.261H230.333V202.836H272.4V272.146C280.813 260.734 294.181 255.029 312.504 255.029Z"
            fill="url(#paint10_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M479.437 258.957H524.309L476.353 395.052C468.5 417.127 458.124 432.934 445.223 442.475C432.509 452.016 416.244 456.318 396.425 455.383V416.098C406.147 416.098 413.626 414.321 418.861 410.766C424.096 407.399 428.303 401.413 431.481 392.807L375.672 258.957H421.946L453.076 344.823L479.437 258.957Z"
            fill="url(#paint11_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M692.093 299.365C682.916 305.925 663.207 299.365 663.207 299.365V349.033C663.207 354.645 665.45 358.199 669.937 359.696C674.425 361.192 681.81 361.66 692.093 361.099V399.261C665.357 402.068 646.847 399.542 636.564 391.685C626.281 383.641 621.14 369.423 621.14 349.033V299.365H598.704V258.957H621.14V232.3L663.207 219.672V258.957H692.093C692.093 258.957 704.93 290.188 692.093 299.365Z"
            fill="url(#paint12_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M750.752 345.946C755.613 359.041 766.831 365.588 784.406 365.588C795.81 365.588 804.785 362.034 811.328 354.925L844.982 374.287C831.147 393.556 810.768 403.19 783.845 403.19C760.287 403.19 741.404 396.175 727.195 382.144C713.172 368.114 706.161 350.436 706.161 329.109C706.161 307.97 713.079 290.385 726.914 276.355C740.936 262.138 758.885 255.029 780.76 255.029C801.139 255.029 818.059 262.138 831.521 276.355C845.169 290.385 851.993 307.97 851.993 329.109C851.993 335.096 851.432 340.708 850.311 345.946H750.752ZM749.911 314.518H810.207C806.094 299.739 796.184 292.35 780.479 292.35C764.213 292.35 754.024 299.739 749.911 314.518Z"
            fill="url(#paint13_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M941.791 403.19C920.477 403.19 902.715 396.081 888.506 381.864C874.484 367.646 867.473 350.061 867.473 329.109C867.473 308.157 874.484 290.572 888.506 276.355C902.715 262.138 920.477 255.029 941.791 255.029C955.252 255.029 967.592 258.303 978.81 264.85C990.215 271.398 999.002 280.096 1005.17 290.947L968.433 312.273C963.385 301.797 954.318 296.559 941.23 296.559C932.069 296.559 924.497 299.646 918.514 305.819C912.531 311.805 909.54 319.569 909.54 329.109C909.54 338.65 912.531 346.507 918.514 352.68C924.497 358.667 932.069 361.66 941.23 361.66C954.505 361.66 963.572 356.422 968.433 345.946L1005.17 366.991C999.002 378.029 990.308 386.821 979.09 393.369C967.873 399.916 955.439 403.19 941.791 403.19Z"
            fill="url(#paint14_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1056.94 345.946C1061.8 359.041 1073.02 365.588 1090.6 365.588C1102 365.588 1110.98 362.034 1117.52 354.925L1151.17 374.287C1137.34 393.556 1116.96 403.19 1090.04 403.19C1066.48 403.19 1047.59 396.175 1033.39 382.144C1019.36 368.114 1012.35 350.436 1012.35 329.109C1012.35 307.97 1019.27 290.385 1033.1 276.355C1047.13 262.138 1065.08 255.029 1086.95 255.029C1107.33 255.029 1124.25 262.138 1137.71 276.355C1151.36 290.385 1158.18 307.97 1158.18 329.109C1158.18 335.096 1157.62 340.708 1156.5 345.946H1056.94ZM1056.1 314.518H1116.4C1112.28 299.739 1102.38 292.35 1086.67 292.35C1070.4 292.35 1060.21 299.739 1056.1 314.518Z"
            fill="url(#paint15_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1228.73 359.976H1284.54V399.261H1172.36V371.201L1225.36 298.242H1175.16V258.957H1281.73V287.018L1228.73 359.976Z"
            fill="url(#paint16_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1338.76 345.946C1343.62 359.041 1354.84 365.588 1372.41 365.588C1383.82 365.588 1392.79 362.034 1399.34 354.925L1432.99 374.287C1419.15 393.556 1398.77 403.19 1371.85 403.19C1348.29 403.19 1329.41 396.175 1315.2 382.144C1301.18 368.114 1294.17 350.436 1294.17 329.109C1294.17 307.97 1301.09 290.385 1314.92 276.355C1328.94 262.138 1346.89 255.029 1368.77 255.029C1389.15 255.029 1406.07 262.138 1419.53 276.355C1433.18 290.385 1440 307.97 1440 329.109C1440 335.096 1439.44 340.708 1438.32 345.946H1338.76ZM1337.92 314.518H1398.21C1394.1 299.739 1384.19 294.841 1368.49 294.841C1352.22 294.841 1342.03 299.739 1337.92 314.518Z"
            fill="url(#paint17_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <!-- Row 3 -->
          <path
            d="M168.766 461.449H213.638L168.766 601.753H129.504L107.068 526.831L84.6322 601.753H45.3697L0.498272 461.449H45.3697L65.5619 536.652L87.4367 461.449H126.699L148.574 536.652L168.766 461.449Z"
            fill="url(#paint18_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M312.504 457.521C327.461 457.521 339.894 462.665 349.803 472.954C359.899 483.243 364.947 497.46 364.947 515.606V601.753H322.88V521.78C322.88 513.549 320.543 507.282 315.869 502.979C311.382 498.489 305.586 496.244 298.482 496.244C290.442 496.244 284.085 498.676 279.411 503.54C274.737 508.404 272.4 515.606 272.4 525.147V601.753H230.333V405.327H272.4V474.638C280.813 463.226 294.181 457.521 312.504 457.521Z"
            fill="url(#paint19_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M479.437 461.449H524.309L476.353 597.544C468.5 619.618 458.124 635.426 445.223 644.967C432.509 654.507 416.244 658.81 396.425 657.875V618.59C406.147 618.59 413.626 616.812 418.861 613.258C424.096 609.891 428.303 603.904 431.481 595.299L375.672 461.449H421.946L453.076 547.315L479.437 461.449Z"
            fill="url(#paint20_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M692.093 501.857H663.207V551.524C663.207 557.136 665.45 560.691 669.937 562.187C674.425 563.684 681.81 564.152 692.093 563.59V601.753C665.357 604.559 646.847 602.034 636.564 594.177C626.281 586.133 621.14 571.915 621.14 551.524V501.857H598.704V461.449H621.14V434.791L663.207 422.164V461.449H692.093V501.857Z"
            fill="url(#paint21_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M750.752 548.438C755.613 561.533 766.831 568.08 784.406 568.08C795.81 568.08 804.785 564.526 811.328 557.417L844.982 576.779C831.147 596.047 810.768 605.682 783.845 605.682C760.287 605.682 741.404 598.666 727.195 584.636C713.172 570.606 706.161 552.927 706.161 531.601C706.161 510.462 713.079 492.877 726.914 478.847C740.936 464.629 758.885 457.521 780.76 457.521C801.139 457.521 818.059 464.629 831.521 478.847C845.169 492.877 851.993 510.462 851.993 531.601C851.993 537.587 851.432 543.2 850.311 548.438H750.752ZM749.911 517.009H810.207C806.094 502.231 796.184 494.841 780.479 494.841C764.213 494.841 754.024 502.231 749.911 517.009Z"
            fill="url(#paint22_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M941.791 605.682C920.477 605.682 902.715 598.573 888.506 584.355C874.484 570.138 867.473 552.553 867.473 531.601C867.473 510.649 874.484 493.064 888.506 478.847C902.715 464.629 920.477 457.521 941.791 457.521C955.252 457.521 967.592 460.794 978.81 467.342C990.215 473.889 999.002 482.588 1005.17 493.438L968.433 514.765C963.385 504.289 954.318 499.05 941.23 499.05C932.069 499.05 924.497 502.137 918.514 508.311C912.531 514.297 909.54 522.06 909.54 531.601C909.54 541.142 912.531 548.999 918.514 555.172C924.497 561.158 932.069 564.152 941.23 564.152C954.505 564.152 963.572 558.914 968.433 548.438L1005.17 569.483C999.002 580.52 990.308 589.313 979.09 595.86C967.873 602.408 955.439 605.682 941.791 605.682Z"
            fill="url(#paint23_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1056.94 548.438C1061.8 561.533 1073.02 568.08 1090.6 568.08C1102 568.08 1110.98 564.526 1117.52 557.417L1151.17 576.779C1137.34 596.047 1116.96 605.682 1090.04 605.682C1066.48 605.682 1047.59 598.666 1033.39 584.636C1019.36 570.606 1012.35 552.927 1012.35 531.601C1012.35 510.462 1019.27 492.877 1033.1 478.847C1047.13 464.629 1065.08 457.521 1086.95 457.521C1107.33 457.521 1124.25 464.629 1137.71 478.847C1151.36 492.877 1158.18 510.462 1158.18 531.601C1158.18 537.587 1157.62 543.2 1156.5 548.438H1056.94ZM1056.1 517.009H1116.4C1112.28 502.231 1102.38 494.841 1086.67 494.841C1070.4 494.841 1060.21 502.231 1056.1 517.009Z"
            fill="url(#paint24_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1228.73 562.468H1284.54V601.753H1172.36V573.692L1225.36 500.734H1175.16V461.449H1281.73V489.51L1228.73 562.468Z"
            fill="url(#paint25_linear_1666_9593)"
            fill-opacity="0.12"
          />
          <path
            d="M1338.76 548.438C1343.62 561.533 1354.84 568.08 1372.41 568.08C1383.82 568.08 1392.79 564.526 1399.34 557.417L1432.99 576.779C1419.15 596.047 1398.77 605.682 1371.85 605.682C1348.29 605.682 1329.41 598.666 1315.2 584.636C1301.18 570.606 1294.17 552.927 1294.17 531.601C1294.17 510.462 1301.09 492.877 1314.92 478.847C1328.94 464.629 1346.89 457.521 1368.77 457.521C1389.15 457.521 1406.07 464.629 1419.53 478.847C1433.18 492.877 1440 510.462 1440 531.601C1440 537.587 1439.44 543.2 1438.32 548.438H1338.76ZM1337.92 517.009H1398.21C1394.1 502.231 1384.19 494.841 1368.49 494.841C1352.22 494.841 1342.03 502.231 1337.92 517.009Z"
            fill="url(#paint26_linear_1666_9593)"
            fill-opacity="0.12"
          />

          <defs>
            <linearGradient
              id="paint0_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint2_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint3_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint4_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint5_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint6_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint7_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint8_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint9_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint10_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint11_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint12_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint13_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint14_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint15_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint16_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint17_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint18_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint19_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint20_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint21_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint22_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint23_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint24_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint25_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
            <linearGradient
              id="paint26_linear_1666_9593"
              x1="720"
              y1="0"
              x2="720"
              y2="772.882"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#000A2D" />
              <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- Foreground content -->
      <div class="gpu_wtc-content_6b446e">
        <p class="gpu_wtc-eyebrow_b2cfc1">Why Organizations Choose Teceze</p>

        <h2 class="gpu_wtc-headline_d4b451">
          From first consultation to final deployment, Teceze delivers <br />a
          unified approach with a single point of contact and a streamlined<br />
          execution model built to meet enterprise-grade timelines with<br />
          precision and transparency.
          <!-- From the first call to full deployment, Teceze provides one point of accountability and a structured engagement designed for enterprise timelines. -->
        </h2>

        <div class="gpu_wtc-badges_1b3ccd">
          <!-- Badge: Global Delivery -->
          <span class="gpu_wtc-badge_55ca1b">
            <svg
              class="gpu_wtc-badge-icon_f37eb7"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="#1e293b"
              />
            </svg>
            Global Delivery
          </span>

          <!-- Badge: Secure Sourcing -->
          <span class="gpu_wtc-badge_55ca1b">
            <svg
              class="gpu_wtc-badge-icon_f37eb7"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="#1e293b"
              />
            </svg>
            Secure Sourcing
          </span>

          <!-- Badge: Alliance-Led Execution -->
          <span class="gpu_wtc-badge_55ca1b">
            <svg
              class="gpu_wtc-badge-icon_f37eb7"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M21.1744 9.63937C20.8209 9.27 20.4553 8.88938 20.3175 8.55469C20.19 8.24813 20.1825 7.74 20.175 7.24781C20.1609 6.33281 20.1459 5.29594 19.425 4.575C18.7041 3.85406 17.6672 3.83906 16.7522 3.825C16.26 3.8175 15.7519 3.81 15.4453 3.6825C15.1116 3.54469 14.73 3.17906 14.3606 2.82562C13.7137 2.20406 12.9788 1.5 12 1.5C11.0212 1.5 10.2872 2.20406 9.63937 2.82562C9.27 3.17906 8.88938 3.54469 8.55469 3.6825C8.25 3.81 7.74 3.8175 7.24781 3.825C6.33281 3.83906 5.29594 3.85406 4.575 4.575C3.85406 5.29594 3.84375 6.33281 3.825 7.24781C3.8175 7.74 3.81 8.24813 3.6825 8.55469C3.54469 8.88844 3.17906 9.27 2.82562 9.63937C2.20406 10.2863 1.5 11.0212 1.5 12C1.5 12.9788 2.20406 13.7128 2.82562 14.3606C3.17906 14.73 3.54469 15.1106 3.6825 15.4453C3.81 15.7519 3.8175 16.26 3.825 16.7522C3.83906 17.6672 3.85406 18.7041 4.575 19.425C5.29594 20.1459 6.33281 20.1609 7.24781 20.175C7.74 20.1825 8.24813 20.19 8.55469 20.3175C8.88844 20.4553 9.27 20.8209 9.63937 21.1744C10.2863 21.7959 11.0212 22.5 12 22.5C12.9788 22.5 13.7128 21.7959 14.3606 21.1744C14.73 20.8209 15.1106 20.4553 15.4453 20.3175C15.7519 20.19 16.26 20.1825 16.7522 20.175C17.6672 20.1609 18.7041 20.1459 19.425 19.425C20.1459 18.7041 20.1609 17.6672 20.175 16.7522C20.1825 16.26 20.19 15.7519 20.3175 15.4453C20.4553 15.1116 20.8209 14.73 21.1744 14.3606C21.7959 13.7137 22.5 12.9788 22.5 12C22.5 11.0212 21.7959 10.2872 21.1744 9.63937ZM16.2806 9.21937L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3717 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937Z"
                fill="#1e293b"
              />
            </svg>
            Alliance-Led Execution
          </span>
        </div>
      </div>
    </section>

    <section class="gpu_solutions-section_87ec87">
      <!-- Cards -->
      <div class="gpu_cards-row_658f96">
        <!-- Card 1 – Network Automation -->

        <div class="gpu_solution-card_6be91e gpu_card-image_547884">
          <div class="gpu_card-inner_093757">
            <!-- FRONT: your existing image card markup -->
            <div
              class="gpu_card-front_a1f09c"
              style="background-image: url(/images/network-automation.png)"
            >
              <div class="gpu_card-overlay_baf912"></div>
              <div class="gpu_card-image-content_4aca8c">
                <div
                  class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                >
                  <img src="/images/Network-white.svg" alt="Network" />
                </div>
                <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                  EXECUTION
                </p>
                <h3 class="gpu_card-title_aad27e">
                  Global Reach with Local Execution
                </h3>
              </div>
            </div>

            <!-- BACK: light gradient card -->
            <div class="gpu_card-back_f23723">
              <div class="gpu_card-back-top_3fb120">
                <div class="gpu_card-back-icon_7d4a0a">
                  <img src="/images/Network.svg" />
                </div>
                <p class="gpu_card-back-category_e938be">EXECUTION</p>
                <h3 class="gpu_card-back-title_3e2415">
                  Global Reach with Local Execution
                </h3>
              </div>
              <p class="gpu_card-back-desc_251954">
                We operate across APAC, EMEA, and the Americas with strong
                regional expertise and on-ground delivery capabilities to ensure
                faster, reliable outcomes.
              </p>
            </div>
          </div>
        </div>

        <div class="gpu_solution-card_6be91e gpu_card-image_547884">
          <div class="gpu_card-inner_093757">
            <!-- FRONT: your existing image card markup -->
            <div
              class="gpu_card-front_a1f09c"
              style="background-image: url(/images/Cyber\ Security.png)"
            >
              <div class="gpu_card-overlay_baf912"></div>
              <div class="gpu_card-image-content_4aca8c">
                <div
                  class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                >
                  <img
                    style="stroke: #fff"
                    src="/images/ShieldCheck.svg"
                    alt="Shield"
                  />
                </div>
                <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                  Secure Sourcing (PaaS)
                </p>
                <h3 class="gpu_card-title_aad27e">
                  PAAS model ensures auditable
                </h3>
              </div>
            </div>

            <!-- BACK: light gradient card -->
            <div class="gpu_card-back_f23723">
              <div class="gpu_card-back-top_3fb120">
                <div class="gpu_card-back-icon_7d4a0a">
                  <img src="/images/ShieldCheck-blue.svg" />
                </div>
                <p class="gpu_card-back-category_e938be">
                  Secure Sourcing (PaaS)
                </p>
                <h3 class="gpu_card-back-title_3e2415">
                  PAAS model ensures auditable
                </h3>
              </div>
              <p class="gpu_card-back-desc_251954">
                Our platform-driven sourcing model provides full visibility,
                compliance assurance, and audit-ready processes, ensuring
                accountability at every step.
              </p>
            </div>
          </div>
        </div>

        <div class="gpu_solution-card_6be91e gpu_card-image_547884">
          <div class="gpu_card-inner_093757">
            <!-- FRONT: your existing image card markup -->
            <div
              class="gpu_card-front_a1f09c"
              style="background-image: url(/images/Digital\ Workspace.png)"
            >
              <div class="gpu_card-overlay_baf912"></div>
              <div class="gpu_card-image-content_4aca8c">
                <div
                  class="gpu_card-icon-wrap_699c53 gpu_card-icon-teal_b6e62e"
                >
                  <img src="/images/Monitor.svg" alt="Monitor" />
                </div>
                <p class="gpu_card-category_03f56e gpu_card-cat-white_087502">
                  Strong OEM Ecosystem
                </p>
                <h3 class="gpu_card-title_aad27e">
                  Modern Collaboration Solutions
                </h3>
              </div>
            </div>

            <!-- BACK: light gradient card -->
            <div class="gpu_card-back_f23723">
              <div class="gpu_card-back-top_3fb120">
                <div class="gpu_card-back-icon_7d4a0a">
                  <img src="/images/Monitor-blue.svg" />
                </div>
                <p class="gpu_card-back-category_e938be">
                  STRONG OEM ECOSYSTEM
                </p>
                <h3 class="gpu_card-back-title_3e2415">
                  Modern Collaboration Solutions
                </h3>
              </div>
              <p class="gpu_card-back-desc_251954">
                Leverage next-gen collaboration technologies powered by trusted
                OEM partnerships to enhance productivity, communication, and
                business agility.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Teceze -->

    <!-- Contact Us-->
    <section class="gpu_cu-section_3c5ef3">
      <div class="gpu_cu-inner_54c0a4">
        <!-- Left card -->
        <div class="gpu_cu-card_b030fe">
          <div class="gpu_cu-card-wave_ee1159"></div>
          <div class="gpu_cu-card-blob_83ebe7"></div>
          <p class="gpu_cu-card-label_88acec">Get In Touch</p>
          <h3 class="gpu_cu-card-title_e45b6f">
            Let's Strengthen Your Security Strategy
          </h3>
          <p class="gpu_cu-card-desc_c9c950">
            Schedule a personalized consultation with our experts to assess
            risks, improve resilience, and future-proof your IT infrastructure.
          </p>
        </div>

        <!-- Right form -->
        <div class="gpu_cu-form-wrap_a2f415">
          <h2>Contact us now</h2>
          <p>
            Fill in your details and our team will get back to you within
            minutes.
          </p>

          <!-- Name row -->
          <div class="gpu_cu-row_b7fc9c">
            <div class="gpu_cu-field_ee8c53">
              <label>First Name</label>
              <input type="text" placeholder="John" />
            </div>
            <div class="gpu_cu-field_ee8c53">
              <label>Last Name</label>
              <input type="text" placeholder="David" />
            </div>
          </div>

          <!-- Phone -->
          <div class="gpu_cu-field_ee8c53" style="margin-bottom: 16px">
            <label>Phone number</label>
            <div class="gpu_cu-phone-row_36ca53">
              <div class="gpu_cu-phone-prefix_c93a27">
                <img
                  id="countryFlag"
                  src="https://flagcdn.com/us.svg"
                  class="gpu_cu-flag_4f2b94"
                  alt="US"
                />
                <select id="countryCode">
                  <option value="+1" data-flag="us">+1</option>
                  <option value="+44" data-flag="gb">+44</option>
                  <option value="+91" data-flag="in">+91</option>
                  <option value="+61" data-flag="au">+61</option>
                </select>
              </div>
              <input
                class="gpu_cu-phone-input_a5360b"
                type="tel"
                placeholder="Phone number"
              />
            </div>
          </div>

          <!-- Service -->
          <div class="gpu_cu-field_ee8c53" style="margin-bottom: 16px">
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
          <div class="gpu_cu-field_ee8c53" style="margin-bottom: 8px">
            <label>Describe your case</label>
            <textarea placeholder="Tell us about your use case..."></textarea>
          </div>

          <!-- Submit -->
          <!-- <button class="gpu_cu-btn_196f6d">
            <span class="gpu_cu-btn-dot_3b5bc2"><img src="/images/ArrowRight.svg" alt="" class="gpu_hero-btn-arrow_9738d4" /></span>
            Get In Touch
          </button> -->

          <button class="gpu_btn-all_a3ae09">
            <span class="gpu_hero-btn-dot_e7fa40">
              <svg
                width="20"
                height="20"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 6H10M10 6L6.5 2.5M10 6L6.5 9.5"
                  stroke="#fff"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
            Get In Touch
          </button>
        </div>
      </div>
    </section>
    <!-- Contact Us-->

    <!-- =========================
     PARENT SECTION
========================= -->
    <section class="gpu_git-section_5b6843">
      <section class="gpu_git-banner_9a15f1">
        <!-- Content -->
        <div class="gpu_git-content_305f8b">
          <p class="gpu_git-eyebrow_2ba754">Get In Touch</p>

          <h2 class="gpu_git-heading_39a8ae">
            Ready to start the conversation?
          </h2>

          <p class="gpu_git-desc_f13d22">
            Let’s explore how Teceze can deliver measurable value to your
            organization through tailored IT and security solutions.
          </p>

          <a
            class="gpu_hero-btn_7bd1ba"
            href="https://teal-mule-553916.hostingersite.com/Contactus.php"
          >
            <span class="gpu_hero-btn-dot_e7fa40">
              <img
                src="/images/ArrowRight.svg"
                alt=""
                class="gpu_hero-btn-arrow_9738d4"
              />
            </span>

            Talk to Our Alliances Team
          </a>
        </div>
      </section>
    </section>

    <script>
      const countrySelect = document.getElementById("countryCode");
      const countryFlag = document.getElementById("countryFlag");

      countrySelect.addEventListener("change", function () {
        const selected =
          this.options[this.selectedIndex].gpu_dataset_3c4d09.flag;

        countryFlag.src = `https://flagcdn.com/${selected}.gpu_svg_ae8eb9`;
      });

      const slides = [
        {
          tag: "Global Enterprise Network Transformation",
          title:
            "Deployed a fully automated SD-WAN and network monitoring solution for a Fortune 500 enterprise across 40+ countries.",
          img: "/images/1st-bg-img-case-study.png",
          alt: "Global Enterprise Network Transformation",
        },
        {
          tag: "Secure Cloud Deployment for BFSI",
          title:
            "Designed and implemented a zero-trust security framework for a large-scale financial cloud migration.",
          img: "/images/2nd-bg-img-case-study.png",
          alt: "Secure Cloud Deployment for BFSI",
        },
        {
          tag: "Seamless Customer Clearance for TVS Group",
          title:
            "Enabled seamless customer clearance for TVS Group, ensuring smooth documentation, coordination, and compliant delivery.",
          img: "/images/3rd-bg-img-case-study.png",
          alt: "TVS Group",
        },
      ];

      let current = 0;
      let isAnimating = false;

      function updateSlide(direction = "next") {
        const leftIndex = current;
        const rightIndex = (current + 1) % slides.length;

        const leftSlide = slides[leftIndex];
        const rightSlide = slides[rightIndex];

        const slide = document.getElementById("slideContent");

        // add direction based animation
        slide.style.transform =
          direction === "next" ? "translateX(40px)" : "translateX(-40px)";

        slide.classList.add("gpu_fade-out_ee9246");

        setTimeout(() => {
          // LEFT CONTENT
          document.getElementById("leftTag").gpu_textContent_6b7fd8 =
            leftSlide.tag;
          document.getElementById("leftTitle").gpu_textContent_6b7fd8 =
            leftSlide.title;

          // RIGHT CARD CONTENT
          document.getElementById("cardImg").gpu_src_25d902 = rightSlide.img;
          document.getElementById("cardImg").gpu_alt_348231 = rightSlide.alt;
          document.getElementById("cardTag").gpu_textContent_6b7fd8 =
            rightSlide.tag;
          document.getElementById("cardTitle").gpu_textContent_6b7fd8 =
            rightSlide.title;

          // COUNTER
          const visibleStep = current % 2 === 0 ? "01" : "02";

          document.querySelector(
            "#bottomCounter .gpu_num_0fc3cf",
          ).gpu_textContent_6b7fd8 = visibleStep;

          document.querySelector(
            "#bottomCounter .gpu_total_fbb44b",
          ).gpu_textContent_6b7fd8 = "/ 02";

          // reset
          slide.classList.remove("gpu_fade-out_ee9246");
          slide.style.transform = "translateX(0)";
          isAnimating = false;
        }, 400);
      }

      function go(dir) {
        if (isAnimating) return;

        isAnimating = true;

        if (dir === 1) {
          // NEXT
          current = (current + 1) % slides.length;
          updateSlide("next");
        } else {
          // PREVIOUS
          current = (current - 1 + slides.length) % slides.length;
          updateSlide("prev");
        }
      }

      // INITIAL LOAD
      updateSlide();

      /*document
                                  .gpu_getElementById_5e025c("topPrev")
                                  .gpu_addEventListener_ad67cc("click", () => go(-1));
                                document.getElementById("topNext").gpu_addEventListener_ad67cc("click", () => go(1));*/

      /* ADD ONLY THIS JS */

      const cardsRow = document.getElementById("cardsRow");
      const prevBtn = document.getElementById("topPrev");
      const nextBtn = document.getElementById("topNext");

      let currentIndex = 0;

      const cards = Array.from(cardsRow.children);
      const totalCards = cards.length;

      function updateCounter() {
        const counter = document.querySelector("#topCounter .gpu_num_0fc3cf");

        let displayIndex = currentIndex + 1;

        if (displayIndex < 10) {
          displayIndex = `0${displayIndex}`;
        }

        counter.textContent = displayIndex;
      }

      function getCardWidth() {
        const card = cardsRow.querySelector(
          ":scope > .gpu_solution-card_6be91e",
        );
        const gap = 20;

        return card.offsetWidth + gap;
      }

      function slideTo(index, direction = "next") {
        if (cardsRow.classList.contains("gpu_animating_35898a")) return;

        cardsRow.classList.add("gpu_animating_35898a");

        const cardWidth = getCardWidth();

        if (direction === "next") {
          cardsRow.style.transform = `translateX(-${cardWidth}px)`;

          setTimeout(() => {
            cardsRow.appendChild(cardsRow.firstElementChild);

            cardsRow.style.transition = "none";
            cardsRow.style.transform = `translateX(0px)`;

            requestAnimationFrame(() => {
              requestAnimationFrame(() => {
                cardsRow.style.transition =
                  "transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)";
              });
            });

            cardsRow.classList.remove("gpu_animating_35898a");
          }, 700);

          currentIndex = (currentIndex + 1) % totalCards;
        } else {
          cardsRow.style.transition = "none";

          cardsRow.insertBefore(
            cardsRow.lastElementChild,
            cardsRow.firstElementChild,
          );

          cardsRow.style.transform = `translateX(-${cardWidth}px)`;

          requestAnimationFrame(() => {
            requestAnimationFrame(() => {
              cardsRow.style.transition =
                "transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)";
              cardsRow.style.transform = `translateX(0px)`;
            });
          });

          setTimeout(() => {
            cardsRow.classList.remove("gpu_animating_35898a");
          }, 700);

          currentIndex = (currentIndex - 1 + totalCards) % totalCards;
        }

        updateCounter();
      }

      /* next */
      nextBtn.addEventListener("click", () => {
        slideTo(currentIndex + 1, "next");
      });

      /* prev */
      prevBtn.addEventListener("click", () => {
        slideTo(currentIndex - 1, "prev");
      });

      /* initial counter */
      updateCounter();

      document
        .gpu_getElementById_5e025c("botPrev")
        .gpu_addEventListener_ad67cc("click", () => go(-1));
      document
        .getElementById("botNext")
        .gpu_addEventListener_ad67cc("click", () => go(1));
    </script>
  </body>
</html>


<?php include 'footer.php'; ?>