<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career</title>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" />

  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: "Inter", sans-serif;
      scroll-behavior: smooth;
      background: #051428;
      overflow-x: hidden;
    }

    .hero {
      position: relative;
      width: 100%;
      min-height: 420px;
      overflow: visible;
      display: flex;
      align-items: center;
    }

    .hero::after {
      content: none;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center right;
      z-index: 0;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to right,
          rgba(5, 20, 40, 0.85) 0%,
          rgba(5, 20, 40, 0.55) 55%,
          rgba(5, 20, 40, 0.15) 75%,
          transparent 100%);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 72px 64px;
      width: 100%;
    }

    .breadcrumb {
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 0.12em;
      color: #ffffff;
      text-transform: uppercase;
      margin-bottom: 16px;
      position: relative;
      display: inline-block;
    }

    .breadcrumb::after {
      content: "";
      position: absolute;
      top: calc(100% + 12px);
      left: 1px;
      width: calc(100vw - 64px);
      height: 1px;
      background: #ffffff;
    }

    .hero-title {
      font-size: 70px;
      font-weight: 490;
      color: #ffffff;
      margin-bottom: 20px;
      text-align: left;
      width: 100%;
    }

    .hero-subtitle {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.7;
      margin-bottom: 34px;
      max-width: 520px;
    }

    .hero-btn,
    .primary-btn,
    .view-all-btn,
    .form-submit {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 10px 22px 10px 10px;
      border: 1.5px solid rgba(255, 255, 255, 0.6);
      border-radius: 50px;
      background: transparent;
      color: #ffffff;
      font-size: 13px;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease;
    }

    .hero-btn:hover,
    .job-apply-btn:hover,
    .primary-btn:hover,
    .job-apply-btn:hover,
    .view-all-btn:hover,
    .submit-btn:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: #2dd4bf;
      /* ✅ cyan/blue outline */
    }

    .primary-btn-icon,
    .hero-btn-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .primary-btn-icon svg,
    .hero-btn-icon svg {
      width: 14px;
      height: 14px;
      stroke: #ffffff;
    }

    .hero-btn {
      padding: 12px 24px 12px 12px;
      font-size: 14px;
    }

    .hero-btn .hero-btn-icon {
      width: 36px;
      height: 36px;
    }

    .hero-btn .hero-btn-icon svg {
      width: 16px;
      height: 16px;
    }

    .jobs-section {
      position: relative;
      overflow: hidden;
      background: #071a3e;
      color: #ffffff;
    }

    .bg-grid {
      background-size: 80px 80px;
      background-image:
        linear-gradient(to right,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px),
        linear-gradient(to bottom,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px);
    }


    .svgleft_1 {
      position: absolute;
      top: 50;
      left: 10;
    }


    .svg_left {
      position: absolute;
      left: -70px;
      opacity: 0.9;
    }

    .svgright_life {
      position: absolute;
      right: -100px;
      top: 35%;
      transform: translateY(-50%);
      z-index: 1;
      opacity: 0.9;
      filter: brightness(1.3)
    }

    .jobs-section::after {
      content: '';
      position: absolute;
      inset: 0;
      z-index: 1;
      background-size: 60px 60px;
      pointer-events: none;
    }

    .jobs-header {
      position: relative;
      z-index: 2;
      display: flex;
      align-items: left;
      gap: 40px;
      margin-bottom: 60px;
      max-width: 1400px;
      margin-left: auto;
      margin-right: auto;
      padding: 80px 64px 0 64px;
    }

    .jobs-powered {
      flex: 1;
    }

    .jobs-powered-label {
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 0.12em;
      color: white;
      margin-bottom: 8px;
    }

    .jobs-powered-title {
      font-size: 24px;
      font-weight: 700;
      color: #ffffff;
      line-height: 1.3;
    }

    .jobs-collaborate {
      flex: 2;
    }

    .jobs-collaborate-text {
      font-size: 30px;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.7;
    }

    .jobs-collaborate-fade {
      font-size: 30px;
      color: rgba(255, 255, 255, 0.5);
      line-height: 1.7;
    }

    .jobs-collaborate-fact {
      font-size: 30px;
      color: rgba(255, 255, 255, 0.5);
      line-height: 1.7;
    }

    .jobs-grid {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
      max-width: 1400px;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 40px;
      padding: 0 64px;
    }

    .job-card {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 12px;
      padding: 34px;
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .job-card:hover {
      background: rgba(255, 255, 255, 0.12);
      border-color: rgba(255, 255, 255, 0.25);
      transform: translateY(-2px);
    }

    .job-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 16px;
    }

    .job-title {
      font-size: 18px;
      font-weight: 600;
      color: #ffffff;
      padding: 0 0 10px 0;
      flex: 1;
    }

    .job-dept {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.7);
      margin: 8px 8px 0 0;
    }

    .phone-box {
      display: flex;
      align-items: center;
      border: 1px solid rgba(5, 20, 40, 0.12);
      border-radius: 12px;
      overflow: hidden;
      width: 100%;
    }

    .phone-box select,
    .phone-box input {
      border: none !important;
      outline: none !important;
    }


    .phone-box select {
      width: 90px;
      min-width: 70px;
      max-width: 100px;
      border: none;
      padding: 14px 8px;
      font-size: 14px;
      background: #f5f7fb;
      cursor: pointer;
      outline: none;
    }

    /* ✅ Make input take remaining space */
    .phone-box input {
      flex: 1;
      border: none;
      padding: 14px;
      font-size: 14px;
      width: 100%;
      outline: none;
    }

    .job-requirements {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.65);
    }

    .job-apply-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px 8px 8px;
      border-radius: 999px;
      border: 1.5px solid rgba(255, 255, 255, 0.6);
      background: transparent;
      color: #ffffff;
      font-size: 12px;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.25s ease;
      white-space: nowrap;
      flex-shrink: 0;
    }




    .jobs-footer {
      position: relative;
      z-index: 2;
      text-align: center;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 5px;
      padding: 0 64px 80px 64px;
      margin-bottom: 80px;
      padding-bottom: 160px;

    }

    .view-all-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 12px 28px;
      border: 1.5px solid rgba(100, 180, 255, 0.5);
      border-radius: 999px;
      background: transparent;
      color: #64B4FF;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .view-all-btn:hover {
      background: rgba(100, 180, 255, 0.15);
      border-color: #64B4FF;
      color: #ffffff;
    }

    .life-section {
      position: relative;
      padding: 10px;
      color: #ffffff;
      padding-top: 60px
    }


    .life-content {
      position: relative;
      z-index: 1;
      padding: 80px 64px;
      margin-top: -50px;
    }


    .life-bg-text {
      position: absolute;
      inset: 0;
      display: flex;
      gap: clamp(500px, 40px);
      flex-direction: column;
      align-items: center;
      padding: 60px 0;
      z-index: 0;
      gap: 10px;
      pointer-events: none;
      top: -280px;
    }

    .life-gallery,
    .gallery-item {
      position: relative;
      z-index: 5;
    }


    .bg-text {
      margin: 0;
      white-space: nowrap;
      font-family: 'Elms Sans', sans-serif;
      font-size: 12vw;
      letter-spacing: 1vw;
      line-height: 0.8;
      font-weight: 800;
      font-style: bold;
      width: 100%;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
    }

    .t1 {
      color: rgba(255, 255, 255, 0.35);
    }

    .t2 {
      color: rgba(255, 255, 255, 0.18);
    }

    .t3 {
      color: rgba(255, 255, 255, 0.06);
    }

    .hero::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -1px;
      width: 100%;
      height: 120px;
      background: linear-gradient(to bottom,
          rgba(5, 20, 40, 0) 0%,
          #071a3e 100%);
      z-index: 2;
      pointer-events: none;
    }

    .life-gallery {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 280px 280px;
      gap: 20px;
      position: relative;
      z-index: 2;
    }

    .life-item-1 {
      grid-column: 1 / 2;
      grid-row: 1 / 2;
    }

    .life-item-2 {
      grid-column: 2 / 3;
      grid-row: 1 / 3;
    }

    .life-item-3 {
      grid-column: 3 / 6;
      grid-row: 1 / 2;
    }

    .life-item-4 {
      grid-column: 1 / 2;
      grid-row: 2 / 3;
    }

    .life-item-5 {
      grid-column: 4 / 5;
      grid-row: 2 / 3;
    }

    .life-item-6 {
      grid-column: 3 / 4;
      grid-row: 2 / 3;
    }

    .gallery-item {
      border-radius: 20px;
      overflow: hidden;
      z-index: 2;
      position: relative;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 25;
    }

    .gallery-item {
      border-radius: 20px;
      overflow: hidden;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 10;
    }

    .support-section {
      position: relative;
      overflow: hidden;
      padding: 80px 64px;
      color: #ffffff;
    }

    .support-container {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: center;
      /* horizontal center */
      text-align: center;
      /* center text */
      flex-direction: column;
      /* stack properly */
    }

    .support-image-item {
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 1;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .support-image-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .support-content p {
      text-align: center;
      font-size: 28px;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.85);

      margin-top: 50px;
    }

    .support-content p strong {
      font-weight: 500;
      color: #ffffff;
    }

    .journey-section {
      background: white;
    }

    .journey-container {
      background: #ffffff;
    }

    .journey-grid {
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
    }

    .journey-left {
      padding: 56px 48px;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .journey-label {
      font-size: 19px;
      font-weight: 700;
      color: #0d2a58;
      letter-spacing: 0.08em;
      margin: 0;
    }

    .journey-title {
      font-size: 34px;
      font-weight: 700;
      color: #051428;
      line-height: 1.12;
      margin: 0;
      max-width: 520px;
    }

    .journey-subtitle {
      font-size: 15px;
      color: rgba(5, 20, 40, 0.75);
      line-height: 1.9;
      margin-bottom: 80px;
      max-width: 520px;
    }

    .journey-image {
      width: 100%;
      max-width: 650px;
      height: auto;
      object-fit: cover;
      border-radius: 24px;
      box-shadow: 0 24px 60px rgba(10, 35, 75, 0.12);
      display: block;
      margin-top: 12px;
    }

    .journey-right {
      padding: 56px 48px;
      display: flex;
      flex-direction: column;
      gap: 24px;
      border-left: 1px solid rgba(5, 20, 40, 0.08);
    }

    .resume-upload {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 18px 22px;
      border: 1px dashed rgba(5, 20, 40, 0.18);
      border-radius: 18px;
      color: #07325d;
      font-size: 14px;
      box-shadow: 0 10px 30px rgba(10, 35, 75, 0.06);
      cursor: pointer;
    }

    .resume-upload span {
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .resume-upload::before {
      content: '⬆';
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 12px;
      color: #1a4fdb;
      font-size: 18px;
      flex-shrink: 0;
    }

    .auto-fill-btn {
      border: 1px solid rgba(5, 20, 40, 0.12);
      border-radius: 999px;
      padding: 10px 18px;
      color: #0d2a58;
      cursor: pointer;
      font-size: 13px;
    }


    .journey-form {
      display: grid;
      gap: 16px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .journey-form label {
      display: block;
      color: #0d2a58;
      font-size: 14px;
      font-weight: 600;
    }

    .journey-form .required {
      color: #d13438;
    }

    .form-row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 24px;
    }

    .exp-group {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .journey-form input,
    .journey-form select,
    .journey-form textarea {
      width: 100%;
      padding: 14px 16px;
      border: 1px solid rgba(5, 20, 40, 0.12);
      border-radius: 12px;
      font-size: 14px;
      font-family: inherit;
      transition: all 0.25s ease;
    }

    .journey-form input:focus,
    .journey-form select:focus,
    .journey-form textarea:focus {
      outline: none;
      border-color: #64b4ff;
      box-shadow: 0 0 0 3px rgba(100, 180, 255, 0.1);
    }

    .journey-form textarea {
      min-height: 140px;
      resize: vertical;
    }

    .submit-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      padding: 14px 32px;
      border: 1.5px solid rgba(5, 20, 40, 0.12);
      border-radius: 999px;
      background: transparent;
      color: #0d2a58;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.25s ease;
      width: fit-content;
    }

    .journey-right {
      border-left: none;
      border-top: 1px solid rgba(5, 20, 40, 0.08);
    }

    /* ✅ Tablet & small laptop fix (853px, 900px, etc.) */
    @media (max-width: 1000px) {

      /* Stack journey section */
      .journey-grid {
        grid-template-columns: 1fr;
      }

      .journey-left,
      .journey-right {
        padding: 36px 32px;
      }

      .journey-image {
        width: 100%;
        height: auto;
        max-height: 420px;
      }

      .journey-subtitle {
        margin-bottom: 32px;
      }

      .journey-right {
        border-left: none;
        border-top: 1px solid rgba(5, 20, 40, 0.08);
        margin-top: 24px;
      }
    }

    @media (max-width: 768px) {


      .hero-title {
        font-size: 32px;
      }

      .hero-content {
        padding: 32px 20px;
      }

      .jobs-header {
        flex-direction: column;
        padding: 40px 20px 0;
      }

      .jobs-grid {
        grid-template-columns: 1fr;
        padding: 0 20px;
      }

      .support-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 0 20px;
        gap: 24px;
      }

      .support-image-item {
        width: 100%;
        max-width: 520px;
        aspect-ratio: 16 / 10;
        min-height: 220px;
      }

      .support-content p {
        margin: 0;
        font-size: clamp(17px, 4vw, 20px);
        line-height: 1.7;
        max-width: 100%;
        padding: 0;
      }

      .jobs-collaborate-fact {
        margin: 0;
        font-size: clamp(17px, 4vw, 20px);
        line-height: 1.7;
        max-width: 100%;
        padding: 0;
      }

      .life-section {
        padding: 60px 20px 40px;
      }

      .life-content {
        padding: 0;
        margin-top: 0;
      }

      .life-bg-text {
        top: 0;
        padding: 0;
        gap: 8px;
      }

      .bg-text {
        font-size: 18vw;
        letter-spacing: 0.4vw;
        left: 50%;
        transform: translateX(-50%);
      }

      .life-gallery {
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        gap: 16px;
        margin-left: 0;
      }

      .life-item-2,
      .life-item-3,
      .life-item-4,
      .life-item-5,
      .life-item-6 {
        grid-column: 1 / -1;
        grid-row: auto;
      }

      .gallery-item {
        min-height: 180px;
      }

      .gallery-item img {
        min-height: 180px;
        object-position: center;
      }

      /* JOURNEY */
      .journey-section {
        padding: 40px 20px 30px;
      }

      .journey-container {
        padding: 0;
      }

      .journey-grid {
        grid-template-columns: 1fr;
      }

      .journey-left,
      .journey-right {
        padding: 32px 20px;
      }

      .journey-title {
        font-size: 28px;
      }

      .journey-subtitle {
        font-size: 16px;
        max-width: 100%;
        margin-bottom: 30px;
      }

      .journey-image {
        width: 100%;
        height: auto;
        max-height: 420px;
        border-radius: 20px;
        margin-top: 16px;
      }

      .journey-right {
        border-left: none;
        border-top: 1px solid rgba(5, 20, 40, 0.08);
        margin-top: 20px;
      }

      .resume-upload {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
      }

      .resume-upload span {
        width: 100%;
      }

      .journey-form {
        width: 100%;
      }

      .submit-btn {
        width: 100%;
        justify-content: center;
      }

      .form-row {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .exp-group {
        grid-template-columns: 1fr;
        gap: 12px;
      }

      .jobs-footer {
        margin-bottom: 24px;
        padding-bottom: 24px;
      }

      .life-section {
        padding-top: 24px;
      }

      .life-bg-text {
        margin-top: -10px;
      }

    }
  </style>
</head>
<?php include 'header.php'; ?>

<body>


  <div class="hero">
    <img class="hero-bg" src="/images/careers_banner.jpg" alt="" aria-hidden="true" />

    <div class="hero-overlay"></div>

    <div class="hero-content">
      <p class="breadcrumb">Careers</p>

      <h1 class="hero-title">
        Accelerate your career with<br />
        AI-driven opportunities at<br />
        Teceze
      </h1>

      <p class="hero-subtitle">
        Looking to start a project or need expert guidance?
        Reach out to us and we’ll connect you with the right team
        to move things forward.
      </p>

      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="hero-btn primary-btn">
        <span class="primary-btn-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </span>
        Get in Touch
      </a>
    </div>

  </div>

  <div class="jobs-section bg-grid">
    <svg class="svgleft_1" width="682" height="1258" viewBox="0 0 682 1258" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.65" filter="url(#filter0_f_1548_7950)">
        <path
          d="M356.138 919.12C336.708 974.053 260.66 986.163 194.444 971.886C128.228 957.609 71.8428 916.945 10.6052 892.089C-50.6324 867.232 -116.151 859.431 -137.849 820.277C-159.547 781.123 -136.853 711.865 -145.416 648.589C-153.979 585.313 -195.05 528.591 -184.454 489.02C-173.518 448.539 -111.826 424.872 -57.0204 422.471C-2.21491 420.07 45.7038 438.935 96.8089 410.292C147.342 380.401 202.883 303.679 258.561 285.026C315.487 265.802 373.8 304.074 393.376 360.052C413.292 415.119 393.562 487.552 370.15 542.039C347.65 596.865 322.717 633.174 328.675 700.66C335.882 767.576 374.319 864.759 356.138 919.12Z"
          fill="url(#paint0_linear_1548_7950)" />
      </g>
      <defs>
        <filter id="filter0_f_1548_7950" x="-466.188" y="0" width="1147.77" height="1257.39"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_1548_7950" />
        </filter>
        <linearGradient id="paint0_linear_1548_7950" x1="-297.509" y1="791.839" x2="577.708" y2="417.389"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <div class="jobs-header">
      <div class="jobs-powered">
        <p class="jobs-powered-label">Powered by Global</p>
        <p class="jobs-powered-label">Technology Leaders</p>
      </div>
      <div class="jobs-collaborate">
        <p class="jobs-collaborate-text">
          We collaborate with trusted technology leaders to </br>deliver secure,
          <span class="jobs-collaborate-fade">
            innovative, and future-ready </br>solutions for our clients.
          </span>
        </p>
      </div>
    </div>

    <div class="jobs-grid" id="jobsGrid">
    </div>
    <div class="jobs-footer">
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php">
        <button class="hero-btn primary-btn">
          <span class="primary-btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12" />
              <polyline points="12 5 19 12 12 19" />
            </svg>
          </span>
          View all Open Roles
        </button> </a>
    </div>

    <div class="life-section">
      <div class="life-bg-text">
        <h1 class="bg-text t1">life at teceze</h1>
        <h1 class="bg-text t2">life at teceze</h1>
        <h1 class="bg-text t3">life at teceze</h1>
      </div>
      <div class="life-gallery">
        <div class="gallery-item life-item-1">
          <img src="/images/career_image6.jpg" alt="">
        </div>

        <div class="gallery-item life-item-2">
          <img src="/images/career_image5.jpg" alt="">
        </div>

        <div class="gallery-item life-item-3">
          <img src="/images/career_image4.jpg" alt="">
        </div>

        <div class="gallery-item life-item-4">
          <img src="/images/career_image1.jpg" alt="">
        </div>

        <div class="gallery-item life-item-5">
          <img src="/images/career_image3.jpg" alt="">
        </div>

        <div class="gallery-item life-item-6">
          <img src="/images/career_image2.jpg" alt="">
        </div>
      </div>
    </div>

    <svg class="svgright_life" width="634" height="1323" viewBox="0 0 634 1323" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.65" filter="url(#filter0_f_1548_7949)">
        <path
          d="M860.117 982.459C836.991 1042 753.286 1052.76 681.235 1034.93C609.183 1017.1 548.786 970.695 482.543 941.442C416.3 912.19 344.796 901.481 322.342 857.87C299.889 814.258 327.07 739.131 319.813 669.526C312.555 599.921 269.471 536.423 282.405 493.42C295.741 449.433 364.11 425.539 424.222 424.717C484.334 423.895 536.189 446.144 593.127 416.45C649.482 385.37 712.892 303.15 774.504 284.551C837.504 265.368 900.092 309.222 919.658 371.195C939.626 432.181 915.585 510.885 888.113 569.807C861.628 629.129 833.1 668.085 837.362 742.217C843.013 815.764 881.854 923.503 860.117 982.459Z"
          fill="url(#paint0_linear_1548_7949)" />
      </g>
      <defs>
        <filter id="filter0_f_1548_7949" x="0" y="0" width="1207.02" height="1322.74" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_1548_7949" />
        </filter>
        <linearGradient id="paint0_linear_1548_7949" x1="148.412" y1="821.446" x2="1119.83" y2="440.567"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <div class="support-section">
      <div class="support-container">
        <div class="support-images">

        </div>
        <div class="support-content">
          <p><strong>We're here to support your business with the right expertise and </br>solution.
              Whether you have a question, need assistance, or want to </br>explore how
              <span class="jobs-collaborate-fact">we can work together, our team is ready to help. Reach </br>out to us
                and we'll ensure a prompt and meaningful response</span>.</strong></p>
        </div>

        <svg class="svg_left" width="682" height="1258" viewBox="0 0 682 1258" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.65" filter="url(#filter0_f_1548_7950)">
            <path
              d="M356.138 919.12C336.708 974.053 260.66 986.163 194.444 971.886C128.228 957.609 71.8428 916.945 10.6052 892.089C-50.6324 867.232 -116.151 859.431 -137.849 820.277C-159.547 781.123 -136.853 711.865 -145.416 648.589C-153.979 585.313 -195.05 528.591 -184.454 489.02C-173.518 448.539 -111.826 424.872 -57.0204 422.471C-2.21491 420.07 45.7038 438.935 96.8089 410.292C147.342 380.401 202.883 303.679 258.561 285.026C315.487 265.802 373.8 304.074 393.376 360.052C413.292 415.119 393.562 487.552 370.15 542.039C347.65 596.865 322.717 633.174 328.675 700.66C335.882 767.576 374.319 864.759 356.138 919.12Z"
              fill="url(#paint0_linear_1548_7950)" />
          </g>
          <defs>
            <filter id="filter0_f_1548_7950" x="-466.188" y="0" width="1147.77" height="1257.39"
              filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_1548_7950" />
            </filter>
            <linearGradient id="paint0_linear_1548_7950" x1="-297.509" y1="791.839" x2="577.708" y2="417.389"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#00CABD" />
              <stop offset="1" stop-color="#0037A6" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>

    <div class="journey-section">
      <div class="journey-container">
        <div class="journey-grid">
          <!-- LEFT SIDE -->
          <div class="journey-left">
            <p class="journey-label">Work With Us</p>
            <h2 class="journey-title">Start Your Journey With Us</h2>
            <p class="journey-subtitle">Be part of a growing team delivering impactful IT solutions to businesses
              worldwide.</p>
            <img src="/images/career_start.jpg" alt="career" class="journey-image">
          </div>
          <div class="journey-right">
            <div class="resume-upload" onclick="openFilePicker()">
              <span>Upload your resume</span>
            </div>
            <input type="file" id="resumeInput" name="resume" style="display: none;" accept=".pdf,.doc,.docx,.txt">
            <form class="journey-form" id="applicationForm">
              <div class="form-row">
                <div class="form-group">
                  <label for="firstName">First Name <span class="required">*</span></label>
                  <input type="text" id="firstName" name="firstName" placeholder="John" pattern="[A-Za-z]+"
                    title="Only letters allowed" required>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name <span class="required">*</span></label>
                  <input type="text" id="lastName" name="lastName" placeholder="David" pattern="[A-Za-z]+"
                    title="Only letters allowed" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" id="email" name="email" placeholder="johndavid@example.com" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone number <span class="required">*</span></label>

                  <div class="phone-box">

                    <select id="countryCode">
                      <option value="+94">+94</option>
                      <option value="+91">+91</option>
                      <option value="+1">+1</option>
                    </select>

                    <input type="tel" id="phone" placeholder="45677 56868" pattern="[0-9]+" title="Only numbers allowed"
                      required>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="position">What role are you applying for? <span class="required">*</span></label>
                  <select id="position" name="position" required>
                    <option value="">Select an option</option>
                    <option value="data-engineer">Data Engineer</option>
                    <option value="software-engineer">Software Engineer</option>
                    <option value="devops-engineer">DevOps Engineer</option>
                    <option value="qa-engineer">QA Engineer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Experience Level <span class="required">*</span></label>
                  <div class="exp-group">
                    <input type="number" id="experienceYears" name="experienceYears" placeholder="Years" min="0"
                      step="1" pattern="[0-9]+" title="Only numbers allowed" required>
                    <input type="number" id="experienceMonths" name="experienceMonths" placeholder="Months" min="0"
                      max="11" step="1" pattern="[0-9]+" title="Only numbers allowed" required>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="currentSalary">Current Salary</label>

                  <div class="phone-box">
                    <input type="text" id="phone" placeholder=" " pattern="[0-9]+" title="Only numbers allowed"
                      required>
                    <select id="CurrencyCode">
                      <option value="INR">INR</option>
                      <option value="USD">USD</option>
                      <option value="EUR">EUR</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="expectedSalary">Expected Salary</label>

                  <div class="phone-box">
                    <input type="text" id="phone" placeholder=" " pattern="[0-9]+" title="Only numbers allowed"
                      required>
                    <select id="CurrencyCode">
                      <option value="INR">INR</option>
                      <option value="USD">USD</option>
                      <option value="EUR">EUR</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="availableDays">Available to join (days)</label>
                  <input type="text" id="availableDays" name="availableDays" placeholder="Enter a number"
                    pattern="[0-9]+" title="Only numbers allowed" required>
                </div>
                <div class="form-group">
                  <label for="portfolio">Website / Portfolio</label>
                  <input type="url" id="portfolio" name="portfolio" placeholder="Portfolio / Website">
                </div>
              </div>

              <div class="form-group full">
                <label for="aboutYou">Message</label>
                <textarea id="aboutYou" name="aboutYou" placeholder="Send us a message"></textarea>
              </div>

              <button type="submit" class="submit-btn primary-btn">
                <span class="primary-btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                  </svg>
                </span>
                Submit application
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Dummy job data 
      const jobsData = [
        {
          id: 1,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "REQUIRE: CGTRAX/ML FULL TIME 2-3 years"
        },
        {
          id: 2,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "REQUIRE: CGTRAX/ML FULL TIME 2-3 years"
        },
        {
          id: 3,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "INDIA (CHENNAI) | FULL TIME | 3-5 Years "
        },
        {
          id: 4,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "INDIA (CHENNAI) | FULL TIME | 3-5 Years "
        },
        {
          id: 5,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "INDIA (CHENNAI) | FULL TIME | 3-5 Years "
        },
        {
          id: 6,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "REQUIRE: CGTRAX/ML FULL TIME 2-3 years"
        },
        {
          id: 7,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "INDIA (CHENNAI) | FULL TIME | 3-5 Years "
        },
        {
          id: 8,
          title: "Data Engineer",
          department: "Engineering",
          requirements: "REQUIRE: CGTRAX/ML FULL TIME 2-3 years"
        }
      ];

      function openFilePicker() {
        document.getElementById('resumeInput').click();
      }

      // Populate jobs grid
      function populateJobs() {
        const jobsGrid = document.getElementById('jobsGrid');
        jobsGrid.innerHTML = '';

        jobsData.forEach(job => {
          const jobCard = document.createElement('div');
          jobCard.className = 'job-card';
          jobCard.innerHTML = `
  <div class="job-header">
    <div>
      <h3 class="job-title">${job.title}</h3>
      <p class="job-dept">${job.department}</p>
    </div>
    <a href="https://teal-mule-553916.hostingersite.com/jobdetails%20.php" class="job-apply-btn primary-btn">
      <span class="primary-btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12" />
          <polyline points="12 5 19 12 12 19" />
        </svg>
      </span>
      Apply Now
    </a>
  </div>
  <p class="job-requirements">${job.requirements}</p>
`;
          jobsGrid.appendChild(jobCard);
        });
      }



      // Initialize on page load
      document.addEventListener('DOMContentLoaded', function () {
        populateJobs();

        // Handle resume file selection
        document.getElementById('resumeInput').addEventListener('change', function (e) {
          const file = e.target.files[0];
          if (file) {
            document.querySelector('.resume-upload span').textContent = file.name;
          }
        });
      });
    </script>
</body>

<?php include 'footer.php'; ?>

</html>