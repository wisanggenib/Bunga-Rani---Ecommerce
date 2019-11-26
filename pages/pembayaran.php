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

                        $kueripembayaran= mysqli_query($host, "SELECT pesanan.Id_pesanan, pembayaran.Tgl_pembayaran,pesanan.Total_bayar,pesanan.Status,pembayaran.Resi from pembayaran JOIN pesanan ON pembayaran.Id_pesanan = pesanan.Id_pesanan");
                        while($mem=mysqli_fetch_array($kueripembayaran, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                          <td><?php echo $mem['Id_pesanan']; ?></td>
                          <td><?php echo $mem['Tgl_pembayaran']; ?></td>
                          <td><?php echo $mem['Total_bayar']; ?></td>
                          <td>
                            <?php
                              if ($mem['Status']=='pending') {
                                echo "Menunggu Konfimasi Admin";
                              }else if($mem['Status']=='sudah'){
                                echo $mem['Resi'];
                              }else if($mem['Status']=='tolak'){
                                ?>
                                <div class="btn-group">
                            <a href="upload_ulang.php?id=<?php echo $mem['Id_pesanan']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil">Upload Ulang Bukti Bayar</i></button></a>&nbsp;
                            </div>
                                <?php
                              }
                            ?>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody> 
                    </table>
</div>
                  <?php } ?>
