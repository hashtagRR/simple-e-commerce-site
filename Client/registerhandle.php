<?php
	session_start();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$comp = $_POST['comp'];
	$pw= $_POST['pass1'];
	$add = $_POST['address'];
	$tp= $_POST['telephone'];
	
	

	//Import a file
	require_once("connection.php");
	
	$sql = "INSERT INTO cus_profile(fname,lname,email,company,address,tp) VALUES('$fname','$lname','$email','$comp','$add','$tp')";
	$run = mysqli_query($con,$sql)or die(header('location:index_client.php?msg=Could not registered'));
	//or die(mysqli_error($con));
	
	$sql = "INSERT INTO pw(email,password) VALUES('$email','$pw')";
	$run = mysqli_query($con,$sql)or die(header('location:index.php?msg=Could not registered'));
	//or die(mysqli_error($con));
	echo '<script type="text/javascript">'; 
			echo 'alert("Registration seccessfull");'; 
			echo 'window.location.href = "client_home.php";';
			echo '</script>';
	
	
?>
