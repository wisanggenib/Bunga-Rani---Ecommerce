<?php   
 //session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?> 
<main class="main">
<!-- Breadcrumb-->
        <ol class="breadcrumb"></ol>
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
                         <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueriadmin= mysqli_query($host, "SELECT * from admin");
                        while($mem=mysqli_fetch_array($kueriadmin, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['username']; ?></td>
                          <td><?php echo $mem['password']; ?></td>
                          
                        <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_admin&id_admin=<?php echo $mem['id_admin']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil"></i></button></a>&nbsp;
                           
                            <a href="<?php echo $admin_url; ?>module/admin/aksi_hapus.php?id_admin=<?php echo $mem['id_admin'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
                              </div>
                          </td>
                         
                        </tr>
                        <?php }?>
                        
                      </tbody>
                    </table>
                    <ul class="pagination">
                     <li class="page-item">
                        <a href="<?php echo $base_url; ?>/admin/adminweb.php?module=tambah_admin"><button class="btn btn-block btn-primary" type="button">Tambah admin</button></a>
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