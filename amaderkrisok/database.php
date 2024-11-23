<?php
$hostName = "localhost"; 
$dbuser = "root";        
$dbpassword = "";       
$dbname = "amaderkrisok_register";

$conn = new mysqli($hostName, $dbuser, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
