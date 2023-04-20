<?php
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
$sql = "INSERT INTO product(p_name,p_price,p_type,p_pic) VALUES('$pname','$price','$d1','$file_name')";
		$run = mysqli_query($con,$sql)//or die(header('location:home.php?msg=Could not registered'));
		or die(mysqli_error($con));
	
	
	//echo "$file_name";
/*
// Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $product_image))
{

// Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}


*/




















/*

session_start();

	$pname = $_POST['pname'];
	$price = $_POST['price'];
	 $d1 = $_POST['radio'];
	
	$product_image=$_FILES['product_image']['name'];
	$product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		//moving image file to the product image folder
		move_uploaded_file($product_image_tmp,"img/$product_image");
	
	
	require_once("connection.php");
	
	
	
		$sql = "INSERT INTO product(p_name,p_price,p_type,p_pic) VALUES('$pname','$price','$d1','$product_image')";
		$run = mysqli_query($con,$sql)//or die(header('location:home.php?msg=Could not registered'));
		or die(mysqli_error($con));
	
  */
	
	header('location:new_product.php?msg=Product added successfully');
}
































/*
// Check for errors
if($_FILES['file_upload']['error'] > 0){
    die('An error ocurred when uploading.');
}

if(!getimagesize($_FILES['file_upload']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}

// Check filetype
if($_FILES['file_upload']['type'] != 'image/png'){
    die('Unsupported filetype uploaded.');
}

// Check filesize
if($_FILES['file_upload']['size'] > 500000){
    die('File uploaded exceeds maximum upload size.');
}

// Check if the file exists
if(file_exists('upload/' . $_FILES['file_upload']['name'])){
    die('File with that name already exists.');
}

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'upload/' . $_FILES['file_upload']['name'])){
    die('Error uploading file - check destination is writeable.');
}

die('File uploaded successfully.');
*/
?>