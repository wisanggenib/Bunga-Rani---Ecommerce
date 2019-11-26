<?php

include "lib/koneksi.php";
$id = $_GET['id'];
?>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-06.jpg);">
	<h2 class="l-text2 t-center">
		Halaman Pemesanan
	</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="">
				<div class="container-table-cart pos-relative">
					<h3>Detail Pesanan</h3>
					<div class="wrap-table-shopping-cart bgwhite">
						<form action="pages/pemesanan/aksi_simpan.php" method="POST" style="background-color: gray;padding: 10px;">
							<div class="form-group">
								<label for="email">User :</label>
								<?php
								$sql = "SELECT * FROM pesanan JOIN pelanggan ON pesanan.Id_pelanggan = pelanggan.Id_pelanggan WHERE pesanan.Id_pesanan = $id";
								$result = $koneksi->query($sql);
								$data = $result->fetch_assoc();								
								?>
								<input type="text" class="form-control" id="email" disabled="true" value="<?=$data['nama_depan']?>">
							</div>

							<div class="form-group">
								<label for="pwd">Tanggal Pesan:</label>
								<input type="date" name="tgl_kirim" class="form-control" disabled="true" value="<?=$data['Tgl_pesanan']?>">
							</div>

							<div class="form-group">
								<label for="pwd">Tanggal Kirim:</label>
								<input type="date" name="tgl_kirim" class="form-control" disabled="true" value="<?=$data['Tgl_pengiriman']?>">
							</div>

							<div class="form-group">
								<label for="comment">Alamat:</label>
								<textarea class="form-control" rows="5" id="comment" name="alamat" disabled="true"> <?=$data['Alamat']?> </textarea>
							</div>
							
							<div class="form-group">
								<label for="comment">Deskripsi:</label>
								<textarea class="form-control" rows="5" id="comment" name="deskripsi" disabled="true"><?=$data['Deskripsi']?></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="background-color: ;">
				<div class="container-table-cart pos-relative">
					<h3>Upload Bukti Pembayaran</h3>
					<div class="wrap-table-shopping-cart bgwhite">
						
						<form action="pages/pembayaran/aksi_simpan.php" enctype='multipart/form-data' method="POST" style="background-color: gray;padding: 10px;">
							<div class="form-group">
								<label for="email">User :</label>
								<input type="text" class="form-control" id="email" disabled="true" value="<?=$data['nama_depan']?>">
							</div>

							<div class="form-group">
								<label for="email">Total Bayar :</label>
								<input type="number" class="form-control" value="<?=$data['Total_bayar']?>" disabled>
							</div>

							<div class="form-group">
								<input type="number" class="form-control" name="id_pesanan" value="<?=$data['Id_pesanan']?>" hidden>
							</div>

							<div class="form-group">
								<label for="email">Upload Bukti Bayar :</label>
								<input type="file" class="form-control" name="gambar" required>
							</div>
							
							<button type="submit" class="btn btn-primary">Upload</button>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>

</section>
