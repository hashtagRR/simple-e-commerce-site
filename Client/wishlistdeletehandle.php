<?php
session_start();


$id = $_POST['id'];

require_once("connection.php");
	
	$sql = "DELETE FROM wishlist WHERE id=$id";
	$run = mysqli_query($con,$sql)//or die(header('location:wishlist.php?msg=Could not registered'));
	or die(mysqli_error($con));
	
	
	header('location:wishlist.php?msg=Successfully deleted from wishlist ');
	
?>