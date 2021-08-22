
<?php 
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {background-image: url('images/rt2.jpg');
background-repeat: no-repeat;
background-size: cover;
  margin:0;font-family:Arial}

.topnav {
  margin-right: 80px; 
  float: right;
    width: 80px;
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color:  yellowgreen;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}.topnav .icon {

  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color:black;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: black;
}

.dropdown-content a {
  float: none;
  color:white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  width: 80px;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: yellowgreen;
  color: yellowgreen;
}

.dropdown-content a:hover {
  background-color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <div class="dropdown">
    <button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adUpdate.php">my_account</a>
      <a href="logout.php">Logout</a>
    </div>
  </div> 
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
