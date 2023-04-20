<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}

$product=$_POST['product'];

require_once("connection.php");
	

?>


<!DOCTYPE html>
<html>
<head>
  <title>Nutritions For Diabetic</title>
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
	<li class="active" class="dropdown">
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
										
	  
        <li><a href="category2.php" name="Minerals">Herbal Products</a> 	<ul>
                                            <li><a href="category2.php" name="Minerals">Gymnema Sylvestre Tea</a></li>    
											<li><a href="category2.php">Bitter Melon</a></li>    
											<li><a href="category2.php">Prickly Pear Cactus</a></li>    
											<li><a href="category2.php">Gamma-Linolenic Acid </a></li>    
											<li><a href="category2.php">Billberry</a></li>    
											<li><a href="category2.php">Alpha-Lipoic Acid</a></li>    
											<li><a href="category2.php">Green Tea</a></li>    
                                        </ul>
		</li>    
											
        <li><a href="category3.php">Minerals</a> <ul>
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
                        <li><a href="home.php">Home</a>
                        </li>
                        <li>Nutritions For Diabetics</li>
                    </ul>
                </div>
		 
	<div class="container">
    <div class="row">
	
	
	<div class="col-sm-6"style="width:30%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Categories</h2>
						</div>
							<div class="panel-body">
							
							<ul class="nav nav-pills nav-stacked category-menu">
                                                                    <ul>
                                        <li><a href="category1.php">Vitamins</a>	<ul>   
											 <li><a href="category1.php" >Vitamin A</a></li>    
											<li><a href="category1.php" >Vitamin B</a></li>    
											<li><a href="category1.php">Vitamin C</a></li>    
											<li><a href="category1.php">Vitamin D</a></li>    								
											<li><a href="category1.php">Vitamin E</a></li>    
											<li><a href="category1.php">Vitamin K</a></li>    
											<li><a href="category1.php">Omega 3</a></li>      
                                        </ul>     
		</li>                                  
										
	  
        <li><a href="category1.php"></a>Herbal Products<ul>
                                            <li><a href="category2.php">Bitter Melon</a></li>    
											<li><a href="category2.php">Prickly Pear Cactus</a></li>    
											<li><a href="category2.php">Gamma-Linolenic Acid </a></li>    
											<li><a href="category2.php">Billberry</a></li>    
											<li><a href="category2.php">Alpha-Lipoic Acid</a></li>    
											<li><a href="category2.php">Green Tea</a></li>     
                                        </ul>
		</li>    
											
        <li><a href="category1.php">Minerals</a> <ul>
                                                <li><a href="category3.php">Calcium</a></li>    
												<li><a href="category3.php">Chromium</a></li>    
												<li><a href="category3.php">Copper</a></li>    
												<li><a href="category3.php">Iron</a></li>    
												<li><a href="category3.php">Potassium</a></li>    
												<li><a href="category3.php">Zinc</a></li>    
                                            </ul>									
      
		</li>  
                                   

                            </ul>
							
									
							</div>
                    </div>
                </div>  
        

		
		 <div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Buy Now Or Add To Wishlist</h2>
						</div>
							<div class="panel-body">
						
						<?php		
		require_once("connection.php");
$sql = "SELECT * FROM product WHERE p_name='$product'";
$run = mysqli_query($con,$sql)or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
$nor = mysqli_affected_rows($con);

	if($nor > 0)
						
	{	?>
			<?php
			while($record = mysqli_fetch_array($run))
			{
				?>
		  
		
		  <div class="col-md-4 col-sm-6">
						
							
		 <div class="col-md-4 col-sm-6">
                            <div class="product" style="width:200px">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                           
											<img src="../Admin/img/<?php echo $record['p_pic'];?>" alt="" class="img-responsive" style="height:100px">
                                            
                                        </div>
                                      
                                    </div>
                                </div>
                               
							   <a href="detail.html" class="invisible">
								 
                                  </a>
									
									<div class="text">
									
                                    <h3><a href="detail.html"><?php echo $record["p_name"]; ?></a></h3>
                                    <p class="price"><?php echo "$".$record["p_price"]; ?></p>
                                    <p class="buttons">
                                 
		 <div>
		 
		 <?php
		 $_SESSION['name'] = $record['p_name'];
		 ?>
								  
			<form action="addtocart1.php" method="POST">
				
				<input type="hidden" name="pid" value="<?php echo $record["p_id"]; ?>"/>
				<input type="number" name="qty"/>
				<input type='submit' class="btn-primary" value='Add to cart'/>	
					<br/>				
				
			</form>	
			<br/>	
			
			<form action="addtowishlisthandle.php" method="POST">
			<input type="hidden" name="price" value="<?php echo $record["p_price"]; ?>"/>
			<input type="hidden" name="pid" value="<?php echo $record["p_id"]; ?>"/>
			<input type='submit' class="btn-success" value='Add to wishlish'/>	
			</form>
		</div>
                       			
										
										
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        



	
	
			                  

		</div>

        	<?php
	}
	}
	else
	{
		echo "We are sorry. No products are avilible at the moment";
	}
		
    
		?>
                     
        </div>	 
		 
		 
	</div>

		 
		 							

</body>
</html>