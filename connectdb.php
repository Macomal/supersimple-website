<?php
$servername = "34.172.216.221:3306";
$username = "Macomal1234!";
$password = "@100Islands";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected successfully";
}
?> 