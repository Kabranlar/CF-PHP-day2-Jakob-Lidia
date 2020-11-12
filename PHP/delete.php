<?php 
	// require_once 'actions/db_connect.php';
	// if ($_GET["meal_id"]) {
	// 	$id = $_GET["meal_id"];

	// 	$sql = "DELETE FROM meal WHERE meal_id = $id";

	// 	if (mysqli_query($conn, $sql)) {
	// 		echo "entry deleted <br> <a href='index.php'>Back to home page</a>";
	// 	}else {
	// 		echo "error";
	// 	}
	// }
	// $conn->close();
	require_once 'actions/db_connect.php';

if ($_GET['meal_id']) {
   $meal_id = $_GET['meal_id'];

   $sql = "SELECT * FROM meal WHERE meal_id = {$meal_id}" ;
   $result = mysqli_query($conn, $sql);
   $row = $result->fetch_assoc();

   $conn->close();

   ?>
<!DOCTYPE html>
<html>
<head>
   <title> Delete User</title>
</head>
<body>

<h3>Do you really want to delete this user?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "meal_id" value="<?php echo $row['meal_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"> <button type="button"> No, go back!</button ></a>
</form>

</body>
</html>
<?php
}
?>