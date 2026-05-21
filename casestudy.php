<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Case studies</title>
  <link rel="stylesheet" href="/assets/style.css">
<?php include 'header.php'; ?>
   <style>
      body {
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
      }

      /* Single unified background for entire page — stretches across both sections */
      .page-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: -1;
        pointer-events: none;
        background-color: #020B2D;
      }

      .page-background::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
          linear-gradient(rgba(255,255,255,0.025) 3px, transparent 3px),
          linear-gradient(90deg, rgba(255,255,255,0.025) 3px, transparent 3px);
        background-size: 100px 100px;
        pointer-events: none;
      }

      .page-background::after {
        content: "";
        position: absolute;
        inset: 0;
        background:
          radial-gradient(ellipse 75% 55% at 12% 18%,
            rgba(0, 202, 189, 0.65) 0%,
            rgba(0, 55, 166, 0.5) 50%,
            transparent 100%),
          radial-gradient(ellipse 70% 50% at 88% 82%,
            rgba(0, 202, 189, 0.6) 0%,
            rgba(0, 55, 166, 0.45) 50%,
            transparent 100%);
        filter: blur(120px);
        pointer-events: none;
      }
/* ================= HERO ================= */
.slider {
    position: relative;
    height: 100vh;
    min-height: 650px;
    overflow: hidden;
}

.slide-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slide-content {
    position: relative;
    z-index: 2;
    color: #fff;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 60px;
    max-width: 100%;
    box-sizing: border-box;
}

.breadcrumb {
    font-family: 'Gilroy', sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    margin-bottom: 18px;
}

.hero-rule {
    width: 180px;
    height: 1px;
    background-color: rgba(255,255,255,.4);
    margin: 16px 0 28px;
}

h1 {
    font-family: 'Gilroy';
    font-weight: 400;
    font-size: 64px;
    line-height: 70px;
    max-width: 703px;
    margin-bottom: 1.1rem;
}

/* ================= MOBILE RESPONSIVE HERO ================= */
@media (max-width: 768px) {
    .slide-content {
        padding: 130px 20px 80px !important;
        justify-content: flex-start;
    }
    
    h1 {
        font-size: 33px !important;
        line-height: 1.18 !important;
        max-width: 100% !important;
        word-break: break-word !important;
        overflow-wrap: break-word !important;
    }
    
    .subtitle {
        font-size: 16px !important;
        line-height: 1.5 !important;
        max-width: 100% !important;
    }
    
    .hero-rule {
        width: 130px;
        margin: 16px 0 22px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 29px !important;
    }
}



@media (max-width: 768px) {
  .cs-filter-block {
    width: 100%;
  }

  .cs-select {
    width: 100%;
  }

  .cs-search-input {
    height: 50px;
  }
}

@media (max-width: 768px) {
  .cs-grid {
    padding: 16px;
    gap: 20px;
  }
}

@media (max-width: 768px) {
  .project-content {
    padding: 10px 0;
  }

  .project-content p {
    font-size: 14px;
    line-height: 1.5;
  }
}

@media (max-width: 768px) {
  .tcz-cs2__wm-behind span {
    font-size: 60px;
    line-height: 0.8;
  }
}

html, body {
  overflow-x: hidden;
}


    .breadcrumb {
      font-family: 'Gilroy', sans-serif;
      font-size: 18px;
      font-weight: 400;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.85);
      margin-bottom: 18px;
    }

    .hero-rule {
      width: calc(100vw - 260px);
      height: 1px;
      background-color: rgba(255,255,255,.4);
      margin: 16px 0 28px;
    }

    h1 {
      font-family: 'Gilroy';
      font-weight: 400;
      font-size: 64px;
      line-height: 70px;
      max-width: 703px;
      margin-bottom: 1.1rem;
    }

    .subtitle {
      font-size: 18px;
      line-height: 1.6;
      max-width: 617px;
    }

    /* ================= BELOW HERO BG ================= */

    .below-hero-image {
      position: relative;
      width: 100%;
      min-height: 700px;
      overflow: visible !important;
      z-index: 0;
    }

    .below-hero-image > *:not(img) {
      position: relative;
      z-index: 2;
      color: #fff;
    }

    /* ================= PROJECT SECTION ================= */

 .projects-header {
  display: flex;
  align-items: flex-start;
  gap: 80px;
  padding: 80px;
}

.projects-left {
  min-width: 240px;
}

.projects-right {
  font-family: 'Gilroy', sans-serif;
  font-size: 32px;
  line-height: 1.3;
  font-weight: 200;
  max-width: 720px;
  margin-left: auto;   /* pushes text to the right */
  margin-left: 300px;
}

.projects-right span {
  opacity: 0.5;
}

    .small-title {
      font-size: 14px;
    
    }

    .small-subtitle {
      font-size: 14px;
      margin-top: 8px;
    }


    .project-card {
      display: flex;
      gap: 48px;
      padding: 0 80px 120px;
      align-items: flex-start;
    }

    .project-image img {
      width: 485px;
      height: 534px;
      object-fit: cover;
      box-shadow: 0 20px 40px rgba(0,0,0,.4);
      position: relative;
      z-index: 3;
    }

    .project-content { 
        flex: 1;
        max-width: none;

    }

    .project-meta {
      font-size: 15px;
      opacity: 0.7;
    }

  .project-content h2 {
  font-size: 28px;
  line-height: 1.25;
  font-weight: 100;
  max-width: 740px;
}

.project-content p {
  font-size: 19px;
  line-height: 1.6;
  max-width: 720px;
  opacity: 0.7;
  background: transparent;
  
}

    .read-blog {
      display: inline-block;
      margin-top: 12px;
      color: #6ec1ff;
      text-decoration: none;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 991px) {
      .projects-header,
      .project-card {
        flex-direction: column;
        padding: 40px;
      }

      .project-image img {
        width: 100%;
        height: auto;
      }

      h1 {
        font-size: 44px;
        line-height: 50px;
      }
    }



    /* ================= CASE STUDY CARD ================= */

.case-study-card {
  display: flex;
  gap: 40px;
  margin: 0 80px 120px;
  align-items: center;

  background: rgba(255, 255, 255, 0.056);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);

  border-radius: 16px;

  /* ✅ real glass border */
  border: 1px solid rgba(255, 255, 255, 0.12);

  box-shadow: none;
}


/* image inside card */
.case-study-card .project-image img {
  width: 485px;
  height: 534px;
  object-fit: cover;
  border-radius: 12px;
}

/* content style */
.case-study-card .project-content {
  padding-top: 15px;
}

/* link */
.case-study-card .read-blog {
  display: inline-block;
 
  color: #00c2ff;
}



/* TOOLBAR */
.cs-toolbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 40px 80px;
  gap: 24px;
}

.cs-search {
  width: 320px;
  padding: 14px 18px;
  border-radius: 14px;
  border: 1px solid rgba(255,255,255,0.18);
  background: rgba(255,255,255,0.08);
  color: #fff;
}

.cs-filters select {
  padding: 14px 18px;
  border-radius: 14px;
  background: rgba(255,255,255,0.08);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.18);
  margin-left: 14px;
}

/* GRID */
.cs-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);

  column-gap: 20px;   /* ✅ horizontal gap EXACT */
  row-gap: 28px;      /* ✅ vertical gap EXACT */

  max-width: 1240px;  /* ✅ fits 3 cards (400*3) + gaps (20*2) */
  margin: 0 auto;     /* ✅ center grid */

  padding: 32px 0 80px;  /* ✅ reduced outer space */
}


/* CARD */
.cs-card {
  background: rgba(255,255,255,0.06);
  backdrop-filter: blur(6px);
  border-radius: 18px;
  overflow: hidden;
  border: 1px solid rgba(255,255,255,0.12);
  min-height: 500px;
  width: 100%;
  
}

.cs-card img {
  width: 100%;
  height: 280px;
  object-fit: cover;
}

.cs-card-content {
 
  bottom: 0;
  left: 0;
  right: 0;
  padding: 28px;
  z-index: 2;
  padding-top: 15px;
}


.cs-meta {
  font-size: 14px;
  opacity: 0.65;
}

.cs-card h3 {
  margin: 14px 0;
  font-weight: 500;
  line-height: 1.3;
}

.cs-card a {
  color: #00c2a8;
  text-decoration: none;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .cs-grid {
    grid-template-columns: repeat(2, 1fr);
    max-width: 860px;
  }
}

@media (max-width: 640px) {
  .cs-grid {
    grid-template-columns: 1fr;
    max-width: 400px;
  }
}


/* FILTER BAR (EXACT DESIGN) */
.cs-toolbar-exact {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1140px;
  margin: 0 auto 40px;
  position: relative;
  z-index: 999999 !important;
}

/* SEARCH */
.cs-search-wrap {
  position: relative;
  width: 420px;
}

.cs-search-input {
  width: 100%;
  height: 56px;

  padding: 0 56px 0 24px;
  border-radius: 15px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.18);

  color: #fff;
  font-size: 16px;
}

.cs-search-input::placeholder {
  color: rgba(255,255,255,0.6);
}

.cs-search-icon {
  position: absolute;
  right: 22px;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0.85;
}

/* RIGHT FILTER GROUP */
.cs-filter-group {
  display: flex;
  align-items: flex-end;
  gap: 28px;
}

/* LABEL + SELECT STACK */
.cs-filter-block {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.cs-filter-label {
  font-size: 14px;
  color: rgba(255,255,255,0.7);
}

/* SELECT DROPDOWNS */
.cs-select {
  height: 56px;
  min-width: 220px;

  padding: 0 20px;
  border-radius: 16px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.18);

  color: #fff;
  font-size: 16px;
  appearance: none;
  cursor: pointer;
}

/* Button container */
.view-more {
  display: flex;
  justify-content: center;
  margin-bottom: 100px;
}
.view-more-new {
  margin-top: 5px;
  display: flex;
  

}

/* Pill button */
.blog-hero-btn {
  display: inline-flex;
  align-items: center;
  gap: 5px;

  padding: 10px 10px;
  border-radius: 999px;

  color: #ffffff;
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;

  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.35);
  backdrop-filter: blur(8px);

  transition: all 0.3s ease;
}

/* ✅ Gradient circle with YOUR gradient */
.blog-hero-btn-icon {
  width: 38px;
  height: 38px;
  border-radius: 50%;

  display: flex;
  align-items: center;
  justify-content: center;

  background: linear-gradient(
    270.28deg,
    #13C5B8 -7.98%,
    #2A44B0 102.47%
  );

  flex-shrink: 0;
  transition: transform 0.3s ease;
}

/* Hover */
.blog-hero-btn:hover {
  background: rgba(255, 255, 255, 0.14);
}

.blog-hero-btn:hover .blog-hero-btn-icon {
  transform: translateX(4px);
}


/* =============================
   LATEST INSIGHTS (EDITORIAL FIX)
============================= */

.tcz-cs2__section {
  position: relative;
  background: #ffffff;
  padding: 120px 80px;
  padding-bottom: 40px; 
  overflow: hidden;
}

/* WATERMARK */
.tcz-cs2__wm-behind {
  position: absolute;
  inset: 0;
  z-index: 0;

  display: flex;
  flex-direction: column;
  align-items: center;

 font-family: Gilroy;
  pointer-events: none;
}

/* BIG "latest insights" text */
.tcz-cs2__wm-behind span {
  font-size: 230px;          /* ✅ BIG */
  font-weight: 800;          /* ✅ STRONG */
  text-transform: lowercase;
  letter-spacing: 2px;
  font-family: Gilroy;

  color: rgba(0, 0, 0, 0.04); /* ✅ subtle watermark */
  
}
/* KEYFRAMES */
@keyframes wmFade {
  0%   { opacity: 0; transform: translateY(20px); }
  10%  { opacity: 0.08; transform: translateY(0); }
  30%  { opacity: 0.08; }
  40%  { opacity: 0; }
  100% { opacity: 0; }
}

/* MAIN CONTAINER */
.tcz-cs2__container {
  position: relative;
  z-index: 2;

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 100px;
}

/* FEATURED CARD */
.tcz-cs2__featured {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-top: 15%;
}

.tcz-cs2__image-card {
width: 100% !important;
    max-width: 1200px !important;     /* ← Big Width */
    height: 580px !important;         /* ← Big Height */
  position: relative;         /* ✅ anchor for absolute children */
  border-radius: 20px;
  overflow: hidden;
  background: transparent;    /* ✅ NO white background */
}


/* SECONDARY CARDS - Full Width Fix */
.tcz-cs2__secondary {
    width: 100%;
    max-width: 1200px;           /* Increased to match featured card */
    height: 220px;
    overflow: hidden;
    position: relative;
    margin: 0 auto;              /* Center it properly */
}

.tcz-cs2__track {
    display: flex;
    height: 100%;
    gap: 20px;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

/* Each card takes almost 50% */
.tcz-cs2__text-card {
    flex: 0 0 calc(50% - 10px);   /* Keeps gap of 20px */
    max-width: none;
    color: #000;
    display: flex;
    gap: 16px;
}

/* TEXT CARDS */
.tcz-cs2__text-card {
  padding: 28px;

  border-radius: 16px;

  background: rgba(255,255,255,0.6);
 
   display: flex;
     gap: 16px; 
}

.tcz-cs2__text-card a {
    color: rgb(2, 146, 134);         /* Change this to your desired color */
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.tcz-cs2__card-img {
  width: 160px;
  height: 190px;
  object-fit: cover;
  border-radius: 12px;
  flex-shrink: 0;
}
/* BOTTOM BAR - Improved Layout */
.tcz-cs2__bottom {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px;
}

/* COUNTER - Bigger & Better Spacing */
.tcz-cs2__counter {
    display: flex;
    align-items: flex-end;
    gap: 8px;
}

/* BIG CURRENT NUMBER - With Gradient */
#tczCs2Current {
    font-size: 82px;
    font-weight: 700;
    line-height: 1;
    background: linear-gradient(
        270.28deg,
        #13C5B8 -7.98%,
        #2A44B0 102.47%
    );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.tcz-cs2__divider {
    font-size: 32px;
    color: rgba(0,0,0,0.35);
    margin-bottom: 8px;
}

#tczCs2Total {
    font-size: 32px;
    font-weight: 400;
    color: rgba(0,0,0,0.45);
    margin-bottom: 8px;
}

/* NAV ARROWS - More space & better look */
.tcz-cs2__nav {
    display: flex;
    gap: 16px;                    /* Increased gap between arrows */
}

.tcz-cs2__nav button {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 1px solid rgba(0,0,0,0.25);
    background: transparent;
    color: #333;
    font-size: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tcz-cs2__nav button:hover {
    background: #030034;
    border-color: #030034;
    color: #ffffff;
    transform: scale(1.1);
}
/* RESPONSIVE */
@media (max-width: 768px) {
  .tcz-cs2__secondary {
    grid-template-columns: 1fr;
  }
}


.tcz-cs2__image-card {
  width: 100%;
  max-width: 900px;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(255,255,255,0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0,0,0,0.08);

  display: flex;
  flex-direction: column; /* 🔥 IMPORTANT */
}

.tcz-cs2__featured-img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
}

.tcz-cs2__featured-content {
  padding: 24px;
  color: #000;
}

.tcz-cs2__featured-content h2 {
  margin-top: 10px;
  font-size: 26px;
  font-weight: 500;
}



/* FEATURED IMAGE WITH TEXT OVERLAY */
.tcz-cs2__image-wrap {
  position: absolute;
  inset: 0;
}

/* Image fills entire card */
.tcz-cs2__featured-img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Dark gradient on image */
.tcz-cs2__image-wrap::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0,0,0,0.65),
    rgba(0,0,0,0.15),
    transparent
  );
}

/* Text ON image */
.tcz-cs2__featured-overlay {
  position: absolute;
  bottom: 24px;
  left: 24px;
  right: 24px;
  color: #fff;
  z-index: 2;
}

.tcz-cs2__featured-overlay h2 {
  margin-top: 8px;
  font-size: 26px;
  font-weight: 500;
}



   .diagonal-bg {
     position: absolute;
     pointer-events: none;
     z-index: -1;
   }
   .diagonal-bg-1 {
     width: 837.0626340229276px;
     height: 1197.8535096887342px;
     background: linear-gradient(315deg, #00CABD 0%, #0037A6 100%);
     backdrop-filter: blur(280px);
     opacity: 0.65;
     transform: rotate(-77.05deg);
     top: -41px;
     left: -568.61px;
   }
   .diagonal-bg-2 {
     width: 663.1664835355646px;
     height: 630.9024324664524px;
     background: linear-gradient(315deg, #00CABD 0%, #0037A6 100%);
     backdrop-filter: blur(280px);
     opacity: 0.65;
     transform: rotate(-133.01deg);
     top: 47px;
     left: 972.76px;
   }


   /* ===============================
   GLOBAL MOBILE FIXES
=============================== */

* {
  box-sizing: border-box;
}

img {
  max-width: 100%;
  display: block;
}

/* prevent horizontal scroll */
body {
  overflow-x: hidden;
}

/* ===============================
   HERO SECTION
=============================== */

@media (max-width: 768px) {
  .slide-content {
    padding: 24px;
  }

  h1 {
    font-size: 32px;
    line-height: 1.3;
  }

  .subtitle {
    font-size: 15px;
  }

  .hero-rule {
    width: 100%;
  }
}

/* ===============================
   PROJECT HEADER
=============================== */

@media (max-width: 768px) {
  .projects-header {
    flex-direction: column;
    gap: 20px;
    padding: 32px 20px;
  }

  .projects-right {
    margin-left: 0 !important;
    font-size: 20px;
  }
}

/* ===============================
   CASE STUDY CARD
=============================== */

@media (max-width: 768px) {
  .case-study-card {
    flex-direction: column;
    margin: 0 20px 60px;
    padding: 16px;
  }

  .case-study-card .project-image img {
    width: 100%;
    height: auto;
  }

  .project-content h2 {
    font-size: 22px;
  }

  .project-content p {
    font-size: 15px;
  }
}

/* ===============================
   FILTER BAR
   =============================== */

@media (max-width: 768px) {
  .cs-toolbar-exact {
    flex-direction: column;
    align-items: stretch;
    gap: 20px;
    padding: 0 20px;
  }

  .cs-search-wrap {
    width: 100%;
  }

  .cs-filter-group {
    flex-direction: column;
    align-items: stretch;
    gap: 16px;
  }

  /* Ensure custom selects are full width on mobile */
  .custom-select,
  .cs-select-wrap {
    width: 100%;
  }

  .custom-select .select-selected {
    height: 50px;
    font-size: 16px;
    padding: 0 16px;
  }

  .custom-select .select-options {
    position: fixed;
    top: auto;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    border-radius: 20px 20px 0 0;
    max-height: 60vh;
    overflow-y: auto;
    z-index: 99999;
  }

  .custom-select .select-options div {
    padding: 16px 20px;
    font-size: 16px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }

  /* Prevent body scroll when dropdown open on mobile */
  body.dropdown-open {
    overflow: hidden;
  }

  .custom-select.active .select-selected::after {
    transform: rotate(180deg);
  }
}

/* ===============================
   GRID CARDS
=============================== */

@media (max-width: 768px) {
  .cs-grid {
    grid-template-columns: 1fr;
    padding: 20px;
  }

  .cs-card img {
    height: 220px;
  }
}

/* ===============================
   LATEST INSIGHTS SECTION
=============================== */

@media (max-width: 768px) {
  .tcz-cs2__section {
    padding: 60px 20px;
  }

  .tcz-cs2__wm-behind span {
    font-size: 80px;
  }

  .tcz-cs2__featured {
    margin-top: 40px;
  }

  .tcz-cs2__image-card {
    height: 260px;
  }

  .tcz-cs2__featured-overlay h2 {
    font-size: 18px;
  }

  .tcz-cs2__secondary {
    height: auto;
  }

  .tcz-cs2__text-card {
    flex-direction: column;
  }

  .tcz-cs2__card-img {
    width: 100%;
    height: 160px;
  }

  .tcz-cs2__bottom {
    flex-direction: column;
    gap: 20px;
  }
}

/* ===============================
   CTA SECTION
=============================== */

@media (max-width: 768px) {
  .pt-cta-content {
    padding: 40px 20px;
    text-align: center;
  }

  .pt-cta-heading {
    font-size: 24px;
  }

  .pt-cta-sub {
    font-size: 14px;
  }
}


@media (max-width: 768px) {
  .tcz-cs2__track {
    gap: 16px;
  }

  .tcz-cs2__text-card {
    flex: 0 0 100%;   /* 🔥 one card per view */
  }
}


.tcz-cs2__text-card > div {
    padding-top: 20px;           /* More space from top */
}

/* CUSTOM SELECT */
.custom-select {
  position: relative;
  width: 220px;
  font-size: 16px;
  cursor: pointer;
  z-index: 10000 !important;
}

/* Selected box */
.select-selected {
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 0 20px;
  border-radius: 16px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.18);

  color: #fff;
}

/* Arrow */
.select-selected::after {
  content: "▾";
  font-size: 14px;
  opacity: 0.7;
}

/* Dropdown */
.select-options {
  position: absolute;
  top: 110%;
  left: 0;
  width: 100%;

  background: rgba(20, 25, 60, 0.9);
  backdrop-filter: blur(10px);

  border-radius: 14px;
  border: 1px solid rgba(255,255,255,0.15);

  overflow: hidden;
  opacity: 0;
  transform: translateY(-10px);
  pointer-events: none;
  transition: all 0.25s ease;
  z-index: 99999 !important;
}

/* Show dropdown */
.custom-select.active .select-options {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

/* Options */
.select-options div {
  padding: 14px 18px;
  color: #fff;
  transition: all 0.2s ease;
}

/* Hover */
.select-options div:hover {
  background: rgba(255,255,255,0.08);
}

/* Active */
.select-options div.active {
  background: rgba(0, 202, 189, 0.2);
}

/* Smooth arrow rotation */
.select-selected::after {
  transition: transform 0.3s ease;
}

.custom-select.active .select-selected::after {
  transform: rotate(180deg);
}

/* Mobile bottom sheet dropdown */
@media (max-width: 768px) {
  .cs-toolbar-exact {
    /* Ensure stacking context for dropdowns */
    z-index: 1;
  }
  
  .custom-select .select-options {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    max-width: 100%;
    max-height: 70vh;
    border-radius: 20px 20px 0 0;
    border-top: 1px solid rgba(255,255,255,0.2);
    box-shadow: 0 -4px 20px rgba(0,0,0,0.3);
    
    /* Mobile hidden state */
    opacity: 0;
    transform: translateY(100%);
    pointer-events: none;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
  }

  .custom-select.active .select-options {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
  }

  /* Dark overlay when mobile dropdown open */
  body.dropdown-open::before {
    content: '';
    position: fixed;
    inset: 0;
    top: env(safe-area-inset-top, 0);
    left: env(safe-area-inset-left, 0);
    right: env(safe-area-inset-right, 0);
    bottom: env(safe-area-inset-bottom, 0);
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(4px);
    z-index: 99998;
    pointer-events: auto;
    animation: fadeIn 0.25s ease;
  }

  /* Lock body scroll when dropdown open */
  body.dropdown-open {
    overflow: hidden;
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .custom-select .select-options div {
    padding: 18px 24px;
    font-size: 17px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    min-height: 56px;
    display: flex;
    align-items: center;
  }

  .custom-select .select-options div:last-child {
    border-bottom: none;
  }

  /* Mobile option styling */
  .custom-select .select-options div {
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    user-select: none;
  }

   /* Enhanced touch target for mobile */
   .custom-select .select-selected {
     touch-action: manipulation;
     user-select: none;
     -webkit-tap-highlight-color: transparent;
   }
  
  /* Ensure selected option in dropdown is visually distinct */
  .custom-select .select-options div.active {
    background: rgba(0, 202, 189, 0.15);
    position: relative;
  }
  
  .custom-select .select-options div.active::after {
    content: '✓';
    position: absolute;
    right: 20px;
    font-weight: bold;
  }
}

.blog-hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 10px 10px;
    border-radius: 999px;
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.35);
    backdrop-filter: blur(8px);
    transition: all 0.3s ease;
}


 </style>

</head>
<body>
  <!-- Single unified glassmorphism background that spans the entire page -->
  <div class="page-background"></div>

  <!-- ================= HERO ================= -->

<div class="slider" id="slider">
  <div class="slide active">
    <img class="slide-bg" src="/images/case-study-bg-img.png" alt="">
    <div class="slide-overlay" ></div>
    
    <div class="slide-content">
        <p class="breadcrumb">WHAT WE DO / CASE STUDIES</p>
        <div class="hero-rule"></div>
        <h1>Secure Every Layer of Your Digital Enterprise</h1>
        <p class="subtitle">
            End-to-end cybersecurity services to detect, prevent, and respond to threats 
            across network, cloud, endpoint, and identity layers.
        </p>
    </div>
</div>
</div>

<!-- ================= BELOW HERO ================= -->

<section>
  <div class="below-hero-image">

    <!-- CSS glassmorphism background applied via .below-hero-image class -->

      <div class="projects-header">
        <div class="projects-left">
          <p class="small-title">Recent Projects</p>
          <p class="small-subtitle">Successfully Delivered</p>
        </div>
        <div class="projects-right">
          Delivering successful projects worldwide, we build lasting
          <span style="opacity: 0.5;">partnership and drive measurable growth across industries.</span>
        </div>
      </div>

      <div class="case-study-card">
      <div class="project-image">
        <img src="/images/casestudyimg.jpg" alt="">
      </div>

      <div class="project-content">
        <span class="project-meta" style="font-family: 'Gilroy';">Dec 16, 2025, Tanner Pharma Group</span><br><br>
        <h2 style="font-family: 'Gilroy';">4 Years of Secure, Compliant Operations for a Global Pharma Leader</h2><br>
        <p style="font-family: 'Gilroy';">
         24/7 threat monitor manufacturing company faced a potential ransomware threat that could have disrupted production and compromised critical systems. By implementing proactive security measures—including real-time threat monitoring, endpoint protection, and strict access controls—the risk was quickly identified and contained. This approach ensured business continuity, safeguarded sensitive data, and strengthened the organization’s overall cybersecurity posture against future attacks and rapid response helped prevent ransomware, avoiding downtime and protecting critical business data.
        </p><br><br><br>
        <a href="https://teal-mule-553916.hostingersite.com/case_study_details_page.php" class="read-blog" style="color:rgb(2, 146, 134);">Read Casestudy →</a>
      </div>
    </div>

  </div>
</section>


<section>
  <div class="below-hero-image">

    <!-- CSS glassmorphism background applied via class -->

    <!-- FILTER BAR -->
    <div class="cs-toolbar-exact">
      <div class="cs-search-wrap">
        <input type="text" id="searchInput" class="cs-search-input" placeholder="Search" />
        <div class="cs-search-icon">
          <img src="images/MagnifyingGlass.png">
        </div>
      </div>

      <div class="cs-filter-group">
        <div class="cs-filter-block">
          <span class="cs-filter-label">Filter By Services</span>
          <div class="cs-select-wrap">
            <div class="custom-select" id="serviceFilter">
  <div class="select-selected">All Services</div>
  <div class="select-options">
    <div data-value="all">All Services</div>
    <div data-value="digital">Digital Workspace</div>
    <div data-value="cybersecurity">Cybersecurity</div>
    <div data-value="cloud">Cloud</div>
  </div>
</div>
          </div>
        </div>

        <div class="cs-filter-block">
          <span class="cs-filter-label">Sort By</span>
          <div class="cs-select-wrap">
            <div class="custom-select" id="sortFilter">
              <div class="select-selected">Most Recent</div>
              <div class="select-options">
                <div data-value="recent">Most Recent</div>
                <div data-value="oldest">Oldest</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 3x3 CARDS GRID -->
    <div class="cs-grid" id="csGrid">
    </div>

    <!-- View More -->
    <div class="view-more">
      <a href="https://teal-mule-553916.hostingersite.com/case_study_details_page.php" class="blog-hero-btn">
        <span class="blog-hero-btn-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </span>
        View More Cases
      </a>
    </div>

  </div>
</section>
  



  <section class="tcz-cs2__section">

  <!-- WATERMARK -->
  <div class="tcz-cs2__wm-behind" aria-hidden="true">
    <span>latest insights</span>
    <span>latest insights</span>
    <span>latest insights</span>
  </div>

  <!-- MAIN -->
  <div class="tcz-cs2__container">

    <!-- FEATURED -->
    <div class="tcz-cs2__featured">
  <div class="tcz-cs2__image-card">

    <div class="tcz-cs2__image-wrap">
      <img src="/images/7e918f4cfdd3d7be90750ad889d461dc7652ee2e.jpg" class="tcz-cs2__featured-img">

      <div class="tcz-cs2__featured-overlay">
        <span class="cs-meta">Dec 16, 2025 · Cybersecurity</span>
        <h2>Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards</h2>
        <BR>
<div class="view-more-new">

          <a href="https://teal-mule-553916.hostingersite.com/case_study_details_page.php" class="blog-hero-btn">

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

            View All Insights

          </a>

        </div>
      </div>

      
    </div>

  </div>
</div>

    <!-- SECONDARY -->
    <div class="tcz-cs2__secondary">
      <div class="tcz-cs2__track">
        <!-- Cards will be populated by JS -->
      </div>
    </div>

    <!-- BOTTOM BAR -->
    <div class="tcz-cs2__bottom">
     <div class="tcz-cs2__counter">
  <span id="tczCs2Current">01</span>
  <span class="tcz-cs2__divider">/</span>
  <span id="tczCs2Total">05</span>
</div>


      <div class="tcz-cs2__nav">
        <button id="tczCs2Prev">‹</button>
        <button id="tczCs2Next">›</button>
      </div>
    </div>

  </div>
</section>

<section class="pt-section">

 

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

            Talk to our team

          </a>
    </div>

  </div>

</section>

</body>
<?php include 'footer.php'; ?>
<script>
const cs2Slides = [
  {
    img: "/images/Frame 138.png",
    date: "Dec 16, 2025 · Cybersecurity",
    title: "How Managed IT Services Improve Business Continuity"
  },
  {
    img: "/images/Frame 138 (1).png",
    date: "Dec 18, 2025 · Cloud",
    title: "Cybersecurity Forecast 2026: New Threats and How to Stay Ahead"
  },
  {
    img: "/images/about.png",
    date: "Dec 20, 2025 · Digital Workspace",
    title: "Modern Workplace Transformation"
  },
  {
    img: "/images/Frame 138 (1).png",
    date: "Dec 18, 2025 · Cloud",
    title: "Cybersecurity Forecast 2026: New Threats and How to Stay Ahead"
  },
  {
    img: "/images/about.png",
    date: "Dec 20, 2025 · Digital Workspace",
    title: "Modern Workplace Transformation"
  }
];

let currentIndex = 0;
const totalSlides = cs2Slides.length;

const track = document.querySelector('.tcz-cs2__track');
const currentEl = document.getElementById('tczCs2Current');
const totalEl = document.getElementById('tczCs2Total');
const prevBtn = document.getElementById('tczCs2Prev');
const nextBtn = document.getElementById('tczCs2Next');

function updateTotal() {
  const isMobile = window.innerWidth <= 768;
  const visibleCards = isMobile ? 1 : 2;
  const totalPositions = Math.max(1, cs2Slides.length - visibleCards + 1);
  

  
  totalEl.textContent = String(totalPositions).padStart(2, '0');
}

updateTotal();

// Debounced resize handler
let resizeTimeout;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {

    updateTotal();
    goTo(currentIndex);
  }, 250);
});

// Initial call
updateTotal();



// Initialize track with all cards
function initTrack() {
  track.innerHTML = cs2Slides.map(item => `
    <div class="tcz-cs2__text-card">
      <img src="${item.img}" class="tcz-cs2__card-img" alt="">
      <div>
        <span class="cs-meta">${item.date}</span><br><br>
        <h3>${item.title}</h3><br><br>
        <a href="https://teal-mule-553916.hostingersite.com/blog.php">View All News →</a>
      </div>
    </div>
  `).join('');
}

// Update position - swipe FULL one card (50%)
function goTo(index) {
  const isMobile = window.innerWidth <= 768;
  const visibleCards = isMobile ? 1 : 2;

  // 🔥 max slides based on device
  const maxIndex = cs2Slides.length - visibleCards;

  currentIndex = Math.max(0, Math.min(index, maxIndex));



  // 🔥 move full width on mobile
  const offset = isMobile
    ? -currentIndex * 100   // ✅ FULL CARD swipe
    : -currentIndex * 50;   // desktop (2 cards)

  track.style.transform = `translateX(${offset}%)`;

  // Ensure current never exceeds total
  const displayCurrent = Math.min(currentIndex + 1, parseInt(totalEl.textContent));
  currentEl.textContent = String(displayCurrent).padStart(2, '0');
  
  // Disable buttons at ends
  prevBtn.disabled = currentIndex === 0;
  nextBtn.disabled = currentIndex >= maxIndex;
}

// Event listeners
nextBtn.addEventListener('click', () => goTo(currentIndex + 1));
prevBtn.addEventListener('click', () => goTo(currentIndex - 1));

// Touch swipe
let startX = 0;
track.addEventListener('touchstart', e => {
  startX = e.touches[0].clientX;
});
track.addEventListener('touchend', e => {
  const endX = e.changedTouches[0].clientX;
  const diff = startX - endX;
  if (Math.abs(diff) > 50) {
    goTo(diff > 0 ? currentIndex + 1 : currentIndex - 1);
  }
});

// Keyboard
document.addEventListener('keydown', e => {
  if (e.key === 'ArrowLeft') goTo(currentIndex - 1);
  if (e.key === 'ArrowRight') goTo(currentIndex + 1);
});

// Auto swipe secondary cards every 3 seconds
let autoSwipeTimer = null;
let isUserInteracting = false;

function startAutoSwipe() {
  stopAutoSwipe();
  autoSwipeTimer = setInterval(() => {
    if (isUserInteracting) return;

    const isMobile = window.innerWidth <= 768;
    const visibleCards = isMobile ? 1 : 2;

    // last position allowed
    const maxIndex = cs2Slides.length - visibleCards;

    // 🔁 loop back to start when finished
    if (currentIndex >= maxIndex) {
      goTo(0);
    } else {
      goTo(currentIndex + 1);
    }
  }, 3000);
}

function stopAutoSwipe() {
  if (autoSwipeTimer) {
    clearInterval(autoSwipeTimer);
    autoSwipeTimer = null;
  }
}

track.addEventListener('touchstart', () => {
  isUserInteracting = true;
});
track.addEventListener('touchend', () => {
  isUserInteracting = false;
});

nextBtn.addEventListener('click', () => {
  isUserInteracting = true;
  setTimeout(() => (isUserInteracting = false), 1000);
  goTo(currentIndex + 1);
});
prevBtn.addEventListener('click', () => {
  isUserInteracting = true;
  setTimeout(() => (isUserInteracting = false), 1000);
  goTo(currentIndex - 1);
});

document.addEventListener('visibilitychange', () => {
  if (document.hidden) stopAutoSwipe();
  else startAutoSwipe();
});

// Init
initTrack();
goTo(0);
startAutoSwipe();
</script>
<!-- <script src="/assets/script.js"></script> -->

<script>
const caseStudies = [
  {
    image: "/images/about.png",
    date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677.png",
     date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (8).png",
    date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (7).png",
    date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (6).png",
     date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (5).png",
     date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (4).png",
    date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (3).png",
     date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  },
  {
    image: "/images/Frame 1566662677 (2).png",
     date: "2025-12-16",
    displayDate: "Dec 16, 2025",
    service: "cybersecurity",
    title: "IT Budget Planning 2026: A Simplified Guide for Tech Leaders",
    link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
  }
];
</script>

<script>
function renderCaseStudies(data) {
  const grid = document.getElementById("csGrid");
  grid.innerHTML = "";

  data.forEach(item => {
    const card = document.createElement("article");
    card.className = "cs-card";
    card.dataset.service = item.service;
    card.dataset.date = item.date;

    card.innerHTML = `
      <img src="${item.image}" alt="">
      <div class="cs-card-content">
        <span class="cs-meta">${item.displayDate} · ${item.service.charAt(0).toUpperCase() + item.service.slice(1)}</span>
        <br><br>
        <h2>${item.title}</h2>
        <br>
        <a href="${item.link}">Read Case Study →</a>
      </div>
    `;

    grid.appendChild(card);
  });
}
</script>

<script>
// ====================
// DROPDOWN ELEMENTS
// ====================
const serviceFilter = document.querySelector('#serviceFilter');
const serviceSelected = serviceFilter.querySelector('.select-selected');
const serviceOptions = serviceFilter.querySelectorAll('.select-options div');

const sortFilter = document.querySelector('#sortFilter');
const sortSelected = sortFilter.querySelector('.select-selected');
const sortOptions = sortFilter.querySelectorAll('.select-options div');

const searchInput = document.getElementById('searchInput');

// ====================
// SERVICE FILTER DROPDOWN
// ====================
serviceSelected.addEventListener('click', () => {
  serviceFilter.classList.toggle('active');
  // Close other dropdowns
  sortFilter.classList.remove('active');
  toggleBodyScroll(serviceFilter.classList.contains('active'));
});

serviceOptions.forEach(option => {
  option.addEventListener('click', () => {
    serviceSelected.textContent = option.textContent;
    serviceOptions.forEach(o => o.classList.remove('active'));
    option.classList.add('active');
    serviceFilter.classList.remove('active');
    toggleBodyScroll(false);
    applyFiltersAndSort();
  });
});

// ====================
// SORT DROPDOWN
// ====================
sortSelected.addEventListener('click', () => {
  sortFilter.classList.toggle('active');
  // Close other dropdowns
  serviceFilter.classList.remove('active');
  toggleBodyScroll(sortFilter.classList.contains('active'));
});

sortOptions.forEach(option => {
  option.addEventListener('click', () => {
    sortSelected.textContent = option.textContent;
    sortOptions.forEach(o => o.classList.remove('active'));
    option.classList.add('active');
    sortFilter.classList.remove('active');
    toggleBodyScroll(false);
    applyFiltersAndSort();
  });
});

// ====================
// BODY SCROLL LOCK (MOBILE)
// ====================
function toggleBodyScroll(lock) {
  if (lock) {
    document.body.classList.add('dropdown-open');
  } else {
    document.body.classList.remove('dropdown-open');
  }
}

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
  if (!serviceFilter.contains(e.target)) {
    serviceFilter.classList.remove('active');
    toggleBodyScroll(false);
  }
  if (!sortFilter.contains(e.target)) {
    sortFilter.classList.remove('active');
    toggleBodyScroll(false);
  }
});

// Close on escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    serviceFilter.classList.remove('active');
    sortFilter.classList.remove('active');
    toggleBodyScroll(false);
  }
});

// ====================
// SEARCH FUNCTIONALITY
// ====================
searchInput.addEventListener('input', applyFiltersAndSort);

// ====================
// FILTER + SORT LOGIC
// ====================
function applyFiltersAndSort() {
  const activeServiceOption = [...serviceOptions].find(o =>
    o.classList.contains("active")
  );
  const serviceFilterValue = activeServiceOption
    ? activeServiceOption.dataset.value
    : "all";

  const activeSortOption = [...sortOptions].find(o =>
    o.classList.contains("active")
  );
  const sortValue = activeSortOption
    ? activeSortOption.dataset.value
    : "recent";

  const searchTerm = searchInput.value.toLowerCase();

  let filtered = caseStudies.filter(item => {
    const matchesService =
      serviceFilterValue === "all" || item.service === serviceFilterValue;

    const matchesSearch =
      item.title.toLowerCase().includes(searchTerm);

    return matchesService && matchesSearch;
  });

  filtered.sort((a, b) => {
    const dA = new Date(a.date);
    const dB = new Date(b.date);
    return sortValue === "recent" ? dB - dA : dA - dB;
  });

  renderCaseStudies(filtered);
}

// ====================
// INITIALIZATION
// ====================
// Set initial active states
serviceOptions.forEach(opt => {
  if (opt.textContent.trim() === serviceSelected.textContent.trim()) {
    opt.classList.add('active');
  }
});
sortOptions.forEach(opt => {
  if (opt.textContent.trim() === sortSelected.textContent.trim()) {
    opt.classList.add('active');
  }
});

renderCaseStudies(caseStudies);
applyFiltersAndSort();
</script>





</html>