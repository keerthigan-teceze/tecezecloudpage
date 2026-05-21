<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact-style.css" />
</head>
<body>
<?php include 'header.php'; ?>
<!-- ===== SECTION 1: CONTACT HERO ===== -->
<section class="ct-hero">
  <div class="ct-hero-overlay"></div>
  <div class="ct-hero-content">
    <p class="ct-hero-label">CONTACT US</p>
    <div class="ct-hero-divider"></div>
    <h1 class="ct-hero-title">Let's Connect and Build<br>Something Together</h1>
    <p class="ct-hero-sub">Looking to start a project or need expert guidance? Reach out to us and we'll<br>connect you with the right team to move things forward.</p>
    <a href="#contact-form" class="ct-hero-btn">
      <span class="ct-hero-btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"/>
          <polyline points="12 5 19 12 12 19"/>
        </svg>
      </span>
      Get in Touch
    </a>
  </div>
</section>

<!-- ===== SECTION 2: INTRO TEXT ===== -->
<section class="ct-intro">
  <div class="ct-intro-content">
    <p class="ct-intro-para">
      <span class="ct-intro-dark">We're here to support your business with the right expertise and solutions. Whether you have a question, need assistance, or want to explore how </span>
      <span class="ct-intro-grey">we can work together, our team is ready to help. Reach out to us and we'll ensure a prompt and meaningful response.</span>
    </p>
  </div>
</section>

<!-- ===== SECTION 3: CONTACT FORM ===== -->
<section class="ct-form-section" id="contact-form">
  <div class="ct-form-wrapper">

    <!-- Left Panel -->
    <div class="ct-form-left">
      <div class="ct-form-left-overlay"></div>
      <div class="ct-form-left-content">
        <p class="ct-form-tag">Get In Touch</p>
        <h2 class="ct-form-left-title">Tell Us About Your Requirements and We'll Take It from There</h2>
        <p class="ct-form-left-sub">Share your details and project needs, and our team will connect with you to provide the right solutions and next steps.</p>
      </div>
    </div>

<div class="ct-form-right">


    <iframe 
      aria-label="Contact us now"
      frameborder="0"
      style="height:600px;width:100%;border:none;"
      src="https://forms.zohopublic.com/FormsWorking/form/Contactusnow/formperma/xf8H-0yPN2b0htwf3avvn98bxsgNYtPywaYfdgwYQgU">
    </iframe>
 

</div>
  </div>

  <!-- Bottom Text -->
  <div class="ct-form-bottom">
    <div class="ct-form-bottom-left">
      <p class="ct-powered-label">Powered By Global<br>Technology Leaders</p>
    </div>
    <div class="ct-form-bottom-right">
      <p class="ct-bottom-text">We collaborate with trusted technology leaders to deliver secure, <span class="ct-bottom-highlight">innovative, and future-ready solutions for our clients.</span></p>
    </div>
  </div>
</section>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Global Offices Map</title>
<style>
 @font-face {
      font-family: 'Gilroy';
      src: url('/font/Gilroy-Medium.woff2') format('woff2'),
           url('/font/Gilroy-Medium.woff') format('woff');
      font-weight: 500;
      font-style: normal;
    }

  *{box-sizing:border-box;margin:0;padding:0}
body{font-family:system-ui,sans-serif;background:#fff}
.gom-wrap{display:flex;border:0.5px solid #dde3ea;border-radius:12px;overflow:hidden;min-height:460px;background:#fff}
.gom-map-panel{flex:1;position:relative;background:#f0f7fc;overflow:hidden;min-height:460px}
.gom-map-img-layer{position:absolute;inset:0;width:100%;height:100%}
.gom-map-img-layer img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 0.4s ease;pointer-events:none;display:block}
.gom-map-img-layer img.gom-active{opacity:1}
canvas#gom-overlay{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:2}
.gom-hotspot-layer{position:absolute;inset:0;z-index:3}
.gom-hs{position:absolute;cursor:pointer}
.gom-flag-layer{position:absolute;inset:0;z-index:4;pointer-events:none}
.gom-pin{
  position:absolute;
  width:34px;height:34px;
  border-radius:50%;
  border:2.5px solid #fff;
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  transform:translate(-50%,-50%);
  cursor:pointer;
  pointer-events:all;
  transition:transform 0.15s,box-shadow 0.15s,opacity 0.25s;
  box-shadow:0 2px 8px rgba(0,0,0,0.22);
}
.gom-pin:hover{transform:translate(-50%,-50%) scale(1.25);box-shadow:0 4px 16px rgba(14,124,191,0.35)}
.gom-pin.gom-dim{opacity:0.12;pointer-events:none}
.gom-pin.gom-hidden{opacity:0;pointer-events:none}
.gom-back-btn{position:absolute;top:12px;left:50%;transform:translateX(-50%);z-index:10;display:none;align-items:center;gap:6px;padding:7px 18px;background:#1a8fcf;color:#fff;border:none;border-radius:20px;font-size:12px;font-weight:500;cursor:pointer;white-space:nowrap;font-family:system-ui,sans-serif;box-shadow:0 2px 10px rgba(14,124,191,0.3)}
.gom-back-btn.gom-show{display:inline-flex}
.gom-back-btn:hover{background:#0d5f8f}
.gom-tooltip{position:absolute;background:#fff;border:0.5px solid #ccc;border-radius:6px;padding:4px 10px;font-size:11px;font-weight:500;color:#333;pointer-events:none;display:none;white-space:nowrap;z-index:20;box-shadow:0 2px 8px rgba(0,0,0,0.1)}

/* SIDEBAR — fixed height to match map panel, no overflow on the sidebar itself */
.gom-sidebar{
  width:290px;
  flex-shrink:0;
  border-left:0.5px solid #dde3ea;
  background:#fff;
  display:flex;
  flex-direction:column;
  height:460px;       /* matches min-height of .gom-wrap */
  max-height:460px;
  overflow:hidden;    /* prevent sidebar from stretching the layout */
}

/* HQ PANEL — scrollable if content overflows */
.gom-sb-hq{
  padding:24px;
  display:flex;
  flex-direction:column;
  gap:0;
  flex:1;
  overflow-y:auto;
}
.gom-sb-hq::-webkit-scrollbar{width:4px}
.gom-sb-hq::-webkit-scrollbar-track{background:transparent}
.gom-sb-hq::-webkit-scrollbar-thumb{background:#d0dbe6;border-radius:2px}
.gom-sb-hq::-webkit-scrollbar-thumb:hover{background:#a0b4c2}

.gom-sb-hq .gom-hq-label{font-size:10px;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#1a8fcf;margin-bottom:14px}
.gom-hq-item{padding:14px 0;border-bottom:0.5px solid #eef0f3;display:flex;flex-direction:column;gap:3px}
.gom-hq-item:last-child{border-bottom:none}
.gom-hq-flag-name{display:flex;align-items:center;gap:8px;margin-bottom:4px}
.gom-hq-flag{font-size:18px}
.gom-hq-country{font-size:13px;font-weight:600;color:#111}
.gom-hq-city{font-size:12px;font-weight:500;color:#333;margin-bottom:1px}
.gom-hq-addr{font-size:11px;color:#777;line-height:1.55;margin-bottom:4px}
.gom-map-link{display:inline-flex;align-items:center;gap:3px;font-size:11px;font-weight:500;color:#1a8fcf;text-decoration:none;border:none;background:none;cursor:pointer;padding:0;font-family:system-ui,sans-serif}
.gom-map-link:hover{opacity:0.7}

/* DETAIL PANEL — flex column: header fixed, list scrolls */
.gom-sb-detail{
  display:none;
  flex-direction:column;
  height:100%;         /* fill the sidebar */
  max-height:460px;
  overflow:hidden;     /* clip; only .gom-office-list scrolls */
}
.gom-sb-detail.gom-active{display:flex}

.gom-sb-detail-header{padding:16px 20px 0 20px;flex-shrink:0}
.gom-sb-header{display:flex;align-items:center;gap:10px;padding:12px 20px 12px 20px;border-bottom:0.5px solid #eee;flex-shrink:0}
.gom-sb-flag-img{width:36px;height:36px;border-radius:50%;border:1.5px solid #eee;object-fit:cover}
.gom-sb-name{font-size:14px;font-weight:600;color:#222}
.gom-sb-office-count{font-size:10px;font-weight:400;color:#aaa;margin-left:4px}

/* Scrollable office list — takes remaining height */
.gom-office-list{
  flex:1;
  overflow-y:auto;
  padding:14px 20px 20px 20px;
  min-height:0;   /* critical: lets flex child shrink below content size */
}
.gom-office-list::-webkit-scrollbar{width:4px}
.gom-office-list::-webkit-scrollbar-track{background:transparent}
.gom-office-list::-webkit-scrollbar-thumb{background:#d0dbe6;border-radius:2px}
.gom-office-list::-webkit-scrollbar-thumb:hover{background:#a0b4c2}

.gom-office-item{margin-bottom:14px;padding-bottom:14px;border-bottom:0.5px solid #eee}
.gom-office-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
.gom-office-city{font-size:13px;font-weight:600;color:#222;margin-bottom:3px}
.gom-office-addr{font-size:11px;color:#666;line-height:1.55;margin-bottom:5px}
.gom-back-to-hq{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:500;color:#999;background:none;border:none;cursor:pointer;padding:0 0 8px 0;font-family:system-ui,sans-serif}
.gom-back-to-hq:hover{color:#1a8fcf}

@media(max-width:640px){
  .gom-wrap{flex-direction:column}
  .gom-sidebar{width:100%;border-left:none;border-top:0.5px solid #eee;height:260px;max-height:260px}
  .gom-sb-detail{max-height:260px}
  .gom-map-panel{min-height:280px}
}
 
 </style>
</head>
<body>

<div id="gom-root"><div class="gom-wrap">
  <div class="gom-map-panel" id="gom-mapPanel">
    <div class="gom-map-img-layer" id="gom-imgLayer">
      <img id="gom-img-world"               class="gom-active" src="images/world-map.png"           alt="World map">
      <img id="gom-img-asia-hover"          src="images/asia-hover.png"           alt="Asia hover">
      <img id="gom-img-asia"                src="images/asia-zoom.png"            alt="Asia zoomed">
      <img id="gom-img-europe-hover"        src="images/europe-hover.png"         alt="Europe hover">
      <img id="gom-img-europe"              src="images/europe-zoom.png"          alt="Europe zoomed">
      <img id="gom-img-north-america-hover" src="images/north-america-hover.png"  alt="North America hover">
      <img id="gom-img-north-america"       src="images/north-america-zoom.png"   alt="North America zoomed">
      <img id="gom-img-south-america-hover" src="images/south-america-hover.png"  alt="South America hover">
      <img id="gom-img-south-america"       src="images/south-america-zoom.png"   alt="South America zoomed">
      <img id="gom-img-africa-hover"        src="images/africa-hover.png"         alt="Africa hover">
      <img id="gom-img-africa"              src="images/africa-zoom.png"          alt="Africa zoomed">
      <img id="gom-img-oceania-hover"       src="images/australia-hover.png"      alt="Australia hover">
      <img id="gom-img-oceania"             src="images/australia-zoom.png"       alt="Australia zoomed">
    </div>

    <canvas id="gom-overlay"></canvas>

    <div class="gom-hotspot-layer" id="gom-hotspotLayer">
      <div class="gom-hs" data-region="north-america" data-label="North America"
           style="left:3%;top:8%;width:25%;height:55%"
           data-poly="3,8 28,8 28,35 22,55 18,63 8,63 3,48"></div>
      <div class="gom-hs" data-region="south-america" data-label="South America"
           style="left:22%;top:62%;width:15%;height:34%"
           data-poly="15,62 30,62 30,82 26,96 18,96 14,80"></div>
      <div class="gom-hs" data-region="europe" data-label="Europe"
           style="left:45%;top:6%;width:16%;height:34%"
           data-poly="38,6 54,6 54,28 50,40 42,40 38,26"></div>
      <div class="gom-hs" data-region="africa" data-label="Africa"
           style="left:43%;top:42%;width:13%;height:43%"
           data-poly="38,34 51,34 51,64 47,80 42,80 38,62"></div>
      <div class="gom-hs" data-region="asia" data-label="Asia"
           style="left:59%;top:5%;width:25%;height:52%"
           data-poly="51,5 85,5 85,42 77,57 62,57 51,40"></div>
      <div class="gom-hs" data-region="oceania" data-label="Australia"
           style="left:78%;top:72%;width:11%;height:20%"
           data-poly="72,66 90,66 90,94 80,94 72,82"></div>
    </div>

    <div class="gom-flag-layer" id="gom-flagLayer">

      <!-- ASIA -->
      <div class="gom-pin" data-key="india"       data-region="asia"
           data-world-left="68"   data-world-top="55"
           data-zoom-left="39"    data-zoom-top="74"
           style="left:68%;top:55%;background-image:url(https://flagcdn.com/w40/in.png);"></div>
      <div class="gom-pin" data-key="uae"         data-region="asia"
           data-world-left="60.5" data-world-top="52.1"
           data-zoom-left="28.8"  data-zoom-top="70.6"
           style="left:60.5%;top:52.1%;background-image:url(https://flagcdn.com/w40/ae.png);"></div>
      <div class="gom-pin" data-key="lk"          data-region="asia"
           data-world-left="69.0" data-world-top="63"
           data-zoom-left="40.6"  data-zoom-top="84"
           style="left:69.0%;top:63%;background-image:url(https://flagcdn.com/w40/lk.png);"></div>
      <div class="gom-pin" data-key="sg"          data-region="asia"
           data-world-left="75.5" data-world-top="62.6"
           data-zoom-left="46.9"  data-zoom-top="80.3"
           style="left:75.5%;top:62.6%;background-image:url(https://flagcdn.com/w40/sg.png);"></div>
      <div class="gom-pin" data-key="cn-shanghai" data-region="asia"
           data-world-left="81.0" data-world-top="40.0"
           data-zoom-left="52.7"  data-zoom-top="55.0"
           style="left:81.0%;top:40.0%;background-image:url(https://flagcdn.com/w40/cn.png);"></div>
      <div class="gom-pin" data-key="cn-shenzhen" data-region="asia"
           data-world-left="77.5" data-world-top="49.5"
           data-zoom-left="50.5"  data-zoom-top="66.0"
           style="left:77.5%;top:49.5%;background-image:url(https://flagcdn.com/w40/cn.png);"></div>
      <div class="gom-pin" data-key="kr"          data-region="asia-east"
           data-world-left="84.5" data-world-top="43.5"
           style="left:84.5%;top:43.5%;background-image:url(https://flagcdn.com/w40/kr.png);"></div>
      <div class="gom-pin" data-key="jp"          data-region="asia-east"
           data-world-left="88.5" data-world-top="38.0"
           style="left:88.5%;top:38.0%;background-image:url(https://flagcdn.com/w40/jp.png);"></div>

      <!-- EUROPE -->
      <div class="gom-pin" data-key="uk"  data-region="europe"
           data-world-left="45.5" data-world-top="26.4"
           data-zoom-left="43.0"  data-zoom-top="49.0"
           style="left:45.5%;top:26.4%;background-image:url(https://flagcdn.com/w40/gb.png);"></div>
      <div class="gom-pin" data-key="dk"  data-region="europe"
           data-world-left="48.5" data-world-top="22.5"
           data-zoom-left="50.0"  data-zoom-top="47.0"
           style="left:48.5%;top:22.5%;background-image:url(https://flagcdn.com/w40/dk.png);"></div>
      <div class="gom-pin" data-key="se"  data-region="europe"
           data-world-left="52.0" data-world-top="19.5"
           data-zoom-left="55.0"  data-zoom-top="37.0"
           style="left:52.0%;top:19.5%;background-image:url(https://flagcdn.com/w40/se.png);"></div>
      <div class="gom-pin" data-key="de"  data-region="europe"
           data-world-left="52.5" data-world-top="28.4"
           data-zoom-left="56.5"  data-zoom-top="60.0"
           style="left:52.5%;top:28.4%;background-image:url(https://flagcdn.com/w40/de.png);"></div>
      <div class="gom-pin" data-key="fr"  data-region="europe"
           data-world-left="45.5" data-world-top="39.6"
           data-zoom-left="43.0"  data-zoom-top="75.0"
           style="left:45.5%;top:39.6%;background-image:url(https://flagcdn.com/w40/fr.png);"></div>
      <div class="gom-pin" data-key="be"  data-region="europe"
           data-world-left="48.5" data-world-top="33.0"
           data-zoom-left="49.5"  data-zoom-top="59.0"
           style="left:48.5%;top:33.0%;background-image:url(https://flagcdn.com/w40/be.png);"></div>
      <div class="gom-pin" data-key="it"  data-region="europe"
           data-world-left="43.0" data-world-top="33.5"
           data-zoom-left="40.5"  data-zoom-top="58.0"
           style="left:43.0%;top:33.5%;background-image:url(https://flagcdn.com/w40/it.png);"></div>
      <div class="gom-pin" data-key="gr"  data-region="europe"
           data-world-left="50.0" data-world-top="40.0"
           data-zoom-left="51.5"  data-zoom-top="73.0"
           style="left:50.0%;top:40%;background-image:url(https://flagcdn.com/w40/gr.png);"></div>
      <div class="gom-pin" data-key="ro"  data-region="europe"
           data-world-left="53.5" data-world-top="35.9"
           data-zoom-left="60.0"  data-zoom-top="72.0"
           style="left:53.5%;top:35.9%;background-image:url(https://flagcdn.com/w40/ro.png);"></div>

      <!-- AFRICA -->
      <div class="gom-pin" data-key="ng"  data-region="africa"
           data-world-left="49.0" data-world-top="60.0"
           data-zoom-left="44.0"  data-zoom-top="45.0"
           style="left:49%;top:60%;background-image:url(https://flagcdn.com/w40/ng.png);"></div>
      <div class="gom-pin" data-key="za"  data-region="africa"
           data-world-left="53.0" data-world-top="80.0"
           data-zoom-left="52.0"  data-zoom-top="84.0"
           style="left:53.0%;top:80.0%;background-image:url(https://flagcdn.com/w40/za.png);"></div>

      <!-- NORTH AMERICA -->
      <div class="gom-pin" data-key="us"  data-region="north-america"
           data-world-left="24.5" data-world-top="41.5"
           data-zoom-left="55.0"  data-zoom-top="67.0"
           style="left:24.5%;top:41.5%;background-image:url(https://flagcdn.com/w40/us.png);"></div>
      <div class="gom-pin" data-key="ca"  data-region="north-america"
           data-world-left="22.0" data-world-top="34.4"
           data-zoom-left="50.0"  data-zoom-top="59.0"
           style="left:22.0%;top:34.4%;background-image:url(https://flagcdn.com/w40/ca.png);"></div>
      <div class="gom-pin" data-key="mx"  data-region="north-america"
           data-world-left="22.5" data-world-top="51.9"
           data-zoom-left="48.5"  data-zoom-top="80.0"
           style="left:22.5%;top:51.9%;background-image:url(https://flagcdn.com/w40/mx.png);"></div>

      <!-- SOUTH AMERICA -->
      <div class="gom-pin" data-key="br"  data-region="south-america"
           data-world-left="33.0" data-world-top="76.9"
           data-zoom-left="55.0"  data-zoom-top="47.0"
           style="left:33.0%;top:76.9%;background-image:url(https://flagcdn.com/w40/br.png);"></div>

      <!-- OCEANIA -->
      <div class="gom-pin" data-key="au"  data-region="oceania"
           data-world-left="84.5" data-world-top="78.5"
           data-zoom-left="49.0"  data-zoom-top="55.0"
           style="left:84.5%;top:78.5%;background-image:url(https://flagcdn.com/w40/au.png);"></div>

    </div>

    <button class="gom-back-btn" id="gom-backBtn" onclick="gomResetMap()">← World map</button>
    <div class="gom-tooltip" id="gom-tooltip"></div>
  </div>

  <!-- SIDEBAR -->
  <div class="gom-sidebar">

    <div class="gom-sb-hq" id="gom-sbHQ">
      <div class="gom-hq-label">🏢 Headquarters</div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇮🇳</span><span class="gom-hq-country">India</span></div>
        <div class="gom-hq-city">Chennai (HQ)</div>
        <div class="gom-hq-addr">SAI Tech Park, 105, Anna Salai, Little Mount, Guindy, Chennai, Tamil Nadu 600032</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=SAI+Tech+Park+105+Anna+Salai+Little+Mount+Guindy+Chennai+Tamil+Nadu+600032" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇬🇧</span><span class="gom-hq-country">United Kingdom</span></div>
        <div class="gom-hq-city">London</div>
        <div class="gom-hq-addr">14 Dock Street, London, E1 8JP, United Kingdom</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=14+Dock+Street+London+E1+8JP+United+Kingdom" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item">
        <div class="gom-hq-flag-name"><span class="gom-hq-flag">🇺🇸</span><span class="gom-hq-country">United States</span></div>
        <div class="gom-hq-city">Charlotte</div>
        <div class="gom-hq-addr">4115 Rose Lake Dr, Suite F, Charlotte, NC 28217, USA</div>
        <a class="gom-map-link" href="https://maps.google.com/?q=4115+Rose+Lake+Dr+Suite+F+Charlotte+NC+28217+USA" target="_blank">Open in Maps →</a>
      </div>
      <div class="gom-hq-item" style="border-bottom:none;padding-bottom:0">
        <div style="font-size:11px;color:#aaa;margin-top:4px">Click any region or flag on the map to explore all offices.</div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════
         INDIA — 7 offices, scrollable list
    ══════════════════════════════════════════ -->
    <div class="gom-sb-detail" id="gom-d-india">
      <div class="gom-sb-detail-header">
        <button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button>
      </div>
      <div class="gom-sb-header">
        <img class="gom-sb-flag-img" src="https://flagcdn.com/w40/in.png" alt="India">
        <div class="gom-sb-name">India <span class="gom-sb-office-count">7 offices · scroll ↓</span></div>
      </div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Chennai</div>
          <div class="gom-office-addr">SAI Tech Park, 105, Anna Salai, Little Mount, Guindy, Chennai, Tamil Nadu 600032</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=SAI+Tech+Park+105+Anna+Salai+Little+Mount+Guindy+Chennai+Tamil+Nadu+600032" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Bangalore</div>
          <div class="gom-office-addr">9, 1st A Cross Rd, Kaverappa Layout, Kadubeesanahalli, Bengaluru 560103</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=9+1st+A+Cross+Rd+Kaverappa+Layout+Kadubeesanahalli+Bengaluru+560103" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Hyderabad</div>
          <div class="gom-office-addr">Awfis Hitech City N Heights, Level 1, Phase 2, N-Heights, Plot No. 38, Siddiq Nagar, HITEC City, Hyderabad, Telangana – 500081</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Awfis+Hitech+City+N+Heights+Plot+38+Siddiq+Nagar+HITEC+City+Hyderabad+Telangana+500081" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Pune</div>
          <div class="gom-office-addr">2nd Floor, Business Bay, Baner-Sus Road, Near Audi Showroom, Pashan Baner, Pune – 411045</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Business+Bay+Baner-Sus+Road+Near+Audi+Showroom+Pashan+Baner+Pune+411045" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Ahmedabad</div>
          <div class="gom-office-addr">13th Floor, Gala Empire, Opp. T.V. Tower, Drive In Rd, Memnagar, Ahmedabad, Gujarat 380052</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Gala+Empire+Drive+In+Road+Memnagar+Ahmedabad+Gujarat+380052" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Noida</div>
          <div class="gom-office-addr">3rd Floor, Awfis Majestic Omnia, Block A, Sector 4, Noida, Uttar Pradesh – 201301</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Awfis+Majestic+Omnia+Block+A+Sector+4+Noida+Uttar+Pradesh+201301" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Navi Mumbai</div>
          <div class="gom-office-addr">C Wing, 10th Floor, Empire Tower, Reliable Cloud City, Gavate Wadi, MIDC, Airoli, Navi Mumbai, Maharashtra – 400708</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Empire+Tower+Reliable+Cloud+City+Gavate+Wadi+MIDC+Airoli+Navi+Mumbai+Maharashtra+400708" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UAE -->
    <div class="gom-sb-detail" id="gom-d-uae">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ae.png" alt="UAE"><div class="gom-sb-name">United Arab Emirates</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Dubai</div>
          <div class="gom-office-addr">43-44, Dubai Municipality Building, Bur Dubai, Al Fahidi</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Dubai+Municipality+Building+Bur+Dubai+Al+Fahidi+Dubai+UAE" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SRI LANKA -->
    <div class="gom-sb-detail" id="gom-d-lk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/lk.png" alt="Sri Lanka"><div class="gom-sb-name">Sri Lanka</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Jaffna</div>
          <div class="gom-office-addr">LIC Towers, 4th Floor, 34-36, Sir Vaithilingam Duraishamy Veethy, Jaffna 40000</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=LIC+Towers+34+Sir+Vaithilingam+Duraishamy+Veethy+Jaffna+40000+Sri+Lanka" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SINGAPORE -->
    <div class="gom-sb-detail" id="gom-d-sg">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/sg.png" alt="Singapore"><div class="gom-sb-name">Singapore</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Singapore</div>
          <div class="gom-office-addr">32 Pekin Street #05-01, Singapore 048762</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=32+Pekin+Street+Singapore+048762" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CHINA SHANGHAI -->
    <div class="gom-sb-detail" id="gom-d-cn-shanghai">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/cn.png" alt="China"><div class="gom-sb-name">China — Shanghai</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Shanghai</div>
          <div class="gom-office-addr">Room JT24907, Building 4, Block B, No. 925 Yecheng Road, Jiading Industrial Zone, Shanghai</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=925+Yecheng+Road+Jiading+Industrial+Zone+Shanghai+China" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CHINA HONG KONG -->
    <div class="gom-sb-detail" id="gom-d-cn-shenzhen">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/cn.png" alt="China"><div class="gom-sb-name">China — Hong Kong</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Hong Kong</div>
          <div class="gom-office-addr">Teceze Consultancy Hong Kong Ltd, Rm 7B, One Capital Place, 18 Luard Road, Wan Chai</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=One+Capital+Place+18+Luard+Road+Wan+Chai+Hong+Kong" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SOUTH KOREA -->
    <div class="gom-sb-detail" id="gom-d-kr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/kr.png" alt="South Korea"><div class="gom-sb-name">South Korea</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Seoul</div>
          <div class="gom-office-addr">H1070, 116, Teheran-ro, Gangnam-gu, Seoul, Republic of Korea</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=116+Teheran-ro+Gangnam-gu+Seoul+Republic+of+Korea" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- JAPAN -->
    <div class="gom-sb-detail" id="gom-d-jp">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/jp.png" alt="Japan"><div class="gom-sb-name">Japan</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Tokyo</div>
          <div class="gom-office-addr">3-3-23-1507 Nishi-Shinjuku, Shinjuku, Tokyo, Japan</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=3-3-23+Nishi-Shinjuku+Shinjuku+Tokyo+Japan" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UNITED KINGDOM -->
    <div class="gom-sb-detail" id="gom-d-uk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/gb.png" alt="UK"><div class="gom-sb-name">United Kingdom</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">London</div>
          <div class="gom-office-addr">14 Dock Street, London, E1 8JP, United Kingdom</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=14+Dock+Street+London+E1+8JP+United+Kingdom" target="_blank">Open in Maps →</a>
        </div>
        <div class="gom-office-item">
          <div class="gom-office-city">Manchester</div>
          <div class="gom-office-addr">First Floor, Swan Buildings, 20 Swan Street, Manchester, M4 5JW</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Swan+Buildings+20+Swan+Street+Manchester+M4+5JW+United+Kingdom" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- DENMARK -->
    <div class="gom-sb-detail" id="gom-d-dk">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/dk.png" alt="Denmark"><div class="gom-sb-name">Denmark</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Copenhagen</div>
          <div class="gom-office-addr">Amaliegade 6, 2. tv, 1256 København K, Denmark</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Amaliegade+6+1256+Kobenhavn+K+Denmark" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SWEDEN -->
    <div class="gom-sb-detail" id="gom-d-se">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/se.png" alt="Sweden"><div class="gom-sb-name">Sweden</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Stockholm</div>
          <div class="gom-office-addr">Kammakargatan 47, 111 24 Stockholm</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Kammakargatan+47+111+24+Stockholm+Sweden" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- GERMANY -->
    <div class="gom-sb-detail" id="gom-d-de">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/de.png" alt="Germany"><div class="gom-sb-name">Germany</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Berlin</div>
          <div class="gom-office-addr">Eichborndamm 167 G55, Berlin – 13403</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Eichborndamm+167+Berlin+13403+Germany" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- FRANCE -->
    <div class="gom-sb-detail" id="gom-d-fr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/fr.png" alt="France"><div class="gom-sb-name">France</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Paris</div>
          <div class="gom-office-addr">34 Avenue des Champs-Élysées, Paris, France – 75008</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=34+Avenue+des+Champs+Elysees+Paris+75008+France" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- BELGIUM -->
    <div class="gom-sb-detail" id="gom-d-be">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/be.png" alt="Belgium"><div class="gom-sb-name">Belgium</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Erembodegem</div>
          <div class="gom-office-addr">Brusselbaan 37, 9320 Erembodegem, Belgium</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Brusselbaan+37+9320+Erembodegem+Belgium" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- ITALY -->
    <div class="gom-sb-detail" id="gom-d-it">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/it.png" alt="Italy"><div class="gom-sb-name">Italy</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Rome</div>
          <div class="gom-office-addr">Viale Giulio Cesare 71, 00192 Rome, Italy</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Viale+Giulio+Cesare+71+00192+Rome+Italy" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- GREECE -->
    <div class="gom-sb-detail" id="gom-d-gr">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/gr.png" alt="Greece"><div class="gom-sb-name">Greece</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Thessaloniki</div>
          <div class="gom-office-addr">Straitsa 2, Thessaloniki, 57001, Greece</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Straitsa+2+Thessaloniki+57001+Greece" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- ROMANIA -->
    <div class="gom-sb-detail" id="gom-d-ro">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ro.png" alt="Romania"><div class="gom-sb-name">Romania</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Bucharest</div>
          <div class="gom-office-addr">Teceze Romania S.R.L, Strada Buzești Nr. 75-77, Camera 7, Etaj 9, Sectorul 1, București</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Strada+Buzesti+75-77+Sectorul+1+Bucuresti+Romania" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- NIGERIA -->
    <div class="gom-sb-detail" id="gom-d-ng">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ng.png" alt="Nigeria"><div class="gom-sb-name">Nigeria</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Abuja</div>
          <div class="gom-office-addr">Suite 7, Last Floor, Rhema Mall, Beside Navy Quarter, Kado, Abuja, FCT, Nigeria</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Rhema+Mall+Kado+Abuja+FCT+Nigeria" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- SOUTH AFRICA -->
    <div class="gom-sb-detail" id="gom-d-za">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/za.png" alt="South Africa"><div class="gom-sb-name">South Africa</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Cape Town</div>
          <div class="gom-office-addr">184 Upper Buitenkant Street, Oranjezicht, Cape Town, South Africa</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=184+Upper+Buitenkant+Street+Oranjezicht+Cape+Town+South+Africa" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- UNITED STATES -->
    <div class="gom-sb-detail" id="gom-d-us">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/us.png" alt="USA"><div class="gom-sb-name">United States</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Charlotte, NC</div>
          <div class="gom-office-addr">4115 Rose Lake Dr, Suite F, Charlotte, NC 28217, USA</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=4115+Rose+Lake+Dr+Suite+F+Charlotte+NC+28217+USA" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- CANADA -->
    <div class="gom-sb-detail" id="gom-d-ca">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/ca.png" alt="Canada"><div class="gom-sb-name">Canada</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Oakville, Ontario</div>
          <div class="gom-office-addr">71 Speers Road, Unit 20, Oakville, ON L6K 0J2</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=71+Speers+Road+Unit+20+Oakville+ON+L6K+0J2+Canada" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- MEXICO -->
    <div class="gom-sb-detail" id="gom-d-mx">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/mx.png" alt="Mexico"><div class="gom-sb-name">Mexico</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Playa del Carmen</div>
          <div class="gom-office-addr">Calle 7 Sur Diagonal, Manzana 29, Lote 3, Local 301, Plaza Paseo Coba, Playacar Fase II, Playa del Carmen, Quintana Roo 77710</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Plaza+Paseo+Coba+Playacar+Fase+II+Playa+del+Carmen+Quintana+Roo+77710+Mexico" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- BRAZIL -->
    <div class="gom-sb-detail" id="gom-d-br">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/br.png" alt="Brazil"><div class="gom-sb-name">Brazil</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">São Paulo</div>
          <div class="gom-office-addr">Avenida Paulista, 352, Conjunto 77, Bela Vista, São Paulo / SP, CEP 01310-905</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=Avenida+Paulista+352+Bela+Vista+Sao+Paulo+SP+01310-905+Brazil" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

    <!-- AUSTRALIA -->
    <div class="gom-sb-detail" id="gom-d-au">
      <div class="gom-sb-detail-header"><button class="gom-back-to-hq" onclick="gomResetSidebar()">← Back to Headquarters</button></div>
      <div class="gom-sb-header"><img class="gom-sb-flag-img" src="https://flagcdn.com/w40/au.png" alt="Australia"><div class="gom-sb-name">Australia</div></div>
      <div class="gom-office-list">
        <div class="gom-office-item">
          <div class="gom-office-city">Sydney</div>
          <div class="gom-office-addr">Level 10, 171 Clarence Street, Sydney, NSW 2000</div>
          <a class="gom-map-link" href="https://maps.google.com/?q=171+Clarence+Street+Sydney+NSW+2000+Australia" target="_blank">Open in Maps →</a>
        </div>
      </div>
    </div>

  </div>
</div></div>


</body>
<script>
(function() {
  var panel    = document.getElementById('gom-mapPanel');
  var canvas   = document.getElementById('gom-overlay');
  var ctx      = canvas.getContext('2d');
  var tooltip  = document.getElementById('gom-tooltip');
  var backBtn  = document.getElementById('gom-backBtn');
  var sbHQ     = document.getElementById('gom-sbHQ');

  var activeRegion = null;

  function resizeCanvas() {
    canvas.width  = panel.offsetWidth;
    canvas.height = panel.offsetHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', function() {
    resizeCanvas();
    if (activeRegion) clearCanvas();
  });

  function parsePoly(str) {
    return str.trim().split(/\s+/).map(function(p) {
      return p.split(',').map(Number);
    });
  }

  function drawHighlight(polyStr) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var W = canvas.width, H = canvas.height;
    var pts = parsePoly(polyStr);
    ctx.fillStyle = 'rgba(14,100,170,0.18)';
    ctx.fillRect(0, 0, W, H);
    ctx.save();
    ctx.globalCompositeOperation = 'destination-out';
    ctx.beginPath();
    pts.forEach(function(pt, i) {
      var x = (pt[0] / 100) * W, y = (pt[1] / 100) * H;
      i === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
    });
    ctx.closePath();
    ctx.fill();
    ctx.restore();
  }

  function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }

  function showImage(key, isHover) {
    document.querySelectorAll('#gom-root .gom-map-img-layer img').forEach(function(img) {
      img.classList.remove('gom-active');
    });
    var imgId = 'gom-img-' + key;
    if (isHover) {
      var hoverId = 'gom-img-' + key + '-hover';
      if (document.getElementById(hoverId)) imgId = hoverId;
    }
    var target = document.getElementById(imgId);
    if (target) {
      target.classList.add('gom-active');
    } else {
      document.getElementById('gom-img-world').classList.add('gom-active');
    }
  }

  function showPinsFor(region) {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      var pinRegion = p.dataset.region;
      if (pinRegion !== region) {
        p.classList.add('gom-hidden');
      } else {
        p.classList.remove('gom-hidden');
        if (p.dataset.zoomLeft && p.dataset.zoomTop) {
          p.style.left = p.dataset.zoomLeft + '%';
          p.style.top  = p.dataset.zoomTop + '%';
        }
      }
    });
  }

  function restorePins() {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      p.classList.remove('gom-hidden', 'gom-dim');
      if (p.dataset.worldLeft && p.dataset.worldTop) {
        p.style.left = p.dataset.worldLeft + '%';
        p.style.top  = p.dataset.worldTop + '%';
      }
    });
  }

  function dimPinsExcept(region) {
    document.querySelectorAll('#gom-root .gom-pin').forEach(function(p) {
      var pinRegion = p.dataset.region;
      if (pinRegion !== region) { p.classList.add('gom-dim'); } else { p.classList.remove('gom-dim'); }
    });
  }

  function hideAllDetails() {
    document.querySelectorAll('#gom-root .gom-sb-detail').forEach(function(e) {
      e.classList.remove('gom-active');
      var list = e.querySelector('.gom-office-list');
      if (list) list.scrollTop = 0;
    });
  }

  function showDetail(key) {
    hideAllDetails();
    sbHQ.style.display = 'none';
    var el = document.getElementById('gom-d-' + key);
    if (el) el.classList.add('gom-active');
  }

  window.gomResetSidebar = function() {
    hideAllDetails();
    sbHQ.style.display = 'flex';
  };

  document.querySelectorAll('#gom-root .gom-hs').forEach(function(hs) {
    var region = hs.dataset.region;
    var label  = hs.dataset.label;
    var poly   = hs.dataset.poly;

    hs.addEventListener('mouseenter', function() {
      if (activeRegion) return;
      drawHighlight(poly);
      dimPinsExcept(region);
      tooltip.textContent = label;
      tooltip.style.display = 'block';
      showImage(region, true);
    });
    hs.addEventListener('mousemove', function(e) {
      if (activeRegion) return;
      var rect = panel.getBoundingClientRect();
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    hs.addEventListener('mouseleave', function() {
      if (activeRegion) return;
      clearCanvas();
      restorePins();
      tooltip.style.display = 'none';
      showImage('world', false);
    });
    hs.addEventListener('click', function() {
      activeRegion = region;
      clearCanvas();
      tooltip.style.display = 'none';
      showImage(region, false);
      showPinsFor(region);
      backBtn.classList.add('gom-show');
    });
  });

  var countryNames = {
    india:'India', uae:'UAE', lk:'Sri Lanka', sg:'Singapore',
    'cn-shanghai':'China (Shanghai)', 'cn-shenzhen':'China (Hong Kong)',
    kr:'South Korea', jp:'Japan',
    uk:'United Kingdom', dk:'Denmark', se:'Sweden',
    de:'Germany', fr:'France', be:'Belgium', it:'Italy',
    gr:'Greece', ro:'Romania',
    ng:'Nigeria', za:'South Africa',
    us:'United States', ca:'Canada', mx:'Mexico', br:'Brazil',
    au:'Australia'
  };

  document.querySelectorAll('#gom-root .gom-pin').forEach(function(pin) {
    pin.addEventListener('mouseenter', function(e) {
      var rect = panel.getBoundingClientRect();
      tooltip.textContent = countryNames[pin.dataset.key] || pin.dataset.key;
      tooltip.style.display = 'block';
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    pin.addEventListener('mousemove', function(e) {
      var rect = panel.getBoundingClientRect();
      tooltip.style.left = (e.clientX - rect.left + 12) + 'px';
      tooltip.style.top  = (e.clientY - rect.top  - 28) + 'px';
    });
    pin.addEventListener('mouseleave', function() {
      tooltip.style.display = 'none';
    });
    pin.addEventListener('click', function(e) {
      e.stopPropagation();
      showDetail(pin.dataset.key);
    });
  });

  window.gomResetMap = function() {
    activeRegion = null;
    clearCanvas();
    showImage('world', false);
    restorePins();
    backBtn.classList.remove('gom-show');
    tooltip.style.display = 'none';
    window.gomResetSidebar();
  };

})();
</script>
</html>










































<!-- ===== SECTION 4: WORLD MAP ===== -->

<style>

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', sans-serif; background: #fff; }
 
.vb-cta-wrapper {
  width: 100%;
  padding-top: 80px;
  box-sizing: border-box;
}
 
.vb-cta-section {
  position: relative;
  overflow: hidden;
   background: url('/images/cta.png') no-repeat center center;
  border-radius: 16px;
  min-height: 280px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 60px 40px;
  box-sizing: border-box;
  width: 100%;
  max-width: 90%;
  margin: 0 auto;
  margin-bottom: 29px;
}
 
.vb-cta-bg {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
}
 
.vb-cta-circle {
  position: absolute;
  border-radius: 50%;
}
 
.vb-cta-circle--1 {
  width: 520px;
  height: 520px;
  background: radial-gradient(circle, #0d4a8a 0%, #0a2d5c 40%, transparent 70%);
  right: -80px;
  top: -160px;
}
 
.vb-cta-circle--2 {
  width: 380px;
  height: 380px;
  background: radial-gradient(circle, #0e6dad 0%, #0a4070 50%, transparent 70%);
  right: 20px;
  top: -60px;
}
 
.vb-cta-circle--3 {
  width: 280px;
  height: 280px;
  background: radial-gradient(circle, #1a8ab5 0%, #0c5585 50%, transparent 70%);
  right: 120px;
  top: -20px;
}
 
.vb-cta-circle--4 {
  width: 180px;
  height: 180px;
  background: radial-gradient(circle, #22aacc 0%, #1277a0 60%, transparent 75%);
  right: 200px;
  top: 20px;
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
 
/* Responsive */
@media (max-width: 600px) {
  .vb-cta-wrapper { padding: 0 16px; }
 
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
<div class="vb-cta-bg">

</div>
<div class="vb-cta-content">
<h2 class="vb-cta-heading">Got a vision to build? Let's make it happen.</h2>
<p class="vb-cta-subtext">Our digital workplace and IT solutions empower organizations to collaborate smarter, enhance efficiency, and securely access critical systems from anywhere.</p>
<a href="#contact-form" class="ct-hero-btn">
<span class="ct-hero-btn-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
<line x1="5" y1="12" x2="19" y2="12"/>
<polyline points="12 5 19 12 12 19"/>
</svg>
</span>
Connect With Us
</a>
</div>
</section>
</body>
<?php include 'footer.php'; ?>
</html>





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
   SECTION 1: CONTACT HERO
================================================ */
.ct-hero {
  position: relative;
  width: 100%;
  min-height: 380px;
  background-image: url('images/Contact-bg.png');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.ct-hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 30, 80, 0.45);
  z-index: 1;
}

.ct-hero-content {
  position: relative;
  z-index: 2;
  max-width: 1200px;
  margin: 0 auto;
  padding: 80px 60px;
  width: 100%;
}

.ct-hero-label {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.8px;
  color: #ffffff;
  text-transform: uppercase;
  margin-bottom: 12px;
  opacity: 0.9;
}

.ct-hero-divider {
  width: 100%;
  height: 1px;
  background: rgba(255, 255, 255, 0.25);
  margin-bottom: 28px;
}

.ct-hero-title {
  font-size: 48px;
  font-weight: 300;
  line-height: 1.2;
  color: #ffffff;
  margin-bottom: 18px;
  letter-spacing: -0.5px;
}

.ct-hero-sub {
  font-size: 14px;
  font-weight: 400;
  line-height: 1.75;
  color: rgba(255, 255, 255, 0.85);
  max-width: 500px;
  margin-bottom: 36px;
}

.ct-hero-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 10px 22px 10px 10px;
  border: 1.5px solid rgba(255, 255, 255, 0.6);
  border-radius: 50px;
  color: #ffffff;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  transition: background 0.3s ease;
}

.ct-hero-btn:hover {
  background: rgba(255, 255, 255, 0.1);
}

.ct-hero-btn-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: linear-gradient(135deg, #13C5B8, #2A44B0);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

/* ================================================
   SECTION 2: INTRO TEXT
================================================ */
.ct-intro {
  background: #ffffff;
  width: 100%;
  padding: 80px 20px;
}

.ct-intro-content {
  max-width: 700px;
  margin: 0 auto;
  text-align: center;
}

.ct-intro-para {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.75;
}

.ct-intro-dark {
  color: #0f1f3d;
}

.ct-intro-grey {
  color: #8a94a6;
  font-weight: 400;
}

/* ================================================
   SECTION 3: CONTACT FORM
================================================ */
.ct-form-section {
  background: #ffffff;
  width: 100%;
  padding: 60px 40px 80px;
}

.ct-form-wrapper {
  display: flex;
  gap: 50px;
  max-width: 1100px;
  margin: 0 auto 60px;
  align-items: stretch;
}

/* Left Panel */
.ct-form-left {
  position: relative;
  width: 380px;
  min-width: 320px;
  border-radius: 16px;
  overflow: hidden;
  background-image: url('images/contact-left-img.png');
  background-size: cover;
  background-position: center;
  min-height: 420px;
  flex-shrink: 0;
}

.ct-form-left-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(10, 20, 60, 0.55), rgba(10, 20, 80, 0.85));
  z-index: 1;
}

.ct-form-left-content {
  position: relative;
  z-index: 2;
  padding: 40px 32px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  height: 100%;
}

.ct-form-tag {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  color: rgba(255, 255, 255, 0.75);
  text-transform: uppercase;
  margin-bottom: 14px;
}

.ct-form-left-title {
  font-size: 24px;
  font-weight: 600;
  color: #ffffff;
  line-height: 1.35;
  margin-bottom: 14px;
}

.ct-form-left-sub {
  font-size: 13px;
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.65;
}

/* Right Panel */
.ct-form-right {
  flex: 1;
  min-width: 0;
}

.ct-form-title {
  font-size: 26px;
  font-weight: 700;
  color: #0f1f3d;
  margin-bottom: 6px;
}

.ct-form-subtitle {
  font-size: 13px;
  color: #8a94a6;
  margin-bottom: 28px;
}

.ct-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.ct-form-row {
  display: flex;
  gap: 16px;
}

.ct-form-row .ct-form-group {
  flex: 1;
}

.ct-form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.ct-label {
  font-size: 13px;
  font-weight: 500;
  color: #0f1f3d;
}

.ct-input {
  width: 100%;
  padding: 11px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  outline: none;
  transition: border-color 0.3s ease;
  background: #ffffff;
}

.ct-input:focus {
  border-color: #2A44B0;
}

.ct-input::placeholder {
  color: #b0b7c3;
}

/* Phone Input */
.ct-phone-wrap {
  display: flex;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  overflow: hidden;
}

.ct-phone-flag {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 11px 12px;
  background: #f7f8fb;
  border-right: 1px solid #dde1ea;
  font-size: 13px;
  color: #0f1f3d;
  cursor: pointer;
  white-space: nowrap;
}

.ct-flag-img {
  width: 20px;
  height: auto;
  border-radius: 2px;
}

.ct-phone-input {
  border: none;
  border-radius: 0;
  flex: 1;
}

.ct-phone-input:focus {
  border-color: transparent;
  box-shadow: none;
}

/* Select */
.ct-select-wrap {
  position: relative;
}

.ct-select {
  width: 100%;
  padding: 11px 40px 11px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  background: #ffffff;
  outline: none;
  appearance: none;
  cursor: pointer;
  transition: border-color 0.3s ease;
}

.ct-select:focus {
  border-color: #2A44B0;
}

.ct-select-arrow {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
  color: #8a94a6;
}

/* Textarea */
.ct-textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid #dde1ea;
  border-radius: 6px;
  font-size: 13px;
  color: #0f1f3d;
  resize: vertical;
  min-height: 110px;
  outline: none;
  font-family: 'Segoe UI', Arial, sans-serif;
  transition: border-color 0.3s ease;
}

.ct-textarea:focus {
  border-color: #2A44B0;
}

.ct-textarea::placeholder {
  color: #b0b7c3;
}

/* Submit Button */
.ct-submit-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 10px 24px 10px 10px;
  border: 1.5px solid #2A44B0;
  border-radius: 50px;
  background: transparent;
  color: #0f1f3d;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: background 0.3s ease;
  width: fit-content;
}

.ct-submit-btn:hover {
  background: rgba(42, 68, 176, 0.06);
}

.ct-submit-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: linear-gradient(135deg, #13C5B8, #2A44B0);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  flex-shrink: 0;
}

/* Bottom Text */
.ct-form-bottom {
  display: flex;
  align-items: center;
  gap: 40px;
  max-width: 1100px;
  margin: 0 auto;
  padding-top: 40px;
  border-top: 1px solid #edf0f5;
}

.ct-powered-label {
  font-size: 12px;
  color: #8a94a6;
  line-height: 1.6;
  min-width: 140px;
}

.ct-bottom-text {
  font-size: 18px;
  font-weight: 600;
  color: #0f1f3d;
  line-height: 1.5;
}

.ct-bottom-highlight {
  color: #8a94a6;
  font-weight: 400;
}

/* ================================================
   SECTION 4: WORLD MAP
================================================ */
.ct-map-section {
  background: #ffffff;
  width: 100%;
  padding: 60px 40px 80px;
}

.ct-map-wrapper {
  display: flex;
  align-items: flex-start;
  gap: 50px;
  max-width: 1100px;
  margin: 0 auto;
}

.ct-map-left {
  flex: 1;
  min-width: 0;
}

.ct-map-img {
  width: 100%;
  height: auto;
  display: block;
}

.ct-map-right {
  width: 280px;
  flex-shrink: 0;
}

.ct-country-block {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.ct-country-header {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 4px;
}

.ct-country-flag {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  object-fit: cover;
  border: 1px solid #edf0f5;
}

.ct-country-name {
  font-size: 16px;
  font-weight: 700;
  color: #0f1f3d;
}

.ct-office {
  padding-bottom: 20px;
  border-bottom: 1px solid #edf0f5;
}

.ct-office:last-child {
  border-bottom: none;
}

.ct-city {
  font-size: 15px;
  font-weight: 700;
  color: #0f1f3d;
  margin-bottom: 6px;
}

.ct-address {
  font-size: 13px;
  color: #8a94a6;
  line-height: 1.6;
  margin-bottom: 8px;
}

.ct-map-link {
  font-size: 13px;
  color: #2A44B0;
  font-weight: 500;
  text-decoration: none;
  transition: opacity 0.3s ease;
}

.ct-map-link:hover {
  opacity: 0.75;
}

/* ================================================
   TABLET (max-width: 1024px)
================================================ */
@media (max-width: 1024px) {
  .ct-hero-content {
    padding: 70px 40px;
  }

  .ct-hero-title {
    font-size: 40px;
  }

  .ct-form-section {
    padding: 50px 30px 70px;
  }

  .ct-form-wrapper {
    gap: 30px;
  }

  .ct-form-left {
    min-width: 280px;
    width: 300px;
  }

  .ct-form-left-title {
    font-size: 20px;
  }

  .ct-map-wrapper {
    gap: 30px;
  }

  .ct-map-right {
    width: 240px;
  }

  .ct-intro-para {
    font-size: 16px;
  }

  .ct-bottom-text {
    font-size: 16px;
  }
}

/* ================================================
   MOBILE (max-width: 768px)
================================================ */
@media (max-width: 768px) {
  .ct-hero-content {
    padding: 60px 24px;
  }

  .ct-hero-title {
    font-size: 32px;
  }

  .ct-hero-sub br {
    display: none;
  }

  .ct-intro {
    padding: 60px 24px;
  }

  .ct-intro-para {
    font-size: 15px;
  }

  .ct-form-section {
    padding: 40px 20px 60px;
  }

  .ct-form-wrapper {
    flex-direction: column;
    gap: 30px;
  }

  .ct-form-left {
    width: 100%;
    min-width: unset;
    min-height: 280px;
  }

  .ct-form-row {
    flex-direction: column;
    gap: 18px;
  }

  .ct-form-bottom {
    flex-direction: column;
    gap: 20px;
    text-align: center;
  }

  .ct-bottom-text {
    font-size: 15px;
  }

  .ct-map-section {
    padding: 40px 20px 60px;
  }

  .ct-map-wrapper {
    flex-direction: column;
    gap: 30px;
  }

  .ct-map-right {
    width: 100%;
  }

  .ct-country-block {
    gap: 20px;
  }
}

/* ================================================
   SMALL MOBILE (max-width: 480px)
================================================ */
@media (max-width: 480px) {
  .ct-hero-content {
    padding: 50px 20px;
  }

  .ct-hero-title {
    font-size: 26px;
  }

  .ct-intro {
    padding: 40px 20px;
  }

  .ct-intro-para {
    font-size: 14px;
  }

  .ct-form-section {
    padding: 30px 16px 50px;
  }

  .ct-form-title {
    font-size: 22px;
  }

  .ct-map-section {
    padding: 30px 16px 50px;
  }

  .ct-city {
    font-size: 14px;
  }

  .ct-address {
    font-size: 12px;
  }
}
</style>
