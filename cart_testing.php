<!DOCTYPE html>
<html>
<body>

<?php
$cars = array(
  "mobil" => array(
    'Nama' => "Volvo",
    'Ukuran' =>0,
    'Kecepatan' =>18
   )
);
  
$cars2 = array(
  "mobil2" => array(
    'Nama' => "BMW",
    'Ukuran' =>23,
    'Kecepatan' =>19
   )
);

$_SESSION['x'] = array_merge($cars2,$cars);
print_r($_SESSION['x']);
?>

</body>
</html>