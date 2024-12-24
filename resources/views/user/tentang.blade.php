<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLBN 1 Pelaihari - Tentang Kami</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
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
            color: #1e3a5f;
            font-family: 'Arial', sans-serif;
            text-align: center;
            transition: color 0.3s;
        }

        header.scrolled .logo span {
            color: white;
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

        .about-us {
            padding: 50px 20px;
            background-color: #fff;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-us h2 {
            font-size: 2.5em;
            color: #1e3a5f;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-us ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .about-us ul li {
            font-size: 1.1em;
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/SLBN.png" alt="Logo SLBN 1 Pelaihari">
            <span>SLBN 1 Pelaihari</span>
        </div>
        <nav>
            <a href="user">Beranda</a>
            <a href="tentang">Tentang Kami</a>
            <a href="PPDB">PPDB</a>
            <a href="#">Hubungi Kami</a>
            <a href="login">Logout</a>
        </nav>
    </header>

    <section class="about-us">
        <div class="container">
            <h2>Tentang SLBN 1 Pelaihari</h2>
            <p>SLBN 1 Pelaihari adalah sekolah luar biasa negeri yang terletak di Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan. Sekolah ini berkomitmen untuk memberikan pendidikan berkualitas kepada siswa berkebutuhan khusus, baik dari segi akademik maupun non-akademik, untuk mengembangkan potensi mereka secara maksimal.</p>

            <p>Sejak berdirinya, SLBN 1 Pelaihari terus berkembang dalam hal fasilitas, kurikulum, dan pelayanan kepada siswa serta orang tua. Kami memiliki visi untuk menjadi pusat pendidikan inklusif yang memberikan kesempatan yang setara kepada semua siswa untuk mengembangkan kemampuan mereka tanpa batasan.</p>

            <h3>Visi dan Misi</h3>
            <p><strong>Visi:</strong> Menjadi sekolah yang unggul dalam pendidikan bagi siswa berkebutuhan khusus dengan pendekatan yang humanis dan berbasis teknologi.</p>
            <p><strong>Misi:</strong></p>
            <ul>
                <li>Memberikan pendidikan yang merata bagi semua siswa dengan berbagai jenis kebutuhan khusus.</li>
                <li>Meningkatkan kualitas pengajaran dan fasilitas pendidikan secara terus-menerus.</li>
                <li>Menumbuhkan kesadaran di kalangan masyarakat tentang pentingnya pendidikan inklusif.</li>
                <li>Memberdayakan siswa untuk mengembangkan keterampilan hidup dan sosial yang baik.</li>
            </ul>

            <h3>Pencapaian</h3>
            <p>Selama bertahun-tahun, SLBN 1 Pelaihari telah mencapai banyak hal, di antaranya:</p>
            <ul>
                <li>Menjadi sekolah inklusif terbaik di Kabupaten Tanah Laut.</li>
                <li>Menerima berbagai penghargaan di bidang pendidikan dan kreativitas siswa.</li>
                <li>Melakukan kerjasama dengan berbagai lembaga pendidikan untuk meningkatkan kualitas pengajaran.</li>
                <li>Menjadi pusat pelatihan bagi tenaga pendidik dalam menangani siswa berkebutuhan khusus.</li>
            </ul>

            <h3>Fasilitas Kami</h3>
            <p>SLBN 1 Pelaihari memiliki fasilitas lengkap untuk mendukung pendidikan siswa berkebutuhan khusus, termasuk:</p>
            <ul>
                <li>Ruang kelas yang nyaman dan dilengkapi dengan teknologi yang mendukung pembelajaran.</li>
                <li>Fasilitas olahraga dan seni untuk mengembangkan kreativitas siswa.</li>
                <li>Ruang konseling dan dukungan psikologis bagi siswa dan orang tua.</li>
                <li>Laboratorium komputer untuk mengajarkan keterampilan digital kepada siswa.</li>
            </ul>

            <p>Dengan semangat untuk memberikan yang terbaik bagi siswa-siswa kami, SLBN 1 Pelaihari terus berupaya menciptakan lingkungan yang mendukung perkembangan setiap anak.</p>
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
