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
   
    <li ><a href="admin_home.php">Home</a></li>
	 <li class="active"><a href="admin_profile.php">Profile</a></li>
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





    </div>  
    </div> 

 <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="admin_home.php">Home</a>
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
                                <li  class="active">
                                    <a href="profile.php"><i class="glyphicon glyphicon-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index_admin.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
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

                        <form action="pass_handle.php" method="post">
						 
                            <div class="row">
							<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>										
                                        <input type="text" required class="form-control"  name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
																		
                                        <label for="password_old">Old password</label>										
                                        <input type="password" required class="form-control"  name="password_old">
                                    </div>
                                </div>
								
                            </div>
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">								
                                        <label for="password_1">New password</label>
                                        <input type="password" required  class="form-control" name="pass1" id="pass1">
                                    </div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retype new password</label>
                                       <input type="password"  required class="form-control"  name="pass2" id="pass2" onkeyup="checkPass(); return false;">
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

                        <h3>Personal details</h3>
                        <form action="profile_handle.php" method="post">
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
                                        <label for="staffid">Staff ID</label>
                                        <input type="text" required class="form-control" name="stfid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="NIC">NIC No</label>
                                        <input type="text" required class="form-control" name="nic">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Address</label>
                                       <textarea class="form-control" required rows="5" name="address"></textarea>
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