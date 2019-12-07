<?php   
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>

<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb"></ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Horizontal</strong> Form</div>
                <div class="card-body">
                    <?php
                    include "../lib/config.php";
                    include "../lib/koneksi.php";

                    $idslider=$_GET['id_slider'];
                    $queryEdit= mysqli_query($host, "SELECT * from slider WHERE id_slider='$idslider'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    ?>
                    <form class="form-horizontal" action="../admin/module/slider/aksi_edit.php" method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="id_slider" value="<?php echo $hasilQuery['id_slider']; ?>">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">pesan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="bunga" name="pesan" placeholder="pesan"
                                    value="<?php echo $hasilQuery['pesan']; ?>">
                                <span class="help-block">Masukkan Pesan</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">pesan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="harga" name="pesan1" placeholder="pesan1"
                                    value="<?php echo $hasilQuery['pesan1']; ?>">
                                <span class="help-block">Masukkan Pesan1</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">gambar</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="gambar" name="gambar" placeholder="gambar">
                                <span class="help-block">Masukkan gambar</span>
                            </div>
                        </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                </div>
            </div>
            </form>
        </div>
</main>
</aside>
</div>
<?php } ?>