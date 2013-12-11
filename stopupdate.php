<?php
	include 'db_connect.php'; 
	
	$id = $_POST['orderid'];

	$query = "UPDATE `Order_info` SET `geostatus` =  '0'
		WHERE `order_id` = '$id'";
	
		$result = mysqli_query($db, $query);
	
	if(!$result) { die("Database access failed: " . mysql_error()); }

?>