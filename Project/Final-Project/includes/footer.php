<?php
if(!isset($_SESSION['id'])){  ?>
<footer>
	<div class="container">
		<div class="row" >
			<div class=" col-md-4 col-xs-12" >
				<h3>Information</h3>
				<ul>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>My Account</h3>
				<ul>
					<li ><a  data-toggle="modal" data-target="#login">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>Contact Us</h3>
				<ul>
					<li>+91-123-0000000</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<nav class="footer-copyright">
	<div class="container-fluid" style="background-color: black; color: #888">
		<p><center>Copyright © E-Store. All Rights Reserved | Contact Us: +91 9878924309 | Developed By:  Akhilesh Yadav | <a href="mailto:akhilesh.yadav200093@gmail.com">akhilesh.yadav200093@gmail.com</a></center></p>
	</div>
</nav>

<?php require 'login_modal.php'; ?>

<?php } ?>