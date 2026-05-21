<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Leadership Team</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
 <?php include 'header.php'; ?>
  <!-- ===== HERO SECTION ===== -->
  <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">

      <!-- Breadcrumb -->
      <div class="hero-breadcrumb">
        <span class="breadcrumb-who">WHO WE ARE</span>
        <span class="breadcrumb-separator"> / </span>
        <span class="breadcrumb-text">LEADERSHIP TEAM</span>
      </div>

      <!-- Divider -->
      <div class="hero-divider"></div>

      <!-- Title -->
      <h1 class="hero-title">Leadership Team Driving<br>Vision &amp; Innovation</h1>

      <!-- Subtitle -->
      <p class="hero-subtitle">A team of experienced leaders guiding strategy,<br>innovation, and global growth with deep industry expertise.</p>

      <!-- Button -->
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="hero-btn">
        <span class="hero-btn-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </span>
        Connect With Us
      </a>

    </div>
  </section>
<!-- ===== INTRO TEXT SECTION ===== -->
  <section class="intro-section">
    <div class="intro-content">
      <p class="intro-para">
        <span class="intro-dark">Our leadership team combines extensive experience across technology, enterprise services, and global business ecosystems. With a clear vision for innovation, customer-centric growth, and operational excellence </span>
        <span class="intro-grey">, they steerTeceze toward delivering scalable and future-ready digital solutions across industries.</span>
      </p>
    </div>
  </section>
 <!-- ===== MEET OUR TEAM SECTION ===== -->
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Meet Our Team</title>
<style>

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', sans-serif; background: #fff; }

/* ============================================================
   SECTION
   ============================================================ */
.mot-section {
  position: relative;
  background: #ffffff;
  overflow: hidden;
  width: 100%;
  padding: 0 0 60px;
}

/* ============================================================
   WATERMARK — full bleed, very large, two lines
   ============================================================ */
.mot-watermark {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  pointer-events: none;
  z-index: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  line-height: 0.92;
  user-select: none;
  overflow: hidden;
}

.mot-wm-line1,
.mot-wm-line2 {
  display: block;
  font-size: clamp(72px, 13vw, 160px);
  font-weight: 900;
  letter-spacing: -0.01em;
  text-transform: lowercase;
  white-space: nowrap;
  color: #c5cad8;
  font-family: 'Segoe UI', Arial, sans-serif;
}

.mot-wm-line1 { opacity: 0.6; }
.mot-wm-line2 { opacity: 0.25; }

/* ============================================================
   CONTENT — sits on top of watermark
   ============================================================ */
.mot-rows {
  position: relative;
  z-index: 1;
  padding-top: clamp(120px, 18vw, 240px);
}

/* Each row of cards */
.mot-grid {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: clamp(20px, 3vw, 48px);
  padding: 0 clamp(40px, 6vw, 100px);
  margin-bottom: clamp(24px, 3vw, 40px);
  flex-wrap: wrap;
}

/* ============================================================
   CARD
   ============================================================ */
.mot-card {
  flex: 1 1 0;
  max-width: 280px;
  min-width: 160px;
  text-align: center;
}

.mot-img-wrap {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  width: 100%;
  aspect-ratio: 3 / 4;
  background: #e8eaf0;
}

.mot-img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  border-radius: 8px;
  transition: transform 0.4s ease;
}

.mot-card:hover .mot-img {
  transform: scale(1.04);
}

/* Featured card — blue border */
.mot-card--featured .mot-img-wrap {
  border: 3px solid #2A44B0;
}

/* ============================================================
   HOVER OVERLAY
   ============================================================ */
.mot-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(13, 186, 173, 0.88) 0%,
    rgba(58, 52, 166, 0.95) 100%
  );
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 20px 16px 16px;
  opacity: 0;
  transition: opacity 0.38s ease;
  border-radius: 6px;
}

/* Show overlay by default on featured card — matches reference */
.mot-card--featured .mot-overlay {
  opacity: 1;
}

.mot-card:hover .mot-overlay {
  opacity: 1;
}

.mot-overlay-text {
  font-size: 12.5px;
  color: #ffffff;
  line-height: 1.6;
  margin: 0 0 14px;
  text-align: left;
}

.mot-icons {
  display: flex;
  gap: 8px;
}

.mot-icon {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(255,255,255,0.22);
  border: 1px solid rgba(255,255,255,0.55);
  color: #ffffff;
  font-size: 11px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: background 0.25s ease;
  flex-shrink: 0;
}

.mot-icon:hover {
  background: rgba(255,255,255,0.45);
}

/* ============================================================
   NAME & ROLE
   ============================================================ */
.mot-name {
  margin: 12px 0 4px;
  font-size: 15px;
  font-weight: 700;
  color: #1a1a2e;
  line-height: 1.3;
}

.mot-role {
  margin: 0;
  font-size: 12px;
  color: #777;
  line-height: 1.4;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 900px) {
  .mot-grid { gap: 18px; padding: 0 32px; }
  .mot-card { max-width: 220px; min-width: 130px; }
}

@media (max-width: 600px) {
  .mot-rows { padding-top: clamp(90px, 22vw, 160px); }
  .mot-grid { gap: 12px; padding: 0 16px; margin-bottom: 20px; }
  .mot-card { flex: 1 1 120px; max-width: 165px; min-width: 100px; }
  .mot-overlay-text { font-size: 10.5px; }
  .mot-name { font-size: 12px; }
  .mot-role { font-size: 10px; }
}

@media (max-width: 400px) {
  .mot-grid { flex-wrap: wrap; justify-content: center; }
  .mot-card { flex: 0 1 45%; max-width: 160px; }
}

</style>
</head>
<body>

<section class="mot-section">
<div class="mot-watermark" aria-hidden="true">
<span class="mot-wm-line1">meet our team</span>
<span class="mot-wm-line2">meet our team</span>
</div>
<div class="mot-rows">
<!-- Row 1 -->
<div class="mot-grid">
<div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Janakan Nadarajah.png" alt="Janakan Nadarajah" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Drives the company's overall vision with a proven track record in global leadership and growth.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Janakan Nadarajah</h3>
<p class="mot-role">Chief Executive Officer</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Howard Williams.png" alt="Howard Williams" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Oversees day-to-day operations, ensuring seamless execution of business strategy across all departments.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Howard Williams</h3>
<p class="mot-role">Chief Operating Officer</p>
</div>
 
      <!-- 3rd card: mot-card--bordered keeps blue border, overlay only on hover -->
<div class="mot-card mot-card--bordered">
<div class="mot-img-wrap">
<img src="images/David hand.png" alt="David Hand" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Leads overall vision and strategy, with a strong track record in scaling technology-driven businesses globally.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">David Hand</h3>
<p class="mot-role">Chief Sales Officer, NA</p>
</div>
</div>
<!-- Row 2 -->
<div class="mot-grid">
<div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Howard Estcourt.png" alt="Howard Estcourt" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Brings independent expertise and strategic oversight to the board, guiding long-term business direction.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Howard Datacourt</h3>
<p class="mot-role">Non Executive Director</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Kalama Gohara.png" alt="Kalama Gohara" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Champions world-class service delivery standards, ensuring client satisfaction across all global engagements.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Kalsima Gohara</h3>
<p class="mot-role">Global Head Of Service Delivery</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Simon Brent Bernie.png" alt="Simon Brent Bernie" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Leads global advisory services, delivering expert guidance across enterprise transformation programmes.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Simon Brent Bernie</h3>
<p class="mot-role">Senior Vice President Head Of Global Advisory</p>
</div>
</div>
<!-- Row 3 -->
<div class="mot-grid">
<div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Vishnuvaradhan Selvaraj.png" alt="Vishnuvardhan Selvaraj" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Spearheads digital engineering initiatives, driving innovation and technical excellence across the organisation.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Vishnuvardhan Selvaraj</h3>
<p class="mot-role">Senior Vice President – Head Of Digital Engineering</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Nambi Anjaneyulu.png" alt="Nambi Anjaneyulu" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Safeguards the organisation's digital assets, leading cybersecurity strategy and information security governance.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Nambi Anjaneyulu</h3>
<p class="mot-role">CISO &amp; Head Of Cybersecurity Practice</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Thushi Siva.png" alt="Thushi Siva" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Manages end-to-end field service operations, ensuring efficient and responsive on-site delivery worldwide.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Thushi Siva</h3>
<p class="mot-role">Head Of Field Service Operations</p>
</div>
</div>
<!-- Row 4 -->
<div class="mot-grid">
<div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Bhuvana Siva.png" alt="Bhuvana Siva" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Ensures regulatory compliance and legal integrity, overseeing governance frameworks and certifications globally.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Bhuvana Siva</h3>
<p class="mot-role">Head Of Governance, Legal, Compliance &amp; Certification</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Siva Jeya.png" alt="Siva Jeya" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Shapes the technology vision and roadmap, driving product innovation and engineering excellence company-wide.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Siva Jeya</h3>
<p class="mot-role">Chief Technology Officer</p>
</div>
 
      <div class="mot-card">
<div class="mot-img-wrap">
<img src="images/Shajahan Amanulla.png" alt="Shajahan Amanulla" class="mot-img"/>
<div class="mot-overlay">
<p class="mot-overlay-text">Oversees financial planning and reporting, ensuring fiscal health and strategic investment across the business.</p>
<div class="mot-icons">
<a href="#" class="mot-icon" aria-label="LinkedIn">in</a>
<a href="#" class="mot-icon" aria-label="Email">✉</a>
</div>
</div>
</div>
<h3 class="mot-name">Shajahan Amanulla</h3>
<p class="mot-role">Chief Financial Officer</p>
</div>
</div>
</div><!-- /mot-rows -->
</section>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', sans-serif; background: #fff; }
 
.vb-cta-wrapper {
  width: 100%;

  box-sizing: border-box;
}
 
.vb-cta-section {
  position: relative;
  overflow: hidden;
  background: #0a1628;
  border-radius: 16px;
  min-height: 280px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 60px 40px;
  box-sizing: border-box;
  width: 100%;
  max-width: 90%;
  margin: 75px auto;
}
 
.vb-cta-bg {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
}
 
.vb-cta-bg{
  width: 100%;
  height: 400px;

  background: url('/images/cta.png') no-repeat center center;
  background-size: cover;
}



 

 
.vb-cta-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 600px;
  width: 100%;
}
 
.vb-cta-heading {
  font-size: clamp(20px, 3vw, 28px);
  font-weight: 600;
  color: #ffffff;
  margin: 0 0 16px;
  line-height: 1.3;
}
 
.vb-cta-subtext {
  font-size: clamp(13px, 1.8vw, 15px);
  color: rgba(200, 220, 240, 0.85);
  margin: 0 auto 32px;
  line-height: 1.7;
  max-width: 480px;
}
 
.vb-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 26px;
  border-radius: 999px;
  border: 1.5px solid rgba(255, 255, 255, 0.5);
  background: transparent;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  text-decoration: none;
  transition: background 0.2s, border-color 0.2s;
  cursor: pointer;
}
 
.vb-cta-btn:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(255, 255, 255, 0.8);
}
 
.vb-cta-btn__icon {
  display: flex;
  align-items: center;
  justify-content: center;
}
 

 
@media (max-width: 400px) {
  .vb-cta-wrapper { padding: 0 12px; }
  .vb-cta-section { padding: 40px 16px; }
  .vb-cta-btn { font-size: 14px; padding: 10px 20px; }
}
</style>
</head>
<body>
 
<div class="vb-cta-wrapper">
<section class="vb-cta-section">
<div class="vb-cta-bg"></div>
<div class="vb-cta-content">
<h2 class="vb-cta-heading">Got a vision to build? Let's make it happen.</h2>
<p class="vb-cta-subtext">Our digital workplace and IT solutions empower organizations to collaborate smarter, enhance efficiency, and securely access critical systems from anywhere.</p>
<a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="vb-cta-btn">
<span class="vb-cta-btn__icon">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="7.25" stroke="rgba(255,255,255,0.6)" stroke-width="1.5"/>
<path d="M5.5 8h5M8 5.5L10.5 8 8 10.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
        Connect With Us
</a>
</div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
     