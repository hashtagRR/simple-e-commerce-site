<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}

$email=$_SESSION['email']?: null;	
	
$r=session_id();	
	
require_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
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
<h1></h1>





    </div>  
    </div> 



 <div class="container">
    <div class="row">
	
	
	<div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Shopping Cart</h2>
						</div>
							<div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount (%5)</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
									
									
									
	<?php
									
		


if (isset($_SESSION['cart']))
{
	$total=0;
	foreach($_SESSION['cart'] as $item)
		{
			$sql="SELECT * FROM product WHERE p_id='".$item['pid']."'";
			$run=mysqli_query( $con,$sql) or die("Record not found");
			$record = mysqli_fetch_array($run);
			
			
		$subtotal =$record['p_price']*$item['qty'];
		$total =$total+$subtotal;	
		
		$discount=$total*0.05;
		$pramotion=$subtotal-$discount;
							

								
		
			
			 
			?>
				
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img src="" alt=""></a></td>
                                            <td><?php echo $record["p_name"]; ?><a href="#"></a></td>
                                            <td><?php echo $item["qty"]; ?></td>
                                            <td><?php echo $record["p_price"]; ?></td>
                                            <td><?php echo "$"."$discount";?></td>
                                            <td><?php echo "$"."$pramotion";?></td>
                                            
                                            </td>
                                        </tr>
                                        
                                    </tbody>
									
								<?php	
		
		//$save = "INSERT INTO cart(session_id,email,product,qty,price) VALUES('$r','$email','$$record['p_name']','$item['qty']','$pramotion')";

		}
		$sub_discount=$total*0.5;
		$order_total=$total-$sub_discount;
		$tax=$total*0.02;
		$delivery=$total*0.01;
		$net_total=$total+($tax+$delivery);
		
		$_SESSION['total'] = $total;
		$_SESSION['delivery'] = $delivery;
		$_SESSION['tax'] = $tax;
		$_SESSION['net_total'] = $net_total;
}
		

		
else
{
	echo "No items in the cart yet <a href='category1.php'>Add items to the cart</a>";
}

?>	
								
                                </table>

                            </div>
							 
							 
							  <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category1.php" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Update basket</button>
                                    <button type="submit" class="btn btn-primary" onclick="location.href = 'address.php';">Proceed to checkout <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
							
							</div>
                    </div>
                </div>  
        

		
		 <div class="col-sm-6"style="width:30%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Order Summary</h2>
						</div>
							<div class="panel-body">
							<p class="text-muted">Delivery and additional costs are calculated based on the total cost of goods you have purchased.</p>
<?php
									
		


if (isset($_SESSION['cart']))
{
	?>
						
							<div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th><?php echo "$"."$total";?></th>
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