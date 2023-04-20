<?php
	session_start();

	//Connect to database
	require_once("connection.php");	
		
	//Use escape strings to prevent SQL injections
	$name = mysqli_real_escape_string($con,$_POST['email1']);
	$pw = mysqli_real_escape_string($con,$_POST['password1']);
 
	//Check if the connection is success
	if(!$con)
	{
		die("Could not connect to database"); //Error if connection was not established
	}
	
	//sql statement to check if a record exists with the provied username and password
	$sql = "SELECT * FROM pw WHERE email='$name' AND password='$pw'";
	$run = mysqli_query($con,$sql);


	//check if the query is run successfully
	if(!$run)
	{
		die(mysqli_error($con)); //Error if sql could not be run
	}

	//Check if the query returns any records
	if(mysqli_num_rows($run) > 0)
	{	
		//Put the returned record into an array called $rec
		$rec = mysqli_fetch_array($run);
	
		//Create session variables
		$_SESSION['email'] = $rec['email']; //or $rec[1]
		$_SESSION['password'] = $rec['password']; //or $rec[2] 
		
		
		//redirect user to home page
		header('location:client_home.php');
	} 
	else
	{
		//Check ifenterd details are macthing with database rows
		$Query_username ='email';
		$Query_pswd = 'password';

		$userName = $_POST['email1'];
		$pswd = $_POST['password1'];

		if(($userName !==$Query_username) && ($pswd !== $Query_pswd)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Username and/or Password incorrect.\\nTry again.");'; 
			echo 'window.location.href = "index_client.php";';
			echo '</script>';
		}
		
		
	}
?>















