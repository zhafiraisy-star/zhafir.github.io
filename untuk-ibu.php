<?php

// ==========================================
// WEBSITE KEJUTAN UNTUK IBU & AYAH
// PART 4 - SURAT UNTUK IBU
// ==========================================

$title = "Untuk Ibu ❤️";

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
                    rgba(0, 0, 0, 0.32),
                    rgba(0, 0, 0, 0.32)
                ),
                url("assets/images/background-gold.png");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


        /* ==========================================
           BACKGROUND
        ========================================== */

        .background {
            position: fixed;
            inset: 0;

            z-index: 0;

            pointer-events: none;

            overflow: hidden;
        }

        .glow {
            position: absolute;

            width: 420px;
            height: 420px;

            border-radius: 50%;

            background:
                rgba(231, 201, 149, 0.08);

            filter: blur(110px);
        }

        .glow-1 {
            top: -180px;
            left: -180px;
        }

        .glow-2 {
            right: -180px;
            bottom: -180px;
        }


        /* ==========================================
           HERO
        ========================================== */

        .hero {
            position: relative;
            z-index: 2;

            min-height: 75vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 100px 20px 70px;

            text-align: center;
        }

        .hero-content {
            max-width: 800px;

            opacity: 0;

            transform: translateY(35px);

            animation:
                heroAppear 1.3s ease forwards;
        }

        .label {
            margin-bottom: 22px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 6px;

            text-transform: uppercase;

            color: #d8bd91;
        }

        .hero h1 {
            margin-bottom: 25px;

            font-size: clamp(50px, 9vw, 90px);

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
        }

        .hero p {
            max-width: 650px;

            margin: auto;

            color: #d5d5d5;

            font-size: 18px;

            line-height: 1.9;
        }


        /* ==========================================
           ENVELOPE SECTION
        ========================================== */

        .letter-section {
            position: relative;
            z-index: 2;

            min-height: 650px;

            padding:
                50px 20px
                100px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;
        }


        /* ==========================================
           ENVELOPE
        ========================================== */

        .envelope-wrapper {
            position: relative;

            width: min(500px, 90vw);

            height: 320px;

            display: flex;

            align-items: center;

            justify-content: center;

            perspective: 1000px;
        }

        .envelope {
            position: relative;

            width: 100%;

            height: 260px;

            cursor: pointer;

            filter:
                drop-shadow(
                    0 25px 45px
                    rgba(0, 0, 0, 0.5)
                );

            transition:
                transform 0.5s ease;
        }

        .envelope:hover {
            transform:
                translateY(-8px);
        }


        /* ==========================================
           ENVELOPE BODY
        ========================================== */

        .envelope-body {
            position: absolute;

            inset: 0;

            overflow: hidden;

            border:
                1px solid
                rgba(231, 201, 149, 0.55);

            border-radius: 8px;

            background:
                linear-gradient(
                    145deg,
                    #3b3024,
                    #211a14
                );
        }


        /* ==========================================
           ENVELOPE FRONT
        ========================================== */

        .envelope-front {
            position: absolute;

            inset: 0;

            z-index: 4;

            clip-path:
                polygon(
                    0 0,
                    50% 52%,
                    100% 0,
                    100% 100%,
                    0 100%
                );

            background:
                linear-gradient(
                    135deg,
                    #5a4630,
                    #261d15
                );

            border-radius: 8px;
        }


        /* ==========================================
           ENVELOPE FLAP
        ========================================== */

        .envelope-flap {
            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 58%;

            z-index: 5;

            transform-origin: top center;

            clip-path:
                polygon(
                    0 0,
                    100% 0,
                    50% 100%
                );

            background:
                linear-gradient(
                    135deg,
                    #725b3e,
                    #302318
                );

            transition:
                transform 0.8s ease;

            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }


        /* ==========================================
           ENVELOPE LETTER
        ========================================== */

        .letter-paper {
            position: absolute;

            left: 8%;

            bottom: 5%;

            width: 84%;

            height: 82%;

            z-index: 3;

            padding: 30px;

            border-radius: 5px;

            background:
                linear-gradient(
                    135deg,
                    #f8f1df,
                    #e8dcc0
                );

            color: #33281c;

            box-shadow:
                0 8px 20px
                rgba(0, 0, 0, 0.25);

            transform:
                translateY(40px);

            transition:
                transform 0.8s ease;
        }

        .letter-paper h3 {
            margin-bottom: 15px;

            font-size: 24px;

            font-weight: normal;

            color: #5c4225;
        }

        .letter-paper p {
            font-size: 13px;

            line-height: 1.7;

            color: #665744;
        }


        /* ==========================================
           OPEN STATE
        ========================================== */

        .envelope.open .envelope-flap {
            transform:
                rotateX(180deg);
        }

        .envelope.open .letter-paper {
            transform:
                translateY(-100px);
        }

        .envelope.open {
            cursor: default;
        }

        .envelope.open:hover {
            transform: none;
        }


        /* ==========================================
           HEART SEAL
        ========================================== */

        .heart-seal {
            position: absolute;

            left: 50%;
            top: 52%;

            z-index: 10;

            width: 62px;
            height: 62px;

            display: flex;

            align-items: center;
            justify-content: center;

            transform:
                translate(-50%, -50%)
                rotate(0deg);

            border:
                2px solid
                rgba(231, 201, 149, 0.8);

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #c59b4b,
                    #80601f
                );

            color: #ffffff;

            font-size: 25px;

            box-shadow:
                0 5px 25px
                rgba(0, 0, 0, 0.35);

            transition:
                opacity 0.4s ease,
                transform 0.5s ease;
        }

        .envelope.open .heart-seal {
            opacity: 0;

            transform:
                translate(-50%, -50%)
                scale(0.5);
        }


        /* ==========================================
           OPEN TEXT
        ========================================== */

        .open-text {
            margin-top: 20px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 3px;

            text-transform: uppercase;

            color: #c8a86e;

            transition:
                opacity 0.3s ease;
        }

        .envelope.open
        + .open-text {
            opacity: 0;
        }


        /* ==========================================
           LETTER CONTENT
        ========================================== */

        .letter-content {
            max-width: 760px;

            margin:
                100px auto
                0;

            padding:
                55px 35px;

            text-align: center;

            border-top:
                1px solid
                rgba(231, 201, 149, 0.3);

            border-bottom:
                1px solid
                rgba(231, 201, 149, 0.3);

            opacity: 0;

            transform:
                translateY(30px);

            visibility: hidden;

            transition:
                opacity 0.8s ease,
                transform 0.8s ease,
                visibility 0.8s ease;
        }

        .letter-content.show {
            opacity: 1;

            transform:
                translateY(0);

            visibility: visible;
        }

        .letter-content .dear {
            margin-bottom: 30px;

            font-size: 30px;

            color: #e7c995;
        }

        .letter-content p {
            margin-bottom: 22px;

            color: #d0d0d0;

            font-size: 17px;

            line-height: 2;
        }

        .letter-content .highlight {
            color: #e7c995;

            font-size: 21px;

            font-style: italic;
        }

        .signature {
            margin-top: 35px;

            color: #ffffff;

            font-size: 19px;

            font-style: italic;
        }


        /* ==========================================
           NAVIGATION
        ========================================== */

        .navigation {
            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 15px;

            margin-top: 70px;
        }

        .button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 220px;

            padding: 15px 27px;

            border-radius: 50px;

            text-decoration: none;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 2px;

            text-transform: uppercase;

            transition:
                0.3s ease;
        }

        .button-main {
            color: #080808;

            background:
                linear-gradient(
                    135deg,
                    #f0d078,
                    #aa812b
                );

            box-shadow:
                0 10px 35px
                rgba(216, 180, 90, 0.18);
        }

        .button-main:hover {
            transform:
                translateY(-4px);

            box-shadow:
                0 18px 45px
                rgba(216, 180, 90, 0.3);
        }

        .button-secondary {
            color: #ffffff;

            border:
                1px solid
                rgba(231, 201, 149, 0.55);

            background:
                rgba(0, 0, 0, 0.20);

            backdrop-filter:
                blur(8px);
        }

        .button-secondary:hover {
            transform:
                translateY(-4px);

            background:
                rgba(231, 201, 149, 0.1);
        }


        /* ==========================================
           FOOTER
        ========================================== */

        footer {
            position: relative;
            z-index: 2;

            padding:
                35px 20px;

            text-align: center;

            font-family: Arial, sans-serif;

            font-size: 10px;

            letter-spacing: 3px;

            text-transform: uppercase;

            color:
                rgba(255, 255, 255, 0.4);
        }


        /* ==========================================
           ANIMATION
        ========================================== */

        @keyframes heroAppear {

            from {
                opacity: 0;

                transform:
                    translateY(35px);
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

        @media (max-width: 600px) {

            .hero {
                min-height: 65vh;

                padding:
                    90px 20px
                    60px;
            }

            .hero p {
                font-size: 16px;

                line-height: 1.8;
            }

            .letter-section {
                padding:
                    30px 15px
                    80px;
            }

            .envelope-wrapper {
                width: 92vw;

                height: 260px;
            }

            .envelope {
                height: 210px;
            }

            .letter-paper {
                padding: 20px;
            }

            .letter-paper h3 {
                font-size: 20px;
            }

            .letter-paper p {
                font-size: 11px;
            }

            .heart-seal {
                width: 52px;
                height: 52px;

                font-size: 21px;
            }

            .letter-content {
                margin-top: 80px;

                padding:
                    40px 20px;
            }

            .letter-content p {
                font-size: 15px;

                line-height: 1.9;
            }

            .letter-content .highlight {
                font-size: 18px;
            }

            .navigation {
                flex-direction: column;

                align-items: center;
            }

            .button {
                width: 100%;

                max-width: 320px;
            }

        }


        /* ==========================================
           REDUCED MOTION
        ========================================== */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }

            .hero-content {
                animation: none;

                opacity: 1;

                transform: none;
            }

            .envelope-flap,
            .letter-paper,
            .heart-seal,
            .letter-content {
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
                Bab Ketiga
            </div>

            <h1>
                Untuk Ibu
            </h1>

            <p>

                Ada beberapa hal yang mungkin
                sulit disampaikan hanya dengan kata-kata.

                <br><br>

                Jadi kali ini, aku ingin menuliskannya
                untuk Ibu.

            </p>

        </div>

    </section>


    <!-- ==========================================
         LETTER
    ========================================== -->

    <section class="letter-section">


        <!-- AMPLOP -->

        <div class="envelope-wrapper">

            <div
                class="envelope"
                id="envelope"
            >

                <div class="envelope-body"></div>

                <div class="letter-paper">

                    <h3>
                        Untuk Ibu ❤️
                    </h3>

                    <p>
                        Ada sebuah surat kecil
                        yang ingin kusampaikan.
                    </p>

                </div>

                <div class="envelope-front"></div>

                <div class="envelope-flap"></div>

                <div class="heart-seal">
                    ♥
                </div>

            </div>

        </div>


        <div class="open-text">
            Klik amplop untuk membuka surat
        </div>


        <!-- ISI SURAT -->

        <div
            class="letter-content"
            id="letterContent"
        >

            <div class="dear">
                Ibu,
            </div>


            <p>
                Mungkin selama ini aku tidak selalu
                mengatakannya secara langsung.
            </p>

            <p>
                Tetapi aku ingin Ibu tahu bahwa aku
                sangat menghargai semua yang telah Ibu
                lakukan untukku.
            </p>

            <p>
                Terima kasih untuk setiap doa,
                perhatian, nasihat, kesabaran,
                dan kasih sayang yang tidak pernah
                berhenti diberikan.
            </p>

            <p>
                Terima kasih juga untuk setiap
                pengorbanan yang mungkin tidak selalu
                aku lihat dan tidak selalu bisa
                aku balas.
            </p>

            <p>
                Aku tahu menjadi seorang Ibu bukan
                sesuatu yang mudah.
            </p>

            <p>
                Ada banyak hal yang mungkin Ibu
                simpan sendiri demi memastikan
                anak-anak tetap baik-baik saja.
            </p>

            <p class="highlight">
                Aku mungkin belum bisa membalas
                semua kebaikan Ibu.
            </p>

            <p>
                Tetapi aku ingin Ibu tahu satu hal:
                aku sangat menyayangi Ibu.
            </p>

            <p>
                Dan aku akan selalu bersyukur
                karena menjadi anak Ibu.
            </p>


            <div class="signature">
                Dengan seluruh rasa sayang,<br>
                Anakmu ❤️
            </div>

        </div>


        <!-- NAVIGATION -->

        <div class="navigation">

            <a
                href="kenangan.php"
                class="button button-secondary"
            >
                ← Kembali ke Kenangan
            </a>

            <a
                href="untuk-ayah.php"
                class="button button-main"
            >
                Surat Untuk Ayah ❤️
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

        const envelope =
            document.getElementById(
                "envelope"
            );

        const letterContent =
            document.getElementById(
                "letterContent"
            );


        envelope.addEventListener(
            "click",
            () => {

                if (
                    envelope.classList.contains(
                        "open"
                    )
                ) {
                    return;
                }


                envelope.classList.add(
                    "open"
                );


                setTimeout(
                    () => {

                        letterContent.classList.add(
                            "show"
                        );


                        setTimeout(
                            () => {

                                letterContent.scrollIntoView(
                                    {
                                        behavior: "smooth",
                                        block: "center"
                                    }
                                );

                            },
                            250
                        );

                    },
                    600
                );

            }
        );

    </script>


</body>

</html>