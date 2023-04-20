<?php
session_start();

if(!isset($_SESSION['email_admin']))
	{
		die("You are not logged in");
	}

require_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>

<div class="container">

  <img class="animated bounce infinite" src="img/logo.png">
  
  <ul class="nav nav-pills" role="tablist">
   
    <li class="active"><a href="admin_home.php">Home</a></li>
	 <li><a href="admin_profile.php">Profile</a></li>
	 <li><a href="new_admin.php">Add New Admin</a></li>
	  <li><a href="new_product.php">Add New Product</a></li>
	   <li><a href="client_detail.php">Client Details</a></li>
	    <li><a href="category.php">Our Products</a></li>
	 <form class="navbar-form" action="search.php" method="post" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="product">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>

		    </span>
                    </div>
                </form>
	
  </ul>
</div>
  <h1></h1>
  
  
 <div class="col-sm-6"style="width:100%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Recent Order Details</h2>
						</div>
							<div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>Order ID</th>
											<th>Client's email</th>
											<th>Reciever's Name</th>
                                            <th>Reciever's Address</th>
                                            <th>Reciever's Company</th>
											<th>Reciever's TP</th>
                                            <th>Delivery Method</th>
											<th>Payment Method</th>
											<th>Total</th>
                                            
                                        </tr>
                                    </thead>
									
									
									
	<?php		
		
$sql = "SELECT * FROM order_detaills";
$run = mysqli_query($con,$sql)or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
$nor = mysqli_affected_rows($con);

	if($nor > 0)
						
	{	
			while($record = mysqli_fetch_array($run))
			{
				?>
		  
                                    <tbody>
                                        <tr>
                                            
                                            <td><?php echo $record["id"]; ?></td>
                                            <td><?php echo $record["email"]; ?></td>
                                            <td><?php echo $record["name"]; ?></td>
                                            <td><?php echo $record["address"]; ?></td>
                                            <td><?php echo $record["company"]; ?></td>
											<td><?php echo $record["tp"]; ?></td>
											<td><?php echo $record["delivery_method"]; ?></td>
											<td><?php echo $record["payment_method"]; ?></td>
											<td><?php echo $record["total"]; ?></td>
											
											<form action="orderdelete_handle.php" method="post">
											<td><input type="submit" class="btn-danger" value="Delete" ></td>
											<input type="hidden" name="id" value="<?php echo $record["id"]; ?>"/>
                                           
                                            </form>
											
											</td>
                                        </tr>
                                        
                                    </tbody>
									
									
								<?php	
		
									$_SESSION['id'] = $record["id"];
		
									}
	}
		
else
{
	echo "No order requests are avilible at the moment ";
}

?>	
								
                                </table>

                            </div>
							 
							 
							</div>
                    </div>
              

	<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">	&#169 2016 Miracle Makers Web Solutions   (All Rights Reserved)</div>
  </div>
</div>
  
  
  
  
  
  
</body>
</html>




