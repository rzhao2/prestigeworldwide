<?php
session_start();
?>

<html>
<head>
	<title>The Connections Connection</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.js'></script>
	
	<script>
		function toggle(button)
		{
			if(document.getElementById("realGeo").value=="STOP"){
				stopWatch();
				document.getElementById("realGeo").value="START";}

			else if(document.getElementById("realGeo").value=="START"){
				getLocationUpdate();
				document.getElementById("realGeo").value="STOP";
			}
		}
	
		var watchID;
		var geoLoc;

		function showLocation(position) {
		var loclat = position.coords.latitude;
		var loclong =  position.coords.longitude;
		var orderid = $('#order_id').val();
		
		$.ajax({
					type: "POST",
					url: "updatelocation.php",
					data: { orderid:orderid, loclat:loclat, loclong:loclong, },
					dataType: 'json',
					cache: false,
					success: function(result){
						$("#demo").html(result.id + " " + result.locLat +" "+result.locLong + " " + result.time + " " + result.projectedtime);
					}
			});
			
		//html = "Order ID" + orderid + " Latitude : " + latitude + " Longitude: " + longitude;
		//$("#demo").html(html);
		}

		function errorHandler(err) {
			if(err.code == 1) {
			alert("Error: Access is denied!");
			}else if( err.code == 2) {
				alert("Error: Position is unavailable!");
			}
		}
		function getLocationUpdate(){
			if(navigator.geolocation){
			// timeout at 60000 milliseconds (60 seconds)
			var options = {timeout:60000};
			geoLoc = navigator.geolocation;
			watchID = geoLoc.watchPosition(showLocation, 
                                     errorHandler,
                                     options);
			}else{
				alert("Sorry, browser does not support geolocation!");
			}
		}
		
		function stopWatch(){
			geoLoc.clearWatch(watchID);
		}
			
	</script>
</head>

<body>
	<div id="container">

<?php
	include 'banner.php';

?>
 <img class="centered" src="images/SkipText.png"/>
<?php

	$id =  $_SESSION['id'];
	$student_name = $_SESSION['username'];
	//$time = $_POST['timeFrom'];
	//$time2 = $_POST['timeTo'];
	
	//echo $_POST['accordionIndex'];
	//echo $_POST['timeReal'];
	
	if($_POST['accordionIndex'] == 0)
	{
		$time = $_POST['timeFrom'];
	
	}
	else if($_POST['accordionIndex'] == 1)
	{
		$time = $_POST['timeTo'];
	}
	else
	{
		$time = $_POST['timeReal'];
	}
	
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
	
	$queryCreate="";
	if($_POST['accordionIndex'] == 2)
	{
		$queryCreate = "INSERT INTO 
	 	 Order_info (student_id, complete_time, status, total, comments, student_name, geostatus)
	 	 VALUES('$id', '$time', '0', '$total', 'none', '$student_name', '1');";
	}
	else
	{
		$queryCreate = "INSERT INTO 
	 	 Order_info (student_id, complete_time, status, total, comments, student_name, geostatus)
	 	 VALUES('$id', '$time', '0', '$total', 'none', '$student_name', '0');";
	}
	
	mysqli_query($db, $queryCreate);
	
	$order_id = mysqli_insert_id($db);
			 	
	echo "<input id = 'order_id' type='hidden' name='order_id' value='$order_id'/>";
			
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
		
		//echo "order: $order_id"."item: $item_id"."quantity: $quantity"."options: $options";

		
		$queryCreate2 = "INSERT INTO `theccdb`.`Order` (`index`, `item_id`, `item_name`, `quantity`, `options`, `order_id`) VALUES (NULL, '$item_id', '$name', '$quantity', '$options', '$order_id');";

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
	if($_POST['accordionIndex'] == 2)
	{
		echo "<center><input type='button' class = 'myButton' id='realGeo' value='START' onclick='toggle(this);'></center>";
	}
	
?>
<!-- <br/><br/>
Thank you for testing out our website. Unfortunately, we are not synced with University of Rochester cafes, but we would love to make that happen. </br>
As a thank you for your time and support, here's a picture of a red panda. Please give us feedback by taking a quick <a href= https://docs.google.com/forms/d/1oiyagQ2alydwWx94uQwMWNrSLZtIM8W4SyJTsGcA0hI/viewform>survey</a>. -->
<br/><br/>
	<center><img src="images/redpanda.png"></center>
</div>
<p id="demo"></p>
</body>

</html>