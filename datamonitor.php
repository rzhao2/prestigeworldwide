<table id="box-table-c" width=100%>
<tr>
<th>Order ID</th>
<th>Student ID</th>
<th>Student Name</th>
<th>Request Time of Completion</th>
<th>Total</th>
<th></th>
</tr>
<?php
	$db_hostname = "theccdb.db.12066565.hostedresource.com";
	$db_username = "theccdb";
	$db_password = "Q!@Wq12w";
	$db_name = "theccdb";
				
	$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
	if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
	$query = "SELECT * FROM Order_info ORDER BY `complete_time`";
	$result = mysqli_query($db, $query);
	if(!$result) { die("Database access failed: " . mysql_error()); }
				
	$rows = mysqli_num_rows($result);

	
	for($j = 0; $j < $rows; $j++)
	{
		$row = mysqli_fetch_row($result);
		
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[7]."</td>";
		
		date_default_timezone_set('America/New_York');

		$diff_seconds  = strtotime($row[3]) - time();
		$stat = floor($diff_seconds/3600).'Hours,'.floor(($diff_seconds%3600)/60).'Min';
		
		//echo "<b>(".$stat."from NOW)</b>";
		echo "<td>".$row[3]." <b>(".$stat." from NOW)</b></td>";
		echo "<td>$".$row[5]."</td>";
		echo "<td><button class='myButton' onclick=viewDetails($row[0])>View Order Details</button></td>";
		echo "</tr>";
		
		if($row[8] == 1)
		{
			echo "<input type='hidden' class='markers' name='markers[]' value='$row[0],$row[7],$row[9],$row[10]' />";
		}
	}
	
?>
</table>