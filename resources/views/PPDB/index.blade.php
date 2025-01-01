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
    
    nav a:hover {
            color: #b0c4de;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            color: black;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            background-color: #f0f0f0;
            color: black;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }

        .form-control:focus {
            background-color: #ffffff;
            border-color: #b0c4de;
            box-shadow: 0 0 5px rgba(176, 196, 222, 0.8);
        }

        textarea.form-control {
            resize: none;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s;
            font-size: 1em;
            cursor: pointer;
            color: white;
        }

        .btn-primary {
            background-color: #1e3a5f;
        }

        .btn-primary:hover {
            background-color: #244b7a;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(30, 58, 95, 0.7);
        }

        .btn-warning {
            background-color: #142f4e;
        }

        .btn-warning:hover {
            background-color: #1c4369;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(20, 47, 78, 0.7);
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
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
        <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_lengkap">Nama lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>

            <div class="form-group">
                <label>Tambahkan foto berkas ABK:</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Daftar</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>

        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
