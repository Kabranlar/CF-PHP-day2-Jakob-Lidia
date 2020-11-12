<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<!-- bs.css -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type ="text/css">
   	.manageTable {
       width : 80%;
       margin: auto;
    }

    table {
       	width: 100%;
    	margin-top: 20px;
   	}

   	td {
		width: 25% ;
	}
   </style>
</head>

<body>

	<div class ="manageTable">
	   	<a href= "create.php"><button type="button">Add Meal</button></a>
	   	<table  border="1" cellpadding="5">
	       <thead>
	           <tr>
	               <th>Name</th>
	               <th>Price</th>
	               <th>Ingredients</th>
	               <th>Allergens</th>
	               <th>Image</th>
	               <?php
		               	include ("actions/db_connect.php");
	                    $sql = "SELECT * FROM meal";
	                    $result = mysqli_query($conn, $sql);
	                    if($result->num_rows > 0) {
	                        echo "<th>Edit</th>
	                    		<th>Delete</th>";
	                    } 
                   ?>
	           </tr>
	       </thead>
	       <tbody>
				<?php
					include ("actions/db_connect.php");

					$sql = "SELECT * FROM meal";
					$result = mysqli_query($conn, $sql);
					$conn->close();

					if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                   	echo "<tr class='text-center'>
		                       	<td>".$row['name']."</td>
		                       	<td>".$row['price']."</td>
		                       	<td>".$row['ingredients']."</td>
		                       	<td>".$row['allergens']."</td>
		                       	<td><img class='img-fluid' src='".$row['image_url']."'</td>
		                       	<td><a href='update.php?meal_id=".$row['meal_id']."'><button type='button'>Edit</button></a></td>
                                <td><a href='delete.php?meal_id=".$row['meal_id']."'><button type='button'>Delete</button></a></td>
		                   		</tr>";
		               	}
		           	} else  {
	               		echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		           	}
				?>
       		</tbody>
	   	</table>
	</div>
</body>
</html>