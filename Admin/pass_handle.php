<?php

session_start();
	
	$email = $_POST['email'];
	$pwold = $_POST['password_old'];
	$pw1 = $_POST['pass1'];


	//Import a file
	require_once("connection.php");
	$check="SELECT * FROM admin_pw WHERE email='$email' AND password='$pwold' ";
	$run = mysqli_query($con,$check)//or die(header('location:profile.php?msg=Could not changed password'));
	or die(mysqli_error($con));
	
	if(mysqli_num_rows($run) > 0)
	{	
		require_once("connection.php");
		$sql ="UPDATE admin_pw SET password='$pw1' WHERE  password='$pwold' AND email='$email'";
		$run = mysqli_query($con,$sql)//or die(header('location:profile.php?msg=Could not changed password'));
		or die(mysqli_error($con));
		
		echo '<script type="text/javascript">'; 
			echo 'alert("Password changed successfully");'; 
			echo 'window.location.href = "admin_profile.php";';
			echo '</script>';
	} 
	else
	{
		$Query_username ='email';
		$Query_pswd = 'password_old';

		$userName = $_POST['email'];
		$pswd = $_POST['password_old'];

		if(($userName !==$Query_username) && ($pswd !== $Query_pswd)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Email and/or old password incorrect.\\nTry again.");'; 
			echo 'window.location.href = "admin_profile.php";';
			echo '</script>';
			 
			 
			 
			//header('location:index.php');
		}
		
		
	}
?>

