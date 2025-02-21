<?php
session_start();
include "../lib/config.php";

if(empty($_SESSION['namauser'])){
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="./">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="ﾅ「kasz Holeczek">
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
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
            <img class="navbar-brand-minimized" src="asset/img/brand/sygnet.svg" width="30" height="30"
                alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="img-avatar" src="asset/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
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
<!--                     <li class="nav-item">
                        <a class="nav-link" href="adminweb.php?module=driver">
                            <i class="nav-icon icon-user"></i> Data Driver</a>
                    </li> -->
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
                        <a class="nav-link" href="adminweb.php?module=kategori">
                            <i class="nav-icon icon-handbag"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminweb.php?module=slider">
                            <i class="nav-icon icon-handbag"></i> Slider</a>
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
            // driver
            elseif ($_GET['module'] == 'driver') {
                include "module/driver/list_driver.php";
            } elseif ($_GET['module'] == 'tambah_driver') {
                include "module/driver/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_driver') {
                include "module/driver/form_edit.php";
            } 
            // driver
            elseif ($_GET['module'] == 'admin') {
                include "module/admin/list_admin.php";
            } elseif ($_GET['module'] == 'tambah_admin') {
                include "module/admin/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_admin') {
                include "module/admin/form_edit.php";
            }
            // pembayaran
            elseif ($_GET['module'] == 'pembayaran') {
                include "module/pembayaran/list_pembayaran.php";
            } elseif ($_GET['module'] == 'edit_pembayaran') {
                include "module/pembayaran/form_edit.php";
            } 
            //pesanan
            elseif ($_GET['module'] == 'pesanan') {
                include "module/pesanan/list_pesanan.php";
            } elseif ($_GET['module'] == 'tambah_pesanan') {
                include "module/pesanan/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_pesanan') {
                include "module/pesanan/form_edit.php";
            }elseif ($_GET['module'] == 'detail_pesanan') {
                include "module/pesanan/detail_pesanan.php";
            } 
            //produk
            elseif ($_GET['module'] == 'produk') {
                include "module/produk/list_produk.php";
            } elseif ($_GET['module'] == 'tambah_produk') {
                include "module/produk/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_produk') {
              include "module/produk/form_edit.php";
            }
            //kategori
            elseif ($_GET['module'] == 'kategori') {
                include "module/kategori/list_kategori.php";
            } elseif ($_GET['module'] == 'tambah_kategori') {
                include "module/kategori/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_kategori') {
                include "module/kategori/form_edit.php";
            }
            //slider
            elseif ($_GET['module'] == 'slider') {
                include "module/slider/list_slider.php";
            } elseif ($_GET['module'] == 'tambah_slider') {
                include "module/slider/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_slider') {
                include "module/slider/form_edit.php";
            }

            //default
             else {
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
<!--         <script src="asset/vendors/jquery/js/jquery.min.js"></script> -->
        <script src="asset/vendors/popper.js/js/popper.min.js"></script>
        <script src="asset/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/vendors/pace-progress/js/pace.min.js"></script>
        <script src="asset/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
        <script src="asset/vendors/@coreui/coreui/js/coreui.min.js"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="asset/vendors/chart.js/js/Chart.min.js"></script>
        <script src="asset/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
        <script src="asset/js/main.js"></script>
        <script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>
</body>

</html>
<?php
}
?>