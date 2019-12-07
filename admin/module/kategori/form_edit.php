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

                    $id_kategori=$_GET['id_kategori'];
                    $queryEdit= mysqli_query($host, "SELECT * from kategori WHERE id_kategori='$id_kategori'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $namaKategori=$hasilQuery['nama_kategori'];
                    

                    ?>
                    <form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="post">
                      <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Nama Kategori</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="username" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $namaKategori; ?>">
                          <span class="help-block">Masukkan Nama Kategori</span>
                        </div>
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