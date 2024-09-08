<?php
  $servername = "localhost";
  $username = "mydb10";
  $password = "";
  $dbname = "mydb10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>