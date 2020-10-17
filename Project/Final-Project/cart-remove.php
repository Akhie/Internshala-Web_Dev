<?php

require 'includes/common.php';

$user_id = $_SESSION['id'];
$product_id = $_GET['id'];
$query = "DELETE from users_products WHERE user_id='$user_id' AND product_id='$product_id'";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));

header('location: cart.php');
?>