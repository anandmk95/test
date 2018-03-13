<?php
include("config.php");
//Store transaction information into database from PayPal
   // error_reporting(E_ERROR | E_PARSE);  

$txn_id = $_GET['tx'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$payment_status = $_GET['st'];
//Get product price to store into database
if(!empty($txn_id)){
    //Insert tansaction data into the database
    mysqli_query($link, "INSERT INTO payments(txn_id,payment_gross,currency_code,payment_status) VALUES('".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
	$last_insert_id = mysqli_insert_id($link);    
?>
	<h1 >Your payment has been successful.</h1>
    <h1>Your Payment ID - <?php echo $last_insert_id; ?>.</h1>
<?php
}else{
?>
	<h1>Your payment has failed.</h1>
<?php
}
?>

	
	<a  style="float:right;" href="/ecom/mysqli-procedural/profile.php" class="btn btn-primary">CONTINUE SHOPPING</a>