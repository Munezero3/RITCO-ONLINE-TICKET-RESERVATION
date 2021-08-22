<?php
session_start();
if(!isset($_SESSION['id']))
{
   header("Location:home1.php");
   exit();
}
?>
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
include('account_logout.php');
?>
<?php
include('conn.php');
// Check connection 
if (!$conn) {
    die("Connection failed: " . $mysqli_eeror($conn));
}

$sql = "SELECT* FROM accounts WHERE id='".$_GET['id']."';";
$result = mysqli_query($conn,$sql);

if(!$result) {
	 echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
	 else{?><center style="font-size: 2.5em;">
	 <p>MY ACCOUNT  Details </p>
</center><center>
<table border="4"cellpadding="5" cellspacing="10" style="width: 80%;">
			   <tr>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Email</th>
				  <th colspan="3">Action</th>
			   </tr>
			<?php	
    while($row = mysqli_fetch_array($result)) {?>


<tr>
   <td><?php echo $row["firstname"]; ?></td>
   <td><?php echo $row["lastname"]; ?></td>
   <td><?php echo $row["email"]; ?></td>
  <td><a href="addetails.php?id=<?php echo $row['id']; ?>">View</a></td>
					<td><a href="adUpdate.php?id=<?php echo $row['id']; ?>">Edit</a></td>
					<td><a href="adDelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
				<?php 
			}
			echo "</table> 	</center>";
	   }
   //
?>
<?php

include('footer.php');

?>
</body>
	</html>