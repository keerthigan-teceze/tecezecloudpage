<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Event Lists</title>
    <style>
      .slide-overlay {
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 2;
      }
      .breadcrumb {
        font-size: 18px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #ffffff;
        margin-bottom: 0.85rem;
        font-weight: 500;
      }
      .subtitle {
        font-size: 20px;
        line-height: 1.5;
        color: #ffffff;
        max-width: 1500px;
        margin-bottom: 2rem;
        opacity: 0.9;
      }
      .slide-content h1 {
        font-family: "Gilroy";
        font-weight: 100;
        line-height: 1.2;
      }

      .hero-rule {
        width: 1400px;
        height: 1px;
        background: linear-gradient(
          to right,
          rgba(255, 255, 255, 0.25),
          transparent
        );
        margin-bottom: 1.5rem;
        position: relative;
      }

      .blog-hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 10px 24px 10px 10px;
        border: 1.5px solid rgba(255, 255, 255, 1);
        border-radius: 50px;
        color: #ffffff;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        transition:
          background 0.3s ease,
          border-color 0.3s ease;
      }
      .blog-hero-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        border: 1.5px solid #13c5b8;
      }
      .blog-hero-btn-icon {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: linear-gradient(135deg, #13c5b8, #2a44b0);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: opacity 0.3s ease;
      }

      .blog-hero-btn:hover .blog-hero-btn-icon {
        opacity: 0.88;
      }

      .hero-controls {
        position: absolute;
        bottom: 9rem;
        right: clamp(16px, 5vw, 70px);
        z-index: 5;
        color: #fff;
      }

      /* Counter */
      .hero-counter {
        display: flex;
        align-items: flex-end;
        gap: 10px;
      }

      #hero-current {
        font-size: clamp(48px, 6vw, 92px);
        font-weight: 300;
        line-height: 1;
      }

      .hero-total {
        font-size: clamp(18px, 2vw, 28px);
        opacity: 0.7;
      }

      /* Progress Line */
      .hero-progress {
        width: 180px;
        height: 3px;
        background: rgba(255, 255, 255, 0.2);
        margin-top: 10px;
        position: relative;
        overflow: hidden;
      }

      .hero-progress-bar {
        position: absolute;
        height: 100%;
        width: 0%;
        background: #18e0d3;
        transition: width 0.6s ease;
      }

      .hero-nav {
        margin-top: 14px;
        display: flex;
        justify-content: flex-end;
        gap: 12px;
      }

      .hero-nav button {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.35);
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        backdrop-filter: blur(6px);
        transition: background 0.3s ease;
      }

      .hero-nav button:hover {
        background: rgba(255, 255, 255, 1);
        color: black;
      }

      .cta-wrapper {
        padding: 80px 20px;
        background: #ffffff;
        display: flex;
        justify-content: center;
      }

      /* CTA Card */
      .cta-card {
        width: 100%;
        border-radius: 20px;
        padding: 88px;
        background: url("images/CTA-bg-img.jpg");
        background-position: center top;
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
      }

      /* CTA Content */
      .cta-content {
        position: relative;
        z-index: 2;
        max-width: 520px;
        color: #ffffff;
      }

      /* Label */
      .cta-label {
        font-size: 18px;
        opacity: 0.8;
        display: block;
        margin-bottom: 12px;
      }

      /* Title */
      .cta-title {
        font-size: 32px;
        font-weight: 100;
        line-height: 1.25;
        margin-bottom: 16px;
      }

      /* Description */
      .cta-desc {
        font-size: 16px;
        opacity: 0.85;
        margin-bottom: 28px;
      }

      /* CTA Button */
      .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 12px 26px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: #ffffff;
        text-decoration: none;
        font-size: 15px;
        backdrop-filter: blur(6px);
        transition: all 0.3s ease;
      }

      .cta-btn:hover {
        background: #ffffff;
        color: #0b1d4d;
      }

      /* Arrow Icon */
      .cta-btn-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #00e1ff;
        color: #0b1d4d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
      }

      .projects-section {
        position: relative;
        padding: clamp(60px, 8vw, 90px) 0;
        background: linear-gradient(
          90deg,
          #06245a 0%,
          #04163f 25%,
          #020b2d 55%,
          #010824 100%
        );
        overflow: hidden;
      }

      .projects-section::before {
        content: "";
        position: absolute;
        inset: 0;

        background-image:
          linear-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 2px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.12) 1px, transparent 1px);

        background-size: 120px 120px;
        opacity: 0.9;
        z-index: 0;
        pointer-events: none;
      }

      .projects-section::after {
        content: "";
        position: absolute;
        inset: 0;

        background: radial-gradient(
          ellipse 900px 600px at 0% 40%,
          rgba(0, 120, 255, 0.35),
          transparent 65%
        );

        z-index: 0;
        pointer-events: none;
      }
      .projects-overlay {
        position: absolute;
        inset: 0;
        z-index: 1;
      }

      .projects-container {
        position: relative;
        z-index: 2;
        max-width: 1400px;
        margin: auto;
        padding: 0 20px;
      }

      /* Header */
      .projects-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
        gap: 40px;
      }

      .small-title {
        font-size: 16px;
        color: #ffffff;
      }

      .small-subtitle {
        font-size: 16px;
      }

      .projects-right {
        max-width: 800px;
        font-size: 32px;
        line-height: 100%;
        font-weight: 400;
      }
      .projects-right span {
        color: #849cac;
      }

      .event-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 25px;
        width: 100%;
      }

      .event-card {
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
        max-width: 450px;
        border-radius: 12px;
        background: transparent;
        padding-bottom: 0;
        box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.25);
        overflow: hidden;
      }

      .event-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.45);
        cursor: pointer;
      }

      .event-image {
        position: relative;
        height: 240px;
      }

      .event-image img {
        width: 100%;
        height: 100%;
        object-fit: fill;
      }

      .event-badges {
        position: absolute;
        top: 14px;
        left: 14px;
        right: 14px;
        display: flex;
        justify-content: space-between;
      }

      .event-badges span {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        padding: 6px 16px;
        font-size: 16px;
        border-radius: 999px;
        backdrop-filter: blur(100px);
      }

      .event-body {
        padding: 40px 22px;
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.22);
        border-top: none; /* ✅ image edge clean */
        border-radius: 0 0 12px 12px; /* ✅ bottom rounded */

        background: rgba(255, 255, 255, 0.04);
        backdrop-filter: blur(6px);
      }

      .event-location {
        font-size: 16px;
        margin-bottom: 20px;
        color: #ffffff99;
      }

      .event-body h3 {
        font-size: 24px;
        line-height: 100%;
        font-weight: 400;
        color: #ffffff;
      }

      .view-more {
        margin-top: 60px;
        display: flex;
        justify-content: center;
      }

      .filter-bar {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 40px;
        flex-wrap: wrap;
        margin-bottom: 40px;
      }

      /* LEFT */
      .filter-left {
        color: #dbe7ff;
        font-size: 18px;
        font-weight: 500;
        white-space: nowrap;
        z-index: 1;
      }

      /* RIGHT */
      .filter-right {
        display: flex;
        gap: 19px;
        flex-wrap: wrap;
        z-index: 1;
      }

      .custom-select {
        position: relative;
        min-width: 160px;
      }

      .select-trigger {
        width: 100%;
        padding: 10px 20px 10px 20px;
        border-radius: 14px;
        border: 1px solid rgba(255, 255, 255, 0.32);
        background: linear-gradient(
          135deg,
          rgba(255, 255, 255, 0.15),
          rgba(255, 255, 255, 0.05)
        );
        color: #fff;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 40px;
        justify-content: space-between;
        backdrop-filter: blur(14px);
      }
      .select-trigger:focus {
        border-style: solid;
        border-color: rgba(249, 244, 244, 0.941);
        border-width: 1px 2px 2px 1px;
      }
      .select-value {
        font-size: 16px;
      }

      .select-arrow {
        width: 20px;
        height: 20px;
        fill: none;
        stroke: #fff;
        stroke-width: 2.2;
        transition: transform 0.3s ease;
      }

      .custom-select.open .select-arrow {
        transform: rotate(180deg);
      }

      /* Options */
      .select-options {
        position: absolute;
        top: calc(100% + 8px);
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: none;
        z-index: 50;
        box-shadow: 0 14px 40px rgba(0, 0, 0, 0.35);
        border: rgba(255, 255, 255, 0.32) solid 1px;
        backdrop-filter: blur(70px);
        max-height: 300px;
        overflow-y: auto;
      }

      .select-options::-webkit-scrollbar {
        width: 5px;
      }

      .select-options::-webkit-scrollbar-track {
        background: transparent;
        margin-top: 8px;
        margin-bottom: 8px;
      }

      .select-options::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.25);
        border-radius: 10px;
      }

      .custom-select.open .select-options {
        display: block;
      }

      .select-options li {
        padding: 12px 18px;
        color: #fff;
        cursor: pointer;
        list-style: none;
        font-size: 14px;
        font-weight: 400;
        border-bottom: rgba(255, 255, 255, 0.32) solid 1px;
      }

      .select-options li:last-child {
        border-bottom: none;
        border-radius: 0 0 12px 12px;
      }

      .select-options li:first-child {
        border-radius: 12px 12px 0 0;
      }

      .select-options li:hover {
        background: rgba(255, 255, 255, 0.12);
      }

      .select-options li.active-option {
        background: linear-gradient(135deg, #13c5b8, #2a44b0);
      }

      .select-options li:first-child.active-option {
        border-radius: 12px 12px 0 0;
      }
      .select-options li:last-child.active-option {
        border-radius: 0 0 12px 12px;
      }

      @media (max-width: 1024px) {
        .cta-card {
          border-radius: 20px;
          background-size: cover;
          padding: 50px;
        }
        .hero-controls {
          bottom: 6rem;
        }
      }

      /* Mobile Adjustment */

      @media (max-width: 768px) {
        .slide {
          padding-top: 100px;
        }

        .subtitle {
          font-size: 18px;
        }

        .hero-controls {
          right: 15%;
          transform: translateX(50%);
          bottom: 2rem;
        }
        #hero-current {
          font-size: 40px;
        }
        .hero-counter {
          gap: 6px;
          font-size: 16px;
        }

        .hero-progress {
          width: 160px;
        }

        .hero-nav {
          justify-content: flex-end;
        }

        .projects-container {
          max-width: 700px;
          padding: 0 20px;
        }

        .projects-section::before {
          opacity: 0.18;
        }

        .projects-right {
          max-width: 800px;
          font-size: 18px;
          line-height: 1.4;
        }
        .cta-card {
          padding: 40px 24px;
        }
        .cta-title {
          font-size: 26px;
        }

        .cta-card {
          background-size: cover;
          background-position: center;
          min-height: 200px;
          padding: 40px 24px;
        }

        .cta-content {
          max-width: 100%;
        }

        .event-image {
          height: 200px;
        }

        .event-body h3 {
          font-size: 18px;
        }

        .filter-bar {
          flex-direction: column;
          gap: 20px;
        }
        .filter-left {
          font-size: 16px;
        }

        .filter-right {
          width: 100%;
          display: grid;
          grid-template-columns: 1fr 1fr; /* ✅ 2 columns */
          gap: 12px;
        }

        .custom-select {
          width: 100%;
        }
        .hero-nav button {
          width: 40px;
          height: 40px;
        }
        .event-grid {
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
      }

      @media (max-width: 600px) {
        .event-grid {
          grid-template-columns: 1fr;
        }
      }

      @media (max-width: 480px) {
        .slide-content h1 {
          max-width: 300px;
        }
        .subtitle {
          font-size: 16px;
        }
        .hero-controls {
          right: 25%;
          transform: translateX(50%);
        }
        .hero-progress {
          width: 140px;
        }
        .blog-hero-btn {
          font-size: 13px;
          padding: 9px 20px 9px 9px;
        }

        .blog-hero-btn-icon {
          width: 30px;
          height: 30px;
        }

        .filter-right {
          grid-template-columns: 1fr; /* ✅ 1 column */
        }
        .projects-right {
          max-width: 800px;
          font-size: 16px;
          line-height: 1.4;
        }
        .evebt-body h3 {
          font-size: 16px;
        }
      }
    </style>
    <?php include 'header.php'; ?>
  </head>
  <body>
    <div class="slider" id="slider">
      <div class="slide active">
        <img class="slide-bg" id="slideBg" src="" alt="" />
        <div class="slide-overlay"></div>

        <div class="slide-content">
          <p class="breadcrumb">WHO WE ARE / EVENTS</p>
          <div class="hero-rule"></div>
          <h1 id="title"></h1>
          <p class="subtitle" id="subtitle"></p>

          <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="blog-hero-btn" id="cta">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            Know More
          </a>
        </div>

        <!-- Controls -->

        <div class="hero-controls">
          <div class="hero-counter">
            <span id="hero-current"></span>
            <span class="hero-total" id="hero-total">/ </span>
          </div>

          <div class="hero-progress">
            <span class="hero-progress-bar" id="heroProgress"></span>
          </div>

          <div class="hero-nav">
            <!-- PREV -->
            <button id="prevSlide" aria-label="Previous slide">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="19" y1="12" x2="5" y2="12" />
                <polyline points="12 19 5 12 12 5" />
              </svg>
            </button>

            <!-- NEXT -->
            <button id="nextSlide" aria-label="Next slide">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <section class="projects-section">
      <div class="projects-overlay"></div>

      <div class="projects-container">
        <!-- Heading Row -->
        <div class="projects-header">
          <div class="projects-left">
            <p class="small-title">Global Milestones.</p>
            <p class="small-subtitle">Trusted Worldwide.</p>
          </div>

          <div class="projects-right">
            Delivering successful projects worldwide, we build
            <span
              >lasting partnerships and drive measurable growth across
              industries.</span
            >
          </div>
        </div>

        <div class="filter-bar">
          <div class="filter-left">
            <span>Filter By</span>
          </div>

          <div class="filter-right">
            <!-- Industry -->
            <div class="custom-select" data-filter="industry">
              <button class="select-trigger">
                <span class="select-value">Industry</span>
                <svg class="select-arrow" viewBox="0 0 24 24">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>

              <ul class="select-options">
                <li data-value="financial-services">Financial Services</li>
                <li data-value="healthcare">Healthcare</li>
                <li data-value="manufacturing">Manufacturing</li>
                <li data-value="technology">IT & Technology</li>
                <li data-value="education">Education</li>
                <li data-value="government">Government</li>
                <li data-value="retail">Retail</li>
                <li data-value="legal-sector">Legal Sector</li>
              </ul>
            </div>

            <!-- Service -->
            <div class="custom-select" data-filter="service">
              <button class="select-trigger">
                <span class="select-value">Service</span>
                <svg class="select-arrow" viewBox="0 0 24 24">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>

              <ul class="select-options">
                <li data-value="digital-workplace">Digital Workplace</li>
                <li data-value="cybersecurity">Cybersecurity</li>
                <li data-value="cloud-infrastructure">Cloud Infrastructure</li>
                <li data-value="application-development">
                  Application Development
                </li>
                <li data-value="managed-it">Managed IT</li>
                <li data-value="global-procurement">Global Procurement</li>
              </ul>
            </div>

            <!-- Year -->
            <div class="custom-select" data-filter="year">
              <button class="select-trigger">
                <span class="select-value">Year</span>
                <svg class="select-arrow" viewBox="0 0 24 24">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>

              <ul class="select-options">
                <li data-value="2021">2021</li>
                <li data-value="2022">2022</li>
                <li data-value="2023">2023</li>
                <li data-value="2024">2024</li>
                <li data-value="2025">2025</li>
                <li data-value="2026">2026</li>
              </ul>
            </div>

            <!-- Region -->
            <div class="custom-select" data-filter="region">
              <button class="select-trigger">
                <span class="select-value">Region</span>
                <svg class="select-arrow" viewBox="0 0 24 24">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>

              <ul class="select-options">
                <li data-value="australia">Australia</li>
                <li data-value="budapest">Budapest</li>
                <li data-value="romania">Romania</li>
                <li data-value="belgium">Belgium</li>
                <li data-value="brazil">Brazil</li>
                <li data-value="canada">Canada</li>
                <li data-value="china">China</li>
                <li data-value="denmark">Denmark</li>
                <li data-value="france">France</li>
                <li data-value="germany">Germany</li>
                <li data-value="greece">Greece</li>
                <li data-value="india">India</li>
                <li data-value="ireland">Ireland</li>
                <li data-value="italy">Italy</li>
                <li data-value="japan">Japan</li>
                <li data-value="korea">Korea</li>
                <li data-value="malaysia">Malaysia</li>
                <li data-value="mexico">Mexico</li>
                <li data-value="netherlands">Netherlands</li>
                <li data-value="nigeria">Nigeria</li>
                <li data-value="philippines">Philippines</li>
                <li data-value="singapore">Singapore</li>
                <li data-value="poland">Poland</li>
                <li data-value="portugal">Portugal</li>
                <li data-value="Saudi Arabia">Saudi Arabia</li>
                <li data-value="singapore">Singapore</li>
                <li data-value="south-africa">South Africa</li>
                <li data-value="spain">Spain</li>
                <li data-value="srilanka">Sri Lanka</li>
                <li data-value="sweden">Sweden</li>
                <li data-value="UAE">UAE</li>
                <li data-value="uk">United Kingdom</li>
                <li data-value="usa">USA</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="event-grid">
          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card">
            <div class="event-image">
              <img src="images/event_img1.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="technology"
            data-service="cloud"
            data-product="ai"
            data-platform="cloud"
            data-year="2026"
            data-region="north-america"
          >
            <div class="event-image">
              <img src="images/event_img2.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="healthcare"
            data-service="cloud"
            data-product="ai"
            data-platform="cloud"
            data-year="2026"
            data-region="north-america"
          >
            <div class="event-image">
              <img src="images/event_img3.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="financial-services">
            <div class="event-image">
              <img src="images/event_img4.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="education">
            <div class="event-image">
              <img src="images/event_img5.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="retail">
            <div class="event-image">
              <img src="images/event_img6.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="government">
            <div class="event-image">
              <img src="images/event_img7.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="legal-sector">
            <div class="event-image">
              <img src="images/event_img8.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>

          <a href="https://teal-mule-553916.hostingersite.com/events-details-page.php" class="event-card" data-industry="healthcare">
            <div class="event-image">
              <img src="images/event_img9.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
          <a
            href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="healthcare"
          >
            <div class="event-image">
              <img src="images/event_img9.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
          <a
            href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="healthcare"
          >
            <div class="event-image">
              <img src="images/event_img9.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
          <a
            href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="healthcare"
          >
            <div class="event-image">
              <img src="images/event_img9.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
          <a
            href="https://teal-mule-553916.hostingersite.com/events-details-page.php"
            class="event-card"
            data-industry="healthcare"
          >
            <div class="event-image">
              <img src="images/event_img9.jpg" alt="event" />

              <div class="event-badges">
                <span>April 25, 2026</span>
                <span>10am – 2am</span>
              </div>
            </div>

            <div class="event-body">
              <p class="event-location">📍 Chennai / Virtual</p>
              <h3>Meet Teceze at North America Summit 2026</h3>
            </div>
          </a>
        </div>

        <div class="view-more">
          <a href="#" class="blog-hero-btn">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            View All Events
          </a>
        </div>
      </div>
    </section>

    <section class="cta-wrapper">
      <div class="cta-card">
        <div class="cta-content">
          <span class="cta-label">Get In Touch</span>
          <h2 class="cta-title">Partner with Teceze</h2>
          <p class="cta-desc">
            Let's discuss how Teceze can deliver for your organization.
          </p>

          <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="blog-hero-btn">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            Let’s Talk
          </a>
        </div>
      </div>
    </section>

    <script>
      /* ---------- SLIDE DATA ---------- */
      const slides = [
        {
          bg: "images/event1.png",
          title: "Teceze Summit North<br>America 2026",
          subtitle:
            "Seamless collaboration. Intelligent automation. Transformative experiences. Endpoint to cloud designed, deployed, and managed as one connected ecosystem.",
          link: "https://teal-mule-553916.hostingersite.com/Contactus.php",
        },
        {
          bg: "images/event2.png",
          title: "Teceze Summit North<br>America 2026",
          subtitle:
            "Seamless collaboration. Intelligent automation. Transformative experiences. Endpoint to cloud designed, deployed, and managed as one connected ecosystem.",
          link: "https://teal-mule-553916.hostingersite.com/Contactus.php",
        },
        {
          bg: "images/event3.png",
          title: "Teceze Summit North<br>America 2026",
          subtitle:
            "Seamless collaboration. Intelligent automation. Transformative experiences. Endpoint to cloud designed, deployed, and managed as one connected ecosystem.",
          link: "https://teal-mule-553916.hostingersite.com/Contactus.php",
        },
      ];

      let index = 0;

      /* ---------- ELEMENTS ---------- */
      const bg = document.getElementById("slideBg");
      const title = document.getElementById("title");
      const subtitle = document.getElementById("subtitle");
      const cta = document.getElementById("cta");
      const current = document.getElementById("hero-current");
      const total = document.getElementById("hero-total");
      const progress = document.getElementById("heroProgress");

      total.textContent = `/ ${String(slides.length).padStart(2, "0")}`;

      function loadSlide(i) {
        const s = slides[i];
        bg.src = s.bg;
        title.innerHTML = s.title;
        subtitle.textContent = s.subtitle;
        cta.href = s.link;

        current.textContent = String(i + 1).padStart(2, "0");
        progress.style.width = ((i + 1) / slides.length) * 100 + "%";
      }

      document.getElementById("nextSlide").onclick = () => {
        index = (index + 1) % slides.length;
        loadSlide(index);
      };

      document.getElementById("prevSlide").onclick = () => {
        index = (index - 1 + slides.length) % slides.length;
        loadSlide(index);
      };

      /* Auto slide */
      setInterval(() => {
        index = (index + 1) % slides.length;
        loadSlide(index);
      }, 6000);

      /* Init */
      loadSlide(index);
    </script>

    <script>
      const selects = document.querySelectorAll(".custom-select");

      selects.forEach((select) => {
        const trigger = select.querySelector(".select-trigger");
        const value = select.querySelector(".select-value");
        const options = select.querySelectorAll(".select-options li");

        // Toggle open / close
        trigger.addEventListener("click", () => {
          selects.forEach((s) => s !== select && s.classList.remove("open"));
          select.classList.toggle("open");
        });

        // Select option
        options.forEach((option) => {
          option.addEventListener("click", () => {
            value.textContent = option.textContent;
            value.dataset.value = option.dataset.value;
            select.classList.remove("open");
          });
        });
      });

      // Close on outside click
      document.addEventListener("click", (e) => {
        if (!e.target.closest(".custom-select")) {
          selects.forEach((s) => s.classList.remove("open"));
        }
      });
    </script>
    <script>
      let filters = {};
      const allCards = document.querySelectorAll(".event-card");

      document.querySelectorAll(".custom-select").forEach((select) => {
        const valueEl = select.querySelector(".select-value");
        const options = select.querySelectorAll("li");

        const key = select.dataset.filter;

        options.forEach((option) => {
          option.addEventListener("click", () => {
            const value = option.dataset.value;

            // reset all option styles
            options.forEach((opt) => opt.classList.remove("active-option"));

            // toggle reset
            if (filters[key] === value) {
              delete filters[key];
              valueEl.textContent = key.charAt(0).toUpperCase() + key.slice(1);

              select.classList.remove("active");
            } else {
              filters[key] = value;
              valueEl.textContent = option.textContent;

              // ✅ active select
              select.classList.add("active");

              // ✅ highlight option
              option.classList.add("active-option");
            }

            applyFilters();
          });
        });
      });

      function applyFilters() {
        allCards.forEach((card) => {
          let show = true;

          Object.keys(filters).forEach((key) => {
            if (card.dataset[key] !== filters[key]) {
              show = false;
            }
          });

          card.style.display = show ? "block" : "none";
        });
      }

       const cards = document.querySelectorAll(".event-card");
      const viewMoreBtn = document.querySelector(".view-more a");

      let visibleCount = 9; // ✅ first show 9 cards

      function updateCards() {
        cards.forEach((card, index) => {
          card.style.display = index < visibleCount ? "flex" : "none";
        });
      }

      // ✅ initial load
      updateCards();

      // ✅ button click
      viewMoreBtn.addEventListener("click", (e) => {
        e.preventDefault();

        visibleCount += 3; // show 3 more cards

        updateCards();

        // ✅ hide button when all visible

        if (visibleCount >= cards.length) {
          viewMoreBtn.style.pointerEvents = "none";
          viewMoreBtn.style.opacity = "0.5";
        }
      });
    </script>
  </body>
  <?php include 'footer.php'; ?>
</html>
