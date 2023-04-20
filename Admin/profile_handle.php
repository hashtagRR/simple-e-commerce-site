<?php		

	session_start();
	$fname = $_POST['fname'];
	$lname= $_POST['lname'];
	$add= $_POST['address'];
	$tp = $_POST['tp'];
	$stfid = $_POST['stfid'];
	$nic = $_POST['nic'];

	$email=$_SESSION['email']?: null;

	//Import a file
	require_once("connection.php");
	
	
	$sql ="UPDATE admin_profile SET fname='$fname',lname='$lname',address='$add',tp='$tp',staffid='$stfid',nic='$nic' WHERE email='$email'";
	$run = mysqli_query($con,$sql)or die(header('location:profile.php?msg=Could not saved personal details '));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("successfully Changed Personal Details");'; 
			echo 'window.location.href = "admin_profile.php";';
			echo '</script>';
	
?>

