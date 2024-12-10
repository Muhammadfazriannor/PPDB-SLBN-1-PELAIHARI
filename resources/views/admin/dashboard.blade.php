<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Sidebar Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background: linear-gradient(135deg, #2d3748, #1a202c);
            color: white;
            padding: 20px;
        }

        #sidebar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        #sidebar .nav-link {
            color: #cbd5e0;
            font-size: 1rem;
            margin: 10px 0;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        #sidebar .nav-link:hover {
            background-color: #4a5568;
            color: white;
        }

        #sidebar .nav-link.active {
            background-color: #3182ce;
            color: white;
        }

        #main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 0;
            border-bottom: 1px solid #eaeaea;
        }

        .header h1 {
            font-size: 1.8rem;
            color: #2d3748;
        }

        .header .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .header .profile span {
            font-size: 1rem;
            color: #4a5568;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h5 {
            font-size: 1.2rem;
            color: #4a5568;
            font-weight: bold;
        }

        .card h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #2d3748;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        #toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .toast {
            padding: 10px 20px;
            background: #2d3748;
            color: white;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toast .close-btn {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="logo">Admin Panel</div>
        <a href="#" class="nav-link active" onclick="handleClick('Dashboard')">Dashboard</a>
        <a href="#" class="nav-link" onclick="handleClick('Tambah Pengumuman')">Tambah Pengumuman</a>
        <a href="pendaftars" class="nav-link" onclick="handleClick('Data Pendaftar')">Data Pendaftar</a>
        <a href="#" class="nav-link" onclick="handleClick('Data Seleksi')">Data Seleksi</a>
        <a href="#" class="nav-link" onclick="handleClick('Pengaturan')">Pengaturan</a>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <div class="header">
            <h1>Dashboard Admin</h1>
            <div class="profile">
                <img src="https://via.placeholder.com/40" alt="Admin Profile">
                <span>Admin</span>
            </div>
        </div>

        <div class="grid-container">
            <div class="card">
                <h5>Jumlah Pengumuman</h5>
                <h2>10</h2>
            </div>
            <div class="card">
                <h5>Jumlah Pendaftar</h5>
                <h2>150</h2>
            </div>
            <div class="card">
                <h5>Jumlah Seleksi Selesai</h5>
                <h2>120</h2>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    <div id="toast-container"></div>

    <script>
        // Function to handle sidebar clicks
        function handleClick(section) {
            showToast(`Navigating to ${section}`);
        }

        // Function to show toast notification
        function showToast(message) {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `
                <span>${message}</span>
                <button class="close-btn" onclick="this.parentElement.remove()">&times;</button>
            `;

            toastContainer.appendChild(toast);

            // Remove toast after 3 seconds
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
    </script>
</body>
</html>
