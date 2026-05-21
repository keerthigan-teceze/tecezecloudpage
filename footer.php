<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer</title>
  <style>

    /* ===== RESET ===== */
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'gilroy', Arial, sans-serif;
    }

    /* ================================================
       FOOTER MAIN
    ================================================ */
    .ft-footer {
      background-color: #071a3e;
      background-image: url('images/footer-final-bg.png');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    /* Dark overlay over bg image */
    .ft-footer-overlay {
      position: absolute;
      inset: 0;
      z-index: 0;
    }

    /* All direct children above overlay */
    .ft-top,
    .ft-watermark,
    .ft-nav-section,
    .ft-bottom-bar {
      position: relative;
      z-index: 1;
    }

    /* ================================================
       TOP SECTION
    ================================================ */
    .ft-top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 50px 60px 10px;
      max-width: 1200px;
      margin: 0 auto;
      gap: 40px;
    }

    /* ===== LEFT ===== */
    .ft-left {
      max-width: 320px;
    }

    .ft-logo {
      height: 48px;
      width: auto;
      margin-bottom: 18px;
      display: block;
    }

    .ft-desc {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.7);
      line-height: 1.75;
      margin-bottom: 22px;
    }

    .ft-locate-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 9px 20px 9px 9px;
      border: 1.5px solid rgba(255, 255, 255, 0.4);
      border-radius: 50px;
      color: #ffffff;
      font-size: 16px;
      font-weight: 500;
      text-decoration: none;
      margin-bottom: 24px;
      transition: background 0.3s ease;
    }

    .ft-locate-btn:hover {
      background: rgba(255, 255, 255, 0.08);
    }

    .ft-locate-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .ft-socials {
      display: flex;
      gap: 10px;
    }

    .ft-social-link {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      border: 1px solid rgba(255, 255, 255, 0.25);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      text-decoration: none;
      transition: background 0.3s ease, border-color 0.3s ease;
    }

    .ft-social-link:hover {
      background: rgba(255, 255, 255, 0.12);
      border-color: rgba(255, 255, 255, 0.5);
    }

    .ft-social-link svg {
      width: 14px;
      height: 14px;
      fill: #ffffff;
    }

    /* ===== RIGHT ===== */
    .ft-right {
      text-align: right;
      flex-shrink: 0;
    }

    .ft-contact-label {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.55);
      letter-spacing: 0.5px;
      margin-bottom: 6px;
    }

    .ft-email-link {
      font-size: 16px;
      font-weight: 600;
      color: #ffffff;
      text-decoration: none;
      display: block;
      margin-bottom: 24px;
      transition: opacity 0.3s ease;
    }

    .ft-email-link:hover {
      opacity: 0.8;
    }

    .ft-call-label {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.55);
      letter-spacing: 0.5px;
      margin-bottom: 10px;
    }

    .ft-phone-row {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 16px;
      margin-bottom: 8px;
    }

    .ft-phone-country {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.55);
      min-width: 40px;
    }

    .ft-phone-number {
      font-size: 16px;
      font-weight: 600;
      color: #ffffff;
      letter-spacing: 0.3px;
    }

    /* ================================================
       WATERMARK — FULL WIDTH
       All properties use !important to survive CSS
       conflicts when this footer is merged into a
       larger page that has its own global resets or
       font-size / font-weight overrides.
    ================================================ */
    .ft-watermark {
      width: 100% !important;
      overflow: hidden !important;
      pointer-events: none !important;
      line-height: 1 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }

    .ft-watermark-text {
      font-size: 18vw !important;
      font-weight: 800 !important;
      font-family: 'Outfit', 'gilroy', Arial, sans-serif !important;
      color: rgba(255, 255, 255, 0.06) !important;
      white-space: nowrap !important;
      letter-spacing: -4px !important;
      display: block !important;
      line-height: 0.95 !important;
      width: 100% !important;
      text-align: center !important;
      padding: 0 !important;
      margin: 0 !important;
      text-transform: none !important;
      -webkit-text-stroke: 0 !important;
    }

    /* ================================================
       NAV LINKS SECTION
    ================================================ */
    .ft-nav-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px 60px 50px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .ft-nav-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
    }

    .ft-nav-col-title {
      font-size: 16px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 16px;
      letter-spacing: 0.3px;
    }

    .ft-nav-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .ft-nav-list li a {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      transition: color 0.3s ease;
      line-height: 1.5;
    }

    .ft-nav-list li a:hover {
      color: #13C5B8;
    }

    /* ================================================
       BOTTOM BAR
    ================================================ */
    .ft-bottom-bar {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 18px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
    }

    .ft-copyright {
      font-size: 11px;
      color: rgba(255, 255, 255, 0.45);
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .ft-bottom-links {
      display: flex;
      gap: 20px;
    }

    .ft-bottom-link {
      font-size: 11px;
      color: rgba(255, 255, 255, 0.45);
      text-decoration: none;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      transition: color 0.3s ease;
    }

    .ft-bottom-link:hover {
      color: #13C5B8;
    }

    /* ================================================
       TABLET (max-width: 1024px)
    ================================================ */
    @media (max-width: 1024px) {
      .ft-top {
        padding: 44px 40px 36px;
        flex-wrap: wrap;
      }

      .ft-left {
        max-width: 280px;
      }

      .ft-nav-section {
        padding: 36px 40px 44px;
      }

      .ft-nav-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px 40px;
      }

      .ft-bottom-bar {
        padding: 18px 40px;
      }

      .ft-watermark-text {
        font-size: 18vw !important;
      }
    }

    /* ================================================
       MOBILE (max-width: 768px)
    ================================================ */
    @media (max-width: 768px) {
      .ft-top {
        padding: 36px 24px 30px;
        flex-direction: column;
        gap: 32px;
      }

      .ft-left {
        max-width: 100%;
      }

      .ft-right {
        text-align: left;
        width: 100%;
      }

      .ft-phone-row {
        justify-content: flex-start;
      }

      .ft-nav-section {
        padding: 30px 24px 40px;
      }

      .ft-nav-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px 30px;
      }

      .ft-bottom-bar {
        padding: 16px 24px;
        flex-direction: column;
        text-align: center;
        gap: 12px;
      }

      .ft-watermark-text {
        font-size: 18vw !important;
        letter-spacing: -2px !important;
      }
    }

    /* ================================================
       SMALL MOBILE (max-width: 480px)
    ================================================ */
    @media (max-width: 480px) {
      .ft-top {
        padding: 30px 16px 24px;
      }

      .ft-nav-section {
        padding: 24px 16px 36px;
      }

      .ft-nav-grid {
        grid-template-columns: 1fr 1fr;
        gap: 20px 16px;
      }

      .ft-nav-col-title {
        font-size: 12px;
      }

      .ft-nav-list li a {
        font-size: 12px;
      }

      .ft-bottom-bar {
        padding: 14px 16px;
      }

      .ft-copyright {
        font-size: 10px;
      }

      .ft-bottom-link {
        font-size: 10px;
      }

      .ft-watermark-text {
        font-size: 18vw !important;
        letter-spacing: -1px !important;
      }

      .ft-phone-number {
        font-size: 14px;
      }

      .ft-email-link {
        font-size: 14px;
      }
    }

  </style>
</head>
<body>

<!-- ===== FOOTER ===== -->
<footer class="ft-footer">

  <!-- Dark overlay for bg image -->
  <div class="ft-footer-overlay"></div>

  <!-- ===== TOP SECTION ===== -->
  <div class="ft-top">
    <div class="ft-left">
      <img src="images/teceze-logo.svg" alt="Teceze Logo" class="ft-logo"/>
      <p class="ft-desc">Teceze leverages AI, intelligent automation, and advanced cybersecurity to help businesses innovate, stay secure, and scale with confidence.</p>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="ft-locate-btn">
        <span class="ft-locate-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </span>
        Locate Us
      </a>
      <div class="ft-socials">
        <a href="https://www.facebook.com/tecezeltd/" class="ft-social-link" aria-label="Facebook">
          <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="https://x.com/teceze_" class="ft-social-link" aria-label="X">
          <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="https://www.instagram.com/teceze_/" class="ft-social-link" aria-label="Instagram">
          <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="#ffffff" stroke-width="2"/><circle cx="12" cy="12" r="4" fill="none" stroke="#ffffff" stroke-width="2"/><circle cx="17.5" cy="6.5" r="1.5"/></svg>
        </a>
        <a href="https://www.linkedin.com/company/teceze" class="ft-social-link" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
      </div>
    </div>

    <div class="ft-right">
      <p class="ft-contact-label">Send Us An Email</p>
      <a href="mailto:info@teceze.com" class="ft-email-link">info@teceze.com</a>
      <p class="ft-call-label">Give Us A Call</p>
      <div class="ft-phone-row">
        <span class="ft-phone-country">UK</span>
        <span class="ft-phone-number">+ 44 20 4551 2020</span>
      </div>
      <div class="ft-phone-row">
        <span class="ft-phone-country">USA</span>
        <span class="ft-phone-number">+1 332 282 0555</span>
      </div>
      <div class="ft-phone-row">
        <span class="ft-phone-country">India</span>
        <span class="ft-phone-number">+91 7824827322</span>
      </div>
    </div>
  </div>

  <!-- ===== WATERMARK FULL WIDTH ===== -->
  <div class="ft-watermark">
    <span class="ft-watermark-text">Let's Talk</span>
  </div>

  <!-- ===== NAV LINKS ===== -->
  <div class="ft-nav-section">
    <div class="ft-nav-grid">
      <div class="ft-nav-col">
        <h4 class="ft-nav-col-title">Who we are</h4>
        <ul class="ft-nav-list">
          <li><a href="https://teal-mule-553916.hostingersite.com/Leadership.php">Leadership Team</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/alliances.php">Alliances &amp; Partnership</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/about.php">About us</a></li>
        </ul>
      </div>
      <div class="ft-nav-col">
        <h4 class="ft-nav-col-title">What we do</h4>
        <ul class="ft-nav-list">
          <li><a href="https://teal-mule-553916.hostingersite.com/digital_workspace.php">Digital Workplace Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/Cybersecurity.php">Cyber Security Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/CloudInfratructure.php">Cloud and Infra Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/application.php">Application Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/Managed_it.php">Managed IT Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/global_procurement.php">Global Procurement</a></li>
        </ul>
      </div>
      <div class="ft-nav-col">
        <h4 class="ft-nav-col-title">Who we serve</h4>
        <ul class="ft-nav-list">
          <li><a href="https://teal-mule-553916.hostingersite.com/financial_service.php">Financial Services</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/health_carepage.php">Healthcare</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/manufacturing.php">Manufacturing</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/It-technology.php">IT &amp; Technology</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/education.php">Education</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/government_Page.php">Government</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/retail.php">Retail</a></li>
          <li><a href="https://teal-mule-553916.hostingersite.com/legal_sector_page.php">Legal Sector</a></li>
        </ul>
      </div>
      <div class="ft-nav-col">
        <h4 class="ft-nav-col-title">Resources</h4>
        <ul class="ft-nav-list">
          
          <li><a href="https://teal-mule-553916.hostingersite.com/blog.php">Blogs</a></li>
          
          <li><a href="https://teal-mule-553916.hostingersite.com/casestudy.php">Case Studies</a></li>
          
          <li><a href="https://teal-mule-553916.hostingersite.com/EventList.php">Events</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ===== BOTTOM BAR ===== -->
  <div class="ft-bottom-bar">
    <p class="ft-copyright">© 2026 Made With Teceze Limited. All Rights Reserved.</p>
    <div class="ft-bottom-links">
      <a href="#" class="ft-bottom-link">Accessibility</a>
      <a href="#" class="ft-bottom-link">Cookie</a>
      <a href="#" class="ft-bottom-link">Legal &amp; Privacy</a>
    </div>
  </div>

</footer>

</body>
</html>
