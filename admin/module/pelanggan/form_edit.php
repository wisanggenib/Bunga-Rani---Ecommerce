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
          <li class="breadcrumb-item active">Pelanggan</li>
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
                    <strong>Edit</strong> Pelanggan</div>
                  <div class="card-body">
                    <?php
                    include "../lib/config.php";
                    include "../lib/koneksi.php";

                    $idpel=$_GET['id_pelanggan'];
                    $queryEdit= mysqli_query($host, "SELECT * from pelanggan WHERE Id_pelanggan='$idpel'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $namapelanggan=$hasilQuery['nama_pelanggan'];
                    $username=$hasilQuery['username'];
                    $password=$hasilQuery['password'];
                    $alamat=$hasilQuery['alamat'];
                    $no_hp=$hasilQuery['no_hp'];
                    $email=$hasilQuery['email'];
                    

                    ?>
                    <form class="form-horizontal" action="../admin/module/pelanggan/aksi_edit.php" method="post">
                      <input type="hidden" name="id_pelanggan" value="<?php echo $idpel; ?>">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Nama Pelanggan</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan" value="<?php echo $namapelanggan; ?>">
                          <span class="help-block">Masukkan Nama Pelanggan</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Username</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
                          <span class="help-block">Masukkan Username</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Password</label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                          <span class="help-block">Masukkan Password</span>
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
                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i> Submit</button>
                  </div>
                </div>
                </form>
        </div>
      </main>
  </aside>
</div>
<?php } ?>