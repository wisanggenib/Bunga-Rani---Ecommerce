<?php
include 'lib/koneksi.php';
session_start();

$nama_produk = $_POST['nama_produk'];

$cart = array($_POST['nama_produk'] => array ('id' => $_POST['Id_produk'],'quantity' => $_POST['quantity'],'deskripsi' => $_POST['deskripsi'],'harga' => $_POST['harga']));

if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = $cart;
}else if(array_key_exists($_POST['nama_produk'],$_SESSION['cart'])){
    $_SESSION['cart'][$nama_produk]['quantity'] += $_POST['quantity'];
}else{
    $_SESSION['cart'] = array_merge($_SESSION['cart'],$cart);
}

// $_SESSION['cart'] = $cart;
// echo "<br>========<br>";
// print_r($_SESSION['cart']);
// echo "<br>========<br>";
// print_r($cart);

?>
<meta http-equiv="refresh" content="0;URL=cart.php" />