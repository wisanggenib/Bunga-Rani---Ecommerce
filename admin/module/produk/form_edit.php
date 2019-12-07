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

                    $idproduk=$_GET['id_produk'];
                    $queryEdit= mysqli_query($host, "SELECT * from produk JOIN kategori on produk.id_kategori = kategori.id_kategori WHERE Id_produk='$idproduk'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $nama_produk=$hasilQuery['nama_produk'];
                    $harga=$hasilQuery['harga'];
                    $kategori=$hasilQuery['id_kategori'];
                    ?>
                    <form class="form-horizontal" action="../admin/module/produk/aksi_edit.php" method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="id_produk" value="<?php echo $idproduk; ?>">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">Nama Produk</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="bunga" name="nama_produk" placeholder="bunga"
                                    value="<?php echo $nama_produk; ?>">
                                <span class="help-block">Masukkan bunga</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">gambar</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="gambar" name="gambar" placeholder="gambar">
                                <span class="help-block">Masukkan gambar</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-email">harga</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga"
                                    value="<?php echo $harga; ?>">
                                <span class="help-block">Masukkan harga</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="hf-password">Kategori</label>
                            <div class="col-md-9">
                                <?php
                                  $sql= mysqli_query($host, "SELECT * from kategori");
                                  while($data=mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                                ?>
                                <label class="radio-inline" style="padding-left:10px;">
                                    <?php 
                                  if($kategori == $data['id_kategori']){
                                    ?>
                                    <input type="radio" name="kategori"
                                        value="<?php echo $data['id_kategori'] ?>" checked><?php echo $data['nama_kategori'] ?>
                                    <?php
                                  }else{
                                   ?>
                                    <input type="radio" name="kategori"
                                        value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?>
                                    <?php
                                  }
                                   ?>
                                </label>
                                <?php
                                  }
                                ?>
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