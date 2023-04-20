<?php		

session_start();
	$fname = $_POST['fname'];
	$lname= $_POST['lname'];
	$comp = $_POST['company'];
	$add= $_POST['add'];
	$tp = $_POST['tp'];
	
 $email=$_SESSION['email']?: null;

	//Import a file
	require_once("connection.php");
	
	
	$sql ="UPDATE cus_profile SET fname='$fname',lname='$lname',company='$comp',address='$add',tp='$tp' WHERE email='$email'";
	$run = mysqli_query($con,$sql)//or die(header('location:profile.php?msg=Could not saved personal details '));
	or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("successfully Changed Personal Details");'; 
			echo 'window.location.href = "profile.php";';
			echo '</script>';
	
?>

