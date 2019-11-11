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
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Nama Lengkap" value="<?php echo $dash['nama_pelanggan']; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="telp" placeholder="No. HP" value="<?php echo $dash['no_hp']; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email" value="<?php echo $dash['email']; ?>">
						</div>
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" rows="6" name="alamat" placeholder="Alamat Pelanggan"><?php echo $dash['alamat']; ?></textarea>
					</p>
					
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Keranjang Anda
					</h3>

				</div>
				<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="asset/images/item-10.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">Men Tshirt</td>
							<td class="column-3">$36.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$36.00</td>
						</tr>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="asset/images/item-05.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">Mug Adventure</td>
							<td class="column-3">$16.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$16.00</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="cart.php"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						View Cart
					</button></a>
				</div>
			</div>

			</div>
		</div>
	</section>
