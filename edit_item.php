<?php

include 'db_connect.php';

$id = (string) $_POST['item_id'];
//echo $id;
$query = "SELECT * FROM ConnectionsMenu WHERE item_id = " . $id;

$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);


?>
	<form method="POST">
		ID<input type="text" name="item_id" value="<?php echo $row[0] ?>" disabled />
		Item Name:<input type="text" name="item_name" value="<?php echo $row[1] ?>" />
		Category:<select name="category"  value="<?php echo $row[2] ?>">
			  <option value="Cold Drinks">Cold Drinks</option>
			  <option value="Hot Drinks">Hot Drinks</option>
			  <option value="Refrigerated Food">Refrigerated Food</option>
			  <option value="Pre-Packaged/Snacks">Pre-Packaged/Snacks</option>
			  <option value="Pastries">Pastries</option>
		</select>
		Description:<input type="text" name="description" value="<?php echo $row[3] ?>" />
		Price:<input type="text" name="price" value="<?php echo $row[4] ?>" />
	</form>
	
<?php



?>