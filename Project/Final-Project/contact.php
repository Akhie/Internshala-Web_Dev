<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Contact Us</title>
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
        <div class="container">
            <div class="row top-margin">

                <div class="col-sm-9 col-xs-12">
                    <h2>LIVE SUPPORT</h2>
                    <h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="col-sm-3 col-xs-12">
                <!-- contact us pic-->
                <img src="img/contact.png">

                </div>

            </div>
            
            <div class="row bottom-margin" style="margin-top:20px;">
                
                <div class="col-sm-6 col-xs-12" >
                    <h3>CONTACT US</h3>
	       	    <form method="post"  action="contact_script.php">
			<div class="form-group">
                            Name:<input type="text" class="form-control" name="name" required="true">
			</div>

			<div class="form-group">
                            Email Id:<input type="email" class="form-control" name="email" required="true">
			</div>

			<div class="form-group">
                            Message:<textarea rows="4"  class="form-control" name="message" required="true"></textarea>
			</div>

                        <button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>
                    </form>
		</div>
			
                <div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
		    <h3>Company Information:</h3>
		    <p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)22-666-444<br>Fax: (000) 22-444-111<br>Email:info@mycompany.com<br>Follow on:Facebook, Twitter, Instagram<br></p>
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