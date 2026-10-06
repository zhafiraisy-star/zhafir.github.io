<?php

// ==========================================
// WEBSITE KEJUTAN UNTUK IBU & AYAH
// PART 3 - HALAMAN KENANGAN
// ==========================================

$title = "Kenangan — Ibu & Ayah";

$photos = [
    [
        "file" => "assets/images/kenangan-01.jpg",
        "title" => "Sebuah Awal",
        "description" => "Salah satu bagian kecil dari cerita kita."
    ],
    [
        "file" => "assets/images/kenangan-02.jpg",
        "title" => "Momen Kecil",
        "description" => "Hal sederhana yang selalu menjadi kenangan."
    ],
    [
        "file" => "assets/images/kenangan-03.jpg",
        "title" => "Bersama",
        "description" => "Karena kebahagiaan terasa lebih lengkap ketika bersama."
    ],
    [
        "file" => "assets/images/kenangan-04.jpg",
        "title" => "Hari Yang Indah",
        "description" => "Satu lagi halaman dari perjalanan keluarga kita."
    ],
    [
        "file" => "assets/images/kenangan-05.jpg",
        "title" => "Tawa",
        "description" => "Ada banyak alasan untuk tersenyum ketika bersama keluarga."
    ],
    [
        "file" => "assets/images/kenangan-06.jpg",
        "title" => "Sampai Hari Ini",
        "description" => "Cerita kita masih terus berjalan."
    ]
];

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

            min-height: 70vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 100px 25px 80px;

            text-align: center;
        }

        .hero-content {
            max-width: 850px;

            opacity: 0;

            transform: translateY(40px);

            animation:
                heroAppear 1.3s ease forwards;
        }

        .label {
            margin-bottom: 25px;

            font-family: Arial, sans-serif;

            font-size: 11px;

            letter-spacing: 6px;

            text-transform: uppercase;

            color: #d8bd91;
        }

        .hero h1 {
            margin-bottom: 25px;

            font-size: clamp(48px, 8vw, 85px);

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

            color: #d2d2d2;

            font-size: 18px;

            line-height: 1.9;
        }


        /* ==========================================
           GALLERY SECTION
        ========================================== */

        .gallery-section {
            position: relative;
            z-index: 2;

            max-width: 1150px;

            margin: auto;

            padding:
                50px
                25px
                100px;
        }

        .section-heading {
            margin-bottom: 55px;

            text-align: center;
        }

        .section-heading span {
            display: block;

            margin-bottom: 15px;

            font-family: Arial, sans-serif;

            font-size: 10px;

            letter-spacing: 5px;

            text-transform: uppercase;

            color: #c8a86e;
        }

        .section-heading h2 {
            font-size: clamp(30px, 5vw, 48px);

            font-weight: normal;
        }


        /* ==========================================
           GALLERY
        ========================================== */

        .gallery {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }


        /* ==========================================
           PHOTO CARD
        ========================================== */

        .photo-card {
            position: relative;

            overflow: hidden;

            border:
                1px solid
                rgba(231, 201, 149, 0.20);

            border-radius: 18px;

            background:
                rgba(0, 0, 0, 0.35);

            box-shadow:
                0 15px 50px
                rgba(0, 0, 0, 0.35);

            cursor: pointer;

            opacity: 0;

            transform: translateY(35px);

            transition:
                transform 0.4s ease,
                border-color 0.4s ease,
                box-shadow 0.4s ease;
        }

        .photo-card.show {
            opacity: 1;

            transform: translateY(0);
        }

        .photo-card:hover {
            transform: translateY(-8px);

            border-color:
                rgba(231, 201, 149, 0.55);

            box-shadow:
                0 25px 60px
                rgba(0, 0, 0, 0.5);
        }


        /* ==========================================
           PHOTO
        ========================================== */

        .photo-wrapper {
            position: relative;

            width: 100%;

            aspect-ratio: 4 / 3;

            overflow: hidden;
        }

        .photo-wrapper::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    to top,
                    rgba(0, 0, 0, 0.45),
                    transparent 50%
                );

            pointer-events: none;
        }

        .photo-wrapper img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition:
                transform 0.7s ease;
        }

        .photo-card:hover img {
            transform: scale(1.08);
        }


        /* ==========================================
           PHOTO INFO
        ========================================== */

        .photo-info {
            padding: 22px 22px 25px;
        }

        .photo-info h3 {
            margin-bottom: 10px;

            font-size: 22px;

            font-weight: normal;

            color: #ffffff;
        }

        .photo-info p {
            color: #bdbdbd;

            font-size: 14px;

            line-height: 1.7;
        }


        /* ==========================================
           MEMORY MESSAGE
        ========================================== */

        .memory-message {
            max-width: 800px;

            margin:
                100px auto
                0;

            padding:
                55px 30px;

            text-align: center;

            border-top:
                1px solid
                rgba(231, 201, 149, 0.3);

            border-bottom:
                1px solid
                rgba(231, 201, 149, 0.3);
        }

        .memory-message .symbol {
            margin-bottom: 20px;

            font-size: 25px;

            color: #e7c995;
        }

        .memory-message p {
            font-size: clamp(
                21px,
                4vw,
                30px
            );

            line-height: 1.7;

            font-style: italic;

            color: #e8e8e8;
        }

        .memory-message span {
            display: block;

            margin-top: 25px;

            font-family: Arial, sans-serif;

            font-size: 10px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #c8a86e;
        }


        /* ==========================================
           NAVIGATION
        ========================================== */

        .navigation {
            display: flex;

            justify-content: center;

            gap: 15px;

            flex-wrap: wrap;

            margin-top: 60px;
        }

        .button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 210px;

            padding: 15px 25px;

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
            transform: translateY(-4px);

            box-shadow:
                0 16px 45px
                rgba(216, 180, 90, 0.30);
        }

        .button-secondary {
            color: #ffffff;

            border:
                1px solid
                rgba(231, 201, 149, 0.55);

            background:
                rgba(0, 0, 0, 0.20);

            backdrop-filter: blur(8px);
        }

        .button-secondary:hover {
            transform: translateY(-4px);

            background:
                rgba(231, 201, 149, 0.10);
        }


        /* ==========================================
           LIGHTBOX
        ========================================== */

        .lightbox {
            position: fixed;

            inset: 0;

            z-index: 100;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 25px;

            background:
                rgba(0, 0, 0, 0.92);

            opacity: 0;

            visibility: hidden;

            transition:
                opacity 0.3s ease,
                visibility 0.3s ease;
        }

        .lightbox.active {
            opacity: 1;

            visibility: visible;
        }

        .lightbox-content {
            position: relative;

            width: min(900px, 100%);

            max-height: 90vh;

            text-align: center;
        }

        .lightbox img {
            max-width: 100%;

            max-height: 70vh;

            display: block;

            margin: auto;

            object-fit: contain;

            border-radius: 10px;

            box-shadow:
                0 20px 80px
                rgba(0, 0, 0, 0.7);
        }

        .lightbox-info {
            padding-top: 20px;
        }

        .lightbox-info h3 {
            margin-bottom: 8px;

            font-size: 24px;

            font-weight: normal;
        }

        .lightbox-info p {
            color: #bdbdbd;

            font-size: 14px;
        }

        .close {
            position: absolute;

            top: -15px;
            right: -15px;

            width: 42px;
            height: 42px;

            display: flex;

            align-items: center;
            justify-content: center;

            border: 1px solid
                rgba(255, 255, 255, 0.25);

            border-radius: 50%;

            color: #ffffff;

            background:
                rgba(20, 20, 20, 0.9);

            font-size: 23px;

            cursor: pointer;

            transition:
                0.3s ease;
        }

        .close:hover {
            color: #e7c995;

            border-color:
                rgba(231, 201, 149, 0.6);

            transform: rotate(90deg);
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
                    translateY(40px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

        }


        /* ==========================================
           TABLET
        ========================================== */

        @media (max-width: 900px) {

            .gallery {
                grid-template-columns:
                    repeat(2, 1fr);
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

            .gallery-section {
                padding:
                    30px 18px
                    70px;
            }

            .gallery {
                grid-template-columns: 1fr;

                gap: 20px;
            }

            .photo-info {
                padding:
                    20px;
            }

            .photo-info h3 {
                font-size: 20px;
            }

            .memory-message {
                margin-top: 70px;

                padding:
                    40px 20px;
            }

            .navigation {
                flex-direction: column;

                align-items: center;
            }

            .button {
                width: 100%;

                max-width: 320px;
            }

            .close {
                top: -10px;
                right: -5px;
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
            .photo-card {
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
                Bab Kedua
            </div>

            <h1>
                Kenangan
            </h1>

            <p>

                Ada hal-hal yang mungkin terlihat
                sederhana ketika terjadi.

                <br><br>

                Tetapi ketika waktu berjalan,
                justru hal-hal sederhana itulah
                yang paling ingin kita ingat kembali.

            </p>

        </div>

    </section>


    <!-- ==========================================
         GALLERY
    ========================================== -->

    <section class="gallery-section">

        <div class="section-heading">

            <span>
                Potongan Cerita
            </span>

            <h2>
                Momen Yang Tak Tergantikan
            </h2>

        </div>


        <div class="gallery">


            <?php foreach ($photos as $index => $photo): ?>

                <div
                    class="photo-card"
                    data-index="<?= $index ?>"
                    data-image="<?= htmlspecialchars($photo['file']) ?>"
                    data-title="<?= htmlspecialchars($photo['title']) ?>"
                    data-description="<?= htmlspecialchars($photo['description']) ?>"
                >

                    <div class="photo-wrapper">

                        <img
                            src="<?= htmlspecialchars($photo['file']) ?>"
                            alt="<?= htmlspecialchars($photo['title']) ?>"
                            loading="lazy"
                        >

                    </div>


                    <div class="photo-info">

                        <h3>
                            <?= htmlspecialchars($photo['title']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($photo['description']) ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>


        <!-- ======================================
             MESSAGE
        ======================================= -->

        <div class="memory-message">

            <div class="symbol">
                ✦
            </div>

            <p>
                "Foto mungkin hanya menangkap
                satu detik, tetapi kenangan
                membuat detik itu hidup
                selamanya."
            </p>

            <span>
                Untuk Ibu &amp; Ayah
            </span>

        </div>


        <!-- ======================================
             NAVIGATION
        ======================================= -->

        <div class="navigation">

            <a
                href="cerita.php"
                class="button button-secondary"
            >
                ← Kembali ke Cerita
            </a>

            <a
                href="untuk-ibu.php"
                class="button button-main"
            >
                Surat Untuk Ibu ❤️
            </a>

        </div>

    </section>


    <!-- ==========================================
         LIGHTBOX
    ========================================== -->

    <div
        class="lightbox"
        id="lightbox"
    >

        <div class="lightbox-content">

            <button
                class="close"
                id="closeLightbox"
                aria-label="Tutup"
            >
                ×
            </button>

            <img
                id="lightboxImage"
                src=""
                alt=""
            >

            <div class="lightbox-info">

                <h3 id="lightboxTitle"></h3>

                <p id="lightboxDescription"></p>

            </div>

        </div>

    </div>


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

        /* ==========================================
           ANIMASI PHOTO CARD
        ========================================== */

        const photoCards =
            document.querySelectorAll(
                ".photo-card"
            );

        const cardObserver =
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
                    threshold: 0.12
                }

            );


        photoCards.forEach(
            (card) => {

                cardObserver.observe(card);

            }
        );


        /* ==========================================
           LIGHTBOX
        ========================================== */

        const lightbox =
            document.getElementById(
                "lightbox"
            );

        const lightboxImage =
            document.getElementById(
                "lightboxImage"
            );

        const lightboxTitle =
            document.getElementById(
                "lightboxTitle"
            );

        const lightboxDescription =
            document.getElementById(
                "lightboxDescription"
            );

        const closeLightbox =
            document.getElementById(
                "closeLightbox"
            );


        photoCards.forEach(
            (card) => {

                card.addEventListener(
                    "click",
                    () => {

                        const image =
                            card.dataset.image;

                        const title =
                            card.dataset.title;

                        const description =
                            card.dataset.description;


                        lightboxImage.src =
                            image;

                        lightboxImage.alt =
                            title;

                        lightboxTitle.textContent =
                            title;

                        lightboxDescription.textContent =
                            description;


                        lightbox.classList.add(
                            "active"
                        );

                        document.body.style.overflow =
                            "hidden";

                    }
                );

            }
        );


        function closeGallery() {

            lightbox.classList.remove(
                "active"
            );

            document.body.style.overflow =
                "";

        }


        closeLightbox.addEventListener(
            "click",
            closeGallery
        );


        lightbox.addEventListener(
            "click",
            (event) => {

                if (
                    event.target === lightbox
                ) {

                    closeGallery();

                }

            }
        );


        document.addEventListener(
            "keydown",
            (event) => {

                if (
                    event.key === "Escape"
                ) {

                    closeGallery();

                }

            }
        );

    </script>


</body>

</html>