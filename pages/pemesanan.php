<?php

include "lib/koneksi.php";

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
						<table class="table-shopping-cart">
							<tr class="table-head">
								<th class="column-1"></th>
								<th class="column-3">Product</th>
								<th class="column-3">Price</th>
								<th class="column-3">Quantity</th>
								<th class="column-3">Total</th>
							</tr>
							<?php
							foreach ($_SESSION['cart'] as $item) {
								$price = $item['quantity']*$item['harga'];
								
								$sql = "SELECT * FROM produk  WHERE Id_produk = $item[id]";
								$result = $koneksi->query($sql);
								$hasil = $result->fetch_assoc();

								?>
								<tr class="table-row">
									<td class="column-1">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="asset/images/produk/<?=$hasil['gambar'] ?>" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-3"><?=$hasil['nama_produk'] ?></td>
									<td class="column-3"><?=$item['harga'] ?></td>
									<td class="column-3"><?=$item['quantity'] ?>
<!-- 										<div class="flex-w bo5 of-hidden w-size17">
											<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
											</button>

											<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

											<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
											</button>
										</div> -->
									</td>
									<td class="column-3"><?=$price ?></td>
								</tr>
								<?php
							}
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="background-color: ;">
				<div class="container-table-cart pos-relative">
					<h3>Detail Pemesanan</h3>
					<div class="wrap-table-shopping-cart bgwhite">
						
						<form action="/action_page.php" style="background-color: gray;padding: 10px;">
							<div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd">
							</div>
							<div class="form-group form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>

</section>
