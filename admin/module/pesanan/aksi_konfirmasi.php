<?php
/*
 * 
 * @package         APLIKASI WEB PENJUALAN UNTUK KULIAH E-COMMERCE
 * @description     Free Version
 * @version         1.0
 * @copyright       Copyright (c) 2016, Ika Nur Fajri
 * ==========================================================
 * =================== ABOUT DEVELOPER ======================
 * ==========================================================
 * License          Free Copy
 * Email            ika.nur.fajri@amikom.ac.id
 * Mobile           +62-98-638-673-204
 * ==========================================================
 * ==========================================================
 * Silakan Disempurnakan
**/
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    $idpesanan = $_POST['id_pesanan'];
    $resi = $_POST['resi'];

   if(isset($_POST['terima'])) {

   	    	if(empty($resi)){
   	    		  echo "<script> alert('Data Pesanan Gagal Diupdate');window.location = '$admin_url'+'adminweb.php?module=detail_pesanan&id_pesanan=".$idpesanan."';</script>";
   	    	}else{
					$queryEdit = mysqli_query($host, "UPDATE pesanan SET Status = 'sudah' WHERE Id_pesanan=$idpesanan");
					$queryEditPembayaran = mysqli_query($host, "UPDATE pembayaran SET Status = 'sudah', Resi = '$resi' WHERE Id_pesanan=$idpesanan");
		    	if ($queryEdit) {
			        echo "<script> alert('Data Pesanan Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=pembayaran';</script>";
			    } else {
			        echo "<script> alert('Data Pesanan Gagal Diupdate');window.location = '$admin_url'+'adminweb.php?module=detail_pesanan&id_pesanan=".$idpesanan."';</script>";
			    }
   	    	}
   }else if(isset($_POST['tolak'])) {
   			$queryEdit = mysqli_query($host, "UPDATE pesanan SET Status = 'tolak' WHERE Id_pesanan=$idpesanan");
			$queryEditPembayaran = mysqli_query($host, "UPDATE pembayaran SET Status = 'tolak' WHERE Id_pesanan=$idpesanan");

			if ($queryEdit) {
			        echo "<script> alert('Data Pesanan Berhasil DiTolak'); window.location = '$admin_url'+'adminweb.php?module=pesanan';</script>";
			    } else {
			        echo "<script> alert('System Error !!!');</script>";
			    }

   }else{
   	echo "SYSTEM ERROR";
   }

}
?>