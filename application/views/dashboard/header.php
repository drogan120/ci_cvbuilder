<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/source/fontawesome-5.11.2/css/all.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('dashboard') ?>" class="brand-link">
                <img src="<?= base_url('assets/img/icon/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CV Builder</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/img/foto_profile/' . $this->session->userdata('foto_profile')) ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= ($this->session->userdata('nama_lengkap')); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        <li class="nav-header">MENU</li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/profile') ?>" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/education') ?>" class="nav-link">
                                <i class="fas fa-user-graduate nav-icon"></i>
                                <p>Education</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/experience') ?>" class="nav-link">
                                <i class="fas fa-briefcase nav-icon"></i>
                                <p>Experience</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/skills') ?>" class="nav-link">
                                <i class="fas fa-brain nav-icon"></i>
                                <p>Skills</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/achievement') ?>" class="nav-link">
                                <i class="fas fa-medal nav-icon"></i>
                                <p>Achievement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/refference') ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Refference</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/organisasi') ?>" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Organization</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/interest') ?>" class="nav-link">
                                <i class="fas fa-basketball-ball nav-icon"></i>
                                <p>Interest</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/bahasa') ?>" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Language</p>
                            </a>
                        </li>
                        <li class="nav-header">SETTINGS</li>
                        <li class="nav-item">
                            <a href="<?= base_url('generate') ?>" class="nav-link">
                                <i class="fas fa-file-pdf nav-icon"></i>
                                <p>Generate</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/logout') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>