<?php

include 'db_connect.php';

if($_SESSION['username'] != "admin")
{
	header('Location: index.php');	
}

$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];
$options = $_POST['options'];

if(isset($image))
{
	$image = $_POST['image'];
	$query = "UPDATE ConnectionsMenu SET item_name='$item_name', category='$category', description='$description', price='$price', options='$options' WHERE item_id=$item_id";
}
else
{
	$query = "UPDATE ConnectionsMenu SET item_name='$item_name', category='$category', description='$description', price='$price', options='$options' WHERE item_id=$item_id";
}

$result = mysqli_query($db, $query);

if(!$result)
{
	die ("Invalid data entry: " . mysqli_error($db));
}
else
{
	header('Location: database_admin.php');
}

?>
