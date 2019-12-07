<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb"></ol>
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
                    <th>Slider</th>
                    <th>Pesan</th>
                    <th>Pesan1</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueri= mysqli_query($host, "SELECT * from slider");
                        while($data=mysqli_fetch_array($kueri, MYSQLI_ASSOC)){
                        ?>
                  <tr>
                    <td> <img src="../asset/images/slider/<?php echo $data['gambar']; ?>" width="200px;"></td>
                    <td><?php echo $data['pesan']; ?></td>
                    <td><?php echo $data['pesan1']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a
                          href="<?php echo $admin_url; ?>adminweb.php?module=edit_slider&id_slider=<?php echo $data['id_slider']; ?>"><button
                            class="btn btn-block btn-warning btn-sm" type="button"><i
                              class="nav-icon icon-pencil"></i></button></a>&nbsp;

                        <a href="<?php echo $admin_url; ?>module/slider/aksi_hapus.php?id_slider=<?php echo $data['id_slider'];?>"
                          onClick="return confirm('Anda yakin ingin menghapus data ini?')"><button
                            class="btn btn-block btn-danger btn-sm" type="button"><i
                              class="nav-icon icon-trash"></i></button></a>
                      </div>
                    </td>

                  </tr>
                  <?php }?>

                </tbody>
              </table>

              <ul class="pagination">
                <li><a href="<?php echo $base_url; ?>/admin/adminweb.php?module=tambah_slider"><button class="btn btn-block btn-primary" type="button">Tambah Slider</button></a></li>
              </ul>

            </div>
          </div>
</main>
</aside>
</div>