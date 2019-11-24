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
                  <i class="fa fa-align-justify"></i> Pesanan Menunggu persetujuan</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>Tgl_Pesanan</th>
                          <th>Tgl_Pengiriman</th>
                          <th>Total Bayar</th>
                          <th>Deksripsi</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       include "../lib/config.php";
                       include "../lib/koneksi.php";
                       $kueripesanan= mysqli_query($host, "SELECT * FROM pesanan WHERE status = 'pending' ");
                       while($mem=mysqli_fetch_array($kueripesanan, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['Tgl_pesanan']; ?></td>
                          <td><?php echo $mem['Tgl_pengiriman']; ?></td>
                          <td><?php echo $mem['Total_bayar']; ?></td>
                          <td><?php echo $mem['Deskripsi']; ?></td>                          
                          <td>
                            <div class="btn-group">
                              <a href="<?php echo $admin_url; ?>adminweb.php?module=detail_pesanan&id_pesanan=<?php echo $mem['Id_pesanan']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-eye"></i></button></a>&nbsp;

                              <!-- <a href="<?php echo $admin_url; ?>module/pesanan/aksi_hapus.php?id_pesanan=<?php echo $mem['Id_pesanan'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a> -->
                            </div>
                          </td>

                        </tr>
                      <?php }?>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> Pesanan Ditolak</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>Tgl_Pesanan</th>
                          <th>Tgl_Pengiriman</th>
                          <th>Total Bayar</th>
                          <th>Deksripsi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       include "../lib/config.php";
                       include "../lib/koneksi.php";
                       $kueripesanan= mysqli_query($host, "SELECT * FROM pesanan WHERE status = 'tolak' ");
                       while($mem=mysqli_fetch_array($kueripesanan, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['Tgl_pesanan']; ?></td>
                          <td><?php echo $mem['Tgl_pengiriman']; ?></td>
                          <td><?php echo $mem['Total_bayar']; ?></td>
                          <td><?php echo $mem['Deskripsi']; ?></td>                                                    
                        </tr>
                      <?php }?>
                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </aside>
  </div>
