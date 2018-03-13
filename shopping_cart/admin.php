<?php

session_start();
require_once 'config.php';
 

$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter name.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
  
    if(empty($username_err) && empty($password_err)){
       
    
        $admin_name=$_POST['username'];
         $admin_pass=$_POST['password'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run=mysqli_query($link,$admin_query);
     $count = mysqli_num_rows($run);
      $row = mysqli_fetch_array($run);

   if($count == 1){
       
         $_SESSION["uid"] = $row["id"];
         
        echo "<script>window.open('index1.php','_self')</script>";
    } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                   
                } 

            
        
        
   

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px cursive; }
        .wrapper{ width: 350px; padding: 30px;margin-left:500px;background-color: #E5DAA6  ;margin-top:70px }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p class="text text-info">Please fill in your credentials to login.</p>
        <form action="admin.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>