<?php
session_start();
if($_SESSION['username'] != "admin") {
	header('Location: index.php');	
}
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

				$db_hostname = "theccdb.db.12066565.hostedresource.com";
				$db_username = "theccdb";
				$db_password = "Q!@Wq12w";
				$db_name = "theccdb";
				
				$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
				if(!$db) { die("Unable to conect to MySQL: " . mysql_error()); }
				
				$query = "SELECT * FROM ConnectionsMenu";
				$result = mysqli_query($db, $query);
				if(!$result) { die("Database access failed: " . mysql_error()); }
				
				$rows = mysqli_num_rows($result);
				for($j = 0; $j < $rows; $j++)
				{
					$row = mysqli_fetch_row($result);
					echo '<span>ID</span>: ' . $row[0] . '<br/ >';
					echo '<span>Name</span>: ' . $row[1] . '<br/ >';
					echo '<span>Category</span>: ' . $row[2] . '<br/ >';
					echo '<span>Description</span>: ' . $row[3] . '<br/ >';
					echo '<span>Price</span>: ' . $row[4] . '<br/ >';
					echo '
					<form action="edit_item.php" method="POST">
						<input type="hidden" name="item_id" value="$row[0]" />
						<input type="submit" value="EDIT RECORD" />
						<input type="submit" value="DELETE RECORD" />
					</form>
					';
					echo '<br />';
				}	
			
			?>

		</div><!-- end container -->
	</body>
</html>