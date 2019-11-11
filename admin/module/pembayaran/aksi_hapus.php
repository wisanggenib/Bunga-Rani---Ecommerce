<?php
/**
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

    $idpembayaran = $_GET['id_pembayaran'];
    $queryHapus = mysqli_query($host, "DELETE FROM pembayaran WHERE Id_pembayaran='$idpembayaran'");
    if ($queryHapus) {
        echo "<script> alert('Data Admin Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=pembayaran';</script>";
    } else {
        echo "<script> alert('Data Admin Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=pembayaran';</script>";

    }
}
?>