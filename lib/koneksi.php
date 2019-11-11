<?php
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost","root","") or die ("Koneksi Gagal");
$database = mysqli_select_db($host, "db_bungarani") or die ("Database tidak bisa dibuka");

?>
