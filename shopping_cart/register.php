<?php

require_once 'config.php';
 

$username = $password=$email=$mobile="";
$username_err = $password_err  =$email_err=$mobile_err ="";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        
        $sql = "SELECT id FROM users WHERE user_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
          
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = trim($_POST["username"]);
            
           
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
     
        mysqli_stmt_close($stmt);
    }
    
    
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
   if (empty($_POST["email"])) {
    $email_err = "Email is required";
  } else {
    $email = $_POST["email"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format"; 
    }
  }

    if(empty(trim($_POST['mobile']))){
        $mobile_err='Please enter a Mobile Number';
    }elseif(strlen(trim($_POST['mobile']))!= 10){
        $mobile_err = "Please Enter Valid Mobile number";
    }
    else 
    {
        $mobile=trim($_POST['mobile']);
    }

    
    
    if(empty($username_err) && empty($password_err)&& empty($email_err) && empty($mobile_err) ){
        
      
        $sql = "INSERT INTO users (user_name, user_pass,user_email) VALUES (?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password,$param_email);
            
           
            $param_username = $username;
            $param_password = md5($password); 
            $param_email = $email;
            
           
            if(mysqli_stmt_execute($stmt)){
               
                header("location: login.php");
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px cursive; }
        .wrapper{ width: 350px; padding: 10px;margin-left:500px;background-color: #E5DAA6  ;margin-top:10px }


    </style>
</head>
<body>
<h4 
    <br><br>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p class="text text-info">Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
             <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email?>">
                <span class="help-block"><?php echo $email_err; ?></span>
                

            </div>
             <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $mobile?>">
                <span class="help-block"><?php echo $mobile_err; ?></span>
                

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>