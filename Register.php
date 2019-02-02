<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			overflow-x: hidden;
			background-color: ; 
		}
	</style>
</head>
<body>

<?php
include 'nav.php';
?>

	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">
			<div class="container">
				<div class="card">
					<div class="flex-center card-header text-success bg-default text-center">
						<h3><strong>Sign Up</strong></h3></div>
						<div class="card-body">
							<form method="post" action="reg.php">
							<div class="form-group">
								<label for="user">Username:</label>
								<input type="text" class="form-control" name="uname" id="user" placeholder="username" required="">
							</div>

							<div class="form-group">
								<label for="fname">First Name:</label>
								<input type="text" class="form-control" name="fname" id="fname" placeholder="first Name" required="">
							</div>

							<div class="form-group">
								<label for="lname">Last Name:</label>
								<input type="text" class="form-control" name="lname" id="lname" placeholder="last Name" required="">
							</div>

							<div class="form-group">
								<label for="email">Email Adddres:</label>
								<input type="text" class="form-control" name="mail" id="email" placeholder="name@mail.com" required="">
							</div>

							<div class="form-group">
								<label for="DOB">Date Of Birth:</label>
								<input type="date" class="form-control" name="dob" id="DOB" placeholder="dd/mm/yyy" required="">
							</div>

							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pword" id="pass" placeholder="...password96" required="">
							</div>
							
							<button type="submit" class="btn btn-danger">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
							<p class="message">You already have an account? <a href="Login.php">Login</a></p>
							
						</form>
						</div>
				</div>
			</div>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>
	<footer class="fixed-bottom"  style="background-color: #009834;margin-top: 10px;">
  <div class="row">
    <div class="col-md-4">
      <div class="container">
        <h5 style="color: #FFFFFF"><u>Social</u></h5>
        <li class="fa fa-facebook">
            <a href="https://facebook.com/YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Facebook</span>
            </a>
          </li>
          <li class="fa fa-twitter">
            <a href="https://twitter.com/YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Twitter</span>
            </a>
          </li>
          <li class="fa fa-instagram">
            <a href="https://gmail.com/YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Gmail</span>
            </a>
          </li>


      </div>
      
    </div>

    <div class="col-md-4">
      <div class="container">
       <h5 style="color: #FFFFFF"><u>Important</u></h5>
         <li><a href="About us.html"><span style="color: #000000">About Us</a></li>
        <li><a href="Services.html"><span style="color: #000000">Services</a></li>
        <li><a href="Membership.html"><span style="color: #000000">Membership</a></li>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="container" style="margin-left: 7em">
        <h5 style="color: #FFFFFF"><u>Terms</u></h5>
        <li><a href="conditions.html"><span style="color: #000000">Conditions</span></a></li>
        <li><a href="FAQs.html"><span style="color: #000000">FAQs</span></a></li>
        <li><a href="silc_policy.html"><span style="color: #000000">SILC policy</span></a></li>
      </div>
      
    </div>
  </div>
<hr style="margin: 0px;padding: 0px">
<div class="copy-right text-center"style="background-color:#019968;">
  YFA| &copy;2016-2018 | All Rights Reserved
</div>
</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
</body>
</html>