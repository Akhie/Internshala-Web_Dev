<?php
include 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

$add_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$add_query_result = mysqli_query($con, $add_query) or die(mysqli_error($con));
header('location: products.php');
?>
