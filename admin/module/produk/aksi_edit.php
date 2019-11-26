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
    $nama_produk = $_POST['nama_produk'];
    $id_kategori = $_POST['kategori'];
    $fileName = $_FILES['gambar']['name'];
    $harga = $_POST['harga'];

    if(empty($fileName)){
        $queryEdit = mysqli_query($host, "UPDATE produk SET nama_produk = '$nama_produk',harga='$harga',id_kategori = '$id_kategori' WHERE Id_produk='$idprod'");
        if ($queryEdit) {
            echo "<script> alert('Data Produk Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
        } else {
            echo "<script> alert('Data Produk Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_produk;</script>";

        }
    }else{
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../asset/images/produk/".$_FILES['gambar']['name']);
        $queryEdit = mysqli_query($host, "UPDATE produk SET nama_produk = '$nama_produk',harga='$harga',id_kategori = '$id_kategori',gambar='$fileName' WHERE Id_produk='$idprod'");
        if ($queryEdit) {
            echo "<script> alert('Data Produk Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
        } else {
            echo "<script> alert('Data Produk Gagal Diupdate'); window.location = '$admin_url'+'adminweb.php?module=edit_produk;</script>";

        }
    }
}
?>