<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		die;
	}
	$name=$_SESSION['profile']['user_name'];
	$id=$_SESSION['profile']['user_id'];
	$email=$_SESSION['profile']['user_email'];
	$phone=$_SESSION['profile']['user_phone'];
	$date=$_SESSION['profile']['created_date'];
	$pic=$_SESSION['profile']['user_picture'];
	
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
		
		
		<div class="container mt-5">
			<div class="row justify-content-md-center">
				<div class="col-md-3 mt-5">
					<img src="<?php echo $pic;?>" width="200" height="150"/>
				</div>
				<div class="col-md-9 mt-5">
					<div class="row">
						<div class="col-md-10">
							<h3><u><b>User Name</b></u></h3>
							<br>
							<h4 class="mb-5" style="color:#0062CC;"><?php echo $name;?></h4>
						</div>
						<div class="col-md-2">
							<a href="useredit.php" class="btn" style="background-color:#EEEEEE;"><b>Edit Profile</b></a>
						</div>
						<div class="w-100"></div>
						<hr>
						
						<div class="col-md-3 mt-5">
							<p style="font-size:25px;"><b>User id:</b></p> 
						</div>
						<div class="col-md-3 mt-5">
							<p style="font-size:20px;color:#0062CC;"><?php echo $id;?></p> 
						</div>
						
						<div class="w-100"></div>
						
						<div class="col-md-3">
							<p style="font-size:25px;"><b>User email:</b></p> 
						</div>
						<div class="col-md-3">
							<p style="font-size:20px;color:#0062CC;"><?php echo $email;?></p> 
						</div>
						<div class="w-100"></div>
						
						<div class="col-md-3">
							<p style="font-size:25px;"><b>User phone:</b></p> 
						</div>
						<div class="col-md-3">
							<p style="font-size:20px;color:#0062CC;"><?php echo $phone;?></p> 
						</div>
						<div class="w-100"></div>
						
						<div class="col-md-3 mb-5">
							<p style="font-size:25px;"><b>Profile Created:</b></p> 
						</div>
						<div class="col-md-3 mb-5">
							<p style="font-size:20px;color:#0062CC;"><?php echo $date;?></p> 
						</div>
						<div class="w-100"></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>