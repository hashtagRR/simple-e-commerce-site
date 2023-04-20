

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login/Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
 
 
 
 
 
 
 
 
 
 
  <img class="animated bounce infinite" src="img/logo.png">
 
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><h1>Login</h1></h3>
                </div>
                    <div class="panel-body">
					    <p class="lead">Already our customer?</p>
                        <p class="text-muted">You are warmly welcome.</p>
                        <form action="loginhandle.php" method="post">
						
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" required name="email1">
                            </div>
							
							
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required name="password1">
                            </div>
							
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                            </div>
							
                        </form>
                    </div>
            </div>
        </div>



        <div class="col-sm-6">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h1>New account</h1>   
						</div>
						
						<div class="panel-body">
                        <p class="lead">Not our registered customer yet?</p>
                        <p>Sign up for free and become our member</p>
                        <p>If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="registerhandle.php" method="post">
						
                            <div class="form-group">
                                <label for="name">Frst Name</label>
                                <input type="text" class="form-control" required name="fname">
                            </div>
							<div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" required name="lname">
                            </div>
							
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" required name="email">
                            </div>
							
							<div class="row">
							<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password1">Password</label>										
                                         <input type="password" required class="form-control" name="pass1" id="pass1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
																		
                                        <label for="password2">Re type password</label>										
                                        <input type="password" required class="form-control" name="pass2" id="pass2" onkeyup="checkPass(); return false;">
										<span id="confirmMessage" class="confirmMessage"></span>
										
										
										
                                    </div>
                                </div>
								
								
								
								
								
								
								
								
								
                            </div>
							
							 <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" required name="comp">
                            </div>
							 <div class="row">
							<div class="col-sm-6">
                                    <div class="form-group">
                                         <label for="street">Address</label>
                                       <textarea class="form-control" rows="5" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
																		
                                        <label for=""telephone>Telephone</label>										
                                        <input type="text" class="form-control" required name="telephone">
                                    </div>
                                </div>
								
                            </div>
							
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i> Register</button>
                            </div>
							</form>
                        
						</div>
                    </div>
                </div>  
                     
        </div>
    </div>  
    </div> 



 <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Pages</h3>
                </div>
                    <div class="panel-body">
						<ul>
						<li><a href="text.html">About us</a>
						</li>
						<li><a href="text.html">Terms and conditions</a>
						</li>
						<li><a href="faq.html">FAQ</a>
						</li>
						<li><a href="contact.html">Contact us</a>
						</li>
						</ul>
                    </div>
            </div>
        </div>



        <div class="col-sm-6">
                <div class="row">
                   
                    <div class="panel panel-success">
                        <div class="panel-heading">
                             <h3 class="panel-title">Where to find us</h3>
						</div>
							<div class="panel-body">
							<p><strong>Zeus Pvt Ltd.</strong>
							<br>No 10
							<br>Colombo Road
							<br>Kandy
							<strong>SriLanka</strong></p>
							<a href="contact.html">Go to contact page</a>
							<hr class="hidden-md hidden-lg">
							</div>
                    </div>
                </div>  
                     
        </div>
    </div>  
    </div>              









</body>
</html>

