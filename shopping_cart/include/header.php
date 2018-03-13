
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="row">
<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span  style="letter-spacing:5px; text-shadow: 1px 1px white;font-family:verdana;">FINDEE</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li ><a href="product.php">Products</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" id='search'>

      </div>
      <button type="button" class="btn btn-default" id='btn'><span  style='height:20px;width:10px;float: center' class="glyphicon glyphicon-search"> </span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge badge-info">0</span></a>
       <div class="dropdown-menu" style="width:400px;">
          
                  <table class='table table stripped'><th>S.No</th>
                 <th>Product</th>
                  <th>Image</th>
                  <th>Price </th>
                </table>
                </div>
     
      </li>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  </div>