<?php
$username=$_POST['uname'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['mail'];
$dob=$_POST['dob'];
$password=md5($_POST['pword']);

$connect=mysqli_connect("localhost","root","")or die(mysqli_error());
 if (!$connect) {
 	echo "Not connected";
 }else{
 	mysqli_select_db($connect,"young_farmers");

 	$query="INSERT INTO `yfa_table`(`username`, `fname`, `lname`, `email`, `dob`, `password`) VALUES ('$username','$firstname','$lastname','$email','$dob','$password')";

 	$execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
 	if (!$execute) {
 		mysqli_error($connect);
 	}

 	$select_query="SELECT * FROM `yfa_table` WHERE `username`='$username' AND `email`='$email' AND `password`='$password'";

 	$select_execute=mysqli_query($connect,$select_query) or die("select_error");

 	while ($result=mysqli_fetch_array($select_execute)) {
 	 	session_start();
 	 	$_SESSION['uname']=$result['username'];
 	 	$_SESSION['mail']=$result['email'];

 	 	header("Location:dashboard.php");
 	 } 
 }















?>