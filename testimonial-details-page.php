
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonial Details Page</title>
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

    #testimonials-hero-newwrapper {
      background:
        linear-gradient(to bottom right,
          rgba(0, 10, 45, 1) 0%,
          rgba(0, 10, 45, 0.1) 45%,
          rgba(0, 10, 45, 0) 100%),
        url("/images/images/testimonial/background1.jpg") no-repeat center center;
      background-size: cover;
      background-position: center;
      width: 100%;
      max-width: 100%;
      min-height: 120vh;
      display: flex;
      flex-direction: column;
      position: relative;
      overflow-x: hidden;
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
        margin-top: 30px;
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

    #testimonials-hero button {
      background-color: transparent;
      width: 240px;
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
      font-weight: 400;
      color: #ffffff;
      cursor: pointer;
    }

    @media (max-width: 1439px) and (min-width: 1024px) {
      #testimonials-hero button {
        width: 200px;
        height: 45px;
        font-size: 16px;
        padding: 14px 18px 14px 10px;
      }
    }

    @media (max-width: 1023px) and (min-width: 768px) {
      #testimonials-hero button {
        width: 180px;
        height: 40px;
        font-size: 14px;
        padding: 12px 16px 12px 10px;
      }
    }

    @media (max-width: 767px) and (min-width: 480px) {
      #testimonials-hero button {
        width: 160px;
        height: 36px;
        font-size: 12px;
        padding: 10px 14px 10px 8px;
      }
    }

    @media (max-width: 479px) {
      #testimonials-hero button {
        width: 140px;
        height: 32px;
        font-size: 11px;
        padding: 8px 12px 8px 6px;
      }
    }

    #testimonials-hero button img {
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
      #testimonials-hero button img {
        width: 24px;
        height: 24px;
      }
    }

    @media (max-width: 1023px) and (min-width: 768px) {
      #testimonials-hero button img {
        width: 20px;
        height: 20px;
      }
    }

    @media (max-width: 767px) and (min-width: 480px) {
      #testimonials-hero button img {
        width: 18px;
        height: 18px;
      }
    }

    @media (max-width: 479px) {
      #testimonials-hero button img {
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
        max-width: 200px;
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

    #testimonials-newreviews {
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      max-width: 1440px;
      min-height: auto;
      position: relative;
      background: url("/images/images/testimonial/testimonial.jpg") no-repeat top center;
      background-size: contain;
      overflow: hidden;
      padding-bottom: 120px;
    }

    #testimonials-newreviews-content {
      display: flex;
      flex-direction: column;
      gap: 50px;
      position: relative;
      z-index: 1;
      margin-top: 200px;
      padding: 0 100px;
    }

    #testimonials-newreviews-content .testimonials-newreview {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: 50px;
      width: 100%;
    }

    .testimonials-newreview-heading p {
      font-family: "Gilroy", sans-serif;
      font-weight: 400;
      max-width: 745px;
      color: #000a2d;
      font-size: 32px;
    }

    .testimonials-newreview-person {
      display: flex;
      flex-direction: row;
      gap: 20px;
      align-items: center;
    }

    .testimonials-newreview-person img {
      border-radius: 50%;
    }

    .testimonials-newreview-person-info {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .testimonials-newreview-person-info>* {
      margin: 0;
    }

    .testimonials-newreview-person-name {
      font-family: "Gilroy", sans-serif;
      color: #000a2d;
      font-size: 20px;
    }

    .testimonials-newreview-person-title {
      font-family: "Gilroy", sans-serif;
      color: #000a2d;
      font-size: 16px;
    }

    .testimonials-newreview-person-company {
      font-family: "Gilroy", sans-serif;
      color: #7e7e8c;
      font-size: 16px;
    }

    .testimonials-newreview-button {
      margin: 80px auto 0;
      background-color: transparent;
      width: 270px;
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      border-radius: 110px;
      border: 1px solid #000a2d;
      padding: 16px 20px 16px 12px;
      font-family: "Gilroy", sans-serif;
      font-size: 18px;
      font-weight: 600;
      color: #000;
      cursor: pointer;
    }

    .testimonials-newreview-button img {
      width: 32px;
      height: 32px;
      border-radius: 50px;
      padding: 5px;
      background: linear-gradient(90deg, #13c5bb 0%, #2a44b0 100%);
    }

    @media (max-width: 1024px) {
      #testimonials-newreviews-content {
        padding: 0 60px;
        margin-top: 150px;
      }

      #testimonials-newreviews-content .testimonials-newreview {
        flex-direction: column;
        align-items: flex-start;
        gap: 25px;
      }

      .testimonials-newreview-heading p {
        font-size: 20px;
      }
    }

    @media (max-width: 768px) {
      #testimonials-newreviews-content {
        padding: 0 25px;
        margin-top: 120px;
        gap: 35px;
      }

      #testimonials-newreviews-content .testimonials-newreview {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
      }

      .testimonials-newreview-heading p {
        font-size: 18px;
      }

      .testimonials-newreview-person {
        flex-wrap: wrap;
      }
    }

    @media (max-width: 479px) {
      #testimonials-newreviews-content {
        padding: 0 16px;
        margin-top: 100px;
      }

      .testimonials-newreview-heading p {
        font-size: 16px;
      }

      .testimonials-newreview-person-name {
        font-size: 18px;
      }

      .testimonials-newreview-person-title,
      .testimonials-newreview-person-company {
        font-size: 14px;
      }

      .testimonials-newreview-button {
        width: 100%;
        max-width: 260px;
        font-size: 16px;
      }
    }

    #testimonials-cta {
      margin-top: 0px;
      margin-left: 100px;
      margin-right: 100px;
      padding: 40px 44px 40px 44px;
      border-radius: 20px;
      max-width: 1310px;
      box-sizing: border-box;
      height: auto;
      background:
        linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%),
        url("/images/images/testimonial/bgimage.jpg") no-repeat center center;
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
      font-weight: 400;
      color: #ffffff;
      cursor: pointer;
    }

    .testimonials-cta-button img {
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50px;
      padding: 5px 5px;
      background: linear-gradient(180deg,
          rgba(19, 197, 184, 1) 0%,
          rgba(42, 68, 176, 1) 100%);
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
        margin-top: 64px;
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

    #testimonial-view-cases {
      margin-top: 0px;
      margin-left: 0px;
      margin-right: auto;
      width: 100%;
      max-width: 1540px;
      min-height: auto;
      position: relative;
      background: url("images/testimonial/casestudies.jpg") no-repeat top center;
      background-size: contain;
      overflow: hidden;
      padding-bottom: 220px;
    }

    #testimonials-view-cases-content {
      display: flex;
      flex-direction: row;
      align-items: flex-end;
      justify-content: space-between;
      gap: 80px;
      position: relative;
      z-index: 1;
      margin-top: 200px;
      padding-left: 80px;
    }

    #testimonials-view-cases-details,
    #testimonials-view-cases-study {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      flex: 1;
    }

    #testimonials-view-cases-details {
      max-width: 600px;
      padding-bottom: 80px;
    }

    #testimonials-view-cases-study {
      max-width: 720px;
      height: 740px;
      padding: 40px;
      background:
        linear-gradient(90deg,
          rgba(37, 89, 202, 0.1) 0%,
          rgba(58, 184, 241, 1) 100%),
        url("images/testimonial/bgimage2.jpg") no-repeat center center;
      background-size: cover;
    }

    #testimonials-view-cases-details p:first-child,
    #testimonials-view-cases-study p:first-child {
      font-family: "Gilroy", sans-serif;
      font-size: 18px;
      font-weight: 400;
      color: rgba(0, 10, 45, 0.6);
    }

    #testimonials-view-cases-study p:first-child {
      color: #ffffff;
    }

    #testimonials-view-cases-details p:nth-child(2),
    #testimonials-view-cases-study p:nth-child(2) {
      font-size: 32px;
      font-weight: 400;
      color: rgba(0, 10, 45, 1);
    }

    #testimonials-view-cases-study p:nth-child(2) {
      color: #ffffff;
    }

    #testimonials-view-cases-details p:nth-child(2) span {
      color: rgba(0, 10, 45, 0.4);
    }

    #testimonial-view-cases .testimonials-newreview-button {
      margin-top: 24px;
      width: 270px;
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      border-radius: 110px;
      border: 1px solid #000a2d;
      background: transparent;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
    }

    #testimonial-view-cases .testimonials-newreview-button img {
      width: 32px;
      height: 32px;
      border-radius: 50px;
      padding: 5px;
      background: linear-gradient(90deg, #13c5bb 0%, #2a44b0 100%);
    }

    #testimonils-view-cases-page-number-details {
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      align-items: flex-end;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 20;
      padding: 0 40px;
      margin-bottom: 40px;
    }

    #testimonils-view-cases-page-numbers {
      grid-column: 2;

      display: flex;
      flex-direction: row;
      align-items: flex-end;
      justify-content: center;

      gap: 12px;
      flex-wrap: nowrap;
    }

    #testimonials-view-cases-pagination {
      grid-column: 3;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 12px;
    }

    .testimonials-view-cases-page-number {
      margin: 0;
      font-size: 100px;
      font-weight: 400;
      background: linear-gradient(90deg, #13c5b8 0%, #2a44b0 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .testimonials-view-cases-total-page-number {
      margin: 0 0 24px;
      font-size: 32px;
      color: rgba(0, 10, 45, 0.6);
    }

    #testimonials-view-cases-pagination button {
      width: 50px;
      height: 50px;
      border-radius: 50px;
      border: 1px solid #000a2d;
      background: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    #testimonials-view-cases-pagination button:last-child img {
      transform: rotate(180deg);
    }

    @media (max-width: 1024px) {
      #testimonials-view-cases-content {
        flex-direction: column;
        padding: 0 60px;
        gap: 40px;
      }

      #testimonial-view-cases {
        padding-bottom: 200px;
      }

      .testimonials-view-cases-page-number {
        font-size: 80px;
      }
    }

    @media (max-width: 768px) {
      #testimonials-view-cases-content {
        padding: 0 25px;
        margin-top: 120px;
      }

      #testimonils-view-cases-page-number-details {
        grid-template-columns: 1fr;
        row-gap: 20px;
        text-align: center;
      }

      #testimonils-view-cases-page-numbers,
      #testimonials-view-cases-pagination {
        justify-content: center;
        grid-column: auto;
      }

      .testimonials-view-cases-page-number {
        font-size: 60px;
      }

      .testimonials-view-cases-total-page-number {
        margin: 0 0 10px;
        font-size: 32px;
        color: rgba(0, 10, 45, 0.6);
      }

    }

    @media (max-width: 479px) {
      #testimonials-view-cases-content {
        padding: 0 16px;
      }

      .testimonials-view-cases-page-number {
        font-size: 48px;
      }

      #testimonial-view-cases .testimonials-newreview-button {
        width: 100%;
        max-width: 260px;
        font-size: 16px;
      }

      .testimonials-view-cases-total-page-number {
        margin: 0 0 10px;
        font-size: 24px;
        color: rgba(0, 10, 45, 0.6);
      }
    }
  </style>
</head>

<body id="testimonials-body">
  <div id="testimonials-hero-newwrapper">
    <div id="testimonials-hero">
      <div id="testimonials-header">
        <h1>Resources / Testimonials</h1>
        <img src="/images/images/testimonial/line.png" alt="Line" />
      </div>
      <div id="testimonials-content">
        <h1>What Our Clients Say Your Digital Enterprise</h1>
        <p>Discover how we've helped businesses transform, scale, and succeed through our technology solutions.</p>
      </div>
      <button>
        <img src="/images/images/testimonial/arrowright.png" alt="Arrow Right Icon" width="20px" height="20px" />
        Connect with Us
      </button>
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

  <div id="testimonials-newreviews">
    <div id="testimonials-newreviews-content">
      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person1.jpg" alt="Michael Anderson" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">Michael Anderson</p>
            <p class="testimonials-newreview-person-title">IT Director</p>
            <p class="testimonials-newreview-person-company">Infoserve Technologies</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>"Teceze has been a reliable technology partner, delivering scalable solutions that perfectly align with our
            business needs. Their team's expertise and responsiveness truly set them apart."</p>
        </div>
      </div>
      <img src="/images/images/testimonial/line1.png" alt="Line" />

      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person2.jpg" alt="Daniel Carter" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">Daniel Carter</p>
            <p class="testimonials-newreview-person-title">Chief Technology Officer</p>
            <p class="testimonials-newreview-person-company">FinEdge Systems</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>"Teceze consistently delivers high-quality solutions with a strong focus on performance and security. Their
            commitment to excellence is evident in every project."</p>
        </div>
      </div>
      <img src="/images/images/testimonial/line1.png" alt="Line" />

      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person3.jpg" alt="Emma Thompson" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">Emma Thompson</p>
            <p class="testimonials-newreview-person-title">Head Of Infrastructure</p>
            <p class="testimonials-newreview-person-company">Nexa Solutions Ltd.</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>“Working with Teceze has significantly improved our IT operations. Their proactive approach and deep
            technical knowledge helped us achieve greater efficiency and stability.”</p>
        </div>
      </div>
      <img src="/images/images/testimonial/line1.png" alt="Line" />

      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person4.jpg" alt="James Walker" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">James Walker</p>
            <p class="testimonials-newreview-person-title">Vice President</p>
            <p class="testimonials-newreview-person-company">Altura Global Corp.</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>"From cloud solutions to infrastructure management, Teceze has been instrumental in modernizing our
            technology landscape. They are a trusted partner."</p>
        </div>
      </div>
      <img src="/images/images/testimonial/line1.png" alt="Line" />

      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person5.jpg" alt="Olivia Bennett" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">Olivia Bennett</p>
            <p class="testimonials-newreview-person-title">Operations Manager</p>
            <p class="testimonials-newreview-person-company">Vertex Enterprises UK</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>“The team at Teceze understands our requirements thoroughly and delivers solutions that drive real business
            value. Their professionalism is impressive.”</p>
        </div>
      </div>
      <img src="/images/images/testimonial/line1.png" alt="Line" />

      <div class="testimonials-newreview">
        <div class="testimonials-newreview-person">
          <img src="/images/images/testimonial/person6.jpg" alt="David Miller" width="76" height="76" />
          <div class="testimonials-newreview-person-info">
            <p class="testimonials-newreview-person-name">David Miller</p>
            <p class="testimonials-newreview-person-title">Digital Transformation Lead</p>
            <p class="testimonials-newreview-person-company">BrightCore Innovations Ltd.</p>
          </div>
        </div>
        <div class="testimonials-newreview-heading">
          <p>"Teceze's technical expertise and customer-centric approach have helped us scale our operations seamlessly.
            We highly value their support and collaboration."</p>
        </div>
      </div>

    </div>
    <button class="testimonials-newreview-button">
      <img src="/images/images/testimonial/arrowright.png" alt="Arrow Right Icon" width="20px" height="20px" />
      Read Client Stories
    </button>
  </div>
  </div>

  <div id="testimonial-view-cases">
    <div id="testimonials-view-cases-content">
      <div id="testimonials-view-cases-details">
        <p>Strengthening Enterprise Cybersecurity</p>
        <p>Implemented AI-driven security to reduce threats <span>and improve real-time response.</span></p>
        <button class="testimonials-newreview-button">
          <img src="/images/images/testimonial/arrowright.png" alt="Arrow Right Icon" width="20px" height="20px" />
          Read Client Stories
        </button>
      </div>

      <div id="testimonials-view-cases-study">
        <p>Driving Data-Driven Decisions</p>
        <p>Implemented analytics and reporting solutions to enable real-time insights, improve visibility, and support
          strategic decision-making.</p>
        <button class="testimonials-newreview-button">
          <img src="/images/images/testimonial/arrowright.png" alt="Arrow Right Icon" width="20px" height="20px" />
          Read Client Stories
        </button>
      </div>
    </div>

    <div id="testimonils-view-cases-page-number-details">
      <div id="testimonils-view-cases-page-numbers">
        <p class="testimonials-view-cases-page-number">01</p>
        <p class="testimonials-view-cases-total-page-number">/05</p>
      </div>
      <div id="testimonials-view-cases-pagination">
        <button class="testimonials-view-cases-pagination-button">
          <img src="/images/images/testimonial/arrowrights.jpg" alt="Arrow Left Icon" width="20px" height="20px" />
        </button>
        <button class="testimonials-view-cases-pagination-button">
          <img src="/images/images/testimonial/arrowrights.jpg" alt="Arrow Right Icon" width="20px" height="20px" />
        </button>
      </div>
    </div>
  </div>

  <div id="testimonials-cta">
    <div id="testimonials-cta-details">
      <div id="testimonials-cta-header">
        <h1>Get in Touch</h1>
        <h2>Start with a Clear Security Assessment</h2>
        <p>Let's discuss how Teceze can deliver for your organization.</p>
      </div>
      <button class="testimonials-cta-button">
        <img src="/images/images/testimonial/arrowright.png" alt="Arrow Right Icon" width="20px" height="20px" />
        Talk to our team
      </button>
    </div>
  </div>

</body>

<br>
<br>


<?php include 'footer.php'; ?>
</html>