<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP CRUD PPLG 2</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <!-- SIDEBAR -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">PHP CRUD <sup>PPLG 2</sup></div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">Interface</div>

        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>BANK DATA</span>
            </a>
            <div id="collapseTwo" class="collapse show">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="Siswa.php">SISWA</a>
                    <a class="collapse-item active" href="Kelas.php">KELAS</a>
                    <a class="collapse-item" href="Jurusan.php">JURUSAN</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

    <!-- CONTENT -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- PAGE CONTENT -->
            <div class="container-fluid mb-5">
                <h1 class="h3 mb-4 text-gray-800">Tabel Kelas</h1>

                <div class="card shadow mb-5 pb-4">
                    <div class="card-header py-3">
                        <a href="tambahkelas.php" class="btn btn-primary">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" width="100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'koneksi.php';
                                $data = mysqli_query($koneksi,"SELECT * FROM kelas");
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                    <tr>
                                        <td><?= $d['id_kelas']; ?></td>
                                        <td><?= $d['nama_kelas']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">EDIT</a>
                                            <a href="#" class="btn btn-danger btn-sm">HAPUS</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <footer class="sticky-footer bg-white mt-auto">
            <div class="container my-auto">
                <div class="text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>

    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
