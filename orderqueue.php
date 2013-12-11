<?php
    /*echo "http://" . $_SERVER['HTTP_HOST'];*/
    include 'db_connect.php';

    if ("http://" . $_SERVER['HTTP_HOST'] == "http://earthftw.com") {
        echo '<script type="text/javascript">
        <!--
        window.location = "http://www.earthftw.com"
        //-->
        </script>';
        end;
    }

    if($_SESSION['username'] != "admin"){ //nonadmins disallowed
    	header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>		
		
		<style>
			#map-canvas {
				height: 100%;	
			}
			
			#map_container {
				height: 50%;
				width: 100%
				box-sizing:border-box;
				-moz-box-sizing:border-box;
				-webkit-box-sizing:border-box;
				border:6px inset #a8b8e9;
			}
			
			#left_large {
				width: 60%;
				float: left;
				overflow: auto;
				display:table-row;
				font-family: "Trebuchet MS", tahoma, verdana, sans-serif;
				background-color: #e8edff;
				box-sizing:border-box;
				-moz-box-sizing:border-box;
				-webkit-box-sizing:border-box;
				border:6px groove #e8edff;
			}
			
			#right_small {
				width: 40%;
				background-color: #e8edff;
				 box-sizing:border-box;
				-moz-box-sizing:border-box;
				-webkit-box-sizing:border-box;
				border:6px groove #e8edff;

			}
			
			#right_bottom {
				width: 100%;
				float: left;
				height: 100%;
				border: none;
				display:table-row;
				color: white;
				font-size: 14px;
				font-family: "Trebuchet MS", tahoma, verdana, sans-serif;		
			}
		</style>
		
		<script>
			var map;
			
			(function poll(){
				setTimeout(function(){
				$.ajax({ url: "datamonitor.php", success: function(data){
					$("#left_large").html(data);
					/*var myLatlng = new google.maps.LatLng(43.131050, -77.622086);

					var marker = new google.maps.Marker({
						position: myLatlng,
						title:"Hello World!"
					});

					// To add the marker to the map, call setMap();
					marker.setMap(map);*/
					initialize();

					$('.markers').each(function(){
						//document.write($(this).val());
						//alert($(this).val());
						var markerInfo = ($(this).val()).split(",");
						//var markerInfo = .split(",");
						var myLatlng = new google.maps.LatLng(markerInfo[2],markerInfo[3]);
						
						//document.write(markerInfo[2]);
						
						var marker = new google.maps.Marker({
							position: myLatlng,
							title:"Hello World!"
						});
	
						// To add the marker to the map, call setMap();
						marker.setMap(map);
					});
					
					//clearMarkers();
				}, dataType: "html", complete: poll, timeout: 30000 });
				}, 5000);
			})();
			
			function clearMarkers() {
				setAllMap(null);
			}
			
			function viewDetails(orderid)
			{
				var dataString = 'orderid='+ orderid;
				//document.write(dataString);

				$.ajax({
					type: "POST",
					url: "datamonitor2.php",
					data: { orderid: orderid, },
					cache: false,
					success: function(result){
						//document.write(result);
						$("#right_bottom").html(result);
					}
				});
			}
			
			function completeOrder(orderid)
			{
				//var dataString = 'orderid='+ orderid;
				//document.write(orderid);

				$.ajax({
					type: "POST",
					url: "deleteorder.php",
					data: { orderid: orderid, },
					cache: false,
					success: function(result){
						$("#right_bottom").html('');
					}
				});	
			}		

			function initialize() {
				var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
				var myLatlng = new google.maps.LatLng(43.1286931, -77.6281672);

				var mapOptions = {
				center: myLatlng,
				zoom: 14
				};
				map = new google.maps.Map(document.getElementById("map-canvas"),
				mapOptions);
				
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Connections',
					icon: iconBase + 'schools_maps.png'
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);

		</script>
	
	</head>
	<body>
		<div id="container">
			
			<?php
				include 'banner.php';
			?>
			<div id='left_large' class="scrollable">
				<?php include 'datamonitor.php'; ?>
            <!-- <h2><a href="completedorders.php">All Completed Orders:</a></h2> -->
				
            <!-- For each order in the order queue: 
            <div class="order">
            <form action ="completeorder.php" method="POST">
                <input type="hidden" name="order_id" value="5" />
                <h2> Order: </h2>

                <h3> User: Matt </h3>
                <h3> Finish by: 3:00pm November 18, 2013 </h3>
                <br />
                <ul>
                    <li>Item:</li>
                    <ul>
                        <li>Bagel</li>
                    </ul>
                    <li>Extras:
                    <ul>
                        <li>Cream Cheese</li>
                        <li>Toasted</li>
                    </ul>
                </ul>

                <br />
                <input type="submit" name="COMPLETE ORDER" value = "COMPLETE ORDER"/>
			</div>
            </form> -->
			</div>
			<div id='right_small'>

				<div id= "map_container">
					<div id="map-canvas" />
				</div>
				
				<div id="right_bottom"/>
			</div>

		</div><!-- end container -->
</body>
</html>