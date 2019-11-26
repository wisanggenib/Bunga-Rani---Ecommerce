<?php 

	// get data id pesanam
	$Id_pesanan = $_GET['id_pesanan'];

	//query
	$host = mysqli_connect("localhost","root","","toko_rani");
	$query_delete = mysqli_query($host, "DELETE FROM pesanan WHERE Id_pesanan = '$Id_pesanan'");

	//action
	if ($query_delete) {
		echo "<script> alert('Delete Berhasil'); window.location = '../cart.php'; </script>";
	} else {
		echo "<center> Maaf, terdapat masalah internal <br>";
  echo "<a href= ../cart.php><b>Booking Plan</b></a></center>";
	}


 ?>