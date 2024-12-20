<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLBN 1 Pelaihari</title>
    <style>
         body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background: url('images/ima.jpg') no-repeat center center / cover;
        color: #333;
        scroll-behavior: smooth;
    }

    header {
        background: url('images/background.jpg') no-repeat center center / cover;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        position: sticky;
        top: 0;
        z-index: 10;
        transition: all 0.3s ease;
    }

        header.scrolled {
            background-color: rgba(30, 58, 95, 0.95);
            color: #fff;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .logo span {
            font-size: 2em;
            font-weight: 300;
            color: #1e3a5f; /* Blue color */
            font-family: 'Arial', sans-serif;
            text-align: center;
            transition: color 0.3s;
        }

        header.scrolled .logo span {
            color: white; /* White color on scroll */
        }

        nav {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        nav a {
            text-decoration: none;
            color: #1e3a5f;
            font-size: 1em;
            font-weight: 300;
            font-family: 'Arial', sans-serif;
            transition: color 0.3s;
        }

        header.scrolled nav a {
            color: white;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: url('images/hero-bg.jpg') no-repeat center center / cover;
            padding: 50px;
            height: 90vh;
            color: rgb(82, 82, 82);
        }

        .hero-content {
            max-width: 50%;
        }

        .hero-content h1 {
            font-size: 3em;
            color: #1e3a5f;
            animation: fadeIn 1.5s ease-in;
        }

        .hero-content p {
            font-size: 1.2em;
            margin: 20px 0;
        }

        .hero-content button {
            background-color: #1e3a5f;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .hero-content button:hover {
            background-color: #14304b;
        }

        .hero-image {
            max-width: 40%; /* Limit image width */
            height: auto;
            border-radius: 10px;
        }

        .principal-greeting {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 50px;
            background-color: #fff;
            border-radius: 10px;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .principal-greeting img {
            width: 250px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideInLeft 1s ease-out;
        }

        .principal-text {
            max-width: 600px;
        }

        .principal-text h2 {
            font-size: 2em;
            color: #1e3a5f;
            margin-bottom: 20px;
            animation: slideInRight 1s ease-out;
        }

        .principal-text p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.8;
        }

        /* News Section */
        .school-news {
            padding: 50px;
            background-color: #fff;
            margin: 50px auto;
        }

        .school-news h2 {
            font-size: 2.5em;
            color: #1e3a5f;
            text-align: center;
            margin-bottom: 30px;
        }

        .news-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .news-item {
            flex: 1;
            max-width: 30%;
            box-sizing: border-box;
            text-align: center;
        }

        .news-item img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/SLBN.png" alt="Logo SLBN 1 Pelaihari">
            <span>SLBN 1 Pelaihari</span>
        </div>
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Tentang Kami</a>
            <a href="PPDB">PPDB</a>
            <a href="#">Hubungi Kami</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Sekolah Inovatif Spesial</h1>
            <p>Selamat datang di SLBN 1 Pelaihari. Kami berkomitmen untuk memberikan pendidikan inovatif bagi semua siswa, memupuk kreativitas dan pembelajaran dalam lingkungan yang ramah.</p>
            <button onclick="location.href='{{ route('ppdb.index') }}'" class="btn btn-primary btn-lg" style="padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                DAFTAR SEKARANG
            </button>
        </div>
        <img src="images/disabilitas.png" alt="Innovative School" class="hero-image">
    </section>

    <section class="principal-greeting">
        <img src="images/KEPSEK.png" alt="Kepala Sekolah">
        <div class="principal-text">
            <h2>Sambutan Kepala Sekolah</h2>
            <p>Assalamu'alaikum warahmatullohi wabarakatuh. Salam Sejahtera bagi kita semua, Salom, Om Swastiastu, Namo Buddhaya, Salam Kebajikan...</p>
        </div>
    </section>

    <section class="school-news">
        <h2>Berita Terbaru</h2>
        <div class="news-container">
            <div class="news-item">
                <img src="images/ppdb.jpg" alt="PPDB 2024">
                <h3>Pendaftaran PPDB Tahun 2024 Dibuka</h3>
                <p>SLBN 1 Pelaihari dengan bangga mengumumkan bahwa pendaftaran PPDB untuk tahun ajaran 2024 sudah dibuka...</p>
            </div>
            <div class="news-item">
                <img src="images/lomba-olahraga.jpg" alt="Prestasi Lomba Olahraga">
                <h3>Prestasi Siswa di Lomba Olahraga</h3>
                <p>Selamat kepada siswa-siswi SLBN 1 Pelaihari yang berhasil meraih medali di lomba olahraga tingkat provinsi...</p>
            </div>
            <div class="news-item">
                <img src="images/perpustakaan.jpg" alt="Perpustakaan Baru">
                <h3>Perpustakaan Sekolah Baru Saja Dibuka</h3>
                <p>Perpustakaan terbaru kami kini siap digunakan oleh siswa. Dengan koleksi buku yang lebih banyak...</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 SLBN 1 Pelaihari. All rights reserved.</p>
    </footer>

    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
