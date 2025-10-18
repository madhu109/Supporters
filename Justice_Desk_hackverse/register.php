<?php
// Include database connection
include 'connect.php';

if ($_SERVER['justicedesk'] == 'POST') {
    // Retrieve and sanitize user inputs
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $caseType = trim($_POST['Select_type_of_case'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($caseType) || empty($phone) || empty($message)) {
        echo "<script>alert('All fields are required!');</script>";
        exit();
    }

    // Validate phone number format (e.g., 10 digits)
    if (!preg_match('/^\d{10}$/', $phone)) {
        echo "<script>alert('Invalid phone number format! Please enter a 10-digit phone number.');</script>";
        exit();
    }

    // Use prepared statements to insert data securely
    $stmt = $conn->prepare("INSERT INTO cases (firstName, lastName, case_type, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $caseType, $phone, $message);

    // Execute and check if the query was successful
    if ($stmt->execute()) {
        echo "<script>
            alert('Case registered successfully!');
            window.location.href = 'index.php'; // Redirect to a thank-you page
        </script>";
    } else {
        echo "<script>alert('Error registering the case: " . $conn->error . "');</script>";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
