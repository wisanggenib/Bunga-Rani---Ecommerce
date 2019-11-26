<?php   
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>  
     
<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="adminweb.php?module=home">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Pesanan</li>
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
            <div class="card">
                  <div class="card-header">
                    <strong>Edit</strong> Pesanan</div>
                  <div class="card-body">
                    <?php
                    include "../lib/config.php";
                    include "../lib/koneksi.php";

                    $idpes=$_GET['id_pesanan'];
                    $queryEdit= mysqli_query($host, "SELECT * from pesanan WHERE Id_pesanan='$idpes'");

                    $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                    $status=$hasilQuery['status_bayar'];
                    $qty=$hasilQuery['Quantity'];

                    ?>
                    <form class="form-horizontal" action="../admin/module/pesanan/aksi_edit.php" method="post">
                      <input type="hidden" name="id_pesanan" value="<?php echo $idpes; ?>">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Status Pembayaran</label>
                        <div class="col-md-9">
                          <input type="radio" id="status" name="status" placeholder="Status" value="Sudah"> Sudah Membayar&nbsp;&nbsp;&nbsp;<input type="radio" id="status" name="status" placeholder="Status" value="Belum"> Belum Membayar
                       </div>
                     </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Quantity Pesanan</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" value="<?php echo $qty; ?>">
                       </div>
                     </div>

                                                                                  
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                  </div>
                </div>
                </form>
        </div>
      </main>
  </aside>
</div>
<?php } ?>