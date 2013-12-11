<?php

$id = $_POST['orderid'];
$locLat = $_POST['loclat'];
$locLong = $_POST['loclong'];
$connectionsLat =43.1286931; 
$connectionsLong =-77.6281672;

include 'db_connect.php'; 

				
$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=".$locLat.','.$locLong."&destinations=".$connectionsLat.','.$connectionsLong."&language=en-EN&sensor=false&mode=walking&units=imperial");

$data = json_decode($data);
	
$time = 0;
$distance = 0;

foreach($data->rows[0]->elements as $road) {
	$time += $road->duration->value;
	$distance += $road->distance->value;
}

$origin = $data->origin_addresses[0];
$dest = $data->destination_addresses[0];

$timeinminutes = $time/60;
$distanceinmiles = $distance/1609.344;
		
//echo $timeinminutes;
		
//$projectedtime = time()+$time;
date_default_timezone_set('America/New_York');
		
$projectedtime = date('Y-m-d H:i:s', time()+$time);

$query = "UPDATE `Order_info` SET complete_time =  '$projectedtime',
		`geostatus` =  '1',
		`lat` =  '$locLat',
		`lng` =  '$locLong'
		WHERE `order_id` = '$id'";
	
$result = mysqli_query($db, $query);
if(!$result) { die("Database access failed: " . mysql_error()); }


$locInfo = array(
	'id' => $id,
	'locLat' => $locLat,
	'locLong' => $locLong,
	'time' => $timeinminutes,
	'projectedtime' => $projectedtime
);
		
echo json_encode($locInfo);
		
?>