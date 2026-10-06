<?php

$title = "Terima Kasih, Ibu & Ayah";

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($title) ?></title>

    <style>

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

            font-family:
                Georgia,
                "Times New Roman",
                serif;

            color: #ffffff;

            overflow-x: hidden;

            background:
                radial-gradient(
                    circle at center,
                    rgba(212, 175, 55, 0.16),
                    transparent 35%
                ),
                linear-gradient(
                    rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.55)
                ),
                url("assets/images/background-gold.png");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* =========================
           MAIN
        ========================= */

        .page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 80px 20px;
        }

        .content {
            width: min(850px, 100%);

            text-align: center;

            animation: fadeUp 1.3s ease forwards;
        }

        /* =========================
           LABEL
        ========================= */

        .label {
            display: inline-block;

            margin-bottom: 25px;

            padding: 9px 22px;

            border: 1px solid
                rgba(212, 175, 55, 0.6);

            border-radius: 50px;

            color: #e6c76a;

            font-size: 13px;

            letter-spacing: 3px;

            text-transform: uppercase;

            background:
                rgba(0, 0, 0, 0.25);
        }

        /* =========================
           TITLE
        ========================= */

        h1 {
            margin-bottom: 30px;

            color: #f5d77a;

            font-size:
                clamp(55px, 9vw, 100px);

            line-height: 1;

            text-shadow:
                0 0 20px
                rgba(212, 175, 55, 0.25),

                0 8px 35px
                rgba(0, 0, 0, 0.8);
        }

        .subtitle {
            margin-bottom: 45px;

            color:
                rgba(255, 255, 255, 0.8);

            font-size: 19px;

            line-height: 1.8;
        }

        /* =========================
           HEART
        ========================= */

        .heart-wrapper {
            width: 110px;
            height: 110px;

            margin:
                0 auto 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid
                rgba(212, 175, 55, 0.35);

            border-radius: 50%;

            background:
                rgba(0, 0, 0, 0.25);

            box-shadow:
                0 0 40px
                rgba(212, 175, 55, 0.12);

            animation:
                pulse 2.2s ease-in-out infinite;
        }

        .heart {
            color: #f5d77a;

            font-size: 48px;

            animation:
                heartBeat 1.5s ease-in-out infinite;
        }

        /* =========================
           MESSAGE
        ========================= */

        .message {
            padding: 45px 40px;

            border-top:
                1px solid
                rgba(212, 175, 55, 0.35);

            border-bottom:
                1px solid
                rgba(212, 175, 55, 0.35);

            background:
                rgba(0, 0, 0, 0.18);

            backdrop-filter: blur(4px);
        }

        .message p {
            margin-bottom: 22px;

            color:
                rgba(255, 255, 255, 0.82);

            font-size: 18px;

            line-height: 1.9;
        }

        .message p:last-child {
            margin-bottom: 0;
        }

        .message .highlight {
            color: #f5d77a;

            font-size: 24px;

            line-height: 1.6;
        }

        /* =========================
           SIGNATURE
        ========================= */

        .signature {
            margin-top: 40px;

            color:
                rgba(255, 255, 255, 0.75);

            font-size: 18px;

            font-style: italic;
        }

        .signature span {
            display: block;

            margin-top: 12px;

            color: #f5d77a;

            font-size: 22px;

            font-style: normal;
        }

        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            display: flex;

            justify-content: center;

            align-items: center;

            gap: 15px;

            flex-wrap: wrap;

            margin-top: 50px;
        }

        .button {
            display: inline-block;

            padding: 15px 28px;

            border-radius: 50px;

            text-decoration: none;

            font-size: 15px;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .button:hover {
            transform: translateY(-4px);
        }

        .button-secondary {
            color: #ffffff;

            border:
                1px solid
                rgba(212, 175, 55, 0.5);

            background:
                rgba(0, 0, 0, 0.35);
        }

        .button-secondary:hover {
            box-shadow:
                0 10px 30px
                rgba(0, 0, 0, 0.45);
        }

        .button-main {
            color: #17120a;

            font-weight: bold;

            background:
                linear-gradient(
                    135deg,
                    #f5d77a,
                    #c99d32
                );

            box-shadow:
                0 10px 30px
                rgba(212, 175, 55, 0.2);
        }

        .button-main:hover {
            box-shadow:
                0 15px 40px
                rgba(212, 175, 55, 0.35);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 55px;

            color:
                rgba(255, 255, 255, 0.45);

            font-size: 13px;

            letter-spacing: 1px;
        }

        /* =========================
           ANIMATION
        ========================= */

        @keyframes fadeUp {

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

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }

        }

        @keyframes heartBeat {

            0%,
            100% {
                transform: scale(1);
            }

            15% {
                transform: scale(1.18);
            }

            30% {
                transform: scale(1);
            }

            45% {
                transform: scale(1.12);
            }

            60% {
                transform: scale(1);
            }

        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            .page {
                padding:
                    60px 15px;
            }

            h1 {
                font-size: 58px;
            }

            .subtitle {
                font-size: 16px;
            }

            .heart-wrapper {
                width: 90px;
                height: 90px;

                margin-bottom: 35px;
            }

            .heart {
                font-size: 40px;
            }

            .message {
                padding:
                    35px 20px;
            }

            .message p {
                font-size: 16px;
            }

            .message .highlight {
                font-size: 20px;
            }

            .buttons {
                flex-direction: column;
            }

            .button {
                width: min(320px, 90%);

                text-align: center;
            }

        }

        /* =========================
           REDUCED MOTION
        ========================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration:
                    0.01ms !important;

                animation-iteration-count:
                    1 !important;

                transition-duration:
                    0.01ms !important;

                scroll-behavior:
                    auto !important;
            }

        }

    </style>

</head>

<body>

    <main class="page">

        <div class="content">

            <!-- LABEL -->

            <div class="label">
                Sebuah Pesan Terakhir
            </div>


            <!-- HEART -->

            <div class="heart-wrapper">

                <div class="heart">
                    ♥
                </div>

            </div>


            <!-- TITLE -->

            <h1>
                Terima Kasih
            </h1>

            <p class="subtitle">
                Untuk dua orang yang paling berarti
                dalam hidupku.
            </p>


            <!-- MESSAGE -->

            <section class="message">

                <p>
                    Ibu dan Ayah,
                </p>

                <p>
                    Mungkin perjalanan kecil ini tidak akan
                    pernah cukup untuk membalas semua yang
                    telah kalian berikan kepadaku.
                </p>

                <p>
                    Terima kasih untuk setiap doa,
                    setiap perhatian, setiap nasihat,
                    setiap pengorbanan, dan setiap perjuangan
                    yang mungkin tidak selalu aku lihat.
                </p>

                <p>
                    Terima kasih karena selalu menjadi
                    tempat untuk pulang.
                </p>

                <p class="highlight">
                    Aku sangat bersyukur menjadi
                    anak Ibu dan Ayah.
                </p>

                <p>
                    Aku mungkin belum sempurna,
                    tetapi aku akan terus berusaha menjadi
                    seseorang yang bisa membuat kalian bangga.
                </p>

                <p>
                    Semoga kita selalu diberikan kesehatan,
                    kebahagiaan, dan banyak waktu untuk
                    menciptakan kenangan baru bersama.
                </p>

                <p class="highlight">
                    Aku sayang Ibu &amp; Ayah.
                    Selamanya. ❤️
                </p>

            </section>


            <!-- SIGNATURE -->

            <div class="signature">

                Dengan seluruh rasa sayang,

                <span>
                    Anakmu ❤️
                </span>

            </div>


            <!-- BUTTONS -->

            <div class="buttons">

                <a
                    href="album.php"
                    class="button button-secondary"
                >
                    ← Kembali ke Album
                </a>

                <a
                    href="index.php"
                    class="button button-main"
                >
                    🏠 Kembali ke Awal
                </a>

            </div>


            <!-- FOOTER -->

            <footer>
                Dibuat dengan penuh cinta untuk
                Ibu &amp; Ayah ❤️
            </footer>

        </div>

    </main>

</body>

</html>