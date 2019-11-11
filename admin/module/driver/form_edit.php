<?php   
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>  
     
<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="adminweb.php?module=home">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Admin</li>
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
                    <strong>Horizontal</strong> Form</div>
                  <div class="card-body">
                    <?php
                    include "../lib/config.php";
                    include "../lib/koneksi.php";

                    $iddrv=$_GET['Id_driver'];
                    $queryEdit= mysqli_query($host, "SELECT * from driver WHERE id_driver='$iddrv'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $namadriv=$hasilQuery['nama'];
                    $alamat=$hasilQuery['alamat'];
                    $no_hp=$hasilQuery['no_hp'];
                    $email=$hasilQuery['email'];
                    

                    ?>
                    <form class="form-horizontal" action="../admin/module/driver/aksi_edit.php" method="post">
                      <input type="hidden" name="id_driver" value="<?php echo $iddrv; ?>">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Username</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Username" value="<?php echo $namadriv; ?>">
                          <span class="help-block">Masukkan Username</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-password">alamat</label>
                        <div class="col-md-9">
                          <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $alamat; ?>">
                          <span class="help-block">Masukkan alamat</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-password">no_hp</label>
                        <div class="col-md-9">
                          <input type="no_hp" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" value="<?php echo $no_hp; ?>">
                          <span class="help-block">Masukkan no_hp</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-password">email</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                          <span class="help-block">Masukkan email</span>
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