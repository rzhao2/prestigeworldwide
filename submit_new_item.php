<?php

include 'db_connect.php';
if($_SESSION['username'] != "admin")
{
	header('Location: index.php');	
}

$item_name = $_POST['item_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];
$options = $_POST['options'];
$image = $_POST['image'];

$query = "INSERT INTO ConnectionsMenu VALUES(NULL, '$item_name', '$category', '$description', '$price', '$options', '$image')";
$result = mysqli_query($db, $query);

$alertFailMsg = 'Insertion of ' . $item_name . ' failed.';
$alertSuccessMsg = 'Insertion of ' . $item_name . ' successful.';

if(!$result)
{
	die ("Insert unsuccessful: " . mysql_error());
	echo '
	<script type="text/javascript">
		alert("'.$alertFailMsg.'");
		window.location = "http://www.theconnectionsconnection.us/create_new_item.php";
	</script>
	';
}
else
{
	echo '
	<script type="text/javascript">
		alert("'.$alertSuccessMsg.'");
		window.location = "http://www.theconnectionsconnection.us/database_admin.php";
	</script>
	';
}

?>
