<?php

require 'includes/common.php';

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['e-mail']);
$password = mysqli_real_escape_string($con,md5($_POST['password']));
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);

$check_query = "SELECT * FROM users where email='$email'";
$check_query_result = mysqli_query($con, $check_query) or die(mysqli_error($con));
if(mysqli_num_rows($check_query_result>0)){
    echo 'email already exist';
}
else{
    $insert_query = "INSERT into users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
    $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    echo 'User Successfully Entered';
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
}
?>