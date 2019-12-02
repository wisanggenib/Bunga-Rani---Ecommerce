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
                  <i class="fa fa-align-justify"></i> List Detail Pesanan</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>-</th>
                          <th>Nama Produk</th>
                          <th>Quantity</th>
                          <th>Harga</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       include "../lib/config.php";
                       include "../lib/koneksi.php";
                       $id_pesanan = $_GET['id_pesanan'];
                       $total = 0;
                       $kueripesanan= mysqli_query($host, "SELECT detail_pesanan.quantity as quantity, detail_pesanan.harga as harga,produk.nama_produk as nama_produk,produk.gambar as gambar  FROM detail_pesanan JOIN pesanan ON detail_pesanan.id_pesanan = pesanan.Id_pesanan JOIN produk ON detail_pesanan.id_produk = produk.Id_produk WHERE detail_pesanan.id_pesanan = $id_pesanan");
                       while($mem=mysqli_fetch_array($kueripesanan, MYSQLI_ASSOC)){
                        $total = $total+($mem['harga']*$mem['quantity']);
                        ?>
                        <tr>
                          <td> <img src="../asset/images/produk/<?=$mem['gambar'];?>" width="100px;" height="100px"></td>
                          <td><?php echo $mem['nama_produk']; ?></td>
                          <td><?php echo $mem['quantity']; ?></td>
                          <td><?php echo $mem['harga']; ?></td>
                          <td><?php echo $mem['harga']*$mem['quantity']; ?></td>                         
                        </tr>
                      <?php }?>
                      <tr style="background-color: gray; color: white">
                        <td colspan="3">Total Bayar</td>
                        <td colspan="2" style="text-align: center">Rp. <?=$total?></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> Form Resi</div>
                  <div class="card-body">
                    <div class="row">
                      <?php 
                      $kueriPembayaran = mysqli_query($host, "SELECT * FROM pesanan JOIN pembayaran ON pesanan.Id_pesanan = pembayaran.Id_pesanan JOIN pelanggan ON pesanan.Id_pelanggan = pelanggan.Id_pelanggan WHERE pembayaran.Id_pesanan = $id_pesanan");
                      $hasil = mysqli_fetch_assoc($kueriPembayaran);
                      ?>
                      <div class="col-md-8 col-lg-6">
                        <img src="../asset/images/bukti/<?=$hasil['Gambar']?>" style="max-width: 100%">
                      </div>
                      <div class="col-md-4 col-lg-6">
                       <form action="module/pesanan/aksi_konfirmasi.php" method="POST">
                        
                        <input type="text" class="form-control" name="id_pesanan" value="<?=$id_pesanan?>" hidden>
                        <input type="text" class="form-control" name="nama" value="<?=$hasil['nama_depan']?>" hidden>
                        <input type="text" class="form-control" name="total" value="<?=$total?>" hidden>

                        <div class="form-group">
                          <label for="harga">Total Bayar:</label>
                          <input type="text" class="form-control"  value="<?=$total?>" disabled>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Alamat:</label>
                          <textarea class="form-control" disabled><?=$hasil['Alamat']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="harga">Masukan Resi:</label>
                          <input type="text" class="form-control" name="resi">
                        </div>
                        <button type="submit" class="btn btn-warning" name="terima">Terima</button>
                        <button class="btn btn-danger" name="tolak">Tolak</button>
                      </form> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </aside>
  </div>
