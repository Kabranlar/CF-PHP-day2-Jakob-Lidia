<?php
require_once 'db_connect.php';
if ($_POST) {
  $meal_id = $_POST['meal_id'];

$sql = "DELETE FROM meal WHERE meal_id={$meal_id}";
  if(mysqli_query($conn, $sql)){
    echo "success <br> <a href='../index.php'> Back to Homepage</a>";
  }else {
    echo "error";
  }$conn->close();
}

?>