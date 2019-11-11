<?php 

include "lib/config.php";
session_start();
if (empty($_SESSION['idpesanan'])) {

include "template/header.php";
include "pages/pembayaran.php";
include "template/footer.php"; 
} else {
include "template/header2.php";
include "pages/pembayaran.php";
include "template/footer.php"; 
}
?>