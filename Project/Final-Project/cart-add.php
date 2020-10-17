<?php
include 'includes/common.php';
$product_id = $_GET['id'];
$user_id = $_SESSION['id'];

$add_query = "INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$product_id', 'Added to cart')";
$add_query_result = mysqli_query($con, $add_query) or die(mysqli_error($con));
header('location: index.php');
?>
