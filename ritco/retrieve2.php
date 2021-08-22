	<!DOCTYPE html>
	<html>
	<head>
		<title>passenger details</title>
	
	
	
	<style type="text/css">
	 		
	 		table{
	 		background-color:rgb(49, 155, 133);
	 		}
	 		body{
	 			background-color: gray;
	 		}
			 table a{
				 text-decoration: none;
			 }
	 	</style>
	 	</head>
	<body>
<?php
include('sidenav.php');
// Create connection
include('conn.php');
// Check connection 
if (!$conn) {
    die("Connection failed: " . $mysqli_eeror($conn));//the error message incase of failed to connect
}

$sql = "SELECT * FROM book";
$result = mysqli_query($conn,$sql);

if(!$result) {
	 echo "Something is wrong".mysqli_error($con);}
    // output data of each row
	 else{?>
<table border="4"cellpadding="5" cellspacing="5" style="width: 80%;">
			   <tr>
	 	            <th>First Name</th>
				  <th>Last Name</th>
				  <th>contact</th>
				  <th>from_place</th>
				  <th>d_date</th>
				  <th>to_place</th>
				  <th>r_date</th>
				  <th  style="background-color:gray;">Decision</th>
				  <th  style="background-color:gray;">bus plate</th>
				  <th  style="background-color:gray;">seat</th>
			   </tr>
			<?php	
    while($row = mysqli_fetch_assoc($result)) {?>

<tr>
   <td><?php echo $row["firstname"]; ?></td>
   <td><?php echo $row["lastname"]; ?></td>
   <td><?php echo $row["contact"]; ?></td>
   <td><?php echo $row["from_place"]; ?></td>
   <td><?php echo $row["d_date"]; ?></td>
   <td><?php echo $row["to_place"]; ?></td>
   <td><?php echo $row["r_date"]; ?></td>
   <td><?php echo $row["Decision"]; ?></td>
   <td><?php echo $row["bus_plate"]; ?></td>
   <td><?php echo $row["seat"]; ?></td>
  </tr>
				<?php 
			}
			echo "</table>";
	   }
   //
?>
<?php

include('footer.php');

?>
</body>
	</html>