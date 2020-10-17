<?php
require 'includes/common.php';


$email = mysqli_real_escape_string($con,$_POST['e-mail']);
$password = mysqli_real_escape_string($con,md5($_POST['password']));

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$query_result = mysqli_query($con, $query);

if(mysqli_num_rows($query_result)==0){
    echo 'No user found';
}
else{
    $row = mysqli_fetch_array($query_result);
    $_SESSION['email']= $email;
    $_SESSION['id'] = $row['id'];
    header('location: products.php');
}

?>