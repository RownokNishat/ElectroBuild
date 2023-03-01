<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Electro Built | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
	
		<?php include 'header.php' ?>
		
		<!------------------------------CAROUSEL SLIDER----------------------------------------------------------------------------------->
		
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="3000">
						<h1 class="caption_size colorchange" style="color:">Welcome to Electro Built
						</h1>
						<img class="img-fluid image" src="images/slide1.jpg" alt="First slide">
					</div>
					<div class="carousel-item" data-interval="3000">
						<h1 class="caption_size">Design your own computer according to your preference
						</h1>
						<img class="img-fluid image" src="images/slide2.jfif" alt="Second slide">
					</div>
					<div class="carousel-item" data-interval="3000">
						<h1 class="caption_size">Customize your casing and components of your built
						</h1>
						<img class="img-fluid image" src="images/slide3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item" data-interval="3000">
						<h1 class="caption_size">Choose your laptop that meets your requirements
						</h1>
						<img class="img-fluid image" src="images/slide4.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<h1 class="caption_size">We help you build your pc with less time and effort
						</h1>
						<img class="img-fluid image" src="images/slide5.jpg" alt="Fifth slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>
				
		<?php include 'bottompart.php' ?>
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>