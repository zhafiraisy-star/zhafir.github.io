<?php

// ==========================================
// WEBSITE KEJUTAN UNTUK IBU & AYAH
// PART 2 - HALAMAN CERITA
// ==========================================

$title = "Cerita Kita — Ibu & Ayah";

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            font-family: Georgia, "Times New Roman", serif;

            color: #ffffff;

            overflow-x: hidden;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.30),
                    rgba(0, 0, 0, 0.30)
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

            pointer-events: none;

            overflow: hidden;

            z-index: 0;
        }

        .glow {
            position: absolute;

            width: 400px;
            height: 400px;

            border-radius: 50%;

            background: rgba(231, 201, 149, 0.08);

            filter: blur(100px);
        }

        .glow-1 {
            top: -150px;
            left: -150px;
        }

        .glow-2 {
            right: -150px;
            bottom: -150px;
        }


        /* ==========================================
           HERO
        ========================================== */

        .hero {
            position: relative;
            z-index: 2;

            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 80px 25px;
        }

        .hero-content {
            max-width: 850px;

            opacity: 0;

            transform: translateY(40px);

            animation:
                heroAppear 1.5s ease forwards;
        }

        .label {
            margin-bottom: 25px;

            font-family: Arial, sans-serif;

            font-size: 12px;

            letter-spacing: 6px;

            text-transform: uppercase;

            color: #d8bd91;
        }

        .hero h1 {
            margin-bottom: 30px;

            font-size: clamp(48px, 8vw, 90px);

            font-weight: normal;

            line-height: 1.1;

            background:
                linear-gradient(
                    120deg,
                    #ffffff,
                    #e7cfaa,
                    #ffffff
                );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;

            text-shadow:
                0 10px 40px rgba(0, 0, 0, 0.35);
        }

        .hero p {
            max-width: 680px;

            margin: auto;

            color: #e0e0e0;

            font-size: 19px;

            line-height: 1.9;
        }

        .hero strong {
            color: #e7c995;

            font-weight: normal;
        }


        /* ==========================================
           SCROLL INDICATOR
        ========================================== */

        .scroll {
            position: absolute;

            bottom: 35px;
            left: 50%;

            transform: translateX(-50%);

            font-family: Arial, sans-serif;

            font-size: 10px;

            letter-spacing: 4px;

            color: rgba(255, 255, 255, 0.5);

            text-transform: uppercase;
        }

        .scroll::after {
            content: "";

            display: block;

            width: 1px;
            height: 45px;

            margin: 12px auto 0;

            background:
                linear-gradient(
                    transparent,
                    rgba(231, 201, 149, 0.8)
                );
        }


        /* ==========================================
           STORY SECTION
        ========================================== */

        .story {
            position: relative;
            z-index: 2;

            max-width: 1000px;

            margin: auto;

            padding: 120px 25px 80px;
        }

        .section-title {
            text-align: center;

            margin-bottom: 100px;
        }

        .section-title span {
            display: block;

            margin-bottom: 15px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 5px;

            text-transform: uppercase;

            color: #cdb083;
        }

        .section-title h2 {
            font-size: clamp(34px, 6vw, 55px);

            font-weight: normal;

            line-height: 1.2;
        }


        /* ==========================================
           TIMELINE
        ========================================== */

        .timeline {
            position: relative;

            max-width: 850px;

            margin: auto;
        }

        .timeline::before {
            content: "";

            position: absolute;

            top: 0;
            bottom: 0;

            left: 50%;

            width: 1px;

            background:
                linear-gradient(
                    to bottom,
                    transparent,
                    rgba(231, 201, 149, 0.7),
                    transparent
                );

            transform: translateX(-50%);
        }

        .story-item {
            position: relative;

            width: 50%;

            padding: 20px 45px;

            margin-bottom: 100px;

            opacity: 0;

            transform: translateY(40px);

            transition:
                opacity 0.8s ease,
                transform 0.8s ease;
        }

        .story-item.show {
            opacity: 1;

            transform: translateY(0);
        }

        .story-item:nth-child(odd) {
            left: 0;

            text-align: right;
        }

        .story-item:nth-child(even) {
            left: 50%;

            text-align: left;
        }


        /* ==========================================
           TIMELINE DOT
        ========================================== */

        .story-item::before {
            content: "";

            position: absolute;

            top: 28px;

            width: 12px;
            height: 12px;

            border-radius: 50%;

            background: #e7c995;

            box-shadow:
                0 0 0 5px rgba(231, 201, 149, 0.08),
                0 0 25px rgba(231, 201, 149, 0.5);
        }

        .story-item:nth-child(odd)::before {
            right: -6px;
        }

        .story-item:nth-child(even)::before {
            left: -6px;
        }


        /* ==========================================
           STORY CONTENT
        ========================================== */

        .year {
            margin-bottom: 15px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 4px;

            color: #d4b77e;
        }

        .story-item h3 {
            margin-bottom: 18px;

            font-size: 29px;

            font-weight: normal;

            line-height: 1.3;
        }

        .story-item p {
            color: #c8c8c8;

            font-size: 16px;

            line-height: 1.9;
        }


        /* ==========================================
           QUOTE
        ========================================== */

        .quote {
            max-width: 750px;

            margin: 80px auto 120px;

            padding: 50px 30px;

            text-align: center;

            border-top:
                1px solid rgba(231, 201, 149, 0.3);

            border-bottom:
                1px solid rgba(231, 201, 149, 0.3);
        }

        .quote p {
            font-size: clamp(22px, 4vw, 32px);

            line-height: 1.7;

            font-style: italic;

            color: #eeeeee;
        }

        .quote span {
            display: block;

            margin-top: 25px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 3px;

            color: #c8a86e;

            text-transform: uppercase;
        }


        /* ==========================================
           NEXT BUTTON
        ========================================== */

        .next {
            text-align: center;

            padding-bottom: 100px;
        }

        .next a {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 240px;

            padding: 16px 30px;

            border:
                1px solid rgba(231, 201, 149, 0.65);

            border-radius: 50px;

            color: #ffffff;

            text-decoration: none;

            font-family: Arial, sans-serif;

            font-size: 12px;

            letter-spacing: 3px;

            text-transform: uppercase;

            background:
                rgba(0, 0, 0, 0.20);

            backdrop-filter: blur(8px);

            transition: 0.3s ease;
        }

        .next a:hover {
            transform: translateY(-4px);

            background:
                rgba(231, 201, 149, 0.12);

            box-shadow:
                0 12px 40px
                rgba(231, 201, 149, 0.18);
        }

        .arrow {
            margin-left: 12px;

            font-size: 17px;

            color: #e7c995;
        }


        /* ==========================================
           FOOTER
        ========================================== */

        footer {
            position: relative;
            z-index: 2;

            padding: 35px 20px;

            text-align: center;

            font-family: Arial, sans-serif;

            font-size: 10px;

            letter-spacing: 3px;

            color: rgba(255, 255, 255, 0.4);

            text-transform: uppercase;
        }


        /* ==========================================
           ANIMATION
        ========================================== */

        @keyframes heroAppear {

            from {
                opacity: 0;

                transform:
                    translateY(40px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

        }


        /* ==========================================
           MOBILE
        ========================================== */

        @media (max-width: 700px) {

            .hero {
                min-height: 90vh;

                padding:
                    100px 20px
                    80px;
            }

            .hero p {
                font-size: 16px;

                line-height: 1.8;
            }

            .scroll {
                bottom: 25px;
            }

            .timeline::before {
                left: 10px;
            }

            .story-item,
            .story-item:nth-child(even),
            .story-item:nth-child(odd) {

                width: 100%;

                left: 0;

                text-align: left;

                padding:
                    20px
                    20px
                    20px
                    45px;
            }

            .story-item::before,
            .story-item:nth-child(odd)::before,
            .story-item:nth-child(even)::before {

                left: 4px;

                right: auto;
            }

            .story {
                padding:
                    80px
                    20px
                    50px;
            }

            .section-title {
                margin-bottom: 60px;
            }

            .story-item {
                margin-bottom: 70px;
            }

            .story-item h3 {
                font-size: 25px;
            }

            .story-item p {
                font-size: 15px;
            }

            .quote {
                margin:
                    50px auto
                    80px;

                padding:
                    40px 20px;
            }

            .next {
                padding-bottom: 70px;
            }

        }


        /* ==========================================
           REDUCED MOTION
        ========================================== */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }

            .hero-content,
            .story-item {
                animation: none;

                opacity: 1;

                transform: none;

                transition: none;
            }

        }

    </style>

</head>


<body>


    <!-- ==========================================
         BACKGROUND
    ========================================== -->

    <div class="background">

        <div class="glow glow-1"></div>

        <div class="glow glow-2"></div>

    </div>


    <!-- ==========================================
         HERO
    ========================================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="label">
                Bab Pertama
            </div>

            <h1>
                Sebuah Cerita
            </h1>

            <p>

                Setiap keluarga memiliki sebuah cerita.

                <br>

                Cerita tentang pertemuan,
                perjuangan, tawa, air mata,
                dan orang-orang yang selalu ada.

                <br><br>

                Dan di dalam ceritaku,
                ada dua nama yang selalu menjadi
                bagian paling penting.

                <br><br>

                <strong>Ibu &amp; Ayah.</strong>

            </p>

        </div>


        <div class="scroll">
            Scroll
        </div>

    </section>


    <!-- ==========================================
         STORY
    ========================================== -->

    <section class="story">

        <div class="section-title">

            <span>
                Perjalanan
            </span>

            <h2>
                Dari Awal Hingga Sekarang
            </h2>

        </div>


        <div class="timeline">


            <!-- CERITA 1 -->

            <div class="story-item">

                <div class="year">
                    AWAL
                </div>

                <h3>
                    Sebelum Aku Hadir
                </h3>

                <p>

                    Ada dua orang yang memulai sebuah
                    perjalanan bersama.

                    Mereka mungkin tidak tahu bagaimana
                    perjalanan itu akan berjalan.

                    Tapi mereka memilih untuk tetap
                    melangkah bersama.

                </p>

            </div>


            <!-- CERITA 2 -->

            <div class="story-item">

                <div class="year">
                    KEMUDIAN
                </div>

                <h3>
                    Sebuah Keluarga
                </h3>

                <p>

                    Waktu terus berjalan.

                    Rumah mulai dipenuhi suara,
                    tawa, cerita, dan berbagai
                    kenangan kecil yang mungkin
                    terlihat sederhana.

                    Tetapi justru dari hal-hal
                    sederhana itulah sebuah keluarga
                    menjadi berarti.

                </p>

            </div>


            <!-- CERITA 3 -->

            <div class="story-item">

                <div class="year">
                    PERJALANAN
                </div>

                <h3>
                    Hari-Hari Yang Tidak Mudah
                </h3>

                <p>

                    Tidak semua hari berjalan
                    seperti yang diharapkan.

                    Ada masa sulit,
                    ada kekhawatiran,
                    ada pengorbanan.

                    Tetapi Ibu dan Ayah tetap
                    berusaha memberikan yang
                    terbaik untuk keluarga.

                </p>

            </div>


            <!-- CERITA 4 -->

            <div class="story-item">

                <div class="year">
                    HARI INI
                </div>

                <h3>
                    Aku Bisa Berdiri
                </h3>

                <p>

                    Mungkin sekarang aku sudah
                    semakin besar.

                    Tetapi semakin aku mengerti
                    tentang kehidupan,
                    semakin aku sadar bahwa
                    banyak hal yang bisa kulakukan
                    hari ini tidak lepas dari
                    perjuangan Ibu dan Ayah.

                </p>

            </div>


        </div>


        <!-- ======================================
             QUOTE
        ======================================= -->

        <div class="quote">

            <p>
                "Tidak semua pahlawan memakai
                jubah. Sebagian dari mereka
                hanya memakai pakaian sederhana,
                bekerja setiap hari,
                dan selalu memastikan anaknya
                baik-baik saja."
            </p>

            <span>
                Untuk Ibu &amp; Ayah
            </span>

        </div>


        <!-- ======================================
             NEXT BUTTON
        ======================================= -->

        <div class="next">

            <a href="kenangan.php">

                Lihat Kenangan

                <span class="arrow">
                    →
                </span>

            </a>

        </div>

    </section>


    <!-- ==========================================
         FOOTER
    ========================================== -->

    <footer>

        Dibuat dengan penuh cinta untuk Ibu &amp; Ayah ❤️

    </footer>


    <!-- ==========================================
         JAVASCRIPT
    ========================================== -->

    <script>

        const storyItems =
            document.querySelectorAll(
                ".story-item"
            );


        const observer =
            new IntersectionObserver(

                (entries) => {

                    entries.forEach(
                        (entry) => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add("show");

                            }

                        }
                    );

                },

                {
                    threshold: 0.15
                }

            );


        storyItems.forEach(
            (item) => {

                observer.observe(item);

            }
        );

    </script>


</body>

</html>