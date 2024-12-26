<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SLBN 1 Pelaihari</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="container bg-white rounded-4 shadow-lg p-4 d-flex flex-column align-items-center" style="max-width: 400px;">
    <img src="images/SLBN.png" alt="Logo SLBN" class="mb-4" style="width: 100px;">

        <h2 class="text-center mb-3 text-primary">Login SLBN 1 Pelaihari</h2>
        <p class="text-center text-muted mb-4">Silahkan masukan email dan password yang sudah didaftarkan</p>

        @if(session('error'))
            <div class="alert alert-danger w-100 text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="post" class="w-100">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

            <a href="{{ route('auth.google') }}" class="btn btn-danger w-100 mb-3 ">Login with Google</a>

            <div class="text-center">
                <p class="text-muted">Belum punya akun? <a href="{{ route('registrasi') }}" class="text-primary">Registrasi Sekarang</a></p>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

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
