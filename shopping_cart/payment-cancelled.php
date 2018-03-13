<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Cancelled</title>
</head>
<body>
	<h1 class="bg bg-success" >Payment Cancelled</h1>
	
	<a  style="float:right;" href="/ecom/mysqli-procedural/profile.php" class="btn btn-primary">CONTINUE SHOPPING</a>
</body>
</html>
