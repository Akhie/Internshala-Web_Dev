<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <!-- Header -->
        <?php
        include 'includes/header.php';
        
        $user_id =$_SESSION['id'];
        $query = "SELECT p.id,p.name,p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result)==0){
            echo'<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
        }else{
            $total=0;
        }
        ?>
        <!--Header end-->
        
        <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php $total +=$row['price']; echo $row['price'] ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $row['id'] ?>">Remove</a></td>
                            </tr>
                            <?php } ?>
                            
                            <tr>
                                <td></td>
                                <td>Total :</td>
                                <td><i class="fa fa-rupee"></i> <?php echo $total; ?> </td>
                                <td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </body>
</html>