

<?php
include "config.php";
                        include "koneksi.php";

                        $idpem=$_GET['id_pembayaran'];
                        
                        $queryEdit= mysqli_query($host, "SELECT * from pembayaran WHERE Id_pembayaran='$idpem'");
                        $hasilQuery=mysqli_fetch_array($queryEdit, MYSQLI_ASSOC);
                        
                        $noref=$hasilQuery['no_ref'];
?>

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
                 <?php  ?>