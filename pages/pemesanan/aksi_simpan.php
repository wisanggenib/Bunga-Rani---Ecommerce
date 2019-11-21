<?php
// untuk mengecek apakah session 'username' dan 'passuser' sudah ada apa blm, session tersebut tercipta jika admin telah login, 
// jadi jika admin blm login makan tidak dpt mengakses file ini
session_start();
if (empty($_SESSION['idpelanggan']) AND empty($_SESSION['pelanggan'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
    $id_pelanggan = $_SESSION['idpelanggan'];
    $tgl_pesan = date("Y/m/d");
    $tgl_kirim = $_POST['tgl_kirim'];
    $alamat = $_POST['alamat'];
    $total_bayar = $_POST['total'];
    $deskripsi = $_POST['deskripsi'];

    echo $id_pelanggan."<br>";
    echo $tgl_pesan."<br>";
    echo $tgl_kirim."<br>";
    echo $alamat."<br>";
    echo $total_bayar."<br>";
    echo $deskripsi."<br>";

// query untuk menyimpan ke tabel tbl_layanan

//     include "../../lib/koneksi.php";

//     $querySimpan = mysqli_query($host, "INSERT INTO pesanan (Id_pelanggan,username,password,nama_pelanggan,alamat,no_hp,email) VALUES ('','$nama_user','$pass_user','nama_leng','$alamat','$nomer_hp','$email_user')");

// // jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
//     if ($querySimpan) {
//         echo "<script> alert('Data pelanggan Berhasil Masuk'); window.location = '../../adminweb.php?module=pelanggan';</script>";
// // jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
//     } else {
//         echo "<script> alert('Data Admin Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_pelanggan';</script>";
//     }
}
?>