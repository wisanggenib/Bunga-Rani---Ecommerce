<?php
include "../lib/config.php";
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>
<main class="main">     
 <!-- Breadcrumb-->
        <ol class="breadcrumb">
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <?php 
                      include "../lib/config.php";
                      include "../lib/koneksi.php";
                      $kueriCountPelanggan= mysqli_query($host, "SELECT COUNT(Id_pelanggan)AS jumlahPelanggan from pelanggan");
                      $data = mysqli_fetch_array($kueriCountPelanggan, MYSQLI_ASSOC);
                     ?>
                    <div class="text-value"><?=$data['jumlahPelanggan']?></div>
                    <div>Pelanggan Terdaftar</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <?php 
                      include "../lib/config.php";
                      include "../lib/koneksi.php";
                      $kueriPesananPending= mysqli_query($host, "SELECT COUNT(Id_pesanan)AS jumlahPesanan from pesanan WHERE status = 'pending'");
                      $data = mysqli_fetch_array($kueriPesananPending, MYSQLI_ASSOC);
                     ?>
                    <div class="text-value"><?=$data['jumlahPesanan']?></div>
                    <div>Pesanan Pending</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                    </div>
                     <?php 
                      include "../lib/config.php";
                      include "../lib/koneksi.php";
                      $kueriProduk= mysqli_query($host, "SELECT COUNT(id_produk)AS jumlahProduk from produk");
                      $data = mysqli_fetch_array($kueriProduk, MYSQLI_ASSOC);
                     ?>
                    <div class="text-value"><?=$data['jumlahProduk']?></div>
                    <div>Produk Tersedia</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                    </div>
                    <?php 
                      include "../lib/config.php";
                      include "../lib/koneksi.php";
                      $kueriBayar= mysqli_query($host, "SELECT COUNT(Id_pembayaran)AS jumlahBayar from pembayaran");
                      $data = mysqli_fetch_array($kueriBayar, MYSQLI_ASSOC);
                     ?>
                    <div class="text-value"><?=$data['jumlahBayar']?></div>
                    <div>Transaksi Sukses</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Produk Terjual</div>
                  <div class="card-body">
                    <!-- /.row-->
                    <br>
                    <table class="table table-responsive-sm table-hover table-outline mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">gambar</th>
                          <th class="text-center">Nama Produk</th>
                          <th class="text-center">Harga</th>
                          <th class="text-center">Jumlah Terjual</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                    $sql = "SELECT produk.Id_produk,produk.nama_produk,produk.harga,produk.gambar, COUNT(detail_pesanan.Id_produk) as total FROM produk JOIN detail_pesanan ON produk.Id_produk = detail_pesanan.Id_produk GROUP BY detail_pesanan.id_produk ORDER BY total DESC";
                    $result = $koneksi->query($sql);
                    while($row = $result->fetch_assoc()) {

                      ?>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="../asset/images/produk/<?=$row['gambar']?>" alt="GAMBAR PRODUK">
                            </div>
                          </td>
                          <td class="text-center">
                            <div><?=$row['nama_produk']?></div>
                          </td>
                          <td class="text-center">
                            <div class="clearfix">
                              <div>
                                <strong>Rp.<?=$row['harga']?></strong>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                            <div><?=$row['total']?></div>
                          </td>
                        </tr>
                      
                      <?php
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>
    </div>
          <?php } ?>