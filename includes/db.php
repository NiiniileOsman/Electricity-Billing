<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection

$con =  mysqli_connect($servername,$username,$password,"$dbname");

if (!$con) {
	
	die("Could Not Connect:" .mysqli_connect_error());
}




?>