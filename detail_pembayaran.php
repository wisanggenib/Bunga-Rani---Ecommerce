<?php 
include "lib/config.php";
session_start();
if (empty($_SESSION['idpelanggan'])) {

include "template/header.php";
include "pages/pembayaran/detail_pembayaran.php";
include "template/footer.php"; 
}else{
include "template/header2.php";
include "pages/pembayaran/detail_pembayaran.php";
include "template/footer.php"; 
}
?>