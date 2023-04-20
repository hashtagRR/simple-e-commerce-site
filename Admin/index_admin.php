

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

 
  <img class="animated bounce infinite" src="img/logo.png">
 
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><h1> Administrator Login</h1></h3>
                </div>
                    <div class="panel-body">
					    <p class="lead"></p>
                        <p class="text-muted">You are warmly welcome.</p>
                        <form action="adminlogin_handle.php" method="post">
						
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

    </div>  
    </div> 



            









</body>
</html>

