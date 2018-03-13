<?php
session_start();
if(!isset($_SESSION["uid"]) || empty($_SESSION["uid"])){
  header("location: admin.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
             $("#user").hide();
             $("#products").hide();

            $("#product_user").click(function(){
            $("#user").show();
             $("#products").hide();
        })
            $("#product_disp").click(function(){
            $("#products").show();
            $("#user").hide();
        })
            });
    </script>
</head>
<body>
    <div class="wrapper">

        <div class="container">
            
                <div class="col-md-12">
                    <div class="row">
                        <nav class="navbar navbar-inverse navbar-fixed" >
                         <ul class="nav navbar-nav navbar-right">
                            
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Signout</a></li>
                        </ul>
                        </nav>
                          <h3 class="bg bg-info" style="text-align: right">
                            <b style="font-family: cursive;" >Hi,Admin!</b>
                          </h3>
                           <hr>
                    </div>

             <div class="row">
                    <button type='button'  id='product_disp' class='btn btn-primary' name='product'>Product</button>
                    <button type='button'  id='product_user' class='btn btn-success' name='user' >User</button>
            </div>
            <div class="row">
                    <div id="products">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Product Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add Product</a>
                    </div>
                    <?php
                   
                    include 'config.php';
                    
                
                    $sql = "SELECT * FROM products";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Product_id</th>";
                                        echo "<th>Product_cat</th>";
                                        echo "<th>Product_brand</th>";
                                        echo "<th>Product_title</th>";
                                         echo "<th>Product_price</th>";
                                          echo "<th>Product_desc</th>";
                                          echo "<th>Product_image</th>";
                                          echo "<th>Product_keywords</th>";
                                          echo "<th>Actions</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['product_id'] . "</td>";
                                        echo "<td>" . $row['product_cat'] . "</td>";
                                        echo "<td>" . $row['product_brand'] . "</td>";
                                        echo "<td>" . $row['product_title'] . "</td>";
                                        echo "<td>" . $row['product_price'] . "</td>";
                                        echo "<td>" . $row['product_desc'] . "</td>";
                                         echo "<td><img  style='height:50px;width:50px' src=images/" . $row['product_image'] . "></td>";
                                        echo "<td>" . $row['product_keywords'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['product_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['product_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete1.php?id=". $row['product_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                           
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                  
                    mysqli_close($link);
                    ?>
                </div>      
        </div>
    </div>
                  <div id="user">
                    <?php
                    error_reporting(0);
                        include 'view_users.php';
                    ?>
                  </div>

</body>
</html>