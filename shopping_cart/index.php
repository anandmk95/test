<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include 'include\header.php';
?>
<br>

<div class="container-fluid">
  
<div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

         
            <div class="carousel-inner">

              <div class="item active">
                <img src="images\image2.jpg" alt="saree" style="height:400px;width:100%;">
               
              </div>

              <div class="item">
                <img src="images\image7.jpg" alt="Chicago" style="height:400px;width:100%;">
                
              </div>
            
              <div class="item">
                <img src="images\image3.jpg" alt="New York" style="height:400px;width:100%;">
               
              </div>
          
            </div>

            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
         
      </div> <br><br>
 <?php
 include 'include\footer.php';
 ?>

  </div>


</body>
</html>