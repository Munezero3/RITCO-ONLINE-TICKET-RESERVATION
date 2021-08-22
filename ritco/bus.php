<?php

include 'conn.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $busNumber = $_POST['busNumber'];
    $busPlateNumber = $_POST['busPlate'];
    $busType = $_POST['busType'];
    $capacity = $_POST['capacity'];

        $sql = "INSERT INTO bus(bus_id,bus_number,bus_platenumber,bus_type,capacity)VALUES('',\"$busNumber\",\"$busPlateNumber\",\"$busType\",\"$capacity\")";
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Bus</p>
            <div class="input-group">
                <input type="text" placeholder="busNumber" name="busNumber" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="busPlate" name="busPlate" value="" required>
            </div>
       
            <div class="input-group">
                <input type="text" placeholder="busType" name="busType" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="capacity" name="capacity" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>