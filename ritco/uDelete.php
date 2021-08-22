<?php
   include("conn.php");
   
   $r = "DELETE FROM account WHERE Id =".$_GET['id'].";";
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	  header('location:home1.php');
   }
       
   
?>