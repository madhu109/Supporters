<?php
// Returns users for sidebar based on role
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) { echo json_encode([]); exit; }

$my_id = (int)$_SESSION['user_id'];
$role = $_SESSION['role'];

// If current user is a lawyer: show list of users (clients)
// If current user is a user: show list of lawyers
if ($role === 'lawyer') {
  $sql = "SELECT id, name, email FROM users WHERE role='user'";
} else {
  $sql = "SELECT id, name, email FROM users WHERE role='lawyer'";
}
$res = $conn->query($sql);
$rows = [];
while($r = $res->fetch_assoc()) $rows[] = $r;
echo json_encode($rows);
?>