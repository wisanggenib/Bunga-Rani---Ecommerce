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
                        <th>nama</th>
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
                        $kueridriver= mysqli_query($host, "SELECT * from driver");
                        while($mem=mysqli_fetch_array($kueridriver, MYSQLI_ASSOC)){
                        ?>
                         <tr>
                          <td><?php echo $mem['nama']; ?></td>
                          <td><?php echo $mem['alamat']; ?></td>
                          <td><?php echo $mem['no_hp']; ?></td>
                          <td><?php echo $mem['email']; ?></td>
                       <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_driver&Id_driver=<?php echo $mem['Id_driver']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil"></i></button></a>&nbsp;
                           
                            <a href="<?php echo $admin_url; ?>module/driver/aksi_hapus.php?Id_driver=<?php echo $mem['Id_driver'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
                              </div>
                          </td>
                         
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    <ul class="pagination">
                      <li class="page-item">
                        <a href="<?php echo $base_url; ?>/admin/adminweb.php?module=tambah_driver"><button class="btn btn-block btn-primary" type="button">Tambah driver</button></a>
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