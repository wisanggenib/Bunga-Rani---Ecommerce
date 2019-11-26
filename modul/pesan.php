<?php 

 include "../lib/config.php";
 include "../lib/koneksi.php";
	$dapatkan_id = $_POST['produk'];
	$jumlah = $_POST['jumlah'];

	session_start();
	$sesi = $_SESSION['idpelanggan'];
 
	$dates = date("Y-m-d");
	
	

	// $host = mysqli_connect("localhost","root","","toko_rani");
						

	 $dapatkan = mysqli_query($host, "SELECT * FROM produk WHERE Id_produk = '$dapatkan_id' ");
	 $result = mysqli_fetch_array($dapatkan);



	 $bayar = $result['harga'] * $jumlah;

	 $status = "belum";

	//echo $dapatkan_id, $sesi, $dates, $harga_, $status, exit();

	$pesanan_insert = mysqli_query($host, "INSERT INTO pesanan (Id_pesanan, Id_produk, Id_pelanggan, Id_driver, Tgl_pesanan, Tgl_pengiriman, Total_bayar, Quantity, status_bayar) VALUES ('','$dapatkan_id','$sesi','2','$dates','','$bayar','$jumlah','belum')");

	 //action
	 if ($pesanan_insert) {
	 	echo "<script> alert('Pesanan Telah Ditambahkan'); window.location = '../index.php'; </script>";
	 } else {
	 	echo "<center> Maaf, terdapat masalah internal <br>";
  echo "<a href='../index.php'><b>pesan  </b></a></center>";

 }                                                                          



 ?>