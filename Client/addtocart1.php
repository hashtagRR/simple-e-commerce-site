<?php
session_start();

$pid=$_POST['pid'];
$qty=$_POST['qty'];

$pro_details = array("pid"=>$pid, "qty"=>$qty );

$_SESSION ['cart'][]=$pro_details;

//header('location:category1.php');

header('location:category1.php');

/*
echo "<table border = 1>";
foreach($_SESSION['cart'] as $item)
{

	echo "<tr>";
	echo "<td>".$item["pid"]."</td>";
	echo "<td>".$item["qty"]."</td>";
	echo "</tr>";
}
echo "</table>";

*/

?>