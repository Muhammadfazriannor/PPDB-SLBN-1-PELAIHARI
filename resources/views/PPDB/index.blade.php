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
            background-color: white;
            color: black;
            scroll-behavior: smooth;
        }

        header {
            background-color: #1e3a5f;
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
            background-color: #142f4e;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .logo span {
            font-size: 2em;
            font-weight: 300;
            color: white;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 1em;
            font-weight: 300;
            transition: color 0.3s;
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
            background-color: #142f4e;
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
