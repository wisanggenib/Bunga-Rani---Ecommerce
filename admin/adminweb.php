<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.5
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<?php
include "../lib/config.php";
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Bunga Rani</title>
    <!-- Icons-->
    <link href="asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="asset/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="asset/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="asset/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=home">
                <i class="nav-icon icon-home"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="nav-title">DATA</li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=pelanggan">
                <i class="nav-icon icon-user"></i> Data Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=driver">
                <i class="nav-icon icon-user"></i> Data Driver</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=admin">
                <i class="nav-icon icon-user"></i> Data Admin</a>
            </li>
            <li class="nav-title">Operasional</li>
            
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=pembayaran">
                <i class="nav-icon icon-book-open"></i> Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=pesanan">
                <i class="nav-icon icon-envelope"></i> Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=produk">
                <i class="nav-icon icon-handbag"></i> Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="destroy.php">
                <i class="nav-icon icon-logout"></i> Keluar</a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      
    <?php
            if ($_GET['module'] == 'home') {
                include "module/home/home.php";
            } elseif ($_GET['module'] == 'pelanggan') {
                include "module/pelanggan/list_pelanggan.php";
            } elseif ($_GET['module'] == 'tambah_pelanggan') {
                include "module/pelanggan/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_pelanggan') {
                include "module/pelanggan/form_edit.php";
            } 
            elseif ($_GET['module'] == 'driver') {
                include "module/driver/list_driver.php";
            } elseif ($_GET['module'] == 'tambah_driver') {
                include "module/driver/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_driver') {
                include "module/driver/form_edit.php";
            } 
            elseif ($_GET['module'] == 'admin') {
                include "module/admin/list_admin.php";
            } elseif ($_GET['module'] == 'tambah_admin') {
                include "module/admin/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_admin') {
                include "module/admin/form_edit.php";
            }
            elseif ($_GET['module'] == 'pembayaran') {
                include "module/pembayaran/list_pembayaran.php";
            } elseif ($_GET['module'] == 'edit_pembayaran') {
                include "module/pembayaran/form_edit.php";
            } 
            elseif ($_GET['module'] == 'pesanan') {
                include "module/pesanan/list_pesanan.php";
            } elseif ($_GET['module'] == 'tambah_pesanan') {
                include "module/pesanan/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_pesanan') {
                include "module/pesanan/form_edit.php";
            } 
            elseif ($_GET['module'] == 'produk') {
                include "module/produk/list_produk.php";
            } elseif ($_GET['module'] == 'tambah_produk') {
                include "module/produk/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_produk') {
                include "module/produk/form_edit.php";
            } else {
                 include "module/home/home.php";
            }
            ?>

    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="asset/vendors/jquery/js/jquery.min.js"></script>
    <script src="asset/vendors/popper.js/js/popper.min.js"></script>
    <script src="asset/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="asset/vendors/pace-progress/js/pace.min.js"></script>
    <script src="asset/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="asset/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="asset/vendors/chart.js/js/Chart.min.js"></script>
    <script src="asset/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="asset/js/main.js"></script>
  </body>
</html>
<?php } ?>