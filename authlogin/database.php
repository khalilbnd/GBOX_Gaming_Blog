<?php


// Create connection
$DatabaseConnection = new mysqli("localhost", "dawProject", "htcssphp456", "formdaw");

// Check connection
if (!$DatabaseConnection) {
  die("Connection Failed: " . mysqli_connect_error());
} 
?>
