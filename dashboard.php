<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		
	</style>
</head>
<body>

	<?php
	include 'nav.php';
	?>

	<?php
	session_start();
	$username=$_SESSION['uname'];
	$email=$_SESSION['mail'];
	?>

	<div class="jumbotron">
		<h3>Welcome <?php echo $username?></h3>

		<?php
		include "connect.php";
		?>

	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>DOB</th>

				</tr>
			</thead>
			<tbody>
				<?php
    $query="SELECT * FROM `yfa_table`";
	$execute=mysqli_query($connect,$query)or die(mysqli_error($connect));
	while ($result=mysqli_fetch_array($execute)) {
				?>

					<tr>
						<td><?php echo $result['username']; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td><?php echo $result['dob']; ?></td>
					<?php
				}


				?>
			</tr>
				
			</tbody>
			
		</table>
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
<div class="copy-right text-center"style="background-color:#006E4B;">
  YFA| &copy;2016-2018 | All Rights Reserved
</div>
</footer>

</body>
</html>