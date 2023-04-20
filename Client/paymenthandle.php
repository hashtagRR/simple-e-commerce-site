<?php

session_start();
$email=$_SESSION['email']?: null;

$r=session_id();

require_once("connection.php");
	
	if (isset($_POST['payment']))
	{
        $d1 = $_POST['payment'];
		$sql="UPDATE order_detaills SET payment_method='$d1' WHERE session_id='$r'";
		
		$run = mysqli_query($con,$sql) or die(header('location:payment.php?msg=Could not registered'));
		//or die(mysqli_error($con));
	
	
    }
header('location:order_overview.php?msg=Set payment method successfully');

?>