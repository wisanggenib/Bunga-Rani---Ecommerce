<?php   
 //session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>
<main class="main">
  <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
              <i class="fa fa-align-justify"></i> Simple Table</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>username</th>
                          <th>password</th>
                          <th>nama depan</th>
                          <th>nama belakang</th>
                          <th>alamat</th>
                          <th>no_hp</th>
                          <th>email</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueripelanggan= mysqli_query($host, "SELECT * from pelanggan");
                        while($mem=mysqli_fetch_array($kueripelanggan, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['username']; ?></td>
                          <td><?php echo $mem['password']; ?></td>
                          <td><?php echo $mem['nama_depan']; ?></td>
                          <td><?php echo $mem['nama_belakang']; ?></td>
                          <td><?php echo $mem['alamat']; ?></td>
                          <td><?php echo $mem['no_hp']; ?></td>
                          <td><?php echo $mem['email']; ?></td>
                       <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>module/pelanggan/aksi_hapus.php?id_pelanggan=<?php echo $mem['Id_pelanggan'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
                              </div>
                          </td>
                         
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    <ul class="pagination">
                      <li class="page-item">
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </main>
            </aside>
          </div>
        <?php } ?>    