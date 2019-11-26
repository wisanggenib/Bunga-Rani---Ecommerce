<?php

	  	include "lib/koneksi.php";
	  	$kueriDash= mysqli_query($host, "SELECT * from pelanggan WHERE Id_pelanggan = $id");
	   	$dash = mysqli_fetch_array($kueriDash, MYSQLI_ASSOC);

 ?>

<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			Dashboard Pelanggan
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
					<h3 class="m-text26 p-t-15 p-b-16">
						Hello, <?php echo $dash['username']; ?>
					</h3>

					<p class="p-b-28">
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Nama Lengkap" value="<?php echo $dash['nama_depan']; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="telp" placeholder="No. HP" value="<?php echo $dash['no_hp']; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email" value="<?php echo $dash['email']; ?>">
						</div>
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" rows="6" name="alamat" placeholder="Alamat Pelanggan"><?php echo $dash['alamat']; ?></textarea>
						<div class="of-hidden size15 m-b-20">
							<a href="ubah_pelanggan.php"><button class="btn btn-warning"> Ubah Data </button></a>
						</div>
					</p>
					
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Pesanan Belum Terbayar
					</h3>

				</div>
				<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Tanggal Pesan</th>
							<th class="column-2">Tanggal Kirim</th>
							<th class="column-3">Deskripsi</th>
							<th class="column-3">Alamat</th>
							<th class="column-4 p-l-70">Total Bayar</th>
							<th class="column-5">Aksi</th>
						</tr>

						<?php
							$sql = "SELECT * FROM pesanan  WHERE Id_pelanggan = $_SESSION[idpelanggan] and Status ='belum' ";
							$result = $koneksi->query($sql);
							while($row = $result->fetch_assoc()) {
						?>

						<tr class="table-row">
							<td class="column-1"><?=$row['Tgl_pesanan']?></td>
							<td class="column-2"><?=$row['Tgl_pengiriman']?></td>
							<td class="column-3"><?=$row['Deskripsi']?></td>
							<td class="column-3"><?=$row['Alamat']?></td>
							<td class="column-4"><?=$row['Total_bayar']?></td>
							<td class="column-5"><a href="detail_pembayaran.php?id=<?=$row['Id_pesanan']?>"><i class="fa fa-credit-card" aria-hidden="true" style="font-size:20px;"></i></a></td>
						</tr>
						<?php
							}
						?>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="detail_pesanan.php"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Semua Pesanan
					</button></a>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10" style="margin-left: 10px;">
					<!-- Button -->
					<a href="pembayaran.php"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Semua Pembayaran
					</button></a>
				</div>
			</div>

			</div>
		</div>
	</section>
