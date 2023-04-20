<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}
	require_once('connection.php');
	$email=$_SESSION['email']?: null;
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Orders</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
   
   <style>
        .panel-resizable {
            resize: vertical;
          overflow: auto
        }
    </style>
</head>
<body>

<div class="container">

  <img class="animated bounce infinite" src="img/logo.png">
  <ul class="nav nav-pills" role="tablist">
   
    <li ><a href="client_home.php">Home</a></li>
	 <li class="active"><a href="profile.php">Profile</a></li>
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nutritions For Diabetic<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
	  
	    <li><a href="category1.php" >Vitamins</a>	<ul>
                                            <li><a href="category1.php" >Vitamin A</a></li>    
											<li><a href="category1.php" >Vitamin B</a></li>    
											<li><a href="category1.php">Vitamin C</a></li>    
											<li><a href="category1.php">Vitamin D</a></li>    								
											<li><a href="category1.php">Vitamin E</a></li>    
											<li><a href="category1.php">Vitamin K</a></li>    
											<li><a href="category1.php">Omega 3</a></li>    
                                        </ul>     
		</li>                                  
										
	  
        <li><a href="category2.php" name="Minerals">Minerals</a> 	<ul>
                                            <li><a href="category2.php" name="Minerals">Gymnema Sylvestre Tea</a></li>    
											<li><a href="category2.php">Bitter Melon</a></li>    
											<li><a href="category2.php">Prickly Pear Cactus</a></li>    
											<li><a href="category2.php">Gamma-Linolenic Acid </a></li>    
											<li><a href="category2.php">Billberry</a></li>    
											<li><a href="category2.php">Alpha-Lipoic Acid</a></li>    
											<li><a href="category2.php">Green Tea</a></li>    
                                        </ul>
		</li>    
											
        <li><a href="category3.php">Herbal Products</a> <ul>
                                                <li><a href="category3.php">Calcium</a></li>    
												<li><a href="category3.php">Chromium</a></li>    
												<li><a href="category3.php">Copper</a></li>    
												<li><a href="category3.php">Iron</a></li>    
												<li><a href="category3.php">Potassium</a></li>    
												<li><a href="category3.php">Zinc</a></li>    
                                            </ul>									
      
		</li>  
	</ul> 		
	</li>    		
	  
	
	  <a href="cart.php" class="btn btn-info btn-lg" style="float:right;">
      <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
	
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

 <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="client_home.php">Home</a>
                        </li>
                        <li>My orders</li>
                    </ul>
                </div>



    </div>  
    </div> 



 <div class="container">
    <div class="row">
	
	
	<div class="col-sm-6"style="width:30%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">My account</h2>
						</div>
							<div class="panel-body">
							
							
							 <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer_orders.php"><i class="glyphicon glyphicon-menu-hamburger"></i> My orders</a>
                                </li>
                                <li  >
                                    <a href="wishlist.php"><i class="glyphicon glyphicon-heart"></i> My wishlist</a>
                                </li>
                                <li >
                                    <a href="profile.php"><i class="glyphicon glyphicon-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                                </li>
                            </ul>
							
							</div>
                    </div>
                </div>  
        

		
		<div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">My orders</h2>
						</div>
							<div class="panel-body">
							<p>All orders you have purchased since you are member of this site is listed below</p>
							<p class="text-muted">If you have any questions, please feel free to <p>
<a href="mailto:Zeus@gmail.com?Subject=Hello%20again" target="_top">Contact US</a>
</p>, our customer service center is working for you 24/7.</p>

							
							<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
											<th>Reciever's name</th>
											<th>Recievers address</th>
											<th>Totla price</th>
											 
                                   
                                            <th></th>
                                                                                        
                                        </tr>
                                    </thead>
									
									
		<?php							
$sql = "SELECT * FROM order_detaills";
$run = mysqli_query($con,$sql)or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
$nor = mysqli_affected_rows($con);

	if($nor > 0)
						
	{	?>
			<?php
			while($record = mysqli_fetch_array($run))
			{
				?>
				
                                    <tbody>
                                        <tr>
										
                                        <td><?php echo $record["id"]; ?></td>
										<td><?php echo $record["name"]; ?></td>
										<td><?php echo $record["address"]; ?></td>
                                        <td><?php echo "$".$record["total"];?></td>
                                       
                                        </tr>
                                        
                                    </tbody>
									
								<?php	
		
		

		}
	
}
		

		
else
{
	echo "No items in your wishlist <a href='category1.php'>Add items to the wishlist</a>";
}

?>	
								
                                </table>

                            </div>
							 
							 
							  <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category1.php" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> Continue shopping</a>
                                </div>
                                
                            </div>
							
							</div>
                    </div>
		
	
        
                     
        </div>
    </div>  
    </div>              






























                           

  </body>
</html>