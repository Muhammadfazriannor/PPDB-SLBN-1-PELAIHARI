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

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #1e3a5f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            color: #f4f4f4;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #ddd;
        }

        .form-control {
            background-color: #1a1a2e;
            color: #f4f4f4 !important;
            border: 1px solid #555;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .form-control:focus {
            background-color: #1a1a2e;
            border-color: #0093e9;
            box-shadow: 0 0 5px rgba(0, 147, 233, 0.8);
        }

        textarea.form-control {
            color: #f4f4f4 !important;
            background-color: #1a1a2e;
            border: 1px solid #555;
        }

        textarea.form-control:focus {
            color: #f4f4f4 !important;
            background-color: #1a1a2e;
            border-color: #0093e9;
            box-shadow: 0 0 5px rgba(0, 147, 233, 0.8);
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
            width: 100%;
        }

        .btn-primary {
            background: linear-gradient(to right, #0093e9, #80d0c7);
            color: white;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 147, 233, 0.7);
        }

        .btn-warning {
            background: linear-gradient(to right, #ffc107, #ff8800);
            color: white;
        }

        .btn-warning:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.7);
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
        </nav>
    </header>

    <div class="container">
        <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="nama_lengkap">Nama lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group mb-3">
                <label for="tanggal_lahir">Tanggal lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group mb-3">
                <label for="jenis_kelamin">Jenis kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>

            <div class="form-group mb-3">
                <label>Tambahkan foto berkas ABK:</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Daftar</button>
                <button type="reset" class="btn btn-warning ms-2">Reset</button>
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
