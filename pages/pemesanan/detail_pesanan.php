<?php
	  	include "lib/koneksi.php";
 ?>

<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			List Pesnan
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						List Pesanan Anda
					</h3>

				</div>
				<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-4"  style="padding-left: 10px;">Tanggal Pesan</th>
							<th class="column-4"  style="padding-left: 10px;">Tanggal Kirim</th>
							<th class="column-4"  style="padding-left: 10px;">Alamat</th>
							<th class="column-4"  style="padding-left: 10px;">Deskripsi</th>
							<th class="column-4"  style="padding-left: 10px;">Total</th>
							<th class="column-4"  style="padding-left: 10px;">Bayar</th>
						</tr>
						<?php
							$sql = "SELECT * FROM pesanan  WHERE Id_pelanggan = $_SESSION[idpelanggan] and Status ='belum' ";
							$result = $koneksi->query($sql);
							while($row = $result->fetch_assoc()) {
						?>
						<tr class="table-row">
							<td class="column-4" style="padding-left: 10px;"><?=$row['Tgl_pesanan']?></td>
							<td class="column-4" style="padding-left: 10px;"><?=$row['Tgl_pengiriman']?></td>
							<td class="column-4" style="padding-left: 10px;"><?=$row['Alamat']?></td>
							<td class="column-4" style="padding-left: 10px;"><?=$row['Deskripsi']?></td>
							<td class="column-4" style="padding-left: 10px;"><?=$row['Total_bayar']?></td>
							<td class="column-4" style="padding-left: 10px;"><a href="detail_pembayaran.php?id=<?=$row['Id_pesanan']?>"><i class="fa fa-credit-card" aria-hidden="true" style="font-size:20px;"></i></a></td>
						</tr>
						<?php
							}
						?>
					</table>
				</div>
			</div>

			</div>
		</div>
	</section>
