<?php
	include 'db_connect.php';
	$content = $_POST;
	$_SESSION['content'] = $content;

?>
<html>

<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="script.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		
		<script src= "jquery-ui-timepicker-addon.js"></script>
		<link rel="stylesheet" href="jquery-ui-timepicker-addon.css" />	
		
		<script>
			 $(function() {
				$("#timeFrom").datetimepicker();
            });			
        </script>
</head>


<body>
<div id="container">
<?php
	include 'banner.php';
?>
			

<!--<a href="orderform.php?location=connections">Go back</a> -->

<form action="checkoutDB.php" method="post">

<br /><br /> 
<center> Time of Pickup : <input type="text" name = "timeFrom" id="timeFrom" class = "rounded1" />  </center>                      
<br /><br />
<!-- <input type="submit"> -->
	

<table border="1" style="margin: auto;">
<tr>
<th>Image</th>
<th>Item</th>
<th>Options</th>
<th>Price</th>
<th>Quantity</th>
<th>SubTotal</th>
</tr>
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
	<td  align="center"><img src='images/food_images/<?php echo $row[6];?>' alt='images' height='177' width=70%></td>
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
	<input type="hidden" name="total" value="<?php echo $total; ?>">
	<tr>
	<td align="center">Total: </td>
	<td align="center" colspan="5"><?php echo "$".$total; ?></td>

	</tr>
</table>
<br/><br/>
<center> <button class="myButton" type="submit">Confirm</button> </center>

</form>

</div>
</body>

</html>
