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

    $idDriver = $_GET['Id_driver'];
    $queryHapus = mysqli_query($host, "DELETE FROM driver WHERE Id_driver='$idDriver'");
    if ($queryHapus) {
        echo "<script> alert('Data Driver Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=driver';</script>";
    } else {
        echo "<script> alert('Data Driver Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=driver';</script>";

    }
}
?>