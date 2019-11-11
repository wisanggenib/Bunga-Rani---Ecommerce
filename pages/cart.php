<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-5">Quantity</th>
							<th class="column-5"> Update</th>
							<th class="column-3">Total</th>
							<th class="column-5">Hapus</th>
							<th class="column-5">bayar</th>
						</tr>

						<style type="text/css">
							.table-shopping-car .column-5 {
								text-align: center;
							}
						</style>

						<?php
						  	
						  	$sesiiii = $_SESSION['idpelanggan'];
						  	$host = mysqli_connect("localhost","root","","toko_rani");
						  	$kueriDash= mysqli_query($host, "SELECT * FROM pesanan JOIN produk ON pesanan.Id_produk = produk.Id_produk WHERE pesanan.Id_pelanggan = '$sesiiii'");
						   	while ($dash = mysqli_fetch_array($kueriDash, MYSQLI_ASSOC)){
						 ?>

						<tr class="table-row">
							<td class="column-1">
								<?php echo $dash['Id_pesanan']?>
								</div>

							</td>
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="asset/images/item-05.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $dash['bunga']; ?> - <?php echo $dash['warna']; ?></td>
							<td class="column-3"> <strong> Rp. </strong> <?php echo $dash['Quantity']; ?></td>
							<form action="modul/aksi-update-quantity.php?id_pesanan=<?php echo $dash['Id_pesanan']?>" method="POST">
							<td class="column-5">
									<div class="row flex-w bo5 of-hidden w-size17">

										<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="lolaaaa" 
									value="<?php echo $dash['Quantity'] ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true">  </i>
									</button>
								</div>
							</td>
							<td class="column-5 text-center"> 
								<div class="">
									<a href="">
										<i class="fa fa-arrow-circle-up fa-2x" style="color: #9a9b98"> </i>
									</a>				
								</div>
							</td>
							</form>
							<td class="column-5"><strong> Rp. </strong> <?php echo $dash['Total_bayar']; ?></td>
							<td class="column-5 text-center"> 
								<div class="btn btn-warning btn-sm">
									<a href="modul/aksi-hapus-pesanan.php?id_pesanan=<?php echo $dash['Id_pesanan']?>">
										<i class="fa fa-trash fa-2x"> </i>
									</a>				
								</div>

							</td>
							<td class="column-5 text-center"> 
								<div class="btn btn-warning btn-sm">
									<a href="modul/aksi-hapus-pesanan.php?id_pesanan=<?php echo $dash['Id_pesanan']?>">
										<i class="fa fa-credit-card fa-2x"> </i>
									</a>				
								</div>
								
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">

				<div class="size12 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="pembayaran.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Bayar
					</a>
				</div>
			</div>
		</div>
	</section>