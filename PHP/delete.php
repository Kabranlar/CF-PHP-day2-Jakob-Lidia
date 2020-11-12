<?php 
	require_once 'actions/db_connect.php';
	if ($_GET["meal_id"]) {
		$id = $_GET["meal_id"];

		$sql = "DELETE FROM meal WHERE meal_id = $id";

		if (mysqli_query($conn, $sql)) {
			echo "entry deleted <br> <a href='index.php'>Back to home page</a>";
		}else {
			echo "error";
		}
	}
	$conn->close();
?>