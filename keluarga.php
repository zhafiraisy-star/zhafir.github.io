<?php
$title = "Keluarga Kita ❤️";

$anggota = [
    [
        "nama" => "Ibu",
        "peran" => "Hati Rumah Ini",
        "deskripsi" => "Seseorang yang selalu memberikan kasih sayang, perhatian, doa, dan membuat rumah terasa seperti tempat paling nyaman untuk pulang."
    ],
    [
        "nama" => "Ayah",
        "peran" => "Kekuatan Keluarga",
        "deskripsi" => "Sosok yang selalu berusaha melindungi, bekerja keras, memberikan arah, dan memastikan keluarga tetap berdiri bersama."
    ],
    [
        "nama" => "Aku",
        "peran" => "Bagian Dari Cerita",
        "deskripsi" => "Seorang anak yang mungkin belum sempurna, tetapi selalu bersyukur karena memiliki keluarga yang begitu berarti."
    ],
    [
        "nama" => "Kita",
        "peran" => "Satu Keluarga",
        "deskripsi" => "Bukan tentang siapa yang paling sempurna, tetapi tentang kita yang selalu memiliki satu sama lain."
    ]
];
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
           BACKGROUND EFFECT
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

            animation:
                glowMove 9s ease-in-out infinite alternate;
        }

        .glow:nth-child(1) {
            top: -160px;
            left: -150px;
        }

        .glow:nth-child(2) {
            right: -160px;
            bottom: -160px;

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
           CONTAINER
        ========================= */

        .container {
            width: min(1100px, 92%);

            margin: auto;

            padding: 80px 0;
        }

        /* =========================
           HEADER
        ========================= */

        .hero {
            text-align: center;

            max-width: 800px;

            margin: 0 auto 65px;
        }

        .chapter {
            display: inline-block;

            padding: 8px 18px;

            margin-bottom: 20px;

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
            margin-bottom: 22px;

            font-size: clamp(45px, 7vw, 80px);

            font-weight: normal;

            color: #f3d77a;

            text-shadow:
                0 0 20px rgba(212, 175, 55, 0.25),
                0 5px 30px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            color: rgba(255, 255, 255, 0.82);

            font-size: 18px;

            line-height: 1.9;
        }

        .divider {
            width: 110px;
            height: 1px;

            margin: 35px auto 0;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    #d4af37,
                    transparent
                );
        }

        /* =========================
           FAMILY PHOTO
        ========================= */

        .family-photo-section {
            text-align: center;

            margin-bottom: 70px;
        }

        .photo-frame {
            position: relative;

            width: min(850px, 100%);

            margin: auto;

            padding: 12px;

            border: 1px solid rgba(212, 175, 55, 0.65);

            background:
                linear-gradient(
                    145deg,
                    rgba(212, 175, 55, 0.16),
                    rgba(0, 0, 0, 0.45)
                );

            box-shadow:
                0 30px 70px rgba(0, 0, 0, 0.55),
                0 0 40px rgba(212, 175, 55, 0.08);
        }

        .photo-frame::before,
        .photo-frame::after {
            content: "";

            position: absolute;

            width: 55px;
            height: 55px;

            border-color: #d4af37;

            pointer-events: none;
        }

        .photo-frame::before {
            top: -8px;
            left: -8px;

            border-top: 2px solid;
            border-left: 2px solid;
        }

        .photo-frame::after {
            right: -8px;
            bottom: -8px;

            border-right: 2px solid;
            border-bottom: 2px solid;
        }

        .photo-frame img {
            display: block;

            width: 100%;

            max-height: 600px;

            object-fit: cover;

            border: 1px solid rgba(255, 255, 255, 0.12);

            transition:
                transform 0.8s ease,
                filter 0.8s ease;
        }

        .photo-frame:hover img {
            transform: scale(1.015);

            filter:
                brightness(1.05)
                saturate(1.05);
        }

        .photo-caption {
            margin-top: 22px;

            color: rgba(255, 255, 255, 0.7);

            font-size: 14px;

            letter-spacing: 1px;
        }

        /* =========================
           FAMILY CARDS
        ========================= */

        .family-title {
            text-align: center;

            margin-bottom: 35px;

            color: #e5c76b;

            font-size: 15px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }

        .family-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 25px;
        }

        .family-card {
            position: relative;

            padding: 35px 30px;

            min-height: 245px;

            border-radius: 15px;

            border: 1px solid rgba(212, 175, 55, 0.28);

            background:
                linear-gradient(
                    145deg,
                    rgba(0, 0, 0, 0.5),
                    rgba(25, 22, 15, 0.62)
                );

            backdrop-filter: blur(10px);

            overflow: hidden;

            opacity: 0;

            transform: translateY(35px);

            transition:
                opacity 0.7s ease,
                transform 0.7s ease,
                border-color 0.4s ease,
                box-shadow 0.4s ease;
        }

        .family-card.show {
            opacity: 1;

            transform: translateY(0);
        }

        .family-card:hover {
            border-color:
                rgba(212, 175, 55, 0.7);

            box-shadow:
                0 20px 45px rgba(0, 0, 0, 0.4),
                0 0 25px rgba(212, 175, 55, 0.08);

            transform:
                translateY(-6px);
        }

        .family-card::before {
            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            right: -55px;
            top: -55px;

            border-radius: 50%;

            border: 1px solid rgba(212, 175, 55, 0.12);
        }

        .family-number {
            color: #d4af37;

            font-size: 13px;

            letter-spacing: 2px;

            margin-bottom: 18px;
        }

        .family-card h2 {
            margin-bottom: 7px;

            color: #f1d474;

            font-size: 30px;

            font-weight: normal;
        }

        .family-card h3 {
            margin-bottom: 18px;

            color: rgba(255, 255, 255, 0.72);

            font-size: 14px;

            font-weight: normal;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .family-card p {
            color: rgba(255, 255, 255, 0.76);

            font-size: 15px;

            line-height: 1.85;
        }

        /* =========================
           QUOTE
        ========================= */

        .quote-section {
            max-width: 800px;

            margin: 80px auto 0;

            padding: 45px 35px;

            text-align: center;

            border-top: 1px solid
                rgba(212, 175, 55, 0.3);

            border-bottom: 1px solid
                rgba(212, 175, 55, 0.3);
        }

        .quote-mark {
            color: #d4af37;

            font-size: 50px;

            line-height: 0.5;

            margin-bottom: 20px;
        }

        .quote {
            color: rgba(255, 255, 255, 0.9);

            font-size: clamp(20px, 3vw, 27px);

            line-height: 1.7;

            font-style: italic;
        }

        .quote-author {
            margin-top: 20px;

            color: #d4af37;

            font-size: 13px;

            letter-spacing: 2px;
        }

        /* =========================
           CLOSING MESSAGE
        ========================= */

        .closing {
            text-align: center;

            max-width: 700px;

            margin: 75px auto 0;
        }

        .closing h2 {
            margin-bottom: 20px;

            color: #f0d272;

            font-size: clamp(30px, 5vw, 45px);

            font-weight: normal;
        }

        .closing p {
            color: rgba(255, 255, 255, 0.75);

            font-size: 17px;

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

            align-items: center;

            justify-content: center;

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

            border: 1px solid
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

            color: rgba(255, 255, 255, 0.5);

            font-size: 13px;

            letter-spacing: 1px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .container {
                padding: 55px 0;
            }

            .hero {
                margin-bottom: 50px;
            }

            .hero p {
                font-size: 16px;
            }

            .family-grid {
                grid-template-columns: 1fr;
            }

            .family-card {
                min-height: auto;
            }

            .photo-frame {
                padding: 8px;
            }

            .photo-frame img {
                max-height: 450px;
            }

            .quote-section {
                padding: 35px 20px;
            }

            .quote {
                font-size: 19px;
            }

            .closing p {
                font-size: 15px;
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
                Bab Kelima
            </div>

            <h1>Kita.</h1>

            <p>
                Setelah melihat cerita Ibu dan Ayah,
                sekarang ada satu hal yang ingin aku tunjukkan.
                Bukan tentang satu orang.
                Tetapi tentang kita.
            </p>

            <div class="divider"></div>

        </section>


        <!-- FOTO KELUARGA -->

        <section class="family-photo-section">

            <div class="photo-frame">

                <img
                    src="assets/images/keluarga.jpg"
                    alt="Foto Keluarga"
                >

            </div>

            <p class="photo-caption">
                Satu foto. Banyak cerita. Satu keluarga. ❤️
            </p>

        </section>


        <!-- ANGGOTA KELUARGA -->

        <section>

            <div class="family-title">
                Bagian Dari Cerita
            </div>

            <div class="family-grid">

                <?php foreach ($anggota as $index => $orang): ?>

                    <article class="family-card">

                        <div class="family-number">
                            0<?= $index + 1 ?>
                        </div>

                        <h2>
                            <?= htmlspecialchars($orang["nama"]) ?>
                        </h2>

                        <h3>
                            <?= htmlspecialchars($orang["peran"]) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($orang["deskripsi"]) ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>


        <!-- QUOTE -->

        <section class="quote-section">

            <div class="quote-mark">
                “
            </div>

            <p class="quote">
                Rumah bukan hanya tempat untuk pulang.
                Rumah adalah tempat di mana ada orang-orang
                yang selalu menunggu kita kembali.
            </p>

            <div class="quote-author">
                — Untuk keluarga kecilku ❤️
            </div>

        </section>


        <!-- PENUTUP -->

        <section class="closing">

            <h2>
                Selama Kita Bersama...
            </h2>

            <p>
                Mungkin hidup tidak selalu berjalan sempurna.
                Akan ada hari yang mudah dan ada hari yang sulit.
                Tetapi selama kita masih bisa saling menggenggam,
                saling mendoakan, dan saling menyayangi,
                aku percaya semuanya akan terasa lebih ringan.
            </p>

        </section>


        <!-- NAVIGASI -->

        <div class="buttons">

            <a
                href="untuk-ayah.php"
                class="button button-secondary"
            >
                ← Kembali ke Surat Ayah
            </a>

            <a
                href="kejutan.php"
                class="button button-main"
            >
                ✦ Lanjut ke Kejutan
            </a>

        </div>


        <footer>
            Dibuat dengan penuh cinta untuk Ibu & Ayah ❤️
        </footer>

    </main>


    <script>

        const cards =
            document.querySelectorAll(".family-card");

        const observer =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach((entry) => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("show");

                            observer.unobserve(
                                entry.target
                            );
                        }

                    });

                },
                {
                    threshold: 0.15
                }
            );


        cards.forEach((card, index) => {

            card.style.transitionDelay =
                `${index * 120}ms`;

            observer.observe(card);

        });

    </script>

</body>
</html>