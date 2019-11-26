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
                    <th>Nama Kategori</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $kueri= mysqli_query($host, "SELECT * from kategori");
                        while($data=mysqli_fetch_array($kueri, MYSQLI_ASSOC)){
                        ?>
                  <tr>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a
                          href="<?php echo $admin_url; ?>adminweb.php?module=edit_kategori&id_kategori=<?php echo $data['id_kategori']; ?>"><button
                            class="btn btn-block btn-warning btn-sm" type="button"><i
                              class="nav-icon icon-pencil"></i></button></a>&nbsp;

                        <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $data['id_kategori'];?>"
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
                <li><a href="<?php echo $base_url; ?>/admin/adminweb.php?module=tambah_kategori"><button class="btn btn-block btn-primary" type="button">Tambah Kategori</button></a></li>
              </ul>

            </div>
          </div>
</main>
</aside>
</div>