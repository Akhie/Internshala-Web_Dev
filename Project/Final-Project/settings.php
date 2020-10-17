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
        <title>Welcome | Settings</title>
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
        ?>
        <!--Header end-->
        
        <div class=" row top-margin " >
            <div class="col-md-offset-3 col-lg-5 col-md-6 col-xs-offset-2 col-xs-8" >
	
		<h2><strong> Change Password</strong> </h2>
		<form method="post" action="settings_script.php">
                    
                    <div class="form-group">
			<input type="Password" class="form-control" name="old-pwd" placeholder="Old Password">
                    </div>

                    <div class="form-group">
			<input type="Password" class="form-control" name="new-pwd" placeholder="New Password">
                    </div>

                    <div class="form-group">	
			<input type="Password" class="form-control" name="re-pwd" placeholder="Re-enter new Password">
                    </div>

                    <div>
			<button class="btn btn-primary" type="submit" value="submit"  name="button">Change</button>					
                    </div>
                    
		</form>
            </div>
        </div>
    </body>    
</html>        

