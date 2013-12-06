<table>
<tr>
<th>Item ID</th>
<th>Quantity</th>
<th>Options</th>
<th></th>
</tr>
<?php
	//echo "<tr>";
	//echo "<td>yea</td>";
	$orderid = $_POST["orderid"];
	//echo "<td>".$orderid."</td>";
	
	$db_hostname = "theccdb.db.12066565.hostedresource.com";
	$db_username = "theccdb";
	$db_password = "Q!@Wq12w";
	$db_name = "theccdb";
				
	$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
	if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
	$query = "SELECT * FROM Order where order_id = '$orderid'";
	$result = mysqli_query($db, $query);
	if(!$result) { die("Database access failed: " . mysql_error()); }
				
	$rows = mysqli_num_rows($result);

	
	for($j = 0; $j < $rows; $j++)
	{
		$row = mysqli_fetch_row($result);
		
		echo "<tr>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td><button class='myButton' onclick=completeOrder($row[0])>Complete Order</button></td>";
		echo "</tr>";
	}
	
?>
</table>