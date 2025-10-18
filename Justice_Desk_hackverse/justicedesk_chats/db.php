<?php
// db.php - update credentials as needed
$servername = "localhost";
$username = "root";
$password = "";
$database = "justicedesk";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>