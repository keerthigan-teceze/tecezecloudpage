<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter", sans-serif;
            scroll-behavior: smooth;
        }
        /* Case Studies Images */
        
        .case-studies-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: stretch;
            min-height: 520px;
            will-change: transform, opacity;
        }
        
        .case-left-card {
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 40px;
        }
        
        .case-left-tag {
            font-size: 12px;
            text-transform: uppercase;
            color: #9ca3af;
            letter-spacing: 0.08em;
            margin-bottom: 14px;
        }
        
        .case-left-title {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.4;
            color: #111827;
            max-width: 520px;
        }
        
        .case-right-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            min-height: 520px;
        }
        
        .case-right-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .case-right-card:hover img {
            transform: scale(1.04);
        }
        
        .case-right-content {
            position: absolute;
            bottom: 40px;
            left: 40px;
            right: 40px;
            z-index: 2;
        }
        
        .case-right-tag {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 12px;
        }
        
        .case-right-title {
            color: white;
            font-size: 28px;
            font-weight: 700;
            line-height: 1.4;
            max-width: 400px;
        }
        /* CASE STUDY BUTTONS */
        
        .case-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            border: 1.5px solid rgba(17, 24, 39, 0.6);
            border-radius: 999px;
            padding: 10px 20px 10px 10px;
            font-size: 14px;
            font-weight: 600;
            color: #111827;
            background: transparent;
            transition: all 0.35s ease;
            width: fit-content;
        }
        
        .case-btn:hover {
            transform: translateY(-2px);
            border-color: #13c5b8;
        }
        
        .case-btn-icon {
            width: 34px;
            height: 34px;
            border-radius: 999px;
            background: linear-gradient(135deg, #13c5b8, #1d4ed8);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .case-btn-icon svg {
            width: 16px;
            height: 16px;
            color: white;
        }
        /* WHITE BUTTON VERSION */
        
        .case-btn-white {
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
        }
        
        .case-btn-white:hover {
            border-color: #13c5b8;
            background: rgba(255, 255, 255, 0.06);
        }
        
        .case-animate-next {
            animation: slideNext 0.7s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .case-animate-prev {
            animation: slidePrev 0.7s cubic-bezier(0.22, 1, 0.36, 1);
        }
        /* NEXT → right to left */
        
        @keyframes slideNext {
            from {
                opacity: 0;
                transform: translateX(80px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        /* PREV → left to right */
        
        @keyframes slidePrev {
            from {
                opacity: 0;
                transform: translateX(-80px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @media (max-width: 768px) {
            .case-studies-wrapper {
                grid-template-columns: 1fr;
            }
            .case-left-title,
            .case-right-title {
                font-size: 24px;
            }
        }
        /* Case Studies Images */
        
        .bg-hero-overlay {
            background: linear-gradient( to right, rgba(2, 38, 70, 0.92), rgba(2, 38, 70, 0.45)), url("images/education-hero-bg.png");
            background-size: cover;
            background-position: center;
        }
        
        .bg-grid {
            background-size: 80px 80px;
            background-image: linear-gradient( to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px), linear-gradient( to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }
        
        .glass-card {
            /* background: linear-gradient( 135deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.06));
            backdrop-filter: blur(12px); */
            /* transition: all 0.4s ease; */
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: linear-gradient( 135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.04));
            backdrop-filter: blur(10px);
            transition: background 0.5s ease, border-color 0.5s ease;
        }
        /* CAPABILITIES SECTION FIX */
        
        .capabilities-carousel {
            position: relative;
            z-index: 20;
        }
        
        .capability-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1), border-color 0.6s ease, background 0.6s ease, box-shadow 0.6s ease;
            will-change: transform;
        }
        /* PREMIUM HOVER EFFECT */
        
        .capability-card:hover {
            transform: translateY(-10px);
            border: 1px solid #2559ca;
            /* box-shadow: 0 0 0 1px rgba(34, 211, 238, 0.25), 0 30px 80px rgba(0, 119, 255, 0.28); */
        }
        /* Animated Glow Layer */
        
        .capability-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient( 180deg, rgba(0, 255, 255, 0.06), rgba(0, 20, 60, 0.4));
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 1;
        }
        
        .capability-card:hover::before {
            opacity: 1;
        }
        /* Bottom Cyan Glow */
        
        .capability-card::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 140px;
            background: linear-gradient( to top, rgba(0, 255, 255, 0.18), transparent);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 1;
        }
        
        .capability-card:hover::after {
            opacity: 1;
        }
        
        .capability-card h3,
        .capability-card p,
        .capability-card svg {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }
        
        .capability-card:hover h3,
        .capability-card:hover p,
        .capability-card:hover svg {
            transform: translateY(-4px);
        }
        
        .capability-card img {
            transition: transform 0.8s ease, filter 0.8s ease, opacity 0.8s ease;
        }
        
        .capability-card:hover img {
            filter: blur(2px);
            opacity: 0.4;
        }
        
        .capability-card .group-hover\:opacity-100 h3 {
            letter-spacing: -0.02em;
        }
        
        .capability-card .group-hover\:opacity-100 p {
            transition: all 0.5s ease;
        }
        /* FUTURISTIC OUTLINE SHAPES */
        
        .capability-outline-svg path {
            filter: drop-shadow(0 0 8px rgba(0, 200, 255, 0.5));
        }
        
        .glass-card:hover {
            background: linear-gradient( 135deg, rgba(38, 95, 145, 0.85), rgba(24, 30, 72, 0.95));
            border-color: rgba(0, 255, 255, 0.5);
        }
        
        @media (max-width: 640px) {
            .glass-card {
                padding: 1.5rem;
                border-radius: 1rem;
            }
            header {
                padding-top: 1.5rem;
            }
        }
        
        .quote-mark {
            font-size: clamp(2rem, 15vw, 18rem);
            line-height: 0;
            color: rgba(255, 255, 255, 0.05);
            user-select: none;
            max-width: 200px;
        }
        
        .text-outline {
            -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button {
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateX(2px);
        }
        /* Testimonial Carousel Styles */
        
        .testimonial-slide {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        
        .testimonial-slide.active {
            opacity: 1;
            position: relative;
        }
        
        .testimonial-slide.hidden {
            display: none;
        }
        
        .testimonial-image {
            transition: opacity 0.3s ease-in-out;
        }
        
        .testimonial-counter span:first-child {
            transition: all 0.3s ease;
        }
        /* Insights Carousel Styles */
        
        .insights-slide {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        
        .insights-slide.active {
            opacity: 1;
            position: relative;
        }
        
        .insights-slide.hidden {
            display: none;
        }
        
        .insights-image {
            transition: opacity 0.3s ease-in-out;
        }
        
        .insights-counter span:first-child {
            transition: all 0.3s ease;
        }
        
        .marquee-wrapper {
            overflow: hidden;
            background: white;
        }
        
        .marquee-content {
            display: flex;
            animation: scroll 25s linear infinite;
            gap: 3rem;
        }
        
        .marquee-content:hover {
            animation-play-state: paused;
        }
        
        .marquee-item {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            min-width: fit-content;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        @media (max-width: 768px) {
            body,
            html {
                width: 100%;
                overflow-x: hidden;
            }
        }
        
        @media (max-width: 640px) {
            * {
                box-sizing: border-box;
            }
            body {
                overflow-x: hidden;
            }
            h1 {
                font-size: clamp(1.5rem, 6vw, 3rem) !important;
            }
            h2 {
                font-size: clamp(1rem, 5vw, 2.25rem) !important;
            }
            h3 {
                font-size: clamp(0.875rem, 4vw, 1.5rem) !important;
            }
            p {
                font-size: clamp(0.75rem, 2vw, 1rem) !important;
            }
            section {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .bg-hero-overlay {
                background-attachment: scroll !important;
            }
        }
        
        @media (hover: none) and (pointer: coarse) {
            button,
            a[role="button"],
            .cta-button {
                min-height: 44px !important;
                min-width: 44px !important;
                padding: 0.75rem 1rem !important;
            }
        }
    </style>
</head>

<body class="text-white bg-[#000A2D]">
    <header class="relative min-h-screen flex flex-col justify-center bg-hero-overlay bg-cover bg-center px-4 sm:px-6 md:px-8 lg:px-20 py-12 sm:py-20 overflow-hidden">
        <div class="mb-6 sm:mb-8">
            <p class="text-xs font-semibold tracking-widest uppercase mb-2 opacity-75 text-gray-200 relative z-10">
                Who we Serve / healthcare
            </p>
            <div class="w-full h-0.5 border-b to-transparent"></div>
        </div>
        <div class="max-w-6xl mt-3 relative z-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6 tracking-tight">
                Precision IT for Healthcare <br />
                <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">That Can’t Afford Delays.</span
          >
        </h1>
        <p
          class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light"
        >
          Engineered to ensure uninterrupted care through resilient, secure IT
          environments built for critical healthcare operations.
        </p>

        <a
          href="#"
          class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden"
        >
          <span
            class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-3 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M14 5l7 7m0 0l-7 7m7-7H3"
              />
            </svg>
          </span>

                <span class="text-white font-semibold z-10 transition-colors duration-300 text-sm pr-4 md:text-md md:pr-8 lg:text-lg">
            Connect With Us
          </span>
                </a>
        </div>

        <svg class="hidden sm:block absolute left-0 top-0 z-0 w-auto md:h-full" width="685" height="900" viewBox="0 0 685 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin slice">
        <g opacity="0.65" filter="url(#filter0_f_3527_28748)">
          <path
            d="M362.732 635.417C344.875 685.902 274.983 697.032 214.127 683.911C153.27 670.79 101.45 633.418 45.1692 610.573C-11.1113 587.728 -71.3265 580.559 -91.2681 544.574C-111.21 508.59 -90.3522 444.938 -98.2224 386.784C-106.093 328.63 -143.839 276.499 -134.1 240.132C-124.05 202.928 -67.3515 181.177 -16.9823 178.97C33.3868 176.763 77.4267 194.101 124.395 167.777C170.838 140.305 221.883 69.7941 273.053 52.6508C325.372 34.9825 378.964 70.1572 396.956 121.603C415.26 172.213 397.126 238.783 375.61 288.859C354.931 339.247 332.016 372.617 337.492 434.64C344.116 496.139 379.441 585.456 362.732 635.417Z"
            fill="url(#paint0_linear_3527_28748)"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_3527_28748"
            x="-415.695"
            y="-231.968"
            width="1100.19"
            height="1200.94"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend
              mode="normal"
              in="SourceGraphic"
              in2="BackgroundImageFix"
              result="shape"
            />
            <feGaussianBlur
              stdDeviation="140"
              result="effect1_foregroundBlur_3527_28748"
            />
          </filter>
          <linearGradient
            id="paint0_linear_3527_28748"
            x1="-238.004"
            y1="518.439"
            x2="566.366"
            y2="174.299"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#00CABD" />
            <stop offset="1" stop-color="#0037A6" />
          </linearGradient>
        </defs>
      </svg>

        <svg class="hidden sm:block absolute right-0 top-0 z-0 w-auto md:h-full" width="604" height="900" viewBox="0 0 604 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMaxYMin slice">
        <g opacity="0.65" filter="url(#filter0_f_3527_28718)">
          <path
            d="M729.638 775.7C687.706 822.187 607.276 802.876 547.481 761.441C487.686 720.005 448.527 656.445 398.035 606.565C347.542 556.686 285.769 521.961 280.395 474.185C275.021 426.409 326.099 367.056 343.703 300.762C361.307 234.468 343.962 161.286 370.795 126.398C398.339 90.7474 469.296 92.6807 524.651 112.873C580.006 133.064 619.758 171.515 682.266 164.152C744.722 155.315 831.46 102.088 894.383 106.517C958.781 110.895 1000.84 172.878 997.169 236.468C994.211 299.295 944.764 363.019 899.067 407.424C854.134 452.541 814.427 478.288 792.501 547.686C772.051 617.031 770.094 729.264 729.638 775.7Z"
            fill="url(#paint0_linear_3527_28718)"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_3527_28718"
            x="0"
            y="-181.534"
            width="1277.39"
            height="1264.24"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend
              mode="normal"
              in="SourceGraphic"
              in2="BackgroundImageFix"
              result="shape"
            />
            <feGaussianBlur
              stdDeviation="140"
              result="effect1_foregroundBlur_3527_28718"
            />
          </filter>
          <linearGradient
            id="paint0_linear_3527_28718"
            x1="133.749"
            y1="380.214"
            x2="1156.37"
            y2="369.766"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#00CABD" />
            <stop offset="1" stop-color="#0037A6" />
          </linearGradient>
        </defs>
      </svg>

        <div class="hidden md:grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 mt-8 sm:mt-10 mb-1 relative z-10">
            <div class="group">
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
                    320+
                </h2>
                <p class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm">
                    Supporting Financial Institutions Worldwide With Tailored Solutions.
                </p>
            </div>
            <div class="group">
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
                    185
                </h2>
                <p class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm">
                    Global Delivery Hubs Enabling Seamless Operations Worldwide.
                </p>
            </div>
            <div class="group">
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
                    33K+
                </h2>
                <p class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm">
                    Global Network Of Experts Driving Innovation And Compliance.
                </p>
            </div>
            <div class="group">
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
                    100+
                </h2>
                <p class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm">
                    Trusted By Leading Banks Delivering Impactful Solutions.
                </p>
            </div>
        </div>
    </header>
    <section class="bg-white flex items-center justify-center min-h-screen p-4 sm:p-6 md:p-12 lg:p-20">
        <div class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 xl:gap-20 items-center">
            <div class="relative group mx-auto">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-400/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <img src="images/education-about.png" class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl" />
            </div>

            <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
                <div class="text-sm sm:text-md md:text-2xl leading-[1.5] font-medium">
                    <span class="font-semibold text-[#011627]">Teceze delivers intelligent IT infrastructure for healthcare,
              enabling seamless system interoperability, secure patient data
              management, and uninterrupted clinical operations.</span
            >
            <span class="text-gray-500 font-medium block mt-4">
              IT disruptions are minimized, workflows are streamlined, and
              resilient digital ecosystems are established, enabling healthcare
              professionals to focus entirely on patient care.
            </span>
                </div>
            </div>
        </div>
    </section>
    <section class="min-h-screen relative flex items-center justify-center overflow-hidden">
        <!-- <svg class="absolute top-0 left-0" width="685 " height="883 " viewBox="0 0 685 883 " fill="none " xmlns="http://www.w3.org/2000/svg ">
        <g opacity="0.65 " filter="url(#filter0_f_1250_5814) ">
          <path
            d="M362.732 549.417C344.875 599.902 274.983 611.032 214.127 597.911C153.27 584.79 101.45 547.418 45.1692 524.573C-11.1113 501.728 -71.3265 494.559 -91.2681 458.574C-111.21 422.59 -90.3522 358.938 -98.2224 300.784C-106.093 242.63 -143.839
                    190.499 -134.1 154.132C-124.05 116.928 -67.3515 95.1766 -16.9823 92.9698C33.3868 90.763 77.4267 108.101 124.395 81.777C170.838 54.3053 221.883 -16.2059 273.053 -33.3492C325.372 -51.0175 378.964 -15.8428 396.956 35.6032C415.26 86.2131 397.126
                    152.783 375.61 202.859C354.931 253.247 332.016 286.617 337.492 348.64C344.116 410.139 379.441 499.456 362.732 549.417Z "
            fill="url(#paint0_linear_1250_5814) "
          />
        </g>
        <defs>
          <filter
            id="filter0_f_1250_5814 "
            x="-415.695 "
            y="-317.968 "
            width="1100.19 "
            height="1200.94 "
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB "
          >
            <feFlood flood-opacity="0 " result="BackgroundImageFix " />
            <feBlend
              mode="normal"
              in="SourceGraphic "
              in2="BackgroundImageFix "
              result="shape "
            />
            <feGaussianBlur
              stdDeviation="140 "
              result="effect1_foregroundBlur_1250_5814 "
            />
          </filter>
          <linearGradient
            id="paint0_linear_1250_5814 "
            x1="-238.004 "
            y1="432.439 "
            x2="566.366 "
            y2="88.2991 "
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#00CABD " />
            <stop offset="1 " stop-color="#0037A6 " />
          </linearGradient>
        </defs>
      </svg>

        <svg class="absolute right-0 bottom-0" width="691 " height="979 " viewBox="0 0 691 979 " fill="none " xmlns="http://www.w3.org/2000/svg ">
        <g opacity="0.65 " filter="url(#filter0_f_1250_5813) ">
          <path
            d="M774.316 1024.53C728.218 1075.64 639.795 1054.41 574.058 1008.85C508.322 963.302 465.271 893.425 409.762 838.589C354.252 783.753 286.339 745.578 280.431 693.054C274.524 640.531 330.677 575.279 350.031 502.398C369.384 429.517 350.316 349.062
                    379.815 310.708C410.096 271.515 488.105 273.64 548.96 295.838C609.816 318.036 653.518 360.308 722.237 352.213C790.899 342.499 886.257 283.982 955.432 288.851C1026.23 293.664 1072.47 361.806 1068.43 431.715C1065.18 500.786 1010.82 570.841
                    960.582 619.66C911.184 669.26 867.53 697.566 843.426 773.859C820.944 850.095 818.792 973.481 774.316 1024.53Z "
            fill="url(#paint0_linear_1250_5813) "
          />
        </g>
        <defs>
          <filter
            id="filter0_f_1250_5813 "
            x="0 "
            y="0 "
            width="1348.68 "
            height="1334.22 "
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB "
          >
            <feFlood flood-opacity="0 " result="BackgroundImageFix " />
            <feBlend
              mode="normal"
              in="SourceGraphic "
              in2="BackgroundImageFix "
              result="shape "
            />
            <feGaussianBlur
              stdDeviation="140 "
              result="effect1_foregroundBlur_1250_5813 "
            />
          </filter>
          <linearGradient
            id="paint0_linear_1250_5813 "
            x1="119.213 "
            y1="589.746 "
            x2="1243.46 "
            y2="578.259 "
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#00CABD " />
            <stop offset="1 " stop-color="#0037A6 " />
          </linearGradient>
        </defs>
      </svg> -->

        <div class="relative z-0 w-full px-4 lg:px-8 py-12 sm:py-16 md:py-20 bg-grid min-h-screen flex flex-col justify-center overflow-hidden">
            <svg class="capability-outline-svg absolute -top-32 -left-44 z-[1] pointer-events-none opacity-90 hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="685" height="883" viewBox="0 0 685 883" fill="none">
          <g opacity="0.65" filter="url(#filter0_f_3610_28785)">
            <path
              d="M362.732 549.417C344.875 599.902 274.983 611.032 214.127 597.911C153.27 584.79 101.45 547.418 45.1692 524.573C-11.1113 501.728 -71.3265 494.559 -91.2681 458.574C-111.21 422.59 -90.3522 358.938 -98.2224 300.784C-106.093 242.63 -143.839 190.499 -134.1 154.132C-124.05 116.928 -67.3515 95.1766 -16.9823 92.9698C33.3868 90.763 77.4267 108.101 124.395 81.777C170.838 54.3053 221.883 -16.2059 273.053 -33.3492C325.372 -51.0175 378.964 -15.8428 396.956 35.6032C415.26 86.2131 397.126 152.783 375.61 202.859C354.931 253.247 332.016 286.617 337.492 348.64C344.116 410.139 379.441 499.456 362.732 549.417Z"
              fill="url(#paint0_linear_3610_28785)"
            />
          </g>
          <defs>
            <filter
              id="filter0_f_3610_28785"
              x="-415.695"
              y="-317.968"
              width="1100.19"
              height="1200.94"
              filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB"
            >
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend
                mode="normal"
                in="SourceGraphic"
                in2="BackgroundImageFix"
                result="shape"
              />
              <feGaussianBlur
                stdDeviation="140"
                result="effect1_foregroundBlur_3610_28785"
              />
            </filter>
            <linearGradient
              id="paint0_linear_3610_28785"
              x1="-238.004"
              y1="432.439"
              x2="566.366"
              y2="88.2991"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#00CABD" />
              <stop offset="1" stop-color="#0037A6" />
            </linearGradient>
          </defs>
        </svg>

            <svg class="capability-outline-svg absolute right-[-120px] top-[120px] z-[1] opacity-90 pointer-events-none hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="691" height="979" viewBox="0 0 691 979" fill="none">
          <g opacity="0.65" filter="url(#filter0_f_3610_28784)">
            <path
              d="M774.316 1024.53C728.218 1075.64 639.795 1054.41 574.058 1008.85C508.322 963.302 465.271 893.425 409.762 838.589C354.252 783.753 286.339 745.578 280.431 693.054C274.524 640.531 330.677 575.279 350.031 502.398C369.384 429.517 350.316 349.062 379.815 310.708C410.096 271.515 488.105 273.64 548.96 295.838C609.816 318.036 653.518 360.308 722.237 352.213C790.899 342.499 886.257 283.982 955.432 288.851C1026.23 293.664 1072.47 361.806 1068.43 431.715C1065.18 500.786 1010.82 570.841 960.582 619.66C911.184 669.26 867.53 697.566 843.426 773.859C820.944 850.095 818.792 973.481 774.316 1024.53Z"
              fill="url(#paint0_linear_3610_28784)"
            />
          </g>
          <defs>
            <filter
              id="filter0_f_3610_28784"
              x="0"
              y="0"
              width="1348.68"
              height="1334.22"
              filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB"
            >
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend
                mode="normal"
                in="SourceGraphic"
                in2="BackgroundImageFix"
                result="shape"
              />
              <feGaussianBlur
                stdDeviation="140"
                result="effect1_foregroundBlur_3610_28784"
              />
            </filter>
            <linearGradient
              id="paint0_linear_3610_28784"
              x1="119.213"
              y1="589.746"
              x2="1243.46"
              y2="578.259"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#00CABD" />
              <stop offset="1" stop-color="#0037A6" />
            </linearGradient>
          </defs>
        </svg>

            <div class="absolute top-16 left-0 md:left-auto sm:top-10 w-full overflow-hidden select-none pointer-events-none z-0 md:mx-auto">
                <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="1300" height="500" viewBox="0 0 1440 500" fill="none">
            <foreignObject x="-14" y="-14" width="1468" height="527.312"
              ><div
                xmlns="http://www.w3.org/1999/xhtml"
                style="
                  backdrop-filter: blur(7px);
                  clip-path: url(#bgblur_0_3610_28815_clip_path);
                  height: 100%;
                  width: 100%;
                "
              ></div
            ></foreignObject>
            <g data-figma-bg-blur-radius="14">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M652.021 43.2461C665.235 43.2462 676.514 48.3855 685.857 58.6631C695.201 68.8073 699.872 81.2877 699.872 96.1035C699.872 110.919 695.201 123.466 685.857 133.743C676.514 143.887 665.235 148.96 652.021 148.96C639.208 148.96 629.264 144.888 622.189 136.746V186.199H592.157V46.0498H622.189V55.46C629.264 47.3179 639.208 43.2461 652.021 43.2461ZM646.015 71.6768C639.074 71.6768 633.334 73.8795 628.796 78.2842C624.391 82.6889 622.189 88.629 622.189 96.1035C622.19 103.578 624.391 109.517 628.796 113.922C633.334 118.327 639.074 120.529 646.015 120.529C652.955 120.529 658.628 118.327 663.033 113.922C667.571 109.517 669.84 103.578 669.84 96.1035C669.84 88.629 667.571 82.6889 663.033 78.2842C658.628 73.8795 652.955 71.6768 646.015 71.6768Z"
                fill="url(#paint0_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M53.0566 43.2461C67.8725 43.2461 80.4196 48.3854 90.6973 58.6631C100.975 68.8072 106.113 81.2878 106.113 96.1035C106.113 110.919 100.975 123.466 90.6973 133.743C80.4196 143.887 67.8725 148.96 53.0566 148.96C38.2408 148.96 25.6937 143.887 15.416 133.743C5.13863 123.466 0.000109381 110.919 0 96.1035C0 81.2878 5.13851 68.8072 15.416 58.6631C25.6937 48.3854 38.2408 43.2461 53.0566 43.2461ZM53.0566 72.4775C46.5163 72.4775 41.0434 74.6803 36.6387 79.085C32.2341 83.4896 30.0322 89.1629 30.0322 96.1035C30.0323 103.044 32.2343 108.717 36.6387 113.121C41.0434 117.526 46.5163 119.729 53.0566 119.729C59.597 119.729 65.0699 117.526 69.4746 113.121C73.879 108.717 76.081 103.044 76.0811 96.1035C76.0811 89.1629 73.8792 83.4896 69.4746 79.085C65.0699 74.6802 59.597 72.4775 53.0566 72.4775Z"
                fill="url(#paint1_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M151.731 103.11C151.731 108.983 153.333 113.522 156.536 116.726C159.873 119.795 164.078 121.33 169.149 121.33C174.889 121.33 179.428 119.594 182.765 116.124C186.101 112.654 187.77 107.515 187.77 100.708V46.0498H217.802V146.156H187.77V136.746C181.763 144.888 172.219 148.96 159.139 148.96C148.461 148.96 139.518 145.289 132.311 137.948C125.236 130.607 121.699 120.463 121.699 107.516V46.0498H151.731V103.11Z"
                fill="url(#paint2_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M412.034 43.2461C421.644 43.2461 430.454 45.5823 438.463 50.2539C446.605 54.9256 452.878 61.1324 457.283 68.874L431.055 84.0898C427.451 76.6154 420.977 72.8779 411.634 72.8779C405.094 72.878 399.688 75.0807 395.417 79.4854C391.146 83.7566 389.01 89.2962 389.01 96.1035C389.01 102.911 391.146 108.516 395.417 112.921C399.688 117.192 405.094 119.328 411.634 119.328C421.11 119.328 427.584 115.591 431.055 108.116L457.283 123.132C452.878 131.007 446.672 137.28 438.663 141.952C430.655 146.624 421.778 148.96 412.034 148.96C396.818 148.96 384.138 143.887 373.994 133.743C363.984 123.599 358.978 111.053 358.978 96.1035C358.978 81.1542 363.983 68.6071 373.994 58.4629C384.138 48.3188 396.818 43.2462 412.034 43.2461Z"
                fill="url(#paint3_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M510.26 43.2461C523.073 43.2461 533.018 47.3179 540.092 55.46V46.0498H570.124V146.156H540.092V136.746C533.018 144.888 523.073 148.96 510.26 148.96C497.046 148.96 485.767 143.887 476.424 133.743C467.081 123.466 462.409 110.919 462.409 96.1035C462.409 81.2877 467.081 68.8073 476.424 58.6631C485.767 48.3855 497.046 43.2462 510.26 43.2461ZM516.267 71.6768C509.192 71.6768 503.453 73.8795 499.048 78.2842C494.643 82.6889 492.441 88.629 492.441 96.1035C492.441 103.578 494.643 109.517 499.048 113.922C503.453 118.327 509.192 120.529 516.267 120.529C523.341 120.529 529.081 118.327 533.485 113.922C537.89 109.517 540.092 103.578 540.092 96.1035C540.092 88.629 537.89 82.6889 533.485 78.2842C529.081 73.8795 523.341 71.6768 516.267 71.6768Z"
                fill="url(#paint4_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M759.746 43.2461C772.56 43.2462 782.504 47.318 789.578 55.46V46.0498H819.61V146.156H789.578V136.746C782.504 144.888 772.56 148.96 759.746 148.96C746.532 148.96 735.253 143.887 725.909 133.743C716.566 123.466 711.895 110.919 711.895 96.1035C711.895 81.2878 716.566 68.8072 725.909 58.6631C735.253 48.3854 746.532 43.2461 759.746 43.2461ZM765.752 71.6768C758.678 71.6768 752.939 73.8796 748.534 78.2842C744.129 82.6889 741.927 88.6288 741.927 96.1035C741.927 103.578 744.13 109.517 748.534 113.922C752.939 118.326 758.678 120.529 765.752 120.529C772.826 120.529 778.566 118.327 782.971 113.922C787.375 109.517 789.578 103.578 789.578 96.1035C789.578 88.6289 787.375 82.6889 782.971 78.2842C778.566 73.8795 772.826 71.6768 765.752 71.6768Z"
                fill="url(#paint5_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M871.675 55.46C878.749 47.3179 888.693 43.2461 901.507 43.2461C914.721 43.2461 925.999 48.3855 935.343 58.6631C944.686 68.8073 949.358 81.2877 949.358 96.1035C949.358 110.919 944.686 123.466 935.343 133.743C925.999 143.887 914.721 148.96 901.507 148.96C888.693 148.96 878.749 144.888 871.675 136.746V146.156H841.643V6.00684H871.675V55.46ZM895.5 71.6768C888.559 71.6768 882.82 73.8796 878.282 78.2842C873.878 82.6889 871.675 88.6288 871.675 96.1035C871.675 103.578 873.878 109.517 878.282 113.922C882.82 118.326 888.559 120.529 895.5 120.529C902.441 120.529 908.114 118.327 912.519 113.922C917.057 109.517 919.326 103.578 919.326 96.1035C919.326 88.6289 917.057 82.6889 912.519 78.2842C908.114 73.8795 902.441 71.6768 895.5 71.6768Z"
                fill="url(#paint6_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1298.34 43.2461C1312.89 43.2461 1324.97 48.3187 1334.58 58.4629C1344.32 68.4736 1349.19 81.0207 1349.19 96.1035C1349.19 100.375 1348.79 104.379 1347.99 108.116H1276.92C1280.39 117.459 1288.4 122.131 1300.94 122.131C1309.08 122.131 1315.49 119.595 1320.16 114.522L1344.19 128.338C1334.31 142.086 1319.76 148.96 1300.54 148.96C1283.72 148.96 1270.24 143.954 1260.1 133.943C1250.09 123.933 1245.08 111.32 1245.08 96.1035C1245.08 81.0207 1250.02 68.4736 1259.9 58.4629C1269.91 48.3188 1282.72 43.2462 1298.34 43.2461ZM1298.14 69.875C1286.53 69.8751 1279.25 75.1479 1276.32 85.6924H1319.36C1316.43 75.1478 1309.35 69.875 1298.14 69.875Z"
                fill="url(#paint7_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1399.16 43.2461C1407.43 43.2461 1414.97 45.1152 1421.78 48.8525C1428.59 52.4563 1434.06 57.7285 1438.2 64.6689L1412.57 78.4844C1409.37 72.6114 1404.9 69.6748 1399.16 69.6748C1393.55 69.6749 1390.75 71.5433 1390.75 75.2803C1390.75 77.2824 1392.42 78.9514 1395.75 80.2861C1399.22 81.4874 1403.36 82.7551 1408.17 84.0898C1412.97 85.2911 1417.78 86.8934 1422.58 88.8955C1427.39 90.8977 1431.46 94.2347 1434.79 98.9062C1438.27 103.444 1440 109.184 1440 116.124C1440 126.936 1436 135.145 1427.99 140.751C1419.98 146.223 1410.1 148.96 1398.36 148.96C1377.27 148.96 1362.92 141.017 1355.31 125.134L1381.34 110.318C1384.01 118.193 1389.68 122.131 1398.36 122.131C1405.56 122.131 1409.17 120.062 1409.17 115.924C1409.17 113.922 1407.43 112.254 1403.96 110.919C1400.63 109.584 1396.55 108.316 1391.75 107.115C1386.94 105.78 1382.14 104.112 1377.33 102.109C1372.53 99.9738 1368.39 96.7035 1364.92 92.2988C1361.58 87.8942 1359.92 82.4886 1359.92 76.082C1359.92 65.6709 1363.65 57.5949 1371.13 51.8555C1378.73 46.1162 1388.08 43.2462 1399.16 43.2461Z"
                fill="url(#paint8_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1160.45 46.0498H1181.08V74.8799H1160.45V110.318C1160.45 114.323 1162.05 116.859 1165.26 117.927C1168.46 118.995 1173.73 119.328 1181.08 118.928V146.156C1161.99 148.158 1148.77 146.357 1141.43 140.751C1134.09 135.012 1130.42 124.867 1130.42 110.318V74.8799H1114.4V46.0498H1130.42V27.0293L1160.45 18.0195V46.0498Z"
                fill="url(#paint9_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M299.892 78.084C292.551 76.8827 285.676 78.1505 279.27 81.8877C272.996 85.4916 269.859 91.8318 269.859 100.908V146.156H239.827V46.0498H269.859V63.8682C271.728 57.4615 275.465 52.5898 281.071 49.2529C286.811 45.7826 293.084 44.0469 299.892 44.0469V78.084Z"
                fill="url(#paint10_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M996.418 146.156H966.386V46.0498H996.418V146.156Z"
                fill="url(#paint11_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1048.43 146.156H1018.39V0H1048.43V146.156Z"
                fill="url(#paint12_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1100.44 146.156H1070.4V46.0498H1100.44V146.156Z"
                fill="url(#paint13_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1228.11 146.156H1198.08V46.0498H1228.11V146.156Z"
                fill="url(#paint14_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M981.401 1.20117C986.34 1.20117 990.545 3.00356 994.016 6.60742C997.619 10.0777 999.421 14.2822 999.421 19.2207C999.421 24.1592 997.619 28.4304 994.016 32.0342C990.545 35.5046 986.34 37.2402 981.401 37.2402C976.463 37.2401 972.192 35.5045 968.588 32.0342C965.118 28.4304 963.383 24.1592 963.383 19.2207C963.383 14.2822 965.118 10.0778 968.588 6.60742C972.192 3.00367 976.463 1.20128 981.401 1.20117Z"
                fill="url(#paint15_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1085.42 1.20117C1090.36 1.20129 1094.56 3.00368 1098.03 6.60742C1101.64 10.0778 1103.44 14.2822 1103.44 19.2207C1103.44 24.1592 1101.64 28.4304 1098.03 32.0342C1094.56 35.5045 1090.36 37.2401 1085.42 37.2402C1080.48 37.2402 1076.21 35.5046 1072.61 32.0342C1069.14 28.4304 1067.4 24.1592 1067.4 19.2207C1067.4 14.2822 1069.14 10.0778 1072.61 6.60742C1076.21 3.00356 1080.48 1.20117 1085.42 1.20117Z"
                fill="url(#paint16_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1213.09 1.20117C1218.03 1.20117 1222.24 3.00366 1225.71 6.60742C1229.31 10.0778 1231.11 14.2821 1231.11 19.2207C1231.11 24.1593 1229.31 28.4303 1225.71 32.0342C1222.24 35.5045 1218.03 37.2402 1213.09 37.2402C1208.16 37.2402 1203.89 35.5045 1200.28 32.0342C1196.81 28.4304 1195.08 24.1593 1195.08 19.2207C1195.08 14.2822 1196.81 10.0778 1200.28 6.60742C1203.89 3.00362 1208.16 1.20123 1213.09 1.20117Z"
                fill="url(#paint17_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M652.021 199.733C665.235 199.733 676.514 204.871 685.857 215.149C695.201 225.293 699.872 237.773 699.872 252.589C699.872 267.405 695.201 279.952 685.857 290.23C676.514 300.374 665.235 305.445 652.021 305.446C639.208 305.446 629.264 301.375 622.189 293.233V342.686H592.157V202.535H622.189V211.946C629.264 203.804 639.208 199.733 652.021 199.733ZM646.015 228.163C639.074 228.163 633.334 230.365 628.796 234.77C624.391 239.175 622.189 245.115 622.189 252.589C622.189 260.064 624.391 266.004 628.796 270.408C633.334 274.813 639.074 277.015 646.015 277.015C652.955 277.015 658.628 274.813 663.033 270.408C667.571 266.004 669.84 260.064 669.84 252.589C669.84 245.115 667.571 239.175 663.033 234.77C658.628 230.365 652.955 228.163 646.015 228.163Z"
                fill="url(#paint18_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M53.0566 199.733C67.8725 199.733 80.4196 204.871 90.6973 215.149C100.975 225.293 106.113 237.773 106.113 252.589C106.113 267.405 100.975 279.952 90.6973 290.23C80.4196 300.374 67.8725 305.446 53.0566 305.446C38.2408 305.446 25.6937 300.374 15.416 290.23C5.13836 279.952 0 267.405 0 252.589C6.17459e-06 237.773 5.13835 225.293 15.416 215.149C25.6937 204.871 38.2408 199.733 53.0566 199.733ZM53.0566 228.964C46.5163 228.964 41.0434 231.166 36.6387 235.571C32.234 239.975 30.0322 245.648 30.0322 252.589C30.0322 259.53 32.234 265.203 36.6387 269.608C41.0434 274.012 46.5163 276.214 53.0566 276.214C59.597 276.214 65.0699 274.012 69.4746 269.608C73.8793 265.203 76.0811 259.53 76.0811 252.589C76.081 245.648 73.8793 239.975 69.4746 235.571C65.0699 231.166 59.597 228.964 53.0566 228.964Z"
                fill="url(#paint19_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M151.731 259.597C151.731 265.47 153.333 270.008 156.536 273.211C159.873 276.281 164.077 277.816 169.149 277.816C174.889 277.816 179.428 276.081 182.765 272.611C186.101 269.14 187.77 264.001 187.77 257.194V202.535H217.802V302.643H187.77V293.233C181.763 301.375 172.219 305.446 159.139 305.446C148.461 305.446 139.518 301.775 132.311 294.434C125.236 287.093 121.699 276.948 121.699 264.001V202.535H151.731V259.597Z"
                fill="url(#paint20_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M412.034 199.733C421.644 199.733 430.454 202.069 438.463 206.741C446.605 211.412 452.879 217.618 457.283 225.36L431.055 240.576C427.451 233.102 420.977 229.365 411.634 229.365C405.094 229.365 399.688 231.567 395.417 235.971C391.146 240.242 389.01 245.782 389.01 252.589C389.01 259.396 391.146 265.003 395.417 269.408C399.688 273.678 405.094 275.814 411.634 275.814C421.111 275.814 427.584 272.077 431.055 264.602L457.283 279.618C452.879 287.493 446.672 293.766 438.663 298.438C430.655 303.109 421.778 305.446 412.034 305.446C396.818 305.445 384.138 300.374 373.994 290.23C363.983 280.086 358.978 267.538 358.978 252.589C358.978 237.64 363.983 225.093 373.994 214.949C384.138 204.805 396.818 199.733 412.034 199.733Z"
                fill="url(#paint21_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M510.26 199.733C523.073 199.733 533.018 203.804 540.092 211.946V202.535H570.124V302.643H540.092V293.233C533.018 301.375 523.073 305.446 510.26 305.446C497.046 305.446 485.767 300.374 476.424 290.23C467.081 279.952 462.409 267.405 462.409 252.589C462.409 237.773 467.081 225.293 476.424 215.149C485.767 204.871 497.046 199.733 510.26 199.733ZM516.267 228.163C509.192 228.163 503.453 230.365 499.048 234.77C494.643 239.175 492.441 245.115 492.441 252.589C492.441 260.064 494.643 266.004 499.048 270.408C503.453 274.813 509.192 277.015 516.267 277.015C523.341 277.015 529.081 274.813 533.485 270.408C537.89 266.004 540.092 260.064 540.092 252.589C540.092 245.115 537.89 239.175 533.485 234.77C529.081 230.365 523.341 228.163 516.267 228.163Z"
                fill="url(#paint22_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M759.746 199.733C772.56 199.733 782.504 203.804 789.578 211.946V202.535H819.61V302.643H789.578V293.233C782.504 301.375 772.56 305.446 759.746 305.446C746.532 305.446 735.253 300.374 725.909 290.23C716.566 279.952 711.895 267.405 711.895 252.589C711.895 237.773 716.566 225.293 725.909 215.149C735.253 204.871 746.532 199.733 759.746 199.733ZM765.752 228.163C758.678 228.163 752.939 230.365 748.534 234.77C744.129 239.175 741.927 245.115 741.927 252.589C741.927 260.064 744.129 266.004 748.534 270.408C752.939 274.813 758.678 277.015 765.752 277.015C772.826 277.015 778.566 274.813 782.971 270.408C787.375 266.004 789.578 260.064 789.578 252.589C789.578 245.115 787.375 239.175 782.971 234.77C778.566 230.365 772.826 228.163 765.752 228.163Z"
                fill="url(#paint23_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M871.675 211.946C878.749 203.804 888.693 199.733 901.507 199.733C914.721 199.733 926 204.871 935.343 215.149C944.686 225.293 949.358 237.773 949.358 252.589C949.358 267.405 944.686 279.952 935.343 290.23C926 300.374 914.721 305.446 901.507 305.446C888.693 305.446 878.749 301.375 871.675 293.233V302.643H841.643V162.492H871.675V211.946ZM895.5 228.163C888.56 228.163 882.82 230.365 878.282 234.77C873.878 239.175 871.675 245.115 871.675 252.589C871.675 260.064 873.878 266.004 878.282 270.408C882.82 274.813 888.56 277.015 895.5 277.015C902.441 277.015 908.114 274.813 912.519 270.408C917.057 266.004 919.326 260.064 919.326 252.589C919.326 245.115 917.057 239.175 912.519 234.77C908.114 230.365 902.441 228.163 895.5 228.163Z"
                fill="url(#paint24_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1298.34 199.733C1312.89 199.733 1324.97 204.804 1334.58 214.949C1344.32 224.959 1349.19 237.506 1349.19 252.589C1349.19 256.86 1348.79 260.865 1347.99 264.602H1276.92C1280.39 273.945 1288.4 278.617 1300.94 278.617C1309.08 278.617 1315.49 276.081 1320.16 271.009L1344.19 284.824C1334.31 298.572 1319.76 305.446 1300.54 305.446C1283.72 305.446 1270.24 300.44 1260.1 290.43C1250.09 280.419 1245.08 267.805 1245.08 252.589C1245.08 237.506 1250.02 224.959 1259.9 214.949C1269.91 204.805 1282.72 199.733 1298.34 199.733ZM1298.14 226.361C1286.53 226.361 1279.25 231.634 1276.32 242.178H1319.36C1316.43 231.633 1309.35 226.361 1298.14 226.361Z"
                fill="url(#paint25_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1399.16 199.733C1407.43 199.733 1414.97 201.601 1421.78 205.338C1428.59 208.942 1434.06 214.215 1438.2 221.156L1412.57 234.97C1409.37 229.097 1404.9 226.16 1399.16 226.16C1393.55 226.161 1390.75 228.03 1390.75 231.767C1390.75 233.769 1392.42 235.437 1395.75 236.772C1399.22 237.973 1403.36 239.242 1408.17 240.576C1412.97 241.778 1417.78 243.379 1422.58 245.381C1427.39 247.383 1431.46 250.72 1434.79 255.392C1438.27 259.93 1440 265.67 1440 272.611C1440 283.422 1436 291.631 1427.99 297.237C1419.98 302.709 1410.1 305.446 1398.36 305.446C1377.27 305.446 1362.92 297.504 1355.31 281.62L1381.34 266.804C1384.01 274.679 1389.68 278.617 1398.36 278.617C1405.56 278.617 1409.17 276.548 1409.17 272.41C1409.17 270.408 1407.43 268.739 1403.96 267.405C1400.63 266.07 1396.55 264.802 1391.75 263.601C1386.94 262.266 1382.14 260.598 1377.33 258.596C1372.53 256.46 1368.39 253.19 1364.92 248.785C1361.58 244.381 1359.92 238.975 1359.92 232.568C1359.92 222.157 1363.65 214.082 1371.13 208.342C1378.73 202.603 1388.08 199.733 1399.16 199.733Z"
                fill="url(#paint26_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1160.45 202.535H1181.08V231.367H1160.45V266.804C1160.45 270.808 1162.05 273.345 1165.26 274.412C1168.46 275.48 1173.73 275.814 1181.08 275.413V302.643C1161.99 304.645 1148.77 302.843 1141.43 297.237C1134.09 291.497 1130.42 281.353 1130.42 266.804V231.367H1114.4V202.535H1130.42V183.515L1160.45 174.505V202.535Z"
                fill="url(#paint27_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M299.892 234.57C292.55 233.368 285.676 234.637 279.27 238.374C272.996 241.978 269.859 248.318 269.859 257.394V302.643H239.827V202.535H269.859V220.355C271.728 213.948 275.465 209.075 281.071 205.739C286.811 202.268 293.084 200.533 299.892 200.533V234.57Z"
                fill="url(#paint28_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M996.418 302.643H966.386V202.535H996.418V302.643Z"
                fill="url(#paint29_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1048.43 302.643H1018.39V156.487H1048.43V302.643Z"
                fill="url(#paint30_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1100.44 302.643H1070.4V202.535H1100.44V302.643Z"
                fill="url(#paint31_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1228.11 302.643H1198.08V202.535H1228.11V302.643Z"
                fill="url(#paint32_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M981.401 157.688C986.34 157.688 990.545 159.489 994.016 163.093C997.62 166.563 999.421 170.769 999.421 175.707C999.421 180.646 997.619 184.917 994.016 188.521C990.545 191.991 986.34 193.726 981.401 193.726C976.463 193.726 972.192 191.991 968.588 188.521C965.118 184.917 963.383 180.646 963.383 175.707C963.383 170.769 965.117 166.563 968.588 163.093C972.192 159.489 976.463 157.688 981.401 157.688Z"
                fill="url(#paint33_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1085.42 157.688C1090.36 157.688 1094.56 159.489 1098.03 163.093C1101.64 166.563 1103.44 170.769 1103.44 175.707C1103.44 180.646 1101.64 184.917 1098.03 188.521C1094.56 191.991 1090.36 193.726 1085.42 193.726C1080.48 193.726 1076.21 191.991 1072.61 188.521C1069.14 184.917 1067.4 180.646 1067.4 175.707C1067.4 170.769 1069.14 166.563 1072.61 163.093C1076.21 159.489 1080.48 157.688 1085.42 157.688Z"
                fill="url(#paint34_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1213.09 157.688C1218.03 157.688 1222.24 159.489 1225.71 163.093C1229.31 166.563 1231.11 170.769 1231.11 175.707C1231.11 180.646 1229.31 184.917 1225.71 188.521C1222.24 191.991 1218.03 193.726 1213.09 193.726C1208.16 193.726 1203.89 191.991 1200.28 188.521C1196.81 184.917 1195.08 180.646 1195.08 175.707C1195.08 170.769 1196.81 166.563 1200.28 163.093C1203.89 159.489 1208.16 157.688 1213.09 157.688Z"
                fill="url(#paint35_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M652.021 356.359C665.235 356.36 676.514 361.499 685.857 371.776C695.201 381.921 699.872 394.4 699.872 409.216C699.872 424.032 695.201 436.579 685.857 446.857C676.514 457.001 665.235 462.072 652.021 462.072C639.208 462.072 629.264 458.001 622.189 449.859V499.313H592.157V359.162H622.189V368.572C629.264 360.43 639.208 356.359 652.021 356.359ZM646.015 384.79C639.074 384.79 633.334 386.993 628.796 391.398C624.392 395.802 622.19 401.742 622.189 409.216C622.189 416.69 624.391 422.631 628.796 427.035C633.334 431.44 639.074 433.643 646.015 433.643C652.955 433.643 658.628 431.44 663.033 427.035C667.571 422.631 669.84 416.69 669.84 409.216C669.84 401.742 667.571 395.802 663.033 391.398C658.628 386.993 652.955 384.79 646.015 384.79Z"
                fill="url(#paint36_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M53.0566 356.359C67.8725 356.359 80.4196 361.499 90.6973 371.776C100.975 381.921 106.113 394.4 106.113 409.216C106.113 424.032 100.975 436.579 90.6973 446.857C80.4196 457.001 67.8725 462.072 53.0566 462.072C38.2408 462.072 25.6937 457.001 15.416 446.857C5.13844 436.579 0 424.032 0 409.216C5.64524e-05 394.4 5.13865 381.921 15.416 371.776C25.6937 361.499 38.2408 356.359 53.0566 356.359ZM53.0566 385.591C46.5163 385.591 41.0434 387.794 36.6387 392.198C32.2343 396.603 30.0323 402.275 30.0322 409.216C30.0322 416.157 32.2341 421.83 36.6387 426.234C41.0434 430.639 46.5163 432.842 53.0566 432.842C59.597 432.842 65.0699 430.639 69.4746 426.234C73.8792 421.83 76.0811 416.157 76.0811 409.216C76.081 402.275 73.879 396.603 69.4746 392.198C65.0699 387.794 59.597 385.591 53.0566 385.591Z"
                fill="url(#paint37_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M151.731 416.224C151.731 422.097 153.333 426.635 156.536 429.838C159.873 432.908 164.077 434.443 169.149 434.443C174.889 434.443 179.428 432.708 182.765 429.237C186.101 425.767 187.769 420.628 187.77 413.821V359.162H217.802V459.27H187.77V449.859C181.763 458.001 172.219 462.072 159.139 462.072C148.461 462.072 139.518 458.402 132.311 451.061C125.236 443.719 121.699 433.575 121.699 420.628V359.162H151.731V416.224Z"
                fill="url(#paint38_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M412.034 356.359C421.644 356.359 430.454 358.696 438.463 363.367C446.605 368.039 452.879 374.246 457.283 381.987L431.055 397.203C427.451 389.729 420.977 385.991 411.634 385.991C405.094 385.991 399.688 388.194 395.417 392.599C391.146 396.87 389.01 402.409 389.01 409.216C389.01 416.023 391.146 421.63 395.417 426.034C399.688 430.305 405.094 432.441 411.634 432.441C421.111 432.441 427.584 428.703 431.055 421.229L457.283 436.245C452.878 444.12 446.672 450.394 438.663 455.065C430.655 459.737 421.778 462.072 412.034 462.072C396.818 462.072 384.138 457 373.994 446.857C363.983 436.712 358.978 424.165 358.978 409.216C358.978 394.267 363.984 381.72 373.994 371.576C384.138 361.432 396.818 356.36 412.034 356.359Z"
                fill="url(#paint39_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M510.26 356.359C523.073 356.359 533.018 360.43 540.092 368.572V359.162H570.124V459.27H540.092V449.859C533.018 458.001 523.073 462.072 510.26 462.072C497.046 462.072 485.767 457.001 476.424 446.857C467.081 436.579 462.409 424.032 462.409 409.216C462.409 394.4 467.081 381.921 476.424 371.776C485.767 361.499 497.046 356.359 510.26 356.359ZM516.267 384.79C509.192 384.79 503.453 386.993 499.048 391.398C494.643 395.802 492.441 401.742 492.441 409.216C492.441 416.69 494.643 422.631 499.048 427.035C503.453 431.44 509.192 433.643 516.267 433.643C523.341 433.643 529.081 431.44 533.485 427.035C537.89 422.631 540.092 416.69 540.092 409.216C540.092 401.742 537.89 395.802 533.485 391.398C529.081 386.993 523.341 384.79 516.267 384.79Z"
                fill="url(#paint40_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M759.746 356.359C772.56 356.359 782.504 360.43 789.578 368.572V359.162H819.61V459.27H789.578V449.859C782.504 458.001 772.56 462.072 759.746 462.072C746.532 462.072 735.253 457.001 725.909 446.857C716.566 436.579 711.895 424.032 711.895 409.216C711.895 394.4 716.566 381.92 725.909 371.776C735.253 361.499 746.532 356.359 759.746 356.359ZM765.752 384.79C758.678 384.79 752.939 386.993 748.534 391.398C744.13 395.802 741.927 401.741 741.927 409.216C741.927 416.691 744.129 422.63 748.534 427.035C752.939 431.44 758.678 433.643 765.752 433.643C772.826 433.643 778.566 431.44 782.971 427.035C787.375 422.63 789.578 416.691 789.578 409.216C789.578 401.741 787.375 395.802 782.971 391.398C778.566 386.993 772.826 384.79 765.752 384.79Z"
                fill="url(#paint41_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M871.675 368.572C878.749 360.43 888.693 356.359 901.507 356.359C914.721 356.359 925.999 361.499 935.343 371.776C944.686 381.921 949.358 394.4 949.358 409.216C949.358 424.032 944.686 436.579 935.343 446.857C925.999 457.001 914.721 462.072 901.507 462.072C888.693 462.072 878.749 458.001 871.675 449.859V459.27H841.643V319.12H871.675V368.572ZM895.5 384.79C888.559 384.79 882.82 386.993 878.282 391.398C873.878 395.802 871.675 401.741 871.675 409.216C871.675 416.691 873.878 422.63 878.282 427.035C882.82 431.44 888.56 433.643 895.5 433.643C902.441 433.643 908.114 431.44 912.519 427.035C917.057 422.63 919.326 416.691 919.326 409.216C919.326 401.741 917.057 395.802 912.519 391.398C908.114 386.993 902.441 384.79 895.5 384.79Z"
                fill="url(#paint42_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1298.34 356.359C1312.89 356.359 1324.97 361.432 1334.58 371.576C1344.32 381.587 1349.19 394.133 1349.19 409.216C1349.19 413.487 1348.79 417.491 1347.99 421.229H1276.92C1280.39 430.572 1288.4 435.244 1300.94 435.244C1309.08 435.244 1315.49 432.708 1320.16 427.636L1344.19 441.45C1334.31 455.198 1319.76 462.072 1300.54 462.072C1283.72 462.072 1270.24 457.067 1260.1 447.057C1250.09 437.046 1245.08 424.432 1245.08 409.216C1245.08 394.133 1250.02 381.587 1259.9 371.576C1269.91 361.432 1282.72 356.36 1298.34 356.359ZM1298.14 382.988C1286.53 382.988 1279.25 388.26 1276.32 398.805H1319.36C1316.43 388.26 1309.35 382.988 1298.14 382.988Z"
                fill="url(#paint43_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1399.16 356.359C1407.43 356.359 1414.97 358.229 1421.78 361.966C1428.59 365.57 1434.06 370.842 1438.2 377.782L1412.57 391.598C1409.37 385.725 1404.9 382.788 1399.16 382.788C1393.55 382.788 1390.75 384.657 1390.75 388.394C1390.75 390.396 1392.42 392.065 1395.75 393.399C1399.22 394.601 1403.36 395.868 1408.17 397.203C1412.97 398.404 1417.78 400.007 1422.58 402.009C1427.39 404.011 1431.46 407.348 1434.79 412.02C1438.27 416.558 1440 422.297 1440 429.237C1440 440.049 1436 448.258 1427.99 453.864C1419.98 459.337 1410.1 462.072 1398.36 462.072C1377.27 462.072 1362.92 454.131 1355.31 438.247L1381.34 423.432C1384.01 431.306 1389.68 435.244 1398.36 435.244C1405.56 435.244 1409.17 433.175 1409.17 429.037C1409.17 427.035 1407.43 425.367 1403.96 424.032C1400.63 422.698 1396.55 421.429 1391.75 420.228C1386.94 418.893 1382.14 417.225 1377.33 415.223C1372.53 413.087 1368.39 409.817 1364.92 405.412C1361.58 401.007 1359.92 395.601 1359.92 389.194C1359.92 378.783 1363.65 370.708 1371.13 364.969C1378.73 359.229 1388.08 356.359 1399.16 356.359Z"
                fill="url(#paint44_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1160.45 359.162H1181.08V387.993H1160.45V423.432C1160.45 427.436 1162.05 429.971 1165.26 431.039C1168.46 432.107 1173.73 432.441 1181.08 432.04V459.27C1161.99 461.272 1148.77 459.47 1141.43 453.864C1134.09 448.125 1130.42 437.98 1130.42 423.432V387.993H1114.4V359.162H1130.42V340.143L1160.45 331.133V359.162Z"
                fill="url(#paint45_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M299.892 391.197C292.551 389.996 285.676 391.264 279.27 395.001C272.996 398.605 269.859 404.945 269.859 414.022V459.27H239.827V359.162H269.859V376.982C271.728 370.575 275.465 365.703 281.071 362.366C286.811 358.896 293.084 357.16 299.892 357.16V391.197Z"
                fill="url(#paint46_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M996.418 459.27H966.386V359.162H996.418V459.27Z"
                fill="url(#paint47_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1048.43 459.27H1018.39V313.113H1048.43V459.27Z"
                fill="url(#paint48_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1100.44 459.27H1070.4V359.162H1100.44V459.27Z"
                fill="url(#paint49_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1228.11 459.27H1198.08V359.162H1228.11V459.27Z"
                fill="url(#paint50_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M981.401 314.315C986.34 314.315 990.545 316.117 994.016 319.721C997.619 323.191 999.421 327.396 999.421 332.334C999.421 337.272 997.619 341.544 994.016 345.148C990.545 348.618 986.34 350.354 981.401 350.354C976.463 350.353 972.192 348.618 968.588 345.148C965.118 341.544 963.383 337.273 963.383 332.334C963.383 327.396 965.118 323.191 968.588 319.721C972.192 316.117 976.463 314.315 981.401 314.315Z"
                fill="url(#paint51_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1085.42 314.315C1090.36 314.315 1094.56 316.117 1098.03 319.721C1101.64 323.191 1103.44 327.396 1103.44 332.334C1103.44 337.273 1101.64 341.544 1098.03 345.148C1094.56 348.618 1090.36 350.353 1085.42 350.354C1080.48 350.354 1076.21 348.618 1072.61 345.148C1069.14 341.544 1067.4 337.273 1067.4 332.334C1067.4 327.396 1069.14 323.191 1072.61 319.721C1076.21 316.117 1080.48 314.315 1085.42 314.315Z"
                fill="url(#paint52_linear_3610_28815)"
                fill-opacity="0.3"
              />
              <path
                d="M1213.09 314.315C1218.03 314.315 1222.24 316.117 1225.71 319.721C1229.31 323.191 1231.11 327.395 1231.11 332.334C1231.11 337.273 1229.31 341.544 1225.71 345.148C1222.24 348.618 1218.03 350.354 1213.09 350.354C1208.16 350.354 1203.89 348.618 1200.28 345.148C1196.81 341.544 1195.08 337.273 1195.08 332.334C1195.08 327.396 1196.81 323.191 1200.28 319.721C1203.89 316.117 1208.16 314.315 1213.09 314.315Z"
                fill="url(#paint53_linear_3610_28815)"
                fill-opacity="0.3"
              />
            </g>
            <defs>
              <clipPath
                id="bgblur_0_3610_28815_clip_path"
                transform="translate(14 14)"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M652.021 43.2461C665.235 43.2462 676.514 48.3855 685.857 58.6631C695.201 68.8073 699.872 81.2877 699.872 96.1035C699.872 110.919 695.201 123.466 685.857 133.743C676.514 143.887 665.235 148.96 652.021 148.96C639.208 148.96 629.264 144.888 622.189 136.746V186.199H592.157V46.0498H622.189V55.46C629.264 47.3179 639.208 43.2461 652.021 43.2461ZM646.015 71.6768C639.074 71.6768 633.334 73.8795 628.796 78.2842C624.391 82.6889 622.189 88.629 622.189 96.1035C622.19 103.578 624.391 109.517 628.796 113.922C633.334 118.327 639.074 120.529 646.015 120.529C652.955 120.529 658.628 118.327 663.033 113.922C667.571 109.517 669.84 103.578 669.84 96.1035C669.84 88.629 667.571 82.6889 663.033 78.2842C658.628 73.8795 652.955 71.6768 646.015 71.6768Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M53.0566 43.2461C67.8725 43.2461 80.4196 48.3854 90.6973 58.6631C100.975 68.8072 106.113 81.2878 106.113 96.1035C106.113 110.919 100.975 123.466 90.6973 133.743C80.4196 143.887 67.8725 148.96 53.0566 148.96C38.2408 148.96 25.6937 143.887 15.416 133.743C5.13863 123.466 0.000109381 110.919 0 96.1035C0 81.2878 5.13851 68.8072 15.416 58.6631C25.6937 48.3854 38.2408 43.2461 53.0566 43.2461ZM53.0566 72.4775C46.5163 72.4775 41.0434 74.6803 36.6387 79.085C32.2341 83.4896 30.0322 89.1629 30.0322 96.1035C30.0323 103.044 32.2343 108.717 36.6387 113.121C41.0434 117.526 46.5163 119.729 53.0566 119.729C59.597 119.729 65.0699 117.526 69.4746 113.121C73.879 108.717 76.081 103.044 76.0811 96.1035C76.0811 89.1629 73.8792 83.4896 69.4746 79.085C65.0699 74.6802 59.597 72.4775 53.0566 72.4775Z"
                />
                <path
                  d="M151.731 103.11C151.731 108.983 153.333 113.522 156.536 116.726C159.873 119.795 164.078 121.33 169.149 121.33C174.889 121.33 179.428 119.594 182.765 116.124C186.101 112.654 187.77 107.515 187.77 100.708V46.0498H217.802V146.156H187.77V136.746C181.763 144.888 172.219 148.96 159.139 148.96C148.461 148.96 139.518 145.289 132.311 137.948C125.236 130.607 121.699 120.463 121.699 107.516V46.0498H151.731V103.11Z"
                />
                <path
                  d="M412.034 43.2461C421.644 43.2461 430.454 45.5823 438.463 50.2539C446.605 54.9256 452.878 61.1324 457.283 68.874L431.055 84.0898C427.451 76.6154 420.977 72.8779 411.634 72.8779C405.094 72.878 399.688 75.0807 395.417 79.4854C391.146 83.7566 389.01 89.2962 389.01 96.1035C389.01 102.911 391.146 108.516 395.417 112.921C399.688 117.192 405.094 119.328 411.634 119.328C421.11 119.328 427.584 115.591 431.055 108.116L457.283 123.132C452.878 131.007 446.672 137.28 438.663 141.952C430.655 146.624 421.778 148.96 412.034 148.96C396.818 148.96 384.138 143.887 373.994 133.743C363.984 123.599 358.978 111.053 358.978 96.1035C358.978 81.1542 363.983 68.6071 373.994 58.4629C384.138 48.3188 396.818 43.2462 412.034 43.2461Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M510.26 43.2461C523.073 43.2461 533.018 47.3179 540.092 55.46V46.0498H570.124V146.156H540.092V136.746C533.018 144.888 523.073 148.96 510.26 148.96C497.046 148.96 485.767 143.887 476.424 133.743C467.081 123.466 462.409 110.919 462.409 96.1035C462.409 81.2877 467.081 68.8073 476.424 58.6631C485.767 48.3855 497.046 43.2462 510.26 43.2461ZM516.267 71.6768C509.192 71.6768 503.453 73.8795 499.048 78.2842C494.643 82.6889 492.441 88.629 492.441 96.1035C492.441 103.578 494.643 109.517 499.048 113.922C503.453 118.327 509.192 120.529 516.267 120.529C523.341 120.529 529.081 118.327 533.485 113.922C537.89 109.517 540.092 103.578 540.092 96.1035C540.092 88.629 537.89 82.6889 533.485 78.2842C529.081 73.8795 523.341 71.6768 516.267 71.6768Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M759.746 43.2461C772.56 43.2462 782.504 47.318 789.578 55.46V46.0498H819.61V146.156H789.578V136.746C782.504 144.888 772.56 148.96 759.746 148.96C746.532 148.96 735.253 143.887 725.909 133.743C716.566 123.466 711.895 110.919 711.895 96.1035C711.895 81.2878 716.566 68.8072 725.909 58.6631C735.253 48.3854 746.532 43.2461 759.746 43.2461ZM765.752 71.6768C758.678 71.6768 752.939 73.8796 748.534 78.2842C744.129 82.6889 741.927 88.6288 741.927 96.1035C741.927 103.578 744.13 109.517 748.534 113.922C752.939 118.326 758.678 120.529 765.752 120.529C772.826 120.529 778.566 118.327 782.971 113.922C787.375 109.517 789.578 103.578 789.578 96.1035C789.578 88.6289 787.375 82.6889 782.971 78.2842C778.566 73.8795 772.826 71.6768 765.752 71.6768Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M871.675 55.46C878.749 47.3179 888.693 43.2461 901.507 43.2461C914.721 43.2461 925.999 48.3855 935.343 58.6631C944.686 68.8073 949.358 81.2877 949.358 96.1035C949.358 110.919 944.686 123.466 935.343 133.743C925.999 143.887 914.721 148.96 901.507 148.96C888.693 148.96 878.749 144.888 871.675 136.746V146.156H841.643V6.00684H871.675V55.46ZM895.5 71.6768C888.559 71.6768 882.82 73.8796 878.282 78.2842C873.878 82.6889 871.675 88.6288 871.675 96.1035C871.675 103.578 873.878 109.517 878.282 113.922C882.82 118.326 888.559 120.529 895.5 120.529C902.441 120.529 908.114 118.327 912.519 113.922C917.057 109.517 919.326 103.578 919.326 96.1035C919.326 88.6289 917.057 82.6889 912.519 78.2842C908.114 73.8795 902.441 71.6768 895.5 71.6768Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1298.34 43.2461C1312.89 43.2461 1324.97 48.3187 1334.58 58.4629C1344.32 68.4736 1349.19 81.0207 1349.19 96.1035C1349.19 100.375 1348.79 104.379 1347.99 108.116H1276.92C1280.39 117.459 1288.4 122.131 1300.94 122.131C1309.08 122.131 1315.49 119.595 1320.16 114.522L1344.19 128.338C1334.31 142.086 1319.76 148.96 1300.54 148.96C1283.72 148.96 1270.24 143.954 1260.1 133.943C1250.09 123.933 1245.08 111.32 1245.08 96.1035C1245.08 81.0207 1250.02 68.4736 1259.9 58.4629C1269.91 48.3188 1282.72 43.2462 1298.34 43.2461ZM1298.14 69.875C1286.53 69.8751 1279.25 75.1479 1276.32 85.6924H1319.36C1316.43 75.1478 1309.35 69.875 1298.14 69.875Z"
                />
                <path
                  d="M1399.16 43.2461C1407.43 43.2461 1414.97 45.1152 1421.78 48.8525C1428.59 52.4563 1434.06 57.7285 1438.2 64.6689L1412.57 78.4844C1409.37 72.6114 1404.9 69.6748 1399.16 69.6748C1393.55 69.6749 1390.75 71.5433 1390.75 75.2803C1390.75 77.2824 1392.42 78.9514 1395.75 80.2861C1399.22 81.4874 1403.36 82.7551 1408.17 84.0898C1412.97 85.2911 1417.78 86.8934 1422.58 88.8955C1427.39 90.8977 1431.46 94.2347 1434.79 98.9062C1438.27 103.444 1440 109.184 1440 116.124C1440 126.936 1436 135.145 1427.99 140.751C1419.98 146.223 1410.1 148.96 1398.36 148.96C1377.27 148.96 1362.92 141.017 1355.31 125.134L1381.34 110.318C1384.01 118.193 1389.68 122.131 1398.36 122.131C1405.56 122.131 1409.17 120.062 1409.17 115.924C1409.17 113.922 1407.43 112.254 1403.96 110.919C1400.63 109.584 1396.55 108.316 1391.75 107.115C1386.94 105.78 1382.14 104.112 1377.33 102.109C1372.53 99.9738 1368.39 96.7035 1364.92 92.2988C1361.58 87.8942 1359.92 82.4886 1359.92 76.082C1359.92 65.6709 1363.65 57.5949 1371.13 51.8555C1378.73 46.1162 1388.08 43.2462 1399.16 43.2461Z"
                />
                <path
                  d="M1160.45 46.0498H1181.08V74.8799H1160.45V110.318C1160.45 114.323 1162.05 116.859 1165.26 117.927C1168.46 118.995 1173.73 119.328 1181.08 118.928V146.156C1161.99 148.158 1148.77 146.357 1141.43 140.751C1134.09 135.012 1130.42 124.867 1130.42 110.318V74.8799H1114.4V46.0498H1130.42V27.0293L1160.45 18.0195V46.0498Z"
                />
                <path
                  d="M299.892 78.084C292.551 76.8827 285.676 78.1505 279.27 81.8877C272.996 85.4916 269.859 91.8318 269.859 100.908V146.156H239.827V46.0498H269.859V63.8682C271.728 57.4615 275.465 52.5898 281.071 49.2529C286.811 45.7826 293.084 44.0469 299.892 44.0469V78.084Z"
                />
                <path d="M996.418 146.156H966.386V46.0498H996.418V146.156Z" />
                <path d="M1048.43 146.156H1018.39V0H1048.43V146.156Z" />
                <path d="M1100.44 146.156H1070.4V46.0498H1100.44V146.156Z" />
                <path d="M1228.11 146.156H1198.08V46.0498H1228.11V146.156Z" />
                <path
                  d="M981.401 1.20117C986.34 1.20117 990.545 3.00356 994.016 6.60742C997.619 10.0777 999.421 14.2822 999.421 19.2207C999.421 24.1592 997.619 28.4304 994.016 32.0342C990.545 35.5046 986.34 37.2402 981.401 37.2402C976.463 37.2401 972.192 35.5045 968.588 32.0342C965.118 28.4304 963.383 24.1592 963.383 19.2207C963.383 14.2822 965.118 10.0778 968.588 6.60742C972.192 3.00367 976.463 1.20128 981.401 1.20117Z"
                />
                <path
                  d="M1085.42 1.20117C1090.36 1.20129 1094.56 3.00368 1098.03 6.60742C1101.64 10.0778 1103.44 14.2822 1103.44 19.2207C1103.44 24.1592 1101.64 28.4304 1098.03 32.0342C1094.56 35.5045 1090.36 37.2401 1085.42 37.2402C1080.48 37.2402 1076.21 35.5046 1072.61 32.0342C1069.14 28.4304 1067.4 24.1592 1067.4 19.2207C1067.4 14.2822 1069.14 10.0778 1072.61 6.60742C1076.21 3.00356 1080.48 1.20117 1085.42 1.20117Z"
                />
                <path
                  d="M1213.09 1.20117C1218.03 1.20117 1222.24 3.00366 1225.71 6.60742C1229.31 10.0778 1231.11 14.2821 1231.11 19.2207C1231.11 24.1593 1229.31 28.4303 1225.71 32.0342C1222.24 35.5045 1218.03 37.2402 1213.09 37.2402C1208.16 37.2402 1203.89 35.5045 1200.28 32.0342C1196.81 28.4304 1195.08 24.1593 1195.08 19.2207C1195.08 14.2822 1196.81 10.0778 1200.28 6.60742C1203.89 3.00362 1208.16 1.20123 1213.09 1.20117Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M652.021 199.733C665.235 199.733 676.514 204.871 685.857 215.149C695.201 225.293 699.872 237.773 699.872 252.589C699.872 267.405 695.201 279.952 685.857 290.23C676.514 300.374 665.235 305.445 652.021 305.446C639.208 305.446 629.264 301.375 622.189 293.233V342.686H592.157V202.535H622.189V211.946C629.264 203.804 639.208 199.733 652.021 199.733ZM646.015 228.163C639.074 228.163 633.334 230.365 628.796 234.77C624.391 239.175 622.189 245.115 622.189 252.589C622.189 260.064 624.391 266.004 628.796 270.408C633.334 274.813 639.074 277.015 646.015 277.015C652.955 277.015 658.628 274.813 663.033 270.408C667.571 266.004 669.84 260.064 669.84 252.589C669.84 245.115 667.571 239.175 663.033 234.77C658.628 230.365 652.955 228.163 646.015 228.163Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M53.0566 199.733C67.8725 199.733 80.4196 204.871 90.6973 215.149C100.975 225.293 106.113 237.773 106.113 252.589C106.113 267.405 100.975 279.952 90.6973 290.23C80.4196 300.374 67.8725 305.446 53.0566 305.446C38.2408 305.446 25.6937 300.374 15.416 290.23C5.13836 279.952 0 267.405 0 252.589C6.17459e-06 237.773 5.13835 225.293 15.416 215.149C25.6937 204.871 38.2408 199.733 53.0566 199.733ZM53.0566 228.964C46.5163 228.964 41.0434 231.166 36.6387 235.571C32.234 239.975 30.0322 245.648 30.0322 252.589C30.0322 259.53 32.234 265.203 36.6387 269.608C41.0434 274.012 46.5163 276.214 53.0566 276.214C59.597 276.214 65.0699 274.012 69.4746 269.608C73.8793 265.203 76.0811 259.53 76.0811 252.589C76.081 245.648 73.8793 239.975 69.4746 235.571C65.0699 231.166 59.597 228.964 53.0566 228.964Z"
                />
                <path
                  d="M151.731 259.597C151.731 265.47 153.333 270.008 156.536 273.211C159.873 276.281 164.077 277.816 169.149 277.816C174.889 277.816 179.428 276.081 182.765 272.611C186.101 269.14 187.77 264.001 187.77 257.194V202.535H217.802V302.643H187.77V293.233C181.763 301.375 172.219 305.446 159.139 305.446C148.461 305.446 139.518 301.775 132.311 294.434C125.236 287.093 121.699 276.948 121.699 264.001V202.535H151.731V259.597Z"
                />
                <path
                  d="M412.034 199.733C421.644 199.733 430.454 202.069 438.463 206.741C446.605 211.412 452.879 217.618 457.283 225.36L431.055 240.576C427.451 233.102 420.977 229.365 411.634 229.365C405.094 229.365 399.688 231.567 395.417 235.971C391.146 240.242 389.01 245.782 389.01 252.589C389.01 259.396 391.146 265.003 395.417 269.408C399.688 273.678 405.094 275.814 411.634 275.814C421.111 275.814 427.584 272.077 431.055 264.602L457.283 279.618C452.879 287.493 446.672 293.766 438.663 298.438C430.655 303.109 421.778 305.446 412.034 305.446C396.818 305.445 384.138 300.374 373.994 290.23C363.983 280.086 358.978 267.538 358.978 252.589C358.978 237.64 363.983 225.093 373.994 214.949C384.138 204.805 396.818 199.733 412.034 199.733Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M510.26 199.733C523.073 199.733 533.018 203.804 540.092 211.946V202.535H570.124V302.643H540.092V293.233C533.018 301.375 523.073 305.446 510.26 305.446C497.046 305.446 485.767 300.374 476.424 290.23C467.081 279.952 462.409 267.405 462.409 252.589C462.409 237.773 467.081 225.293 476.424 215.149C485.767 204.871 497.046 199.733 510.26 199.733ZM516.267 228.163C509.192 228.163 503.453 230.365 499.048 234.77C494.643 239.175 492.441 245.115 492.441 252.589C492.441 260.064 494.643 266.004 499.048 270.408C503.453 274.813 509.192 277.015 516.267 277.015C523.341 277.015 529.081 274.813 533.485 270.408C537.89 266.004 540.092 260.064 540.092 252.589C540.092 245.115 537.89 239.175 533.485 234.77C529.081 230.365 523.341 228.163 516.267 228.163Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M759.746 199.733C772.56 199.733 782.504 203.804 789.578 211.946V202.535H819.61V302.643H789.578V293.233C782.504 301.375 772.56 305.446 759.746 305.446C746.532 305.446 735.253 300.374 725.909 290.23C716.566 279.952 711.895 267.405 711.895 252.589C711.895 237.773 716.566 225.293 725.909 215.149C735.253 204.871 746.532 199.733 759.746 199.733ZM765.752 228.163C758.678 228.163 752.939 230.365 748.534 234.77C744.129 239.175 741.927 245.115 741.927 252.589C741.927 260.064 744.129 266.004 748.534 270.408C752.939 274.813 758.678 277.015 765.752 277.015C772.826 277.015 778.566 274.813 782.971 270.408C787.375 266.004 789.578 260.064 789.578 252.589C789.578 245.115 787.375 239.175 782.971 234.77C778.566 230.365 772.826 228.163 765.752 228.163Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M871.675 211.946C878.749 203.804 888.693 199.733 901.507 199.733C914.721 199.733 926 204.871 935.343 215.149C944.686 225.293 949.358 237.773 949.358 252.589C949.358 267.405 944.686 279.952 935.343 290.23C926 300.374 914.721 305.446 901.507 305.446C888.693 305.446 878.749 301.375 871.675 293.233V302.643H841.643V162.492H871.675V211.946ZM895.5 228.163C888.56 228.163 882.82 230.365 878.282 234.77C873.878 239.175 871.675 245.115 871.675 252.589C871.675 260.064 873.878 266.004 878.282 270.408C882.82 274.813 888.56 277.015 895.5 277.015C902.441 277.015 908.114 274.813 912.519 270.408C917.057 266.004 919.326 260.064 919.326 252.589C919.326 245.115 917.057 239.175 912.519 234.77C908.114 230.365 902.441 228.163 895.5 228.163Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1298.34 199.733C1312.89 199.733 1324.97 204.804 1334.58 214.949C1344.32 224.959 1349.19 237.506 1349.19 252.589C1349.19 256.86 1348.79 260.865 1347.99 264.602H1276.92C1280.39 273.945 1288.4 278.617 1300.94 278.617C1309.08 278.617 1315.49 276.081 1320.16 271.009L1344.19 284.824C1334.31 298.572 1319.76 305.446 1300.54 305.446C1283.72 305.446 1270.24 300.44 1260.1 290.43C1250.09 280.419 1245.08 267.805 1245.08 252.589C1245.08 237.506 1250.02 224.959 1259.9 214.949C1269.91 204.805 1282.72 199.733 1298.34 199.733ZM1298.14 226.361C1286.53 226.361 1279.25 231.634 1276.32 242.178H1319.36C1316.43 231.633 1309.35 226.361 1298.14 226.361Z"
                />
                <path
                  d="M1399.16 199.733C1407.43 199.733 1414.97 201.601 1421.78 205.338C1428.59 208.942 1434.06 214.215 1438.2 221.156L1412.57 234.97C1409.37 229.097 1404.9 226.16 1399.16 226.16C1393.55 226.161 1390.75 228.03 1390.75 231.767C1390.75 233.769 1392.42 235.437 1395.75 236.772C1399.22 237.973 1403.36 239.242 1408.17 240.576C1412.97 241.778 1417.78 243.379 1422.58 245.381C1427.39 247.383 1431.46 250.72 1434.79 255.392C1438.27 259.93 1440 265.67 1440 272.611C1440 283.422 1436 291.631 1427.99 297.237C1419.98 302.709 1410.1 305.446 1398.36 305.446C1377.27 305.446 1362.92 297.504 1355.31 281.62L1381.34 266.804C1384.01 274.679 1389.68 278.617 1398.36 278.617C1405.56 278.617 1409.17 276.548 1409.17 272.41C1409.17 270.408 1407.43 268.739 1403.96 267.405C1400.63 266.07 1396.55 264.802 1391.75 263.601C1386.94 262.266 1382.14 260.598 1377.33 258.596C1372.53 256.46 1368.39 253.19 1364.92 248.785C1361.58 244.381 1359.92 238.975 1359.92 232.568C1359.92 222.157 1363.65 214.082 1371.13 208.342C1378.73 202.603 1388.08 199.733 1399.16 199.733Z"
                />
                <path
                  d="M1160.45 202.535H1181.08V231.367H1160.45V266.804C1160.45 270.808 1162.05 273.345 1165.26 274.412C1168.46 275.48 1173.73 275.814 1181.08 275.413V302.643C1161.99 304.645 1148.77 302.843 1141.43 297.237C1134.09 291.497 1130.42 281.353 1130.42 266.804V231.367H1114.4V202.535H1130.42V183.515L1160.45 174.505V202.535Z"
                />
                <path
                  d="M299.892 234.57C292.55 233.368 285.676 234.637 279.27 238.374C272.996 241.978 269.859 248.318 269.859 257.394V302.643H239.827V202.535H269.859V220.355C271.728 213.948 275.465 209.075 281.071 205.739C286.811 202.268 293.084 200.533 299.892 200.533V234.57Z"
                />
                <path d="M996.418 302.643H966.386V202.535H996.418V302.643Z" />
                <path d="M1048.43 302.643H1018.39V156.487H1048.43V302.643Z" />
                <path d="M1100.44 302.643H1070.4V202.535H1100.44V302.643Z" />
                <path d="M1228.11 302.643H1198.08V202.535H1228.11V302.643Z" />
                <path
                  d="M981.401 157.688C986.34 157.688 990.545 159.489 994.016 163.093C997.62 166.563 999.421 170.769 999.421 175.707C999.421 180.646 997.619 184.917 994.016 188.521C990.545 191.991 986.34 193.726 981.401 193.726C976.463 193.726 972.192 191.991 968.588 188.521C965.118 184.917 963.383 180.646 963.383 175.707C963.383 170.769 965.117 166.563 968.588 163.093C972.192 159.489 976.463 157.688 981.401 157.688Z"
                />
                <path
                  d="M1085.42 157.688C1090.36 157.688 1094.56 159.489 1098.03 163.093C1101.64 166.563 1103.44 170.769 1103.44 175.707C1103.44 180.646 1101.64 184.917 1098.03 188.521C1094.56 191.991 1090.36 193.726 1085.42 193.726C1080.48 193.726 1076.21 191.991 1072.61 188.521C1069.14 184.917 1067.4 180.646 1067.4 175.707C1067.4 170.769 1069.14 166.563 1072.61 163.093C1076.21 159.489 1080.48 157.688 1085.42 157.688Z"
                />
                <path
                  d="M1213.09 157.688C1218.03 157.688 1222.24 159.489 1225.71 163.093C1229.31 166.563 1231.11 170.769 1231.11 175.707C1231.11 180.646 1229.31 184.917 1225.71 188.521C1222.24 191.991 1218.03 193.726 1213.09 193.726C1208.16 193.726 1203.89 191.991 1200.28 188.521C1196.81 184.917 1195.08 180.646 1195.08 175.707C1195.08 170.769 1196.81 166.563 1200.28 163.093C1203.89 159.489 1208.16 157.688 1213.09 157.688Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M652.021 356.359C665.235 356.36 676.514 361.499 685.857 371.776C695.201 381.921 699.872 394.4 699.872 409.216C699.872 424.032 695.201 436.579 685.857 446.857C676.514 457.001 665.235 462.072 652.021 462.072C639.208 462.072 629.264 458.001 622.189 449.859V499.313H592.157V359.162H622.189V368.572C629.264 360.43 639.208 356.359 652.021 356.359ZM646.015 384.79C639.074 384.79 633.334 386.993 628.796 391.398C624.392 395.802 622.19 401.742 622.189 409.216C622.189 416.69 624.391 422.631 628.796 427.035C633.334 431.44 639.074 433.643 646.015 433.643C652.955 433.643 658.628 431.44 663.033 427.035C667.571 422.631 669.84 416.69 669.84 409.216C669.84 401.742 667.571 395.802 663.033 391.398C658.628 386.993 652.955 384.79 646.015 384.79Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M53.0566 356.359C67.8725 356.359 80.4196 361.499 90.6973 371.776C100.975 381.921 106.113 394.4 106.113 409.216C106.113 424.032 100.975 436.579 90.6973 446.857C80.4196 457.001 67.8725 462.072 53.0566 462.072C38.2408 462.072 25.6937 457.001 15.416 446.857C5.13844 436.579 0 424.032 0 409.216C5.64524e-05 394.4 5.13865 381.921 15.416 371.776C25.6937 361.499 38.2408 356.359 53.0566 356.359ZM53.0566 385.591C46.5163 385.591 41.0434 387.794 36.6387 392.198C32.2343 396.603 30.0323 402.275 30.0322 409.216C30.0322 416.157 32.2341 421.83 36.6387 426.234C41.0434 430.639 46.5163 432.842 53.0566 432.842C59.597 432.842 65.0699 430.639 69.4746 426.234C73.8792 421.83 76.0811 416.157 76.0811 409.216C76.081 402.275 73.879 396.603 69.4746 392.198C65.0699 387.794 59.597 385.591 53.0566 385.591Z"
                />
                <path
                  d="M151.731 416.224C151.731 422.097 153.333 426.635 156.536 429.838C159.873 432.908 164.077 434.443 169.149 434.443C174.889 434.443 179.428 432.708 182.765 429.237C186.101 425.767 187.769 420.628 187.77 413.821V359.162H217.802V459.27H187.77V449.859C181.763 458.001 172.219 462.072 159.139 462.072C148.461 462.072 139.518 458.402 132.311 451.061C125.236 443.719 121.699 433.575 121.699 420.628V359.162H151.731V416.224Z"
                />
                <path
                  d="M412.034 356.359C421.644 356.359 430.454 358.696 438.463 363.367C446.605 368.039 452.879 374.246 457.283 381.987L431.055 397.203C427.451 389.729 420.977 385.991 411.634 385.991C405.094 385.991 399.688 388.194 395.417 392.599C391.146 396.87 389.01 402.409 389.01 409.216C389.01 416.023 391.146 421.63 395.417 426.034C399.688 430.305 405.094 432.441 411.634 432.441C421.111 432.441 427.584 428.703 431.055 421.229L457.283 436.245C452.878 444.12 446.672 450.394 438.663 455.065C430.655 459.737 421.778 462.072 412.034 462.072C396.818 462.072 384.138 457 373.994 446.857C363.983 436.712 358.978 424.165 358.978 409.216C358.978 394.267 363.984 381.72 373.994 371.576C384.138 361.432 396.818 356.36 412.034 356.359Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M510.26 356.359C523.073 356.359 533.018 360.43 540.092 368.572V359.162H570.124V459.27H540.092V449.859C533.018 458.001 523.073 462.072 510.26 462.072C497.046 462.072 485.767 457.001 476.424 446.857C467.081 436.579 462.409 424.032 462.409 409.216C462.409 394.4 467.081 381.921 476.424 371.776C485.767 361.499 497.046 356.359 510.26 356.359ZM516.267 384.79C509.192 384.79 503.453 386.993 499.048 391.398C494.643 395.802 492.441 401.742 492.441 409.216C492.441 416.69 494.643 422.631 499.048 427.035C503.453 431.44 509.192 433.643 516.267 433.643C523.341 433.643 529.081 431.44 533.485 427.035C537.89 422.631 540.092 416.69 540.092 409.216C540.092 401.742 537.89 395.802 533.485 391.398C529.081 386.993 523.341 384.79 516.267 384.79Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M759.746 356.359C772.56 356.359 782.504 360.43 789.578 368.572V359.162H819.61V459.27H789.578V449.859C782.504 458.001 772.56 462.072 759.746 462.072C746.532 462.072 735.253 457.001 725.909 446.857C716.566 436.579 711.895 424.032 711.895 409.216C711.895 394.4 716.566 381.92 725.909 371.776C735.253 361.499 746.532 356.359 759.746 356.359ZM765.752 384.79C758.678 384.79 752.939 386.993 748.534 391.398C744.13 395.802 741.927 401.741 741.927 409.216C741.927 416.691 744.129 422.63 748.534 427.035C752.939 431.44 758.678 433.643 765.752 433.643C772.826 433.643 778.566 431.44 782.971 427.035C787.375 422.63 789.578 416.691 789.578 409.216C789.578 401.741 787.375 395.802 782.971 391.398C778.566 386.993 772.826 384.79 765.752 384.79Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M871.675 368.572C878.749 360.43 888.693 356.359 901.507 356.359C914.721 356.359 925.999 361.499 935.343 371.776C944.686 381.921 949.358 394.4 949.358 409.216C949.358 424.032 944.686 436.579 935.343 446.857C925.999 457.001 914.721 462.072 901.507 462.072C888.693 462.072 878.749 458.001 871.675 449.859V459.27H841.643V319.12H871.675V368.572ZM895.5 384.79C888.559 384.79 882.82 386.993 878.282 391.398C873.878 395.802 871.675 401.741 871.675 409.216C871.675 416.691 873.878 422.63 878.282 427.035C882.82 431.44 888.56 433.643 895.5 433.643C902.441 433.643 908.114 431.44 912.519 427.035C917.057 422.63 919.326 416.691 919.326 409.216C919.326 401.741 917.057 395.802 912.519 391.398C908.114 386.993 902.441 384.79 895.5 384.79Z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1298.34 356.359C1312.89 356.359 1324.97 361.432 1334.58 371.576C1344.32 381.587 1349.19 394.133 1349.19 409.216C1349.19 413.487 1348.79 417.491 1347.99 421.229H1276.92C1280.39 430.572 1288.4 435.244 1300.94 435.244C1309.08 435.244 1315.49 432.708 1320.16 427.636L1344.19 441.45C1334.31 455.198 1319.76 462.072 1300.54 462.072C1283.72 462.072 1270.24 457.067 1260.1 447.057C1250.09 437.046 1245.08 424.432 1245.08 409.216C1245.08 394.133 1250.02 381.587 1259.9 371.576C1269.91 361.432 1282.72 356.36 1298.34 356.359ZM1298.14 382.988C1286.53 382.988 1279.25 388.26 1276.32 398.805H1319.36C1316.43 388.26 1309.35 382.988 1298.14 382.988Z"
                />
                <path
                  d="M1399.16 356.359C1407.43 356.359 1414.97 358.229 1421.78 361.966C1428.59 365.57 1434.06 370.842 1438.2 377.782L1412.57 391.598C1409.37 385.725 1404.9 382.788 1399.16 382.788C1393.55 382.788 1390.75 384.657 1390.75 388.394C1390.75 390.396 1392.42 392.065 1395.75 393.399C1399.22 394.601 1403.36 395.868 1408.17 397.203C1412.97 398.404 1417.78 400.007 1422.58 402.009C1427.39 404.011 1431.46 407.348 1434.79 412.02C1438.27 416.558 1440 422.297 1440 429.237C1440 440.049 1436 448.258 1427.99 453.864C1419.98 459.337 1410.1 462.072 1398.36 462.072C1377.27 462.072 1362.92 454.131 1355.31 438.247L1381.34 423.432C1384.01 431.306 1389.68 435.244 1398.36 435.244C1405.56 435.244 1409.17 433.175 1409.17 429.037C1409.17 427.035 1407.43 425.367 1403.96 424.032C1400.63 422.698 1396.55 421.429 1391.75 420.228C1386.94 418.893 1382.14 417.225 1377.33 415.223C1372.53 413.087 1368.39 409.817 1364.92 405.412C1361.58 401.007 1359.92 395.601 1359.92 389.194C1359.92 378.783 1363.65 370.708 1371.13 364.969C1378.73 359.229 1388.08 356.359 1399.16 356.359Z"
                />
                <path
                  d="M1160.45 359.162H1181.08V387.993H1160.45V423.432C1160.45 427.436 1162.05 429.971 1165.26 431.039C1168.46 432.107 1173.73 432.441 1181.08 432.04V459.27C1161.99 461.272 1148.77 459.47 1141.43 453.864C1134.09 448.125 1130.42 437.98 1130.42 423.432V387.993H1114.4V359.162H1130.42V340.143L1160.45 331.133V359.162Z"
                />
                <path
                  d="M299.892 391.197C292.551 389.996 285.676 391.264 279.27 395.001C272.996 398.605 269.859 404.945 269.859 414.022V459.27H239.827V359.162H269.859V376.982C271.728 370.575 275.465 365.703 281.071 362.366C286.811 358.896 293.084 357.16 299.892 357.16V391.197Z"
                />
                <path d="M996.418 459.27H966.386V359.162H996.418V459.27Z" />
                <path d="M1048.43 459.27H1018.39V313.113H1048.43V459.27Z" />
                <path d="M1100.44 459.27H1070.4V359.162H1100.44V459.27Z" />
                <path d="M1228.11 459.27H1198.08V359.162H1228.11V459.27Z" />
                <path
                  d="M981.401 314.315C986.34 314.315 990.545 316.117 994.016 319.721C997.619 323.191 999.421 327.396 999.421 332.334C999.421 337.272 997.619 341.544 994.016 345.148C990.545 348.618 986.34 350.354 981.401 350.354C976.463 350.353 972.192 348.618 968.588 345.148C965.118 341.544 963.383 337.273 963.383 332.334C963.383 327.396 965.118 323.191 968.588 319.721C972.192 316.117 976.463 314.315 981.401 314.315Z"
                />
                <path
                  d="M1085.42 314.315C1090.36 314.315 1094.56 316.117 1098.03 319.721C1101.64 323.191 1103.44 327.396 1103.44 332.334C1103.44 337.273 1101.64 341.544 1098.03 345.148C1094.56 348.618 1090.36 350.353 1085.42 350.354C1080.48 350.354 1076.21 348.618 1072.61 345.148C1069.14 341.544 1067.4 337.273 1067.4 332.334C1067.4 327.396 1069.14 323.191 1072.61 319.721C1076.21 316.117 1080.48 314.315 1085.42 314.315Z"
                />
                <path
                  d="M1213.09 314.315C1218.03 314.315 1222.24 316.117 1225.71 319.721C1229.31 323.191 1231.11 327.395 1231.11 332.334C1231.11 337.273 1229.31 341.544 1225.71 345.148C1222.24 348.618 1218.03 350.354 1213.09 350.354C1208.16 350.354 1203.89 348.618 1200.28 345.148C1196.81 341.544 1195.08 337.273 1195.08 332.334C1195.08 327.396 1196.81 323.191 1200.28 319.721C1203.89 316.117 1208.16 314.315 1213.09 314.315Z"
                />
              </clipPath>
              <linearGradient
                id="paint0_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint1_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint2_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint3_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint4_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint5_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint6_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint7_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint8_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint9_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint10_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint11_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint12_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint13_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint14_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint15_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint16_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint17_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint18_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint19_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint20_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint21_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint22_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint23_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint24_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint25_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint26_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint27_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint28_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint29_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint30_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint31_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint32_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint33_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint34_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint35_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint36_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint37_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint38_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint39_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint40_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint41_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint42_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint43_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint44_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint45_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint46_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint47_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint48_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint49_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint50_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint51_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint52_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint53_linear_3610_28815"
                x1="720"
                y1="0"
                x2="720"
                y2="499.313"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="white" />
                <stop offset="0.632307" stop-color="white" stop-opacity="0" />
              </linearGradient>
            </defs>
          </svg>
            </div>

            <div class="relative z-[20] pt-32 md:pt-44">
                <div class="capabilities-carousel overflow-hidden" id="capabilitiesCarousel">
                    <!-- Slides will be injected by JavaScript -->
                </div>

                <!-- Capabilities Navigation -->
                <div class="flex items-center px-5 justify-between flex-row w-full gap-6 sm:gap-0 mt-8">
                    <div class="flex items-end space-x-1 sm:space-x-2">
                        <span class="carousel-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-[linear-gradient(315deg,_#00CABD_0%,_#0037A6_100%),linear-gradient(276deg,_#13C5B8_0%,_#2A44B0_100%)] bg-clip-text leading-none">01</span
              >
              <span class="text-base sm:text-lg text-gray-500 pb-1 font-light"
                >/ 05</span
              >
            </div>
            <div class="flex space-x-3 sm:space-x-4">
              <button
                class="carousel-prev w-10 sm:w-12 h-10 sm:h-12 border border-white rounded-full flex items-center justify-center text-white hover:border-cyan-400 hover:text-cyan-500 transition group"
              >
                <svg
                  class="w-4 sm:w-5 h-4 sm:h-5"
                  fill="none "
                  stroke="currentColor "
                  viewBox="0 0 24 24 "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M15 19l-7-7 7-7 "
                  ></path>
                </svg>
              </button>
              <button
                class="carousel-next w-10 sm:w-12 h-10 sm:h-12 border border-white rounded-full flex items-center justify-center text-white hover:border-cyan-400 hover:text-cyan-500 transition group"
              >
                <svg
                  class="w-4 sm:w-5 h-4 sm:h-5"
                  fill="none "
                  stroke="currentColor "
                  viewBox="0 0 24 24 "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M9 5l7 7-7 7 "
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white text-[#1a2b3c]">
      <div class="py-12 sm:py-16 sm:px-2 lg:px-12">
        <div class=" ">
          <div
            class="flex flex-col md:flex-row justify-around items-start md:items-center mb-8 sm:mb-12 gap-4 md:gap-0"
          >
            <div
              class="text-xs sm:text-xs uppercase tracking-widest text-gray-400 font-bold leading-tight"
            >
              Powered By Strong<br />Technology Partnerships
            </div>
            <h2
              class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight"
            >
              Backed by a strong ecosystem of technology partners,
              <span class="opacity-40"
                >Teceze enables faster execution through secure, scalable, and
                future-ready capabilities.</span
              >
            </h2>
          </div>

          <div class="marquee-wrapper mb-8 sm:mb-12 -mx-4 sm:-mx-6 md:mx-0">
            <div class="marquee-content opacity-40 grayscale">
              <span
                class="marquee-item text-base sm:text-lg md:text-2xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >exela</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-2xl font-bold italic tracking-tighter text-gray-400 hover:opacity-100 transition"
                >FOCUS R</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >HCLTech</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >Infosys</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >PHOTON</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >publicis sapient</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >Stripe</span
              >

              <span
                class="marquee-item text-base sm:text-lg md:text-2xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >exela</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-2xl font-bold italic tracking-tighter text-gray-400 hover:opacity-100 transition"
                >FOCUS R</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >HCLTech</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >Infosys</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >PHOTON</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >publicis sapient</span
              >
              <span
                class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition"
                >Stripe</span
              >
            </div>
          </div>

          <div class="flex justify-center">
            <a
              href="# "
              class="inline-flex items-center group border-2 border-black/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden"
            >
              <span
                class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-3 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-4 w-4 text-white"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M14 5l7 7m0 0l-7 7m7-7H3 "
                  />
                </svg>
              </span>

                        <span class="text-black font-semibold text-sm pr-2 md:text-md lg:text-lg z-10 transition-colors duration-300">
                Explore Partnerships
              </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative pt-20 sm:pt-30 md:pt-40 overflow-hidden">
                <div class="absolute top-10 md:top-0 left-0 md:left-4 select-none pointer-events-none z-0 w-full overflow-hidden sm:px-6">
                    <!-- <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
                        case studies
                    </div>
                    <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-60 -mt-2 sm:-mt-6">
                        case studies
                    </div>
                    <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-40 -mt-2 sm:-mt-6">
                        case studies
                    </div> -->

                    <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="1300" height="555" viewBox="0 0 1440 555" fill="none">
            <path
              d="M66.969 186.502C47.7628 186.502 31.7576 180.1 18.9535 167.296C6.31783 154.492 0 138.655 0 119.786C0 100.917 6.31783 85.0802 18.9535 72.276C31.7576 59.4719 47.7628 53.0698 66.969 53.0698C79.0993 53.0698 90.2187 56.0181 100.327 61.9148C110.604 67.8114 118.523 75.6455 124.082 85.4171L90.9768 104.623C86.428 95.1887 78.2569 90.4714 66.4636 90.4714C58.2083 90.4714 51.385 93.2512 45.9938 98.8109C40.6026 104.202 37.907 111.194 37.907 119.786C37.907 128.378 40.6026 135.454 45.9938 141.014C51.385 146.405 58.2083 149.101 66.4636 149.101C78.4254 149.101 86.5964 144.384 90.9768 134.949L124.082 153.902C118.523 163.842 110.688 171.761 100.58 177.657C90.4714 183.554 79.2678 186.502 66.969 186.502Z"
              fill="url(#paint0_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M228.605 56.6078H266.512V182.964H228.605V171.087C219.676 181.364 207.124 186.502 190.951 186.502C174.272 186.502 160.035 180.1 148.242 167.296C136.449 154.324 130.552 138.487 130.552 119.786C130.552 101.085 136.449 85.3329 148.242 72.5287C160.035 59.5561 174.272 53.0698 190.951 53.0698C207.124 53.0698 219.676 58.2083 228.605 68.4853V56.6078ZM176.799 142.278C182.358 147.837 189.603 150.617 198.532 150.617C207.461 150.617 214.706 147.837 220.265 142.278C225.825 136.718 228.605 129.221 228.605 119.786C228.605 110.351 225.825 102.854 220.265 97.2946C214.706 91.7349 207.461 88.9551 198.532 88.9551C189.603 88.9551 182.358 91.7349 176.799 97.2946C171.239 102.854 168.459 110.351 168.459 119.786C168.459 129.221 171.239 136.718 176.799 142.278Z"
              fill="url(#paint1_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M328.974 93.5039C328.974 96.0311 331.079 98.137 335.291 99.8218C339.672 101.338 344.894 102.939 350.96 104.623C357.025 106.14 363.09 108.161 369.155 110.688C375.22 113.216 380.359 117.427 384.57 123.324C388.951 129.052 391.141 136.297 391.141 145.057C391.141 158.704 386.087 169.065 375.978 176.141C365.87 183.049 353.402 186.502 338.577 186.502C311.957 186.502 293.846 176.478 284.243 156.43L317.096 137.729C320.466 147.669 327.626 152.639 338.577 152.639C347.674 152.639 352.223 150.027 352.223 144.805C352.223 142.278 350.033 140.172 345.653 138.487C341.441 136.802 336.302 135.202 330.237 133.685C324.172 132.001 318.107 129.895 312.042 127.368C305.977 124.672 300.754 120.544 296.374 114.985C292.162 109.425 290.056 102.602 290.056 94.5148C290.056 81.3737 294.773 71.1809 304.208 63.9365C313.811 56.692 325.604 53.0698 339.587 53.0698C350.033 53.0698 359.552 55.4285 368.144 60.1458C376.736 64.6946 383.644 71.3494 388.867 80.1101L356.519 97.5473C352.476 90.1344 346.832 86.428 339.587 86.428C332.512 86.428 328.974 88.7866 328.974 93.5039Z"
              fill="url(#paint2_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M442.697 134.949C447.077 146.742 457.185 152.639 473.022 152.639C483.299 152.639 491.386 149.438 497.283 143.036L527.608 160.473C515.141 177.826 496.777 186.502 472.517 186.502C451.289 186.502 434.273 180.185 421.469 167.549C408.833 154.913 402.515 138.992 402.515 119.786C402.515 100.748 408.749 84.9117 421.216 72.276C433.852 59.4719 450.025 53.0698 469.737 53.0698C488.101 53.0698 503.348 59.4719 515.478 72.276C527.777 84.9117 533.926 100.748 533.926 119.786C533.926 125.177 533.421 130.232 532.41 134.949H442.697ZM441.938 106.645H496.272C492.565 93.3354 483.636 86.6807 469.484 86.6807C454.827 86.6807 445.645 93.3354 441.938 106.645Z"
              fill="url(#paint3_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M654.49 93.5039C654.49 96.0311 656.596 98.137 660.808 99.8218C665.188 101.338 670.411 102.939 676.476 104.623C682.541 106.14 688.606 108.161 694.671 110.688C700.737 113.216 705.875 117.427 710.087 123.324C714.467 129.052 716.658 136.297 716.658 145.057C716.658 158.704 711.603 169.065 701.495 176.141C691.386 183.049 678.919 186.502 664.093 186.502C637.474 186.502 619.363 176.478 609.76 156.43L642.613 137.729C645.982 147.669 653.142 152.639 664.093 152.639C673.191 152.639 677.74 150.027 677.74 144.805C677.74 142.278 675.549 140.172 671.169 138.487C666.957 136.802 661.819 135.202 655.754 133.685C649.689 132.001 643.623 129.895 637.558 127.368C631.493 124.672 626.27 120.544 621.89 114.985C617.678 109.425 615.572 102.602 615.572 94.5148C615.572 81.3737 620.29 71.1809 629.724 63.9365C639.327 56.692 651.121 53.0698 665.104 53.0698C675.55 53.0698 685.068 55.4285 693.661 60.1458C702.253 64.6946 709.16 71.3494 714.383 80.1101L682.036 97.5473C677.992 90.1344 672.349 86.428 665.104 86.428C658.028 86.428 654.49 88.7866 654.49 93.5039Z"
              fill="url(#paint4_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M805.927 92.9985H779.897V137.729C779.897 142.783 781.919 145.984 785.962 147.332C790.006 148.68 796.66 149.101 805.927 148.595V182.964C781.835 185.492 765.155 183.217 755.889 176.141C746.623 168.897 741.99 156.093 741.99 137.729V92.9985H721.773V56.6078H741.99V32.6L779.897 21.2279V56.6078H805.927V92.9985Z"
              fill="url(#paint5_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M911.484 56.6078H949.391V182.964H911.484V171.087C903.902 181.364 891.856 186.502 875.346 186.502C861.868 186.502 850.58 181.869 841.482 172.603C832.553 163.337 828.088 150.533 828.088 134.191V56.6078H865.995V128.631C865.995 136.044 868.017 141.772 872.06 145.816C876.272 149.691 881.579 151.628 887.981 151.628C895.226 151.628 900.954 149.438 905.166 145.057C909.378 140.677 911.484 134.191 911.484 125.599V56.6078Z"
              fill="url(#paint6_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1068.93 6.06512H1106.83V182.964H1068.93V171.087C1060 181.364 1047.45 186.502 1031.27 186.502C1014.59 186.502 1000.36 180.1 988.563 167.296C976.77 154.324 970.873 138.487 970.873 119.786C970.873 101.085 976.77 85.3329 988.563 72.5287C1000.36 59.5561 1014.59 53.0698 1031.27 53.0698C1047.45 53.0698 1060 58.2083 1068.93 68.4853V6.06512ZM1017.12 142.278C1022.68 147.837 1029.92 150.617 1038.85 150.617C1047.78 150.617 1055.03 147.837 1060.59 142.278C1066.15 136.718 1068.93 129.221 1068.93 119.786C1068.93 110.351 1066.15 102.854 1060.59 97.2946C1055.03 91.7349 1047.78 88.9551 1038.85 88.9551C1029.92 88.9551 1022.68 91.7349 1017.12 97.2946C1011.56 102.854 1008.78 110.351 1008.78 119.786C1008.78 129.221 1011.56 136.718 1017.12 142.278Z"
              fill="url(#paint7_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1169.52 38.9178C1165.14 43.2982 1159.83 45.4884 1153.6 45.4884C1147.36 45.4884 1141.97 43.2982 1137.42 38.9178C1133.04 34.369 1130.85 28.9778 1130.85 22.7442C1130.85 16.5106 1133.04 11.2036 1137.42 6.82326C1141.97 2.27442 1147.36 0 1153.6 0C1159.83 0 1165.14 2.27442 1169.52 6.82326C1174.07 11.2036 1176.34 16.5106 1176.34 22.7442C1176.34 28.9778 1174.07 34.369 1169.52 38.9178ZM1134.64 182.964V56.6078H1172.55V182.964H1134.64Z"
              fill="url(#paint8_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1234.15 134.949C1238.53 146.742 1248.64 152.639 1264.48 152.639C1274.76 152.639 1282.84 149.438 1288.74 143.036L1319.06 160.473C1306.6 177.826 1288.23 186.502 1263.97 186.502C1242.75 186.502 1225.73 180.185 1212.93 167.549C1200.29 154.913 1193.97 138.992 1193.97 119.786C1193.97 100.748 1200.21 84.9117 1212.67 72.276C1225.31 59.4719 1241.48 53.0698 1261.19 53.0698C1279.56 53.0698 1294.8 59.4719 1306.93 72.276C1319.23 84.9117 1325.38 100.748 1325.38 119.786C1325.38 125.177 1324.88 130.232 1323.87 134.949H1234.15ZM1233.4 106.645H1287.73C1284.02 93.3354 1275.09 86.6807 1260.94 86.6807C1246.28 86.6807 1237.1 93.3354 1233.4 106.645Z"
              fill="url(#paint9_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1377.83 93.5039C1377.83 96.0311 1379.94 98.137 1384.15 99.8218C1388.53 101.338 1393.75 102.939 1399.82 104.623C1405.88 106.14 1411.95 108.161 1418.01 110.688C1424.08 113.216 1429.22 117.427 1433.43 123.324C1437.81 129.052 1440 136.297 1440 145.057C1440 158.704 1434.95 169.065 1424.84 176.141C1414.73 183.049 1402.26 186.502 1387.44 186.502C1360.82 186.502 1342.71 176.478 1333.1 156.43L1365.96 137.729C1369.32 147.669 1376.48 152.639 1387.44 152.639C1396.53 152.639 1401.08 150.027 1401.08 144.805C1401.08 142.278 1398.89 140.172 1394.51 138.487C1390.3 136.802 1385.16 135.202 1379.1 133.685C1373.03 132.001 1366.97 129.895 1360.9 127.368C1354.84 124.672 1349.61 120.544 1345.23 114.985C1341.02 109.425 1338.91 102.602 1338.91 94.5148C1338.91 81.3737 1343.63 71.1809 1353.07 63.9365C1362.67 56.692 1374.46 53.0698 1388.45 53.0698C1398.89 53.0698 1408.41 55.4285 1417 60.1458C1425.6 64.6946 1432.5 71.3494 1437.73 80.1101L1405.38 97.5473C1401.33 90.1344 1395.69 86.428 1388.45 86.428C1381.37 86.428 1377.83 88.7866 1377.83 93.5039Z"
              fill="url(#paint10_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M66.969 370.368C47.7628 370.368 31.7576 363.966 18.9535 351.162C6.31783 338.358 0 322.521 0 303.652C0 284.783 6.31783 268.946 18.9535 256.142C31.7576 243.338 47.7628 236.936 66.969 236.936C79.0993 236.936 90.2187 239.884 100.327 245.781C110.604 251.677 118.523 259.512 124.082 269.283L90.9768 288.489C86.428 279.055 78.2569 274.337 66.4636 274.337C58.2083 274.337 51.385 277.117 45.9938 282.677C40.6026 288.068 37.907 295.06 37.907 303.652C37.907 312.244 40.6026 319.32 45.9938 324.88C51.385 330.271 58.2083 332.967 66.4636 332.967C78.4254 332.967 86.5964 328.25 90.9768 318.815L124.082 337.768C118.523 347.709 110.688 355.627 100.58 361.523C90.4714 367.42 79.2678 370.368 66.969 370.368Z"
              fill="url(#paint11_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M228.605 240.474H266.512V366.831H228.605V354.953C219.676 365.23 207.124 370.368 190.951 370.368C174.272 370.368 160.035 363.966 148.242 351.162C136.449 338.19 130.552 322.353 130.552 303.652C130.552 284.951 136.449 269.199 148.242 256.395C160.035 243.422 174.272 236.936 190.951 236.936C207.124 236.936 219.676 242.074 228.605 252.351V240.474ZM176.799 326.144C182.358 331.703 189.603 334.483 198.532 334.483C207.461 334.483 214.706 331.703 220.265 326.144C225.825 320.584 228.605 313.087 228.605 303.652C228.605 294.218 225.825 286.72 220.265 281.161C214.706 275.601 207.461 272.821 198.532 272.821C189.603 272.821 182.358 275.601 176.799 281.161C171.239 286.72 168.459 294.218 168.459 303.652C168.459 313.087 171.239 320.584 176.799 326.144Z"
              fill="url(#paint12_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M328.974 277.37C328.974 279.897 331.079 282.003 335.291 283.688C339.672 285.204 344.894 286.805 350.96 288.489C357.025 290.006 363.09 292.027 369.155 294.555C375.22 297.082 380.359 301.294 384.57 307.19C388.951 312.918 391.141 320.163 391.141 328.924C391.141 342.57 386.087 352.931 375.978 360.007C365.87 366.915 353.402 370.368 338.577 370.368C311.957 370.368 293.846 360.344 284.243 340.296L317.096 321.595C320.466 331.535 327.626 336.505 338.577 336.505C347.674 336.505 352.223 333.894 352.223 328.671C352.223 326.144 350.033 324.038 345.653 322.353C341.441 320.668 336.302 319.068 330.237 317.551C324.172 315.867 318.107 313.761 312.042 311.234C305.977 308.538 300.754 304.41 296.374 298.851C292.162 293.291 290.056 286.468 290.056 278.381C290.056 265.24 294.773 255.047 304.208 247.803C313.811 240.558 325.604 236.936 339.587 236.936C350.033 236.936 359.552 239.295 368.144 244.012C376.736 248.561 383.644 255.215 388.867 263.976L356.519 281.413C352.476 274 346.832 270.294 339.587 270.294C332.512 270.294 328.974 272.653 328.974 277.37Z"
              fill="url(#paint13_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M442.697 318.815C447.077 330.608 457.185 336.505 473.022 336.505C483.299 336.505 491.386 333.304 497.283 326.902L527.608 344.339C515.141 361.692 496.777 370.368 472.517 370.368C451.289 370.368 434.273 364.051 421.469 351.415C408.833 338.779 402.515 322.858 402.515 303.652C402.515 284.614 408.749 268.778 421.216 256.142C433.852 243.338 450.025 236.936 469.737 236.936C488.101 236.936 503.348 243.338 515.478 256.142C527.777 268.778 533.926 284.614 533.926 303.652C533.926 309.043 533.421 314.098 532.41 318.815H442.697ZM441.938 290.511H496.272C492.565 277.202 483.636 270.547 469.484 270.547C454.827 270.547 445.645 277.202 441.938 290.511Z"
              fill="url(#paint14_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M654.49 277.37C654.49 279.897 656.596 282.003 660.808 283.688C665.188 285.204 670.411 286.805 676.476 288.489C682.541 290.006 688.606 292.027 694.671 294.555C700.737 297.082 705.875 301.294 710.087 307.19C714.467 312.918 716.658 320.163 716.658 328.924C716.658 342.57 711.603 352.931 701.495 360.007C691.386 366.915 678.919 370.368 664.093 370.368C637.474 370.368 619.363 360.344 609.76 340.296L642.613 321.595C645.982 331.535 653.142 336.505 664.093 336.505C673.191 336.505 677.74 333.894 677.74 328.671C677.74 326.144 675.549 324.038 671.169 322.353C666.957 320.668 661.819 319.068 655.754 317.551C649.689 315.867 643.623 313.761 637.558 311.234C631.493 308.538 626.27 304.41 621.89 298.851C617.678 293.291 615.572 286.468 615.572 278.381C615.572 265.24 620.29 255.047 629.724 247.803C639.327 240.558 651.121 236.936 665.104 236.936C675.55 236.936 685.068 239.295 693.661 244.012C702.253 248.561 709.16 255.215 714.383 263.976L682.036 281.413C677.992 274 672.349 270.294 665.104 270.294C658.028 270.294 654.49 272.653 654.49 277.37Z"
              fill="url(#paint15_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M805.927 276.865H779.897V321.595C779.897 326.649 781.919 329.85 785.962 331.198C790.006 332.546 796.66 332.967 805.927 332.461V366.831C781.835 369.358 765.155 367.083 755.889 360.007C746.623 352.763 741.99 339.959 741.99 321.595V276.865H721.773V240.474H741.99V216.466L779.897 205.094V240.474H805.927V276.865Z"
              fill="url(#paint16_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M911.484 240.474H949.391V366.831H911.484V354.953C903.902 365.23 891.856 370.368 875.346 370.368C861.868 370.368 850.58 365.735 841.482 356.469C832.553 347.203 828.088 334.399 828.088 318.057V240.474H865.995V312.497C865.995 319.91 868.017 325.638 872.06 329.682C876.272 333.557 881.579 335.494 887.981 335.494C895.226 335.494 900.954 333.304 905.166 328.924C909.378 324.543 911.484 318.057 911.484 309.465V240.474Z"
              fill="url(#paint17_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1068.93 189.931H1106.83V366.831H1068.93V354.953C1060 365.23 1047.45 370.368 1031.27 370.368C1014.59 370.368 1000.36 363.966 988.563 351.162C976.77 338.19 970.873 322.353 970.873 303.652C970.873 284.951 976.77 269.199 988.563 256.395C1000.36 243.422 1014.59 236.936 1031.27 236.936C1047.45 236.936 1060 242.074 1068.93 252.351V189.931ZM1017.12 326.144C1022.68 331.703 1029.92 334.483 1038.85 334.483C1047.78 334.483 1055.03 331.703 1060.59 326.144C1066.15 320.584 1068.93 313.087 1068.93 303.652C1068.93 294.218 1066.15 286.72 1060.59 281.161C1055.03 275.601 1047.78 272.821 1038.85 272.821C1029.92 272.821 1022.68 275.601 1017.12 281.161C1011.56 286.72 1008.78 294.218 1008.78 303.652C1008.78 313.087 1011.56 320.584 1017.12 326.144Z"
              fill="url(#paint18_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1169.52 222.784C1165.14 227.164 1159.83 229.354 1153.6 229.354C1147.36 229.354 1141.97 227.164 1137.42 222.784C1133.04 218.235 1130.85 212.844 1130.85 206.61C1130.85 200.377 1133.04 195.07 1137.42 190.689C1141.97 186.14 1147.36 183.866 1153.6 183.866C1159.83 183.866 1165.14 186.14 1169.52 190.689C1174.07 195.07 1176.34 200.377 1176.34 206.61C1176.34 212.844 1174.07 218.235 1169.52 222.784ZM1134.64 366.831V240.474H1172.55V366.831H1134.64Z"
              fill="url(#paint19_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1234.15 318.815C1238.53 330.608 1248.64 336.505 1264.48 336.505C1274.76 336.505 1282.84 333.304 1288.74 326.902L1319.06 344.339C1306.6 361.692 1288.23 370.368 1263.97 370.368C1242.75 370.368 1225.73 364.051 1212.93 351.415C1200.29 338.779 1193.97 322.858 1193.97 303.652C1193.97 284.614 1200.21 268.778 1212.67 256.142C1225.31 243.338 1241.48 236.936 1261.19 236.936C1279.56 236.936 1294.8 243.338 1306.93 256.142C1319.23 268.778 1325.38 284.614 1325.38 303.652C1325.38 309.043 1324.88 314.098 1323.87 318.815H1234.15ZM1233.4 290.511H1287.73C1284.02 277.202 1275.09 270.547 1260.94 270.547C1246.28 270.547 1237.1 277.202 1233.4 290.511Z"
              fill="url(#paint20_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1377.83 277.37C1377.83 279.897 1379.94 282.003 1384.15 283.688C1388.53 285.204 1393.75 286.805 1399.82 288.489C1405.88 290.006 1411.95 292.027 1418.01 294.555C1424.08 297.082 1429.22 301.294 1433.43 307.19C1437.81 312.918 1440 320.163 1440 328.924C1440 342.57 1434.95 352.931 1424.84 360.007C1414.73 366.915 1402.26 370.368 1387.44 370.368C1360.82 370.368 1342.71 360.344 1333.1 340.296L1365.96 321.595C1369.32 331.535 1376.48 336.505 1387.44 336.505C1396.53 336.505 1401.08 333.894 1401.08 328.671C1401.08 326.144 1398.89 324.038 1394.51 322.353C1390.3 320.668 1385.16 319.068 1379.1 317.551C1373.03 315.867 1366.97 313.761 1360.9 311.234C1354.84 308.538 1349.61 304.41 1345.23 298.851C1341.02 293.291 1338.91 286.468 1338.91 278.381C1338.91 265.24 1343.63 255.047 1353.07 247.803C1362.67 240.558 1374.46 236.936 1388.45 236.936C1398.89 236.936 1408.41 239.295 1417 244.012C1425.6 248.561 1432.5 255.215 1437.73 263.976L1405.38 281.413C1401.33 274 1395.69 270.294 1388.45 270.294C1381.37 270.294 1377.83 272.653 1377.83 277.37Z"
              fill="url(#paint21_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M66.969 554.235C47.7628 554.235 31.7576 547.832 18.9535 535.028C6.31783 522.224 0 506.387 0 487.518C0 468.649 6.31783 452.812 18.9535 440.008C31.7576 427.204 47.7628 420.802 66.969 420.802C79.0993 420.802 90.2187 423.75 100.327 429.647C110.604 435.544 118.523 443.378 124.082 453.149L90.9768 472.355C86.428 462.921 78.2569 458.203 66.4636 458.203C58.2083 458.203 51.385 460.983 45.9938 466.543C40.6026 471.934 37.907 478.926 37.907 487.518C37.907 496.11 40.6026 503.186 45.9938 508.746C51.385 514.137 58.2083 516.833 66.4636 516.833C78.4254 516.833 86.5964 512.116 90.9768 502.681L124.082 521.635C118.523 531.575 110.688 539.493 100.58 545.39C90.4714 551.286 79.2678 554.235 66.969 554.235Z"
              fill="url(#paint22_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M228.605 424.34H266.512V550.697H228.605V538.819C219.676 549.096 207.124 554.235 190.951 554.235C174.272 554.235 160.035 547.832 148.242 535.028C136.449 522.056 130.552 506.219 130.552 487.518C130.552 468.817 136.449 453.065 148.242 440.261C160.035 427.288 174.272 420.802 190.951 420.802C207.124 420.802 219.676 425.94 228.605 436.217V424.34ZM176.799 510.01C182.358 515.569 189.603 518.349 198.532 518.349C207.461 518.349 214.706 515.569 220.265 510.01C225.825 504.45 228.605 496.953 228.605 487.518C228.605 478.084 225.825 470.586 220.265 465.027C214.706 459.467 207.461 456.687 198.532 456.687C189.603 456.687 182.358 459.467 176.799 465.027C171.239 470.586 168.459 478.084 168.459 487.518C168.459 496.953 171.239 504.45 176.799 510.01Z"
              fill="url(#paint23_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M328.974 461.236C328.974 463.763 331.079 465.869 335.291 467.554C339.672 469.07 344.894 470.671 350.96 472.355C357.025 473.872 363.09 475.893 369.155 478.421C375.22 480.948 380.359 485.16 384.57 491.056C388.951 496.784 391.141 504.029 391.141 512.79C391.141 526.436 386.087 536.797 375.978 543.873C365.87 550.781 353.402 554.235 338.577 554.235C311.957 554.235 293.846 544.21 284.243 524.162L317.096 505.461C320.466 515.401 327.626 520.371 338.577 520.371C347.674 520.371 352.223 517.76 352.223 512.537C352.223 510.01 350.033 507.904 345.653 506.219C341.441 504.534 336.302 502.934 330.237 501.417C324.172 499.733 318.107 497.627 312.042 495.1C305.977 492.404 300.754 488.276 296.374 482.717C292.162 477.157 290.056 470.334 290.056 462.247C290.056 449.106 294.773 438.913 304.208 431.669C313.811 424.424 325.604 420.802 339.587 420.802C350.033 420.802 359.552 423.161 368.144 427.878C376.736 432.427 383.644 439.082 388.867 447.842L356.519 465.279C352.476 457.867 346.832 454.16 339.587 454.16C332.512 454.16 328.974 456.519 328.974 461.236Z"
              fill="url(#paint24_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M442.697 502.681C447.077 514.474 457.185 520.371 473.022 520.371C483.299 520.371 491.386 517.17 497.283 510.768L527.608 528.205C515.141 545.558 496.777 554.235 472.517 554.235C451.289 554.235 434.273 547.917 421.469 535.281C408.833 522.645 402.515 506.724 402.515 487.518C402.515 468.48 408.749 452.644 421.216 440.008C433.852 427.204 450.025 420.802 469.737 420.802C488.101 420.802 503.348 427.204 515.478 440.008C527.777 452.644 533.926 468.48 533.926 487.518C533.926 492.909 533.421 497.964 532.41 502.681H442.697ZM441.938 474.377H496.272C492.565 461.068 483.636 454.413 469.484 454.413C454.827 454.413 445.645 461.068 441.938 474.377Z"
              fill="url(#paint25_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M654.49 461.236C654.49 463.763 656.596 465.869 660.808 467.554C665.188 469.07 670.411 470.671 676.476 472.355C682.541 473.872 688.606 475.893 694.671 478.421C700.737 480.948 705.875 485.16 710.087 491.056C714.467 496.784 716.658 504.029 716.658 512.79C716.658 526.436 711.603 536.797 701.495 543.873C691.386 550.781 678.919 554.235 664.093 554.235C637.474 554.235 619.363 544.21 609.76 524.162L642.613 505.461C645.982 515.401 653.142 520.371 664.093 520.371C673.191 520.371 677.74 517.76 677.74 512.537C677.74 510.01 675.549 507.904 671.169 506.219C666.957 504.534 661.819 502.934 655.754 501.417C649.689 499.733 643.623 497.627 637.558 495.1C631.493 492.404 626.27 488.276 621.89 482.717C617.678 477.157 615.572 470.334 615.572 462.247C615.572 449.106 620.29 438.913 629.724 431.669C639.327 424.424 651.121 420.802 665.104 420.802C675.55 420.802 685.068 423.161 693.661 427.878C702.253 432.427 709.16 439.082 714.383 447.842L682.036 465.279C677.992 457.867 672.349 454.16 665.104 454.16C658.028 454.16 654.49 456.519 654.49 461.236Z"
              fill="url(#paint26_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M805.927 460.731H779.897V505.461C779.897 510.515 781.919 513.716 785.962 515.064C790.006 516.412 796.66 516.833 805.927 516.328V550.697C781.835 553.224 765.155 550.949 755.889 543.873C746.623 536.629 741.99 523.825 741.99 505.461V460.731H721.773V424.34H741.99V400.332L779.897 388.96V424.34H805.927V460.731Z"
              fill="url(#paint27_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M911.484 424.34H949.391V550.697H911.484V538.819C903.902 549.096 891.856 554.235 875.346 554.235C861.868 554.235 850.58 549.602 841.482 540.335C832.553 531.069 828.088 518.265 828.088 501.923V424.34H865.995V496.363C865.995 503.776 868.017 509.504 872.06 513.548C876.272 517.423 881.579 519.36 887.981 519.36C895.226 519.36 900.954 517.17 905.166 512.79C909.378 508.409 911.484 501.923 911.484 493.331V424.34Z"
              fill="url(#paint28_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1068.93 373.797H1106.83V550.697H1068.93V538.819C1060 549.096 1047.45 554.235 1031.27 554.235C1014.59 554.235 1000.36 547.832 988.563 535.028C976.77 522.056 970.873 506.219 970.873 487.518C970.873 468.817 976.77 453.065 988.563 440.261C1000.36 427.288 1014.59 420.802 1031.27 420.802C1047.45 420.802 1060 425.94 1068.93 436.217V373.797ZM1017.12 510.01C1022.68 515.569 1029.92 518.349 1038.85 518.349C1047.78 518.349 1055.03 515.569 1060.59 510.01C1066.15 504.45 1068.93 496.953 1068.93 487.518C1068.93 478.084 1066.15 470.586 1060.59 465.027C1055.03 459.467 1047.78 456.687 1038.85 456.687C1029.92 456.687 1022.68 459.467 1017.12 465.027C1011.56 470.586 1008.78 478.084 1008.78 487.518C1008.78 496.953 1011.56 504.45 1017.12 510.01Z"
              fill="url(#paint29_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1169.52 406.65C1165.14 411.03 1159.83 413.221 1153.6 413.221C1147.36 413.221 1141.97 411.03 1137.42 406.65C1133.04 402.101 1130.85 396.71 1130.85 390.476C1130.85 384.243 1133.04 378.936 1137.42 374.555C1141.97 370.007 1147.36 367.732 1153.6 367.732C1159.83 367.732 1165.14 370.007 1169.52 374.555C1174.07 378.936 1176.34 384.243 1176.34 390.476C1176.34 396.71 1174.07 402.101 1169.52 406.65ZM1134.64 550.697V424.34H1172.55V550.697H1134.64Z"
              fill="url(#paint30_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1234.15 502.681C1238.53 514.474 1248.64 520.371 1264.48 520.371C1274.76 520.371 1282.84 517.17 1288.74 510.768L1319.06 528.205C1306.6 545.558 1288.23 554.235 1263.97 554.235C1242.75 554.235 1225.73 547.917 1212.93 535.281C1200.29 522.645 1193.97 506.724 1193.97 487.518C1193.97 468.48 1200.21 452.644 1212.67 440.008C1225.31 427.204 1241.48 420.802 1261.19 420.802C1279.56 420.802 1294.8 427.204 1306.93 440.008C1319.23 452.644 1325.38 468.48 1325.38 487.518C1325.38 492.909 1324.88 497.964 1323.87 502.681H1234.15ZM1233.4 474.377H1287.73C1284.02 461.068 1275.09 454.413 1260.94 454.413C1246.28 454.413 1237.1 461.068 1233.4 474.377Z"
              fill="url(#paint31_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <path
              d="M1377.83 461.236C1377.83 463.763 1379.94 465.869 1384.15 467.554C1388.53 469.07 1393.75 470.671 1399.82 472.355C1405.88 473.872 1411.95 475.893 1418.01 478.421C1424.08 480.948 1429.22 485.16 1433.43 491.056C1437.81 496.784 1440 504.029 1440 512.79C1440 526.436 1434.95 536.797 1424.84 543.873C1414.73 550.781 1402.26 554.235 1387.44 554.235C1360.82 554.235 1342.71 544.21 1333.1 524.162L1365.96 505.461C1369.32 515.401 1376.48 520.371 1387.44 520.371C1396.53 520.371 1401.08 517.76 1401.08 512.537C1401.08 510.01 1398.89 507.904 1394.51 506.219C1390.3 504.534 1385.16 502.934 1379.1 501.417C1373.03 499.733 1366.97 497.627 1360.9 495.1C1354.84 492.404 1349.61 488.276 1345.23 482.717C1341.02 477.157 1338.91 470.334 1338.91 462.247C1338.91 449.106 1343.63 438.913 1353.07 431.669C1362.67 424.424 1374.46 420.802 1388.45 420.802C1398.89 420.802 1408.41 423.161 1417 427.878C1425.6 432.427 1432.5 439.082 1437.73 447.842L1405.38 465.279C1401.33 457.867 1395.69 454.16 1388.45 454.16C1381.37 454.16 1377.83 456.519 1377.83 461.236Z"
              fill="url(#paint32_linear_3610_28868)"
              fill-opacity="0.12"
            />
            <defs>
              <linearGradient
                id="paint0_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint1_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint2_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint3_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint4_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint5_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint6_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint7_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint8_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint9_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint10_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint11_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint12_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint13_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint14_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint15_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint16_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint17_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint18_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint19_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint20_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint21_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint22_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint23_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint24_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint25_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint26_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint27_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint28_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint29_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint30_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint31_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
              <linearGradient
                id="paint32_linear_3610_28868"
                x1="720"
                y1="0"
                x2="720"
                y2="651"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.80154" stop-color="#000A2D" stop-opacity="0" />
              </linearGradient>
            </defs>
          </svg>
                </div>

                <div class="relative top-8 sm:top-16 md:top-26 z-10 cases-carousel" id="casesCarousel"></div>

                <div class="flex flex-row justify-end w-full px-4 sm:px-6">
                    <div class="w-full lg:w-1/2 sm:mt-20 py-12 flex items-center justify-between gap-4">
                        <div class="flex items-end gap-1">
                            <span class="cases-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-[linear-gradient(315deg,_#00CABD_0%,_#0037A6_100%),linear-gradient(276deg,_#13C5B8_0%,_#2A44B0_100%)] bg-clip-text leading-none">01</span
              >
              <span class="text-base sm:text-lg text-gray-300 font-light pb-1"
                >/02</span
              >
            </div>
            <div class="flex gap-3 sm:gap-4">
              <button
                class="cases-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-4 sm:h-5 w-4 sm:w-5"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M15 19l-7-7 7-7 "
                  />
                </svg>
              </button>
              <button
                class="cases-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-4 sm:h-5 w-4 sm:w-5"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M9 5l7 7-7 7 "
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="testimonial-carousel-section bg-[#000a2d] text-white flex items-center justify-center min-h-screen p-6 md:p-20"
    >
      <div
        class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative"
      >
        <div class="relative z-10">
          <h2
            class="text-2xl md:text-2xl leading-relaxed font-light mb-16 md:mb-40"
          >
            Trusted by organizations that demand reliability, speed, and
            accountability.
          </h2>

          <!-- Testimonial Carousel Container -->
          <div class="testimonial-carousel relative" id="testimonialCarousel">
            <!-- Slides will be injected by JavaScript -->
          </div>

          <a
            href="# "
            class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 w-fit relative overflow-hidden"
          >
            <span
              class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-2 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg "
                class="h-4 w-4 text-white"
                fill="none "
                viewBox="0 0 24 24 "
                stroke="currentColor "
              >
                <path
                  stroke-linecap="round "
                  stroke-linejoin="round "
                  stroke-width="2 "
                  d="M14 5l7 7m0 0l-7 7m7-7H3 "
                />
              </svg>
            </span>

                            <span class="text-white font-semibold text-sm pr-4 md:text-md lg:text-lg z-10 transition-colors duration-300">
              Read Client Stories
            </span>
                            </a>
                        </div>

                        <div class="relative">
                            <div class="rounded-[2.5rem] overflow-hidden aspect-[4/5] shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000 " alt="Client Portrait " class="testimonial-image w-full h-full object-cover grayscale-[0.2]" />
                            </div>

                            <div class="flex items-center justify-between mt-10">
                                <div class="testimonial-counter">
                                    <span class="text-6xl font-black text-transparent bg-[linear-gradient(315deg,_#00CABD_0%,_#0037A6_100%),linear-gradient(276deg,_#13C5B8_0%,_#2A44B0_100%)] bg-clip-text leading-none testimonial-current">01</span
              >
              <span class="text-lg text-gray-400 font-light mb-1">/03</span>
                                </div>

                                <div class="flex gap-4">
                                    <button class="testimonial-prev w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors" aria-label="Previous testimonial ">
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-6 w-6"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M15 19l-7-7 7-7 "
                  />
                </svg>
              </button>
                                    <button class="testimonial-next w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors" aria-label="Next testimonial ">
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-6 w-6"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M9 5l7 7-7 7 "
                  />
                </svg>
              </button>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <section class="bg-white text-[#1a2b3c] overflow-x-hidden">
        <div class="relative pt-12 sm:pt-16 md:pt-24 px-4 sm:px-6">
            <div class="absolute top-6 sm:top-8 md:top-12 left-0 md:left-4 select-none pointer-events-none w-full overflow-hidden">
                <!-- <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
                    latest insights
                </div>
                <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
                    latest insights
                </div>
                <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
                    latest insights
                </div> -->

                <svg xmlns="http://www.w3.org/2000/svg" width="1300" height="578" viewBox="0 0 1440 578" fill="none">
            <path
              d="M0 162.915V0H33.5926V162.915H0Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M139.469 51.3293H173.061V162.915H139.469V152.426C131.556 161.501 120.433 166.039 106.1 166.039C91.3193 166.039 78.7034 160.386 68.2524 149.078C57.8014 137.622 52.5759 123.637 52.5759 107.122C52.5759 90.6074 57.8014 76.6964 68.2524 65.3891C78.7034 53.933 91.3193 48.2049 106.1 48.2049C120.433 48.2049 131.556 52.7428 139.469 61.8184V51.3293ZM93.5588 126.984C98.4857 131.894 104.906 134.349 112.819 134.349C120.731 134.349 127.151 131.894 132.078 126.984C137.005 122.075 139.469 115.454 139.469 107.122C139.469 98.7904 137.005 92.1696 132.078 87.2599C127.151 82.3501 120.731 79.8952 112.819 79.8952C104.906 79.8952 98.4857 82.3501 93.5588 87.2599C88.6319 92.1696 86.1685 98.7904 86.1685 107.122C86.1685 115.454 88.6319 122.075 93.5588 126.984Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M263.324 83.466H240.257V122.967C240.257 127.431 242.049 130.258 245.632 131.448C249.215 132.638 255.112 133.01 263.324 132.564V162.915C241.974 165.147 227.193 163.138 218.982 156.889C210.77 150.492 206.664 139.184 206.664 122.967V83.466H188.748V51.3293H206.664V30.1281L240.257 20.0854V51.3293H263.324V83.466Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M310.166 120.512C314.048 130.927 323.006 136.134 337.04 136.134C346.148 136.134 353.314 133.308 358.54 127.654L385.414 143.053C374.365 158.377 358.092 166.039 336.592 166.039C317.781 166.039 302.701 160.46 291.354 149.301C280.157 138.143 274.558 124.083 274.558 107.122C274.558 90.3099 280.082 76.3245 291.13 65.1659C302.328 53.8586 316.661 48.2049 334.129 48.2049C350.403 48.2049 363.914 53.8586 374.664 65.1659C385.563 76.3245 391.012 90.3099 391.012 107.122C391.012 111.883 390.564 116.347 389.669 120.512H310.166ZM309.494 95.5172H357.644C354.359 83.7635 346.446 77.8867 333.905 77.8867C320.916 77.8867 312.779 83.7635 309.494 95.5172Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M437.493 83.9123C437.493 86.144 439.359 88.0038 443.091 89.4916C446.973 90.8306 451.601 92.244 456.976 93.7318C462.351 95.0709 467.726 96.8562 473.101 99.0879C478.476 101.32 483.029 105.039 486.762 110.246C490.644 115.305 492.584 121.703 492.584 129.439C492.584 141.49 488.105 150.64 479.147 156.889C470.189 162.989 459.141 166.039 446.003 166.039C422.413 166.039 406.363 157.187 397.853 139.482L426.967 122.967C429.953 131.745 436.298 136.134 446.003 136.134C454.065 136.134 458.096 133.828 458.096 129.216C458.096 126.984 456.155 125.125 452.273 123.637C448.541 122.149 443.987 120.736 438.612 119.397C433.238 117.909 427.863 116.049 422.488 113.817C417.113 111.437 412.485 107.792 408.603 102.882C404.87 97.9721 403.004 91.9465 403.004 84.805C403.004 73.2001 407.185 64.1989 415.545 57.8013C424.056 51.4037 434.507 48.2049 446.899 48.2049C456.155 48.2049 464.591 50.2879 472.205 54.4537C479.819 58.4708 485.941 64.3476 490.569 72.0843L461.903 87.483C458.32 80.9367 453.318 77.6635 446.899 77.6635C440.628 77.6635 437.493 79.7465 437.493 83.9123Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M571.693 83.466H548.626V122.967C548.626 127.431 550.418 130.258 554.001 131.448C557.584 132.638 563.482 133.01 571.693 132.564V162.915C550.343 165.147 535.562 163.138 527.351 156.889C519.139 150.492 515.034 139.184 515.034 122.967V83.466H497.118V51.3293H515.034V30.1281L548.626 20.0854V51.3293H571.693V83.466Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M679.793 35.7074C675.911 39.5757 671.208 41.5098 665.684 41.5098C660.16 41.5098 655.382 39.5757 651.351 35.7074C647.47 31.6903 645.529 26.9293 645.529 21.4244C645.529 15.9195 647.47 11.2329 651.351 7.36464C655.382 3.34756 660.16 1.33902 665.684 1.33902C671.208 1.33902 675.911 3.34756 679.793 7.36464C683.824 11.2329 685.84 15.9195 685.84 21.4244C685.84 26.9293 683.824 31.6903 679.793 35.7074ZM648.888 162.915V51.3293H682.48V162.915H648.888Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M772.68 48.2049C784.624 48.2049 794.553 52.2964 802.465 60.4794C810.528 68.6623 814.559 79.9696 814.559 94.4014V162.915H780.966V99.3111C780.966 92.7648 779.1 87.7806 775.367 84.3587C771.784 80.7879 767.156 79.0026 761.483 79.0026C755.063 79.0026 749.986 80.9367 746.254 84.805C742.521 88.6733 740.655 94.4014 740.655 101.989V162.915H707.063V51.3293H740.655V61.8184C747.374 52.7428 758.049 48.2049 772.68 48.2049Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M869.428 83.9123C869.428 86.144 871.295 88.0038 875.027 89.4916C878.909 90.8306 883.537 92.244 888.912 93.7318C894.287 95.0709 899.662 96.8562 905.037 99.0879C910.411 101.32 914.965 105.039 918.698 110.246C922.579 115.305 924.52 121.703 924.52 129.439C924.52 141.49 920.041 150.64 911.083 156.889C902.125 162.989 891.077 166.039 877.939 166.039C854.349 166.039 838.299 157.187 829.789 139.482L858.903 122.967C861.889 131.745 868.234 136.134 877.939 136.134C886.001 136.134 890.032 133.828 890.032 129.216C890.032 126.984 888.091 125.125 884.209 123.637C880.477 122.149 875.923 120.736 870.548 119.397C865.173 117.909 859.799 116.049 854.424 113.817C849.049 111.437 844.421 107.792 840.539 102.882C836.806 97.9721 834.94 91.9465 834.94 84.805C834.94 73.2001 839.12 64.1989 847.481 57.8013C855.991 51.4037 866.442 48.2049 878.834 48.2049C888.091 48.2049 896.526 50.2879 904.141 54.4537C911.755 58.4708 917.876 64.3476 922.505 72.0843L893.839 87.483C890.256 80.9367 885.254 77.6635 878.834 77.6635C872.564 77.6635 869.428 79.7465 869.428 83.9123Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M972.197 35.7074C968.315 39.5757 963.612 41.5098 958.088 41.5098C952.564 41.5098 947.787 39.5757 943.755 35.7074C939.874 31.6903 937.933 26.9293 937.933 21.4244C937.933 15.9195 939.874 11.2329 943.755 7.36464C947.787 3.34756 952.564 1.33902 958.088 1.33902C963.612 1.33902 968.315 3.34756 972.197 7.36464C976.228 11.2329 978.244 15.9195 978.244 21.4244C978.244 26.9293 976.228 31.6903 972.197 35.7074ZM941.292 162.915V51.3293H974.885V162.915H941.292Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M1081.66 51.3293H1114.35V157.336C1114.35 174.892 1108.61 188.133 1097.11 197.06C1085.61 206.136 1071.65 210.673 1055.23 210.673C1030 210.673 1012.31 201.672 1002.15 183.67L1030.82 167.155C1035.9 176.528 1044.41 181.215 1056.35 181.215C1064.26 181.215 1070.46 179.132 1074.94 174.966C1079.42 170.949 1081.66 165.072 1081.66 157.336V147.07C1073.89 156.74 1062.99 161.576 1048.96 161.576C1033.28 161.576 1020.14 156.071 1009.54 145.061C999.093 133.903 993.868 120.512 993.868 104.89C993.868 89.2684 999.093 75.9526 1009.54 64.9428C1020.14 53.7842 1033.28 48.2049 1048.96 48.2049C1062.99 48.2049 1073.89 53.0403 1081.66 62.7111V51.3293ZM1035.07 123.637C1040.15 128.398 1046.65 130.778 1054.56 130.778C1062.47 130.778 1068.97 128.398 1074.04 123.637C1079.12 118.876 1081.66 112.627 1081.66 104.89C1081.66 97.1538 1079.12 90.905 1074.04 86.144C1068.97 81.383 1062.47 79.0026 1054.56 79.0026C1046.65 79.0026 1040.15 81.383 1035.07 86.144C1030 90.905 1027.46 97.1538 1027.46 104.89C1027.46 112.627 1030 118.876 1035.07 123.637Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M1204.62 48.2049C1216.56 48.2049 1226.49 52.2964 1234.4 60.4794C1242.46 68.6623 1246.49 79.9696 1246.49 94.4014V162.915H1212.9V99.3111C1212.9 92.7648 1211.04 87.7806 1207.3 84.3587C1203.72 80.7879 1199.09 79.0026 1193.42 79.0026C1187 79.0026 1181.92 80.9367 1178.19 84.805C1174.46 88.6733 1172.59 94.4014 1172.59 101.989V162.915H1139V6.69512H1172.59V61.8184C1179.31 52.7428 1189.98 48.2049 1204.62 48.2049Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M1335.18 83.466H1312.11V122.967C1312.11 127.431 1313.91 130.258 1317.49 131.448C1321.07 132.638 1326.97 133.01 1335.18 132.564V162.915C1313.83 165.147 1299.05 163.138 1290.84 156.889C1282.63 150.492 1278.52 139.184 1278.52 122.967V83.466H1260.61V51.3293H1278.52V30.1281L1312.11 20.0854V51.3293H1335.18V83.466Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M1384.91 83.9123C1384.91 86.144 1386.77 88.0038 1390.51 89.4916C1394.39 90.8306 1399.02 92.244 1404.39 93.7318C1409.77 95.0709 1415.14 96.8562 1420.52 99.0879C1425.89 101.32 1430.44 105.039 1434.18 110.246C1438.06 115.305 1440 121.703 1440 129.439C1440 141.49 1435.52 150.64 1426.56 156.889C1417.6 162.989 1406.56 166.039 1393.42 166.039C1369.83 166.039 1353.78 157.187 1345.27 139.482L1374.38 122.967C1377.37 131.745 1383.71 136.134 1393.42 136.134C1401.48 136.134 1405.51 133.828 1405.51 129.216C1405.51 126.984 1403.57 125.125 1399.69 123.637C1395.96 122.149 1391.4 120.736 1386.03 119.397C1380.65 117.909 1375.28 116.049 1369.9 113.817C1364.53 111.437 1359.9 107.792 1356.02 102.882C1352.29 97.9721 1350.42 91.9465 1350.42 84.805C1350.42 73.2001 1354.6 64.1989 1362.96 57.8013C1371.47 51.4037 1381.92 48.2049 1394.31 48.2049C1403.57 48.2049 1412.01 50.2879 1419.62 54.4537C1427.23 58.4708 1433.36 64.3476 1437.98 72.0843L1409.32 87.483C1405.74 80.9367 1400.73 77.6635 1394.31 77.6635C1388.04 77.6635 1384.91 79.7465 1384.91 83.9123Z"
              fill="black"
              fill-opacity="0.1"
            />
            <path
              d="M0 346.578V183.663H33.5926V346.578H0Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M139.469 234.993H173.061V346.578H139.469V336.089C131.556 345.165 120.433 349.703 106.1 349.703C91.3193 349.703 78.7034 344.049 68.2524 332.742C57.8014 321.285 52.5759 307.3 52.5759 290.785C52.5759 274.271 57.8014 260.36 68.2524 249.052C78.7034 237.596 91.3193 231.868 106.1 231.868C120.433 231.868 131.556 236.406 139.469 245.482V234.993ZM93.5588 310.648C98.4857 315.557 104.906 318.012 112.819 318.012C120.731 318.012 127.151 315.557 132.078 310.648C137.005 305.738 139.469 299.117 139.469 290.785C139.469 282.454 137.005 275.833 132.078 270.923C127.151 266.013 120.731 263.559 112.819 263.559C104.906 263.559 98.4857 266.013 93.5588 270.923C88.6319 275.833 86.1685 282.454 86.1685 290.785C86.1685 299.117 88.6319 305.738 93.5588 310.648Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M263.324 267.129H240.257V306.63C240.257 311.094 242.049 313.921 245.632 315.111C249.215 316.301 255.112 316.673 263.324 316.227V346.578C241.974 348.81 227.193 346.801 218.982 340.553C210.77 334.155 206.664 322.848 206.664 306.63V267.129H188.748V234.993H206.664V213.791L240.257 203.749V234.993H263.324V267.129Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M310.166 304.176C314.048 314.59 323.006 319.798 337.04 319.798C346.148 319.798 353.314 316.971 358.54 311.317L385.414 326.716C374.365 342.04 358.092 349.703 336.592 349.703C317.781 349.703 302.701 344.123 291.354 332.965C280.157 321.806 274.558 307.746 274.558 290.785C274.558 273.973 280.082 259.988 291.13 248.829C302.328 237.522 316.661 231.868 334.129 231.868C350.403 231.868 363.914 237.522 374.664 248.829C385.563 259.988 391.012 273.973 391.012 290.785C391.012 295.546 390.564 300.01 389.669 304.176H310.166ZM309.494 279.18H357.644C354.359 267.427 346.446 261.55 333.905 261.55C320.916 261.55 312.779 267.427 309.494 279.18Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M437.493 267.576C437.493 269.807 439.359 271.667 443.091 273.155C446.973 274.494 451.601 275.907 456.976 277.395C462.351 278.734 467.726 280.52 473.101 282.751C478.476 284.983 483.029 288.702 486.762 293.91C490.644 298.968 492.584 305.366 492.584 313.102C492.584 325.154 488.105 334.304 479.147 340.553C470.189 346.653 459.141 349.703 446.003 349.703C422.413 349.703 406.363 340.85 397.853 323.145L426.967 306.63C429.953 315.409 436.298 319.798 446.003 319.798C454.065 319.798 458.096 317.491 458.096 312.879C458.096 310.648 456.155 308.788 452.273 307.3C448.541 305.812 443.987 304.399 438.612 303.06C433.238 301.572 427.863 299.712 422.488 297.48C417.113 295.1 412.485 291.455 408.603 286.545C404.87 281.635 403.004 275.61 403.004 268.468C403.004 256.863 407.185 247.862 415.545 241.465C424.056 235.067 434.507 231.868 446.899 231.868C456.155 231.868 464.591 233.951 472.205 238.117C479.819 242.134 485.941 248.011 490.569 255.748L461.903 271.146C458.32 264.6 453.318 261.327 446.899 261.327C440.628 261.327 437.493 263.41 437.493 267.576Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M571.693 267.129H548.626V306.63C548.626 311.094 550.418 313.921 554.001 315.111C557.584 316.301 563.482 316.673 571.693 316.227V346.578C550.343 348.81 535.562 346.801 527.351 340.553C519.139 334.155 515.034 322.848 515.034 306.63V267.129H497.118V234.993H515.034V213.791L548.626 203.749V234.993H571.693V267.129Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M679.793 219.371C675.911 223.239 671.208 225.173 665.684 225.173C660.16 225.173 655.382 223.239 651.351 219.371C647.47 215.354 645.529 210.593 645.529 205.088C645.529 199.583 647.47 194.896 651.351 191.028C655.382 187.011 660.16 185.002 665.684 185.002C671.208 185.002 675.911 187.011 679.793 191.028C683.824 194.896 685.84 199.583 685.84 205.088C685.84 210.593 683.824 215.354 679.793 219.371ZM648.888 346.578V234.993H682.48V346.578H648.888Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M772.68 231.868C784.624 231.868 794.553 235.96 802.465 244.143C810.528 252.326 814.559 263.633 814.559 278.065V346.578H780.966V282.974C780.966 276.428 779.1 271.444 775.367 268.022C771.784 264.451 767.156 262.666 761.483 262.666C755.063 262.666 749.986 264.6 746.254 268.468C742.521 272.337 740.655 278.065 740.655 285.652V346.578H707.063V234.993H740.655V245.482C747.374 236.406 758.049 231.868 772.68 231.868Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M869.428 267.576C869.428 269.807 871.295 271.667 875.027 273.155C878.909 274.494 883.537 275.907 888.912 277.395C894.287 278.734 899.662 280.52 905.037 282.751C910.411 284.983 914.965 288.702 918.698 293.91C922.579 298.968 924.52 305.366 924.52 313.102C924.52 325.154 920.041 334.304 911.083 340.553C902.125 346.653 891.077 349.703 877.939 349.703C854.349 349.703 838.299 340.85 829.789 323.145L858.903 306.63C861.889 315.409 868.234 319.798 877.939 319.798C886.001 319.798 890.032 317.491 890.032 312.879C890.032 310.648 888.091 308.788 884.209 307.3C880.477 305.812 875.923 304.399 870.548 303.06C865.173 301.572 859.799 299.712 854.424 297.48C849.049 295.1 844.421 291.455 840.539 286.545C836.806 281.635 834.94 275.61 834.94 268.468C834.94 256.863 839.12 247.862 847.481 241.465C855.991 235.067 866.442 231.868 878.834 231.868C888.091 231.868 896.526 233.951 904.141 238.117C911.755 242.134 917.876 248.011 922.505 255.748L893.839 271.146C890.256 264.6 885.254 261.327 878.834 261.327C872.564 261.327 869.428 263.41 869.428 267.576Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M972.197 219.371C968.315 223.239 963.612 225.173 958.088 225.173C952.564 225.173 947.787 223.239 943.755 219.371C939.874 215.354 937.933 210.593 937.933 205.088C937.933 199.583 939.874 194.896 943.755 191.028C947.787 187.011 952.564 185.002 958.088 185.002C963.612 185.002 968.315 187.011 972.197 191.028C976.228 194.896 978.244 199.583 978.244 205.088C978.244 210.593 976.228 215.354 972.197 219.371ZM941.292 346.578V234.993H974.885V346.578H941.292Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M1081.66 234.993H1114.35V340.999C1114.35 358.555 1108.61 371.796 1097.11 380.723C1085.61 389.799 1071.65 394.337 1055.23 394.337C1030 394.337 1012.31 385.336 1002.15 367.333L1030.82 350.818C1035.9 360.192 1044.41 364.878 1056.35 364.878C1064.26 364.878 1070.46 362.795 1074.94 358.629C1079.42 354.612 1081.66 348.735 1081.66 340.999V330.733C1073.89 340.404 1062.99 345.239 1048.96 345.239C1033.28 345.239 1020.14 339.734 1009.54 328.724C999.093 317.566 993.868 304.176 993.868 288.554C993.868 272.932 999.093 259.616 1009.54 248.606C1020.14 237.447 1033.28 231.868 1048.96 231.868C1062.99 231.868 1073.89 236.704 1081.66 246.374V234.993ZM1035.07 307.3C1040.15 312.061 1046.65 314.441 1054.56 314.441C1062.47 314.441 1068.97 312.061 1074.04 307.3C1079.12 302.539 1081.66 296.29 1081.66 288.554C1081.66 280.817 1079.12 274.568 1074.04 269.807C1068.97 265.046 1062.47 262.666 1054.56 262.666C1046.65 262.666 1040.15 265.046 1035.07 269.807C1030 274.568 1027.46 280.817 1027.46 288.554C1027.46 296.29 1030 302.539 1035.07 307.3Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M1204.62 231.868C1216.56 231.868 1226.49 235.96 1234.4 244.143C1242.46 252.326 1246.49 263.633 1246.49 278.065V346.578H1212.9V282.974C1212.9 276.428 1211.04 271.444 1207.3 268.022C1203.72 264.451 1199.09 262.666 1193.42 262.666C1187 262.666 1181.92 264.6 1178.19 268.468C1174.46 272.337 1172.59 278.065 1172.59 285.652V346.578H1139V190.358H1172.59V245.482C1179.31 236.406 1189.98 231.868 1204.62 231.868Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M1335.18 267.129H1312.11V306.63C1312.11 311.094 1313.91 313.921 1317.49 315.111C1321.07 316.301 1326.97 316.673 1335.18 316.227V346.578C1313.83 348.81 1299.05 346.801 1290.84 340.553C1282.63 334.155 1278.52 322.848 1278.52 306.63V267.129H1260.61V234.993H1278.52V213.791L1312.11 203.749V234.993H1335.18V267.129Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M1384.91 267.576C1384.91 269.807 1386.77 271.667 1390.51 273.155C1394.39 274.494 1399.02 275.907 1404.39 277.395C1409.77 278.734 1415.14 280.52 1420.52 282.751C1425.89 284.983 1430.44 288.702 1434.18 293.91C1438.06 298.968 1440 305.366 1440 313.102C1440 325.154 1435.52 334.304 1426.56 340.553C1417.6 346.653 1406.56 349.703 1393.42 349.703C1369.83 349.703 1353.78 340.85 1345.27 323.145L1374.38 306.63C1377.37 315.409 1383.71 319.798 1393.42 319.798C1401.48 319.798 1405.51 317.491 1405.51 312.879C1405.51 310.648 1403.57 308.788 1399.69 307.3C1395.96 305.812 1391.4 304.399 1386.03 303.06C1380.65 301.572 1375.28 299.712 1369.9 297.48C1364.53 295.1 1359.9 291.455 1356.02 286.545C1352.29 281.635 1350.42 275.61 1350.42 268.468C1350.42 256.863 1354.6 247.862 1362.96 241.465C1371.47 235.067 1381.92 231.868 1394.31 231.868C1403.57 231.868 1412.01 233.951 1419.62 238.117C1427.23 242.134 1433.36 248.011 1437.98 255.748L1409.32 271.146C1405.74 264.6 1400.73 261.327 1394.31 261.327C1388.04 261.327 1384.91 263.41 1384.91 267.576Z"
              fill="black"
              fill-opacity="0.05"
            />
            <path
              d="M0 530.241V367.327H33.5926V530.241H0Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M139.469 418.656H173.061V530.241H139.469V519.752C131.556 528.828 120.433 533.366 106.1 533.366C91.3193 533.366 78.7034 527.712 68.2524 516.405C57.8014 504.949 52.5759 490.963 52.5759 474.449C52.5759 457.934 57.8014 444.023 68.2524 432.716C78.7034 421.26 91.3193 415.531 106.1 415.531C120.433 415.531 131.556 420.069 139.469 429.145V418.656ZM93.5588 494.311C98.4857 499.221 104.906 501.676 112.819 501.676C120.731 501.676 127.151 499.221 132.078 494.311C137.005 489.401 139.469 482.78 139.469 474.449C139.469 466.117 137.005 459.496 132.078 454.586C127.151 449.677 120.731 447.222 112.819 447.222C104.906 447.222 98.4857 449.677 93.5588 454.586C88.6319 459.496 86.1685 466.117 86.1685 474.449C86.1685 482.78 88.6319 489.401 93.5588 494.311Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M263.324 450.793H240.257V490.294C240.257 494.757 242.049 497.584 245.632 498.774C249.215 499.965 255.112 500.336 263.324 499.89V530.241C241.974 532.473 227.193 530.465 218.982 524.216C210.77 517.818 206.664 506.511 206.664 490.294V450.793H188.748V418.656H206.664V397.455L240.257 387.412V418.656H263.324V450.793Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M310.166 487.839C314.048 498.254 323.006 503.461 337.04 503.461C346.148 503.461 353.314 500.634 358.54 494.98L385.414 510.379C374.365 525.704 358.092 533.366 336.592 533.366C317.781 533.366 302.701 527.786 291.354 516.628C280.157 505.469 274.558 491.41 274.558 474.449C274.558 457.636 280.082 443.651 291.13 432.492C302.328 421.185 316.661 415.531 334.129 415.531C350.403 415.531 363.914 421.185 374.664 432.492C385.563 443.651 391.012 457.636 391.012 474.449C391.012 479.21 390.564 483.673 389.669 487.839H310.166ZM309.494 462.844H357.644C354.359 451.09 346.446 445.213 333.905 445.213C320.916 445.213 312.779 451.09 309.494 462.844Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M437.493 451.239C437.493 453.471 439.359 455.33 443.091 456.818C446.973 458.157 451.601 459.571 456.976 461.058C462.351 462.397 467.726 464.183 473.101 466.414C478.476 468.646 483.029 472.366 486.762 477.573C490.644 482.632 492.584 489.029 492.584 496.766C492.584 508.817 488.105 517.967 479.147 524.216C470.189 530.316 459.141 533.366 446.003 533.366C422.413 533.366 406.363 524.513 397.853 506.808L426.967 490.294C429.953 499.072 436.298 503.461 446.003 503.461C454.065 503.461 458.096 501.155 458.096 496.543C458.096 494.311 456.155 492.451 452.273 490.963C448.541 489.475 443.987 488.062 438.612 486.723C433.238 485.235 427.863 483.375 422.488 481.144C417.113 478.763 412.485 475.118 408.603 470.208C404.87 465.299 403.004 459.273 403.004 452.132C403.004 440.527 407.185 431.525 415.545 425.128C424.056 418.73 434.507 415.531 446.899 415.531C456.155 415.531 464.591 417.614 472.205 421.78C479.819 425.797 485.941 431.674 490.569 439.411L461.903 454.81C458.32 448.263 453.318 444.99 446.899 444.99C440.628 444.99 437.493 447.073 437.493 451.239Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M571.693 450.793H548.626V490.294C548.626 494.757 550.418 497.584 554.001 498.774C557.584 499.965 563.482 500.336 571.693 499.89V530.241C550.343 532.473 535.562 530.465 527.351 524.216C519.139 517.818 515.034 506.511 515.034 490.294V450.793H497.118V418.656H515.034V397.455L548.626 387.412V418.656H571.693V450.793Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M679.793 403.034C675.911 406.902 671.208 408.836 665.684 408.836C660.16 408.836 655.382 406.902 651.351 403.034C647.47 399.017 645.529 394.256 645.529 388.751C645.529 383.246 647.47 378.559 651.351 374.691C655.382 370.674 660.16 368.666 665.684 368.666C671.208 368.666 675.911 370.674 679.793 374.691C683.824 378.559 685.84 383.246 685.84 388.751C685.84 394.256 683.824 399.017 679.793 403.034ZM648.888 530.241V418.656H682.48V530.241H648.888Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M772.68 415.531C784.624 415.531 794.553 419.623 802.465 427.806C810.528 435.989 814.559 447.296 814.559 461.728V530.241H780.966V466.638C780.966 460.091 779.1 455.107 775.367 451.685C771.784 448.114 767.156 446.329 761.483 446.329C755.063 446.329 749.986 448.263 746.254 452.132C742.521 456 740.655 461.728 740.655 469.316V530.241H707.063V418.656H740.655V429.145C747.374 420.069 758.049 415.531 772.68 415.531Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M869.428 451.239C869.428 453.471 871.295 455.33 875.027 456.818C878.909 458.157 883.537 459.571 888.912 461.058C894.287 462.397 899.662 464.183 905.037 466.414C910.411 468.646 914.965 472.366 918.698 477.573C922.579 482.632 924.52 489.029 924.52 496.766C924.52 508.817 920.041 517.967 911.083 524.216C902.125 530.316 891.077 533.366 877.939 533.366C854.349 533.366 838.299 524.513 829.789 506.808L858.903 490.294C861.889 499.072 868.234 503.461 877.939 503.461C886.001 503.461 890.032 501.155 890.032 496.543C890.032 494.311 888.091 492.451 884.209 490.963C880.477 489.475 875.923 488.062 870.548 486.723C865.173 485.235 859.799 483.375 854.424 481.144C849.049 478.763 844.421 475.118 840.539 470.208C836.806 465.299 834.94 459.273 834.94 452.132C834.94 440.527 839.12 431.525 847.481 425.128C855.991 418.73 866.442 415.531 878.834 415.531C888.091 415.531 896.526 417.614 904.141 421.78C911.755 425.797 917.876 431.674 922.505 439.411L893.839 454.81C890.256 448.263 885.254 444.99 878.834 444.99C872.564 444.99 869.428 447.073 869.428 451.239Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M972.197 403.034C968.315 406.902 963.612 408.836 958.088 408.836C952.564 408.836 947.787 406.902 943.755 403.034C939.874 399.017 937.933 394.256 937.933 388.751C937.933 383.246 939.874 378.559 943.755 374.691C947.787 370.674 952.564 368.666 958.088 368.666C963.612 368.666 968.315 370.674 972.197 374.691C976.228 378.559 978.244 383.246 978.244 388.751C978.244 394.256 976.228 399.017 972.197 403.034ZM941.292 530.241V418.656H974.885V530.241H941.292Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M1081.66 418.656H1114.35V524.662C1114.35 542.218 1108.61 555.46 1097.11 564.387C1085.61 573.462 1071.65 578 1055.23 578C1030 578 1012.31 568.999 1002.15 550.996L1030.82 534.482C1035.9 543.855 1044.41 548.541 1056.35 548.541C1064.26 548.541 1070.46 546.458 1074.94 542.293C1079.42 538.276 1081.66 532.399 1081.66 524.662V514.396C1073.89 524.067 1062.99 528.902 1048.96 528.902C1033.28 528.902 1020.14 523.397 1009.54 512.388C999.093 501.229 993.868 487.839 993.868 472.217C993.868 456.595 999.093 443.279 1009.54 432.269C1020.14 421.111 1033.28 415.531 1048.96 415.531C1062.99 415.531 1073.89 420.367 1081.66 430.038V418.656ZM1035.07 490.963C1040.15 495.724 1046.65 498.105 1054.56 498.105C1062.47 498.105 1068.97 495.724 1074.04 490.963C1079.12 486.202 1081.66 479.954 1081.66 472.217C1081.66 464.48 1079.12 458.232 1074.04 453.471C1068.97 448.71 1062.47 446.329 1054.56 446.329C1046.65 446.329 1040.15 448.71 1035.07 453.471C1030 458.232 1027.46 464.48 1027.46 472.217C1027.46 479.954 1030 486.202 1035.07 490.963Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M1204.62 415.531C1216.56 415.531 1226.49 419.623 1234.4 427.806C1242.46 435.989 1246.49 447.296 1246.49 461.728V530.241H1212.9V466.638C1212.9 460.091 1211.04 455.107 1207.3 451.685C1203.72 448.114 1199.09 446.329 1193.42 446.329C1187 446.329 1181.92 448.263 1178.19 452.132C1174.46 456 1172.59 461.728 1172.59 469.316V530.241H1139V374.022H1172.59V429.145C1179.31 420.069 1189.98 415.531 1204.62 415.531Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M1335.18 450.793H1312.11V490.294C1312.11 494.757 1313.91 497.584 1317.49 498.774C1321.07 499.965 1326.97 500.336 1335.18 499.89V530.241C1313.83 532.473 1299.05 530.465 1290.84 524.216C1282.63 517.818 1278.52 506.511 1278.52 490.294V450.793H1260.61V418.656H1278.52V397.455L1312.11 387.412V418.656H1335.18V450.793Z"
              fill="black"
              fill-opacity="0.02"
            />
            <path
              d="M1384.91 451.239C1384.91 453.471 1386.77 455.33 1390.51 456.818C1394.39 458.157 1399.02 459.571 1404.39 461.058C1409.77 462.397 1415.14 464.183 1420.52 466.414C1425.89 468.646 1430.44 472.366 1434.18 477.573C1438.06 482.632 1440 489.029 1440 496.766C1440 508.817 1435.52 517.967 1426.56 524.216C1417.6 530.316 1406.56 533.366 1393.42 533.366C1369.83 533.366 1353.78 524.513 1345.27 506.808L1374.38 490.294C1377.37 499.072 1383.71 503.461 1393.42 503.461C1401.48 503.461 1405.51 501.155 1405.51 496.543C1405.51 494.311 1403.57 492.451 1399.69 490.963C1395.96 489.475 1391.4 488.062 1386.03 486.723C1380.65 485.235 1375.28 483.375 1369.9 481.144C1364.53 478.763 1359.9 475.118 1356.02 470.208C1352.29 465.299 1350.42 459.273 1350.42 452.132C1350.42 440.527 1354.6 431.525 1362.96 425.128C1371.47 418.73 1381.92 415.531 1394.31 415.531C1403.57 415.531 1412.01 417.614 1419.62 421.78C1427.23 425.797 1433.36 431.674 1437.98 439.411L1409.32 454.81C1405.74 448.263 1400.73 444.99 1394.31 444.99C1388.04 444.99 1384.91 447.073 1384.91 451.239Z"
              fill="black"
              fill-opacity="0.02"
            />
          </svg>
            </div>

            <div class="max-w-7xl mx-auto mt-20 sm:mt-32 md:mt-52 relative">
                <!-- Featured Article will be injected by JavaScript -->
                <div id="featuredArticle"></div>

                <!-- News Carousel will be injected by JavaScript -->
                <div class="insights-carousel relative" id="insightsCarousel"></div>

                <div class="flex items-center justify-between mt-8 sm:mt-12 flex-row gap-6 sm:gap-0">
                    <div class="flex items-end gap-1">
                        <span class="insights-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-[linear-gradient(315deg,_#00CABD_0%,_#0037A6_100%),linear-gradient(276deg,_#13C5B8_0%,_#2A44B0_100%)] bg-clip-text leading-none insights-current">01</span
              >
              <span class="text-base sm:text-lg text-gray-400 font-light pb-1"
                >/ 03</span
              >
            </div>
            <div class="flex gap-3 sm:gap-4">
              <button
                class="insights-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Previous insight "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-4 sm:h-6 w-4 sm:w-6"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M15 19l-7-7 7-7 "
                  />
                </svg>
              </button>
              <button
                class="insights-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Next insight "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg "
                  class="h-4 sm:h-6 w-4 sm:w-6"
                  fill="none "
                  viewBox="0 0 24 24 "
                  stroke="currentColor "
                >
                  <path
                    stroke-linecap="round "
                    stroke-linejoin="round "
                    stroke-width="2 "
                    d="M9 5l7 7-7 7 "
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="relative mt-8 sm:mt-12 px-4 sm:px-6 bg-white">
        <div
          class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 md:gap-20"
        >
          <div class="relative hidden lg:block overflow-hidden">
            <div class="sticky top-20">
              <h1
                class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-15 uppercase text-outline-gray leading-none"
              >
                faq
              </h1>
              <h1
                class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-10 uppercase text-outline-gray leading-none -mt-4 md:-mt-8 lg:-mt-10"
              >
                faq
              </h1>
              <h1
                class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-5 uppercase text-outline-gray leading-none -mt-4 md:-mt-8 lg:-mt-10"
              >
                faq
              </h1>
            </div>
          </div>

          <div class="space-y-1 sm:space-y-2">
            <!-- Item 1 -->
            <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
              <div
                class="faq-toggle flex justify-between items-center cursor-pointer group gap-3"
              >
                <h3
                  class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]"
                >
                  How can Teceze improve our digital learning infrastructure?
                </h3>
                <span
                  class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300"
                  >−</span
                >
              </div>
              <div
                class="faq-content overflow-hidden transition-all duration-300 max-h-96 opacity-100 mt-3 sm:mt-4"
              >
                <p
                  class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg"
                >
                  We build end-to-end digital learning environments, LMS, cloud
                  platforms, and smart campus networks, ensuring seamless,
                  high-performance teaching and learning.
                </p>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
              <div
                class="faq-toggle flex justify-between items-center cursor-pointer group gap-3"
              >
                <h3
                  class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]"
                >
                  Can Teceze create custom applications for our institution?
                </h3>
                <span
                  class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300"
                  >+</span
                >
              </div>
              <div
                class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0"
              >
                <p
                  class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg"
                >
                  Yes. We develop tailored solutions like student portals,
                  attendance systems, and communication platforms aligned to
                  your workflows and user experience.
                </p>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
              <div
                class="faq-toggle flex justify-between items-center cursor-pointer group gap-3"
              >
                <h3
                  class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]"
                >
                  How does Teceze protect student and staff data?
                </h3>
                <span
                  class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300"
                  >+</span
                >
              </div>
              <div
                class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0"
              >
                <p
                  class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg"
                >
                  Through encryption, role-based access, compliance frameworks,
                  and continuous monitoring, keeping all academic and personal
                  data secure.
                </p>
              </div>
            </div>

            <!-- Item 4 -->
            <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
              <div
                class="faq-toggle flex justify-between items-center cursor-pointer group gap-3"
              >
                <h3
                  class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]"
                >
                  How do you support our move to the cloud?
                </h3>
                <span
                  class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300"
                  >+</span
                >
              </div>
              <div
                class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0"
              >
                <p
                  class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg"
                >
                  We manage the full migration from planning to deployment with
                  a phased approach that ensures minimal disruption to academic
                  operations.
                </p>
              </div>
            </div>

            <!-- Item 5 -->
            <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
              <div
                class="faq-toggle flex justify-between items-center cursor-pointer group gap-3"
              >
                <h3
                  class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]"
                >
                  Can your solutions scale as we grow?
                </h3>
                <span
                  class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300"
                  >+</span
                >
              </div>
              <div
                class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0"
              >
                <p
                  class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg"
                >
                  Absolutely. Our infrastructure is built to scale, supporting
                  new campuses, more students, and evolving digital needs
                  without rework.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="py-12 sm:py-16 md:py-20 lg:py-20 px-4 sm:px-6 lg:px-20">
        <div
          class="max-w-7xl mx-auto bg-[#011627] rounded-2xl sm:rounded-3xl lg:rounded-[3rem] relative overflow-hidden p-8 sm:p-12 md:p-16 text-center"
        >
          <svg
            class="absolute -left-8 sm:-left-10 -top-8 sm:-top-10 w-40 sm:w-60 md:w-80 h-40 sm:h-60 md:h-80"
            width="256"
            height="292"
            viewBox="0 0 256 292"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="51"
              cy="47"
              r="169.5"
              stroke="url(#paint0_linear_0_1)"
              stroke-width="71"
            />
            <circle
              cx="51"
              cy="87"
              r="204"
              stroke="url(#paint1_linear_0_1)"
              stroke-width="2"
            />
            <defs>
              <linearGradient
                id="paint0_linear_0_1"
                x1="229.5"
                y1="8.00003"
                x2="-37"
                y2="235"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.502626" stop-color="#13C5B8" />
                <stop offset="1" stop-color="#000A2D" />
              </linearGradient>
              <linearGradient
                id="paint1_linear_0_1"
                x1="229.5"
                y1="48"
                x2="-37"
                y2="275"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#282761" />
                <stop offset="0.502626" stop-color="#13C5B8" />
                <stop offset="1" stop-color="#282761" />
              </linearGradient>
            </defs>
          </svg>

          <svg
            class="absolute -right-12 sm:-right-16 md:-right-20 -bottom-12 sm:-bottom-16 md:-bottom-20 w-40 sm:w-60 md:w-80 h-40 sm:h-60 md:h-80"
            width="295"
            height="257"
            viewBox="0 0 295 257"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="205"
              cy="205"
              r="204"
              stroke="url(#paint0_linear_0_1)"
              stroke-width="2"
            />
            <circle
              cx="242"
              cy="205"
              r="169.5"
              stroke="url(#paint1_linear_0_1)"
              stroke-width="71"
            />
            <defs>
              <linearGradient
                id="paint0_linear_0_1"
                x1="383.5"
                y1="166"
                x2="117"
                y2="393"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#282761" />
                <stop offset="0.502626" stop-color="#13C5B8" />
                <stop offset="1" stop-color="#282761" />
              </linearGradient>
              <linearGradient
                id="paint1_linear_0_1"
                x1="420.5"
                y1="166"
                x2="154"
                y2="393"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#000A2D" />
                <stop offset="0.502626" stop-color="#13C5B8" />
                <stop offset="1" stop-color="#000A2D" />
              </linearGradient>
            </defs>
          </svg>

          <div class="relative z-10">
            <h2
              class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-3 sm:mb-4 leading-tight"
            >
              Have a project in mind?<br />We'd love to hear about it.
            </h2>
            <p
              class="text-gray-400 text-xs sm:text-sm max-w-lg mx-auto mb-6 sm:mb-10 leading-relaxed"
            >
              Our digital workplace solutions are designed to enhance
              collaboration, improve productivity, and enable secure access to
              tools and data from anywhere.
            </p>
            <a
              href="#"
              class="inline-flex items-center gap-3 bg-gradient-to-r from-[#2B59C3] to-[#25D1B8] text-white px-5 py-2 md:px-10 md:py-3 rounded-full font-semibold transition-transform duration-300 hover:scale-105 shadow-lg"
            >
              <!-- Simple Phone Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                />
              </svg>

              <span class="ttext-md md:text-lg tracking-wide">Let's Talk</span>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <script>
        // ==================================
        // DATA ARRAYS FOR ALL CAROUSELS
        // ==================================

        // Testimonials Data
        const testimonialsData = [{
            quote: "Teceze helped us strengthen our IT operations with proactive support, better visibility, and a team that understood both speed and accountability.",
            name: "David Miller",
            role: "Chief Technology Officer",
            company: "Nexora Global Solutions",
            image: "images/profile-frame.png",
            portrait: "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000",
        }, {
            quote: "The proactive monitoring and rapid response from Teceze transformed our security posture. We've seen a 60% reduction in incidents and gained complete visibility across our infrastructure.",
            name: "Sarah Chen",
            role: "VP of Engineering",
            company: "Apex Financial Technologies",
            image: "images/profile-frame.png",
            portrait: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=1000",
        }, {
            quote: "Their 24/7 support and compliance expertise helped us navigate complex regulatory requirements. Teceze is truly a trusted partner in our digital transformation journey.",
            name: "Michael Rodrigues",
            role: "Chief Information Officer",
            company: "Meridian Trust Bank",
            image: "images/profile-frame.png",
            portrait: "https://images.unsplash.com/photo-1557862921-37829c790f19?auto=format&fit=crop&q=80&w=1000",
        }, ];

        // Capabilities Data
        const capabilitiesData = [{
                type: "image",
                category: "Connectivity",
                title: "Smart Campus Connectivity",
                description: "High-performance networks designed for uninterrupted campus-wide connectivity",
                icon: "M46.0139 11.4583L26.5139 4.95828C26.1803 4.84708 25.8197 4.84708 25.4861 4.95828L5.98609 11.4583C5.66253 11.5661 5.3811 11.7731 5.18169 12.0498C4.98227 12.3265 4.87497 12.6589 4.875 13V29.25C4.875 29.681 5.0462 30.0943 5.35095 30.399C5.6557 30.7038 6.06902 30.875 6.5 30.875C6.93098 30.875 7.3443 30.7038 7.64905 30.399C7.95379 30.0943 8.125 29.681 8.125 29.25V15.2547L14.948 17.5277C13.1352 20.4563 12.5587 23.9847 13.3452 27.338C14.1316 30.6913 16.2167 33.5955 19.1425 35.4128C15.4862 36.8469 12.3256 39.4408 10.0141 42.9873C9.89384 43.166 9.81034 43.3668 9.76841 43.578C9.72647 43.7893 9.72694 44.0067 9.76979 44.2178C9.81263 44.4288 9.897 44.6293 10.018 44.8074C10.139 44.9856 10.2942 45.1379 10.4746 45.2556C10.6549 45.3732 10.8569 45.4538 11.0687 45.4927C11.2805 45.5316 11.4979 45.5281 11.7084 45.4822C11.9188 45.4363 12.118 45.3491 12.2944 45.2256C12.4708 45.1021 12.6209 44.9447 12.7359 44.7627C15.797 40.0664 20.6314 37.375 26 37.375C31.3686 37.375 36.203 40.0664 39.2641 44.7627C39.5024 45.1169 39.8706 45.3631 40.289 45.448C40.7074 45.533 41.1424 45.4498 41.5 45.2166C41.8577 44.9834 42.1091 44.6187 42.2 44.2016C42.2909 43.7844 42.214 43.3483 41.9859 42.9873C39.6744 39.4408 36.5016 36.8469 32.8575 35.4128C35.7805 33.5955 37.8636 30.6933 38.6499 27.3424C39.4362 23.9915 38.8616 20.4656 37.052 17.5378L46.0139 14.5519C46.3375 14.4441 46.619 14.2372 46.8185 13.9604C47.018 13.6837 47.1254 13.3513 47.1254 13.0102C47.1254 12.669 47.018 12.3366 46.8185 12.0599C46.619 11.7832 46.3375 11.5762 46.0139 11.4684V11.4583ZM35.75 24.375C35.7504 25.9164 35.3854 27.436 34.6848 28.809C33.9843 30.182 32.9682 31.3694 31.7199 32.2737C30.4716 33.178 29.0266 33.7734 27.5036 34.0111C25.9807 34.2488 24.423 34.1221 22.9585 33.6412C21.494 33.1604 20.1644 32.3392 19.0787 31.2449C17.993 30.1507 17.1823 28.8147 16.7129 27.3464C16.2436 25.8782 16.1291 24.3196 16.3787 22.7985C16.6284 21.2775 17.2352 19.8373 18.1492 18.5961L25.4861 21.0336C25.8197 21.1448 26.1803 21.1448 26.5139 21.0336L33.8508 18.5961C35.0853 20.2698 35.751 22.2952 35.75 24.375ZM26 17.7877L11.6391 13L26 8.21234L40.3609 13L26 17.7877Z",
                image: "images/education-connectivity-bg-img.png",
            }, {
                type: "image",
                category: "Secure Access",
                title: "Student Data Security",
                description: "Protecting student and institutional data with robust security controls that ensure privacy, prevent breaches, and maintain compliance with education data regulations.",
                image: "images/education-security-bg-img.png",
                icon: "M26 22.75C24.6342 22.7505 23.3141 23.2424 22.2812 24.1359C21.2482 25.0294 20.5712 26.2649 20.374 27.6164C20.1768 28.9679 20.4726 30.3452 21.2072 31.4966C21.9418 32.648 23.0663 33.4967 24.375 33.8873V37.375C24.375 37.806 24.5462 38.2193 24.851 38.524C25.1557 38.8288 25.569 39 26 39C26.431 39 26.8443 38.8288 27.149 38.524C27.4538 38.2193 27.625 37.806 27.625 37.375V33.8873C28.9337 33.4967 30.0582 32.648 30.7928 31.4966C31.5274 30.3452 31.8232 28.9679 31.626 27.6164C31.4288 26.2649 30.7518 25.0294 29.7188 24.1359C28.6859 23.2424 27.3658 22.7505 26 22.75ZM26 30.875C25.5179 30.875 25.0466 30.732 24.6458 30.4642C24.245 30.1964 23.9325 29.8157 23.748 29.3703C23.5636 28.9249 23.5153 28.4348 23.6093 27.962C23.7034 27.4891 23.9355 27.0548 24.2764 26.7139C24.6173 26.373 25.0516 26.1409 25.5245 26.0468C25.9973 25.9528 26.4874 26.0011 26.9328 26.1855C27.3782 26.37 27.7589 26.6825 28.0267 27.0833C28.2945 27.4841 28.4375 27.9554 28.4375 28.4375C28.4375 29.084 28.1807 29.704 27.7236 30.1611C27.2665 30.6182 26.6465 30.875 26 30.875ZM42.25 16.25H35.75V11.375C35.75 8.78914 34.7228 6.30919 32.8943 4.48071C31.0658 2.65223 28.5859 1.625 26 1.625C23.4141 1.625 20.9342 2.65223 19.1057 4.48071C17.2772 6.30919 16.25 8.78914 16.25 11.375V16.25H9.75C8.88805 16.25 8.0614 16.5924 7.4519 17.2019C6.84241 17.8114 6.5 18.638 6.5 19.5V42.25C6.5 43.112 6.84241 43.9386 7.4519 44.5481C8.0614 45.1576 8.88805 45.5 9.75 45.5H42.25C43.112 45.5 43.9386 45.1576 44.5481 44.5481C45.1576 43.9386 45.5 43.112 45.5 42.25V19.5C45.5 18.638 45.1576 17.8114 44.5481 17.2019C43.9386 16.5924 43.112 16.25 42.25 16.25ZM19.5 11.375C19.5 9.65109 20.1848 7.99779 21.4038 6.77881C22.6228 5.55982 24.2761 4.875 26 4.875C27.7239 4.875 29.3772 5.55982 30.5962 6.77881C31.8152 7.99779 32.5 9.65109 32.5 11.375V16.25H19.5V11.375ZM42.25 42.25H9.75V19.5H42.25V42.25Z",
            },

            {
                type: "image",
                category: "Employee Experience",
                title: "E-Learning Platforms",
                description: "Scalable e-learning platforms that deliver engaging, accessible digital learning experiences across devices for students, educators, and administrators.",
                image: "images/education-learning-bg-img.png",
                icon: "M28.5269 13.2722L18.7769 6.77219C18.5321 6.60887 18.2476 6.51509 17.9536 6.50085C17.6597 6.48661 17.3674 6.55244 17.108 6.69133C16.8486 6.83022 16.6318 7.03695 16.4806 7.28944C16.3295 7.54194 16.2498 7.83074 16.25 8.125V21.125C16.2498 21.4193 16.3295 21.7081 16.4806 21.9606C16.6318 22.2131 16.8486 22.4198 17.108 22.5587C17.3674 22.6976 17.6597 22.7634 17.9536 22.7492C18.2476 22.7349 18.5321 22.6411 18.7769 22.4778L28.5269 15.9778C28.7498 15.8295 28.9326 15.6284 29.059 15.3924C29.1854 15.1563 29.2516 14.8927 29.2516 14.625C29.2516 14.3573 29.1854 14.0937 29.059 13.8576C28.9326 13.6216 28.7498 13.4205 28.5269 13.2722ZM19.5 18.0883V11.1719L24.6959 14.625L19.5 18.0883ZM39 0H3.25C2.38805 0 1.5614 0.34241 0.951903 0.951903C0.34241 1.5614 0 2.38805 0 3.25V26C0 26.862 0.34241 27.6886 0.951903 28.2981C1.5614 28.9076 2.38805 29.25 3.25 29.25H39C39.862 29.25 40.6886 28.9076 41.2981 28.2981C41.9076 27.6886 42.25 26.862 42.25 26V3.25C42.25 2.38805 41.9076 1.5614 41.2981 0.951903C40.6886 0.34241 39.862 0 39 0ZM39 26H3.25V3.25H39V26ZM42.25 34.125C42.25 34.556 42.0788 34.9693 41.774 35.274C41.4693 35.5788 41.056 35.75 40.625 35.75H1.625C1.19402 35.75 0.780698 35.5788 0.475951 35.274C0.171205 34.9693 0 34.556 0 34.125C0 33.694 0.171205 33.2807 0.475951 32.976C0.780698 32.6712 1.19402 32.5 1.625 32.5H40.625C41.056 32.5 41.4693 32.6712 41.774 32.976C42.0788 33.2807 42.25 33.694 42.25 34.125Z",
            }, {
                type: "image",
                category: "DIGITAL LEARNING",
                title: "Learning Management & EdTech Integration",
                description: "Seamless integration of LMS platforms and EdTech tools enables institutions to deliver personalised, scalable, and data-driven learning experiences.",
                image: "images/education-managed-IT-bg-img.png",
                icon: "M35.75 0H3.25C2.38805 0 1.5614 0.34241 0.951903 0.951903C0.34241 1.5614 0 2.38805 0 3.25V35.75C0 36.612 0.34241 37.4386 0.951903 38.0481C1.5614 38.6576 2.38805 39 3.25 39H35.75C36.612 39 37.4386 38.6576 38.0481 38.0481C38.6576 37.4386 39 36.612 39 35.75V3.25C39 2.38805 38.6576 1.5614 38.0481 0.951903C37.4386 0.34241 36.612 0 35.75 0ZM11.375 26C11.6964 26 12.0106 26.0953 12.2778 26.2739C12.545 26.4524 12.7533 26.7062 12.8763 27.0031C12.9993 27.3001 13.0315 27.6268 12.9688 27.942C12.9061 28.2572 12.7513 28.5468 12.524 28.774C12.2968 29.0013 12.0072 29.1561 11.692 29.2188C11.3768 29.2815 11.0501 29.2493 10.7531 29.1263C10.4562 29.0033 10.2024 28.795 10.0239 28.5278C9.8453 28.2606 9.75 27.9464 9.75 27.625C9.75 27.194 9.92121 26.7807 10.226 26.476C10.5307 26.1712 10.944 26 11.375 26ZM3.25 3.25H9.75V23.0303C8.66578 23.4136 7.75197 24.1679 7.1701 25.1598C6.58822 26.1518 6.37574 27.3174 6.57021 28.4509C6.76467 29.5843 7.35357 30.6125 8.2328 31.3537C9.11204 32.095 10.225 32.5015 11.375 32.5015C12.525 32.5015 13.638 32.095 14.5172 31.3537C15.3964 30.6125 15.9853 29.5843 16.1798 28.4509C16.3743 27.3174 16.1618 26.1518 15.5799 25.1598C14.998 24.1679 14.0842 23.4136 13 23.0303V16.9223L22.75 26.6723V35.75H3.25V3.25ZM35.75 35.75H26V26C26.0002 25.7865 25.9583 25.5751 25.8767 25.3779C25.7952 25.1806 25.6755 25.0013 25.5247 24.8503L13 12.3277V3.25H19.5V8.125C19.4998 8.33846 19.5417 8.54986 19.6233 8.74713C19.7048 8.9444 19.8245 9.12366 19.9753 9.27469L23.2253 12.5247C22.9106 13.18 22.7481 13.898 22.75 14.625C22.75 15.5892 23.0359 16.5317 23.5716 17.3334C24.1073 18.1351 24.8686 18.7599 25.7594 19.1289C26.6502 19.4979 27.6304 19.5944 28.5761 19.4063C29.5217 19.2182 30.3904 18.7539 31.0721 18.0721C31.7539 17.3904 32.2182 16.5217 32.4063 15.5761C32.5944 14.6304 32.4979 13.6502 32.1289 12.7594C31.7599 11.8686 31.1351 11.1073 30.3334 10.5716C29.5317 10.0359 28.5892 9.75 27.625 9.75C26.8979 9.74873 26.1798 9.91191 25.5247 10.2273L22.75 7.45266V3.25H35.75V35.75ZM27.625 13C27.9464 13 28.2606 13.0953 28.5278 13.2739C28.795 13.4524 29.0033 13.7062 29.1263 14.0031C29.2493 14.3001 29.2815 14.6268 29.2188 14.942C29.1561 15.2572 29.0013 15.5468 28.774 15.774C28.5468 16.0013 28.2572 16.1561 27.942 16.2188C27.6268 16.2815 27.3001 16.2493 27.0031 16.1263C26.7062 16.0033 26.4524 15.795 26.2739 15.5278C26.0953 15.2606 26 14.9464 26 14.625C26 14.194 26.1712 13.7807 26.476 13.476C26.7807 13.1712 27.194 13 27.625 13Z",
            },

            {
                type: "image",
                category: "OPERATIONS",
                title: "Administrative & IT Operations Management ",
                description: "Streamlined back-office and IT operations that reduce administrative burden, improve staff productivity, and keep institutional systems running without interruption.",
                image: "images/education-service-bg-img.png",
                icon: "M36.1339 6.22781C34.19 4.26436 31.8779 2.70362 29.33 1.63497C26.7821 0.566306 24.0484 0.0107135 21.2855 0H21.125C15.5223 0 10.1491 2.22566 6.18737 6.18737C2.22566 10.1491 0 15.5223 0 21.125V32.5C0 33.7929 0.513615 35.0329 1.42785 35.9471C2.34209 36.8614 3.58207 37.375 4.875 37.375H8.125C9.41793 37.375 10.6579 36.8614 11.5721 35.9471C12.4864 35.0329 13 33.7929 13 32.5V24.375C13 23.0821 12.4864 21.8421 11.5721 20.9279C10.6579 20.0136 9.41793 19.5 8.125 19.5H3.32313C3.63651 16.1117 4.9092 12.883 6.99202 10.1922C9.07484 7.50142 11.8815 5.46006 15.083 4.3074C18.2846 3.15473 21.7484 2.93852 25.0684 3.68409C28.3884 4.42967 31.4272 6.10615 33.8284 8.51703C36.7634 11.467 38.5686 15.3543 38.9289 19.5H34.125C32.8321 19.5 31.5921 20.0136 30.6779 20.9279C29.7636 21.8421 29.25 23.0821 29.25 24.375V32.5C29.25 33.7929 29.7636 35.0329 30.6779 35.9471C31.5921 36.8614 32.8321 37.375 34.125 37.375H39C39 38.6679 38.4864 39.9079 37.5721 40.8221C36.6579 41.7364 35.4179 42.25 34.125 42.25H22.75C22.319 42.25 21.9057 42.4212 21.601 42.726C21.2962 43.0307 21.125 43.444 21.125 43.875C21.125 44.306 21.2962 44.7193 21.601 45.024C21.9057 45.3288 22.319 45.5 22.75 45.5H34.125C36.2799 45.5 38.3465 44.644 39.8702 43.1202C41.394 41.5965 42.25 39.5299 42.25 37.375V21.125C42.2606 18.3616 41.7258 15.6233 40.6763 13.067C39.6268 10.5107 38.0832 8.18656 36.1339 6.22781ZM8.125 22.75C8.55598 22.75 8.9693 22.9212 9.27405 23.226C9.57879 23.5307 9.75 23.944 9.75 24.375V32.5C9.75 32.931 9.57879 33.3443 9.27405 33.649C8.9693 33.9538 8.55598 34.125 8.125 34.125H4.875C4.44402 34.125 4.0307 33.9538 3.72595 33.649C3.42121 33.3443 3.25 32.931 3.25 32.5V22.75H8.125ZM34.125 34.125C33.694 34.125 33.2807 33.9538 32.976 33.649C32.6712 33.3443 32.5 32.931 32.5 32.5V24.375C32.5 23.944 32.6712 23.5307 32.976 23.226C33.2807 22.9212 33.694 22.75 34.125 22.75H39V34.125H34.125Z",
            },
        ];

        // Case Studies Data
        const caseStudiesSlides = [{
            tag: "Strengthening Enterprise Cybersecurity",
            title: "Implemented AI-driven security to reduce threats and improve real-time response.",
            img: "/images/02-education-casestudy-bg-img.png",
            alt: "Strengthening Enterprise Cybersecurity",
        }, {
            tag: "Driving Data-Driven Decisions",
            title: "Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.",
            img: "/images/03-education-casestudy-bg-img.png",
            alt: "Driving Data-Driven Decisions",
        }, {
            tag: "App & Software Development for Education",
            title: "Built a custom student engagement application that unified learning, attendance, and progress tracking into a single platform, and reduced administrative overhead across campuses.",
            img: "/images/01-education-casestudy-bg-img.png",
            alt: "App & Software Development for Education",
        }, ];

        // Insights Data (news articles)
        const insightsData = [{
            featured: {
                image: "images/insight-main-bg.png",
                date: "Dec 18, 2025, IT Service",
                title: "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
            },
            articles: [{
                image: "images/latest_insights-2.png",
                date: "Dec 16, 2025, IT Service",
                title: "How Managed IT Services Improve Business Continuity",
            }, {
                image: "images/latest_insights-3.png",
                date: "Jan 4, 2026, IT Service",
                title: "Cybersecurity Forecast 2026: New Threats and How to Stay Ahead",
            }, ],
        }, {
            featured: {
                image: "images/financial_latest_insights.jpg",
                date: "Dec 18, 2025, IT Service",
                title: "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
            },
            articles: [{
                image: "/images/latest_insights-4.png",
                date: "Jan 15, 2026, Cloud Services",
                title: "Hybrid Cloud Strategies: Balancing Security and Scalability",
            }, {
                image: "https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&q=80&w=300",
                date: "Feb 3, 2026, AI & Automation",
                title: "AI-Powered Threat Detection: The Future of Cybersecurity",
            }, ],
        }, {
            featured: {
                image: "images/financial_latest_insights.jpg",
                date: "Dec 18, 2025, IT Service",
                title: "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
            },
            articles: [{
                image: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=300",
                date: "Mar 22, 2026, Compliance",
                title: "GDPR and Beyond: Preparing for 2026 Data Protection Regulations",
            }, {
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=300",
                date: "Apr 5, 2026, Digital Transformation",
                title: "Legacy System Modernization: A Step-by-Step Migration Guide",
            }, ],
        }, ];

        // ==================================
        // RENDER FUNCTIONS
        // ==================================

        // Render Testimonial Slides
        function renderTestimonials() {
            const container = document.getElementById("testimonialCarousel");
            if (!container) return;

            container.innerHTML = testimonialsData
                .map(
                    (testimonial, index) => `
              <div class="testimonial-slide ${index === 0 ? "active" : "hidden"}" data-slide="${index + 1}">
                <div class="relative mb-12 mt-12 md:mt-0 overflow-visible">
                  <img class="absolute -top-10 md:-top-24 left-0 md:-left-10 w-28 md:w-52 lg:w-64 opacity-60 z-0 pointer-events-none" src="images/quote.png" alt="Quote mark"/>
                  <blockquote class="relative z-10 text-xl md:text-2xl leading-relaxed font-light text-gray-100">
                    "${testimonial.quote}"
                  </blockquote>
                </div>

                <div class="flex items-center gap-4 mb-12">
                  <div class="w-14 h-14 rounded-full overflow-hidden bg-yellow-500 flex items-center justify-center">
                    <img src="${testimonial.image}" alt="${testimonial.name}" class="w-full h-full object-cover"/>
                  </div>
                  <div>
                    <h4 class="font-bold text-lg leading-none">${testimonial.name}</h4>
                    <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">
                      ${testimonial.role}
                    </p>
                    <p class="text-xs text-gray-500 uppercase tracking-widest">
                      ${testimonial.company}
                    </p>
                  </div>
                </div>
              </div>
            `,
                )
                .join("");
        }

        // Render Capabilities Slides
        function renderCapabilities() {
            const container = document.getElementById("capabilitiesCarousel");
            if (!container) return;

            // We clone the data to ensure the loop is seamless
            // Tripling ensures no white space on huge screens
            const displayData = [
                ...capabilitiesData,
                ...capabilitiesData,
                ...capabilitiesData,
            ];

            container.innerHTML = `
        <div class="overflow-hidden rounded-3xl md:rounded-none w-full pt-2 relative">
          <div id="carouselTrack" class="flex duration-500 ease-in-out">
            ${displayData
              .map((item) => {
                const isGlass = item.type === "card";

                return `
                <div class="carousel-item flex-none w-full md:w-1/2 lg:w-1/3 px-0 md:px-8 min-w-0">
                  ${
                    isGlass
                      ? `
                    <!-- Glass Card Template -->
                    <div class="capability-card glass-card rounded-[2rem] p-8 flex flex-col justify-between overflow-hidden h-[450px] border border-white/10 shadow-2xl relative overflow-hidden group">
                      <div>
                        <div class="mb-6 transform group-hover:scale-105 transition duration-300 w-fit h-fit">
                          <svg width="51" height="36" viewBox="0 0 51 36" fill="none"><path d="${item.icon}" fill="#13C5B8"/></svg>
                        </div>
                        <p class="text-[10px] tracking-[0.2em] text-cyan-400 uppercase mb-4 font-bold">${item.category}</p>
                        <h3 class="text-3xl font-semibold text-white leading-tight pr-4">${item.title}</h3>
                      </div>
                      <p class="text-sm text-gray-300 leading-relaxed font-light mb-4">${item.description}</p>
                    </div>
                  `
                      : `
                    <!-- Image Card Template -->
                    <div class="capability-card relative rounded-[1.5rem] overflow-hidden h-[450px] group shadow-2xl cursor-pointer">
                      <img src="${item.image}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-8 flex flex-col justify-end">
                        <div class="mb-4">
                          <svg width="51" height="55" viewBox="0 0 51 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="${item.icon}" fill="white"/>
                          </svg>
                        </div>
                        <p class="text-[10px] tracking-[0.15em] text-white/90 uppercase mb-2 font-bold">${item.category}</p>
                        <h3 class="text-2xl font-bold text-white leading-tight">${item.title}</h3>
                      </div>
                      <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-gradient-to-b from-[#2d79b3]/80 via-[#1f3f73]/85 to-[#101b45]/95 backdrop-blur-xl p-8 flex flex-col justify-between border border-cyan-400/30 z-10">

    <!-- TOP CONTENT -->
    <div>
        <div class="mb-5 transform transition duration-500 group-hover:scale-105">
            <svg width="51" height="55" viewBox="0 0 51 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="${item.icon}" fill="#13C5B8"/>
            </svg>
        </div>

        <p class="text-[10px] tracking-[0.18em] text-white/90 uppercase mb-4 font-semibold">
            ${item.category}
        </p>

        <h3 class="text-[28px] leading-[1.1] font-semibold text-white pr-4">
            ${item.title}
        </h3>
    </div>

    <!-- BOTTOM CONTENT -->
    <p class="text-[15px] leading-relaxed text-white/90 font-light max-w-[90%]">
        ${item.description || "Secure system integration."}
    </p>

</div>
                    </div>
                  `
                  }
                </div>
              `;
              })
              .join("")}
          </div>
        </div>
      `;
      }

      // Render Case Study Slides
      const casesCarousel = document.getElementById("casesCarousel");
      const casesCounter = document.querySelector(".cases-counter");

      let currentCaseIndex = 0;

      function renderCaseStudies(animationClass = "") {
        const leftCard = caseStudiesSlides[currentCaseIndex];
        const rightCard = caseStudiesSlides[currentCaseIndex + 1];

        casesCarousel.innerHTML = `

          <div class="case-studies-wrapper ${animationClass}">

              <!-- LEFT SIDE -->
              <div class="case-left-card">
                  <p class="case-left-tag">
                      ${leftCard.tag}
                  </p>

                  <h2 class="case-left-title">
                      ${leftCard.title}
                  </h2>

                  <a href="#" class="case-btn mt-10">

                      <span class="case-btn-icon">
                          <svg xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor">

                              <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
                          </svg>
                      </span>

                      <span>View All Cases</span>

                  </a>
              </div>

              <!-- RIGHT SIDE -->
              <div class="case-right-card">

                  <img src="${rightCard.img}" alt="${rightCard.alt}" />

                  

                  <div class="case-right-content">

                      <p class="case-right-tag">
                          ${rightCard.tag}
                      </p>

                      <h3 class="case-right-title">
                          ${rightCard.title}
                      </h3>

                      <a href="#" class="case-btn case-btn-white mt-8">

                          <span class="case-btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke="currentColor">

                                  <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                          </span>

                          <span>View Case Study</span>

                      </a>

                  </div>

              </div>

          </div>
          `;

        casesCounter.textContent = String(currentCaseIndex + 1).padStart(
          2,
          "0",
        );
      }

      document.querySelector(".cases-next").addEventListener("click", () => {
        if (currentCaseIndex < caseStudiesSlides.length - 2) {
          currentCaseIndex++;
        } else {
          currentCaseIndex = 0;
        }

        renderCaseStudies("case-animate-next");
      });

      document.querySelector(".cases-prev").addEventListener("click", () => {
        if (currentCaseIndex > 0) {
          currentCaseIndex--;
        } else {
          currentCaseIndex = caseStudiesSlides.length - 2;
        }

        renderCaseStudies("case-animate-prev");
      });

      renderCaseStudies();
      // Render Featured Article
      function renderFeaturedArticle() {
        const container = document.getElementById("featuredArticle");
        if (!container) return;

        const featured = insightsData[0].featured;
        container.innerHTML = `
              <div class="relative group rounded-2xl sm:rounded-3xl overflow-hidden h-[250px] sm:h-[400px] md:h-[570px] mb-8 sm:mb-12 shadow-2xl">
                <img src="${featured.image}" alt="Meeting"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-6 sm:p-8 md:p-12 flex flex-col justify-end">
                  <p class="text-xs sm:text-sm text-gray-300 uppercase tracking-widest font-bold mb-1 sm:mb-2">
                    ${featured.date}
                  </p>
                  <h3 class="text-lg sm:text-2xl md:text-3xl font-bold text-white mb-4 sm:mb-6 max-w-xl leading-tight">
                    ${featured.title}
                  </h3>
                  <a
                href="#"
                class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 w-fit relative overflow-hidden"
              >
                <span
                  class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-2 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                  </svg>
                </span>

                <span
                  class="text-white font-semibold text-sm pr-4
                   md:text-md
                   lg:text-lg z-10 transition-colors duration-300"
                >
             View All Insights
                </span>
              </a>
                </div>
              </div>
            `;
      }

      // Render Insights Slides
      function renderInsights() {
        const container = document.getElementById("insightsCarousel");
        if (!container) return;

        container.innerHTML = insightsData
          .map(
            (slide, slideIndex) => `
              <div class="insights-slide ${slideIndex === 0 ? "active" : ""} grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-start ${slideIndex === 0 ? "" : "hidden"}">
                ${slide.articles
                  .map(
                    (article) => `
                  <div class="flex gap-4 sm:gap-6 items-start md:items-center">
                    <img src="${article.image}"
                      class="insights-image w-24 sm:w-32 md:w-40 lg:w-52 h-24 sm:h-32 md:h-40 lg:h-52 rounded-lg sm:rounded-2xl object-cover flex-shrink-0 transition-opacity duration-300" />
                    <div>
                      <p class="text-xs sm:text-sm text-gray-400 uppercase font-bold mb-1">
                        ${article.date}
                      </p>
                      <h4 class="text-sm sm:text-md md:text-lg lg:text-xl font-bold leading-tight mb-2">
                        ${article.title}
                      </h4>
                      <a href="#" class="text-cyan-500 text-xs sm:text-sm md:text-base font-bold flex items-center gap-1 hover:underline">View All News
                        →</a>
                    </div>
                  </div>
                `,
                  )
                  .join("")}
              </div>
            `,
          )
          .join("");
      }

      // ==================================
      // CAROUSEL INITIALIZATION & LOGIC
      // ==================================

      // Initialize all carousels on page load
      document.addEventListener("DOMContentLoaded", () => {
        // Render all carousel content from data arrays
        renderTestimonials();
        renderCapabilities();
        renderCaseStudies();
        renderFeaturedArticle();
        renderInsights();

        // ==================================
        // CAPABILITIES CAROUSEL
        // ==================================
        let currentIndex = 0;
        let autoPlayInterval;

        function initCapabilitiesCarousel() {
          const track = document.getElementById("carouselTrack");
          const prevBtn = document.querySelector(".carousel-prev");
          const nextBtn = document.querySelector(".carousel-next");
          const counter = document.querySelector(".carousel-counter");
          const originalCount = capabilitiesData.length;

          if (!prevBtn || !nextBtn || !counter || !track) return;

          function updateCounter() {
            const displayIndex = (currentIndex % originalCount) + 1;
            counter.textContent = String(displayIndex).padStart(2, "0");
          }

          function moveCarousel(direction) {
            if (autoPlayInterval) clearInterval(autoPlayInterval);

            const isMobile = window.innerWidth < 768;
            const isTab = window.innerWidth < 1028;
            const stepSize = isMobile ? 100 : isTab ? 50 : 33.3333;

            if (direction === "next") {
              currentIndex++;
            } else {
              currentIndex--;
            }

            track.style.transition =
              "transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
            track.style.transform = `translateX(-${currentIndex * stepSize}%)`;

            if (currentIndex >= originalCount) {
              setTimeout(() => {
                track.style.transition = "none";
                currentIndex = 0;
                track.style.transform = `translateX(0)`;
                updateCounter();
              }, 600);
            } else if (currentIndex < 0) {
              setTimeout(() => {
                track.style.transition = "none";
                currentIndex = originalCount - 1;
                track.style.transform = `translateX(-${currentIndex * stepSize}%)`;
                updateCounter();
              }, 600);
            } else {
              updateCounter();
            }

            // Restart autoplay after user interaction
            autoPlayInterval = setInterval(() => {
              currentIndex++;
              track.style.transition =
                "transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
              track.style.transform = `translateX(-${currentIndex * stepSize}%)`;

              if (currentIndex >= originalCount) {
                setTimeout(() => {
                  track.style.transition = "none";
                  currentIndex = 0;
                  track.style.transform = `translateX(0)`;
                }, 600);
              }
            }, 4000);
          }

          nextBtn.addEventListener("click", () => moveCarousel("next"));
          prevBtn.addEventListener("click", () => moveCarousel("prev"));

          const carouselSection = document.querySelector(
            ".capabilities-carousel",
          );
          if (carouselSection) {
            carouselSection.addEventListener("mouseenter", () => {
              if (autoPlayInterval) clearInterval(autoPlayInterval);
            });
            carouselSection.addEventListener("mouseleave", () => {
              if (autoPlayInterval) clearInterval(autoPlayInterval);
              const isMobile = window.innerWidth < 768;
              const isTab = window.innerWidth < 1028;
              const stepSize = isMobile ? 100 : isTab ? 50 : 33.3333;
              autoPlayInterval = setInterval(() => {
                currentIndex++;
                track.style.transition =
                  "transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
                track.style.transform = `translateX(-${currentIndex * stepSize}%)`;
                if (currentIndex >= originalCount) {
                  setTimeout(() => {
                    track.style.transition = "none";
                    currentIndex = 0;
                    track.style.transform = `translateX(0)`;
                  }, 600);
                }
              }, 4000);
            });
          }

          updateCounter();

          // Handle responsive resize issues
          window.addEventListener("resize", () => {
            currentIndex = 0;
            const track = document.getElementById("carouselTrack");
            if (track) {
              track.style.transition = "none";
              track.style.transform = `translateX(0)`;
            }
            updateCounter();
          });
        }

        initCapabilitiesCarousel();

        // ==================================
        // TESTIMONIAL CAROUSEL
        // ==================================
        let currentTestimonial = 0;
        let testimonialSlides = [];
        const testimonialImages = testimonialsData.map((t) => t.portrait);

        function initTestimonialCarousel() {
          testimonialSlides = document.querySelectorAll(".testimonial-slide");
          const totalSlides = testimonialSlides.length;
          const prevBtn = document.querySelector(".testimonial-prev");
          const nextBtn = document.querySelector(".testimonial-next");
          const counter = document.querySelector(".testimonial-current");
          const testimonialImage = document.querySelector(".testimonial-image");

          if (!prevBtn || !nextBtn || !counter) return;

          function showTestimonial(n) {
            testimonialSlides.forEach((slide, index) => {
              slide.classList.add("hidden");
              slide.classList.remove("active");
            });

            testimonialSlides[n].classList.remove("hidden");
            testimonialSlides[n].classList.add("active");

            counter.textContent = String(n + 1).padStart(2, "0");

            if (testimonialImage) {
              testimonialImage.style.opacity = "0";
              setTimeout(() => {
                testimonialImage.src = testimonialImages[n];
                testimonialImage.style.opacity = "1";
              }, 300);
            }
          }

          function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % totalSlides;
            showTestimonial(currentTestimonial);
          }

          function prevTestimonial() {
            currentTestimonial =
              (currentTestimonial - 1 + totalSlides) % totalSlides;
            showTestimonial(currentTestimonial);
          }

          prevBtn.addEventListener("click", prevTestimonial);
          nextBtn.addEventListener("click", nextTestimonial);

          let autoPlay = setInterval(nextTestimonial, 6000);
          const carouselSection = document.querySelector(
            ".testimonial-carousel-section",
          );
          if (carouselSection) {
            carouselSection.addEventListener("mouseenter", () =>
              clearInterval(autoPlay),
            );
            carouselSection.addEventListener(
              "mouseleave",
              () => (autoPlay = setInterval(nextTestimonial, 6000)),
            );
          }
        }

        initTestimonialCarousel();

        // ==================================
        // CASE STUDIES CAROUSEL
        // ==================================
        let currentCase = 0;
        let caseSlides = [];

        function initCaseStudiesCarousel() {
          caseSlides = document.querySelectorAll(".case-slide");
          const totalSlides = caseSlides.length;
          const prevBtn = document.querySelector(".cases-prev");
          const nextBtn = document.querySelector(".cases-next");
          const counter = document.querySelector(".cases-counter");

          if (!prevBtn || !nextBtn || !counter) return;

          function showCase(n) {
            caseSlides.forEach((slide, index) => {
              slide.classList.add("opacity-0", "hidden");
              slide.classList.remove("opacity-100");
            });

            caseSlides[n].classList.remove("opacity-0", "hidden");
            caseSlides[n].classList.add("opacity-100");

            counter.textContent = String(n + 1).padStart(2, "0");
          }

          function nextCase() {
            currentCase = (currentCase + 1) % totalSlides;
            showCase(currentCase);
          }

          function prevCase() {
            currentCase = (currentCase - 1 + totalSlides) % totalSlides;
            showCase(currentCase);
          }

          prevBtn.addEventListener("click", prevCase);
          nextBtn.addEventListener("click", nextCase);

          let autoPlay = setInterval(nextCase, 6000);
          const carouselSection = document.querySelector(".cases-carousel");
          if (carouselSection) {
            carouselSection.addEventListener("mouseenter", () =>
              clearInterval(autoPlay),
            );
            carouselSection.addEventListener(
              "mouseleave",
              () => (autoPlay = setInterval(nextCase, 6000)),
            );
          }
        }

        initCaseStudiesCarousel();

        // ==================================
        // INSIGHTS CAROUSEL
        // ==================================
        let currentInsight = 0;
        let insightSlides = [];

        function initInsightsCarousel() {
          insightSlides = document.querySelectorAll(".insights-slide");
          const totalSlides = insightSlides.length;
          const prevBtn = document.querySelector(".insights-prev");
          const nextBtn = document.querySelector(".insights-next");
          const counter = document.querySelector(".insights-current");

          if (!prevBtn || !nextBtn || !counter) return;

          function showInsight(n) {
            insightSlides.forEach((slide, index) => {
              slide.classList.add("hidden");
              slide.classList.remove("active");
            });

            insightSlides[n].classList.remove("hidden");
            insightSlides[n].classList.add("active");

            counter.textContent = String(n + 1).padStart(2, "0");
          }

          function nextInsight() {
            currentInsight = (currentInsight + 1) % totalSlides;
            showInsight(currentInsight);
          }

          function prevInsight() {
            currentInsight = (currentInsight - 1 + totalSlides) % totalSlides;
            showInsight(currentInsight);
          }

          prevBtn.addEventListener("click", prevInsight);
          nextBtn.addEventListener("click", nextInsight);

          let autoPlay = setInterval(nextInsight, 6000);
          const carouselSection = document.querySelector(".insights-carousel");
          if (carouselSection) {
            carouselSection.addEventListener("mouseenter", () =>
              clearInterval(autoPlay),
            );
            carouselSection.addEventListener(
              "mouseleave",
              () => (autoPlay = setInterval(nextInsight, 6000)),
            );
          }
        }

        initInsightsCarousel();

        // ==================================
        // FAQ ACCORDION
        // ==================================
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach((item) => {
          const toggle = item.querySelector(".faq-toggle");
          const content = item.querySelector(".faq-content");
          const icon = item.querySelector(".faq-icon");

          toggle.addEventListener("click", () => {
            const isOpen = content.classList.contains("max-h-96");

            // Close all items first
            faqItems.forEach((otherItem) => {
              const otherContent = otherItem.querySelector(".faq-content");
              const otherIcon = otherItem.querySelector(".faq-icon");

              otherContent.classList.remove(
                "max-h-96",
                "opacity-100",
                "mt-3",
                "sm:mt-4",
              );
              otherContent.classList.add("max-h-0", "opacity-0", "mt-0");
              otherIcon.textContent = "+";
            });

            // If the clicked item was not open, open it
            if (!isOpen) {
              content.classList.remove("max-h-0", "opacity-0", "mt-0");
              content.classList.add(
                "max-h-96",
                "opacity-100",
                "mt-3",
                "sm:mt-4",
              );
              icon.textContent = "−";
            }
          });
        });
      });
    </script>
</body>
<?php include 'footer.php'; ?>
</html>