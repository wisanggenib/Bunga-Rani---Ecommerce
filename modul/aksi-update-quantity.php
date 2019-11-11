<?php 

	
	$dapatkan_id = $_GET['id_pesanan'];

	session_start();
	$sesi = $_SESSION['idpelanggan'];

	

	echo $dapatkan_id, $sesi, $qty_update;


?>