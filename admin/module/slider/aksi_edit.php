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

    $idSlider = $_POST['id_slider'];
    $pesan = $_POST['pesan'];
    $pesan1 = $_POST['pesan1'];
    $fileName = $_FILES['gambar']['name'];

    if(empty($fileName)){
        $queryEdit = mysqli_query($host, "UPDATE slider SET pesan = '$pesan',pesan1='$pesan1' WHERE id_slider='$idSlider'");
        if ($queryEdit) {
            echo "<script> alert('Data Slider Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";
        } else {
            echo "<script> alert('Data Slider Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";
        }
    }else{
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../asset/images/slider/".$_FILES['gambar']['name']);
        $queryEdit = mysqli_query($host, "UPDATE slider SET pesan = '$pesan',pesan1='$pesan1',gambar='$fileName' WHERE id_slider='$idSlider'");
        if ($queryEdit) {
            echo "<script> alert('Data Slider Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";
        } else {
            echo "<script> alert('Data Slider Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";

        }
    }
}
?>