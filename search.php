<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Search Results</title>
  <?php include 'header.php'; ?>
  <style>
 
    /* ===== RESET ===== */
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
 
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f5f6fa;
      color: #0f1f3d;
    }
 
    /* ================================================
       SEARCH BAR SECTION
    ================================================ */
    .sr-search-section {
      background: #ffffff;
      padding: 24px 40px;
      border-bottom: 1px solid #edf0f5;
    }
 
    .sr-search-bar {
      display: flex;
      align-items: center;
      max-width: 860px;
      margin: 0 auto;
      background: #ffffff;
      border: 1.5px solid #dde1ea;
      border-radius: 50px;
      padding: 10px 16px;
      gap: 10px;
    }
 
    .sr-search-icon {
      color: #8a94a6;
      flex-shrink: 0;
      display: flex;
      align-items: center;
    }
 
    .sr-search-input {
      flex: 1;
      border: none;
      outline: none;
      font-size: 15px;
      color: #0f1f3d;
      background: transparent;
      font-family: 'Segoe UI', Arial, sans-serif;
    }
 
    .sr-search-input::placeholder {
      color: #b0b7c3;
    }
 
    .sr-search-right {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }
 
    .sr-mic-btn {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: opacity 0.3s ease;
    }
 
    .sr-mic-btn:hover {
      opacity: 0.85;
    }
 
    .sr-ai-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 18px;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      border: none;
      border-radius: 50px;
      color: #ffffff;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: opacity 0.3s ease;
      white-space: nowrap;
    }
 
    .sr-ai-btn:hover {
      opacity: 0.88;
    }
 
    /* ================================================
       MAIN LAYOUT
    ================================================ */
    .sr-main {
      max-width: 1100px;
      margin: 0 auto;
      padding: 36px 40px 60px;
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 50px;
      align-items: start;
    }
 
    /* ================================================
       LEFT: SEARCH RESULTS
    ================================================ */
    .sr-results-col {
      min-width: 0;
    }
 
    /* Header Row */
    .sr-results-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      gap: 16px;
      flex-wrap: wrap;
    }
 
    .sr-results-title {
      font-size: 20px;
      font-weight: 700;
      color: #0f1f3d;
    }
 
    .sr-results-count {
      font-size: 13px;
      color: #8a94a6;
      margin-top: 2px;
    }
 
    .sr-sort-wrap {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }
 
    .sr-sort-label {
      font-size: 13px;
      color: #8a94a6;
      white-space: nowrap;
    }
 
    .sr-sort-select {
      padding: 7px 32px 7px 12px;
      border: 1px solid #dde1ea;
      border-radius: 6px;
      font-size: 13px;
      color: #0f1f3d;
      background: #ffffff;
      outline: none;
      appearance: none;
      cursor: pointer;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%238a94a6' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
    }
 
    /* Teceze Logo Badge */
    .sr-logo-badge {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background: linear-gradient(135deg, #13C5B8, #2A44B0);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
      flex-shrink: 0;
    }
 
    .sr-logo-badge svg {
      width: 22px;
      height: 22px;
      fill: #ffffff;
    }
 
    /* Result Items */
    .sr-result-item {
      background: #ffffff;
      border: 1px solid #edf0f5;
      border-radius: 10px;
      padding: 18px 20px;
      margin-bottom: 12px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
 
    .sr-result-item:hover {
      border-color: #2A44B0;
      box-shadow: 0 2px 12px rgba(42, 68, 176, 0.08);
    }
 
    .sr-result-item.sr-active {
      border: 2px solid #2A44B0;
    }
 
    .sr-result-title {
      font-size: 17px;
      font-weight: 700;
      color: #0f1f3d;
      margin-bottom: 5px;
      line-height: 1.35;
    }
 
    .sr-result-url {
      font-size: 12px;
      color: #2A44B0;
      margin-bottom: 8px;
      text-decoration: none;
      display: block;
      transition: opacity 0.3s ease;
    }
 
    .sr-result-url:hover {
      opacity: 0.75;
    }
 
    .sr-result-desc {
      font-size: 13px;
      color: #8a94a6;
      line-height: 1.65;
    }
 
    /* ===== PAGINATION ===== */
    .sr-pagination {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 28px;
      flex-wrap: wrap;
      gap: 12px;
    }
 
    .sr-pagination-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }
 
    .sr-per-page-label {
      font-size: 13px;
      color: #8a94a6;
    }
 
    .sr-per-page-select {
      padding: 5px 28px 5px 10px;
      border: 1px solid #dde1ea;
      border-radius: 6px;
      font-size: 13px;
      color: #0f1f3d;
      background: #ffffff;
      outline: none;
      appearance: none;
      cursor: pointer;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%238a94a6' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 8px center;
    }
 
    .sr-of-label {
      font-size: 13px;
      color: #8a94a6;
    }
 
    .sr-pagination-right {
      display: flex;
      align-items: center;
      gap: 5px;
    }
 
    .sr-page-btn {
      min-width: 32px;
      height: 32px;
      padding: 0 8px;
      border: 1px solid #dde1ea;
      border-radius: 6px;
      background: #ffffff;
      font-size: 13px;
      color: #0f1f3d;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
    }
 
    .sr-page-btn:hover {
      background: #f0f3ff;
      border-color: #2A44B0;
      color: #2A44B0;
    }
 
    .sr-page-btn.sr-page-active {
      background: #2A44B0;
      border-color: #2A44B0;
      color: #ffffff;
      font-weight: 700;
    }
 
    .sr-page-btn.sr-page-text {
      border: none;
      background: transparent;
      color: #8a94a6;
      font-size: 13px;
    }
 
    .sr-page-btn.sr-page-text:hover {
      background: transparent;
      color: #2A44B0;
      border: none;
    }
 
    /* ================================================
       RIGHT: RELATED TOPICS
    ================================================ */
    .sr-related-col {
      min-width: 0;
    }
 
    .sr-related-title {
      font-size: 17px;
      font-weight: 700;
      color: #0f1f3d;
      margin-bottom: 18px;
    }
 
    .sr-related-card {
      background: #ffffff;
      border: 1px solid #edf0f5;
      border-radius: 10px;
      padding: 16px;
      margin-bottom: 12px;
      transition: border-color 0.3s ease;
      cursor: pointer;
    }
 
    .sr-related-card:hover {
      border-color: #2A44B0;
    }
 
    .sr-related-tag {
      display: inline-block;
      padding: 3px 12px;
      border-radius: 50px;
      font-size: 11px;
      font-weight: 600;
      margin-bottom: 8px;
    }
 
    .sr-tag-casestudy {
      background: #e8f4ff;
      color: #1a6bb5;
    }
 
    .sr-tag-blogs {
      background: #e8fff8;
      color: #0f8a6a;
    }
 
    .sr-tag-careers {
      background: #fff3e8;
      color: #b56a1a;
    }
 
    .sr-tag-newsletter {
      background: #f0ebff;
      color: #6a3db5;
    }
 
    .sr-related-card-title {
      font-size: 14px;
      font-weight: 700;
      color: #2A44B0;
      margin-bottom: 8px;
      line-height: 1.4;
    }
 
    .sr-related-card-desc {
      font-size: 12px;
      color: #8a94a6;
      line-height: 1.65;
    }
 
    /* ================================================
       TABLET (max-width: 1024px)
    ================================================ */
    @media (max-width: 1024px) {
      .sr-main {
        grid-template-columns: 1fr 260px;
        gap: 30px;
        padding: 30px 30px 50px;
      }
 
      .sr-search-section {
        padding: 20px 30px;
      }
    }
 
    /* ================================================
       MOBILE (max-width: 768px)
    ================================================ */
    @media (max-width: 768px) {
      .sr-search-section {
        padding: 16px 20px;
      }
 
      .sr-ai-btn span {
        display: none;
      }
 
      .sr-main {
        grid-template-columns: 1fr;
        gap: 36px;
        padding: 24px 20px 50px;
      }
 
      .sr-related-col {
        order: -1;
      }
 
      .sr-results-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }
 
      .sr-pagination {
        flex-direction: column;
        align-items: flex-start;
      }
 
      .sr-pagination-right {
        flex-wrap: wrap;
      }
    }
 
    /* ================================================
       SMALL MOBILE (max-width: 480px)
    ================================================ */
    @media (max-width: 480px) {
      .sr-search-section {
        padding: 14px 16px;
      }
 
      .sr-search-bar {
        padding: 8px 12px;
      }
 
      .sr-search-input {
        font-size: 14px;
      }
 
      .sr-main {
        padding: 20px 16px 40px;
      }
 
      .sr-result-title {
        font-size: 15px;
      }
 
      .sr-result-desc {
        font-size: 12px;
      }
 
      .sr-results-title {
        font-size: 18px;
      }
 
      .sr-page-btn {
        min-width: 28px;
        height: 28px;
        font-size: 12px;
      }
    }
 
  </style>
</head>
<body>
 
<!-- ===== SEARCH BAR ===== -->
<div class="sr-search-section">
  <div class="sr-search-bar">
    <span class="sr-search-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8a94a6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/>
        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
    </span>
    <input type="text" class="sr-search-input" value="Digital Workplace" placeholder="Search..."/>
    <div class="sr-search-right">
      <button class="sr-mic-btn" aria-label="Voice Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/>
          <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
          <line x1="12" y1="19" x2="12" y2="23"/>
          <line x1="8" y1="23" x2="16" y2="23"/>
        </svg>
      </button>
      <a href="#" class="sr-ai-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
        </svg>
        Start With AI
      </a>
    </div>
  </div>
</div>
 
<!-- ===== MAIN LAYOUT ===== -->
<div class="sr-main">
 
  <!-- ===== LEFT: RESULTS ===== -->
  <div class="sr-results-col">
 
    <!-- Header -->
    <div class="sr-results-header">
      <div>
        <h2 class="sr-results-title">Search Results</h2>
        <p class="sr-results-count">250 results</p>
      </div>
      <div class="sr-sort-wrap">
        <span class="sr-sort-label">Sort By :</span>
        <select class="sr-sort-select">
          <option>Relevance</option>
          <option>Date</option>
          <option>Popularity</option>
        </select>
      </div>
    </div>
 
    <!-- Logo Badge -->
    <div class="sr-logo-badge">
      <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
    </div>
 
    <!-- Result 1 — Active -->
    <div class="sr-result-item sr-active">
      <h3 class="sr-result-title">What is a Digital Workplace? | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Result 2 -->
    <div class="sr-result-item">
      <h3 class="sr-result-title">Digital Workplace Overview | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Result 3 -->
    <div class="sr-result-item">
      <h3 class="sr-result-title">What is a Digital Workplace Strategy? | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace strategy aligns technology, processes, and people to create a seamless, productive, and collaborative work environment.</p>
    </div>
 
    <!-- Result 4 -->
    <div class="sr-result-item">
      <h3 class="sr-result-title">What is a Digital Workplace? | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Result 5 -->
    <div class="sr-result-item">
      <h3 class="sr-result-title">What is a Digital Workplace Strategy? | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace strategy aligns technology, processes, and people to create a seamless, productive, and collaborative work environment.</p>
    </div>
 
    <!-- Result 6 -->
    <div class="sr-result-item">
      <h3 class="sr-result-title">Digital Workplace Overview | Teceze</h3>
      <a href="https://teceze.com/what-we-do/digital-workplace" class="sr-result-url">https://teceze.com/what-we-do/digital-workplace</a>
      <p class="sr-result-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Pagination -->
    <div class="sr-pagination">
      <div class="sr-pagination-left">
        <span class="sr-per-page-label">Showing</span>
        <select class="sr-per-page-select">
          <option>10</option>
          <option>20</option>
          <option>50</option>
        </select>
        <span class="sr-of-label">of 250 results</span>
      </div>
      <div class="sr-pagination-right">
        <a href="#" class="sr-page-btn sr-page-text">« First</a>
        <a href="#" class="sr-page-btn">‹</a>
        <a href="#" class="sr-page-btn">1</a>
        <a href="#" class="sr-page-btn sr-page-active">2</a>
        <a href="#" class="sr-page-btn">3</a>
        <a href="#" class="sr-page-btn">4</a>
        <a href="#" class="sr-page-btn sr-page-text">...</a>
        <a href="#" class="sr-page-btn">25</a>
        <a href="#" class="sr-page-btn">›</a>
        <a href="#" class="sr-page-btn sr-page-text">Last »</a>
      </div>
    </div>
 
  </div>
 
  <!-- ===== RIGHT: RELATED TOPICS ===== -->
  <div class="sr-related-col">
    <h3 class="sr-related-title">Related Topics</h3>
 
    <!-- Card 1 -->
    <div class="sr-related-card">
      <span class="sr-related-tag sr-tag-casestudy">Case Study</span>
      <h4 class="sr-related-card-title">A digital workplace uses technology to streamline</h4>
      <p class="sr-related-card-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Card 2 -->
    <div class="sr-related-card">
      <span class="sr-related-tag sr-tag-blogs">Blogs</span>
      <h4 class="sr-related-card-title">A digital workplace uses technology to streamline</h4>
      <p class="sr-related-card-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Card 3 -->
    <div class="sr-related-card">
      <span class="sr-related-tag sr-tag-careers">Careers</span>
      <h4 class="sr-related-card-title">A digital workplace uses technology to streamline</h4>
      <p class="sr-related-card-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Card 4 -->
    <div class="sr-related-card">
      <span class="sr-related-tag sr-tag-newsletter">News Letter</span>
      <h4 class="sr-related-card-title">A digital workplace uses technology to streamline</h4>
      <p class="sr-related-card-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
    <!-- Card 5 -->
    <div class="sr-related-card">
      <span class="sr-related-tag sr-tag-newsletter">News Letter</span>
      <h4 class="sr-related-card-title">A digital workplace uses technology to streamline</h4>
      <p class="sr-related-card-desc">A digital workplace uses technology to streamline processes, improve collaboration, and enable employees to work efficiently from anywhere.</p>
    </div>
 
  </div>
 
</div>
 
</body>
<?php include 'footer.php'; ?>
</html>    