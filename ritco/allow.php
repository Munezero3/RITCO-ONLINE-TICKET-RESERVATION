<?php
include('conn.php');
$decision=$_GET['decision'];
$id=$_GET['id'];
if($decision=='booked')
{
	$SQL="UPDATE book SET decision='booked' WHERE Id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert(' booked')</script> ";
	
	header("Location:book.php?id=$id");
	exit();
}
elseif ($decision=='not booked')
{
	$SQL="UPDATE  SET decision='not booked ' WHERE Id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('ticket not booked')</script> ";
}

 ?>