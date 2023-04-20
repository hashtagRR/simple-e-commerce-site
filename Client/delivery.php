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
  <title>Ckeckout (Delivery)</title>
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
	 <li class="active"><a href="profile.php">Profile</a></li>
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nutritions For Diabetic<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
	  
	    <li ><a href="category1.php" >Vitamins</a>	<ul>
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
	  
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Protien Products<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Whey</a></li>
        <li><a href="#">Casaine</a></li>
        <li><a href="#">Egg</a></li>
		<li><a href="#">Soy</a></li>
		<li><a href="#">Blended</a></li>
      </ul>
    </li>   
	  
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Health & Wellness<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Diet Products</a></li>
        <li><a href="#">Spacialy Items</a></li>
        <li><a href="#">Multi Vitamine</a></li>
      </ul>
    </li>
	
	  <a href="cart.php" class="btn btn-info btn-lg" style="float:right;">
      <span class="glyphicon glyphicon-shopping-cart" style="border:5px:"></span> Shopping Cart</a>
	
  </ul>
</div>
<h1></h1>
<div class="col-md-12">      
	  <ul class="breadcrumb">
                        <li><a href="client_home.php">Home</a>
                        </li>
                        <li><a href="cart.php">Cart</a></li>
						<li><a href="address.php">Checkout 1</a></li>
						<li>Checkout 2</li>
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
    <li class="active"><a href="#" class="glyphicon glyphicon-plane"><br/>Delivery Method</a></li>
    <li><a href="#"class="glyphicon glyphicon-usd"><br/>Payment Method</a></li>
    <li><a href="#"class="glyphicon glyphicon-eye-open"><br/>Order Review</a></li>
  </ul>
  <br/>
								<form action="deliveryhandle.php" method="POST">
							<div class="row">
							<div class="col-sm-6">
							
                                        <div class="box shipping-method">
                                            <h4>Next Day      <input type="radio" name="delivery" value="Next Day"></h4>  																							
											<p>(Our delivery agents will make sure to hand out the order within tomorrow.But this will include extra delivry cost than usual)</p>
                                            <br/><br/>
											<h4>Within 3 days     <input type="radio" name="delivery" value="Within 3 days"></h4>                            
											<p>(Our delivery agents will make sure to hand out the order within a week.)</p>
											<br/><br/>
                                            <h4>Within a week      <input type="radio" name="delivery" value="Within a week"></h4>                            
											<p>(Our delivery agents will make sure to hand out the order within a week.If not money back gurantee)</p>
                                          
                                        </div>
                                    </div>
							</div>
							
							
							
							
							<div class="box-footer">
                               
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Payment Method<i class="glyphicon glyphicon-chevron-right"></i>
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