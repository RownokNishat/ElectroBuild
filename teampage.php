<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	$name="";
	$roll="";

	$link = mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM team";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));


		while($row[] = mysqli_fetch_assoc($result)){
		}
	
	mysqli_close($link);

?>


<!doctype html>
<html>
	<head>
		<title>Electro Built | Team</title>
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
		
		<div class="container">
			<div class="row justify-content-md-center mt-5">
				<div class="col-md-3">
					<span class="teampic1" style="border-radius:50%;"></span>
				</div>
				<div class="col-md-6 textcenter">
					<h2 style="padding-top:50px;font-style:italic;"><?php echo $row['1']['team_name'];?></h2>
					<h3 style="font-style:italic;"><?php echo $row['1']['team_roll'];?></h3>
				</div>
			</div>
			<div class="row justify-content-md-center mt-5">
				<div class="col-md-7 textcenter">
					<h2 style="padding-top:50px;font-style:italic;"><?php echo $row['0']['team_name'];?></h2>
					<h3 style="font-style:italic;"><?php echo $row['0']['team_roll'];?></h3>
				</div>
				<div class="col-md-4">
					<span class="teampic2"></span>
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>