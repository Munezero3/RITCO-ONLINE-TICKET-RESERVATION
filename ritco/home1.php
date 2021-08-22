<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>www.ritcoexpress.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
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
  background-color:yellowgreen;
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
/* Style the footer */
.footer {
  background-color: white;
 height: 200px;
}
 .rt{
        background-color: #ffeecc;
        color: white;
        font-size: 17px;
        text-align:justify;
        border: 0;
        border-radius: 4px;
  }
	.welcome 
	{
		position: relative;
		text-align: center;			
	}
} 
	
</style>
<body>
 <div class="topnav">
  <a href="home1.php">HOME</a>
  <a href="book.php">book</a>
  <a href="contact us.php">contact us</a>
  <a href="login.php">login</a>
  <a href="image.php">image</a>
  <a href="price and duration.php">price and duration</a>
  <a href="log out">log out</a>
	</div><center>
  <div class="welcome" style="background-color: black; height: 40px;">
   <font color="white" size="16px"><h6><marquee>WELCOME TO RITCO RWANDA</marquee></h6></font>
	</div>
	</center>
 <div> <font color="gray"size="12px"></div>
   <th><font color=""size="12px"><p style="color:blue;   font-size: 24px;"> PAYMENT CODE : *182*8*1*0945641# </P></font></th>

</body>
</html>

