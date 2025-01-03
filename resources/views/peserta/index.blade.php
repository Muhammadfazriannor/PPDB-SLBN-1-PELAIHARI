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
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login">Logout</a></li>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>  <!-- Ikon pendaftaran -->
                                Tambah Pendaftaran
                            </a>
                            <a class="nav-link" href="seleksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>  <!-- Ikon seleksi -->
                                Seleksi Siswa/Siswi
                            </a>
                            <a class="nav-link" href='kirimpesan'>
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-alt"></i></div>  <!-- Ikon kirim pesan -->
                                Kirim Pesan
                            </a>
                            <a class="nav-link" href='peserta'>
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-alt"></i></div>  <!-- Ikon kirim pesan -->
                                Hitung TPK
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>

            <!-- Page Content Start -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Daftar Peserta</h1>
                        <a href="{{ route('peserta.create') }}">Tambah Peserta</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Surat Dokter</th>
                                    <th>Zonasi</th>
                                    <th>Kelulusan</th>
                                    <th>Prioritas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($peserta as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->surat_dokter }}</td>
                                        <td>{{ $item->zonasi }}</td>
                                        <td>{{ $item->kelulusan }}</td>
                                        <td>{{ $item->prioritas }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
            <!-- Page Content End -->

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
