<!doctype html>
<html lang="en">
 <?php include 'header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events Details Page</title>
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
        #events-body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        #events-hero-wrapper {
            background:
                linear-gradient(to right,
                    rgba(0, 0, 0, 0.5) 0%,
                    rgba(0, 0, 0, 0) 90%),
                url("images/events-details/hero-bg.jpg") no-repeat center center;

            background-size: cover;
            background-position: center;
            width: 100%;
            max-width: 100%;
            height: 770px;
            gap: 50px;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        /* LEFT BLUR GRADIENT */
        #events-hero-wrapper::before {
            content: "";
            position: absolute;
            width: 634px;
            height: 603px;
            top: -162px;
            left: -238px;

            background: linear-gradient(110deg,
                    #00cabd,
                    #0037a6);

            opacity: 0.65;
            filter: blur(280px);
            transform: rotate(110deg);

            z-index: 1;
        }

        /* RIGHT BLUR GRADIENT */
        #events-hero-wrapper::after {
            content: "";
            position: absolute;
            width: 663px;
            height: 630px;
            top: 47px;
            left: 972px;

            background: linear-gradient(-133deg,
                    #00cabd,
                    #0037a6);

            opacity: 0.65;
            filter: blur(280px);
            transform: rotate(-133deg);

            z-index: 1;
        }

        /* Keep content above gradients */
        #events-hero-wrapper>* {
            position: relative;
            z-index: 2;
        }

        /* Desktop - 1440px and above */
        @media (min-width: 1440px) {
            #events-hero-wrapper {
                min-height: 770px;
                background-size: cover;
                background-position: center;
            }
        }

        /* Large Tablets - 1024px to 1439px */
        @media (max-width: 1439px) and (min-width: 1024px) {
            #events-hero-wrapper {
                min-height: 670px;
                background-size: cover;
                background-position: center;
            }
        }

        /* Tablets - 768px to 1023px */
        @media (max-width: 1023px) and (min-width: 768px) {
            #events-hero-wrapper {
                min-height: auto;
                background-size: cover;
                background-position: center;
            }
        }

        /* Mobile - 480px to 767px */
        @media (max-width: 767px) and (min-width: 480px) {
            #events-hero-wrapper {
                min-height: auto;
                background-size: cover;
                background-position: center top;
            }
        }

        /* Small Mobile - Below 480px */
        @media (max-width: 479px) {
            #events-hero-wrapper {
                min-height: auto;
                background-size: cover;
                background-position: center;
            }
        }

        #events-hero {
            display: flex;
            flex-direction: column;
            margin-top: 200px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 0;
            gap: 30px;
        }

        /* Responsive Hero */
        @media (max-width: 1439px) and (min-width: 1024px) {
            #events-hero {
                margin-top: 180px;
                margin-left: 60px;
                margin-right: 60px;
                gap: 25px;
            }
        }

        @media (max-width: 1023px) and (min-width: 768px) {
            #events-hero {
                margin-top: 160px;
                margin-left: 40px;
                margin-right: 40px;
                gap: 20px;
            }
        }

        @media (max-width: 767px) and (min-width: 480px) {
            #events-hero {
                margin-top: 140px;
                margin-left: 30px;
                margin-right: 30px;
                gap: 15px;
            }
        }

        @media (max-width: 479px) {
            #events-hero {
                margin-top: 130px;
                margin-left: 20px;
                margin-right: 20px;
                gap: 25px;
            }
        }

        #events-hero-header {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        @media (max-width: 1023px) {
            #events-hero-header {
                gap: 10px;
            }
        }

        @media (max-width: 479px) {
            #events-hero-header {
                gap: 8px;
            }
        }

        #events-hero-header h1 {
            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: #ffffff;
        }

        @media (max-width: 1023px) {
            #events-hero-header h1 {
                font-size: 14px;
            }
        }

        @media (max-width: 479px) {
            #events-hero-header h1 {
                font-size: 12px;
            }
        }

        #events-hero-content {
            font-family: "Gilroy", sans-serif;
            font-weight: 400;
            color: #ffffff;
            gap: 12px;
        }

        @media (max-width: 1023px) {
            #events-hero-content {
                gap: 10px;
            }
        }

        @media (max-width: 479px) {
            #events-hero-content {
                gap: 8px;
            }
        }

        #events-hero-content h1 {
            font-size: 64px;
            line-height: 70px;
            max-width: 730px;
            font-weight: 400;
        }

        @media (max-width: 1439px) and (min-width: 1024px) {
            #events-hero-content h1 {
                font-size: 48px;
                line-height: 56px;
                max-width: 100%;
            }
        }

        @media (max-width: 1023px) and (min-width: 768px) {
            #events-hero-content h1 {
                font-size: 36px;
                line-height: 44px;
                max-width: 100%;
            }
        }

        @media (max-width: 767px) and (min-width: 480px) {
            #events-hero-content h1 {
                font-size: 28px;
                line-height: 36px;
                max-width: 100%;
            }
        }

        @media (max-width: 479px) {
            #events-hero-content h1 {
                font-size: 24px;
                line-height: 32px;
                max-width: 100%;
            }
        }

        #events-hero-content p {
            font-size: 20px;
            max-width: 617px;
        }

        @media (max-width: 1439px) and (min-width: 1024px) {
            #events-hero-content p {
                font-size: 16px;
                max-width: 100%;
            }
        }

        @media (max-width: 1023px) and (min-width: 768px) {
            #events-hero-content p {
                font-size: 14px;
                max-width: 100%;
            }
        }

        @media (max-width: 767px) and (min-width: 480px) {
            #events-hero-content p {
                font-size: 12px;
                max-width: 100%;
            }
        }

        @media (max-width: 479px) {
            #events-hero-content p {
                font-size: 11px;
                max-width: 100%;
            }
        }

        #events-happening-details {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;

            border-radius: 20px;
            background-color: rgba(248, 250, 252, 0.12);

            box-sizing: border-box;
        }

        .events-happening-detail {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            flex: 1;
            min-width: 220px;
        }

        .events-happening-detail:nth-child(1) {
            justify-content: flex-start;
            text-align: left;
        }

        .events-happening-detail:nth-child(2) {
            justify-content: center;
            text-align: center;
        }

        .events-happening-detail:nth-child(3) {
            justify-content: flex-end;
            text-align: right;
        }

        .events-happening-detail-header {
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .events-happening-detail-header p {
            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: #00cabd;
            margin: 0;
        }

        .events-happening-detail-info p {
            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: #ffffff;
            margin: 0;
            line-height: 1.5;
        }

        /* =========================
            LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-happening-details {
                width: 90%;
                padding: 35px;
            }

            .events-happening-detail {
                gap: 16px;
            }
        }

        /* =========================
        TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-happening-details {
                width: 90%;

                display: flex;
                flex-direction: column;
                align-items: flex-start;

                padding: 30px;
                gap: 30px;
            }

            .events-happening-detail {
                width: 100%;
                min-width: 100%;

                display: flex;
                justify-content: flex-start !important;
                text-align: left !important;
            }

            .events-happening-detail-header p,
            .events-happening-detail-info p {
                font-size: 16px;
            }
        }

        /* =========================
            MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-happening-details {
                width: 92%;
                flex-direction: column;
                align-items: flex-start;
                padding: 24px;
                gap: 24px;
            }

            .events-happening-detail {
                width: 100%;
                min-width: 100%;
            }

            .events-happening-detail-header {
                gap: 6px;
            }

            .events-happening-detail-header p,
            .events-happening-detail-info p {
                font-size: 15px;
            }
        }

        /* =========================
            SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-happening-details {
                width: 95%;
                padding: 20px;
                border-radius: 16px;
                gap: 20px;
            }

            .events-happening-detail {
                flex-direction: column;
                gap: 10px;
            }

            .events-happening-detail-header p,
            .events-happening-detail-info p {
                font-size: 14px;
            }
        }


        #events-introduction {
            width: 100%;
            max-width: 1320px;
            margin: 80px auto 0;
            padding: 0 20px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;

            box-sizing: border-box;
        }

        #events-introduction-header {
            display: flex;
            flex-direction: column;
            max-width: 620px;
            gap: 40px;
            flex: 1;
        }

        #events-introduction-header p:first-child {
            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: rgba(0, 10, 45, 0.6);
            margin: 0;
        }

        #events-introduction-subheader {
            display: flex;
            flex-direction: column;
            gap: 12px;

            color: #000a2d;
            font-family: "Gilroy", sans-serif;
            font-weight: 400;
        }

        #events-introduction-subheader p:first-child {
            font-size: 40px;
            line-height: 1.2;
            margin: 0;
        }

        #events-introduction-subheader p:nth-child(2) {
            font-size: 18px;
            line-height: 140%;
            margin: 0;
        }

        #events-introduction-highlights {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        #events-introduction-highlights img {
            width: 100%;
            max-width: 570px;
            height: auto;
            border-radius: 20px;
            object-fit: cover;
            display: block;
        }

        #events-introduction-highlights-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            max-width: 300px;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 40px;
            gap: 24px;
            z-index: 10;
        }

        #events-introduction-highlights-content p {
            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: #ffffff;
            margin: 0;
        }



        /* =========================
        LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-introduction {
                width: 90%;
                gap: 40px;
            }

            #events-introduction-subheader p:first-child {
                font-size: 36px;
            }
        }

        /* =========================
        TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-introduction {
                width: 90%;
                flex-direction: column;
                gap: 40px;
                margin-top: 60px;
            }

            #events-introduction-header {
                max-width: 100%;
                gap: 30px;
            }

            #events-introduction-subheader p:first-child {
                font-size: 32px;
            }

            #events-introduction-subheader p:nth-child(2) {
                font-size: 16px;
            }

            #events-introduction-highlights {
                width: 100%;
            }

            #events-introduction-highlights img {
                max-width: 100%;
            }
        }

        /* =========================
            MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-introduction {
                width: 92%;
                gap: 32px;
                margin-top: 50px;
                padding: 0 10px;
            }

            #events-introduction-header {
                gap: 24px;
            }

            #events-introduction-header p:first-child {
                font-size: 16px;
            }

            #events-introduction-subheader p:first-child {
                font-size: 28px;
            }

            #events-introduction-subheader p:nth-child(2) {
                font-size: 15px;
                line-height: 1.7;
            }

            #events-introduction-highlights img {
                border-radius: 16px;
            }
        }

        /* =========================
        SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-introduction {
                width: 95%;
                gap: 24px;
                margin-top: 40px;
            }

            #events-introduction-header p:first-child {
                font-size: 14px;
            }

            #events-introduction-subheader {
                gap: 10px;
            }

            #events-introduction-subheader p:first-child {
                font-size: 24px;
                line-height: 1.3;
            }

            #events-introduction-subheader p:nth-child(2) {
                font-size: 14px;
            }

            #events-introduction-highlights img {
                border-radius: 14px;
            }
        }

        #events-agenda {
            width: 100%;
            background:
                url("images/events-details/frame.png") no-repeat center top,
                #000a2d;

            background-size: cover;
            margin: 80px auto 0;
            overflow: hidden;
        }

        #events-agenda-contents {
            width: 100%;
            max-width: 1420px;
            margin: 0 auto;

            display: flex;
            justify-content: center;
            align-items: center;
            gap: 120px;

            padding: 80px;
            color: #ffffff;
            box-sizing: border-box;
        }

        /* =========================
        TIMELINE CARD
        ========================= */
        #events-agenda-timeline {
            width: 100%;
            max-width: 700px;

            display: flex;
            flex-direction: column;
            gap: 40px;

            border: 1px solid rgba(255, 255, 255, 0.12);
            background: linear-gradient(135deg, #1f315f 0%, #18264b 100%);

            border-radius: 20px;
            padding: 40px;
            box-sizing: border-box;
        }

        .events-agenda-timeline-header {
            font-family: "Gilroy", sans-serif;
            font-size: 32px;
            font-weight: 400;
            color: #ffffff;
            margin: 0;
        }

        #events-agenda-timeline-details {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        #events-agenda-timeline-details div {
            display: flex;
            align-items: flex-start;
            gap: 44px;

            font-family: "Gilroy", sans-serif;
            font-size: 20px;
            font-weight: 400;
            color: #ffffff;
        }

        #events-agenda-timeline-details div p {
            margin: 0;
            line-height: 1.5;
        }

        #events-agenda-timeline-details div p:first-child {
            color: #00cabd;
            min-width: 120px;
        }

        /* =========================
        RIGHT CONTENT
        ========================= */
        #events-agenda-details {
            width: 100%;
            max-width: 560px;

            font-family: "Gilroy", sans-serif;
            font-weight: 400;

            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        #events-agenda-details p {
            margin: 0;
        }

        #events-agenda-details p:first-child {
            font-size: 40px;
            line-height: 1.2;
        }

        #events-agenda-details p:last-child {
            font-size: 18px;
            line-height: 1.7;
        }

        /* =========================
        LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-agenda-contents {
                width: 90%;
                gap: 80px;
                padding: 60px 40px;
            }

            #events-agenda-details p:first-child {
                font-size: 36px;
            }
        }

        /* =========================
        TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-agenda-contents {
                width: 90%;
                flex-direction: column;
                gap: 50px;
                padding: 50px 30px;
            }

            #events-agenda-timeline {
                max-width: 100%;
                padding: 32px;
            }

            .events-agenda-timeline-header {
                font-size: 28px;
            }

            #events-agenda-timeline-details div {
                gap: 30px;
                font-size: 18px;
            }

            #events-agenda-details {
                max-width: 100%;
                text-align: center;
            }

            #events-agenda-details p:first-child {
                font-size: 32px;
            }

            #events-agenda-details p:last-child {
                font-size: 16px;
            }
        }

        /* =========================
        SMALL MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-agenda {
                margin-top: 60px;
            }

            #events-agenda-contents {
                width: 92%;
                gap: 40px;
                padding: 40px 20px;
            }

            #events-agenda-timeline {
                gap: 30px;
                padding: 24px;
                border-radius: 16px;
            }

            .events-agenda-timeline-header {
                font-size: 24px;
            }

            #events-agenda-timeline-details {
                gap: 18px;
            }

            #events-agenda-timeline-details div {
                flex-direction: column;
                gap: 8px;
                font-size: 16px;
            }

            #events-agenda-timeline-details div p:first-child {
                min-width: auto;
            }

            #events-agenda-details {
                gap: 10px;
                text-align: left;
            }

            #events-agenda-details p:first-child {
                font-size: 28px;
            }

            #events-agenda-details p:last-child {
                font-size: 15px;
                line-height: 1.7;
            }
        }

        /* =========================
        SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-agenda-contents {
                width: 95%;
                padding: 32px 16px;
                gap: 32px;
            }

            #events-agenda-timeline {
                padding: 20px;
                border-radius: 14px;
            }

            .events-agenda-timeline-header {
                font-size: 22px;
            }

            #events-agenda-timeline-details div {
                font-size: 14px;
            }

            #events-agenda-details p:first-child {
                font-size: 24px;
            }

            #events-agenda-details p:last-child {
                font-size: 14px;
            }
        }


        #events-keyspeakers {
            width: 100%;
            max-width: 1440px;
            margin: 50px auto 0;
            padding: 120px 60px 80px;
            box-sizing: border-box;

            background: url("images/events-details/key-speakers.png") no-repeat top center;

            background-size: contain;
            background-attachment: scroll;

            overflow: hidden;
        }

        #events-keyspeakers-content {
            width: 100%;
            max-width: 1040px;
            margin: 0 auto 80px;

            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #events-keyspeakers-header-info {
            display: flex;
            flex-direction: column;
            gap: 12px;

            max-width: 620px;

            align-items: center;
            justify-content: center;

            font-family: "Gilroy", sans-serif;
        }

        #events-keyspeakers-header-info p {
            margin: 0;
        }

        #events-keyspeakers-header-info p:first-child {
            font-size: 40px;
            color: #000a2d;
            line-height: 1.2;
        }

        #events-keyspeakers-header-info p:last-child {
            font-size: 18px;
            color: #000a2d;
            line-height: 1.7;
        }

        .events-keyspeakers-content {
            width: 100%;
            max-width: 1240px;

            margin: 0 auto 80px;

            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 50px;
        }

        #events-keyspeakers-person {
            width: 100%;
            max-width: 290px;

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 21px;

            text-align: center;
        }

        #events-keyspeakers-person img {
            width: 100%;
            max-width: 290px;
            height: auto;

            border-radius: 20px;
            object-fit: cover;
            display: block;
        }

        #events-keyspeakers-person-info {
            display: flex;
            flex-direction: column;
            gap: 6px;

            align-items: center;
        }

        #events-keyspeakers-person p {
            margin: 0;

            font-family: "Gilroy", sans-serif;
            font-weight: 400;
            text-transform: capitalize;

            color: rgba(0, 10, 45, 0.6);
        }

        #events-keyspeakers-person p:first-child {
            font-size: 18px;
        }

        #events-keyspeakers-person p:last-child {
            font-size: 14px;
            line-height: 1.5;
        }

        /* =========================
        LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-keyspeakers {
                background-size: contain;
                padding: 100px 40px 70px;
            }

            .events-keyspeakers-content {
                gap: 40px;
            }

            #events-keyspeakers-header-info p:first-child {
                font-size: 36px;
            }
        }

        /* =========================
            TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-keyspeakers {
                padding: 80px 30px 60px;
                background-size: contain;
            }

            #events-keyspeakers-content {
                margin-bottom: 60px;
            }

            .events-keyspeakers-content {
                gap: 32px;
                margin-bottom: 60px;
            }

            #events-keyspeakers-person {
                max-width: calc(50% - 20px);
            }

            #events-keyspeakers-header-info p:first-child {
                font-size: 32px;
            }

            #events-keyspeakers-header-info p:last-child {
                font-size: 16px;
            }
        }

        /* =========================
        MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-keyspeakers {
                padding: 60px 20px 50px;
                background-size: contain;
                margin-top: 40px;
            }

            #events-keyspeakers-content {
                margin-bottom: 40px;
            }

            .events-keyspeakers-content {
                gap: 28px;
                margin-bottom: 40px;
            }

            #events-keyspeakers-person {
                max-width: 100%;
            }

            #events-keyspeakers-header-info {
                gap: 10px;
            }

            #events-keyspeakers-header-info p:first-child {
                font-size: 28px;
            }

            #events-keyspeakers-header-info p:last-child {
                font-size: 15px;
                line-height: 1.7;
            }

            #events-keyspeakers-person p:first-child {
                font-size: 16px;
            }

            #events-keyspeakers-person p:last-child {
                font-size: 13px;
            }
        }

        /* =========================
        SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-keyspeakers {
                background-size: contain;
                padding: 50px 16px 40px;
            }

            .events-keyspeakers-content {
                gap: 24px;
            }

            #events-keyspeakers-header-info p:first-child {
                font-size: 24px;
            }

            #events-keyspeakers-header-info p:last-child {
                font-size: 14px;
            }

            #events-keyspeakers-person {
                gap: 16px;
            }

            #events-keyspeakers-person img {
                border-radius: 16px;
            }

            #events-keyspeakers-person p:first-child {
                font-size: 15px;
            }

            #events-keyspeakers-person p:last-child {
                font-size: 12px;
            }
        }

        #events-upcoming {
            width: 100%;
            max-width: 1320px;
            margin: -100px auto 0;
            padding: 0 20px;
            box-sizing: border-box;
        }

        #events-upcoming-contents {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        #events-upcoming-header p {
            font-family: "Gilroy", sans-serif;
            font-size: 40px;
            font-weight: 400;
            color: #000a2d;
            margin: 0;
        }

        #events-upcoming-cards {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 30px;
        }

        .events-upcoming-card {
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: 24px;
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            overflow: hidden;
        }

        .events-upcoming-card:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        #events-upcoming-card-header {
            position: relative;
            width: 100%;
            max-width: 400px;
            overflow: hidden;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        #events-upcoming-card-header img {
            width: 100%;
            display: block;
            background: linear-gradient(180deg, rgba(0, 0, 0, 1) 100%, rgba(0, 0, 0, 0) 0%);
            object-fit: cover;
        }

        #events-upcoming-card-header::before {
            content: "";
            position: absolute;
            inset: 0;

            background: linear-gradient(to right,
                    rgba(0, 0, 0, 0.75) 0%,
                    rgba(0, 0, 0, 0.35) 40%,
                    rgba(0, 0, 0, 0) 100%);

            z-index: 1;
        }

        #events-upcoming-card-header-info {
            position: absolute;
            top: 16px;
            left: 16px;
            right: 16px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        #events-upcoming-card-header-info p {
            margin: 0;
            background: rgba(255, 255, 255, 0.12);
            padding: 6px 16px 6px 16px;
            border-radius: 20px;
            font-family: "Gilroy", sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #ffffff;

        }

        #events-upcoming-card-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 0 20px 20px;
        }

        #events-upcoming-card-info p {
            margin: 0;
            font-family: "Gilroy", sans-serif;
            font-weight: 400;
            color: #000a2d;
        }

        #events-upcoming-card-info p:first-child {
            font-size: 16px;
        }

        #events-upcoming-card-info p:last-child {
            font-size: 24px;
        }

        /* =========================
            LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-upcoming {
                width: 90%;
            }

            #events-upcoming-contents {
                display: flex;
                flex-direction: column;
                gap: 36px;
                align-items: center;
            }

            #events-upcoming-header p {
                font-size: 36px;
                text-align: center;
            }

            #events-upcoming-cards {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: stretch;
                gap: 24px;
            }

            .events-upcoming-card {
                width: 100%;
                max-width: 550px;
            }

            #events-upcoming-card-header {
                max-width: 550px;
            }

            #events-upcoming-card-header img {
                width: 100%;
            }

            #events-upcoming-card-info p:last-child {
                font-size: 22px;
            }
        }

        /* =========================
        TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-upcoming {
                width: 92%;
                margin-top: -70px;
            }

            #events-upcoming-contents {
                display: flex;
                flex-direction: column;
                gap: 32px;
                align-items: center;
            }

            #events-upcoming-header p {
                font-size: 32px;
                text-align: center;
            }

            #events-upcoming-cards {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .events-upcoming-card {
                width: 100%;
                max-width: 700px;
            }

            #events-upcoming-card-header {
                max-width: 700px;
            }

            #events-upcoming-card-header img {
                width: 100%;
            }

            #events-upcoming-card-info p:last-child {
                font-size: 22px;
            }
        }

        /* =========================
        MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-upcoming {
                width: 95%;
                margin-top: -40px;
                padding: 0 10px;
            }

            #events-upcoming-contents {
                gap: 28px;
            }

            #events-upcoming-header p {
                font-size: 28px;
                text-align: center;
            }

            #events-upcoming-cards {
                gap: 20px;
            }

            .events-upcoming-card {
                gap: 20px;
                border-radius: 16px;
            }

            #events-upcoming-card-header {
                border-top-left-radius: 16px;
                border-top-right-radius: 16px;
            }

            #events-upcoming-card-header-info {
                top: 12px;
                left: 12px;
                right: 12px;
            }

            #events-upcoming-card-header-info p {
                font-size: 13px;
                padding: 6px 12px;
            }

            #events-upcoming-card-info {
                gap: 16px;
                padding: 0 16px 20px;
            }

            #events-upcoming-card-info p:first-child {
                font-size: 14px;
            }

            #events-upcoming-card-info p:last-child {
                font-size: 20px;
            }
        }

        /* =========================
            SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-upcoming {
                margin-top: -20px;
            }

            #events-upcoming-header p {
                font-size: 24px;
            }

            #events-upcoming-card-header-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            #events-upcoming-card-header-info p {
                font-size: 12px;
                padding: 5px 10px;
            }

            #events-upcoming-card-info p:first-child {
                font-size: 13px;
            }

            #events-upcoming-card-info p:last-child {
                font-size: 18px;
                line-height: 1.5;
            }
        }

        .events-view-button {
            margin: 80px auto;
            width: 200px;
            height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;

            border-radius: 110px;
            border: 1px solid #000a2d;
            background: transparent;

            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            cursor: pointer;
            text-decoration: none;
            color: #000a2d;
            transition:
          transform 0.3s ease,
          border-color 0.3s ease;
        }

      .events-view-button:hover {
        border-color: #2a44b0;
        transform: translateX(10px);
      }

        .events-view-button:hover{
            border: 1px solid #0037a6;
        }

        .events-view-button svg {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(90deg, #13c5bb 0%, #2a44b0 100%);
        }

        #events-cta {
            width: 100%;
            max-width: 1310px;

            margin: 0 auto;
            margin-top: 80px;

            padding: 40px 44px;
            border-radius: 20px;

            box-sizing: border-box;
            position: relative;
            overflow: hidden;

            background:
                linear-gradient(90deg,
                    rgba(0, 0, 0, 1) 0%,
                    rgba(0, 0, 0, 0) 100%),
                url("images/events-details/cta.jpg") no-repeat center center;

            background-size: cover;
            background-position: center;

            z-index: 10;
        }

        #events-cta-details {
            width: 100%;
            max-width: 560px;

            display: flex;
            flex-direction: column;
            gap: 30px;

            position: relative;
            z-index: 2;
        }

        #events-cta-header {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        #events-cta-header h1,
        #events-cta-header h2,
        #events-cta-header p {
            margin: 0;
            font-family: "Gilroy", sans-serif;
            color: #ffffff;
        }

        #events-cta-header h1 {
            font-size: 18px;
            font-weight: 400;
        }

        #events-cta-header h2 {
            font-size: 32px;
            font-weight: 400;
            line-height: 1.3;
        }

        #events-cta-header p {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.7;
        }

        .events-cta-button {
            width: 200px;
            min-height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;

            padding: 14px 20px 14px 12px;

            border-radius: 110px;
            border: 1px solid #ffffff;

            background-color: transparent;
            text-decoration: none;

            font-family: "Gilroy", sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: #ffffff;

            cursor: pointer;
            transition: all 0.3s ease;

            box-sizing: border-box;
        }

        .events-cta-button:hover {
            background-color: rgba(255, 255, 255, 0.08);
        }

        .events-cta-button svg {
            width: 32px;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            padding: 5px;

            background: linear-gradient(180deg,
                    rgba(19, 197, 184, 1) 0%,
                    rgba(42, 68, 176, 1) 100%);
        }

        /* =========================
        LAPTOP
        ========================= */
        @media (max-width: 1439px) {
            #events-cta {
                width: 90%;
                padding: 40px;
            }

            #events-cta-header h2 {
                font-size: 30px;
            }
        }

        /* =========================
            TABLET
        ========================= */
        @media (max-width: 1023px) {
            #events-cta {
                width: 92%;
                margin-top: 70px;

                padding: 36px 32px;

                background-position: center;
            }

            #events-cta-details {
                max-width: 100%;
            }

            #events-cta-header {
                gap: 20px;
            }

            #events-cta-header h1 {
                font-size: 16px;
            }

            #events-cta-header h2 {
                font-size: 28px;
            }

            #events-cta-header p {
                font-size: 15px;
            }

            .events-cta-button {
                width: 220px;
                font-size: 16px;
            }
        }

        /* =========================
        MOBILE
        ========================= */
        @media (max-width: 767px) {
            #events-cta {
                width: 95%;

                margin-top: 60px;

                padding: 32px 24px;

                border-radius: 16px;

                background:
                    linear-gradient(180deg,
                        rgba(0, 0, 0, 0.85) 0%,
                        rgba(0, 0, 0, 0.5) 100%),
                    url("images/events-details/cta.jpg") no-repeat center center;

                background-size: cover;
            }

            #events-cta-details {
                gap: 24px;
            }

            #events-cta-header {
                gap: 18px;
            }

            #events-cta-header h1 {
                font-size: 15px;
            }

            #events-cta-header h2 {
                font-size: 24px;
            }

            #events-cta-header p {
                font-size: 14px;
                line-height: 1.7;
            }

            .events-cta-button {
                width: 100%;
                max-width: 260px;

                font-size: 15px;
                min-height: 50px;
            }

            .events-cta-button img {
                width: 28px;
                height: 28px;
            }
        }

        /* =========================
        SMALL MOBILE
        ========================= */
        @media (max-width: 479px) {
            #events-cta {
                width: 95%;

                margin-top: 50px;

                padding: 28px 20px;

                border-radius: 14px;
            }

            #events-cta-details {
                gap: 20px;
            }

            #events-cta-header {
                gap: 16px;
            }

            #events-cta-header h1 {
                font-size: 14px;
            }

            #events-cta-header h2 {
                font-size: 20px;
                line-height: 1.4;
            }

            #events-cta-header p {
                font-size: 13px;
            }

            .events-cta-button {
                width: 100%;
                max-width: 100%;

                font-size: 14px;
                padding: 12px 16px 12px 10px;
            }

            .events-cta-button img {
                width: 26px;
                height: 26px;
            }
        }
    </style>
</head>

<body id="events-body">
    <div id="events-hero-wrapper">
        <div id="events-hero">
            <div id="events-hero-header">
                <h1>WHO WE ARE / EVENTS</h1>
                <img src="images/events-details/line.png" alt="Line" />
            </div>
            <div id="events-hero-content">
                <h1>Teceze Summit North America 2026</h1>
                <p>
                    Seamless collaboration. Intelligent automation. Transformative experiences. Endpoint to cloud
                    designed, deployed, and managed as one connected ecosystem.
                </p>
            </div>
        </div>
        <div id="events-happening-details">
            <div class="events-happening-detail">
                <div class="events-happening-detail-header">
                    <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.75 1.25H11.875V0.625C11.875 0.45924 11.8092 0.300268 11.6919 0.183058C11.5747 0.065848 11.4158 0 11.25 0C11.0842 0 10.9253 0.065848 10.8081 0.183058C10.6908 0.300268 10.625 0.45924 10.625 0.625V1.25H4.375V0.625C4.375 0.45924 4.30915 0.300268 4.19194 0.183058C4.07473 0.065848 3.91576 0 3.75 0C3.58424 0 3.42527 0.065848 3.30806 0.183058C3.19085 0.300268 3.125 0.45924 3.125 0.625V1.25H1.25C0.918479 1.25 0.600537 1.3817 0.366116 1.61612C0.131696 1.85054 0 2.16848 0 2.5V15C0 15.3315 0.131696 15.6495 0.366116 15.8839C0.600537 16.1183 0.918479 16.25 1.25 16.25H13.75C14.0815 16.25 14.3995 16.1183 14.6339 15.8839C14.8683 15.6495 15 15.3315 15 15V2.5C15 2.16848 14.8683 1.85054 14.6339 1.61612C14.3995 1.3817 14.0815 1.25 13.75 1.25ZM10.7547 9.19219L7.00469 12.9422C6.94664 13.0003 6.87771 13.0464 6.80184 13.0779C6.72596 13.1093 6.64463 13.1255 6.5625 13.1255C6.48037 13.1255 6.39904 13.1093 6.32316 13.0779C6.24729 13.0464 6.17836 13.0003 6.12031 12.9422L4.24531 11.0672C4.12804 10.9499 4.06215 10.7909 4.06215 10.625C4.06215 10.4591 4.12804 10.3001 4.24531 10.1828C4.36259 10.0655 4.52165 9.99965 4.6875 9.99965C4.85335 9.99965 5.01241 10.0655 5.12969 10.1828L6.5625 11.6164L9.87031 8.30781C9.92838 8.24974 9.99732 8.20368 10.0732 8.17225C10.1491 8.14083 10.2304 8.12465 10.3125 8.12465C10.3946 8.12465 10.4759 8.14083 10.5518 8.17225C10.6277 8.20368 10.6966 8.24974 10.7547 8.30781C10.8128 8.36588 10.8588 8.43482 10.8902 8.51069C10.9217 8.58656 10.9378 8.66788 10.9378 8.75C10.9378 8.83212 10.9217 8.91344 10.8902 8.98931C10.8588 9.06518 10.8128 9.13412 10.7547 9.19219ZM1.25 5V2.5H3.125V3.125C3.125 3.29076 3.19085 3.44973 3.30806 3.56694C3.42527 3.68415 3.58424 3.75 3.75 3.75C3.91576 3.75 4.07473 3.68415 4.19194 3.56694C4.30915 3.44973 4.375 3.29076 4.375 3.125V2.5H10.625V3.125C10.625 3.29076 10.6908 3.44973 10.8081 3.56694C10.9253 3.68415 11.0842 3.75 11.25 3.75C11.4158 3.75 11.5747 3.68415 11.6919 3.56694C11.8092 3.44973 11.875 3.29076 11.875 3.125V2.5H13.75V5H1.25Z"
                            fill="#00CABD" />
                    </svg>
                    <p>Date</p>
                </div>
                <div class="events-happening-detail-info">
                    <p>March 20, 2026</p>
                </div>
            </div>
            <div class="events-happening-detail">
                <div class="events-happening-detail-header">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.56753 1.06753L1.06754 3.56753C0.95026 3.68481 0.7912 3.75069 0.625348 3.75069C0.459495 3.75069 0.300435 3.68481 0.18316 3.56753C0.0658847 3.45026 1.74754e-09 3.2912 0 3.12535C-1.74754e-09 2.95949 0.0658847 2.80044 0.18316 2.68316L2.68316 0.18316C2.80044 0.0658846 2.9595 0 3.12535 0C3.2912 0 3.45026 0.0658846 3.56753 0.18316C3.68481 0.300435 3.75069 0.459495 3.75069 0.625347C3.75069 0.7912 3.68481 0.950259 3.56753 1.06753ZM17.3175 2.68316L14.8175 0.18316C14.7003 0.0658846 14.5412 -3.26935e-09 14.3753 0C14.2095 3.26935e-09 14.0504 0.0658846 13.9332 0.18316C13.8159 0.300435 13.75 0.459495 13.75 0.625347C13.75 0.7912 13.8159 0.950259 13.9332 1.06753L16.4332 3.56753C16.4912 3.6256 16.5602 3.67167 16.636 3.70309C16.7119 3.73452 16.7932 3.75069 16.8753 3.75069C16.9575 3.75069 17.0388 3.73452 17.1147 3.70309C17.1905 3.67167 17.2595 3.6256 17.3175 3.56753C17.3756 3.50947 17.4217 3.44053 17.4531 3.36466C17.4845 3.28879 17.5007 3.20747 17.5007 3.12535C17.5007 3.04323 17.4845 2.96191 17.4531 2.88604C17.4217 2.81017 17.3756 2.74123 17.3175 2.68316ZM16.2503 8.75035C16.2503 10.2337 15.8105 11.6838 14.9864 12.9171C14.1623 14.1505 12.9909 15.1118 11.6205 15.6794C10.25 16.2471 8.74203 16.3956 7.28717 16.1062C5.83231 15.8168 4.49594 15.1025 3.44705 14.0536C2.39815 13.0048 1.68385 11.6684 1.39446 10.2135C1.10507 8.75867 1.25359 7.25067 1.82125 5.88022C2.38891 4.50978 3.3502 3.33844 4.58357 2.51433C5.81694 1.69021 7.26699 1.25035 8.75035 1.25035C10.7388 1.25262 12.6451 2.04353 14.0511 3.44956C15.4572 4.85559 16.2481 6.76192 16.2503 8.75035ZM13.7503 8.75035C13.7503 8.58459 13.6845 8.42561 13.5673 8.3084C13.4501 8.19119 13.2911 8.12535 13.1253 8.12535H9.37535V4.37535C9.37535 4.20959 9.3095 4.05062 9.19229 3.93341C9.07508 3.8162 8.91611 3.75035 8.75035 3.75035C8.58459 3.75035 8.42562 3.8162 8.30841 3.93341C8.1912 4.05062 8.12535 4.20959 8.12535 4.37535V8.75035C8.12535 8.91611 8.1912 9.07508 8.30841 9.19229C8.42562 9.3095 8.58459 9.37535 8.75035 9.37535H13.1253C13.2911 9.37535 13.4501 9.3095 13.5673 9.19229C13.6845 9.07508 13.7503 8.91611 13.7503 8.75035Z"
                            fill="#00CABD" />
                    </svg>
                    <p>Time</p>
                </div>
                <div class="events-happening-detail-info">
                    <p>10:00 AM - 4:00 PM PST</p>
                </div>
            </div>
            <div class="events-happening-detail">
                <div class="events-happening-detail-header">
                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.875 0C5.05227 0.00206776 3.30479 0.72706 2.01592 2.01592C0.72706 3.30479 0.00206776 5.05227 0 6.875C0 12.7578 6.25 17.2008 6.51641 17.3867C6.62149 17.4603 6.74669 17.4998 6.875 17.4998C7.00331 17.4998 7.12851 17.4603 7.23359 17.3867C7.5 17.2008 13.75 12.7578 13.75 6.875C13.7479 5.05227 13.0229 3.30479 11.7341 2.01592C10.4452 0.72706 8.69773 0.00206776 6.875 0ZM6.875 4.375C7.36945 4.375 7.8528 4.52162 8.26393 4.79633C8.67505 5.07103 8.99548 5.46148 9.1847 5.91829C9.37392 6.37511 9.42343 6.87777 9.32696 7.36273C9.2305 7.84768 8.9924 8.29314 8.64277 8.64277C8.29314 8.9924 7.84768 9.2305 7.36273 9.32696C6.87777 9.42343 6.37511 9.37392 5.91829 9.1847C5.46148 8.99548 5.07103 8.67505 4.79633 8.26393C4.52162 7.8528 4.375 7.36945 4.375 6.875C4.375 6.21196 4.63839 5.57607 5.10723 5.10723C5.57607 4.63839 6.21196 4.375 6.875 4.375Z"
                            fill="#00CABD" />
                    </svg>
                    <p>Location</p>
                </div>
                <div class="events-happening-detail-info">
                    <p>Chennai/Virtual</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="events-introduction">
        <div id="events-introduction-header">
            <p>Introduction</p>
            <div id="events-introduction-subheader">
                <p>Experience Teceze Summit North America 2026</p>
                <p>Teceze Summit North America 2026 is a free one-day event where the latest in cloud innovation comes
                    to life. From agentic AI to serverless computing, discover the cutting-edge technologies that are
                    revolutionizing industries and empowering businesses to lead in the digital era. <br />
                    This complimentary event is your opportunity to learn from industry leaders, collaborate with peers,
                    and get the answers to your questions directly from AWS experts. <br />
                    Customize your experience by choosing sessions that best fit your business needs, across interactive
                    workshops and customer showcases, all while networking with like-minded professionals.</p>
            </div>
        </div>
        <div id="events-introduction-highlights">
            <img src="images/events-details/highlights.jpg" alt="Highlights" width="570px" height="459px" />
            <div id="events-introduction-highlights-content">
                <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.375 0C19.5541 0 14.8414 1.42957 10.833 4.10793C6.82454 6.78629 3.70033 10.5931 1.85545 15.0471C0.0105613 19.501 -0.472145 24.402 0.46837 29.1303C1.40888 33.8586 3.73038 38.2018 7.13928 41.6107C10.5482 45.0196 14.8914 47.3411 19.6197 48.2816C24.348 49.2222 29.249 48.7394 33.7029 46.8946C38.1569 45.0497 41.9637 41.9255 44.6421 37.917C47.3204 33.9086 48.75 29.1959 48.75 24.375C48.7432 17.9124 46.1729 11.7165 41.6032 7.14681C37.0335 2.57709 30.8376 0.00682458 24.375 0ZM33.8789 25.9172L21.6914 34.3547C21.4101 34.5492 21.0808 34.6631 20.7394 34.684C20.398 34.7049 20.0573 34.6319 19.7544 34.4731C19.4514 34.3142 19.1977 34.0755 19.0206 33.7828C18.8436 33.4901 18.75 33.1546 18.75 32.8125V15.9375C18.75 15.5954 18.8436 15.2599 19.0206 14.9672C19.1977 14.6745 19.4514 14.4358 19.7544 14.2769C20.0573 14.1181 20.398 14.0451 20.7394 14.066C21.0808 14.0869 21.4101 14.2008 21.6914 14.3953L33.8789 22.8328C34.1284 23.0053 34.3323 23.2357 34.4731 23.5044C34.6139 23.773 34.6875 24.0717 34.6875 24.375C34.6875 24.6783 34.6139 24.977 34.4731 25.2456C34.3323 25.5143 34.1284 25.7447 33.8789 25.9172Z"
                        fill="white" />
                </svg>
                <p>Watch Teceze Summit Hightlights</p>
            </div>
        </div>
    </div>

    <div id="events-agenda">
        <div id="events-agenda-contents">
            <div id="events-agenda-timeline">
                <p class="events-agenda-timeline-header">Agenda</p>
                <div id="events-agenda-timeline-details">
                    <div>
                        <p>09:00 AM</p>
                        <p>Registration & Breakfast</p>
                    </div>
                    <hr style="border: 1px solid rgba(255, 255, 255, 0.3);" />
                    <div>
                        <p>10:00 AM</p>
                        <p>Opening Keynote: The Future is Now</p>
                    </div>
                    <hr style="border: 1px solid rgba(255, 255, 255, 0.3);" />
                    <div>
                        <p>12:00 PM</p>
                        <p>Building Scalable Systems</p>
                    </div>
                    <hr style="border: 1px solid rgba(255, 255, 255, 0.3);" />
                    <div>
                        <p>02:00 PM</p>
                        <p>Networking Lunch</p>
                    </div>
                </div>
            </div>
            <div id="events-agenda-details">
                <p>Visit the Teceze booth at #4724 and attend our sessions at Cisco Live 2026.</p>
                <p>Explore how Teceze and Cisco together enable intelligent, secure, and resilient digital enterprises.
                    Thought provoking sessions from TCS leaders will showcase AI‑powered innovations across  agentic AI
                    op, zero ops, network resilience, AI enabled infrastructure, observability, next gen managed SOC
                    operations and AI led data centre transformations. Let’s build the future of networks, cloud, and
                    customer experience together powered by AI and driven by outcomes.</p>
            </div>
        </div>
    </div>

    <div id="events-keyspeakers">
        <div id="events-keyspeakers-contents">
            <div class="events-keyspeakers-content">
                <div id="events-keyspeakers-person">
                    <img src="images/events-details/person1.png" alt="Person 1" width="290px" height="367px" />
                    <div id="events-keyspeakers-person-info">
                        <p>Janakan Nadarajah</p>
                        <p>Chief Executive Officer</p>
                    </div>
                </div>
                <div id="events-keyspeakers-header-info">
                    <p>
                        Driving Strategic Innovation and Business Excellence Through Visionary Leadership
                    </p>
                    <p>Meet the leaders guiding strategic growth, innovation, and business excellence across the
                        organization. With a strong vision for the future, they drive strategic initiatives that empower
                        businesses through technology, security, and digital transformation.</p>
                </div>
            </div>
            <div class="events-keyspeakers-content">
                <div id="events-keyspeakers-header-info">
                    <p>
                        Delivering Exceptional Customer Success Through Operational Excellence and Innovation
                    </p>
                    <p>Learn from the experts dedicated to delivering exceptional customer experiences and operational
                        excellence. Their leadership ensures seamless service delivery, strong client relationships, and
                        innovative solutions tailored to evolving business needs.</p>
                </div>
                <div id="events-keyspeakers-person">
                    <img src="images/events-details/person2.png" alt="Person 2" width="290px" height="367px" />
                    <div id="events-keyspeakers-person-info">
                        <p>Shibu Thomas</p>
                        <p>Senior Vice President <br /> Head of Customer Delivery Success</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="events-upcoming">
        <div id="events-upcoming-contents">
            <div id="events-upcoming-header">
                <p>Other Upcoming Events</p>
            </div>
            <div id="events-upcoming-cards">
                <div class="events-upcoming-card">
                    <div id="events-upcoming-card-header">
                        <img src="images/events-details/event1.jpg" alt="Event 1" width="400px" height="255px" />
                        <div id="events-upcoming-card-header-info">
                            <p>April 25, 2026</p>
                            <p>10am - 2am</p>
                        </div>
                    </div>
                    <div id="events-upcoming-card-info">
                        <p>📍Chennai / Virtual</p>
                        <p>Meet Teceze at North America Summit 2026</p>
                    </div>
                </div>
                <div class="events-upcoming-card">
                    <div id="events-upcoming-card-header">
                        <img src="images/events-details/event2.jpg" alt="Event 2" width="400px" height="255px" />
                        <div id="events-upcoming-card-header-info">
                            <p>April 25, 2026</p>
                            <p>10am - 2am</p>
                        </div>
                    </div>
                    <div id="events-upcoming-card-info">
                        <p>📍Chennai / Virtual</p>
                        <p>Meet Teceze at North America Summit 2026</p>
                    </div>
                </div>
                <div class="events-upcoming-card">
                    <div id="events-upcoming-card-header">
                        <img src="images/events-details/event3.jpg" alt="Event 3" width="400px" height="255px" />
                        <div id="events-upcoming-card-header-info">
                            <p>April 25, 2026</p>
                            <p>10am - 2am</p>
                        </div>
                    </div>
                    <div id="events-upcoming-card-info">
                        <p>📍Chennai / Virtual</p>
                        <p>Meet Teceze at North America Summit 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <a class="events-view-button" href="https://teal-mule-553916.hostingersite.com/EventList.php">
        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14.8172 6.69254L9.19219 12.3175C9.07491 12.4348 8.91585 12.5007 8.75 12.5007C8.58415 12.5007 8.42509 12.4348 8.30781 12.3175C8.19054 12.2003 8.12465 12.0412 8.12465 11.8753C8.12465 11.7095 8.19054 11.5504 8.30781 11.4332L12.8664 6.87535H0.625C0.45924 6.87535 0.300269 6.8095 0.183058 6.69229C0.0658481 6.57508 0 6.41611 0 6.25035C0 6.08459 0.0658481 5.92562 0.183058 5.80841C0.300269 5.6912 0.45924 5.62535 0.625 5.62535H12.8664L8.30781 1.06753C8.19054 0.95026 8.12465 0.7912 8.12465 0.625347C8.12465 0.459495 8.19054 0.300435 8.30781 0.18316C8.42509 0.0658846 8.58415 0 8.75 0C8.91585 0 9.07491 0.0658846 9.19219 0.18316L14.8172 5.80816C14.8753 5.86621 14.9214 5.93514 14.9529 6.01101C14.9843 6.08688 15.0005 6.16821 15.0005 6.25035C15.0005 6.33248 14.9843 6.41381 14.9529 6.48969C14.9214 6.56556 14.8753 6.63449 14.8172 6.69254Z"
                fill="white" />
        </svg>
        View All Events
    </a>

    <div id="events-cta">
        <div id="events-cta-details">
            <div id="events-cta-header">
                <h1>Get in Touch</h1>
                <h2>Join us at Teceze Summit</h2>
                <p>Let's discuss how Teceze can deliver for your organization.</p>
            </div>
            <a class="events-cta-button" href="https://teal-mule-553916.hostingersite.com/EventList.php">
                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.8172 6.69254L9.19219 12.3175C9.07491 12.4348 8.91585 12.5007 8.75 12.5007C8.58415 12.5007 8.42509 12.4348 8.30781 12.3175C8.19054 12.2003 8.12465 12.0412 8.12465 11.8753C8.12465 11.7095 8.19054 11.5504 8.30781 11.4332L12.8664 6.87535H0.625C0.45924 6.87535 0.300269 6.8095 0.183058 6.69229C0.0658481 6.57508 0 6.41611 0 6.25035C0 6.08459 0.0658481 5.92562 0.183058 5.80841C0.300269 5.6912 0.45924 5.62535 0.625 5.62535H12.8664L8.30781 1.06753C8.19054 0.95026 8.12465 0.7912 8.12465 0.625347C8.12465 0.459495 8.19054 0.300435 8.30781 0.18316C8.42509 0.0658846 8.58415 0 8.75 0C8.91585 0 9.07491 0.0658846 9.19219 0.18316L14.8172 5.80816C14.8753 5.86621 14.9214 5.93514 14.9529 6.01101C14.9843 6.08688 15.0005 6.16821 15.0005 6.25035C15.0005 6.33248 14.9843 6.41381 14.9529 6.48969C14.9214 6.56556 14.8753 6.63449 14.8172 6.69254Z"
                        fill="white" />
                </svg>
                Register Now
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>

<?php include 'footer.php'; ?>
</html>