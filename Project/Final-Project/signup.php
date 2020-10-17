<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Sign Up</title>
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
        
        <div class="container top-margin bottom-margin">
            <div class="row">
                
                <div class="col-sm-7 col-xs-12">
                    <img class="img-responsive" src="img/yess.jpg">
                </div>
                
                <div class="col-sm-5 col-xs-12">
                    <h2><strong> SIGN UP</strong> </h2>
                    <form method="POST" action="signup_script.php">
			<div><?php //echo $_GET['total_error']; ?></div>
			<div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern=".{1,}">
			</div>

			<div class="form-group">
			    <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			    <div><?php echo $_POST['email_error']; ?></div>
			    <div><?php echo $_GET['exist_error']; ?></div>
			</div>

			<div class="form-group">	
                            <input type="Password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{1,}">
			</div>

			<div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10}">
                            <div><?php echo $_GET['contact_error']; ?></div>
			</div>

			<div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true" pattern=".{1,}">
			</div>

			<div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true" pattern=".{1,}">
			</div>

			<div>
                            <button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
			</div>

                    </form>
                    <br><p>Already Registered? <a data-toggle="modal" data-target="#login">Login</a></p>
                </div>
            </div>
        </div>
        
        <?php require 'login_modal.php'; ?>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body> 
</html>
