<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../MAILER/src/Exception.php';
require '../../MAILER/src/PHPMailer.php';
require '../../MAILER/src/SMTP.php';

$nama = 'Eko Maulana';
$total = '3000';
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
$mail->addAddress("bagus.wisanggeni4897@gmail.com", "Bagus Wisanggeni");
$mail->Subject = 'Pemesanan';
$mail->msgHTML("Yang terhormat Bapak/Ibu $nama kami telah menerima pembayaran pesanan anda senilai Rp.$total,00. Silahkan menunggu pesanan diantar<br>TERIMA KASIH<br>Salam Hangan Cs Bunga Rani"); // remove if you do not want to send HTML email
$mail->AltBody = 'HTML not supported';
$mail->send();
?>