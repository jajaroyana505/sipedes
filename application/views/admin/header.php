<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sipedes</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/mycss.css" rel="stylesheet">

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
    <div class="sidebar-brand-text mx-3">sipedes</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-1">

 <!-- Heading -->
 <div class="sidebar-heading">
    Administator
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/index'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading my-">
    Layanan
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/v_pengajuan') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Pengajuan</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/v_penduduk') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Daftar penduduk</span></a>
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/v_Jumlah_surat') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Jumlah Surat Terbuat</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/v_pengaduan') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Pengaduan</span></a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/profile'); ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Profile</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/profile'); ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->