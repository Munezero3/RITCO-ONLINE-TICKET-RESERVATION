<style type="text/css">  
a
{
	color:red;
}

</style>
<div style=" width:35%;margin-top: 0px;
margin-left: 0px;" >
<center>
<nav >
<?PHP if(isset($_SESSION['id']))
				{ ?>
				 <a href="logout.php">logout</a>
<?php } else { ?>
		
				<i class="fa fa-user" style="margin-left: 50px;font-size:3em;"></i>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<font size="35px"><a href="login.php" style="color:indigo;"> Admin</a></font><br>
				<i class="fa fa-users" style="margin-left: 50px; font-size:3em"></i> 
				&nbsp;&nbsp;&nbsp;&nbsp;
<font size="35px"><a href="udashboard.php" style="color:indigo;"> passenger</a></font>
			<?php } ?>
		</nav>
		</center>
	</div>
	