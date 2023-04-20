<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}

if (isset($_SESSION['cart']))
{
$order_total = $_SESSION['total']?: null;
$delivery = $_SESSION['delivery']?: null;
$tax = $_SESSION['tax']?: null;
$net_total = $_SESSION['net_total']?: null;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ckeckout (Payment)</title>
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
   
    <li><a href="client_home.php">Home</a></li>
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
 <ul class="breadcrumb">
                        <li><a href="client_home.php">Home</a>
                        </li>
                        <li><a href="cart.php">Cart</a></li>
						<li><a href="address.php">Checkout 2</a></li>
						<li><a href="delivery.php">Checkout 3</a></li>
						<li>Checkout 3</li>
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
                             <h2 class="panel-title">Checkout</h2>
						</div>
							<div class="panel-body">
							
							<ul class="nav nav-tabs">
    <li ><a href="address.php" class="glyphicon glyphicon-map-marker"><br/>Address</a></li>
    <li ><a href="delivery.php" class="glyphicon glyphicon-plane"><br/>Delivery Method</a></li>
    <li class="active"><a href="#"class="glyphicon glyphicon-usd"><br/>Payment Method</a></li>
    <li ><a href="#"class="glyphicon glyphicon-eye-open"><br/>Order Review</a></li>
  </ul>
  <br/>
  
  <form action="paymenthandle.php" method="POST">
							<div class="row">
							<div class="col-sm-6">
                                        <div class="box shipping-method">
                                            <h4>Paypal or Payoneer      <input type="radio" name="payment" value="Paypal or Payoneer"></h4>  																							
											<p>(We recamond this as a safest online paymet methods)</p>
                                            <br/><br/>
											<h4>Payment Gateways     <input type="radio" name="payment" value="Payment Gateways"></h4>                            
											<p>(Visa,American Express and Master cards)</p>
											<br/><br/>
                                            <h4>Cash on delivery      <input type="radio" name="payment" value="Cash on delivery"></h4>                            
											<p>(You pay after the delivery)</p>
                                          
                                            
                                        </div>
                                    </div>
							</div>
							<div class="box-footer">
                               
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary" >Continue to Order Overview<i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
							 </form> 
							
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
							<p class="text-muted">Delivery and additional costs calculations are based on the total cost of goods you have purchased.</p>

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

  </body>
</html>