<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>

 <style  >   
    * {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

body {
background-image: url("images/rt2.JPG");
background-size: cover;
background-repeat:no-repeat;
 box-sizing: border-box;
  font-family: sans-serif;
    margin: 0;
    width:100%;
}
</style> >
<body >
<?php
  if(isset($_GET['error']) && $_GET['error']=="empty")
  {
  header('location:.php');
  }
  elseif (isset($_GET['error']) && $_GET['error']=="email") 
  {
    echo 'Wrong email!';
  }
  elseif (isset($_GET['error']) && $_GET['error']=="pwd") 
  {
    echo 'Wrong password!';
  }
  ?>
    <div class="container">
        <p>Admin login</p>
        <form class="login-email" action="loginn.php">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn btn-success">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a></p>
        </form>
    </div>
</body>
</html>