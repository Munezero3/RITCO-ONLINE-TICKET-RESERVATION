<?php 
$conn = mysqli_connect('localhost', 'root', '','ritco');

if(!$conn)
{
echo 'Connection error: '. mysqli_connect_error();
}
?>