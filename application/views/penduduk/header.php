<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/892ff4e79c.js" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sipedes</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Beranda -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('penduduk'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Layanan
            </div>

            <!-- Nav Item - surat desa -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-file-lines"></i>
                    <span> Surat Desa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Surat:</h6>
                        <a class="collapse-item" href="">Ket. Domisili</a>
                        <a class="collapse-item" href="">Ket. Tidak Mampu</a>
                        <a class="collapse-item" href="">Ket. Usaha</a>
                        <a class="collapse-item" href="">Izin Keramaian</a>
                    </div>
                </div>

                <a class="nav-link" href="<?= base_url('penduduk/pengaduan'); ?>">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span>Pengaduan</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <!-- Nav Item - Beranda -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('penduduk/profile'); ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
             <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <?= $judul; ?>
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
