<?php
  include("conn.php");
   if(isset($_POST['retrieve']))
	   {
	   $rqu = "SELECT * FROM pduration;";
	   $result = mysqli_query($conn,$rqu);
	   ?>
	   <table border="1">
	     <tr>
		    <th>FROM </th>
			<th>to </th>
			<th>price </th>
			<th>openingtime </th>
			<th>closingtime </th>
			<th>contact </th>
		</tr> 
	   <?php
	   while($r = mysqli_fetch_array($result))
     {
		   
		    echo "<tr><td>".$r['FROM']."</td><td>".$r['TO']."</td><td>".$r['PRICE']."</td><td>".$r['OPENINGTIME']."</td><td>".$r['CLOSINGTIME']."</td><td>".$r['CONTACT']."<td></tr>";
	        
	   }
	}
	?>