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

    $idAdmin = $_POST['id_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryEdit = mysqli_query($host, "UPDATE admin SET username = '$username', password='$password' WHERE id_admin='$idAdmin'");
    if ($queryEdit) {
        echo "<script> alert('Data Admin Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=admin';</script>";
    } else {
        echo "<script> alert('Data Admin Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_admin;</script>";

    }
}
?>