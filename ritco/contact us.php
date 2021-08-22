<?php
include('conn.php');
?>
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
  background-image: url("images/rt2.JPG"); 
background-size=" no cover"; 
background-repeat="no-repeat">

}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: grey;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
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

/* Style the content */
.content {
  background-image: url("back3.file");
  padding: 10px;
  background-repeat: no-repeat;
background-size: cover; 
  height: 550px; /* Should be removed. Only for demonstration */
}
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
  padding: 10px;
}
.footer p {
        font-family: initial;
        color: blue;
        font-size: 17px;
  }
</style>
<body >
  <?php
  if(isset($_GET['error']) && $_GET['error']=="empty")
  {
  header('location:contact us.php');
  }
  elseif (isset($_GET['error']) && $_GET['error']=="email") 
  {
    echo 'Wrong email!';
  }
  elseif (isset($_GET['error']) && $_GET['error']=="phoneNumber") 
  {
    echo 'Wrong phoneNumber!';
  }
  ?>
 <div class="topnav">
  <a href="home1.php">HOME</a>
  <a href="book.php">book</a>
  <a href="image.php">image</a> 
  <a href="login.php">login</a>
  <a href="price and duation.php">price and duration</font></a>
  
    <a href="log out">log out</a>
    </div>
<div class="m-logo-wrap" >
                <a href="//www.made-in-rwanda.com/" title="ritco express" class="m-logo"></a>
        </div>
<form action="cntact.php " method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.EmailAddress.value == "") { alert('Email address is required.'); frm.EmailAddress.focus(); return false; }
if (frm.EmailAddress.value.indexOf("@") < 1 || frm.EmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.EmailAddress.focus(); return false; }
if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
return true; }
</div>
<script>
        var __IS_USER_LOGED__ =  false ;
</script>                <div class="m-header-menu-gap"></div>
</script>
<table style="width:100%;max-width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>
<label for="Name"><font size="" color="blue">Name:</font></label>
</td> <td>
<input name="Name" type="text" maxlength="60" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="PhoneNumber"><font size="" color="blue">Phone number:</font></label>
</td> <td>
<input name="PhoneNumber" type="text" maxlength="43" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="EmailAddress"><font size="" color="blue">Email address:</font></label>
</td> <td>
<input name="EmailAddress" type="text" maxlength="90" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="Comments"><font size="" color="blue">Comments:</font></label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:100%;max-width:350px;"></textarea>
</td> </tr> <tr> <td>
 </font></p>

</td> <td>
<input name="skip_Submit" type="submit" value="Submit" />

</td> </tr>
</table>
</form>
</body>
</html>

