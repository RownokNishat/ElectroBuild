<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	$msg="";

	$link = mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM aboutus";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));

	
		while($row = mysqli_fetch_assoc($result)){
			$msg=$row['description'];
		}
	
	mysqli_close($link);

?>


<!doctype html>
<html>
	<head>
		<title>Electro Built | About Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
	</head>
	<body>
		
		<?php include 'header.php' ?>
		<div class="aboutus">
			<img class="img-fluid" src="images/Aboutus1.png" width="100%" height="100%">
			<div class="centered">
			<h1 style="font-size:60px;color:black;font-family: 'Ranchers', cursive;margin-bottom:50px;">ABOUT US</h1>
				<h5 style="font-size:30px;color:black;font-family: 'Ranchers', cursive;line-height: 200%;">
					<?php echo $msg;?>
				</h5>
			</div>
		</div>
		
		
		
		
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>