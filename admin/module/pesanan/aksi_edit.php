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
    $status = $_POST['status'];
    $qty = $_POST['qty'];

    $queryEdit = mysqli_query($host, "UPDATE pesanan SET status_bayar = '$status', Quantity='$qty' WHERE Id_pesanan=$idpesanan");
    if ($queryEdit) {
        echo "<script> alert('Data Pesanan Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=pesanan';</script>";
    } else {
        echo "<script> alert('Data Pesanan Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_pesanan;</script>";

    }
}
?>