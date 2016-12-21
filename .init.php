<?php
	
ini_set("display_errors",1);

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "nombasedonnée";

$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4",$username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>
