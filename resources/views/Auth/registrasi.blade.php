<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi SLBN 1 Pelaihari</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="container bg-white rounded-4 shadow-lg p-5 d-flex flex-column align-items-center" style="max-width: 600px; width: 100%; background-color: #ffffff;">
        <img src="images/SLBN.png" alt="Logo SLBN" class="mb-4" style="width: 120px;">

        <h2 class="text-center mb-4 text-primary">Registrasi SLBN 1 Pelaihari</h2>
        <p class="text-center text-muted mb-4" style="font-size: 0.95rem;">Silahkan isi formulir berikut untuk registrasi aplikasi</p>

        @if(session('error'))
            <div class="alert alert-danger w-100 text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('registrasi.submit') }}" method="post" class="w-100">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Submit Registrasi</button>

            <div class="text-center">
                <p class="text-muted" style="font-size: 0.9rem;">Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Login Sekarang</a></p>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f9;
        }

        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #1e3a5f;
            border-color: #1e3a5f;
        }

        .btn-primary:hover {
            background-color: #14304b;
            border-color: #14304b;
        }

        .form-label {
            font-weight: bold;
        }

        .text-primary {
            color: #1e3a5f !important;
        }

        .text-muted {
            font-size: 0.9em;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</body>
</html>
