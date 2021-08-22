
<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>www.ritco.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
	margin: 0;
}

body {
 box-sizing: border-box;
  font-family: sans-serif;
	margin: 0;
	width:100%;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:black;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color:black;
  color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
/* Style the content */
.content a{
  float: center;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.content a:hover {
  background-color: #333;
  color: blue;
  text-align: center;
  }
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

} input {
    width: 40%;
        color:rgb(3, 3, 3);
    padding: 9px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    background-color: white;
    float: left;
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
</head>
<body background="images/rt2.jpg"style="background-size:cover;background-repeat:norepeat;">
<?php
include('insert_book.php');
?>
 <div class="topnav">
  <a href="home1.php">HOME</a>
  <a href="contact us.php">contact us</a>
  <a href="login.php">login</a>
  <a href="image.php">image</a>
  <a href="price and duration.php">price and duration</a>
	</div><div>
  <div class="container">
  <form action="book.php" method="POST">
    <div>
      <h1>Fill the required details</h1>
      <label for="firstname"><b> First name:</b></label>
      <input type="text" placeholder="enter your first name" name="firstname" required>
<br><br>
      <label for="lastname"><b>Last name:</b></label>
      <input type="text" placeholder="enter your second name" name="lastname" required>
<br><br><label for="contact"><b>Contact</b></label>
     <input type="text" name="contact" placeholder="your phone number.." maxlength="10" required>
<br><br>
      
   <label for="from"><b>From</b></label>
    <input type="text" id="from" name="from" placeholder="from where.." required>
    <br><br><label for="departure date"><b>departure_date</b></label>
     <input type="date" name="ddate" placeholder="enter date" required>
<br>
<label for="to"><b>To</b></label>
    <input type="text" id="to" name="to" placeholder="going to..." required>
    <br><br><label for="return date"><b>return_date</b></label>
     <input type="date" name="rdate" placeholder="enter date">
     <br><br><br><br>

      <input type="submit" name="submit" value="submit"style="align-content: bottom;border-radius: 100px;
 background-color:yellowgreen;"><br>
 </form>
</div>
</body>
</html>
