<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hero Banner</title>
  <link rel="stylesheet" href="/assets/style.css">
  <style>
   

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    .hero {
      position: relative;
      width: 100%;
      min-height: 220px;
      overflow: hidden;
      display: flex;
      align-items: center;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      z-index: 0;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to right,
        rgba(10, 60, 100, 0.72) 0%,
        rgba(10, 60, 100, 0.40) 60%,
        transparent 100%
      );
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 44px 48px;
      max-width: 560px;
    }

    .breadcrumb {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      color: rgba(255, 255, 255, 0.75);
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .breadcrumb span {
      color: rgba(255, 255, 255, 0.55);
    }

    .hero-title {
      font-size: 36px;
      font-weight: 700;
      color: #ffffff;
      line-height: 1.18;
      margin-bottom: 16px;
      letter-spacing: -0.01em;
    }

    .hero-subtitle {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.82);
      line-height: 1.6;
      margin-bottom: 28px;
      max-width: 380px;
    }

    .hero-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 22px;
      border: 1.5px solid rgba(255, 255, 255, 0.7);
      border-radius: 30px;
      background: transparent;
      color: #ffffff;
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.2s, border-color 0.2s;
    }

    .hero-btn:hover {
      background: rgba(255, 255, 255, 0.15);
      border-color: #ffffff;
    }

    .hero-btn .arrow {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 1.5px solid rgba(255, 255, 255, 0.7);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
    }
    
    
    .ps-section-wrap {
  width: 100%;
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box;
}

.ps-logo-display {
  display: grid;
  grid-auto-flow: column; 
  /* Changed to 3 rows */
  grid-template-rows: repeat(3, 110px); 
  gap: 25px;
  overflow-x: auto;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
  padding: 20px 0;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.ps-logo-display::-webkit-scrollbar {
  display: none;
}

.ps-logo-box {
  /* 5 columns per view on desktop */
  width: calc((100vw - 200px) / 5);
  max-width: 220px;
  min-width: 180px;
  height: 110px;
  display: flex;
  align-items: center;
  justify-content: center;
  scroll-snap-align: start;
}

.ps-logo-box img {
  max-width: 90%;
  max-height: 70px;
  object-fit: contain;
  /* Removed grayscale filter for full color */
  transition: transform 0.3s ease;
}

.ps-logo-box:hover img {
  transform: scale(1.05);
}

.ps-controls {
  display: flex;
  justify-content: flex-end;
  gap: 15px;
  margin-top: 15px;
}

.ps-btn {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 1px solid #e0e0e0;
  background: #fff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

/* Responsiveness */
@media (max-width: 1024px) {
  .ps-logo-box {
    width: calc((100vw - 80px) / 3); /* 3 items visible */
  }
}

@media (max-width: 600px) {
  .ps-logo-box {
    width: calc((100vw - 50px) / 2); /* 2 items visible */
  }
}
.tcz-cs2__counter-total{
    color:black;
}
.tcz-cs2__counter-sep{
    color:black;
}

.tcz-cs2__img-link{
        display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    font-weight: 600;
    color: white;
    border: 1.5px solid #d1d5db;
    border-radius: 50px;
    padding: 8px 18px;
    text-decoration: none;
    transition: 0.2s;
}
   
  </style>
</head>
<body> 
<?php include 'header.php'; ?>
<div class="slider" id="slider">

    <div class="slide active">
      <img class="slide-bg" src="/images/banner001.png" alt="" aria-hidden="true"/>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <p class="breadcrumb">WHO WE ARE / ALLIANCES & PARTNERSHIP</p>
        <div class="hero-rule"></div>
        <h1>Driving Innovation Through<br>Strategic Collaborations</h1>
        <p class="subtitle">
          At the core of our growth lies a strong ecosystem of global alliances and technology partnerships. 
        </p>
        <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="btn-cta"><span class="btn-dot"></span>Connect with us</a>
      </div>
    </div>

  </div>
 <section class="pt-section">

  <!-- ── TOP ROW ── -->
  <div class="pt-top-row">
    <p class="pt-label">Our Clients</p>
    <h2 class="pt-heading">
     Our partnerships are built on a shared vision to create measurable
      <strong></strong>
      <span class="pt-muted">business impact, accelerate digital transformation, and unlock new opportunities for our clients.</span>
    </h2>
  </div>

  <!-- ── DIVIDER ── -->
  <div class="pt-divider"></div>

<div class="ps-section-wrap">
  <div class="ps-logo-display" id="psSlider">
    <div class="ps-logo-box"><img src="/images/deloitte.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/collabera.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/crisil.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/dxc.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/exl.png" alt="Partner"></div>
    
    <div class="ps-logo-box"><img src="/images/gp.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/hcl.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/hexaware.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/hitachi.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/infosys.png" alt="Partner"></div>
    
    <div class="ps-logo-box"><img src="/images/genpact.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/echidna.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/info.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/kyndryl.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/ntt.png" alt="Partner"></div>

    </div>

  <div class="ps-controls">
    <button class="ps-btn" aria-label="Previous" onclick="psMove(-1)">&#8592;</button>
    <button class="ps-btn" aria-label="Next" onclick="psMove(1)">&#8594;</button>
  </div>
</div>

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->


</section>

  <section class="tcz-cs2__section">

  <div class="tcz-cs2__wm-top" aria-hidden="true">
    <span>case studies</span>
  </div>

  <div class="tcz-cs2__wm-behind" aria-hidden="true">
    <span>case studies</span>
    <span>case studies</span>
    <span>case studies</span>
  </div>

  <div class="tcz-cs2__container">
    <div class="tcz-cs2__left">
      <div class="tcz-cs2__text-card" id="tczCs2Left"></div>
    </div>

    <div class="tcz-cs2__right">
      <div class="tcz-cs2__image-card" id="tczCs2Right" style="position:relative;overflow:hidden;">
        <div class="tcz-cs2__slide-wrapper" id="tczSlideWrapper"></div>
      </div>
    </div>
  </div>

  <div class="tcz-cs2__bottom">
    <div class="tcz-cs2__bottom-spacer"></div>
    <div class="tcz-cs2__counter">
      <span class="tcz-cs2__counter-current" id="tczCs2Current">01</span>
      <span class="tcz-cs2__counter-sep">/</span>
      <span class="tcz-cs2__counter-total" id="tczCs2Total">05</span>
    </div>
    <div class="tcz-cs2__nav">
      <button class="tcz-cs2__btn" id="tczCs2Prev" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="tcz-cs2__btn" id="tczCs2Next" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>
  </div>
</section>

<section class="pt-section">

  <!-- ── TOP ROW ── -->
  <div class="pt-top-row">
    <p class="pt-label">Our Partners</p>
    <h2 class="pt-heading">
      We proudly collaborate with leading global technology providers across 
      
      <span class="pt-muted">cloud, networking, and enterprise solutions ensuring best-in-class service delivery and innovation.</span>
    </h2>
  </div>

  <!-- ── DIVIDER ── -->
  <div class="pt-divider"></div>

 <div class="ps-section-wrap">
  <div class="ps-logo-display" id="psSlider">
    <div class="ps-logo-box"><img src="/images/partner11.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner1.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner2.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner3.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner4.png" alt="Partner"></div>
    
    <div class="ps-logo-box"><img src="/images/partner5.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner7.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner8.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner9.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner10.png" alt="Partner"></div>
    
    <div class="ps-logo-box"><img src="/images/partner11.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner12.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner13.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner8.png" alt="Partner"></div>
    <div class="ps-logo-box"><img src="/images/partner6.png" alt="Partner"></div>

    </div>

  <div class="ps-controls">
    <button class="ps-btn" aria-label="Previous" onclick="psMove(-1)">&#8592;</button>
    <button class="ps-btn" aria-label="Next" onclick="psMove(1)">&#8594;</button>
  </div>
</div>

  <!-- ══════════════════════════════
       CTA BANNER
  ══════════════════════════════ -->
  <div class="pt-cta">

    <!-- ✅ Replace src="YOUR_CTA_BG_URL" with your actual CTA background image URL -->
    <img
      class="pt-cta-bg-img"
      src="/images/cta.png"
      alt=""
      aria-hidden="true"
    />

    <!-- Dark gradient overlay so text stays readable over the image -->
    <div class="pt-cta-bg-overlay"></div>

    <!-- Text content -->
    <div class="pt-cta-content">
      <p class="pt-cta-label">Get In Touch</p>
      <h3 class="pt-cta-heading">Start with a Clear Security<br>Assessment</h3>
      <p class="pt-cta-sub">Let's discuss how Teceze can deliver for your organization.</p>
      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="pt-cta-btn">
        <span class="pt-cta-btn-dot"></span>
        Talk to Our Alliances Team
      </a>
    </div>

  </div>

</section>
<?php include 'footer.php'; ?>
</body>
<script>
  const slides = [
      {
        nav: "Our Solutions",
        counter: "01",
        title: "Innovative Technology Solutions Built for Modern Businesses",
        desc: "We design and implement scalable technology solutions tailored to your business goals. From cloud infrastructure to software integrations, our team ensures your systems work seamlessly."
      },
      {
        nav: "Service Delivery",
        counter: "02",
        title: "Managed IT Services That Keep Your Business Running",
        desc: "Our managed IT services help businesses maintain performance, reduce downtime, and scale with ease. We act as a proactive technology partner, supporting your day-to-day operations."
      },
      {
        nav: "Scalability",
        counter: "03",
        title: "Flexible Infrastructure That Grows As Your Business Expands",
        desc: "Our scalable solutions adapt to your evolving needs — whether you're onboarding new teams or entering new markets. We build systems designed to scale without disruption."
      }
    ];

    let current = 0; // Start at index 0
    const total = slides.length;

    const navBar       = document.getElementById('navBar');
    const counterBig   = document.getElementById('counterBig');
    const counterTotal = document.getElementById('counterTotal');
    const slideTitle   = document.getElementById('slideTitle');
    const slideDesc    = document.getElementById('slideDesc');
    const leftPanel    = document.getElementById('leftPanel');
    const rightPanel   = document.getElementById('rightPanel');

    function buildNav() {
      const order = [
        (current - 1 + total) % total,
        current,
        (current + 1) % total
      ];

      navBar.innerHTML = '';
      order.forEach((slideIdx, slotPos) => {
        const slot = document.createElement('div');
        slot.className = 'nav-slot' + (slotPos === 1 ? ' center' : '');

        const label = document.createElement('span');
        label.className = 'nav-label';
        label.textContent = slides[slideIdx].nav;

        if (slotPos !== 1) {
          label.addEventListener('click', () => goTo(slideIdx));
        }

        slot.appendChild(label);
        navBar.appendChild(slot);
      });
    }

    function updateContent() {
      const s = slides[current];
      counterBig.textContent   = s.counter;
      counterTotal.textContent = '/' + String(total).padStart(2, '0');
      slideTitle.textContent   = s.title;
      slideDesc.textContent    = s.desc;
      buildNav();
    }

    function goTo(idx) {
      if (idx === current) return;
      leftPanel.classList.add('out');
      rightPanel.classList.add('out');
      
      setTimeout(() => {
        current = idx;
        updateContent();
        leftPanel.classList.remove('out');
        rightPanel.classList.remove('out');
      }, 400);
    }

    document.getElementById('prevBtn').addEventListener('click', () => goTo((current - 1 + total) % total));
    document.getElementById('nextBtn').addEventListener('click', () => goTo((current + 1) % total));

    // Initialize
    updateContent();
    
    
    
function psMove(direction) {
  const slider = document.getElementById('psSlider');
  const scrollAmount = slider.offsetWidth; // Moves by exactly one full view (15 logos)
  const maxScroll = slider.scrollWidth - slider.clientWidth;

  // Infinite Loop Logic
  if (direction === 1 && slider.scrollLeft >= maxScroll - 10) {
      // If at the end, go back to start
      slider.scrollTo({ left: 0, behavior: 'smooth' });
  } else if (direction === -1 && slider.scrollLeft <= 10) {
      // If at start, go to the end
      slider.scrollTo({ left: maxScroll, behavior: 'smooth' });
  } else {
      // Normal move
      slider.scrollBy({
          left: direction * scrollAmount,
          behavior: 'smooth'
      });
  }
}
</script>
<script src="/assets/script.js"></script>
</html>