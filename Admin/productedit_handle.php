<?php
session_start();

$id = $_SESSION['id']?: null;
if(isset($_POST['btn_upload']))
	
{
// This is the directory where images will be saved
$file_temp=$_FILES['product_image']['tmp_name'];
$file_name=$_FILES['product_image']['name'];
$file_path="img/".$file_name;

move_uploaded_file($file_temp,$file_path);

// This gets all the other information from the form
$pname = $_POST['pname'];
$price = $_POST['price'];
$d1 = $_POST['radio'];
	


// Connects to your Database
require_once("connection.php");

// Writes the information to the database
		$sql = "UPDATE product SET p_name='$pname',p_price='$price',p_type='$d1',p_pic='$file_name' WHERE p_id='$id' ";
		$run = mysqli_query($con,$sql)or die(header('location:category.php?msg=Could not registered'));
		//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("successfully Changed product details");'; 
			echo 'window.location.href = "category.php";';
			echo '</script>';
	
}
























/*



	//Import a file
	require_once("connection.php");
	$check="SELECT * FROM pw WHERE email='$email' AND password='$pwold' ";
	$run = mysqli_query($con,$check)//or die(header('location:profile.php?msg=Could not changed password'));
	or die(mysqli_error($con));
	
	//header('location:home.php?msg=Successfully Saved');

	if(mysqli_num_rows($run) > 0)
	{	
		require_once("connection.php");
		$sql ="UPDATE pw SET password='$pw1' WHERE email='$email'";
		$run = mysqli_query($con,$sql)//or die(header('location:profile.php?msg=Could not changed password'));
		or die(mysqli_error($con));
		
		echo '<script type="text/javascript">'; 
			echo 'alert("Product details edited successfully");'; 
			echo 'window.location.href = "profile.php";';
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
			echo 'alert("Unable to edit product details .\\nTry again.");'; 
			echo 'window.location.href = "profile.php";';
			echo '</script>';
			 
			 
			 
			//header('location:index.php');
		}
		
		
	}*/
	
	?>

