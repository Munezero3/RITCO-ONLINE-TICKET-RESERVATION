<?php
include('conn.php');
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url('images/rt2.jpg');
background-repeat: no-repeat;
background-size: cover;
}
* {box-sizing: border-box}



} input {
    width: 40%;
        color:rgb(3, 3, 3);
    padding: 20px 30px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    background-color: white;
  
  }label{
    display: inline-block;
    float:left;
        width: 250px;
}/*style the model content box*/ 
form{
        float:right;
    width: 30%;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  padding: 10px;
margin-bottom:30px;
height:auto;
background-color:cadetblue;"

    } /* set a hover effect for the button*/
  button:hover {
    opacity: 0.8;
    }
</style>
<body>
<?php
include('sign.php');
?>
<div style="align-items: center;">
  <form action="signup.php" method="POST" style="height: 600px;">
    <div>
      <h1>sign up here</h1>
      <label for="firstname"><b> First name:</b></label>
      <input type="text" placeholder="enter your first name" name="firstname" required maxlength="30" style="  float:right;">
<br><br>
      <label for="lastname"><b>Last name:</b></label>
      <input type="text" placeholder="enter your second name" name="lastname" required maxlength="30"style="  float:right;">
<br><br>
 <label for="phone"><b>phone number:</b></label>
      <input type="phone" placeholder="Enter your phone" name="phone" required maxlength="10"style="  float:right;">
<br><br>
      <label for="email"><b> Email:</b></label>
      <input type="email"placeholder="enter your email" name="email" required maxlength="50"style="  float:right;">
<br><br>
		<label for="password"><b> Password:</b></label>
    <input type="password" placeholder="create password" name="password" id="myInput" required minlength="10"maxlength="25"style="  float:right;">
<br><br>
		<label for="password"><b> confirm password:</b></label>
    <input type="password" placeholder="confirm the entered password" name="conpassword" id="myInput" required minlength="10"maxlength="25"style="  float:right;">
<br><br><br><br>

      <input type="submit" name="signup" value="sign up"style="align-content: bottom;border-radius: 100px;
 background-color:yellowgreen;"><br>
		<i>Do you have an account?</i><br>
 <a href="login.php" style="float:right;margin-right:20px;background-color: yellowgreen">Login</a>
    </div>
  </form> <br><br><br>
</div>

</body>
</html>
