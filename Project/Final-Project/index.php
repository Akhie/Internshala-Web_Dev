<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | E-Store</title>
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
        include 'includes/check_if_added_to_cart.php';
        ?>
        <!--Header end-->
        
        <div class="container-fluid top-margin bottom-margin">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 1</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                            </div>
                            <div class="caption">
                                <p>Sony Alpha , Rs. 60000.00 </p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>    
                        </div>
                    </div>    
                </div> 
                   

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 2</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/2.jpg" alt="">
                            </div>    
                            <div class="caption">
                                <p>Nikon EOS , Rs. 40,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 3</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="">
                            </div>    
                            <div class="caption">
                                <p>Sony DSLR , Rs. 45000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 4</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/4.jpg" alt="">
                            </div>
                            <div class="caption">
                                <p>Olympus DSLR , Rs. 50000.00 </p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>    
                        </div>
                    </div>    
                </div> 
                   

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 5</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/5.jpg" alt="">
                            </div>    
                            <div class="caption">
                                <p>cannon EOS , Rs. 36,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Camera 6</p>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="">
                            </div>    
                            <div class="caption">
                                <p>Fujifilm X-T30 , Rs. 70000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#login" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
                
            <!--Item categories listing end-->
            
   

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body> 
</html>