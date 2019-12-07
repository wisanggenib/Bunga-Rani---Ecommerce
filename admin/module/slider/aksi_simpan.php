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
// untuk mengecek apakah session 'username' dan 'passuser' sudah ada apa blm, session tersebut tercipta jika admin telah login, 
// jadi jika admin blm login makan tidak dpt mengakses file ini
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
// untuk memasukkan file config.php dan file koneksi.php
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $pesan = $_POST['pesan'];
    $pesan1 = $_POST['pesan1'];
// memindahkan file ke dalam folder images/slider
    $nameFile=$_FILES['gambar']['name'];
    $file=$_FILES['gambar']['tmp_name'];
    move_uploaded_file($file,"../../../asset/images/slider/$nameFile");    
// query untuk menyimpan ke tabel tbl_layanan
    $querySimpan = mysqli_query($host, "INSERT INTO slider (gambar,pesan,pesan1) VALUES ('$nameFile','$pesan','$pesan1')");
// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('Data Slider Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
       echo "<script> alert('Data Slider Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_slider';</script>";
    }
}
?>