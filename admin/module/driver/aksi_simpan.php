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
// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
    $namadriver = $_POST['nama_driver'];
	$alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

// query untuk menyimpan ke tabel tbl_layanan
    $querySimpan = mysqli_query($host, "INSERT INTO driver (nama, alamat,no_hp,email) VALUES ('$namadriver', '$alamat', '$no_hp', '$email')");
// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('Data Driver Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=driver';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
        echo "<script> alert('Data Driver Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_driver';</script>";
    }
}
?>