<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}
$r=session_id();
require_once('connection.php');

$email=$_SESSION['email']?: null;

if (isset($_SESSION['cart']))
{
$order_total = $_SESSION['total']?: null;
$delivery = $_SESSION['delivery']?: null;
$tax = $_SESSION['tax']?: null;
$net_total = $_SESSION['net_total']?: null;
}

$sql="SELECT * FROM order_detaills WHERE session_id='$r'";
				$run=mysqli_query( $con,$sql) or die("Record not found");
				$record = mysqli_fetch_array($run);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Ckeckout (order overview)</title>
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
	 <li><a href="profile.php">Profile</a></li>
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
<h3></h3>

<div class="col-md-12">      
	  <ul class="breadcrumb">
                        <li><a href="home.php">Home</a>
                        </li>
                        <li><a href="cart.php">Cart</a></li>
						<li><a href="address.php">Checkout 1</a></li>
						<li><a href="delivery.php">Checkout 2</a></li>
						<li><a href="payment.php">Checkout 3</a></li>
						<li>Checkout 4</li>
                    </ul>
                </div>



    </div>  
    </div> 



 <div class="container">
  <div class="row">
	
	
	<div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Order overview</h2>
						</div>
							<div class="panel-body">
							
							<?php
							
if (isset($_SESSION['cart']))
{
	?>
							<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Reciever's name</th>
                                            <th>Reciever's address</th>
                                            <th>Reciever's company</th>
                                            <th>Reciever's telephone no</th>
											<th>Delivery method</th>
                                            <th >payment method</th>	
										</tr>
                                    </thead>
	
				<?php
				
				
			
							
				?>
                                    <tbody>
                                        <tr>
                                           
                                            <td><?php echo $record["name"]; ?></td>
                                            <td><?php echo $record["address"]; ?></td>
											<td><?php echo $record["company"]; ?></td>
                                            <td><?php echo $record["tp"]; ?></td>
                                            <td><?php echo $record["delivery_method"];?></td>
                                            <td><?php echo $record["payment_method"];?></td>
                                          
                                           
                                        </tr>
                                        
                                    </tbody>
									
												
                                  
                                </table>

                            </div>
							 
							 <?php 
					   }						
else
{
	echo "No items in the cart yet <a href='category1.php'>Add items to the cart</a>";
}

?>
							 
							 
							 
							  <div class="box-footer">
                                <div class="pull-left">
                                   
                                    <button type="cancel" class="btn btn-primary" onclick="location.href = 'order_overview.php';">Place order <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
								<div class="pull-right">
                                   
                                    <button type="submit" class="btn btn-primary" onclick="location.href = 'orderhandle.php';">Place order <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
							
							</div>
                    </div>
                </div> 
        
<?php
		$_SESSION['name'] = $record["name"];
		$_SESSION['address'] = $record["address"];
		$_SESSION['company'] = $record["company"];
		$_SESSION['tp'] =$record["tp"];
		$_SESSION['delivery_method'] = $record["delivery_method"];
		$_SESSION['payment_method'] = $record["payment_method"];


?>
		 
		<div class="col-sm-6"style="width:30%;>
                 <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Order Summary</h2>
						</div>
							<div class="panel-body">
							<p class="text-muted">Delivery and additional cost calculations are based on the total cost of goods you have purchased.</p>

						
							<?php
									
		


if (isset($_SESSION['cart']))
{
	?>
						
							<div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th><?php echo "$"."$order_total";?></th>
                                    </tr>
                                    <tr>
                                        <td>Delivering and handling</td>
                                        <th><?php echo "$"."$delivery";?></th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th><?php echo "$"."$tax";?></th>
                                    </tr>
                                    <tr >
                                        <td><strong>Total<strong></td>
                                        <th><?php echo "$"."$net_total";?></th>
                                    </tr>
                                </tbody>
                            </table>
                       </div>
<?php 
					   }						
else
{
	echo "No items in the cart yet <a href='category1.php'>Add items to the cart</a>";
}

?>	
							
							
							</div>
                    </div>
                     
        </div>
    </div>  
    </div>              

  </body>
</html>