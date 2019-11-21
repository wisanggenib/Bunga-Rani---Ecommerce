<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <?php
		if(isset($_SESSION["cart"])){
			$total_quantity = 0;
			$total_price = 0;
		?>
                <table class="table-shopping-cart">
                    <tbody style="border: 1px solid #e6e6e6;" >
                        <tr style="border: 1px solid #e6e6e6;">
                            <th>Name</th>
                            <th>Code</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        <?php		
    						foreach ($_SESSION["cart"] as $item){
								$item_price = $item["quantity"]*$item["harga"];

								$sql = "SELECT * FROM produk  WHERE Id_produk = $item[id]";
								$result = $koneksi->query($sql);
								$hasil = $result->fetch_assoc();
							?>
                        <tr style="border: 1px solid #e6e6e6;">
                            <td>
							<img src="asset/images/produk/<?php echo $hasil["gambar"]; ?>" class="cart-item-image" /><?php echo $hasil["nama_produk"]; ?>
                            </td>
                            <td><?php echo $item["id"]; ?></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo "Rp ".$item["harga"]; ?></td>
                            <td><?php echo "Rp ". number_format($item_price,2); ?></td>
                            <td><a
                                    href="index.php?action=remove&code=<?php echo $item["id"]; ?>"
                                    class="btnRemoveAction"><i class="fa fa-trash" aria-hidden="true" style="font-size:20px;"></i></a></td>
                        </tr>
                        <?php
								$total_quantity += $item["quantity"];
								$total_price += ($item["harga"]*$item["quantity"]);
							}
						?>

                        <tr style="border: 1px solid #e6e6e6;">
                            <td colspan="2" align="right">Total:</td>
                            <td align="right"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="2">
                                <strong><?php echo "$ ".number_format($total_price, 2); ?></strong>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <?php
				} else {
				?>
                <div class="no-records">Your Cart is Empty</div>
                <?php 
				}
				?>
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