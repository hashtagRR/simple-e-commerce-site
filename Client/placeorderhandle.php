<?php
session_start();
$email=$_SESSION['email']?: null;
$name=$_SESSION['name'];
$add=$_SESSION['address'];
$comp=$_SESSION['company'] ;
$tp	=$_SESSION['tp'];
$del=$_SESSION['delivery_method'] ;
$pay=$_SESSION['payment_method'] ;


require_once("connection.php");
	
	$sql = "INSERT INTO orders(email,name,address,company,tp,delivery_method,payment_method) VALUES ('$email','$name','$add','$comp','$tp','$del','$pay')";
	$run = mysqli_query($con,$sql)or die(header('location:order_overview.php?msg=Could not registered'));
	//or die(mysqli_error($con));
	
	
	
	header('location:order_overview.php?msg=Set location successfully');

?>