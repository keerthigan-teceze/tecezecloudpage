<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testimonial List Page</title>
    <?php include 'header.php'; ?>
    <style>
      @font-face {
        font-family: "Gilroy";
        src:
          url("font/Gilroy-Medium.woff2") format("woff2"),
          url("font/Gilroy-Medium.woff") format("woff"),
          url("font/Gilroy-Bold.woff2") format("woff2"),
          url("font/Gilroy-Bold.woff") format("woff");

        font-weight: 400;
        font-style: normal;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html,
      #testimonials-body {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
      }

      #testimonials-hero-wrapper {
        background: url("images/background.jpg") no-repeat center
          center;
        background-size: cover;
        background-position: center;
        width: 100%;
        max-width: 100%;
        min-height: 120vh;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow-x: hidden;
        padding-bottom: 100px;
      }

      /* Desktop - 1440px and above */
      @media (min-width: 1440px) {
        #testimonials-hero-wrapper {
          min-height: 120vh;
          background-size: cover;
          background-position: center;
        }
      }

      /* Large Tablets - 1024px to 1439px */
      @media (max-width: 1439px) and (min-width: 1024px) {
        #testimonials-hero-wrapper {
          min-height: 100vh;
          background-size: cover;
          background-position: center;
        }
      }

      /* Tablets - 768px to 1023px */
      @media (max-width: 1023px) and (min-width: 768px) {
        #testimonials-hero-wrapper {
          min-height: 60vh;
          background-size: cover;
          background-position: center;
        }
        #testimonials-hero-newwrapper {
          min-height: 60vh;
        }
      }

      /* Mobile - 480px to 767px */
      @media (max-width: 767px) and (min-width: 480px) {
        #testimonials-hero-wrapper {
          min-height: auto;
          background-size: cover;
          background-position: center top;
        }
      }

      /* Small Mobile - Below 480px */
      @media (max-width: 479px) {
        #testimonials-hero-wrapper {
          min-height: auto;
          background-size: cover;
          background-position: center;
        }
      }

      #testimonials-hero {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        margin-left: 100px;
        margin-right: 100px;
        margin-bottom: 0;
        gap: 30px;
      }

      /* Responsive Hero */
      @media (max-width: 1439px) and (min-width: 1024px) {
        #testimonials-hero {
          margin-top: 80px;
          margin-left: 60px;
          margin-right: 60px;
          gap: 25px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        #testimonials-hero {
          margin-top: 60px;
          margin-left: 40px;
          margin-right: 40px;
          gap: 20px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        #testimonials-hero {
          margin-top: 40px;
          margin-left: 30px;
          margin-right: 30px;
          gap: 15px;
        }
      }

      @media (max-width: 479px) {
        #testimonials-hero {
          /*margin-top: 30px;*/
          margin-left: 20px;
          margin-right: 20px;
          gap: 25px;
        }
      }

      #testimonials-header {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      @media (max-width: 1023px) {
        #testimonials-header {
          gap: 10px;
        }
      }

      @media (max-width: 479px) {
        #testimonials-header {
          gap: 8px;
        }
      }

      #testimonials-header h1 {
        font-family: "Gilroy", sans-serif;
        font-size: 18px;
        font-weight: 400;
        text-transform: uppercase;
        color: #ffffff;
      }

      @media (max-width: 1023px) {
        #testimonials-header h1 {
          font-size: 14px;
        }
      }

      @media (max-width: 479px) {
        #testimonials-header h1 {
          font-size: 12px;
        }
      }

      #testimonials-content {
        font-family: "Gilroy", sans-serif;
        font-weight: 400;
        color: #ffffff;
        gap: 12px;
      }

      @media (max-width: 1023px) {
        #testimonials-content {
          gap: 10px;
        }
      }

      @media (max-width: 479px) {
        #testimonials-content {
          gap: 8px;
        }
      }

      #testimonials-content h1 {
        font-size: 64px;
        line-height: 70px;
        max-width: 730px;
        font-weight: 400;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        #testimonials-content h1 {
          font-size: 48px;
          line-height: 56px;
          max-width: 100%;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        #testimonials-content h1 {
          font-size: 36px;
          line-height: 44px;
          max-width: 100%;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        #testimonials-content h1 {
          font-size: 28px;
          line-height: 36px;
          max-width: 100%;
        }
      }

      @media (max-width: 479px) {
        #testimonials-content h1 {
          font-size: 24px;
          line-height: 32px;
          max-width: 100%;
        }
      }

      #testimonials-content p {
        font-size: 20px;
        max-width: 617px;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        #testimonials-content p {
          font-size: 16px;
          max-width: 100%;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        #testimonials-content p {
          font-size: 14px;
          max-width: 100%;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        #testimonials-content p {
          font-size: 12px;
          max-width: 100%;
        }
      }

      @media (max-width: 479px) {
        #testimonials-content p {
          font-size: 11px;
          max-width: 100%;
        }
      }

      .testimonials-hero-button {
        background-color: transparent;
        width: 240px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        gap: 12px;
        border-radius: 110px;
        border: 1px solid #ffffff;
        padding: 16px 20px 16px 12px;
        font-family: "Gilroy", sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #ffffff;
        cursor: pointer;
        transition:
          background-color 0.3s ease,
          color 0.3s ease,
          border-color 0.3s ease;
      }

      .testimonials-hero-button:hover {
        background-color: rgba(209, 213, 219, 0.3);
        border-color: #13c5bb;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        .testimonials-hero-button {
          width: 200px;
          height: 45px;
          font-size: 16px;
          padding: 14px 18px 14px 10px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        .testimonials-hero-button {
          width: 180px;
          height: 40px;
          font-size: 14px;
          padding: 12px 16px 12px 10px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        .testimonials-hero-button {
          width: 160px;
          height: 36px;
          font-size: 12px;
          padding: 10px 14px 10px 8px;
        }
      }

      @media (max-width: 479px) {
        .testimonials-hero-button {
          width: 140px;
          height: 32px;
          font-size: 11px;
          padding: 8px 12px 8px 6px;
        }
      }

      .testimonials-hero-button img {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        padding: 5px 5px;
        background: linear-gradient(90deg, #13c5bb 0%, #2a44b0 100%);
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        .testimonials-hero-button img {
          width: 24px;
          height: 24px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        .testimonials-hero-button img {
          width: 20px;
          height: 20px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        .testimonials-hero-button img {
          width: 18px;
          height: 18px;
        }
      }

      @media (max-width: 479px) {
        .testimonials-hero-button img {
          width: 16px;
          height: 16px;
        }
      }

      #testimonials-counts {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-top: 40px;
        gap: 90px;
        color: #ffffff;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        #testimonials-counts {
          gap: 40px;
          margin-top: 30px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        #testimonials-counts {
          gap: 30px;
          margin-top: 25px;
          flex-wrap: wrap;
          justify-content: space-between;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        #testimonials-counts {
          flex-direction: column;
          gap: 20px;
          margin-top: 20px;
        }
      }

      @media (max-width: 479px) {
        #testimonials-counts {
          flex-direction: column;
          gap: 15px;
          margin-top: 15px;
        }
      }

      .testimonials-count {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin: 0;
        padding: 0;
        max-width: 242.5px;
        height: auto;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        .testimonials-count {
          max-width: 250px;
          gap: 12px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        .testimonials-count {
          max-width: calc(50% - 15px);
          gap: 10px;
          flex: 0 1 calc(50% - 15px);
          min-width: 160px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        .testimonials-count {
          max-width: 100%;
          gap: 8px;
        }
      }

      @media (max-width: 479px) {
        .testimonials-count {
          max-width: 100%;
          gap: 6px;
        }
      }

      .testimonials-count h2 {
        font-family: "Gilroy", sans-serif;
        font-style: semibold;
        font-size: 68px;
        font-weight: 400;
        text-align: center;
        margin: 0;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        .testimonials-count h2 {
          font-size: 48px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        .testimonials-count h2 {
          font-size: 36px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        .testimonials-count h2 {
          font-size: 28px;
        }
      }

      @media (max-width: 479px) {
        .testimonials-count h2 {
          font-size: 24px;
        }
      }

      .testimonials-count p {
        font-family: "Gilroy", sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-transform: titlecase;
        text-align: center;
        margin: 0;
      }

      @media (max-width: 1439px) and (min-width: 1024px) {
        .testimonials-count p {
          font-size: 14px;
        }
      }

      @media (max-width: 1023px) and (min-width: 768px) {
        .testimonials-count p {
          font-size: 12px;
        }
      }

      @media (max-width: 767px) and (min-width: 480px) {
        .testimonials-count p {
          font-size: 11px;
        }
      }

      @media (max-width: 479px) {
        .testimonials-count p {
          font-size: 10px;
        }
      }

      #testimonials-reviews {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        margin-top: 100px;
        padding: 120px 60px 80px;
        box-sizing: border-box;

        background: url("/images/testimonial.jpg") no-repeat top
          center;
        background-size: contain;
        background-position: center top;
        background-attachment: scroll;

        overflow: hidden;
      }

      #testimonials-reviews-header {
        display: flex;
        justify-content: space-between;
        gap: 40px;
        width: 100%;
        margin-bottom: 80px;
      }

      #testimonials-reviews-header p {
        font-family: "Gilroy", sans-serif;
        font-weight: 500;
        color: #000a2d;
      }

      #testimonials-reviews-header p:first-child {
        max-width: 227px;
        font-size: 18px;
      }

      #testimonials-reviews-header p:last-child {
        max-width: 821px;
        font-size: 32px;
      }

      #testimonials-reviews-content {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px 20px;
        width: 100%;
        margin-bottom: 60px;
        position: relative;
      }

      #testimonials-reviews-content::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
          90deg,
          rgba(0, 202, 189, 0.3) 0%,
          rgba(0, 55, 166, 0.08) 100%
        );
        filter: blur(180px);
        pointer-events: none;
        z-index: 0;
      }

      .testimonials-review {
        position: relative;
        z-index: 1;

        display: flex;
        flex-direction: column;
        gap: 60px;

        width: 100%;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px 24px;
        height: 424px;
      }

      @media (min-width: 1025px) {
        #testimonials-reviews-content {
          align-items: start;
        }

        .testimonials-review {
          will-change: transform;
          height: 424px;
        }

        .testimonials-review:nth-child(3n + 1) {
          transform: translateY(0);
        }

        .testimonials-review:nth-child(3n + 2) {
          transform: translateY(-48px);
        }

        .testimonials-review:nth-child(3n) {
          transform: translateY(24px);
        }
      }

      .testimonials-review-heading p {
        font-family: "Gilroy", sans-serif;
        font-size: 24px;
        color: #7b7e8c;
      }

      .testimonials-review-person {
        display: flex;
        align-items: center;
        gap: 20px;
      }

      .testimonials-review-person img {
        border-radius: 50%;
      }

      .testimonials-review-person-info {
        display: flex;
        flex-direction: column;
        gap: 6px;
      }

      .testimonials-review-person-name {
        font-family: "Gilroy", sans-serif;
        font-size: 20px;
        color: #000a2d;
      }

      .testimonials-review-person-title {
        font-family: "Gilroy", sans-serif;
        font-size: 16px;
        color: #000a2d;
      }

      .testimonials-review-person-company {
        font-family: "Gilroy", sans-serif;
        font-size: 16px;
        color: #7e7e8c;
      }

      .testimonials-review-button {
        margin: 0 auto;
        width: 270px;
        height: 52px;

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;

        border-radius: 110px;
        border: 1px solid #000a2d;
        background: transparent;
        text-decoration: none;
        color: #000a2d;

        font-family: "Gilroy", sans-serif;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        transition:
          transform 0.3s ease,
          border-color 0.3s ease;
      }

      .testimonials-review-button:hover {
        border-color: #2a44b0;
        transform: translateX(10px);
      }

      .testimonials-review-button img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        padding: 5px;
        background: linear-gradient(90deg, #13c5bb 0%, #2a44b0 100%);
      }

      @media (max-width: 1024px) {
        #testimonials-reviews {
          padding: 100px 30px 70px;
        }

        .testimonials-review {
          height: auto;
        }

        #testimonials-reviews-header {
          flex-direction: column;
          gap: 20px;
          margin-bottom: 50px;
        }

        #testimonials-reviews-header p:first-child,
        #testimonials-reviews-header p:last-child {
          max-width: 100%;
        }

        #testimonials-reviews-header p:last-child {
          font-size: 24px;
        }

        #testimonials-reviews-content {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 768px) {
        #testimonials-reviews {
          padding: 80px 20px 60px;
          background-size: contain;
          background-position: center top;
        }

        #testimonials-reviews-content {
          grid-template-columns: 1fr;
        }

        #testimonials-reviews-header p:first-child {
          font-size: 20px;
        }

        #testimonials-reviews-header p:last-child {
          font-size: 20px;
        }

        .testimonials-review-heading p {
          font-size: 18px;
        }
      }

      @media (max-width: 480px) {
        #testimonials-reviews {
          padding: 60px 16px 50px;
          background-size: contain;
          background-position: center top;
        }

        .testimonials-review {
          padding: 24px 18px;
        }

        .testimonials-review-button {
          width: 220px;
          font-size: 15px;
        }
      }

      #testimonials-cta {
        margin-top: 0px;
        margin-left: 100px;
        margin-right: 100px;
        margin-bottom: 20px;
        padding: 40px 44px 40px 44px;
        border-radius: 20px;
        max-width: 1310px;
        box-sizing: border-box;
        height: auto;
        background:
          linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%),
          url("images/bgimage.jpg") no-repeat center center;
        background-size: cover;
        background-position: center;
        z-index: 10;
      }

      #testimonials-cta-details {
        display: flex;
        flex-direction: column;
        gap: 30px;
        width: 560px;
        max-width: 100%;
      }

      #testimonials-cta-header {
        display: flex;
        flex-direction: column;
        gap: 30px;
      }

      #testimonials-cta-header h1 {
        font-family: "Gilroy", sans-serif;
        font-size: 18px;
        font-weight: 600;
        text-transform: titlecase;
        color: #ffffff;
        margin: 0;
      }

      #testimonials-cta-header h2 {
        font-family: "Gilroy", sans-serif;
        font-size: 32px;
        font-weight: 600;
        color: #ffffff;
        margin: 0;
      }

      #testimonials-cta-header p {
        font-family: "Gilroy", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #ffffff;
        margin: 0;
      }

      .testimonials-cta-button {
        background-color: transparent;
        width: 250px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        border-radius: 110px;
        border: 1px solid #ffffff;
        padding: 16px 20px 16px 12px;
        font-family: "Gilroy", sans-serif;
        font-size: 18px;
        text-decoration: none;
        font-weight: 400;
        color: #ffffff;
        cursor: pointer;
        transition:
          background-color 0.3s ease,
          color 0.3s ease,
          border-color 0.3s ease;
      }

      .testimonials-cta-button:hover {
        background-color: rgba(209, 213, 219, 0.3);
        border-color: #13c5bb;
      }

      .testimonials-cta-button img {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        padding: 5px 5px;
        background: linear-gradient(
          180deg,
          rgba(19, 197, 184, 1) 0%,
          rgba(42, 68, 176, 1) 100%
        );
      }

      /* Tablet */
      @media (max-width: 1024px) {
        #testimonials-cta {
          margin-top: 80px;
          margin-left: 20px;
          margin-right: 20px;
          max-width: calc(100% - 40px);
        }
      }

      /* Mobile */
      @media (max-width: 768px) {
        #testimonials-cta {
          margin-left: 20px;
          margin-right: 20px;
          padding: 32px 24px;
          max-width: calc(100% - 40px);
        }

        .testimonials-cta-button {
          width: min(250px, 100%);
        }
      }

      /* Small Mobile */
      @media (max-width: 479px) {
        #testimonials-cta {
          /*margin-top: 64px;*/
          margin-left: 16px;
          margin-right: 16px;
          padding: 28px 20px;
          max-width: calc(100% - 32px);
        }
        #testimonials-cta-header {
          max-width: 100%;
        }
        #testimonials-cta-header h2 {
          font-size: 20px;
        }
      }
    </style>
  </head>

  <body id="testimonials-body">
    <div id="testimonials-hero-wrapper">
      <div id="testimonials-hero">
        <div id="testimonials-header">
          <h1>Resources / Testimonials</h1>
          <img src="images/line.png" alt="Line" />
        </div>
        <div id="testimonials-content">
          <h1>What Our Clients Say Your Digital Enterprise</h1>
          <p>
            Discover how we've helped businesses transform, scale, and succeed
            through our technology solutions.
          </p>
        </div>
        <a class="testimonials-hero-button" href="https://teal-mule-553916.hostingersite.com/Contactus.php">
          <img
            src="images/arrowright.png"
            alt="Arrow Right Icon"
            width="20px"
            height="20px"
          />
          Connect with Us
        </a>
        <div id="testimonials-counts">
          <div class="testimonials-count">
            <h2>1000+</h2>
            <p>Clients Supported</p>
          </div>
          <div class="testimonials-count">
            <h2>100+</h2>
            <p>Technology Partners</p>
          </div>
          <div class="testimonials-count">
            <h2>5000+</h2>
            <p>Projects Delivered</p>
          </div>
          <div class="testimonials-count">
            <h2>13+</h2>
            <p>Years of Experience</p>
          </div>
        </div>
      </div>
    </div>

    <div id="testimonials-reviews">
      <div id="testimonials-reviews-header">
        <p>Cloud Outcomes Driven by Performance and Efficiency</p>
        <p>
          Cloud environments are designed to improve scalability, enhance system
          reliability, and optimize operational performance across business
          critical workloads.
        </p>
      </div>

      <div id="testimonials-reviews-content">
        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              "Teceze has been a reliable technology partner, delivering
              scalable solutions that perfectly align with our business needs.
              Their team's expertise and responsiveness truly set them apart."
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="/images/person1.jpg"
              alt="Michael Anderson"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">Michael Anderson</p>
              <p class="testimonials-review-person-title">IT Director</p>
              <p class="testimonials-review-person-company">
                Infoserve Technologies
              </p>
            </div>
          </div>
        </div>

        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              "Teceze consistently delivers high-quality solutions with a strong
              focus on performance and security. Their commitment to excellence
              is evident in every project."
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="/images/person2.jpg"
              alt="Daniel Carter"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">Daniel Carter</p>
              <p class="testimonials-review-person-title">
                Chief Technology Officer
              </p>
              <p class="testimonials-review-person-company">FinEdge Systems</p>
            </div>
          </div>
        </div>

        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              “Working with Teceze has significantly improved our IT operations.
              Their proactive approach and deep technical knowledge helped us
              achieve greater efficiency and stability.”
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="/images/person3.jpg"
              alt="Emma Thompson"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">Emma Thompson</p>
              <p class="testimonials-review-person-title">
                Head Of Infrastructure
              </p>
              <p class="testimonials-review-person-company">
                Nexa Solutions Ltd.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              "From cloud solutions to infrastructure management, Teceze has
              been instrumental in modernizing our technology landscape. They
              are a trusted partner."
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="images/person4.jpg"
              alt="James Walker"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">James Walker</p>
              <p class="testimonials-review-person-title">Vice President</p>
              <p class="testimonials-review-person-company">
                Altura Global Corp.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              “The team at Teceze understands our requirements thoroughly and
              delivers solutions that drive real business value. Their
              professionalism is impressive.”
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="images/person5.jpg"
              alt="Olivia Bennett"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">Olivia Bennett</p>
              <p class="testimonials-review-person-title">Operations Manager</p>
              <p class="testimonials-review-person-company">
                Vertex Enterprises UK
              </p>
            </div>
          </div>
        </div>

        <div class="testimonials-review">
          <div class="testimonials-review-heading">
            <p>
              "Teceze's technical expertise and customer-centric approach have
              helped us scale our operations seamlessly. We highly value their
              support and collaboration."
            </p>
          </div>
          <div class="testimonials-review-person">
            <img
              src="images/person6.jpg"
              alt="David Miller"
              width="76"
              height="76"
            />
            <div class="testimonials-review-person-info">
              <p class="testimonials-review-person-name">David Miller</p>
              <p class="testimonials-review-person-title">
                Digital Transformation Lead
              </p>
              <p class="testimonials-review-person-company">
                BrightCore Innovations Ltd.
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="testimonials-review-button" href="https://teal-mule-553916.hostingersite.com/casestudy.php">
        <img
          src="images/arrowright.png"
          alt="Arrow Right Icon"
          width="20px"
          height="20px"
        />
        Read Client Stories
      </a>
    </div>

    <div id="testimonials-cta">
      <div id="testimonials-cta-details">
        <div id="testimonials-cta-header">
          <h1>Get in Touch</h1>
          <h2>Start with a Clear Security Assessment</h2>
          <p>Let's discuss how Teceze can deliver for your organization.</p>
        </div>
        <a class="testimonials-cta-button" href="https://teal-mule-553916.hostingersite.com/Contactus.php">
          <img
            src="images/arrowright.png"
            alt="Arrow Right Icon"
            width="20px"
            height="20px"
          />
          Talk to our team
        </a>
      </div>
    </div>
  </body>
  <?php include 'footer.php'; ?>
</html>
