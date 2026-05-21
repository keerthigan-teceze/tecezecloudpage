<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Who We Serve - IT & Technology</title>
       <?php include 'header.php'; ?>
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
          url("/images/it-technology/background.png");
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
          Who we Serve / IT & Technology
        </p>
        <div class="w-full h-0.5 border-b to-transparent"></div>
      </div>
      <div class="max-w-6xl mt-3 relative z-10">
        <h1
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6 tracking-tight"
        >
          Precision IT for Technology <br />Businesses Built to Operate <br />at
          Scale
        </h1>
        <p
          class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-6 sm:mb-8 leading-relaxed font-light"
        >
          Engineered for high performance infrastructure, operational
          continuity, and real time system reliability across dynamic technology
          environments. Designed for fast evolving ecosystems where scalability,
          resilience, and performance fuel innovation and sustained growth.
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
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm capitalize"
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
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm capitalize"
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
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm capitalize"
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
            class="text-gray-300 leading-relaxed font-light text-xs sm:text-sm capitalize"
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
            src="/images/it-technology/services.jpg"
            alt="IT Infrastructure Dashboard"
            class="rounded-3xl shadow-2xl w-[500px] md:w-[600px] h-[400px] md:h-[600px] relative transition duration-300 group-hover:shadow-3xl"
          />
        </div>

        <div class="space-y-4 sm:space-y-6 text-[#1a2b3c] px-4 sm:px-0">
          <div class="text-sm sm:text-md md:text-2xl leading-[1.5] font-medium">
            <span class="font-semibold text-[#011627]"
              >Technology That Powers the Businesses Behind It
            </span>
            <span class="font-semibold text-[#011627] block mt-10"
              >Teceze delivers enterprise-grade IT infrastructure for
              technology-driven organizations, enabling scalable systems, secure
              environments, and optimized operational performance.
            </span>
            <span class="text-gray-500 font-medium block mt-4">
              Infrastructure complexity is simplified, operational efficiency is
              elevated, and resilient digital ecosystems are built to support
              rapid innovation, seamless scalability, and long-term business
              growth.
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
                >/ 06</span
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
              class="text-xs sm:text-xs capitalize tracking-widest text-gray-400 font-bold leading-tight"
            >
              Powered by strong <br />technology partnerships
            </div>
            <h2
              class="text-xl sm:text-2xl md:text-3xl font-semibold max-w-3xl leading-tight"
            >
              Backed by a strong ecosystem of technology partners,
              <span class="text-gray-400"
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
            href="https://teal-mule-553916.hostingersite.com/casestudy.php"
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
                  How does Teceze help accelerate software delivery without
                  compromising quality?
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
                  We implement DevOps, CI/CD, and automated testing enabling
                  faster releases with fewer errors and consistent quality.
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
                  Can Teceze help us move from legacy systems to cloud-native
                  architecture?
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
                  Yes. We manage end-to-end modernisation assessment, migration,
                  and optimisation, ensuring minimal disruption.
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
                  How does Teceze handle cybersecurity for tech companies?
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
                  We deploy layered security across apps, cloud, and access
                  aligned with ISO, SOC 2, and NIST standards.
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
                  Can Teceze help us build AI and data capabilities?
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
                  Absolutely. We design and deploy AI and data platforms
                  tailored to your use cases, driving real business value.
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
                  How does Teceze support rapid scaling without complexity?
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
                  We standardise infrastructure, automate operations, and
                  provide managed support, enabling smooth, scalable growth.
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
          image: "/images/financial_men-4.jpg",
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
          category: "cloud",
          title: "Cloud & Infrastructure Management",
          description:
            "Scalable cloud and infrastructure environments engineered for high availability, consistent performance, and rapid deployment at scale.",
          icon: "M30.8641 0C27.5444 0.00254836 24.2908 0.928558 21.4673 2.67446C18.6438 4.42037 16.3617 6.91733 14.8761 9.88609C13.1088 9.62835 11.3074 9.73752 9.58421 10.2068C7.86099 10.6761 6.25296 11.4954 4.86039 12.6136C3.46783 13.7318 2.32062 15.125 1.49032 16.7062C0.660011 18.2875 0.164423 20.0228 0.0344641 21.804C-0.0954946 23.5853 0.142964 25.3742 0.734966 27.0592C1.32697 28.7442 2.25981 30.2891 3.47532 31.5976C4.69082 32.9061 6.16291 33.9502 7.79976 34.6646C9.43661 35.379 11.2031 35.7485 12.9891 35.75H30.8641C35.6048 35.75 40.1514 33.8667 43.5036 30.5145C46.8558 27.1623 48.7391 22.6157 48.7391 17.875C48.7391 13.1343 46.8558 8.58768 43.5036 5.23547C40.1514 1.88325 35.6048 0 30.8641 0ZM30.8641 32.5H12.9891C10.4032 32.5 7.92327 31.4728 6.09479 29.6443C4.26631 27.8158 3.23908 25.3359 3.23908 22.75C3.23908 20.1641 4.26631 17.6842 6.09479 15.8557C7.92327 14.0272 10.4032 13 12.9891 13C13.2125 13 13.436 13 13.6574 13.0223C13.213 14.6016 12.9881 16.2344 12.9891 17.875C12.9891 18.306 13.1603 18.7193 13.465 19.024C13.7698 19.3288 14.1831 19.5 14.6141 19.5C15.0451 19.5 15.4584 19.3288 15.7631 19.024C16.0679 18.7193 16.2391 18.306 16.2391 17.875C16.2391 14.9824 17.0968 12.1549 18.7038 9.74978C20.3109 7.34472 22.595 5.47019 25.2673 4.36326C27.9397 3.25633 30.8803 2.96671 33.7173 3.53102C36.5543 4.09532 39.1602 5.48822 41.2055 7.53356C43.2509 9.57891 44.6438 12.1848 45.2081 15.0218C45.7724 17.8588 45.4828 20.7994 44.3758 23.4717C43.2689 26.1441 41.3944 28.4282 38.9893 30.0352C36.5842 31.6423 33.7566 32.5 30.8641 32.5Z",
          image: "/images/it-technology/cloud.jpg",
        },
        {
          type: "image",
          category: "automation",
          title: "DevOps & Automation Enablement",
          description:
            "End-to-end DevOps implementation and automation frameworks that accelerate software delivery, eliminate manual bottlenecks, and enable technology teams to ship reliable products faster and at greater scale.",
          image: "/images/it-technology/automation.jpg",
          icon: "M34.2278 31.5799C36.2827 29.8537 37.9243 27.6886 39.0316 25.2441C40.139 22.7995 40.6839 20.1376 40.6262 17.4545C40.4231 8.1697 32.9867 0.51392 23.7181 0.0264205C21.3267 -0.103745 18.9335 0.247997 16.6806 1.06076C14.4277 1.87352 12.3612 3.13072 10.6036 4.7577C8.84612 6.38468 7.43347 8.34826 6.44959 10.5318C5.46571 12.7154 4.93067 15.0744 4.87624 17.4688L0.316087 26.2397C0.297806 26.2763 0.279525 26.3128 0.263275 26.3494C-0.0636554 27.1114 -0.0869564 27.9696 0.198142 28.7482C0.483241 29.5269 1.05518 30.1671 1.79687 30.5378L1.84765 30.5602L6.50124 32.691V39C6.50124 39.862 6.84365 40.6886 7.45315 41.2981C8.06264 41.9076 8.88929 42.25 9.75124 42.25H19.5012C19.9322 42.25 20.3455 42.0788 20.6503 41.7741C20.955 41.4693 21.1262 41.056 21.1262 40.625C21.1262 40.194 20.955 39.7807 20.6503 39.476C20.3455 39.1712 19.9322 39 19.5012 39H9.75124V31.6489C9.75148 31.3374 9.66219 31.0325 9.49401 30.7703C9.32584 30.5081 9.08586 30.2998 8.80265 30.1702L3.25124 27.625L7.93734 18.6185C8.05948 18.3896 8.1243 18.1345 8.12624 17.875C8.12577 14.5607 9.25105 11.3445 11.3177 8.75345C13.3844 6.16239 16.2698 4.35012 19.5012 3.61361V6.78033C18.417 7.16366 17.5032 7.91794 16.9213 8.90986C16.3395 9.90178 16.127 11.0675 16.3215 12.2009C16.5159 13.3343 17.1048 14.3625 17.984 15.1037C18.8633 15.845 19.9763 16.2515 21.1262 16.2515C22.2762 16.2515 23.3892 15.845 24.2684 15.1037C25.1477 14.3625 25.7366 13.3343 25.931 12.2009C26.1255 11.0675 25.913 9.90178 25.3311 8.90986C24.7493 7.91794 23.8355 7.16366 22.7512 6.78033V3.25001C23.0153 3.25001 23.2794 3.25001 23.5434 3.27033C26.4251 3.43539 29.1942 4.44644 31.5043 6.17702C33.8144 7.9076 35.5629 10.2809 36.5312 13H32.5012C32.2629 12.9999 32.0274 13.0523 31.8115 13.1534C31.5956 13.2545 31.4046 13.4018 31.252 13.585L26.0703 19.8047C24.9896 19.402 23.8013 19.3945 22.7156 19.7834C21.6299 20.1724 20.7167 20.9328 20.1376 21.9301C19.5585 22.9274 19.3507 24.0974 19.551 25.2331C19.7513 26.3689 20.3468 27.3972 21.2322 28.1362C22.1176 28.8753 23.2358 29.2774 24.389 29.2714C25.5423 29.2655 26.6563 28.8519 27.534 28.1038C28.4117 27.3557 28.9966 26.3213 29.1853 25.1836C29.3739 24.0458 29.1541 22.878 28.5647 21.8867L33.263 16.25H37.2828C37.3316 16.6725 37.3613 17.0991 37.3722 17.5297C37.4228 19.8572 36.9191 22.1633 35.9027 24.2578C34.8862 26.3522 33.3861 28.1747 31.5262 29.575C31.2971 29.7468 31.1174 29.9761 31.0054 30.2397C30.8934 30.5034 30.853 30.7919 30.8884 31.0761L32.5134 44.0761C32.5629 44.4685 32.7538 44.8295 33.0503 45.0912C33.3468 45.353 33.7287 45.4976 34.1242 45.498C34.1921 45.498 34.2599 45.4939 34.3273 45.4858C34.5392 45.4594 34.7437 45.3916 34.9293 45.2861C35.1149 45.1807 35.2779 45.0397 35.409 44.8713C35.5401 44.7028 35.6367 44.5102 35.6933 44.3044C35.75 44.0986 35.7655 43.8837 35.7391 43.6719L34.2278 31.5799ZM21.1262 13C20.8048 13 20.4907 12.9047 20.2234 12.7262C19.9562 12.5476 19.7479 12.2938 19.6249 11.9969C19.5019 11.6999 19.4698 11.3732 19.5325 11.058C19.5952 10.7428 19.7499 10.4532 19.9772 10.226C20.2045 9.99871 20.494 9.84394 20.8092 9.78124C21.1244 9.71854 21.4512 9.75072 21.7481 9.87371C22.045 9.9967 22.2988 10.205 22.4774 10.4722C22.6559 10.7394 22.7512 11.0536 22.7512 11.375C22.7512 11.806 22.58 12.2193 22.2753 12.5241C21.9705 12.8288 21.5572 13 21.1262 13ZM24.3762 26C24.0548 26 23.7407 25.9047 23.4734 25.7262C23.2062 25.5476 22.9979 25.2938 22.8749 24.9969C22.7519 24.6999 22.7198 24.3732 22.7825 24.058C22.8452 23.7428 22.9999 23.4532 23.2272 23.226C23.4545 22.9987 23.744 22.8439 24.0592 22.7812C24.3744 22.7185 24.7012 22.7507 24.9981 22.8737C25.295 22.9967 25.5488 23.205 25.7274 23.4722C25.9059 23.7394 26.0012 24.0536 26.0012 24.375C26.0012 24.806 25.83 25.2193 25.5253 25.5241C25.2205 25.8288 24.8072 26 24.3762 26Z",
        },
        {
          type: "image",
          category: "Employee Experience",
          title: "Cybersecurity & Threat Protection",
          description:
            "Comprehensive cybersecurity solutions designed for technology-driven organisations covering threat detection, vulnerability management, identity security, and incident response to keep systems, data, and teams protected around the clock.",
          image: "/images/it-technology/experience.jpg",
          icon: "M39 6.5H30.875V4.875C30.875 3.58207 30.3614 2.34209 29.4471 1.42785C28.5329 0.513615 27.2929 0 26 0H16.25C14.9571 0 13.7171 0.513615 12.8029 1.42785C11.8886 2.34209 11.375 3.58207 11.375 4.875V6.5H3.25C2.38805 6.5 1.5614 6.84241 0.951903 7.4519C0.34241 8.0614 0 8.88805 0 9.75V35.75C0 36.612 0.34241 37.4386 0.951903 38.0481C1.5614 38.6576 2.38805 39 3.25 39H39C39.862 39 40.6886 38.6576 41.2981 38.0481C41.9076 37.4386 42.25 36.612 42.25 35.75V9.75C42.25 8.88805 41.9076 8.0614 41.2981 7.4519C40.6886 6.84241 39.862 6.5 39 6.5ZM14.625 4.875C14.625 4.44402 14.7962 4.0307 15.101 3.72595C15.4057 3.42121 15.819 3.25 16.25 3.25H26C26.431 3.25 26.8443 3.42121 27.149 3.72595C27.4538 4.0307 27.625 4.44402 27.625 4.875V6.5H14.625V4.875ZM39 9.75V18.202C33.5152 21.1875 27.3697 22.7511 21.125 22.75C14.8805 22.7511 8.73523 21.1883 3.25 18.2041V9.75H39ZM39 35.75H3.25V21.8644C8.81547 24.5867 14.9294 26.0012 21.125 26C27.3207 26.0001 33.4345 24.5849 39 21.8623V35.75ZM16.25 17.875C16.25 17.444 16.4212 17.0307 16.726 16.726C17.0307 16.4212 17.444 16.25 17.875 16.25H24.375C24.806 16.25 25.2193 16.4212 25.524 16.726C25.8288 17.0307 26 17.444 26 17.875C26 18.306 25.8288 18.7193 25.524 19.024C25.2193 19.3288 24.806 19.5 24.375 19.5H17.875C17.444 19.5 17.0307 19.3288 16.726 19.024C16.4212 18.7193 16.25 18.306 16.25 17.875Z",
        },
        {
          type: "image",
          category: "Modernisation",
          title: "Application Modernisation & Migration",
          description:
            "Structured modernisation of legacy applications and infrastructure — moving technology businesses from outdated systems to cloud-native, scalable architectures that support faster innovation and reduced technical debt.",
          icon: "M24.375 0H4.875C3.58207 0 2.34209 0.513615 1.42785 1.42785C0.513615 2.34209 0 3.58207 0 4.875V40.625C0 41.9179 0.513615 43.1579 1.42785 44.0721C2.34209 44.9864 3.58207 45.5 4.875 45.5H24.375C25.6679 45.5 26.9079 44.9864 27.8221 44.0721C28.7364 43.1579 29.25 41.9179 29.25 40.625V4.875C29.25 3.58207 28.7364 2.34209 27.8221 1.42785C26.9079 0.513615 25.6679 0 24.375 0ZM26 40.625C26 41.056 25.8288 41.4693 25.524 41.774C25.2193 42.0788 24.806 42.25 24.375 42.25H4.875C4.44402 42.25 4.0307 42.0788 3.72595 41.774C3.42121 41.4693 3.25 41.056 3.25 40.625V4.875C3.25 4.44402 3.42121 4.0307 3.72595 3.72595C4.0307 3.42121 4.44402 3.25 4.875 3.25H24.375C24.806 3.25 25.2193 3.42121 25.524 3.72595C25.8288 4.0307 26 4.44402 26 4.875V40.625ZM17.0625 8.9375C17.0625 9.41959 16.9195 9.89086 16.6517 10.2917C16.3839 10.6925 16.0032 11.005 15.5578 11.1895C15.1124 11.3739 14.6223 11.4222 14.1495 11.3282C13.6766 11.2341 13.2423 11.002 12.9014 10.6611C12.5605 10.3202 12.3284 9.88586 12.2343 9.41303C12.1403 8.9402 12.1886 8.4501 12.373 8.00471C12.5575 7.55931 12.87 7.17863 13.2708 6.91079C13.6716 6.64296 14.1429 6.5 14.625 6.5C15.2715 6.5 15.8915 6.75681 16.3486 7.21393C16.8057 7.67105 17.0625 8.29103 17.0625 8.9375Z",
          image: "/images/it-technology/application.jpg",
        },
        {
          type: "image",
          category: "Intelligence",
          title: "AI, Data & Analytics Platforms",
          description:
            "Design and deployment of AI-powered data platforms that help technology organisations harness operational data, build intelligent products, and make faster, evidence-based decisions across every function of the business.",
          image: "/images/it-technology/intelligence.jpg",
          icon: "M27.625 16.25H17.875C17.444 16.25 17.0307 16.4212 16.726 16.726C16.4212 17.0307 16.25 17.444 16.25 17.875V27.625C16.25 28.056 16.4212 28.4693 16.726 28.774C17.0307 29.0788 17.444 29.25 17.875 29.25H27.625C28.056 29.25 28.4693 29.0788 28.774 28.774C29.0788 28.4693 29.25 28.056 29.25 27.625V17.875C29.25 17.444 29.0788 17.0307 28.774 16.726C28.4693 16.4212 28.056 16.25 27.625 16.25ZM26 26H19.5V19.5H26V26ZM43.875 26H40.625V19.5H43.875C44.306 19.5 44.7193 19.3288 45.024 19.024C45.3288 18.7193 45.5 18.306 45.5 17.875C45.5 17.444 45.3288 17.0307 45.024 16.726C44.7193 16.4212 44.306 16.25 43.875 16.25H40.625V8.125C40.625 7.26305 40.2826 6.4364 39.6731 5.8269C39.0636 5.21741 38.237 4.875 37.375 4.875H29.25V1.625C29.25 1.19402 29.0788 0.780698 28.774 0.475951C28.4693 0.171205 28.056 0 27.625 0C27.194 0 26.7807 0.171205 26.476 0.475951C26.1712 0.780698 26 1.19402 26 1.625V4.875H19.5V1.625C19.5 1.19402 19.3288 0.780698 19.024 0.475951C18.7193 0.171205 18.306 0 17.875 0C17.444 0 17.0307 0.171205 16.726 0.475951C16.4212 0.780698 16.25 1.19402 16.25 1.625V4.875H8.125C7.26305 4.875 6.4364 5.21741 5.8269 5.8269C5.21741 6.4364 4.875 7.26305 4.875 8.125V16.25H1.625C1.19402 16.25 0.780698 16.4212 0.475951 16.726C0.171205 17.0307 0 17.444 0 17.875C0 18.306 0.171205 18.7193 0.475951 19.024C0.780698 19.3288 1.19402 19.5 1.625 19.5H4.875V26H1.625C1.19402 26 0.780698 26.1712 0.475951 26.476C0.171205 26.7807 0 27.194 0 27.625C0 28.056 0.171205 28.4693 0.475951 28.774C0.780698 29.0788 1.19402 29.25 1.625 29.25H4.875V37.375C4.875 38.237 5.21741 39.0636 5.8269 39.6731C6.4364 40.2826 7.26305 40.625 8.125 40.625H16.25V43.875C16.25 44.306 16.4212 44.7193 16.726 45.024C17.0307 45.3288 17.444 45.5 17.875 45.5C18.306 45.5 18.7193 45.3288 19.024 45.024C19.3288 44.7193 19.5 44.306 19.5 43.875V40.625H26V43.875C26 44.306 26.1712 44.7193 26.476 45.024C26.7807 45.3288 27.194 45.5 27.625 45.5C28.056 45.5 28.4693 45.3288 28.774 45.024C29.0788 44.7193 29.25 44.306 29.25 43.875V40.625H37.375C38.237 40.625 39.0636 40.2826 39.6731 39.6731C40.2826 39.0636 40.625 38.237 40.625 37.375V29.25H43.875C44.306 29.25 44.7193 29.0788 45.024 28.774C45.3288 28.4693 45.5 28.056 45.5 27.625C45.5 27.194 45.3288 26.7807 45.024 26.476C44.7193 26.1712 44.306 26 43.875 26ZM37.375 37.375H8.125V8.125H37.375V27.5986C37.375 27.5986 37.375 27.6169 37.375 27.625C37.375 27.6331 37.375 27.6433 37.375 27.6514V37.375Z",
        },
        {
          type: "image",
          category: "Support",
          title: "24/7 Operational Support",
          description:
            "Continuous monitoring and expert support ensure minimal disruption across critical financial operations.",
          image: "/images/it-technology/support.jpg",
          icon: "M36.1339 6.22781C34.19 4.26436 31.8779 2.70362 29.33 1.63497C26.7821 0.566306 24.0484 0.0107135 21.2855 0H21.125C15.5223 0 10.1491 2.22566 6.18737 6.18737C2.22566 10.1491 0 15.5223 0 21.125V32.5C0 33.7929 0.513615 35.0329 1.42785 35.9471C2.34209 36.8614 3.58207 37.375 4.875 37.375H8.125C9.41793 37.375 10.6579 36.8614 11.5721 35.9471C12.4864 35.0329 13 33.7929 13 32.5V24.375C13 23.0821 12.4864 21.8421 11.5721 20.9279C10.6579 20.0136 9.41793 19.5 8.125 19.5H3.32313C3.63651 16.1117 4.9092 12.883 6.99202 10.1922C9.07484 7.50142 11.8815 5.46006 15.083 4.3074C18.2846 3.15473 21.7484 2.93852 25.0684 3.68409C28.3884 4.42967 31.4272 6.10615 33.8284 8.51703C36.7634 11.467 38.5686 15.3543 38.9289 19.5H34.125C32.8321 19.5 31.5921 20.0136 30.6779 20.9279C29.7636 21.8421 29.25 23.0821 29.25 24.375V32.5C29.25 33.7929 29.7636 35.0329 30.6779 35.9471C31.5921 36.8614 32.8321 37.375 34.125 37.375H39C39 38.6679 38.4864 39.9079 37.5721 40.8221C36.6579 41.7364 35.4179 42.25 34.125 42.25H22.75C22.319 42.25 21.9057 42.4212 21.601 42.726C21.2962 43.0307 21.125 43.444 21.125 43.875C21.125 44.306 21.2962 44.7193 21.601 45.024C21.9057 45.3288 22.319 45.5 22.75 45.5H34.125C36.2799 45.5 38.3465 44.644 39.8702 43.1202C41.394 41.5965 42.25 39.5299 42.25 37.375V21.125C42.2606 18.3616 41.7258 15.6233 40.6763 13.067C39.6268 10.5107 38.0832 8.18656 36.1339 6.22781ZM8.125 22.75C8.55598 22.75 8.9693 22.9212 9.27405 23.226C9.57879 23.5307 9.75 23.944 9.75 24.375V32.5C9.75 32.931 9.57879 33.3443 9.27405 33.649C8.9693 33.9538 8.55598 34.125 8.125 34.125H4.875C4.44402 34.125 4.0307 33.9538 3.72595 33.649C3.42121 33.3443 3.25 32.931 3.25 32.5V22.75H8.125ZM34.125 34.125C33.694 34.125 33.2807 33.9538 32.976 33.649C32.6712 33.3443 32.5 32.931 32.5 32.5V24.375C32.5 23.944 32.6712 23.5307 32.976 23.226C33.2807 22.9212 33.694 22.75 34.125 22.75H39V34.125H34.125Z",
        },
      ];

      // Case Studies Data
      const caseStudiesData = [
        {
          title:
            "Engineered a scalable SaaS platform from the ground up, enabling the client to onboard enterprise customers faster, reduce infrastructure costs, and achieve a significant improvement in platform uptime and overall product reliability post-launch.",
          topLabel: "App & Software Development for IT & Technology",
          image: "/images/case-study1.jpg",
          imageAlt: "AI Automation",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          title:
            "Delivered scalable cloud solutions to optimize operations and support business growth.",
          topLabel: "Accelerating Digital Transformation",
          image: "/images/it-technology/case-study2.jpg",
          imageAlt: "Cybersecurity and AI",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        },
        {
          title:
            "Implemented AI-driven security to reduce threats and improve real-time response.",
          topLabel: "Strengthening Enterprise Cybersecurity",
          image: "/images/it-technology/case-study3.jpg",
          imageAlt: "Cloud Infrastructure",
          viewAllLink: "https://teal-mule-553916.hostingersite.com/casestudy.php",
          caseLink: "https://teal-mule-553916.hostingersite.com/case_study_details_page.php",
        }  
      ];

      // Insights Data (news articles)
      const insightsData = [
        {
          featured: {
            image: "/images/it-technology/compliance.jpg",
            date: "Dec 18, 2025, IT Service",
            title:
              "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
          },
          articles: [
            {
              image: "/images/it-technology/news1.jpg",
              date: "Dec 16, 2025, IT Service",
              title: "How Managed IT Services Improve Business Continuity",
            },
            {
              image: "/images/it-technology/news2.jpg",
              date: "Jan 4, 2026, IT Service",
              title:
                "Cybersecurity Forecast 2026: New Threats and How to Stay Ahead",
            },
          ],
        },
        {
          featured: {
            image: "/images/financial_latest_insights.jpg",
            date: "Dec 18, 2025, IT Service",
            title:
              "Compliance Audits Simplified: A 2025 Guide to Penetration Testing Standards",
          },
          articles: [
            {
              image: "/images/it-technology/news3.jpg",
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
            image: "/images/financial_latest_insights.jpg",
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
            <img class="absolute -top-12 md:-top-32 w-16 md:w-32 lg:w-auto quote-mark font-serif" src="/images/Financial_Union.png" alt="Quote mark"/>
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
              <div class="glass-card rounded-[2rem] p-8 flex flex-col justify-between overflow-hidden h-[450px] border border-white/10 shadow-2xl relative overflow-hidden group">
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
              <div class="relative rounded-[2rem] overflow-hidden h-[450px] group shadow-2xl cursor-pointer">
                <img src="${item.image}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-8 flex flex-col justify-end">
                  <div class="mb-4">
                    <svg width="51" height="55" viewBox="0 0 51 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="${item.icon}" fill="white"/>
                    </svg>
                  </div>
                  <p class="text-[10px] tracking-[0.15em] text-white/90 uppercase mb-2 font-bold">${item.category}</p>
                  <h3 class="text-2xl font-bold text-white leading-tight">${item.title}</h3>
                </div>
                <div class="absolute inset-0 backdrop-blur-md bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500 p-8 flex flex-col justify-between border border-white/20">
                  <h3 class="text-2xl font-bold text-white">${item.title}</h3>
                  <p class="text-sm text-gray-200 font-light">${item.description || "Secure system integration."}</p>
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
                  <a href="https://teal-mule-553916.hostingersite.com/casestudy.php"
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
 
      <a href="https://teal-mule-553916.hostingersite.com/case_study_details_page.php"
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
                <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="text-cyan-500 text-xs sm:text-sm md:text-base font-bold flex items-center gap-1 hover:underline">View All News
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
