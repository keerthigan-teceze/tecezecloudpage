<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>All Services</title>
   <?php include 'header.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Inter Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Elms+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <style>
    .service-item {
      display: flex;
      align-items: center;
      gap: 1.25rem;
      width: 100%;
      padding: 1.25rem 1.5rem;
      font-size: 0.875rem;
      color: rgba(255, 255, 255, 0.75);
      background: transparent;
      border-left: 4px solid transparent;
      transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
      cursor: pointer;
    }

    /* Hover effect for ALL items */
    .service-item:hover {
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      transform: translateX(4px) scale(1.03);
    }

    /* Active state */
    .service-item.active {
      background: rgba(255, 255, 255, 0.1);
      color: #ffffff;
      border-left-color: #22d3ee;
      transform: translateX(4px);
    }

    .service-item .icon {
      width: 44px;
      height: 44px;
      border-radius: 9999px;
      background: rgba(255, 255, 255, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .bg-layer {
      font-family: Elms Sans, sans-serif;
    }

    html,
    body {
      overflow-x: hidden;
    }

    img {
      transition: opacity 0.5s ease, filter 0.5s ease;
    }

    .opacity-0 {
      filter: blur(6px);
    }
  </style>
</head>

<body class="bg-slate-900 text-white font-['Inter']">

  <!-- ================= HERO SECTION ================= -->

  <section class="relative min-h-screen overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/Service-list-hero.jpg');">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#04223a]/85 via-[#04223a]/65 to-[#04223a]/30"></div>

    <!-- Content -->
    <div class="relative z-20 min-h-screen flex items-center">
      <div class="relative w-full max-w-7xl mx-auto px-8">

        <!-- ✅ SVG BLOB (NOW VISIBLE) -->
        <svg width="685" height="883" viewBox="0 0 685 883" fill="none" xmlns="http://www.w3.org/2000/svg"
          class="absolute -left-56 -top-48 w-[850px] blur-[100px] z-0" viewBox="0 0 685 883" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.8" filter="url(#filter0_f_4176_32664)">
            <path
              d="M362.736 549.417C344.879 599.902 274.987 611.032 214.131 597.911C153.274 584.79 101.454 547.418 45.1731 524.573C-11.1074 501.728 -71.3226 494.559 -91.2641 458.574C-111.206 422.59 -90.3483 358.938 -98.2185 300.784C-106.089 242.63 -143.835 190.499 -134.096 154.132C-124.046 116.928 -67.3476 95.1766 -16.9784 92.9698C33.3908 90.763 77.4306 108.101 124.399 81.777C170.842 54.3053 221.887 -16.2059 273.057 -33.3492C325.376 -51.0175 378.968 -15.8428 396.96 35.6032C415.264 86.2131 397.13 152.783 375.614 202.859C354.934 253.247 332.02 286.617 337.496 348.64C344.12 410.139 379.445 499.456 362.736 549.417Z"
              fill="url(#paint0_linear_4176_32664)" />
          </g>
          <defs>
            <filter id="filter0_f_4176_32664" x="-415.689" y="-317.968" width="1100.19" height="1200.94"
              filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_4176_32664" />
            </filter>
            <linearGradient id="paint0_linear_4176_32664" x1="-238" y1="432.439" x2="566.37" y2="88.2991"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#00CABD" />
              <stop offset="1" stop-color="#0037A6" />
            </linearGradient>
          </defs>
        </svg>

        <!-- ✅ TEXT (ABOVE SVG) -->
        <div class="relative z-10">
          <p class="text-[18px] uppercase tracking-[0.18em] font-medium text-white mb-4">
            WHAT WE DO
          </p>

          <div class="w-full h-px bg-white/40 mb-8"></div>

          <h1 class="text-[44px] md:text-[60px] lg:text-[68px] font-light leading-[1.15] text-white max-w-4xl">
            Comprehensive IT Services<br />
            <span class="font-normal">for Modern Enterprises</span>
          </h1>

          <p class="mt-6 text-white/90 text-[16px] md:text-[18px] leading-[1.75] max-w-3xl">
            Explore our full range of solutions designed to streamline operations,
            enhance security, and drive business growth.
          </p>
        </div>

        <svg width="617" height="1190" viewBox="0 0 617 1190" fill="none" xmlns="http://www.w3.org/2000/svg"
          class="absolute -right-56 -top-48 w-[850px] blur-[100px] z-0">
          <g opacity="1" filter="url(#filter0_f_4176_32663)">
            <path
              d="M682.078 885.602C644.582 927.172 572.659 909.904 519.188 872.851C465.718 835.799 430.701 778.961 385.549 734.357C340.397 689.753 285.157 658.701 280.352 615.979C275.546 573.256 321.222 520.181 336.964 460.899C352.706 401.617 337.196 336.175 361.19 304.978C385.821 273.098 449.273 274.827 498.773 292.883C548.273 310.939 583.821 345.322 639.717 338.738C695.567 330.836 773.131 283.239 829.398 287.2C886.985 291.114 924.593 346.541 921.312 403.405C918.668 459.587 874.45 516.571 833.587 556.28C793.407 596.624 757.899 619.648 738.292 681.706C720.005 743.716 718.255 844.078 682.078 885.602Z"
              fill="url(#paint0_linear_4176_32663)" />
          </g>
          <defs>
            <filter id="filter0_f_4176_32663" x="0" y="0" width="1201.51" height="1189.75" filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_4176_32663" />
            </filter>
            <linearGradient id="paint0_linear_4176_32663" x1="149.217" y1="531.947" x2="1063.68" y2="522.604"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#00CABD" />
              <stop offset="1" stop-color="#0037A6" />
            </linearGradient>
          </defs>
        </svg>

      </div>
    </div>
    <!-- Hero → Next Section Gradient Bridge -->
    <div class="absolute bottom-0 left-0 w-full h-[260px] z-30 pointer-events-none
            bg-gradient-to-b
            from-transparent
            via-[#04223a]/70
            via-[#031226]/90
            to-[#031226]">
    </div>

  </section>

  <section class="relative bg-[#000A2D]">

    <!-- TOP RIGHT GLOW -->
    <svg width="691" height="1119" viewBox="0 0 691 1119" xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute
         -top-[0%] -right-[30%]
         w-[110vw] max-w-none
         opacity-100 z-0">
      <g opacity="0.65" filter="url(#filter0_f_tr)">
        <path
          d="M774.318 1024.53C728.22 1075.64 639.797 1054.41 574.06 1008.85C508.324 963.302 465.273 893.425 409.764 838.589C354.254 783.753 286.341 745.578 280.433 693.054C274.526 640.531 330.679 575.279 350.033 502.398C369.386 429.517 350.318 349.062 379.817 310.708C410.098 271.514 488.106 273.64 548.962 295.838C609.817 318.036 653.52 360.308 722.239 352.213C790.901 342.499 886.259 283.982 955.434 288.851C1026.23 293.664 1072.47 361.806 1068.43 431.715C1065.18 500.786 1010.82 570.841 960.584 619.66C911.186 669.26 867.532 697.566 843.428 773.859C820.946 850.095 818.794 973.481 774.318 1024.53Z"
          fill="url(#grad_tr)" />
      </g>

      <defs>
        <!-- IMPORTANT: unique IDs -->
        <filter id="filter0_f_tr" x="-50%" y="-50%" width="200%" height="200%">
          <feGaussianBlur stdDeviation="140" />
        </filter>

        <linearGradient id="grad_tr" x1="119.215" y1="589.746" x2="1243.46" y2="578.259" gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>

    <!-- BOTTOM LEFT GLOW -->
    <svg class="pointer-events-none absolute
         -bottom-[45%] -left-[45%]
         w-[130vw] max-w-none
         opacity-100 z-0" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <g opacity="0.85" filter="url(#filter0_f_4238_33926)">
        <path
          d="M366.156 870.728C348.197 921.501 277.907 932.694 216.705 919.498C155.502 906.302 103.386 868.718 46.7854 845.743C-9.81556 822.768 -70.3735 815.558 -90.4286 779.368C-110.484 743.179 -89.5075 679.165 -97.4225 620.68C-105.338 562.195 -143.299 509.767 -133.505 473.193C-123.397 435.778 -66.3758 413.902 -15.7199 411.683C34.936 409.463 79.2265 426.9 126.462 400.426C173.169 372.798 224.505 301.886 275.967 284.645C328.583 266.876 382.48 302.251 400.575 353.99C418.983 404.887 400.746 471.836 379.107 522.198C358.31 572.872 335.265 606.432 340.772 668.809C347.434 730.658 382.96 820.483 366.156 870.728Z"
          fill="url(#paint0_linear_4238_33926)" />
      </g>
      <defs>
        <filter id="filter0_f_4238_33926" x="-415.107" y="0" width="1103.26" height="1204.58"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="140" result="effect1_foregroundBlur_4238_33926" />
        </filter>
        <linearGradient id="paint0_linear_4238_33926" x1="-238" y1="753.084" x2="570.949" y2="406.985"
          gradientUnits="userSpaceOnUse">
          <stop stop-color="#00CABD" />
          <stop offset="1" stop-color="#0037A6" />
        </linearGradient>
      </defs>
    </svg>


    <!-- ================= WHAT WE DO ================= -->
    <div class="relative overflow-hidden">

      <!-- ================= BACKGROUND LAYER ================= -->
      <div class="relative overflow-hidden
pt-[52vw] pb-[16vw]
sm:pt-[36vw] sm:pb-[12vw]
md:pt-[22vw] md:pb-[7vw]
lg:pt-[28vw] lg:pb-[10vw]">

        <!-- BACKGROUND TEXT 1 -->
        <div class="absolute inset-x-0 top-[28%]
                -translate-y-1/2 pointer-events-none select-none">

          <div class="whitespace-nowrap
          text-center bg-layer
          font-black tracking-[-0.05em]
          leading-none
          text-[clamp(5rem,18vw,18rem)]
          scale-x-[0.96] sm:scale-x-100
          overflow-visible
          text-[#9fb2c6]/35">

            what we do
          </div>
        </div>

        <!-- BACKGROUND TEXT 2 (MORE VISIBLE, LOWER OPACITY) -->
        <div class="absolute inset-x-0 bottom-[2vw]
                pointer-events-none select-none
                top-[58%] -translate-y-1/2
                [mask-image:linear-gradient(to_bottom,black_0%,black_40%,transparent_85%)]">

          <div class="whitespace-nowrap
          text-center bg-layer
          font-black tracking-[-0.05em]
          leading-none
          text-[clamp(5rem,18vw,18rem)]
          scale-x-[0.96] sm:scale-x-100
          overflow-visible
          text-[#9fb2c6]/20">

            what we do
          </div>
        </div>

      </div>


      <!-- ================= FOREGROUND TEXT ================= -->
      <div class="
  relative z-20

  /* ✅ MOBILE (default) */
  -top-[50%]
  -translate-y-[100%]

  /* ✅ SMALL SCREENS */
  sm:top-[42%]
  sm:-translate-y-[160%]

  /* ✅ TABLET */
  md:top-[36%]
  md:-translate-y-[145%]

  /* ✅ LARGE */
  lg:absolute
  lg:inset-x-0
  lg:top-[30%]
  lg:-translate-y-[10%]

  /* ✅ EXTRA LARGE */
  xl:top-[30%]
">

        <div class="max-w-7xl mx-auto px-6 sm:px-10">

          <div class="
        flex flex-row
        gap-6 sm:gap-8 md:gap-10
        lg:gap-16 xl:gap-20
        items-start
      ">

            <!-- LEFT LABEL -->
            <div class="w-1/3 lg:w-[300px] font-semibold">
              <p class="text-sm sm:text-base md:text-lg lg:text-xxl text-white leading-snug max-w-lg">
                Digital Workplace <br class="hidden sm:block" />
                Delivery Framework
              </p>
            </div>

            <!-- RIGHT DESCRIPTION -->
            <div class="flex-1 max-w-3xl lg:max-w-3xl pl-8 lg:pl-16 xl:pl-24">
              <p class="text-white text-sm sm:text-lg md:text-xl lg:text-3xl leading-relaxed whitespace-pre-line">
                A structured approach ensures secure
                deployment, optimized performance, and
                continuous improvement across workplace
                environments.
              </p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- ================= SERVICES + DETAIL CARD ================= -->
    <div class="relative translate-y-[-6rem] sm:translate-y-[-8rem] lg:translate-y-[-10rem]">

      <div class="relative z-10 max-w-7xl mx-auto pt-6 md:pt-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

          <!-- LEFT LIST -->
          <div class="lg:col-span-4 z-20">
            <ul class="divide-y divide-white/15 border-b border-white/15">

              <!-- ACTIVE (DEFAULT) -->
              <li>
                <button class="service-item active" data-service="0">
                  <span class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M22.5 18H21.75V5.25C21.75 4.85218 21.592 4.47064 21.3107 4.18934C21.0294 3.90804 20.6478 3.75 20.25 3.75H3.75C3.35218 3.75 2.97064 3.90804 2.68934 4.18934C2.40804 4.47064 2.25 4.85218 2.25 5.25V18H1.5C1.30109 18 1.11032 18.079 0.96967 18.2197C0.829018 18.3603 0.75 18.5511 0.75 18.75C0.75 18.9489 0.829018 19.1397 0.96967 19.2803C1.11032 19.421 1.30109 19.5 1.5 19.5H22.5C22.6989 19.5 22.8897 19.421 23.0303 19.2803C23.171 19.1397 23.25 18.9489 23.25 18.75C23.25 18.5511 23.171 18.3603 23.0303 18.2197C22.8897 18.079 22.6989 18 22.5 18ZM3.75 5.25H20.25V18H18.75V15.75C18.75 15.5511 18.671 15.3603 18.5303 15.2197C18.3897 15.079 18.1989 15 18 15H11.25C11.0511 15 10.8603 15.079 10.7197 15.2197C10.579 15.3603 10.5 15.5511 10.5 15.75V18H6.75V8.25H17.25V12.75C17.25 12.9489 17.329 13.1397 17.4697 13.2803C17.6103 13.421 17.8011 13.5 18 13.5C18.1989 13.5 18.3897 13.421 18.5303 13.2803C18.671 13.1397 18.75 12.9489 18.75 12.75V7.5C18.75 7.30109 18.671 7.11032 18.5303 6.96967C18.3897 6.82902 18.1989 6.75 18 6.75H6C5.80109 6.75 5.61032 6.82902 5.46967 6.96967C5.32902 7.11032 5.25 7.30109 5.25 7.5V18H3.75V5.25ZM17.25 18H12V16.5H17.25V18Z"
                        fill="white" />
                    </svg>
                  </span>
                  <span class="text-lg">Digital Workspace</span>
                </button>
              </li>

              <li>
                <button class="service-item" data-service="1">
                  <span class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M19.5 3.75H4.5C4.10218 3.75 3.72064 3.90804 3.43934 4.18934C3.15804 4.47064 3 4.85218 3 5.25V10.5C3 15.4425 5.3925 18.4378 7.39969 20.0803C9.56156 21.8484 11.7122 22.4484 11.8059 22.4738C11.9348 22.5088 12.0708 22.5088 12.1997 22.4738C12.2934 22.4484 14.4413 21.8484 16.6059 20.0803C18.6075 18.4378 21 15.4425 21 10.5V5.25C21 4.85218 20.842 4.47064 20.5607 4.18934C20.2794 3.90804 19.8978 3.75 19.5 3.75ZM19.5 10.5C19.5 13.9753 18.2194 16.7962 15.6937 18.8831C14.5943 19.7885 13.344 20.493 12 20.9644C10.6736 20.5012 9.4387 19.8092 8.35125 18.9197C5.79563 16.8291 4.5 13.9969 4.5 10.5V5.25H19.5V10.5ZM7.71937 13.2806C7.57864 13.1399 7.49958 12.949 7.49958 12.75C7.49958 12.551 7.57864 12.3601 7.71937 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44902 11.9996 8.63989 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8485 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1217 15.6557 10.039 15.6004 9.96937 15.5306L7.71937 13.2806Z"
                        fill="white" />
                    </svg>
                  </span>
                  <span class="text-lg">Cyber Security</span>
                </button>
              </li>

              <li>
                <button class="service-item" data-service="2">
                  <span class="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M15.0008 3.75C13.4687 3.75118 11.967 4.17857 10.6639 4.98437C9.3607 5.79017 8.3074 6.94262 7.62176 8.31281C6.80609 8.19385 5.97467 8.24424 5.17934 8.46082C4.38401 8.67741 3.64184 9.05555 2.99912 9.57166C2.3564 10.0878 1.82692 10.7308 1.4437 11.4606C1.06048 12.1904 0.831747 12.9913 0.771766 13.8134C0.711785 14.6355 0.821843 15.4612 1.09507 16.2388C1.36831 17.0165 1.79885 17.7296 2.35985 18.3335C2.92085 18.9375 3.60028 19.4193 4.35575 19.749C5.11122 20.0788 5.92653 20.2493 6.75082 20.25H15.0008C17.1889 20.25 19.2873 19.3808 20.8345 17.8336C22.3816 16.2865 23.2508 14.188 23.2508 12C23.2508 9.81196 22.3816 7.71354 20.8345 6.16637C19.2873 4.61919 17.1889 3.75 15.0008 3.75ZM15.0008 18.75H6.75082C5.55735 18.75 4.41275 18.2759 3.56884 17.432C2.72493 16.5881 2.25082 15.4435 2.25082 14.25C2.25082 13.0565 2.72493 11.9119 3.56884 11.068C4.41275 10.2241 5.55735 9.75 6.75082 9.75C6.85394 9.75 6.95707 9.75 7.05926 9.76031C6.85415 10.4892 6.75037 11.2428 6.75082 12C6.75082 12.1989 6.82984 12.3897 6.97049 12.5303C7.11114 12.671 7.30191 12.75 7.50082 12.75C7.69973 12.75 7.8905 12.671 8.03115 12.5303C8.1718 12.3897 8.25082 12.1989 8.25082 12C8.25082 10.665 8.6467 9.35993 9.3884 8.2499C10.1301 7.13987 11.1843 6.2747 12.4177 5.76381C13.6511 5.25292 15.0083 5.11925 16.3177 5.3797C17.6271 5.64015 18.8298 6.28302 19.7738 7.22703C20.7178 8.17103 21.3607 9.37377 21.6211 10.6831C21.8816 11.9925 21.7479 13.3497 21.237 14.5831C20.7261 15.8165 19.861 16.8707 18.7509 17.6124C17.6409 18.3541 16.3358 18.75 15.0008 18.75ZM18.5314 9.96937C18.6012 10.039 18.6565 10.1217 18.6942 10.2128C18.732 10.3038 18.7514 10.4014 18.7514 10.5C18.7514 10.5986 18.732 10.6962 18.6942 10.7872C18.6565 10.8783 18.6012 10.961 18.5314 11.0306L14.0314 15.5306C13.9618 15.6004 13.8791 15.6557 13.788 15.6934C13.697 15.7312 13.5994 15.7506 13.5008 15.7506C13.4023 15.7506 13.3047 15.7312 13.2136 15.6934C13.1226 15.6557 13.0398 15.6004 12.9702 15.5306L10.7202 13.2806C10.5795 13.1399 10.5004 12.949 10.5004 12.75C10.5004 12.551 10.5795 12.3601 10.7202 12.2194C10.8609 12.0786 11.0518 11.9996 11.2508 11.9996C11.4498 11.9996 11.6407 12.0786 11.7814 12.2194L13.5008 13.9397L17.4702 9.96937C17.5398 9.89964 17.6226 9.84432 17.7136 9.80658C17.8047 9.76884 17.9023 9.74941 18.0008 9.74941C18.0994 9.74941 18.197 9.76884 18.288 9.80658C18.3791 9.84432 18.4618 9.89964 18.5314 9.96937Z"
                        fill="white" />
                    </svg>

                  </span>
                  <span class="text-lg">Cloud Infrastructure</span>
                </button>
              </li>

              <li>
                <button class="service-item" data-service="3">
                  <span class="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M20.25 6.75C20.25 6.94891 20.171 7.13968 20.0303 7.28033C19.8897 7.42098 19.6989 7.5 19.5 7.5H16.5C16.3011 7.5 16.1103 7.42098 15.9697 7.28033C15.829 7.13968 15.75 6.94891 15.75 6.75C15.75 6.55109 15.829 6.36032 15.9697 6.21967C16.1103 6.07902 16.3011 6 16.5 6H19.5C19.6989 6 19.8897 6.07902 20.0303 6.21967C20.171 6.36032 20.25 6.55109 20.25 6.75ZM19.5 9H16.5C16.3011 9 16.1103 9.07902 15.9697 9.21967C15.829 9.36032 15.75 9.55109 15.75 9.75C15.75 9.94891 15.829 10.1397 15.9697 10.2803C16.1103 10.421 16.3011 10.5 16.5 10.5H19.5C19.6989 10.5 19.8897 10.421 20.0303 10.2803C20.171 10.1397 20.25 9.94891 20.25 9.75C20.25 9.55109 20.171 9.36032 20.0303 9.21967C19.8897 9.07902 19.6989 9 19.5 9ZM23.25 4.5V19.5C23.25 19.8978 23.092 20.2794 22.8107 20.5607C22.5294 20.842 22.1478 21 21.75 21H14.25C13.8522 21 13.4706 20.842 13.1893 20.5607C12.908 20.2794 12.75 19.8978 12.75 19.5V18H9V19.5H10.5C10.6989 19.5 10.8897 19.579 11.0303 19.7197C11.171 19.8603 11.25 20.0511 11.25 20.25C11.25 20.4489 11.171 20.6397 11.0303 20.7803C10.8897 20.921 10.6989 21 10.5 21H6C5.80109 21 5.61032 20.921 5.46967 20.7803C5.32902 20.6397 5.25 20.4489 5.25 20.25C5.25 20.0511 5.32902 19.8603 5.46967 19.7197C5.61032 19.579 5.80109 19.5 6 19.5H7.5V18H3C2.40326 18 1.83097 17.7629 1.40901 17.341C0.987053 16.919 0.75 16.3467 0.75 15.75V9C0.75 8.40326 0.987053 7.83097 1.40901 7.40901C1.83097 6.98705 2.40326 6.75 3 6.75H12.75V4.5C12.75 4.10218 12.908 3.72064 13.1893 3.43934C13.4706 3.15804 13.8522 3 14.25 3H21.75C22.1478 3 22.5294 3.15804 22.8107 3.43934C23.092 3.72064 23.25 4.10218 23.25 4.5ZM12.75 16.5V8.25H3C2.80109 8.25 2.61032 8.32902 2.46967 8.46967C2.32902 8.61032 2.25 8.80109 2.25 9V15.75C2.25 15.9489 2.32902 16.1397 2.46967 16.2803C2.61032 16.421 2.80109 16.5 3 16.5H12.75ZM21.75 19.5V4.5H14.25V19.5H21.75ZM18 15.75C17.7775 15.75 17.56 15.816 17.375 15.9396C17.19 16.0632 17.0458 16.2389 16.9606 16.4445C16.8755 16.65 16.8532 16.8762 16.8966 17.0945C16.94 17.3127 17.0472 17.5132 17.2045 17.6705C17.3618 17.8278 17.5623 17.935 17.7805 17.9784C17.9988 18.0218 18.225 17.9995 18.4305 17.9144C18.6361 17.8292 18.8118 17.685 18.9354 17.5C19.059 17.315 19.125 17.0975 19.125 16.875C19.125 16.5766 19.0065 16.2905 18.7955 16.0795C18.5845 15.8685 18.2984 15.75 18 15.75Z"
                        fill="white" />
                    </svg>

                  </span>
                  <span class="text-lg">Application Development</span>
                </button>
              </li>

              <li>
                <button class="service-item" data-service="4">
                  <span class="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.75 15.75H21V6.75C21 6.15326 20.7629 5.58097 20.341 5.15901C19.919 4.73705 19.3467 4.5 18.75 4.5H5.25C4.65326 4.5 4.08097 4.73705 3.65901 5.15901C3.23705 5.58097 3 6.15326 3 6.75V15.75H2.25C2.05109 15.75 1.86032 15.829 1.71967 15.9697C1.57902 16.1103 1.5 16.3011 1.5 16.5V18C1.5 18.5967 1.73705 19.169 2.15901 19.591C2.58097 20.0129 3.15326 20.25 3.75 20.25H20.25C20.8467 20.25 21.419 20.0129 21.841 19.591C22.2629 19.169 22.5 18.5967 22.5 18V16.5C22.5 16.3011 22.421 16.1103 22.2803 15.9697C22.1397 15.829 21.9489 15.75 21.75 15.75ZM4.5 6.75C4.5 6.55109 4.57902 6.36032 4.71967 6.21967C4.86032 6.07902 5.05109 6 5.25 6H18.75C18.9489 6 19.1397 6.07902 19.2803 6.21967C19.421 6.36032 19.5 6.55109 19.5 6.75V15.75H4.5V6.75ZM21 18C21 18.1989 20.921 18.3897 20.7803 18.5303C20.6397 18.671 20.4489 18.75 20.25 18.75H3.75C3.55109 18.75 3.36032 18.671 3.21967 18.5303C3.07902 18.3897 3 18.1989 3 18V17.25H21V18ZM14.25 8.25C14.25 8.44891 14.171 8.63968 14.0303 8.78033C13.8897 8.92098 13.6989 9 13.5 9H10.5C10.3011 9 10.1103 8.92098 9.96967 8.78033C9.82902 8.63968 9.75 8.44891 9.75 8.25C9.75 8.05109 9.82902 7.86032 9.96967 7.71967C10.1103 7.57902 10.3011 7.5 10.5 7.5H13.5C13.6989 7.5 13.8897 7.57902 14.0303 7.71967C14.171 7.86032 14.25 8.05109 14.25 8.25Z"
                        fill="white" />
                    </svg>

                  </span>
                  <span class="text-lg">Managed IT</span>
                </button>
              </li>

              <li>
                <button class="service-item" data-service="5">
                  <span class="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M20.97 6.20158L12.72 1.68752C12.4996 1.56572 12.2518 1.50183 12 1.50183C11.7482 1.50183 11.5004 1.56572 11.28 1.68752L3.03 6.20345C2.7944 6.33237 2.59772 6.52217 2.46052 6.75304C2.32331 6.98391 2.25061 7.24739 2.25 7.51595V16.4822C2.25061 16.7508 2.32331 17.0142 2.46052 17.2451C2.59772 17.476 2.7944 17.6658 3.03 17.7947L11.28 22.3106C11.5004 22.4324 11.7482 22.4963 12 22.4963C12.2518 22.4963 12.4996 22.4324 12.72 22.3106L20.97 17.7947C21.2056 17.6658 21.4023 17.476 21.5395 17.2451C21.6767 17.0142 21.7494 16.7508 21.75 16.4822V7.51689C21.7499 7.24785 21.6774 6.98379 21.5402 6.75238C21.403 6.52096 21.206 6.33072 20.97 6.20158ZM12 3.00002L19.5319 7.12502L16.7409 8.65314L9.20813 4.52814L12 3.00002ZM12 11.25L4.46812 7.12502L7.64625 5.38502L15.1781 9.51002L12 11.25ZM3.75 8.43752L11.25 12.5419V20.5847L3.75 16.4831V8.43752ZM20.25 16.4794L12.75 20.5847V12.5456L15.75 10.9041V14.25C15.75 14.4489 15.829 14.6397 15.9697 14.7803C16.1103 14.921 16.3011 15 16.5 15C16.6989 15 16.8897 14.921 17.0303 14.7803C17.171 14.6397 17.25 14.4489 17.25 14.25V10.0828L20.25 8.43752V16.4785V16.4794Z"
                        fill="white" />
                    </svg>

                  </span>
                  <span class="text-lg">Global Procurement</span>
                </button>
              </li>

            </ul>
          </div>

          <!-- RIGHT CARD -->
          <div class="lg:col-span-8 flex justify-end">
            <div class="relative w-full max-w-4xl">

              <!-- IMAGE + GLOW WRAPPER -->
              <div class="relative">

                <!-- IMAGE -->
                <div class="relative h-[350px]
                  bg-[#022035] rounded-lg overflow-hidden
                  border border-white/20 shadow-lg z-10">
                  <div class="relative w-full h-full">
                    <img id="imgA"
                      class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-100" />
                    <img id="imgB"
                      class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0" />
                  </div>
                </div>
              </div>

              <!-- TEXT CONTENT -->
              <div class="mt-8 max-w-3xl px-4 sm:px-6 md:px-0">
                <h3 class="text-3xl lg:text-4xl font-lighter text-white mb-4 leading-tight" id="serviceTitle">
                  Digital Workplace Built for Modern <br />Organizations
                </h3>

                <p class="text-white/80 text-md leading-relaxed mb-6 text-justify px-5px" id="serviceDescription">
                  Digital workplace solutions are designed to enhance collaboration,
                  improve productivity, and provide secure access to business tools
                  from anywhere. These environments support modern workstyles,
                  streamline operations, and strengthen day‑to‑day performance
                  across teams.
                </p>

                <button class="group relative inline-flex items-center gap-3
         px-4 py-2 rounded-full
         border border-white/40
         bg-white/5 z-10
         text-lg font-semibold text-white
         transition-colors duration-300 ease-out
         hover:border-cyan-400">
                  <!-- Arrow Icon -->
                  <span class="w-9 h-9 rounded-full
           flex items-center justify-center
           bg-gradient-to-br from-[#13C5B8] to-[#2A44B0]">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="text-black">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779C17.3753 9.61584 17.4214 9.68477 17.4529 9.76064C17.4843 9.83652 17.5005 9.91785 17.5005 9.99998C17.5005 10.0821 17.4843 10.1634 17.4529 10.2393C17.4214 10.3152 17.3753 10.3841 17.3172 10.4422Z"
                        fill="currentColor" />
                    </svg>
                  </span>

                  <!-- Text -->
                  <span>Explore More</span>
                </button>
              </div>

            </div>
          </div>
        </div>
  </section>


  <!-- ================= LATEST INSIGHTS (WHITE BACKGROUND) ================= -->
  <section class="relative overflow-x-hidden bg-white py-20 sm:py-40">

    <!-- BACKGROUND TEXT LAYER 1 -->
    <div class="absolute inset-x-0 top-[4%] sm:top-[8%] -translate-y-1/2 pointer-events-none select-none">
      <div class="text-center bg-layer whitespace-nowrap font-black tracking-[-0.06em] text-[15vw] text-gray-200/60">
        latest insights
      </div>
    </div>

    <!-- BACKGROUND TEXT LAYER 2 -->
    <div class="absolute inset-x-0 sm:top-[20%] -translate-y-1/2 pointer-events-none select-none">
      <div
        class="text-center bg-layer whitespace-nowrap font-black tracking-[-0.06em] text-[15vw] text-gray-200/60 hidden sm:block">
        latest insights
      </div>
    </div>

    <!-- BACKGROUND TEXT LAYER 3 -->
    <div class="absolute inset-x-0 sm:top-[32%] -translate-y-1/2 pointer-events-none select-none">
      <div
        class="text-center bg-layer whitespace-nowrap font-black tracking-[-0.06em] text-[15vw] text-gray-200/20 hidden sm:block">
        latest insights
      </div>
    </div>

    <!-- FOREGROUND CONTENT -->
    <div class="relative z-10 max-w-8xl mx-auto px-6">

      <!-- FEATURED IMAGE CARD -->
      <div class="mt-[16vw]">
        <div class="relative w-full max-w-7xl mx-auto rounded-2xl overflow-hidden shadow-xl">

          <img src="/images/welcome-tell-us-something-about-your-work-experience.jpg" alt="Featured insight"
            class="w-full h-[676px] object-cover" />

          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

          <div class="absolute bottom-0 left-0 p-10 max-w-3xl text-white">
            <p class="text-md font-bold text-white/80 mb-3">
              Dec 16, 2025, IT Service
            </p>

            <h3 class="text-2xl md:text-3xl font-semibold leading-snug mb-6">
              Compliance Audits Simplified: A 2025 Guide to <br />
              Penetration Testing Standards
            </h3>

            <a href="#">
              <button class="group relative inline-flex items-center gap-3
         px-4 py-2 rounded-full
         border border-white/40
         bg-white/5
         text-lg font-semibold text-white
         transition-colors duration-300 ease-out
         hover:border-cyan-400">
                <!-- Arrow Icon -->
                <span class="w-9 h-9 rounded-full
           flex items-center justify-center
           bg-gradient-to-br from-[#13C5B8] to-[#2A44B0]">
                  <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="text-black">
                    <path
                      d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779C17.3753 9.61584 17.4214 9.68477 17.4529 9.76064C17.4843 9.83652 17.5005 9.91785 17.5005 9.99998C17.5005 10.0821 17.4843 10.1634 17.4529 10.2393C17.4214 10.3152 17.3753 10.3841 17.3172 10.4422Z"
                      fill="currentColor" />
                  </svg>
                </span>

                <!-- Text -->
                <span>View All Insights</span>
              </button>
            </a>
          </div>

        </div>
      </div>


      <!-- ✅ LOWER PART WITH 5 ITEMS (SLIDER READY) -->
      <div class="mt-12 max-w-7xl mx-auto px-4">

        <!-- VIEWPORT -->
        <div class="overflow-hidden w-full relative">

          <!-- TRACK -->
          <div id="newsTrack" data-swipe
            class="flex flex-nowrap text-black gap-16 items-start transition-transform duration-700 ease-[cubic-bezier(.4,0,.2,1)]">
            <!-- ITEM 1 -->
            <div class="news-item flex flex-col sm:flex-row gap-6 sm:gap-10 w-full sm:w-[600px] lg:w-[608px] shrink-0 cursor-grab active:cursor-grabbing
            rounded-2xl transition-all duration-300 ease-out
            hover:-transl ate-y-1
            hover:shadow-[0_10px_30px_rgba(0,0,0,0.10)]">

              <img src="/images/business-partners-discussing-bargn-detls.jpg"
                class="w-full sm:w-48 aspect-[4/5] sm:h-56 rounded-2xl object-cover flex-shrink-0" />

              <div>
                <p class="text-sm sm:text-lg font-semibold mb-2">
                  Dec 16, 2025 · IT Service
                </p>

                <h4 class="text-lg sm:text-2xl font-semibold leading-snug mb-3 w-full sm:w-[400px]">
                  How Managed IT Services <br />
                  Improve Business <br />
                  Continuity
                </h4>
                <a href="#" class="group inline-flex items-center gap-2 text-base sm:text-lg font-medium mt-4 sm:mt-6">
                  <!-- TEXT -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:bg-gradient-to-b
           group-hover:from-[#0077B6]
           group-hover:to-[#4FC3F7]
           group-hover:bg-clip-text
           group-hover:text-transparent">
                    View All News
                  </span>

                  <!-- ARROW -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:text-[#0077B6]
           group-hover:translate-x-1.5">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- ITEM 2 -->
            <div class="news-item flex flex-col sm:flex-row gap-6 sm:gap-10 w-full sm:w-[600px] lg:w-[608px] shrink-0 cursor-grab active:cursor-grabbing
            rounded-2xl transition-all duration-300 ease-out
            hover:-translate-y-1
            hover:shadow-[0_10px_30px_rgba(0,0,0,0.10)]">

              <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                class="w-full sm:w-48 aspect-[4/5] sm:h-56 rounded-2xl object-cover flex-shrink-0" />

              <div>
                <p class="text-sm sm:text-lg font-semibold mb-2">
                  Jan 4, 2026 · IT Service
                </p>

                <h4 class="text-lg sm:text-2xl font-semibold leading-snug mb-3">
                  A Practical Guide to<br />
                  smarter Technology<br />
                  Procurement
                </h4>

                <a href="#" class="group inline-flex items-center gap-2 text-base sm:text-lg font-medium mt-4 sm:mt-6">
                  <!-- TEXT -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:bg-gradient-to-b
           group-hover:from-[#0077B6]
           group-hover:to-[#4FC3F7]
           group-hover:bg-clip-text
           group-hover:text-transparent">
                    View All News
                  </span>

                  <!-- ARROW -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:text-[#0077B6]
           group-hover:translate-x-1.5">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- ITEM 3 -->
            <div class="news-item flex flex-col sm:flex-row gap-6 sm:gap-10 w-full sm:w-[600px] lg:w-[608px] shrink-0 cursor-grab active:cursor-grabbing
            rounded-2xl transition-all duration-300 ease-out
            hover:-translate-y-1
            hover:shadow-[0_10px_30px_rgba(0,0,0,0.10)]">

              <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
                class="w-full sm:w-48 aspect-[4/5] sm:h-56 rounded-2xl object-cover flex-shrink-0" />

              <div>
                <p class="text-sm sm:text-lg font-semibold mb-2">
                  Feb 12, 2026 · Cloud
                </p>

                <h4 class="text-lg sm:text-2xl font-semibold leading-snug mb-3">
                  Why Cloud Modernization <br />
                  Is Critical for <br />
                  Enterprise Growth
                </h4>

                <a href="#" class="group inline-flex items-center gap-2 text-base sm:text-lg font-medium mt-4 sm:mt-6">
                  <!-- TEXT -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:bg-gradient-to-b
           group-hover:from-[#0077B6]
           group-hover:to-[#4FC3F7]
           group-hover:bg-clip-text
           group-hover:text-transparent">
                    View All News
                  </span>

                  <!-- ARROW -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:text-[#0077B6]
           group-hover:translate-x-1.5">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- ITEM 4 -->
            <div class="news-item flex flex-col sm:flex-row gap-6 sm:gap-10 w-full sm:w-[600px] lg:w-[608px] shrink-0  cursor-grab active:cursor-grabbing
          rounded-2xl transition-all duration-300 ease-out
            hover:-translate-y-1
            hover:shadow-[0_10px_30px_rgba(0,0,0,0.10)]">

              <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c"
                class="w-full sm:w-48 aspect-[4/5] sm:h-56 rounded-2xl object-cover flex-shrink-0" />

              <div>
                <p class="text-sm sm:text-lg font-semibold mb-2">
                  Mar 3, 2026 · Security
                </p>

                <h4 class="text-lg sm:text-2xl font-semibold leading-snug mb-3">
                  Zero‑Trust Security <br />
                  Explained for <br />
                  Modern Businesses
                </h4>

                <a href="#" class="group inline-flex items-center gap-2 text-base sm:text-lg font-medium mt-4 sm:mt-6">
                  <!-- TEXT -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:bg-gradient-to-b
           group-hover:from-[#0077B6]
           group-hover:to-[#4FC3F7]
           group-hover:bg-clip-text
           group-hover:text-transparent">
                    View All News
                  </span>

                  <!-- ARROW -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:text-[#0077B6]
           group-hover:translate-x-1.5">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- ITEM 5 -->
            <div class="news-item flex flex-col sm:flex-row gap-6 sm:gap-10 w-full sm:w-[600px] lg:w-[608px] shrink-0 cursor-grab active:cursor-grabbing
                       rounded-2xl transition-all duration-300 ease-out
            hover:-translate-y-1
            hover:shadow-[0_10px_30px_rgba(0,0,0,0.10)]">

              <img src="https://images.unsplash.com/photo-1526378722484-bd91ca387e72"
                class="w-full sm:w-48 aspect-[4/5] sm:h-56 rounded-2xl object-cover flex-shrink-0" />

              <div>
                <p class="text-sm sm:text-lg font-semibold mb-2">
                  Apr 18, 2026 · Digital
                </p>

                <h4 class="text-lg sm:text-2xl font-semibold leading-snug mb-3">
                  Building High‑Performance <br />
                  Digital Workplaces <br />
                  in 2026
                </h4>

                <a href="#" class="group inline-flex items-center gap-2 text-base sm:text-lg font-medium mt-4 sm:mt-6">
                  <!-- TEXT -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:bg-gradient-to-b
           group-hover:from-[#0077B6]
           group-hover:to-[#4FC3F7]
           group-hover:bg-clip-text
           group-hover:text-transparent">
                    View All News
                  </span>

                  <!-- ARROW -->
                  <span class="text-[#00A79E] 
           transition-all duration-300
           group-hover:text-[#0077B6]
           group-hover:translate-x-1.5">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.5749 16.1844 11.4159 16.2503 11.25 16.2503C11.0841 16.2503 10.9251 16.1844 10.8078 16.0672C10.6905 15.9499 10.6247 15.7908 10.6247 15.625C10.6247 15.4591 10.6905 15.3001 10.8078 15.1828L15.3664 10.625H3.125C2.95924 10.625 2.80027 10.5591 2.68306 10.4419C2.56585 10.3247 2.5 10.1657 2.5 9.99998C2.5 9.83422 2.56585 9.67525 2.68306 9.55804C2.80027 9.44083 2.95924 9.37498 3.125 9.37498H15.3664L10.8078 4.81717C10.6905 4.69989 10.6247 4.54083 10.6247 4.37498C10.6247 4.20913 10.6905 4.05007 10.8078 3.93279C10.9251 3.81552 11.0841 3.74963 11.25 3.74963C11.4159 3.74963 11.5749 3.81552 11.6922 3.93279L17.3172 9.55779Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- PAGINATION -->
        <div class="mt-5 flex items-center justify-between">
          <div class="hidden sm:flex items-end gap-2">
            <span id="currentIndex"
              class="text-8xl font-bold bg-gradient-to-t from-[#13C5B8] to-[#2A44B0] bg-clip-text text-transparent">
              01
            </span>
            <span class="text-gray-400 mb-2">/</span>
            <span id="totalCount" class="text-gray-400 text-2xl font-bold mb-2">05</span>
          </div>

          <div class="hidden sm:flex gap-3 absolute bottom-4 right-4 sm:static">
            <button id="prevBtn"
              class="border border-[#000A2D] text-[#000A2D] rounded-full hover:border-cyan-500 hover:text-cyan-500 transition-colors">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-0.5" y="0.5" width="49" height="49" rx="24.5" transform="matrix(-1 0 0 1 49 0)"
                  stroke="currentColor" />
                <path
                  d="M16.2194 25.5306L22.9694 32.2806C23.1101 32.4213 23.301 32.5003 23.5 32.5003C23.699 32.5003 23.8899 32.4213 24.0306 32.2806C24.1714 32.1398 24.2504 31.949 24.2504 31.7499C24.2504 31.5509 24.1714 31.36 24.0306 31.2193L18.5603 25.7499H33.25C33.4489 25.7499 33.6397 25.6709 33.7803 25.5303C33.921 25.3896 34 25.1988 34 24.9999C34 24.801 33.921 24.6103 33.7803 24.4696C33.6397 24.3289 33.4489 24.2499 33.25 24.2499H18.5603L24.0306 18.7806C24.1714 18.6398 24.2504 18.449 24.2504 18.2499C24.2504 18.0509 24.1714 17.86 24.0306 17.7193C23.8899 17.5786 23.699 17.4995 23.5 17.4995C23.301 17.4995 23.1101 17.5786 22.9694 17.7193L16.2194 24.4693C16.1496 24.539 16.0943 24.6217 16.0566 24.7127C16.0188 24.8038 15.9994 24.9014 15.9994 24.9999C15.9994 25.0985 16.0188 25.1961 16.0566 25.2871C16.0943 25.3782 16.1496 25.4609 16.2194 25.5306Z"
                  fill="currentColor" />
              </svg>
            </button>
            <button id="nextBtn"
              class="border border-[#000A2D] text-[#000A2D] rounded-full hover:border-cyan-500 hover:text-cyan-500 transition-colors">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="49" height="49" rx="24.5" stroke="currentColor" />
                <path
                  d="M33.7806 25.5306L27.0306 32.2806C26.8899 32.4213 26.699 32.5003 26.5 32.5003C26.301 32.5003 26.1101 32.4213 25.9694 32.2806C25.8286 32.1398 25.7496 31.949 25.7496 31.7499C25.7496 31.5509 25.8286 31.36 25.9694 31.2193L31.4397 25.7499H16.75C16.5511 25.7499 16.3603 25.6709 16.2197 25.5303C16.079 25.3896 16 25.1988 16 24.9999C16 24.801 16.079 24.6103 16.2197 24.4696C16.3603 24.3289 16.5511 24.2499 16.75 24.2499H31.4397L25.9694 18.7806C25.8286 18.6398 25.7496 18.449 25.7496 18.2499C25.7496 18.0509 25.8286 17.86 25.9694 17.7193C26.1101 17.5786 26.301 17.4995 26.5 17.4995C26.699 17.4995 26.8899 17.5786 27.0306 17.7193L33.7806 24.4693C33.8504 24.539 33.9057 24.6217 33.9434 24.7127C33.9812 24.8038 34.0006 24.9014 34.0006 24.9999C34.0006 25.0985 33.9812 25.1961 33.9434 25.2871C33.9057 25.3782 33.8504 25.4609 33.7806 25.5306Z"
                  fill="currentColor" />
              </svg>
            </button>
          </div>
        </div>

        <!-- ================= GET IN TOUCH CTA ================= -->
        <div class="mt-8 max-w-7xl mx-auto px-4 sm:px-0">

          <div class="relative rounded-2xl overflow-hidden
              h-[260px] sm:h-[320px]">

            <!-- Background Image -->
            <img src="/images/bg-get-in-touch.jpg" alt="CTA Background" class="absolute inset-0 w-full h-full object-cover object-center
             filter brightness-110 contrast-90 saturate-110" />

            <!-- Gradient Overlay -->
            <div class="absolute inset-0
                bg-gradient-to-r
                from-[#020b2a]/95 via-blue-900/90 to-cyan-600/90">
            </div>

            <!-- Content -->
            <div class="relative z-10 h-full
             flex items-center justify-center sm:justify-start
             px-6 sm:px-12 text-white text-center sm:text-left">

              <div class="max-w-xl">

                <!-- Eyebrow -->
                <p class="text-xs sm:text-sm font-semibold mb-2 sm:mb-3 tracking-wide uppercase">
                  Get in Touch
                </p>

                <!-- Heading -->
                <h3 class="text-xl sm:text-3xl leading-snug sm:leading-tight mb-3 sm:mb-4">
                  Start with a Clear Security
                  <br class="hidden sm:block" />
                  Assessment
                </h3>

                <!-- Description -->
                <p class="text-white/80 text-sm sm:text-base mb-5 sm:mb-6">
                  Let’s discuss how Teceze can deliver for your
                  <br class="hidden sm:block" />
                  organization.
                </p>

                <!-- CTA Button -->
                <button class="group relative inline-flex items-center gap-3
                 px-5 py-3 sm:px-4 sm:py-2
                 rounded-full
                 border border-white/40
                 bg-white/5
                 text-base sm:text-lg font-semibold text-white
                 backdrop-blur-sm
                 transition-all duration-300 ease-out
                 hover:border-cyan-400
                 hover:bg-white/10">

                  <!-- Arrow Icon -->
                  <span class="w-10 h-10 sm:w-9 sm:h-9 rounded-full
                   flex items-center justify-center
                   bg-gradient-to-br from-cyan-400 to-blue-500
                   transition-transform duration-300
                   group-hover:translate-x-1">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="text-black">
                      <path
                        d="M17.3172 10.4422L11.6922 16.0672C11.4459 16.3134 11.0541 16.3134 10.8078 16.0672C10.5616 15.8209 10.5616 15.4291 10.8078 15.1828L15.3664 10.625H3.125C2.77982 10.625 2.5 10.3452 2.5 10C2.5 9.65482 2.77982 9.375 3.125 9.375H15.3664L10.8078 4.81717C10.5616 4.57089 10.5616 4.17911 10.8078 3.93283C11.0541 3.68655 11.4459 3.68655 11.6922 3.93283L17.3172 9.55779C17.5634 9.80407 17.5634 10.1959 17.3172 10.4422Z"
                        fill="currentColor" />
                    </svg>
                  </span>

                  <!-- Text -->
                  <span>View All Insights</span>
                </button>

              </div>
            </div>
          </div>
        </div>
  </section>

</body>

<script>
  const serviceData = [
    {
      title: "Digital Workplace Built for Modern Organizations",
      description: "Digital workplace solutions designed to enhance collaboration, improve productivity, and provide secure access to business tools from anywhere. These environments support flexible workstyles, streamline operations, and strengthen day-to-day performance across teams.",
      image: "/images/modern-office-workspace-blue-computer-setup.jpg"
    },
    {
      title: "Security That Protects What Matters Most",
      description: "End-to-end cybersecurity solutions that safeguard your people, data, and systems from evolving threats. From threat detection and identity management to compliance and incident response, Teceze keeps your organisation secure without slowing it down.",
      image: "/images/cybersecurity-data-protection-concept.jpg"
    },
    {
      title: "Cloud Environments Built for Performance and Scale",
      description: "Scalable cloud infrastructure solutions that help organisations migrate, manage, and optimise their environments with confidence. Teceze ensures high availability, cost efficiency, and security across public, private, and hybrid cloud deployments.",
      image: "/images/cloud-computing-data-center.jpg"
    },
    {
      title: "Applications Designed Around Your Business Needs",
      description: "Custom application development that turns complex business requirements into reliable, scalable software. From web and mobile applications to enterprise platforms, Teceze builds solutions that improve user experience, automate processes, and support long-term growth.",
      image: "/images/woman-holding-tablet-with-digital-data-visualization.jpg"
    },
    {
      title: "Reliable IT Management So You Can Focus on Growth",
      description: "Proactive managed IT services that keep your infrastructure running at peak performance. Teceze handles monitoring, maintenance, support, and optimisation reducing downtime, controlling costs, and freeing your internal teams to focus on strategic priorities.",
      image: "/images/man-working-laptop-elevator-with-blue-background.jpg"
    },
    {
      title: "Smarter Procurement Across Global Markets",
      description: "End-to-end technology procurement services that help organisations source, evaluate, and acquire the right hardware, software, and solutions at the right value. Teceze manages supplier relationships and logistics to simplify procurement across global operations.",
      image: "/images/global-network-hands-businessman-holding-holographic-world.jpg"
    }
  ];
</script>

<script>

  serviceData.forEach(item => {
    const img = new Image();
    img.src = item.image;
  })

  document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.service-item');

    items.forEach(item => {
      item.addEventListener('mouseenter', () => {
        items.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
      });
    });
  });

  const track = document.getElementById("newsTrack");
  const newsItems = document.querySelectorAll(".news-item");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const currentIndexEl = document.getElementById("currentIndex");
  const totalCountEl = document.getElementById("totalCount");

  let index = 0;
  const totalItems = newsItems.length;

  totalCountEl.textContent = String(totalItems).padStart(2, "0");

  function updateSlider() {
    const gap = 64; // gap-16
    const itemWidth = newsItems[0].offsetWidth + gap;

    track.style.transform = `translateX(-${index * itemWidth}px)`;
    currentIndexEl.textContent = String(index + 1).padStart(2, "0");
  }

  nextBtn.addEventListener("click", () => {
    if (index < totalItems - 1) {
      index++;
    }
    updateSlider();
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
    }
    updateSlider();
  });

  window.addEventListener("resize", updateSlider);
  updateSlider();


</script>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".service-item");

    const imgA = document.getElementById("imgA");
    const imgB = document.getElementById("imgB");

    const titleEl = document.getElementById("serviceTitle");
    const descEl = document.getElementById("serviceDescription");

    let activeIndex = 0;
    let showingA = true;

    function updateContent(index) {
      if (index === activeIndex) return;
      activeIndex = index;

      const data = serviceData[index];

      // ✅ Decide which image is hidden
      const nextImg = showingA ? imgB : imgA;
      const currentImg = showingA ? imgA : imgB;

      // ✅ Set new image BEFORE animation
      nextImg.src = data.image;

      // ✅ Fade images
      nextImg.classList.remove("opacity-0");
      nextImg.classList.add("opacity-100");

      currentImg.classList.remove("opacity-100");
      currentImg.classList.add("opacity-0");

      showingA = !showingA;

      // ✅ Text animation (cleaner)
      titleEl.style.opacity = "0";
      descEl.style.opacity = "0";

      setTimeout(() => {
        titleEl.textContent = data.title;
        descEl.textContent = data.description;

        titleEl.style.opacity = "1";
        descEl.style.opacity = "1";
      }, 200);
    }

    items.forEach(item => {
      item.addEventListener("mouseenter", () => {
        items.forEach(i => i.classList.remove("active"));
        item.classList.add("active");

        const index = Number(item.dataset.service);
        updateContent(index);
      });
    });

    // ✅ Set initial image
    imgA.src = serviceData[0].image;
  });
</script>

<script>
  let startX = 0;
  const mobileNewstrack = document.querySelector('[data-swipe]');

  mobileNewstrack.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
  });

  mobileNewstrack.addEventListener('touchend', e => {
    const diff = startX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) {
      diff > 0 ? nextBtn.click() : prevBtn.click();
    }
  });
</script>

 <?php include 'footer.php'; ?>
</html>