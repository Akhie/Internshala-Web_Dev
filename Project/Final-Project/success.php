<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$query = "UPDATE users_products SET status='confirmed' WHERE user_id='$user_id'";
$query_result = mysqli_query($con, $query);
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
        
        <div class="container-fluid" id="content">
            <div class="navbar navbar-default navbar-fixed-top" style="background-color: #eee;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php">E-Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-setting"></span> Settings </a></li>
                            <li><a href = "index.php"><span class = "glyphicon glyphicon-log-out"></span> Logout </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 80px;">
            <div class="jumbotron" style="border: 5px solid blue;">
            <div style="margin: 50px;">
                <center><p>Thank You for ordering from E-store. Your order shall be delivered<br>to you shortly. <br><br><br>Order some more Electronic items <a href="index.php"> here</a>.</p></center>
            </div>
            </div>
        </div>
    </body>
</html>    