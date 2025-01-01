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
    .about-us {
            padding: 50px 20px;
            background-color: #fff;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            flex-grow: 1; /* Agar konten utama dapat mengisi ruang yang tersisa */
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
            margin-top: auto; /* Agar footer selalu di bawah */
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        footer p {
            margin: 0;
        }

        /* Styling untuk link WhatsApp */
        .whatsapp-link {
            display: inline-block;
            background-color: #25D366; /* Warna hijau WhatsApp */
            color: white;
            font-size: 1.2em;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 20px;
        }

        .whatsapp-link:hover {
            background-color: #128C7E; /* Warna hijau lebih gelap saat hover */
            transform: translateY(-5px); /* Efek sedikit angkat saat hover */
        }

        .whatsapp-link:active {
            transform: translateY(0); /* Mengembalikan ke posisi semula saat ditekan */
        }
        /* Pastikan body dan html menggunakan flexbox dengan kolom vertikal */
        html, body {
            height: 100%; /* Set height ke 100% */
            display: flex;
            flex-direction: column; /* Pastikan elemen anak diatur dalam kolom */
            margin: 0; /* Menghilangkan margin default */
        }

        /* .about-us akan mengisi ruang yang tersisa */
        .about-us {
            flex-grow: 1; /* Konten utama mengisi ruang yang tersisa */
        }

        /* Footer akan tetap berada di bawah */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%; /* Memastikan footer mengisi seluruh lebar */
            margin-top: auto; /* Footer bergerak ke bawah */
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
        <h2>Hubungi Kami</h2>
        <p>SLBN 1 Pelaihari adalah sebuah lembaga pendidikan yang menyediakan layanan pendidikan bagi anak-anak dengan kebutuhan khusus.</p>
        <p>Untuk informasi lebih lanjut, atau jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui WhatsApp!</p>

        <!-- Link WhatsApp yang menarik -->
        <a href="https://api.whatsapp.com/send/?phone=6283137130840&text&type=phone_number&app_absent=0" target="_blank" class="whatsapp-link">
            Chat dengan kami di WhatsApp
        </a>
    </section>
    <footer>
        <p>&copy; 2024 SLBN 1 Pelaihari. All rights reserved.</p>
    </footer>
</body>
</html>
