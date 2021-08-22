<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'ritco');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM driver";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>driver_id</th><th>driver_name</th><th>driver_contact</th><th>user_id</th><th>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["driver_id"]. "</td><td>" . $row["driver_name"]. " </td><td>" . $row["driver_contact"]."</td><td> ". $row["user_id"]."</td></tr>";
    }
    echo "</table>";
}
 else {
  echo "0 results";
}
$conn->close();
?>