<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Retail Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
   <?php include 'header.php'; ?>
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
        url("/images/retail-service.jpg");
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

    .insights-counter span:first-child {d
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
      <p class="text-xs font-semibold tracking-widest uppercase mb-2 opacity-75 text-gray-200 relative z-10">
        Who We Serve / Retail
      </p>
      <div class="w-full h-0.5 border-b to-transparent"></div>
    </div>
    <div class="max-w-6xl mt-3 relative z-10">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6 tracking-tight">
        IT solutions engineered for retail businesses that demand speed and seamless scalability.      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light">
        Engineered to ensure seamless transactions, operational continuity, and real-time visibility across retail ecosystems. Built for fast-moving environments where performance, responsiveness, and scalability drive customer experience and growth.
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

    <div
      class="hidden md:grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 mt-8 sm:mt-10 mb-1 relative z-10 mb-8">
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
        <img src="/images/woman-with-shopping-bags.jpg" alt="IT Infrastructure Dashboard"
          class="rounded-3xl shadow-2xl w-[500px] md:w-[550px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl object-cover" />
      </div>

      <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
        <div class="text-sm sm:text-md md:text-2xl leading-[1.5] font-medium">
          <span class="font-semibold text-[#011627] block mb-6">Technology That Enables Connected Retail Experiences
          </span>

          <span class="font-semibold text-[#011627] block">Teceze delivers enterprise grade IT infrastructure for retail
            Organizations,
            supporting integrated systems, secure transactions, and
            efficient omnichannel operations.
          </span>

          <span class="text-gray-500 font-medium block mt-4">
            Operational complexity is reduced, system performance is optimized,
            and scalable digital environments are established supporting agility,
            customer engagement, and consistent retail operations.
          </span>
        </div>
      </div>
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
            <span class="text-base sm:text-lg text-gray-500 pb-1 font-light">/ 05</span>
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
      <div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center mb-8 sm:mb-12 gap-4 md:gap-0">
          <div class="text-xs sm:text-xs tracking-widest text-gray-400 font-bold leading-tight">
            Powered By Strong<br />Technology Partnerships
          </div>
          <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight">
            Backed by a strong ecosystem of technology partners,
            <span
              class="text-base sm:text-lg md:text-3xl text-gray-400 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-normal">
              Teceze enables faster execution through secure, scalable, and future-ready capabilities.
            </span>
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
                How can Teceze unify our in-store and online operations?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">−</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-96 opacity-100 mt-3 sm:mt-4">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                We integrate e-commerce, store systems, apps, and backend operations into one seamless, real-time retail
                ecosystem.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How does Teceze improve inventory management?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                With real-time visibility, automated replenishment, and smarter supply chain systems, stockouts and
                overstock.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                Can Teceze secure payment data and ensure PCI-DSS compliance?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Yes. We protect POS systems, payment gateways, and networks while ensuring continuous PCI-DSS
                compliance.
              </p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How does Teceze help us use data to grow sales?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                We turn data from sales, footfall, and digital channels into insights helping optimise pricing,
                promotions, and customer engagement.
              </p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How quickly can solutions be implemented without disruption?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Through a phased rollout pilot, validate, and scale, ensuring smooth adoption without impacting daily
                operations.
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
          <a href="#"
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
        image: "/images/financial_men-2.jpg",
        portrait:
          "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000",
      },
      {
        quote:
          "The proactive monitoring and rapid response from Teceze transformed our security posture. We've seen a 60% reduction in incidents and gained complete visibility across our infrastructure.",
        name: "Sarah Chen",
        role: "VP of Engineering",
        company: "Apex Financial Technologies",
        image: "/images/financial_men-2.jpg",
        portrait:
          "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=1000",
      },
      {
        quote:
          "Their 24/7 support and compliance expertise helped us navigate complex regulatory requirements. Teceze is truly a trusted partner in our digital transformation journey.",
        name: "Michael Rodrigues",
        role: "Chief Information Officer",
        company: "Meridian Trust Bank",
        image: "/images/financial_men-4.jpg",
        portrait:
          "https://images.unsplash.com/photo-1557862921-37829c790f19?auto=format&fit=crop&q=80&w=1000",
      },
    ];

    // Capabilities Data
    const capabilitiesData = [
      {
        type: "image",
        category: "customer experience",
        title: "Retail Analytics & Personalisation",
        description:
          "Data-driven analytics and AI-powered personalisation engines that help retailers understand shopper behaviour, optimise promotions, and deliver relevant experiences across every touchpoint.",
        icon: "M45.4853 36.9931L42.5888 12.6181C42.4948 11.8239 42.1114 11.0923 41.5117 10.5631C40.9121 10.034 40.1385 9.74446 39.3388 9.75H32.5077C32.5077 7.16414 31.4805 4.68419 29.652 2.85571C27.8235 1.02723 25.3435 0 22.7577 0C20.1718 0 17.6919 1.02723 15.8634 2.85571C14.0349 4.68419 13.0077 7.16414 13.0077 9.75H6.16846C5.36876 9.74446 4.5951 10.034 3.99549 10.5631C3.39587 11.0923 3.01241 11.8239 2.91846 12.6181L0.0218994 36.9931C-0.0311819 37.4481 0.0124962 37.9091 0.150069 38.346C0.287643 38.7828 0.516004 39.1857 0.820181 39.5281C1.12656 39.872 1.50199 40.1474 1.92199 40.3364C2.34199 40.5254 2.79712 40.6238 3.25768 40.625H42.2414C42.7047 40.626 43.163 40.5288 43.586 40.3398C44.0089 40.1507 44.387 39.8741 44.6952 39.5281C44.9979 39.185 45.2248 38.7818 45.361 38.345C45.4971 37.9082 45.5395 37.4475 45.4853 36.9931ZM22.7577 3.25C24.4816 3.25 26.1349 3.93482 27.3539 5.15381C28.5729 6.37279 29.2577 8.02609 29.2577 9.75H16.2577C16.2577 8.02609 16.9425 6.37279 18.1615 5.15381C19.3805 3.93482 21.0338 3.25 22.7577 3.25ZM3.25768 37.375L6.16846 13H13.0077V17.875C13.0077 18.306 13.1789 18.7193 13.4836 19.024C13.7884 19.3288 14.2017 19.5 14.6327 19.5C15.0637 19.5 15.477 19.3288 15.7817 19.024C16.0865 18.7193 16.2577 18.306 16.2577 17.875V13H29.2577V17.875C29.2577 18.306 29.4289 18.7193 29.7336 19.024C30.0384 19.3288 30.4517 19.5 30.8827 19.5C31.3137 19.5 31.727 19.3288 32.0317 19.024C32.3365 18.7193 32.5077 18.306 32.5077 17.875V13H39.3631L42.2414 37.375H3.25768Z",
        image: "/images/customer-experience-retail-bg-img.jpg",
      },
      {
        type: "image",
        category: "Integration",
        title: "Omnichannel Systems Integration",
        description:
          "Integration of in-store, online and mobile platforms to deliver consistent and connected customer experiences.",
        icon: "M22.7536 11.3792C20.8252 11.3792 18.9401 11.951 17.3368 13.0224C15.7334 14.0937 14.4837 15.6165 13.7457 17.398C13.0078 19.1796 12.8147 21.14 13.1909 23.0313C13.5671 24.9226 14.4957 26.6599 15.8593 28.0235C17.2228 29.387 18.9601 30.3156 20.8514 30.6919C22.7427 31.0681 24.7031 30.875 26.4847 30.137C28.2663 29.3991 29.789 28.1494 30.8604 26.546C31.9317 24.9426 32.5036 23.0576 32.5036 21.1292C32.5009 18.5442 31.4728 16.0658 29.6449 14.2379C27.817 12.41 25.3386 11.3819 22.7536 11.3792ZM22.7536 27.6292C21.468 27.6292 20.2113 27.248 19.1424 26.5337C18.0734 25.8195 17.2403 24.8044 16.7483 23.6166C16.2564 22.4289 16.1277 21.122 16.3785 19.8611C16.6293 18.6002 17.2483 17.442 18.1574 16.533C19.0664 15.624 20.2246 15.0049 21.4855 14.7541C22.7463 14.5033 24.0533 14.632 25.241 15.124C26.4287 15.6159 27.4439 16.4491 28.1581 17.518C28.8723 18.5869 29.2536 19.8436 29.2536 21.1292C29.2536 22.8531 28.5687 24.5064 27.3498 25.7254C26.1308 26.9444 24.4775 27.6292 22.7536 27.6292ZM45.0851 16.9062C45.0399 16.6774 44.9459 16.461 44.8095 16.2717C44.6732 16.0825 44.4977 15.9248 44.295 15.8093L38.2357 12.3562L38.2114 5.52716C38.2106 5.29197 38.1589 5.05974 38.0596 4.84652C37.9604 4.63329 37.816 4.44415 37.6365 4.29216C35.4386 2.43295 32.9075 1.00817 30.1778 0.093568C29.9628 0.0208083 29.735 -0.00611818 29.509 0.0145229C29.283 0.035164 29.0638 0.102915 28.8656 0.213412L22.7536 3.62997L16.6354 0.207318C16.4371 0.0961988 16.2176 0.0279362 15.9913 0.00694284C15.7649 -0.0140506 15.5366 0.0126923 15.3212 0.0854428C12.5935 1.00673 10.0653 2.43695 7.87059 4.30029C7.69137 4.45206 7.54717 4.64087 7.44794 4.85372C7.3487 5.06657 7.29678 5.29841 7.29575 5.53326L7.26528 12.3684L1.20606 15.8215C1.00334 15.9369 0.827851 16.0946 0.691507 16.2839C0.555164 16.4732 0.461167 16.6896 0.415904 16.9184C-0.138635 19.705 -0.138635 22.5737 0.415904 25.3603C0.461167 25.5891 0.555164 25.8055 0.691507 25.9948C0.827851 26.1841 1.00334 26.3418 1.20606 26.4572L7.26528 29.9103L7.28965 36.7393C7.29039 36.9745 7.34217 37.2068 7.44142 37.42C7.54067 37.6332 7.68502 37.8224 7.8645 37.9743C10.0625 39.8336 12.5936 41.2583 15.3232 42.1729C15.5382 42.2457 15.766 42.2726 15.992 42.252C16.218 42.2313 16.4372 42.1636 16.6354 42.0531L22.7536 38.6284L28.8717 42.0511C29.1138 42.186 29.3867 42.2559 29.6639 42.2542C29.8414 42.2541 30.0176 42.2253 30.1859 42.1689C32.9133 41.2488 35.4415 39.82 37.6365 37.9581C37.8158 37.8063 37.9599 37.6175 38.0592 37.4047C38.1584 37.1918 38.2103 36.96 38.2114 36.7251L38.2418 29.89L44.3011 26.4369C44.5038 26.3214 44.6793 26.1637 44.8156 25.9745C44.952 25.7852 45.046 25.5688 45.0912 25.34C45.6427 22.5556 45.6406 19.6898 45.0851 16.9062ZM42.0382 23.9973L36.235 27.2981C35.9807 27.4427 35.7702 27.6532 35.6256 27.9075C35.5078 28.1106 35.3839 28.3259 35.2579 28.529C35.0967 28.7852 35.0109 29.0815 35.0101 29.3842L34.9797 35.935C33.4198 37.1599 31.682 38.1395 29.8264 38.8397L23.9723 35.5775C23.7293 35.443 23.4558 35.3731 23.1781 35.3744H23.1395C22.8937 35.3744 22.6459 35.3744 22.4001 35.3744C22.1094 35.3671 21.822 35.4372 21.5673 35.5775L15.7092 38.8478C13.8496 38.1529 12.107 37.1782 10.5417 35.9573L10.5193 29.4167C10.5183 29.1134 10.4325 28.8165 10.2715 28.5595C10.1456 28.3564 10.0217 28.1533 9.9059 27.9379C9.76234 27.6797 9.55183 27.465 9.29653 27.3164L3.48715 24.0075C3.18653 22.1058 3.18653 20.1688 3.48715 18.2672L9.28028 14.9603C9.53454 14.8157 9.74507 14.6052 9.88965 14.3509C10.0075 14.1478 10.1314 13.9325 10.2573 13.7294C10.4185 13.4732 10.5044 13.1769 10.5051 12.8742L10.5356 6.32341C12.0954 5.09846 13.8332 4.11894 15.6889 3.41872L21.5348 6.68091C21.7892 6.82194 22.0768 6.89209 22.3676 6.88404C22.6134 6.88404 22.8612 6.88404 23.107 6.88404C23.3977 6.8913 23.6851 6.8212 23.9398 6.68091L29.7979 3.4106C31.6575 4.10544 33.4001 5.08016 34.9654 6.30107L34.9878 12.8417C34.9888 13.1449 35.0746 13.4419 35.2356 13.6989C35.3615 13.902 35.4854 14.1051 35.6012 14.3204C35.7448 14.5786 35.9553 14.7934 36.2106 14.942L42.02 18.2509C42.3246 20.154 42.328 22.0932 42.0301 23.9973H42.0382Z",
        image: "/images/integration-retail-bg-img.png",
      },
      {
        type: "image",
        category: "Infrastructure",
        title: "POS & Transaction Infrastructure",
        description:
          "Reliable and secure point-of-sale systems and transaction infrastructure that ensure fast, uninterrupted payment processing across every physical and digital retail touchpoint.",
        image: "/images/shopping-cart-phone-screen-with-glowing-bright-light-emitting-from-it.jpg",
        icon: "M43.4972 8.70797C43.3446 8.52543 43.1539 8.37861 42.9384 8.27788C42.7229 8.17715 42.4879 8.12496 42.25 8.125H9.48188L8.24687 1.33453C8.17885 0.960106 7.98157 0.621431 7.68944 0.37755C7.3973 0.13367 7.02884 5.50006e-05 6.64828 0H1.625C1.19402 0 0.780698 0.171205 0.475951 0.475951C0.171205 0.780698 0 1.19402 0 1.625C0 2.05598 0.171205 2.4693 0.475951 2.77405C0.780698 3.07879 1.19402 3.25 1.625 3.25H5.28125L10.4731 31.7464C10.6261 32.5915 10.9995 33.3812 11.5558 34.0356C10.7881 34.7527 10.2339 35.6684 9.95487 36.6811C9.67579 37.6939 9.68266 38.7642 9.97472 39.7733C10.2668 40.7824 10.8326 41.6909 11.6095 42.398C12.3863 43.1052 13.3439 43.5833 14.3759 43.7795C15.4079 43.9757 16.4741 43.8822 17.4563 43.5094C18.4384 43.1366 19.2981 42.4991 19.9401 41.6676C20.582 40.836 20.9811 39.8429 21.0931 38.7984C21.2051 37.7539 21.0256 36.6987 20.5745 35.75H29.8005C29.4369 36.5111 29.2488 37.344 29.25 38.1875C29.25 39.3124 29.5836 40.412 30.2085 41.3473C30.8335 42.2826 31.7217 43.0116 32.761 43.4421C33.8002 43.8725 34.9438 43.9852 36.0471 43.7657C37.1503 43.5463 38.1638 43.0046 38.9592 42.2092C39.7546 41.4138 40.2963 40.4003 40.5157 39.2971C40.7352 38.1938 40.6225 37.0502 40.1921 36.011C39.7616 34.9717 39.0326 34.0835 38.0973 33.4585C37.162 32.8336 36.0624 32.5 34.9375 32.5H15.2689C14.8884 32.4999 14.5199 32.3663 14.2278 32.1224C13.9356 31.8786 13.7383 31.5399 13.6703 31.1655L13.0264 27.625H36.5889C37.7306 27.6248 38.836 27.224 39.7124 26.4923C40.5888 25.7607 41.1806 24.7447 41.3847 23.6214L43.8547 10.0405C43.8965 9.80574 43.8862 9.56468 43.8244 9.3344C43.7626 9.10411 43.6509 8.89025 43.4972 8.70797ZM17.875 38.1875C17.875 38.6696 17.732 39.1409 17.4642 39.5417C17.1964 39.9425 16.8157 40.255 16.3703 40.4395C15.9249 40.6239 15.4348 40.6722 14.962 40.5782C14.4891 40.4841 14.0548 40.252 13.7139 39.9111C13.373 39.5702 13.1409 39.1359 13.0468 38.663C12.9528 38.1902 13.0011 37.7001 13.1855 37.2547C13.37 36.8093 13.6825 36.4286 14.0833 36.1608C14.4841 35.893 14.9554 35.75 15.4375 35.75C16.084 35.75 16.704 36.0068 17.1611 36.4639C17.6182 36.921 17.875 37.541 17.875 38.1875ZM37.375 38.1875C37.375 38.6696 37.232 39.1409 36.9642 39.5417C36.6964 39.9425 36.3157 40.255 35.8703 40.4395C35.4249 40.6239 34.9348 40.6722 34.462 40.5782C33.9891 40.4841 33.5548 40.252 33.2139 39.9111C32.873 39.5702 32.6409 39.1359 32.5468 38.663C32.4528 38.1902 32.5011 37.7001 32.6855 37.2547C32.87 36.8093 33.1825 36.4286 33.5833 36.1608C33.9841 35.893 34.4554 35.75 34.9375 35.75C35.584 35.75 36.204 36.0068 36.6611 36.4639C37.1182 36.921 37.375 37.541 37.375 38.1875ZM38.1875 23.0405C38.1193 23.4159 37.9211 23.7554 37.6277 23.9994C37.3343 24.2434 36.9644 24.3764 36.5828 24.375H12.4353L10.073 11.375H40.302L38.1875 23.0405Z",
      },
      {
        type: "image",
        category: "management",
        title: "Inventory & Supply Chain Management",
        description:
          "Real-time inventory tracking and supply chain visibility solutions that help retailers reduce stock gaps, prevent overstock, and keep product availability aligned with customer demand across all locations.",
        image: "/images/ordinary-life-scene-from-mall-america.jpg",
        icon: "M48.1006 20.7982C47.9299 20.9263 47.7356 21.0194 47.5289 21.0724C47.3222 21.1254 47.1071 21.1371 46.8958 21.1069C46.6846 21.0767 46.4813 21.0052 46.2977 20.8965C46.1141 20.7878 45.9537 20.644 45.8256 20.4732C44.8462 19.1567 43.5713 18.0885 42.1036 17.3547C40.636 16.6209 39.0165 16.2419 37.3756 16.2482C37.0561 16.2482 36.7436 16.154 36.4774 15.9773C36.2111 15.8006 36.0028 15.5494 35.8786 15.255C35.7942 15.055 35.7508 14.8402 35.7508 14.6232C35.7508 14.4063 35.7942 14.1915 35.8786 13.9915C36.0028 13.6971 36.2111 13.4459 36.4774 13.2692C36.7436 13.0925 37.0561 12.9983 37.3756 12.9982C38.2874 12.9982 39.1809 12.7424 39.9546 12.26C40.7282 11.7776 41.3511 11.0878 41.7525 10.2691C42.1538 9.45046 42.3176 8.53562 42.225 7.62856C42.1325 6.7215 41.7875 5.85856 41.2291 5.13776C40.6707 4.41697 39.9214 3.86721 39.0662 3.55094C38.2111 3.23466 37.2844 3.16455 36.3913 3.34856C35.4983 3.53257 34.6748 3.96332 34.0144 4.5919C33.3539 5.22048 32.8829 6.02168 32.655 6.9045C32.6016 7.11123 32.5081 7.30542 32.3797 7.476C32.2513 7.64658 32.0906 7.79019 31.9067 7.89865C31.7227 8.00711 31.5193 8.07828 31.3079 8.1081C31.0965 8.13792 30.8813 8.12581 30.6745 8.07246C30.4678 8.01912 30.2736 7.92557 30.103 7.79717C29.9324 7.66877 29.7888 7.50803 29.6804 7.32412C29.5719 7.14022 29.5007 6.93676 29.4709 6.72535C29.4411 6.51394 29.4532 6.29873 29.5066 6.092C29.8229 4.86779 30.4207 3.73432 31.2522 2.78177C32.0837 1.82923 33.1261 1.08389 34.2963 0.605083C35.4666 0.126272 36.7325 -0.0728024 37.9932 0.0236992C39.2539 0.120201 40.4748 0.509616 41.5585 1.16096C42.6423 1.8123 43.5591 2.70759 44.2359 3.7756C44.9128 4.8436 45.331 6.05484 45.4574 7.31293C45.5838 8.57103 45.4148 9.84126 44.9639 11.0225C44.513 12.2038 43.7925 13.2636 42.86 14.1175C45.0696 15.0742 46.9904 16.5924 48.4317 18.5212C48.5597 18.6924 48.6528 18.8871 48.7054 19.0942C48.7581 19.3014 48.7693 19.5169 48.7386 19.7284C48.7078 19.9399 48.6357 20.1433 48.5262 20.3269C48.4167 20.5105 48.2721 20.6706 48.1006 20.7982ZM37.1562 33.3107C37.2738 33.4957 37.3528 33.7025 37.3883 33.9188C37.4239 34.135 37.4154 34.3563 37.3632 34.5691C37.3111 34.782 37.2164 34.9821 37.0849 35.1574C36.9534 35.3328 36.7878 35.4797 36.5981 35.5894C36.4084 35.6991 36.1984 35.7692 35.9808 35.7957C35.7633 35.8221 35.5426 35.8042 35.3321 35.7432C35.1216 35.6821 34.9257 35.5791 34.756 35.4403C34.5864 35.3016 34.4466 35.1299 34.345 34.9357C33.3213 33.2024 31.8634 31.7659 30.1152 30.768C28.3669 29.7701 26.3886 29.2453 24.3756 29.2453C22.3626 29.2453 20.3843 29.7701 18.6361 30.768C16.8878 31.7659 15.4299 33.2024 14.4062 34.9357C14.3047 35.1299 14.1648 35.3016 13.9952 35.4403C13.8256 35.5791 13.6296 35.6821 13.4191 35.7432C13.2086 35.8042 12.988 35.8221 12.7704 35.7957C12.5528 35.7692 12.3429 35.6991 12.1531 35.5894C11.9634 35.4797 11.7978 35.3328 11.6663 35.1574C11.5348 34.9821 11.4402 34.782 11.388 34.5691C11.3359 34.3563 11.3273 34.135 11.3629 33.9188C11.3985 33.7025 11.4774 33.4957 11.595 33.3107C13.1704 30.6039 15.5726 28.4737 18.4484 27.2332C16.8302 25.9943 15.6409 24.2793 15.0477 22.3295C14.4545 20.3796 14.4873 18.2929 15.1414 16.3626C15.7955 14.4323 17.038 12.7556 18.6944 11.568C20.3507 10.3804 22.3375 9.74174 24.3756 9.74174C26.4137 9.74174 28.4005 10.3804 30.0569 11.568C31.7132 12.7556 32.9558 14.4323 33.6099 16.3626C34.2639 18.2929 34.2967 20.3796 33.7035 22.3295C33.1103 24.2793 31.921 25.9943 30.3028 27.2332C33.1787 28.4737 35.5808 30.6039 37.1562 33.3107ZM24.3756 25.9982C25.6612 25.9982 26.9179 25.617 27.9868 24.9028C29.0557 24.1886 29.8889 23.1734 30.3808 21.9857C30.8728 20.798 31.0015 19.491 30.7507 18.2302C30.4999 16.9693 29.8809 15.8111 28.9718 14.9021C28.0628 13.993 26.9046 13.3739 25.6437 13.1231C24.3828 12.8723 23.0759 13.0011 21.8882 13.493C20.7005 13.985 19.6853 14.8181 18.9711 15.887C18.2568 16.956 17.8756 18.2127 17.8756 19.4982C17.8756 21.2222 18.5604 22.8755 19.7794 24.0944C20.9984 25.3134 22.6517 25.9982 24.3756 25.9982ZM13.0006 14.6232C13.0006 14.1923 12.8294 13.7789 12.5247 13.4742C12.2199 13.1695 11.8066 12.9982 11.3756 12.9982C10.4638 12.9982 9.57037 12.7424 8.79668 12.26C8.02299 11.7776 7.40009 11.0878 6.99874 10.2691C6.5974 9.45046 6.43369 8.53562 6.52621 7.62856C6.61873 6.7215 6.96377 5.85856 7.52215 5.13776C8.08052 4.41697 8.82985 3.86721 9.68501 3.55094C10.5402 3.23466 11.4669 3.16455 12.3599 3.34856C13.2529 3.53257 14.0764 3.96332 14.7369 4.5919C15.3973 5.22048 15.8683 6.02168 16.0962 6.9045C16.204 7.322 16.4732 7.67961 16.8446 7.89865C17.216 8.11769 17.6592 8.18021 18.0767 8.07246C18.4942 7.96472 18.8518 7.69553 19.0709 7.32412C19.2899 6.95271 19.3524 6.5095 19.2447 6.092C18.9283 4.86779 18.3306 3.73432 17.499 2.78177C16.6675 1.82923 15.6252 1.08389 14.4549 0.605083C13.2846 0.126272 12.0188 -0.0728024 10.758 0.0236992C9.49729 0.120201 8.27647 0.509616 7.19272 1.16096C6.10896 1.8123 5.19218 2.70759 4.51531 3.7756C3.83845 4.8436 3.42019 6.05484 3.29382 7.31293C3.16744 8.57103 3.33644 9.84126 3.78736 11.0225C4.23828 12.2038 4.95868 13.2636 5.89124 14.1175C3.68385 15.0751 1.76519 16.5932 0.325616 18.5212C0.0667609 18.866 -0.0445287 19.2995 0.0162301 19.7263C0.076989 20.1532 0.304819 20.5384 0.649601 20.7972C0.994382 21.0561 1.42787 21.1674 1.85471 21.1066C2.28154 21.0459 2.66676 20.818 2.92562 20.4732C3.90506 19.1567 5.17993 18.0885 6.64759 17.3547C8.11526 16.6209 9.73473 16.2419 11.3756 16.2482C11.8066 16.2482 12.2199 16.077 12.5247 15.7723C12.8294 15.4675 13.0006 15.0542 13.0006 14.6232Z",
      },
      {
        type: "image",
        category: "security",
        title: "Retail Cybersecurity & Payment Protection",
        description:
          "End-to-end security solutions safeguarding customer payment data, retail networks, and e-commerce platforms against fraud, breaches, and compliance violations.",
        image: "/images/cybersec-experience-retail-bg-img001.png",
        icon: "M19.5 21.125C18.1342 21.1255 16.8141 21.6174 15.7812 22.5109C14.7482 23.4044 14.0712 24.6399 13.874 25.9914C13.6768 27.3429 13.9726 28.7202 14.7072 29.8716C15.4418 31.023 16.5663 31.8717 17.875 32.2623V35.75C17.875 36.181 18.0462 36.5943 18.351 36.899C18.6557 37.2038 19.069 37.375 19.5 37.375C19.931 37.375 20.3443 37.2038 20.649 36.899C20.9538 36.5943 21.125 36.181 21.125 35.75V32.2623C22.4337 31.8717 23.5582 31.023 24.2928 29.8716C25.0274 28.7202 25.3232 27.3429 25.126 25.9914C24.9288 24.6399 24.2518 23.4044 23.2188 22.5109C22.1859 21.6174 20.8658 21.1255 19.5 21.125ZM19.5 29.25C19.0179 29.25 18.5466 29.107 18.1458 28.8392C17.745 28.5714 17.4325 28.1907 17.248 27.7453C17.0636 27.2999 17.0153 26.8098 17.1093 26.337C17.2034 25.8641 17.4355 25.4298 17.7764 25.0889C18.1173 24.748 18.5516 24.5159 19.0245 24.4218C19.4973 24.3278 19.9874 24.3761 20.4328 24.5605C20.8782 24.745 21.2589 25.0575 21.5267 25.4583C21.7945 25.8591 21.9375 26.3304 21.9375 26.8125C21.9375 27.459 21.6807 28.079 21.2236 28.5361C20.7665 28.9932 20.1465 29.25 19.5 29.25ZM35.75 14.625H29.25V9.75C29.25 7.16414 28.2228 4.68419 26.3943 2.85571C24.5658 1.02723 22.0859 0 19.5 0C16.9141 0 14.4342 1.02723 12.6057 2.85571C10.7772 4.68419 9.75 7.16414 9.75 9.75V14.625H3.25C2.38805 14.625 1.5614 14.9674 0.951903 15.5769C0.34241 16.1864 0 17.013 0 17.875V40.625C0 41.487 0.34241 42.3136 0.951903 42.9231C1.5614 43.5326 2.38805 43.875 3.25 43.875H35.75C36.612 43.875 37.4386 43.5326 38.0481 42.9231C38.6576 42.3136 39 41.487 39 40.625V17.875C39 17.013 38.6576 16.1864 38.0481 15.5769C37.4386 14.9674 36.612 14.625 35.75 14.625ZM13 9.75C13 8.02609 13.6848 6.37279 14.9038 5.15381C16.1228 3.93482 17.7761 3.25 19.5 3.25C21.2239 3.25 22.8772 3.93482 24.0962 5.15381C25.3152 6.37279 26 8.02609 26 9.75V14.625H13V9.75ZM35.75 40.625H3.25V17.875H35.75V40.625Z"
      },
    ];

    // Case Studies Data
    const caseStudiesData = [
      {
        title:
          "Implemented AI-driven security to reduce threats and improve real-time response.",
        topLabel: "Strengthening Enterprise Cybersecurity",
        image: "/images/retail-case-study-img-01.jpg",
        imageAlt: "Cybersecurity and AI",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
      {
        title:
          "Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.",
        topLabel: "Driving Data-Driven Decisions",
        image: "/images/retail-case-study-img-02.jpg",
        imageAlt: "Cloud Infrastructure",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
      {
        title:
          "Developed a unified retail mobile application connecting in-store, online, and loyalty experiences, resulting in increased customer retention, higher basket values, and a measurable improvement in repeat purchase rates.",
        topLabel: "App & Software Development for Retail",
        image: "/images/retail-case-study-img-03.jpg",
        imageAlt: "AI Automation",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
    ];

    // Insights Data (news articles)
    const insightsData = [
      {
        featured: {
          image: "images/futuristic-holographic-shopping-cart-with-glowing-blue-lights-immersive-online-retail-environment.jpg",
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
          image: "images/financial_latest_insights.jpg",
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
          image: "images/financial_latest_insights.jpg",
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

      // Assuming capabilitiesData is defined in your global scope

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

            // Logic: Check if image exists and is not null/empty

            const hasImage = item.image && item.image.trim() !== "";

            // If no image, we force opacity-100 and remove the 'group-hover' requirement

            const hoverStateClasses = hasImage

              ? "opacity-0 group-hover:opacity-100"

              : "opacity-100";

            // If no image, we hide the initial state entirely

            const initialStateClasses = hasImage

              ? "opacity-100 group-hover:opacity-0"

              : "opacity-0 pointer-events-none";

            return `
<div class="carousel-item flex-none w-full md:w-1/2 lg:w-1/3 px-0 md:px-8 min-w-0">
<div class="relative rounded-[2rem] h-[450px] group cursor-pointer overflow-hidden shadow-2xl bg-gray-900">
<!-- 1. INITIAL STATE: Image Card (Hidden if image is null) -->
<div class="absolute inset-0 transition-all duration-700 ${hasImage ? 'group-hover:scale-110' : ''} ${initialStateClasses}">
<img src="${item.image || ''}" class="absolute inset-0 w-full h-full object-cover" />
<!-- Gradient Overlay -->
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-8 flex flex-col justify-end transition-opacity duration-500">
<div class="mb-4">
<svg width="51" height="52" viewBox="0 0 51 36" fill="none">
<path d="${item.icon}" fill="white"/>
</svg>
</div>
<p class="text-[10px] tracking-[0.15em] text-white/90 uppercase mb-2 font-bold">${item.category}</p>
<h3 class="text-2xl font-bold text-white leading-tight">${item.title}</h3>
</div>
</div>
 
                <!-- 2. HOVER/DEFAULT STATE: Glass Card -->
<div class="absolute inset-0 z-10
  p-5 md:p-6 xl:p-10 
  flex flex-col gap-4 xl:justify-between
  h-auto xl:h-full
  overflow-visible xl:overflow-hidden
  transition-all duration-500 
  bg-gradient-to-b from-[#01516c] via-[#126d81] to-[#0f4a5c] 
  rounded-[2rem] ${hoverStateClasses}">

  <div>
    <div class="mb-4 xl:mb-10 transform transition duration-500 ${hasImage ? 'xl:scale-110' : 'scale-100'}">
      <svg width="51" height="52" viewBox="0 0 51 36" fill="none">
        <path d="${item.icon}" fill="#13C5B8"/>
      </svg>
    </div>

    <p class="text-[12px] tracking-[0.25em] text-cyan-300 uppercase mb-2 xl:mb-4 font-bold">
      ${item.category}
    </p>

    <h3 class="text-xl sm:text-2xl font-bold text-white leading-tight">
      ${item.title}
    </h3>
  </div>

<div class="transform min-h-[140px] xl:min-h-[180px]
  ${hasImage
                ? 'translate-y-0 xl:translate-y-2 xl:group-hover:translate-y-0'
                : 'translate-y-0'} 
  transition-transform duration-500 delay-100">

  <p class="text-sm sm:text-base lg:text-sm xl:text-lg text-white/90 leading-relaxed">
    ${item.description}
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

      // Two-slot carousel driven by a single currentIndex.
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
        <div class="relative group rounded-2xl sm:rounded-3xl overflow-hidden h-[250px] sm:h-[400px] md:h-[570px] mb-8 sm:mb-12 shadow-2xl">
          <img src="${featured.image}" alt="Meeting"
            class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-6 sm:p-8 md:p-12 flex flex-col justify-end">
            <p class="text-xs sm:text-sm text-gray-300 tracking-widest font-bold mb-1 sm:mb-2">
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
                <a href="https://teal-mule-553916.hostingersite.com/blog.php" class="text-cyan-500 text-xs sm:text-sm md:text-base font-bold flex items-center gap-1 hover:underline">View All News
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

          if (leftTagEl && left.topLabel) {
            leftTagEl.textContent = left.topLabel;
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