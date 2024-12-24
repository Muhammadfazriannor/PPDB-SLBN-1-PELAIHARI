<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SLBN 1 Pelaihari Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SLBN 1 Pelaihari</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
<<<<<<< HEAD
                        <li><a class="dropdown-item" href="#">Logout</a></li>
=======
                        <li><a class="dropdown-item" href="login">Logout</a></li>
>>>>>>> 2a150449295a425c542beddbebe1ffa5f9cc25e5
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="pengumumen">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Tambah Pengumuman
                            </a>
                            <a class="nav-link" href="pendaftars">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                Tambah Pendaftaran
                            </a>
                            <a class="nav-link" href="seleksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                                Seleksi Siswa/Siswi
                            </a>
                            <a class="nav-link" href='kirimpesan'>
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-alt"></i></div>  <!-- Ikon kirim pesan -->
                                Kirim Pesan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <!-- Summary Cards -->
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-4">
                                    <div class="card-body">Jumlah Pendaftar: {{ $jumlahPendaftar }}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-4">
                                    <div class="card-body">Jumlah Pengumuman: {{ $jumlahPengumuman }}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-4">
                                    <div class="card-body">Jumlah Guru: 
                                        <input type="number" id="jumlahGuru" class="form-control mt-2" placeholder="Masukkan jumlah guru">
                                        <button class="btn btn-dark mt-2" onclick="updateJumlahGuru()">Update</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-4">
                                    <div class="card-body">Jumlah Murid: 
                                        <input type="number" id="jumlahMurid" class="form-control mt-2" placeholder="Masukkan jumlah murid">
                                        <button class="btn btn-dark mt-2" onclick="updateJumlahMurid()">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Calendar Section -->
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">Calendar & Attendance</div>
                                    <div class="card-body">
                                        <p>Here comes the calendar component.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Performance Chart -->
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">School Performance</div>
                                    <div class="card-body">
                                        <canvas id="performanceChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script>
            function updateJumlahGuru() {
                const jumlahGuru = document.getElementById('jumlahGuru').value;
                alert(`Jumlah Guru berhasil diperbarui menjadi ${jumlahGuru}`);
            }

            function updateJumlahMurid() {
                const jumlahMurid = document.getElementById('jumlahMurid').value;
                alert(`Jumlah Murid berhasil diperbarui menjadi ${jumlahMurid}`);
            }

            // Example of initializing a chart
            var ctx = document.getElementById('performanceChart').getContext('2d');
            var performanceChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Govt. School', 'Private School', 'Average School'],
                    datasets: [{
                        label: 'Performance',
                        data: [65, 59, 80],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>
</html>
