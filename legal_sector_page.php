<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Legal Sector</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <?php include 'header.php'; ?>
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
        url("images/legal_service.jpg");
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
      <p class="text-xs font-semibold tracking-widest uppercase mb-2 opacity-75 text-gray-200 relative z-10">
        Who We Serve / Legal Sector
      </p>
      <div class="w-full h-0.5 border-b to-transparent"></div>
    </div>
    <div class="max-w-6xl mt-3 relative z-10">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6 tracking-tight">
        Trusted IT for Legal Firms Where<br />
        Confidentiality and Precision<br />
        Are Paramount
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light">
        Engineered to protect sensitive legal data, ensure uninterrupted
        access to critical systems, and uphold the highest standards of
        compliance. Built for high-trust environments where every detail,
        every document, and every decision demands absolute reliability.
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
        <p class="text-gray-300 leading-relaxed font-bold text-xs sm:text-sm">
          Supporting Financial Institutions<br>
          Worldwide With Tailored,<br> Scalable Solutions.
        </p>

      </div>
      <div class="group">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
          185
        </h2>
        <p class="text-gray-300 leading-relaxed font-bold text-xs sm:text-sm">
          Global delivery hubs enabling </br>seamless, round-the-clock </br>operations.
        </p>
      </div>
      <div class="group">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
          33K+
        </h2>
        <p class="text-gray-300 leading-relaxed font-bold text-xs sm:text-sm">

          A global network of experts</br> driving innovation and</br> compliance.
        </p>
      </div>
      <div class="group">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3">
          100+
        </h2>
        <p class="text-gray-300 leading-relaxed font-bold text-xs sm:text-sm">

          Trusted by leading banks to </br>deliver impactful, reliable</br> solutions.
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
        <img src="images/legal_banner.jpg" alt="IT Infrastructure Dashboard"
          class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl" />
      </div>

      <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
        <div class="text-sm sm:text-md md:text-2xl leading-[1.5] font-medium">
          <p class="text-lg sm:text-3xl font-medium mb-5">
            Technology That Earns the Confidence of Legal Professionals
          </p>

          <p class="text-lg sm:text-3xl leading-[1.5] font-medium">
            Teceze delivers enterprise-grade IT infrastructure for legal
            organizations, enabling airtight data security, seamless case
            management, and operationally resilient systems.</br> Client
            confidentiality is preserved, regulatory obligations are met, and
            secure digital environments are established, empowering legal teams
            to focus on delivering precise, uninterrupted, and trusted legal
            service.
          </p>
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
          <div class="text-l sm:text-xl tracking-widest text-gray-400 font-bold leading-tight">
            Powered By Strong<br />Technology Partnerships
          </div>
          <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight">
            Backed by a strong ecosystem of technology partners,
            <span class="text-gray-400">Teceze enables faster execution through secure, scalable, and future-ready
              capabilities.</span>
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
                How does Teceze protect confidential client and case data?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">−</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-96 opacity-100 mt-3 sm:mt-4">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Through end-to-end encryption, role-based access controls, and secure document storage, ensure data is
                only accessible to authorised users at all times.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                Can Teceze automate contract review and document-heavy legal processes?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Yes. Teceze streamlines contract review, document generation, and approval workflows, reducing manual
                effort and freeing time for higher-value legal work.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How does Teceze keep legal firms compliant with GDPR and sector regulations?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                By embedding data classification, retention policies, and breach response protocols aligned with GDPR
                and SRA standards into every solution from day one.
              </p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                Can Teceze integrate with our existing practice management or billing systems?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                Yes. Teceze cleanly connects modern legal tools with existing systems, maintaining data integrity
                without requiring a full platform replacement.
              </p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="faq-item border-b border-gray-100 py-4 sm:py-6">
            <div class="faq-toggle flex justify-between items-center cursor-pointer group gap-3">
              <h3 class="text-sm sm:text-base md:text-lg font-bold text-[#1a2b3c]">
                How does Teceze support secure hybrid working for legal teams?
              </h3>
              <span
                class="faq-icon text-xl sm:text-2xl font-light text-gray-400 group-hover:text-cyan-500 flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0 opacity-0 mt-0">
              <p class="text-xs sm:text-sm text-gray-400 leading-relaxed max-w-lg">
                With encrypted communication tools, secure remote access, and cloud collaboration platforms built around
                legal confidentiality and compliance requirements.
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
        type: "image",
        category: "Security",
        title: "Document Security & Controlled Access",
        description:
          "Rigorously secured systems ensuring only authorized access to sensitive legal documents, case files, and client records.",
        icon: "M19.5 21.125C18.1342 21.1255 16.8141 21.6174 15.7812 22.5109C14.7482 23.4044 14.0712 24.6399 13.874 25.9914C13.6768 27.3429 13.9726 28.7202 14.7072 29.8716C15.4418 31.023 16.5663 31.8717 17.875 32.2623V35.75C17.875 36.181 18.0462 36.5943 18.351 36.899C18.6557 37.2038 19.069 37.375 19.5 37.375C19.931 37.375 20.3443 37.2038 20.649 36.899C20.9538 36.5943 21.125 36.181 21.125 35.75V32.2623C22.4337 31.8717 23.5582 31.023 24.2928 29.8716C25.0274 28.7202 25.3232 27.3429 25.126 25.9914C24.9288 24.6399 24.2518 23.4044 23.2188 22.5109C22.1859 21.6174 20.8658 21.1255 19.5 21.125ZM19.5 29.25C19.0179 29.25 18.5466 29.107 18.1458 28.8392C17.745 28.5714 17.4325 28.1907 17.248 27.7453C17.0636 27.2999 17.0153 26.8098 17.1093 26.337C17.2034 25.8641 17.4355 25.4298 17.7764 25.0889C18.1173 24.748 18.5516 24.5159 19.0245 24.4218C19.4973 24.3278 19.9874 24.3761 20.4328 24.5605C20.8782 24.745 21.2589 25.0575 21.5267 25.4583C21.7945 25.8591 21.9375 26.3304 21.9375 26.8125C21.9375 27.459 21.6807 28.079 21.2236 28.5361C20.7665 28.9932 20.1465 29.25 19.5 29.25ZM35.75 14.625H29.25V9.75C29.25 7.16414 28.2228 4.68419 26.3943 2.85571C24.5658 1.02723 22.0859 0 19.5 0C16.9141 0 14.4342 1.02723 12.6057 2.85571C10.7772 4.68419 9.75 7.16414 9.75 9.75V14.625H3.25C2.38805 14.625 1.5614 14.9674 0.951903 15.5769C0.34241 16.1864 0 17.013 0 17.875V40.625C0 41.487 0.34241 42.3136 0.951903 42.9231C1.5614 43.5326 2.38805 43.875 3.25 43.875H35.75C36.612 43.875 37.4386 43.5326 38.0481 42.9231C38.6576 42.3136 39 41.487 39 40.625V17.875C39 17.013 38.6576 16.1864 38.0481 15.5769C37.4386 14.9674 36.612 14.625 35.75 14.625ZM13 9.75C13 8.02609 13.6848 6.37279 14.9038 5.15381C16.1228 3.93482 17.7761 3.25 19.5 3.25C21.2239 3.25 22.8772 3.93482 24.0962 5.15381C25.3152 6.37279 26 8.02609 26 9.75V14.625H13V9.75ZM35.75 40.625H3.25V17.875H35.75V40.625Z",
        image: "images/legal_card1.jpg",
      },
      {
        type: "image",
        category: "Compliance",
        title: "Regulatory & Data Governance",
        description:
          "Helping legal organisations meet regulatory obligations, manage data lifecycles, and maintain full auditability across all client and case information. ",
        image: "images/legal_card.jpg",
        icon: "M43.875 21.125H42.1809C41.791 16.5332 39.7898 12.2273 36.5312 8.96877C33.2727 5.71022 28.9668 3.70901 24.375 3.31906V1.625C24.375 1.19402 24.2038 0.780698 23.899 0.475951C23.5943 0.171205 23.181 0 22.75 0C22.319 0 21.9057 0.171205 21.601 0.475951C21.2962 0.780698 21.125 1.19402 21.125 1.625V3.31906C16.5332 3.70901 12.2273 5.71022 8.96877 8.96877C5.71022 12.2273 3.70901 16.5332 3.31906 21.125H1.625C1.19402 21.125 0.780698 21.2962 0.475951 21.601C0.171205 21.9057 0 22.319 0 22.75C0 23.181 0.171205 23.5943 0.475951 23.899C0.780698 24.2038 1.19402 24.375 1.625 24.375H3.31906C3.70901 28.9668 5.71022 33.2727 8.96877 36.5312C12.2273 39.7898 16.5332 41.791 21.125 42.1809V43.875C21.125 44.306 21.2962 44.7193 21.601 45.024C21.9057 45.3288 22.319 45.5 22.75 45.5C23.181 45.5 23.5943 45.3288 23.899 45.024C24.2038 44.7193 24.375 44.306 24.375 43.875V42.1809C28.9668 41.791 33.2727 39.7898 36.5312 36.5312C39.7898 33.2727 41.791 28.9668 42.1809 24.375H43.875C44.306 24.375 44.7193 24.2038 45.024 23.899C45.3288 23.5943 45.5 23.181 45.5 22.75C45.5 22.319 45.3288 21.9057 45.024 21.601C44.7193 21.2962 44.306 21.125 43.875 21.125ZM24.375 38.9188V37.375C24.375 36.944 24.2038 36.5307 23.899 36.226C23.5943 35.9212 23.181 35.75 22.75 35.75C22.319 35.75 21.9057 35.9212 21.601 36.226C21.2962 36.5307 21.125 36.944 21.125 37.375V38.9188C17.3974 38.5384 13.9151 36.8839 11.2656 34.2344C8.6161 31.5849 6.9616 28.1026 6.58125 24.375H8.125C8.55598 24.375 8.9693 24.2038 9.27405 23.899C9.57879 23.5943 9.75 23.181 9.75 22.75C9.75 22.319 9.57879 21.9057 9.27405 21.601C8.9693 21.2962 8.55598 21.125 8.125 21.125H6.58125C6.9616 17.3974 8.6161 13.9151 11.2656 11.2656C13.9151 8.6161 17.3974 6.9616 21.125 6.58125V8.125C21.125 8.55598 21.2962 8.9693 21.601 9.27405C21.9057 9.57879 22.319 9.75 22.75 9.75C23.181 9.75 23.5943 9.57879 23.899 9.27405C24.2038 8.9693 24.375 8.55598 24.375 8.125V6.58125C28.1026 6.9616 31.5849 8.6161 34.2344 11.2656C36.8839 13.9151 38.5384 17.3974 38.9188 21.125H37.375C36.944 21.125 36.5307 21.2962 36.226 21.601C35.9212 21.9057 35.75 22.319 35.75 22.75C35.75 23.181 35.9212 23.5943 36.226 23.899C36.5307 24.2038 36.944 24.375 37.375 24.375H38.9188C38.5384 28.1026 36.8839 31.5849 34.2344 34.2344C31.5849 36.8839 28.1026 38.5384 24.375 38.9188ZM22.75 14.625C21.143 14.625 19.5721 15.1015 18.236 15.9943C16.8998 16.8871 15.8584 18.156 15.2435 19.6407C14.6285 21.1253 14.4676 22.759 14.7811 24.3351C15.0946 25.9112 15.8685 27.3589 17.0048 28.4952C18.1411 29.6315 19.5888 30.4054 21.1649 30.7189C22.741 31.0324 24.3747 30.8715 25.8593 30.2565C27.344 29.6416 28.6129 28.6002 29.5057 27.264C30.3985 25.9279 30.875 24.357 30.875 22.75C30.875 20.5951 30.019 18.5285 28.4952 17.0048C26.9715 15.481 24.9049 14.625 22.75 14.625ZM22.75 27.625C21.7858 27.625 20.8433 27.3391 20.0416 26.8034C19.2399 26.2677 18.6151 25.5064 18.2461 24.6156C17.8771 23.7248 17.7806 22.7446 17.9687 21.7989C18.1568 20.8533 18.6211 19.9846 19.3029 19.3029C19.9846 18.6211 20.8533 18.1568 21.7989 17.9687C22.7446 17.7806 23.7248 17.8771 24.6156 18.2461C25.5064 18.6151 26.2677 19.2399 26.8034 20.0416C27.3391 20.8433 27.625 21.7858 27.625 22.75C27.625 24.0429 27.1114 25.2829 26.1971 26.1971C25.2829 27.1114 24.0429 27.625 22.75 27.625Z",
      },
      {
        type: "image",
        category: "System",
        title: "Case & matter management systems",
        image: "",
        description:
          "IT frameworks aligned with legal regulations to ensure governance, audit readiness, and risk mitigation.",
        image: "images/legal_card2.jpg",
        icon: "M37.375 0H4.875C3.58207 0 2.34209 0.513615 1.42785 1.42785C0.513615 2.34209 0 3.58207 0 4.875V27.625C0 28.9179 0.513615 30.1579 1.42785 31.0721C2.34209 31.9864 3.58207 32.5 4.875 32.5H37.375C38.6679 32.5 39.9079 31.9864 40.8221 31.0721C41.7364 30.1579 42.25 28.9179 42.25 27.625V4.875C42.25 3.58207 41.7364 2.34209 40.8221 1.42785C39.9079 0.513615 38.6679 0 37.375 0ZM39 27.625C39 28.056 38.8288 28.4693 38.524 28.774C38.2193 29.0788 37.806 29.25 37.375 29.25H4.875C4.44402 29.25 4.0307 29.0788 3.72595 28.774C3.42121 28.4693 3.25 28.056 3.25 27.625V4.875C3.25 4.44402 3.42121 4.0307 3.72595 3.72595C4.0307 3.42121 4.44402 3.25 4.875 3.25H37.375C37.806 3.25 38.2193 3.42121 38.524 3.72595C38.8288 4.0307 39 4.44402 39 4.875V27.625ZM29.25 37.375C29.25 37.806 29.0788 38.2193 28.774 38.524C28.4693 38.8288 28.056 39 27.625 39H14.625C14.194 39 13.7807 38.8288 13.476 38.524C13.1712 38.2193 13 37.806 13 37.375C13 36.944 13.1712 36.5307 13.476 36.226C13.7807 35.9212 14.194 35.75 14.625 35.75H27.625C28.056 35.75 28.4693 35.9212 28.774 36.226C29.0788 36.5307 29.25 36.944 29.25 37.375Z",
      },
      {
        type: "image",
        category: "Digital Transformation",
        title: " Legal Process Automation & Efficiency",
        description:
          "Automating contract review, document drafting, and billing workflows so legal teams can focus on higher-value client work",
        image: "images/legal_card4.jpg",
        icon: "M35.75 0H3.25C2.38805 0 1.5614 0.34241 0.951903 0.951903C0.34241 1.5614 0 2.38805 0 3.25V35.75C0 36.612 0.34241 37.4386 0.951903 38.0481C1.5614 38.6576 2.38805 39 3.25 39H35.75C36.612 39 37.4386 38.6576 38.0481 38.0481C38.6576 37.4386 39 36.612 39 35.75V3.25C39 2.38805 38.6576 1.5614 38.0481 0.951903C37.4386 0.34241 36.612 0 35.75 0ZM11.375 26C11.6964 26 12.0106 26.0953 12.2778 26.2739C12.545 26.4524 12.7533 26.7062 12.8763 27.0031C12.9993 27.3001 13.0315 27.6268 12.9688 27.942C12.9061 28.2572 12.7513 28.5468 12.524 28.774C12.2968 29.0013 12.0072 29.1561 11.692 29.2188C11.3768 29.2815 11.0501 29.2493 10.7531 29.1263C10.4562 29.0033 10.2024 28.795 10.0239 28.5278C9.8453 28.2606 9.75 27.9464 9.75 27.625C9.75 27.194 9.92121 26.7807 10.226 26.476C10.5307 26.1712 10.944 26 11.375 26ZM3.25 3.25H9.75V23.0303C8.66578 23.4136 7.75197 24.1679 7.1701 25.1598C6.58822 26.1518 6.37574 27.3174 6.57021 28.4509C6.76467 29.5843 7.35357 30.6125 8.2328 31.3537C9.11204 32.095 10.225 32.5015 11.375 32.5015C12.525 32.5015 13.638 32.095 14.5172 31.3537C15.3964 30.6125 15.9853 29.5843 16.1798 28.4509C16.3743 27.3174 16.1618 26.1518 15.5799 25.1598C14.998 24.1679 14.0842 23.4136 13 23.0303V16.9223L22.75 26.6723V35.75H3.25V3.25ZM35.75 35.75H26V26C26.0002 25.7865 25.9583 25.5751 25.8767 25.3779C25.7952 25.1806 25.6755 25.0013 25.5247 24.8503L13 12.3277V3.25H19.5V8.125C19.4998 8.33846 19.5417 8.54986 19.6233 8.74713C19.7048 8.9444 19.8245 9.12366 19.9753 9.27469L23.2253 12.5247C22.9106 13.18 22.7481 13.898 22.75 14.625C22.75 15.5892 23.0359 16.5317 23.5716 17.3334C24.1073 18.1351 24.8686 18.7599 25.7594 19.1289C26.6502 19.4979 27.6304 19.5944 28.5761 19.4063C29.5217 19.2182 30.3904 18.7539 31.0721 18.0721C31.7539 17.3904 32.2182 16.5217 32.4063 15.5761C32.5944 14.6304 32.4979 13.6502 32.1289 12.7594C31.7599 11.8686 31.1351 11.1073 30.3334 10.5716C29.5317 10.0359 28.5892 9.75 27.625 9.75C26.8979 9.74873 26.1798 9.91191 25.5247 10.2273L22.75 7.45266V3.25H35.75V35.75ZM27.625 13C27.9464 13 28.2606 13.0953 28.5278 13.2739C28.795 13.4524 29.0033 13.7062 29.1263 14.0031C29.2493 14.3001 29.2815 14.6268 29.2188 14.942C29.1561 15.2572 29.0013 15.5468 28.774 15.774C28.5468 16.0013 28.2572 16.1561 27.942 16.2188C27.6268 16.2815 27.3001 16.2493 27.0031 16.1263C26.7062 16.0033 26.4524 15.795 26.2739 15.5278C26.0953 15.2606 26 14.9464 26 14.625C26 14.194 26.1712 13.7807 26.476 13.476C26.7807 13.1712 27.194 13 27.625 13Z",
      },
      {
        type: "image",
        category: "Collaboration",
        title: "Secure Digital Workplace for Legal Teams",
        description:
          "Secure tools enabling legal professionals to collaborate, communicate, and access case files from anywhere without compromising confidentiality. ",
        image: "images/legal_card3.jpg",
        icon: "M36.1339 6.22781C34.19 4.26436 31.8779 2.70362 29.33 1.63497C26.7821 0.566306 24.0484 0.0107135 21.2855 0H21.125C15.5223 0 10.1491 2.22566 6.18737 6.18737C2.22566 10.1491 0 15.5223 0 21.125V32.5C0 33.7929 0.513615 35.0329 1.42785 35.9471C2.34209 36.8614 3.58207 37.375 4.875 37.375H8.125C9.41793 37.375 10.6579 36.8614 11.5721 35.9471C12.4864 35.0329 13 33.7929 13 32.5V24.375C13 23.0821 12.4864 21.8421 11.5721 20.9279C10.6579 20.0136 9.41793 19.5 8.125 19.5H3.32313C3.63651 16.1117 4.9092 12.883 6.99202 10.1922C9.07484 7.50142 11.8815 5.46006 15.083 4.3074C18.2846 3.15473 21.7484 2.93852 25.0684 3.68409C28.3884 4.42967 31.4272 6.10615 33.8284 8.51703C36.7634 11.467 38.5686 15.3543 38.9289 19.5H34.125C32.8321 19.5 31.5921 20.0136 30.6779 20.9279C29.7636 21.8421 29.25 23.0821 29.25 24.375V32.5C29.25 33.7929 29.7636 35.0329 30.6779 35.9471C31.5921 36.8614 32.8321 37.375 34.125 37.375H39C39 38.6679 38.4864 39.9079 37.5721 40.8221C36.6579 41.7364 35.4179 42.25 34.125 42.25H22.75C22.319 42.25 21.9057 42.4212 21.601 42.726C21.2962 43.0307 21.125 43.444 21.125 43.875C21.125 44.306 21.2962 44.7193 21.601 45.024C21.9057 45.3288 22.319 45.5 22.75 45.5H34.125C36.2799 45.5 38.3465 44.644 39.8702 43.1202C41.394 41.5965 42.25 39.5299 42.25 37.375V21.125C42.2606 18.3616 41.7258 15.6233 40.6763 13.067C39.6268 10.5107 38.0832 8.18656 36.1339 6.22781ZM8.125 22.75C8.55598 22.75 8.9693 22.9212 9.27405 23.226C9.57879 23.5307 9.75 23.944 9.75 24.375V32.5C9.75 32.931 9.57879 33.3443 9.27405 33.649C8.9693 33.9538 8.55598 34.125 8.125 34.125H4.875C4.44402 34.125 4.0307 33.9538 3.72595 33.649C3.42121 33.3443 3.25 32.931 3.25 32.5V22.75H8.125ZM34.125 34.125C33.694 34.125 33.2807 33.9538 32.976 33.649C32.6712 33.3443 32.5 32.931 32.5 32.5V24.375C32.5 23.944 32.6712 23.5307 32.976 23.226C33.2807 22.9212 33.694 22.75 34.125 22.75H39V34.125H34.125Z"
      },

    ];

    // Case Studies Data
    const caseStudiesData = [
      {
        subTag: "Strengthening Enterprise Cybersecurity",
        title:
          "Implemented AI-driven security to reduce threats and improve real-time response.",
        topLabel: "Strengthening Enterprise Cybersecurity ",
        image: "images/legal_usecase2.jpg",
        imageAlt: "Cybersecurity and AI",
        description:
          "Developed a unified retail mobile application connecting in-store, online, and loyalty experiences—driving measurable improvements in retention, basket value, and repeat purchases.",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
      {
        subTag: "Driving Data-Driven Decisions",
        title:
          "Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.",
        topLabel: "Driving Data-Driven Decisions",
        image: "images/legal_usecase.jpg",
        imageAlt: "Cloud Infrastructure",
        description:
          "Reduced operational expenses by 40% while improving system performance through intelligent infrastructure optimization.",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
      {
        subTag: "App & Software Development for Legal ",
        title:
          "Developed a custom legal matter management application that digitised case intake, document handling, and client communications, reducing administrative time and enabling teams to manage higher caseloads with greater accuracy.",
        topLabel: "App & Software Development for Legal ",
        image: "images/legal_usecase1.jpg",
        imageAlt: "AI Automation",
        description:
          "Implemented intelligent automation solutions that reduced manual processes, improved accuracy, and significantly boosted team productivity across departments.",
        viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
        caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
      },
    ];



    // Insights Data (news articles)
    const insightsData = [
      {
        featured: {
          image: "images/legal_latest.jpg",
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
<div class="absolute inset-0 transition-all duration-700 ${hasImage ? "group-hover:scale-110" : ""} ${initialStateClasses}">
<img src="${item.image || ""}" class="absolute inset-0 w-full h-full object-cover" />
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
<div class="absolute inset-0 z-10 p-10 flex flex-col justify-between transition-all duration-500 bg-gradient-to-b from-[#01516c] via-[#126d81] to-[#0f4a5c] rounded-[2rem] ${hoverStateClasses}">
<div>
<div class="mb-10 transform transition duration-500 ${hasImage ? "scale-110" : "scale-100"}">
<svg width="51" height="52" viewBox="0 0 51 36" fill="none">
<path d="${item.icon}" fill="#13C5B8"/>
</svg>
</div>

<p class="text-[10px] text-gray-400 mb-2 font-semibold">

                      ${item.category}
</p>
<h3 class="text-2xl font-bold text-white leading-tight">
                      ${item.title}
</h3>
</div>
 
                  <div class="transform ${hasImage ? "translate-y-4 group-hover:translate-y-0" : "translate-y-0"} transition-transform duration-500 delay-100">
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
                 class="text-[15px] text-gray-500 font-semibold mt-2 sm:mt-4 md:mt-8"
                >Strengthening Enterprise Cybersecurity</p>
 
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
                    class="text-[15px] text-white font-semibold mt-2 sm:mt-4 md:mt-8"
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