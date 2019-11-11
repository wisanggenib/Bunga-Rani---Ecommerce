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

   $idpelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $queryEdit = mysqli_query($host, "UPDATE pelanggan SET nama_pelanggan = '$nama', username='$username', password='$password', alamat='$alamat', no_hp=$no_hp, email='$email' WHERE Id_pelanggan=$idpelanggan");
    if ($queryEdit) {
        echo "<script> alert('Data Pelanggan Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=pelanggan';</script>";
    } else {
        echo "<script> alert('Data Pelanggan Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_pelanggan;</script>";

    }
}
?>