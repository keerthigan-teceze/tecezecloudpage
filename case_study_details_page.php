<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Case Study - Tanner Pharma Group</title>
    <?php include 'header.php'; ?>
    <!-- intl-tel-input CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/css/intlTelInput.css"
    />
    <style>
      /* ========================
   GLOBAL RESET
   ======================== */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      @font-face {
        font-family: "Gilroy";
        src:
          url("/font/Gilroy-Medium.woff2") format("woff2-variations"),
          url("/fonts/Gilroy-Medium.woff") format("woff");
        font-weight: 400 700;
        font-style: normal;
        font-display: swap;
      }
      html,
      body {
        width: 100%;
        overflow-x: hidden;
      }

      body {
        font-family: "Gilroy", sans-serif;
        overflow-x: hidden;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
      }

      /* ========================
   HERO SECTION
   ======================== */
      .hero-section {
        min-height: 100vh;
        background-image: url("/images/caseStudyBG.jpg");
        background-size: 100% 100%;
        background-position: center bottom;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 20px;
        color: #fff;
      }

      @media (min-width: 768px) {
        .hero-section {
          padding: 134px 80px;
        }
      }

      @media (max-width: 768px) {
        .hero-section {
          justify-content: flex-start;
          padding-top: 100px;
        }
      }

      @media (max-width: 768px) {
        .metrics-section {
          margin-top: 48px;
        }
      }

      @media (max-width: 480px) {
        .metrics-section {
          gap: 16px;
        }

        .metric-value {
          font-size: 32px;
        }

        .metric-label {
          font-size: 14px;
        }
      }

      @media (max-width: 768px) {
        .hero-section::before,
        .hero-section::after {
          width: 70vw;
          height: 70vw;
          max-width: 400px;
          max-height: 400px;
        }
      }

      .hero-section::before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        max-width: 800px;
        max-height: 800px;
        background-image: url("/images/Case Study gradient left.svg");
        background-size: 100% 100%;
        background-position: bottom right;
        background-repeat: no-repeat;
        pointer-events: none;
        z-index: 1;
        filter: saturate(140%) contrast(120%);
      }

      .hero-section > * {
        position: relative;
        z-index: 2;
      }

      .hero-section::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        max-width: 800px;
        max-height: 800px;
        background-image: url("images/Case Study gradient left.svg");
        background-size: 100% 100%;
        background-position: top left;
        background-repeat: no-repeat;
        pointer-events: none;
        z-index: 1;
        filter: saturate(140%) contrast(120%);
        transform: rotate(180deg);
      }

      .breadcrumb {
        font-size: 20px;
        letter-spacing: 1px;
        margin-bottom: 16px;
        text-transform: uppercase;
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
      }

      @font-face {
        font-family: "Gilroy-Medium";
        src:
          url("font/Gilroy-Medium.woff2") format("woff2"),
          url("font/Gilroy-Medium.woff") format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }

      @font-face {
        font-family: "Gilroy-SemiBold";
        src:
          url("font/Gilroy-SemiBold.woff2") format("woff2"),
          url("font/Gilroy-SemiBold.woff") format("woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }

      .divider {
        width: 100%;
        max-width: 1350px;
        height: 1px;
        background: #ffffffdf;
        margin-bottom: 40px;
      }

      .hero-title {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: clamp(32px, 6vw, 64px);
        line-height: 1.2;
        letter-spacing: 0%;
        max-width: none;
        margin-bottom: 32px;
      }

      .hero-title br.line1-end {
        display: block;
        margin-bottom: 0;
      }

      .hero-title br.line2-end {
        display: block;
        margin-bottom: 0;
      }

      .hero-description {
        font-family: "Gilroy-Medium", Arial, sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: clamp(16px, 4vw, 20px);
        line-height: 1.5;
        letter-spacing: 0%;
        max-width: 580px;
        margin-bottom: 40px;
      }

      .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 14px 28px;
        border: 1px solid #fff;
        border-radius: 50px;
        color: #fff;
        text-decoration: none;
        transition: 0.3s ease;
        max-width: 300px;
      }

      .cta-button .icon-circle {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: linear-gradient(270.28deg, #13c5b8 -7.98%, #2a44b0 102.47%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .cta-button .icon-circle img {
        width: 16px;
        height: 16px;
      }

      .cta-button:hover {
        background: #fff;
        color: #333;
      }

      .cta-button:hover .cta-button-text {
        color: #000;
      }

      /* ========================
   METRICS
   ======================== */

      .metrics-section {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        justify-content: center;
        align-items: center;
        gap: 60px;
        margin: 80px auto 0;
        max-width: 1200px;
        width: 100%;
      }

      .metric-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        flex: 0 1 200px;
      }

      .metric-value {
        font-family: "Gilroy", sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: clamp(36px, 8vw, 68px);
        line-height: 1;
        letter-spacing: 0%;
        text-align: center;
        padding: 10px 0;
      }

      .metric-label {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 1;
        letter-spacing: 0%;
        text-align: center;
        text-transform: capitalize;
      }

      /* ========================
   CASE STUDY SECTION
   ======================== */
      .case-study-section {
        background: #fff;
        padding: 40px 20px;
      }

      @media (min-width: 768px) {
        .case-study-section {
          padding: 60px 40px;
        }
      }

      @media (min-width: 1200px) {
        .case-study-section {
          padding: 60px 80px;
        }
      }

      .case-study-container {
        max-width: 1300px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: stretch;
      }

      @media (min-width: 768px) {
        .case-study-container {
          grid-template-columns: 1fr 1fr;
          gap: 80px;
        }
      }

      .case-study-image-col {
        display: flex;
      }

      .case-study-text-col {
        display: flex;
        flex-direction: column;
      }

      .case-study-image {
        width: 100%;
        height: 100%;
        /* 🔑 match right column height */
        object-fit: cover;
        border-radius: 20px;
      }

      .section-label {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 18px;
        line-height: 1;
        letter-spacing: 0%;
        text-transform: capitalize;
        color: #6b7280;
        margin-bottom: 12px;
      }

      .main-heading {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: clamp(24px, 4vw, 40px);
        line-height: 1.3;
        letter-spacing: 0%;
        color: #1e3a5f;
        margin-bottom: 24px;
      }

      .description {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 18px;
        line-height: 1;
        letter-spacing: 0%;
        color: #4b5563;
        margin-bottom: 48px;
      }

      .highlight-cards {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        gap: 16px;
        flex: 1;
      }

      @media (min-width: 640px) {
        .highlight-cards {
          grid-template-columns: repeat(2, 1fr);
          grid-template-rows: auto auto;
        }
      }

      @media (min-width: 1024px) {
        .highlight-cards {
          grid-template-rows: 1fr 1fr auto;
          gap: 24px;
        }
      }

      .card {
        background: #b8b8b81a;
        padding: 28px;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .card-full {
        grid-column: 1 / -1;
      }

      .card-title {
        font-size: 24px;
        font-weight: 600;
        margin-top: 12px;
        margin-bottom: 12px;
        color: #1e3a5f;
      }

      .card-desc {
        font-size: 20px;
        line-height: 1.5;
        color: #6b7280;
      }

      .client-details-section {
        padding: 40px 20px 60px;
        background: #fff;
      }

      @media (min-width: 768px) {
        .client-details-section {
          padding: 40px 40px 60px;
        }
      }

      @media (min-width: 1200px) {
        .client-details-section {
          padding: 20px 80px 60px;
        }
      }

      .client-details-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        text-align: center;
      }

      @media (min-width: 768px) {
        .client-details-container {
          grid-template-columns: repeat(4, 1fr);
          gap: 40px;
        }
      }

      .client-detail-value {
        font-size: clamp(36px, 8vw, 58px);
        font-weight: 600;
        color: #0f172a;
        /* dark navy */
        margin-bottom: 8px;
      }

      .client-detail-label {
        font-size: 14px;
        color: #64748b;
        /* muted gray */
      }

      /* ========================
   DARK SECTION
   ======================== */
      .dark-section {
        position: relative;
        min-height: 100vh;
        background-color: #020b2d;
        overflow: hidden;
        isolation: isolate;
      }

      .dark-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
          radial-gradient(
            ellipse 80% 120% at 0% 50%,
            rgba(0, 160, 200, 0.4) 0%,
            transparent 50%
          ),
          radial-gradient(
            ellipse 80% 80% at 100% 50%,
            rgba(0, 120, 255, 0.35) 0%,
            transparent 45%
          ),
          repeating-linear-gradient(
            0deg,
            transparent,
            transparent 119px,
            rgba(255, 255, 255, 0.25) 120px
          ),
          repeating-linear-gradient(
            90deg,
            transparent,
            transparent 119px,
            rgba(255, 255, 255, 0.25) 120px
          ),
          linear-gradient(
            180deg,
            rgba(2, 11, 45, 0.7) 0%,
            rgba(3, 24, 63, 0.85) 50%,
            rgba(2, 11, 45, 1) 100%
          );
        pointer-events: none;
        z-index: -1;
      }

      .dark-content-wrapper {
        padding: 40px 20px;
        max-width: 1400px;
        margin: auto;
      }

      @media (min-width: 768px) {
        .dark-content-wrapper {
          padding: 60px 40px;
        }
      }

      @media (min-width: 1200px) {
        .dark-content-wrapper {
          padding: 80px 60px;
        }
      }

      .header-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
      }

      @media (min-width: 768px) {
        .header-grid {
          grid-template-columns: 1fr 1fr;
          gap: 40px;
        }
      }

      .section-label-alt {
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 1px;
        text-transform: capitalize;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 12px;
      }

      .main-heading-alt {
        font-size: clamp(28px, 5vw, 42px);
        font-weight: 700;
        color: white;
      }

      .supporting-text {
        font-size: 16px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.75);
        text-align: right;
      }

      .cards-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
        margin-top: 60px;
        align-items: stretch;
      }

      @media (min-width: 1024px) {
        .cards-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (min-width: 1200px) {
        .cards-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 28px;
        border-radius: 16px;
        backdrop-filter: blur(2px) saturate(1.2);
        -webkit-backdrop-filter: blur(2px) saturate(1.2);
        display: flex;
        flex-direction: column;
      }

      .card-inner {
        display: flex;
        flex-direction: column;
      }

      .glass-card.tall-card .card-inner {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
      }

      .glass-card.tall-card .card-title-alt {
        margin-bottom: auto;
      }

      .glass-card.tall-card .card-desc {
        margin-top: auto;
        margin-bottom: 20px;
      }

      .glass-card.tall-card {
        flex: 1;
        min-height: 500px;
      }

      .human-risk-bg {
       
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        isolation: isolate;

        /* ✅ image + overlay gradient */
        background-image:
          linear-gradient(
            133.73deg,
            rgba(37, 89, 202, 0.6) 0%,
            rgba(58, 184, 241, 0.6) 52.43%,
            rgba(46, 222, 219, 0.6) 80%
          ),
    
          url("/images/humanRisk.jpg");
      }

      .human-risk-bg::before {
        content: "";
        position: absolute;
        inset: 0;

        /* subtle darkening to keep text readable */
        background: linear-gradient(
          180deg,
          rgba(2, 11, 45, 0.95) 0%,
          rgba(15, 50, 100, 0.7) 100%
        );
        opacity: 0.85;
        border-radius: 16px;
        z-index: -1;
      }

      .human-risk-bg::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(2, 11, 45, 0.15);
        backdrop-filter: blur(2px) brightness(1.1);
        -webkit-backdrop-filter: blur(2px) brightness(1.1);
        border-radius: 16px;
        z-index: -1;
      }

      .human-risk-bg .card-inner {
        position: relative;
        z-index: 1;
      }

      .glass-card.flex-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1;
        min-height: 240px;
      }

      .glass-card.flex-card .card-title-alt {
        margin-bottom: auto;
      }

      .glass-card.flex-card .card-desc {
        margin-top: auto;
      }

      .card-col {
        display: flex;
        flex-direction: column;
        gap: 24px;
        height: 100%;
      }

      @media (max-width: 1023px) {
        .card-col {
          height: auto;
        }
      }

      .flex-card {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .card-inner {
        display: flex;
        flex-direction: column;
      }

      .card-title-alt {
        margin-bottom: 12px;
      }

      .card-desc {
        line-height: 1.6;
        margin: 0;
      }

      .card-image-bottom {
        margin-top: auto;
        margin-bottom: 0;
        border-radius: 12px;
        overflow: hidden;
        height: 180px;
      }

      .card-image-bottom img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .dark-section .card-title-alt {
        font-size: 22px;
        font-weight: 700;
        color: white;
        margin-bottom: 12px;
      }

      .dark-section .card-desc {
        font-size: 15px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.7);
      }

      .tall-card {
        min-height: 0;
      }

      /* ========================
   SOLUTION SECTION
   ======================== */
      .solution-section {
        background: #fff;
        padding: 60px 20px;
      }

      @media (min-width: 768px) {
        .solution-section {
          padding: 80px 40px;
        }
      }

      @media (min-width: 1200px) {
        .solution-section {
          padding: 100px 80px;
        }
      }

      .solution-container {
        max-width: 1400px;
        margin: auto;
      }

      .solution-header {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
        margin-bottom: 60px;
      }

      @media (min-width: 768px) {
        .solution-header {
          grid-template-columns: 1fr 1fr;
          gap: 60px;
        }
      }

      .section-title-large {
        font-size: clamp(26px, 4vw, 42px);
        color: #1e3a5f;
      }

      .capabilities-row-container {
        width: 100%;
        background: #f1f1f1;
        padding: 20px 0;
        margin-bottom: 60px;
        overflow: hidden;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        border-radius: 15px;
      }

      body {
        overflow-x: hidden;
      }

      .capabilities-row {
        display: flex;
        flex-wrap: nowrap;
        gap: 40px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        /* remove inner side padding so background spans full screen */
        justify-content: center;
        align-items: center;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      /* prevent horizontal side gaps caused by fixed padding + flex */
      body {
        overflow-x: hidden;
      }

      .capability-item {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        gap: 16px;
      }

      .capabilities-row {
        display: flex;
        flex-wrap: nowrap;
        gap: 40px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        /* remove inner side padding so background spans full screen */
        justify-content: center;
        align-items: center;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      /* On mobile, stack items vertically */
      @media (max-width: 768px) {
        .capabilities-row {
          flex-direction: column;
          flex-wrap: wrap;
          overflow-x: visible;
          padding: 0;
        }

        .capability-item {
          flex: 1 1 auto;
          width: 100%;
          justify-content: flex-start;
          flex-wrap: nowrap;
          gap: 12px;
        }

        .capability-text {
          font-size: 15px;
          line-height: 1.5;
        }
      }

      .capability-icon {
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;
      }

      .capability-text {
        font-size: 16px;
        color: #1f2937;
        line-height: 1.4;
      }

      /* ========================
   EXECUTION CARDS
   ======================== */
      .execution-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
      }

      @media (max-width: 1024px) {
        .execution-cards {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      .exec-card {
        background: #f1f1f1;
        padding: 32px 24px;
        border-radius: 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 16px;
        box-shadow:
          0 4px 12px rgba(0, 0, 0, 0.1),
          0 2px 4px rgba(0, 0, 0, 0.06);
        transition:
          box-shadow 0.3s ease,
          transform 0.3s ease;
      }

      .exec-card:hover {
        box-shadow:
          0 8px 25px rgba(0, 0, 0, 0.15),
          0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-4px);
      }

      .exec-icon {
        width: 48px;
        height: 48px;
        display: block;
      }

      .exec-title {
        font-size: 15px;
        font-weight: 600;
        color: #1e3a5f;
        margin: 0;
      }

      /* ========================
   OUTCOMES SECTION
   ======================== */
      .outcomes-section {
        background: #fff;
        padding: 60px 20px;
        position: relative;
        min-height: auto;
        margin-bottom: 20px;
      }

      @media (min-width: 768px) {
        .outcomes-section {
          padding: 80px 40px;
          min-height: 680px;
        }
      }

      @media (min-width: 1200px) {
        .outcomes-section {
          padding: 100px 80px;
          min-height: 720px;
        }
      }

      .outcomes-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: url("/images/Outcomes glow.svg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        transform: scale(0.85);
        z-index: 0;
        pointer-events: none;
      }

      .outcomes-container {
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
      }

      .outcomes-bg {
        width: 100%;
        height: auto;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 0;
        pointer-events: none;
      }

      .outcomes-foreground {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1240px;
        height: auto;
        min-height: 512px;
        margin: 12px auto 0;
        padding: 36px;
        border-radius: 16px;
        pointer-events: none;
        overflow: visible;
      }

      .outcomes-card {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin: 120px auto 0;
      }

      .outcomes-meta {
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0.5px;
        color: #6b7280;
        text-align: center;
        margin-top: 8px;
        margin-bottom: 12px;
      }

      .outcomes-heading {
        font-size: 22px;
        font-weight: 500;
        line-height: 1.45;
        color: #1e3a5f;
        text-align: center;
        max-width: 740px;
        margin: 0 auto;
        flex-shrink: 0;
      }

      .outcomes-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-top: 36px;
        align-items: end;
        flex-grow: 1;
      }

      .outcomes-card-item {
        background: #ffffff;
        border-radius: 14px;
        padding: 24px;
        display: flex;
        flex-direction: column;
        height: 100%;
      }

      .outcomes-card-title {
        font-size: 14px;
        font-weight: 500;
        color: #1e3a5f;
        margin-bottom: 8px;
      }

      .outcomes-card-desc {
        font-size: 13px;
        color: #6b7280;
        line-height: 1.5;
        flex-grow: 1;
      }

      .outcomes-card-metric {
        font-size: clamp(36px, 8vw, 50px);
        font-weight: 700;
        align-self: flex-start;
        margin-top: auto;
        padding-top: 16px;

        /* Gradient like "Zero" text */
        background: linear-gradient(
          133.73deg,
          #2559ca 0%,
          #3ab8f1 52.43%,
          #2ededb 100%
        );

        /* Apply gradient to text */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
      }

      .outcomes-card-metric-zero {
        font-size: clamp(36px, 8vw, 50px);
        font-weight: 700;
        align-self: flex-start;
        margin-top: 0;
        margin-bottom: auto;
        padding-top: 16px;

        /* Gradient like "Zero" text */
        background: linear-gradient(
          133.73deg,
          #2559ca 0%,
          #3ab8f1 52.43%,
          #2ededb 100%
        );

        /* Apply gradient to text */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
      }

      .outcomes-card-emphasis {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        text-align: left;
        padding-top: 4px;
      }

      .outcomes-card-sub {
        font-size: 15px;
        font-weight: 500;
        color: #1e3a5f;
        margin: 0 0 6px 0;
      }

      .outcomes-card-desc-sm {
        font-size: 13px;
        color: #6b7280;
        line-height: 1.5;
      }

      /* ========================
   RESPONSIVE FIXED
   ======================== */
      @media (max-width: 1024px) {
        .outcomes-section {
          min-height: 680px;
          padding: 80px 40px;
        }

        .outcomes-foreground {
          width: 100%;
          max-width: 1240px;
        }

        .outcomes-grid {
          gap: 16px;
        }

        .outcomes-card-item {
          padding: 20px;
        }
      }

      @media (max-width: 768px) {
        .outcomes-section {
          min-height: auto;
          padding: 200px 20px 60px;
          position: relative;
        }

        .outcomes-bg {
          position: absolute;
          top: 120px;
          transform: translateX(-50%);
          left: 50%;
          width: 100%;
          max-width: 100%;
        }

        .outcomes-foreground {
          position: relative;
          height: auto;
          min-height: 512px;
          padding: 28px 24px;
        }

        .outcomes-grid {
          grid-template-columns: 1fr;
          margin-top: 28px;
          align-items: stretch;
        }

        .outcomes-card-item {
          max-width: 320px;
          margin: 0 auto;
        }

        .outcomes-card-emphasis {
          order: -1;
        }

        .outcomes-card-emphasis .outcomes-card-item {
          margin-bottom: 16px;
        }
      }

      @media (max-width: 640px) {
        .metrics-section {
          grid-template-columns: repeat(2, 1fr);
          gap: 20px;
        }
      }

      /* ========================
    CTA SECTION
    ======================== */
      .cta-section {
        position: relative;
        overflow: hidden;
      }

      .cta-card {
        background-image: url("/images/CTA-bg-img.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 80%;
        max-width: 1200px;
        margin: 60px auto;
        border-radius: 20px;
        position: relative;
        overflow: hidden;
        min-height: 340px;
      }

      /* .cta-card::before {
      content: "";
      display: block;
      padding-top: 56.25%;
    } */

      .cta-card-content {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        color: white;
        padding: 40px;
        max-width: 600px;
      }

      .cta-card-content {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        color: white;
        padding: 0 0 0 48px;
        max-width: 600px;
      }

      .cta-label {
        font-size: 13px;
        font-weight: 400;
        color: white;
        letter-spacing: 0.5px;
        text-transform: none;
        margin-bottom: 8px;
        display: block;
      }

      .cta-heading {
        font-size: 28px;
        font-weight: 600;
        color: white;
        line-height: 1.2;
        margin: 0 0 10px 0;
        white-space: normal;
      }

      @media (max-width: 768px) {
        .cta-heading {
          font-size: 24px;
        }
      }

      @media (max-width: 480px) {
        .cta-heading {
          font-size: 20px;
          white-space: normal;
        }
      }

      .cta-description {
        font-size: 16px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        margin: 0 0 22px 0;
      }

      .cta-button {
        display: inline-flex;
        align-items: center;
        border: 1px solid white;
        border-radius: 50px;
        color: white;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        padding: 12px 24px;
        gap: 10px;
        transition: all 0.3s ease;
      }

      .cta-button:hover {
        border-color: rgba(255, 255, 255, 0.8);
      }

      .cta-button-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        background: linear-gradient(135deg, #4f9fff, #0066ff);
        border-radius: 50%;
        color: white;
        font-size: 14px;
      }

      .cta-button-text {
        font-size: 15px;
        font-weight: 500;
        color: white;
        white-space: nowrap;
      }

      @media (max-width: 480px) {
        .cta-button-text {
          white-space: normal;
          text-align: center;
        }
      }

      @media (max-width: 768px) {
        .cta-card {
          width: 90%;
          min-height: 220px;
        }

        .cta-card-content {
          padding-left: 40px;
        }

        .cta-heading {
          font-size: 24px;
        }

        .cta-description {
          font-size: 15px;
        }
      }

      @media (max-width: 480px) {
        .cta-card {
          min-height: auto;
          padding: 24px;
          width: 90%;
        }

        .cta-card-content {
          position: relative;
          padding: 0;
          align-items: center;
          text-align: center;
        }

        .cta-label {
          margin-bottom: 6px;
        }

        .cta-heading {
          font-size: 20px;
          margin-bottom: 8px;
        }

        .cta-description {
          font-size: 14px;
          margin-bottom: 18px;
        }

        .cta-button {
          padding: 10px 20px;
          font-size: 14px;
        }
      }

      /* ========================
    COMPACT FAQ SECTION
    ======================== */
      .faq-compact {
        margin-top: 50px;
        padding: 40px 0;
        /* Span full screen while keeping inner padding handled by __inner */
      }

      .faq-compact__inner {
        display: flex;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        gap: 56px;
        align-items: flex-start;
        padding: 0 20px;
      }

      @media (min-width: 768px) {
        .faq-compact__inner {
          padding: 0 80px;
        }
      }

      .faq-compact__left {
        flex: 0 0 42%;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        min-height: 0;
      }

      .faq-compact__svg {
        width: 100%;
        height: auto;
        max-width: 100%;
        object-fit: contain;
      }


      .faq-compact__right {
        flex: 1;
        max-width: 58%;
        min-height: 0;
      }

      /* Responsive */
      @media (max-width: 1024px) {
        .faq-compact__inner {
          padding: 0 40px;
          gap: 32px;
        }

        .faq-compact__left {
          flex-basis: 45%;
        }

        .faq-compact__svg {
          max-width: 440px;
        }
      }

      @media (max-width: 768px) {
        .faq-compact__inner {
          width: 100%;
          max-width: 100%;
          flex-direction: column;
          padding: 0 20px;
          gap: 24px;
        }

        .faq-compact__left {
          flex: 0 0 auto;
          width: 100%;
          justify-content: center;
          text-align: center;
        }

        .faq-compact__right {
          max-width: 100%;
        }

        .faq-compact__svg {
          max-width: 520px;
        }
      }

      .faq-compact__list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .faq-compact__item {
        border-bottom: 1px solid #e5e7eb;
        padding: 24px 0;
      }

      .faq-compact__item--no-border {
        border-bottom: none;
      }

      .faq-compact__question {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        gap: 16px;
      }

      .faq-compact__question-text {
        font-family: "Gilroy", sans-serif;
        font-size: clamp(24px, 6vw, 40px);
        font-weight: 400;
        font-style: normal;
        color: #1e3a5f;
        line-height: 1.1;
        letter-spacing: 0%;
        flex: 1;
      }

      /* keep the "expanded question" in line with design (first FAQ item) */
      .faq-compact__item:first-child .faq-compact__question-text {
        font-family: "Gilroy", sans-serif;
        font-size: clamp(24px, 6vw, 40px);
        font-weight: 400;
        font-style: normal;
        line-height: 1.1;
        letter-spacing: 0%;
      }

      .faq-compact__toggle {
        width: 28px;
        height: 28px;
        background: #f3f4f6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6b7280;
        font-size: 18px;
        font-weight: bold;
      }

      .faq-compact__answer {
        padding-top: 16px;
      }

      .faq-compact__answer p {
        font-size: 18px;
        color: #4b5563;
        line-height: 1.6;
        margin: 0;
      }

      /* ========================
   CONTACT SECTION STYLES
   ======================== */
      .contact-section {
        background: white;
        padding: 60px 20px;
        overflow: hidden;
      }

      @media (min-width: 768px) {
        .contact-section {
          padding: 80px 40px;
        }
      }

      @media (min-width: 1024px) {
        .contact-section {
          padding: 120px 5%;
        }
      }

      .contact-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        align-items: start;
      }

      @media (min-width: 1024px) {
        .contact-container {
          grid-template-columns: 1fr 1fr;
          gap: 5%;
        }
      }

      .contact-left {
        display: flex;
      }

      .contact-card {
        width: 100%;
        max-width: 551px;
        min-height: 639px;
        background: url("images/Frame 15666.png") center/cover no-repeat;
        border-radius: 20px;
        padding: 40px 24px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        gap: 10px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        opacity: 1;
        position: relative;
        overflow: hidden;
      }

      @media (min-width: 768px) {
        .contact-card {
          padding: 55px 40px;
        }
      }

      .contact-title {
        font-size: 20px;
        font-weight: 500;
        color: white;
        margin: 0;
        opacity: 0.95;
      }

      .contact-subtitle {
        font-size: clamp(28px, 5vw, 40px);
        font-weight: 700;
        color: white;
        line-height: 1.15;
        margin: 0;
      }

      .contact-desc {
        font-size: 18px;
        line-height: 1.7;
        color: white;
        opacity: 0.95;
        max-width: 360px;
        margin: 0;
      }

      .contact-right {
        display: flex;
      }

      .contact-form {
        width: 100%;
        max-width: 629px;
        min-height: 639px;
        padding: 40px 24px;
        gap: 30px;
        opacity: 1;
        display: flex;
        flex-direction: column;
      }

      @media (min-width: 768px) {
        .contact-form {
          padding: 60px 48px;
          gap: 40px;
        }
      }

      .form-heading {
        font-size: 28px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 8px;
        line-height: 1.1;
      }

      .form-subtitle {
        font-size: 16px;
        color: #64748b;
        margin-bottom: 40px;
        line-height: 1.6;
      }

      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin-bottom: 24px;
      }

      .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 24px;
      }

      .form-group label {
        font-size: 15px;
        font-weight: 700;
        color: #374151;
        margin-bottom: 8px;
      }

      .form-group input,
      .form-group select,
      .form-group textarea {
        padding: 16px 20px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: white;
      }

      .form-group input:focus,
      .form-group select:focus,
      .form-group textarea:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      }

      .phone-wrapper {
        display: flex;
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
      }

      .phone-prefix {
        min-width: 100px;
        border: none;
        background: transparent;
        padding: 16px 20px;
        font-size: 16px;
        appearance: none;
        outline: none;
        box-shadow: none;
      }

      .phone-divider {
        width: 1px;
        background: #d1d5db;
        flex-shrink: 0;
      }

      #phone {
        flex: 1;
        border: none;
        padding: 16px 20px;
        font-size: 16px;
      }

      .phone-wrapper:focus-within {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      }

      /* ========================
intl-tel-input CUSTOM STYLING
======================== */

      .iti {
        width: 100%;
        display: block;
      }

.iti__flag-container {
        padding-left: 8px;
      }

      /* Increase flag size in intl-tel-input */
      .iti__flag {
        transform: scale(1.25);
        transform-origin: left center;
      }

      /* Increase dropdown arrow size */
      .iti__arrow {
        margin-left: 6px;
        border-top-width: 7px;
      }

.iti input#phone {
        width: 100%;
        height: 56px;
        padding-left: 110px !important;
        padding-right: 20px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 16px;
        font-family: "Gilroy", sans-serif;
        background: #fff;
        transition: all 0.3s ease;
      }

      .iti input#phone:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      }

      .iti--allow-dropdown
        .iti__country-container:hover
        .iti__selected-country {
        background-color: transparent;
      }

      .iti__selected-country {
        border-radius: 10px 0 0 10px;
        padding: 0 10px 0 12px;
        transition: background-color 0.2s ease;
      }

      .iti__selected-country-primary {
        gap: 8px;
      }

      .iti__selected-dial-code {
        font-size: 15px;
        color: #374151;
        font-family: "Gilroy", sans-serif;
      }

      .iti__arrow {
        margin-left: 6px;
        border-top-color: #6b7280;
      }

      .iti__country-list {
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        box-shadow:
          0 10px 25px rgba(0, 0, 0, 0.08),
          0 4px 10px rgba(0, 0, 0, 0.04);
        font-family: "Gilroy", sans-serif;
        margin-top: 10px;
      }

      .iti__country {
        padding: 10px 14px;
      }

      .iti__country:hover {
        background-color: #f8fafc;
      }

      .iti__search-input {
        border-radius: 10px;
        border: 1px solid #d1d5db;
        padding: 10px 12px;
        font-family: "Gilroy", sans-serif;
      }

      @media (max-width: 768px) {
        .iti input#phone {
          height: 52px;
          font-size: 15px;
        }
      }

      .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 12px center;
        background-repeat: no-repeat;
        background-size: 16px;
        padding-right: 48px;
      }

      .form-group textarea {
        resize: vertical;
        min-height: 100px;
        font-family: "Gilroy", sans-serif;
      }

      .form-button {
        align-self: flex-start;
        background: white;
        border: 1px solid #000;
        border-radius: 50px;
        padding: 10px 16px;
        font-size: 20px;
        font-weight: 600;
        color: #1e293b;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: auto;
        text-decoration: none;
      }

      /* Ensure the arrow circle inside the form button is visible */
      .form-button .icon-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(270.28deg, #13c5b8 -7.98%, #2a44b0 102.47%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .form-button .icon-circle img {
        width: 16px;
        height: 16px;
        display: block;
      }

      .form-button:hover {
        background: #f8fafc;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      }

      .button-icon {
        width: 20px;
        height: 20px;
      }

      @media (max-width: 1024px) {
        .contact-section {
          padding: 80px 40px;
        }

        .contact-container {
          grid-template-columns: 1fr;
          gap: 60px;
        }

        .contact-card,
        .contact-form {
          padding: 48px 32px;
        }
      }

      @media (max-width: 768px) {
        .contact-section {
          padding: 60px 24px;
        }

        .form-row {
          grid-template-columns: 1fr;
          gap: 20px;
        }

        .contact-subtitle {
          font-size: 32px;
        }

        .form-heading {
          font-size: 28px;
        }
      }

      @media (max-width: 480px) {
        .contact-card,
        .contact-form {
          padding: 40px 24px;
        }

        .contact-subtitle {
          font-size: 28px;
        }
      }
    </style>
  </head>

  <body>
    <section class="hero-section">
      <div class="breadcrumb">CASE STUDIES / TANNER PHARMA GROUP</div>
      <div class="divider"></div>
      <h1 class="hero-title">
        4 Years of Secure, Compliant<br class="line1-end" />
        Operations for a Global<br class="line2-end" />
        Pharma Leader
      </h1>
      <p class="hero-description">
        How Teceze delivered 24×7 security, compliance readiness, and<br />
        endpoint protection across the US & UK.
      </p>
      <a
        href="https://teal-mule-553916.hostingersite.com/Contactus.php"
        class="cta-button"
      >
        <div class="icon-circle">
          <img src="/icons/ArrowRight.svg" alt="→" />
        </div>
        Request Security Assessment
      </a>

      <section class="metrics-section">
        <div class="metric-item">
          <div class="metric-value">9,735</div>
          <div class="metric-label">Ticket Resolved</div>
        </div>
        <div class="metric-item">
          <div class="metric-value">98.4%</div>
          <div class="metric-label">SLA Achievement</div>
        </div>
        <div class="metric-item">
          <div class="metric-value">120</div>
          <div class="metric-label">Protected Devices</div>
        </div>
        <div class="metric-item">
          <div class="metric-value">4 yrs</div>
          <div class="metric-label">Active Engagement</div>
        </div>
      </section>
    </section>

    <section class="case-study-section">
      <div class="case-study-container">
        <div class="case-study-image-col">
          <img
            src="/images/Businessman.jpg"
            alt="Tanner Pharma Group"
            class="case-study-image"
          />
        </div>
        <div class="case-study-text-col">
          <div class="section-label">The Client</div>
          <h2 class="main-heading">Tanner Pharma Group</h2>
          <p class="description">
            Tanner Pharma Group is a leading provider of specialty
            pharmaceutical services globally. With operations spanning the US
            and UK, they manage critical medicinal access programs,
            necessitating a zero-compromise approach to data integrity and
            regulatory compliance.
          </p>

          <div class="highlight-cards">
            <div class="card card-small">
              <div class="card-icon">
                <img
                  src="/icons/GlobeHemisphereWest.svg"
                  alt="Globe"
                  width="42"
                  height="42"
                />
              </div>
              <h4 class="card-title">Dual-Continent Ops</h4>
              <p class="card-desc">
                Unified security across US &amp; UK regions.
              </p>
            </div>
            <div class="card card-small">
              <div class="card-icon">
                <img
                  src="/icons/Devices.svg"
                  alt="Devices"
                  width="42"
                  height="42"
                />
              </div>
              <h4 class="card-title">120 Endpoints</h4>
              <p class="card-desc">Full lifecycle management and monitoring.</p>
            </div>
            <div class="card card-full">
              <div class="card-icon">
                <img
                  src="/icons/CalendarCheck.svg"
                  alt="Calendar Check"
                  width="42"
                  height="42"
                />
              </div>
              <h4 class="card-title">Long-term Partnership</h4>
              <p class="card-desc">Strategic alignment since 2020.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="client-details-section">
      <div class="client-details-container">
        <div class="client-detail-item">
          <h3 class="client-detail-value">Global</h3>
          <p class="client-detail-label">Geography</p>
        </div>

        <div class="client-detail-item">
          <h3 class="client-detail-value">100+</h3>
          <p class="client-detail-label">Users</p>
        </div>

        <div class="client-detail-item">
          <h3 class="client-detail-value">US &amp; UK</h3>
          <p class="client-detail-label">Primary Hubs</p>
        </div>

        <div class="client-detail-item">
          <h3 class="client-detail-value">HealthTech</h3>
          <p class="client-detail-label">Industry</p>
        </div>
      </div>
    </section>

    <section class="dark-section">
      <div class="dark-content-wrapper">
        <header class="section-header">
          <div class="section-label-alt">Strategic Needs</div>
          <div class="header-grid">
            <h2 class="main-heading-alt">Business Requirements</h2>
            <p class="supporting-text">
              The organization required a comprehensive solution to modernize
              its systems, enhance security, and streamline operations while
              ensuring compatibility with existing technologies and future
              scalability.
            </p>
          </div>
        </header>

        <div class="cards-grid">
          <div class="card-col">
            <div class="glass-card tall-card">
              <div class="card-inner">
                <h3 class="card-title-alt">Security Posture</h3>
                <p class="card-desc">
                  Hardening infrastructure against evolving global cyber threats
                  and pharmaceutical espionage.
                </p>
              </div>
              <div class="card-image-bottom">
                <img
                  src="/images/keyboardCloseUp.jpg"
                  alt="Security infrastructure"
                />
              </div>
            </div>
          </div>

          <div class="card-col">
            <div class="glass-card flex-card">
              <h3 class="card-title-alt">Compliance</h3>
              <p class="card-desc">
                Adhering to strict HIPAA, GDPR, and pharmaceutical industry data
                regulations.
              </p>
            </div>
            <div class="glass-card flex-card">
              <h3 class="card-title-alt">24x7 Support</h3>
              <p class="card-desc">
                Continuous monitoring and incident response across multiple time
                zones.
              </p>
            </div>
          </div>

          <div class="card-col">
            <div class="glass-card tall-card human-risk-bg">
              <div class="card-inner">
                <h3 class="card-title-alt">Human Risk</h3>
                <p class="card-desc">
                  Managing internal vulnerabilities through education and access
                  control.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="solution-section">
      <div class="solution-container">
        <header class="solution-header">
          <div class="header-left">
            <div class="section-label-small">Our Approach</div>
            <h2 class="section-title-large">Solution & Execution</h2>
          </div>
          <div class="header-right">
            <p>
              Teceze implemented a multi-layered Sovereign Intelligence
              framework, consolidating diverse security silos into a unified
              "Single Pane of Glass" dashboard. We prioritized proactive
              detection over reactive firefighting.
            </p>
          </div>
        </header>

        <div class="capabilities-row-container">
          <div class="capabilities-row">
            <div class="capability-item">
              <img
                src="/icons/SealCheck.svg"
                alt="Automated Endpoint Detection & Response"
                class="capability-icon"
              />
              <span class="capability-text"
                >Automated Endpoint Detection & Response</span
              >
            </div>
            <div class="capability-item">
              <img
                src="/icons/SealCheck.svg"
                alt="Continuous Vulnerability Management Scanning"
                class="capability-icon"
              />
              <span class="capability-text"
                >Continuous Vulnerability Management Scanning</span
              >
            </div>
            <div class="capability-item">
              <img
                src="/icons/SealCheck.svg"
                alt="Unified XDR for Cross-Domain Threat Hunting"
                class="capability-icon"
              />
              <span class="capability-text"
                >Unified XDR for Cross-Domain Threat Hunting</span
              >
            </div>
          </div>
        </div>

        <div class="execution-cards">
          <div class="exec-card">
            <img
              src="/icons/ManagedEDR.svg"
              alt="Managed EDR"
              class="exec-icon"
            />
            <h4 class="exec-title">Managed EDR</h4>
          </div>
          <div class="exec-card">
            <img src="/icons/VulnScan.svg" alt="Vuln Scan" class="exec-icon" />
            <h4 class="exec-title">Vuln Scan</h4>
          </div>
          <div class="exec-card">
            <img
              src="/icons/XDR_Platform.svg"
              alt="XDR Platform"
              class="exec-icon"
            />
            <h4 class="exec-title">XDR Platform</h4>
          </div>
          <div class="exec-card">
            <img
              src="/icons/MDR_Services.svg"
              alt="MDR Services"
              class="exec-icon"
            />
            <h4 class="exec-title">MDR Services</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="outcomes-section">
      <div class="outcomes-container">
        <img src="/images/Outcomes.svg" alt="Outcomes" class="outcomes-bg" />
        <div class="outcomes-foreground">
          <div class="outcomes-card">
            <div class="outcomes-meta">Measurable Success</div>
            <h3 class="outcomes-heading">
              The implementation led to measurable gains in efficiency,
              reliability, and overall performance, driving meaningful business
              impact.
            </h3>
            <div class="outcomes-grid">
              <div class="outcomes-card-item">
                <div class="outcomes-card-title">SLA Compliance</div>
                <div class="outcomes-card-desc">
                  Exceeding industry standards for response and resolution times
                  consistently over 48 months.
                </div>
                <div class="outcomes-card-metric">98.4%</div>
              </div>
              <div class="outcomes-card-item outcomes-card-emphasis">
                <div class="outcomes-card-metric-zero">Zero</div>
                <div class="outcomes-card-sub">Critical Breaches</div>
                <div class="outcomes-card-desc-sm">
                  Maintained absolute data integrity across all pharmaceutical
                  medicinal access portals.
                </div>
              </div>
              <div class="outcomes-card-item">
                <div class="outcomes-card-title">Cost Efficiency</div>
                <div class="outcomes-card-desc">
                  Reduced operational overhead through consolidated security
                  vendors and automation.
                </div>
                <div class="outcomes-card-metric">40%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
      <div class="cta-card">
        <div class="cta-card-content">
          <span class="cta-label">Get In Touch</span>
          <h2 class="cta-heading">Ready to start the conversation?</h2>
          <p class="cta-description">
            Let’s discuss how Teceze can deliver for your<br />organization.
          </p>
          <a
            href="https://teal-mule-553916.hostingersite.com/Contactus.php"
            class="cta-button"
          >
            <div class="icon-circle">
              <img src="/icons/ArrowRight.svg" alt="→" />
            </div>
            <span class="cta-button-text">Talk to Our Alliances Team</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Compact FAQ Section -->
    <section class="faq-compact">
      <div class="faq-compact__inner">
        <!-- Left: Decorative FAQ SVG -->
        <div class="faq-compact__left">
          <img src="/images/FAQ.svg" alt="FAQ" class="faq-compact__svg" />
        </div>

        <!-- Right: FAQ Accordion -->
        <div class="faq-compact__right">
          <ul class="faq-compact__list">
            <!-- FAQ items - all collapsed by default -->
            <li class="faq-compact__item">
              <div class="faq-compact__question">
                <span class="faq-compact__question-text"
                  >What cybersecurity challenges does Teceze solve?</span
                >
                <span class="faq-compact__toggle">+</span>
              </div>
            </li>

            <li class="faq-compact__item">
              <div class="faq-compact__question">
                <span class="faq-compact__question-text"
                  >How long does implementation take?</span
                >
                <span class="faq-compact__toggle">+</span>
              </div>
            </li>

            <li class="faq-compact__item">
              <div class="faq-compact__question">
                <span class="faq-compact__question-text"
                  >How do you measure success?</span
                >
                <span class="faq-compact__toggle">+</span>
              </div>
            </li>

            <li class="faq-compact__item">
              <div class="faq-compact__question">
                <span class="faq-compact__question-text"
                  >Can you work with our existing tools and teams?</span
                >
                <span class="faq-compact__toggle">+</span>
              </div>
            </li>

            <li class="faq-compact__item faq-compact__item--no-border">
              <div class="faq-compact__question">
                <span class="faq-compact__question-text"
                  >How do you ensure compliance?</span
                >
                <span class="faq-compact__toggle">+</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
      <div class="contact-container">
        <!-- Left Card -->
        <div class="contact-left">
          <div class="contact-card">
            <h3 class="contact-title">Get In Touch</h3>
            <h2 class="contact-subtitle">Secure Your Global<br />Operations</h2>
            <p class="contact-desc">
              Join the ranks of sovereign leaders. Our intelligence-led approach
              ensures your pharmaceutical or enterprise data remains
              uncompromised, compliant, and always available.
            </p>
          </div>
        </div>

        <!-- Right Form -->
        <div class="contact-right">
            <form class="form-container" id="contact-form" autocomplete="on">
            <h2 class="form-heading">Contact us now</h2>
            <p class="form-subtitle">
              Fill in the data for profile. It will take a couple of minutes.
            </p>

            <div class="form-row">
              <div class="form-group">
                <label for="first-name">First Name</label>
                <input
                  type="text"
                  id="first-name"
                  placeholder="Enter first name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="last-name">Last Name</label>
                <input
                  type="text"
                  id="last-name"
                  placeholder="Enter last name"
                  required
                />
              </div>
            </div>

            <div class="form-group">
              <label for="phone">Phone number</label>
              <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Enter phone number"
                autocomplete="tel"
                required
                inputmode="tel"
                pattern="^\+?[1-9]\d{6,14}$"
              />
              <div
                id="phone-error"
                class="phone-error"
                style="display: none; margin-top: 8px; color: #b91c1c; font-size: 14px;"
              >
                Please enter a valid phone number (7–15 digits, numbers only).
              </div>
            </div>

            <div class="form-group">
              <label for="service">Service interested</label>
              <select id="service" class="form-select">
                <option value="">Select</option>
                <option>Digital Workplace</option>
                <option>Cybersecurity</option>
                <option>Cloud Infrastructure</option>
                <option>Application Development</option>
                <option>Managed IT</option>
                <option>Global Procurement</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Describe your case</label>
              <textarea
                id="message"
                rows="4"
                placeholder="Tell us about your use case..."
              ></textarea>
            </div>

            <button class="form-button" type="submit">
              <div class="icon-circle">
                <img src="/icons/ArrowRight.svg" alt="→" />
              </div>
              <span>Get In Touch</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- intl-tel-input JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/js/intlTelInput.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        /* ========================
        INITIALIZE INTERNATIONAL PHONE INPUT
        ======================== */

        const phoneInput = document.querySelector("#phone");
        const formEl = document.querySelector("#contact-form");
        const errorEl = formEl ? document.createElement("div") : null;

        if (formEl && errorEl) {
          errorEl.className = "contact-form-error";
          errorEl.style.cssText = "margin-top: 12px; color: #b91c1c; font-size: 14px;";
          formEl.insertBefore(errorEl, formEl.querySelector("button[type='submit']"));
        }

        if (phoneInput) {
          // phone validation (must be compatible with intl-tel-input)
          const phoneErrorEl = document.querySelector("#phone-error");
          const phoneRegex = /^\+?[1-9]\d{6,14}$/;

          const getSanitizedPhone = () => {
            // Remove spaces/hyphens around, keep optional leading +
            const raw = (phoneInput.value || "").trim();
            if (!raw) return "";
            // If it has spaces/hyphens, remove them except keep a leading +
            const hasLeadingPlus = raw.startsWith("+");
            const digitsOnly = raw.replace(/[^0-9]/g, "");
            if (hasLeadingPlus) return "+" + digitsOnly;
            return digitsOnly;
          };

          const validatePhone = () => {
            const sanitized = getSanitizedPhone();
            const isValid = phoneRegex.test(sanitized);

            if (phoneErrorEl) {
              phoneErrorEl.style.display = isValid ? "none" : "block";
            }

            // Mirror validity state for native form validation
            phoneInput.setCustomValidity(isValid ? "" : "Please enter a valid phone number (7–15 digits, numbers only). ");
            return isValid;
          };

          // Prevent invalid characters early (letters/symbols except leading +)
          phoneInput.addEventListener("beforeinput", (e) => {
            if (!e.data) return;
            const next = ((phoneInput.value || "") + e.data).trim();
            // allow digits, spaces, hyphens, and optional leading +
            if (!/^[+]?[-\s0-9]*$/.test(next)) {
              e.preventDefault();
            }
          });

          // Validate on user typing
          phoneInput.addEventListener("input", () => {
            // Optionally trim spaces in the visual value (keeps intl-tel-input working)
            phoneInput.value = (phoneInput.value || "").replace(/\s+/g, " ");
            validatePhone();
          });

          // Validate on blur
          phoneInput.addEventListener("blur", validatePhone);

          window.itiInstance = window.itiInstance || window.intlTelInput(phoneInput, {


            initialCountry: "auto",

            preferredCountries: ["us", "gb", "in", "au"],

            separateDialCode: true,

            nationalMode: true,

            autoPlaceholder: "aggressive",

            formatOnDisplay: true,

            strictMode: false,

            geoIpLookup: function (callback) {
              fetch("https://ipapi.co/json")
                .then((res) => res.json())
                .then((data) => callback(data.country_code.toLowerCase()))
                .catch(() => callback("us"));
            },

            utilsScript:
              "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/js/utils.js",

            // Clean lifecycle: store/reuse instance on repeated script runs
            // (does not affect functionality; helps prevent double init issues)

          });
        }

        /* (removed) JS-based height synchronization for FAQ SVG.
           Layout should be handled responsively with CSS to avoid mobile cropping/layout bugs. */


        const faqItems = document.querySelectorAll(".faq-compact__item");

        const mockAnswers = {
          "What cybersecurity challenges does Teceze solve?":
            "We address threat exposure, weak access controls, unsecured IT/OT environments, compliance gaps, and slow incident response starting with a detailed risk assessment.",
          "How long does implementation take?":
            "It depends on complexity, but we follow a phased approach: assessment, design, deployment, and support—ensuring minimal disruption to operations.",
          "How do you measure success?":
            "Through metrics like faster detection, reduced vulnerabilities, and improved compliance.",
          "Can you work with our existing tools and teams?":
            "Yes. We integrate with your current tools and collaborate closely with internal teams.",
          "How do you ensure compliance?":
            "We align with ISO, NIST, GDPR, and industry best practices throughout execution.",
        };

        faqItems.forEach((item) => {
          const question = item.querySelector(".faq-compact__question");
          const toggle = item.querySelector(".faq-compact__toggle");
          const text = item.querySelector(
            ".faq-compact__question-text",
          ).textContent;

          question.addEventListener("click", () => {
            const isOpen = item.classList.contains("is-open");

            // Close all other items
            faqItems.forEach((i) => {
              if (i !== item) {
                i.classList.remove("is-open");
                i.querySelector(".faq-compact__toggle").textContent = "+";
                const ans = i.querySelector(".faq-compact__answer");
                if (ans) ans.remove();
              }
            });

            // Toggle current item
            if (isOpen) {
              item.classList.remove("is-open");
              toggle.textContent = "+";
              const ans = item.querySelector(".faq-compact__answer");
              if (ans) ans.remove();
            } else {
              item.classList.add("is-open");
              toggle.textContent = "−";
              const answer = document.createElement("div");
              answer.className = "faq-compact__answer";
              answer.innerHTML = `<p>${mockAnswers[text] || "More info coming soon."}</p>`;
              item.appendChild(answer);
            }
          });
        });
      });
    </script>
  </body>
  <?php include 'footer.php'; ?>
</html>
