<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ducati";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/*// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	echo "Conection database " . $dbname ." successful <br><br><br>";
}*/
// Another page use <?php include "config.php"; 
mysqli_set_charset($conn,'utf8');
?>
