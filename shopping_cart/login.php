<?php
session_start();//session starts here
if(isset($_SESSION['uid']) && ($_SESSION['uid'])){
  header("location: profile.php");
  exit;
}
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 120px;

</style>
<body>
<div class="container">
    <div class="row">
        <br><br>
        <h2 class="bg bg-success" style="text-align: center">Findee</h2>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>

                            <input type="submit" class="btn btn-lg btn-success btn-block"  value="Login" name="login">
                                <center><b>Dont Have Account?<a href="register.php">Register Here</a></b></center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("config.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];
     $user_pass=md5($_POST['pass']);

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";



    $run=mysqli_query($link,$check_user);

    $count = mysqli_num_rows($run);
    if($count == 1){
        $row = mysqli_fetch_array($run);

        $_SESSION["uid"] = $row["id"];
        $_SESSION["name"] = $row["user_name"];
        $_SESSION["email"]=$user_email;
        echo "<script>window.open('profile.php','_self')</script>";

       

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>




