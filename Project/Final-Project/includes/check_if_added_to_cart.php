<?php

function check_if_added_to_cart($product_id){
    include 'includes/common.php';
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM users_products WHERE product_id='$product_id' AND user_id ='$user_id' and status='Added to cart'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($query_result)){
        return 1;
    }
    else{
        return 0;
    }
}

?>

