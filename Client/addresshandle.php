<?php
session_start();
$email=$_SESSION['email']?: null;

$r=session_id();

$name=$_POST['rcname'];
$comp=$_POST['rccompany'];
$add=$_POST['rcaddress'];
$rctp=$_POST['rctp'];

$net_total = $_SESSION['net_total']?: null;
$_SESSION['location'] = $rcaddress;

require_once("connection.php");
	
	$sql = "INSERT INTO order_detaills(session_id,email,name,address,company,tp,total) VALUES ('$r','$email','$name','$add','$comp','$rctp','$net_total')";
	$run = mysqli_query($con,$sql)or die(header('location:home.php?msg=Could not registered'));
	//or die(mysqli_error($con));
	
	
	
	header('location:delivery.php?msg=Set location successfully');

?>