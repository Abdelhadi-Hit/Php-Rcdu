<?php
$servername = "localhost"; // if didn't work use ip 
$username = "root";
$password = "";
$dbname = "phpDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
