<?php
$title = "Pesan Untuk Ibu & Ayah ❤️";

$video = "assets/videos/pesan-untuk-orang-tua.mp4";

$foto = [
    "assets/images/kenangan-01.jpg",
    "assets/images/kenangan-02.jpg",
    "assets/images/kenangan-03.jpg"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($title) ?></title>

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
                    rgba(0, 0, 0, 0.35),
                    rgba(0, 0, 0, 0.35)
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

            overflow: hidden;
            pointer-events: none;

            z-index: -1;
        }

        .glow {
            position: absolute;

            width: 480px;
            height: 480px;

            border-radius: 50%;

            background:
                rgba(212, 175, 55, 0.08);

            filter: blur(110px);

            animation:
                glowMove 9s ease-in-out infinite alternate;
        }

        .glow:nth-child(1) {
            top: -180px;
            left: -150px;
        }

        .glow:nth-child(2) {
            right: -180px;
            bottom: -180px;

            animation-delay: 2s;
        }

        @keyframes glowMove {

            from {
                transform: scale(0.9);
                opacity: 0.45;
            }

            to {
                transform: scale(1.2);
                opacity: 0.9;
            }
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: min(1050px, 92%);

            margin: auto;

            padding: 80px 0;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            text-align: center;

            max-width: 800px;

            margin: auto;
        }

        .chapter {
            display: inline-block;

            padding: 8px 18px;

            margin-bottom: 20px;

            border:
                1px solid
                rgba(212, 175, 55, 0.6);

            border-radius: 50px;

            color: #e5c76b;

            font-size: 13px;

            letter-spacing: 3px;

            text-transform: uppercase;

            background:
                rgba(0, 0, 0, 0.25);

            backdrop-filter: blur(8px);
        }

        h1 {
            margin-bottom: 20px;

            color: #f3d77a;

            font-size:
                clamp(42px, 7vw, 76px);

            font-weight: normal;

            text-shadow:
                0 0 25px
                rgba(212, 175, 55, 0.25),

                0 6px 30px
                rgba(0, 0, 0, 0.7);
        }

        .hero p {
            color:
                rgba(255, 255, 255, 0.82);

            font-size: 18px;

            line-height: 1.9;
        }

        .divider {
            width: 110px;
            height: 1px;

            margin: 35px auto;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    #d4af37,
                    transparent
                );
        }

        /* =========================
           VIDEO
        ========================= */

        .video-section {
            margin-top: 60px;
        }

        .video-title {
            margin-bottom: 25px;

            text-align: center;

            color: #e5c76b;

            font-size: 15px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }

        .video-wrapper {
            position: relative;

            width: 100%;

            padding: 10px;

            border:
                1px solid
                rgba(212, 175, 55, 0.65);

            background:
                rgba(0, 0, 0, 0.4);

            box-shadow:
                0 30px 70px
                rgba(0, 0, 0, 0.55);
        }

        .video-wrapper::before,
        .video-wrapper::after {
            content: "";

            position: absolute;

            width: 55px;
            height: 55px;

            border-color: #d4af37;

            pointer-events: none;

            z-index: 3;
        }

        .video-wrapper::before {
            top: -8px;
            left: -8px;

            border-top: 2px solid;
            border-left: 2px solid;
        }

        .video-wrapper::after {
            right: -8px;
            bottom: -8px;

            border-right: 2px solid;
            border-bottom: 2px solid;
        }

        video {
            display: block;

            width: 100%;

            max-height: 650px;

            background: #000;

            border: 1px solid
                rgba(255, 255, 255, 0.08);
        }

        /* =========================
           VIDEO NOTE
        ========================= */

        .video-note {
            margin-top: 22px;

            text-align: center;

            color:
                rgba(255, 255, 255, 0.6);

            font-size: 14px;

            line-height: 1.7;
        }

        /* =========================
           MESSAGE
        ========================= */

        .message {
            max-width: 780px;

            margin: 70px auto 0;

            padding: 40px 35px;

            text-align: center;

            border-top:
                1px solid
                rgba(212, 175, 55, 0.3);

            border-bottom:
                1px solid
                rgba(212, 175, 55, 0.3);
        }

        .message h2 {
            margin-bottom: 20px;

            color: #f0d272;

            font-size:
                clamp(28px, 5vw, 42px);

            font-weight: normal;
        }

        .message p {
            color:
                rgba(255, 255, 255, 0.78);

            font-size: 17px;

            line-height: 1.9;
        }

        .message .highlight {
            margin-top: 22px;

            color: #e5c76b;

            font-size: 20px;
        }

        /* =========================
           PHOTO MEMORY
        ========================= */

        .memories {
            margin-top: 75px;
        }

        .section-title {
            margin-bottom: 30px;

            text-align: center;

            color: #e5c76b;

            font-size: 15px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }

        .photo-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .photo-card {
            overflow: hidden;

            border:
                1px solid
                rgba(212, 175, 55, 0.35);

            background:
                rgba(0, 0, 0, 0.35);

            box-shadow:
                0 15px 35px
                rgba(0, 0, 0, 0.35);

            transition:
                transform 0.4s ease,
                border-color 0.4s ease;
        }

        .photo-card:hover {
            transform: translateY(-7px);

            border-color:
                rgba(212, 175, 55, 0.75);
        }

        .photo-card img {
            display: block;

            width: 100%;

            height: 260px;

            object-fit: cover;

            transition:
                transform 0.7s ease;
        }

        .photo-card:hover img {
            transform: scale(1.06);
        }

        /* =========================
           CLOSING
        ========================= */

        .closing {
            max-width: 760px;

            margin: 75px auto 0;

            text-align: center;
        }

        .closing-symbol {
            margin-bottom: 20px;

            color: #d4af37;

            font-size: 35px;
        }

        .closing p {
            color:
                rgba(255, 255, 255, 0.76);

            font-size: 18px;

            line-height: 1.9;
        }

        /* =========================
           BUTTONS
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

            justify-content: center;
            align-items: center;

            min-width: 220px;

            padding: 14px 25px;

            border-radius: 50px;

            text-decoration: none;

            font-family:
                Georgia,
                "Times New Roman",
                serif;

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
                0 8px 25px
                rgba(212, 175, 55, 0.18);
        }

        .button-main:hover {
            box-shadow:
                0 12px 35px
                rgba(212, 175, 55, 0.3);
        }

        .button-secondary {
            color: #e5c76b;

            border:
                1px solid
                rgba(212, 175, 55, 0.6);

            background:
                rgba(0, 0, 0, 0.25);

            backdrop-filter: blur(8px);
        }

        .button-secondary:hover {
            background:
                rgba(212, 175, 55, 0.1);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 80px;

            text-align: center;

            color:
                rgba(255, 255, 255, 0.5);

            font-size: 13px;

            letter-spacing: 1px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 750px) {

            .container {
                padding: 55px 0;
            }

            .hero p {
                font-size: 16px;
            }

            .photo-grid {
                grid-template-columns: 1fr;
            }

            .photo-card img {
                height: 300px;
            }

            .message {
                padding: 35px 22px;
            }

            .message p {
                font-size: 15px;
            }

            .closing p {
                font-size: 16px;
            }

            .button {
                width: 100%;
                max-width: 330px;
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

    <!-- BACKGROUND -->

    <div class="background">
        <div class="glow"></div>
        <div class="glow"></div>
    </div>


    <main class="container">

        <!-- HERO -->

        <section class="hero">

            <div class="chapter">
                Sebuah Pesan
            </div>

            <h1>
                Untuk Ibu & Ayah
            </h1>

            <p>
                Ada sebuah pesan yang ingin aku simpan
                sebagai salah satu kenangan terindah
                untuk Ibu dan Ayah.
            </p>

            <div class="divider"></div>

        </section>


        <!-- VIDEO -->

        <section class="video-section">

            <div class="video-title">
                Sebuah Pesan Yang Ingin Disimpan Selamanya
            </div>

            <div class="video-wrapper">

                <?php if (file_exists($video)): ?>

                    <video
                        controls
                        preload="metadata"
                        playsinline
                    >
                        <source
                            src="<?= htmlspecialchars($video) ?>"
                            type="video/mp4"
                        >

                        Browser kamu tidak mendukung
                        pemutar video.
                    </video>

                <?php else: ?>

                    <div
                        style="
                            min-height: 450px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            padding: 30px;
                            background: #080808;
                        "
                    >

                        <div>

                            <div
                                style="
                                    font-size: 50px;
                                    margin-bottom: 20px;
                                "
                            >
                                🎬
                            </div>

                            <h2
                                style="
                                    color: #f0d272;
                                    font-weight: normal;
                                    margin-bottom: 15px;
                                "
                            >
                                Video Belum Ditemukan
                            </h2>

                            <p
                                style="
                                    color: rgba(255,255,255,.65);
                                    line-height: 1.8;
                                    font-size: 15px;
                                "
                            >
                                Letakkan video kamu di:
                                <br><br>

                                <strong
                                    style="color:#e5c76b;"
                                >
                                    assets/videos/
                                    pesan-untuk-orang-tua.mp4
                                </strong>
                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

            <p class="video-note">
                Putar videonya ketika Ibu dan Ayah sudah siap
                melihat pesan kecil ini. ❤️
            </p>

        </section>


        <!-- MESSAGE -->

        <section class="message">

            <h2>
                Untuk Kalian
            </h2>

            <p>
                Setiap foto, setiap video, dan setiap cerita
                mungkin hanya terlihat seperti hal sederhana.
                Tetapi semuanya memiliki satu arti:
                aku bersyukur pernah dan masih bisa
                menjalani hidup bersama kalian.
            </p>

            <p class="highlight">
                Terima kasih sudah menjadi rumah
                tempat aku selalu bisa pulang.
            </p>

        </section>


        <!-- FOTO KENANGAN -->

        <section class="memories">

            <div class="section-title">
                Sedikit Dari Banyak Kenangan
            </div>

            <div class="photo-grid">

                <?php foreach ($foto as $index => $gambar): ?>

                    <div class="photo-card">

                        <img
                            src="<?= htmlspecialchars($gambar) ?>"
                            alt="Kenangan <?= $index + 1 ?>"
                            loading="lazy"
                        >

                    </div>

                <?php endforeach; ?>

            </div>

        </section>


        <!-- CLOSING -->

        <section class="closing">

            <div class="closing-symbol">
                ✦
            </div>

            <p>
                Mungkin video ini akan selesai,
                tetapi cerita tentang keluarga kita
                masih akan terus berjalan.
            </p>

        </section>


        <!-- NAVIGASI -->

        <div class="buttons">

            <a
                href="kejutan.php"
                class="button button-secondary"
            >
                ← Kembali ke Kejutan
            </a>

            <a
                href="album.php"
                class="button button-main"
            >
                📸 Buka Album Kenangan
            </a>

            <a
                href="index.php"
                class="button button-secondary"
            >
                Kembali ke Awal ❤️
            </a>

        </div>


        <footer>
            Dibuat dengan penuh cinta untuk Ibu & Ayah ❤️
        </footer>

    </main>

</body>
</html>