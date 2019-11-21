<?php   
if (empty($_SESSION['pelanggan']) AND empty($_SESSION['pass'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../bunga_rani><b>LOGIN</b></a></center>";
} else { ?>  
<div class="container" style="margin-top: 50px;">
<table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>Id_pemesanan</th>
                          <th>Tgl_Pembayaran</th>
                          <th>Jml_Pembayaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        include "lib/koneksi.php";

                        $kueripembayaran= mysqli_query($host, "SELECT * from pembayaran JOIN pesanan ON pembayaran.Id_pesanan = pesanan.Id_pesanan WHERE pembayaran.Status = 'pending'");
                        while($mem=mysqli_fetch_array($kueripembayaran, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['Id_pesanan']; ?></td>
                          <td><?php echo $mem['Tgl_pembayaran']; ?></td>
                          <td><?php echo $mem['Total_bayar']; ?></td>
                          <td>
                            <div class="btn-group">
                            <a href="<?php echo $pelanggan_url; ?>pelangganweb.php?module=edit_pembayaran&id_pembayaran=<?php echo $mem['Id_pesanan']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil">Hapus</i></button></a>&nbsp;
                            </div>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody> 
                    </table>
</div>
                  <?php } ?>
