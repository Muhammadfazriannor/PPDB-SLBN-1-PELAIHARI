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

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #2b2b3e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #ddd;
        }

        .form-control {
            background-color: #1a1a2e;
            color: #f4f4f4 !important; /* Pastikan teks berwarna putih */
            border: 1px solid #555;
        }

        .form-control:focus {
            background-color: #1a1a2e;
            border-color: #0093e9;
            box-shadow: 0 0 5px rgba(0, 147, 233, 0.8);
        }

        /* Hanya untuk textarea agar teks tetap putih */
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
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #0f3460, #1a1a2e);
            color: white;
        }
    </style>
</head>
<body>
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

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
