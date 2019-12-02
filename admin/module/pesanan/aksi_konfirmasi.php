<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

                require '../../../MAILER/src/Exception.php';
                require '../../../MAILER/src/PHPMailer.php';
                require '../../../MAILER/src/SMTP.php';
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
    $idpesanan = $_POST['id_pesanan'];
    $resi = $_POST['resi'];
    $nama = $_POST['nama'];
    $total = $_POST['total'];
    $email = $_POST['email'];

   if(isset($_POST['terima'])) {

          if(empty($resi)){
              echo "<script> alert('Data Pesanan Gagal Diupdate');window.location = '$admin_url'+'adminweb.php?module=detail_pesanan&id_pesanan=".$idpesanan."';</script>";
          }else{
          $queryEdit = mysqli_query($host, "UPDATE pesanan SET Status = 'sudah' WHERE Id_pesanan=$idpesanan");
          $queryEditPembayaran = mysqli_query($host, "UPDATE pembayaran SET Status = 'sudah', Resi = '$resi' WHERE Id_pesanan=$idpesanan");
                
                $mail = new PHPMailer;
                $mail->isSMTP(); 
                $mail->SMTPDebug = 2; 
                $mail->Host = "mail.bungarani.com "; 
                $mail->Port = "587"; // typically 587 
                $mail->SMTPSecure = 'tls'; // ssl is depracated
                $mail->SMTPAuth = true;
                $mail->Username = "cs@bungarani.com";
                $mail->Password = "Berkah22";
                $mail->setFrom("cs@bungarani.com", "Eko");
                $mail->addAddress($email, $nama);
                $mail->Subject = 'Pemesanan';
                $mail->msgHTML("Yang terhormat Bapak/Ibu $nama kami telah menerima pembayaran pesanan anda senilai Rp.$total,00. Silahkan menunggu pesanan diantar<br>TERIMA KASIH<br>Salam Hangan Cs Bunga Rani"); // remove if you do not want to send HTML email
                $mail->AltBody = 'HTML not supported';
                $mail->send();
          if ($queryEdit) {
              echo "<script> alert('Data Pesanan Berhasil Diupdate'); window.location = '$admin_url'+'adminweb.php?module=pembayaran';</script>";
          } else {
              echo "<script> alert('Data Pesanan Gagal Diupdate');window.location = '$admin_url'+'adminweb.php?module=detail_pesanan&id_pesanan=".$idpesanan."';</script>";
          }
          }
   }else if(isset($_POST['tolak'])) {
        $queryEdit = mysqli_query($host, "UPDATE pesanan SET Status = 'tolak' WHERE Id_pesanan=$idpesanan");
      $queryEditPembayaran = mysqli_query($host, "UPDATE pembayaran SET Status = 'tolak' WHERE Id_pesanan=$idpesanan");
                $mail = new PHPMailer;
                $mail->isSMTP(); 
                $mail->SMTPDebug = 2; 
                $mail->Host = "mail.bungarani.com "; 
                $mail->Port = "587"; // typically 587 
                $mail->SMTPSecure = 'tls'; // ssl is depracated
                $mail->SMTPAuth = true;
                $mail->Username = "cs@bungarani.com";
                $mail->Password = "Berkah22";
                $mail->setFrom("cs@bungarani.com", "Eko");
                $mail->addAddress($email, $nama);
                $mail->Subject = 'Pemesanan';
                $mail->msgHTML("Yang terhormat Bapak/Ibu $nama Silahkan Mengirim kembali bukti pembayaran pesanan anda. <br> Dengan detail pesanan senilai Rp.$total,00.<br>TERIMA KASIH<br>Salam Hangan Cs Bunga Rani"); // remove if you do not want to send HTML email
                $mail->AltBody = 'HTML not supported';
                $mail->send();
      if ($queryEdit) {
              echo "<script> alert('Data Pesanan Berhasil DiTolak'); window.location = '$admin_url'+'adminweb.php?module=pesanan';</script>";
          } else {
              echo "<script> alert('System Error !!!');</script>";
          }

   }else{
    echo "SYSTEM ERROR";
   }

}
?>