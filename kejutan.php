<?php
$title = "Sebuah Kejutan Untuk Ibu & Ayah ❤️";

$pesan = [
    "Ibu dan Ayah,",
    "Terima kasih karena telah menjadi rumah terbaik yang pernah aku miliki.",
    "Terima kasih untuk setiap doa, setiap perhatian, setiap pengorbanan, dan setiap perjuangan yang mungkin tidak selalu bisa aku lihat.",
    "Aku mungkin belum bisa membalas semuanya.",
    "Tetapi aku ingin Ibu dan Ayah tahu satu hal...",
    "Aku sangat bersyukur menjadi anak kalian.",
    "Dan selama aku masih memiliki kesempatan, aku akan terus berusaha membuat kalian bangga."
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

            width: 500px;
            height: 500px;

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
           OPENING SCREEN
        ========================= */

        .opening {
            position: fixed;
            inset: 0;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 25px;

            text-align: center;

            background:
                radial-gradient(
                    circle at center,
                    rgba(55, 43, 16, 0.5),
                    rgba(0, 0, 0, 0.94)
                );

            backdrop-filter: blur(8px);

            z-index: 100;

            transition:
                opacity 1s ease,
                visibility 1s ease;
        }

        .opening.hide {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .opening-content {
            max-width: 700px;

            animation:
                openingAppear 1.2s ease;
        }

        @keyframes openingAppear {

            from {
                opacity: 0;
                transform: translateY(25px) scale(0.96);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .opening-symbol {
            margin-bottom: 30px;

            color: #d4af37;

            font-size: 45px;

            animation:
                symbolPulse 2.5s ease-in-out infinite;
        }

        @keyframes symbolPulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.12);
                opacity: 1;
            }
        }

        .opening h1 {
            margin-bottom: 20px;

            color: #f3d77a;

            font-size: clamp(38px, 7vw, 72px);

            font-weight: normal;

            text-shadow:
                0 0 30px rgba(212, 175, 55, 0.25),
                0 5px 30px rgba(0, 0, 0, 0.8);
        }

        .opening p {
            margin-bottom: 40px;

            color: rgba(255, 255, 255, 0.78);

            font-size: 18px;

            line-height: 1.8;
        }

        .open-button {
            position: relative;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 230px;

            padding: 16px 30px;

            border: 1px solid #e3c45f;
            border-radius: 50px;

            color: #17130a;

            background:
                linear-gradient(
                    135deg,
                    #f5dc80,
                    #b88e25
                );

            font-family:
                Georgia,
                "Times New Roman",
                serif;

            font-size: 16px;

            cursor: pointer;

            box-shadow:
                0 10px 35px
                rgba(212, 175, 55, 0.22);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .open-button:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 45px
                rgba(212, 175, 55, 0.35);
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            width: min(900px, 92%);

            margin: auto;

            padding: 90px 0 70px;

            text-align: center;

            opacity: 0;

            transform: translateY(30px);

            transition:
                opacity 1s ease,
                transform 1s ease;
        }

        .main.show {
            opacity: 1;
            transform: translateY(0);
        }

        .chapter {
            display: inline-block;

            padding: 8px 18px;

            margin-bottom: 22px;

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

        .main h1 {
            margin-bottom: 20px;

            color: #f3d77a;

            font-size: clamp(50px, 9vw, 95px);

            font-weight: normal;

            line-height: 1;

            text-shadow:
                0 0 30px
                rgba(212, 175, 55, 0.25),

                0 8px 35px
                rgba(0, 0, 0, 0.8);
        }

        .subtitle {
            color:
                rgba(255, 255, 255, 0.78);

            font-size: 19px;

            line-height: 1.8;
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
           HEART
        ========================= */

        .big-heart {
            margin: 30px auto 40px;

            color: #d4af37;

            font-size: 65px;

            text-shadow:
                0 0 25px
                rgba(212, 175, 55, 0.3);

            animation:
                heartbeat 2s ease-in-out infinite;
        }

        @keyframes heartbeat {

            0%,
            100% {
                transform: scale(1);
            }

            15% {
                transform: scale(1.12);
            }

            30% {
                transform: scale(1);
            }

            45% {
                transform: scale(1.08);
            }

            60% {
                transform: scale(1);
            }
        }

        /* =========================
           MESSAGE
        ========================= */

        .message-card {
            max-width: 760px;

            margin: auto;

            padding: 45px 40px;

            border-radius: 18px;

            border:
                1px solid
                rgba(212, 175, 55, 0.35);

            background:
                linear-gradient(
                    145deg,
                    rgba(0, 0, 0, 0.48),
                    rgba(25, 22, 15, 0.62)
                );

            backdrop-filter: blur(12px);

            box-shadow:
                0 25px 70px
                rgba(0, 0, 0, 0.4);
        }

        .message-card p {
            margin-bottom: 23px;

            color:
                rgba(255, 255, 255, 0.84);

            font-size: 17px;

            line-height: 2;
        }

        .message-card p:first-child {
            color: #f0d272;

            font-size: 23px;
        }

        .message-card .highlight {
            color: #f1d474;

            font-size: 20px;

            font-weight: bold;
        }

        /* =========================
           FAMILY PHOTO
        ========================= */

        .family-photo {
            margin: 55px auto 0;

            max-width: 750px;

            padding: 10px;

            border:
                1px solid
                rgba(212, 175, 55, 0.6);

            background:
                rgba(0, 0, 0, 0.3);

            box-shadow:
                0 25px 60px
                rgba(0, 0, 0, 0.5);
        }

        .family-photo img {
            display: block;

            width: 100%;

            max-height: 550px;

            object-fit: cover;
        }

        /* =========================
           FINAL TEXT
        ========================= */

        .final-message {
            margin-top: 65px;
        }

        .final-message h2 {
            margin-bottom: 15px;

            color: #f1d474;

            font-size:
                clamp(30px, 5vw, 48px);

            font-weight: normal;
        }

        .final-message p {
            color:
                rgba(255, 255, 255, 0.7);

            font-size: 16px;

            line-height: 1.8;
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

        .video-button,
        .back {
            display: inline-flex;

            justify-content: center;
            align-items: center;

            min-width: 230px;

            padding: 15px 25px;

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

        .video-button {
            color: #17130a;

            background:
                linear-gradient(
                    135deg,
                    #f2d778,
                    #b9912d
                );

            box-shadow:
                0 10px 30px
                rgba(212, 175, 55, 0.18);
        }

        .video-button:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 40px
                rgba(212, 175, 55, 0.3);
        }

        .back {
            color: #e5c76b;

            border:
                1px solid
                rgba(212, 175, 55, 0.55);

            background:
                rgba(0, 0, 0, 0.25);

            backdrop-filter: blur(8px);
        }

        .back:hover {
            transform: translateY(-3px);

            background:
                rgba(212, 175, 55, 0.1);
        }

        /* =========================
           FLOATING HEARTS
        ========================= */

        .floating-heart {
            position: fixed;

            bottom: -30px;

            color: #d4af37;

            font-size: 18px;

            pointer-events: none;

            z-index: 50;

            animation:
                floatHeart linear forwards;
        }

        @keyframes floatHeart {

            from {
                transform:
                    translateY(0)
                    rotate(0deg)
                    scale(0.7);

                opacity: 0;
            }

            10% {
                opacity: 0.8;
            }

            80% {
                opacity: 0.6;
            }

            to {
                transform:
                    translateY(-110vh)
                    rotate(360deg)
                    scale(1.2);

                opacity: 0;
            }
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 80px;

            color:
                rgba(255, 255, 255, 0.5);

            font-size: 13px;

            letter-spacing: 1px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            .main {
                padding: 60px 0;
            }

            .subtitle {
                font-size: 16px;
            }

            .message-card {
                padding: 30px 23px;
            }

            .message-card p {
                font-size: 15px;

                line-height: 1.9;
            }

            .message-card p:first-child {
                font-size: 20px;
            }

            .message-card .highlight {
                font-size: 18px;
            }

            .family-photo {
                padding: 7px;
            }

            .big-heart {
                font-size: 55px;
            }

            .video-button,
            .back {
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


    <!-- =========================
         OPENING
    ========================= -->

    <section
        class="opening"
        id="opening"
    >

        <div class="opening-content">

            <div class="opening-symbol">
                ✦
            </div>

            <h1>
                Ada Sesuatu<br>
                Untuk Ibu & Ayah
            </h1>

            <p>
                Setelah perjalanan panjang ini,
                masih ada satu hal yang ingin
                aku sampaikan kepada kalian.
            </p>

            <button
                class="open-button"
                id="openButton"
                type="button"
            >
                ✦ Buka Kejutan ✦
            </button>

        </div>

    </section>


    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main
        class="main"
        id="mainContent"
    >

        <div class="chapter">
            Sebuah Kejutan
        </div>


        <h1>
            Ibu & Ayah
        </h1>


        <p class="subtitle">
            Ada beberapa hal yang mungkin
            tidak cukup jika hanya diucapkan.
        </p>


        <div class="divider"></div>


        <div class="big-heart">
            ♥
        </div>


        <!-- PESAN -->

        <section class="message-card">

            <?php foreach ($pesan as $index => $kalimat): ?>

                <?php if ($index === 4): ?>

                    <p class="highlight">
                        <?= htmlspecialchars($kalimat) ?>
                    </p>

                <?php elseif ($index === 6): ?>

                    <p class="highlight">
                        <?= htmlspecialchars($kalimat) ?>
                    </p>

                <?php else: ?>

                    <p>
                        <?= htmlspecialchars($kalimat) ?>
                    </p>

                <?php endif; ?>

            <?php endforeach; ?>

        </section>


        <!-- FOTO -->

        <div class="family-photo">

            <img
                src="assets/images/keluarga.jpg"
                alt="Kenangan keluarga Ibu dan Ayah"
            >

        </div>


        <!-- FINAL MESSAGE -->

        <section class="final-message">

            <h2>
                Aku Sayang Ibu & Ayah.
            </h2>

            <p>
                Terima kasih sudah menjadi bagian
                terpenting dalam hidupku.
            </p>

        </section>


        <!-- BUTTONS -->

        <div class="buttons">

            <a
                href="video.php"
                class="video-button"
            >
                🎬 Lihat Video Untuk Ibu & Ayah
            </a>

            <a
                href="index.php"
                class="back"
            >
                ← Kembali ke Awal
            </a>

        </div>


        <footer>
            Dibuat dengan penuh cinta untuk Ibu & Ayah ❤️
        </footer>

    </main>


    <script>

        const opening =
            document.getElementById("opening");

        const openButton =
            document.getElementById("openButton");

        const mainContent =
            document.getElementById("mainContent");


        openButton.addEventListener(
            "click",
            function () {

                opening.classList.add("hide");

                setTimeout(function () {

                    mainContent.classList.add("show");

                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });

                    createHearts();

                }, 500);

            }
        );


        function createHearts() {

            let jumlah = 22;

            for (
                let i = 0;
                i < jumlah;
                i++
            ) {

                setTimeout(
                    createHeart,
                    i * 180
                );

            }

        }


        function createHeart() {

            const heart =
                document.createElement("div");

            heart.className =
                "floating-heart";

            heart.innerHTML =
                Math.random() > 0.5
                    ? "♥"
                    : "✦";


            heart.style.left =
                Math.random() * 100 + "vw";


            heart.style.fontSize =
                (12 + Math.random() * 18) + "px";


            heart.style.animationDuration =
                (5 + Math.random() * 5) + "s";


            document.body.appendChild(heart);


            setTimeout(function () {

                heart.remove();

            }, 11000);

        }

    </script>

</body>
</html>