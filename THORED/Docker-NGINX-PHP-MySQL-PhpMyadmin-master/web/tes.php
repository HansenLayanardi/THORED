<?php
$host = "db";
$username = "root";
$password = "mypass";
$dbname = "thored_ver_1";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userId, firstName, lastName FROM thoredUser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["userId"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>