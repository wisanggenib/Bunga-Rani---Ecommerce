<?php
include "../lib/config.php";
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>

<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb"></ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Add</strong> Slider</div>
                <div class="card-body">
                    <form class="form-horizontal" action="../admin/module/slider/aksi_simpan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">Gambar Slider</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="gambar" name="gambar"
                                    placeholder="Gambar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">Text</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="pesan"
                                    placeholder="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">Text 1</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="pesan1"
                                    placeholder="text1">
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