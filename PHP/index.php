<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<?php
		include ("actions/db_connect.php");

		$sql = "SELECT * FROM meal";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows == 0) {
			echo "No result";
		} elseif ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			echo $row["name"]. " ". $row["price"]. " ".$row["ingredients"]. " ". $row["allergens"]. " ". $row["image_url"];
		} else {
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) {
				echo $value["meal_id"]. " --- ". $value["name"]. " ". $value["price"]. " ".$value["ingredients"]. " ". $value["allergens"]. " ". $value["image_url"]. "<a href='update.php'>Update</a><br>";
			}
		}
	?>
</body>
</html>