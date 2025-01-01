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
    background: url('images/d.png') no-repeat center center / cover;
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
        align-items: center; /* Ensure vertical alignment */
        gap: 20px;
        justify-content: center;
    }

    nav a {
        text-decoration: none;
        color: #1e3a5f; /* Uniform color */
        font-size: 1em;
        font-weight: bold; /* Bold text */
        font-family: 'Arial', sans-serif;
        transition: color 0.3s;
    }

    header.scrolled nav a {
        color: white; /* White color on scroll */
    }

    nav .login-btn {
        text-decoration: none;
        color: white; /* Ensure uniformity */
        background-color: #1e3a5f;
        padding: 10px 20px;
        font-size: 1em;
        border-radius: 5px;
        font-weight: bold; /* Bold text */
        transition: background-color 0.3s;
    }

    nav .login-btn:hover {
        background-color: #14304b;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        min-width: 150px;
        border-radius: 5px;
        z-index: 15;
    }

    .dropdown-content a {
        color: #333;
        text-decoration: none;
        display: block;
        padding: 10px;
        font-size: 1em;
        font-family: 'Arial', sans-serif;
        transition: background-color 0.3s;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown .dropdown-btn {
        background: none;
        border: none;
        color: #1e3a5f;
        font-size: 1em;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .dropdown .dropdown-btn img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .dropdown .dropdown-btn span {
        font-weight: 500;
    }

    header.scrolled .dropdown .dropdown-btn {
        color: white;
    }

    .user-profile {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .user-profile .profile-picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-profile span {
        font-weight: bold; /* Bold username */
        color: #1e3a5f; /* Same color as other nav items */
    }

    /* Ensure user profile name changes color on scroll */
    header.scrolled .user-profile span {
        color: white; /* Change username color to white when scrolled */
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

    .video-profile {
        padding: 50px;
        background-color: #f9f9f9;
        text-align: center;
        border-top: 5px solid #1e3a5f;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
        border-radius: 10px;
        max-width: 900px;
    }

    .video-profile h2 {
        font-size: 2em;
        color: #1e3a5f;
        margin-bottom: 20px;
        font-family: 'Arial', sans-serif;
    }

    .video-profile p {
        color: #555;
        font-size: 1.2em;
        line-height: 1.8;
        max-width: 800px;
        margin: 20px auto;
        font-family: 'Arial', sans-serif;
    }

    .video-container {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        position: relative;
    }

    .video-container iframe {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 800px;
        height: 450px;
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
        justify-content: flex-start;
        gap: 20px;
        flex-wrap: wrap;
        max-width: 1400px;
    }

    .news-container .news-item {
        flex-basis: calc(33.33% - 20px);
        box-sizing: border-box;
        text-align: center;
        height: auto;
        margin-bottom: 20px;
    }

    .news-item img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .news-item img:hover {
        transform: scale(1.05);
    }

    .news-item h3 {
        font-size: 1.5em;
        font-weight: bold;
        color: #1e3a5f;
    }

    .news-item .news-excerpt {
        font-size: 1.1em;
        color: #555;
        line-height: 1.6;
    }

    .view-more-btn {
        background-color: #1e3a5f;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.3s;
    }

    .view-more-btn:hover {
        background-color: #14304b;
    }

    .stats-container {
        display: flex;
        justify-content: center;
        gap: 50px;
        margin: 50px auto;
        padding: 20px;
        background-color: #14304b;
        border-radius: 0px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 1300px;
    }

    .stat-item {
        text-align: center;
    }

    .stat-item h3 {
        font-size: 2em;
        color:rgb(255, 255, 255);
        margin-bottom: 10px;
    }

    .stat-item p {
        font-size: 1.2em;
        color: white;
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
        }
        to {
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
    }
    /* Mengatur gaya umum untuk seluruh bagian about-us */
    .about-us {
        background-color: #f4f4f4; /* Warna latar belakang yang lembut */
        padding: 40px 20px; /* Padding di seluruh section */
        overflow: hidden; /* Menghindari elemen yang meluap */
    }

    .about-us .container {
        max-width: 1200px; /* Lebar maksimum kontainer */
        margin: 0 auto; /* Memusatkan kontainer */
        padding: 20px;
    }

    .about-us h2 {
        font-size: 2.5rem;
        color: #333; /* Warna teks judul */
        text-align: center;
        margin-bottom: 20px;
    }

    .about-us p {
        font-size: 1.1rem;
        color: #555; /* Warna teks paragraf */
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .about-us h3 {
        font-size: 2rem;
        color: #333;
        margin-top: 30px;
        margin-bottom: 10px;
    }

    .about-us ul {
        list-style-type: disc;
        margin-left: 20px;
        font-size: 1.1rem;
        color: #555;
    }

    .about-us ul li {
        margin-bottom: 10px;
    }

    .about-us img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 30px 0;
    }

    /* Responsivitas untuk perangkat yang lebih kecil */
    @media (max-width: 768px) {
        .about-us h2 {
            font-size: 2rem; /* Mengurangi ukuran font untuk layar kecil */
        }

        .about-us p, .about-us ul li {
            font-size: 1rem; /* Menyesuaikan ukuran font untuk kenyamanan membaca */
        }

        .about-us .container {
            padding: 15px;
        }
    }

    @media (max-width: 480px) {
        .about-us h2 {
            font-size: 1.8rem;
        }

        .about-us p {
            font-size: 0.9rem;
        }

        .about-us h3 {
            font-size: 1.8rem;
        }

        .about-us ul li {
            font-size: 1rem;
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
            <a href="user">Beranda</a>
            <a href="tentang">Tentang Kami</a>
            <a href="PPDB">PPDB</a>
            <a href="hubungi">Hubungi Kami</a>
            @auth
            <div class="dropdown">
                <div class="user-profile">
                    <img src="{{ Auth::user()->profile_picture ?? 'images/default-profile.png' }}" alt="User Profile" class="profile-picture">
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="dropdown-content">
                    <a href="/profile">Profile</a>
                    <a href="/login">Logout</a>
                        @csrf
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class="login-btn">Login dengan Google</a>
            @endauth
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

        function animateCounter(element, start, end, duration) {
        const range = end - start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));
        let current = start;
        const timer = setInterval(() => {
            current += increment;
            element.textContent = current;
            if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Trigger the counter animation when the section comes into view
    const counters = document.querySelectorAll('.stat-item h3');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const count = parseInt(counter.getAttribute('data-count'), 10);
                animateCounter(counter, 0, count, 2000);
                observer.unobserve(counter); // Stop observing once animation is triggered
            }
        });
    }, { threshold: 1.0 });

    counters.forEach(counter => {
        observer.observe(counter);
    });

        function viewMore(judul, isi) {
            // Tampilkan berita dalam format popup atau modal
            alert("Judul: " + judul + "\n\nIsi Berita: " + isi);
        }
    </script>
</body>
</html>
