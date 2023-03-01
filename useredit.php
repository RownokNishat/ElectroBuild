<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		die;
	}
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	
	
	
	if(!empty($_POST))
	{
		$id =$_SESSION['profile']['user_id'];
		$email=$_SESSION['profile']['user_email'];
		$pass =$_SESSION['profile']['user_password'];
		
		$name =$_POST['user_name'];
		$phone =$_POST['user_phone'];
		$ppass=md5($_POST['user_pre_password']);
		$npass =md5($_POST['user_new_password']);
	

		$link = mysqli_connect($host,$user,$password,$db);
		$sqlcheck="SELECT * FROM user WHERE user_id=".$id."";

		$resultcheck=mysqli_query($link,$sqlcheck);

		$no_of_data=mysqli_num_rows($resultcheck);

		if($no_of_data){
			if($pass==$ppass){
				
				$fileType = strtolower(pathinfo($_FILES['user_picture']['name'],PATHINFO_EXTENSION));
				$target_dir = "images/userpic/".$email.".".$fileType;
				
				move_uploaded_file($_FILES['user_picture']['tmp_name'],$target_dir);
				
				
				
				$sqlinsert="UPDATE user SET 
					user_name='".$name."' ,user_password = '".$npass."',user_phone ='".$phone."' ,user_picture ='".$target_dir."' WHERE user_id=".$id."";
				$resultinsert=mysqli_query($link,$sqlinsert);
				
				
				$sqlcheck="SELECT * FROM user WHERE user_id=".$id."";

				$resultcheck=mysqli_query($link,$sqlcheck);
				$row = mysqli_fetch_assoc($resultcheck);
				$_SESSION['profile']=$row;
				
				header('Location: userinfo.php');
				
			}
		}
		mysqli_close($link);
	}
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | User Profile Edit</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
		
		
		<?php include 'header.php' ?>
		
		
		<div style="background-color:#EBECF0;">
			<h1 style="text-align:center;font-family: 'Redressed', cursive;">Profile Edit</h1>
			<div style="margin:0px 350px 0px 350px;">
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label><u><b>Name</b></u></label>
								<input type="text" placeholder="Enter Name" name="user_name" value="" class="form-control" width="200px;" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label><u><b>Profile Picture</b></u></label>
								<input type="file" name="user_picture" class="form-control" width="200px;" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label><u><b>Phone</b></u></label>
								<input type="phone" placeholder="Enter Phone" name="user_phone" value="" class="form-control" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label><u><b>Previous Password</b></u></label>
								<input type="password" placeholder="Enter Password" name="user_pre_password" value="" class="form-control" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label><u><b>New Password</b></u></label>
								<input type="password" placeholder="Confirm Password" name="user_new_password" value="" class="form-control" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-3 mb-5">
								<input type="submit" value="Save Changes" class="btn btn-success" />
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
		
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>