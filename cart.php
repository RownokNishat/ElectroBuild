<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		die;
	}
	$cartno=$_SESSION['cart_num'];
	$total=0;
	
	if(isset($_POST['Purchase']) && $_SESSION['cart_num']>0){
		$_SESSION['cart_num']=0;
		header('Location:orderconfirm.php');
	}
	if(isset($_POST['Remove'])){
		$_SESSION['cart_num']=0;
		header('Location:viewitems.php');
	}
	
	
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Cart</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
		<style>
		p{font-style: italic;}
		</style>
	</head>
	<body style="background-color:#EBECF0;">
	
		<?php include 'header.php' ?>
		
		<div class="container mt-5">
			<form action="" method="POST">
				<div class="row justify-content-md-center">
					<div class="col-md-6" style="border-bottom:1px solid black;">
						<h2 class="textcenter" style="color:black;">Products</h2>
					</div>
					<div class="col-md-6" style="border-bottom:1px solid black;">
						<h2 class="textcenter" style="color:black;">Price</h2>
					</div>
					
					<?php for($i=0;$i<$cartno;$i++){ ?>
					<div class="col-md-6">
						<h6 class="textcenter" style="color:black;"><?php echo $_SESSION['cart_product'][$i]['title']; ?></h6>
					</div>
					<div class="col-md-6">
						<h2 class="textcenter" style="color:black;"><?php echo $_SESSION['cart_product'][$i]['price']; ?></h2>
					</div>
					<?php 
						$total=$total+$_SESSION['cart_product'][$i]['price'];
					} ?>
					
					
					<div class="col-md-6" style="border-top:1px solid black;">
						<h2 class="textcenter" style="color:black;">Total</h2>
					</div>
					<div class="col-md-6" style="border-top:1px solid black;">
						<h2 class="textcenter" style="color:black;"><?php echo $total; ?></h2>
					</div>
					
					
					<div class="col-md-6 mt-5" style="margin-bottom:150px;">
						<h2 class="textcenter" style="color:black;"><button class="btn-success" name="Purchase" type="submit" value="1">Purchase</button></h2>
					</div>
					<div class="col-md-6 mt-5" style="margin-bottom:150px;">
						<h2 class="textcenter" style="color:black;"><button class="btn-danger" name="Remove" type="submit" value="1">Remove Cart</button></h2>
					</div>
					
					
					
				</div>
			</form>
		</div>
		
		<?php include 'footer.php' ?>
		
		
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
		<script src="js/jquery-3.4.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
	</body>
</html>