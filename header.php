<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Teceze Header</title>



  <style>
    @font-face {
  font-family: 'Gilroy';
  src: url('/font/Gilroy-Medium.woff2') format('woff2-variations'),
       url('/fonts/Gilroy-Medium.woff') format('woff');
  font-weight: 400 700;
  font-style: normal;
  font-display: swap;
}
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --nav-height: 72px;
      --white: #ffffff;
      --dark-blue: #0b1a3b;
      --accent: #0ecfcf;
      --accent2: #1a8ef0;
      --text-light: rgba(255,255,255,0.88);
      --transition: 0.30s cubic-bezier(0.4,0,0.2,1);
    }

    body {font-family: 'Gilroy', sans-serif; }

    /* ─── NAVBAR ─── */
    .navbar {
      position: fixed; top: 0; left: 0; right: 0;
      z-index: 1000; height: var(--nav-height);
      background: transparent;
      transition: background var(--transition), box-shadow var(--transition);
    }
    .navbar.scrolled {
      background: rgba(10,20,50,0.80);
      backdrop-filter: blur(18px) saturate(1.6);
      -webkit-backdrop-filter: blur(18px) saturate(1.6);
      box-shadow: 0 2px 32px rgba(0,0,0,0.25);
    }
    .navbar:hover, .navbar.menu-open {
      background: #ffffff;
      box-shadow: 0 4px 40px rgba(0,0,0,0.10);
      backdrop-filter: none; -webkit-backdrop-filter: none;
    }
    .navbar.scrolled:hover {
      background: #ffffff;
      backdrop-filter: none; -webkit-backdrop-filter: none;
    }

    .nav-inner {
      max-width: 1360px; margin: 0 auto; height: 100%;
      padding: 0 28px; display: flex; align-items: center;
    }

    /* ─── LOGO ─── */
    .logo {
      display: flex; align-items: center;
      text-decoration: none; flex-shrink: 0; margin-right: auto;
    }
    .logo-img-white { height: 40px; width: auto; display: block; }
    .logo-img-color { height: 40px; width: auto; display: none; }
    .navbar:hover .logo-img-white, .navbar.menu-open .logo-img-white { display: none; }
    .navbar:hover .logo-img-color, .navbar.menu-open .logo-img-color { display: block; }

    .navbar.menu-open .logo-fallback-name.dark { display: block; }

    /* ─── NAV LINKS ─── */
    .nav-links { display: flex; align-items: center; list-style: none; gap: 2px; height: 100%; }
    .nav-item  { position: static; height: 100%; display: flex; align-items: center; }

    .nav-link {
      display: flex; align-items: center; gap: 5px;
      padding: 0 16px; height: 100%;
      font-size: 0.9rem; font-weight: 500;
      color: var(--text-light); text-decoration: none; white-space: nowrap;
      transition: color var(--transition);
      cursor: pointer; border: none; background: none; font-family: inherit;
    }
    .navbar:hover .nav-link, .navbar.menu-open .nav-link { color: #1a2a4a; }
    .navbar:hover .nav-link:hover, .navbar.menu-open .nav-link:hover { color: var(--accent2); }
    .nav-link:hover { color: var(--white); }

    .nav-link .chevron {
      width: 14px; height: 14px;
      transition: transform var(--transition); opacity: 0.65;
    }
    /* ── chevron rotates via JS-driven class instead of CSS :hover ── */
    .nav-item.menu-active .chevron { transform: rotate(180deg); opacity: 1; }

    /* ─── MEGA MENU ─── */
    .mega-menu {
      position: fixed;
      top: var(--nav-height); left: 0; right: 0;
      background: #f5f7fa;
      box-shadow: 0 20px 60px rgba(0,0,0,0.12);
      border-top: 1px solid rgba(0,0,0,0.07);
      opacity: 0; pointer-events: none;
      transform: translateY(-6px);
      transition: opacity 0.22s ease, transform 0.22s ease;
      z-index: 999;
    }
    /* ── triggered by JS .active class instead of CSS :hover ── */
    .nav-item .mega-menu.active { opacity: 1; pointer-events: auto; transform: translateY(0); }

    .mega-inner {
      max-width: 1360px; margin: 0 auto;
      display: grid; grid-template-columns: 300px 1fr 320px;
      min-height: 360px;
    }

    /* Left panel */
    .mega-left {
      background: #eef1f6; padding: 44px 36px;
      border-right: 1px solid rgba(0,0,0,0.07);
      display: flex; flex-direction: column;
    }
    .mega-left-title {
      display: inline-flex; align-items: center; gap: 8px;
      font-size: 1.45rem; font-weight: 700; color: #0b1a3b;
      text-decoration: none; margin-bottom: 18px; transition: color 0.2s;
    }
    .mega-left-title:hover { color: var(--accent2); }
    .mega-left-title .arrow { transition: transform 0.2s; }
    .mega-left-title:hover .arrow { transform: translateX(4px); }
    .mega-left-desc { font-size: 0.875rem; line-height: 1.8; color: #6b7a96; font-weight: 400; }

    /* ─── MEGA LEFT BUTTON ─── */
    .mega-left-btn {
      display: inline-flex; align-items: center; gap: 8px;
      margin-top: 22px; padding: 10px 20px;
      border: 1.5px solid #c8d0e0; border-radius: 50px;
      font-family: inherit; font-size: 0.875rem; font-weight: 600;
      color: #1a2a4a; text-decoration: none; background: transparent;
      cursor: pointer; transition: border-color 0.2s, color 0.2s, background 0.2s, transform 0.18s;
      white-space: nowrap; width: fit-content;
    }
    .mega-left-btn:hover {
      border-color: var(--accent2); color: var(--accent2);
      background: rgba(26,142,240,0.06); transform: translateX(2px);
    }
    .mega-left-btn .btn-arrow {
      display: flex; align-items: center; justify-content: center;
      width: 22px; height: 22px; border-radius: 50%;
      background: linear-gradient(135deg, var(--accent2) 0%, var(--accent) 100%);
      flex-shrink: 0; transition: transform 0.18s;
    }
    .mega-left-btn:hover .btn-arrow { transform: translateX(3px); }

    /* Center links grid */
    .mega-center {
      padding: 44px 48px; background: #f5f7fa;
      display: grid; grid-template-columns: 1fr 1fr;
      align-content: start; gap: 2px;
    }
    .mega-link {
      display: block; padding: 12px 14px;
      font-size: 0.92rem; font-weight: 400; color: #5a6a8a;
      text-decoration: none; border-radius: 8px;
      transition: color 0.18s, background 0.18s, padding-left 0.18s;
    }
    .mega-link:hover { color: var(--accent2); background: rgba(26,142,240,0.07); padding-left: 20px; }

    /* Right panel */
    .mega-right {
      background: #ffffff; border-left: 1px solid rgba(0,0,0,0.07);
      padding: 36px 30px; display: flex; flex-direction: column; gap: 14px;
    }
    .mega-right-label {
      font-size: 0.7rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; color: #9aa4bc;
    }
    .mega-card { display: flex; flex-direction: column; gap: 10px; text-decoration: none; }
    .mega-card-thumb {
      width: 100%; height: 158px; border-radius: 10px; overflow: hidden;
      background: linear-gradient(135deg, #cce4f7 0%, #b8f0f0 100%);
      position: relative;
    }

    /* ─── PER-MENU THUMB IMAGES ─── */
    .mega-card-thumb::after {
      content: ''; position: absolute; inset: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .mega-card-thumb.thumb-who-we-are::after {
      background-image: url("images/menu-img-1.png");
    }
    .mega-card-thumb.thumb-what-we-do::after {
      background-image: url("images/menu-img-2.png");
    }
    .mega-card-thumb.thumb-who-we-serve::after {
      background-image: url("images/menu-img-3.png");
    }
    .mega-card-thumb.thumb-resources::after {
      background-image: url("images/menu-img-4.png");
    }

    .mega-card-thumb img { width: 100%; height: 100%; object-fit: cover; border-radius: 10px; display: block; }
    .mega-card-tag {
      font-size: 0.7rem; font-weight: 500; color: #9aa4bc;
      text-transform: uppercase; letter-spacing: 0.06em; margin-top: 2px;
    }
    .mega-card-title {
      font-size: 0.94rem; font-weight: 700; color: #0b1a3b; line-height: 1.45;
      transition: color 0.18s;
    }
    .mega-card:hover .mega-card-title { color: var(--accent2); }
    .mega-card-cta {
      font-size: 0.82rem; font-weight: 600; color: var(--accent2);
      display: flex; align-items: center; gap: 5px; transition: gap 0.18s;
    }
    .mega-card:hover .mega-card-cta { gap: 9px; }

    /* ─── RIGHT CONTROLS ─── */
    .nav-controls { display: flex; align-items: center; gap: 6px; margin-left: 20px; flex-shrink: 0; }

    .icon-btn {
      width: 38px; height: 38px; border-radius: 50%; border: none;
      background: rgba(255,255,255,0.1); color: var(--text-light);
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; transition: background var(--transition), color var(--transition);
    }
    .navbar:hover .icon-btn, .navbar.menu-open .icon-btn { background: rgba(26,42,74,0.08); color: #1a2a4a; }
    .icon-btn:hover { background: rgba(14,207,207,0.15) !important; color: var(--accent2) !important; }

    .lang-btn {
      display: flex; align-items: center; gap: 5px;
      padding: 0 12px; height: 38px; border-radius: 20px; border: none;
      background: rgba(255,255,255,0.1); color: var(--text-light);
      font-family: inherit; font-size: 0.875rem; font-weight: 500;
      cursor: pointer; transition: background var(--transition), color var(--transition);
    }
    .navbar:hover .lang-btn, .navbar.menu-open .lang-btn { background: rgba(26,42,74,0.08); color: #1a2a4a; }
    .lang-btn:hover { background: rgba(14,207,207,0.15) !important; color: var(--accent2) !important; }

    .cta-btn {
      display: flex; align-items: center; gap: 8px;
      padding: 0 22px; height: 42px; border-radius: 24px; border: none;
      background: linear-gradient(135deg, var(--accent2) 0%, var(--accent) 100%);
      color: #fff; font-family: inherit; font-size: 0.9rem; font-weight: 600;
      cursor: pointer; text-decoration: none;
      transition: transform 0.18s, box-shadow 0.18s, opacity 0.18s;
      box-shadow: 0 4px 20px rgba(14,207,207,0.25);
      white-space: nowrap; margin-left: 4px;
    }
    .cta-btn:hover { transform: translateY(-1px); box-shadow: 0 8px 28px rgba(14,207,207,0.4); opacity: 0.93; }

    /* ─── HAMBURGER ─── */
    .hamburger {
      display: none; width: 40px; height: 40px;
      flex-direction: column; align-items: center; justify-content: center;
      gap: 5px; background: none; border: none; cursor: pointer;
      padding: 4px; border-radius: 8px; margin-left: 8px;
    }
    .hamburger span {
      display: block; width: 24px; height: 2px; border-radius: 2px;
      background: var(--white); transition: transform 0.3s, opacity 0.3s, background var(--transition);
    }
    .navbar:hover .hamburger span, .navbar.menu-open .hamburger span { background: var(--dark-blue); }
    .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* ─── MOBILE MENU ─── */
    .mobile-menu {
      display: none; position: fixed;
      top: var(--nav-height); left: 0; right: 0;
      background: #ffffff; box-shadow: 0 20px 60px rgba(0,0,0,0.15);
      max-height: calc(100vh - var(--nav-height)); overflow-y: auto;
      z-index: 998; padding-bottom: 24px;
      transform: translateY(-10px); opacity: 0; pointer-events: none;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }
    .mobile-menu.open { display: block; transform: translateY(0); opacity: 1; pointer-events: auto; }
    .mobile-menu-inner { padding: 12px 0; }
    .mobile-group { border-bottom: 1px solid rgba(0,0,0,0.06); }
    .mobile-group:last-child { border-bottom: none; }
    .mobile-top-link {
      display: flex; align-items: center; justify-content: space-between;
      padding: 14px 24px; font-size: 1rem; font-weight: 600; color: #1a2a4a;
      cursor: pointer; transition: background 0.15s;
    }
    .mobile-top-link:hover { background: rgba(14,207,207,0.06); color: var(--accent2); }
    .mobile-sub { display: none; background: rgba(26,42,74,0.03); padding: 4px 0 10px; }
    .mobile-sub.open { display: block; }
    .mobile-sub a {
      display: block; padding: 9px 36px; font-size: 0.9rem; color: #3a4a6a;
      text-decoration: none; transition: color 0.15s, padding-left 0.15s;
    }
    .mobile-sub a:hover { color: var(--accent2); padding-left: 42px; }
    .mobile-cta-wrap { padding: 16px 24px 0; }
    .mobile-cta-wrap .cta-btn { width: 100%; justify-content: center; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1100px) { .nav-link { padding: 0 12px; font-size: 0.85rem; } }
    @media (max-width: 900px) {
      .nav-links, .nav-controls .icon-btn, .nav-controls .lang-btn { display: none; }
      .hamburger { display: flex; }
      .nav-controls { margin-left: 8px; }
      .nav-controls .cta-btn { display: none; }
    }
    @media (max-width: 480px) { .nav-inner { padding: 0 16px; } }
  </style>
</head>
<body>

<nav class="navbar" id="navbar">
  <div class="nav-inner">

    <a href="https://teal-mule-553916.hostingersite.com" class="logo" id="logoLink">
      <img class="logo-img-white" id="logoWhite" src="images/teceze-logo.svg" alt="Teceze" />
      <img class="logo-img-color" id="logoColor" src="images/logo.png" alt="Teceze" />
      <span class="logo-fallback" id="logoFallback"></span>
    </a>

    <!-- DESKTOP NAV LINKS -->
    <ul class="nav-links">

      <!-- WHO WE ARE -->
      <li class="nav-item">
        <button class="nav-link">Who We Are
          <svg class="chevron" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="mega-menu">
          <div class="mega-inner">
            <div class="mega-left">
              <a href="#" class="mega-left-title">Who We Are <span class="arrow">→</span></a>
              <p class="mega-left-desc">A technology-driven company committed to digital innovation and excellence, helping businesses transform through cutting-edge IT solutions.</p>
              <a href="https://teal-mule-553916.hostingersite.com/about.php" class="mega-left-btn">
                <span class="btn-arrow">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2.5 6h7M6.5 3l3 3-3 3" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                About Us
              </a>
            </div>
            <div class="mega-center">
              <a href="https://teal-mule-553916.hostingersite.com/about.php" class="mega-link">About Us</a>
              
              <a href="https://teal-mule-553916.hostingersite.com/Leadership.php" class="mega-link">Leadership Team</a>
             
           
              <a href="https://teal-mule-553916.hostingersite.com/alliances.php" class="mega-link">Partners &amp; Alliances</a>
            </div>
            <div class="mega-right">
              <span class="mega-right-label">Recent Updates</span>
              <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="mega-card">
                <div class="mega-card-thumb thumb-who-we-are"></div>
                <span class="mega-card-tag">Company News</span>
                <span class="mega-card-title">Teceze Recognized Among Top IT Innovators of 2024</span>
                <span class="mega-card-cta">Know More →</span>
              </a>
            </div>
          </div>
        </div>
      </li>

      <!-- WHAT WE DO -->
      <li class="nav-item">
        <button class="nav-link">What We Do
          <svg class="chevron" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="mega-menu">
          <div class="mega-inner">
            <div class="mega-left">
              <a href="#" class="mega-left-title">What We Do <span class="arrow">→</span></a>
              <p class="mega-left-desc">End-to-end digital transformation services — from cloud and cybersecurity to AI-powered automation and managed IT support.</p>
              <a href="https://teal-mule-553916.hostingersite.com/service_list.php" class="mega-left-btn">
                <span class="btn-arrow">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2.5 6h7M6.5 3l3 3-3 3" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                View All Services
              </a>
            </div>
            <div class="mega-center">
              <a href="https://teal-mule-553916.hostingersite.com/digital_workspace.php" class="mega-link">Digital IT Workspace</a>
              <a href="https://teal-mule-553916.hostingersite.com/CloudInfratructure.php" class="mega-link">Cloud Solutions</a>
              <a href="https://teal-mule-553916.hostingersite.com/Cybersecurity.php" class="mega-link">Cybersecurity</a>
              
              
              <a href="https://teal-mule-553916.hostingersite.com/application.php" class="mega-link">Application Developement</a>
              <a href="https://teal-mule-553916.hostingersite.com/global_procurement.php" class="mega-link">Global &amp; Procument</a>
              <a href="https://teal-mule-553916.hostingersite.com/Managed_it.php" class="mega-link">Managed IT Services</a>
            </div>
            <div class="mega-right">
              <span class="mega-right-label">Recent Updates</span>
              <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="mega-card">
                <div class="mega-card-thumb thumb-what-we-do"></div>
                <span class="mega-card-tag">Service Spotlight</span>
                <span class="mega-card-title">How AI Automation Is Reshaping Enterprise Operations</span>
                <span class="mega-card-cta">Know More →</span>
              </a>
            </div>
          </div>
        </div>
      </li>

      <!-- WHO WE SERVE -->
      <li class="nav-item">
        <button class="nav-link">Who We Serve
          <svg class="chevron" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="mega-menu">
          <div class="mega-inner">
            <div class="mega-left">
              <a href="#" class="mega-left-title">Who We Serve <span class="arrow">→</span></a>
              <p class="mega-left-desc">We support businesses across industries with tailored IT services that address their operational needs and technology challenges.</p>
            </div>
            <div class="mega-center">
              <a href="https://teal-mule-553916.hostingersite.com/It-technology.php" class="mega-link">IT Technology</a>
              <a href="https://teal-mule-553916.hostingersite.com/legal_sector_page.php" class="mega-link">Legal</a>
              <a href="https://teal-mule-553916.hostingersite.com/government_Page.php" class="mega-link"> Government</a>
              <a href="https://teal-mule-553916.hostingersite.com/health_carepage.php" class="mega-link">Healthcare</a>
              <a href="https://teal-mule-553916.hostingersite.com/financial_service.php" class="mega-link">Financial Services</a>
              <a href="https://teal-mule-553916.hostingersite.com/retail.php" class="mega-link">Retail </a>
              <a href="https://teal-mule-553916.hostingersite.com/education.php" class="mega-link">Education</a>
              <a href="https://teal-mule-553916.hostingersite.com/manufacturing.php" class="mega-link">Manufacturing</a>
            </div>
            <div class="mega-right">
              <span class="mega-right-label">Recent Updates</span>
              <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="mega-card">
                <div class="mega-card-thumb thumb-who-we-serve"></div>
                <span class="mega-card-tag">Industry Insights</span>
                <span class="mega-card-title">Helping Organizations Across Industries Navigate Technology Transformation</span>
                <span class="mega-card-cta">Know More →</span>
              </a>
            </div>
          </div>
        </div>
      </li>

      <!-- RESOURCES -->
      <li class="nav-item">
        <button class="nav-link">Resources
          <svg class="chevron" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="mega-menu">
          <div class="mega-inner">
            <div class="mega-left">
              <a href="#" class="mega-left-title">Resources <span class="arrow">→</span></a>
              <p class="mega-left-desc">We support businesses across industries with tailored IT services that address their operational needs and technology challenges.</p>
            </div>
            <div class="mega-center">
              <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="mega-link">Blogs</a>
              
              <a href="https://teal-mule-553916.hostingersite.com/casestudy.php" class="mega-link">Case Studies</a>
              
              <a href="https://teal-mule-553916.hostingersite.com/testimonial-list-page.php" class="mega-link">Testimonials</a>
          
             
              <a href="https://teal-mule-553916.hostingersite.com/EventList.php" class="mega-link">Events</a>
            </div>
            <div class="mega-right">
              <span class="mega-right-label">Recent Updates</span>
              <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="mega-card">
                <div class="mega-card-thumb thumb-resources"></div>
                <span class="mega-card-tag">Industry Insights</span>
                <span class="mega-card-title">Helping Organizations Across Industries Navigate Technology Transformation</span>
                <span class="mega-card-cta">Know More →</span>
              </a>
            </div>
          </div>
        </div>
      </li>

      <!-- CAREERS -->
      <li class="nav-item">
        <a href="https://teal-mule-553916.hostingersite.com/career.php" class="nav-link">Careers</a>
      </li>

    </ul>

    <!-- RIGHT CONTROLS -->
    <div class="nav-controls">
    <a href="https://teal-mule-553916.hostingersite.com/search.php" class="icon-btn" aria-label="Search">
  <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
    <circle cx="7.5" cy="7.5" r="5.5" stroke="currentColor" stroke-width="1.7"/>
    <path d="M12 12l3.5 3.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
  </svg>
</a>
      <button class="lang-btn" aria-label="Language">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><path d="M8 1.5C8 1.5 5.5 4 5.5 8s2.5 6.5 2.5 6.5M8 1.5C8 1.5 10.5 4 10.5 8S8 14.5 8 14.5M1.5 8h13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        En
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M3 5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="cta-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 3h3l1.5 3.5-1.5 1a7 7 0 003.5 3.5l1-1.5L14 11v3a1 1 0 01-1 1A11 11 0 012 4a1 1 0 011-1z" fill="white"/></svg>
        Let's Talk
      </a>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <div class="mobile-menu-inner">
    <div class="mobile-group">
      <div class="mobile-top-link" onclick="toggleMobileSub(this)">Who We Are
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="mobile-sub">
        <a href="https://teal-mule-553916.hostingersite.com/about.php">About Us</a><a href="#">Mission &amp; Vision</a>
        <a href="https://teal-mule-553916.hostingersite.com/Leadership.php">Leadership Team</a><a href="#">Awards &amp; Recognition</a>
        <a href="#">Corporate Responsibility</a>
      </div>
    </div>
    <div class="mobile-group">
      <div class="mobile-top-link" onclick="toggleMobileSub(this)">What We Do
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="mobile-sub">
        <a href="#">Digital Transformation</a><a href="#">Cloud Solutions</a>
        <a href="#">Cybersecurity</a><a href="#">AI &amp; Automation</a>
        <a href="#">Managed IT Services</a>
      </div>
    </div>
    <div class="mobile-group">
      <div class="mobile-top-link" onclick="toggleMobileSub(this)">Who We Serve
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="mobile-sub">
        <a href="#">Enterprise</a><a href="#">Mid-Market</a>
        <a href="#">Government</a><a href="#">Healthcare</a>
        <a href="#">Financial Services</a>
      </div>
    </div>
    <div class="mobile-group">
      <div class="mobile-top-link" onclick="toggleMobileSub(this)">Resources
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="mobile-sub">
        <a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">Blogs</a><a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">Articles</a>
        <a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">Case Studies</a><a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">White Papers</a>
        <a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">Testimonials</a><a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php">Events</a>
      </div>
    </div>
    <div class="mobile-group">
      <a href="https://teal-mule-553916.hostingersite.com/Comingsoon.php" class="mobile-top-link" style="text-decoration:none;">Careers</a>
    </div>
    <div class="mobile-cta-wrap">
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="cta-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 3h3l1.5 3.5-1.5 1a7 7 0 003.5 3.5l1-1.5L14 11v3a1 1 0 01-1 1A11 11 0 012 4a1 1 0 011-1z" fill="white"/></svg>
        Let's Talk
      </a>
    </div>
  </div>
</div>

<script>
  const navbar     = document.getElementById('navbar');
  const hamburger  = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  const logoWhite  = document.getElementById('logoWhite');
  const logoColor  = document.getElementById('logoColor');
  const logoFallback = document.getElementById('logoFallback');

  [logoWhite, logoColor].forEach(img => {
    img.addEventListener('error', () => { img.style.display = 'none'; });
    img.addEventListener('load',  () => { if (logoFallback) logoFallback.style.display = 'none'; });
  });

  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 10);
  }, { passive: true });

  hamburger.addEventListener('click', () => {
    const open = hamburger.classList.toggle('open');
    navbar.classList.toggle('menu-open', open);
    mobileMenu.classList.toggle('open', open);
  });

  function toggleMobileSub(el) {
    const sub = el.nextElementSibling;
    if (!sub) return;
    const isOpen = sub.classList.toggle('open');
    const chevron = el.querySelector('svg');
    if (chevron) chevron.style.transform = isOpen ? 'rotate(180deg)' : '';
  }

  // ─── MEGA MENU: JS-driven hover with leave-delay ───
  // Fixes the "gap problem" where moving the cursor from the nav button
  // down to the mega-menu (position:fixed) briefly leaves .nav-item,
  // killing the CSS :hover chain and closing the menu prematurely.
  let closeTimer = null;

  document.querySelectorAll('.nav-item').forEach(item => {
    const menu = item.querySelector('.mega-menu');
    if (!menu) return; // skip Careers (no mega menu)

    function openMenu() {
      clearTimeout(closeTimer);
      // Close every other open menu first
      document.querySelectorAll('.nav-item').forEach(other => {
        if (other !== item) {
          other.classList.remove('menu-active');
          const m = other.querySelector('.mega-menu');
          if (m) m.classList.remove('active');
        }
      });
      item.classList.add('menu-active');
      menu.classList.add('active');
    }

    function scheduleClose() {
      clearTimeout(closeTimer);
      closeTimer = setTimeout(() => {
        item.classList.remove('menu-active');
        menu.classList.remove('active');
      }, 120); // 120ms grace — enough travel time from button → menu
    }

    // Nav item (contains the button)
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', scheduleClose);

    // Mega menu itself — cancel close when cursor arrives here
    menu.addEventListener('mouseenter', () => clearTimeout(closeTimer));
    menu.addEventListener('mouseleave', scheduleClose);
  });

  // Close all menus when clicking outside the navbar
  document.addEventListener('click', (e) => {
    if (!navbar.contains(e.target)) {
      document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('menu-active');
        const m = item.querySelector('.mega-menu');
        if (m) m.classList.remove('active');
      });
    }
  });
</script>

</body>
</html>
