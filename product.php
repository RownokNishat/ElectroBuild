<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		die;
	}
	$product_num=0;
	
	$p_name="Select Proccessor";
	$p_price="----";
	if(isset($_SESSION['processor']))
	{
		
		$p_name=$_SESSION['processor']['title'];
		$p_price=$_SESSION['processor']['price'];
		$product_num++;
		$p_color="#3AAFA9";
		
	}
	$mb_name="Select MotherBoard";
	$mb_price="----";
	if(isset($_SESSION['motherboard']))
	{
		
		$mb_name=$_SESSION['motherboard']['title'];
		$mb_price=$_SESSION['motherboard']['price'];
		$product_num++;
		$mb_color="#3AAFA9";
		
	}
	$r_name="Select Ram";
	$r_price="----";
	if(isset($_SESSION['ram']))
	{
		
		$r_name=$_SESSION['ram']['title'];
		$r_price=$_SESSION['ram']['price'];
		$product_num++;
		$r_color="#3AAFA9";
		
	}
	$hd_name="Select Hard-Disk";
	$hd_price="----";
	if(isset($_SESSION['harddisk']))
	{
		
		$hd_name=$_SESSION['harddisk']['title'];
		$hd_price=$_SESSION['harddisk']['price'];
		$product_num++;
		$hd_color="#3AAFA9";
		
	}
	$ssd_name="Select SSD";
	$ssd_price="----";
	if(isset($_SESSION['ssd']))
	{
		
		$ssd_name=$_SESSION['ssd']['title'];
		$ssd_price=$_SESSION['ssd']['price'];
		$product_num++;
		$ssd_color="#3AAFA9";
		
	}
	$gc_name="Select Graphics Card";
	$gc_price="----";
	if(isset($_SESSION['gc']))
	{
		
		$gc_name=$_SESSION['gc']['title'];
		$gc_price=$_SESSION['gc']['price'];
		$product_num++;
		$gc_color="#3AAFA9";
		
	}
	$m_name="Select Mouse";
	$m_price="----";
	if(isset($_SESSION['m']))
	{
		
		$m_name=$_SESSION['m']['title'];
		$m_price=$_SESSION['m']['price'];
		$product_num++;
		$m_color="#3AAFA9";
		
	}
	$kb_name="Select KeyBoard";
	$kb_price="----";
	if(isset($_SESSION['kb']))
	{
		
		$kb_name=$_SESSION['kb']['title'];
		$kb_price=$_SESSION['kb']['price'];
		$product_num++;
		$kb_color="#3AAFA9";
		
	}
	$mn_name="Select Monitor";
	$mn_price="----";
	if(isset($_SESSION['monitor']))
	{
		
		$mn_name=$_SESSION['monitor']['title'];
		$mn_price=$_SESSION['monitor']['price'];
		$product_num++;
		$mn_color="#3AAFA9";
		
	}
	$ca_name="Select Casing";
	$ca_price="----";
	if(isset($_SESSION['casing']))
	{
		
		$ca_name=$_SESSION['casing']['title'];
		$ca_price=$_SESSION['casing']['price'];
		$product_num++;
		$ca_color="#3AAFA9";
		
	}
	if(isset($_POST['remove1'])){
	if($_POST['remove1']=="1")
	{
		$_POST['remove1']="0";
		$p_name="Select Proccessor";
		$p_price="----";
		$p_color="";
		$_SESSION['processor']=null;
		
	}
	}
	if(isset($_POST['remove2'])){
	if($_POST['remove2']=="1")
	{
		$_POST['remove2']="0";
		$mb_name="Select MotherBoard";
		$mb_price="----";
		$mb_color="";
		$_SESSION['motherboard']=null;
		
	}
	}
	if(isset($_POST['remove3'])){
	if($_POST['remove3']=="1")
	{
		$_POST['remove3']="0";
		$r_name="Select Ram";
		$r_price="----";
		$r_color="";
		$_SESSION['ram']=null;
		
	}
	}
	if(isset($_POST['remove4'])){
	if($_POST['remove4']=="1")
	{
		$_POST['remove4']="0";
	    $hd_name="Select Hard-Disk";
	    $hd_price="----";
		$hd_color="";
		$_SESSION['harddisk']=null;
		
	}
	}
	if(isset($_POST['remove5'])){
	if($_POST['remove5']=="1")
	{
		$_POST['remove5']="0";
		$ssd_name="Select SSD";
	    $ssd_price="----";
		$ssd_color="";
		$_SESSION['ssd']=null;
		
	}
	}
	if(isset($_POST['remove6'])){
	if($_POST['remove6']=="1")
	{
		$_POST['remove6']="0";
		$gc_name="Select Graphics Card";
	    $gc_price="----";
		$gc_color="";
		$_SESSION['gc']=null;
		
	}
	}
	if(isset($_POST['remove7'])){
	if($_POST['remove7']=="1")
	{
		$_POST['remove7']="0";
		$m_name="Select Mouse";
		$m_price="----";
		$m_color="";
		$_SESSION['m']=null;
		
	}
	}
	if(isset($_POST['remove8'])){
	if($_POST['remove8']=="1")
	{
		$_POST['remove8']="0";
		$kb_name="Select Keyboard";
		$kb_price="----";
		$kb_color="";
		$_SESSION['kb']=null;
		
	}
	}
	if(isset($_POST['remove9'])){
	if($_POST['remove9']=="1")
	{
		$_POST['remove9']="0";
		$mn_name="Select Monitor";
		$mn_price="----";
		$mn_color="";
		$_SESSION['monitor']=null;
		
	}
	}
	if(isset($_POST['remove10'])){
	if($_POST['remove10']=="1")
	{
		$_POST['remove10']="0";
		$ca_name="Select Casing";
		$ca_price="----";
		$ca_color="";
		$_SESSION['casing']=null;
		
	}
	}
	
	
	if(isset($_POST['cart']) && $product_num>0 ){
		header ('Location: purchaselist.php');
	}
	
?>

<!doctype html>
<html>
	<head>
		<title>Electro Built | Pc Builder</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/design.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
		<style>
			body{font-family: 'Righteous', cursive;}
		</style>
	</head>
	<body>
	
		<?php include 'header.php' ?>
		
		<div class="container">
			<form action="" method="POST">
			<div class="row">
				<div class="col-md-9">
				<h2 style="margin:50px;">Product Name</h2>
				</div>
				<div class="col-md-3">
				<h2 style="margin:50px;">Price</h2>
				</div>
				<div class="col-md-8">
				<a href="processor.php" class="btn"><h4 style="color:<?php echo $p_color;?>;">1. <?php echo $p_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove1" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $p_color;?>;"><?php echo $p_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="motherboard.php" class="btn"><h4 style="color:<?php echo $mb_color;?>;">2. <?php echo $mb_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove2" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $mb_color;?>;"><?php echo $mb_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="ram.php" class="btn"><h4 style="color:<?php echo $r_color;?>;">3. <?php echo $r_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove3" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $r_color;?>;"><?php echo $r_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="harddisk.php" class="btn"><h4 style="color:<?php echo $hd_color;?>;">4. <?php echo $hd_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove4" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $hd_color;?>;"><?php echo $hd_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="ssd.php" class="btn"><h4 style="color:<?php echo $ssd_color;?>;">5. <?php echo $ssd_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove5" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $ssd_color;?>;"><?php echo $ssd_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="graphics.php" class="btn"><h4 style="color:<?php echo $gc_color;?>;">6. <?php echo $gc_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove6" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $gc_color;?>;"><?php echo $gc_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="mouse.php" class="btn"><h4 style="color:<?php echo $m_color;?>;">7. <?php echo $m_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove7" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $m_color;?>;"><?php echo $m_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="keyboard.php" class="btn"><h4 style="color:<?php echo $kb_color;?>;">8. <?php echo $kb_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove8" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $kb_color;?>;"><?php echo $kb_price;?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="monitor.php" class="btn"><h4 style="color:<?php echo $mn_color;?>;">9. <?php echo $mn_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove9" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $mn_color;?>;"><?php echo $mn_price?></h2>
				</div>
				<hr>
				<div class="col-md-8">
				<a href="casing.php" class="btn"><h4 style="color:<?php echo $ca_color;?>;">10. <?php echo $ca_name;?></h4></a>
				</div>
				<div class="col-md-1">
				<button style="background-color:red;color:white;" name="remove10" type="submit" value="1">Remove</button>
				</div>
				<div class="col-md-3">
				<h2 style="color:<?php echo $ca_color;?>;"><?php echo $ca_price?></h2>
				</div>
				</div>
			</div>
			<div class="row justify-content-md-center" >
			<div class="col-md-2 m-5">
			<button style="background-color:green;" name="cart" type="submit" value="1">
			 <h4 style="color:white;">Add To Cart</h4>
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