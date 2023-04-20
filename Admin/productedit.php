<?php
session_start();

if(!isset($_SESSION['email_admin']))
	{
		die("You are not logged in");
	}
	$id=$_POST['id'];
	$_SESSION['id'] = $id;
?>	
<!DOCTYPE html>
<html>
<head>
  <title>New Product</title>
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

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }
</script>

<div class="container">

  <img class="animated bounce infinite" src="img/logo.png">
  
  <ul class="nav nav-pills" role="tablist">
   
    <li ><a href="admin_home.php">Home</a></li>
	 <li><a href="admin_profile.php">Profile</a></li>
	 <li><a href="new_admin.php">Add New Admin</a></li>
	  <li ><a href="new_product.php">Add New Product</a></li>
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





    </div>  
    </div> 


	 <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li> Edit Product</li>
                    </ul>
                </div>

				
				
			<div class="container">
    <div class="row">
	
	
	<div class="col-sm-6"style="width:30%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Product</h2>
						</div>
							<div class="panel-body">
							
							
                       <?php		
		require_once("connection.php");
$sql = "SELECT * FROM product WHERE p_id='$id'";
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
                                           
											<img src="img/<?php echo $record['p_pic'];?>" alt="" class="img-responsive" style="height:100px">
                                            
                                        </div>
                                      
                                    </div>
                                </div>
                               
							  
									<div class="text">
									
                                    <h3><?php echo $record["p_name"]; ?></h3>
                                    <p class="price"><?php echo "$".$record["p_price"]; ?></p>
                                    <p class="buttons">
                                 
		 <div>
		 
		 <?php
		 $_SESSION['name'] = $record['p_name'];
		 ?>
								  
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
                </div>  
        

		
		 <div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Edit details</h2>
						</div>
							<div class="panel-body">
						
						
                        <form action="productedit_handle.php" method="post" enctype="multipart/form-data">
						
						 <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productname">Product name</label>
                                        <input type="text" class="form-control" name="pname" > 
                                    </div>
                                </div>
								</div>
								 <div class="row">
								<div class="col-sm-6">
									<div class="form-group">
									  <label for="productname">Product type</label>
										<div class="radio">
  <label><input type="radio" name="radio" value="Vitamin Product">Vitamin Product</label>
</div>
<div class="radio">
  <label><input type="radio" name="radio" value="Mineral Product">Mineral Product</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="radio" value="Herbal product">Herbal product</label>
</div>
		</div>			
								</div>	
								<div class="col-sm-6">
								</div>	
                                
                            </div>
							<br><br/>
						 
								<div class="row">
									<div class="col-sm-6">
                                    <div class="form-group">
									 
									
									 <label for="view">Product Image:</label>
									<input type="file" class="form-control input-sm" name="product_image" id="pwd" >
									   
                                    </div>
                                </div>	
										
										</div>
										
					
								<div class="row">
							<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                                
								  

								    </div>
								
                               <div class="col-sm-12 text-center">
                                    <button type="submit" name="btn_upload" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>

                                </div>
						
							</div>
                    </div>
		
		       
        </div>	
				
      
  </body>
</html>