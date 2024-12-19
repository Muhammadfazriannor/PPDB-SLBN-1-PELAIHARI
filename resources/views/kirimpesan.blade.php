<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan WhatsApp</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #0073e6;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        textarea {
            height: 150px;
            resize: none;
        }
        button {
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #005bb5;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
        .alert-error {
            background-color: #dc3545;
            color: white;
        }
        .alert-validation {
            background-color: #ffc107;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kirim Pesan WhatsApp</h1>

        <!-- Tampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan pesan error -->
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tampilkan validasi error -->
        @if ($errors->any())
            <div class="alert alert-validation">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk mengirim pesan -->
        <form action="{{ route('send-message') }}" method="POST">
            @csrf
            <label for="phone">Nomor WhatsApp (dengan kode negara):</label>
            <input 
                type="text" 
                id="phone" 
                name="phone" 
                placeholder="Contoh: 628123456789" 
                value="{{ old('phone') }}" 
                required
            >

            <label for="message">Pesan:</label>
            <textarea 
                id="message" 
                name="message" 
                placeholder="Tulis pesan Anda..." 
                required>{{ old('message') }}</textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>
