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
                          <th>Tgl_Pembayaran</th>
                          <th>Jml_Pembayaran</th>
                          <th>No_nota</th>
                          <th>Tgl_nota</th>
                          <th>Bukti_transfer</th>
                         
                             <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueripembayaran= mysqli_query($host, "SELECT * from pembayaran");
                        while($mem=mysqli_fetch_array($kueripembayaran, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['Tgl_pembayaran']; ?></td>
                          <td><?php echo $mem['Jml_pembayaran']; ?></td>
                          <td><?php echo $mem['No_nota']; ?></td>
                          <td><?php echo $mem['Tgl_nota']; ?></td>
                          <td><?php echo $mem['No_ref']; ?></td>
                          
                        <td>
                            <div class="btn-group">
                            <a href="<?php echo $admin_url; ?>module/pembayaran/aksi_hapus.php?id_pembayaran=<?php echo $mem['Id_pembayaran'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn btn-block btn-danger btn-sm" type="button"><i class="nav-icon icon-power"></i></button></a>
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
              