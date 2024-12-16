<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan WhatsApp</title>
</head>
<body>
    <h1>Kirim Pesan WhatsApp</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('send-message') }}" method="POST">
        @csrf
        <label for="phone">Nomor WhatsApp:</label>
        <input type="text" id="phone" name="phone" placeholder="628123456789" required>
        <br>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" placeholder="Tulis pesan Anda..." required></textarea>
        <br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
 