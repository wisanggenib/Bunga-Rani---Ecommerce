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

    $idprod = $_POST['id_produk'];
    $bunga = $_POST['bunga'];
    $warna = $_POST['warna'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    $queryEdit = mysqli_query($host, "UPDATE produk SET bunga = '$bunga', warna='$warna', gambar='$gambar', harga='$harga' WHERE Id_produk='$idprod'");
    if ($queryEdit) {
        echo "<script> alert('Data Produk Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
    } else {
        echo "<script> alert('Data Produk Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_produk;</script>";

    }
}
?>