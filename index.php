<?php
// ==========================================
// WEBSITE KEJUTAN UNTUK IBU & AYAH
// PART 1 - HALAMAN PEMBUKA
// ==========================================

$title = "Untuk Ibu & Ayah ❤️";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($title) ?></title>

    <style>
        /* ==========================================
           RESET
        ========================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        /* ==========================================
           BODY & BACKGROUND
        ========================================== */

        body {
            min-height: 100vh;

            font-family: Georgia, "Times New Roman", serif;
            color: #ffffff;

            overflow-x: hidden;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.22),
                    rgba(0, 0, 0, 0.22)
                ),
                url("assets/images/background-gold.png");

            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* ==========================================
           BACKGROUND EFFECT
        ========================================== */

        .background {
            position: fixed;
            inset: 0;

            overflow: hidden;
            pointer-events: none;

            z-index: 0;
        }

        /* ==========================================
           GOLD GLOW
        ========================================== */

        .glow {
            position: absolute;

            width: 350px;
            height: 350px;

            border-radius: 50%;

            background: rgba(255, 214, 153, 0.08);

            filter: blur(80px);

            animation: glowMove 8s ease-in-out infinite;
        }

        .glow.one {
            top: -100px;
            left: -100px;
        }

        .glow.two {
            right: -100px;
            bottom: -100px;

            animation-delay: 3s;
        }

        @keyframes glowMove {
            0%,
            100% {
                transform: translateY(0);
                opacity: 0.6;
            }

            50% {
                transform: translateY(-25px);
                opacity: 1;
            }
        }

        /* ==========================================
           FLOATING PARTICLES
        ========================================== */

        .particle {
            position: absolute;

            width: 3px;
            height: 3px;

            border-radius: 50%;

            background: rgba(255, 220, 170, 0.75);

            box-shadow:
                0 0 8px rgba(255, 210, 140, 0.8),
                0 0 15px rgba(255, 190, 100, 0.4);

            animation: float 8s infinite ease-in-out;
        }

        .p1 {
            left: 10%;
            top: 20%;
            animation-delay: 0s;
        }

        .p2 {
            left: 25%;
            top: 75%;
            animation-delay: 2s;
        }

        .p3 {
            left: 70%;
            top: 18%;
            animation-delay: 4s;
        }

        .p4 {
            left: 85%;
            top: 65%;
            animation-delay: 1s;
        }

        .p5 {
            left: 50%;
            top: 10%;
            animation-delay: 3s;
        }

        /* ==========================================
           HERO
        ========================================== */

        .hero {
            position: relative;
            z-index: 2;

            min-height: 100vh;
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px 25px;

            text-align: center;
        }

        /* ==========================================
           CONTENT
        ========================================== */

        .content {
            width: 100%;
            max-width: 900px;

            padding: 30px;

            animation: fadeUp 1.5s ease forwards;
        }

        /* ==========================================
           SMALL TEXT
        ========================================== */

        .small-text {
            margin-bottom: 25px;

            font-size: 14px;
            letter-spacing: 6px;

            text-transform: uppercase;

            color: #d8c2a3;

            opacity: 0;

            animation: fadeIn 1.5s ease 0.3s forwards;
        }

        /* ==========================================
           TITLE
        ========================================== */

        h1 {
            margin-bottom: 30px;

            font-size: clamp(45px, 8vw, 95px);
            line-height: 1.05;

            font-weight: normal;
            letter-spacing: 2px;

            background:
                linear-gradient(
                    120deg,
                    #ffffff,
                    #e7d0aa,
                    #ffffff,
                    #c9a96e,
                    #ffffff
                );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;

            text-shadow:
                0 0 30px rgba(231, 201, 149, 0.15);

            opacity: 0;

            animation:
                titleReveal 1.8s ease 0.6s forwards,
                titleGlow 4s ease-in-out 2.5s infinite alternate;
        }

        @keyframes titleGlow {
            from {
                filter: brightness(0.95);
            }

            to {
                filter: brightness(1.15);
            }
        }

        /* ==========================================
           DESCRIPTION
        ========================================== */

        .description {
            max-width: 650px;

            margin: 0 auto 45px;

            font-size: 18px;
            line-height: 1.9;

            color: #e0e0e0;

            opacity: 0;

            animation: fadeIn 1.5s ease 1.1s forwards;
        }

        .description span {
            color: #e7c995;
            font-weight: bold;
        }

        /* ==========================================
           START BUTTON
        ========================================== */

        .start-button {
            position: relative;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 230px;

            padding: 17px 35px;

            border: 1px solid rgba(231, 201, 149, 0.7);
            border-radius: 50px;

            color: #ffffff;

            text-decoration: none;

            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;

            letter-spacing: 3px;
            text-transform: uppercase;

            background: rgba(0, 0, 0, 0.25);

            box-shadow:
                0 0 20px rgba(231, 201, 149, 0.06);

            overflow: hidden;

            transition:
                transform 0.3s ease,
                background 0.3s ease,
                box-shadow 0.3s ease,
                border-color 0.3s ease;

            opacity: 0;

            animation: fadeIn 1.5s ease 1.5s forwards;
        }

        /* Cahaya yang melewati tombol */

        .start-button::before {
            content: "";

            position: absolute;

            top: 0;
            left: -120%;

            width: 70%;
            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, 0.35),
                    transparent
                );

            transform: skewX(-25deg);

            transition: left 0.7s ease;
        }

        .start-button:hover::before {
            left: 150%;
        }

        .start-button:hover {
            transform: translateY(-5px);

            background: rgba(231, 201, 149, 0.14);

            border-color: rgba(231, 201, 149, 1);

            box-shadow:
                0 10px 35px rgba(231, 201, 149, 0.2),
                0 0 30px rgba(231, 201, 149, 0.08);
        }

        /* ==========================================
           HEART
        ========================================== */

        .heart {
            margin-left: 10px;

            color: #e9c58f;

            font-size: 18px;

            animation: heartBeat 1.8s ease-in-out infinite;
        }

        @keyframes heartBeat {
            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.18);
            }
        }

        /* ==========================================
           BOTTOM TEXT
        ========================================== */

        .bottom-text {
            position: absolute;

            bottom: 25px;
            left: 0;

            width: 100%;

            text-align: center;

            font-family: Arial, sans-serif;
            font-size: 11px;

            letter-spacing: 3px;

            color: rgba(255, 255, 255, 0.45);

            text-transform: uppercase;
        }

        /* ==========================================
           ANIMATIONS
        ========================================== */

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes titleReveal {
            from {
                opacity: 0;
                transform: scale(0.95);
                filter: blur(8px);
            }

            to {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
            }
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
                opacity: 0.3;
            }

            50% {
                transform: translateY(-40px);
                opacity: 1;
            }
        }

        /* ==========================================
           MOBILE
        ========================================== */

        @media (max-width: 600px) {

            body {
                background-attachment: scroll;
                background-position: center center;
            }

            .hero {
                min-height: 100svh;
                padding: 25px 18px;
            }

            .content {
                padding: 20px 10px;
            }

            .small-text {
                font-size: 11px;
                letter-spacing: 4px;
                margin-bottom: 20px;
            }

            h1 {
                font-size: clamp(42px, 13vw, 65px);
                line-height: 1.08;
            }

            .description {
                font-size: 16px;
                line-height: 1.8;
                margin-bottom: 35px;
            }

            .start-button {
                width: 100%;
                max-width: 280px;
            }

            .bottom-text {
                bottom: 18px;
                font-size: 9px;
                letter-spacing: 2px;
            }

            .glow {
                width: 250px;
                height: 250px;
            }
        }

        /* ==========================================
           REDUCE MOTION
        ========================================== */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- ==========================================
         BACKGROUND
    ========================================== -->

    <div class="background">

        <div class="glow one"></div>
        <div class="glow two"></div>

        <div class="particle p1"></div>
        <div class="particle p2"></div>
        <div class="particle p3"></div>
        <div class="particle p4"></div>
        <div class="particle p5"></div>

    </div>


    <!-- ==========================================
         HALAMAN UTAMA
    ========================================== -->

    <main class="hero">

        <div class="content">

            <div class="small-text">
                Sebuah cerita kecil
            </div>

            <h1>
                Untuk Ibu &amp; Ayah
            </h1>

            <p class="description">
                Ada sebuah cerita yang mungkin belum pernah
                aku ceritakan dengan cara seperti ini.

                <br><br>

                Tentang <span>dua orang</span> yang telah memberikan
                begitu banyak hal dalam hidupku.

                <br><br>

                Hari ini, aku ingin mengajak Ibu dan Ayah
                melihat kembali cerita itu.
            </p>

            <a href="cerita.php" class="start-button">
                Mulai Cerita
                <span class="heart">♥</span>
            </a>

        </div>

        <div class="bottom-text">
            Dibuat dengan penuh cinta
        </div>

    </main>

</body>
</html>