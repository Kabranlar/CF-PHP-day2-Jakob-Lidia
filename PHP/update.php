<?php
	require_once 'actions/db_connect.php';
	if ($_GET["meal_id"]) {
		$meal_id = $_GET["meal_id"];
		$sql = "SELECT * FROM meal WHERE meal_id = $meal_id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="actions/a_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['meal_id'] ?>">
		<input type="text" name="name" value="<?php echo $row['name'] ?>">
		<input type="text" name="price" value="<?php echo $row['price'] ?>">
		<input type="text" name="ingredients" value="<?php echo $row['ingredients'] ?>">
		<input type="text" name="allergens" value="<?php echo $row['allergens'] ?>">
		<input type="text" name="image_url" value="<?php echo $row['image_url'] ?>">
		<input type="submit">
	</form>
</body>
</html>