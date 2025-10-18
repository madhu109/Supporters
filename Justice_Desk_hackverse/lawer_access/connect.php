<?php
// Database connection parameters
$DB_HOST = "localhost"; // Your database host, e.g., localhost
$DB_USERNAME = "root";  // Your database username
$DB_PASSWORD = "";      // Your database password
$DB_NAME = "justicedesk"; // Your database name

// Create a new database connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
