<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		header('Location: login.php');
		die;
	}
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	

	$link = mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM keyboard";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));

	$no_of_data=mysqli_num_rows($result);

	if($no_of_data){
		while($row[] = mysqli_fetch_assoc($result)){
		}
	}
	mysqli_close($link);
	if(isset($_POST['kb']))
	{
		$id=$_POST['kb'];
		$cartno=$_SESSION['cart_num'];
		$_SESSION['cart_product'][$cartno]=$row[$id];
		$_SESSION['cart_num']=$cartno+1;
		header('Location: viewitems.php');
	}	


?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | KeyBoards</title>
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
			<h1 class="m-5"><u style="color:white;">KeyBoards</u></h1>
			<form action="" method="POST">
				<div class="row">
					<!--------------------------------ROW 1----------------------------------------------------------- -->
					<?php for($i=0;$i<12;$i++){?>
					<div class="col-md-4 mb-3">
						
						<div class="card textcenter" style="width: 18rem;height:500px;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $row[$i]['description'];?>">
						  <img src="<?php echo $row[$i]['image'];?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><br><?php echo $row[$i]['title'];?><br><br></h5>
						  </div>
						  <ul class="list-group list-group-flush">
							<li class="list-group-item" style="color:red;">Price : <?php echo $row[$i]['price'];?> Tk</li>
							<li class="list-group-item">Stock : <?php echo $row[$i]['stock'];?></li>
							<li class="list-group-item"><button name="kb" type="submit" value="<?php echo $i;?>" style="background-color:black;color:white;">Add to Cart</button></li>
						  </ul>
						</div>
					</div>
					<?php } ?>
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