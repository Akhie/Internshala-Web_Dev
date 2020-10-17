<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Cart</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        
        $user_id =$_SESSION['id'];
        $query = "SELECT p.id,p.price FROM products p INNER JOIN users_products up ON up.product_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result)==0){
            echo'<h4 class="container panel-margin">Add products to cart first. Goto <a href="index.php">Home</a> page.</h4>';
        }else{
            $total=0;
        }
        ?>
        <!--Header end-->
        
        <div class="container-fluid top-margin bottom-margin" id="content">
            
            <div class="row">
                        
                <div class="col-xs-offset-1 col-xs-1">
                    <img src="img/intro-bg.jpg" class="img-responsive">
                </div>
                             
		<div class="col-xs-1">
                    <h2>Cart</h2>
		</div>
            </div>
            
            <div class="row decor_bg">
                
                <div class="col-xs-5 col-xs-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php $total +=$row['price']; echo $row['price'] ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $row['id'] ?>">Remove</a></td>
                            </tr>
                            <?php } ?>
                            
                            <tr>
                                <td></td>
                                <td>Total :</td>
                                <td><i class="fa fa-rupee"></i> <?php echo $total."/-"; ?> </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
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
        
       

