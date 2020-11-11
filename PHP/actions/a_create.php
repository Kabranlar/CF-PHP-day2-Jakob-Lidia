<?php
	require_once 'db_connect.php';

	if ($_POST) {
		$name = $_POST["name"];
		$price = $_POST["price"];
		$ingredients = $_POST["ingredients"];
		$allergens = $_POST["allergens"];
		$image_url = $_POST["image_url"];

		$sql = "INSERT INTO meal(name, price, ingredients, allergens, image_url) VALUES ('$name', '$price', '$ingredients', '$allergens', '$image_url')";

		if(mysqli_query($conn, $sql)) {
			echo "success <br><a href='../index.php'>Back to the home page</a>";
		} else {
			echo "error blabla";
		}
	}
?>