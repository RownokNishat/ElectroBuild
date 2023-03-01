<?php
	session_start();
	
	$type=array("cat1.php","cat2.php","cat3.php","cat4.php","cat5.php","cat6.php","cat7.php","cat9.php","cat8.php","cat10.php");
	
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	

	$link = mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM catagory";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));

	$no_of_data=mysqli_num_rows($result);

	if($no_of_data){
		while($row[] = mysqli_fetch_assoc($result)){
		}
	}
	
	
	
?>
<!doctype html>
<html>
	<head>
		<title>Electro Built | Catagories</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
	
		<?php include 'header.php' ?>
		
		
		<h1 class="textcenter" style="padding:50px;background-color:#78AE68;color:black;">Our Products</h1>
		
		
		
		<div class="container">
			<form action="" method="POST">
				<div class="row justify-content-md-center">
					<?php for($i=0;$i<=8;$i++){?>
					<div class="col-md-4">
						<h1 class="textcenter">
								<a href="<?php echo $type[$i]; ?>" class="btn" style="border:1px solid grey;">
								<img src="<?php echo $row[$i]['image'];?>" width="150" height="100"/>
								<hr>
								<h3 class="textcenter"><?php echo $row[$i]['name'];?></h3>
								</a>
						</h1>
					</div>
					<?php } ?>
					<div class="col-md-4">
						<h1 class="textcenter">
								<a href="<?php echo $type[9]; ?>" class="btn" style="border:1px solid grey">
								<img src="<?php echo $row[9]['image'];?>" width="300" height="100"/>
								<hr>
								<h3 class="textcenter"><?php echo $row[9]['name'];?></h3>
								</a>
						</h1>
					</div>
				</div>
			</form>
		</div>
		
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>