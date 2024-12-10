<!-- resources/views/user/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLBN 1 Pelaihari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
    body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #1a1a2e, #16213e);
            color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: linear-gradient(90deg, #0f3460, #16213e);
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header .logo {
            font-size: 1.8em;
            font-weight: bold;
        }

        .header nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .header nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(to bottom, rgba(21, 21, 48, 0.9), rgba(10, 10, 23, 0.9)), 
                url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            color: white;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        .hero button {
            padding: 12px 25px;
            font-size: 1em;
            margin: 0 15px;
            background: linear-gradient(to right, #0093e9, #80d0c7);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 147, 233, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .hero button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 147, 233, 0.7);
        }

        .about {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(to bottom, #1e1e2f, #2b2b3e);
            color: #d1d1d1;
        }

        .about h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.2em;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .categories {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
            padding: 20px;
            background: linear-gradient(to bottom, #0f3460, #1c1c2d);
        }

        .categories .category {
            background: linear-gradient(to bottom, #16213e, #0f3460);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
        }

        .categories .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.7);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #0f3460, #1a1a2e);
            color: white;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <header class="header">
        <div class="logo">SLBN 1 Pelaihari</div>
        <nav>
            <a href="user">Home</a>
            <a href="#">About</a>
            <a href="PPDB">Pendaftar</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
        </nav>
    </header>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <!-- Konten -->
    
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container my-4">
        

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Pendaftaran -->
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
                <label class="font-weight-bold">Tambahkan foto berkas ABK</label>
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

        <!-- Menampilkan error -->
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

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // SweetAlert pesan
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
</body>
</html>
