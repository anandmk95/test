<?php
error_reporting(0);
include("config.php");

$delete_id=$_GET['del'];
$product_id=$_GET['pro'];

$delete_query="delete  from users WHERE id='$delete_id'";//delete query
$run=mysqli_query($link,$delete_query);


$delete_query1="delete  from products WHERE product_id='$product_id'";
$run1=mysqli_query($link,$delete_query1);

if($run)

{

    echo "<script>window.open('index1.php?deleted=user has been deleted','_self')</script>";
}

else if($run1)
{

    echo "<script>window.open('view_users.php?deleted=product has been deleted','_self')</script>";
}
?>