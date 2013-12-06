<?php
include 'db_connect.php';
if($_SESSION['username'] != "admin")
{
	header('Location: index.php');	
}

$img_dir = 'images/food_images/';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
        <script>
	        function checkForm(){
	        	var myForm = document.getElementById('searchForm');
	        	if(myForm.getElementsByTagName("input")[0].value == "")
	        	{
	        		alert("Enter something in the search field!");
	        		return false;
	        	} else {
	        		return true;
	        	}
	        }
        </script>
	</head>
	<body>
		<div id="container">
			
			<?php
				include 'banner.php';
				
				$query = "SELECT * FROM ConnectionsMenu";
				$result = mysqli_query($db, $query);
				if(!$result) { die("Database access failed: " . mysql_error()); }
				
			?>
			<form id="searchForm" onsubmit="return checkForm()" action="database_admin.php" method="get">
				<input type="search" name="q" />
				<button type="submit">Submit</button>
			</form>
			<form id="createNewItem" action="database_admin.php" method="POST">
				<button type="submit" name="create_new_item">Create new item</button>
			</form>
			<br />
			<div class="scrollable">
					<div class= "scrollable-wrapper">
				
			<?php
				
				if(isset($_GET['q']) && $_GET['q']!=="") 
				{
					//view search results
					$q = $_GET['q'];
					$rows = mysqli_num_rows($result);
					for($j = 0; $j < $rows; $j++)
					{ 
						$row = mysqli_fetch_row($result);
						$lowerQ = strtolower($q);
						$lowerRow1 = strtolower($row[1]);
						if(strpos($lowerRow1, $lowerQ) !== false)
						{
							$hasResults = true;
			?>

			<div class="item">

			<?php
							echo '<span>ID</span>: ' . $row[0] . '<br/ >';
							echo '<span>Name</span>: ' . $row[1] . '<br/ >';
							echo '<span>Category</span>: ' . $row[2] . '<br/ >';
							echo '<span>Description</span>: ' . $row[3] . '<br/ >';
							echo '<span>Price</span>: ' . $row[4] . '<br/ >';
							echo '<span>Options</span>: ' . $row[5] . '<br/ >';
							echo '<span>Image</span>: ' . $row[6] . '<br/ >';
							echo '<img src="' . $img_dir . $row[6] . '" alt="' . $row[6] . '" height="60px" /><br/ >';
							echo '
							<form action="edit_item.php" method="POST">
								<input type="hidden" name="item_id" value="' . $row[0] . '" />
								<input type="submit" value="EDIT RECORD" />
							</form>
							<form action="delete_item.php" method="POST">
								<input type="hidden" name="item_id" value="' . $row[0] . '" />
								<input type="hidden" name="item_name" value="' . $row[1] . '" />
								<input type="submit" value="DELETE RECORD" />
							</form>
							';
							echo '<br />';
			?>

			</div> <!-- end item -->

			<?php
						} // end if
					} // end for
					
					if(!isset($hasResults)) { echo 'No items found matching string ' . $q; }		
					
				} // end outer if
				elseif (isset($_POST['create_new_item'])) {
					include 'create_new_item.php';
				}
				else // else ($q is not set)
				{
					$rows = mysqli_num_rows($result);
					for($j = 0; $j < $rows; $j++)
					{
			?>

			<div class="item">

			<?php
						$row = mysqli_fetch_row($result);

						echo '<span>ID</span>: ' . $row[0] . '<br/ >';
						echo '<span>Name</span>: ' . $row[1] . '<br/ >';
						echo '<span>Category</span>: ' . $row[2] . '<br/ >';
						echo '<span>Description</span>: ' . $row[3] . '<br/ >';
						echo '<span>Price</span>: ' . $row[4] . '<br/ >';
						echo '<span>Options</span>: ' . $row[5] . '<br/ >';
						echo '<span>Image</span>: ' . $row[6] . '<br/ >';
						echo '
						<form action="edit_item.php" method="POST">
							<input type="hidden" name="item_id" value="' . $row[0] . '" />
							<input type="submit" value="EDIT RECORD" />
						</form>
						<form action="delete_item.php" method="POST">
							<input type="hidden" name="item_id" value="' . $row[0] . '" />
							<input type="hidden" name="item_name" value="' . $row[1] . '" />
							<input type="submit" value="DELETE RECORD" />
						</form>
						';
						echo '<br />';
			?>

			</div> <!-- end item -->

			<?php
					} // end for
				} // end outer else
			?>

		</div><!--end scrollable-wrapper -->
		</div><!-- end scrollable-->
		</div><!-- end container -->
	</body>
</html>
