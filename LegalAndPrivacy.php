<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Legal and Privacy</title>
  <style>

    /* ===== RESET ===== */
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #ffffff;
      color: #0f1f3d;
    }

    /* ================================================
       SECTION 1: LEGAL HERO
    ================================================ */
    .lp-hero {
      position: relative;
      width: 100%;
      min-height: 380px;
      background-image: url('images/legal-hero-bg.png');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .lp-hero-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 20, 60, 0.55);
      z-index: 1;
    }

    .lp-hero-content {
      position: relative;
      z-index: 2;
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 60px;
      width: 100%;
    }

    .lp-hero-label {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1.8px;
      color: #ffffff;
      text-transform: uppercase;
      margin-bottom: 12px;
      opacity: 0.9;
    }

    .lp-hero-divider {
      width: 100%;
      height: 1px;
      background: rgba(255, 255, 255, 0.25);
      margin-bottom: 28px;
    }

    .lp-hero-title {
      font-size: 48px;
      font-weight: 300;
      line-height: 1.2;
      color: #ffffff;
      margin-bottom: 18px;
      letter-spacing: -0.5px;
    }

    .lp-hero-sub {
      font-size: 14px;
      font-weight: 400;
      line-height: 1.75;
      color: rgba(255, 255, 255, 0.85);
      max-width: 540px;
    }

    /* ================================================
       SECTION 2: LEGAL CONTENT
    ================================================ */
    .lp-content-section {
      background: #ffffff;
      width: 100%;
      padding: 70px 40px 100px;
    }

    .lp-content-wrapper {
      max-width: 860px;
      margin: 0 auto;
    }

    .lp-main-title {
      font-size: 28px;
      font-weight: 700;
      color: #0f1f3d;
      margin-bottom: 14px;
    }

    .lp-main-intro {
      font-size: 14px;
      color: #4a5568;
      line-height: 1.75;
      margin-bottom: 20px;
    }

    /* ===== LIST ===== */
    .lp-list {
      list-style: disc;
      padding-left: 20px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 20px;
    }

    .lp-list li {
      font-size: 13px;
      color: #4a5568;
      line-height: 1.75;
    }

    /* ===== CONTENT BLOCKS ===== */
    .lp-block {
      margin-top: 36px;
    }

    .lp-block-title {
      font-size: 17px;
      font-weight: 700;
      color: #0f1f3d;
      margin-bottom: 16px;
      padding-bottom: 10px;
      border-bottom: 1px solid #edf0f5;
    }

    /* ===== FOOTER NOTE ===== */
    .lp-footer-note {
      margin-top: 40px;
      padding-top: 24px;
      border-top: 1px solid #edf0f5;
      font-size: 13px;
      color: #4a5568;
      line-height: 1.75;
      font-style: italic;
    }

    .lp-email-link {
      color: #2A44B0;
      text-decoration: none;
      font-weight: 500;
      transition: opacity 0.3s ease;
    }

    .lp-email-link:hover {
      opacity: 0.75;
      text-decoration: underline;
    }

    /* ================================================
       TABLET (max-width: 1024px)
    ================================================ */
    @media (max-width: 1024px) {
      .lp-hero-content {
        padding: 70px 40px;
      }

      .lp-hero-title {
        font-size: 40px;
      }

      .lp-content-section {
        padding: 60px 40px 80px;
      }

      .lp-main-title {
        font-size: 24px;
      }
    }

    /* ================================================
       MOBILE (max-width: 768px)
    ================================================ */
    @media (max-width: 768px) {
      .lp-hero {
        min-height: 320px;
      }

      .lp-hero-content {
        padding: 60px 24px;
      }

      .lp-hero-title {
        font-size: 32px;
      }

      .lp-hero-sub {
        font-size: 13px;
      }

      .lp-content-section {
        padding: 50px 24px 70px;
      }

      .lp-main-title {
        font-size: 22px;
      }

      .lp-main-intro {
        font-size: 13px;
      }

      .lp-list li {
        font-size: 13px;
      }

      .lp-block-title {
        font-size: 16px;
      }
    }

    /* ================================================
       SMALL MOBILE (max-width: 480px)
    ================================================ */
    @media (max-width: 480px) {
      .lp-hero {
        min-height: 280px;
      }

      .lp-hero-content {
        padding: 50px 20px;
      }

      .lp-hero-title {
        font-size: 26px;
      }

      .lp-content-section {
        padding: 40px 16px 60px;
      }

      .lp-main-title {
        font-size: 20px;
      }

      .lp-list {
        padding-left: 16px;
        gap: 10px;
      }

      .lp-list li {
        font-size: 12px;
        line-height: 1.7;
      }

      .lp-block-title {
        font-size: 15px;
      }

      .lp-footer-note {
        font-size: 12px;
      }
    }

  </style>
</head>
<body>
<?php include 'header.php'; ?>
<!-- ===== SECTION 1: LEGAL HERO ===== -->
<section class="lp-hero">
  <div class="lp-hero-overlay"></div>
  <div class="lp-hero-content">
    <p class="lp-hero-label">LEGAL AND PRIVACY</p>
    <div class="lp-hero-divider"></div>
    <h1 class="lp-hero-title">Built on Privacy,<br>Security, and Trust</h1>
    <p class="lp-hero-sub">Your information is handled with transparency, security, and full
    adherence to global privacy regulations. We are committed to
    maintaining the highest standards of data protection at all times.</p>
  </div>
</section>

<!-- ===== SECTION 2: LEGAL CONTENT ===== -->
<section class="lp-content-section">
  <div class="lp-content-wrapper">

    <h2 class="lp-main-title">Legal and Privacy</h2>
    <p class="lp-main-intro">Use of this site is controlled by Teceze (UK) Ltd subject to the following Terms and Conditions:</p>

    <ul class="lp-list">
      <li>Your use of this site confirms acceptance of these Terms and Conditions as at the date of your first use of the site.</li>
      <li>Teceze (UK) Ltd reserves the right to change these Terms and Conditions from time to time by posting changes online. Your continued use of this site after changes are posted constitutes your acceptance of this Agreement as modified.</li>
      <li>You agree to use this site only for lawful purposes, and in a manner which does not infringe the rights of, restrict, or inhibit the use and enjoyment of the site by any third party.</li>
      <li>This site and the information, names, images, pictures, logos regarding or relating to Teceze (UK) Ltd are provided "as is" without any representation or endorsement made and without warranty of any kind whether express or implied. In no event will Teceze (UK) Ltd be liable for any damages including, without limitation, indirect or consequential damages, or any damages whatsoever arising from the use of or in connection with such use or loss of use of this site, whether in contract or in negligence. Whilst Teceze (UK) Ltd endeavours to ensure the information contained in this site is accurate, it does not warrant that it is error free.</li>
      <li>Teceze (UK) Ltd does not warrant that the functions contained in this site will be uninterrupted or error free, that defects will be corrected, or that this site or the server that makes it available are free of viruses or bugs or represents the full functionality, said reliability of the materials.</li>
    </ul>

    <!-- Copyright restrictions -->
    <div class="lp-block">
      <h3 class="lp-block-title">Copyright restrictions</h3>
      <ul class="lp-list">
        <li>Commercial use or publication of all or any item displayed is strictly prohibited without prior authorisation from Teceze (UK) Ltd. Nothing contained herein shall be construed as conferring any licence by Teceze (UK) Ltd to use any item displayed.</li>
        <li>Documents may be copied for personal use only on the condition that copyright and source indications are also copied, no modifications are made and the document is copied entirely. However, some documents and photos have been published on this site with the permission of the relevant copyright owners (who are not Teceze (UK) Ltd). All rights are reserved on these documents and permission to copy them must be requested from the copyright owners (the sources are indicated within these documents /photographs).</li>
        <li>This site may contain links to other sites, please be aware that Teceze (UK) Ltd is not responsible for the privacy practices of such other sites and takes no responsibility for their content or availability.</li>
        <li>If there is any conflict between these Terms and Conditions and rules and/ or specific terms of use appearing elsewhere relating to specific material then the latter shall prevail.</li>
        <li>These terms and conditions shall be governed and construed in accordance with the laws of England and Wales. Any disputes shall be subject to the exclusive jurisdiction of the Courts of England and Wales.</li>
        <li>If these Terms and Conditions are not complied with, the use of this site must be terminated immediately.</li>
      </ul>
    </div>

    <!-- Privacy -->
    <div class="lp-block">
      <h3 class="lp-block-title">Privacy</h3>
      <ul class="lp-list">
        <li>We are committed to protecting your privacy. We will only use the information that we collect about you lawfully (in accordance with the Data Protection Act 1998).</li>
        <li>We will not email you in the future unless you have given us your consent.</li>
        <li>The information we collect will only be used by Teceze (UK) Ltd. Every time we email you we will give you the chance to refuse any such emails in the future.</li>
        <li>The type of information we will collect about you includes your name, email address and in small cookies on the site. We will never collect sensitive information about you without your explicit consent.</li>
        <li>We will endeavour to keep the information we hold about you up to date. If you check the information that we hold about you by emailing us at the email address provided below. If there is any inaccuracies please let us know and we will correct it promptly.</li>
        <li>The personal information which we hold will be held securely in accordance with our internal security policy and the law.</li>
        <li>If we intend to transfer your information outside the EEA (European Economic Area) we will always obtain your consent first.</li>
        <li>We may use technology such as a "cookie" to monitor users of this site such as which areas of the site you use most or least often and how often you use the website. A "cookie" is a piece of data stored on the user's hard drive containing information about the user. It is not default to any of your personal information on our site. It may be possible for you to modify your browser to prevent this happening and you may still be able to use our site.</li>
      </ul>
    </div>

    <!-- Footer note -->
    <div class="lp-footer-note">
      <p>If you have any questions or concerns about privacy, you should email us at <a href="mailto:info@teceze.com" class="lp-email-link">Teceze (UK) Ltd</a>.</p>
    </div>

  </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>