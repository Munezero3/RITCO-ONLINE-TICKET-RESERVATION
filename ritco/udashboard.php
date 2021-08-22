<?php;
include('sidenav.php');
	?>
<html>
<head>
<meta charset="utf-8">
<title> dashboard</title>
<link rel="stylesheet" href="box1.css">
	<style>
body{
	background-color: red;

background-image: url('images/rt1.jpg');
background-repeat: no-repeat;
background-size: cover;
}
a{
	text-decoration: none;
}

.da{
	left:150px;
background-color:transparent;
position: relative;
width: 70%;
height: 30%;
}
.db{
background-color:yellowgreen;
position: relative;
width: 30%;
height:50px;
float: left;
margin-left: 150px;
margin-top: 50px
	}
	</style>

</head>
<body background="">
	<?php 
include('sidenav.php');


	?>
		<?php 
		include('header.php');
		?>
		<div class="db">
		<center style="background-color: gray"><a href="retrieve.php" style="font-size: 20px">My profile</a></td></center>
		</div>
<div class="db">
		<center style="background-color: gray">	<a href="retrieve2.php" style="font-size: 22px">My bus Status</a></center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html
