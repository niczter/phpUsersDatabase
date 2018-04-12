<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpusers";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM `phpuserslist` WHERE `id` = ".$_GET['id'];
$result = $conn->query($sql);
header("location: login.php")

?>