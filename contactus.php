<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "electro_built";
	
	
	$vis="hidden";
	
	if(!empty($_POST))
	{
		$email =$_POST['user_email'];
		$phone =$_POST['user_phone'];
		$subject =$_POST['user_subject'];
		$message =$_POST['user_message'];
		
		$vis="visible";

		$link = mysqli_connect($host,$user,$password,$db);

				$sqlinsert="INSERT INTO contactus(user_email,user_phone,user_subject,user_message) 
				VALUES ('".$email."','".$phone."','".$subject."','".$message."')";
				$resultinsert=mysqli_query($link,$sqlinsert);
				
		mysqli_close($link);
	}
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Contact Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
	</head>
	<body>
	
		
		<?php include 'header.php' ?>
		
		<div class="container-fluid">
			<div class="row" style="background-color:#E6E7EB;">
				<div class="col-md-6">
					<div class="aboutus">
						<img class="img" src="images/contactus3.png" width="100%" height="580px">
						<div class="centered">
							<div>
								<h3 style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;"><b>Phone No</b></h3>
								<p style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;">+8801048348204</p>
								<p style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;">+8801872648204</p>
							</div>
							<div>
								<h3 style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;"><b>Email</b></h3>
								<p style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;">electrobuilt@gmail.com</p>
								<p style="text-align:center;color:#379EE9;font-family: 'Source Code Pro', monospace;">contactelectro@gmail.com</p>
							</div>				
						</div>
					</div>
				</div>
		
				<div class="col-md-6">
					<h1 style="text-align:center;margin-top:50px;"><u>Contact Us</u></h1>
					<div style="margin:0px 50px 0px 50px;">
						<div class="row">
							<form action="" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group m-3 mb-5">
											<label>Email</label>
											<input type="email" placeholder="Enter Email" name="user_email" value="" class="form-control" width="200px;" style="background-color:#F5F5F5;" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group m-3 mb-5">
											<label>Phone No</label>
											<input type="phone" placeholder="Enter Phone" name="user_phone" value="" class="form-control" width="200px;" style="background-color:#F5F5F5;" required />
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group m-3 mb-5">
										<label>Subject</label>
										<input type="text" placeholder="Enter Subject" name="user_subject" value="" class="form-control" width="200px;" style="background-color:#F5F5F5;" required />
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group m-3 mb-5">
										<label>Message</label>
										<textarea name="user_message" placeholder="Enter Message" class="form-control" style="background-color:#F5F5F5;" required ></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group m-3 mb-5">
												<input type="submit" value="Submit" class="btn btn-light"/>
											</div>
										</div>
										<div class="col-md-9">
											<div class="alert alert-warning alert-dismissible fade show" role="alert" style="visibility: <?php echo $vis;?>;">
												<strong>We received your response and will contact you as soon as possible.</strong>
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