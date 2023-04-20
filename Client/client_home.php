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
   
    <li class="active"><a href="client_home.php">Home</a></li>
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

  <h1></h1>
  
  
				
  <div class="slider" id="main-slider">
	<div class="slider-wrapper">
		<img src="img/main-slider1.jpg" alt="First" class="slide" />
		<img src="img/main-slider2.jpg" alt="Second" class="slide" />
		<img src="img/main-slider3.jpg" alt="Third" class="slide" />
		<img src="img/main-slider4.jpg" alt="Fourth" class="slide" />
		<img src="img/main-slider5.jpg" alt="Fifth" class="slide" />
		<img src="img/main-slider6.jpg" alt="Sixth" class="slide" />
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
						
						</li>
						<li><a href="policy.php">Terms and conditions</a>
						</li>
						
						<li><p>
<a href="mailto:Zeus@gmail.com?Subject=Hello%20again" target="_top">Contact US</a>
</p>
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
							
							</div>
                    </div>
                </div>  
                     
        </div>
    </div>  
    </div>              

	<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">	&#169 2016 Miracle Makers Web Solutions   (All Rights Reserved)</div>
  </div>
</div>
  
  
  
  
  
  
</body>
</html>




<script>
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();

</script>

<style>

.img
{
float:right;
}

.slider {
	width: 1024px;
	margin: 2em auto;
	
}

.slider-wrapper {
	width: 100%;
	height: 400px;
	position: relative;
}

.slide 
{
	float: left;
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}



</style>