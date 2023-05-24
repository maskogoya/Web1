<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asrama";

// Create connection
$con = mysqli_connect ($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "koneksi gagal: " . mysqli_connect_error(); 
}

?> 