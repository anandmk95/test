<?php
// Include config file
require_once 'config.php';
 

$cat=$brand=$title = $price = $desc =$filetmp=$keyword=$filetmp=$filename= "";
$cat_err=$brand_err=$title_err = $price_err = $desc_err =$image_err =$keyword_err="";
 

if(isset($_POST["id"]) && !empty($_POST["id"])){
   
    $id = $_POST["id"];
    
    

    $input_name = trim($_POST["cat"]);
    if(empty($input_name)){
        $cat_err = "Please enter a Product name.";
    }
     else{
        $cat = $input_name;
    }
    

    $input_name = trim($_POST["brand"]);
    if(empty($input_name)){
        $brand_err = "Please enter a Product name.";
    }
     else{
        $brand = $input_name;
    }
    
    $input_name = trim($_POST["title"]);
    if(empty($input_name)){
        $title_err = "Please enter a Product name.";
    }
     else{
        $title = $input_name;
    }
    
    
    $input_address = trim($_POST["price"]);
    if(empty($input_address)){
        $price_err = 'Please enter an Price.';     
    } else{
        $price = $input_address;
    }
    
   
    $input_salary = trim($_POST["desc"]);
    if(empty($input_salary)){
        $desc_err = "Please enter the Description.";     
    } else{
        $desc = $input_salary;
    }


     $input_address = trim($_POST["keyword"]);
    if(empty($input_address)){
        $keyword_err = 'Please enter an keyword.';     
    } else{
        $keyword = $input_address;
    }
    
 
    if(empty($cat_err) && empty($brand_err) && empty($title_err) && empty($price_err) && empty($desc_err)  && empty($keyword_err)){
  
        $sql = "UPDATE products SET product_cat=?,product_brand=?,product_title=?, product_price=?, product_desc=?,product_keywords=? WHERE product_id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
          
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_cat,$param_brand,$param_title, $param_price, $param_desc,$param_keyword,$param_id);
            
            
             $param_cat= $cat;
              $param_brand= $brand;
            $param_title= $title;
            $param_price = $price;
            $param_desc = $desc;
           
            $param_keyword=$keyword;
     
                $param_id = $id;
           
            if(mysqli_stmt_execute($stmt)){
                
                header("location: index1.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($link);
} else{
   
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
       
        $id =  trim($_GET["id"]);
        
        
        $sql = "SELECT * FROM products WHERE product_id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
           
            $param_id = $id;
            
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                   
                    $cat = $row["product_cat"];
                    $brand = $row["product_brand"];
                    $title = $row["product_title"];
                    $price = $row["product_price"];
                    $desc = $row["product_desc"];
                     $image = $row["product_image"];
                     $keyword = $row["product_keywords"];
                     
                } else{
                   
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }  else{
      
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                         <div class="form-group <?php echo (!empty($cat_err)) ? 'has-error' : ''; ?>">
                            <label>Category ID</label>
                            <input type="text" name="cat" class="form-control" value="<?php echo $cat; ?>">
                            <span class="help-block"><?php echo $cat_err;?></span>
                        </div>

                         <div class="form-group <?php echo (!empty($brand_err)) ? 'has-error' : ''; ?>">
                            <label>Brand Id</label>
                            <input type="text" name="brand" class="form-control" value="<?php echo $brand; ?>">
                            <span class="help-block"><?php echo $brand_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                            <span class="help-block"><?php echo $price_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="desc" class="form-control"  value="<?php echo $desc; ?>"></textarea>
                            <span class="help-block"><?php echo $desc_err;?></span>
                        </div>
                      
                         <div class="form-group <?php echo (!empty($keyword_err)) ? 'has-error' : ''; ?>">
                            <label>Keyword</label>
                            <input type="text" name="keyword" class="form-control" value="<?php echo $keyword; ?>">
                            <span class="help-block"><?php echo $keyword_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>