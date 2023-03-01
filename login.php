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
		$email =$_POST['user_email'];
		$pass=md5($_POST['user_password']);
	

		$link = mysqli_connect($host,$user,$password,$db);
		$sql="SELECT * FROM user WHERE user_email='".$email."'";
		$vis="visible";

		$result=mysqli_query($link,$sql) or die (mysqli_error($link));

		$no_of_data=mysqli_num_rows($result);

		if($no_of_data){
			while($row = mysqli_fetch_assoc($result)){
				if($row['user_password']==$pass){
					$message="Login Success";
					$alert="success";
					$_SESSION['login']="1";
					$_SESSION['cart_num']=0;
					$_SESSION['profile']=$row;
					header('Location:homepage.php');
				}
				else{
					$message="Wrong Password";
					$alert="danger";
				}
			}
		}
		else{
			$message="Wrong Email";
			$alert="danger";
		}
		mysqli_close($link);
	}
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	</head>
	<body>
		
		<?php include 'header.php' ?>
		<div class="container-fluid">
			<div class="row" style="background-color:#294752;">
				<div class="col-md-6">
					<img class="img" src="images/login.jpg" width="100%" height="580px">
				</div>
				<div class="col-md-6">
					<h1 style="text-align:center;margin-top:100px;font-family: 'Redressed', cursive;color:white;"><u>Login</u></h1>
					<div style="margin:0px 50px 0px 50px;">
						<div class="row">
							<form action="" method="POST">
								<div class="col-md-12">
									<div class="form-group m-3 mb-5">
										<label style="color:white;"><b>Email</b></label>
										<input type="email" placeholder="Enter Email" name="user_email" value="" class="form-control" width="200px;" required />
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group m-3 mb-5">
										<label style="color:white;"><b>Password</b></label>
										<input type="password" placeholder="Enter Password" name="user_password" value="" class="form-control" required />
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group m-3 mb-5">
												<input type="submit" value="Login" class="btn btn-success" />
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
			</div>
		</div>
		<?php include 'footer.php' ?>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>