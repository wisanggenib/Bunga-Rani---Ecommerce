<?php
//untuk memasukkan file koneksi
include "../lib/koneksi.php";

// menangkap variabel post dr form login / index.php
$username = $_POST ['username'];
$pass = $_POST ['password'];

// pastikan password berupa huruf atau angka
if (!ctype_alnum ($username) OR !ctype_alnum($pass)) {
    echo "<center> LOGIN GAGAL !<br>
         Username atau Password anda tidak benar.<br>
         Atau akun anda sedang diblokir.<br>";
    echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else {
    $login = mysqli_query ($host, "SELECT * FROM admin WHERE username='$username' AND password='$pass'");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login, MYSQLI_ASSOC);
    
    //apabila username dan password ditemukan
    if ($ketemu > 0){
        session_start();
        
        $_SESSION[namauser] = $r[username];
        $_SESSION[passuser] = $r[password];
        
        header('location:adminweb.php?module=home');
    } else {
        echo "<center> LOGIN GAGAL !<br>
         Username atau Password anda tidak benar.<br>
         Atau akun anda sedang diblokir.<br>";
        echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
    }
}
?>