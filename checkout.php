<?php
	session_start();
	$content = $_POST;
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>


<body>

<?php
	include 'banner.php';
	include 'navbar.php';
?>
			
<p>
Checkout stuff goes here!
<a href="orderform.php?location=connections">Go back</a>

<table border="1" style="margin: auto;">
<tr>
<th>Image</th>
<th>Item</th>
<th>Options</th>
<th>Price</th>
<th>Quantity</th>
<th>SubTotal</th>

<?php 
	print_r($content); 

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

	}

?>
	<tr>
	<td align="center">Total: </td>
	<td align="center" colspan="5"> </td>

	</tr>
</table>
</p>
</body>

</html>