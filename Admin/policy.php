<?php
session_start();

/*if(!isset($_SESSION['email']))
	{
		die("You are not logged in");
	}
*/
require_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>

<div class="container">

  <img class="animated bounce infinite" src="img/logo.png">
  
  <ul class="nav nav-pills" role="tablist">
   
    <li class="active"><a href="admin_home.php">Home</a></li>
	 <li><a href="admin_profile.php">Profile</a></li>
	 <li><a href="new_admin.php">Add New Admin</a></li>
	  <li><a href="new_product.php">Add New Product</a></li>
	   <li><a href="client_detail.php">Client Details</a></li>
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nutritions For Diabetic<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
	  
	    <li><a href="category.php">Vitamins</a>	<ul>
                                            <li><a href="category.html">Vitamin A</a></li>    
											<li><a href="category.html">Vitamin B</a></li>    
											<li><a href="category.html">Vitamin C</a></li>    
											<li><a href="category.html">Vitamin D</a></li>    								
											<li><a href="category.html">Vitamin E</a></li>    
											<li><a href="category.html">Vitamin K</a></li>    
											<li><a href="category.html">Omega 3</a></li>    
                                        </ul>     
		</li>                                  
										
	  
        <li><a href="#">Minerals</a> 	<ul>
                                            <li><a href="category.html">Gymnema Sylvestre Tea</a></li>    
											<li><a href="category.html">Bitter Melon</a></li>    
											<li><a href="category.html">Prickly Pear Cactus</a></li>    
											<li><a href="category.html">Gamma-Linolenic Acid </a></li>    
											<li><a href="category.html">Billberry</a></li>    
											<li><a href="category.html">Alpha-Lipoic Acid</a></li>    
											<li><a href="category.html">Green Tea</a></li>    
                                        </ul>
		</li>    
											
        <li><a href="#">Herbal Products</a> <ul>
                                                <li><a href="category.html">Calcium</a></li>    
												<li><a href="category.html">Chromium</a></li>    
												<li><a href="category.html">Copper</a></li>    
												<li><a href="category.html">Iron</a></li>    
												<li><a href="category.html">Potassium</a></li>    
												<li><a href="category.html">Zinc</a></li>    
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
	
	 
  </ul>
</div>
  <h1></h1>
  
  
 <div class="col-sm-6"style="width:100%;>
                <div class="row">
                   
                    <div class="panel panel-default"">
                        <div class="panel-heading">
                             <h2 class="panel-title">Policies</h2>
						</div>
							<div class="panel-body">
							
							 <p>We want to maintain a safe, fair, and enjoyable marketplace for both buyers and sellers. If you're a buyer, we ask that you review and understand our policies, including the User Agreement, before you buy an item.

Our policies are intended to:<br/>
<strong>*Follow local laws and regulations</strong><br/>
<strong>*Minimize risks to buyers and sellers</strong><br/>
<strong>*Make sure that no one has an unfair advantage</strong><br/>
<strong>*Create an enjoyable buying experience</strong><br/>
<strong>*Protect intellectual property rights</strong></p>
							 <br/><br/>
							 
							 
							 
							 
							<p> <h3>Rules about Feedback</h3>

You can't abuse the Feedback system.
This means you can't threaten to leave a seller negative Feedback if that seller won't do something that wasn't promised in the original listing. This is called Feedback extortion and is against our policy.
Also, you can't leave Feedback if you're only doing it to help increase a seller's Feedback score. This is a type of Feedback manipulation and is also not allowed.
Make sure that you understand and follow all of our Feedback policies.</p>
<br/><br/>

<p> <h3>Reporting policy violations</h3>

If you want to report a policy violation:<br/>
1.First, read the policy page that deals with the violation (see our rules & policies) and make sure the other member is really breaking the rules.<br/>
2.If you still want to report a member, go to Customer Support and select the topic that best describes the issue. We'll show you how to send us a report or contact us.<br/><br/>
Reports of policy violations must be specific and you must submit them with the intent of addressing a known or suspected violation of our policy. False reporting of policy violations can have serious consequences.

Report a listing only once. Multiple emails about the same listing slow down our investigation.

When we receive your report, we look at all the circumstances, including the member's history, before we decide whether to take action. If we aren't sure about something or can't prove it with certainty, we may not take any action. In addition, we won't discuss the results of an investigation. Learn more about our User Privacy Notice.
</p>
							</div>
                    </div>
              

	<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">	&#169 2016 Miracle Makers Web Solutions   (All Rights Reserved)</div>
  </div>
</div>
  
  
  
  
  
  
</body>
</html>




