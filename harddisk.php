<?php

	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	

	$link = mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM harddisk";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));

	$no_of_data=mysqli_num_rows($result);

	if($no_of_data){
		while($row[] = mysqli_fetch_assoc($result)){
		}
	}
	
	mysqli_close($link);
	
	if(isset($_POST['harddisk']))
	{
		$id=$_POST['harddisk'];
		$_SESSION['harddisk']=$row[$id];
		header('Location: product.php');
	}

?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Hard Disk</title>
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
	<body style="background-color:#1E1F24;">
	
		<?php include 'header.php' ?>
		
		<div class="container">
			<h1 class="m-5"><u style="color:white;">Hard Disk</u></h1>
			<form action="" method="POST">
				<div class="row">
					<!--------------------------------ROW 1----------------------------------------------------------- -->
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="0">
						<div class="card btn" style="width: 18rem;height:764px;">
						  <img src="<?php echo $row[0]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><br><?php echo $row[0]['title'];?><br><br></h5>
							<p class="card-text"><br><?php echo $row[0]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[0]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[0]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="1">
						<div class="card btn" style="width: 18rem;height:764px;">
						  <img src="<?php echo $row[1]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><br><?php echo $row[1]['title'];?></h5>
							<p class="card-text"><br><?php echo $row[1]['description'];?>
							</p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[1]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[1]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="2">
						<div class="card btn" style="width: 18rem;height:764px;">
						  <img src="<?php echo $row[2]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[2]['title'];?></h5>
							<p class="card-text"><?php echo $row[2]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[2]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[2]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					
					<!--------------------------------ROW 2----------------------------------------------------------- -->
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="3">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[3]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[3]['title'];?></h5>
							<p class="card-text"><?php echo $row[3]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[3]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[3]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="4">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[4]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><br><?php echo $row[4]['title'];?></h5>
							<p class="card-text"><br><br><?php echo $row[4]['description'];?>
							</p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[4]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[4]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="5">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[5]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[5]['title'];?></h5>
							<p class="card-text"><br><?php echo $row[5]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[5]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[5]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<!--------------------------------ROW 3----------------------------------------------------------- -->
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="6">
						<div class="card btn" style="width: 18rem;height:752px;">
						  <img src="<?php echo $row[6]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[6]['title'];?><br></h5>
							<p class="card-text"><br><?php echo $row[6]['description'];?><br></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[6]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[6]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="7">
						<div class="card btn" style="width: 18rem;height:752px;">
						  <img src="<?php echo $row[7]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><br><?php echo $row[7]['title'];?></h5>
							<p class="card-text"><br><br><?php echo $row[7]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[7]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[7]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="8">
						<div class="card btn" style="width: 18rem;height:752px;">
						  <img src="<?php echo $row[8]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[8]['title'];?></h5>
							<p class="card-text"><?php echo $row[8]['description'];?>
							</p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[8]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[8]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<!--------------------------------ROW 4----------------------------------------------------------- -->
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="9">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[9]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[9]['title'];?></h5>
							<p class="card-text"><br><?php echo $row[9]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[9]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[9]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="10">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[10]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[10]['title'];?></h5>
							<p class="card-text"><br><?php echo $row[10]['description'];?></p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[10]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[10]['stock'];?></li>
						  </ul>
						</div>
						</button>
					</div>
					<div class="col-md-4 mb-3">
						<button name="harddisk" type="submit" value="11">
						<div class="card btn" style="width: 18rem;height:730px;">
						  <img src="<?php echo $row[11]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row[11]['title'];?><br></h5>
							<p class="card-text"><?php echo $row[11]['description'];?>
							</p>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[11]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[11]['stock'];?></li>
						  </ul>
						</div>
						</button>
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