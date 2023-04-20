<?php

session_start();
$email=$_SESSION['email']?: null;

$r=session_id();


require_once("connection.php");
	
	if (isset($_POST['delivery']))
	{
        $d1 = $_POST['delivery'];
		$sql="UPDATE order_detaills SET delivery_method='$d1' WHERE session_id='$r'";
		//$sql="INSERT INTO order_detaills (delivery_method) VALUES ('$d1') WHERE email=$email"; 
		$run = mysqli_query($con,$sql)or die(header('location:home.php?msg=Could not registered'));
		//or die(mysqli_error($con));
	
    }
	header('location:payment.php?msg=Set delivery method successfully');

/*	
$checkBox = $_POST['Delivery'];

if(isset($_POST['submit']))
{
    for ($i=0; $i<sizeof($checkBox); $i++)
        {
            $query="INSERT INTO order_detaills (delivery1,delivery3,delivery3) VALUES ('" . $checkBox[$i] . "') WHERE email=$email";     

            mysqli_query($query) or die (mysqli_error() );
        }
    echo "Complete";

}
*/
?>