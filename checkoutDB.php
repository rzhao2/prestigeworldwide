<?php
session_start();
?>

<html>
<head>
	<title>The Connections Connection</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>

<body>
	<div id="container">

<?php
	include 'banner.php';

	$id =  $_SESSION['username'];
	$time = $_POST['timeFrom'];
	//$time = date("H:i:s", strtotime($time));
	$time = date("Y-m-d H:i:s", strtotime($time));
	$total = $_POST['total'];
	$content = $_SESSION['content'];
	
	$db_hostname = "theccdb.db.12066565.hostedresource.com";
	$db_username = "theccdb";
	$db_password = "Q!@Wq12w";
	$db_name = "theccdb";
	
	
	$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
	if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
	
	
	/*$queryCreate = "INSERT INTO 
	 	 Order_info (student_id, complete_time, status, total, comments)
	 	 VALUES('$id', '$time', '0', '$total', 'none');";
	mysqli_query($db, $queryCreate);*/
	
	//$order_id = mysqli_insert_id($db);
			 
	mysqli_query($db, $queryCreate2);
	
	$item_number = array();
	$item = array(); 
	//$total = 0;
	
		
	for($i=1; $i < $content['itemCount'] + 1; $i++) 
	{
		$name = 'item_name_'.$i;
		$price = 'item_price_'.$i;
		$quantity = 'item_quantity_'.$i;
		$options = 'item_options_'.$i;
		//$item_number['total'] = $i;

		//$item[$i]['name'] = $content[$name];
		//$item[$i]['quantity'] = $content[$quantity];
		//$item[$i]['options'] = $content[$options];
		
		$name = $content[$name];
		$price = $content[$price];
		$quantity = $content[$quantity];
		$options = $content[$options];
		
		$options = explode(':', $options);
		$options = $options[1];
		
		
		$query = "SELECT * FROM ConnectionsMenu WHERE item_name = '$name'";
		$result = mysqli_query($db, $query);
		if(!$result) { die("Database access failed: " . mysql_error()); }
		//$rows = mysqli_num_rows($result);
		$row = mysqli_fetch_row($result);
		
		$item_id = $row[0];
		
		echo "order: $order_id"."item: $item_id"."quantity: $quantity"."options: $options";

		
		$queryCreate2 = "INSERT INTO `theccdb`.`Order` (`index`, `item_id`, `quantity`, `options`, `order_id`) VALUES (NULL, '$item_id', '$quantity', NULL, '$options');";

		mysqli_query($db, $queryCreate2);
	}
	
	//$time = $_POST['timeFrom'];

	//echo "timebefore".$time."<br/>reachere";
	//$time = date("Y-m-d H:i:s", strtotime($time));
	//$time = date("H:i:s", strtotime($time));
	//echo $_POST["total"];
	//$total = $_POST['total'];
	
	//echo "myid".$id."theid<br/>";
	//echo "mynewtime".$time."time<br/>";
	//echo "mytotal".$total."total<br/>";
	
	//echo time();
	//echo "<br/>".strtotime($departure_time);
	//$content = unserialize($_POST['content']);
	
	//print_r($_SESSION['content']); 
	//echo $_POST['content'];
	
?>
<br/><br/>
Thank you for testing out our website. Unfortunately, we are not synced with University of Rochester cafes, but we would love to make that happen. </br>
As a thank you for your time and support, here's a picture of a red panda. Please give us feedback by taking a quick <a href= https://docs.google.com/forms/d/1oiyagQ2alydwWx94uQwMWNrSLZtIM8W4SyJTsGcA0hI/viewform>survey</a>. 
<br/><br/>
	<center><img src="images/redpanda.png"></center>

	</div>

</body>

</html>