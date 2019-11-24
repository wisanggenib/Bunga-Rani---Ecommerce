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
              </main>
            </aside>
          </div>
              