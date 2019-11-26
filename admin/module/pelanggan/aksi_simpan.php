<?php
// untuk mengecek apakah session 'username' dan 'passuser' sudah ada apa blm, session tersebut tercipta jika admin telah login, 
// jadi jika admin blm login makan tidak dpt mengakses file ini
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
    $nama_user = $_POST['P_user'];
    $pass_user = $_POST['P_password'];
    $nama_leng = $_POST['P_nama_lengkap'];
    $alamat = $_POST['P_alamat'];
    $nomer_hp = $_POST['no_hp'];
    $email_user = $_POST['P_email'];

// query untuk menyimpan ke tabel tbl_layanan

    $host = mysqli_connect("localhost","root","","toko_rani");

    $querySimpan = mysqli_query($host, "INSERT INTO pelanggan (Id_pelanggan,username,password,nama_pelanggan,alamat,no_hp,email) VALUES ('','$nama_user','$pass_user','nama_leng','$alamat','$nomer_hp','$email_user')");

// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('Data pelanggan Berhasil Masuk'); window.location = '../../adminweb.php?module=pelanggan';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
        echo "<script> alert('Data Admin Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_pelanggan';</script>";
    }
}
?>