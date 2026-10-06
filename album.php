<?php

$title = "Album Kenangan";

$album = [
    [
        "file" => "assets/images/kenangan-01.jpg",
        "judul" => "Awal Sebuah Cerita",
        "deskripsi" => "Semua perjalanan besar selalu dimulai dari sebuah awal kecil."
    ],
    [
        "file" => "assets/images/kenangan-02.jpg",
        "judul" => "Momen Sederhana",
        "deskripsi" => "Mungkin sederhana, tetapi justru momen seperti inilah yang paling dirindukan."
    ],
    [
        "file" => "assets/images/kenangan-03.jpg",
        "judul" => "Bersama",
        "deskripsi" => "Karena kebahagiaan terasa berbeda ketika kita menikmatinya bersama."
    ],
    [
        "file" => "assets/images/kenangan-04.jpg",
        "judul" => "Hari Yang Indah",
        "deskripsi" => "Satu hari, satu kenangan, satu cerita yang akan selalu tersimpan."
    ],
    [
        "file" => "assets/images/kenangan-05.jpg",
        "judul" => "Tawa",
        "deskripsi" => "Ada banyak alasan untuk tersenyum ketika keluarga berkumpul."
    ],
    [
        "file" => "assets/images/kenangan-06.jpg",
        "judul" => "Sampai Hari Ini",
        "deskripsi" => "Cerita kita belum selesai. Masih banyak halaman yang akan kita tulis bersama."
    ]
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

            overflow-x: hidden;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 42vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px 50px;
        }

        .hero-content {
            max-width: 800px;
            animation: fadeUp 1.2s ease forwards;
        }

        .label {
            display: inline-block;
            margin-bottom: 20px;
            padding: 8px 20px;

            border: 1px solid rgba(212, 175, 55, 0.6);
            border-radius: 50px;

            color: #e6c76a;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;

            background: rgba(0, 0, 0, 0.25);
        }

        h1 {
            font-size: clamp(45px, 7vw, 80px);
            line-height: 1.05;
            margin-bottom: 20px;

            color: #f5d77a;

            text-shadow:
                0 0 15px rgba(212, 175, 55, 0.25),
                0 4px 25px rgba(0, 0, 0, 0.7);
        }

        .hero-text {
            max-width: 650px;
            margin: auto;

            color: rgba(255, 255, 255, 0.85);
            font-size: 18px;
            line-height: 1.8;
        }

        /* =========================
           ALBUM
        ========================= */

        .album-section {
            padding: 30px 0 80px;
        }

        .album-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .album-card {
            position: relative;
            overflow: hidden;

            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 20px;

            background: rgba(10, 10, 10, 0.68);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.45);

            cursor: pointer;

            transition:
                transform 0.4s ease,
                border-color 0.4s ease,
                box-shadow 0.4s ease;

            animation: fadeUp 0.8s ease both;
        }

        .album-card:hover {
            transform: translateY(-8px);

            border-color: rgba(230, 199, 106, 0.8);

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.6),
                0 0 30px rgba(212, 175, 55, 0.12);
        }

        .image-wrapper {
            width: 100%;
            height: 280px;
            overflow: hidden;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform 0.7s ease;
        }

        .album-card:hover img {
            transform: scale(1.08);
        }

        .card-content {
            padding: 24px;
        }

        .card-number {
            margin-bottom: 8px;

            color: #d8b95f;
            font-size: 12px;
            letter-spacing: 2px;
        }

        .card-content h2 {
            margin-bottom: 10px;

            color: #f5d77a;
            font-size: 24px;
        }

        .card-content p {
            color: rgba(255, 255, 255, 0.72);
            font-size: 15px;
            line-height: 1.7;
        }

        /* =========================
           FINAL MESSAGE
        ========================= */

        .final-message {
            max-width: 850px;
            margin: 30px auto 0;

            padding: 55px 35px;

            text-align: center;

            border-top: 1px solid rgba(212, 175, 55, 0.35);
            border-bottom: 1px solid rgba(212, 175, 55, 0.35);
        }

        .final-message .symbol {
            margin-bottom: 20px;

            color: #e6c76a;
            font-size: 30px;
        }

        .final-message p {
            margin-bottom: 15px;

            color: rgba(255, 255, 255, 0.85);
            font-size: 18px;
            line-height: 1.8;
        }

        .final-message .highlight {
            color: #f5d77a;
            font-size: 22px;
        }

        /* =========================
           BUTTON
        ========================= */

        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;

            flex-wrap: wrap;

            padding: 60px 20px;
        }

        .button {
            display: inline-block;

            padding: 14px 26px;

            border-radius: 50px;

            text-decoration: none;

            font-size: 15px;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                background 0.3s ease;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .button-secondary {
            color: #ffffff;

            border: 1px solid rgba(212, 175, 55, 0.5);

            background: rgba(0, 0, 0, 0.35);
        }

        .button-secondary:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }

        .button-main {
            color: #17120a;

            background: linear-gradient(
                135deg,
                #f5d77a,
                #c99d32
            );

            font-weight: bold;

            box-shadow:
                0 10px 30px rgba(212, 175, 55, 0.2);
        }

        .button-main:hover {
            box-shadow:
                0 15px 35px rgba(212, 175, 55, 0.35);
        }

        /* =========================
           LIGHTBOX
        ========================= */

        .lightbox {
            position: fixed;
            inset: 0;

            z-index: 1000;

            display: none;
            align-items: center;
            justify-content: center;

            padding: 30px;

            background: rgba(0, 0, 0, 0.92);

            backdrop-filter: blur(8px);
        }

        .lightbox.show {
            display: flex;
            animation: fadeIn 0.3s ease;
        }

        .lightbox-content {
            width: min(1000px, 95vw);

            text-align: center;

            animation: zoomIn 0.35s ease;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 70vh;

            border-radius: 14px;

            object-fit: contain;

            box-shadow:
                0 20px 80px rgba(0, 0, 0, 0.8);
        }

        .lightbox-title {
            margin-top: 20px;

            color: #f5d77a;
            font-size: 27px;
        }

        .lightbox-description {
            max-width: 700px;
            margin: 10px auto 0;

            color: rgba(255, 255, 255, 0.78);

            line-height: 1.7;
        }

        .close-lightbox {
            position: absolute;
            top: 25px;
            right: 30px;

            width: 45px;
            height: 45px;

            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;

            color: #ffffff;
            background: rgba(0, 0, 0, 0.4);

            font-size: 25px;

            cursor: pointer;

            transition: 0.3s;
        }

        .close-lightbox:hover {
            color: #f5d77a;
            border-color: #f5d77a;
            transform: rotate(90deg);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 30px 20px 40px;

            text-align: center;

            color: rgba(255, 255, 255, 0.5);

            font-size: 13px;
            letter-spacing: 1px;
        }

        /* =========================
           ANIMATIONS
        ========================= */

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

        @keyframes fadeIn {

            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }

        }

        @keyframes zoomIn {

            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }

        }

        /* =========================
           TABLET
        ========================= */

        @media (max-width: 900px) {

            .album-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            .hero {
                min-height: 38vh;
                padding-top: 60px;
            }

            .hero-text {
                font-size: 16px;
            }

            .album-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .image-wrapper {
                height: 250px;
            }

            .card-content {
                padding: 20px;
            }

            .final-message {
                padding: 40px 20px;
            }

            .final-message p {
                font-size: 16px;
            }

            .final-message .highlight {
                font-size: 20px;
            }

            .navigation {
                flex-direction: column;
            }

            .button {
                width: min(320px, 90%);
                text-align: center;
            }

            .lightbox {
                padding: 15px;
            }

            .lightbox-image {
                max-height: 65vh;
            }

            .close-lightbox {
                top: 15px;
                right: 15px;
            }

        }

        /* =========================
           REDUCED MOTION
        ========================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }

        }

    </style>

</head>

<body>

    <!-- =========================
         HERO
    ========================= -->

    <header class="hero">

        <div class="hero-content">

            <div class="label">
                Sebuah Kumpulan Kenangan
            </div>

            <h1>
                Album Kenangan
            </h1>

            <p class="hero-text">
                Beberapa potongan kecil dari perjalanan keluarga kita,
                yang akan selalu menjadi bagian dari cerita hidupku.
            </p>

        </div>

    </header>


    <!-- =========================
         ALBUM
    ========================= -->

    <main class="container">

        <section class="album-section">

            <div class="album-grid">

                <?php foreach ($album as $index => $item): ?>

                    <article
                        class="album-card"
                        data-image="<?= htmlspecialchars($item['file']) ?>"
                        data-title="<?= htmlspecialchars($item['judul']) ?>"
                        data-description="<?= htmlspecialchars($item['deskripsi']) ?>"
                    >

                        <div class="image-wrapper">

                            <img
                                src="<?= htmlspecialchars($item['file']) ?>"
                                alt="<?= htmlspecialchars($item['judul']) ?>"
                                loading="lazy"
                            >

                        </div>

                        <div class="card-content">

                            <div class="card-number">
                                KENANGAN <?= str_pad($index + 1, 2, "0", STR_PAD_LEFT) ?>
                            </div>

                            <h2>
                                <?= htmlspecialchars($item['judul']) ?>
                            </h2>

                            <p>
                                <?= htmlspecialchars($item['deskripsi']) ?>
                            </p>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>


        <!-- =========================
             FINAL MESSAGE
        ========================= -->

        <section class="final-message">

            <div class="symbol">
                ✦
            </div>

            <p>
                Setiap foto di sini adalah bagian kecil
                dari perjalanan besar keluarga kita.
            </p>

            <p class="highlight">
                Dan satu hal yang tidak pernah berubah:
                aku akan selalu bersyukur memiliki Ibu dan Ayah.
            </p>

        </section>

    </main>


    <!-- =========================
         NAVIGATION
    ========================= -->

    <div class="navigation">

        <a href="video.php" class="button button-secondary">
            ← Kembali ke Video
        </a>

        <a href="terima-kasih.php" class="button button-main">
            💛 Ucapan Terima Kasih
        </a>

    </div>


    <!-- =========================
         LIGHTBOX
    ========================= -->

    <div class="lightbox" id="lightbox">

        <button
            class="close-lightbox"
            id="closeLightbox"
            aria-label="Tutup"
        >
            ×
        </button>

        <div class="lightbox-content">

            <img
                class="lightbox-image"
                id="lightboxImage"
                src=""
                alt=""
            >

            <h2
                class="lightbox-title"
                id="lightboxTitle"
            ></h2>

            <p
                class="lightbox-description"
                id="lightboxDescription"
            ></p>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>
        Dibuat dengan penuh cinta untuk Ibu & Ayah ❤️
    </footer>


    <script>

        const albumCards =
            document.querySelectorAll(".album-card");

        const lightbox =
            document.getElementById("lightbox");

        const lightboxImage =
            document.getElementById("lightboxImage");

        const lightboxTitle =
            document.getElementById("lightboxTitle");

        const lightboxDescription =
            document.getElementById("lightboxDescription");

        const closeLightbox =
            document.getElementById("closeLightbox");


        /* =========================
           BUKA LIGHTBOX
        ========================= */

        albumCards.forEach(card => {

            card.addEventListener("click", () => {

                const image =
                    card.dataset.image;

                const title =
                    card.dataset.title;

                const description =
                    card.dataset.description;

                lightboxImage.src = image;
                lightboxImage.alt = title;

                lightboxTitle.textContent = title;

                lightboxDescription.textContent =
                    description;

                lightbox.classList.add("show");

                document.body.style.overflow = "hidden";

            });

        });


        /* =========================
           TUTUP LIGHTBOX
        ========================= */

        function closeLightboxFunction() {

            lightbox.classList.remove("show");

            document.body.style.overflow = "";

        }


        closeLightbox.addEventListener(
            "click",
            closeLightboxFunction
        );


        /* Klik area luar foto */

        lightbox.addEventListener("click", event => {

            if (event.target === lightbox) {

                closeLightboxFunction();

            }

        });


        /* Tombol ESC */

        document.addEventListener("keydown", event => {

            if (
                event.key === "Escape" &&
                lightbox.classList.contains("show")
            ) {

                closeLightboxFunction();

            }

        });

    </script>

</body>

</html>