<?php
include "../lib/config.php";
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>

<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            <a href="adminweb.php?module=home">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kategori</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#">
                    <i class="icon-speech"></i>
                </a>
                <a class="btn" href="./">
                    <i class="icon-graph"></i>  Dashboard</a>
                <a class="btn" href="#">
                    <i class="icon-settings"></i>  Settings</a>
            </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Add</strong> Admin</div>
                <div class="card-body">
                    <form class="form-horizontal" action="../admin/module/kategori/aksi_simpan.php" method="post">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">Nama Kategori</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                    placeholder="Nama Kategori">
                                <span class="help-block">Masukkan Nama Kategori</span>
                            </div>
                        </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                        <i class="fa fa-ban"></i> Reset</button>
                </div>
                </form>
            </div>

        </div>
</main>
</aside>
</div>
<?php } ?>

<div class="btn-group">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown button</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
</div>