<?php

session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idSlider = $_GET['id_slider'];
    $queryHapus = mysqli_query($host, "DELETE FROM slider WHERE id_slider='$idSlider'");
    if ($queryHapus) {
        echo "<script> alert('Data Slider Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";
    } else {
        echo "<script> alert('Data Slider Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=slider';</script>";

    }
}
?>