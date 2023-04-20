<?php
session_start();

$pid=$_POST['pid'];
$price=$_POST['price'];

$email=$_SESSION['email']?: null;
$name=$_SESSION['name']?: null;

//$name = $_POST['record["p_name"]'];

require_once("connection.php");
	
	$sql = "INSERT INTO wishlist(email,product,p_id,price) VALUES('$email','$name','$pid','$price')";
	$run = mysqli_query($con,$sql)//or die(header('location:home.php?msg=Could not registered'));
	or die(mysqli_error($con));
	
	
	header('location:category1.php?msg=Successfully Add To Wishlist ');
	
?>