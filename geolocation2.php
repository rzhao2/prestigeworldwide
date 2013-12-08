<?php


$A = "University of Rochester, Rochester, NY";
$B = "Strong Hospital, Rochester";
getdistanceInfo($A, $B);
function getdistanceInfo($locationA , $locationB)
{

	$locationA = urlencode($locationA);
	$locationB = urlencode($locationB);

	$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$locationA&destinations=$locationB&language=en-EN&sensor=false&mode=walking&units=imperial");
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

	echo $timeinminutes;
	//return array($origin, $dest, $timeinminutes, $distanceinmiles);

}

	$locLat = $_POST['loclat'];
	$locLong = $_POST['loclong'];
	
	//function getdistanceInfo()
	//{
		
		echo "later".$locLat."later";
		echo "longer".$locLong."longer";
		
		$connectionsLat =43.1286931; 
		$connectionsLong =-77.6281672;
		
		//$locationA = urlencode($locationA);
		//$locationB = urlencode($locationB);
		//sample query http://maps.google.com/maps/api/directions/json?origin=49.75332,6.50322&destination=49.71482,6.49944&mode=walking&sensor=false

		
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
		
		echo $timeinminutes;
		
		$locInfo = array(
			'time' => $timeinminutes,
		);
		
		echo json_encode($locInfo);

		//return array($origin, $dest, $timeinminutes, $distanceinmiles);

	//}
	
	
?>