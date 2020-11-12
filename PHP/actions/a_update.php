<?php 
	require_once 'db_connect.php';

	if ($_POST) {
		$id = $_POST["id"];
		$name = $_POST["name"];
		$price = $_POST["price"];
		$ingredients = $_POST["ingredients"];
		$allergens = $_POST["allergens"];
		$image_url = $_POST["image_url"];

		$sql = "UPDATE `meal` SET `name` = '$name', `price` = '$price', `ingredients` = 'ingredients', `allergens` = '$allergens', `image_url` = '$image_url' WHERE meal_id = $id";

		if (mysqli_query($conn, $sql)) {
			echo "success <br> <a href='../index.php'>Back to home page</a>";
		}else {
			echo "error";
		}
	}
?>