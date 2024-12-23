<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Laravel</title>
    <style>
        /* Resetting default browser margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling for the body and centering content */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the registration form */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Heading styles */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form label styling */
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        /* Input field styles */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Button hover effect */
        button:hover {
            background-color: #45a049;
        }

        /* Small text paragraph */
        p {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registrasi Aplikasi</h2>
        <p>Silahkan isi formulir berikut untuk registrasi aplikasi</p>
        <form action="{{ route('registrasi.submit') }}" method="post">
            @csrf
            <label>Nama Lengkap</label>
            <input type="text" name="name" required>

            <label>Email Address</label>
            <input type="text" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Submit Registrasi</button>
        </form>
    </div>

</body>
</html>
