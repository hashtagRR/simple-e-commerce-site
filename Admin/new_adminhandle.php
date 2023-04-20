<?php
	session_start();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pw= $_POST['pass1'];
	$add = $_POST['address'];
	$staffid = $_POST['staffid'];
	$nic = $_POST['nic'];
	$tp= $_POST['tp'];
	
	$pw=md5($pw);
	

	//Import a file
	require_once("connection.php");
	
	$sql = "INSERT INTO admin_profile(fname,lname,email,staffid,nic,address,tp) VALUES('$fname','$lname','$email','$staffid','$nic','$add','$tp')";
	$run = mysqli_query($con,$sql)//or die(header('location:home.php?msg=Could not registered'));
	or die(mysqli_error($con));
	
	$sql = "INSERT INTO admin_pw(email,password) VALUES('$email','$pw')";
	$run = mysqli_query($con,$sql)//or die(header('location:admin_profile.php?msg=Could not registered'));
	or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("New admin successfuly added");'; 
			echo 'window.location.href = "admin_home.php";';
			echo '</script>';
	
	//header('location:home.php?msg=Registration Successfull');
?>
