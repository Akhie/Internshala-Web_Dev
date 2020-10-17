<?php 
require 'includes/common.php';
 if (isset($_POST['button'])) {

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$pass=md5($password);
$email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";

		$query1="select * from users where email = '$email'";
		$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
		 $row1=mysqli_fetch_array($result1);

		$total_s=mysqli_num_rows($result1);

	if(!preg_match($email_pattern, $email))
	{
		header('location: signup.php?email_error=Enter a valid email address.');
	}
	if(strlen($contact) != 10)
	{
		header('location: signup.php?contact_error=Enter 10 digit valid contact number.');
	}

	if($total_s == 0)
	{
		$user_reg="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$contact','$city','$address')";

		$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));

		$_SESSION['email']=$email;
		$_SESSION['name']=$name;
		$_SESSION['password']=$pass;
		$_SESSION['contact']=$contact;
		$_SESSION['message']="you are successfully signed in";
		$_SESSION['id']=mysqli_insert_id($con);
		header("location: index.php");
	}
	else{
		echo "<center>Account Already Exists</center><br>";
?>
<!DOCTYPE html>
<html>
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
<body>

		<div align="center">
			<a href="signup.php" class="btn btn-primary" type="submit" name="button">Try Signing Up again</a>						
		</div>
</body>
</html>
<?php
		header('location: signup.php?exist_error=This email exists, Please login.');
	}





}
?>