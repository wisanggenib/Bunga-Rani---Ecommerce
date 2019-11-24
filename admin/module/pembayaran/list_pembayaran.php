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
                          <th>Nama Pemesan</th>
                          <th>Tgl Pembayaran</th>
                          <th>Total Bayar</th>
                          <th>Resi</th>
                          <th>Bukti_transfer</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueripembayaran= mysqli_query($host, "SELECT pelanggan.nama_depan,pembayaran.Tgl_pembayaran,pesanan.Total_bayar,pembayaran.Resi,pembayaran.Gambar from pesanan JOIN pembayaran ON pesanan.Id_pesanan = pembayaran.Id_pesanan JOIN pelanggan ON pesanan.Id_pelanggan = pelanggan.Id_pelanggan WHERE pesanan.Status = 'sudah' AND pembayaran.Status = 'sudah'");
                        while($mem=mysqli_fetch_array($kueripembayaran, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['nama_depan']; ?></td>
                          <td><?php echo $mem['Tgl_pembayaran']; ?></td>
                          <td><?php echo $mem['Total_bayar']; ?></td>
                          <td><?php echo $mem['Resi']; ?></td>
                          <td><img src="../asset/images/bukti/<?=$mem['Gambar']?>" style="max-width: 100px;"></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </main>
            </aside>
          </div>
              