<!DOCTYPE html>
<html lang="en">
<head>
<title>www.ritco.com</title>
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
background-image: url("images/rt1.JPG")
 box-sizing: border-box;
  font-family: sans-serif;
	margin: 0;
	width:100%;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
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
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.content a:hover {
  background-color: #ddd;
  color: blue;
  text-align: center;
  }


/* Style the footer */
.footer {
  background-color: #333;
 height: 200px;
}
 p {
        font-family: initial;
        color: white;
        font-size: 17px;
  }
	.welcome 
	{
		position: relative;
		text-align: center;			
		
	}
	
</style>
<body>
 <div class="topnav">
  <a href="home1.php">HOME</a>
  <a href="booking.php">booking</a>
  <a href="contact us.php">contact us</a>
  <a href="login.php">login</a>

  <a href="price and duration.php">price and duration</a>
  
  <input type="text" placeholder=" search...."/>
	</div><center>
<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="images/dd.jfif" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="images/aaa.jfif" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="images/cc.jfif" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="images/dd.jfif" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="images/eee.jfif" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="images/aaa.jfif" style="width:80%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>
  </div>
</div>
 </div>
<center><div class="footer">
  <p>2021 Copyright/allright reserved/ RITCO EXPRESS</p>
</div></
</body>
</html>