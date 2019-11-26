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

    $iddriver = $_POST['id_driver'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $queryEdit = mysqli_query($host, "UPDATE driver SET nama = '$nama', alamat='$alamat', no_hp='$no_hp', email='$email' WHERE Id_driver='$iddriver'");
    if ($queryEdit) {
        echo "<script> alert('Data Driver Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=driver';</script>";
    } else {
        echo "<script> alert('Data Driver Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_driver;</script>";

    }
}
?>