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
                          <th>Nama Produk</th>
                          <th>harga</th>
                          <th>gambar</th>
                          <th>Kategori</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>
                      <tbody>
                            <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueriproduk= mysqli_query($host, "SELECT * from produk join kategori ON produk.id_kategori = kategori.id_kategori");
                        while($mem=mysqli_fetch_array($kueriproduk, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['nama_produk']; ?></td>
                          <td><?php echo $mem['harga']; ?></td>
                          <td> <img src="../asset/images/produk/<?php echo $mem['gambar']; ?>" alt="" width="100px" height="120px"></td>
                          <td><?php echo $mem['nama_kategori']; ?></td>

                          
                        <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $mem['Id_produk']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil"></i></button></a>&nbsp;
                           
                            <a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?php echo $mem['Id_produk'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
                              </div>
                          </td>
                         
                        </tr>
                        <?php }?>
                        
                      </tbody>
                    </table>
                    <ul class="pagination">
                      <li class="page-item" style="margin-right:20px;">
                        <a href="<?php echo $base_url; ?>/admin/adminweb.php?module=tambah_produk"><button class="btn btn-block btn-primary" type="button">Tambah produk</button></a>
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
              