<?php 

include "lib/config.php";
session_start();
if (empty($_SESSION['idpelanggan'])) {
    
} else {
$id=$_SESSION['idpelanggan'];
include "template/header2.php";
include "pages/dashpelanggan.php";
include "template/footer.php"; 


}

?>