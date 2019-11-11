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

    $idKategori = $_POST['id_kategori'];
    $namaKategori = $_POST['nama_kategori'];

    $queryEdit = mysqli_query($host, "UPDATE kategori SET nama_kategori = '$namaKategori' WHERE id_kategori='$idKategori'");
    if ($queryEdit) {
        echo "<script> alert('Data Kategori Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
    } else {
        echo "<script> alert('Data Kategori Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori;</script>";

    }
}
?>