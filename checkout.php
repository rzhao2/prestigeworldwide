<?php
	session_start();
	$content = $_POST;
	$_SESSION['content'] = $content;
	//$id =  $_SESSION['username'];
	
	/*$db_hostname = "theccdb.db.12066565.hostedresource.com";
	$db_username = "theccdb";
	$db_password = "Q!@Wq12w";
	$db_name = "theccdb";
				
	$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
	if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
	$sql="SELECT * FROM Student_Info Where $student_id = '$id'";
	$result = mysqli_query($db, $sql);
	if(!$result) { die("Database access failed: " . mysql_error()); }
	
	$rows = mysqli_num_rows($result);* may or may not need this*/ 
	


	
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
		<script src= "jquery-ui-timepicker-addon.js"></script>
		<link rel="stylesheet" href="jquery-ui-timepicker-addon.css" />	
		
		<script>
			 $(function() {
				$("#timeFrom").datetimepicker();
            });

			$(function() {
				$("#timeTo").datetimepicker();
            });	
			
			 $(function() {
				var icons = {
				header: "ui-icon-circle-arrow-e",
				activeHeader: "ui-icon-circle-arrow-s"
			};
			$( "#accordion" ).accordion({
				icons: icons,
				heightStyle: "content",
				active: 0,
				change: function (event, ui) {
                var activeIndex = $("#accordion").accordion("option", "active");
				alert(activeIndex);
               // document.getElementById("#accordionIndex").value = activeIndex;
            }
			});
			$( "#toggle" ).button().click(function() {
				if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
				$( "#accordion" ).accordion( "option", "icons", null );
				} else {
				$( "#accordion" ).accordion( "option", "icons", icons );
			}
		});
		});
		
		
		var x=document.getElementById("displayTime");
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
					dataType: 'json',
					cache: false,
					success: function(result){
						//document.write(result);
						//var html = result.time;
						 var html = "Our algorithm has determined that it will take <b>" + result.time + "</b> minutes for you to get to Connections using your location and average walking speed. Click the box below to modify the time to your liking.  <br/><br/> <input type='text' name='timeTo' id='timeTo' class = 'rounded1' value='"+result.projectedtime+"'/>";
						$("#displayTime").html(html);
						
						$(function() {
								$("#timeTo").datetimepicker();
						});	
					}
				});
		}
		
		$(document).ready(function () {
        $("#accordion").accordion({
            active: 0,
            change: function (event, ui) {
                var activeIndex = $("#accordion").accordion("option", "active");
				//alert(activeIndex);
                $("#accordionIndex").val(activeIndex);
            }
        });
		});
		
		function getRealLocation()
		{
			//alert("stuff");
			if (navigator.geolocation)
			{
				navigator.geolocation.getCurrentPosition(calculateRealTime);
			}
			else{x.innerHTML="Geolocation is not supported by this browser.";}
		}
		
		function calculateRealTime(position)
		{
			var loclat = position.coords.latitude;
			var loclong =  position.coords.longitude;
			//alert("stuff");
			$.ajax({
					type: "POST",
					url: "geolocation2.php",
					data: { loclat:loclat, loclong:loclong },
					dataType: 'json',
					cache: false,
					success: function(result){
						//alert(result.projectedtime);
						$('#timeReal').val(result.projectedtime);
						$("#displayRealTime").html("Thanks, now confirm your request.");
					}
				});
		}
		
		$(function() {
			$('#checkout').submit(function() {
				if($("#accordionIndex").val() == 0)
				{
					if($("#timeFrom").val() == '')
					{
						alert("Your input is invalid");
						return false;

					}
					else{
						return true;
					}
				}
				if($("#accordionIndex").val() == 1)
				{
					if($("#timeTo").val() == null || $("#timeTo").val() == '')
					{
						alert("Your input is invalid");
						return false;

					}
					else{
						return true;
					}
				}
				if($("#accordionIndex").val() == 2)
				{
					getRealLocation();
					if($("#timeReal").val() == '')
					{
						alert("You didn't grant us permission to use your location.");
						return false;

					}
					else{
						return true;
					}
				}
			// DO STUFF*/
			//alert("sup");
			return true; // return false to cancel form action
			});
		});
        </script>
		
		
</head>


<body>

<div id="container">
<?php
	include 'banner.php';
?>
<div height="50%">			
<p>
<!--<a href="orderform.php?location=connections">Go back</a> -->

<img class="centered" src="images/SetTimeText.png"/>
<form id="checkout" action="checkoutDB.php" method="post">


<!-- <input type="submit"> -->
<div style="width: 50%; float: left">	
<center>
<table id="box-table-a" style="margin:0">

<tr>
<th>Image</th>
<th>Item</th>
<th>Options</th>
<th>Price</th>
<th>Quantity</th>
<th>SubTotal</th>
</tr>
<div style="height:100%;overflow:auto;">
<?php 
	//print_r($content); 

	$db_hostname = "theccdb.db.12066565.hostedresource.com";
	$db_username = "theccdb";
	$db_password = "Q!@Wq12w";
	$db_name = "theccdb";
				
	$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
	if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
	$query = "SELECT * FROM ConnectionsMenu WHERE Category = '$Category'";
	$result = mysqli_query($db, $query);
	if(!$result) { die("Database access failed: " . mysql_error()); }
				
	$rows = mysqli_num_rows($result);
		
	$item_number = array();
	$item = array(); 
	$total = 0;

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
?>
	<tr>
	<td style="max-width:150px;" align="center"><img src='images/food_images/<?php echo $row[6];?>' alt='images' height=auto width=100%></td>
	<td  align="center"><?php echo $name;?></td>
	<td  align="center"><?php echo $options;?></td>
	<td  align="center"><?php echo "$".$price;?></td>
	<td  align="center"><?php echo $quantity;?></td>
	<td  align="center"><?php echo "$".$price*$quantity; ?></td>
	</tr>
<?php
	$total = $total+$price*$quantity;
	}

?>
	<tr>
	<td align="center">Total: </td>
	<td align="center" colspan="5"><?php echo "$".$total; ?></td>
	<input type="hidden" name="total" value="<?php echo $total; ?>">

	</tr>
</div>
</table>
</center>
</div>

<div style="width: 50%; float: left">	

<center><div id="accordion">
  <h3>Manually Select Time of Pick-up</h3>
  <div>
		<p>Click the box to select your time. <br/><br/> <input type="text" name = "timeFrom" id="timeFrom" class = "rounded1" /></p>
  </div>
  <h3>Geolocation</h3>
  <div>
		<!--</p>Our algorithm has determined that it will take 10 minutes for you to get to Connections using your location and average walking speed. Click the box below to modify the time to your liking.  <br/><br/> <input type="text" name = "timeTo" id="timeTo" class = "rounded1" /></p> -->
		<p id="displayTime">Click Below to use our algorithm to determine how long it would take base on your location.<br/> <br/>
		<input type="button" onclick="getLocation();"  value="Calculate Time"/></p>
  </div>
  <h3>Real-Time Geolocation</h3>
  <div>
		<p id="displayRealTime">Leave your browser open when you click confirm, your location will be automatically be updated to the server and notify the employees. Doing this will provide us better accuracy of your locations and your position in the (virtual) line can be changed. This will allow us to get your food on time as accurate as possible.
		<br/><br/>
		<input type="button" onclick="getRealLocation();" value="Grant Us Permission to Use Your Location"/> 
		</p>
		<input hidden type="text" name = "timeReal" id="timeReal" class = "rounded1" />
  </div>
</div></center>

<input id = "accordionIndex" type="hidden" name="accordionIndex" value="0">
<br/><br/>
<center> <button class="myButton" type="submit">Confirm</button> </center>

</div>
</form>

</p>
</div>
</div>
</body>

</html>