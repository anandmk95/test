<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="row">
<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"><span  style="letter-spacing:4px;text-shadow: 1px 1px white;font-family:verdana;">FINDEE</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a   href="profile.php">Products</a>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="#">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" id='search'>

      </div>
      <button type="button" class="btn btn-default" id='btn'><span class="glyphicon glyphicon-search"> </span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="cart_container"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
       <div class="dropdown-menu" style="width:500px;padding:20px">
          
                  <table class='table table-stripped' >
                    <th class="success">Action</th>
                   <th  class="success">S.No</th>
                  <th class="success">Product</th>
                   <th  class="success">Image</th>
                   <th class="success">Price </th>
                </table>

                <table id="cart_display" class="table table-hover">

                </table>
                 <a href="cart.php"  style="float: right" class="btn btn-success ">CART CHECKOUT</a>
                </div>
      </li>
      <li><a href="logout.php" class="btn">Sign Out</a></li>
    </ul>
  </div>
</nav>
  </div>

  <div class="row">
    <div id="product_msg">
    </div>
  </div>
    <div class="page-header">
        <h3 class="bg bg-info" style="text-align: right">Hi,<b style="font-family: cursive;" ><?php echo $_SESSION['email']; ?></b></h3>
    </div>
   <?php
    include 'include\product1.php';
   ?>
   
</html>