<!-- Product Detail -->
<?php
if(empty($_SESSION['idpelanggan'])){
echo "<script>alert('Anda Harus Login Dulu')</script>";
echo "<script>window.location.replace('pages/login.php');</script>";

}

$sql = "SELECT * FROM produk JOIN kategori ON produk.id_kategori = kategori.id_kategori WHERE Id_produk = $_GET[Id_produk]";
$result = $koneksi->query($sql);
$row = $result->fetch_assoc();
?>
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="wrap-pic-w">
                    <img src="asset/images/produk/<?php echo $row['gambar']; ?>" alt="IMG-PRODUCT">
                </div>

            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?php echo $row['nama_produk']; ?>
            </h4>

            <span class="m-text17">
                Rp. <?php echo number_format($row['harga']); ?>
            </span>

            <!-- <p class="s-text8 p-t-10">
                Katetgori : 
            </p> -->

            <!--  -->
            <form action="testing_cart.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="custId" name="Id_produk" value="<?php echo $_GET['Id_produk'] ?>">
            <input type="hidden" id="x" name="harga" value="<?php echo $row['harga'] ?>">
            <input type="hidden" name="nama_produk" value="<?php echo $row['nama_produk'] ?>">

                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">
                        <div class="form-group" style="min-width: 80%">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" style="min-width: 100%"></textarea>
                        </div>

                    </div>

                    <!-- <div class="flex-m flex-w">
                        <div class="s-text15 w-size15 t-center">
                            Color
                        </div>

                        <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size30">
                            <select class="selection-2" name="color">
                                <option>Choose an option</option>
                                <option>Gray</option>
                                <option>Red</option>
                                <option>Black</option>
                                <option>Blue</option>
                            </select>
                        </div>
                    </div> -->

                    <div class=" flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="quantity"
                                    value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Category -->
            <div class="p-b-45">
                <span class="s-text8 m-r-35">*Deskripsi dapat di isi dengan, Pesan khusus seperti "Selamat Atas Hidup Pernikahnnya Eko dan Mantan"</span>
                <!-- <span class="s-text8">Categories: Mug, Design</span> -->
            </div>

            <!-- DROP DOWN  DETAIL-->
            <!-- <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div> -->
        </div>
    </div>
</div>


<!-- Relate Product -->