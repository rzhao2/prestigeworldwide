<?php

include 'db_connect.php';
if($_SESSION['username'] != "admin")
{
	header('Location: index.php');	
}

$id = (string) $_POST['item_id'];
$query = "SELECT * FROM ConnectionsMenu WHERE item_id = " . $id;
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
	</head>
	<body>
		<div id="container">
			<?php 
				include 'banner.php';
			?>
			<form action="database_admin.php" method="POST">
				<table>
					<tr>
						<td class="align_right">ID:</td>
						<td class="align_left"><input type="text" name="item_id" value="<?php echo $row[0] ?>" disabled /></td>
					</tr>
					<tr>
						<td class="align_right">Item Name:</td>
						<td class="align_left"><input type="text" name="item_name" value="<?php echo $row[1] ?>" /></td>
					</tr>
					<tr>
						<td class="align_right">Category:</td>
						<td class="align_left">
							<select name="category" value="<?php echo $row[2] ?>">
								<option value="Cold Drinks">Cold Drinks</option>
								<option value="Hot Drinks">Hot Drinks</option>
								<option value="Refrigerated Food">Refrigerated Food</option>
								<option value="Pre-Packaged/Snacks">Pre-Packaged/Snacks</option>
								<option value="Pastries">Pastries</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="align_right">Description:</td>
						<td class="align_left"><input type="text" name="description" value="<?php echo $row[3] ?>" /></td>
					</tr>
					<tr>
						<td class="align_right">Price:</td>
						<td class="align_left"><input type="text" name="price" value="<?php echo $row[4] ?>" /></td>
					</tr>
					<tr>
						<td class="align_right" colspan="2"><button type="submit">Update Item</button></td>
					</tr>
				</table>
			</form>
	
		</div> <!-- end container -->
	</body>
</html>
