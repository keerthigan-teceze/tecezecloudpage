<!doctype html>
<html lang="en">
  <head>
      <?php include 'header.php'; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manufacturing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Inter", sans-serif;
        scroll-behavior: smooth;
      }

      .bg-hero-overlay {
        background:
          linear-gradient(
            to right,
            rgba(2, 38, 70, 0.92),
            rgba(2, 38, 70, 0.45)
          ),
          url("images/manufacturinghero.jpg");
        background-size: cover;
        background-position: center;
      }

      .bg-grid {
        background-size: 80px 80px;
        background-image:
          linear-gradient(
            to right,
            rgba(255, 255, 255, 0.05) 1px,
            transparent 1px
          ),
          linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0.05) 1px,
            transparent 1px
          );
      }

      .glass-card {
        background: linear-gradient(
          135deg,
          rgba(255, 255, 255, 0.12),
          rgba(255, 255, 255, 0.06)
        );
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s ease;
      }

      .glass-card:hover {
        background: linear-gradient(
          135deg,
          rgba(255, 255, 255, 0.15),
          rgba(255, 255, 255, 0.08)
        );
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
      class="relative min-h-screen flex flex-col justify-center bg-hero-overlay bg-cover bg-center px-4 sm:px-6 md:px-8 lg:px-20 pt-12 sm:pt-20 overflow-hidden"
    >
      <div class="mb-6 sm:mb-8">
        <p
          class="text-xs font-semibold tracking-widest uppercase mb-2 opacity-75 text-gray-200 relative z-10"
        >
          Who We Serve / Manufacturing
        </p>
        <div class="w-full h-0.5 border-b to-transparent"></div>
      </div>
      <div class="max-w-6xl mt-3 relative z-10">
        <h1
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6 tracking-tight"
        >
        Advanced IT Infrastructure for Uninterrupted Manufacturing Performance
         
        </h1>
        <p
          class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light"
        >
         Engineered to ensure uninterrupted production, operational continuity, and real-time visibility across every stage of manufacturing. Built for high-performance environments where efficiency, resilience, and reliability are critical to output and growth.
        </p>

        <a
          href="https://teal-mule-553916.hostingersite.com/Contactus.php"
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

          <span
            class="text-white font-semibold z-10 transition-colors duration-300 text-sm pr-4 md:text-md md:pr-8 lg:text-lg"
          >
            Connect With Us
          </span>
        </a>
      </div>

      <svg
        class="hidden sm:block absolute left-0 top-0 z-0 w-auto md:h-full"
        width="685"
        height="900"
        viewBox="0 0 685 900"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMinYMin slice"
      >
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

      <svg
        class="hidden sm:block absolute right-0 top-0 z-0 w-auto md:h-full"
        width="604"
        height="900"
        viewBox="0 0 604 900"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMaxYMin slice"
      >
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

      <div
        class="hidden md:grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 mt-8 sm:mt-10 mb-1 relative z-10"
      >
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            320+
          </h2>
          <p
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm"
          >
            Supporting Financial Institutions Worldwide With Tailored Solutions.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            185
          </h2>
          <p
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm"
          >
            Global Delivery Hubs Enabling Seamless Operations Worldwide.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            33K+
          </h2>
          <p
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm"
          >
            Global Network Of Experts Driving Innovation And Compliance.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            100+
          </h2>
          <p
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm"
          >
            Trusted By Leading Banks Delivering Impactful Solutions.
          </p>
        </div>
      </div>
    </header>
    <section
      class="bg-white flex items-center justify-center min-h-screen p-4 sm:p-6 md:p-12 lg:p-20"
    >
      <div
        class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 xl:gap-20 items-center"
      >
        <div class="relative group mx-auto">
          <div
            class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-400/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition duration-500"
          ></div>
          <img
            src="images/manufacturing01.png"
            alt="IT Infrastructure Dashboard"
            class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl"
          />
        </div>

      <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
         <p class="text-lg sm:text-3xl leading-[1.5] font-medium">
            <span class="font-semibold text-[#011627]">
              Technology That Drives Smarter Manufacturing<br><br>
                Teceze delivers enterprise-grade IT infrastructure for manufacturing environments,
                enabling connected systems, secure data flow, and optimized production operations
                across facilities.
            </span><br><br>
            <span class="text-gray-500 font-medium">
                IT complexity is reduced, workflows are streamlined, and resilient digital ecosystems
                are established supporting consistent output, improved efficiency, and long-term scalability.
            </span>
            </p>
        </div>
      </div>
    </section>
    <section
      class="min-h-screen relative flex items-center justify-center overflow-x-hidden"
    >
      <svg
        class="absolute top-0 left-0"
        width="685"
        height="883"
        viewBox="0 0 685 883"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g opacity="0.65" filter="url(#filter0_f_1250_5814)">
          <path
            d="M362.732 549.417C344.875 599.902 274.983 611.032 214.127 597.911C153.27 584.79 101.45 547.418 45.1692 524.573C-11.1113 501.728 -71.3265 494.559 -91.2681 458.574C-111.21 422.59 -90.3522 358.938 -98.2224 300.784C-106.093 242.63 -143.839 190.499 -134.1 154.132C-124.05 116.928 -67.3515 95.1766 -16.9823 92.9698C33.3868 90.763 77.4267 108.101 124.395 81.777C170.838 54.3053 221.883 -16.2059 273.053 -33.3492C325.372 -51.0175 378.964 -15.8428 396.956 35.6032C415.26 86.2131 397.126 152.783 375.61 202.859C354.931 253.247 332.016 286.617 337.492 348.64C344.116 410.139 379.441 499.456 362.732 549.417Z"
            fill="url(#paint0_linear_1250_5814)"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_1250_5814"
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
              result="effect1_foregroundBlur_1250_5814"
            />
          </filter>
          <linearGradient
            id="paint0_linear_1250_5814"
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

      <svg
        class="absolute right-0 bottom-0"
        width="691"
        height="979"
        viewBox="0 0 691 979"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g opacity="0.65" filter="url(#filter0_f_1250_5813)">
          <path
            d="M774.316 1024.53C728.218 1075.64 639.795 1054.41 574.058 1008.85C508.322 963.302 465.271 893.425 409.762 838.589C354.252 783.753 286.339 745.578 280.431 693.054C274.524 640.531 330.677 575.279 350.031 502.398C369.384 429.517 350.316 349.062 379.815 310.708C410.096 271.515 488.105 273.64 548.96 295.838C609.816 318.036 653.518 360.308 722.237 352.213C790.899 342.499 886.257 283.982 955.432 288.851C1026.23 293.664 1072.47 361.806 1068.43 431.715C1065.18 500.786 1010.82 570.841 960.582 619.66C911.184 669.26 867.53 697.566 843.426 773.859C820.944 850.095 818.792 973.481 774.316 1024.53Z"
            fill="url(#paint0_linear_1250_5813)"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_1250_5813"
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
              result="effect1_foregroundBlur_1250_5813"
            />
          </filter>
          <linearGradient
            id="paint0_linear_1250_5813"
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

      <div
        class="relative w-full px-4 lg:px-8 py-12 sm:py-16 md:py-20 mt-8 sm:mt-12 bg-grid min-h-[600px] sm:min-h-[700px] md:min-h-[800px] flex flex-col justify-center overflow-hidden"
      >
        <div
          class="absolute top-4 left-0 md:left-auto sm:top-10 w-full overflow-hidden select-none pointer-events-none z-0 md:mx-auto"
        >
          <div
            class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide"
          >
            our capabilities
          </div>

          <div
            class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide"
          >
            our capabilities
          </div>
          <div
            class="text-[12vw] font-black text-gray-400 whitespace-nowrap leading-[0.85] opacity-10 tracking-wide"
          >
            our capabilities
          </div>
        </div>

        <div class="relative z-10 mt-20 sm:mt-32 md:mt-48">
          <div
            class="capabilities-carousel overflow-hidden"
            id="capabilitiesCarousel"
          >
            <!-- Slides will be injected by JavaScript -->
          </div>

          <!-- Capabilities Navigation -->
          <div
            class="flex items-center px-5 justify-between flex-row w-full gap-6 sm:gap-0 mt-8"
          >
            <div class="flex items-end space-x-1 sm:space-x-2">
              <span
                class="carousel-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none"
                >01</span
              >
              <span class="text-base sm:text-lg text-gray-500 pb-1 font-light"
                >/ 05</span
              >
            </div>
            <div class="flex space-x-3 sm:space-x-4">
              <button
                class="carousel-prev w-10 sm:w-12 h-10 sm:h-12 border border-gray-600 rounded-full flex items-center justify-center text-white hover:border-cyan-400 transition group"
              >
                <svg
                  class="w-4 sm:w-5 h-4 sm:h-5 group-hover:-translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  ></path>
                </svg>
              </button>
              <button
                class="carousel-next w-10 sm:w-12 h-10 sm:h-12 border border-gray-600 rounded-full flex items-center justify-center text-white hover:border-cyan-400 transition group"
              >
                <svg
                  class="w-4 sm:w-5 h-4 sm:h-5 group-hover:translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
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
        <div class="">
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
              <span class="font-semibold text-[#011627]">
              Strengthen manufacturing operations with resilient,
            </span>
              <span class="text-gray-500 font-medium">
                high-performance IT built for continuous production. 
            </span>
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
              href="https://teal-mule-553916.hostingersite.com/alliances.php"
              class="inline-flex items-center group border-2 border-black/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden"
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

              <span
                class="text-black font-semibold text-sm pr-2 md:text-md lg:text-lg z-10 transition-colors duration-300"
              >
                Explore Partnerships
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="relative pt-20 sm:pt-30 md:pt-40 overflow-hidden">
        <div
          class="absolute top-10 md:top-0 left-0 md:left-4 select-none pointer-events-none z-0 w-full overflow-hidden sm:px-6"
        >
          <div
            class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]"
          >
            case studies
          </div>
          <div
            class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-60 -mt-2 sm:-mt-6"
          >
            case studies
          </div>
          <div
            class="text-[15vw] font-black text-gray-200 whitespace-nowrap leading-[1.0] opacity-40 -mt-2 sm:-mt-6"
          >
            case studies
          </div>
        </div>

               <div class="relative top-8 sm:top-16 md:top-26 z-10 cases-carousel" id="casesCarousel">
          <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6 sm:gap-8 md:gap-10" id="casesDualContainer">
            
            <!-- LEFT: Text -->
            <div id="case-left" class="pr-0 relative top-4 sm:top-16 md:top-32 left-0 md:left-10 lg:pr-20 py-6 sm:py-10 px-4 sm:px-0 transition-opacity duration-500">
              <p id="left-title" class="text-xs sm:text-xs font-medium text-gray-400 uppercase tracking-widest mb-3 sm:mb-4"></p>
              <h3 id="left-description" class="text-xl sm:text-2xl md:text-3xl font-medium leading-snug mb-6 sm:mb-8 text-[#011627]"></h3>
              <a href="#" class="inline-flex items-center group border-2 border-black/40 sm:mb-20 lg:mb-6 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 relative overflow-hidden">
                <span class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-2 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                  </svg>
                </span>
                <span class="text-black font-semibold text-sm pr-3 md:text-md lg:text-lg z-10 transition-colors duration-300">
                  View All Cases
                </span>
              </a>
            </div>

            <!-- RIGHT: Image + Overlay -->
            <div id="case-right" class="relative group rounded-sm overflow-hidden h-[300px] sm:h-[500px] md:h-[600px] shadow-2xl transition-opacity duration-500">
              <img id="right-image" src="" alt="" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div class="absolute inset-0 bg-gradient-to-t from-[#011627] via-black/40 to-transparent p-6 sm:p-8 md:p-10 flex flex-col justify-end">
                 <p id="right-title" class="text-xs sm:text-xs font-medium text-gray-400 uppercase tracking-widest mb-3 sm:mb-4"></p>
                <p id="right-description" class="text-base sm:text-xl md:text-2xl font-medium text-white mb-4 sm:mb-6 leading-tight"></p>
                <a href="#" class="inline-flex items-center group border-2 border-white/40 px-2 py-2 rounded-full transition-all duration-500 hover:bg-white/10 hover:border-cyan-400/50 w-fit relative overflow-hidden">
                  <span class="bg-gradient-to-br from-cyan-400 to-blue-700 rounded-full p-1 md:p-2 mr-4 flex-shrink-0 z-10 transition-transform duration-300 group-hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                  </span>
                  <span class="text-white font-semibold text-sm pr-3 md:text-md lg:text-lg z-10 transition-colors duration-300">
                    View Case Study
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-row justify-end w-full px-4 sm:px-6">
          <div
            class="w-full lg:w-1/2 sm:mt-20 py-12 flex items-center justify-between gap-4"
          >
            <div class="flex items-end gap-1">
              <span
                class="cases-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none"
                >01</span
              >
              <span class="text-base sm:text-lg text-gray-300 font-light pb-1"
                >/03</span
              >
            </div>
            <div class="flex gap-3 sm:gap-4">
              <button
                class="cases-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 sm:h-5 w-4 sm:w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  />
                </svg>
              </button>
              <button
                class="cases-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 sm:h-5 w-4 sm:w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
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
            href="https://teal-mule-553916.hostingersite.com/testimonial-list-page.php"
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
              class="text-white font-semibold text-sm pr-4 md:text-md lg:text-lg z-10 transition-colors duration-300"
            >
              Read Client Stories
            </span>
          </a>
        </div>

        <div class="relative">
          <div class="rounded-[2.5rem] overflow-hidden aspect-[4/5] shadow-2xl">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1000"
              alt="Client Portrait"
              class="testimonial-image w-full h-full object-cover grayscale-[0.2]"
            />
          </div>

          <div class="flex items-center justify-between mt-10">
            <div class="testimonial-counter">
              <span
                class="text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none testimonial-current"
                >01</span
              >
              <span class="text-lg text-gray-400 font-light mb-1">/03</span>
            </div>

            <div class="flex gap-4">
              <button
                class="testimonial-prev w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Previous testimonial"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  />
                </svg>
              </button>
              <button
                class="testimonial-next w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Next testimonial"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
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
        <div
          class="absolute top-6 sm:top-8 md:top-12 left-0 md:left-4 select-none pointer-events-none w-full overflow-hidden"
        >
          <div
            class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]"
          >
            latest insights
          </div>
          <div
            class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]"
          >
            latest insights
          </div>
          <div
            class="text-[13.5vw] md:text-[14vw] font-black text-gray-200 whitespace-nowrap leading-[1.0]"
          >
            latest insights
          </div>
        </div>

        <div class="max-w-7xl mx-auto mt-20 sm:mt-32 md:mt-52 relative">
          <!-- Featured Article will be injected by JavaScript -->
          <div id="featuredArticle"></div>

          <!-- News Carousel will be injected by JavaScript -->
          <div class="insights-carousel relative" id="insightsCarousel"></div>

          <div
            class="flex items-center justify-between mt-8 sm:mt-12 flex-row gap-6 sm:gap-0"
          >
            <div class="flex items-end gap-1">
              <span
                class="insights-counter text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text leading-none insights-current"
                >01</span
              >
              <span class="text-base sm:text-lg text-gray-400 font-light pb-1"
                >/ 03</span
              >
            </div>
            <div class="flex gap-3 sm:gap-4">
              <button
                class="insights-prev w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Previous insight"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 sm:h-6 w-4 sm:w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  />
                </svg>
              </button>
              <button
                class="insights-next w-10 sm:w-12 h-10 sm:h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-cyan-500 hover:text-cyan-500 transition-colors"
                aria-label="Next insight"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 sm:h-6 w-4 sm:w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
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
                 How does Teceze reduce unplanned downtime?
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
                 By using IoT sensors and AI-driven analytics to continuously monitor equipment, detect early warning signs, and enable proactive maintenance, helping avoid costly breakdowns. 
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
                  Can Teceze integrate with our existing OT and shop floor systems?
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
                 Yes. We seamlessly connect ERP, MES, SCADA, and PLC systems, creating a unified, real-time view without disrupting your current operations. 
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
                  How does Teceze secure manufacturing environments?
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
                  We apply industrial-grade security with network segmentation, continuous monitoring, and fast incident response, protecting both production systems and critical data. 
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
                  What does Smart Factory & IoT enablement include?
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
                  It includes connected sensors, edge computing, live dashboards, and automated alerts, giving you real-time visibility and better control across the shop floor. 
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
                  How fast can solutions be implemented without disruption?
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
                  We follow a phased approach, starting with a pilot, then scaling gradually so your production continues smoothly without interruptions. 
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
      const testimonialsData = [
        {
          quote:
            "Teceze helped us strengthen our IT operations with proactive support, better visibility, and a team that understood both speed and accountability.",
          name: "David Miller",
          role: "Chief Technology Officer",
          company: "Nexora Global Solutions",
          image: "images/manufacturing05.jpg",
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
          category: "Modern Collaboration",
          title: "Industrial Systems & Integration",
          description:
            "Seamless integration of production systems, machinery, and enterprise platforms enables real-time monitoring and data-driven decision-making.",
          icon: "M23.7709 34.5248C23.683 34.8764 23.4801 35.1885 23.1945 35.4115C22.9089 35.6345 22.557 35.7557 22.1946 35.7558C22.0577 35.7564 21.9212 35.7401 21.7884 35.707L15.2884 34.082C15.1074 34.0366 14.9356 33.9603 14.7805 33.8566L9.90555 30.6066C9.54703 30.3674 9.29821 29.9955 9.21383 29.5729C9.12946 29.1503 9.21643 28.7114 9.45562 28.3529C9.69482 27.9944 10.0666 27.7455 10.4893 27.6612C10.9119 27.5768 11.3508 27.6638 11.7093 27.903L16.3487 30.9966L22.5765 32.5545C22.7846 32.605 22.9806 32.696 23.1534 32.8225C23.3262 32.949 23.4722 33.1083 23.5832 33.2914C23.6942 33.4745 23.7679 33.6777 23.8001 33.8894C23.8323 34.1011 23.8224 34.317 23.7709 34.5248ZM50.7235 14.9314C50.5902 15.3364 50.3779 15.711 50.099 16.0335C49.8201 16.3559 49.4801 16.62 49.0985 16.8103L44.2885 19.2153L33.1004 30.4055C32.9018 30.6038 32.6553 30.7474 32.3847 30.8221C32.1142 30.8969 31.8289 30.9003 31.5566 30.832L18.5566 27.582C18.3589 27.5324 18.1723 27.4463 18.0062 27.3281L6.72867 19.2762L1.7968 16.8103C1.02601 16.425 0.439801 15.7493 0.16707 14.9319C-0.105662 14.1145 -0.0425888 13.2222 0.342421 12.4512L5.39008 2.35797C5.77539 1.58718 6.45105 1.00097 7.26848 0.72824C8.08591 0.455508 8.9782 0.518581 9.74914 0.90359L14.2301 3.13797L24.9957 0.0626531C25.2878 -0.0208844 25.5974 -0.0208844 25.8895 0.0626531L36.6551 3.13797L41.136 0.90359C41.907 0.518581 42.7992 0.455508 43.6167 0.72824C44.4341 1.00097 45.1098 1.58718 45.4951 2.35797L50.5427 12.4512C50.7353 12.8322 50.8504 13.2475 50.8814 13.6732C50.9124 14.0989 50.8588 14.5266 50.7235 14.9314ZM41.3432 17.5598L35.8162 6.50578H29.3527L20.5696 15.037C23.1412 16.6803 27.1732 17.1333 30.7909 13.4872C31.0734 13.2024 31.4513 13.0322 31.8518 13.0093C32.2523 12.9864 32.6471 13.1125 32.9602 13.3633L39.9498 18.9634L41.3432 17.5598ZM3.24914 13.9036L6.84242 15.7012L11.8901 5.60797L8.2968 3.81031L3.24914 13.9036ZM37.6321 21.2648L32.0035 16.7575C28.0345 20.0075 22.9949 20.4361 18.8187 17.7731C18.4079 17.5118 18.061 17.1615 17.8038 16.7482C17.5465 16.3348 17.3854 15.8689 17.3324 15.3849C17.2793 14.901 17.3357 14.4113 17.4973 13.952C17.659 13.4927 17.9217 13.0756 18.2662 12.7316C18.2711 12.7256 18.2765 12.7202 18.2824 12.7153L27.3946 3.87734L25.4446 3.32078L15.203 6.24781L9.64351 17.3648L19.6373 24.5047L31.447 27.4561L37.6321 21.2648ZM47.634 13.9036L42.5924 3.81031L38.9991 5.60797L44.0468 15.7012L47.634 13.9036Z",
          image: "images/collaboration-manufact-bg-img.png",
        },
        {
          type: "image",
          category: "Secure access",
          title: "Smart Factory & IoT Enablement",
          description:
            "Advanced security operations are designed to detect, prevent, and respond to threats while protecting sensitive financial data",
          image: "images/access-manufact-bg-img.png",
          icon: "M40.875 21.125H42.1809C41.791 16.5332 39.7898 12.2273 36.5312 8.96877C33.2727 5.71022 28.9668 3.70901 24.375 3.31906V1.625C24.375 1.19402 24.2038 0.780698 23.899 0.475951C23.5943 0.171205 23.181 0 22.75 0C22.319 0 21.9057 0.171205 21.601 0.475951C21.2962 0.780698 21.125 1.19402 21.125 1.625V3.31906C16.5332 3.70901 12.2273 5.71022 8.96877 8.96877C5.71022 12.2273 3.70901 16.5332 3.31906 21.125H1.625C1.19402 21.125 0.780698 21.2962 0.475951 21.601C0.171205 21.9057 0 22.319 0 22.75C0 23.181 0.171205 23.5943 0.475951 23.899C0.780698 24.2038 1.19402 24.375 1.625 24.375H3.31906C3.70901 28.9668 5.71022 33.2727 8.96877 36.5312C12.2273 39.7898 16.5332 41.791 21.125 42.1809V43.875C21.125 44.306 21.2962 44.7193 21.601 45.024C21.9057 45.3288 22.319 45.5 22.75 45.5C23.181 45.5 23.5943 45.3288 23.899 45.024C24.2038 44.7193 24.375 44.306 24.375 43.875V42.1809C28.9668 41.791 33.2727 39.7898 36.5312 36.5312C39.7898 33.2727 41.791 28.9668 42.1809 24.375H43.875C44.306 24.375 44.7193 24.2038 45.024 23.899C45.3288 23.5943 45.5 23.181 45.5 22.75C45.5 22.319 45.3288 21.9057 45.024 21.601C44.7193 21.2962 44.306 21.125 43.875 21.125ZM24.375 38.9188V37.375C24.375 36.944 24.2038 36.5307 23.899 36.226C23.5943 35.9212 23.181 35.75 22.75 35.75C22.319 35.75 21.9057 35.9212 21.601 36.226C21.2962 36.5307 21.125 36.944 21.125 37.375V38.9188C17.3974 38.5384 13.9151 36.8839 11.2656 34.2344C8.6161 31.5849 6.9616 28.1026 6.58125 24.375H8.125C8.55598 24.375 8.9693 24.2038 9.27405 23.899C9.57879 23.5943 9.75 23.181 9.75 22.75C9.75 22.319 9.57879 21.9057 9.27405 21.601C8.9693 21.2962 8.55598 21.125 8.125 21.125H6.58125C6.9616 17.3974 8.6161 13.9151 11.2656 11.2656C13.9151 8.6161 17.3974 6.9616 21.125 6.58125V8.125C21.125 8.55598 21.2962 8.9693 21.601 9.27405C21.9057 9.57879 22.319 9.75 22.75 9.75C23.181 9.75 23.5943 9.57879 23.899 9.27405C24.2038 8.9693 24.375 8.55598 24.375 8.125V6.58125C28.1026 6.9616 31.5849 8.6161 34.2344 11.2656C36.8839 13.9151 38.5384 17.3974 38.9188 21.125H37.375C36.944 21.125 36.5307 21.2962 36.226 21.601C35.9212 21.9057 35.75 22.319 35.75 22.75C35.75 23.181 35.9212 23.5943 36.226 23.899C36.5307 24.2038 36.944 24.375 37.375 24.375H38.9188C38.5384 28.1026 36.8839 31.5849 34.2344 34.2344C31.5849 36.8839 28.1026 38.5384 24.375 38.9188ZM22.75 14.625C21.143 14.625 19.5721 15.1015 18.236 15.9943C16.8998 16.8871 15.8584 18.156 15.2435 19.6407C14.6285 21.1253 14.4676 22.759 14.7811 24.3351C15.0946 25.9112 15.8685 27.3589 17.0048 28.4952C18.1411 29.6315 19.5888 30.4054 21.1649 30.7189C22.741 31.0324 24.3747 30.8715 25.8593 30.2565C27.344 29.6416 28.6129 28.6002 29.5057 27.264C30.3985 25.9279 30.875 24.357 30.875 22.75C30.875 20.5951 30.019 18.5285 28.4952 17.0048C26.9715 15.481 24.9049 14.625 22.75 14.625ZM22.75 27.625C21.7858 27.625 20.8433 27.3391 20.0416 26.8034C19.2399 26.2677 18.6151 25.5064 18.2461 24.6156C17.8771 23.7248 17.7806 22.7446 17.9687 21.7989C18.1568 20.8533 18.6211 19.9846 19.3029 19.3029C19.9846 18.6211 20.8533 18.1568 21.7989 17.9687C22.7446 17.7806 23.7248 17.8771 24.6156 18.2461C25.5064 18.6151 26.2677 19.2399 26.8034 20.0416C27.3391 20.8433 27.625 21.7858 27.625 22.75C27.625 24.0429 27.1114 25.2829 26.1971 26.1971C25.2829 27.1114 24.0429 27.625 22.75 27.625Z",
        },
        {
          type: "image",
          category: "employee experience",
          title: "Supply Chain & Operations Visibility",
          description:
            "Structured data environments enabling accurate reporting, regulatory compliance, and real-time financial insights.",
          image: "images/manufacturing03.jpg",
          icon: "M40.2222 12.024C42.4772 16.7402 42.9052 22.1245 41.4238 27.1377C39.9424 32.1509 36.6565 36.4377 32.2003 39.1707C27.7441 41.9036 22.4335 42.8891 17.2934 41.9368C12.1534 40.9846 7.54823 38.1621 4.36682 34.0141C1.18542 29.8661 -0.346734 24.6867 0.0660685 19.4755C0.478871 14.2643 2.80737 9.39076 6.60215 5.79541C10.3969 2.20006 15.389 0.137801 20.6149 0.00666077C25.8408 -0.12448 30.93 1.68479 34.9003 5.08528L39.5052 0.478406C39.8101 0.17349 40.2236 0.00219021 40.6549 0.00219021C41.0861 0.00219021 41.4996 0.17349 41.8045 0.478406C42.1095 0.783322 42.2808 1.19688 42.2808 1.62809C42.2808 2.05931 42.1095 2.47287 41.8045 2.77778L22.3045 22.2778C21.9996 22.5827 21.5861 22.754 21.1549 22.754C20.7236 22.754 20.3101 22.5827 20.0052 22.2778C19.7003 21.9729 19.529 21.5593 19.529 21.1281C19.529 20.6969 19.7003 20.2833 20.0052 19.9784L25.6358 14.3478C24.1098 13.3386 22.2879 12.8739 20.465 13.029C18.6421 13.1841 16.9248 13.9499 15.5913 15.2024C14.2577 16.4549 13.386 18.1208 13.117 19.9304C12.8481 21.7401 13.1978 23.5875 14.1095 25.1737C15.0212 26.7598 16.4415 27.9919 18.1406 28.6704C19.8396 29.3488 21.7179 29.434 23.4714 28.9122C25.2249 28.3903 26.751 27.2919 27.8026 25.7948C28.8541 24.2977 29.3696 22.4895 29.2656 20.6629C29.2536 20.4495 29.2838 20.2359 29.3544 20.0341C29.4249 19.8324 29.5346 19.6465 29.677 19.4871C29.8194 19.3277 29.9918 19.198 30.1843 19.1052C30.3769 19.0125 30.5858 18.9585 30.7992 18.9465C31.2302 18.9223 31.6532 19.0702 31.9751 19.3578C32.1344 19.5003 32.2642 19.6727 32.357 19.8652C32.4497 20.0578 32.5036 20.2667 32.5156 20.4801C32.6638 23.0655 31.9254 25.624 30.4224 27.7328C28.9195 29.8416 26.742 31.3744 24.2498 32.078C21.7576 32.7816 19.1 32.6137 16.7162 31.6022C14.3323 30.5907 12.3649 28.7961 11.1392 26.515C9.91348 24.2339 9.50278 21.6028 9.97498 19.0567C10.4472 16.5105 11.774 14.2017 13.7362 12.5118C15.6984 10.8219 18.1784 9.85209 20.7665 9.76266C23.3545 9.67324 25.8956 10.4695 27.9697 12.02L32.5908 7.39888C29.2043 4.58721 24.8984 3.12586 20.5001 3.2955C16.1018 3.46513 11.9212 5.2538 8.76136 8.31795C5.60149 11.3821 3.68511 15.5057 3.38029 19.8967C3.07547 24.2877 4.40371 28.6365 7.1099 32.1078C9.81609 35.5792 13.7094 37.9283 18.0421 38.7041C22.3748 39.4798 26.8413 38.6274 30.5838 36.3106C34.3263 33.9939 37.0809 30.3761 38.3185 26.1521C39.5561 21.9281 39.1895 17.3957 37.2891 13.4256C37.1032 13.0366 37.0795 12.5898 37.2231 12.1833C37.3667 11.7769 37.6659 11.4441 38.0549 11.2583C38.4438 11.0724 38.8907 11.0487 39.2971 11.1923C39.7036 11.3359 40.0363 11.6351 40.2222 12.024Z",
        },
        {
          type: "image",
          category: "Digital Workforce",
          title: "AI & Automation in Manufacturing",
          description:
            "Intelligent automation and AI-driven process optimization reduce manual workloads, minimize errors, and accelerate production throughput across manufacturing operations.",
          icon: "M39 6.5H30.875V4.875C30.875 3.58207 30.3614 2.34209 29.4471 1.42785C28.5329 0.51361 27.2929 0 26 0H16.25C14.9571 0 13.7171 0.51361 12.8029 1.42785C11.8886 2.34209 11.375 3.58207 11.375 4.875V6.5H3.25C2.38805 6.5 1.5614 6.8424 0.9519 7.4519C0.34241 8.0614 0 8.888 0 9.75V35.75C0 36.612 0.34241 37.4386 0.9519 38.0481C1.5614 38.6576 2.38805 39 3.25 39H39C39.862 39 40.6886 38.6576 41.2981 38.0481C41.9076 37.4386 42.25 36.612 42.25 35.75V9.75C42.25 8.888 41.9076 8.0614 41.2981 7.4519C40.6886 6.8424 39.862 6.5 39 6.5ZM14.625 4.875C14.625 4.44402 14.7962 4.0307 15.101 3.72595C15.4057 3.42121 15.819 3.25 16.25 3.25H26C26.431 3.25 26.8443 3.42121 27.149 3.72595C27.4538 4.0307 27.625 4.44402 27.625 4.875V6.5H14.625V4.875ZM39 9.75V18.202C33.5152 21.1875 27.3697 22.7511 21.125 22.75C14.8805 22.7511 8.7352 21.1883 3.25 18.2041V9.75H39ZM39 35.75H3.25V21.8644C8.8155 24.5867 14.9294 26.0012 21.125 26C27.3207 26.0001 33.4345 24.5849 39 21.8623V35.75ZM16.25 17.875C16.25 17.444 16.4212 17.0307 16.726 16.726C17.0307 16.4212 17.444 16.25 17.875 16.25H24.375C24.806 16.25 25.2193 16.4212 25.524 16.726C25.8288 17.0307 26 17.444 26 17.875C26 18.306 25.8288 18.7193 25.524 19.024C25.2193 19.3288 24.806 19.5 24.375 19.5H17.875C17.444 19.5 17.0307 19.3288 16.726 19.024C16.4212 18.7193 16.25 18.306 16.25 17.875Z",
          
           image: "images/workforce-manufact-bg-img.png",
        },
        {
          type: "image",
          category: "INFRASTRUCTURE",
          title: "Cybersecurity & OT Network Protection",
          description:
            "Purpose-built security frameworks protect operational technology environments, production networks, and critical manufacturing assets from cyber threats and disruptions.",
         image: "images/infra-manufact-bg-img.png",
          icon: "M39.1158 4.76753C36.5346 2.18278 33.1579 0.543094 29.5305 0.113034C25.903 -0.317016 22.2365 0.487664 19.1225 2.39722C16.0085 4.30678 13.6287 7.2098 12.3672 10.6379C11.1056 14.066 11.0359 17.8192 12.1692 21.2918L0.952667 32.5083C0.649567 32.809 0.409256 33.167 0.245716 33.5613C0.0821665 33.9557 -0.00135342 34.3787 1.65849e-05 34.8057V40.6333C1.65849e-05 41.4953 0.342427 42.3219 0.951917 42.9314C1.56141 43.5409 2.38806 43.8833 3.25002 43.8833H9.75C10.181 43.8833 10.5943 43.7121 10.8991 43.4074C11.2038 43.1026 11.375 42.6893 11.375 42.2583V39.0083H14.625C15.056 39.0083 15.4693 38.8371 15.7741 38.5324C16.0788 38.2276 16.25 37.8143 16.25 37.3833V34.1333H19.5C19.7135 34.1335 19.9249 34.0916 20.1221 34.01C20.3194 33.9285 20.4987 33.8089 20.6497 33.658L22.5916 31.7141C24.217 32.2428 25.9158 32.5108 27.625 32.5083H27.6453C30.8576 32.5044 33.9967 31.5485 36.666 29.7614C39.3353 27.9743 41.4151 25.4362 42.6425 22.4676C43.87 19.4991 44.1901 16.2333 43.5624 13.083C42.9346 9.9326 41.3873 7.0389 39.1158 4.76753ZM40.625 16.6849C40.4036 23.6094 34.582 29.2502 27.6474 29.2583H27.625C25.98 29.2611 24.3496 28.9502 22.8211 28.3422C22.5221 28.2125 22.191 28.1756 21.8708 28.2365C21.5506 28.2973 21.256 28.4531 21.0255 28.6835L18.8277 30.8833H14.625C14.194 30.8833 13.7807 31.0545 13.476 31.3593C13.1712 31.664 13 32.0773 13 32.5083V35.7583H9.75C9.319 35.7583 8.9057 35.9295 8.601 36.2343C8.2962 36.539 8.125 36.9523 8.125 37.3833V40.6333H3.25002V34.8057L15.1999 22.8578C15.4303 22.6273 15.586 22.3328 15.6469 22.0126C15.7077 21.6923 15.6709 21.3612 15.5411 21.0622C14.9312 19.5286 14.6203 17.8925 14.625 16.2421C14.625 9.3074 20.2739 3.48581 27.1985 3.26441C28.9772 3.20505 30.7491 3.51154 32.4046 4.16489C34.06 4.81825 35.5636 5.80455 36.8224 7.0627C38.0811 8.3209 39.0681 9.8241 39.7222 11.4792C40.3763 13.1343 40.6836 14.9061 40.625 16.6849ZM34.125 12.1958C34.125 12.6779 33.9821 13.1492 33.7142 13.55C33.4464 13.9509 33.0657 14.2633 32.6203 14.4478C32.1749 14.6323 31.6848 14.6805 31.212 14.5865C30.7392 14.4924 30.3048 14.2603 29.9639 13.9194C29.6231 13.5785 29.3909 13.1442 29.2969 12.6713C29.2028 12.1985 29.2511 11.7084 29.4356 11.263C29.6201 10.8176 29.9325 10.4369 30.3333 10.1691C30.7342 9.9013 31.2054 9.7583 31.6875 9.7583C32.334 9.7583 32.954 10.0151 33.4111 10.4722C33.8682 10.9294 34.125 11.5493 34.125 12.1958Z",
        },
        
      ];

      // Case Studies Data
            // Case Studies Data
      const caseStudiesData = [
        {
         
          title: "Strengthening Enterprise Cybersecurity",
          description: "Implemented AI-driven security to reduce threats and improve real-time response.",
          image: "images/01-manufact-case-study-img.png",
          link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
        },
        {
   
          title: "Driving Data-Driven Decisions",
          description: "Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support strategic decision-making.",
          image: "images/02-manufact-case-study-img.png",
          link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
        },
        {
        
          title: "Reducing Operational Downtime",
          description: "Deployed predictive maintenance solutions to eliminate unplanned downtime, extend equipment life, and enhance production efficiency.",
          image: "images/03-manufact-case-study-img.png",
          link: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
        }
      ];

      // Insights Data (news articles)
      const insightsData = [
        {
          featured: {
            image: "images/manufacturing06.jpg",
            date: "Dec 18, 2025, IT Service",
            title:
              "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
          },
          articles: [
            {
              image:
                "images/manufacturing-ca.jpg",
              date: "Dec 16, 2025, IT Service",
              title: "How Managed IT Services Improve Business Continuity",
            },
            {
              image:
                "images/manufacturing-ca2.jpg",
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

        container.innerHTML = caseStudiesData
          .map(
            (study, index) => `
        <div class="case-slide ${index === 0 ? "active" : ""} grid grid-cols-1 lg:grid-cols-2 items-center gap-6 sm:gap-8 md:gap-10 transition-opacity duration-500 ${index === 0 ? "" : "opacity-0 hidden"}">
          <div class=" pr-0 relative top-4 sm:top-16 md:top-32 left-0 md:left-10 lg:pr-20 py-6 sm:py-10 px-4 sm:px-0">
            <p class="text-xs sm:text-xs font-medium text-gray-400 uppercase tracking-widest mb-3 sm:mb-4">
              ${study.title}
            </p>
            <h3 class="text-xl sm:text-2xl md:text-3xl font-medium leading-snug mb-6 sm:mb-8 text-[#011627]">
              ${study.description}
            </h3>
            <a
              href="#"
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

          <div class="relative group rounded-sm overflow-hidden h-[300px] sm:h-[500px] md:h-[600px] shadow-2xl">
            <img src="${study.image}"
              alt="${study.imageAlt}"
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div
              class="absolute inset-0 bg-gradient-to-t from-[#011627] via-black/40 to-transparent p-6 sm:p-8 md:p-10 flex flex-col justify-end">
              <p class="text-xs sm:text-xs text-white uppercase tracking-widest font-medium mb-2 sm:mb-3">
                ${study.highlight}
              </p>
              <h4 class="text-base sm:text-xl md:text-2xl font-medium text-white mb-4 sm:mb-6 leading-tight">
                ${study.description}
              </h4>
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
      `,
          )
          .join("");
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
      // DUAL CASE STUDIES CAROUSEL
      // ==================================

      let currentCaseIndex = 0;

      function renderDualCaseStudies() {
        const current = caseStudiesData[currentCaseIndex];
        const nextIndex = (currentCaseIndex + 1) % caseStudiesData.length;
        const next = caseStudiesData[nextIndex];

        const left = document.getElementById('case-left');
        const right = document.getElementById('case-right');

        if (!left || !right) return;

        left.style.opacity = '0';
        right.style.opacity = '0';

        setTimeout(() => {
          // LEFT
          document.getElementById('left-title').textContent = current.title;
          document.getElementById('left-description').textContent = current.description;

          // RIGHT
          document.getElementById('right-image').src = next.image;
         
          document.getElementById('right-title').textContent = next.title;
          document.getElementById('right-description').textContent = next.description;

          // === UPDATE BUTTON LINKS ===
          const leftButton = left.querySelector('a');
          const rightButton = right.querySelector('a');

          if (leftButton) leftButton.href = 'https://teal-mule-553916.hostingersite.com/casestudy.php';
          if (rightButton) rightButton.href = next.link || '#';

          

          left.style.opacity = '1';
          right.style.opacity = '1';

          // Update Counter
          const counter = document.querySelector('.cases-counter');
          if (counter) counter.textContent = String(currentCaseIndex + 1).padStart(2, '0');
        }, 450);
      }

      function initDualCaseStudiesCarousel() {
        const prevBtn = document.querySelector('.cases-prev');
        const nextBtn = document.querySelector('.cases-next');
        const container = document.getElementById('casesDualContainer');

        if (!prevBtn || !nextBtn || !container) return;

        function goNext() {
          currentCaseIndex = (currentCaseIndex + 1) % caseStudiesData.length;
          renderDualCaseStudies();
        }

        function goPrev() {
          currentCaseIndex = (currentCaseIndex - 1 + caseStudiesData.length) % caseStudiesData.length;
          renderDualCaseStudies();
        }

        prevBtn.addEventListener('click', goPrev);
        nextBtn.addEventListener('click', goNext);

        let autoPlay = setInterval(goNext, 5000);

        container.addEventListener('mouseenter', () => clearInterval(autoPlay));
        container.addEventListener('mouseleave', () => {
          autoPlay = setInterval(goNext, 5000);
        });

        renderDualCaseStudies();
      }



      // ==================================
      // CAROUSEL INITIALIZATION & LOGIC
      // ==================================

      // Initialize all carousels on page load
      document.addEventListener("DOMContentLoaded", () => {
        // Render all carousel content from data arrays
        renderTestimonials();
        renderCapabilities();
        renderDualCaseStudies();
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

        initDualCaseStudiesCarousel();

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
