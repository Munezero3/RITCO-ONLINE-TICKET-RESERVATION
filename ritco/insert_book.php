<?php
//if($_SERVER['REQUEST_METHOD']=="POST")
	if(isset($_POST['submit']))
{
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $contact=$_POST['contact'];
 $from=$_POST['from'];
 $d_date=$_POST['ddate'];
  $to=$_POST['to'];
  $r_date=$_POST['rdate'];
$sql=" SELECT * FROM book WHERE contact='$contact'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  echo "<script> alert('You have already booked the ticket')</script>";
  exit();
}

  $sql="INSERT INTO book (firstname,lastname,contact,from_place,d_date, to_place,r_date) values ('$firstname','$lastname','$contact','$from','$d_date','$to','$r_date') ORDER BY id Asc";

if ( preg_match("/^[a-zA-Z]*$/",$firstname) and preg_match("/^[a-zA-Z]*$/",$lastname)  and preg_match('/^[0-9]*$/',$contact)) {
   // success!
    mysqli_query($conn,$sql);
	    header("Location: book.php");
}
else { 
  echo '<center style="color:red">there is an error in Your input</center><br>';
  
  if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
    # code...
       echo '<center style="color:red">Names can only be written in upper or lowercase letters only</center>';
  }
  elseif (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
    # code...
       echo '<center style="color:red">Names can only be written in upper or lowercase letters only</center>';
  }
 else {
    # code...
    echo '<center style="color:red">invalid phone  number</center>';
  }}}
?>