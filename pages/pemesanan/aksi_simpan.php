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

// query untuk menyimpan ke tabel tbl_layanan

    include "../../lib/koneksi.php";

    $querySimpan = mysqli_query($host, "INSERT INTO pesanan (Id_pelanggan,Tgl_pesanan,Tgl_pengiriman,Alamat,Status,Total_bayar,Deskripsi) VALUES ('$id_pelanggan','$tgl_pesan','$tgl_kirim','$alamat','belum','$total_bayar','$deskripsi')");

    $sql = "SELECT * FROM pesanan  WHERE Id_pelanggan = $_SESSION[idpelanggan] and status = 'belum' ORDER BY Id_pesanan DESC LIMIT 1 ";
    $result = $koneksi->query($sql);
    $pesanan = $result->fetch_assoc();
    $id_pesanan_sementara = $pesanan['Id_pesanan'];

    foreach ($_SESSION['cart'] as $item) {
        $querySimpan = mysqli_query($host, "INSERT INTO detail_pesanan (id_pesanan,quantity,id_produk,harga) VALUES ('$id_pesanan_sementara','$item[quantity]','$item[id]','$item[harga]')");        
    }

    unset($_SESSION['cart']);

// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('Data pesanan Berhasil Masuk'); window.location = '../../detail_pesanan.php';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
        echo "<script> alert('Data Pesanan Gagal Dimasukkan'); window.location = '../../pemesanan.php';</script>";
    }
}
?>