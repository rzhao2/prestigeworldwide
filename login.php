<?php
//test
session_start();

$id = $_POST['username'];

include 'db_connect.php'; 
$query = "SELECT * FROM Student_info WHERE student_id = $id";
$result = mysqli_query($db, $query);
if(!$result) { 

	$_SESSION['username'] = "admin";

}
else
{
	$row = mysqli_fetch_row($result);
	$name = $row[2];

	$_SESSION['username'] = $name;
	$_SESSION['id'] = $id;
}
//echo "success!";
header('Location: index.php');
?>