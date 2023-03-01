<?php
	session_start();
	date_default_timezone_set('Asia/Dhaka');
	$date=date('d/m/Y H:i:s');
	
	$type=array("processor","motherboard","ram","harddisk","ssd","gc","m","kb","monitor","casing");
	$total=0;
	if(isset($_POST['purchase']))
	{
		$_POST['purchase']=null;
		foreach($type as $x)
		{
			$_SESSION[$x]=null;
		}
		header('Location: orderconfirm.php');
	}

?>


<!doctype html>
<html>
	<head>
		<title>Electro Built | Configuration List</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
	
		<?php include 'header.php' ?>
		
		
		<div class="container textcenter">
			<h1 class="m-5 textcenter"><u style="color:black;">Configuration List</u></h1>
			<div class="row justify-content-md-center" style="border:1px solid gray;">
				<div class="col-md-8 m-4">
					<h4 class="textcenter">Date & Time : <?php echo $date;?></h4>
				</div>
				<div class="col-md-5" style="background-color:#EEEEEE;margin:5px 0px 5px 5px;">
					<h4><strong>Purchase list</strong></h4>
				</div>
				<div class="col-md-5" style="background-color:#EEEEEE;margin:5px 5px 5px 0px;">
					<h4><strong>Price</strong></h4>
				</div>
				<?php 
					foreach($type as $x){
					if(isset($_SESSION[$x])){
				?>
				<div class="col-md-5 m-2">
					<h6><?php echo $_SESSION[$x]['title'];?></h6>
				</div>
				<div class="col-md-5 m-2">
					<h6><?php echo $_SESSION[$x]['price'];?></h6>
				</div>
					<?php $total=$total+$_SESSION[$x]['price'];}}?>
				<div class="col-md-5" style="background-color:#EEEEEE;;margin:5px 0px 15px 5px;">
					<h4><strong>Total</strong></h4>
				</div>
				<div class="col-md-5" style="background-color:#EEEEEE;;margin:5px 5px 15px 0px;">
					<h4><strong>Tk <?php echo $total;?></strong></h4>
				</div>
			</div>
			<form action="" method="POST">
				<div class="row justify-content-md-center">
					<div class="col-md-3 m-5">
						<button style="background-color:#6AB802;" name="purchase" type="submit" value="1"><h3 style="color:white;">Purchase</h3></button>
					</div>
				</div>
				
				
				
				
			</form>
			
		</div>
		
		
		<?php include 'footer.php' ?>
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>