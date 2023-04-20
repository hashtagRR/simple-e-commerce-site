<?php
session_start();

if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
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
 function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 
 
 
 </script>


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

    </div>  
    </div> 

 <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="home.php">Home</a>
                        </li>
                        <li>Profile</li>
                    </ul>
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
                                <li>
                                    <a href="customer_orders.php"><i class="glyphicon glyphicon-menu-hamburger"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="wishlist.php"><i class="glyphicon glyphicon-heart"></i> My wishlist</a>
                                </li>
                                <li  class="active">
                                    <a href="profile.php"><i class="glyphicon glyphicon-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index_client.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                                </li>
                            </ul>
							
							</div>
                    </div>
                </div>  
        

		
		 <div class="col-sm-6"style="width:70%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">My account</h2>
						</div>
							<div class="panel-body">
						

                        <h3>Change password</h3>

                        <form action="passwordhandle.php" method="post">
						 
                            <div class="row">
							<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>										
                                        <input type="text" class="form-control" required name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
																		
                                        <label for="password_old">Old password</label>										
                                        <input type="password" class="form-control" required name="password_old">
                                    </div>
                                </div>
								
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">								
                                        <label for="password_1">New password</label>
                                        <input type="password"  class="form-control" required name="pass1" id="pass1">
                                    </div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retype new password</label>
                                       <input type="password"  class="form-control" required name="pass2" id="pass2" onkeyup="checkPass(); return false;">
										<span id="confirmMessage" class="confirmMessage"></span>
                                    </div>
                                </div>
                           </div>
						   
						   
						   
                            <!-- /.row -->

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save new password</button>
                            </div>
                        </form>

                        <hr>

                        <h3>Edit Personal details</h3>
                        <form action="profilehandle.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" required class="form-control" name="fname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" required class="form-control" name="lname">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
							
							<div class="row">
							
                            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" required class="form-control" name="company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Address</label>
                                       <textarea class="form-control" required rows="5" name="add"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                              

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" required class="form-control" name="tp">
                                    </div>
                                </div>
                               
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save changes</button>

                                </div>
                            </div>
                        </form>
							
							
							
							</div>
                    </div>
		
		
		
		
		
		


        
                     
        </div>
                 






























                           

  </body>
</html>