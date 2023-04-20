<?php
session_start();

$id=$_POST['id'];

//$name = $_POST['record["p_name"]'];

require_once("connection.php");
	
	$sql = "DELETE FROM cus_profile WHERE id='$id'";
	$run = mysqli_query($con,$sql)//or die(header('location:home.php?msg=Could not registered'));
	or die(mysqli_error($con));
	
	
	header('location:client_detail.php?msg=Successfully deleted the client profile ');


?>