<?php
require_once 'config.php';
 
$cat=$brand=$title = $price = $desc =$keyword =$filetmp=$filename =$filepath="";
$cat_err=$brand_err=$title_err = $price_err = $desc_err =$keyword_err =$image_err="";
 if($_SERVER["REQUEST_METHOD"] == "POST"){

              $input_name = trim($_POST["cat"]);
            if(empty($input_name)){
                $cat_err = "Please enter a  Category Id.";
            } else{
                $cat= $input_name;
            }

              $input_name = trim($_POST["brand"]);
            if(empty($input_name)){
                $brand_err = "Please enter a  Brand Id.";
            } else{
                $brand= $input_name;
            }

          
            $input_name = trim($_POST["title"]);
            if(empty($input_name)){
                $title_err = "Please enter a  Product name.";
            } else{
                $title= $input_name;
            }

            
            $input_name = trim($_POST["price"]);
            if(empty($input_name)){
                $price_err = "Please enter a price.";
            } else{
                $price= $input_name;
            }
            
           
            $input_address = trim($_POST["desc"]);
            if(empty($input_address)){
                $desc_err = 'Please enter an Description.';     
            } else{
                $desc = $input_address;
            }
              $input_address = trim($_POST["keyword"]);
            if(empty($input_address)){
                $keyword_err = 'Please enter an Keyword.';     
            } else{
                $keyword = $input_address;
            }
            
        $filetmp = $_FILES["image"]["tmp_name"];
        $filename = $_FILES["image"]["name"];
        $filepath = "images/".$filename;        
        if($filetmp == "")        {
            $image_err= "* Please select a photo";
        }else{
                    move_uploaded_file($filetmp,$filepath);                        
                    
                }                
            

    
    if(empty($title_err) && empty($price_err) && empty($desc_err)&& empty($image_err) && empty($keyword_err)){
       
        $sql = "INSERT INTO products (product_cat,product_brand,product_title, product_price, product_desc,product_image,product_keywords) VALUES (?, ?, ?, ?,?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
         
            mysqli_stmt_bind_param($stmt, "sssssss", $param_cat,$param_brand,$param_title, $param_price, $param_desc,$param_image,$param_keywords);
            
            
             $param_cat = $cat;
              $param_brand = $brand;
            $param_title = $title;
            $param_price = $price;
            $param_desc = $desc;
             $param_image =  $filename;
            $param_keywords = $keyword;

            
           
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                         <div class="form-group <?php echo (!empty($cat_err)) ? 'has-error' : ''; ?>">
                            <label>category ID</label>
                            <input type="text" name="cat" class="form-control" value="<?php echo $cat; ?>">
                            <span class="help-block"><?php echo $cat_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($brand_err)) ? 'has-error' : ''; ?>">
                            <label>Brand ID</label>
                            <input type="text" name="brand" class="form-control" value="<?php echo $brand; ?>">
                            <span class="help-block"><?php echo $brand_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>product title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                         <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                            <label>product price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                            <span class="help-block"><?php echo $price_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                            <label>product description</label>
                            <textarea name="desc" class="form-control"><?php echo $desc; ?></textarea>
                            <span class="help-block"><?php echo $desc_err;?></span>
                        </div>

                         <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>

                         <div class="form-group <?php echo (!empty($keyword_err)) ? 'has-error' : ''; ?>">
                            <label>Keyword</label>
                            <input type="text" name="keyword" class="form-control" value="<?php echo $keyword; ?>">
                            <span class="help-block"><?php echo $keyword_err;?></span>
                        </div>
                      
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>