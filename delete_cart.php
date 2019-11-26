<?php
session_start();
    foreach($_SESSION["cart"] as $k => $v) {
        if($_GET["nama_produk"] == $k)
            unset($_SESSION["cart"][$k]);				
        if(empty($_SESSION["cart"]))
            unset($_SESSION["cart"]);
    }
?>
<meta http-equiv="refresh" content="0;URL=cart.php" />