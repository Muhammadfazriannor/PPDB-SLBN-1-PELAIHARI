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
    padding: 5% 10%; /* Menggunakan persentase untuk padding agar lebih fleksibel */
    background-color: #fff;
    border-radius: 10px;
    margin: 50px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

    .principal-greeting img {
        width: 100%; /* Menyesuaikan gambar agar memenuhi lebar container */
        max-width: 550px; /* Membatasi lebar gambar agar tidak melebihi ukuran tertentu */
        height: auto;
        border-radius: 80%;
        animation: slideInLeft 1s ease-out;
    }

    /* Media Query untuk perangkat dengan lebar layar lebih kecil */
    @media (max-width: 768px) {
        .principal-greeting {
            flex-direction: column; /* Menumpuk elemen secara vertikal pada layar lebih kecil */
            padding: 20px; /* Mengurangi padding pada perangkat lebih kecil */
        }

        .principal-greeting img {
            width: 80%; /* Mengurangi ukuran gambar pada layar kecil */
            max-width: none; /* Menghilangkan pembatasan max-width agar gambar lebih responsif */
        }
    }

    /* Media Query untuk perangkat dengan lebar layar lebih kecil dari 480px (smartphone) */
    @media (max-width: 480px) {
        .principal-greeting {
            padding: 15px; /* Mengurangi padding lebih lanjut pada perangkat kecil */
        }

        .principal-greeting img {
            width: 90%; /* Mengurangi ukuran gambar untuk layar yang lebih kecil */
        }
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

    <section class="hero">
        <div class="hero-content">
            <h1>Sekolah Inovatif Spesial</h1>
            <p>Selamat datang di SLBN 1 Pelaihari. Kami berkomitmen untuk memberikan pendidikan inovatif bagi semua siswa, memupuk kreativitas dan pembelajaran dalam lingkungan yang ramah.</p>
            <button onclick="location.href='{{ route('ppdb.index') }}'" class="btn btn-primary btn-lg" style="padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                DAFTAR SEKARANG
            </button>
        </div>
        <img src="images/adek.png" alt="Innovative School" class="hero-image">
    </section>

    <section class="principal-greeting">
        <img src="images/Kepsek.png" alt="Kepala Sekolah">
        <div class="principal-text">
            <h2>Sambutan Kepala Sekolah</h2>
            <p>Assalamu'alaikum warahmatullohi wabarakatuh. Salam Sejahtera bagi kita semua, Salom, Om Swastiastu, Namo Buddhaya, Salam Kebajikan...
            Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Telkom Banjarbaru dapat diselesaikan dan terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era globalisasi Teknologi Informasi yang begitu pesat, sangat diperlukan sarana prasarana yang kondusif, kebutuhan informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Telkom Banjarbaru.
            </p>
        </div>
    </section>

    <section class="video-profile">
        <h2>Video Profile</h2>
        <p>Video profil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan lingkungan sekolah, fasilitas umum sekolah, fasilitas pembelajaran, ruang belajar, kegiatan siswa, dan masih banyak lagi. Biar kalian tidak penasaran apa saja yang ada di dalam SLBN 1 Pelaihari, segera tonton video profilnya.</p>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/f1AqrYIOvx0?si=ysuuCFr8xqt3J1IN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <section class="stats-container">
    <div class="stat-item">
        <h3 id="guru-counter" data-count="50">0</h3>
        <p>Jumlah Guru</p>
    </div>
    <div class="stat-item">
        <h3 id="murid-counter" data-count="400">0</h3>
        <p>Jumlah Murid</p>
    </div>
    </section>

    <section class="school-news">
        <h2>Berita Terbaru</h2>
        <div class="news-container">
            @foreach($pengumuman as $berita)
            <div class="news-item">
                <img src="{{ asset('/storage/pengumumen/'.$berita->foto) }}" alt="{{$berita->judul}}">
                <h3>{{$berita->judul}}</h3>
                <p class="news-excerpt">{{$berita->isi}}</p>
                <button class="view-more-btn" onclick="viewMore('{{ $berita->judul }}', '{{ $berita->isi }}')">Lihat Selengkapnya</button>
            </div>
            @endforeach
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
