<?php
//test
session_start();
$_SESSION['username'] = $_POST['username'];
echo "success!";
header('Location: index.php');
?>