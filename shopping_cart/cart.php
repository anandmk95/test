<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index1.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
		<script src="ajax.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span  style="letter-spacing:5px; text-shadow: 1px 1px white;font-family:verdana;">FINDEE</span></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				
				<li><a href="profile.php">Product</a></li>
			</ul>
		</div>
	</div>
	</div>
	<br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
			</div>
			<div class="col-md-2"></div>
			</div>
		 <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div >
					<h3 class="bg bg-success">Cart Checkout</h3><br>
					<div>

						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Total</b></div>
						</div>
						<div id="cart_check"></div>
					</div>
				</div>
			
			</div>
</body>	
</html>
















		