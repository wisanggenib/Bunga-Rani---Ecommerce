<?php   
if (empty($_SESSION['pelanggan']) AND empty($_SESSION['pass'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../bunga_rani><b>LOGIN</b></a></center>";
} else { ?>  
<table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>Tgl_Pembayaran</th>
                          <th>Jml_Pembayaran</th>
                          <th>No_nota</th>
                          <th>Tgl_nota</th>
                          <th>No_ref</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        include "config.php";
                        include "koneksi.php";

                        $idpem=$_GET['id_pembayaran'];
                        
                        $queryEdit= mysqli_query($host, "SELECT * from pembayaran WHERE Id_pembayaran='$idpem'");
                        $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                        
                        $noref=$hasilQuery['no_ref'];

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
                            <a href="<?php echo $pelanggan_url; ?>pelangganweb.php?module=edit_pembayaran&id_pembayaran=<?php echo $mem['Id_pesanan']; ?>"><button class="btn btn-block btn-warning btn-sm" type="button"><i class="nav-icon icon-pencil"></i></button></a>&nbsp;
                            </div>
                          </td>>
                        </tr>
                        <?php }?>
                      </tbody>
                     <form class="form-horizontal" action="./pages/aksi_tambah.php" method="post">
                      <input type="hidden" name="id_pembayaran" value="<?php echo $idpem; ?>">
      
                     </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-email">Masukkan No Ref ---> </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="noref" name="noref" placeholder="no_ref" value="<?php echo $noref; ?>">
                       </div>
                     </div>

                                                                                  
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                  </div>
                </div>
                        </form>  
                    </table>
                  <?php } ?>
