<?php

include "lib/koneksi.php";
$kueriDash= mysqli_query($host, "SELECT * from pelanggan WHERE Id_pelanggan = $id");
$dash = mysqli_fetch_array($kueriDash, MYSQLI_ASSOC);

?>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-06.jpg);">
	<h2 class="l-text2 t-center">
		Halaman Ubah Pelanggan
	</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
		<div class="row">
			<div class="col-md-4 p-b-30">
				<div class="hov-img-zoom">
					<img src="asset/images/banner-14.jpg" alt="IMG-ABOUT">
				</div>
			</div>			
			<div class="col-md-8 p-b-30">
				<form action="pages/aksi_ubahuser.php" method="POST" enctype="multipart/form-data">
					
					<input type="text" class="form-control" name="id_pelanggan" value="<?=$id?>" style="background-color: gray" hidden>
					
					<div class="form-group">
						<label for="email">Foto Profil:</label>
						<input type="file" class="form-control" name="gambar" style="background-color: gray">
					</div>

					<div class="form-group">
						<label for="email">Nama Depan:</label>
						<input type="text" class="form-control" name="nama_depan" value="<?=$dash['nama_depan']?>" style="background-color: gray">
					</div>
					<div class="form-group">
						<label for="email">Nama Belakang:</label>
						<input type="text" class="form-control" name="nama_belakang" value="<?=$dash['nama_belakang']?>" style="background-color: gray">
					</div>
					<div class="form-group">
						<label for="email">Alamat:</label>
						<textarea class="form-control" name="alamat" style="background-color: gray"><?=$dash['alamat']?></textarea>
					</div>
					<div class="form-group">
						<label for="email">No HP:</label>
						<input type="text" class="form-control" name="no_hp" value="<?=$dash['no_hp']?>" style="background-color: gray">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" value="<?=$dash['email']?>" style="background-color: gray">
					</div>
					<div class="form-group">
						<label for="email">Username:</label>
						<input type="text" class="form-control" name="username" value="<?=$dash['username']?>" style="background-color: gray">
					</div>
					<div class="form-group">
						<label for="email">Password:</label>
						<input type="password" class="form-control" name="password" value="<?=$dash['password']?>" style="background-color: gray">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form> 
			</p>

		</div>
	</div>
</div>
</section>
