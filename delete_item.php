<?php

include 'db_connect.php';
if($_SESSION['username'] != "admin")
{
	header('Location: index.php');	
}

if ($_GET['confirmed'] == true) {
	$id = $_GET['item_id'];
	$name = $_GET['item_name'];
	$query = "DELETE FROM ConnectionsMenu WHERE item_id = " . $id;
	$result = mysqli_query($db, $query);
	echo 'deleted item: ' . $name;
	echo '
	<script type="text/javascript">
		window.location = "http://www.theconnectionsconnection.us/database_admin.php";
	</script>
	';
}
else
{
	$id = $_POST['item_id'];
	$name = $_POST['item_name'];
	$alertMsg = 'Are you sure you wish to delete ' . $name . ' from the database?';

	echo '
		<script type="text/javascript">
			var r = confirm("'.$alertMsg.'");

			if (r == true)
			{
				document.write("deleting...");
				window.location = "delete_item.php?confirmed=true&item_id='.$id.'&item_name='.$item_name.'";
			}
			else
			{
				document.write("redirecting back to previous page...");
				window.location = "http://www.theconnectionsconnection.us/database_admin.php";
			}
		</script>
	';
}

?>
