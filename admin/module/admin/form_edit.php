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

                    $idadm=$_GET['id_admin'];
                    $queryEdit= mysqli_query($host, "SELECT * from admin WHERE id_admin='$idadm'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $username=$hasilQuery['username'];
                    $password=$hasilQuery['password'];
                    

                    ?>
                    <form class="form-horizontal" action="../admin/module/admin/aksi_edit.php" method="post">
                      <input type="hidden" name="id_admin" value="<?php echo $idadm; ?>">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Username</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
                          <span class="help-block">Masukkan Username</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                          <span class="help-block">Masukkan Password</span>
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