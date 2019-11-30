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
if (empty($_SESSION['idpelanggan']) AND empty($_SESSION['pelanggan'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else {

    include "../lib/config.php";
    include "../lib/koneksi.php";

    $idPelanggan = $_POST['id_pelanggan'];
    $namaDepan = $_POST['nama_depan'];
    $namaBelakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['no_hp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fileName = $_FILES['gambar']['name'];


    if (empty($fileName)) {
        $queryEdit = mysqli_query($host, "UPDATE pelanggan SET nama_depan = '$namaDepan',nama_belakang = '$namaBelakang',alamat = '$alamat',no_hp = '$noHp',email = '$email',username = '$username',password = '$password' WHERE Id_pelanggan='$idPelanggan'");

        if ($queryEdit) {
            echo "<script> alert('Data Kategori Berhasil Diupdate'); window.location = '../dashpelanggan.php';</script>";
        } else {
            echo "<script> alert('Data Kategori Gagal Diupdate'); window.location = '../ubah_pelanggan.php';</script>";

        }
    }else{
        
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../asset/images/pelanggan/".$_FILES['gambar']['name']);

        $queryEdit = mysqli_query($host, "UPDATE pelanggan SET nama_depan = '$namaDepan',nama_belakang = '$namaBelakang',alamat = '$alamat',no_hp = '$noHp',email = '$email',username = '$username',password = '$password',gambar='$fileName' WHERE Id_pelanggan='$idPelanggan'");

        if ($queryEdit) {
            echo "<script> alert('Data Kategori Berhasil Diupdate'); window.location = '../dashpelanggan.php';</script>";
        } else {
            echo "<script> alert('Data Kategori Gagal Diupdate'); window.location = '../ubah_pelanggan.php';</script>";

        }
    }
}
?>s