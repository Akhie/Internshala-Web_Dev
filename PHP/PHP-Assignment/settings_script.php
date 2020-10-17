<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$email = $_SESSION['email'];

$current_password = mysqli_real_escape_string($con,md5($_POST['old-password']));
$password = mysqli_real_escape_string($con,md5($_POST['password']));
$password1 = mysqli_real_escape_string($con,md5($_POST['password1']));


$check_user = "SELECT * FROM users WHERE email='$email'";
$check_user_result = mysqli_query($con, $check_user);

$row = mysqli_fetch_array($check_user_result);

if($current_password==$row['password']){
    if($password==$password1){
    $update_query = "UPDATE users SET password='$password' WHERE email='$email'";
    $update_query_result = mysqli_query($con, $update_query);
    header('location: login.php');
    }
    else {
        header('location: settings.php');
        echo 'passwords must be same';
    }
}
else{
    header('location: settings.php');
    echo'Invalid Password';
}
