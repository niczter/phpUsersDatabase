<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpusers";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `phpuserslist`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='view.php?id=".$row['id']."'>view</a> | <a href='edit.php?id=".$row['id']."'>edit</a> |  ".$row['fname']." ".$row['lname']."<br>";
    }
}
//DELETE FROM `phpuserslist` WHERE `phpuserslist`.`id` = 25
//UPDATE `phpuserslist` SET `fname` = 'f13.2', `lname` = 'l13.2', `email` = 't13.2@email.com', `number` = '12345678901.2' WHERE `phpuserslist`.`id` = 24;
?>
<br>
<a href="register.php">Add user</a>


<script>
</script>

</body>
</html>