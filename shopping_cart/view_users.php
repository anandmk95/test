



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
</style>
<body>
<div class="table-scroll">
    <h1 align="center">All the Users</h1>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <tr>
            <th  >User Id</th>
            <th  >User Name</th>
            <th style="width:50%">User pass</th>

            <th style="width:20%">User email</th>
            <th>Delete User</th>
        </tr>
        </thead>
        <?php
        include("config.php");
        $view_users_query="select * from users";
        $run=mysqli_query($link,$view_users_query);
        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];
        ?>
        <tr>

            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>
        <?php } ?>
    </table>
        </div>



</div>


</body>

</html>
