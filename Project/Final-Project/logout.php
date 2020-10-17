
<?php 
session_start();
session_unset();
session_destroy();
echo "<center>----Successfully logged out----<br>Thankyou for visiting our site.</center>";
header("location: index.php");
?>