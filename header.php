<!------------------------------Header ----------------------------------------------------------------------------------->
		<div>
			<div class="btn-group menu d-grid gap-2 d-md-flex justify-content-md-end" style="background:black;">
					  <img src="images/Title4.png" class="img-fluid" alt="Title" width="200px" height="20px">
					  <a href="homepage.php" class="btn btn-outline-light menubar">Home</a>
					  <a href="viewitems.php" class="btn btn-outline-light menubar">Products</a>
					  
					   <?php
							if(!isset($_SESSION['login'])){
					  ?>
					  <a href="login.php" class="btn btn-outline-light menubar">Login</a>
					  <a href="register.php" class="btn btn-outline-light menubar">Register</a>
					  <?php }?>
					  
					  
					  
					  <?php
							if(isset($_SESSION['login'])){
					  ?>
					  <a href="product.php" class="btn btn-outline-light menubar">PC Builder</a>
					  <a href="userinfo.php" class="btn btn-outline-light menubar">User Info</a>
					  <a href="signout.php" class="btn btn-outline-light menubar">Sign Out</a>
					  <a href="cart.php" class="btn btn-outline-light menubar"><img src="images/cart.jpg" width="40" height="30"/></a>
					  <?php }?>
			</div>
			
		</div>