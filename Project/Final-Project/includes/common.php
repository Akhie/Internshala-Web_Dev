<?php

$con = mysqli_connect("localhost","django","akhilesh","ecommerce") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
?>