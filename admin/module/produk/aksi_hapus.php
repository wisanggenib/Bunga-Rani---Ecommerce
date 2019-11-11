<?php

session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idpro = $_GET['id_produk'];
    $queryHapus = mysqli_query($host, "DELETE FROM produk WHERE id_produk='$idpro'");
    if ($queryHapus) {
        echo "<script> alert('Data Produk Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
    } else {
        echo "<script> alert('Data Produk Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";

    }
}
?>