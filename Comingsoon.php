<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Coming Soon</title>
  <style>

    /* ===== RESET ===== */
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'gilroy', Arial, sans-serif;
      background: #071a3e;
      color: #ffffff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ================================================
       MAIN COMING SOON SECTION
    ================================================ */
    .cs-main {
      flex: 1;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      background: #071a3e;
      background-image: url('images/Comingsoon-bg.png'); /* ← ADD BG IMAGE HERE */
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      min-height: calc(100vh - 56px);
    }

    /* Dark overlay 
    .cs-overlay {
      position: absolute;
      inset: 0;
      background: rgba(4, 14, 40, 0.75);
      z-index: 0;
    }
*/
    /* ===== GLOWING CIRCLE
    .cs-circle {
      position: absolute;
      width: 520px;
      height: 520px;
      border-radius: 50%;
      background: radial-gradient(circle at center,
        rgba(19, 100, 180, 0.35) 0%,
        rgba(13, 60, 130, 0.25) 40%,
        rgba(5, 25, 70, 0.10) 70%,
        transparent 100%
      );
      border: 1px solid rgba(255, 255, 255, 0.08);
      z-index: 1;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -55%);
    }
 ===== */
    /* ===== CONTENT ===== */
    .cs-content {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 200px 24px 20px;
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }

    .cs-title {
      font-size: 52px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 14px;
      letter-spacing: -0.5px;
      line-height: 1.15;
    }

    .cs-subtitle {
      font-size: 15px;
      color: rgba(255, 255, 255, 0.75);
      margin-bottom: 30px;
      line-height: 1.6;
    }

    /* ===== RETURN BUTTON ===== */
    .cs-return-btn {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 10px 24px 10px 10px;
      border: 1.5px solid rgba(255, 255, 255, 0.5);
      border-radius: 50px;
      color: #ffffff;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      margin-bottom: 60px;
      transition: background 0.3s ease, border-color 0.3s ease;
    }

    .cs-return-btn:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: #ffffff;
    }

    .cs-return-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    /* ===== SOCIAL TEXT ===== */
    .cs-social-label {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.65);
      margin-bottom: 18px;
    }

    /* ===== SOCIAL ICONS ===== */
    .cs-socials {
      display: flex;
      gap: 12px;
      justify-content: center;
    }

    .cs-social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: background 0.3s ease, border-color 0.3s ease;
    }

    .cs-social-link:hover {
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      border-color: transparent;
    }

    .cs-social-link svg {
      width: 16px;
      height: 16px;
      fill: #ffffff;
    }

    /* ================================================
       BOTTOM BAR
    ================================================ */
    .cs-bottom-bar {
      background: rgba(4, 14, 40, 0.95);
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      padding: 16px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      width: 100%;
    }

    .cs-copyright {
      font-size: 11px;
      color: rgba(255, 255, 255, 0.4);
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .cs-bottom-links {
      display: flex;
      gap: 20px;
    }

    .cs-bottom-link {
      font-size: 11px;
      color: rgba(255, 255, 255, 0.4);
      text-decoration: none;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      transition: color 0.3s ease;
    }

    .cs-bottom-link:hover {
      color: #13C5B8;
    }

    /* ================================================
       TABLET (max-width: 1024px)
    ================================================ */
    @media (max-width: 1024px) {
      .cs-circle {
        width: 440px;
        height: 440px;
      }

      .cs-title {
        font-size: 44px;
      }

      .cs-bottom-bar {
        padding: 16px 40px;
      }
    }

    /* ================================================
       MOBILE (max-width: 768px)
    ================================================ */
    @media (max-width: 768px) {
      .cs-circle {
        width: 360px;
        height: 360px;
      }

      .cs-title {
        font-size: 36px;
      }

      .cs-subtitle {
        font-size: 14px;
      }

      .cs-content {
        padding: 30px 20px;
      }

      .cs-return-btn {
        font-size: 13px;
        margin-bottom: 48px;
      }

      .cs-bottom-bar {
        padding: 14px 24px;
        flex-direction: column;
        text-align: center;
        gap: 10px;
      }

      .cs-bottom-links {
        gap: 16px;
      }
    }

    /* ================================================
       SMALL MOBILE (max-width: 480px)
    ================================================ */
    @media (max-width: 480px) {
      .cs-circle {
        width: 280px;
        height: 280px;
      }

      .cs-title {
        font-size: 30px;
      }

      .cs-subtitle {
        font-size: 13px;
      }

      .cs-return-btn {
        font-size: 12px;
        padding: 9px 18px 9px 9px;
        margin-bottom: 36px;
      }

      .cs-return-icon {
        width: 28px;
        height: 28px;
      }

      .cs-social-label {
        font-size: 13px;
      }

      .cs-social-link {
        width: 36px;
        height: 36px;
      }

      .cs-social-link svg {
        width: 14px;
        height: 14px;
      }

      .cs-bottom-bar {
        padding: 12px 16px;
      }

      .cs-copyright {
        font-size: 10px;
      }

      .cs-bottom-link {
        font-size: 10px;
      }
    }

  </style>
</head>
<body>
    
    
  <?php include 'header.php'; ?>

<!-- ===== COMING SOON MAIN ===== -->
<section class="cs-main">

  <!-- Overlay -->
  <div class="cs-overlay"></div>

  <!-- Glowing Circle -->
  <div class="cs-circle"></div>

  <!-- Content -->
  <div class="cs-content">

    <h1 class="cs-title">Coming soon!</h1>
    <p class="cs-subtitle">This page is under construction.</p>

    <!-- Return Button -->
    <a href="index.html" class="cs-return-btn">
      <span class="cs-return-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"/>
          <polyline points="12 19 5 12 12 5"/>
        </svg>
      </span>
      Return to Homepage
    </a>

    <!-- Social Label -->
    <p class="cs-social-label">Stay in the loop – follow us on social media.</p>

    <!-- Social Icons -->
    <div class="cs-socials">

      <!-- Facebook -->
      <a href="#" class="cs-social-link" aria-label="Facebook">
        <svg viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
        </svg>
      </a>

      <!-- X / Twitter -->
      <a href="#" class="cs-social-link" aria-label="X">
        <svg viewBox="0 0 24 24">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
      </a>

      <!-- Instagram -->
      <a href="#" class="cs-social-link" aria-label="Instagram">
        <svg viewBox="0 0 24 24">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="#ffffff" stroke-width="2"/>
          <circle cx="12" cy="12" r="4" fill="none" stroke="#ffffff" stroke-width="2"/>
          <circle cx="17.5" cy="6.5" r="1.5"/>
        </svg>
      </a>

      <!-- LinkedIn -->
      <a href="#" class="cs-social-link" aria-label="LinkedIn">
        <svg viewBox="0 0 24 24">
          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
          <rect x="2" y="9" width="4" height="12"/>
          <circle cx="4" cy="4" r="2"/>
        </svg>
      </a>

    </div>
  </div>
</section>

<!-- ===== BOTTOM BAR ===== -->
<div class="cs-bottom-bar">
  <p class="cs-copyright">© 2026 Made With Teceze Limited. All Rights Reserved.</p>
  <div class="cs-bottom-links">
    <a href="#" class="cs-bottom-link">Accessibility</a>
    <a href="#" class="cs-bottom-link">Cookie</a>
    <a href="#" class="cs-bottom-link">Legal &amp; Privacy</a>
  </div>
</div>

  <?php include 'footer.php'; ?>
</body>
</html>