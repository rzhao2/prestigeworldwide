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
<div height="50%">			
<p>
<!--<a href="orderform.php?location=connections">Go back</a> -->

<img class="centered" src="images/SetTimeText.png"/>
<form action="checkoutDB.php" method="post">
<center> Time of Pick-up : <input type="text" name = "timeFrom" id="timeFrom" class = "rounded1" />  </center>                      
<br />
<!-- <input type="submit"> -->
	

<table id="box-table-a" style="margin: auto;">

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
	<input type="hidden" name="total" value="<?php echo $total; ?>">
	<tr>
	<td align="center">Total: </td>
	<td align="center" colspan="5"><?php echo "$".$total; ?></td>

	</tr>
</div>
</table>

<br/><br/>
<?php 
if($_SESSION['username'] != "") { 
	echo '<center><button class="myButton" type="submit">Confirm</button></center>';
} else { ?>
<div style="text-align: center">
	<div style="margin: auto; width: 462px;"><b>NOTE: You must login to confirm your order:</b><br />
		<form name="login_form" method ="POST" action ="login.php">
	        <table id="login_table">
	            <tr>
	                <td colspan="3">Login with your University of Rochester credentials.</td>
	            </tr>
	            <tr>
	                <td class="align_left"><input type="text" class="login_input" name="username" placeholder="Net ID"/></td>
					<td class="align_left"><input type="password" class="login_input" name="password" placeholder="Password"/></td>
					<td class="align_right"><button type="submit" id="login_submit">Login</button></td>
	            </tr>
	        </table>
	    </form>
	</div>
</div>
<?php } ?>

</form>

</p>
</div>
</div>
</body>

</html>
