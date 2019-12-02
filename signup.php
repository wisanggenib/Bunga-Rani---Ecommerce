<?php
//untuk memasukkan file koneksi
include "lib/koneksi.php";

// menangkap variabel post dr form signup.php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

// query untuk menyimpan ke tabel tbl_layanan

    $querySimpan = mysqli_query($host, "INSERT INTO pelanggan (username,password,nama_depan,nama_belakang,alamat,no_hp,email) VALUES ('$username','$password','$nama_depan','$nama_belakang','$alamat','$no_hp','$email')");


// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar layanan
    if ($querySimpan) {
        echo "<script> alert('silahkan login'); window.location = 'pages/login.php';</script>";
// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah layanan
    } else {
        echo "<script> alert('isi lagi'); window.location = 'pages/signup.php';</script>";
    }
?>