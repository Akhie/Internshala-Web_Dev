<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">LOG IN</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="login_modal_script.php">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>New User? <a href="signup.php">Sign Up</a></p>
                    </div>
                </div>

            </div>
        </div>
        
    </body>
</html>    
