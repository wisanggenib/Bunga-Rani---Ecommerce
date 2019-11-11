<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

</html>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

header('location:index.php');
?>

</body>