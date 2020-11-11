<?php 
	$hostName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "restaurant";

	$conn = mysqli_connect($hostName, $userName, $password, $dbName);

	if (!$conn) {
		echo "error";
	}
?>