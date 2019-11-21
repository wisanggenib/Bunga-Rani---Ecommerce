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
    $tgl_pembayaran = date("Y/m/d");
    $id_pesanan = $_POST['id_pesanan'];
    $fileName = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../../asset/images/bukti/".$_FILES['gambar']['name']);

// query untuk menyimpan ke tabel tbl_layanan

    include "../../lib/koneksi.php";

    $querySimpan = mysqli_query($host, "INSERT INTO pembayaran (Tgl_pembayaran,Gambar,Id_pesanan) VALUES ('$tgl_pembayaran','$fileName','$id_pesanan')");

    $queryUpdate = mysqli_query($host, "UPDATE pesanan SET Status = 'pending' WHERE Id_pesanan = $id_pesanan ");

// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('Data pesanan Berhasil Masuk'); window.location = '../../pembayaran.php';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
        echo "<script> alert('Data Pesanan Gagal Dimasukkan'); window.location = '../../detail_pembayaran.php?id=".$id_pesanan."';</script>";
    }
}
?>