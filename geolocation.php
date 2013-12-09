
<html>

<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		
		<script>


var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(calculateTime);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;	
  }
 
 function calculateTime(position)
 {
	var loclat = position.coords.latitude;
	var loclong =  position.coords.longitude;
	var orderid = 10;
	
	 /* x.innerHTML="Latitude: " + loclat + 
  "<br>Longitude: " + loclong;*/
	$.ajax({
					type: "POST",
					url: "geolocation2.php",
					data: { loclat:loclat, loclong:loclong },
					cache: false,
					success: function(result){
						//document.write(result);
						$("#demo").html(result);
					}
				});
 }
 
 
var watchID;
var geoLoc;

function showLocation(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  html = "Latitude : " + latitude + " Longitude: " + longitude;
  	$("#demo").html(html);
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



</script>
</head>


<body>
<p id="demo">Click the button to get your coordinates:</p>
<button onclick="getLocation()">Try It</button>
<input type="button" onclick="getLocationUpdate();"  
                             value="Watch Update"/>

</body>
</html>


<?php /*

	$locLat = $_POST['orderid'];
	//$locLong = $_POST['loclong'];
	
	//function getdistanceInfo()
	//{
		
		echo "later".$locLat."later";
		//echo "longer".$locLong."longer";
		
		$connectionsLat =43.1286931; 
		$connectionsLong =-77.6281672;
		
		//$locationA = urlencode($locationA);
		//$locationB = urlencode($locationB);
		//sample query http://maps.google.com/maps/api/directions/json?origin=49.75332,6.50322&destination=49.71482,6.49944&mode=walking&sensor=false

		
		/*$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$locLat,$locLong&destinations=$connectionsLat,$connectionsLong&language=en-EN&sensor=false&mode=walking&units=imperial");
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
		
		echo json_encode($locInfo);*/

		//return array($origin, $dest, $timeinminutes, $distanceinmiles);

	//}
	
	
?>