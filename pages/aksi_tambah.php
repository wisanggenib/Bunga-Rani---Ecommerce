<?php
session_start();
if (empty($_SESSION['pelanggan']) AND empty($_SESSION['pass'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
    include "config.php";
    include "koneksi.php";
    
    $idpembayaran = $_POST['id_pembayaran'];
    $noref=$_POST['noref'];

    $queryEdit = mysqli_query($host, "UPDATE pembayaran SET No_ref = '$noref' WHERE Id_pembayaran='$idpembayaran'");
    if ($queryEdit) {
        echo "<script> alert('Data Pesanan Berhasil Diupdate');</script>";
    } else {
        echo "<script> alert('Data Pesanan Gagal Diupdate');</script>";
}
}
?>