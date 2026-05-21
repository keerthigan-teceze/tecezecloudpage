<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financial Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
      <?php include 'header.php'; ?>


    <script src="https://cdn.tailwindcss.com"></script>
 
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
          url("images/finacial-service.jpg");
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
          Who We Serve / Financial Services
        </p>
        <div class="w-full h-0.5 border-b to-transparent"></div>
      </div>
      <div class="mt-3 relative z-10">
        <h1
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold max-w-8xl mb-4 sm:mb-6"
        >
          Secure, Scalable Solutions
          <br />
          <span
            class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent"
            >For Financial Services</span
          >
        </h1>
        <p
          class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light"
        >
          Engineered to ensure secure transactions, operational continuity, and
          real-time data accuracy across financial ecosystems. Built for
          high-trust environments where compliance, resilience, and performance
          are critical to stability and growth. 
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
            class="text-gray-300 max-w-52 leading-relaxed font-light text-xs sm:text-sm"
          >
            Supporting financial institutions worldwide with tailored, scalable
            solutions.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            185
          </h2>
          <p
            class="text-gray-300 max-w-52 leading-relaxed font-light text-xs sm:text-sm"
          >
            Global delivery hubs enabling seamless, round-the-clock operations.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            33K+
          </h2>
          <p
            class="text-gray-300 max-w-52 leading-relaxed font-light text-xs sm:text-sm"
          >
            A global network of experts driving innovation and compliance.
          </p>
        </div>
        <div class="group">
          <h2
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-2 sm:mb-3"
          >
            100+
          </h2>
          <p
            class="text-gray-300 max-w-52 leading-relaxed font-light text-xs sm:text-sm"
          >
            Trusted by leading banks to deliver impactful, reliable solutions.
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
            src="images/financial_about.jpg"
            alt="IT Infrastructure Dashboard"
            class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl"
          />
        </div>

        <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
          <div class="text-sm sm:text-md md:text-2xl lg:text-3xl leading-[1.5]">
            <span class="font-medium text-[#011627]"
              >Teceze delivers enterprise-grade IT infrastructure for financial
              institutions, enabling secure transaction environments, robust
              data management, and resilient system performance.
              <span class="text-gray-500 font-medium block">
                Operational risks are minimized, system reliability is enhanced,
                and secure digital frameworks are established, supporting
                regulatory compliance, audit readiness, and long-term financial
                stability. 
              </span>
            </span>
          </div>
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
                >/ 04</span
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
              class="text-xs sm:text-lg tracking-widest text-gray-400 font-bold leading-tight"
            >
              Powered By Strong <br />Technology Partnerships
            </div>
            <h2
              class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight"
            >
              IT infrastructure that powers financial operations for the long
              run.
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

        <div
          class="relative top-8 sm:top-16 md:top-26 z-10 cases-carousel"
          id="casesCarousel"
        >
          <!-- Cases carousel will be injected by JavaScript -->
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
                  How does Teceze help with regulatory compliance?
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
                  compliance into every solution aligning with standards like
                  GDPR, PCI-DSS, and SOX while ensuring continuous monitoring
                  and audit readiness.
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
                  How does Teceze protect against cyber threats and fraud?
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
                  Through multi-layered security real-time threat detection,
                  access controls, fraud monitoring, and 24/7 incident response.
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
                  Can Teceze integrate with our core banking systems?
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
                  Yes. We seamlessly connect modern platforms with legacy
                  systems ensuring secure data flow with minimal disruption.
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
                  How is sensitive financial data handled during upgrades or
                  migrations?
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
                  With strict encryption, access controls, and audit tracking
                  keeping all data secure throughout the process.
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
                  How long does a digital transformation project take?
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
                  It varies, but we follow a phased approach assess, design,
                  deploy, and support ensuring smooth adoption without
                  disruption.
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
              href="https://teal-mule-553916.hostingersite.com/Contactus.php"
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
          image: "images/financial_men-4.jpg",
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
          category: "Core Systems",
          title: "Core Financial Systems & Integration",
          description:
            "Integration of core banking platforms, payment systems, and financial applications to enable secure, real-time transaction processing.",
          icon: "M23.7709 34.5248C23.683 34.8764 23.4801 35.1885 23.1945 35.4115C22.9089 35.6345 22.557 35.7557 22.1946 35.7558C22.0577 35.7564 21.9212 35.7401 21.7884 35.707L15.2884 34.082C15.1074 34.0366 14.9356 33.9603 14.7805 33.8566L9.90555 30.6066C9.54703 30.3674 9.29821 29.9955 9.21383 29.5729C9.12946 29.1503 9.21643 28.7114 9.45562 28.3529C9.69482 27.9944 10.0666 27.7455 10.4893 27.6612C10.9119 27.5768 11.3508 27.6638 11.7093 27.903L16.3487 30.9966L22.5765 32.5545C22.7846 32.605 22.9806 32.696 23.1534 32.8225C23.3262 32.949 23.4722 33.1083 23.5832 33.2914C23.6942 33.4745 23.7679 33.6777 23.8001 33.8894C23.8323 34.1011 23.8224 34.317 23.7709 34.5248ZM50.7235 14.9314C50.5902 15.3364 50.3779 15.711 50.099 16.0335C49.8201 16.3559 49.4801 16.62 49.0985 16.8103L44.2885 19.2153L33.1004 30.4055C32.9018 30.6038 32.6553 30.7474 32.3847 30.8221C32.1142 30.8969 31.8289 30.9003 31.5566 30.832L18.5566 27.582C18.3589 27.5324 18.1723 27.4463 18.0062 27.3281L6.72867 19.2762L1.7968 16.8103C1.02601 16.425 0.439801 15.7493 0.16707 14.9319C-0.105662 14.1145 -0.0425888 13.2222 0.342421 12.4512L5.39008 2.35797C5.77539 1.58718 6.45105 1.00097 7.26848 0.72824C8.08591 0.455508 8.9782 0.518581 9.74914 0.90359L14.2301 3.13797L24.9957 0.0626531C25.2878 -0.0208844 25.5974 -0.0208844 25.8895 0.0626531L36.6551 3.13797L41.136 0.90359C41.907 0.518581 42.7992 0.455508 43.6167 0.72824C44.4341 1.00097 45.1098 1.58718 45.4951 2.35797L50.5427 12.4512C50.7353 12.8322 50.8504 13.2475 50.8814 13.6732C50.9124 14.0989 50.8588 14.5266 50.7235 14.9314ZM41.3432 17.5598L35.8162 6.50578H29.3527L20.5696 15.037C23.1412 16.6803 27.1732 17.1333 30.7909 13.4872C31.0734 13.2024 31.4513 13.0322 31.8518 13.0093C32.2523 12.9864 32.6471 13.1125 32.9602 13.3633L39.9498 18.9634L41.3432 17.5598ZM3.24914 13.9036L6.84242 15.7012L11.8901 5.60797L8.2968 3.81031L3.24914 13.9036ZM37.6321 21.2648L32.0035 16.7575C28.0345 20.0075 22.9949 20.4361 18.8187 17.7731C18.4079 17.5118 18.061 17.1615 17.8038 16.7482C17.5465 16.3348 17.3854 15.8689 17.3324 15.3849C17.2793 14.901 17.3357 14.4113 17.4973 13.952C17.659 13.4927 17.9217 13.0756 18.2662 12.7316C18.2711 12.7256 18.2765 12.7202 18.2824 12.7153L27.3946 3.87734L25.4446 3.32078L15.203 6.24781L9.64351 17.3648L19.6373 24.5047L31.447 27.4561L37.6321 21.2648ZM47.634 13.9036L42.5924 3.81031L38.9991 5.60797L44.0468 15.7012L47.634 13.9036Z",
          image: "images/financial-secure-bg-2.jpg",
        },
        {
          type: "image",
          category: "SECURE ACCESS",
          title: "Cybersecurity & Threat Management",
          description:
            "Advanced threat detection, real-time monitoring, and incident response solutions protecting financial institutions from cyberattacks, fraud, and regulatory breaches.",
          image: "images/financial_men-4.jpg",
          icon: "M43.9908 8.00923C41.4096 5.42448 38.0329 3.78479 34.4055 3.35473C30.778 2.92468 27.1115 3.72936 23.9975 5.63892C20.8835 7.54848 18.5037 10.4515 17.2422 13.8796C15.9806 17.3077 15.9109 21.0609 17.0442 24.5335L5.82767 35.75C5.52457 36.0507 5.28426 36.4087 5.12072 36.8031C4.95717 37.1974 4.87365 37.6204 4.87502 38.0474V43.875C4.87502 44.737 5.21743 45.5636 5.82692 46.1731C6.43641 46.7826 7.26306 47.125 8.12502 47.125H14.625C15.056 47.125 15.4693 46.9538 15.7741 46.6491C16.0788 46.3443 16.25 45.931 16.25 45.5V42.25H19.5C19.931 42.25 20.3443 42.0788 20.6491 41.7741C20.9538 41.4693 21.125 41.056 21.125 40.625V37.375H24.375C24.5885 37.3752 24.7999 37.3333 24.9971 37.2517C25.1944 37.1702 25.3737 37.0506 25.5247 36.8997L27.4666 34.9558C29.092 35.4845 30.7908 35.7525 32.5 35.75H32.5203C35.7326 35.7461 38.8717 34.7902 41.541 33.0031C44.2103 31.216 46.2901 28.6779 47.5175 25.7093C48.745 22.7408 49.0651 19.475 48.4374 16.3247C47.8096 13.1743 46.2623 10.2806 43.9908 8.00923ZM45.5 19.9266C45.2786 26.8511 39.4571 32.4919 32.5224 32.5H32.5C30.855 32.5028 29.2246 32.1919 27.6961 31.5839C27.3971 31.4542 27.066 31.4173 26.7458 31.4782C26.4256 31.539 26.131 31.6948 25.9005 31.9252L23.7027 34.125H19.5C19.069 34.125 18.6557 34.2962 18.351 34.601C18.0462 34.9057 17.875 35.319 17.875 35.75V39H14.625C14.194 39 13.7807 39.1712 13.476 39.476C13.1712 39.7807 13 40.194 13 40.625V43.875H8.12502V38.0474L20.0749 26.0995C20.3053 25.869 20.461 25.5745 20.5219 25.2543C20.5827 24.934 20.5459 24.6029 20.4161 24.3039C19.8062 22.7703 19.4953 21.1342 19.5 19.4838C19.5 12.5491 25.1489 6.72751 32.0735 6.50611C33.8522 6.44675 35.6241 6.75324 37.2796 7.40659C38.935 8.05995 40.4386 9.04625 41.6974 10.3044C42.9561 11.5626 43.9431 13.0658 44.5972 14.7209C45.2513 16.376 45.5586 18.1478 45.5 19.9266ZM39 15.4375C39 15.9196 38.8571 16.3909 38.5892 16.7917C38.3214 17.1926 37.9407 17.505 37.4953 17.6895C37.0499 17.874 36.5598 17.9222 36.087 17.8282C35.6142 17.7341 35.1798 17.502 34.8389 17.1611C34.4981 16.8202 34.2659 16.3859 34.1719 15.913C34.0778 15.4402 34.1261 14.9501 34.3106 14.5047C34.4951 14.0593 34.8075 13.6786 35.2083 13.4108C35.6092 13.143 36.0804 13 36.5625 13C37.209 13 37.829 13.2568 38.2861 13.7139C38.7432 14.1711 39 14.791 39 15.4375Z",
        },

        {
          type: "image",
          category: "EMPLOYEE EXPERIENCE",
          title: "Data Governance & Analytics",
          description:
            "Robust data governance frameworks and analytics platforms enabling financial organisations to manage data quality, meet compliance obligations, and unlock actionable business intelligence. ",
          image: "images/financial-secure-bg.png",
          icon: "M40.2222 12.024C42.4772 16.7402 42.9052 22.1245 41.4238 27.1377C39.9424 32.1509 36.6565 36.4377 32.2003 39.1707C27.7441 41.9036 22.4335 42.8891 17.2934 41.9368C12.1534 40.9846 7.54823 38.1621 4.36682 34.0141C1.18542 29.8661 -0.346734 24.6867 0.0660685 19.4755C0.478871 14.2643 2.80737 9.39076 6.60215 5.79541C10.3969 2.20006 15.389 0.137801 20.6149 0.00666077C25.8408 -0.12448 30.93 1.68479 34.9003 5.08528L39.5052 0.478406C39.8101 0.17349 40.2236 0.00219021 40.6549 0.00219021C41.0861 0.00219021 41.4996 0.17349 41.8045 0.478406C42.1095 0.783322 42.2808 1.19688 42.2808 1.62809C42.2808 2.05931 42.1095 2.47287 41.8045 2.77778L22.3045 22.2778C21.9996 22.5827 21.5861 22.754 21.1549 22.754C20.7236 22.754 20.3101 22.5827 20.0052 22.2778C19.7003 21.9729 19.529 21.5593 19.529 21.1281C19.529 20.6969 19.7003 20.2833 20.0052 19.9784L25.6358 14.3478C24.1098 13.3386 22.2879 12.8739 20.465 13.029C18.6421 13.1841 16.9248 13.9499 15.5913 15.2024C14.2577 16.4549 13.386 18.1208 13.117 19.9304C12.8481 21.7401 13.1978 23.5875 14.1095 25.1737C15.0212 26.7598 16.4415 27.9919 18.1406 28.6704C19.8396 29.3488 21.7179 29.434 23.4714 28.9122C25.2249 28.3903 26.751 27.2919 27.8026 25.7948C28.8541 24.2977 29.3696 22.4895 29.2656 20.6629C29.2536 20.4495 29.2838 20.2359 29.3544 20.0341C29.4249 19.8324 29.5346 19.6465 29.677 19.4871C29.8194 19.3277 29.9918 19.198 30.1843 19.1052C30.3769 19.0125 30.5858 18.9585 30.7992 18.9465C31.2302 18.9223 31.6532 19.0702 31.9751 19.3578C32.1344 19.5003 32.2642 19.6727 32.357 19.8652C32.4497 20.0578 32.5036 20.2667 32.5156 20.4801C32.6638 23.0655 31.9254 25.624 30.4224 27.7328C28.9195 29.8416 26.742 31.3744 24.2498 32.078C21.7576 32.7816 19.1 32.6137 16.7162 31.6022C14.3323 30.5907 12.3649 28.7961 11.1392 26.515C9.91348 24.2339 9.50278 21.6028 9.97498 19.0567C10.4472 16.5105 11.774 14.2017 13.7362 12.5118C15.6984 10.8219 18.1784 9.85209 20.7665 9.76266C23.3545 9.67324 25.8956 10.4695 27.9697 12.02L32.5908 7.39888C29.2043 4.58721 24.8984 3.12586 20.5001 3.2955C16.1018 3.46513 11.9212 5.2538 8.76136 8.31795C5.60149 11.3821 3.68511 15.5057 3.38029 19.8967C3.07547 24.2877 4.40371 28.6365 7.1099 32.1078C9.81609 35.5792 13.7094 37.9283 18.0421 38.7041C22.3748 39.4798 26.8413 38.6274 30.5838 36.3106C34.3263 33.9939 37.0809 30.3761 38.3185 26.1521C39.5561 21.9281 39.1895 17.3957 37.2891 13.4256C37.1032 13.0366 37.0795 12.5898 37.2231 12.1833C37.3667 11.7769 37.6659 11.4441 38.0549 11.2583C38.4438 11.0724 38.8907 11.0487 39.2971 11.1923C39.7036 11.3359 40.0363 11.6351 40.2222 12.024Z",
        },
        {
          type: "image",
          category: "COMPLIANCE",
          title: "Regulatory Compliance & Risk Management",
          description:
            "End-to-end compliance management solutions helping financial institutions navigate complex regulatory landscapes, including GDPR, Basel III, and SOX, with confidence and audit-readiness. ",
          icon: "M23.7709 34.5248C23.683 34.8764 23.4801 35.1885 23.1945 35.4115C22.9089 35.6345 22.557 35.7557 22.1946 35.7558C22.0577 35.7564 21.9212 35.7401 21.7884 35.707L15.2884 34.082C15.1074 34.0366 14.9356 33.9603 14.7805 33.8566L9.90555 30.6066C9.54703 30.3674 9.29821 29.9955 9.21383 29.5729C9.12946 29.1503 9.21643 28.7114 9.45562 28.3529C9.69482 27.9944 10.0666 27.7455 10.4893 27.6612C10.9119 27.5768 11.3508 27.6638 11.7093 27.903L16.3487 30.9966L22.5765 32.5545C22.7846 32.605 22.9806 32.696 23.1534 32.8225C23.3262 32.949 23.4722 33.1083 23.5832 33.2914C23.6942 33.4745 23.7679 33.6777 23.8001 33.8894C23.8323 34.1011 23.8224 34.317 23.7709 34.5248ZM50.7235 14.9314C50.5902 15.3364 50.3779 15.711 50.099 16.0335C49.8201 16.3559 49.4801 16.62 49.0985 16.8103L44.2885 19.2153L33.1004 30.4055C32.9018 30.6038 32.6553 30.7474 32.3847 30.8221C32.1142 30.8969 31.8289 30.9003 31.5566 30.832L18.5566 27.582C18.3589 27.5324 18.1723 27.4463 18.0062 27.3281L6.72867 19.2762L1.7968 16.8103C1.02601 16.425 0.439801 15.7493 0.16707 14.9319C-0.105662 14.1145 -0.0425888 13.2222 0.342421 12.4512L5.39008 2.35797C5.77539 1.58718 6.45105 1.00097 7.26848 0.72824C8.08591 0.455508 8.9782 0.518581 9.74914 0.90359L14.2301 3.13797L24.9957 0.0626531C25.2878 -0.0208844 25.5974 -0.0208844 25.8895 0.0626531L36.6551 3.13797L41.136 0.90359C41.907 0.518581 42.7992 0.455508 43.6167 0.72824C44.4341 1.00097 45.1098 1.58718 45.4951 2.35797L50.5427 12.4512C50.7353 12.8322 50.8504 13.2475 50.8814 13.6732C50.9124 14.0989 50.8588 14.5266 50.7235 14.9314ZM41.3432 17.5598L35.8162 6.50578H29.3527L20.5696 15.037C23.1412 16.6803 27.1732 17.1333 30.7909 13.4872C31.0734 13.2024 31.4513 13.0322 31.8518 13.0093C32.2523 12.9864 32.6471 13.1125 32.9602 13.3633L39.9498 18.9634L41.3432 17.5598ZM3.24914 13.9036L6.84242 15.7012L11.8901 5.60797L8.2968 3.81031L3.24914 13.9036ZM37.6321 21.2648L32.0035 16.7575C28.0345 20.0075 22.9949 20.4361 18.8187 17.7731C18.4079 17.5118 18.061 17.1615 17.8038 16.7482C17.5465 16.3348 17.3854 15.8689 17.3324 15.3849C17.2793 14.901 17.3357 14.4113 17.4973 13.952C17.659 13.4927 17.9217 13.0756 18.2662 12.7316C18.2711 12.7256 18.2765 12.7202 18.2824 12.7153L27.3946 3.87734L25.4446 3.32078L15.203 6.24781L9.64351 17.3648L19.6373 24.5047L31.447 27.4561L37.6321 21.2648ZM47.634 13.9036L42.5924 3.81031L38.9991 5.60797L44.0468 15.7012L47.634 13.9036Z",
          image: "images/financial-collab-bg.png",
        },
      ];

      // Case Studies Data
      const caseStudiesData = [
        {
          title:
            "Delivered scalable cloud solutions to optimize operations and support business growth.",
          topLabel: "Accelerating Digital Transformation",
          image: "images/01-finance-case-study-img.png",
          imageAlt: "Cybersecurity and AI",
          viewAllLink:
            "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink:
            "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          title:
            "Implemented AI-driven security to reduce threats and improve real-time response.",
          topLabel: "Strengthening Enterprise Cybersecurity",
          image: "images/02-finance-case-study-img.png",
          imageAlt: "Cloud Infrastructure",
          viewAllLink:
            "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink:
            "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          title:
            "Built a secure, custom-developed digital banking application that streamlined account management, loan processing, and customer onboarding across all digital channels.",
          topLabel: "App & Software Development for Finance",
          image: "images/03-finance-case-study-img.png",
          imageAlt: "AI Automation",
          viewAllLink:
            "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink:
            "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
      ];

      // Insights Data (news articles)
      const insightsData = [
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
                    
                    <p class="text-[12px] tracking-[0.25em] text-cyan-300 uppercase mb-4 font-bold">
                      ${item.category}
                    </p>
                    
                    <h3 class="text-2xl font-bold text-white leading-tight">
                      ${item.title}
                    </h3>
                  </div>

                  <div class="transform ${hasImage ? "translate-y-4 group-hover:translate-y-0" : "translate-y-0"} transition-transform duration-500 delay-100">
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white/90 leading-relaxed font-normal">
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
