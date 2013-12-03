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

include 'parse_options.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
        <script src="stringEncoder.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="container">
			<?php 
				include 'banner.php';
			?>
			<form action="submit_changes_to_item.php" method="POST">
				<table>
					<tr>
						<td class="align_right">ID:</td>
						<td class="align_left"><input type="text" name="item_id" value="<?php echo $row[0] ?>" readonly /></td>
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
								<option value="Pre-Packaged Food/Fruits">Pre-Packaged Food/Fruits</option>
								<option value="Counter">Counter</option>
								<option value="Frozen">Frozen</option>
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
						<td class="align_right">Options:</td>
						<td class="align_left"><input type="text" name="options" value="<?php echo $row[5] ?>" readonly /></td>
					</tr>
					<tr>
						<td class="align_right">Image:</td>
						<td class="align_left"><input type="file" name="image" accept="image/*" /></td>
					</tr>
					<tr>
						<td class="align_right" colspan="2"><button type="submit">Update Item</button></td>
					</tr>
				</table>
			</form>






			<div id="options">
				<!--Fill this with all the options -->
					<?php
						$options = $row[5];
						$optionSets = getOptionSets($options);
							for($i = 0; $i<count($optionSets); $i++)
							{
						?>
									<br />
									<table id="Table<?php echo $i;?>">
									<tr>
										<th><input type="text" name="optionSetName" value="<?php echo getOptionName($optionSets[$i]); ?>" /></th>
									</tr>
									<tr>
										<th><input type="text" name="" value="Name" readonly/></th>
										<th><input type="text" name="" value="Additional Price" readonly/></th>
									</tr>
							<?php
								$numOptions = getNumOptions($optionSets[$i]);
								$o = getOptions($optionSets[$i]);
								for($k=0; $k<$numOptions; $k++)
								{
							?>
									<tr>
										<td><input type="text" name="" value="<?php echo $o[$k][0];?>" /></td>
										<td><input type="text" name="" value="<?php echo $o[$k][1];?>" /></td>
									</tr>
							<?php
								}
							?>
							<button onclick = "addOption('Table<?php echo $i;?>')">Add an Option</button>
									</table>
							<?php
							}
					?>
					<button onclick = "addOptionSet('Table<?php echo $i-1;?>')"> Add an Option Set </button>
			</div>
		</div> <!-- end container -->
	</body>
</html>
