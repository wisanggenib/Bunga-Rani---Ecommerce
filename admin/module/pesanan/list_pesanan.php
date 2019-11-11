<main class="main">
<!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Pesanan</a>
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
                          <th>Tgl_Pesanan</th>
                          <th>Tgl_Pengiriman</th>
                          <th>Bunga</th>
                          <th>Warna</th>
                          <th>driver</th>
                          <th>nama_pelanggan</th>
                          <th>Quantity</th>
                          <th>status_bayar</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueripesanan= mysqli_query($host, "SELECT pesanan.Quantity, pesanan.Id_pesanan, pesanan.tgl_pesanan,pesanan.tgl_pengiriman,produk.bunga,produk.warna,pelanggan.nama_pelanggan,driver.nama, pesanan.status_bayar from pesanan join produk on pesanan.id_produk = produk.id_produk join pelanggan on pesanan.Id_pelanggan = pelanggan.Id_pelanggan join driver on pesanan.Id_driver = driver.Id_driver");
                        while($mem=mysqli_fetch_array($kueripesanan, MYSQLI_ASSOC)){
                        ?>
                       <tr>
                          <td><?php echo $mem['tgl_pesanan']; ?></td>
                          <td><?php echo $mem['tgl_pengiriman']; ?></td>
                          <td><?php echo $mem['bunga']; ?></td>
                          <td><?php echo $mem['warna']; ?></td>
                          <td><?php echo $mem['nama']; ?></td>
                          <td><?php echo $mem['nama_pelanggan']; ?></td>
                          <td><?php echo $mem['Quantity']; ?></td>
                          <td><?php echo $mem['status_bayar']; ?></td>
                          
                        <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_pesanan&id_pesanan=<?php echo $mem['Id_pesanan']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil"></i></button></a>&nbsp;
                           
                            <a href="<?php echo $admin_url; ?>module/pesanan/aksi_hapus.php?id_pesanan=<?php echo $mem['Id_pesanan'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
                              </div>
                          </td>
                         
                        </tr>
                        <?php }?>
                        
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </main>
            </aside>
          </div>
              