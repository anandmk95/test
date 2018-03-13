<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once 'config.php';
    
    
    $sql = "SELECT * FROM products WHERE product_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
     
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
       
        $param_id = trim($_GET["id"]);
        
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
             
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
               
                $title = $row["product_title"];
                $price = $row["product_price"];
                $desc = $row["product_desc"];
                 $image = $row["product_image"];
            } else{
              header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
  
    mysqli_stmt_close($stmt);
} else{
   
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <p class="form-control-static"><?php echo $row["product_title"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <p class="form-control-static"><?php echo $row["product_price"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $row["product_desc"]; ?></p>
                    </div>
                     <div class="form-group">
                        <label>Image</label>
                        <p class="form-control-static"><?php echo "<img style='height:70px;width:70px' src=images/".$row['product_image'].">"; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <p class="form-control-static"><?php echo $row["product_keywords"]; ?></p>
                    </div>
                    <p><a href="index1.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>