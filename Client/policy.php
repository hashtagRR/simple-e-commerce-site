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
   
    <li ><a href="client_home.php">Home</a></li>
	 <li><a href="profile.php">Profile</a></li>
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




