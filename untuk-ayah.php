<?php
$title = "Untuk Ayah ❤️";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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
                    rgba(0, 0, 0, 0.34),
                    rgba(0, 0, 0, 0.34)
                ),
                url("assets/images/background-gold.png");

            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* =========================
           BACKGROUND
        ========================= */

        .background {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: -1;
        }

        .glow {
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(212, 175, 55, 0.08);
            filter: blur(100px);
            animation: glowMove 8s ease-in-out infinite alternate;
        }

        .glow:nth-child(1) {
            top: -150px;
            left: -120px;
        }

        .glow:nth-child(2) {
            right: -150px;
            bottom: -150px;
            animation-delay: 2s;
        }

        @keyframes glowMove {
            from {
                transform: scale(0.9);
                opacity: 0.5;
            }

            to {
                transform: scale(1.2);
                opacity: 0.9;
            }
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            width: min(900px, 92%);
            margin: auto;
            padding: 80px 0;
            text-align: center;
        }

        .chapter {
            display: inline-block;
            margin-bottom: 18px;
            padding: 8px 18px;

            border: 1px solid rgba(212, 175, 55, 0.6);
            border-radius: 50px;

            color: #e5c76b;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;

            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(8px);
        }

        h1 {
            font-size: clamp(42px, 7vw, 78px);
            font-weight: normal;
            margin-bottom: 20px;

            color: #f3d77a;

            text-shadow:
                0 0 20px rgba(212, 175, 55, 0.25),
                0 5px 30px rgba(0, 0, 0, 0.7);
        }

        .intro {
            max-width: 650px;
            margin: auto;

            color: rgba(255, 255, 255, 0.82);
            font-size: 18px;
            line-height: 1.9;
        }

        .divider {
            width: 100px;
            height: 1px;
            margin: 35px auto;

            background: linear-gradient(
                90deg,
                transparent,
                #d4af37,
                transparent
            );
        }

        /* =========================
           LETTER AREA
        ========================= */

        .letter-section {
            margin-top: 60px;
        }

        .letter-title {
            margin-bottom: 35px;
            color: #e5c76b;
            font-size: 15px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        /* =========================
           ENVELOPE
        ========================= */

        .envelope-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 300px;
            perspective: 1000px;
        }

        .envelope {
            position: relative;

            width: min(430px, 90vw);
            height: 270px;

            cursor: pointer;

            transform-style: preserve-3d;

            filter:
                drop-shadow(0 25px 35px rgba(0, 0, 0, 0.5));

            transition: transform 0.4s ease;
        }

        .envelope:hover {
            transform: translateY(-8px);
        }

        /* badan amplop */

        .envelope-body {
            position: absolute;
            inset: 0;

            border-radius: 8px;

            background:
                linear-gradient(
                    145deg,
                    #151515,
                    #292929 50%,
                    #101010
                );

            border: 1px solid rgba(212, 175, 55, 0.65);

            box-shadow:
                inset 0 0 30px rgba(212, 175, 55, 0.05),
                0 0 30px rgba(0, 0, 0, 0.4);
        }

        /* garis amplop */

        .envelope-body::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;

            height: 50%;

            background:
                linear-gradient(
                    145deg,
                    transparent 49%,
                    rgba(212, 175, 55, 0.45) 50%,
                    transparent 51%
                );

            opacity: 0.7;
        }

        .envelope-body::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;

            height: 50%;

            background:
                linear-gradient(
                    215deg,
                    transparent 49%,
                    rgba(212, 175, 55, 0.45) 50%,
                    transparent 51%
                );

            opacity: 0.7;
        }

        /* flap */

        .envelope-flap {
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 58%;

            background:
                linear-gradient(
                    145deg,
                    #292929,
                    #151515
                );

            clip-path: polygon(
                0 0,
                100% 0,
                50% 100%
            );

            border-top: 1px solid rgba(212, 175, 55, 0.7);

            transform-origin: top center;

            transition:
                transform 0.9s cubic-bezier(.2,.8,.2,1),
                z-index 0s linear 0.4s;

            z-index: 5;
        }

        /* kertas di dalam */

        .letter-paper {
            position: absolute;

            left: 8%;
            width: 84%;

            bottom: 20px;
            height: 215px;

            padding: 30px 25px;

            border-radius: 5px;

            background:
                linear-gradient(
                    145deg,
                    #fffdf4,
                    #f2e8c9
                );

            color: #332a1c;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.35);

            transform: translateY(0);

            transition:
                transform 0.9s cubic-bezier(.2,.8,.2,1),
                z-index 0s linear 0.4s;

            z-index: 2;

            overflow: hidden;
        }

        .letter-paper::before {
            content: "✦";

            position: absolute;
            top: 12px;
            right: 18px;

            color: rgba(140, 105, 25, 0.45);
            font-size: 20px;
        }

        .letter-paper h2 {
            font-size: 25px;
            margin-bottom: 10px;
            font-weight: normal;
        }

        .letter-paper p {
            font-size: 14px;
            line-height: 1.7;
        }

        /* seal */

        .heart-seal {
            position: absolute;

            left: 50%;
            top: 55%;

            transform: translate(-50%, -50%);

            width: 58px;
            height: 58px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    #d9b84c,
                    #9d7920
                );

            border: 2px solid #f2d779;

            color: #17130a;

            font-size: 25px;

            box-shadow:
                0 0 25px rgba(212, 175, 55, 0.25);

            z-index: 7;

            transition:
                transform 0.4s ease,
                opacity 0.4s ease;
        }

        .envelope:hover .heart-seal {
            transform: translate(-50%, -50%) scale(1.08);
        }

        /* =========================
           OPEN STATE
        ========================= */

        .envelope.open {
            cursor: default;
        }

        .envelope.open .envelope-flap {
            transform: rotateX(180deg);
            z-index: 1;
        }

        .envelope.open .letter-paper {
            transform: translateY(-155px);
            z-index: 6;
        }

        .envelope.open .heart-seal {
            opacity: 0;
            pointer-events: none;
        }

        .click-text {
            margin-top: 25px;

            color: rgba(255, 255, 255, 0.65);

            font-size: 14px;
            letter-spacing: 1px;

            animation: pulseText 2s ease-in-out infinite;
        }

        @keyframes pulseText {
            0%,
            100% {
                opacity: 0.45;
            }

            50% {
                opacity: 1;
            }
        }

        /* =========================
           FULL LETTER
        ========================= */

        .letter-content {
            max-width: 720px;

            margin: 30px auto 0;
            padding: 45px 40px;

            border-radius: 15px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255, 253, 244, 0.98),
                    rgba(239, 229, 199, 0.98)
                );

            color: #302719;

            text-align: left;

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.45);

            opacity: 0;
            transform: translateY(30px);

            pointer-events: none;

            transition:
                opacity 0.8s ease,
                transform 0.8s ease;
        }

        .letter-content.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .letter-content h2 {
            margin-bottom: 25px;

            font-size: 32px;
            font-weight: normal;

            color: #80641d;
        }

        .letter-content p {
            margin-bottom: 20px;

            font-size: 17px;
            line-height: 2;
        }

        .letter-content .highlight {
            color: #80641d;
            font-weight: bold;
        }

        .signature {
            margin-top: 35px;

            text-align: right;

            font-style: italic;
            font-size: 18px;

            color: #80641d;
        }

        /* =========================
           BUTTON
        ========================= */

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;

            flex-wrap: wrap;
            gap: 15px;

            margin-top: 55px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 210px;

            padding: 14px 24px;

            border-radius: 50px;

            text-decoration: none;

            font-family: Georgia, "Times New Roman", serif;
            font-size: 15px;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                background 0.3s ease;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .button-main {
            color: #18140a;

            background:
                linear-gradient(
                    135deg,
                    #f2d778,
                    #b9912d
                );

            box-shadow:
                0 8px 25px rgba(212, 175, 55, 0.18);
        }

        .button-main:hover {
            box-shadow:
                0 12px 35px rgba(212, 175, 55, 0.3);
        }

        .button-secondary {
            color: #e5c76b;

            border: 1px solid rgba(212, 175, 55, 0.6);

            background: rgba(0, 0, 0, 0.25);

            backdrop-filter: blur(8px);
        }

        .button-secondary:hover {
            background: rgba(212, 175, 55, 0.1);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 80px;

            color: rgba(255, 255, 255, 0.5);

            font-size: 13px;
            letter-spacing: 1px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            .container {
                padding: 55px 0;
            }

            .intro {
                font-size: 16px;
                line-height: 1.8;
            }

            .envelope-wrapper {
                min-height: 260px;
            }

            .envelope {
                width: 330px;
                height: 215px;
            }

            .letter-paper {
                height: 170px;
                padding: 20px 18px;
            }

            .letter-paper h2 {
                font-size: 20px;
            }

            .letter-paper p {
                font-size: 12px;
            }

            .envelope.open .letter-paper {
                transform: translateY(-120px);
            }

            .heart-seal {
                width: 50px;
                height: 50px;
                font-size: 21px;
            }

            .letter-content {
                padding: 30px 23px;
            }

            .letter-content h2 {
                font-size: 27px;
            }

            .letter-content p {
                font-size: 15px;
                line-height: 1.9;
            }

            .button {
                width: 100%;
                max-width: 320px;
            }

            footer {
                margin-top: 60px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="glow"></div>
        <div class="glow"></div>
    </div>

    <main class="container">

        <div class="chapter">
            Bab Keempat
        </div>

        <h1>Untuk Ayah</h1>

        <p class="intro">
            Ada banyak hal yang mungkin tidak selalu aku katakan
            kepada Ayah secara langsung.
            Jadi kali ini, aku ingin menuliskannya.
        </p>

        <div class="divider"></div>

        <section class="letter-section">

            <div class="letter-title">
                Sebuah Surat Untuk Ayah
            </div>

            <div class="envelope-wrapper">

                <div
                    class="envelope"
                    id="envelope"
                    title="Klik untuk membuka surat"
                >

                    <div class="envelope-body"></div>

                    <div class="letter-paper">
                        <h2>Untuk Ayah</h2>

                        <p>
                            Ada sebuah surat kecil yang ingin
                            aku sampaikan kepada Ayah.
                        </p>
                    </div>

                    <div class="envelope-flap"></div>

                    <div class="heart-seal">
                        ♥
                    </div>

                </div>

            </div>

            <div class="click-text" id="clickText">
                ✦ Klik amplop untuk membuka surat ✦
            </div>

            <!-- ISI SURAT -->

            <article class="letter-content" id="letterContent">

                <h2>Ayah,</h2>

                <p>
                    Mungkin selama ini aku tidak selalu pandai
                    mengungkapkan apa yang aku rasakan.
                    Tetapi ada banyak hal yang sebenarnya
                    ingin aku sampaikan kepada Ayah.
                </p>

                <p>
                    Terima kasih karena selama ini Ayah selalu
                    berusaha memberikan yang terbaik untuk keluarga.
                    Terima kasih untuk kerja keras, tanggung jawab,
                    perhatian, dan perjuangan yang mungkin tidak
                    selalu aku lihat.
                </p>

                <p>
                    Aku tahu menjadi seorang Ayah bukanlah
                    sesuatu yang mudah.
                    Ada banyak hal yang harus Ayah pikirkan,
                    banyak beban yang mungkin Ayah simpan sendiri,
                    dan banyak keputusan yang harus Ayah ambil
                    demi keluarga.
                </p>

                <p>
                    Terima kasih karena selalu berusaha menjadi
                    tempat kami merasa aman.
                    Terima kasih untuk setiap nasihat,
                    setiap teguran, dan setiap pelajaran
                    yang Ayah berikan.
                </p>

                <p class="highlight">
                    Aku bangga menjadi anak Ayah.
                </p>

                <p>
                    Mungkin aku belum bisa membalas semua
                    kebaikan dan pengorbanan Ayah.
                    Tetapi aku ingin Ayah tahu bahwa semua
                    yang Ayah lakukan tidak pernah sia-sia.
                </p>

                <p>
                    Aku akan terus berusaha menjadi seseorang
                    yang bisa membuat Ayah bangga.
                    Bukan hanya dengan kata-kata,
                    tetapi juga melalui apa yang aku lakukan
                    dalam hidupku.
                </p>

                <p>
                    Semoga Ayah selalu diberikan kesehatan,
                    umur yang panjang, kebahagiaan,
                    dan kesempatan untuk melihat
                    lebih banyak hal baik dalam perjalanan hidup ini.
                </p>

                <p class="highlight">
                    Aku sangat menyayangi Ayah.
                    Dan aku akan selalu bersyukur
                    karena menjadi anak Ayah.
                </p>

                <div class="signature">
                    Dengan seluruh rasa sayang,<br>
                    Anakmu ❤️
                </div>

            </article>

        </section>

        <!-- NAVIGASI -->

        <div class="buttons">

            <a
                href="untuk-ibu.php"
                class="button button-secondary"
            >
                ← Kembali ke Surat Ibu
            </a>

            <a
                href="keluarga.php"
                class="button button-main"
            >
                Lanjut ke Keluarga ❤️
            </a>

        </div>

        <footer>
            Dibuat dengan penuh cinta untuk Ibu & Ayah ❤️
        </footer>

    </main>

    <script>
        const envelope = document.getElementById("envelope");
        const letterContent = document.getElementById("letterContent");
        const clickText = document.getElementById("clickText");

        envelope.addEventListener("click", function () {

            if (envelope.classList.contains("open")) {
                return;
            }

            envelope.classList.add("open");

            clickText.textContent =
                "♥ Surat untuk Ayah ♥";

            setTimeout(function () {

                letterContent.classList.add("show");

                setTimeout(function () {

                    letterContent.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });

                }, 250);

            }, 900);

        });
    </script>

</body>
</html>