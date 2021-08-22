<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '','ritco');

$phone=$_POST['phoneNumber'];
$email=$_POST['emailAddress'];

if(empty($email) || empty($phone))
{
  header("Location:contact us.php ?error=empty");
  exit();
}
else
{
    $sql="SELECT* FROM contact us WHERE email='$email';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1)
    {
        header("Location:contact us.php ?error=email");
        exit();
    }
    else
    {
        while ($row=mysqli_fetch_assoc($result)) 
        {

            if(phone_verify($phone,$row['phoneNumber']))
            {
                $_SESSION['name']=$row['phoneNumber'];
          echo 'You have succcessfully šent comment';
                exit();
            }
            else
            {
               header("Location:contact us.php?error=pwd");
               exit(); 
            }
        }
    }
}
?>