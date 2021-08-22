<?php

include 'conn.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $driverName = $_POST['driverName'];
    $phone = $_POST['phone'];
    $userId = $_POST['userId'];



        $sql = "INSERT INTO driver(driver_id,driver_name,driver_contact,user_id)VALUES('',\"$driverName\",\"$phone\",\"$userId\")";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('successfully registered')</script>";
        }else{
            echo 'failed to register' . mysqli_error($conn);
        }
  

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form class="login-email" action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Driver</p>
            <div class="input-group">
                <input type="text" placeholder="driverName" name="driverName" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Tel" name="phone" value="" required>
            </div>
       
            <div class="input-group">
                <input type="text" placeholder="ID" name="userId" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>