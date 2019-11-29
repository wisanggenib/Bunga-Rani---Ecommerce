 <?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','db_bungarani');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_bungarani");
$sql="SELECT * FROM produk JOIN kategori ON produk.id_kategori = kategori.id_kategori WHERE produk.id_kategori = '".$q."'";
$result = mysqli_query($con,$sql);

?> 
<?php
					while($row = mysqli_fetch_array($result)) {
?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="asset/images/produk/<?php echo $row['gambar'] ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="produk-detail.php?Id_produk=<?php echo $row['Id_produk']; ?>">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="produk-detail.php" class="block2-name dis-block s-text3 p-b-5">
										<?=$row['nama_produk']?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										RP <?=$row['harga']?>
									</span>
									<span class="p-r-5">
										<br><?=$row['nama_kategori']?>
									</span>
								</div>
							</div>
						</div>
<?php  
}
?>