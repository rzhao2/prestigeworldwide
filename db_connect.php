<?php
session_start();

$db_hostname = "theccdb.db.12066565.hostedresource.com";
$db_username = "theccdb";
$db_password = "Q!@Wq12w";
$db_name = "theccdb";
				
$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if(!$db) { die("Unable to conect to MySQL: " . mysql_error()); }


?>