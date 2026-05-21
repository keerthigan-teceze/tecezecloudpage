<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Government</title>
  <?php include 'header.php'; ?>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Inter", sans-serif;
      scroll-behavior: smooth;
    }

    .bg-hero-overlay {
      background:
        linear-gradient(to right,
          rgba(2, 38, 70, 0.92),
          rgba(2, 38, 70, 0.45)),
        url("images/Frame 245 (5).png");
      background-size: cover;
      background-position: center;
    }

    .bg-grid {
      background-size: 80px 80px;
      background-image:
        linear-gradient(to right,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px),
        linear-gradient(to bottom,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px);
    }

    .glass-card {
      background: linear-gradient(135deg,
          rgba(255, 255, 255, 0.12),
          rgba(255, 255, 255, 0.06));
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      transition: all 0.4s ease;
    }

    .glass-card:hover {
      background: linear-gradient(135deg,
          rgba(255, 255, 255, 0.15),
          rgba(255, 255, 255, 0.08));
      border-color: rgba(34, 211, 238, 0.4);
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

<body class="text-white bg-[#011627]">
  <header
    class="relative min-h-screen flex flex-col justify-center bg-hero-overlay bg-cover bg-center px-4 sm:px-6 md:px-8 lg:px-20 pt-12 sm:pt-20 overflow-hidden">
    <div class="mb-6 sm:mb-8">
      <p class="text-m font-semibold tracking-widest uppercase mb-2 opacity-75 text-gray-200 relative z-10">
        Who We Serve / Government
      </p>
      <div class="w-full h-0.5 border-b to-transparent"></div>
    </div>
    <div class="max-w-6xl mt-3 relative z-10">
      <h1
          class="text-4xl sm:text-4xl md:text-6xl lg:text-6xl leading-tight mb-4 sm:mb-6 tracking-tight "
        >
          Secure and Reliable IT Infrastructure <br />
          for Government Operations <br />
        </h1>
        <p
          class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light"
        >
          Engineered to ensure data protection, operational continuity, and secure service delivery
          across public sector environments. Built for high-trust systems where compliance,
          reliability, and resilience are essential.
        </p>

      <a href="https://teal-mule-553916.hostingersite.com/Contactus.php"
        class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden">
        <span
          class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-3 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </span>

        <span
          class="text-white font-semibold z-10 transition-colors duration-300 text-sm pr-4 md:text-md md:pr-8 lg:text-lg">
          Connect With Us
        </span>
      </a>
    </div>

    <svg class="hidden sm:block absolute left-0 top-0 z-0 w-auto md:h-full" width="685" height="900"
      viewBox="0 0 685 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin slice">
      <g opacity="0.65" filter="url(#filter0_f_3527_28748)">
        <path
          d="M362.732 635.417C344.875 685.902 274.983 697.032 214.127 683.911C153.27 670.79 101.45 633.418 45.1692 610.573C-11.1113 587.728 -71.3265 580.559 -91.2681 544.574C-111.21 508.59 -90.3522 444.938 -98.2224 386.784C-106.093 328.63 -143.839 276.499 -134.1 240.132C-124.05 202.928 -67.3515 181.177 -16.9823 178.97C33.3868 176.763 77.4267 194.101 124.395 167.777C170.838 140.305 221.883 69.7941 273.053 52.6508C325.372 34.9825 378.964 70.1572 396.956 121.603C415.26 172.213 397.126 238.783 375.61 288.859C354.931 339.247 332.016 372.617 337.492 434.64C344.116 496.139 379.441 585.456 362.732 635.417Z"
          fill="url(#paint0_linear_3527_28748)" />
      </g>
      <defs>
        <filter id="filter0_f_3527_28748" x="-415.695" y="-231.968" width="1100.19" height="1200.94"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_3527_28748" />
        </filter>
        <linearGradient id="paint0_linear_3527_28748" x1="-238.004" y1="518.439" x2="566.366" y2="174.299"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <svg class="hidden sm:block absolute right-0 top-0 z-0 w-auto md:h-full" width="604" height="900"
      viewBox="0 0 604 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMaxYMin slice">
      <g opacity="0.65" filter="url(#filter0_f_3527_28718)">
        <path
          d="M729.638 775.7C687.706 822.187 607.276 802.876 547.481 761.441C487.686 720.005 448.527 656.445 398.035 606.565C347.542 556.686 285.769 521.961 280.395 474.185C275.021 426.409 326.099 367.056 343.703 300.762C361.307 234.468 343.962 161.286 370.795 126.398C398.339 90.7474 469.296 92.6807 524.651 112.873C580.006 133.064 619.758 171.515 682.266 164.152C744.722 155.315 831.46 102.088 894.383 106.517C958.781 110.895 1000.84 172.878 997.169 236.468C994.211 299.295 944.764 363.019 899.067 407.424C854.134 452.541 814.427 478.288 792.501 547.686C772.051 617.031 770.094 729.264 729.638 775.7Z"
          fill="url(#paint0_linear_3527_28718)" />
      </g>
      <defs>
        <filter id="filter0_f_3527_28718" x="0" y="-181.534" width="1277.39" height="1264.24"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_3527_28718" />
        </filter>
        <linearGradient id="paint0_linear_3527_28718" x1="133.749" y1="380.214" x2="1156.37" y2="369.766"
          gradientUnits="userSpaceOnUse">
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
        <div
          class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-400/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition duration-500">
        </div>
        <img src="/images/government_about.jpg" alt="IT Infrastructure Dashboard"
          class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl" />
      </div>

      <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
          <p class="text-lg sm:text-3xl leading-[1.5] font-medium">
            <span class="font-semibold text-[#011627]"
              >Technology That Supports Public Sector Transformation
            </span
            >
            <span class="font-semibold text-[#011627] mt-6 block"> 
              Teceze delivers enterprise-grade IT
              infrastructure for government
              organizations, enabling secure systems,
              efficient service delivery, and reliable data
              management</span>
            <span class="text-gray-500 font-medium block mt-8">
              Operational complexity is reduced, system
              resilience is strengthened, and secure
              digital environments are established,
              supporting transparency, efficiency, and
              continuity of public services.
            </span>
          </p>
      </div>

  </section>
  <section class="min-h-screen relative flex items-center justify-center overflow-x-hidden">
    <svg class="absolute top-0 left-0" width="685" height="883" viewBox="0 0 685 883" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.65" filter="url(#filter0_f_1250_5814)">
        <path
          d="M362.732 549.417C344.875 599.902 274.983 611.032 214.127 597.911C153.27 584.79 101.45 547.418 45.1692 524.573C-11.1113 501.728 -71.3265 494.559 -91.2681 458.574C-111.21 422.59 -90.3522 358.938 -98.2224 300.784C-106.093 242.63 -143.839 190.499 -134.1 154.132C-124.05 116.928 -67.3515 95.1766 -16.9823 92.9698C33.3868 90.763 77.4267 108.101 124.395 81.777C170.838 54.3053 221.883 -16.2059 273.053 -33.3492C325.372 -51.0175 378.964 -15.8428 396.956 35.6032C415.26 86.2131 397.126 152.783 375.61 202.859C354.931 253.247 332.016 286.617 337.492 348.64C344.116 410.139 379.441 499.456 362.732 549.417Z"
          fill="url(#paint0_linear_1250_5814)" />
      </g>
      <defs>
        <filter id="filter0_f_1250_5814" x="-415.695" y="-317.968" width="1100.19" height="1200.94"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_1250_5814" />
        </filter>
        <linearGradient id="paint0_linear_1250_5814" x1="-238.004" y1="432.439" x2="566.366" y2="88.2991"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <svg class="absolute right-0 bottom-0" width="691" height="979" viewBox="0 0 691 979" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.65" filter="url(#filter0_f_1250_5813)">
        <path
          d="M774.316 1024.53C728.218 1075.64 639.795 1054.41 574.058 1008.85C508.322 963.302 465.271 893.425 409.762 838.589C354.252 783.753 286.339 745.578 280.431 693.054C274.524 640.531 330.677 575.279 350.031 502.398C369.384 429.517 350.316 349.062 379.815 310.708C410.096 271.515 488.105 273.64 548.96 295.838C609.816 318.036 653.518 360.308 722.237 352.213C790.899 342.499 886.257 283.982 955.432 288.851C1026.23 293.664 1072.47 361.806 1068.43 431.715C1065.18 500.786 1010.82 570.841 960.582 619.66C911.184 669.26 867.53 697.566 843.426 773.859C820.944 850.095 818.792 973.481 774.316 1024.53Z"
          fill="url(#paint0_linear_1250_5813)" />
      </g>
      <defs>
        <filter id="filter0_f_1250_5813" x="0" y="0" width="1348.68" height="1334.22" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_1250_5813" />
        </filter>
        <linearGradient id="paint0_linear_1250_5813" x1="119.213" y1="589.746" x2="1243.46" y2="578.259"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <div
      class="relative w-full px-4 lg:px-8 py-12 sm:py-16 md:py-20 mt-8 sm:mt-12 bg-grid min-h-[600px] sm:min-h-[700px] md:min-h-[800px] flex flex-col justify-center overflow-hidden">
      <div
        class="absolute top-4 left-0 md:left-auto sm:top-10 w-full overflow-hidden select-none pointer-events-none z-0 md:mx-auto">
        <div class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide">
          our capabilities
        </div>

        <div class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide">
          our capabilities
        </div>
        <div class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide">
          our capabilities
        </div>
      </div>

      <div class="relative z-10 mt-20 sm:mt-32 md:mt-48">
        <div class="capabilities-carousel overflow-hidden" id="capabilitiesCarousel">
          <!-- Slides will be injected by JavaScript -->
        </div>

        <!-- Capabilities Navigation -->
        <div class="flex items-center px-5 justify-between flex-row w-full gap-6 sm:gap-0 mt-8">
          <div class="flex items-end space-x-1 sm:space-x-2">
            <span
              class="carousel-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none">01</span>
            <span class="text-base sm:text-lg text-gray-500 pb-1 font-light">/ 06</span>
          </div>
          <div class="flex space-x-3 sm:space-x-4">
            <button
              class="carousel-prev w-10 sm:w-12 h-10 sm:h-12 border border-gray-600 rounded-full flex items-center justify-center text-white hover:border-cyan-400 transition group">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 group-hover:-translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            <button
              class="carousel-next w-10 sm:w-12 h-10 sm:h-12 border border-gray-600 rounded-full flex items-center justify-center text-white hover:border-cyan-400 transition group">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white text-[#1a2b3c]">
    <div class="py-12 sm:py-16 sm:px-2 lg:px-12">
      <div class="">
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center mb-8 sm:mb-12 gap-4 md:gap-0">
          <div class="text-xs sm:text-xs uppercase tracking-widest text-gray-400 font-bold leading-tight">
            Powered By Strong<br />Technology Partnerships
          </div>
          <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight">
            Secure, resilient IT for trusted public sector operations 
          </h2>
        </div>

        <div class="marquee-wrapper mb-8 sm:mb-12 -mx-4 sm:-mx-6 md:mx-0">
          <div class="marquee-content opacity-40 grayscale">
            <span
              class="marquee-item text-base sm:text-lg md:text-2xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">exela</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-2xl font-bold italic tracking-tighter text-gray-400 hover:opacity-100 transition">FOCUS
              R</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">HCLTech</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">Infosys</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">PHOTON</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">publicis
              sapient</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">Stripe</span>

            <span
              class="marquee-item text-base sm:text-lg md:text-2xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">exela</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-2xl font-bold italic tracking-tighter text-gray-400 hover:opacity-100 transition">FOCUS
              R</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">HCLTech</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">Infosys</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">PHOTON</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">publicis
              sapient</span>
            <span
              class="marquee-item text-base sm:text-lg md:text-3xl font-bold tracking-tighter text-gray-400 hover:opacity-100 transition">Stripe</span>
          </div>
        </div>

        <div class="flex justify-center">
          <a href="https://teal-mule-553916.hostingersite.com/alliances.php"
            class="inline-flex items-center group border-2 border-black/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden">
            <span
              class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-3 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </span>

            <span
              class="text-black font-semibold text-sm pr-2 md:text-md lg:text-lg z-10 transition-colors duration-300">
              Explore Partnerships
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="relative pt-20 sm:pt-30 md:pt-40 overflow-hidden">
      <div
        class="absolute top-10 md:top-0 left-0 md:left-4 select-none pointer-events-none z-0 w-full overflow-hidden sm:px-6">
        <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
          case studies
        </div>
        <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-60 -mt-2 sm:-mt-6">
          case studies
        </div>
        <div class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-40 -mt-2 sm:-mt-6">
          case studies
        </div>
      </div>

      <div class="relative top-8 sm:top-16 md:top-26 z-10 cases-carousel" id="casesCarousel">
        <!-- Cases carousel will be injected by JavaScript -->
      </div>

      <div class="flex flex-row justify-end w-full px-4 sm:px-6">
        <div class="w-full lg:w-1/2 sm:mt-20 py-12 flex items-center justify-between gap-4">
          <div class="flex items-end gap-1">
            <span
              class="cases-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none">01</span>
            <span class="text-base sm:text-lg text-gray-300 font-light pb-1">/03</span>
          </div>
          <div class="flex gap-3 sm:gap-4">
            <button
              class="cases-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 sm:h-5 w-4 sm:w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button
              class="cases-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 sm:h-5 w-4 sm:w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
    class="testimonial-carousel-section bg-[#000a2d] text-white flex items-center justify-center min-h-screen p-6 md:p-20">
    <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative">
      <div class="relative z-10">
        <h2 class="text-2xl md:text-2xl leading-relaxed font-light mb-16 md:mb-40">
          Trusted by organizations that demand reliability, speed, and
          accountability.
        </h2>

        <!-- Testimonial Carousel Container -->
        <div class="testimonial-carousel relative" id="testimonialCarousel">
          <!-- Slides will be injected by JavaScript -->
        </div>

        <a href="https://teal-mule-553916.hostingersite.com/testimonial-list-page.php"
          class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 w-fit relative overflow-hidden">
          <span
            class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-2 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </span>

          <span class="text-white font-semibold text-sm pr-4 md:text-md lg:text-lg z-10 transition-colors duration-300">
            Read Client Stories
          </span>
        </a>
      </div>

      <div class="relative">
        <div class="rounded-[2.5rem] overflow-hidden aspect-[4/5] shadow-2xl">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000"
            alt="Client Portrait" class="testimonial-image w-full h-full object-cover grayscale-[0.2]" />
        </div>

        <div class="flex items-center justify-between mt-10">
          <div class="testimonial-counter">
            <span
              class="text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none testimonial-current">01</span>
            <span class="text-lg text-gray-400 font-light mb-1">/03</span>
          </div>

          <div class="flex gap-4">
            <button
              class="testimonial-prev w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
              aria-label="Previous testimonial">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button
              class="testimonial-next w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
              aria-label="Next testimonial">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white text-[#1a2b3c] overflow-x-hidden">
    <div class="relative pt-12 sm:pt-16 md:pt-24 px-4 sm:px-6">
      <div
        class="absolute top-6 sm:top-8 md:top-12 left-0 md:left-4 select-none pointer-events-none w-full overflow-hidden">
        <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
          latest insights
        </div>
        <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
          latest insights
        </div>
        <div class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]">
          latest insights
        </div>
      </div>

      <div class="max-w-7xl mx-auto mt-20 sm:mt-32 md:mt-52 relative">
        <!-- Featured Article will be injected by JavaScript -->
        <div id="featuredArticle"></div>

        <!-- News Carousel will be injected by JavaScript -->
        <div class="insights-carousel relative" id="insightsCarousel"></div>

        <div class="flex items-center justify-between mt-8 sm:mt-12 flex-row gap-6 sm:gap-0">
          <div class="flex items-end gap-1">
            <span
              class="insights-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none insights-current">01</span>
            <span class="text-base sm:text-lg text-gray-400 font-light pb-1">/ 03</span>
          </div>
          <div class="flex gap-3 sm:gap-4">
            <button
              class="insights-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
              aria-label="Previous insight">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 sm:h-6 w-4 sm:w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button
              class="insights-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
              aria-label="Next insight">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 sm:h-6 w-4 sm:w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="relative mt-8 sm:mt-12 px-4 sm:px-6 bg-white">
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 md:gap-20">
        <div class="relative hidden lg:block overflow-hidden">
          <div class="sticky top-20">
            <h1
              class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-15 uppercase text-outline-gray leading-none">
              faq
            </h1>
            <h1
              class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-10 uppercase text-outline-gray leading-none -mt-4 md:-mt-8 lg:-mt-10">
              faq
            </h1>
            <h1
              class="text-5xl md:text-8xl lg:text-[12rem] font-black opacity-5 uppercase text-outline-gray leading-none -mt-4 md:-mt-8 lg:-mt-10">
              faq
            </h1>
          </div>
        </div>

        <div class="space-y-1 sm:space-y-2">
          <!-- Item 1 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How do we know our data is truly secure?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">−</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-96 opacity-100 mt-3 sm:mt-4">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                We build security into every layer aligned with government
                standards so your data stays protected, compliant, and audit-ready.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                Will this work with our existing systems?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Yes. We integrate with your current setup, modernizing
                only where needed no disruption, no forced changes.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                What if systems go down?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                We design for uptime using monitoring, redundancy,
                and fast response to keep services running without interruption. 
              </p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                Do you support us after deployment?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Absolutely. We provide ongoing support, updates,
                and monitoring to keep everything running smoothly.
              </p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How do you manage multiple departments?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                We keep it structured and transparent ensuring
                clear coordination, smooth execution, and no gaps. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-12 sm:py-16 md:py-20 lg:py-20 px-4 sm:px-6 lg:px-20">
      <div
        class="max-w-7xl mx-auto bg-[#011627] rounded-2xl sm:rounded-3xl lg:rounded-[3rem] relative overflow-hidden p-8 sm:p-12 md:p-16 text-center">
        <svg class="absolute -left-8 sm:-left-10 -top-8 sm:-top-10 w-40 sm:w-60 md:w-80 h-40 sm:h-60 md:h-80"
          width="256" height="292" viewBox="0 0 256 292" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="51" cy="47" r="169.5" stroke="url(#paint0_linear_0_1)" stroke-width="71" />
          <circle cx="51" cy="87" r="204" stroke="url(#paint1_linear_0_1)" stroke-width="2" />
          <defs>
            <linearGradient id="paint0_linear_0_1" x1="229.5" y1="8.00003" x2="-37" y2="235"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#000A2D" />
              <stop offset="0.502626" stop-color="#13C5B8" />
              <stop offset="1" stop-color="#000A2D" />
            </linearGradient>
            <linearGradient id="paint1_linear_0_1" x1="229.5" y1="48" x2="-37" y2="275" gradientUnits="userSpaceOnUse">
              <stop stop-color="#282761" />
              <stop offset="0.502626" stop-color="#13C5B8" />
              <stop offset="1" stop-color="#282761" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="absolute -right-12 sm:-right-16 md:-right-20 -bottom-12 sm:-bottom-16 md:-bottom-20 w-40 sm:w-60 md:w-80 h-40 sm:h-60 md:h-80"
          width="295" height="257" viewBox="0 0 295 257" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="205" cy="205" r="204" stroke="url(#paint0_linear_0_1)" stroke-width="2" />
          <circle cx="242" cy="205" r="169.5" stroke="url(#paint1_linear_0_1)" stroke-width="71" />
          <defs>
            <linearGradient id="paint0_linear_0_1" x1="383.5" y1="166" x2="117" y2="393" gradientUnits="userSpaceOnUse">
              <stop stop-color="#282761" />
              <stop offset="0.502626" stop-color="#13C5B8" />
              <stop offset="1" stop-color="#282761" />
            </linearGradient>
            <linearGradient id="paint1_linear_0_1" x1="420.5" y1="166" x2="154" y2="393" gradientUnits="userSpaceOnUse">
              <stop stop-color="#000A2D" />
              <stop offset="0.502626" stop-color="#13C5B8" />
              <stop offset="1" stop-color="#000A2D" />
            </linearGradient>
          </defs>
        </svg>

        <div class="relative z-10">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-3 sm:mb-4 leading-tight">
            Have a project in mind?<br />We'd love to hear about it.
          </h2>
          <p class="text-gray-400 text-xs sm:text-sm max-w-lg mx-auto mb-6 sm:mb-10 leading-relaxed">
            Our digital workplace solutions are designed to enhance
            collaboration, improve productivity, and enable secure access to
            tools and data from anywhere.
          </p>
          <a href="https://teal-mule-553916.hostingersite.com/Contactus.php"
            class="inline-flex items-center gap-3 bg-gradient-to-r from-[#2B59C3] to-[#25D1B8] text-white px-5 py-2 md:px-10 md:py-3 rounded-full font-semibold transition-transform duration-300 hover:scale-105 shadow-lg">
            <!-- Simple Phone Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
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
    const testimonialsData = [
      {
        quote:
          "Teceze helped us strengthen our IT operations with proactive support, better visibility, and a team that understood both speed and accountability.",
        name: "David Miller",
        role: "Chief Technology Officer",
        company: "Nexora Global Solutions",
        image: "images/financial_men-2.jpg",
        portrait:
          "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000",
      },
      {
        quote:
          "The proactive monitoring and rapid response from Teceze transformed our security posture. We've seen a 60% reduction in incidents and gained complete visibility across our infrastructure.",
        name: "Sarah Chen",
        role: "VP of Engineering",
        company: "Apex Financial Technologies",
        image: "images/financial_men-3.jpg",
        portrait:
          "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=1000",
      },
      {
        quote:
          "Their 24/7 support and compliance expertise helped us navigate complex regulatory requirements. Teceze is truly a trusted partner in our digital transformation journey.",
        name: "Michael Rodrigues",
        role: "Chief Information Officer",
        company: "Meridian Trust Bank",
        image: "images/financial_men-4.jpg",
        portrait:
          "https://images.unsplash.com/photo-1557862921-37829c790f19?auto=format&fit=crop&q=80&w=1000",
      },
    ];

    // Capabilities Data
    const capabilitiesData = [
      {
        type: "card",
        category: "Secure Infrastructure",
        title: "Secure Infrastructure & Network Management ",
        description:
          "Robust IT environments designed to support secure connectivity and protect critical government systems.",
        image: "images/gov_secure_infra.png",
        icon: "M42.25 8.125H9.75C8.88805 8.125 8.0614 8.46741 7.4519 9.0769C6.84241 9.6864 6.5 10.513 6.5 11.375V22.75C6.5 33.4588 11.6838 39.9486 16.0327 43.5073C20.7167 47.3383 25.3764 48.6403 25.5795 48.6931C25.8588 48.7691 26.1534 48.7691 26.4327 48.6931C26.6358 48.6403 31.2894 47.3383 35.9795 43.5073C40.3163 39.9486 45.5 33.4588 45.5 22.75V11.375C45.5 10.513 45.1576 9.6864 44.5481 9.0769C43.9386 8.46741 43.112 8.125 42.25 8.125ZM42.25 22.75C42.25 30.2798 39.4753 36.3919 34.0031 40.9134C31.621 42.875 28.9119 44.4015 26 45.4228C23.1262 44.4193 20.4505 42.9199 18.0944 40.9927C12.5572 36.463 9.75 30.3266 9.75 22.75V11.375H42.25V22.75Z",
      },
      {
        type: "image",
        category: "Data Security",
        title: "Data Security & Compliance ",
        description:
          "Advanced frameworks ensure the protection of sensitive public data while meeting strict regulatory requirements.",
        image: "images/data_security.jpg",
        icon: "M26 22.75C24.6342 22.7505 23.3141 23.2424 22.2812 24.1359C21.2482 25.0294 20.5712 26.2649 20.374 27.6164C20.1768 28.9679 20.4726 30.3452 21.2072 31.4966C21.9418 32.648 23.0663 33.4967 24.375 33.8873V37.375C24.375 37.806 24.5462 38.2193 24.851 38.524C25.1557 38.8288 25.569 39 26 39C26.431 39 26.8443 38.8288 27.149 38.524C27.4538 38.2193 27.625 37.806 27.625 37.375V33.8873C28.9337 33.4967 30.0582 32.648 30.7928 31.4966C31.5274 30.3452 31.8232 28.9679 31.626 27.6164C31.4288 26.2649 30.7518 25.0294 29.7188 24.1359C28.6859 23.2424 27.3658 22.7505 26 22.75ZM26 30.875C25.5179 30.875 25.0466 30.732 24.6458 30.4642C24.245 30.1964 23.9325 29.8157 23.748 29.3703C23.5636 28.9249 23.5153 28.4348 23.6093 27.962C23.7034 27.4891 23.9355 27.0548 24.2764 26.7139C24.6173 26.373 25.0516 26.1409 25.5245 26.0468C25.9973 25.9528 26.4874 26.0011 26.9328 26.1855C27.3782 26.37 27.7589 26.6825 28.0267 27.0833C28.2945 27.4841 28.4375 27.9554 28.4375 28.4375C28.4375 29.084 28.1807 29.704 27.7236 30.1611C27.2665 30.6182 26.6465 30.875 26 30.875ZM42.25 16.25H35.75V11.375C35.75 8.78914 34.7228 6.30919 32.8943 4.48071C31.0658 2.65223 28.5859 1.625 26 1.625C23.4141 1.625 20.9342 2.65223 19.1057 4.48071C17.2772 6.30919 16.25 8.78914 16.25 11.375V16.25H9.75C8.88805 16.25 8.0614 16.5924 7.4519 17.2019C6.84241 17.8114 6.5 18.638 6.5 19.5V42.25C6.5 43.112 6.84241 43.9386 7.4519 44.5481C8.0614 45.1576 8.88805 45.5 9.75 45.5H42.25C43.112 45.5 43.9386 45.1576 44.5481 44.5481C45.1576 43.9386 45.5 43.112 45.5 42.25V19.5C45.5 18.638 45.1576 17.8114 44.5481 17.2019C43.9386 16.5924 43.112 16.25 42.25 16.25ZM19.5 11.375C19.5 9.65109 20.1848 7.99779 21.4038 6.77881C22.6228 5.55982 24.2761 4.875 26 4.875C27.7239 4.875 29.3772 5.55982 30.5962 6.77881C31.8152 7.99779 32.5 9.65109 32.5 11.375V16.25H19.5V11.375ZM42.25 42.25H9.75V19.5H42.25V42.25Z",
      },
      {
        type: "card",
        category: "System Integration",
        title: "System Integration & Modernization",
        description:
          "Integration and modernization of legacy systems to improve efficiency and operational performance.",
        icon: "M42.25 8.125H9.75C8.45707 8.125 7.21709 8.63861 6.30285 9.55285C5.38861 10.4671 4.875 11.7071 4.875 13V35.75C4.875 37.0429 5.38861 38.2829 6.30285 39.1971C7.21709 40.1114 8.45707 40.625 9.75 40.625H42.25C43.5429 40.625 44.7829 40.1114 45.6971 39.1971C46.6114 38.2829 47.125 37.0429 47.125 35.75V13C47.125 11.7071 46.6114 10.4671 45.6971 9.55285C44.7829 8.63861 43.5429 8.125 42.25 8.125ZM43.875 35.75C43.875 36.181 43.7038 36.5943 43.399 36.899C43.0943 37.2038 42.681 37.375 42.25 37.375H9.75C9.31902 37.375 8.9057 37.2038 8.60095 36.899C8.29621 36.5943 8.125 36.181 8.125 35.75V13C8.125 12.569 8.29621 12.1557 8.60095 11.851C8.9057 11.5462 9.31902 11.375 9.75 11.375H42.25C42.681 11.375 43.0943 11.5462 43.399 11.851C43.7038 12.1557 43.875 12.569 43.875 13V35.75ZM34.125 45.5C34.125 45.931 33.9538 46.3443 33.649 46.649C33.3443 46.9538 32.931 47.125 32.5 47.125H19.5C19.069 47.125 18.6557 46.9538 18.351 46.649C18.0462 46.3443 17.875 45.931 17.875 45.5C17.875 45.069 18.0462 44.6557 18.351 44.351C18.6557 44.0462 19.069 43.875 19.5 43.875H32.5C32.931 43.875 33.3443 44.0462 33.649 44.351C33.9538 44.6557 34.125 45.069 34.125 45.5Z",
        image: "images/system_integration.jpg",
      },
      {
        type: "image",
        category: "Digital Services",
        title: "Digital Services Enablement ",
        description:
          "Modern platforms enable the efficient delivery of public services and improved citizen engagement.",
        image: "images/government_digital.png",
        icon: "M43.875 14.625C43.875 15.056 43.7038 15.4693 43.399 15.774C43.0943 16.0788 42.681 16.25 42.25 16.25H35.75C35.319 16.25 34.9057 16.0788 34.601 15.774C34.2962 15.4693 34.125 15.056 34.125 14.625C34.125 14.194 34.2962 13.7807 34.601 13.476C34.9057 13.1712 35.319 13 35.75 13H42.25C42.681 13 43.0943 13.1712 43.399 13.476C43.7038 13.7807 43.875 14.194 43.875 14.625ZM42.25 19.5H35.75C35.319 19.5 34.9057 19.6712 34.601 19.976C34.2962 20.2807 34.125 20.694 34.125 21.125C34.125 21.556 34.2962 21.9693 34.601 22.274C34.9057 22.5788 35.319 22.75 35.75 22.75H42.25C42.681 22.75 43.0943 22.5788 43.399 22.274C43.7038 21.9693 43.875 21.556 43.875 21.125C43.875 20.694 43.7038 20.2807 43.399 19.976C43.0943 19.6712 42.681 19.5 42.25 19.5ZM50.375 9.75V42.25C50.375 43.112 50.0326 43.9386 49.4231 44.5481C48.8136 45.1576 47.987 45.5 47.125 45.5H30.875C30.013 45.5 29.1864 45.1576 28.5769 44.5481C27.9674 43.9386 27.625 43.112 27.625 42.25V39H19.5V42.25H22.75C23.181 42.25 23.5943 42.4212 23.899 42.726C24.2038 43.0307 24.375 43.444 24.375 43.875C24.375 44.306 24.2038 44.7193 23.899 45.024C23.5943 45.3288 23.181 45.5 22.75 45.5H13C12.569 45.5 12.1557 45.3288 11.851 45.024C11.5462 44.7193 11.375 44.306 11.375 43.875C11.375 43.444 11.5462 43.0307 11.851 42.726C12.1557 42.4212 12.569 42.25 13 42.25H16.25V39H6.5C5.20707 39 3.96709 38.4864 3.05285 37.5721C2.13861 36.6579 1.625 35.4179 1.625 34.125V19.5C1.625 18.2071 2.13861 16.9671 3.05285 16.0529C3.96709 15.1386 5.20707 14.625 6.5 14.625H27.625V9.75C27.625 8.88805 27.9674 8.0614 28.5769 7.4519C29.1864 6.84241 30.013 6.5 30.875 6.5H47.125C47.987 6.5 48.8136 6.84241 49.4231 7.4519C50.0326 8.0614 50.375 8.88805 50.375 9.75ZM27.625 35.75V17.875H6.5C6.06902 17.875 5.6557 18.0462 5.35095 18.351C5.0462 18.6557 4.875 19.069 4.875 19.5V34.125C4.875 34.556 5.0462 34.9693 5.35095 35.274C5.6557 35.5788 6.06902 35.75 6.5 35.75H27.625ZM47.125 42.25V9.75H30.875V42.25H47.125ZM39 34.125C38.5179 34.125 38.0466 34.268 37.6458 34.5358C37.245 34.8036 36.9325 35.1843 36.748 35.6297C36.5636 36.0751 36.5153 36.5652 36.6093 37.038C36.7034 37.5109 36.9355 37.9452 37.2764 38.2861C37.6173 38.627 38.0516 38.8591 38.5245 38.9532C38.9973 39.0472 39.4874 38.9989 39.9328 38.8145C40.3782 38.63 40.7589 38.3175 41.0267 37.9167C41.2945 37.5159 41.4375 37.0446 41.4375 36.5625C41.4375 35.916 41.1807 35.296 40.7236 34.8389C40.2665 34.3818 39.6465 34.125 39 34.125Z",
        },
      {
        type: "image",
        category: "Government Services",
        title: "Managed IT for Government",
        description:
          "End-to-end IT management ensuring reliability, performance, and continuity of critical operations.",
        image: "images/gov_managed_IT.png",
        icon: "M42.25 6.5H9.75C8.88805 6.5 8.0614 6.84241 7.4519 7.4519C6.84241 8.0614 6.5 8.88805 6.5 9.75V42.25C6.5 43.112 6.84241 43.9386 7.4519 44.5481C8.0614 45.1576 8.88805 45.5 9.75 45.5H42.25C43.112 45.5 43.9386 45.1576 44.5481 44.5481C45.1576 43.9386 45.5 43.112 45.5 42.25V9.75C45.5 8.88805 45.1576 8.0614 44.5481 7.4519C43.9386 6.84241 43.112 6.5 42.25 6.5ZM17.875 32.5C18.1964 32.5 18.5106 32.5953 18.7778 32.7739C19.045 32.9524 19.2533 33.2062 19.3763 33.5031C19.4993 33.8001 19.5315 34.1268 19.4688 34.442C19.4061 34.7572 19.2513 35.0468 19.024 35.274C18.7968 35.5013 18.5072 35.6561 18.192 35.7188C17.8768 35.7815 17.5501 35.7493 17.2531 35.6263C16.9562 35.5033 16.7024 35.295 16.5239 35.0278C16.3453 34.7606 16.25 34.4464 16.25 34.125C16.25 33.694 16.4212 33.2807 16.726 32.976C17.0307 32.6712 17.444 32.5 17.875 32.5ZM9.75 9.75H16.25V29.5303C15.1658 29.9136 14.252 30.6679 13.6701 31.6598C13.0882 32.6518 12.8757 33.8174 13.0702 34.9509C13.2647 36.0843 13.8536 37.1125 14.7328 37.8537C15.612 38.595 16.725 39.0015 17.875 39.0015C19.025 39.0015 20.138 38.595 21.0172 37.8537C21.8964 37.1125 22.4853 36.0843 22.6798 34.9509C22.8743 33.8174 22.6618 32.6518 22.0799 31.6598C21.498 30.6679 20.5842 29.9136 19.5 29.5303V23.4223L29.25 33.1723V42.25H9.75V9.75ZM42.25 42.25H32.5V32.5C32.5002 32.2865 32.4583 32.0751 32.3767 31.8779C32.2952 31.6806 32.1755 31.5013 32.0247 31.3503L19.5 18.8277V9.75H26V14.625C25.9998 14.8385 26.0417 15.0499 26.1233 15.2471C26.2048 15.4444 26.3245 15.6237 26.4753 15.7747L29.7253 19.0247C29.4106 19.68 29.2481 20.398 29.25 21.125C29.25 22.0892 29.5359 23.0317 30.0716 23.8334C30.6073 24.6351 31.3686 25.2599 32.2594 25.6289C33.1502 25.9979 34.1304 26.0944 35.0761 25.9063C36.0217 25.7182 36.8904 25.2539 37.5721 24.5721C38.2539 23.8904 38.7182 23.0217 38.9063 22.0761C39.0944 21.1304 38.9979 20.1502 38.6289 19.2594C38.2599 18.3686 37.6351 17.6073 36.8334 17.0716C36.0317 16.5359 35.0892 16.25 34.125 16.25C33.3979 16.2487 32.6798 16.4119 32.0247 16.7273L29.25 13.9527V9.75H42.25V42.25ZM34.125 19.5C34.4464 19.5 34.7606 19.5953 35.0278 19.7739C35.295 19.9524 35.5033 20.2062 35.6263 20.5031C35.7493 20.8001 35.7815 21.1268 35.7188 21.442C35.6561 21.7572 35.5013 22.0468 35.274 22.274C35.0468 22.5013 34.7572 22.6561 34.442 22.7188C34.1268 22.7815 33.8001 22.7493 33.5031 22.6263C33.2062 22.5033 32.9524 22.295 32.7739 22.0278C32.5953 21.7606 32.5 21.4464 32.5 21.125C32.5 20.694 32.6712 20.2807 32.976 19.976C33.2807 19.6712 33.694 19.5 34.125 19.5Z",
      },
      {
        type: "image",
        category: "Support",
        title: "24/7 Operational Support",
        description:
          "Continuous expert support ensures uninterrupted public services and rapid issue resolution.",
        image: "images/government_support.png",
        icon: "M41.0089 11.1028C39.065 9.13936 36.7529 7.57862 34.205 6.50997C31.6571 5.44131 28.9234 4.88571 26.1605 4.875H26C20.3973 4.875 15.0241 7.10066 11.0624 11.0624C7.10066 15.0241 4.875 20.3973 4.875 26V37.375C4.875 38.6679 5.38861 39.9079 6.30285 40.8221C7.21709 41.7364 8.45707 42.25 9.75 42.25H13C14.2929 42.25 15.5329 41.7364 16.4471 40.8221C17.3614 39.9079 17.875 38.6679 17.875 37.375V29.25C17.875 27.9571 17.3614 26.7171 16.4471 25.8029C15.5329 24.8886 14.2929 24.375 13 24.375H8.19813C8.51151 20.9867 9.7842 17.758 11.867 15.0672C13.9498 12.3764 16.7565 10.3351 19.958 9.1824C23.1596 8.02973 26.6234 7.81352 29.9434 8.55909C33.2634 9.30467 36.3022 10.9811 38.7034 13.392C41.6384 16.342 43.4436 20.2293 43.8039 24.375H39C37.7071 24.375 36.4671 24.8886 35.5529 25.8029C34.6386 26.7171 34.125 27.9571 34.125 29.25V37.375C34.125 38.6679 34.6386 39.9079 35.5529 40.8221C36.4671 41.7364 37.7071 42.25 39 42.25H43.875C43.875 43.5429 43.3614 44.7829 42.4471 45.6971C41.5329 46.6114 40.2929 47.125 39 47.125H27.625C27.194 47.125 26.7807 47.2962 26.476 47.601C26.1712 47.9057 26 48.319 26 48.75C26 49.181 26.1712 49.5943 26.476 49.899C26.7807 50.2038 27.194 50.375 27.625 50.375H39C41.1549 50.375 43.2215 49.519 44.7452 47.9952C46.269 46.4715 47.125 44.4049 47.125 42.25V26C47.1356 23.2366 46.6008 20.4983 45.5513 17.942C44.5018 15.3857 42.9582 13.0616 41.0089 11.1028ZM13 27.625C13.431 27.625 13.8443 27.7962 14.149 28.101C14.4538 28.4057 14.625 28.819 14.625 29.25V37.375C14.625 37.806 14.4538 38.2193 14.149 38.524C13.8443 38.8288 13.431 39 13 39H9.75C9.31902 39 8.9057 38.8288 8.60095 38.524C8.29621 38.2193 8.125 37.806 8.125 37.375V27.625H13ZM39 39C38.569 39 38.1557 38.8288 37.851 38.524C37.5462 38.2193 37.375 37.806 37.375 37.375V29.25C37.375 28.819 37.5462 28.4057 37.851 28.101C38.1557 27.7962 38.569 27.625 39 27.625H43.875V39H39Z",
      },
    ];

    // Case Studies Data
    const caseStudiesData = [
        {
          subTag: "Security & Risk",
          title:
            "Implemented AI-driven security to reduce threats and improve real-time response.",
          topLabel: "Featured",
          image: "images/government_casestudy02.png",
          imageAlt: "Cybersecurity and AI",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          subTag: "Gov Modernization",
          title:
            "Deployed a unified citizen portal to streamline service access, reduce processing times, and enhance public engagement. ",
          topLabel: "Modernizing Public Service Delivery",
          image: "images/government_case_studies.jpg",
          imageAlt: "Cloud Infrastructure",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          subTag: "AI Automation",
          title:
            "Leveraged machine learning models to automate workflows and enhance operational efficiency.",
          topLabel: "Featured",
          image: "images/government_casestudy03.png",
          imageAlt: "AI Automation",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
      ];
    // Insights Data (news articles)
    const insightsData = [
      {
        featured: {
          image: "images/government_insights02.jpg",
          date: "Dec 18, 2025, IT Service",
          title:
            "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
        },
        articles: [
          {
            image:
              "https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=300",
            date: "Dec 16, 2025, IT Service",
            title: "How Managed IT Services Improve Business Continuity",
          },
          {
            image:
              "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300",
            date: "Jan 4, 2026, IT Service",
            title:
              "Cybersecurity Forecast 2026: New Threats and How to Stay Ahead",
          },
        ],
      },
      {
        featured: {
          image: "images/government_insights02.jpg",
          date: "Dec 18, 2025, IT Service",
          title:
            "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
        },
        articles: [
          {
            image:
              "https://images.unsplash.com/photo-1531746790731-6c087fecd65a?auto=format&fit=crop&q=80&w=300",
            date: "Jan 15, 2026, Cloud Services",
            title:
              "Hybrid Cloud Strategies: Balancing Security and Scalability",
          },
          {
            image:
              "https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&q=80&w=300",
            date: "Feb 3, 2026, AI & Automation",
            title: "AI-Powered Threat Detection: The Future of Cybersecurity",
          },
        ],
      },
      {
        featured: {
          image: "images/government_insights02.jpg",
          date: "Dec 18, 2025, IT Service",
          title:
            "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
        },
        articles: [
          {
            image:
              "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=300",
            date: "Mar 22, 2026, Compliance",
            title:
              "GDPR and Beyond: Preparing for 2026 Data Protection Regulations",
          },
          {
            image:
              "https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=300",
            date: "Apr 5, 2026, Digital Transformation",
            title:
              "Legacy System Modernization: A Step-by-Step Migration Guide",
          },
        ],
      },
    ];

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
          <div class="relative mb-12 mt-12 md:mt-0">
            <img class="absolute -top-12 md:-top-32 w-16 md:w-32 lg:w-auto quote-mark font-serif" src="images/Financial_Union.png" alt="Quote mark"/>
            <blockquote class="text-xl md:text-2xl leading-relaxed font-light text-gray-100 relative z-10">
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

    function renderCapabilities() {
      const container = document.getElementById("capabilitiesCarousel");
      if (!container) return;

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
            return `
            <div class="carousel-item flex-none w-full md:w-1/2 lg:w-1/3 px-0 md:px-8 min-w-0">
              <div class="relative rounded-[2rem] h-[450px] group cursor-pointer overflow-hidden shadow-2xl bg-gray-900">
               
                <!-- 1. INITIAL STATE: Image Card -->
                <div class="absolute inset-0 transition-all duration-700 group-hover:scale-110">
                  <img src="${item.image}" class="absolute inset-0 w-full h-full object-cover" />
                 
                  <!-- Gradient Overlay for readability -->
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-8 flex flex-col justify-end transition-opacity duration-500 group-hover:opacity-0">
                    <div class="mb-4">
                      <svg width="51" height="52" viewBox="0 0 51 36" fill="none">
                        <path d="${item.icon}" fill="white"/>
                      </svg>
                    </div>
                    <p class="text-[10px] tracking-[0.15em] text-white/90 uppercase mb-2 font-bold">${item.category}</p>
                    <h3 class="text-2xl font-bold text-white leading-tight">${item.title}</h3>
                  </div>
                </div>
 
                <!-- 2. HOVER STATE: Glass Card -->
             <div class="absolute inset-0 z-10 p-10 flex flex-col justify-between opacity-0 transition-all duration-500 group-hover:opacity-100 bg-gradient-to-b from-[#01516c] via-[#126d81] to-[#0f4a5c] rounded-[2rem]">
    <div>
    <div class="mb-10 transform transition duration-500 scale-110">
       <svg width="51" height="52" viewBox="0 0 51 36" fill="none">
                        <path d="${item.icon}" fill="#13C5B8"/>
                      </svg>
    </div>
   
    <p class="text-[12px] tracking-[0.25em] text-cyan-300 uppercase mb-4 font-bold">
      ${item.category}
    </p>
   
    <h3 class="text-2xl font-bold text-white leading-tight">
      ${item.title}
    </h3>
  </div>
 
  <div class="transform translate-y-4 transition-transform duration-500 delay-100 group-hover:translate-y-0">
    <p class="text-lg text-white/90 leading-relaxed font-normal">
      ${item.description || "Advanced security frameworks aligned with healthcare regulations to protect sensitive patient data across all systems."}
    </p>
  </div>
</div>
 
              </div>
            </div>
          `;
          })
          .join("")}
      </div>
    </div>
  `;
    }
    // Render Case Study Slides
     function renderCaseStudies() {
        const container = document.getElementById("casesCarousel");
        if (!container) return;
 
        if (!Array.isArray(caseStudiesData) || caseStudiesData.length < 1) {
          container.innerHTML = "";
          return;
        }
 
        // Two-slot carousel driven by a single `currentIndex`.
        // Left shows item(currentIndex) as text-only.
        // Right shows item(currentIndex+1) as background image card.
        container.innerHTML = `
          <div class="relative w-full overflow-hidden" id="caseSlotsWrapper">
            <div class="case-slots grid grid-cols-1 lg:grid-cols-2 items-center gap-6 sm:gap-8 md:gap-10 transition-all duration-500">
              <!-- LEFT SLOT (TEXT ONLY) -->
              <div
                id="caseSlotLeft"
                class="pr-0 relative top-4 sm:top-16 md:top-32 left-0 md:left-10 lg:pr-20 py-6 sm:py-10 px-4 sm:px-0 transition-opacity duration-200"
              >
                <p
                  id="caseLeftTag"
                  class="text-[11px] tracking-[0.25em] text-[#13C5B8]/90 uppercase font-bold mb-3 sm:mb-4"
                >Case Study</p>
 
                <h3
                  id="caseLeftTitle"
                  class="text-xl sm:text-2xl md:text-3xl font-medium leading-snug mb-6 sm:mb-8 text-[#011627]"
                ></h3>
 
                <div class="flex items-center gap-3">
                  <a
                  id="caseLeftViewAll"
              class="inline-flex items-center group border-2 border-black/40 sm:mb-20 lg:mb-6 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden"
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
                class="text-black font-semibold text-sm pr-3
             md:text-md
             lg:text-lg z-10 transition-colors duration-300"
              >
               View All Cases
              </span>
            </a>
                </div>
              </div>
 
              <!-- RIGHT SLOT (IMAGE + OVERLAY) -->
              <div
                id="caseSlotRight"
                class="relative group rounded-sm overflow-hidden h-[300px] sm:h-[500px] md:h-[600px] shadow-2xl transition-opacity duration-200"
              >
                <img
                  id="caseRightImg"
                  src=""
                  alt=""
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
 
                <div
                  id="caseRightOverlay"
                  class="absolute inset-0 bg-gradient-to-t from-[#011627] via-black/40 to-transparent p-6 sm:p-8 md:p-10 flex flex-col justify-end"
                >
                  <p
                    id="caseRightTopLabel"
                    class="text-[11px] tracking-[0.25em] text-white/80 uppercase font-bold mb-3"
                  >Featured</p>
 
                  <h4
                    id="caseRightDesc"
                    class="text-base sm:text-xl md:text-2xl font-medium text-white mb-4 sm:mb-6 leading-tight"
                  ></h4>
 
      <a
      id="caseRightView"
         
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
            class="text-white font-semibold text-sm pr-3
             md:text-md
             lg:text-lg z-10 transition-colors duration-300"
          >
         View Case Study
          </span>
        </a>
                </div>
              </div>
            </div>
          </div>
        `;
      }

    // Render Featured Article
    function renderFeaturedArticle() {
      const container = document.getElementById("featuredArticle");
      if (!container) return;

      const featured = insightsData[0].featured;
      container.innerHTML = `
        <div class="relative group overflow-hidden rounded-[20px] shadow-2xl h-[676px] max-w-[1240px] mx-auto mb-12">
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
          href="https://teal-mule-553916.hostingersite.com/blog.php"
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
          let currentIndex = 0;

        const leftTagEl = document.getElementById("caseLeftTag");
        const leftTitleEl = document.getElementById("caseLeftTitle");
        const leftViewAllEl = document.getElementById("caseLeftViewAll");

        const rightImgEl = document.getElementById("caseRightImg");
        const rightTopLabelEl = document.getElementById("caseRightTopLabel");
        const rightDescEl = document.getElementById("caseRightDesc");
        const rightViewEl = document.getElementById("caseRightView");


        const slotLeftEl = document.getElementById("caseSlotLeft");
        const slotRightEl = document.getElementById("caseSlotRight");
        const casesCounterEl = document.querySelector(".cases-counter");

        const prevBtn = document.querySelector(".cases-prev");
        const nextBtn = document.querySelector(".cases-next");

        if (
            !leftTitleEl ||
            !leftViewAllEl ||
            !rightImgEl ||
            !rightTopLabelEl ||
            !rightDescEl ||
            !rightViewEl ||
            !slotLeftEl ||
            !slotRightEl
        ) {
          return;
        }
        
        const total = caseStudiesData.length;
        
        function wrapIndex(n) {
          return ((n % total) + total) % total;
        }

        function getLeftIndex() {
          return wrapIndex(currentIndex);
        }
        
        function getRightIndex() {
          return wrapIndex(currentIndex + 1);
        }

        function updateCounter() {
          if (!casesCounterEl) return;          
          const display = getLeftIndex() + 1;
          casesCounterEl.textContent = String(display).padStart(2, "0");
        }
        
        function applyContent() {
          const leftIndex = getLeftIndex();
          const rightIndex = getRightIndex();

          const left = caseStudiesData[leftIndex];
          const right = caseStudiesData[rightIndex];

        // Shared link for the left side
         const viewAllLink = left.viewAllLink || "/case-studies";
         leftViewAllEl.href = viewAllLink;
         
         if (leftTagEl && left.subTag) {
         leftTagEl.textContent = left.subTag;
         }
         
         leftTitleEl.textContent = left.title;

         // Right card
         rightImgEl.src = right.image || "";
         rightImgEl.alt = right.imageAlt || "";
         rightTopLabelEl.textContent = right.topLabel || "Featured";
         rightDescEl.textContent = right.title || "";
         rightViewEl.href = right.caseLink || "#";
        }
        
        // Right-to-left shifting: when going next/prev by 1,
        // the RIGHT item becomes the new LEFT (text-only), and the next item appears on the RIGHT.
        function transitionTo(newIndex) {
          slotLeftEl.classList.add("opacity-0");
          slotRightEl.classList.add("opacity-0");

          window.setTimeout(() => {
            currentIndex = newIndex;
            applyContent();
            updateCounter();

            slotLeftEl.classList.remove("opacity-0");
            slotRightEl.classList.remove("opacity-0");
          }, 180);
        }

        function nextCase() {
          transitionTo(currentIndex + 1);
        }

        function prevCase() {
          transitionTo(currentIndex - 1);
        }

        applyContent();
        updateCounter();
        
      // Bind only once
      if (nextBtn && !nextBtn.dataset.casesBound) {
        nextBtn.addEventListener("click", nextCase);
        nextBtn.dataset.casesBound = "true";
      }
      if (prevBtn && !prevBtn.dataset.casesBound) {
        prevBtn.addEventListener("click", prevCase);
        prevBtn.dataset.casesBound = "true";
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