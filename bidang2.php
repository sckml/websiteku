<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidang</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f5f7;
        }

        .hero_bg_box img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .service_section {
            padding: 50px 20px;
            text-align: center;
        }

        .service_container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            max-width: 1100px;
            margin: auto;
        }

        .box {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .box img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .box h5 {
            font-size: 1rem;
            margin: 10px 0;
        }

        .btn-box {
            margin-top: 8px;
        }

        .btn-box a {
            display: inline-block;
            padding: 8px 16px;
            font-size: 0.9rem;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 20px;
            transition: background 0.3s;
        }

        .btn-box a:hover {
            background: #0056b3;
        }

        /* Responsif untuk layar kecil (HP) */
        @media (max-width: 768px) {
            .box {
                padding: 12px;
            }

            .box img {
                height: 130px;
            }

            .box h5 {
                font-size: 0.9rem;
            }

            .btn-box a {
                padding: 6px 14px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body class="sub_page">
    <div class="hero_area">
        <div class="hero_bg_box">
            <img src="images/profil.jpg" alt="">
        </div>
        <header class="header_section">
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="index.html">Lensa.com</a>
                        <button class="navbar-toggler" type="button">
                            <span class=""></span>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                                <li class="nav-item active"><a class="nav-link" href="bidang2.php">Bidang</a></li>
                                <li class="nav-item"><a class="nav-link" href="informasi.php">Informasi</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div>

<section class="service_section">
    <div class="container">
        <div class="service_container">
            <div class="box">
                <img src="images/ideologi.png" alt="Ideologi">
                <h5>Ideologi Pembangunan</h5>
                <div class="btn-box"><a href="ideologi.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/politik.png" alt="Politik">
                <h5>Analisis Politik dan Dukungan Kebijakan</h5>
                <div class="btn-box"><a href="politik.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/budaya.png" alt="Budaya">
                <h5>Pemberdayaan Budaya Lokal</h5>
                <div class="btn-box"><a href="budaya.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/agama.png" alt="Agama">
                <h5>Peran Agama dalam Kerukunan</h5>
                <div class="btn-box"><a href="agama.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/pendidikan.png" alt="Pendidikan">
                <h5>Program Pendidikan Berkualitas</h5>
                <div class="btn-box"><a href="pendidikan.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/ekonomi.png" alt="Ekonomi">
                <h5>Mendukung Pelaku Usaha</h5>
                <div class="btn-box"><a href="ekonomi.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/sosial.png" alt="Sosial">
                <h5>Program Pengembangan Sosial</h5>
                <div class="btn-box"><a href="sosial.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/pertahanan.png" alt="Pertahanan">
                <h5>Konsultasi dalam Pertahanan dan Keamanan</h5>
                <div class="btn-box"><a href="pertahanan.php">Yuk Baca</a></div>
            </div>
            <div class="box">
                <img src="images/prestasi.png" alt="Prestasi">
                <h5>Meningkatkan Infrastruktur</h5>
                <div class="btn-box"><a href="pencapaian.php">Yuk Baca</a></div>
            </div>
        </div>
    </div>
</section>
