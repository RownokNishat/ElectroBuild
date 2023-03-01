<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		die;
	}
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	
	
	$message="";
	$alert="";
	$vis="hidden";
	
	if(!empty($_POST))
	{
		$name =$_POST['user_name'];
		$email =$_POST['user_email'];
		$phone =$_POST['user_phone'];
		$pass=md5($_POST['user_password']);
		$cpass =md5($_POST['user_confirm_password']);
		date_default_timezone_set('ASIA/DHAKA');
		$current_date=date('Y-m-d H:i:s');
	

		$link = mysqli_connect($host,$user,$password,$db);
		$sqlcheck="SELECT * FROM user WHERE user_email='".$email."'";
		$vis="visible";

		$resultcheck=mysqli_query($link,$sqlcheck);

		$no_of_data=mysqli_num_rows($resultcheck);

		if(!$no_of_data){
			if($pass==$cpass){
				
				$fileType = strtolower(pathinfo($_FILES['user_picture']['name'],PATHINFO_EXTENSION));
				$target_dir = "images/userpic/".$email.".".$fileType;
				
				move_uploaded_file($_FILES['user_picture']['tmp_name'],$target_dir);
				
				
				
				$sqlinsert="INSERT INTO user(user_name,user_email,user_password,user_phone,created_date,user_picture) 
				VALUES ('".$name."','".$email."','".$pass."','".$phone."','".$current_date."','".$target_dir."')";
				$resultinsert=mysqli_query($link,$sqlinsert);
				$message="Registration Success";
				$alert="success";
			}
			else{
				$message="Password did not match";
				$alert="danger";
			}
		}
		else{
			$message="Email Exists";
			$alert="danger";
		}
		mysqli_close($link);
	}
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Register</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
		
		
		<?php include 'header.php' ?>
		
		
		<div style="background-color:#1E1F24;">
			<h1 style="text-align:center;color:white;font-family: 'Redressed', cursive;">Registration</h1>
			<div style="margin:0px 350px 0px 350px;">
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label style="color:white;"><u>Name</u></label>
								<input type="text" placeholder="Enter Name" name="user_name" value="" class="form-control" width="200px;" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label style="color:white;"><u>Profile Picture</u></label>
								<input type="file" name="user_picture" class="form-control" width="200px;" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group m-2 mb-5">
										<label style="color:white;"><u>Email</u></label>
										<input type="email" placeholder="Enter Email" name="user_email" value="" class="form-control" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-2 mb-5">
										<label style="color:white;"><u>Phone</u></label>
										<input type="phone" placeholder="Enter Phone" name="user_phone" value="" class="form-control" required />
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label style="color:white;"><u>Password</u></label>
								<input type="password" placeholder="Enter Password" name="user_password" value="" class="form-control" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-2 mb-5">
								<label style="color:white;"><u>Confirm Password</u></label>
								<input type="password" placeholder="Confirm Password" name="user_confirm_password" value="" class="form-control" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group m-3 mb-5">
										<input type="submit" value="Create Account" class="btn btn-danger" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="alert alert-<?php echo $alert;?> alert-dismissible fade show" role="alert" style="visibility: <?php echo $vis;?>;">
										<strong><?php echo $message;?></strong>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
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